<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>

	<div class="mmsch-grid" id="grid-municipalities"></div>
	
</div>

<script type="text/javascript">

    $(document).ready(function() {

        var gridCategories = $("#grid-municipalities").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsMunicipalities,
                serverPaging: true,
                pageSize: 20,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: true,
            sortable: true,
            resizable: true,
            //scrollable: false,
            //height: 'auto',
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
                    field: "manicipality_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "municipality",
                    title: "Δήμος ΟΤΑ"
                },
                {
                    field: "prefecture",
                    title: "Νομός"
                },
                {}
            ],
            dataBound: function(e) {
                //resizeGrid('grid-municipalities');
            }
        }).data('kendoGrid');
    });

</script>