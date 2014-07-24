<script>

    $(document).ready(function() {

        $("#frmSimpleSearchUnit .searchComponent").find(".k-toolbar.at-bottom").insertAfter($("#frmSimpleSearchUnit .searchComponent .k-content"));

        //resizeSearchWidget('frmSimpleSearchUnit');

        $('#btnSearch').click(function(e) {

            e.preventDefault();

            var formData = $("#frmSimpleSearchUnit").serializeArray();

            var dsSrcParams = [];

            $.each(formData, function(i, v) {
                dsSrcParams.push({'field': v.name, 'value': v.value});
            });

            $("#tabstrip-main").data("kendoTabStrip").select('#tb-units');
            
            $('#grid-units').data('kendoGrid').options.inSearching = true;
            $("#grid-units").data("kendoGrid").dataSource.filter(dsSrcParams);

        });

        $("#btnClear").click(function(e){
        	e.preventDefault();
        	$("#frmSimpleSearchUnit")[0].reset();
        });

        $('#btnSwitchToAdvancedSearch').click(function(e) {
            e.preventDefault();
            //var splitter = $("#splitter").data("kendoSplitter");
            var splitter = $("#horizontal").data("kendoSplitter");
            splitter.ajaxRequest("#tabstrip-left-2", "client/views/forms/frmAdvancedSearch.php");
        });

        
        var ea = $("#frmSimpleSearchUnit .src_eduAdmin").kendoMultiSelect({
            animation: false,
            dataTextField: "name",
            dataValueField: "edu_admin_id",
            placeholder: "Επιλέξτε...",
            dataSource: inMemoryEduAdmins.data(),
            change: function(e) {
                var value = this.value();
                $('#frmSimpleSearchUnit .src_eduAdmin').val(value);
            },
            select: function(e){
            	 
                //if (value==-1)
                //	$($("#frmSimpleSearchUnit .src_eduAdmin")[1]).data('kendoMultiSelect').value([-1]);
                
            }
        });
        //ea.data('kendoMultiSelect').dataSource.insert(0, { edu_admin_id: -1, name: "--Χωρίς Διεύθυνση εκπαίδευσης--" });
        

        var ie = $("#frmSimpleSearchUnit .src_implementationEntity:first").kendoMultiSelect({
            animation: false,
            dataTextField: "name",
            dataValueField: "implementation_entity_id",
            placeholder: "Επιλέξτε...",
            dataSource: inMemoryImplEnt,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#frmSimpleSearchUnit .src_implementationEntity').val(value);
            },
            dataBound: function(e){
            	
            }
        });

        ie.data('kendoMultiSelect').dataSource.bind("requestEnd", function(e){
        	//inMemoryImplEnt.insert(0, { implementation_entity_id: -1, name: "--Χωρίς Φορέα Υλοποίησης--" });
        });
        

        $("#src_state").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "state_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsStates,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            index: 0,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_state').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);

                this.select(1);
                this.trigger('change');
            }
        });

        $("#src_unitType").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "unit_type_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryUnitTypes,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_unitType').val(value);
            },
            dataBound: function() {
            }
        });
        
        resizeSearchWidget('frmSimpleSearchUnit');
    });

</script>

<link rel="stylesheet" href="client/styles/override.bts.kendo.css.css" />

<div class="container-fluid" style="height: 100%;overflow: hidden;">
    <form id="frmSimpleSearchUnit" class="form-horizontal sidebar-search-form" >

        <div class="k-block searchComponent">
            <!--
            <div class="k-header"><i class="icon-search"></i>&nbsp;Αναζήτηση</div>
            -->
            <div class="k-toolbar at-bottom container-fluid" style="text-align: right">
                <button id="btnClear" class="k-button span6">Καθαρισμός</button>
                <button id="btnSearch" class="k-button span6">Αναζήτηση</button>
            </div>

            <div class="k-toolbar at-top container-fluid" style="text-align: right">
                <a href="#" id="btnSwitchToAdvancedSearch" class="k-button span12">Σύνθετη Αναζήτηση</a>
            </div>

            <div class="k-content" style="overflow: auto; border: 0;">


                <div class="container-fluid content" style="border:0">


                    <div class="row-fluid">
                        <div class="span12">

                            <ul class="forms">
                                <li>
                                    <label>Όνομα Μονάδας</label>
                                    <input name="name" type="text" class="k-textbox span12" />
                                </li>

                                <li>
                                    <label>Κωδικός ΥΠΕΠΘ</label>
                                    <input name="registry_no" type="text" class="k-textbox span12"  />           
                                </li>

                                <li>
                                    <label>Διεύθυνση εκπαίδευσης</label>
                                    <input name="edu_admin" class="src_eduAdmin" />

                                </li>

                                <li>
                                    <label>Φορέας Υλοποίησης <span class="badge"></span></label>
                                    <input name="implementation_entity" class="src_implementationEntity"/>
                                </li>

                                <li>
                                	<label>Κατάσταση <span class="badge"></span></label>
                                	<input name="state" id="src_state" class="span12"  />
                                </li>
                                
                                <li>
                                	<label>Τύπος</label>
                                    <input name="unit_type" id="src_unitType" class="span12" />
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </form>

</div>