<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>
	
	<div class="mmsch-grid" id="grid-unit-types"></div>
	
</div>

<script type="text/javascript">
(function(){ 

	kendo.bind(".main-pane");
	
    $(document).ready(function() {

        var gridUnitTypes = $("#grid-unit-types").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsUnitTypes,
                serverPaging: true,
                pageSize: itemsPerPage,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            //scrollable: false,
            //height: 'auto',
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
                    field: "unit_type",
                    title: "Τύπος Μονάδας",
                    width: "20%"
                },
                {
                    field: "category",
                    title: "Κατηγορία",
                    width: "20%"
                },
                {
                    field: "education_level",
                    title: "Επίπεδο Εκπαίδευσης"
                }
            ],
            dataBound: function(e) {
                //resizeGrid('grid-unit-types');
            }

        }).data('kendoGrid');
    });
	
	})(jQuery)

</script>


