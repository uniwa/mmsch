

<div id="unit-<?php echo $_GET['mm_id']; ?>-preview"  style="height: 100%;overflow: hidden;" class="unit-panel-details form-horizontal">
    <!--
    <div class="k-block k-info-colored"><strong data-bind="text: name"></strong></div>
    -->
    <div class="k-content accordion-wrapper" style="overflow: auto;">
       
        <ul id="info-panelbar-<?php echo $_GET['mm_id']; ?>">
        	<li class="k-state-active">Γενικά Στοιχεία</li>
			<li>Στοιχεία Επικοινωνίας</li>
    		<li>Δικτυακά στοιχεία</li>
    		<li>Τηλεπικοινωνιακά Κυκλώματα</li>
			<li>Γεωγραφικά στοιχεία</li>
    		<li>Διοικητικά στοιχεία</li>
    		<li>Εργαζόμενοι</li>
    		<li>Μεταβάσεις</li>
    		<li>Όλα τα στοιχεία</li>
        </ul>
        
        
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">

                            <dl class="dl-horizontal">
                                <dt>Κωδικός ΜΜ</dt>
                                <dd ><div class="span12" data-bind="text: mm_id"></div></dd>

                                <dt>Κωδικός ΥΠΕΠΘ</dt>
                                <dd ><div class="span12" data-bind="text: registry_no"></div></dd>

                                <dt>Κωδικός GLUC</dt>
                                <dd ><div class="span12" data-bind="text: gluc"></div></dd>
                                
                                <dt>Διεύθυνση εκπαίδευσης</dt>
                                <dd><div class="span12" data-bind="text: edu_admin"></div></dd>

                                <dt>Φορέας Υλοποίησης</dt>
                                <dd><div class="span12" data-bind="text: implementation_entity"></div></dd>

                                <dt>Τηλέφωνο Επικοινωνίας</dt>
                                <dd><div class="span12" data-bind="text: phone_number"></div></dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">

                            <dl class="dl-horizontal">

                                <dt>Προσωνύμιο</dt>
                                <dd><div class="span12" data-text="text: special_name"></div></dd>

                                <dt>Τηλέφωνο Επικοινωνίας</dt>
                                <dd><div class="span12" data-bind="text: phone_number"></div></dd>

                                <dt>Αριθμός FAX</dt>
                                <dd><div class="span12" data-bind="text: fax_number"></div></dd>

                                <dt>Ηλεκτρονική Αλληλογραφία</dt>
                                <dd><div class="span12" data-bind="text: email"></div></dd>

                                <dt>Οδός, Αριθμός</dt>
                                <dd><div class="span12" data-bind="text: street_address"></div></dd>

                                <dt>Ταχυδρομικός Κώδικας</dt>
                                <dd><div class="span12" data-bind="text: postal_code"></div></dd>

                            </dl>
                        </div>
                    </div>
                </div>


                <div class="container-fluid">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="mmsch-grid" id="unit-<?php echo $_GET['mm_id']; ?>-ipdns" ></div>
                        </div>
                    </div>

                </div>
			
                <div class="container-fluid">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="mmsch-grid" id="unit-<?php echo $_GET['mm_id']; ?>-circuits" ></div>
                        </div>
                    </div>

                </div>
            
                <div class="container-fluid">

                    <div class="row-fluid">
                        <div class="span12">
                            <dl class="dl-horizontal">

                                <dt>Νομός</dt>
                                <dd><div class="span12"  data-bind="text: prefecture"></div></dd>

                                <dt>Δήμος ΟΤΑ</dt>
                                <dd><div class="span12" data-bind="text: municipality"></div></dd>

                                <dt>Οδός, Αριθμός</dt>
                                <dd><div class="span12" data-bind="text: street_address"></div></dd>

                                <dt>Ταχυδρομικός Κώδικας</dt>
                                <dd><div class="span12" data-bind="text: postal_code"></div></dd>

                                <dt>Γεωγραφικό Πλάτος</dt>
                                <dd><div class="span12" data-bind="text: latitude"></div></dd>

                                <dt>Γεωγραφικό Μήκος</dt>
                                <dd><div class="span12" data-bind="text: longitude"></div></dd>

                                <dt>Κτηριακή Θέση</dt>
                                <dd><div class="span12" data-bind="text: positioning"></div></dd>

                            </dl>
                        </div>
                    </div>

                </div>


                <div class="container-fluid">

                    <div class="row-fluid">
                        <div class="span12">
                            <dl class="dl-horizontal">

                                <dt>Περιφέρεια</dt>
                                <dd><div class="span12"  data-bind="text: region_edu_admin"></div></dd>

                                <dt>Περιοχή Μετάθεσης</dt>
                                <dd><div class="span12" data-bind="text: transfer_area"></div></dd>

                                <dt>Φορέας Υλοποίησης</dt>
                                <dd><div class="span12" data-bind="text: implementation_entity"></div></dd>

                            </dl>
                        </div>
                    </div>

                </div>


                <div class="container-fluid">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="mmsch-grid" id="unit-<?php echo $_GET['mm_id']; ?>-workers" ></div>
                        </div>
                    </div>

                </div>


                <div class="container-fluid">

                    <div class="row-fluid" >
                        <div class="span12">
                            <div class="mmsch-grid" id="unit-<?php echo $_GET['mm_id']; ?>-transitions" ></div>
                        </div>
                    </div>

                </div>

            
                <div class="container-fluid">

                    <div class="row-fluid">
                    
                    	
                    	
                    	<div class="k-block k-info-colored span6">
                    		<div class="k-header">Γενικά Στοιχεία</div>
                    		
                    		<dl class="dl-horizontal">
								
								<dt>Κωδικός ΜΜ</dt>
                                <dd><div class="span12" data-bind="text: mm_id"></div></dd>
                                
								<dt>Κωδικός ΥΠΕΠΘ</dt>
                                <dd><div class="span12" data-bind="text: registry_no"></div></dd>
                                
								<dt>Κωδικός Gluc</dt>
                                <dd><div class="span12" data-bind="text: gluc"></div></dd>
                                
								<dt>Πρωτογενής Πηγή</dt>
                                <dd><div class="span12" data-bind="text: source"></div></dd>
                                
								<dt>Όνομα</dt>
                                <dd><div class="span12" data-bind="text: name"></div></dd>
                                
								<dt>Προσωνύμιο</dt>
                                <dd><div class="span12" data-bind="text: special_name "></div></dd>
                                
								<dt>Κατάσταση</dt>
                                <dd><div class="span12" data-bind="text: state"></div></dd>
                                
                                <dt>Επίπεδο Εκπαίδευσης</dt>
                                <dd><div class="span12" data-bind="text: education_level"></div></dd>
                            </dl>
                    	</div>
                    	
                    	<div class="k-block k-info-colored span6">
                    		<div class="k-header">Διοικητικά Στοιχεία</div>
                    		
                    		<dl class="dl-horizontal">
                    			<dt>Περιφέρεια</dt>
                           	 	<dd><div class="span12" data-bind="text: region_edu_admin"></div></dd>
                                
								<dt>Διεύθυνση Εκπαίδευσης</dt>
                                <dd><div class="span12" data-bind="text: edu_admin"></div></dd>

                                	<dt>Περιοχή Μετάθεσης</dt>
                                <dd><div class="span12" data-bind="text: transfer_area"></div></dd>
                                
								<dt>Φορέας Υλοποίησης</dt>
                                <dd><div class="span12" data-bind="text: implementation_entity"></div></dd>
                            </dl>
                    	</div>
                    	
                    </div>
                    
                    <div class="row-fluid">
                    	<div class="k-block k-info-colored span6">
                    		<div class="k-header">Στοιχεία Επικοινωνίας</div>
                    		<dl class="dl-horizontal">
                    			<dt>Τηλέφωνο Επικοινωνίας</dt>
                                <dd><div class="span12" data-bind="text: phone_number"></div></dd>
                                
								<dt>Ηλεκτρονική Αλληλογραφία</dt>
                                <dd><div class="span12" data-bind="text: email"></div></dd>
                                
								<dt>Αριθμός Τηλεομοιοτυπίας (φαξ)</dt>
                                <dd><div class="span12" data-bind="text: fax_number"></div></dd>
                                
								<dt>Διεύθυνση (Οδός και Αριθμός)</dt>
                                <dd><div class="span12" data-bind="text: street_address"></div></dd>
                                
                                <dt>ΑΦΜ</dt>
                                <dd><div class="span12" data-bind="text: tax_number"></div></dd>
                                
								<dt>Δ.Ο.Υ.</dt>
                                <dd><div class="span12" data-bind="text: tax_office"></div></dd>
                    		</dl>
                    	</div>
                    	
                    	<div class="k-block k-info-colored span6">
                    		<div class="k-header">Τοπολογικά Στοιχεία</div>
                    		<dl class="dl-horizontal">
                    			<dt>Νομός</dt>
                                <dd><div class="span12" data-bind="text: prefecture"></div></dd>
                                
								<dt>Δήμος ΟΤΑ</dt>
                                <dd><div class="span12" data-bind="text: municipality"></div></dd>
                                
                    			<dt>Γεωγραφικό Πλάτος</dt>
                                <dd><div class="span12" data-bind="text: latitude"></div></dd>
                                
								<dt>Γεωγραφικό Μήκος</dt>
                                <dd><div class="span12" data-bind="text: longitude"></div></dd>
                                
                                <dt>Κτηριακή Θέση</dt>
                                <dd><div class="span12" data-bind="text: positioning"></div></dd>
                             </dl>
                    	</div>
                    </div>

                    <div class="row-fluid">
                    	<div class="k-block k-info-colored span12">
                    		<div class="k-header">Άλλα Στοιχεία</div>
                    		<dl class="dl-horizontal">
                    			<dt>Ομάδα Σχολείων της Μονάδας (1η έως 40η)</dt>
                                <dd><div class="span12" data-bind="text: area_team_number"></div></dd>
                                
								<dt>Κατηγορία </dt>
                                <dd><div class="span12" data-bind="text: category"></div></dd>
                                
								<dt>Τύπος </dt>
                                <dd><div class="span12" data-bind="text: unit_type"></div></dd>
                                
								<dt>Ωράριο Λειτουργίας</dt>
                                <dd><div class="span12" data-bind="text: operation_shift"></div></dd>
                                
								<dt>Νομικός Χαρακτήρας</dt>
                                <dd><div class="span12" data-bind="text: legal_character"></div></dd>
                                
								<dt>Προσανατολισμός</dt>
                                <dd><div class="span12" data-bind="text: orientation_type"></div></dd>
                                
								<dt>Ειδικός Χαρακτηρισμός</dt>
                                <dd><div class="span12" data-bind="text: special_type"></div></dd>
                                

								<dt>Πλήθος Τάξεων</dt>
                                <dd><div class="span12" data-bind="text: levels_count"></div></dd>
                                
								<dt>Πλήθος Τμημάτων</dt>
                                <dd><div class="span12" data-bind="text: groups_count"></div></dd>
                                
								<dt>Πλήθος Μαθητών</dt>
                                <dd><div class="span12" data-bind="text: students_count"></div></dd>
                                
                                <dt>Ημερομηνία Τελευταίας Ενημέρωσης</dt>
                                <dd><div class="span12" data-bind="text: last_update"></div></dd>
                                
                                <dt>Ημερομηνία Τελευταίου Συγχρονισμού</dt>
                                <dd><div class="span12" data-bind="text: last_sync"></div></dd>


                                <dt>Σχόλια</dt>
                                <dd><div class="span12" data-bind="text: comments"></div></dd>
                            </dl>
                    	</div>
                    	
                    	<!-- 
                        <div class="span12">
                            <dl class="dl-horizontal">
								
								<dt>Κωδικός ΜΜ</dt>
                                <dd><div class="span12" data-bind="text: mm_id"></div></dd>
                                
								<dt>Κωδικός ΥΠΕΠΘ</dt>
                                <dd><div class="span12" data-bind="text: registry_no"></div></dd>
                                
								<dt>Κωδικός Gluc</dt>
                                <dd><div class="span12" data-bind="text: gluc"></div></dd>
                                
								<dt>Πρωτογενής Πηγή</dt>
                                <dd><div class="span12" data-bind="text: source"></div></dd>
                                
								<dt>Όνομα</dt>
                                <dd><div class="span12" data-bind="text: name"></div></dd>
                                
								<dt>Προσωνύμιο</dt>
                                <dd><div class="span12" data-bind="text: special_name "></div></dd>
                                
								<dt>Κατάσταση</dt>
                                <dd><div class="span12" data-bind="text: state"></div></dd>
                                
								<dt>Περιφέρεια</dt>
                                <dd><div class="span12" data-bind="text: region_edu_admin"></div></dd>
                                
								<dt>Διεύθυνση Εκπαίδευσης</dt>
                                <dd><div class="span12" data-bind="text: edu_admin"></div></dd>
                                
								<dt>Φορέας Υλοποίησης</dt>
                                <dd><div class="span12" data-bind="text: implementation_entity"></div></dd>
                                
								<dt>Περιοχή Μετάθεσης</dt>
                                <dd><div class="span12" data-bind="text: transfer_area"></div></dd>
                                
								<dt>Νομός</dt>
                                <dd><div class="span12" data-bind="text: prefecture"></div></dd>
                                
								<dt>Δήμος ΟΤΑ</dt>
                                <dd><div class="span12" data-bind="text: municipality"></div></dd>
                                
								<dt>Επίπεδο Εκπαίδευσης</dt>
                                <dd><div class="span12" data-bind="text: education_level"></div></dd>
                                
								<dt>Τηλέφωνο Επικοινωνίας</dt>
                                <dd><div class="span12" data-bind="text: phone_number"></div></dd>
                                
								<dt>Ηλεκτρονική Αλληλογραφία</dt>
                                <dd><div class="span12" data-bind="text: email"></div></dd>
                                
								<dt>Αριθμός Τηλεομοιοτυπίας (φαξ)</dt>
                                <dd><div class="span12" data-bind="text: fax_number"></div></dd>
                                
								<dt>Διεύθυνση (Οδός και Αριθμός)</dt>
                                <dd><div class="span12" data-bind="text: street_address"></div></dd>
                                
								<dt>ΑΦΜ</dt>
                                <dd><div class="span12" data-bind="text: tax_number"></div></dd>
                                
								<dt>Δ.Ο.Υ.</dt>
                                <dd><div class="span12" data-bind="text: tax_office"></div></dd>
                                
								<dt>Ομάδα Σχολείων της Μονάδας (1η έως 40η)</dt>
                                <dd><div class="span12" data-bind="text: area_team_number"></div></dd>
                                
								<dt>Κατηγορία </dt>
                                <dd><div class="span12" data-bind="text: category"></div></dd>
                                
								<dt>Τύπος </dt>
                                <dd><div class="span12" data-bind="text: unit_type"></div></dd>
                                
								<dt>Ωράριο Λειτουργίας</dt>
                                <dd><div class="span12" data-bind="text: operation_shift"></div></dd>
                                
								<dt>Νομικός Χαρακτήρας</dt>
                                <dd><div class="span12" data-bind="text: legal_character"></div></dd>
                                
								<dt>Προσανατολισμός</dt>
                                <dd><div class="span12" data-bind="text: orientation_type"></div></dd>
                                
								<dt>Ειδικός Χαρακτηρισμός</dt>
                                <dd><div class="span12" data-bind="text: special_type"></div></dd>
                                

								<dt>Πλήθος Τάξεων</dt>
                                <dd><div class="span12" data-bind="text: levels_count"></div></dd>
                                
								<dt>Πλήθος Τμημάτων</dt>
                                <dd><div class="span12" data-bind="text: groups_count"></div></dd>
                                
								<dt>Πλήθος Μαθητών</dt>
                                <dd><div class="span12" data-bind="text: students_count"></div></dd>
                                

								<dt>Γεωγραφικό Πλάτος</dt>
                                <dd><div class="span12" data-bind="text: latitude"></div></dd>
                                
								<dt>Γεωγραφικό Μήκος</dt>
                                <dd><div class="span12" data-bind="text: longitude"></div></dd>
                            
                            	<dt>Κτηριακή Θέση</dt>
                                <dd><div class="span12" data-bind="text: positioning"></div></dd>
                                

                                <dt>Ημερομηνία Τελευταίας Ενημέρωσης</dt>
                                <dd><div class="span12" data-bind="text: last_update"></div></dd>
                                
                                <dt>Ημερομηνία Τελευταίου Συγχρονισμού</dt>
                                <dd><div class="span12" data-bind="text: last_sync"></div></dd>


                                <dt>Σχόλια</dt>
                                <dd><div class="span12" data-bind="text: comments"></div></dd>

                            </dl>
                        </div>
                        
                        -->
                    </div>

                </div>
    
    </div>

