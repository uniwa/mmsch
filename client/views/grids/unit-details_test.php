<div id="unit-<?php echo $_GET['mm_id']; ?>-preview"  style="height: 100%;overflow-y: auto;">

    <h3 class="" data-bind="text: name"></h3>

    <ul id="info-panelbar-<?php echo $_GET['mm_id']; ?>">
        <li class="k-state-active">
            <span class="k-link k-state-selected"><b>Βασικά Στοιχεία</b></span>
            <div class="container-fluid">

                <div class="row-fluid">
                    <div class="span2 lightblue">
                        <label>Κωδικός ΥΠΕΠΘ</label>
                        <input type="text" class="span12" data-bind="value: registry_no" disabled="disabled"/>
                    </div>
                    <div class="span2 lightblue">
                        <label>Κωδικός GLUC</label>
                        <input type="text" class="span12" data-bind="value: gluc" disabled="disabled"/>    
                    </div>
                    <div class="span5 lightblue">
                        <label>Όνομα Μονάδας</label>
                        <input type="text" class="span12" data-bind="value: name" disabled="disabled"/>
                    </div>
                    <div class="span3 lightblue">
                        <label>Προσωνύμιο</label>
                        <input type="text" class="span12" data-bind="value: special_name" disabled="disabled"/>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span4 bgcolor">
                        <label>Κατηγορία</label>
                        <input type="text" id="category" class="span12" data-bind="value: category" disabled="disabled"/>
                    </div>
                    <div class="span4 bgcolor">
                        <label>Επίπεδο Εκπαίδευσης</label>
                        <input type="text" id="educationLevel" class="span12" data-bind="value: education_level" disabled="disabled"/>
                    </div>
                    <div class="span4 bgcolor">
                        <label>Τύπος</label>
                        <input type="text" id="type" class="span12" disabled="disabled"  data-bind="value: unit_type" disabled="disabled"/>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span4 bgcolor">
                        <label>Περιφέρεια</label>
                        <input type="text" id="regionEduAdmin2" class="span12"  data-bind="value: region_edu_admin" disabled="disabled"/>    
                    </div>
                    <div class="span4 bgcolor">
                        <label>Διεύθυνση εκπαίδευσης</label>
                        <input type="text" id="eduAdmin2" class="span12" data-bind="value: edu_admin" disabled="disabled"/> 
                    </div>
                    <div class="span4 bgcolor">
                        <label>Περιοχή Μετάθεσης</label>
                        <input type="text" id="transferArea2" class="span12" data-bind="value: transfer_area" disabled="disabled"/>    
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span4 bgcolor">
                        <label>Νομός</label>
                        <input type="text" id="regionEduAdmin2" class="span12"  data-bind="value: prefecture" disabled="disabled"/>    
                    </div>
                    <div class="span4 bgcolor">
                        <label>Δήμος ΟΤΑ</label>
                        <input type="text" id="eduAdmin2" class="span12" data-bind="value: municipality" disabled="disabled"/> 
                    </div>
                    <div class="span4 bgcolor">
                        <label>Φορέας Υλοποίησης</label>
                        <input type="text" id="eduAdmin2" class="span12" data-bind="value: implementation_entity" disabled="disabled"/> 
                    </div>

                </div>

            </div>
        </li>

        <li>
            <span><b>Στοιχεία Επικοινωνίας</b></span>
            <div class="container-fluid">

                <div class="row-fluid">
                    <div class="span4 lightblue">
                        <label>Τηλέφωνο Επικοινωνίας</label>
                        <input type="text" class="span12" data-bind="value: phone_number" disabled="disabled"/>
                    </div>
                    <div class="span4 lightblue">
                        <label>Ηλεκτρονική Αλληλογραφία</label>
                        <input type="text" class="span12" data-bind="value: email" disabled="disabled"/>
                    </div>
                    <div class="span4 lightblue">
                        <label>Αριθμός FAX</label>
                        <input type="text" class="span12" data-bind="value: fax_number" disabled="disabled"/>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span9 lightblue">
                        <label>Οδός, Αριθμός</label>
                        <input type="text" class="span12" data-bind="value: street_address" disabled="disabled"/>
                    </div>
                    <div class="span3 lightblue">
                        <label>Ταχυδρομικός Κώδικας</label>
                        <input type="text" class="span12" data-bind="value: postal_code" disabled="disabled" />
                    </div>
                </div>

            </div>
        </li>

        <li>
            <span><b>Εργαζόμενοι</b></span>
            <div class="container-fluid">

                <div class="row-fluid">
                    <div class="span12 lightblue">
                        <div class="mmsch-grid" id="unit-<?php echo $_GET['mm_id']; ?>-workers" ></div>
                    </div>
                </div>

            </div>
        </li>

        <li>
            <span><b>Μεταβάσεις</b></span>
            <div class="container-fluid">

                <div class="row-fluid" >
                    <div class="span12 lightblue">
                        <div class="mmsch-grid" id="unit-<?php echo $_GET['mm_id']; ?>-transitions" ></div>
                    </div>
                </div>

            </div>
        </li>

    </ul>

</div>


<script type="text/javascript">
    !function($) {
        $.extend($.fn, {
            busyIndicator: function(c) {

                b = $(this);

                var d = b.find(".k-loading-mask");
                c ? d.length || (d = $("<div class='k-loading-mask' style='width:100%;height:100%'><span class='k-loading-text'>Loading...</span><div class='k-loading-image'><div class='k-loading-color'></div></div></div>").prependTo(b)) : d && d.remove();


            }
        });
    }(jQuery);

    //$("#unit-<?php //echo $_GET['mm_id'];   ?>-preview").parent().busyIndicator(true);
    var  ds123  = null;
    $(document).ready(function() {

        var mm_id = "<?php echo $_GET['mm_id']; ?>";


        $("#info-panelbar-" + mm_id).kendoPanelBar({
            expandMode: "multiple",
            animation: false
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

        ds123 = new kendo.data.DataSource({
            transport: {
                read: {
                    url: apiUrl,
                    dataType: "json",
                    type: "POST",
                    data: {
                        method: "GetUnits",
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
                }
            },
            schema: {
                data: function(response) {
                    return response.data;
                },
                model: {
                    id: "mm_id"
                }
            },
            change: function(e) {
                //console.log(this.data());
                /*
                 var d = data.data[0];
                 
                 jQuery.each(d, function(i, val) {
                 viewModel.set(i, val);
                 });
                 */
            }
        });

        ds123.fetch(function() {
            var unit = ds123.data()[0];

            //jQuery.each(unit, function(i, val) {
                //viewModel.set(i, val);
            //});
            viewModel.set("name", unit.name);

            gridUnitWorkers.dataSource.data(unit.workers);
            gridUnitTransitions.dataSource.data(unit.transitions);

            kendo.bind($("#unit-" + mm_id + "-preview"), viewModel);

            resizeTabs();

        });

    });

</script>