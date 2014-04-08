<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>
	
	<div class="mmsch-grid" id="grid-education-levels"></div>

</div>

<script type="text/javascript">
 (function(){ 

	kendo.bind(".main-pane");
	
    $(document).ready(function() {

        var gridEducationLevels = $("#grid-education-levels").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsEducationLevels,
                serverPaging: true,
                pageSize: itemsPerPage,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            
            autoBind: true,
            groupable: false,
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
                    field: "education_level_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "education_level",
                    title: "Επίπεδο Εκπαίδευσης"
                }
            ],
            dataBound: function(e) {
                //resizeGrid('grid-education-levels');
            }
        }).data('kendoGrid');
    });

})(jQuery)

</script>


