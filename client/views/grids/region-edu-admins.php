<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>
	
	<div class="mmsch-grid" id="grid-region-edu-admins"></div>


</div>	

<script type="text/javascript">
(function(){ 

	kendo.bind(".main-pane");
	
    $(document).ready(function() {

        var gridRegionEduAdmins = $("#grid-region-edu-admins").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsRegionEduAdmins,
                serverPaging: true,
                pageSize: 20,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            autoBind: true,
            //scrollable: false,
            //height: 'auto',
            
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
                    field: "region_edu_admin_id",
                    title: "Κωδικός",
                    hidden: true,
                    width:"30%"
                },
                {
                    field: "region_edu_admin",
                    title: "Περιφέρεια",
                    width:"30%"
                },
                {}
            ],
            dataBound: function(e) {
                //resizeGrid('grid-region-edu-admins');
            }
        }).data('kendoGrid');
    });

})(jQuery)
</script>


