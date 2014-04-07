<script type="text/javascript">
    $(document).ready(function() {
        /*
         $("#menu > div").accordion({
         header: "h3",
         collapsible: true,
         heightStyle: "content",
         animate: false,
         active: false
         });
         */
        var ss = $('.searchComponent .k-content:first');
        $("#menu").kendoPanelBar({
            expand: function(e) {
                ss.scrollTo($(e.item), 700);
                //console.log($(e.item));
            }
        });

        $(".searchComponent").find(".k-toolbar.at-bottom").insertAfter($(".searchComponent .k-content:first"));

        //resizeSearchWidget();


        $('#btnSearch').click(function(e) {

            e.preventDefault();

            var formData = $("#frmSearchUnit").serializeArray();

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
        	$("#frmSearchUnit")[0].reset();
        	$("#src_regionEduAdmin").data('kendoMultiSelect').dataSource.filter({});
        	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({});
        	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
        });

        $('#btnSwitchToSimpleSearch').click(function(e) {
            e.preventDefault();
            //var splitter = $("#splitter").data("kendoSplitter");
            var splitter = $("#horizontal").data("kendoSplitter");
            splitter.ajaxRequest("#tabstrip-left-2", "client/views/forms/frmSimpleSearch.php");
        });


        $("#src_category").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "category_id",
            optionLabel: "Επιλέξτε...",
            dataSource: dsCategories,
            autoBind: true,
            change: function() {

                var value = this.value();
                $('#src_category').val(value);

                var ddlUnitType = $('#src_unitType').data('kendoDropDownList');
                var ddlEducationLevel = $('#src_educationLevel').data('kendoDropDownList');
                var ddlOrientationType = $('#src_orientationType').data('kendoDropDownList');
                var ddlOperationShift = $('#src_operationShift').data('kendoDropDownList');
                var ddlSpecialType = $('#src_specialType').data('kendoDropDownList');

                ddlEducationLevel.select(0);
                ddlUnitType.current(null);

                if (value) {

                    ddlOrientationType.dataSource.one('change', function() {
                        ddlOrientationType.current(null);
                    }).filter({
                        field: "category",
                        value: parseInt(value)
                    });

                    ddlOperationShift.dataSource.one('change', function() {
                        ddlOperationShift.current(null);
                    }).filter({
                        field: "category",
                        value: parseInt(value)
                    });

                    ddlSpecialType.dataSource.one('change', function() {
                        ddlSpecialType.current(null);
                    }).filter({
                        field: "category",
                        value: parseInt(value)
                    });

                    ddlOrientationType.enable(true);
                    ddlOperationShift.enable(true);
                    ddlSpecialType.enable(true);

                } else {
                    ddlOrientationType.enable(false);
                    ddlOperationShift.enable(false);
                    ddlSpecialType.enable(false);
                }

                ddlOrientationType.select(0);
                ddlOperationShift.select(0);
                ddlSpecialType.select(0);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_educationLevel").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "education_level_id",
            optionLabel: "Επιλέξτε...",
            dataSource: dsEducationLevels,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_educationLevel').val(value);

                var ddlUnitType = $('#src_unitType').data('kendoDropDownList');
                var ddlCategory = $('#src_category').data('kendoDropDownList');

                if (value) {
                    dsUnitTypes
                            .one('change', function() {
                        ddlUnitType.current(null);
                    })
                            .filter({
                        'education_level': value,
                        'category': ddlCategory.value()
                    });

                    ddlUnitType.enable();
                } else {
                    ddlUnitType.enable(false);
                }

                ddlUnitType.select(0);
            },
            dataBound: function() {
                /*
                 var totalItems = this.dataSource.total();
                 var lbl = this.element.parent().prev();
                 lbl.find('.badge').html(totalItems);
                 */
            }
        });

        $("#src_unitType").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "unit_type_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryUnitTypes,
            //autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_unitType').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        //
        var $src_regionEduAdmin = $("#src_regionEduAdmin").kendoMultiSelect({
            dataTextField: "name",
            dataValueField: "region_edu_admin_id",
            optionLabel: "Επιλέψτε...",
            //dataSource: dsRegionEduAdmins,
            dataSource: inMemoryRegionEduAdmins.data(),
            //autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_regionEduAdmin').val(value);

                $("#src_eduAdmin").data('kendoMultiSelect').enable(true);
                $("#src_transferArea").data('kendoMultiSelect').enable(true);

                if (!$.isNumeric( value ) ){
                	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({});
                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                }
                else {
                    //$selected = 
                	//$("#src_eduAdmin").data('kendoDropDownList').dataSource.filter({'field': "region_edu_admin_id", 'value': value});
                	//$("#src_transferArea").data('kendoDropDownList').dataSource.filter({'field': "region_edu_admin_id", 'value': value});
                }

                var selected = $("#src_regionEduAdmin").data('kendoMultiSelect').value();

                if (selected.length > 0 ){

                	var normalizedFilter = new Array();
                	normalizedFilter.push({'field': "region_edu_admin_id", 'value': -1});

                	$.each(selected, function(index, value) {
                		normalizedFilter.push({'field': "region_edu_admin_id", 'value': value});
                	});

                	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({
                		logic: "or",
                		filters: normalizedFilter
                	});

                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({
                		logic: "or",
                		filters: normalizedFilter
                	});
                }
                else {
                	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({});
                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                }
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });
        //$src_regionEduAdmin.data('kendoMultiSelect').dataSource.insert(0, { region_edu_admin_id: -1, name: "--Χωρίς Περιφέρεια--" });

        var $src_eduAdmin = $("#src_eduAdmin").kendoMultiSelect({
            cascadeFrom: "src_regionEduAdmin",
            dataTextField: "name",
            dataValueField: "edu_admin_id",
            optionLabel: "Επιλέξτε...",
            //dataSource: inMemoryEduAdmins.data(),
            dataSource: inMemoryEduAdmins.data(),
            //dataSource: dsEduAdmins,
            //autoBind: false,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_eduAdmin').val(value);
                //$("#src_eduAdmin").data('kendoDropDownList').enable(true);
                $("#src_transferArea").data('kendoMultiSelect').enable(true);

                if (!$.isNumeric( value ) ){
                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                }

                var selected = $("#src_eduAdmin").data('kendoMultiSelect').value();

                if (selected.length > 0 ){

                	var normalizedFilter = new Array();

                	$.each(selected, function(index, value) {
                		normalizedFilter.push({'field': "edu_admin_id", 'value': value});
                	});

                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({
                		logic: "or",
                		filters: normalizedFilter
                	});
                }
                else {
                	//$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                	$("#src_regionEduAdmin").data('kendoMultiSelect').trigger('change');
                }
            },
            open: function() {
            	//$("#src_eduAdmin").data('kendoDropDownList').enable(true);
                /*var totalItems = this.dataSource.total();
                 var lbl = this.element.parent().prev();
                 lbl.find('.badge').html(totalItems);*/
                
                //this.dataSource.insert(0, { edu_admin_id: -1, name: "--Χωρίς Διεύθυνση εκπαίδευσης--" });
            }
        });
        $("#src_eduAdmin").data('kendoMultiSelect').enable(true);

        $("#src_transferArea").kendoMultiSelect({
            //cascadeFrom: "src_regionEduAdmin",
            dataTextField: "name",
            dataValueField: "transfer_area_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryTransferAreas,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_transferArea').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });
        $("#src_transferArea").data('kendoMultiSelect').enable(true);

        $("#src_orientationType").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "orientation_type_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsOrientationTypes,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_orientationType').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_operationShift").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "operation_shift_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsOperationShifts,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_operationShift').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_prefecture").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "prefecture_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsPrefectures,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_prefecture').val(value);

                var ddlMunicipality = $('#src_municipality').data('kendoDropDownList');

                if (value) {
                    ddlMunicipality.dataSource.one('change', function() {
                        ddlMunicipality.current(null);
                    }).filter({
                        field: "prefecture",
                        value: parseInt(value)
                    });

                    ddlMunicipality.enable(true);

                    //ddlMunicipality.element.parent().prev().find('i').remove();
                } else {
                    ddlMunicipality.enable(false);
                    /*
                     
                     
                     ddlMunicipality.element.parent().prev().find('.label').html("");
                     
                     var lblMunicipality = ddlMunicipality.element.parent().prev().append('<i class="icon-warning-sign"></i>');
                     lblMunicipality.kendoTooltip({
                     animation: false,
                     filter: "i",
                     position: "top",
                     content: "Πρέπει να επιλέξετε Νομό."
                     });
                     */
                }

                ddlMunicipality.select(0);

            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.label').html(totalItems);
            }
        });

        $("#src_municipality").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "manicipality_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsMunicipalities,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_municipality').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.label').html(totalItems);
            }
        });

        $("#src_implementationEntity").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "implementation_entity_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryImplEnt.data(),
            /*
             dataSource: new kendo.data.DataSource({
             serverFiltering: true,
             transport: tsImplementationEntities,
             schema: {
             data: "data",
             total: "total"
             }
             }),
             autoBind: true,
             */
            change: function() {
                var value = this.value();
                $('#src_implementationEntity').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_source").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "source_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsSources,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: true,
            change: function() {
                var value = this.value();
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
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

        $("#src_specialType").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "special_type_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsSpecialTypes,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_specialType').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        resizeSearchWidget('frmSearchUnit');

        //$('#menu > div > h3:first').click();
    });