</div>


<script type="text/javascript">
        
    /*
    function resizeUnitDetails()
    {
        var unitDetailsPanel = $(".unit-panel-details:visible").parent();
        var dataArea = unitDetailsPanel.find(".accordion-wrapper");
                 
        var newHeight = unitDetailsPanel.innerHeight();
        newHeight -= parseInt(unitDetailsPanel.css("padding-top"));
        newHeight -= parseInt(unitDetailsPanel.css("padding-bottom"));
        newHeight -= parseInt(unitDetailsPanel.css("border-bottom-width"));
        newHeight -= parseInt(unitDetailsPanel.css("border-top-width"));
        
        unitDetailsPanel.height(newHeight+2);
                 
        var otherElements = $(".unit-panel-details:visible").children().not(".accordion-wrapper");
        var otherElementsHeight = 2;
        otherElements.each(function() {
            otherElementsHeight += $(this).outerHeight(true);
        });
        
        otherElementsHeight += 40;
                
        dataArea.height(newHeight - otherElementsHeight);
    }
	*/
	
    $(document).ready(function() {

		/*
        $('#vertical').data("kendoSplitter").bind('resize layoutChange', function(){
           if (typeof $('.unit-panel-details:visible') != 'undefined')
           resizeUnitDetails();
        });

        $('#horizontal').data("kendoSplitter").bind('resize layoutChange', function(){
            if (typeof $('.unit-panel-details:visible') != 'undefined')
            resizeUnitDetails();
         });
        */
        
        var mm_id = "<?php echo $_GET['mm_id']; ?>";


        $("#info-panelbar-" + mm_id).parent().kendoTabStrip({
            //expandMode: "multiple",
            animation: false,
            //expand: function(e) {
            //    this.element.parent().scrollTo($(e.item), 700);
            //}
        });

        var viewModel = new kendo.observable({});

        var gridUnitWorkers = $("#unit-" + mm_id + "-workers").kendoGrid({
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
                    field: "worker_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "lastname",
                    title: "Επώνυμο"
                },
                {
                    field: "firstname",
                    title: "Όνομα"
                },
                {
                    field: "fathername",
                    title: "Πατρώνυμο"
                },
                {
                    field: "tax_number",
                    title: "ΑΦΜ"
                },
                {
                    field: "worker_specialization",
                    title: "Ειδικότητα"
                },
                {
                    field: "sex",
                    title: "Φύλο",
                    hidden: true
                }
            ]

        }).data('kendoGrid');

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

        var gridUnitIpDns = $("#unit-" + mm_id + "-ipdns").kendoGrid({
            dataSource: new kendo.data.DataSource({
                data: []
            }),
            scrollable: true,
            autoBind: false,
            sortable: true,
            resizable: true,
            pageable: false,
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
                ]

        }).data('kendoGrid');

        var gridUnitCircuits = $("#unit-" + mm_id + "-circuits").kendoGrid({

            dataSource: new kendo.data.DataSource({

           	 transport: {
                     read: {
                         url: apiUrl + "circuits",
                         dataType: "json",
                         type: "GET",
                         data: {
                             mm_id: mm_id
                         }
                     }
                 },
                 schema: {
                	 data: "data",
                     total: "total",
                     model: {
                         id: "circuit_id",
                         fields: {}
                     }
                 }
             
            }),
            scrollable: true,
            autoBind: false,
            sortable: true,
            resizable: true,
            pageable: false,
            columnMenu: true,
            columns: [
                    {
                        field: "circuit_id",
                        title: "Κωδικός",
                        hidden: true
                    },
                    {
                        field: "name",
                        title: "Όνομα"
                    },
                    {
                        field: "connectivity_type",
                        title: "Τύπος"
                    },
                    {
                        field: "phone_number",
                        title: "Τηλ. Αριθμός"
                    },
                    {
                        field: "status",
                        title: "Κατάσταση"
                    },
                    {
                        field: "paid_by_psd",
                        title: "Χρηματοδοτείται από το Π.Σ.Δ.",
                        hidden: true
                    },
                    {
                        field: "activated_date",
                        title: "Ημερομηνία Εγκατάστασης"
                    },
                    {
                        field: "updated_date",
                        title: "Ημερομηνία Ενημέωσης",
                        hidden: true
                    },
                    {
                        field: "deactivated_date",
                        title: "Ημερομηνία Απενεργοποίησης",
                        hidden: true
                    },
                    {
                        field: "bandwidth",
                        title: "Εύρως Ζώνης"
                    },
                    {
                        field: "readspeed",
                        title: "Ταχύτητα"
                    },
                    {}
                ]

        }).data('kendoGrid');
        
        var dataSource = new kendo.data.DataSource({
            transport: {
                read: {
                    url: apiUrl + "units",
                    dataType: "json",
                    type: "GET",
                    data: {
                        mm_id: mm_id
                    }
                },
                update: {
                    url: apiUrl,
                    dataType: "json",
                    type: "POST",
                    data: {
                        method: "PostUnit"
                    }
                },
                create: {
                    url: apiUrl,
                    dataType: "json",
                    type: "POST",
                    data: {
                        method: "PostUnit"
                    }
                },
                parameterMap: function(data, type) {

                    console.log(type);

                    if (type === "update") {

                        delete data.transitions;
                        delete data.levels;
                        delete data.workers;
                    }

                    return data;
                }
            },
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
                //resizeUnitDetails();
            }
        });

        dataSource.fetch(function() {

            var unit = dataSource.data()[0];
            
            //var unit = $('#tb-' + mm_id).data('unit')
            /*
            viewModel.set("mm_id", unit.get("mm_id"));
            viewModel.set("registry_no", unit.get("registry_no"));
            viewModel.set("gluc", unit.get("gluc"));
            viewModel.set("source", unit.get("source"));
            viewModel.set("name", unit.get("name"));
            viewModel.set("special_name", unit.get("special_name"));
            viewModel.set("state", unit.get("state"));
            viewModel.set("region_edu_admin", unit.get("region_edu_admin"));
            viewModel.set("edu_admin", unit.get("edu_admin"));
            viewModel.set("implementation_entity", unit.get("implementation_entity"));
            viewModel.set("transfer_area", unit.get("transfer_area"));
            viewModel.set("prefecture", unit.get("prefecture"));
            viewModel.set("municipality", unit.get("municipality"));
            viewModel.set("education_level", unit.get("education_level"));
            viewModel.set("phone_number", unit.get("phone_number"));
            viewModel.set("email", unit.get("email"));
            viewModel.set("fax_number", unit.get("fax_number"));
            viewModel.set("street_address", unit.get("street_address"));
            viewModel.set("postal_code", unit.get("postal_code"));
            viewModel.set("tax_number", unit.get("tax_number"));
            viewModel.set("tax_office", unit.get("tax_office"));
            viewModel.set("area_team_number", unit.get("area_team_number"));
            viewModel.set("category", unit.get("category"));
            viewModel.set("unit_type", unit.get("unit_type"));
            viewModel.set("operation_shift", unit.get("operation_shift"));
            viewModel.set("legal_character", unit.get("legal_character"));
            viewModel.set("orientation_type", unit.get("orientation_type"));
            viewModel.set("special_type", unit.get("special_type"));
            viewModel.set("levels_count", unit.get("levels_count"));
            viewModel.set("groups_count", unit.get("groups_count"));
            viewModel.set("students_count", unit.get("students_count"));
            viewModel.set("latitude", unit.get("latitude"));
            viewModel.set("longitude", unit.get("longitude"));
            viewModel.set("positioning", unit.get("positioning"));
            viewModel.set("last_update", unit.get("last_update"));
            viewModel.set("last_sync", unit.get("last_sync"));
            viewModel.set("comments", unit.get("comments"));
            */
            gridUnitWorkers.dataSource.data(unit.get("workers"));
            gridUnitTransitions.dataSource.data(unit.get("transitions"));
            gridUnitIpDns.dataSource.data(unit.get("unit_ip_dns"));

            //kendo.bind($("#unit-" + mm_id + "-preview"), viewModel);
            //kendo.bind($("#unit-" + mm_id + "-preview"), unit);

            gridUnitCircuits.dataSource.fetch(function(){

            	kendo.bind($("#unit-" + mm_id + "-preview"), unit);

            	window.setTimeout(function(){
					try{
                    resizeTabs();
                    resizeUnitDetails();}
                    catch(e){
                    }
                }, 100);
                
            });
            
            

        });

    });
    
   

</script>