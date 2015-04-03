<?php 
$isAnonymous = @ $_GET['is_anonymous'];
?>
<div id="mod-cpes" class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">
					
	<div id="ribbon" class="k-widget">
		<div class="ribbon-menu">
			<div class="pull-right">
				<div class="btn-group">
					<button id="btnShowColumnChooser" class="k-button dropdown-toggle btn-popover" data-toggle="dropdown"><i class="fa fa-th fa-1x">&nbsp</i>Επιλογή Στηλών</button>									
				</div>
									
				<div class="btn-group">
					<button type="button" class="k-button btn-popover"  id="btnShowDlgSearch"><i class="fa fa-search fa-1x">&nbsp</i>Αναζήτηση...</button>		  								
				</div>
			</div>
		</div>
	</div>
					
	<div class="k-widget filters-wrapper" >
		<div class="grid-view-search pull-left" style="margin-right:10px">
			<input id="txtUnit" type="text" class="k-textbox" style="width:250px" placeholder="Πληκτρολογήστε τον Κωδικό της Μονάδας">
			<i class="fa fa-search k-link" id="btnSearchCpe"></i>
		</div>
		<div class="grid-cpes-filters pull-left" style="font-size:8pt;"></div>
		<div class="pull-right"></div>
	</div>
	
	<div class="mmsch-grid" id="grid-cpes"></div>

</div>

        
<div id="dlgWndSelectColms" class="" style="">
	<div id="cntGridColms" class="k-widget"></div>
	<div class="cs-window-footer pull-right" style="margin-top:10px;">
		<button id="btnApplyColms" type="button" class="k-button ">Εφαρμογή</button>
	</div>
</div>
        
<div id="dlgWndSearchBy" class="" style="">
	<div class="" id="mainSearch">	
	<form id="frmCpeMainSearch" class="mmsch-form">							
	</form>
    								
									
	<div class="cs-window-footer pull-right" style="margin-top:10px;">
		<button id="btnClearFrmSearch" type="button" class="k-button ">Καθαρισμός</button>
		<button id="btnSearch" type="button" class="k-button ">Αναζήτηση</button>
	</div>
				
</div>

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
					
var mmsch = {
	init: function(){
		var self = this;
	},
	toggleSearchBoxModal: function(action){

		$('#dlgWndSearchBy').data("kendoWindow").open();
		return;

		var action = (typeof action != 'undefined') ? action : "";

		var visible = $('#dlgWndSearchBy').is(":visible");

		if (action === 'show' || (action ==="" && visible === false)){

			$('#btnShowColumnChooser').popover('hide');
			$('.popover').hide();
								
			$('#dlgWndSearchBy').show();
			$('#dlgWndSearchBy').position({
				my: "right top+10",
				at: "right bottom",
				of:$('#btnShowDlgSearch'),
				collision: "fit"
			});

			$('#dlgWndSearchBy').find('.arrow').position({
				my: "center",
				at: "center bottom+8",
				of:$('#btnShowDlgSearch')
			});
		}
		else if (action === 'hide' || (action ==="" && visible === true)){
			$('#dlgWndSearchBy').hide();
		}
	},
						
	evtKeyupCallback : function(e){
								
		var self = this;
		var tag = e.target.tagName.toLowerCase();

		if (e.which == 83 && (tag != 'input' && tag != 'textarea') ){
			console.log("show search box");
			self.toggleSearchBoxModal('show');
		}
		else if (e.which == 27 ){
			console.log("close search box");
			self.toggleSearchBoxModal('hide');
			$("#dlgWndSearchBy").data("kendoWindow").close();
			$("#dlgWndSelectColms").data("kendoWindow").close();
		}
	},
						
	_onWindowKeyUp: function(e){
		var self = this;
		$(window).on('keyup', $.proxy(self.evtKeyupCallback, self));
	},
						
	_destroy: function(){

		var self = this;
		$(window).off('keyup', $.proxy(self.evtKeyupCallback, self));
	}
};
					
