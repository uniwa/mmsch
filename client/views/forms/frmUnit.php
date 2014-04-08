<style>
    .accordion{

    }
    
    #frmUnit .k-tabstrip .k-tabstrip-items
    {
        padding-top: 0px;
    }
</style>

<form id="frmUnit">
    <div class="container-fluid">


        <div class="row-fluid">
            <div class="span12 bgcolor">
                <div class="alert alert-error">
                    <a href="#" class="close" data-dismiss="alert">×</a>
                    Error Messages.
                </div>
            </div>
        </div>           

        <div class="row-fluid">
            <div class="span12">
                <button class="btn btn-small btn-success pull-right" style="margin-bottom: 20px;" data-bind="click: addUnit"><i class="icon-save"></i>&nbsp;Αποθήκευση</button>
            </div>
        </div>

        <div class="row-fluid" id="tabstrip-wrapper">
            <div class="span12" id="tabstrip-units" style="padding: 10px;">

                <ul>
                    <li class="k-state-active">Γενικά Στοιχεία</li>

                    <li>Στοιχεία Επικοινωνίας</li>

                    <li>Επιπλέον </li>

                </ul>

                <div class="container-fluid" style="overflow: auto;" >
                    <div class="row-fluid" >
                        <div class="span12">

                            <label>Κωδικός ΥΠΕΠΘ</label>
                            <input type="text" class="span12" placeholder="" data-bind="value: registry_no">           

                            <label>Κωδικός GLUC</label>
                            <input type="text" class="span12" placeholder="" data-bind="value: gluc">    

                            <label>Όνομα Μονάδας</label>
                            <input type="text" class="span12" placeholder="" data-bind="value: name">

                            <label>Προσωνύμιο</label>
                            <input type="text" class="span12" placeholder="" data-bind="value: special_name">

                            <label id="lblCategory">Κατηγορία <span class="badge"></span></label>
                            <input id="category" class="span12" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: category"/>

                            <label id="lblEducationLevel">Επίπεδο Εκπαίδευσης <span class="badge"></span></label>
                            <input id="educationLevel" class="span12" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: education_level"/>

                            <label id="lblUnitType">Τύπος <span class="badge"></span></label>
                            <input id="unitType" class="span12" disabled="disabled" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: unit_type"/>

                            <label id="lblRegionEduAdmin">Περιφέρεια <span class="badge"></span></label>
                            <input id="regionEduAdmin" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: region_edu_admin" />    

                            <label id="lblEduAdmin">Διεύθυνση εκπαίδευσης <span class="badge"></span></label>
                            <input id="eduAdmin" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: edu_admin" />

                            <label id="lblTransferArea">Περιοχή Μετάθεσης <span class="badge"></span></label>
                            <input id="transferArea" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: transfer_area" />    

                        </div>
                    </div>
                </div>

                <div class="container-fluid" style="overflow: auto;">
                    <div class="row-fluid" >
                        <div class="span12" >

                            <label>Τηλέφωνο Επικοινωνίας</label>
                            <input type="text" class="span12" data-bind="value: phone_number" />

                            <label>Ηλεκτρονική Αλληλογραφία</label>
                            <input type="text" class="span12" data-bind="value: email" />

                            <label>Αριθμός FAX</label>
                            <input type="text" class="span12" data-bind="value: fax_number" />

                            <label>Οδός, Αριθμός</label>
                            <input type="text" class="span12" data-bind="value: street_address" />

                            <label>Ταχυδρομικός Κώδικας</label>
                            <input type="text" class="span12" data-bind="value: postal_code" />

                        </div>
                    </div>
                </div>

                <div class="container-fluid" style="overflow: auto;">
                    <div class="row-fluid">
                        <div class="span12">

                            <label>Προσανατολισμός <span class="badge"></span></label>
                            <input id="orientationType" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: orientation_type" disabled="disabled" />

                            <label>Ωράριο Λειτουργίας <span class="badge"></span></label>
                            <input id="operationShift" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: operation_shift" disabled="disabled" />    

                            <label>Νομός <span class="label"></span></label>
                            <input id="prefecture" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: prefecture" />

                            <label>Δήμος ΟΤΑ <span class="label"></span></label>
                            <input id="municipality" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: municipality" disabled="disabled" />    

                            <label>Φορέας Υλοποίησης <span class="badge"></span></label>
                            <input id="implementationEntity" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: implementation_entity" />

                            <label>Πηγή <span class="badge"></span></label>
                            <input id="source" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: source" />

                            <label>Κατάσταση <span class="badge"></span></label>
                            <input id="state" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: state" />

                            <label>Ειδικός Τύπος <span class="badge"></span></label>
                            <input id="specialType" class="span12 input-mini" style="margin-left: 0px; margin-bottom: 10px;" data-bind="value: special_type" disabled="disabled"/>

                        </div>
                    </div>
                </div> 

            </div>
        </div>





    </div>
