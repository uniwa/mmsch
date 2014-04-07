<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>

	<div class="mmsch-grid" id="grid-tax-offices"></div>

</div>

<script type="text/javascript">
    
    $(document).ready(function() {

        var gridTaxOffices = $("#grid-tax-offices").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsTaxOffices,
                serverPaging: true,
                serverFiltering: true,
                pageSize: 20,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            //scrollable: false,
            //height: 'auto',
            //autoBind: true,
            //resizable: true,
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
                    field: "tax_office_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "tax_office",
                    title: "Εφορία"
                },
                {}
            ],
            dataBound: function(e) {
                //resizeGrid('grid-tax-offices');
            }
            
        }).data('kendoGrid');
        
    });

</script>


