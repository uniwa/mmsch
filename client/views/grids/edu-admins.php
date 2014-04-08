<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">
	
	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>

	<div class="mmsch-grid" id="grid-edu-admins"></div>

<div>

<script type="text/javascript">
    
    $(document).ready(function() {

        var gridEduAdmins = $("#grid-edu-admins").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsEduAdmins,
                autoBind: true,
                serverFiltering: true,
                serverPaging: true,
                serverSorting: true,
                pageSize: 20,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            
            //groupable: true,
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
            //selectable: "multiple",
            columnMenu: true,
            columns: [
                {
                    field: "edu_admin_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "edu_admin",
                    title: "Διευθύνση Εκπαίδευση"
                },
                {
                    field: "region_edu_admin",
                    title: "Περιφέρεια"
                }
            ],
            dataBound: function(e) {
                //resizeGrid('grid-edu-admins');
            }
        }).data('kendoGrid');
    });

</script>


