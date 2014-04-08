<style>
    #grid-logs .k-toolbar
    {
        min-height: 27px;
        padding: 1.3em;
    }    
</style>


<div class="mmsch-grid" id="grid-logs"></div>


<script type="text/x-kendo-template" id="tpl-grid-log-toolbar">
    <div class="toolbar">
    
    </div>
</script>


<style scoped>
    #grid-logs .k-toolbar
    {
        min-height: 27px;
        padding: 1.3em;
    }
    .toolbar {
        float: right;
    }
</style>

<script type="text/javascript">

    $(document).ready(function() {

        var gridLogs = $("#grid-logs").kendoGrid({
            dataSource: new kendo.data.DataSource({
                data: [],
                schema: {
                    model: {id: "log_id"}
                }
            }),
            //toolbar: kendo.template($("#tpl-grid-log-toolbar").html()),
            autoBind: false,
            sortable: true,
            resizable: true,
            scrollable:true,
            columns: [
                {
                    field: "state",
                    title: "&nbsp;",
                    width: "1%"
                },
                {
                    field: "log_id",
                    title: "&nbsp;",
                    width: "1%"
                },
                {
                    field: "time",
                    title: "Ώρα εκτέλεσης",
                    width: "6%"
                },
                {
                    field: "action",
                    title: "Ενέργεια",
                    width: "6%",
                    attributes: {
                        'style': "white-space:nowrap;"
                    }
                },
                {
                    field: "message",
                    title: "",
                    encoded: false
                },
                {
                    command: {
                            name: "Εκτέλεση",
                            click: function(e) {

                                var tr = $(e.target).closest("tr");

                                var data = this.dataItem(tr);

                                $("#grid-units").data('kendoGrid').dataSource.filter(data.flts);
                            }
                        }
                },
                {}
            ],
            editable: "inline",
            dataBound: function(e) {
                resizeGrid('grid-logs');
            }

        }).data('kendoGrid');

    });

</script>