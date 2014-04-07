<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>

	<div class="mmsch-grid" id="grid-transfer-areas"></div>

<div>

<style scoped="scoped">
    #grid-transfer-areas .k-toolbar
    {
        min-height: 27px;
        padding: 1.3em;
    }
    .eduAdmin-label
    {
        display: inline;
        vertical-align: middle;
        padding-right: .5em;
    }
    #eduAdmin
    {
        vertical-align: middle;
    }
    .toolbar {
        float: right;
    }
</style>


<script type="text/x-kendo-template" id="template-transfer-areas">
    <div class="toolbar">
        <label class="eduAdmin-label" for="category">Προβολή περιοχών μετάθεσης ανά Διεύθυνση Εκπαίδευσης:</label>
        <input type="search" id="eduAdmin" style="width: 250px"/>
    </div>
</script>

<script type="text/javascript">
    
    $(document).ready(function() {

        var gridTransferAreas = $("#grid-transfer-areas").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsTransferAreas,
                serverFiltering: true,
                serverPaging: true,
                pageSize: 20,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            toolbar: kendo.template($("#template-transfer-areas").html()),
            //scrollable: false,
            //height: 'auto',
            //autoBind: true,
            groupable: false,
            sortable: true,
            resizable: true,
            pageable: {
            	refresh: true,
            	pageSizes: true,
            	buttonCount: 5,
            	pageSizes: [10, 20, 30, 50, 100]
        	},
            selectable: "multiple",
            columnMenu: true,
            columns: [
                {
                    field: "transfer_area_id",
                    title: "Κωδικός",
                    width: "10%",
                    hidden: true
                },
                {
                    field: "transfer_area",
                    title: "Περιοχή Μετάθεσης",
                    width: "20%"
                },
                {
                    field: "edu_admin",
                    title: "Διεύθυνση Εκπαίδευσης",
                    width: "20%"
                },
                {}
            ]
        });
        
        var dropDown = gridTransferAreas.find("#eduAdmin").kendoDropDownList({
            dataTextField: "name",
            dataValueField: "edu_admin_id",
            autoBind: false,
            optionLabel: "Όλες",
            dataSource: new kendo.data.DataSource({
                transport: tsEduAdmins,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            change: function() {

                var value = this.value();
                if (value) {
                    gridTransferAreas.data("kendoGrid").dataSource.filter({ field: "edu_admin", value: parseInt(value) });
                } else {
                    gridTransferAreas.data("kendoGrid").dataSource.filter({});
                }
            }
        });
    });

</script>




