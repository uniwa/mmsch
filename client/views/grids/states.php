<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>

	<div class="mmsch-grid" id="grid-states"></div>

</div>

<script type="text/javascript">

    $(document).ready(function() {

        var gridStates = $("#grid-states").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsStates,
                serverPaging: true,
                pageSize: itemsPerPage,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: true,
            sortable: true,
            resizable: true,
            pageable: {
                refresh: true,
                pageSizes: true,
                buttonCount: 5
            },
            selectable: "multiple",
            columnMenu: true,
            columns: [
                {
                    field:'state_id',
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "state",
                    title: "Κατάσταση"
                },
                {}
            ],
            dataBound: function(e) {
                //resizeGrid('grid-states');
            }

        }).data('kendoGrid');
    });

</script>


