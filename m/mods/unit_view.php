<?php 
$isAnonymous = @ $_GET['is_anonymous'];
?>
<style>
.tooltip{
position: fixed;
}

.wnd_create_connection .k-block{
	margin-bottom:10px;
}
</style>

<div id="unit-<?php echo $_GET['mm_id']; ?>-preview"  
	style="height: 100%;" 
	class="unit-panel-details form-horizontal">
	
	<div id="wnd_implementation_entity_info"></div>
	
	<script id="tmpl_implementation_entity_info" type="text/x-kendo-tmpl">
		<table class="table borderless">
			<tbody>
			<tr>
				<td class="detail-term">Όνομα </td>
				<td class="term-value">#= implementation_entity #</td>
			</tr>
			<tr>
				<td class="detail-term">Αρχικά </td>
				<td class="term-value">#= implementation_entity_initials #</td>
			</tr>
			<tr>
				<td class="detail-term">Διεύθυνση (Οδός και Αριθμός) </td>
				<td class="term-value">
					# if (street_address != null) { #
					#= street_address #
					# } else { #
					<p class="text-muted">
						<em>None</em>
					</p>
					# } #
				</td>
			</tr>
			<tr>
				<td class="detail-term">Τηλεφωνικός Αριθμός </td>
				<td class="term-value">
				# if (phone_number != null) { #
				#= phone_number #
				# } else { #
					<p class="text-muted">
						<em>None</em>
					</p>
				# } #
				</td>
			</tr>
			<tr>
				<td class="detail-term">Ηλεκτρονική Αλληλογραφία </td>
				<td class="term-value">
				# if (email != null) { #
				#= email #
				# } else { #
					<p class="text-muted">
						<em>None</em>
					</p>
				# } #
				</td>
			</tr>
			<tr>
				<td class="detail-term">Domain </td>
				<td class="term-value">
				# if (domain != null) { #
				#= domain #
				# } else { #
					<p class="text-muted">
						<em>None</em>
					</p>
				# } #
				</td>
			</tr>
			<tr>
				<td class="detail-term">Διεύθυνση URL </td>
				<td class="term-value">
				# if (url != null) { #
				#= url #
				# } else { #
					<p class="text-muted">
						<em>None</em>
					</p>
				# } #
				</td>
			</tr>
			</tbody>
		</table>
	</script>
	
	
    
       	
       	<div class="item-header">
       		
       		<h1 style=""><strong data-bind="text: unitData.name"></strong>&nbsp;<a href="index.php?page=units&action=view&mm_id=<?php echo $_GET['mm_id']; ?>&auth=<?php echo $isAnonymous == 1?0:1; ?>" target="_blank" class="k-button" id="loadUnitCard"><i class="glyphicon glyphicon-new-window"></i></a></h1>
       		
       	</div>
       	
		
        <div id="mycontent" class="tab-content " style="width:auto; position:relative;">
			
			<div id="holder-general-infos" class="detail-section">
				<div class="detail-section-header"><h3 class="k-widget">Γενικά Στοιχεία</h3></div>
				<div class="detail-section-tab">
					<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tpl-general-info"></div>
						<script type="text/x-kendo-tmpl" id="tpl-general-info">
						<div class="table-responsive">
						<table class="table borderless">
							<tbody>
								<tr>
									<td class="detail-term col-xs-3">Κωδικός ΜΜ</td>
									<td class="term-value">#= mm_id #</td>
								</tr>
								<tr>
									<td class="detail-term col-xs-3">Κωδικός ΥΠΕΠΘ</td>
									<td class="term-value">#= registry_no #</td>
								</tr>
								# if (edu_admin != null) { #
								<tr>    
									<td class="detail-term col-xs-3">Διεύθυνση εκπαίδευσης</td>
									<td class="term-value">#= edu_admin.replace("ΔΙΕΥΘΥΝΣΗ","") #</td>
								</tr>
								# } #
								# if (implementation_entity_id != null) { #
								<tr>
									<td class="detail-term col-xs-3">Φορέας Υλοποίησης</td>
									<td class="term-value"><a href="##" class="k-button btnShowImplementationEntityInfo" data-implementation_entity_id="#= implementation_entity_id #">#= implementation_entity_initials #</a></td>
								</tr>
								# } #
							</tbody>
						</table>
						</div>
						</script>
					
				</div>
            </div>

                <div id="holder-contact-infos" class="detail-section">
					<div class="detail-section-header"><h3 class="k-widget">Στοιχεία Επικοινωνίας</h3></div>
                    <div class="detail-section-tab">
						<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tpl-contact-info"></div>
						
							<script type="text/x-kendo-tmpl" id="tpl-contact-info">
							<div class="table-responsive">
							<table class="table borderless">
								<tbody>

									# if (special_name != null) { #
									<tr>
										<td class="detail-term col-xs-3">Προσωνύμιο</td>
										<td class="term-value">#= special_name #</td>
									</tr>
									# } #
								
									<tr>
										<td class="detail-term col-xs-3">Τηλέφωνο Επικοινωνίας</td>
										<td class="term-value">#= phone_number #</td>
									</tr>
								
									<tr>
										<td class="detail-term col-xs-3">Αριθμός FAX</td>
										<td class="term-value">#= fax_number #</td>
									</tr>
									
									<tr>
										<td class="detail-term col-xs-3">Ηλεκτρονική Αλληλογραφία</td>
										<td class="term-value">#= email #</td>
									</tr>
									
									<tr>							
										<td class="detail-term col-xs-3">Οδός, Αριθμός</td>
										<td class="term-value">#= street_address #</td>
									</tr>
								
									<tr>
										<td class="detail-term col-xs-3">Ταχυδρομικός Κώδικας</td>
										<td class="term-value">#= postal_code #</td>
									</tr>
                                                                
                                                                        <tr>
                                                                                <td class="detail-term col-xs-3">Γεωγραφικό Πλάτος</td>
                                                                                <td class="term-value">#= latitude #</td>
                                                                        </tr>

                                                                        <tr>
                                                                                <td class="detail-term col-xs-3">Γεωγραφικό Μήκος</td>
                                                                                <td class="term-value">#= longitude #</td>
                                                                        </tr>

                                                                        <tr>
                                                                               <td class="detail-term col-xs-3">Google Point</td>
                                                                               <td class="term-value"><a class="data" href="http://maps.google.com/maps?z=12&q=loc:#=latitude#+#=longitude#" target="_blank">GooglePoint</a></td>
                                                                        </tr>
								
								</tbody>
							</table>
							</div>
							</script>
						
					</div>
                </div>

                <?php if (!$isAnonymous) { ?>
				    <div id="holder-workers-infos" class="detail-section">
					<div class="detail-section-header"><h3 class="k-widget">Εργαζόμενοι</h3></div>
					<div class="detail-section-tab">
						<div class="detail-section-tab-content">
							<div class="data-table" id="unit-<?php echo $_GET['mm_id']; ?>-workers" data-bind="source: unitData.workers" data-template="tpl-workers-list"></div>
					
							<script type="text/x-kendo-tmpl" id="tpl-workers-list">
								<div class="mmsch-list-item table-responsive">
								<table class="table borderless">
									<tbody>

										<tr>
											<td class="detail-term">Ονοματεπώνυμο</td>
											<td class="term-value">#= fullname #</td>
										</tr>
										<tr class="soft-hide">
											<td class="detail-term">Πατρώνυμο</td>
											<td class="term-value">#= fathername #</td>
										</tr>
										<tr class="soft-hide">
											<td class="detail-term">Αριθμός Μητρώου</td>
											<td class="term-value">#= registry_no #</td>
										</tr>
										<tr>
											<td class="detail-term">Θέση Εργασίας</td>
											<td class="term-value">#= worker_position #</td>
										</tr>
										<tr class="soft-hide">
											<td class="detail-term">Ειδικότητα</td>
											<td class="term-value">
											# if(worker_specialization==null){ #
											-
											# } else { #
											worker_specialization
											# } #
											</td>
										</tr>
								
									</tbody>
									<tfoot>
										<tr><td colspan="2" class="detail-term"><a href="##" class="btn btn-xs btn-link btnToggleRows" style="padding:0px !important;">Εμφάνιση όλων των στοιχείων</a></td></tr>
									</tfoot>
								</table>
								</div>
							</script>
						</div>
					</div>			
                </div>
				<?php } ?>

				<!-- @ΔΙΚΤΥΑΚΑ ΣΤΟΙΧΕΙΑ  -->
				<?php if (!$isAnonymous) { ?>
					<div id="holder-net-infos" class="detail-section">
					
						<div class="detail-section-header"><h3 class="k-widget">Δικτυακά Στοιχεία</h3></div>
					
						<div class="detail-section-tab">
							<div class="detail-section-tab-content">
								<div class="data-table" id="unit-<?php echo $_GET['mm_id']; ?>-dns" data-bind="source: unitData.unit_dns" data-template="tpl-dns-list"></div>
							
								<script type="text/x-kendo-tmpl" id="tpl-dns-list">
									<div class="table-responsive">
									<table class="table borderless">
										<tbody>								
											<tr>
												<td class="detail-term col-xs-3"><b>DNS Μονάδας</b></td>
												<td class="term-value">#= unit_dns #</td>
											</tr>
											
										</tbody>
									</table>
									</div>
								</script>
							</div>
						</div> 
						
						<!-- @ΣΤΟΙΧΕΙΑ ΣΥΝΔΕΣΕΩΝ  -->
						<div class="detail-section-tab">
							<!-- 
							<h4>Διασυνδέσεις</h4>
							<div class="clearfix" style="padding-right:10px;">
								<button id="btnCreateConnection" data-bind="click: createConnection" class="k-button pull-right" type="button"><i class="glyphicon glyphicon-plus"></i> Δημιουργία Διασύνδεσης</button>
							</div>
							 -->
							<div class="detail-section-tab-content">
								
								<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-connection-list"></div>
						
								<script id="tmpl-connection-list" type="text/x-kendo-template" >
								# if (connections != null && connections.length > 0) { #
																		
									# for (var i = 0, len = connections.length;  i < len; i++ ){ #
									
									# var con_subnets = connections[i].subnets;  #

									# var con_circuits = connections[i].circuits;  #									
									
									# var con_devices = connections[i].devices;  #
									
									<h4>
										${connections[i].name}
									</h4>
									


									# if (con_subnets != null && con_subnets.length > 0) { #	
									<div class="mmsch-list-item container-fluid">
									<table class="table table-bordered">
									<caption>Υποδίκτυα</caption>
									<thead><tr><th class="detail-term col-md-3">IP</th><th class="detail-term">Τύπος</th></tr></thead>
									<tbody>
									# for (var j = 0, slen = con_subnets.length;  j < slen; j++){ #

									# var subnet_idx = lookup(subnets, con_subnets[j], "id"); #

									# if (subnet_idx >= 0) { #

									# var con_subnet = subnets[subnet_idx]; #

									# var con_subnet = subnets[subnet_idx]; #							

											<tr>
												
												<td class="term-value">
													<a class="data" href="telnet://${con_subnet.network}">${con_subnet.network}</a>
												</td>
											
												
												<td class="term-value">${con_subnet.type}</td>
											</tr>
											
									# } #

									# } #		
									</tbody>
									</table>
									</div>
									# } #	
									









									# if (con_circuits != null && con_circuits.length > 0) { #	
									<div class="mmsch-list-item container-fluid">
									<table class="table table-bordered" >
									<caption>Κυκλώματα</caption>
									<thead><tr><th class="detail-term col-md-3">Τηλ. Αριθμός</th><th class="detail-term col-md-3">Τύπος</th><th class="detail-term">Χρηματοδότηση</th></tr></thead>
									<tbody>
									# for (var j = 0, slen = con_circuits.length;  j < slen; j++ ){ #

									# var circuit_idx = lookup(circuits, con_circuits[j], "id"); #

									# if (circuit_idx >= 0) { #

									# var con_circuit = circuits[circuit_idx]; #							

											<tr>
												
												<td class="term-value">${con_circuit.linenumber}</td>
											
												
												<td class="term-value">${con_circuit.type}</td>
											
												
												<td class="term-value">${con_circuit.owner}</td>
											</tr>
											
									# } #
									# } #		
									</tbody>
									</table>
									</div>
									# } #		


									# if (con_devices != null && con_devices.length > 0) { #
									<div class="mmsch-list-item container-fluid">
									<table class="table table-bordered" >
									<caption>Συσκεύες</caption>
									<thead><tr><th class="detail-term col-md-3">Συσκεύη</th><th class="detail-term col-md-3">Μοντέλο</th><th class="detail-term">SN</th></tr></thead>
									<tbody>
									# for (var j = 0, slen = con_devices.length;  j < slen; j++ ){ #

									# var con_device = con_devices[j]; #							

											<tr>
												
												<td class="term-value">${con_device.name}</td>
											
												
												<td class="term-value">${con_device.model}</td>
											
												
												<td class="term-value">${con_device.serialNumber}</td>
											</tr>
											
									# } #		
									</tbody>
									</table>
									</div>
									# } #	





									# } #
									
									
										
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διασυνδέσεις</em></p>
								# } #
								</script>
							</div>	
						</div>
						<!-- ΣΤΟΙΧΕΙΑ ΔΙΑΣΥΝΔΕΣΕΙΣ@  -->
					
						<!-- @ΥΠΟΔΙΚΤΥΑ -->
						 
						<div id="holder-set-ips" class="detail-section-tab">
							<h4>Υποδίκτυα</h4>
							<div class="detail-section-tab-content">
								<div class="data-table" id="unit-<?php echo $_GET['mm_id']; ?>-network_subnets" data-bind="source: unitData" data-template="tmpl-network-network-list"></div>
								
								<script id="tmpl-network-network-list" type="text/x-kendo-template">
								# if (subnets != null && subnets.length > 0) { #
								
									<div class="mmsch-list-item container-fluid">
									<table class="table table-bordered" >
										
										<thead><tr><th class="detail-term col-md-3">IP</th><th class="detail-term">Τύπος</th></tr></thead>
									<tbody>	

									# for (var i = 0, len = subnets.length;  i < len; i++ ){ #
									
									# var subnet = subnets[i]; #
									
									
																		
											<tr >
												
												<td class="term-value">
													<a class="data" href="telnet://${subnet.network}">${subnet.network}</a>
												</td>
											
												
												<td class="term-value">${subnet.type}</td>
											</tr>
									# } #	

									</tbody>
									</table>
									</div>
									
									
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν Υποδίκτυα</em></p>
								# } #
								</script>
							
							</div>
						</div>
						
						<!-- ΥΠΟΔΙΚΤΥΑ@ -->
					
						<!-- @ΚΥΚΛΩΜΑΤΑ -->
						<div id="holder-circuits" class="detail-section-tab">
							<h4>Κυκλώματα</h4>
							<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-circuit-list"></div>
														
								<script id="tmpl-circuit-list" type="text/x-kendo-template">
								# if (circuits != null && circuits.length > 0) { #
									<div class="mmsch-list-item container-fluid table-responsive">
									<table class="table table-bordered">
									
									
									<thead><tr><th class="detail-term col-md-3">Τηλ. Αριθμός</th><th class="detail-term">Τύπος</th>
<th class="detail-term">Χρηματοδότηση</th><th class="detail-term">Υπηρεσίες</th></tr></thead>
<tbody>
									# for (var i = 0, len = circuits.length;  i < len; i++ ){ #
									
									# var circuit = circuits[i];  #

									
									
									
										<tr>
											
										
											
											<td class="term-value">${circuit.linenumber}</td>
											
											<td class="term-value">${circuit.type}</td>
											
											<td class="term-value">${circuit.owner}</td>

											<td class="term-value">
											# var services = circuit.services; #
											# for (var j = 0, srv_col_len = services.length;  j < srv_col_len; j++) { #

												${services[j].type} / ${services[j].bandwidth} / ${services[j].owner} <br/> 
												 
											# } #
											</td>
										</tr>
									</tr>

									# } #
									</tbody>
									</table>
									</div>

									
									
									
									
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διαθέσιμα τηλεπικοινωνιακά κυκλώματα</em></p>
								# } #
								</script>
							
						</div>
						<!-- ΚΥΚΛΩΜΑΤΑ@ -->
					
						<!-- @CPEs -->
						<div id="holder-cpes" class="detail-section-tab">
							<h4>CPEs (Διασύνδεση με ΠΣ Κτηματολόγιο)</h4>
							<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-cpe-list"></div>
								
								<script type="text/x-kendo-template" id="tmpl-cpe-list">
								# if (typeof cpes != "undefined" && cpes != null && cpes.length > 0) { #
									
                                                                        <div class="mmsch-list-item container-fluid">
									<table class="table table-bordered">
                                                                        <thead><tr><th class="detail-term col-md-3">Αριθμός</th><th class="detail-term col-md-3">Μοντέλο</th><th class="detail-term col-md-3">Τοποθεσία</th><th class="detail-term col-md-3">Κατασκευαστής</th></tr></thead>
									<tbody>
									
									# for (var i = 0, len = cpes.length;  i < len; i++ ){ #
									
									# var cpe = cpes[i]; #

									<tr>
										<td class="term-value">CPE ${i+1}</td>
                                                                                <td class="term-value">${cpe.item_name}</td>
                                                                                <td class="term-value">${cpe.location}</td>
                                                                                <td class="term-value">${cpe.manufacturer}</td>
									</tr>
									
									# } #
									
									</tbody>
									</table>
									</div>
									
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διαθέσιμοι τερματικοί εξοπλισμοί</em></p>
								# } #
								</script>
							
						</div>
						<!-- CPEs@ -->
					
						<!-- @UIDs -->
						<div id="holder-uids" class="detail-section-tab">
							<h4>UIDs (Διασύνδεση με ΠΣ LDAP)</h4>
							<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-ldap-list"></div>
								
								<script type="text/x-kendo-template" id="tmpl-ldap-list">
								# if (ldaps != null && ldaps.length > 0) { #
									
                                                                        <div class="mmsch-list-item container-fluid">
									<table class="table table-bordered">
                                                                        <thead><tr><th class="detail-term col-md-3">Τύπος</th><th class="detail-term col-md-3">Λογαριασμός</th></tr></thead>
									<tbody>

									# for (var i = 0, len = ldaps.length;  i < len; i++ ){ #

									# var ldap = ldaps[i]; #

									<tr>
                                                                                <td class="term-value">${ldap.ldap_entry_cn}</td>
										<td class="term-value">${ldap.ldap_entry_uid}</td>
									</tr>

									# } #

									</tbody>
									</table>
                                                                        </div>
									

								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διαθέσιμοι λογαριασμοί υπηρεσίας</em></p>
								# } #
								</script>
						</div>
						<!-- UIDs@ -->
					
					</div>
					<?php } ?>
				<!-- ΔΙΚΤΥΑΚΑ ΣΤΟΙΧΕΙΑ@  -->	
				                
                <!-- @ΤΟΠΟΛΟΓΙΚΑ ΣΤΟΙΧΕΙΑ -->
				<?php if (!$isAnonymous) { ?>
                <div id="holder-geo-infos" class="detail-section">
					
					<div class="detail-section-header"><h3 class="k-widget">Τοπολογικά Στοιχεία</h3></div>
					<div class="detail-section-tab">
						<div class="detail-section-tab-content">
						<div class="table-responsive">
						<table class="table borderless">
							<tbody>
								<tr>
									<td class="detail-term col-xs-3">Περιφερειακή ενότητα</td>
									<td class="term-value" data-bind="text: unitData.prefecture"></td>
								</tr>

								<tr>
									<td class="detail-term col-xs-3">Δημοτική Ενότητα</td>
									<td class="term-value" data-bind="text: unitData.municipality_community"></td>
								</tr>
								
								<tr>
									<td class="detail-term col-xs-3">Δήμος ΟΤΑ</td>
									<td class="term-value" data-bind="text: unitData.municipality"></td>
								</tr>
								
								<tr>
									<td class="detail-term col-xs-3">Οδός, Αριθμός</td>
									<td class="term-value" data-bind="text: unitData.street_address"></td>
								</tr>
								
								<tr>
									<td class="detail-term col-xs-3">Ταχυδρομικός Κώδικας</td>
									<td class="term-value" data-bind="text: unitData.postal_code"></td>
								</tr>
								
								<tr class="soft-hide">
									<td class="detail-term col-xs-3">Γεωγραφικό Πλάτος</td>
									<td class="term-value" data-bind="text: unitData.latitude"></td>
								</tr>
								
								<tr class="soft-hide">
									<td class="detail-term col-xs-3">Γεωγραφικό Μήκος</td>
									<td class="term-value" data-bind="text: unitData.longitude"></td>
								</tr>
                                                                
								<tr class="soft-hide">
									<td class="detail-term col-xs-3">Κτηριακή Θέση</td>
									<td class="term-value" data-bind="html: unitData.positioning"></td>
								</tr>
								
							</tbody>
							<tfoot>
								<tr><td colspan="2" class="detail-term"><a href="##" class="btn btn-xs btn-link btnToggleRows" style="padding:0px !important;">Εμφάνιση όλων των στοιχείων</a></td></tr>
							</tfoot>
						</table>
						</div>
						</div>
					</div>
                </div>
				<?php } ?>
				<!-- ΤΟΠΟΛΟΓΙΚΑ ΣΤΟΙΧΕΙΑ@ -->

				<!-- @ΔΙΟΙΚΗΤΙΚΑ ΣΤΟΙΧΕΙΑ -->
				<?php if (!$isAnonymous) { ?>
                <div id="holder-manage-infos" class="detail-section">
					<div class="detail-section-header"><h3 class="k-widget">Διοικητικά Στοιχεία</h3></div>
					<div class="detail-section-tab">
						<div class="detail-section-tab">
							<div class="table-responsive">
							<table class="table borderless">
								<tbody>
									
									<tr>
										<td class="detail-term col-xs-3">Περιφέρεια</td>
										<td class="term-value" data-bind="text: unitData.region_edu_admin"></td>
									</tr>
									
									<tr>	
										<td class="detail-term col-xs-3">Περιοχή Μετάθεσης</td>
										<td class="term-value" data-bind="text: unitData.transfer_area"></td>
									</tr>
									
									<tr>	
										<td class="detail-term col-xs-3">Φορέας Υλοποίησης</td>
										<td class="term-value" data-bind="text: unitData.implementation_entity_initials"></td>
									</tr>
									
								</tbody>
							</table>
							</div>
						</div>
					</div>
                </div>
				<?php } ?>
				<!-- ΔΙΟΙΚΗΤΙΚΑ ΣΤΟΙΧΕΙΑ@ -->

				<!-- @ΣΤΟΙΧΕΙΑ ΜΕΤΑΒΑΣΕΩΝ -->
				<?php if (!$isAnonymous) { ?>
                <div id="holder-transitions-infos" class="detail-section">
					<div class="detail-section-header"><h3 class="k-widget">Μεταβάσεις</h3></div>
                    <div class="detail-section-tab">
						<div class="detail-section-tab-content list-item" data-bind="source: unitData" data-template="tmpl-transaction-list"></div>
							
							<script id="tmpl-transaction-list" type="text/x-kendo-template">
							
							# if ( typeof logs != "undefined" &&  logs != null) { #
								
   								# for (var i = logs.length-1, len = 0;  i >= len; i-- ){ #

									# if (i == 0) {continue;} #									

									# var log = logs[i].data; #

									# var logHeader = logs[i].action + " | " + logs[i].logged_at #
									
									# var hasNameBefore = false; #
									# var hasStateBefore = false; #

									<div class="mmsch-list-item table-responsive">							
									<table class="table borderless" >
										
										<tbody>

											<tr><td class="detail-term term-head col-xs-3" colspan="2">Αλλαγή: ${i}</td></tr>

											# if (typeof log["lastUpdate"]["date"] != "undefined") { #
											<tr> 
												<td class="detail-term col-xs-3">Τελευταία ενημέρωση</td> 
												<td class="term-value"> ${log["lastUpdate"]["date"]} </td>
											</tr>
											# } #

											# if (typeof log["name"] != "undefined" ) { #

												# if (typeof logs[i-1] != "undefined" && typeof logs[i-1].data["name"] != "undefined" ) { #
													# var beforeName = logs[i-1].data["name"]; #
													# var currentName = log["name"];  #
													# hasNameBefore = true; #
												# } else { #
													# var currentName = log["name"];  #
												# } #

											<tr> 
												<td class="detail-term col-xs-3">Ονομασία</td> 
												<td class="term-value">
												# if (hasNameBefore) { # 
												<b>ΑΠΟ:</b> ${beforeName} <br/><br/>
												<b>ΣΕ:</b>  ${currentName}
												# } else { #
												${currentName}
												# } #	  
												</td>
											</tr>
											# } #

											# if (typeof log["state"] != "undefined") { #
												
												# if (typeof logs[i-1] != "undefined" && typeof logs[i-1].data["state"] != "undefined" ) { #

													# var beforeStateId = logs[i-1].data["state"]["stateId"]; #
													# var currentStateId = log["state"]["stateId"];  #

													# var idxBeforeState = lookup(staticData.States.data, beforeStateId, "state_id"); #
													# var idxCurrentState = lookup(staticData.States.data, currentStateId, "state_id"); #

													# if (idxBeforeState > -1) { var strBeforeState = staticData.States.data[idxBeforeState]["state"]; } else { var strBeforeState = ""; } #
													# if (idxCurrentState > -1) { var strCurrentState = staticData.States.data[idxCurrentState]["state"]; } else { var strCurrentState = ""; } #

													# hasStateBefore = true; #

												# } else { #
													# var currentStateId = log["state"]["stateId"];  #
													# var idxCurrentState = lookup(staticData.States.data, currentStateId, "state_id"); #
													# if (idxCurrentState > -1) { var strCurrentState = staticData.States.data[idxCurrentState]["state"]; } else { var strCurrentState = ""; } #
												# } #

											<tr> 
												<td class="detail-term col-xs-3">Κατάσταση</td> 
												<td class="term-value"> 
												# if (hasStateBefore) { # 
												<b>ΑΠΟ:</b> ${strBeforeState} <br/>
												<b>ΣΕ:</b>  ${strCurrentState}
												# } else { #
												${strCurrentState}
												# } #	  
												</td>
											</tr>
											# } #

										</tbody>
									</table>
									</div>
									

 								# } #
								
							# } #
							
							</script>
							
                    </div>
                </div>
                <?php } ?>
				<!-- ΣΤΟΙΧΕΙΑ ΜΕΤΑΒΑΣΕΩΝ@ -->
			
    	</div>
    

