<?php 
$isAnonymous = @ $_GET['is_anonymous'];

require_once("_header.php");
?>

<div class="row">



<div id="" class=" col-xs-12" style="">
		
		<div class="breadcrumb-line clearfix k-block">
				
				<div class="breadcrumb">
					<div class="form-group">
					<div class="row">
					<div class="col-xs-12 col-sm-12">
					<input type="text" placeholder="Γρήγορη αναζήτηση" id="txtQuickSearch" class="k-input col-xs-12" />
					</div>
					</div>
					</div>
				</div>

				

				<ul class="breadcrumb-buttons collapse">
					<li class="dropdown" id="btnShowPopupUnitSearch">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search fa-1x">&nbsp</i> <span>Αναζήτηση</span> <b class="caret"></b></a>
						
						
						<div id="popupUnitSearch" class="popup dropdown-menu dropdown-menu-right">
							<div class="popup-header">
								<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
								<span></span>
								<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
							</div>
							<form id="frmUnitMainSearch" class="breadcrumb-search" role="form">	
										
										
										<div class="panel panel-default">
										<div class="panel-heading" role="tab">
										<h4 class="panel-title">
        								<a data-toggle="collapse" data-parent="" href="#search-options-general-infos" aria-expanded="true" aria-controls="search-options-general-infos">
          									ΓΕΝΙΚΑ ΣΤΟΙΧΕΙΑ
        								</a>
      									</h4>
      									</div>
										
										<div id="search-options-general-infos" class="panel-collapse collapse in">
										<div class="panel-body">
										<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												
													<label for="" class="">Όνομα Μονάδας</label>
													<input type="text" name="name" class="k-input col-xs-12" />

	    									</div>
	    
	    									<div class="col-xs-12 col-sm-4">

										            <label for="">Κωδικός MM</label>
													<input type="text" name="mm_id" class="k-input col-xs-12"  />

	    									</div>
	    
	    									<div class="col-xs-12 col-sm-4">

													<label for="" >Κωδικός ΥΠΕΠΘ</label>
													<input type="text" name="registry_no" class="k-input col-xs-12"  />

	    									</div>
		    								
		    								
										</div>
										</div>
										 
										<div class="form-group ">
										<div class="row">
										    <div class="col-xs-12 col-sm-4">
										        
										            <label for="" class="">Περιφέρεια</label>
													<input name="region_edu_admin" id="src_regionEduAdmin" class="" />
										        
										    </div>
										    
										    <div class="col-xs-12 col-sm-4">
										        
													<label for="" class=" ">Διεύθυνση εκπαίδευσης</label>
													<input name="edu_admin" id="src_eduAdmin" class="" />
										        
										    </div>
										    
										    <div class="col-xs-12 col-sm-4">
										        
													<label for="" class=" ">Περιοχή Μετάθεσης</label>
													<input name="transfer_area" id="src_transferArea" class=""  />
										        
										    </div>
										</div>
										</div>
										
										<div class="form-group ">
										<div class="row">
										    <div class="col-xs-12 col-sm-6">
										            <label for="" class=" ">Φορέας Υλοποίησης</label>
													<input name="implementation_entity" id="src_implementationEntity" class="" />

										    </div>
										    <div class="col-xs-12 col-sm-6">

                                        			<label for="" >Κατάσταση</label>
                                        			<input name="state" id="src_state" class=""  />

                                    		</div>
										</div>
										</div>
										 
										</div>
										</div>
										</div>
										
									
										
										<div class="panel panel-default">
										<div class="panel-heading" role="tab">
										
										<h4 class="panel-title">
        								<a class="collapsed" data-toggle="collapse" data-parent="" href="#search-options-geo-infos" aria-expanded="true" aria-controls="search-options-geo-infos">
          									ΓΕΩΓΡΑΦΙΚΑ ΣΤΟΙΧΕΙΑ
        								</a>
      									</h4>
      									</div>
										
										<div id="search-options-geo-infos" class="panel-collapse collapse">	
										<div class="panel-body">
											<div class="form-group ">										
											<div class="row">
											    <div class="col-xs-12 col-sm-6">
												    
	    	                                    		<label>Περιφερειακή ενότητα</label>
	        	                                		<input name="prefecture" id="src_prefecture" class="" value="<?php echo $_GET['prefecture']; ?>" />
	                                    		</div>
	
	                                    		<div class="col-xs-12 col-sm-6">
		                                        		<label>Δήμος ΟΤΑ</label>
		                                        		<input name="municipality" id="src_municipality" class="" value="" />    
		                                   		</div>
											</div>
											</div>
										</div>	
										</div>
										
										</div>
										
										
										<div class="panel panel-default">
										<div class="panel-heading" role="tab">
										 
										<h4 class="panel-title">
        								<a class="collapsed" data-toggle="collapse" data-parent="" href="#search-options-contact-infos" aria-expanded="true" aria-controls="search-options-contact-infos">
          									ΣΤΟΙΧΕΙΑ ΕΠΙΚΟΙΝΩΝΙΑΣ
        								</a>
      									</h4>
      									</div>
										
										<div id="search-options-contact-infos" class="panel-collapse collapse">
										<div class="panel-body">
											
											<div class="form-group ">
											<div class="row" >
											    <div class="col-xs-12 col-sm-4">
												    
	    	                                    		<label>Τηλέφωνο Επικοινωνίας</label>
	        	                                		<input type="text" name="phone_number" id="phone_number" class="k-input col-xs-12" />
	                                    		</div>
	
	                                    		<div class="col-xs-12 col-sm-4">

		                                        		<label>Αριθμός FAX</label>
		                                        		<input type="text" name="fax_number" id="fax_number" class="k-input col-xs-12" />
		                                   		</div>
	                                    		
	                                    		<div class="col-xs-12 col-sm-4">
		                                        		<label>Ηλεκτρονική Αλληλογραφία</label>
		                                        		<input type="text" name="email" id="email" class="k-input col-xs-12"  />
		                                   		</div>
											</div>
											</div>

											<div class="form-group ">
											<div class="row" >

											    <div class="col-xs-12 col-sm-6">

	    	                                    		<label>Οδός, Αριθμός</label>
	        	                                		<input type="text" name="street_address" id="street_address" class="k-input col-xs-12" />
	            	                        		
	                                    		</div>
	
	                                    		<div class="col-xs-12 col-sm-6">
		                                        		<label>Ταχυδρομικός Κώδικας</label>
		                                        		<input type="text" name="postal_code" id="postal_code" class="k-input col-xs-12" />

		                                   		</div>
											</div>
											</div>
											
										</div>
										</div>
										</div>
										
										
										<div class="panel panel-default">
										<div class="panel-heading" role="tab">
										 
										<h4 class="panel-title">
        								<a class="collapsed" data-toggle="collapse" data-parent="" href="#search-options-other" aria-expanded="true" aria-controls="search-options-other">
          									ΑΛΛΑ ΣΤΟΙΧΕΙΑ
        								</a>
      									</h4>
      									</div>
											
										<div id="search-options-other" class="panel-collapse collapse">
											<div class="panel-body">
											
											<div class="form-group ">
											<div class="row" >
											    <div class="col-xs-12 col-sm-4">
												    
	    	                                    		<label>Κατηγορία</label>
	        	                                		<input name="category" id="src_category" class="" />
	            	                        		
	                                    		</div>
	
	                                    		<div class="col-xs-12 col-sm-4">

		                                        		<label>Επίπεδο Εκπαίδευσης</label>
		                                        		<input name="education_level" id="src_educationLevel" class="" />

		                                   		</div>
	                                    		
	                                    		<div class="col-xs-12 col-sm-4">

		                                        		<label>Τύπος</label>
		                                        		<input name="unit_type" id="src_unitType" class=""  />

		                                   		</div>
											</div>
											</div>
											
											<div class="form-group ">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													
		                                        		<label>Προσανατολισμός</label>
		                                        		<input name="orientation_type" id="src_orientationType" class=""   />
		                                    		
	                                    		</div>
	
	                                    		<div class="col-xs-12 col-sm-4">
		                                        		<label>Ωράριο Λειτουργίας</label>
		                                        		<input name="operation_shift" id="src_operationShift" class=""  />    

	                                    		</div>
	
	                                    		<div class="col-xs-12 col-sm-4">

		                                        		<label>Ειδικός Τύπος</label>
		                                        		<input name="special_type" id="src_specialType" class="" />

	                                    		</div>	                                    		 
											</div>	
											</div>
											
											<div class="form-group">
											<div class="row">
											
												<div class="col-xs-12 col-sm-4">
													
														<label for="" class="control-label">Προσωνύμιο</label>
														<input type="text" name="special_name" class="k-input col-xs-12" />
													</div>
												
												<div class="col-xs-12 col-sm-4">

		                                        		<label>Νομικός Χαρακτήρας </label>
		                                        		<input name="legal_character" id="src_legalCharacter" class="" />
    
	                                    		</div>     
												<div class="col-xs-12 col-sm-4">

		                                        		<label>Πηγή </label>
		                                        		<input name="source" id="src_source" class="" />
    
	                                    		</div>     
											</div>
											</div>
											
										</div>
										</div>
										</div>
										
										<div class="cs-window-footer pull-right" style="margin-top:10px;">
											<button id="btnClearFrmSearch" type="button" class="k-button ">Καθαρισμός</button>
        									<button id="btnSearch" type="button" class="k-button ">Αναζήτηση</button>
      									</div>
										
										 
										</form>
    								</div>
					
    								
                                
    							
					</li>

					<li class="dropdown" id="btnShowPopupGridUnitsSelectColms">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list fa-1x">&nbsp</i> <span>Στήλες</span> <b class="caret"></b></a>
						
						
						<div id="popupGridUnitsSelectColms" class="popup dropdown-menu dropdown-menu-right">
							<div class="popup-header">
								<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
								<span></span>
								<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
							</div>
						
						

							<form id="frmGridUnitsSelectColms" class="breadcrumb-search" role="form">	
        
        						<div class="panel panel-default">
									<div class="panel-heading" role="tab">
										<h4 class="panel-title">
        								<a class="collapsed" data-toggle="collapse" data-parent="" href="#search-options-other" aria-expanded="true" aria-controls="search-options-other">
          									ΣΤΗΛΕΣ
        								</a>
      									</h4>
      								</div>
        							<div id="cntGridColms" class="panel-body"></div>
        						</div>	
        									
        	
        						<div class="cs-window-footer pull-right" style="margin-top:10px;">
        							<button id="btnApplyColms" type="button" class="k-button ">Εφαρμογή</button>
      							</div>
      							
        					</form>
        				</div>	
						
						
					</li>
					
					
				</ul>
			</div>
			
			
			
		</div>
		
		
			<!-- /breadcrumbs line -->

			
					
					
					</div>	
					
					<div class="row">
						<div class="col-xs-12">
							<div class="grid-units-filters clearfix k-widget" style="font-size:8pt;"></div>
						</div>
					</div>	
					
					
					<div class="row">
					
						<div class=" col-sm-12 col-md-7" id="unit-list-wrapper">
							
							<div class="mmsch-box k-widget">
							
								<div class="mmsch-box-title k-header clearfix">
									<h5>Λίστα Μονάδων</h5>
									<div class="mmsch-box-tools">
										<a class="collapse-link">
											<i class="fa fa-chevron-up"></i>
										</a>
									</div>
								</div>
							
								<div class="mmsch-box-content k-content clearfix">
							
                           <div class="mmsch-grid"  id="grid-units">
                           
						   
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
									<?php if (isset($user['uid'])) { ?>
    								<li>Μεταβάσεiς</li>
									<?php } ?>
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
								<?php if (isset($user['uid'])) { ?>	
								<div class="clearfix"><div class="grid-details-transitions"></div></div>
								<?php } ?>

							</div>

							</script>
							</div>
							</div>
							</div>
                           </div>
                       
					
					
					
					
					<div style="" class="hidden-sm col-md-5 modalable modal" id="unit-details-wrapper" role="dialog">
						<div class="mmsch-box k-widget">
						
							<div class="mmsch-box-title k-header clearfix">
								<h5>Πληροφορίες Μονάδας</h5>
								<div class="mmsch-box-tools">
										
										<a class=" close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
										
										<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</div>
							</div>
							
							<div class="mmsch-box-content k-content">
								<div id="unit-preview-pane" >
								</div>
							</div>
						</div>
					</div>
					
					
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
					
					//var mmsch=function(){};

					//mmsch.prototype={
					var mmsch ={

						_hoverUnpinnedTimeout:null,
						$previewPane:null,
						
						init: function(){

							var self = this;

							
						},
						
						

						
						
						
						
						_destroy: function(){
							
							var self = this;
							
							//$(window).off('keyup', $.proxy(self.evtKeyupCallback, self));

							
						}
					};

					
					
					$(document).ready(function() {

						$("#mod-units").on("destroyed", function () {

							console.log("destroyed");

							$("body").off('click', "#btnShowColumnChooser" );
							$("body").off('click', "#btnApplyColms" );
							$("body").off('click', "#grid-units .k-grid-content tr[role='row'].k-master-row" );
							$("body").off('click', "#btnClearFrmSearch" );
							$("body").off('click', "#btnSearch" );
							$("body").off('click', "#btnShowDlgSearch" );
							
							//$("#dlgWndSearchBy").data("kendoWindow").destroy();
							//$("#frmGridUnitsSelectColms").data("kendoWindow").destroy();


							$("#unit-details-wrapper").off();
						});

						
						
						$(".searchtype").kendoDropDownList({});
		                    
						if (typeof mmschApp.modules['units'] == 'undefined'){
							$.extend(mmschApp.modules, {'units': mmsch});
						}
					
						$("#mod-units.main-pane").on("remove", function () {
							mmschApp.modules['units']._destroy();
							console.log("remove");
						});
						
						//mmschApp.modules['units']._onWindowKeyUp();

						

						
						
						
						
							
													

						//var objMmsch = new mmsch();
						mmschApp.modules['units'].init();
						//objMmsch._onWindowKeyUp();
						
						
						
						
						
						var gridUnits = $("#grid-units").kendoGrid({
							autoBind: false,	
							//rowTemplate: kendo.template($("#rowTemplate").html()),
					        dataSource: new kendo.data.DataSource({
					           
					            transport: tsUnits,
					            serverFiltering: true,
					            serverPaging: true,
					            serverSorting: true,
					            pageSize: 20,
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
						            alert(e.errors);
					            },
					 			requestStart: function(e) {
									
					                if ($('#grid-units').data('kendoGrid').options.inSearching) {

					                    if (typeof this['rqc'] == 'undefined')
					                        this['rqc'] = 0;

					                    this['rqc']++;

					                    var tags = new Object();
					                    
					                    var cfgFilter = $("#grid-units").data('kendoGrid').dataSource.filter();
										var filters = null;

										if (typeof cfgFilter == "undefined"){
											filters = [];
										}
										else {
											filters = cfgFilter.filters;
										} 
										
					                    var val;
					                    $.each(filters, function(fltIndex, flt) {

					                        if (flt.value != "") {

					                            val = flt.value;

					                            switch (flt.field) {
												
													case "education_level":
														val = evalLexicalId(staticData.ΕducationLevels.data, 'education_level_id',  flt.value, "education_level");
														break;
														
													case "category":
														val = evalLexicalId(staticData.Categories.data, 'category_id',  flt.value, "category");
														break;
														
													case "state":
														val = evalLexicalId(staticData.States.data, 'state_id',  flt.value, "state");
														break;
													
													case "transfer_area":
														val = evalLexicalId(staticData.TransferAreas.data, 'transfer_area_id',  flt.value, "transfer_area");
														break;
														
					                                case "prefecture":
														val = evalLexicalId(staticData.Prefectures.data, 'prefecture_id',  flt.value, "prefecture");
					                                    break;

					                                case "municipality":
														val = evalLexicalId(staticData.Municipalities.data, 'municipality_id',  flt.value, "municipality");
					                                    break;

					                                case "region_edu_admin":
														val = evalLexicalId(staticData.RegionEduAdmins.data, 'region_edu_admin_id',  flt.value, "region_edu_admin");
					                                    break;

					                                case "edu_admin":
														val = evalLexicalId(staticData.EduAdmins.data, 'edu_admin_id',  flt.value, "edu_admin");
					                                    break;

					                                case "implementation_entity":
														
														val = evalLexicalId(staticData.ImplEnt.data, 'implementation_entity_id',  flt.value, "implementation_entity");
					                                    break;
														
					                                case "unit_type":
														val = evalLexicalId(staticData.UnitTypes.data, 'unit_type_id',  flt.value, "unit_type");
					                                    break;
													
													case "orientation_type":
														val = evalLexicalId(staticData.OrientationTypes.data, 'orientation_type_id',  flt.value, "orientation_type");
					                                    break;
														
													case "operation_shift":
														val = evalLexicalId(staticData.OperationShifts.data, 'operation_shift_id',  flt.value, "operation_shift");
					                                    break;
													
													case "special_type":
														val = evalLexicalId(staticData.SpecialTypes.data, 'special_type_id',  flt.value, "special_type");
					                                    break;
														
													case "source":
														val = evalLexicalId(staticData.Sources.data, 'source_id',  flt.value, "source");
					                                    break;
														
													case "legal_character":
														val = evalLexicalId(staticData.LegalCharacters.data, 'legal_character_id',  flt.value, "legal_character");
					                                    break;

					                            }

					                            //msg += dictionary[flt.field] + ":" + val + "<br/>";
					                            tags[flt.field] = val;
					                        }
					                    });

					                    
										$(".grid-units-filters").empty();


										$.each(tags, function(i,v){
					                    	//console.log(i + " " + v);
											
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

																	
																	
																	var cfgFilter = $("#grid-units").data('kendoGrid').dataSource.filter();
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
																	
																	$("#grid-units").data("kendoGrid").dataSource.filter(filters);
																})
															);	
														
												
											
												$('.grid-units-filters').append($div);
												
											}
					                    });

					                   					                }
					                
					            },
					            requestEnd: function(e) {
					            	
									var xhrResponse = e.response;
						            
					            	$('#btnSearch').button('reset');

					            	if (typeof xhrResponse.data == "undefined" ){
						            	return false;
					            	}

					            	var data = xhrResponse.data;

					            	if(data.length > 0){

					            		if (typeof data[0].unit_name == "undefined"){
											return;
							            }
					            		else{ 
						            		//return;
					            		}
						            	    
					            		var results_no = data.length;
					                    
					                    for(var i=0; i < results_no; i++){
				                    		data[i]['name'] = data[i].unit_name;
					                    }
					                }
									
					            }
					            
					        
					        }),
					        columns:[
					                 	{
					                 		width: "1%",
					                 		template: '<a class="btn btn-default btn-sm k-button btnViewModalUnit"><i class="fa fa-folder"></i>&nbsp;View</a>' 
					                 	},	
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
							            	field: "source",
							            	title: "Πηγή",
							                hidden: true,
											width: "80px"
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
											title: "Περιφερειακή ενότητα",
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
								            field: "implementation_entity_initials",
								            title: "Φορέας Υλοποίησης",
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

							scrollable: false,
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
					        //editable: "inline",
					        //selectedRow: null,
					        inSearching: true
					    }).data('kendoGrid');

					    $("div#grid-units").addClass("datatable-scroll");
					    $("div#grid-units").addClass("table-responsive");
					    $("div#grid-units > table:first").addClass("table");
					    
						
						// start - get units from server with specific filter
						gridUnits.dataSource.filter([
							{field: "implementation_entity", value: typeof g_impEnt[0] != 'undefined' ? g_impEnt[0].implementation_entity_id : null},
							{field: "state", value: 1},
							{field: "prefecture", value: '<?php echo (isset($_GET['prefecture'])) ? $_GET['prefecture'] : ""; ?>'},
							{field: "municipality", value: '<?php echo (isset($_GET['municipality'])) ? $_GET['municipality'] : ""; ?>'}
						]);
						// end - get units from server
						
						
						// start - choose grid columns
						$("#frmGridUnitsSelectColms #cntGridColms").empty();
							
						var ul = $("<ul>", {'id': 'list-grid-units-columns','class': 'k-reset'});

						$.each(gridUnits.columns, function(i, item) {

							var checked = (!item.hidden)? "checked":"";
								
					        ul.append(
								"<li class=\"k-item k-state-default\" role=\"menuitem\">" +
					            "<div class=\"checkbox\"><label>" +
					            "<input "+ checked  +" type=\"checkbox\" id=\"chb-"+ item.field +"\" class=\"\" data-index=\""+i+"\" data-field=\""+item.field+"\">" +
					            item.title +
					            "</label></div>" +
					            "</li>"
					         );
						});

						$("#frmGridUnitsSelectColms #cntGridColms").append(ul);
						ul.makeCol(3);


						$('body').on('click', '#btnApplyColms', function(e) {

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

							$("#grid-units table[role='grid']").css({'width':''});
							
						});
						// end - choose grid columns
						
						

						$("body").on("click", "#grid-units table[role='grid'] tbody tr[role='row']", function(e){

							return;
							
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

							console.log(dataItem.mm_id);

							
							
								

							$( "#unit-preview-pane" ).load( "mods/unit_view.php?mm_id=" + dataItem.mm_id + "&is_anonymous=" + <?php echo $isAnonymous; ?> , function(){
							});

							
						});

						$("body").on("click", ".btnViewModalUnit", function(e) {

						    var row = $(this).closest("tr");

						    var item = gridUnits.dataItem(row);

						    var mm_id = item.mm_id;

						    $( "#unit-preview-pane" ).empty();
						    $( "#unit-preview-pane" ).load( "mods/unit_view.php?mm_id=" + mm_id + "&is_anonymous=" + <?php echo $isAnonymous; ?> , function(){
							});
							

						    var $unit_details_wrapper =  $('#unit-details-wrapper');

						    if (!$unit_details_wrapper.is(':visible'))
						    {
						    	$unit_details_wrapper.removeClass("hidden-sm");
						    	$unit_details_wrapper.addClass('modal');
							     
						    	$unit_details_wrapper.modal('show');
	
						    	$unit_details_wrapper.on('hidden.bs.modal', function (e) {
							    	
						    		$unit_details_wrapper.removeClass('modal');
						    		$unit_details_wrapper.addClass("hidden-sm");
						    		$unit_details_wrapper.removeAttr("style");
							    	
							    });
						    }
						});

											
						$("#txtQuickSearch").keydown(function(e) {
							if (e.keyCode == 13) {
								//gridUnits.options.inSearching = true;
								
								var cfgFilters = gridUnits.dataSource.filter();

								var filters = null;

								if (typeof cfgFilters == "undefined"){
									filters = [];
								}
								else {
									filters = cfgFilters.filters;
								}
								
								var idxFilterName = lookup(filters, "name", "field");

								if (idxFilterName > -1){
									filters[idxFilterName].value = $("#txtQuickSearch").val();
								}	
								else {
									filters.push({'field': 'name', 'value': $("#txtQuickSearch").val()});
								}

								var idxFilterSearchType = lookup(filters, "searchtype", "field");

								if (idxFilterSearchType > -1){}
								else {
									
									filters.push({'field': 'searchtype', 'value': "CONTAINALL"});
								}

								$( "#dlgWndSearchBy input[name='name']" ).val($("#txtQuickSearch").val())
								//

								gridUnits.dataSource.filter(filters);

								/*
								gridUnits.dataSource.filter([
									{field: 'name', value: $("#txtQuickSearch").val()},
									{field: 'searchtype', value: "CONTAINALL"}
								]);
								*/
							}
						});
						
						
						

						$('body').on('click', '#btnSearch', function(e) {

							e.preventDefault();
					        $(this).button('loading');
					        
							var grid = $('#grid-units').data('kendoGrid');
							grid.dataSource.transport.options.read.url = apiUrl + "units";

							var $frm = $("#popupUnitSearch").find("form:visible");
							var frmID = $frm.attr("id");

							var endPoint = "units";
							
							if (frmID == "frmUnitMainSearch"){
								endPoint = "units";
								$("#txtQuickSearch").val($("#popupUnitSearch input[name='name']").val());
							}
							else if (frmID == "frmUnitSubnetSearch"){
								endPoint = "unit_network_subnets";
							}
							else if (frmID == "frmUnitCircuitSearch"){
								endPoint = "circuits";
							}
							else {
								endPoint = "units";
								$("#txtQuickSearch").val($("#popupUnitSearch input[name='name']").val());
							}

							grid.dataSource.transport.options.read.url = apiUrl + endPoint;

					        var frmData = $frm.serializeArray();

					        var dsSrcParams = [];

					        $.each(frmData, function(i, v) {
					            dsSrcParams.push({'field': v.name, 'value': v.value});
					        });

					        grid.options.inSearching = true;
					        grid.dataSource.filter(dsSrcParams);

					        
					    });

						$("body").on('click', "#btnClearFrmSearch", function(e){
					     	
							e.preventDefault();

							var grid = $('#grid-units').data('kendoGrid');
							grid.dataSource.transport.options.read.url = apiUrl + "units";

							var $frm = $("#popupUnitSearch").find("form:visible");
							var frmID = $frm.attr("id");
							
							$frm[0].reset();

							if (frmID == "frmUnitMainSearch"){
								
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
							}
							
					     });
						
						//$("body #dlgWndSearchBy #frmSearchBy .container blockquote").unbind('click');
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
						
						$("body").off('click', "#frmUnitMainSearch blockquote" );
						$("body").on('click', "#frmUnitMainSearch blockquote", headerClickHandler);

						$('body').on('keypress', '#popupUnitSearch', function(e) {
							if (e.keyCode == 13 && e.target.type != "textarea") {
								$("#btnSearch").trigger("click");
							}
						});

						$('#btnShowDlgSearch').click(function(e){
							
							
							mmschApp.modules['units'].toggleSearchBoxModal();
						});

						

						
						ddls();
						ddlsHaveBeenCreated = true

						
						
						

					}); // end of

					
					
					
					</script>

					<?php require_once("_footer.php"); ?>
