<style>
.tooltip{
position: fixed;
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
	
	<!-- start dialog declaration -->
	<div id="wnd_create_connection_<?php echo $_GET['mm_id']; ?>" 
			class="wnd_create_connection" 
			style="width:100%; height:100%; position: absolute: left:auto; z-index: 33010; border:none; border-radius:0px;"
			>
		
		<div class="modal-body">
			<form id="frm_create_connection_<?php echo $_GET['mm_id']; ?>">
				<input type="hidden" name="connection_id" id="connection_id" data-bind="value: editedConnection.connection_id"  >
				<div class="k-content">
					
					<div class="alert alert-danger empty-network-element" style="display:none;">Δεν έχετε επιλέξει set ip στοιχείων για την διασύνδεση</div>
					<div class="alert alert-danger empty-circuit" style="display:none;">Δεν έχετε επιλέξει κύκλωμα για την διασύνδεση</div>
					<div class="alert alert-success success-create" style="display:none;">Η διασύνδεση δημιουργήθηκε επιτυχώς</div>
					<div class="alert alert-success success-update" style="display:none;">Η διασύνδεση ενημερώθηκε επιτυχώς</div>
					
					<div class="panel panel-primary">
						<div class="panel-heading">» IPs</div>
						<div class="panel-body">
							
							<div id="grd-network-elements" 
								class="mmsch-grid"
								
								data-modelid="unit_network_subnet_id"
								data-selmodelid="unit_network_subnet_id"
								
								
								data-role="grid" 
								data-scrollable="false"
								data-selectable="row"
								
								data-columns="[
									{'title':'', 'width':'10px', template: '<span data-bind=\'html:renderRadioNetworkSubnet\' ></span>', encoded: true},										
									{'title':'IP', 'field': 'subnet_ip'},
									{'title':'Μάσκα', 'field': 'subnet_default_router'},
									{'title':'Default Gateway', 'field': 'mask'}, 
									{'title':'Τύπος', 'field': 'unit_network_subnet_type'}
								]" 
								data-bind="source: unitData.unit_network_subnets, events: {change: grdNetworksChangeListener, dataBound: grdBoundListener}"></div>
								
							<p class="text-muted text-center"><small><em>Δεν υπάρχουν διαθέσιμα IP στοιχεία</em></small></p>
							
						</div>
					</div>
					
					<!-- Κυκλώματα -->
					<div class="panel panel-primary">
						<div class="panel-heading">» Κυκλώματα</div>
						<div class="panel-body">
							<div id="grd-circuits" 
								class="mmsch-grid"
								data-modelid="circuit_id"
								data-selmodelid="circuit_id"
								data-role="grid" 
								data-scrollable="false"
								data-selectable="row"
								
								data-columns="[
									{'title':'', 'width':'10px', template: '<span data-bind=\'html:renderRadioCircuit\' ></span>', encoded: true},		
									{'title':'Αριθμός', 'field': 'phone_number'},
									{'title':'Τύπος', 'field': 'circuit_type'},
									{'title':'Χρηματοδότηση', 'field': 'paid_by_psd'}
								]" 
								data-bind="source: unitData.circuits, events: {change: grdCircuitsChangeListener, dataBound: grdBoundListener}"></div>
							
							<p class="text-muted text-center"><small><em>Δεν υπάρχουν διαθέσιμα τηλεπικοινωνιακά κυκλώματα</em></small></p>
					
						</div>
					</div>
					
					

					<!-- CPEs -->
					<div class="panel panel-primary">
						<div class="panel-heading">» CPEs</div>
						<div class="panel-body">
							
							<div id="grd-cpes" 
								class="mmsch-grid"
								data-modelid="cpe_id"
								data-selmodelid="cpe_id"
								data-role="grid" 
								data-scrollable="false"
								data-selectable="row"
								data-columns="[
									{'title':'', 'width':'10px', template: '<span data-bind=\'html:renderRadioCpe\' ></span>', encoded: true},		
									{'title':'&nbsp;', 'field': 'name'}
								]" 
								data-bind="source: unitData.cpes, events: {change: grdCpesChangeListener, dataBound: grdBoundListener}"></div>
							
							<p class="text-muted text-center"><small><em>Δεν υπάρχουν διαθέσιμοι τερματικοί εξοπλισμοί</em></small></p>
						</div>
					</div>
					
					
					
					<!-- UIDs -->
					<div class="panel panel-primary">
						<div class="panel-heading">» UIDs</div>
						<div class="panel-body">
						
							<div id="grd-ldaps" 
								class="mmsch-grid"
								data-modelid="ldap_id"
								data-selmodelid="ldap_id"
								data-role="grid" 
								data-scrollable="false"
								data-selectable="row"
								data-columns="[
									{'title':'', 'width':'10px', template: '<span data-bind=\'html:renderRadioLdap\' ></span>', encoded: true},		
									{'title':'&nbsp;', 'field': 'ldap_uid'}
								]" 
								data-bind="source: unitData.ldaps, events: {change: grdLdapsChangeListener, dataBound: grdBoundListener}">
							</div>

							<p class="text-muted text-center"><small><em>Δεν υπάρχουν διαθέσιμοι λογαριασμοί υπηρεσίας</em></small></p>
							
						</div>
					</div>
					
					
					
                </div>
			</form>
		</div>
		<div class="clearfix k-content wnd-footer">
			<div class="k-window-action">
				<button id="btnSaveConnection" 
				data-template="tpl-button-label" 
				data-bind="source:this ,events:{click: saveConnection}" 
				data-loading-text="Loading..."
				class="k-button primary pull-right" type="button">Δημιουργία Διασύνδεσης</button>
				
				<script id="tpl-button-label" type="text/x-kendo-template" >
				# if (editedConnection == null) { #
				Αποθήκευση
				# } else { #
				Αποθήκευση
				# } #
				</script>
				
			</div>
		</div>
	</div>
	<!-- end dialog declaration -->
	
	
    <div class="k-content accordion-wrapper" style="padding:10px;">
       	
       	<div class="item-header">
       		
       		<h5 style=""><strong data-bind="text: unitData.name"></strong>&nbsp;<a href="/?mm_id=<?php echo $_GET['mm_id']; ?>" target="_blank" class="btn btn-default btn-xs" id="loadUnitCard"><i class="glyphicon glyphicon-new-window"></i></a></h5>
       		
       	</div>
       	
		<div id="sidebar">
			<nav class="navbar navbar-default" role="navigation">
				
				<ul id="info-panelbar-<?php echo $_GET['mm_id']; ?>" class="nav navbar-nav">
	        	
					<li><a href="#holder-general-infos" data-toggle="tooltip" title="Γενικά στοιχεία"><i class="fa fa-info"></i></a></li>
					<li><a href="#holder-contact-infos" data-toggle="tooltip" title="Στοιχεία Επικοινωνίας"><i class="fa fa-phone"></i></a></li>
					<li><a href="#holder-workers-infos" data-toggle="tooltip" title="Εργαζόμενοι"><i class="fa fa-user"></i></a></li>
					<li class="dropdown">
						<a id="dLabel" href="#holder-net-infos" data-toggle="tooltip" title="Δικτυακά Στοιχεία" ><i class="fa fa-link"></i></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li><a href="#holder-set-ips" tabindex="-1">Set IPs</a></li>
							<li><a href="#holder-circuits" tabindex="-1">Κυκλώματα</a></li>
							<li><a href="#holder-cpes" tabindex="-1">CPEs</a></li>
							<li><a href="#holder-uids" tabindex="-1">UIDs</a></li>
						</ul>
					</li>
	    		
					<li><a href="#holder-geo-infos" data-toggle="tooltip" title="Τοπολογικά Στοιχεία"><i class="fa fa-map-marker"></i></a></li>
					<li><a href="#holder-manage-infos" data-toggle="tooltip" title="Διοικητικά Στοιχεία"><i class="fa fa-building-o"></i></a></li>
					<li><a href="#holder-transitions-infos" data-toggle="tooltip" title="Μεταβάσεις"><i class="fa fa-random"></i></a></li>
	    		
				</ul>
				
			</nav>
		</div>
        
		
		
        <div id="mycontent" class="tab-content " style="overflow:scroll; width:auto; position:relative;">
			
			<div id="holder-general-infos" class="detail-section">
				<div class="detail-section-header"><h3>Γενικά Στοιχεία</h3></div>
				<div class="detail-section-tab">
					<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tpl-general-info"></div>
						<script type="text/x-kendo-tmpl" id="tpl-general-info">
						<table class="table borderless">
							<tbody>
								<tr>
									<td class="detail-term">Κωδικός ΜΜ</td>
									<td class="term-value">#= mm_id #</td>
								</tr>
								<tr>
									<td class="detail-term">Κωδικός ΥΠΕΠΘ</td>
									<td class="term-value">#= registry_no #</td>
								</tr>
								# if (gluc != null) { #
								<tr>
									<td class="detail-term">Κωδικός GLUC</td>
									<td class="term-value">#= gluc #</td>
								</tr>
								# } #
								# if (edu_admin != null) { #
								<tr>    
									<td class="detail-term">Διεύθυνση εκπαίδευσης</td>
									<td class="term-value">#= edu_admin.replace("ΔΙΕΥΘΥΝΣΗ","") #</td>
								</tr>
								# } #
								# if (implementation_entity_id != null) { #
								<tr>
									<td class="detail-term">Φορέας Υλοποίησης</td>
									<td class="term-value"><a href="##" class="btn btn-xs btn-default btnShowImplementationEntityInfo" data-implementation_entity_id="#= implementation_entity_id #">#= implementation_entity_initials #</a></td>
								</tr>
								# } #
								<tr>
									<td class="detail-term">Τηλέφωνο Επικοινωνίας</td>
									<td class="term-value">#= phone_number #</td>
								</tr>
							</tbody>
						</table>
						</script>
					
				</div>
            </div>

                <div id="holder-contact-infos" class="detail-section">
					<div class="detail-section-header"><h3>Στοιχεία Επικοινωνίας</h3></div>
                    <div class="detail-section-tab">
						<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tpl-contact-info"></div>
						
							<script type="text/x-kendo-tmpl" id="tpl-contact-info">
							<table class="table borderless">
								<tbody>

									# if (special_name != null) { #
									<tr>
										<td class="detail-term">Προσωνύμιο</td>
										<td class="term-value">#= special_name #</td>
									</tr>
									# } #
								
									<tr>
										<td class="detail-term">Τηλέφωνο Επικοινωνίας</td>
										<td class="term-value">#= phone_number #</td>
									</tr>
								
									<tr>
										<td class="detail-term">Αριθμός FAX</td>
										<td class="term-value">#= fax_number #</td>
									</tr>
									
									<tr>
										<td class="detail-term">Ηλεκτρονική Αλληλογραφία</td>
										<td class="term-value">#= email #</td>
									</tr>
									
									<tr>							
										<td class="detail-term">Οδός, Αριθμός</td>
										<td class="term-value">#= street_address #</td>
									</tr>
								
									<tr>
										<td class="detail-term">Ταχυδρομικός Κώδικας</td>
										<td class="term-value">#= postal_code #</td>
									</tr>
								
								</tbody>
							</table>
							</script>
						
					</div>
                </div>

				                <div id="holder-workers-infos" class="detail-section">
					<div class="detail-section-header"><h3>Εργαζόμενοι</h3></div>
					<div class="detail-section-tab">
						<div class="detail-section-tab-content">
							<div class="data-table" id="unit-<?php echo $_GET['mm_id']; ?>-workers" data-bind="source: unitData.workers" data-template="tpl-workers-list"></div>
					
							<script type="text/x-kendo-tmpl" id="tpl-workers-list">
								<div class="mmsch-list-item">
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


					<div id="holder-net-infos" class="detail-section">
					
						<div class="detail-section-header"><h3>Δικτυακά Στοιχεία</h3></div>
					
						<div class="detail-section-tab">
							<div class="detail-section-tab-content">
								<div class="data-table" id="unit-<?php echo $_GET['mm_id']; ?>-dns" data-bind="source: unitData.unit_dns" data-template="tpl-dns-list"></div>
							
								<script type="text/x-kendo-tmpl" id="tpl-dns-list">
									<table class="table borderless">
										<tbody>								
											<tr>
												<td class="detail-term">DNS Μονάδας</td>
												<td class="term-value">#= unit_dns #</td>
											</tr>
											
										</tbody>
									</table>
								</script>
							</div>
						</div> 
						
					
						<div class="detail-section-tab">
							<h4>Διασυνδέσεις</h4>
							<div class="clearfix" style="padding-right:10px;">
								<button id="btnCreateConnection" data-bind="click: createConnection" class="btn btn-default btn-sm pull-right" type="button"><i class="glyphicon glyphicon-plus"></i> Δημιουργία Διασύνδεσης</button>
							</div>
							<div class="detail-section-tab-content">
								
								<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-connection-list"></div>
						
								<script id="tmpl-connection-list" type="text/x-kendo-template" >
								# if (connections != null && connections.length > 0) { #
																		
									# for (var i = 0, len = connections.length;  i < len; i++ ){ #
									
									# var subnets = connections[i].unit_network_subnets;  #									
									
									# var safeSubnets = JSON.stringify(subnets); #

									<div class="mmsch-list-item">
									<table class="table borderless">
										<tbody>
											<tr>
												<td class="detail-term term-head" colspan="2">Διασύνδεση ${i+1}
												<button class="btn btn-default btn-xs editConnection" 
															
															data-connection_id="${connections[i]['connection_id']}"
															data-subnets=${safeSubnets}
															data-circuit_id="${connections[i]['circuit']['circuit_id']}"
															data-cpe_id="${connections[i]['cpe']['cpe_id']}"
															data-ldap_id="${connections[i]['ldap']['ldap_id']}"
															><span class="glyphicon glyphicon-pencil"></span></button>
												
												<button class="btn btn-default btn-xs deleteConnection" 
														data-connection_id="${connections[i]['connection_id']}"
														data-loading-text="Loading..."
														><span class="glyphicon glyphicon-remove"></span></button>
												
												</td>
											</tr>
											
											# for (var j = 0, slen = subnets.length;  j < slen; j++ ){ #
											<tr><td colspan="2" class="connectionSubnet" ><table class="table borderless"><tbody>

											<tr>
												<td class="detail-term">IP</td>
												<td class="term-value">
													<a class="data" href="telnet://${subnets[j].subnet_ip}">${subnets[j].subnet_ip}</a>
												</td>
											</tr>
											<tr>
												<td class="detail-term">Μάσκα</td>
												<td class="term-value">${subnets[j].subnet_default_router}</td>
											</tr>
											<tr>
												<td class="detail-term">Default Gateway</td>
												<td class="term-value">${subnets[j].mask}</td>
											</tr>
											<tr>
												<td class="detail-term">Τύπος</td>
												<td class="term-value">${subnets[j].unit_network_subnet_type}</td>
											</tr>

											</tbody></table></td></tr>
											# } #
											
											<tr>
												<td class="detail-term">Κύκλωμα</td>
												<td class="term-value">
													${connections[i]["circuit"]["phone_number"]}&nbsp;&nbsp;${connections[i]["circuit"]["circuit_type"]}&nbsp;&nbsp;
													# if ( connections[i]["circuit"]["paid_by_psd"] ) { #
													[ΠΣΔ]
													# } else { #
													[ΙΔΙΩΤΙΚΟ]
													# } #
												</td>
											</tr>
											<tr>
												<td class="detail-term">CPE</td>
												<td class="term-value">${connections[i]["cpe"]["name"]}</td>
											</tr>		
											<tr>
												<td class="detail-term">Λογαριασμός Υπηρεσίας</td>
												<td class="term-value">${connections[i]["ldap"]["ldap_uid"]}</td>
											</tr>
										</tbody>
									</table>
									</div>
									# } #
									
									
										
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διασυνδέσεις</em></p>
								# } #
								</script>
							</div>	
						</div>
					
						<div id="holder-set-ips" class="detail-section-tab">
							<h4>Υποδίκτυα</h4>
							<div class="detail-section-tab-content">
								<div class="data-table" id="unit-<?php echo $_GET['mm_id']; ?>-network_subnets" data-bind="source: unitData" data-template="tmpl-network-network-list"></div>
								
								<script id="tmpl-network-network-list" type="text/x-kendo-template">
								# if (unit_network_subnets != null && unit_network_subnets.length > 0) { #
								
									# for (var i = 0, len = unit_network_subnets.length;  i < len; i++ ){ #
									
									# var unit_network_subnet = unit_network_subnets[i]; #
									
									<div class="mmsch-list-item">
									<table class="table borderless">
										<tbody>	
											<tr><td class="detail-term term-head" colspan="2">Στοιχεία IP ${i+1}
											# if (unit_network_subnet.is_connected == true) { #
											<span class="label label-warning">Mapped</span>
											<button class="btn btn-default btn-xs toggleNetworkElementInfo"><span class="fa fa-expand"></span></button>
											# } else { #
											<span class="label label-success">Διαθέσιμο</span>
											<button class="btn btn-default btn-xs toggleNetworkElementInfo"><span class="fa fa-compress"></span></button>
											# } #
											</td></tr>							
											<tr class="# if (unit_network_subnet.is_connected) { # soft-hide # } #">
												<td class="detail-term">IP</td>
												<td class="term-value">
													<a class="data" href="telnet://${unit_network_subnet.subnet_ip}">${unit_network_subnet.subnet_ip}</a>
												</td>
											</tr>
											<tr class="# if (unit_network_subnet.is_connected) { # soft-hide # } #">
												<td class="detail-term">Μάσκα</td>
												<td class="term-value">${unit_network_subnet.subnet_default_router}</td>
											</tr>
											<tr class="# if (unit_network_subnet.is_connected) { # soft-hide # } #">
												<td class="detail-term">Default Gateway</td>
												<td class="term-value">${unit_network_subnet.mask}</td>
											</tr>
											<tr class="# if (unit_network_subnet.is_connected) { # soft-hide # } #">
												<td class="detail-term">Τύπος</td>
												<td class="term-value">${unit_network_subnet.unit_network_subnet_type}</td>
											</tr>
										</tbody>
									</table>
									</div>
									# } #
									
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν Υποδίκτυα</em></p>
								# } #
								</script>
							
							</div>
						</div>
					
						<!-- Κυκλώματα -->
						<div id="holder-circuits" class="detail-section-tab">
							<h4>Κυκλώματα</h4>
							<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-circuit-list"></div>
														
								<script id="tmpl-circuit-list" type="text/x-kendo-template">
								# if (circuits != null && circuits.length > 0) { #
									
									
									
									# for (var i = 0, len = circuits.length;  i < len; i++ ){ #
									
									# var circuit = circuits[i]; #
									
									<div class="mmsch-list-item">
									<table class="table borderless">
									<tbody>
										<tr>
											<td colspan="2" class="detail-term term-head">Κύκλωμα ${i+1}
												# if (circuit.is_connected == true) { #
												<span class="label label-warning">Mapped</span>
												<button class="btn btn-default btn-xs toggleCircuitInfo"><span class="fa fa-expand"></span></button>
												# } else { #
												<span class="label label-success">Διαθέσιμο</span>
												<button class="btn btn-default btn-xs toggleCircuitInfo"><span class="fa fa-compress"></span></button>
												# } #
												
												
											</td>
											
										</tr>
										<tr class="# if (circuit.is_connected) { # soft-hide # } #">
											<td class="detail-term">Τηλ. Αριθμός</td>
											<td class="term-value">${circuit.phone_number}</td>
										</tr>	
										<tr class="# if (circuit.is_connected) { # soft-hide # } #">
											<td class="detail-term">Τύπος</td>
											<td class="term-value">${circuit.circuit_type}</td>
										</tr>
										<tr class="# if (circuit.is_connected) { # soft-hide # } #">
											<td class="detail-term">Χρηματοδότηση</td>
											<td class="term-value">
												# if(circuit.paid_by_psd){ #
												[ΠΣΔ]
												# } else { #
												[ΙΔΙΩΤΙΚΟ]
												# } #
											</td>
										</tr>	
									</tr>
									</table>
									</tbody>
									</div>
									# } #
									
									
									
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διαθέσιμα τηλεπικοινωνιακά κυκλώματα</em></p>
								# } #
								</script>
							
						</div>
					
						<!-- CPEs -->
						<div id="holder-cpes" class="detail-section-tab">
							<h4>CPEs</h4>
							<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-cpe-list"></div>
								
								<script type="text/x-kendo-template" id="tmpl-cpe-list">
								# if (cpes != null && cpes.length > 0) { #
									
									<table class="table borderless">
									<tbody>
									
									# for (var i = 0, len = cpes.length;  i < len; i++ ){ #
									
									# var cpe = cpes[i]; #

									<tr>
										<td class="term-value term-head">CPE ${i+1}
										# if (cpe.is_connected == true) { #
											<span class="label label-success">Mapped</span>
										# } else { #
											<span class="label label-warning">Not Mapped</span>
										# } #
										</td>
										<td class="term-value">${cpe.name}</td>
									</tr>
									
									# } #
									
									</table>
									</tbody>
									
								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διαθέσιμοι τερματικοί εξοπλισμοί</em></p>
								# } #
								</script>
							
						</div>
					
						<!-- UIDs -->
						<div id="holder-uids" class="detail-section-tab">
							<h4>UIDs</h4>
							<div class="detail-section-tab-content" data-bind="source: unitData" data-template="tmpl-ldap-list"></div>
								
								<script type="text/x-kendo-template" id="tmpl-ldap-list">
								# if (ldaps != null && ldaps.length > 0) { #
									
									<table class="table borderless">
									<tbody>

									# for (var i = 0, len = ldaps.length;  i < len; i++ ){ #

									# var ldap = ldaps[i]; #

									<tr>
										<td class="detail-term">Λογαριασμός Υπηρεσίας </td>
										<td class="term-value">${ldap.ldap_uid}</td>
									</tr>

									# } #

									</table>
									</tbody>

								# } else { #
								<p class="text-muted"><em>Δεν υπάρχουν διαθέσιμοι λογαριασμοί υπηρεσίας</em></p>
								# } #
								</script>
							
						</div>
					
					</div>
					
				
                
                
				
                <div id="holder-geo-infos" class="detail-section">
					
					<div class="detail-section-header"><h3>Τοπολογικά Στοιχεία</h3></div>
					<div class="detail-section-tab">
						<div class="detail-section-tab-content">
						
						<table class="table borderless">
							<tbody>
								<tr>
									<td class="detail-term">Νομός</td>
									<td class="term-value" data-bind="text: unitData.prefecture"></td>
								</tr>
								
								<tr>
									<td class="detail-term">Δήμος ΟΤΑ</td>
									<td class="term-value" data-bind="text: unitData.municipality"></td>
								</tr>
								
								<tr>
									<td class="detail-term">Οδός, Αριθμός</td>
									<td class="term-value" data-bind="text: unitData.street_address"></td>
								</tr>
								
								<tr>
									<td class="detail-term">Ταχυδρομικός Κώδικας</td>
									<td class="term-value" data-bind="text: unitData.postal_code"></td>
								</tr>
								
								<tr class="soft-hide">
									<td class="detail-term">Γεωγραφικό Πλάτος</td>
									<td class="term-value" data-bind="text: unitData.latitude"></td>
								</tr>
								
								<tr class="soft-hide">
									<td class="detail-term">Γεωγραφικό Μήκος</td>
									<td class="term-value" data-bind="text: unitData.longitude"></td>
								</tr>
								
								<tr class="soft-hide">
									<td class="detail-term">Κτηριακή Θέση</td>
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


                <div id="holder-manage-infos" class="detail-section">
					<div class="detail-section-header"><h3>Διοικητικά Στοιχεία</h3></div>
					<div class="detail-section-tab">
						<div class="detail-section-tab">
							<table class="table borderless">
								<tbody>
									
									<tr>
										<td class="detail-term">Περιφέρεια</td>
										<td class="term-value" data-bind="text: unitData.region_edu_admin"></td>
									</tr>
									
									<tr>	
										<td class="detail-term">Περιοχή Μετάθεσης</td>
										<td class="term-value" data-bind="text: unitData.transfer_area"></td>
									</tr>
									
									<tr>	
										<td class="detail-term">Φορέας Υλοποίησης</td>
										<td class="term-value" data-bind="text: unitData.implementation_entity_initials"></td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
                </div>


                <div id="holder-transitions-infos" class="detail-section">
					<div class="detail-section-header"><h3>Μεταβάσεις</h3></div>
                    <div class="detail-section-tab">
						<div class="detail-section-tab-content list-item" data-bind="source: unitData" data-template="tmpl-transaction-list"></div>
							
							<script id="tmpl-transaction-list" type="text/x-kendo-template">
							
							# if (transitions != null) { #
								
   								# for (var i = 0, len = transitions.length;  i < len; i++ ){ #
									
									<table class="table borderless" >
										<thead><tr><th colspan="2">Μετάβαση: ${i+1}</th></tr></thead>
										<tbody>
											<tr> 
												<td class="detail-term">Κατάσταση</td> 
												<td class="term-value">${transitions[i]["to_state"]}</td>
											</tr>
										</tbody>
									</table>

									

 								# } #
								
							# } #
							
							</script>
							
                    </div>
                </div>
			
    	</div>
    </div>