</div>





</div>
</form>
<script type="text/javascript">
    
    function warnToolTip(ui, text){

        var icon = ui.parent().prev().append('<i class="icon-warning-sign"></i>');        

        icon.kendoTooltip({
            animation: false,
            filter: "i",
            position: "top",
            content: text
        });
    }
    
    function resizeFrmUnit()
    {
        var tabContainer = $("#tabstrip-units").parent().parent().parent().parent();
        
        var newHeight = tabContainer.innerHeight();
            newHeight -= parseInt(tabContainer.css("padding-top"));
            newHeight -= parseInt(tabContainer.css("padding-bottom"));

        var otherElements = $("#tabstrip-units").parent().parent().children(":not([id='tabstrip-wrapper'])");
        var otherElementsHeight = 0;
        otherElements.each(function() {
            otherElementsHeight += $(this).outerHeight();
        });

        newHeight -= otherElementsHeight;
        newHeight -= parseInt($("#tabstrip-units").css("padding-top"));
        newHeight -= parseInt($("#tabstrip-units").css("padding-bottom"));
        
        $('#tabstrip-units').height(newHeight);
        
        /*-----------------------*/
        
        var otherElements2 = $("#tabstrip-units").children().not(".k-content");
        var otherElementsHeight2 = 1;
        otherElements2.each(function() {
            otherElementsHeight2 += $(this).outerHeight(true);
        });
        otherElementsHeight2 += parseInt($("#tabstrip-units").children(".k-content:visible").css("padding-top"));
        otherElementsHeight2 += parseInt($("#tabstrip-units").children(".k-content:visible").css("padding-bottom"));

        $("#tabstrip-units .k-content:visible").height(newHeight - otherElementsHeight2);
    }
    
    $(document).ready(function() {

        $("#tabstrip-units").kendoTabStrip({
            animation: false,
            activate: function(e){
                resizeFrmUnit();
            }
        });
        
        //res2();
        
        var ddlCategory = $("#category").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "category_id",
            optionLabel: "Επιλέξτε...",
            dataSource: dsCategories,
            autoBind: true,
            change: function() {

                var value = this.value();
                $('#category').val(value);

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
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlEducationLevel = $("#educationLevel").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "education_level_id",
            optionLabel: "Επιλέξτε...",
            dataSource: dsEducationLevels,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#educationLevel').val(value);

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
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlUnitType = $("#unitType").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "special_type_id",
            optionLabel: "Επιλέξτε...",
            dataSource: dsUnitTypes,
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#unitType').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlRegionEduAdmin = $("#regionEduAdmin").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "region_edu_admin_id",
            optionLabel: "Επιλέψτε...",
            dataSource: dsRegionEduAdmins,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#regionEduAdmin').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlEduAdmin = $("#eduAdmin").kendoDropDownList({
            cascadeFrom: "regionEduAdmin",
            dataTextField: "name",
            dataValueField: "edu_admin_id",
            optionLabel: "Επιλέξτε...",
            dataSource: dsEduAdmins,
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#eduAdmin').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlTransferArea = $("#transferArea").kendoDropDownList({
            cascadeFrom: "eduAdmin",
            dataTextField: "name",
            dataValueField: "transfer_area_id",
            optionLabel: "Επιλέξτε...",
            dataSource: dsTransferAreas,
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#transferArea').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlOrientationType = $("#orientationType").kendoDropDownList({
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
                $('#orientationType').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlOperationShift = $("#operationShift").kendoDropDownList({
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
                $('#operationShift').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlPrefecture = $("#prefecture").kendoDropDownList({
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
                $('#prefecture').val(value);

                if (value) {
                    ddlMunicipality.dataSource.one('change', function() {
                        ddlMunicipality.current(null);
                    }).filter({
                        field: "prefecture",
                        value: parseInt(value)
                    });

                    ddlMunicipality.enable(true);
                    
                    ddlMunicipality.element.parent().prev().find('i').remove();
                } else {

                    ddlMunicipality.enable(false);

                    ddlMunicipality.element.parent().prev().find('.label').html("");

                    var lblMunicipality = ddlMunicipality.element.parent().prev().append('<i class="icon-warning-sign"></i>');
                    lblMunicipality.kendoTooltip({
                        animation: false,
                        filter: "i",
                        position: "top",
                        content: "Πρέπει να επιλέξετε Νομό."
                    });
                }

                ddlMunicipality.select(0);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.label').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlMunicipality = $("#municipality").kendoDropDownList({
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
                $('#municipality').val(value);
            },
            dataBound: function() {
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.label').html(totalItems);
            }
        }).data("kendoDropDownList");
        
        var lblMunicipality = ddlMunicipality.element.parent().prev().append('<i class="icon-warning-sign"></i>');        
        lblMunicipality.kendoTooltip({
            animation: false,
            filter: "i",
            position: "top",
            content: "Πρέπει να επιλέξετε Νομό."
        });

        var ddlImplementationEntity = $("#implementationEntity").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "implementation_entity_id",
            optionLabel: "Επιλέξτε...",
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsImplementationEntities,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#implementationEntity').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlSource = $("#source").kendoDropDownList({
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
                $('#source').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var ddlState = $("#state").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "state_id",
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
                $('#state').val(value);
            },
            dataBound: function() {
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
                
                this.select(0);
                this.trigger('change');
            }
        }).data("kendoDropDownList");
        
        var ddlSpecialType = $("#specialType").kendoDropDownList({
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
                $('#specialType').val(value);
            },
            dataBound: function(){
                var totalItems = this.dataSource.total();
                var lbl = this.element.parent().prev();
                lbl.find('.badge').html(totalItems);
            }
        }).data("kendoDropDownList");

        var viewModel = new kendo.data.ObservableObject({
            mm_id: "",
            registry_no: "",
            gluc: "",
            source: "",
            name: "",
            special_name: "",
            state: "",
            region_edu_admin: "",
            edu_admin: "",
            implementation_entity: "",
            transfer_area: "",
            prefecture: "",
            municipality: "",
            education_level: "",
            phone_number: "",
            email: "",
            fax_number: "",
            street_address: "",
            postal_code: "",
            tax_number: "",
            tax_office: "",
            area_team_number: "",
            category: "",
            unit_type: "",
            operation_shift: "",
            legal_character: "",
            orientation_type: "",
            special_type: "",
            levels_count: "",
            groups_count: "",
            students_count: "",
            latitude: "",
            longitude: "",
            positioning: "",
            last_update: "",
            last_sync: "",
            comments: "",
            addUnit: function(e) {
                var self = this;
                e.preventDefault();

                var dataParams = {"method": "PostUnits"};

                $.extend(dataParams, this.toJSON());

                $.ajax({
                    url: apiUrl,
                    type: "POST",
                    data: dataParams,
                    dataType: "json",
                    success: function(data) {
                        //console.log(data);
                        if (typeof data.mm_id != 'undefined')
                            self.set('mm_id', data.mm_id);
                    }
                });
            }
        });
        
        kendo.bind($("#frmUnit"), viewModel);
        
        
        
    });

</script>