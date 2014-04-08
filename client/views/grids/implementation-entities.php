<div class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">

	<div id="ribbon">
		<div class="ribbon-menu" style="padding-top:14px; display:block;">
			<div>
				
			</div>
		</div>
	</div>

	<div class="mmsch-grid" id="grid-implementation-entities"></div>
</div>

<script type="text/javascript">
    
    $(document).ready(function() {

        var gridImplementationEntities = $("#grid-implementation-entities").kendoGrid({
            dataSource: new kendo.data.DataSource({
                transport: tsImplementationEntities,
                serverPaging: true,
                pageSize: 20,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            //scrollable: false,
            //height: 'auto',
            autoBind: true,
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
                    field: "implementation_entity_id",
                    title: "Κωδικός",
                    hidden: true
                },
                {
                    field: "implementation_entity",
                    title: "Ονομασία"
                },
                {
                    field: "implementation_entity_initials",
                    title: "Αρχικά"
                },
                {
                    field: "street_address",
                    title: "Διεύθυνση"
                },
                {
                    field: "postal_code",
                    title: "Τ.Κ."
                },
                {
                    field: "email",
                    title: "Email"
                },
                {
                    field: "phone_number",
                    title: "Τηλέφωνο"
                },
                {
                    field: "domain",
                    title: "Domain"
                },
                {
                    field: "url",
                    title: "Url"
                }
            ],
            dataBound: function(e) {
               // resizeGrid('grid-implementation-entities');
            }
        }).data('kendoGrid');
    });

</script>