</div>


<script type="text/javascript">
        
	//kendo.ui.progress($('.splitter-holder-inner .k-pane:last'), true);
	//function hello(d){ console.log(d); return "ds";}
	
    $(document).ready(function() {
	
    	var wnd_implementation_entity_info;
        
        var mm_id = "<?php echo $_GET['mm_id']; ?>";
		var wnd_create_connection;
		
		$("#unit-" + mm_id + "-preview").on("destroyed", function () {
			console.log("Element " + mm_id + " was destroyed");
			$("#wnd_create_connection_" + mm_id).data("kendoWindow").destroy();
			wnd_implementation_entity_info.destroy();

			$(window).off('resize', resizeTabContent );
			
			//$("body").off("click", "button.editConnection");
			//$("body").off("click", "button.deleteConnection");
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
		

		/*
		$("#unit-" + mm_id + "-preview").on("click", "#loadUnitCard", function(e){
			e.preventDefault();
			$( "#bodyInner" ).load( "client/views/grids/unit-card.php?mm_id=" + mm_id, function(){

			});
		});
		*/

		if ($("#loadUnitCard").closest("#mod-unit-card").length){
			$("#loadUnitCard").hide();
		}
		                                                 		
		
		
		$('.nav li a').click(function(e){
			
			var link = $(e.target).closest("a");
			
			e.preventDefault();
			
			
			$(".tab-content")
				.scrollTo(
					$(".tab-content").find($(this).attr('href')), 
					{
						duration: 150
					}
				);
		});
		
        var viewModel = kendo.observable({
			
			unitData: null,
			
			editedConnection: null,
			
			unitSource: new kendo.data.DataSource({
				transport: {
					read: {
						url: apiUrl + "units",
						dataType: "json",
						type: "GET",
						data: {
							mm_id: mm_id
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
				
					var viewModel = this.parent();
					
					var view = this.view();
					
					viewModel.set("unitData", view[0]);

					/*
					console.log("view model change");
					console.log(viewModel.get("unitData"));

					kendo.bind($("#unit-" + mm_id + "-preview"), viewModel);
					kendo.bind($("#wnd_create_connection_" + mm_id).parent(), viewModel);
					*/
				}
			}),
			
			createConnection: function(e){
				//kendo.bind($("#wnd_create_connection_" + mm_id), viewModel);
				wnd_create_connection.center().open();
			},
			
			backToNetInfo: function(){
				$('.create-connection-container').toggle();
				$('.netinfos-overview').toggle();
			},
			
			editConnection: function(e){

				//console.log($(e.target).data());

				var self = this;
				var data = $(e.target).data();
				
				self.set("editedConnection", {
					connection_id: data.connection_id,
					subnets: data.subnets,
					circuit_id: data.circuit_id,
					cpe_id: data.cpe_id,
					ldap_id:data.ldap_id
				});
				
				//editedConnection = self.get("editedConnection");
				
				//console.log(self.get("editedConnection"));
				
				wnd_create_connection.center().open();
			},

			saveConnection: function(e){
				
				var self = this;
			
				var $form = $("#frm_create_connection_" + mm_id);
			
				var btn = $(e.target);
			
				var connection_id = $('form#frm_create_connection_' + mm_id + ' input#connection_id').val();
				//var unit_network_subnet_id = $('form#frm_create_connection_' + mm_id + ' input[name=group_net_elem]:checked').val() || null;
				var circuit_id = $('form#frm_create_connection_' + mm_id + ' input[name=group_circuits]:checked').val() || null;
				var ldap_id = $('form#frm_create_connection_' + mm_id + ' input[name=group_ldaps]:checked').val() || null;
				var cpe_id = $('form#frm_create_connection_' + mm_id + ' input[name=group_cpes]:checked').val() || null;
				var subnets = new Array();
				$.each($("input[name='subnets[]']:checked"), function() {
					subnets.push($(this).val());
				});

				//console.log(subnets);return;

				var params = {
					'mm_id': mm_id
				};			

				if (circuit_id != null){
					params["circuit_id"] = circuit_id;
				}

				if (ldap_id != null){
					params["ldap_id"] = ldap_id;
				}

				if (cpe_id != null){
					params["cpe_id"] = cpe_id;
				}
				
				var method="POST";
				if (connection_id != ""){
					params['connection_id'] = connection_id;
					method="PUT";
				}
				
				// display or hide errors none subnet is selected
				if (subnets.length == 0){
					$form.find(".alert-danger.empty-network-element").show("fast");
					return;
				}else {
					$form.find(".alert-danger.empty-network-element").hide();
				}
				
				// display or hide errors depending on circuit value
				if (circuit_id == null){
					$form.find(".alert-danger.empty-circuit").show("fast");
					return;
				}else {
					$form.find(".alert-danger.empty-circuit").hide();
				}
								
				btn.button("loading");

				var editConnection = self.get("editedConnection");
				var connectionSubnets = new Array();
				
				if (editConnection != null){

					//find connection
					var editedConnection = null;
					$.each(self.get("unitData").connections, function(idx, conx){
						if (conx.connection_id == editConnection.connection_id){
							editedConnection = conx;
							return;
						}
					});
					
					$.each(editedConnection.unit_network_subnets, function(i,t){
						connectionSubnets.push(
							{
								"connection_unit_network_subnet_id": (t.connection_unit_network_subnet_id).toString(),
								 "unit_network_subnet_id": (t.unit_network_subnet_id).toString()
							}
						);
					});
				}

				var subnets2add = [];
				$.each(subnets, function(key,value) {
					
				    var found = false;

				    $.each(connectionSubnets, function(k, connectionSubnet){
					    if (connectionSubnet.unit_network_subnet_id == value){
					    	found = true;
					    	return;
					    }
					});

					if (!found)
				    subnets2add.push(value);
				});


				var subnets2delete = [];
				$.each(connectionSubnets, function(key,connectionSubnet) {
					
					var found = false;

				    $.each(subnets, function(k, subnet){
					    if (connectionSubnet.unit_network_subnet_id == subnet){
					    	found = true;
					    	return;
					    }
					});

					if (!found)
					subnets2delete.push(connectionSubnet.connection_unit_network_subnet_id);
				    
				});
				
				$.ajax({
					type: method,
					url: apiUrl + "connections", 
					data: params,
                    dataType: "json", 

                    success: function(resp){

                    	if (method == "POST"){
							connection_id = resp.connection_id;
                    	}
						console.log(addConnectionRequests);
                    	var addConnectionRequests = [];
                    	if (subnets2add.length > 0){
                        	for (var i = 0; i < subnets2add.length; i++){
                        		addConnectionRequests.push(
									$.ajax({
										type: "POST",
										url: apiUrl + "connection_unit_network_subnets", 
										data: {
											"connection_id" : connection_id,
										    "unit_network_subnet_id" : subnets2add[i]
										},
						                dataType: "json",
						                beforeSend: function(xhr){
											xhr.setRequestHeader(
												'Authorization',
												make_base_auth ('mmschadmin', 'mmschadmin')
											);
										}
									})
                                );
                        	}
                    	}

                    	var deleteConnectionRequests = [];
                    	if (subnets2delete.length > 0){
                        	for (var i = 0; i < subnets2delete.length; i++){
                        		deleteConnectionRequests.push(
									$.ajax({
										type: "DELETE",
										url: apiUrl + "connection_unit_network_subnets?connection_unit_network_subnet_id=" + subnets2delete[i], 
						                dataType: "json",
						                beforeSend: function(xhr){
											xhr.setRequestHeader(
												'Authorization',
												make_base_auth ('mmschadmin', 'mmschadmin')
											);
										}
									})
                                );
                        	}
                    	}
						
                    	$.when.apply($, addConnectionRequests).then(
                            function(){
                            	$.when.apply($, deleteConnectionRequests).then(
                                	function(){
                                		btn.button("reset");

                						//at this point every check passes show display sucess msg depending on method post/put
                						if (method == "POST"){
                							$form.find(".alert-success.success-create").show("fast");
                						}
                						if (method == "PUT"){
                							$form.find(".alert-success.success-update").show("fast");
                						}

                						self.get("unitSource").read();
                						
                                	}
                                );
                            }	
                        );
					},
					beforeSend: function(xhr){
						xhr.setRequestHeader(
							'Authorization',
							make_base_auth ('mmschadmin', 'mmschadmin')
						);
					}
				});
			},

			deleteConnection: function(e){

				e.preventDefault();
				
				var btn = $(e.target);
				
				var self = this;
				var data = $(e.target).data();
				
				var conf = confirm("Είστε σίγουροι ότι θέλετε να διαγράψετε τη διασύνδεση;");
				
				if (conf == true){ 
					
					btn.button("loading");
					
					var conx = null;
					$.each(self.get("unitData").connections, function(idx, connection){
						if (data.connection_id = connection.connection_id){
							conx = connection;
							return 0;
						}
					});
					
					var deleteConnectionSubnetsRequests = new Array();
					
					if (conx != null){

						$.each(conx.unit_network_subnets, function(i,connection_subnet){
								
							deleteConnectionSubnetsRequests.push(
								$.ajax({ 
									type: "DELETE",
									url: apiUrl + "connection_unit_network_subnets?connection_unit_network_subnet_id=" + connection_subnet.connection_unit_network_subnet_id,
									dataType: "json", 
									success: function(resp){},
									beforeSend: function(xhr){
											
										xhr.setRequestHeader(
											'Authorization',
											make_base_auth ('mmschadmin', 'mmschadmin')
										);
									}
								})		
							);
							
						});

						$.when.apply($, deleteConnectionSubnetsRequests).then(function(){

							$.ajax({ 
								type: "DELETE",
								url: apiUrl + "connections?connection_id=" + data.connection_id,
								dataType: "json", 
								success: function(resp){
									
									btn.button("reset");
									
									self.get("unitSource").read();
								},
								beforeSend: function(xhr){
									
									xhr.setRequestHeader(
										'Authorization',
										make_base_auth ('mmschadmin', 'mmschadmin')
									);
								}
							});		
						});
					}
				}
			},
			
			renderRadioNetworkSubnet: function(e){
				
				var self = this;
				var editConnection = self.get("editedConnection");
				
				// create new connection				
				if (editConnection === null)
				{
					
					var disabled = "";
					if (e.is_connected){
						disabled="disabled";

						return "<span class=\"k-icon k-i-cancel\" title=\"\"></span>";
					}
					
					return "<input type=\"checkbox\"  " +
							" id=\"net_elem_" + e.unit_network_subnet_id + "\" "+
							" name=\"subnets[]\" " +
							" value=\"" + e.unit_network_subnet_id + "\" "+ 
							disabled + 
							">";
				}
				else // edit connection 
				{
					var disabled = "";
					var checked = "";
					var cssClass = "";
					
					if (e.is_connected){
						
						if (self.isSubnetInConnectionSubnets(e.unit_network_subnet_id)){
							checked = "checked ";
							
							var tr = $("#grd-network-elements").find("input[value='"+editConnection.unit_network_subnet_id+"'] ").closest("tr");
							tr.addClass("k-state-selected");
						}
						else {
							disabled = "disabled ";
							return "<span class=\"k-icon k-i-cancel\"></span>";
						}
					}
					
					return "<input type=\"checkbox\"  " +
							" id=\"net_elem_" + e.unit_network_subnet_id + "\" "+
							" name=\"subnets[]\" " +
							" value=\"" + e.unit_network_subnet_id + "\" "+ 
							disabled + 
							checked + 
							">";
				}
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
			
			renderRadioCircuit: function(e){
				
				var self = this;
				var editConnection = self.get("editedConnection");
				
				if (editConnection == null)
				{
					var disabled = "";
					if (e.is_connected){
						disabled="disabled";
						return "<span class=\"k-icon k-i-cancel\"></span>";
					}
					
					return "<input type=\"radio\"  " +
							" id=\"circuit_" + e.circuit_id + "\" "+
							" name=\"group_circuits\" " +
							" value=\"" + e.circuit_id + "\" "+ 
							disabled + 
							">";
				}
				else 
				{
					var disabled = "";
					var checked = "";
					var cssClass = "";
					
					if (e.is_connected){
						
						if (e.circuit_id ==  editConnection.circuit_id){
							checked = "checked ";
							
							var tr = $("#grd-circuits").find("input[value='"+editConnection.circuit_id+"'] ").closest("tr");
							tr.addClass("k-state-selected");
						}
						else {
							disabled = "disabled ";
							return "<span class=\"k-icon k-i-cancel\"></span>";
						}
					}
					
					return "<input type=\"radio\"  " +
							" id=\"circuit_" + e.circuit_id + "\" "+
							" name=\"group_circuits\" " +
							" value=\"" + e.circuit_id + "\" "+ 
							disabled + 
							checked + 
							">";
				}
			},
			
			renderRadioCpe: function(e){
				
				var self = this;
				var editConnection = self.get("editedConnection");
				
				if (editConnection == null)
				{
					var disabled = "";
					if (e.is_connected){
						disabled="disabled";
						return "<span class=\"k-icon k-i-cancel\"></span>";
					}
					
					return "<input type=\"radio\"  " +
							" id=\"cpe_" + e.cpe_id + "\" "+
							" name=\"group_cpes\" " +
							" value=\"" + e.cpe_id + "\" "+ 
							disabled + 
							">";
				}
				else 
				{
					var disabled = "";
					var checked = "";
					var cssClass = "";
					
					if (e.is_connected){
						
						if (e.cpe_id ==  editConnection.cpe_id){
							checked = "checked ";
							
							var tr = $("#grd-cpes").find("input[value='"+editConnection.cpe_id+"'] ").closest("tr");
							tr.addClass("k-state-selected");
						}
						else {
							disabled = "disabled ";
							return "<span class=\"k-icon k-i-cancel\"></span>";
						}
					}
					
					return "<input type=\"radio\"  " +
							" id=\"cpe_" + e.cpe_id + "\" "+
							" name=\"group_cpes\" " +
							" value=\"" + e.cpe_id + "\" "+ 
							disabled + 
							checked + 
							">";
				}
			},
			
			renderRadioLdap: function(e){
				
				var self = this;
				var editConnection = self.get("editedConnection");
				
				if (editConnection == null)
				{
					var disabled = "";
					if (e.is_connected){
						disabled="disabled";
						return "<span class=\"k-icon k-i-cancel\"></span>";
					}
					
					return "<input type=\"radio\"  " +
							" id=\"ldap_" + e.ldap_id + "\" "+
							" name=\"group_ldaps\" " +
							" value=\"" + e.ldap_id + "\" "+ 
							disabled + 
							">";
				}
				else 
				{
					var disabled = "";
					var checked = "";
					var cssClass = "";
					
					if (e.is_connected){
						
						if (e.ldap_id ==  editConnection.ldap_id){
							checked = "checked ";
							
							var tr = $("#grd-ldaps").find("input[value='"+editConnection.ldap_id+"'] ").closest("tr");
							tr.addClass("k-state-selected");
						}
						else {
							disabled = "disabled ";
							return "<span class=\"k-icon k-i-cancel\"></span>";
						}
					}
					
					return "<input type=\"radio\"  " +
							" id=\"ldap_" + e.ldap_id + "\" "+
							" name=\"group_ldaps\" " +
							" value=\"" + e.ldap_id + "\" "+ 
							disabled + 
							checked + 
							">";
				}
			},
			
			grdBoundListener: function(e){
				
				var grd = e.sender;
				var notificationEmpty = grd.element.parent().find("p");	
							
				if (grd.dataSource.total() == 0){
					grd.element.hide();
					notificationEmpty.show()
				}
				else{
					grd.element.show();
					notificationEmpty.hide();
				}

			},
			
			grdNetworksChangeListener: function(e){
				/*
				var self = this;
				
				var grd = e.sender;
								
				var selectedRow = grd.dataItem(grd.select());
				
				if (selectedRow != null){
				
					if (selectedRow.is_connected ){
						
						if(self.get("editedConnection")==null || (self.get("editedConnection")!=null && selectedRow.unit_network_subnet_id != self.get("editedConnection").network_element_id ))
						{
							e.preventDefault();
							grd.select().removeClass('k-state-selected');
						}
						else if (self.get("editedConnection")!=null && selectedRow.unit_network_subnet_id == self.get("editedConnection").network_element_id ){
							var radio = grd.select().find("input[type='checkbox']");
							radio.prop("checked", true);
						}

					} else {
						var radio = grd.select().find("input[type='checkbox']");					
						radio.prop("checked", true);
					}
				}
				*/
			},
			
			grdCircuitsChangeListener: function(e){
				var self = this;
				
				var grd = e.sender;
								
				var selectedRow = grd.dataItem(grd.select());
				
				if (selectedRow != null){
				
					if (selectedRow.is_connected ){
						
						if(self.get("editedConnection")==null || (self.get("editedConnection")!=null && selectedRow.circuit_id != self.get("editedConnection").circuit_id))
						{
							e.preventDefault();
							grd.select().removeClass('k-state-selected');
						}
						else if (self.get("editedConnection")!=null && selectedRow.circuit_id == self.get("editedConnection").circuit_id ){
							var radio = grd.select().find("input[type='radio']");
							radio.prop("checked", true);
						}

					} else {
						var radio = grd.select().find("input[type='radio']");					
						radio.prop("checked", true);
					}
				}
			},
			
			grdCpesChangeListener: function(e){
				var self = this;
				
				var grd = e.sender;
								
				var selectedRow = grd.dataItem(grd.select());
				
				if (selectedRow != null){
				
					if (selectedRow.is_connected ){
						
						if(self.get("editedConnection")==null || (self.get("editedConnection")!=null && selectedRow.cpe_id != self.get("editedConnection").cpe_id))
						{
							e.preventDefault();
							grd.select().removeClass('k-state-selected');
						}
						else if (self.get("editedConnection")!=null && selectedRow.cpe_id == self.get("editedConnection").cpe_id ){
							var radio = grd.select().find("input[type='radio']");
							radio.prop("checked", true);
						}

					} else {
						var radio = grd.select().find("input[type='radio']");					
						radio.prop("checked", true);
					}
				}
			},
			
			grdLdapsChangeListener: function(e){
				var self = this;
				
				var grd = e.sender;
								
				var selectedRow = grd.dataItem(grd.select());
				
				if (selectedRow != null){
				
					if (selectedRow.is_connected ){
						
						if(self.get("editedConnection")==null || (self.get("editedConnection")!=null && selectedRow.ldap_id != self.get("editedConnection").ldap_id))
						{
							e.preventDefault();
							grd.select().removeClass('k-state-selected');
						}
						else if (self.get("editedConnection")!=null && selectedRow.ldap_id == self.get("editedConnection").ldap_id ){
							var radio = grd.select().find("input[type='radio']");
							radio.prop("checked", true);
						}

					} else {
						var radio = grd.select().find("input[type='radio']");					
						radio.prop("checked", true);
					}
				}
			}

		});
		//END VIEWMODEL DECLARATION 
		
		
		
		wnd_create_connection = $("#wnd_create_connection_" + mm_id)
				.kendoWindow({
					title: "Δημιουργία Διασύνδεσης",
					animation:false,
                    modal: true,
                    visible: false,
                    resizable: true,
					close: function(e) {
						
						viewModel.set("editedConnection",null);
						
						//$("#grd-network-elements").data('kendoGrid').clearSelection();
						//$("#grd-network-elements input[type='radio']").prop('checked',false);
						
						//reset grids selections
						$.each($("#frm_create_connection_" + mm_id).find(".k-grid"), function(idx, gridElem){
							$(gridElem).data('kendoGrid').clearSelection();
							$(gridElem).find("input[type='radio']").prop('checked',false);
						});
						
						this.element.find(".alert").hide();
					}
					
                    
		}).data("kendoWindow");	

		var wnd_create_connection_container = wnd_create_connection.element.parent();
		

		
		wnd_create_connection_container.addClass("mmsch-window");
	
		wnd_create_connection_container.css("width","60%");
		wnd_create_connection_container.css("height","60%");	
		
		var content = $("#wnd_create_connection_" + mm_id + " .wnd-footer").parent().parent().find(".k-window-content");
		var footer = $("#wnd_create_connection_" + mm_id + " .wnd-footer");
		footer.insertAfter(content);

		
		viewModel.unitSource.fetch(function(){
			console.log("read unit");
			kendo.ui.progress($('.splitter-holder-inner .k-pane:last'), false);
			
			//viewModel.set("unitData", this.data()[0]);
			
			kendo.bind($("#unit-" + mm_id + "-preview"), viewModel);
			kendo.bind($("#wnd_create_connection_" + mm_id).parent(), viewModel);
			
			resizeTabContent();
			
		});
		
		
		
		
        var gridUnitTransitions = $("#unit-" + mm_id + "-transitions").kendoGrid({
            dataSource: new kendo.data.DataSource({
                data: []
            }),
            scrollable: false,
            autoBind: false,
            sortable: true,
            resizable: true,
            pageable: false,
            columns: [
                {
                    field: "transition_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "fek",
                    title: "Αριθμός ΦΕΚ"
                },
                {
                    field: "transition_date",
                    title: "Ημερομηνία της Μετάβασης"
                },
                {
                    field: "from_state",
                    title: "Αρχική Κατάσταση"
                },
                {
                    field: "to_state",
                    title: "Τελική Κατάσταση"
                },
                {}
            ]

        }).data('kendoGrid');

		/*
       
		*/
		/*
        
		*/
		//resizeTabContent();
		if ($('.splitter-holder-inner').length){
			var s = $('.splitter-holder-inner').data('kendoSplitter');
			s.bind('layoutChange', function(){
				resizeTabContent();
			});
		}
		else {
			$(window).on('resize', resizeTabContent );
		}

		$('[data-toggle="tooltip"]').tooltip({
			'placement': 'top'
		});
		

    });
	
function resizeTabContent(){
	
	var $summaryPane = $('.summary-pane'),
		h,i,		
		$tabContent= $summaryPane.find(".tab-content:first");	
		g= $(".preview-pane-toggle-button");				
		
		if($tabContent.length===0){return}					
		
		h = $tabContent.offset().top;				
		
		i = $('#body').outerHeight() + $('#body').offset().top - h - (g.outerHeight());			
		
		$tabContent.height(i);
		
		//fix last section's height 		
		
		$("#mycontent").scrollTop($("#mycontent").get(0).scrollHeight);
		var d = $("#mycontent > div.detail-section:last").position().top;
		if (d>0){
			$("#mycontent > div.detail-section:last").height("+=" + d);
		}
		$("#mycontent").scrollTop(0);
		
		//$('#mycontent').scrollspy({ target: '#sidebar' });
		$('#mycontent').scrollspy({ target: '#sidebar', offset:5 })
}
    
   

</script>