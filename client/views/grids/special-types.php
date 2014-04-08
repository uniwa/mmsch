<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>

	<div class="mmsch-grid" id="grid-special-types"></div>

</div>

<script type="text/javascript">

    $(document).ready(function() {

        var gridUnitTypes = $("#grid-special-types").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsSpecialTypes,
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
                    field:'special_type_id',
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "special_type",
                    title: "Ειδικός Τύπος",
                    width: "20%"
                },
                {
                    field: "category",
                    title: "Κατηγορία"
                },
                {
                }
            ],
            dataBound: function(e) {
                //resizeGrid('grid-special-types');
            }

        }).data('kendoGrid');
    });

</script>