</script>

<link rel="stylesheet" href="client/styles/override.bts.kendo.css.css" />
<style>
    .k-item .container-fluid {
        border:0;
    }
</style>
<div class="container-fluid" style="height: 100%;overflow: hidden;">
    <form id="frmSearchUnit" class="form-horizontal sidebar-search-form">

        <div class="k-block searchComponent" style="">
            <!--
            <div class="k-header"><i class="icon-search"></i>&nbsp;Αναζήτηση</div>
            -->
            <div class="k-toolbar at-bottom container-fluid" style="text-align: right">
                <button id="btnClear" class="k-button span6">Καθαρισμος</button>
                <button id="btnSearch" class="k-button span6">Αναζήτηση</button>
            </div>

            <div class="k-toolbar at-top container-fluid" style="text-align: right">
                <a href="#" id="btnSwitchToSimpleSearch" class="k-button span12">Απλή Αναζήτηση</a>
            </div>

            <!--
            <div class="alert note">
                Μετάβαση σε <strong><a href="#" id="btnSwitchToSimpleSearch">Απλή Αναζήτηση</a></strong>
            </div>
            -->

            <div class="k-content" style="overflow: auto;  border:0">

                <ul id="menu">
                    <li class="k-state-active">
                        <span class="k-link k-state-selected">Γενικά Στοιχεία</span>

                        <div class="container-fluid">
                            <div class="span12">

                                <ul class="forms">
                                    <li>
                                        <label>Κωδικός ΥΠΕΠΘ</label>
                                        <input name="registry_no" type="text" class="k-textbox span12"  />           
                                    </li>


                                    <li>
                                        <label>Κωδικός GLUC</label>
                                        <input name="gluc" type="text" class="k-textbox span12" />
                                    </li>

                                    <li>
                                        <label>Όνομα Μονάδας</label>
                                        <input name="name" type="text" class="k-textbox span12" />
                                    </li>
                                    
                                    <li>
                                        <label>Προσωνύμιο</label>
                                        <input name="special_name" type="text" class="k-textbox span12" />
                                    </li>
                                    
                                    <li>
                                        <label>Κατάσταση <span class="badge"></span></label>
                                        <input name="state" id="src_state" class="span12"  />
                                    </li>
                                    
                                </ul>



                            </div>
                        </div>

                    </li>

                    <li>
                        <span class="k-link">Στοιχεία Επικοινωνίας</span>
                        <div class="container-fluid">


                            <div class="span12 ">

                                <ul class="forms">
                                    <li>
                                        <label>Τηλέφωνο Επικοινωνίας</label>
                                        <input type="text" class="k-textbox span12" />
                                    </li>


                                    <li>
                                        <label>Ηλεκτρονική Αλληλογραφία</label>
                                        <input type="text" class="k-textbox span12"  />
                                    </li>


                                    <li>
                                        <label>Αριθμός FAX</label>
                                        <input type="text" class="k-textbox span12" />
                                    </li>


                                    <li>
                                        <label>Οδός, Αριθμός</label>
                                        <input type="text" class="k-textbox span12"  />
                                    </li>


                                    <li>
                                        <label>Ταχυδρομικός Κώδικας</label>
                                        <input type="text" class="k-textbox span12"  />
                                    </li>

                                </ul>
                            </div>


                        </div>
                    </li>

                    <li>
                        <span class="k-link">Γεωγραφικά στοιχεία</span>
                        <div class="container-fluid content" >

                            <div class="span12">
                                <ul class="forms">
                                    <li>
                                        <label>Νομός <span class="label"></span></label>
                                        <input name="prefecture" id="src_prefecture" class="span12" />
                                    </li>

                                    <li>
                                        <label>Δήμος ΟΤΑ <span class="label"></span></label>
                                        <input name="municipality" id="src_municipality" class="span12" disabled="disabled" />    
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </li>

                    <li>
                        <span class="k-link">Διοικητικά στοιχεία</span>
                        <div class="container-fluid content" >

                            <div class="span12">

                                <ul class="forms">
                                    <li>
                                        <label>Περιφέρεια</label>
                                        <input name="region_edu_admin" id="src_regionEduAdmin" class="span12" />
                                    </li>

                                    <li>
                                        <label>Διεύθυνση εκπαίδευσης</label>
                                        <input name="edu_admin" id="src_eduAdmin" class="span12" />
                                    </li>
                                    
                                    <li>
                                        <label>Περιοχή Μετάθεσης</label>
                                        <input name="transfer_area" id="src_transferArea" class="span12"  />
                                    </li>

                                    <li>
                                        <label>Φορέας Υλοποίησης <span class="badge"></span></label>
                                        <input name="implementation_entity" id="src_implementationEntity" class="span12"  />
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </li>

                    <li>
                        <span class="k-link">Επιπλέον Στοιχεία</span>
                        <div class="container-fluid content">


                            <div class="span12 ">

                                <ul class="forms">
                                   
                                    <li>
                                        <label>Κατηγορία</label>
                                        <input name="category" id="src_category" class="span12" />
                                    </li>

                                    <li>
                                        <label>Επίπεδο Εκπαίδευσης</label>
                                        <input name="education_level" id="src_educationLevel" class="span12" />
                                    </li>

                                    <li>
                                        <label>Τύπος</label>
                                        <input name="unit_type" id="src_unitType" class="span12" disabled="disabled" />
                                    </li>
                                    
                                    <li>
                                        <label>Προσανατολισμός <span class="badge"></span></label>
                                        <input name="orientation_type" id="src_orientationType" class="span12"  data-bind="value: orientation_type" disabled="disabled" />
                                    </li>

                                    <li>
                                        <label>Ωράριο Λειτουργίας <span class="badge"></span></label>
                                        <input name="operation_shift" id="src_operationShift" class="span12"  disabled="disabled" />    
                                    </li>

                                    <li>
                                        <label>Ειδικός Τύπος <span class="badge"></span></label>
                                        <input name="special_type" id="src_specialType" class="span12" disabled="disabled"/>
                                    </li>

									<li>
                                        <label>Πηγή <span class="badge"></span></label>
                                        <input name="source" id="src_source" class="span12" />
                                    </li>                                   

                                   
                                </ul>


                            </div>


                        </div> 
                    </li>

                </ul>
            </div>



        </div>

    </form>

</div>