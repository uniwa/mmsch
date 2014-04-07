<style>
    #grid-units .k-toolbar
    {
        min-height: 27px;
        padding: 1.3em;
    }    
</style>


<div class="mmsch-grid" id="grid-units"></div>

<div id="implementation-entity-details-container"></div>

<script type="text/x-kendo-template" id="emp-ent-details-template">
    <div id="details-container">
    <h2>#= name # </h2>
    <em>#= initials #</em>
    <dl>
    <dt>Τηλ.: #= phone_number #</dt>
    <dt>E-mail: #= email #</dt>
    <dt>Διεύθυνση: #= street_address #</dt>
    <dt>Τ.Κ: #= postal_code #</dt>
    </dl>
    </div>
</script>

<script type="text/x-kendo-template" id="unit-details-template">

    <div class="tabstrip">
    <ul>
    <li class="k-state-active">Στοιχεία Επικοινωνίας</li>
	<li>Γενικά Στοιχεία</li>
    <li>Δικτυακά Στοιχεία</li>
    <li>Host Relations</li>
	<li>Guest Relations</li>
    <li>Μεταβάσεiς</li>

    </ul>
    <div class="unit-contact-info">
    <dl class="dl-horizontal">
    <dt>Προσωνύμιο</dt>
    <dd><div class="span12">#= special_name #</div></dd>

    <dt>Τηλέφωνο Επικοινωνίας</dt>
    <dd><div class="span12">#= phone_number #</div></dd>

    <dt>Αριθμός FAX</dt>
    <dd><div class="span12">#= fax_number #</div></dd>

    <dt>Ηλεκτρονική Αλληλογραφία</dt>
    <dd><div class="span12">#= email #</div></dd>

    <dt>Οδός, Αριθμός</dt>
    <dd><div class="span12">#= street_address #</div></dd>

    <dt>Ταχυδρομικός Κώδικας</dt>
    <dd><div class="span12">#= postal_code #</div></dd>
    </dl>
    </div>
    
	<div class="unit-general-info">
    <dl class="dl-horizontal">
                        <dt>Κωδικός ΜΜ</dt>
                         <dd ><div class="span12">#= mm_id #</div></dd>

                                <dt>Κωδικός ΥΠΕΠΘ</dt>
                                <dd ><div class="span12">#= registry_no #</div></dd>

                                <dt>Κωδικός GLUC</dt>
                                <dd ><div class="span12">#= gluc #</div></dd>
                                
                                <dt>Διεύθυνση εκπαίδευσης</dt>
                                <dd><div class="span12">#= edu_admin #</div></dd>

                                <dt>Φορέας Υλοποίησης</dt>
                                <dd><div class="span12">#= implementation_entity #</div></dd>
                            </dl>
    </div>

	<div>
    <div class="grid-details-ipdns"></div>
    </div>
    
	<div>
    <div class="grid-details-host-relations"></div>
    </div>

	<div>
    <div class="grid-details-guest-relations"></div>
    </div>   

	<div>
    <div class="grid-details-transitions"></div>
    </div>


    </div>

</script>

<script type="text/x-kendo-template" id="template">
    <div class="toolbar">
    <button id="btnCreateUnit" class="btn btn-info btn-small"><i class="icon-plus-sign icon-white"></i> Δημιουργία νέας Μονάδας</button>
    </div>
</script>

<script type="text/x-kendo-template" id="tpl-simple-search">
    <div class="toolbar">
    Πεδίο Αναζήτησης: <input name="fld-filter" id="fld-filter" value="name" />
	<span class="k-textbox k-space-right">
    <input class="k-textbox" id="txtSearch" type="text" value="" />
	<a href="\\#" class="k-icon k-i-close">&nbsp;</a>
	</span>
    </div>
</script>

<style type="text/css">
    #details-container
    {
        padding: 10px;
    }

    #details-container h2
    {
        margin: 0;
        font-size: 12pt;
    }

    #details-container em
    {
        color: #8c8c8c;
    }

    #details-container dt
    {
        margin:0;
    }
</style>

