<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>
	
	<div class="mmsch-grid" id="grid-worker-specializations"></div>

</div>	

<script type="text/javascript">
    
    $(document).ready(function() {

        var gridWorkerSpecializations = $("#grid-worker-specializations").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsWorkerSpecializations,
                serverPaging: true,
                serverFiltering: true,
                pageSize: itemsPerPage,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: true,
            //groupable: false,
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
                    field: "worker_specialization_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "worker_specialization",
                    title: "Κατηγορία"
                },
                {}
            ],
            dataBound: function(e) {
                resizeGrid('grid-worker-specializations');
            }
        }).data('kendoGrid');
    });

</script>