</div>


<script type="text/javascript">
        
	//kendo.ui.progress($('.splitter-holder-inner .k-pane:last'), true);
	//function hello(d){ console.log(d); return "ds";}
	kendo.ui.progress($('.unit-panel-details #mycontent:first'), true);
	
    $(document).ready(function() {
	
    	var wnd_implementation_entity_info;
        
        var mm_id = "<?php echo $_GET['mm_id']; ?>";
        var registry_no = "";
		var wnd_create_connection;
		
		$("#unit-" + mm_id + "-preview").on("destroyed", function () {
			console.log("Element " + mm_id + " was destroyed");
			
			wnd_implementation_entity_info.destroy();

			
			
		});
		
		$("#unit-" + mm_id + "-preview").on("click", "button.editConnection", function(e){
			viewModel.editConnection(e);
		});

		$("#unit-" + mm_id + "-preview").on("click", "button.deleteConnection", function(e){
			viewModel.deleteConnection(e);
		});
		
		$("#unit-" + mm_id + "-preview").on("click", "a.btnToggleRows", function(e){
			e.preventDefault();
			var $lnk = $(e.target);
			$lnk.closest("table").find("tbody tr.soft-hide").toggle("fast", function(e){ 
				$lnk.text(($lnk.text() == 'Απόκρυψη') ? 'Εμφάνιση όλων των στοιχείων' : 'Απόκρυψη');
			});
			
		});
		
		$("#unit-" + mm_id + "-preview").on("click", "button.toggleNetworkElementInfo, button.toggleCircuitInfo", function(e){
			e.preventDefault();
			//e.stopPropagation();
			
			var $btn = $(this);
			var $icon = $btn.find('span');
			
			
			$btn.closest("table").find("tbody tr:not(:first)").toggle("fast", function(e){ 
			
			});

			if ($icon.hasClass("fa-expand"))
				$icon.removeClass("fa-expand").addClass("fa-compress");
			else if ($icon.hasClass("fa-compress"))
				$icon.removeClass("fa-compress").addClass("fa-expand");

		});

		var tmpl_implementation_entity_info = kendo.template($("#tmpl_implementation_entity_info").html());
		
		wnd_implementation_entity_info = $("#wnd_implementation_entity_info")
		.kendoWindow({
			title: "Πληροφορίες Φορέα Υλοποίησης",
			modal: true,
			visible: false,
			resizable: true
		}).data("kendoWindow");
	
		wnd_implementation_entity_info.element.parent().css("width", "40%");
		wnd_implementation_entity_info.element.parent().css("height", "auto");
	
		$("#unit-" + mm_id + "-preview").on("click", ".btnShowImplementationEntityInfo", function(e){
			e.preventDefault();
						
			var $btn = $(this);
			var implementation_entity_id = $btn.data('implementation_entity_id');
			console.log(implementation_entity_id);

				
			var implementation_entity = $.grep(staticData.ImplEnt.data, function(item){
				if (item['implementation_entity_id'] == implementation_entity_id){
					return item;
				}
			});

			
			wnd_implementation_entity_info.content(tmpl_implementation_entity_info(implementation_entity[0]));
    		
			wnd_implementation_entity_info.center().open();
			wnd_implementation_entity_info.element.parent().css("top", "20px");
		});
		

		

		if ($("#loadUnitCard").closest("#mod-unit-card").length){
			$("#loadUnitCard").hide();
		}
		                                                 		
		
		
		$('.nav li a').click(function(e){
			
			var link = $(e.target).closest("a");
			
			e.preventDefault();
			
			
			
		});
                     	
        var viewModel = kendo.observable({                
			unitData: null,
			
			editedConnection: null,
			
			setLabelbtnSaveConnection: function(){
				
				if ( typeof viewModel['editedConnection'] != "undefined" && viewModel['editedConnection'] != null){
					return "Αποθήκευση";
				}
				else {
					return "Αποθήκευση";
				}
			},
			
			unitSource: new kendo.data.DataSource({
				transport: {
					read: {
						url: apiUrl + "units",
						dataType: "json",
						type: "GET",
						data: {
							mm_id: mm_id
						},
						complete : function(e){
							console.log("read  complete");
							//viewModel.handlerFetchUnit(false);
							//console.log(e);
						}
					},
					parameterMap: function(data, type) {
						return data;
					}
				},
				batch: true,
				schema: {
					data: function(response) {
						return response.data;
					},
					model: {
						id: "mm_id",
						fields: {}
					}
				},
				change: function(e) {

					//e.preventDefault();
					
					
					console.log("unit data change");
				
					var viewModel = this.parent();
					
					var view = this.view();
					
					viewModel.set("unitData", view[0]);

					/*
					console.log("view model change");
					console.log(viewModel.get("unitData"));

					kendo.bind($("#unit-" + mm_id + "-preview"), viewModel);
					kendo.bind($("#wnd_create_connection_" + mm_id).parent(), viewModel);
					*/
				},
				requestEnd: function(e) {

					console.log("requestEnd");
					 var response = e.response;

					 //console.log(response);
					 
					 delete response.data[0].circuits;
					 delete response.data[0].subnets;
					 delete response.data[0].connections;
					 delete response.data[0].ldaps;
					 
				}
				 
			}),
			
			createConnection: function(e){

				var self = this;
				//kendo.bind($("#wnd_create_connection_" + mm_id), viewModel);
				
				//self.refreshGrds();
			},
			
			backToNetInfo: function(){
				$('.create-connection-container').toggle();
				$('.netinfos-overview').toggle();
			},
			
			

			isSubnetInConnectionSubnets: function(currentSubnetID){

				var self = this;
				
				var editConnection = self.get("editedConnection");
				var editedConnection = null;

				if (editConnection == null){
					return false;
				}
				else {
					$.each(self.get("unitData").connections, function(idx, conx){
						if (conx.connection_id == editConnection.connection_id){
							editedConnection = conx;
							return;
						}
					});
				}

				for (var i=0; i < editedConnection.unit_network_subnets.length; i++){
					
					if (editedConnection.unit_network_subnets[i].unit_network_subnet_id == currentSubnetID){
						return true;	
					}	
				}

				return false;
				
			},
			
			
			grdBoundListener: function(e){
				
				var grd = e.sender;
				var notificationEmpty = grd.element.parent().find("p");	


				var id = grd.element.attr("id");

				if (id == "grd-circuits") {
					$.each(grd.dataSource.data(), function(idx, circuit){
						//console.log(circuit.status);
					});
				}
				
				if (grd.dataSource.total() == 0){
					grd.element.hide();
					notificationEmpty.show();
				}
				else{
					grd.element.show();
					notificationEmpty.hide();
				}

			},
			
			

			refreshGrds: function() {
				$("#grd-network-elements").data("kendoGrid").refresh();
				$("#grd-circuits").data("kendoGrid").refresh();
				$("#grd-cpes").data("kendoGrid").refresh();
				$("#grd-ldaps").data("kendoGrid").refresh();
			}

		});
		//END VIEWMODEL DECLARATION 
		
		

				
		
		viewModel.unitSource.fetch(function(){


			registry_no = (viewModel.unitSource).data()[0].registry_no;

			var requests = [];


			<?php if (!$isAnonymous) { ?>
			requests.push(get_ext_log_entries(mm_id, viewModel));
			requests.push(get_cpes(mm_id, viewModel));
			requests.push(get_crm_data(mm_id, viewModel));
			requests.push(get_ldap_entries(mm_id, viewModel));
			<?php } ?>
			 
			$.when.apply(undefined, requests).done(function(results){


				console.log("-->populate details");
	
	         	try{
	         		kendo.bind($("#unit-" + mm_id + "-preview"), viewModel.unitSource);
	         	}
	         	catch(ex){
		            
	         	}
	
		       	
	         	kendo.ui.progress($('.unit-panel-details #mycontent:first'), false);
	
				console.log("populate details-->");
				 
			});
			
		});


		
		
		
      
		
    });
	

    var get_ext_log_entries = function(mm_id, viewModel) {


    	return $.ajax({
			type: "GET",
			url: apiUrl + "ext_log_entries", 
			data: {'object_id': mm_id},
            dataType: "json", 

            success: function(resp){

            	console.log("-->Request ext_log_entries");

            	var logs = new Array();

            	
            	if (resp.status != 401){
            	
					var curr_dataItem = {"data": {"lastUpdate": {"date": ""}}};                    	

                	$.each(resp.data, function(i, item){

                		if (typeof item.data["lastUpdate"] == "undefined") {
                			return;
                		}

                		if (item.data.lastUpdate === null){
                			return; 
                		}
						
                    	if (!equal(curr_dataItem.data.lastUpdate.date, item.data.lastUpdate.date) ){

                    		if (item.data.hasOwnProperty("state") || item.data.hasOwnProperty("name")) {
                        		logs.push(item);
                        		curr_dataItem = item;
                        	}
                    	}
                	});
            	}

            	viewModel.unitSource.data()[0]['logs'] = logs;
			},
			beforeSend: function(xhr){
				xhr.setRequestHeader(
					'Authorization',
					make_base_auth (user.backendAuthorizationHash)
				);
			}
		});
        
    };


    var get_cpes = function(mm_id, viewModel) {

    	return $.ajax({
			type: "GET",
			url: apiUrl + "cpes",
			data: {'unit': mm_id},
			dataType: "json",
            success: function(resp){

            	var cpes = new Array();
            	
                try {

                	if (resp.status != 401){
                		cpes = resp.data;
                	}
                	else {
	                	//console.log(resp.message);
                	}
										                	
                	viewModel.unitSource.data()[0]['cpes'] = cpes;
                }
                catch(ex){
	                console.log(ex);
                }
                finally {

	            }
			},
			beforeSend: function(xhr){
				xhr.setRequestHeader(
					'Authorization',
					make_base_auth (user.backendAuthorizationHash)
				);
			}
		});
    };

    var get_crm_data = function(mm_id, viewModel) {

    	return $.ajax({
			type: "GET",
			url: apiUrl + "crm_data", 
			data: {'mm_id': mm_id},
            dataType: "json", 

            success: function(resp){
                
            	console.log("-->Request crm_data");

            	var circuits = new Array();
            	var subnets = new Array();
            	var connections = new Array();

            	 try {

	                	if (resp.status != 401){
	                		circuits = resp.data.circuits;
	                		subnets = resp.data.subnets;
	                		connections = resp.data.connections;
	                	}
	                	else {
		                	//console.log(resp.message);
	                	}

	                	
											                	
	                	viewModel.unitSource.data()[0]['circuits'] = circuits;

	                	viewModel.unitSource.data()[0]['subnets'] = subnets;

	                	viewModel.unitSource.data()[0]['connections'] = connections;
                    	
	             }
	             catch(ex){
		                console.log(ex);
	             }
	             finally {

		         }

            	console.log("Request crm_data-->");
            },
			beforeSend: function(xhr){
				xhr.setRequestHeader(
					'Authorization',
					make_base_auth (user.backendAuthorizationHash)
				);
			}
            
        });
    };


    var get_ldap_entries = function(mm_id, viewModel) {

    	return $.ajax({
			type: "GET",
			url: apiUrl + "ldap_entries", 
			data: {'mm_id': mm_id},
            dataType: "json", 

            success: function(resp){
                
            	console.log("-->Request ldaps");

            	var ldaps = new Array();

            	 try {
	                	if (resp.status != 401){
	                		ldaps = resp.data;
	                	}
	                	else {
		                	//console.log(resp.message);
	                	}
			                	
	                	viewModel.unitSource.data()[0]['ldaps'] = ldaps;
                                            
	             }
	             catch(ex){
		                console.log(ex);
	             }
	             finally {

		         }

            	console.log("Request ldaps-->");
            },
			beforeSend: function(xhr){
				xhr.setRequestHeader(
					'Authorization',
					make_base_auth (user.backendAuthorizationHash)
				);
			}
            
        });
        
    };
    
   

</script>