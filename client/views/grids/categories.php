<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">
	
	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>
	
	<!--
	<div class="splitter-holder" style="position: absolute;
													top: 40px;
													left: 0;
													right: 0;
													bottom: 0;">
	
	<div 	class="splitter-holder-inner" 
			style="height:100%"
			data-role="splitter" 
			data-orientation="horizontal" 
			data-panes="[{min:'200px', collapsible: true},{size:'455px', min:'200px', collapsible: true}]" 
			>
			
		<div id="left-pane" class="units-container" style="right:40px; height:100%; overflow-y:hidden;">
	-->
			<div class="mmsch-grid" id="grid-categories"></div>
	<!--
		</div>

		<div id="right-pane" class="preview-pane unpinned" style="z-index:999">
			<div class="summary-pane"></div>
			<button class="preview-pane-toggle-button" type="button">
				<i class="fa fa-chevron-right"></i>
				<i class="fa fa-chevron-left"></i>
				<span class="pin-text">Pin preview pane</span>
				<span class="unpin-text">Unpin preview pane</span>
			</button>
		</div>

	</div>
	
	</div>
	-->
	
</div>

<script type="text/javascript">
	
	(function(){ 
		
		var mmsch=function(){};
		
		mmsch.prototype = {
			
			$gridPane: null,
			$previewPane: null,
			$mainSectionPane: null,
			$sideMenuNav: null,
			_hoverUnpinnedTimeout:null,
			
			
			postLoadInit: function(){
				
				var self = this;
				
				self.$gridPane = $('.splitter-holder-inner div#left-pane:first');
				self.$previewPane = $('.splitter-holder-inner div#right-pane:first');
				self.$mainSectionPane = $('#main-splitter-inner section:first');
				self.$sideMenuNav = $('#main-splitter-inner nav:first');
			},
			
			postLoadCallbacks: function(){
				
				var self = this;
				console.log(self.$previewPane);
				
				if ( self.$previewPane.hasClass("unpinned") ){
					
					var r = (self.$previewPane.width()-40)*-1;
					
					self.$previewPane.removeClass("pinned").addClass("unpinned");
					self.$gridPane.css({"width":"auto"});
					self.$previewPane.css({"left":"auto", "right": r + "px"});
			
					$('.splitter-holder-inner .k-splitbar').hide();
			
					self.$previewPane.on("mouseenter",function(e){
						self.$previewPane.addClass("hover");
						$.proxy(self._onMouseEnterUnpinnedPane(e), self);
					});

					self.$previewPane.on("mouseleave",function(e){
						self.$previewPane.removeClass("hover");
						$.proxy(self._onMouseLeaveUnpinnedPane(e), self);
					});
				}
			},
			
			_onMouseEnterUnpinnedPane: function(e){
				
				var self = this;
			
				if(self._hoverUnpinnedTimeout){
					window.clearTimeout(self._hoverUnpinnedTimeout);
				}
				
				self._hoverUnpinnedTimeout=window.setTimeout(function(){
				
					if ( self.$previewPane.hasClass("unpinned") ){
						self.$previewPane.addClass("hover");
						self.$previewPane.css({"left":"auto", "right":"0px"});
					}
					
					self._hoverUnpinnedTimeout=null
					
				},400);
			},
			
			_onMouseLeaveUnpinnedPane: function(e){
		
				var self = this;
				$target = $(e.target);

				if ( self.$previewPane.hasClass("unpinned") ){
				
					window.clearTimeout(self._hoverUnpinnedTimeout);
					self._hoverUnpinnedTimeout=null;
			
					self.$previewPane.removeClass("hover");
					var r = (self.$previewPane.width()-40)*-1;
					self.$previewPane.css({"left":"auto", "right": r + "px"});
				}
			},
			
			togglePreviewPane: function(){
				
				var self = this;
				
				var r = (self.$previewPane.width()-40)*-1;
		
				if (self.$previewPane.hasClass("pinned")){
					self.$previewPane.removeClass("pinned").addClass("unpinned");
					self.$gridPane.css({"width":"auto"});
					self.$previewPane.css({"left":"auto", "right": r + "px"});
			
					$('.splitter-holder-inner .k-splitbar').hide();
			
					self.$previewPane.on("mouseenter",function(e){
						self.$previewPane.addClass("hover");
						objMmsch._onMouseEnterUnpinnedPane(e);
					});

					self.$previewPane.on("mouseleave",function(e){
						self.$previewPane.removeClass("hover");
						objMmsch._onMouseLeaveUnpinnedPane(e);
					});
				}
				else if ( self.$previewPane.hasClass("unpinned") ){
			
					$('.splitter-holder-inner .k-splitbar').show();
					self.$previewPane.removeClass("unpinned").addClass("pinned");
					var ks = $('.splitter-holder-inner').data('kendoSplitter');
					ks.expand('.k-pane:last');
			
					self.$previewPane.unbind("mouseenter");
					self.$previewPane.unbind("mouseleave");
				}
		
				resizeGrid("grid-units");
			},
			
			toggleNavSidebar: function(){
				
				var self = this;
				
				var r = (self.$sideMenuNav.width()-40)*1;
		
				if (self.$sideMenuNav.hasClass("pinned")){
			
					self.$sideMenuNav.removeClass("pinned").addClass("unpinned");
			
					$('#main-splitter-inner .k-splitbar:first').hide();
			
					var r = (self.$sideMenuNav.width()-40)*-1;
					self.$sideMenuNav.css({"right":"auto", "left": r + "px" });
					self.$mainSectionPane.css({"width":"auto", "left": "40px"});
			
			
					self.$sideMenuNav.on("mouseenter",function(){
						self.$sideMenuNav.css({"right":"auto", "left":"0px", "z-index":"1000"});    
					});
		
					self.$sideMenuNav.on("mouseleave",function(){
						var r = (self.$sideMenuNav.width()-40)*-1;
						self.$sideMenuNav.css({"right":"auto", "left": r + "px"});
					});
				}
				else if ( self.$sideMenuNav.hasClass("unpinned") ){
			
					$('#main-splitter-inner .k-splitbar:first').show();
			
					self.$sideMenuNav.removeClass("unpinned").addClass("pinned");
			
					self.$sideMenuNav.unbind("mouseenter");
					self.$sideMenuNav.unbind("mouseleave");
			
				}
		
				var ks = $('#main-splitter-inner').data('kendoSplitter');
					ks.expand('.k-pane:first');
					//ks.expand('.k-pane:last');
			},
			
			_resizeMainSplitter: function(e){
			
				var self = this;
				//resetPopPosition();
			
				if ( self.$sideMenuNav.hasClass("unpinned") ){
			
					var r = (self.$sideMenuNav.width()-40)*-1;
					self.$mainSectionPane.css({"width":"auto", "left": "40px"});
					self.$sideMenuNav.css({"right":"auto", "left": r + "px" });
			
					var ks = $('.splitter-holder-inner').data('kendoSplitter');
					ks.expand('.k-pane:first');
					ks.expand('.k-pane:last');
				}
			
				resizeGrid("grid-units");
			},
			
			_resizeInnerSplitter: function(){
				resizeGrid("grid-units");
				var self = this;
			
				if ( self.$previewPane.hasClass("unpinned") ){
		
					var r = (self.$previewPane.width()-40)*-1;
		
					self.$gridPane.css({"width":"auto"});
					self.$previewPane.css({"left":"auto", "right": r + "px" });
				
					resizeGrid("grid-units");
				

				}
			}
		};
	
		kendo.bind(".main-pane");
		
		//var objMmsch = new mmsch();

		//objMmsch.postLoadInit();
		//objMmsch.postLoadCallbacks();
	
		$(document).ready(function() {
						
			/**/
			/*
			$('.preview-pane-toggle-button').unbind('click');
			$('body').on('click', '.preview-pane-toggle-button', function(e){
				objMmsch.togglePreviewPane();
			});
			*/
			
			/*
			$('.navigation-control').unbind('click');
			$('body').on('click', '.navigation-control', function(e){
				objMmsch.toggleNavSidebar();
			});
			*/
			
			/*
			var splitter = $("#main-splitter-inner").data('kendoSplitter');
			splitter.unbind("resize");
			splitter.bind("resize", function(){objMmsch._resizeMainSplitter();});
			
			var splitter2 = $(".splitter-holder-inner").data('kendoSplitter');
			splitter2.unbind("resize");
			splitter2.bind("resize", function(){objMmsch._resizeInnerSplitter();});
			*/
			/**/
			
			var gridCategories = $("#grid-categories").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsCategories,
                serverPaging: true,
                pageSize: 20,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            sortable: true,
            resizable: true,
            pageable: {
            	refresh: true,
            	pageSizes: true,
            	buttonCount: 5,
            	pageSizes: [10, 20, 30, 50, 100]
        	},
            selectable: "multiple",
            columnMenu: true,
            columns: [
                {
                    field: "category_id",
                    title: "Κωδικός",
                    width: "10%"
                },
                {
                    field: "category",
                    title: "Κατηγορία"
                }
            ],
            dataBound: function(e) {
                //resizeGrid('grid-categories');
            }
        }).data('kendoGrid');
		
		
    });

	})(jQuery)
</script>