<style scoped>
    #grid-units .k-toolbar
    {
        min-height: 27px;
        padding: 1.3em;
    }

    #grid-units td.highlighted{
        cursor: text;
    }

    #fld-filter
    {
        vertical-align: middle;
        padding-right: .5em;
    }

    #txtSearch
    {
        vertical-align: middle;
    }

    .toolbar {
        float: right;
    }


</style>

<script type="text/javascript">

    jQuery.fn.selectText = function() {
        this.find('input').each(function() {
            if ($(this).prev().length == 0 || !$(this).prev().hasClass('p_copy')) {
                $('<p class="p_copy" style="position: absolute; z-index: -1;"></p>').insertBefore($(this));
            }
            $(this).prev().html($(this).val());
        });
        var doc = document;
        var element = this[0];
        console.log(this, element);
        if (doc.body.createTextRange) {
            var range = document.body.createTextRange();
            range.moveToElementText(element);
            range.select();
        } else if (window.getSelection) {
            var selection = window.getSelection();
            var range = document.createRange();
            range.selectNodeContents(element);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    };

    function tplFunc(model) {

        if (model == null)
            return "--";

        return model;
    }

    function openUnitInTab(mm_id, name) {
        
        var grid = $("#grid-units").data("kendoGrid");
        
        var tabStripElement = $('#tabstrip-main').data('kendoTabStrip');
        
        //var row = grid.selectedRow;
        var section = mm_id;
        

        if (section in $('#tabstrip-main ul').data('openedTabs')) {
            tabStripElement.select('#tb-' + section);
            return;
        }

        tabStripElement.append({
            encoded: false,
            text: name,
            contentUrl: "client/views/grids/unit-details.php?mm_id=" + mm_id
        });

        $('#tabstrip-main ul').data('openedTabs')[section] = 1;

        var appendedTab = tabStripElement.tabGroup.children("li.k-last");
        appendedTab.attr('id', 'tb-' + section);
        //appendedTab.data('unit', row);

        var tabIndex = appendedTab.index();
        tabStripElement.select(tabIndex);

        var closeBtn = $('<a class="close">&times;</a>');
        appendedTab.append(closeBtn);

        closeBtn.click(function() {

            var tabIndex2 = $(this).parent().index();

            tabStripElement.select(tabIndex2);

            var tab = tabStripElement.select();
            var otherTab = tab.next();
            otherTab = otherTab.length ? otherTab : tab.prev();

            tabStripElement.remove(tab);

            tabStripElement.select(otherTab);

            delete $('#tabstrip-main ul').data('openedTabs')[section];

        });

    }

    $(document).ready(function() {

        var gridUnits = $("#grid-units").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsUnits,
                serverFiltering: true,
                serverPaging: true,
                serverSorting: true,
                pageSize: itemsPerPage,
                schema: {
                    data: "data",
                    total: "total"
                },
                requestStart: function(e) {

                    //$(".logs ul").append('<li id="log-rq-units-' + this['rqc'] + '"><span>Αναζήτηση μονάδων</li>');
                    //$('.grid-no-data').remove();
                    //console.log($("#grid-units").data('kendoGrid').filters());

                    if ($('#grid-units').data('kendoGrid').options.inSearching) {

                        if (typeof this['rqc'] == 'undefined')
                            this['rqc'] = 0

                        this['rqc']++;

                        var msg = "";
                        var flts = $("#grid-units").data('kendoGrid').dataSource.filter().filters;
                        var val;
                        $.each(flts, function(fltIndex, flt) {

                            if (flt.value != "") {

                                val = flt.value;

                                switch (flt.field) {

                                    case "prefecture":
                                        val = renderer(inMemoryPrefectures, 'prefecture_id', flt.value);
                                        break;

                                    case "municipality":
                                        val = renderer(inMemoryMunicipalities, 'manicipality_id', flt.value);
                                        break;

                                    case "region_edu_admin":
                                        val = renderer(inMemoryRegionEduAdmins, 'region_edu_admin_id', flt.value);
                                        break;

                                    case "edu_admin":
                                        val = renderer(inMemoryEduAdmins, 'edu_admin_id', flt.value);
                                        break;

                                    case "implementation_entity":
                                        val = renderer(inMemoryImplEnt, 'implementation_entity_id', flt.value);
                                        break;
                                }



                                msg += dictionary[flt.field] + ":" + val + "<br/>";
                            }
                        });

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

                    }
                },
                requestEnd: function(e) {

                    if ($('#grid-units').data('kendoGrid').options.inSearching) {

                        $('#grid-units').data('kendoGrid').options.inSearching = false;

                        var dataitem = $("#grid-logs").data('kendoGrid').dataSource.get(this['rqc']);
                        var row = $("#grid-logs").data("kendoGrid").tbody.find("tr[data-uid='" + dataitem.uid + "']");
                        row.data('complete', true);
                        row.find('.log_state').removeClass('k-loading').addClass('k-custom-ok');
                    }
                }
            }),
            //toolbar: kendo.template($("#template").html()),
            toolbar: kendo.template($("#tpl-simple-search").html()),
            autoBind: false,
            //groupable: true,
            sortable: true,
            resizable: true,
            pageable: {
                refresh: true,
                pageSizes: true,
                buttonCount: 5,
                pageSizes: [25, 50, 100]
            },
            selectable: "row",
            columnMenu: true,
            //filterable: true,
            columns: [
                {
                    field: "mm_id",
                    title: "Κωδικός ΜΜ",
                    width: "12%",
                    attributes: {
                        'class': 'highlighted'
                    }
                },
                {
                    field: "registry_no",
                    title: "Κωδικός ΥΠΕΠΘ",
                    width: "15%",
                    attributes: {
                        'class': 'highlighted'
                    }
                },
                {
                    field: "gluc",
                    title: "Κωδικός Gluc",
                    hidden: true,
                    attributes: {
                        'class': 'highlighted'
                    }
                },
                {
                    field: "name",
                    title: "Ονομασία",
                    attributes: {
                        'class': 'highlighted'
                    }
                },
                {
                    field: "special_name",
                    title: "Ειδική Ονομασία",
                    hidden: true
                },
                {
                    field: "category",
                    title: "Κατηγορία",
                    hidden: true
                },
                {
                    field: "unit_type",
                    title: "Τύπος",
                    hidden: true
                },
                {
                    field: "education_level",
                    title: "Βαθμίδα Εκπαίδευσης",
                    hidden: true
                },
                {
                    field: "region_edu_admin",
                    title: "Περιφέρεια Εκπαίδευσης",
                    hidden: true
                },
                {
                    field: "edu_admin",
                    title: "Διεύθυνση Εκπαίδευσης",
                    hidden: true
                },
                {
                    field: "transfer_area",
                    title: "Περιοχή Μετάθεσης",
                    hidden: true
                },
                {
                    field: "implementation_entity",
                    title: "Φορέας υλοποίησης",
                    //hidden: true,
                    template: function(dataItem) {

                        if (dataItem.implementation_entity == null)
                            return "-";
                        else {
                            // window.setTimeout(function() {
                            inMemoryImplEnt.filter({field: "name", value: dataItem.implementation_entity});
                            var view = inMemoryImplEnt.view();

                            if (typeof view !== 'undefined' && view !== null){
                                return "<a href=\"#\" class=\"k-link implementation_entity_details\" data-imp-id=\"" + view[0].implementation_entity_id + "\" >" + view[0].name + "</a>";
                            }

                            // }, 80);
                        }
                    }
                },
                {
                    field: "state",
                    title: "Κατάσταση"
                },
                {
                    field: "legal_character",
                    title: "Νομικός Χαρακτήρας",
                    hidden: true
                },
                {
                    field: "orientation_type",
                    title: "Προσανατολισμός",
                    hidden: true
                },
                {
                    field: "special_type",
                    title: "Ειδικός Χαρακτηρισμός",
                    hidden: true
                },
                {
                    field: "tax_office",
                    title: "Δ.Ο.Υ.",
                    hidden: true
                }
                    
            ],
            editable: "inline",
            dataBound: function(e) {

                resizeGrid('grid-units');

                var grid = $("#grid-units").data("kendoGrid");

                $("#grid-units").on("click", "td.highlighted", function(e) {

                    var row = $(this).closest("tr");
                    var rowIdx = $("tr", grid.tbody).index(row);
                    var colIdx = $("td", row).index(this);

                    //var cell = $("#grid-units").find("table").find("tbody").find("tr:eq(" + rowIdx + ")").find("td:eq(" + colIdx + ")");
                    //console.log(cell);
                    //$(this).contents().first().wrap('<span/>').parent().on("click", function(e){
                    //cell.selectText();
                    //$(this).parent().selectText();
                    //});
                });

            },
            change: function(e) {
                this.selectedRow = this.dataItem(this.select());
            },
            selectedRow: null,
            inSearching: false,
            detailTemplate: kendo.template($("#unit-details-template").html()),
            detailInit: detailInit,
            detailExpand: function(e) {
                var selectedRow = e.masterRow;
                $("#grid-units").find('.k-grid-content:first').scrollTo(selectedRow, 700);
            }

        }).data('kendoGrid');

        //$("#grid-units").data('kendoGrid').content.append('<center class="grid-no-data" style="margin:0 auto;width:50%;padding-top:10%"><p>[Κείμενο εισαγωγής bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ]<p></center>');

        var wnd = $("#implementation-entity-details-container").kendoWindow({
            title: "Φορέας Υλοποίησης",
            modal: true,
            visible: false,
            resizable: false,
            width: 400,
            animation: false
        }).data("kendoWindow");

        var emplEntDetailsTemplate = kendo.template($("#emp-ent-details-template").html());

        $("#grid-units").on("click", "a.implementation_entity_details", function(e) {

            e.preventDefault();

            inMemoryImplEnt.filter({field: "implementation_entity_id", value: $(this).data('impId')});
            var view = inMemoryImplEnt.view();
            //var dataItem = this.dataItem($(e.currentTarget).closest("tr"));

            wnd.content(emplEntDetailsTemplate(view[0]));
            wnd.center().open();
        });

        //to remove
        $("#fld-filter").kendoDropDownList({
            dataTextField: "text",
            dataValueField: "value",
            dataSource: [
                {text: "Ονομασία Μονάδας", value: "name"},
                {text: "Κωδικός ΜΜ", value: "mm_id"},
                {text: "Κωδικός ΥΠΕΠΘ", value: "registry_no"}
            ],
            index: 0,
            change: function(e) {
                $("#txtSearch").focus();
            }
        });

        //to remove
        $('.dropdown form, #fld-filter_listbox').on('click', function(e) {
            e.stopPropagation();
        });

        //$('#btnSimpleSearch').on('click', function(e) {
        $("#txtSearch").keydown(function(e) {
            if (e.keyCode == 13) {
                $('#grid-units').data('kendoGrid').options.inSearching = true;
                gridUnits.dataSource.filter({field: $("#fld-filter").val(), value: $("#txtSearch").val()});
            }
        });

        $("#txtSearch").focus(function(e) {
            this.select();
        });

        //gridUnits.dataSource.filter( [{ field: "include_transitions", value: 0 }, { field: "state", value: 1 }]);

        /*
         gridUnits.table.kendoTooltip({
         filter: "td",
         content: function (e) {
         var target = e.target;
         return "Κάντε διπλό κλικ για να ανοίξετε την καρτέλα της μονάδας.";
         }
         });
         */
        //gridUnits.dataSource.fetch(function(){});

        $("#grid-units").on("dblclick", "tbody > tr.k-master-row", function(e) {
            //$("#grid-units").delegate("tbody > tr", "dblclick", function() {

            //console.log(e.target);

            var grid = $("#grid-units").data("kendoGrid");
            var row = grid.selectedRow;
            var section = row.mm_id;
            var tabStripElement = $('#tabstrip-main').data('kendoTabStrip');

            if (section in $('#tabstrip-main ul').data('openedTabs')) {
                tabStripElement.select('#tb-' + section);
                return;
            }

            tabStripElement.append({
                encoded: false,
                text: row.name,
                contentUrl: "client/views/grids/unit-details.php?mm_id=" + row.mm_id
            });

            $('#tabstrip-main ul').data('openedTabs')[section] = 1;

            var appendedTab = tabStripElement.tabGroup.children("li.k-last");
            appendedTab.attr('id', 'tb-' + section);
            appendedTab.data('unit', row);

            var tabIndex = appendedTab.index();
            tabStripElement.select(tabIndex);

            var closeBtn = $('<a class="close">&times;</a>');
            appendedTab.append(closeBtn);

            closeBtn.click(function() {

                var tabIndex2 = $(this).parent().index();

                tabStripElement.select(tabIndex2);

                var tab = tabStripElement.select();
                var otherTab = tab.next();
                otherTab = otherTab.length ? otherTab : tab.prev();

                tabStripElement.remove(tab);

                tabStripElement.select(otherTab);

                delete $('#tabstrip-main ul').data('openedTabs')[section];

            });

        });

        $("#btnCreateUnit, #btnAdvancedSearch").click(function(e) {
            //console.log($(this).data());
            //return;
            var d = $(this).data();

            var section = d.section;
            var tabStripElement = $('#tabstrip-main').data('kendoTabStrip');

            if (section in $('#tabstrip-main ul').data('openedTabs')) {
                tabStripElement.select('#tb-' + section);
                return;
            }

            tabStripElement.append({
                encoded: false,
                text: d.sectionTitle,
                contentUrl: "client/views/" + d.sectionRoot + "/" + d.sectionPage + ".php"
            });

            $('#tabstrip-main ul').data('openedTabs')[section] = 1;

            var appendedTab = tabStripElement.tabGroup.children("li.k-last");
            appendedTab.attr('id', 'tb-' + section);

            var tabIndex = appendedTab.index();
            tabStripElement.select(tabIndex);

            var closeBtn = $('<a class="close">&times;</a>');
            appendedTab.append(closeBtn);

            closeBtn.click(function() {

                var tabIndex2 = $(this).parent().index();

                tabStripElement.select(tabIndex2);

                var tab = tabStripElement.select();
                var otherTab = tab.next();
                otherTab = otherTab.length ? otherTab : tab.prev();

                tabStripElement.remove(tab);

                tabStripElement.select(otherTab);

                delete $('#tabstrip-main ul').data('openedTabs')[section];

            });
        });

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
                    //console.log(this.element.data('kendoGrid').content);
                    o.element.find('tbody').append('<tr class=""><td collspan="3"><p>[ Δεν υπάρχουν δεδομένα ]<p></td></tr>');
                }
            } else {
                //if (!hasData)
                //    evt.preventDefault();
                //    return false;
            }
        }

        function detailInit(e) {
            var detailRow = e.detailRow;

            detailRow.find(".tabstrip").kendoTabStrip({
                animation: false
            });

            /*
            detailRow.find(".grid-details-workers").kendoGrid({
                dataSource: new kendo.data.DataSource({
                    data: e.data.get('workers')
                }),
                scrollable: false,
                sortable: true,
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
                ],
                dataBound: function(e) {

                    dataBoundDetailsGridHandler(this, e);

                }
            });
			*/
			
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
                    //tabStripElement.remove(tab);

                    //$('p[MyTag="Sara"]')
                    //if (!hasData)
                    //this.element.parent().remove();

                },
                columnMenuInit: function(e) {
                    var menu = e.container.find(".k-menu").data("kendoMenu");
                }
            });

            detailRow.find(".grid-details-host-relations").data('kendoGrid').thead.kendoTooltip({
                filter: "th",
                content: function(e) {
                    var target = e.target;
                    return $(target).text();
                }
            });

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
                    //tabStripElement.remove(tab);

                    //$('p[MyTag="Sara"]')
                    //if (!hasData)
                    //this.element.parent().remove();

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
    });

</script>