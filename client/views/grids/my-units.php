					<div id="mod-units" class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">
					
					<div id="ribbon">
						<div class="ribbon-menu">
							<div class="pull-right">
							
								
									<div class="btn-group">
									  
									<button id="btnShowColumnChooser" class="btn btn-sm btn-info dropdown-toggle btn-popover" data-toggle="dropdown"><i class="fa fa-th fa-1x">&nbsp</i>Επιλογή Στηλών</button>
									
									</div>
									
									<div class="btn-group">
		  								<button type="button" class="btn btn-sm btn-info btn-popover"  id="btnShowDlgSearch"><i class="fa fa-search fa-1x">&nbsp</i>Αναζήτηση...</button>
		  								<button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
		    								<span class="caret"></span>
		    								<span class="sr-only">Toggle Dropdown</span>
		  								</button>
		  								<ul class="dropdown-menu dropdown-menu-right" role="menu">
		    								<li><a href="#" id="lnkShowDlgSearchByCircuits btn-popover">Τηλεπικοινωνιακά Κυκλώματα</a></li>
		    								<li><a href="#" id="lnkShowDlgSearchBySubnets btn-popover">Υποδίκτυα</a></li>
		  								</ul>
									</div>
								
									
								<!-- 
								<button class="k-button global-search" title="Αναζήτηση (Πληκτρολογήστε 's')"><i class="fa fa-search fa-2x"></i></button>
								-->
							</div>
						</div>
					</div>
					
					<div class="filters-wrapper" >
						<div class="grid-view-search pull-left" style="margin-right:10px">
							<input id="txtQuickSearch" type="text" class="k-textbox" style="">
							<i class="fa fa-search"></i>
						</div>
						<div class="grid-units-filters pull-left" style=""></div>
						<div class="pull-right">
							<!-- 
							<button id="btnShowColumnChooser" class="k-button">Επιλογή Στηλών <sub class="label label-danger">beta</sub></button>
							-->
						</div>
					
						
					
					</div>
					
					<div 	class="splitter-holder" 
							style="position: absolute;
							top: 90px;
							left: 0;
							right: 0;
							bottom: 0;">
					
					<div 	class="splitter-holder-inner"
							style="height:100%"
							data-role="splitter" 
							data-orientation="horizontal" 
							data-panes="[{min:'200px', collapsible: true},{size:'455px', min:'200px', collapsible: true}]" 
							data-bind="events: { resize: _resizeInnerSplitter }"  >
					
					
						<div id="left-pane" class="units-container" style="right:40px; height:100%;">
                           <div class="mmsch-grid" id="grid-units"></div>
						   
                           <script type="text/x-kendo-template" id="unit-details-template">

    						<div class="tabstrip">
    							<ul>
    								<li class="k-state-active">Στοιχεία Επικοινωνίας</li>
									<li>Γενικά Στοιχεία</li>
									<!--
    								<li>Δικτυακά Στοιχεία</li>
    								<li>Host Relations</li>
									<li>Guest Relations</li>
									-->
    								<li>Μεταβάσεiς</li>
   								</ul>
							    <div class="unit-contact-info clearfix">
    								<dl class="dl-horizontal">
    									<dt>Προσωνύμιο</dt>
    									<dd><div class="col-md-12">#= special_name #</div></dd>

    									<dt>Τηλέφωνο Επικοινωνίας</dt>
    									<dd><div class="col-md-12">#= phone_number #</div></dd>

   										<dt>Αριθμός FAX</dt>
    									<dd><div class="col-md-12">#= fax_number #</div></dd>

    									<dt>Ηλεκτρονική Αλληλογραφία</dt>
    									<dd><div class="col-md-12">#= email #</div></dd>

										<dt>Οδός, Αριθμός</dt>
										<dd><div class="col-md-12">#= street_address #</div></dd>

										<dt>Ταχυδρομικός Κώδικας</dt>
										<dd><div class="col-md-12">#= postal_code #</div></dd>
									</dl>
								</div>
    
								<div class="unit-general-info clearfix">
									<dl class="dl-horizontal">
										<dt>Κωδικός ΜΜ</dt>
										<dd ><div class="col-md-12">#= mm_id #</div></dd>

										<dt>Κωδικός ΥΠΕΠΘ</dt>
										<dd ><div class="col-md-12">#= registry_no #</div></dd>

										<dt>Κωδικός GLUC</dt>
										<dd ><div class="col-md-12">#= gluc #</div></dd>
										
										<dt>Διεύθυνση εκπαίδευσης</dt>
										<dd><div class="col-md-12">#= edu_admin #</div></dd>

										<dt>Φορέας Υλοποίησης</dt>
										<dd><div class="col-md-12">#= implementation_entity #</div></dd>
									</dl>
								</div>
								
								<!--
								<div><div class="grid-details-ipdns"></div></div>
    
								<div><div class="grid-details-host-relations"></div></div>

								<div><div class="grid-details-guest-relations"></div></div>
								-->
								<div class="clearfix"><div class="grid-details-transitions"></div></div>

							</div>

							</script>
                        </div>
						
                        <div id="right-pane" class="preview-pane pinned" style="z-index:999">
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
					
					</div>
					
					
					
					