$(document).ready(function() {

	$("#mod-cpes").on("destroyed", function () {
		$("#dlgWndSearchBy").data("kendoWindow").destroy();
		$("#dlgWndSelectColms").data("kendoWindow").destroy();
	});
						
	//$(".searchtype").kendoDropDownList({});
		                    
	if (typeof mmschApp.modules['cpes'] == 'undefined'){
		$.extend(mmschApp.modules, {'cpes': mmsch});
	}
					
	$("#mod-cpes.main-pane").on("remove", function () {
		mmschApp.modules['cpes']._destroy();
		console.log("remove");
	});
						
	mmschApp.modules['cpes']._onWindowKeyUp();
						
	$("#dlgWndSearchBy").appendTo("body");

	$("#dlgWndSearchBy").kendoWindow({
		title: "Αναζήτηση",
		visible: false,
		animation: false,
		modal: true
	});

	$("#dlgWndSearchBy.k-window-content").css({overflow:"hidden"});
						
	var dlgWndSearchBy = $("#dlgWndSearchBy").data("kendoWindow");

	dlgWndSearchBy.bind("activate", function(){

		var $dlgWndSearchByContainer = $('#dlgWndSearchBy').parent();

		// fix the width
		$dlgWndSearchByContainer.css({"width":"50%"});

		// fix the height 
		dlgWndSearchBy.trigger("resize");

		// fix position
		$dlgWndSearchByContainer.position({
			my: "right top+10",
			at: "right bottom",
			of:$('#btnShowDlgSearch'),
			collision: "fit"
		});
	});

	dlgWndSearchBy.bind("resize", function(){
		$("#dlgWndSearchBy .k-content").css({
			height:$("#dlgWndSearchBy.k-window-content").height()-80 + "px",
			"overflow-y":"auto",
			"overflow-x":"hidden"
		});
	});

				
	/* CODE FOR SELECT GRID COLUMNS DIALOG WINDOW  */
						
	$("#dlgWndSelectColms").kendoWindow({
		title: "Επιλογή στηλών",
		visible: false,
		animation: false,
		modal: true,
		height:"30%"
	});

	$("#dlgWndSelectColms.k-window-content").css({overflow:"hidden"});
						
	var dlgWndSelectColms = $("#dlgWndSelectColms").data("kendoWindow");

	mmschApp.modules['cpes'].init();
						
	var grid_pane = $('.splitter-holder-inner div#left-pane:first');
						
	var $mainSectionPane = $('#main-splitter-inner section:first');
	var $sideMenuNav = $('#main-splitter-inner nav:first');
						
	var gridCpes = $("#grid-cpes").kendoGrid({
		autoBind: false,	
		dataSource: new kendo.data.DataSource({
			transport: tsCpes,
			serverFiltering: true,
			serverPaging: true,
			serverSorting: true,
			pageSize: 50,
			schema: {
				data: "data",
				total: "total",
				errors: function(response){

					if (response.status == 401)
						return response.message;

					if (typeof response.data == "undefined"){
						return "Data is undefined in calling service.";
					}
				}
			},
			error: function(e){
				//alert(e.errors);
			},
			requestStart: function(e) {

				if ($('#grid-cpes').data('kendoGrid').options.inSearching) {

					if (typeof this['rqc'] == 'undefined'){
						this['rqc'] = 0;
					}

					this['rqc']++;

					var tags = new Object();

					var cfgFilter = $("#grid-cpes").data('kendoGrid').dataSource.filter();
					var filters = null;

					if (typeof cfgFilter == "undefined"){
						filters = [];
					}
					else {
						filters = cfgFilter.filters;
					} 

					var val;
					$.each(filters, function(fltIndex, flt) {

						/*
						if (flt.value != "") {

							val = flt.value;

							switch (flt.field) {

							}

							tags[flt.field] = val;
						}
						*/
					});

					                    
					$(".grid-cpes-filters").empty();


					$.each(tags, function(i,v){

						if (i != "searchtype" && v != null && v != ""){
												
							var $div = $("<div/>", {id: "btn-filter-cnt-" + i, class: "btn-filter-cnt pull-left"})
										.css({"margin-right":"10px"})
										.attr("title", v)
										.append(
											$("<div/>", {class: "pull-left"})
											.css({"display": "inline-block","white-space":"nowrap", "text-overflow": "ellipsis"})
											.append(dictionary[i])
											.append(": ")
											.append(v)
										)
										.append(
											$("<div/>", {class : "btn-filter-remove pull-right"})
											.css({"cursor": "pointer"})
											.attr("title", "Αφαίρεση φίλτρου")
											.append($("<i class=\"fa fa-times fa-1x\" style=\"font-size:12px; \"></i>"))
											.click(function(e){
												$(this).remove();

												var cfgFilter = $("#grid-cpes").data('kendoGrid').dataSource.filter();
												var filters = null;
																	
												if (typeof cfgFilter == "undefined"){
													filters = [];
												}
												else {
													filters = cfgFilter.filters;
													var idxFilterNode = lookup(filters, i, "field");

													if (idxFilterNode > -1){
														filters.splice(idxFilterNode,1);
													}
												}

												console.log(filters);
																	
												$("#grid-cpes").data("kendoGrid").dataSource.filter(filters);
											})
										);	
														
												
											
								$('.grid-cpes-filters').append($div);
							}
						});
					}
				},
				requestEnd: function(e) {
					
					var xhrResponse = e.response;

					if (typeof xhrResponse['message'] != "undefined" ){

						if (typeof xhrResponse['status'] != "undefined"){
							if (xhrResponse['status'] != 200){
								alert(xhrResponse['message']);
							}
						}
					}
					
					if (typeof xhrResponse.data == "undefined" ){
						return false;
					}

					var data = xhrResponse.data;

					if(data.length > 0){
						var results_no = data.length;
					}
					
				}
			}), // END OF DATASOURCE CONFIG
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
	                field: "cpe_id",
	                title: "Κωδικός CPE",
					width: "80px",
					menu: false
	            },
	            {
	                field: "cpe",
	                title: "Όνομα CPE",
					width: "80px"
	            },
	            {
	                field: "mm_id",
	                title: "Κωδικός ΜΜ",
	                width: "400px",
	            },
	            {
	                field: "unit_name",
	                title: "Όνομα Μονάδας",
	                hidden: true,
					width: "80px",
	            },
	            {
	            	field: "registry_no",
	            	title: "Κωδικός ΥΠΕΠΘ",
	                hidden: true,
					width: "80px"
	            },
	            {
	                field: "item_name",
	                title: "Όνομα",
	                hidden: true,
					width: "80px"
	            },
	            {
	                field: "manufacturer",
	                title: "Κατασκευαστής",
	                hidden: true,
					width: "80px"
	            },
				{
					field: "location",
					title: "Τοποθεσία",
	                hidden: false,
					width: "80px",
				},
				{
					field: "serial_number",
					title: "Serial No",
	                hidden: true,
					width: "80px",
					width: "80px"
				}
					                
	        ],
	        selectedRow: null,
	        inSearching: true,
			change: function(eventArgs) {

				return false;
			}
	}).data('kendoGrid');
						
	//gridCpes.dataSource.filter([]);

	$("body").on("click", "#grid-cpes .k-grid-content tr[role='row'].k-master-row", function(e){

		if (gridCpes.selectedRow != null){
			var lastSelection = gridCpes.selectedRow;
			var row = gridCpes.element.find("tbody>tr[data-uid=" + lastSelection.uid + "]");
		}

		var dataItem = gridCpes.dataItem(this);
		gridCpes.selectedRow = dataItem;
	});

	$("#txtUnit").keydown(function(e) {
		if (e.keyCode == 13) {
			handlerSearchCpe();
		}
	});

	
	
	$("#mod-cpes").on("click", "#btnSearchCpe", function(e) {
		handlerSearchCpe();
	});

	function handlerSearchCpe(){
		
		var cfgFilters = gridCpes.dataSource.filter();

		var filters = null;

		if (typeof cfgFilters == "undefined"){
			filters = [];
		}
		else {
			filters = cfgFilters.filters;
		}
		
		var idxFilterName = lookup(filters, "unit", "field");

		if (idxFilterName > -1){
			filters[idxFilterName].value = $("#txtUnit").val();
		}	
		else {
			filters.push({'field': 'unit', 'value': $("#txtUnit").val()});
		}

		gridCpes.dataSource.filter(filters);
	}


	resizeGrid("grid-cpes");
						
						

}); // end of

 

function resetPopPosition(){
	
	if ($('.popover:visible').length>0){
		
		var f = $('#btnShowDlgSearch').offset();
		var s = $('#dlgWndSearchBy').outerWidth();
		

		$('#dlgWndSearchBy').position({
			
			my: "right top+10",
			at: "right bottom",
			of:$('#btnShowDlgSearch'),
			collision: "fit"
		});

		$('#dlgWndSearchBy').find('.arrow').position({
			
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
					            
					
</script>