<div class="popover bottom in" id="myModal" tabindex="-1" style="display:none; width:50%; position: absolute: left:auto; z-index: 33010;border-radius:0px;" >
  <div class="arrow" style=""></div>
  <div class="modal-dialog1">
    <div class="modal-content1">
		
      <div class="modal-header">
        <h4 class="modal-title " id="myModalLabel">Αναζήτηση</h4>
      </div>
      <div class="modal-body">
		<form id="searchForm" class="mmsch-form">
        <div class="container" style="width:inherit; height:400px; overflow:auto;">
										
										<blockquote>
  												<i class="fa fa-chevron-down"></i><span>ΓΕΝΙΚΑ ΣΤΟΙΧΕΙΑ</span>
										</blockquote>
										<div id="search-options-geo-infos">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="" class="control-label">Όνομα Μονάδας</label>
													<input type="text" name="name" class="k-textbox col-md-12" />
										        </div>
	    									</div>
	    
	    									<div class="col-md-2">
	        									<div class="form-group">
										            <label for="" class="control-label">Κωδικός MM</label>
													<input type="text" name="mm_id" class="k-textbox col-md-12"  >
										        </div>
	    									</div>
	    
	    									<div class="col-md-2">
	        									<div class="form-group">
													<label for="" class="control-label">Κωδικός ΥΠΕΠΘ</label>
													<input type="text" name="registry_no" class="k-textbox col-md-12"  >
										        </div>
	    									</div>
	    
		    								<div class="col-md-2">
		        								<div class="form-group">
													<label for="" class="control-label">Κωδικός GLUC</label>
													<input type="text" name="gluc" class="k-textbox col-md-12"  >
										        </div>
		    								</div>
		    								
		    								<div class="col-md-2">
		    									<div class="form-group">
                                        			<label for="" class="control-label">Κατάσταση</label>
                                        			<input name="state" id="src_state" class="bt-col-full"  />
                                        		</div>
                                    		</div>
										</div>



										<div class="row">
										    <div class="col-md-3">
										        <div class="form-group ">
										            <label for="" class="control-label ">Περιφέρεια</label>
													<input name="region_edu_admin" id="src_regionEduAdmin" class="" />
										        </div>
										    </div>
										    
										    <div class="col-md-3">
										        <div class="form-group ">
													<label for="" class="control-label ">Διεύθυνση εκπαίδευσης</label>
													<input name="edu_admin" id="src_eduAdmin" class="" />
										        </div>
										    </div>
										    
										    <div class="col-md-3">
										        <div class="form-group ">
													<label for="" class="control-label ">Περιοχή Μετάθεσης</label>
													<input name="transfer_area" id="src_transferArea" class=""  />
										        </div>
										    </div>
										    
										    <div class=col-md-3>
										        <div class="form-group">
										            <label for="" class="control-label ">Φορέας Υλοποίησης</label>
													<input name="implementation_entity" id="src_implementationEntity" class="bt-col-full" />
										        </div>
										    </div>
										    
										</div>

										</div>
										<blockquote>
  												<i class="fa fa-chevron-right"></i><span>ΓΕΩΓΡΑΦΙΚΑ ΣΤΟΙΧΕΙΑ</span>
										</blockquote>
											
										<div id="search-options-geo-infos" style="display:none">
											
											
											
											<div class="row" >
											    <div class="col-md-3">
												    <div class="form-group ">
	    	                                    		<label>Νομός</label>
	        	                                		<input name="prefecture" id="src_prefecture" class="bt-col-full" />
	            	                        		</div>
	                                    		</div>
	
	                                    		<div class="col-md-3">
		                                    		<div class="form-group ">
		                                        		<label>Δήμος ΟΤΑ</label>
		                                        		<input name="municipality" id="src_municipality" class="bt-col-full" />    
		                                    		</div>
		                                   		</div>
											</div>
										</div>
										
										<blockquote>
  												<i class="fa fa-chevron-right"></i><span>ΣΤΟΙΧΕΙΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</span>
										</blockquote>
										
										<div id="search-options-contact-infos" style="display:none">
										
											
											
											<div class="row" >
											    <div class="col-md-4">
												    <div class="form-group ">
	    	                                    		<label>Τηλέφωνο Επικοινωνίας</label>
	        	                                		<input name="phone_number" id="phone_number" class="k-textbox col-md-12" />
	            	                        		</div>
	                                    		</div>
	
	                                    		<div class="col-md-4">
		                                    		<div class="form-group ">
		                                        		<label>Αριθμός FAX</label>
		                                        		<input name="fax_number" id="fax_number" class="k-textbox col-md-12" />
		                                    		</div>
		                                   		</div>
	                                    		
	                                    		<div class="col-md-4">
		                                    		<div class="form-group ">
		                                        		<label>Ηλεκτρονική Αλληλογραφία</label>
		                                        		<input name="email" id="email" class="k-textbox col-md-12"  />
		                                    		</div>
		                                   		</div>
											</div>
											
											<div class="row" >
											    <div class="col-md-4">
												    <div class="form-group ">
	    	                                    		<label>Οδός, Αριθμός</label>
	        	                                		<input name="street_address" id="street_address" class="k-textbox col-md-12" />
	            	                        		</div>
	                                    		</div>
	
	                                    		<div class="col-md-2">
		                                    		<div class="form-group ">
		                                        		<label>Ταχυδρομικός Κώδικας</label>
		                                        		<input name="postal_code" id="postal_code" class="k-textbox col-md-12" />
		                                    		</div>
		                                   		</div>
											</div>
										</div>
										
										<blockquote>
											<i class="fa fa-chevron-right"></i><span>ΑΛΛΑ ΣΤΟΙΧΕΙΑ</span>
										</blockquote>
											
										<div id="search-options-other" style="display:none">
											
											
											
											<div class="row" >
											    <div class="col-md-4">
												    <div class="form-group ">
	    	                                    		<label>Κατηγορία</label>
	        	                                		<input name="category" id="src_category" class="bt-col-full" />
	            	                        		</div>
	                                    		</div>
	
	                                    		<div class="col-md-4">
		                                    		<div class="form-group ">
		                                        		<label>Επίπεδο Εκπαίδευσης</label>
		                                        		<input name="education_level" id="src_educationLevel" class="bt-col-full" />
		                                    		</div>
		                                   		</div>
	                                    		
	                                    		<div class="col-md-4">
		                                    		<div class="form-group ">
		                                        		<label>Τύπος</label>
		                                        		<input name="unit_type" id="src_unitType" class="bt-col-full"  />
		                                    		</div>
		                                   		</div>
											</div>
										
											<div class="row">
												<div class="col-md-4">
													<div class="form-group ">
		                                        		<label>Προσανατολισμός</label>
		                                        		<input name="orientation_type" id="src_orientationType" class="bt-col-full"   />
		                                    		</div>
	                                    		</div>
	
	                                    		<div class="col-md-4">
		                                    		<div class="form-group ">
		                                        		<label>Ωράριο Λειτουργίας</label>
		                                        		<input name="operation_shift" id="src_operationShift" class="bt-col-full"  />    
		                                    		</div>
	                                    		</div>
	
	                                    		<div class="col-md-4">
		                                    		<div class="form-group ">
		                                        		<label>Ειδικός Τύπος</label>
		                                        		<input name="special_type" id="src_specialType" class="bt-col-full" />
		                                    		</div>
	                                    		</div>	                                    		 
											</div>	
											
											<div class="row">
											
												<div class="col-md-4">
													<div class="form-group">
														<label for="" class="control-label">Προσωνύμιο</label>
														<input type="text" name="special_name" class="k-textbox col-md-12" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group ">
		                                        		<label>Νομικός Χαρακτήρας </label>
		                                        		<input name="legal_character" id="src_legalCharacter" class="bt-col-full" />
		                                    		</div>    
	                                    		</div>     
												<div class="col-md-4">
													<div class="form-group ">
		                                        		<label>Πηγή </label>
		                                        		<input name="source" id="src_source" class="bt-col-full" />
		                                    		</div>    
	                                    		</div>     
											</div>
											
										</div>
										
										
    								
									</div>
		</form>	
	  </div>
      <div class="modal-footer">
		<button id="btnClear" type="button" class="k-button default">Καθαρισμός</button>
        <button id="btnSearch" type="button" class="k-button primary">Αναζήτηση</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


					
					
					<script type="text/javascript">
					$.fn.extend({
					    makeCol : function(numCol){
					        var $this = $(this),
					            $itens = $this.find('li'),
					            $itensPorCol = $itens.length / numCol,
					            colAtual = 1,
					            b = 0,
					            TODOhtml = '';
					                while(colAtual <= numCol){    
					                    html = '';
					                    html += '<ul  class="k-reset makeCol-'+ colAtual +'">';
					                        for(f=0; f<=$itensPorCol; f++){
					                            html += '<li>'+ $itens.eq(b).html() + '</li>';
					                            f = ($itens.eq(b + 1).html()) ? f : $itensPorCol;
					                            b++;
					                        }
					                    html += '</ul>';
					                    TODOhtml += html;
					                    colAtual++;
					                }
					                return $this.empty().append(TODOhtml).find('ul').css('float','left');        
					    }
					});
					
					//var mmsch=function(){};

					//mmsch.prototype={
					var mmsch ={

						_hoverUnpinnedTimeout:null,
						$previewPane:null,
						
						init: function(){

							var self = this;

							self.$previewPane = $('.splitter-holder-inner div#right-pane:first');
						},
						
						_onMouseEnterUnpinnedPane:function(e){

							var self = this;
								
							if(self._hoverUnpinnedTimeout){
								window.clearTimeout(self._hoverUnpinnedTimeout);
							}

							self._hoverUnpinnedTimeout=window.setTimeout(function(){
								
								if ( self.$previewPane.hasClass("unpinned") ){
									self.$previewPane.addClass("hover");
									self.$previewPane.css({"left":"auto", "right":"0px"});
								}

								self._hoverUnpinnedTimeout=null;
										
							},400);
						},

						_onMouseLeaveUnpinnedPane:function(e){
							
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
						
						toggleSearchBoxModal: function(action){
							
							var action = (typeof action != 'undefined') ? action : "";
							
							var visible = $('#myModal').is(":visible");
							
							if (action === 'show' || (action ==="" && visible === false)){
								$('#myModal').show();
								//resetPopPosition();
								$('#myModal').position({
									
									my: "right top+10",
									at: "right bottom",
									of:$('#btnShowDlgSearch'),
									collision: "fit"
								});

								$('#myModal').find('.arrow').position({
									
									my: "center",
									at: "center bottom+8",
									of:$('#btnShowDlgSearch')
									//collision: "fit"
								});
							}
							else if (action === 'hide' || (action ==="" && visible === true)){
								$('#myModal').hide();
							}
						},
						
						evtKeyupCallback : function(e){
								
								var self = this;
								
								var tag = e.target.tagName.toLowerCase();
								
								if (e.which == 83 && (tag != 'input' && tag != 'textarea') ){
									
									console.log("show search box");
									/*
									if ($('#myModal').not(":visible")){
										$('#myModal').show();
										resetPopPosition();
									}
									*/
									self.toggleSearchBoxModal('show');
								}
								else if (e.which == 27 ){

									console.log("close search box");
									/*
									if ($('#myModal').is(":visible")){
										$('#myModal').hide();
									}
									*/
									self.toggleSearchBoxModal('hide');
								}
						},
						
						_onWindowKeyUp: function(e){
							var self = this;
							
							//$(window).on('keyup', self.evtKeyupCallback);
							$(window).on('keyup', $.proxy(self.evtKeyupCallback, self));
						},
						
						_destroy: function(){
							
							var self = this;
							
							$(window).off('keyup', $.proxy(self.evtKeyupCallback, self));
						}
					}

					
					
					$(document).ready(function() {
						
						if (typeof mmschApp.modules['units'] == 'undefined'){
							$.extend(mmschApp.modules, {'units': mmsch});
						}
					
						$("#mod-units.main-pane").on("remove", function () {
							mmschApp.modules['units']._destroy();
						});
						
						mmschApp.modules['units']._onWindowKeyUp();
						
						$("#myModal").appendTo("body");

						//var objMmsch = new mmsch();
						mmschApp.modules['units'].init();
						//objMmsch._onWindowKeyUp();
						
						var grid_pane = $('.splitter-holder-inner div#left-pane:first');
						var preview_pane = $('.splitter-holder-inner div#right-pane:first');
						
						var $mainSectionPane = $('#main-splitter-inner section:first');
						var $sideMenuNav = $('#main-splitter-inner nav:first');

						
						
						
						$("#btnShowColumnChooser").popover({ html: true, 
								placement: 'bottom',
								'animation': false,
								//title: 'Popover', 
								container: '#bodyInner',
								content: "&nbsp;" 
						});


						$('#btnShowColumnChooser').on('shown.bs.popover', function (e) {
							
							var bsPopoverEl = $(this).data('bs.popover'),
							ele = bsPopoverEl.tip();

												

							var pc = ele.find('.popover-content')
									.removeClass('popover-content')
									.addClass('modal-body')
									.addClass('clearfix')
									;

							var ph = $("<div>", {'class': 'modal-header'});
							ph.append("Επιλογή στηλών");

							ph.insertBefore(pc );

							var pf = $("<div>", {'class': 'modal-footer'});
							pf.append(
								$('<button>', {class:'k-button'})
									.append("Εφαρμογή")
									.on('click', function(e){
										console.log('ckeic');
										var cols = $("#list-grid-units-columns input[type='checkbox']");

										$.each(cols, function(i, item) {
											var col = $(item);
											var field = col.data('field');
											var checked = $(item).is(':checked');

											if (checked){
												gridUnits.showColumn(field);
											}
											else {
												gridUnits.hideColumn(field);
											}
										});
										
										resizeGrid('grid-units');
									})
							);

							pf.insertAfter(pc );

							var ul = $("<ul>", {'id': 'list-grid-units-columns','class': 'k-reset'});

							$.each(gridUnits.columns, function(i, item) {
																
								var checked = (!item.hidden)? "checked":"";
								
					            ul.append(
							    	"<li class=\"k-item k-state-default\" role=\"menuitem\">" +
					            	"<span class=\"k-link\">" +
					            	"<input "+ checked  +" type=\"checkbox\" id=\"chb-"+ item.field +"\" class=\"\" data-index=\""+i+"\" data-field=\""+item.field+"\">" +
					            	"<label class=\"k-link\" for=\"chb-"+ item.field +"\">" + item.title + "</label>" +
					            	"</span>" +
					            	"</li>"
					            );

					           
					           
					        });

							pc.append(ul);
							//pc.append($("<div>", {class:'clearfix'}));
							ul.makeCol(3);

							

							var f = $('#btnShowColumnChooser').position();
							var s = ele.outerWidth();
							
							
							//ele.css({"left": (f.left - s) + ($('#btnShowColumnChooser').outerWidth())  + "px"});
							
							//ele.css({"z-index": 103310,"right":"auto","left": (f.left - s) + ($('#btnShowColumnChooser').outerWidth())  + "px" });
							ele.css({"z-index": 103310});
							ele.position({
								
								my: "right top+10",
								at: "right bottom",
								of:$('#btnShowColumnChooser'),
								collision: "fit"
							});

							ele.find('.arrow').position({
								
								my: "center",
								at: "center bottom+8",
								of:$('#btnShowColumnChooser')
								//collision: "fit"
							});
							

							//ele.find('.arrow').css({"right": "auto", "left": (f.left-s)+ ($('#btnShowColumnChooser').outerWidth()/2 + 21)  + "px"});
							
						});

						
						
						
							
						
						
						var gridUnits = $("#grid-units").kendoGrid({
					        dataSource: new kendo.data.DataSource({
					            autoBind: true,
					            transport: tsUnits,
					            serverFiltering: true,
					            serverPaging: true,
					            serverSorting: true,
					            pageSize: 50,
					            schema: {
					                data: "data",
					                total: "total"
					            },
					 			requestStart: function(e) {
									
					                if ($('#grid-units').data('kendoGrid').options.inSearching) {

					                    if (typeof this['rqc'] == 'undefined')
					                        this['rqc'] = 0

					                    this['rqc']++;

					                    var tags = new Object();
					                    var flts = $("#grid-units").data('kendoGrid').dataSource.filter().filters;
					                    var val;
					                    $.each(flts, function(fltIndex, flt) {

					                        if (flt.value != "") {

					                            val = flt.value;

					                            switch (flt.field) {
												
													case "education_level":
														val = evalLexicalId(staticData.ΕducationLevels.data, 'education_level_id',  flt.value);
														break;
														
													case "category":
														val = evalLexicalId(staticData.Categories.data, 'category_id',  flt.value);
														break;
														
													case "state":
														val = evalLexicalId(staticData.States.data, 'state_id',  flt.value);
														break;
													
													case "transfer_area":
														val = evalLexicalId(staticData.TransferAreas.data, 'transfer_area_id',  flt.value);
														break;
														
					                                case "prefecture":
														val = evalLexicalId(staticData.Prefectures.data, 'prefecture_id',  flt.value);
					                                    break;

					                                case "municipality":
														val = evalLexicalId(staticData.Municipalities.data, 'municipality_id',  flt.value);
					                                    break;

					                                case "region_edu_admin":
														val = evalLexicalId(staticData.RegionEduAdmins.data, 'region_edu_admin_id',  flt.value);
					                                    break;

					                                case "edu_admin":
														val = evalLexicalId(staticData.EduAdmins.data, 'edu_admin_id',  flt.value);
					                                    break;

					                                case "implementation_entity":
														val = evalLexicalId(staticData.ImplEnt.data, 'implementation_entity_id',  flt.value);
					                                    break;
														
					                                case "unit_type":
														val = evalLexicalId(staticData.UnitTypes.data, 'unit_type_id',  flt.value);
					                                    break;
													
													case "orientation_type":
														val = evalLexicalId(staticData.OrientationTypes.data, 'orientation_type_id',  flt.value);
					                                    break;
														
													case "operation_shift":
														val = evalLexicalId(staticData.OperationShifts.data, 'operation_shift_id',  flt.value);
					                                    break;
													
													case "special_type":
														val = evalLexicalId(staticData.SpecialTypes.data, 'special_type_id',  flt.value);
					                                    break;
														
													case "source":
														val = evalLexicalId(staticData.Sources.data, 'source_id',  flt.value);
					                                    break;
														
													case "legal_character":
														val = evalLexicalId(staticData.LegalCharacters.data, 'legal_character_id',  flt.value);
					                                    break;

					                            }

					                            //msg += dictionary[flt.field] + ":" + val + "<br/>";
					                            tags[flt.field] = val;
					                        }
					                    });

					                    
										$(".grid-units-filters").empty();
					                    
										$.each(tags, function(i,v){
					                    	//console.log(i + " " + v);
											
											if (v != null && v != ""){
												
												var $div = $("<div/>", {id: "btn-filter-cnt-" + i, class: "btn-filter-cnt pull-left"})
														.css({"max-width":"180px", "margin-right":"10px"})
														.attr("title", v)
														.append(
															$("<div/>", {class: "pull-left"})
																.css({"display": "inline-block", "max-width":"150px", "white-space":"nowrap", "overflow":"hidden", "text-overflow": "ellipsis"})
																.append(v)
														)
														.append(
															$("<div/>", {class : "btn-filter-remove pull-right"})
																.css({"cursor": "pointer"})
																.attr("title", "Αφαίρεση φίλτρου")
																.append($("<i class=\"fa fa-times fa-1x\" style=\"font-size:12px; \"></i>"))
																.click(function(e){
																	
																	$(this).remove();
													
																	$("#grid-units").data('kendoGrid').dataSource.filter().filters.push({'field': i, 'value': ""});

																	$.grep($("#grid-units").data('kendoGrid').dataSource.filter().filters, function(item){
																		if (item.field==i)
																			item.value = "";
																	});
													
																	$("#grid-units").data("kendoGrid").dataSource.filter($("#grid-units").data('kendoGrid').dataSource.filter().filters);
																})
															);	
														
												//var $div = $("<div>");
											
												/*
												$div.click(function(e){
													//var fid = $(this).attr('id');
													//var res = fid.replace("btn-flt-","");
													
													$(this).remove();
													
													$("#grid-units").data('kendoGrid').dataSource.filter().filters.push({'field': i, 'value': ""});

													$.grep($("#grid-units").data('kendoGrid').dataSource.filter().filters, function(item){
														if (item.field==i)
														item.value = "";
													});
													
													$("#grid-units").data("kendoGrid").dataSource.filter($("#grid-units").data('kendoGrid').dataSource.filter().filters);
													
												});
												*/
											
												$('.grid-units-filters').append($div);
												//var btnFlt = $('.grid-units-filters').append("<span class=\"k-button\">"+ i +": " + v + " <i class=\"fa fa-times\"></i></span>");
												//console.log($div);
											}
					                    });

					                   // $('#search_tags').collapse('toggle');
					                    /*
					                    var time = new Date(parseInt($.now()))
					                    h = time.getHours(),
					                            m = time.getMinutes(),
					                            s = time.getSeconds();

					                    $("#grid-logs").data('kendoGrid').dataSource.insert(0, {
					                        state: "",
					                        log_id: this['rqc'],
					                        time: h + ":" + m + ":" + s,
					                        action: "Αναζήτηση Μονάδων",
					                        message: msg
					                    });

					                    var di = $("#grid-logs").data('kendoGrid').dataSource.get(this['rqc']);

					                    di.flts = $("#grid-units").data('kendoGrid').dataSource.filter().filters;

					                    //log_state
					                    var dataitem = $("#grid-logs").data('kendoGrid').dataSource.get(this['rqc']);
					                    var row = $("#grid-logs").data("kendoGrid").tbody.find("tr[data-uid='" + dataitem.uid + "']");
					                    row.find('.log_state').addClass('k-loading');
										*/
					                }
					                
					            },
					            requestEnd: function(e) {
					            	$('#btnSearch').button('reset');
									/*
					                if ($('#grid-units').data('kendoGrid').options.inSearching) {

					                    $('#grid-units').data('kendoGrid').options.inSearching = false;

					                    var dataitem = $("#grid-logs").data('kendoGrid').dataSource.get(this['rqc']);
					                    var row = $("#grid-logs").data("kendoGrid").tbody.find("tr[data-uid='" + dataitem.uid + "']");
					                    row.data('complete', true);
					                    row.find('.log_state').removeClass('k-loading').addClass('k-custom-ok');
					                }
					                */
					            }
					            
					        
					        }),

							//scrollable: false,
							//height: 'auto',
					        sortable: {
					        	allowUnsort: false
						    },
					        resizable: true,
					        pageable: {
					            refresh: true,
					            pageSizes: true,
					            buttonCount: 5,
					            pageSizes: [10, 20, 30, 50, 100]
					        },
					        selectable: false,
					        columnMenu: true,
					        columns: [
					            {
					                field: "mm_id",
					                title: "Κωδικός ΜΜ",
									width: "80px",
									menu: false
					            },
					            {
					                field: "registry_no",
					                title: "Κωδικός ΥΠΕΠΘ",
									width: "80px"
					            },
					            {
					                field: "gluc",
					                title: "Κωδικός Gluc",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "name",
					                title: "Ονομασία",
					                width: "400px",
					            },
					            {
					                field: "special_name",
					                title: "Ειδική Ονομασία",
					                hidden: true,
									width: "80px",
					            },
					            {
					                field: "category",
					                title: "Κατηγορία",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "unit_type",
					                title: "Τύπος",
					                hidden: true,
									width: "80px"
					            },
								{
									field: "prefecture",
									title: "Νομός",
					                hidden: true,
									width: "80px",
								},
								{
									field: "municipality",
									title: "Δήμος",
					                hidden: true,
									width: "80px",
									width: "80px"
								},
					            {
					                field: "education_level",
					                title: "Βαθμίδα Εκπαίδευσης",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "region_edu_admin",
					                title: "Περιφέρεια Εκπαίδευσης",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "edu_admin",
					                title: "Διεύθυνση Εκπαίδευσης",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "transfer_area",
					                title: "Περιοχή Μετάθεσης",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "state",
					                title: "Κατάσταση",
									width: "80px"
					            },
					            {
					                field: "legal_character",
					                title: "Νομικός Χαρακτήρας",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "orientation_type",
					                title: "Προσανατολισμός",
					                hidden: true,
									width: "80px"
					            },
								{
									field: "operation_shift",
									title: "Ωράριο Λειτουργίας",
					                hidden: true,
									width: "80px"
								},
					            {
					                field: "special_type",
					                title: "Ειδικός Χαρακτηρισμός",
					                hidden: true,
									width: "80px"
					            },
					            {
					                field: "tax_office",
					                title: "Δ.Ο.Υ.",
					                hidden: true,
									width: "80px"
					            }
					                
					        ],
					        //editable: "inline",
					        selectedRow: null,
					        inSearching: false,
					        detailTemplate: kendo.template($("#unit-details-template").html()),
					        detailInit: detailInit,
					        detailExpand: function(e) {

								console.log('Grid-DetailExpand');
								
								var row = e.masterRow;
								
								if (row.hasClass("k-state-selected"));
								else {
									row.addClass("state-expanded");
								}

								return false;
					        },
							detailCollapse: function(e) {

								console.log('Grid-detailCollapse');
								
								var row = e.masterRow;
								
								//if (row.hasClass("k-state-selected")) {
									row.removeClass("state-expanded");
								//}
								//else {
								//	row.addClass("state-expanded");
								//}
								
								return false;
					        },
							change: function(eventArgs) {

								console.log('Grid-Change');

								return false;

								/*
								this.selectedRow = this.dataItem(this.select());
								
								if (typeof this.selectedRow != 'undefined' && this.selectedRow != null) {
									
									var row = this.element.find("tbody>tr[data-uid=" + this.selectedRow.uid + "]");								
									
									console.log(row.hasClass("k-state-selected"));
									
									kendo.ui.progress($('.splitter-holder-inner .k-pane:last'), true);
									
									$( ".summary-pane" ).load( "client/views/grids/unit-details2.php?mm_id=" + this.selectedRow.mm_id, function(){

									});
								}
								*/
							}

					    }).data('kendoGrid');

						$("body").on("click", "#grid-units .k-grid-content tr[role='row'].k-master-row", function(e){

							if (gridUnits.selectedRow != null){
								var lastSelection = gridUnits.selectedRow;
								var row = gridUnits.element.find("tbody>tr[data-uid=" + lastSelection.uid + "]");
								row.removeClass("k-state-selected");
								
								if(row.next("tr.k-detail-row:visible").length){
									row.addClass("state-expanded");
								}
							}

							var dataItem = gridUnits.dataItem(this);
							$(this).addClass("k-state-selected");
							gridUnits.selectedRow = dataItem;
							kendo.ui.progress($('.splitter-holder-inner .k-pane:last'), true);

							$( ".summary-pane" ).load( "client/views/grids/unit-details2.php?mm_id=" + dataItem.mm_id, function(){
							});
						});

											
						$("#txtQuickSearch").keydown(function(e) {
							if (e.keyCode == 13) {
								//gridUnits.options.inSearching = true;
								gridUnits.dataSource.filter([
									{field: 'name', value: $("#txtQuickSearch").val()},
									{field: 'searchtype', value: "CONTAINALL"}
								]);
							}
						});
						
						
						$('body').on('click', '.preview-pane-toggle-button', function(e){
							
							var r = (preview_pane.width()-40)*-1;
							
							if (preview_pane.hasClass("pinned")){
							
								preview_pane.removeClass("pinned").addClass("unpinned");
								grid_pane.css({"width":"auto"});
								preview_pane.css({"left":"auto", "right": r + "px"});
								
								$('.splitter-holder-inner .k-splitbar').hide();
								
								preview_pane.on("mouseenter",function(e){
									preview_pane.addClass("hover");
									mmschApp.modules['units']._onMouseEnterUnpinnedPane(e);
								});

								preview_pane.on("mouseleave",function(e){
									preview_pane.removeClass("hover");
									mmschApp.modules['units']._onMouseLeaveUnpinnedPane(e);
								});
							}
							else if ( preview_pane.hasClass("unpinned") ){
								
								$('.splitter-holder-inner .k-splitbar').show();
								preview_pane.removeClass("unpinned").addClass("pinned");
								var ks = $('.splitter-holder-inner').data('kendoSplitter');
								ks.expand('.k-pane:last');
								
								preview_pane.unbind("mouseenter");
								preview_pane.unbind("mouseleave");
							}
							
							resizeGrid("grid-units");
						});

						$('body').on('click', '#btnSearch', function(e) {
							
					        e.preventDefault();

					       
					        
					        $(this).button('loading');

					        var formData = $("#searchForm").serializeArray();
					        
					        var dsSrcParams = [];

					        $.each(formData, function(i, v) {
					            dsSrcParams.push({'field': v.name, 'value': v.value});
					        });


					       
					        
					        $('#grid-units').data('kendoGrid').options.inSearching = true;
					        $("#grid-units").data("kendoGrid").dataSource.filter(dsSrcParams);
					    });

						$("body").on('click', "#btnClear", function(e){
					     	
							e.preventDefault();
					     	
							$("#searchForm")[0].reset();
					     	
							$("#src_regionEduAdmin").data('kendoMultiSelect').dataSource.filter({});
					     	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({});
					     	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
							
							$("#src_prefecture").data('kendoMultiSelect').dataSource.filter({});
							$("#src_municipality").data('kendoMultiSelect').dataSource.filter({});
							
							$("#src_category").data('kendoMultiSelect').dataSource.filter({});
							$("#src_orientationType").data('kendoMultiSelect').dataSource.filter({});
							$("#src_operationShift").data('kendoMultiSelect').dataSource.filter({});
							$("#src_specialType").data('kendoMultiSelect').dataSource.filter({});
							$("#src_unitType").data('kendoMultiSelect').dataSource.filter({});
							
							$("#src_educationLevel").data('kendoMultiSelect').dataSource.filter({});
							
					     });
						
						//$("body #myModal #searchForm .container blockquote").unbind('click');
						var headerClickHandler = function(){
							
							var $target = $(this);
							
							//$(this).next("div").toggle();
							$target.next("div").slideToggle('fast',function(){
								
								if ( $target.next("div").is(":visible") ) {
									$target.find("i").removeClass("fa-chevron-right").addClass("fa-chevron-down");
								} else {
									$target.find("i").removeClass("fa-chevron-down").addClass("fa-chevron-right");
								}
							});	
						
						};
						
						$("body").off('click', "#myModal #searchForm .container blockquote" );
						$("body").on('click', "#myModal #searchForm .container blockquote", headerClickHandler);

						$('body').on('keypress', '#searchForm', function(e) {
							if (e.keyCode == 13 && e.target.type != "textarea") {
								$("#btnSearch").trigger("click");
							}
						});

						
						var viewModel = kendo.observable({
							
													
							
							_resizeInnerSplitter: function(e){
								resetPopPosition();
								
								
								if ( preview_pane.hasClass("unpinned") ){
							
									var r = (preview_pane.width()-40)*-1;
							
									grid_pane.css({"width":"auto"});
									preview_pane.css({"left":"auto", "right": r + "px" });
									
									
									
								}
								
								resizeGrid("grid-units");
							}
							
							
						});

						kendo.bind(".splitter-holder-inner", viewModel);
						
						if ( preview_pane.hasClass("unpinned") ){

							var r = (preview_pane.width()-40)*-1;
							
								preview_pane.removeClass("pinned").addClass("unpinned");
								grid_pane.css({"width":"auto"});
								preview_pane.css({"left":"auto", "right": r + "px"});
								
								$('.splitter-holder-inner .k-splitbar').hide();
								
								preview_pane.on("mouseenter",function(e){
									preview_pane.addClass("hover");
									mmschApp.modules['units']._onMouseEnterUnpinnedPane(e);
								});

								preview_pane.on("mouseleave",function(e){
									preview_pane.removeClass("hover");
									mmschApp.modules['units']._onMouseLeaveUnpinnedPane(e);
								});
						}
						
						$(".splitter-holder-inner").data('kendoSplitter').trigger('resize');
						
						

						$('#btnShowDlgSearch').click(function(e){
							
							//$('#myModal').toggle();
							//resetPopPosition();
							mmschApp.modules['units'].toggleSearchBoxModal();
						});

						
						ddls();
						ddlsHaveBeenCreated = true

						resizeGrid("grid-units");
						
						

					}); // end of


					function resetPopPosition(){
						
						if ($('.popover:visible').length>0){
							
							var f = $('#btnShowDlgSearch').offset();
							var s = $('#myModal').outerWidth();
							/*
							//$('#myModal').css({"left": (f.left - (s - 30)) + "px"});
							$('#myModal').css({"left": (f.left - s) + ($('#btnShowDlgSearch').outerWidth())  + "px"});
							
							$('#myModal').css({"top":  (f.top + $('#btnShowDlgSearch').outerHeight()) + "px"});
							
							$('.arrow').css({"right":"auto"});
							//$('.arrow').css({"left": (f.left - s) + ($('#btnShowDlgSearch').outerWidth()/2)  + "px"});

							$('.arrow').css({"right": "auto", "left": (f.left-s)+ ($('#btnShowDlgSearch').outerWidth()/2 + 11)  + "px"});
							*/

							$('#myModal').position({
								
								my: "right top+10",
								at: "right bottom",
								of:$('#btnShowDlgSearch'),
								collision: "fit"
							});

							$('#myModal').find('.arrow').position({
								
								my: "center",
								at: "center bottom+8",
								of:$('#btnShowDlgSearch')
								//collision: "fit"
							});
							
						}
					}

					
					function dataBoundDetailsGridHandler(o, evt) {
						
					    var ds = o.dataSource;
					    var len = ds.data().length;
					    var hasData = len > 0 ? true : false;

					    if (ds.sort() == null || ds.sort() == 'undefined')
					    {
					        var di = o.element.parent().attr('id');
					        var tab = o.element.parent().prevAll('ul').find('li[aria-controls="' + di + '"]');
					        var lnk = tab.find('a.k-link');
					        var tabStripElement = o.element.parent().prevAll('ul').parent().data('kendoTabStrip');

					        lnk.prepend("&nbsp;<b>" + len + "</b>&nbsp;");

					        if (!hasData) {
					 
					            o.element.find('tbody').append('<tr class=""><td collspan="3"><p>[ Δεν υπάρχουν δεδομένα ]<p></td></tr>');
					        }
					    }
					}

					
					
					
					function detailInit(e) {
						
					    var detailRow = e.detailRow;

					    detailRow.find(".tabstrip").kendoTabStrip({
					        animation: false
					    });

						
					    detailRow.find(".grid-details-transitions").kendoGrid({
					        dataSource: new kendo.data.DataSource({
					            data: e.data.get('transitions'),
					            schema: {
					                model: {
					                    fields: {
					                        transition_id: {type: "string"},
					                        fek: {type: "string"},
					                        transition_date: {type: "date"},
					                        from_state: {type: "string"},
					                        to_state: {type: "string"}
					                    }
					                }
					            }
					        }),
					        scrollable: false,
					        resizable: true,
					        sortable: true,
					        columns: [
					            {
					                field: "transition_id",
					                title: "Κωδικός",
					                hidden: true
					            },
					            {
					                field: "fek",
					                title: "Αριθμός ΦΕΚ",
					                template: "#= tplFunc(fek) #"
					            },
					            {
					                field: "transition_date",
					                title: "Ημερομηνία της Μετάβασης",
					                template: "#= (transition_date == null) ? ' - ' : kendo.toString(transition_date, 'dd/MM/yyyy') #"
					            },
					            {
					                field: "from_state",
					                title: "Αρχική Κατάσταση",
					                template: "#= tplFunc(from_state) #"
					            },
					            {
					                field: "to_state",
					                title: "Τελική Κατάσταση",
					                template: "#= tplFunc(to_state) #"
					            },
					            {}
					        ],
					        dataBound: function(e) {

					            dataBoundDetailsGridHandler(this, e);

					        }
					    });

					    detailRow.find(".grid-details-host-relations").kendoGrid({
					        dataSource: new kendo.data.DataSource({
					            data: e.data.get('host_relations')
					        }),
					        scrollable: false,
					        sortable: {
					            mode: "multiple"
					        },
					        columnMenu: true,
					        columns: [
					            {
					                field: "relation_id",
					                title: "Κωδικός",
					                hidden: true
					            },
					            {
					                field: "relation_type",
					                title: "Τύπος Συσχέτισης",
					                attributes: {
					                    tip: ""
					                }
					            },
					            {
					                field: "guest_name",
					                title: "Μονάδα Guest",
					                template: function(dataItem){

					                	return "<a href=\"javascript:openUnitInTab("+dataItem.guest_mm_id+ ", '"  + dataItem.guest_name +   "'  );\">" + dataItem.guest_name + "</a>";
					                }
					            },
					            {
					                field: "guest_mm_id",
					                title: "Κωδικός Μονάδας Guest",
					                hidden: true
					            },
					            {
					                field: "relation_state",
					                title: "Κατάσταση Συσχέτισης",
					                hidden: true
					            },
					            {
					                field: "true_date",
					                title: "Ημερομηνία Ενεργοποίησης",
					                hidden: true
					            },
					            {
					                field: "true_fek",
					                title: "ΦΕΚ Ενεργοποίησης",
					                hidden: true
					            },
					            {
					                field: "false_date",
					                title: "Ημερομηνία Απένεργοποίησης",
					                hidden: true
					            },
					            {
					                field: "false_fek",
					                title: "ΦΕΚ Απένεργοποίησης",
					                hidden: true
					            },
					            {}
					        ],
					        dataBound: function(e) {

					            dataBoundDetailsGridHandler(this, e);
					            

					        },
					        columnMenuInit: function(e) {
					            var menu = e.container.find(".k-menu").data("kendoMenu");
					        }
					    });
						
						/*
					    detailRow.find(".grid-details-host-relations").data('kendoGrid').thead.kendoTooltip({
					        filter: "th",
					        content: function(e) {
					            var target = e.target;
					            return $(target).text();
					        }
					    });
						*/

					    detailRow.find(".grid-details-guest-relations").kendoGrid({
					        dataSource: new kendo.data.DataSource({
					            data: e.data.get('guest_relations')
					        }),
					        scrollable: false,
					        sortable: {
					            mode: "multiple"
					        },
					        columnMenu: true,
					        columns: [
					            {
					                field: "relation_id",
					                title: "Κωδικός",
					                hidden: true
					            },
					            {
					                field: "host_mm_id",
					                title: "Κωδικός Μονάδας Ηost",
					                hidden: true
					            },
					            {
					                field: "relation_type",
					                title: "Τύπος Συσχέτισης",
					                attributes: {
					                    tip: ""
					                }
					            },
					            {
					                field: "host_name",
					                title: "Μονάδα",
					                template: function(dataItem){
					                    return "<a href=\"javascript:openUnitInTab("+dataItem.host_mm_id+ ", '"  + dataItem.host_name +   "'  );\">" + dataItem.host_name + "</a>";
					                }
					            },
					            {
					                field: "relation_state",
					                title: "Κατάσταση Συσχέτισης",
					                hidden: true
					            },
					            {
					                field: "true_date",
					                title: "Ημερομηνία Ενεργοποίησης",
					                hidden: true
					            },
					            {
					                field: "true_fek",
					                title: "ΦΕΚ Ενεργοποίησης",
					                hidden: true
					            },
					            {
					                field: "false_date",
					                title: "Ημερομηνία Απένεργοποίησης",
					                hidden: true
					            },
					            {
					                field: "false_fek",
					                title: "ΦΕΚ Απένεργοποίησης",
					                hidden: true
					            },
					            {}
					        ],
					        dataBound: function(e) {

					            dataBoundDetailsGridHandler(this, e);
					            

					        },
					        columnMenuInit: function(e) {
					            var menu = e.container.find(".k-menu").data("kendoMenu");
					        }
					    });
					    


					    detailRow.find(".grid-details-ipdns").kendoGrid({
					        dataSource: new kendo.data.DataSource({
					            data: e.data.get('unit_ip_dns')
					        }),
					        scrollable: false,
					        sortable: true,
					        resizable: true,
					        columns: [
					            {
					                field: "ip_dns_id",
					                title: "Κωδικός",
					                hidden: true
					            },
					            {
					                field: "unit_dns",
					                title: "DNS Μονάδας"
					            },
					            {
					                field: "router_dns",
					                title: "DNS Δρομολογητή"
					            },
					            {
					                field: "ext_dns",
					                title: "Ext DNS Δρομολογητή"
					            },
					            {
					                field: "ip_lan",
					                title: "IP υποδίκτυο LAN "
					            },
					            {
					                field: "ip_lan_mask",
					                title: "Μάσκα Τοπικού Δικτύου"
					            },
					            {
					                field: "ip_router",
					                title: "IP Δρομολογητή"
					            },
					            {
					                field: "ip_nat",
					                title: "IP υποδίκτυο NAT"
					            },
					            {
					                field: "ip_nat_mask",
					                title: "Μάσκα Δρομολογητή"
					            },
					            {
					                field: "username",
					                title: "Λογαριασμός χρήστη"
					            },
					            {}
					        ],
					        dataBound: function(e) {
					            dataBoundDetailsGridHandler(this, e);
					        }
					    });
					}
					            
					
					</script>