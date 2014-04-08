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
            scrollable: true,
            columns: [
                {
                    field: "state",
                    title: "&nbsp;",
                    width: "5%",
                    attributes: {
                        'class':"log_state"
                    }
                },
                {
                    field: "log_id",
                    title: "&nbsp;",
                    width: "5%"
                },
                {
                    field: "time",
                    title: "Ώρα εκτέλεσης",
                    width: "10%",
                    attributes: {
                        
                    }
                },
                {
                    field: "action",
                    title: "Ενέργεια",
                    width: "20%",
                    attributes: {
                        'style': "white-space:nowrap;"
                    }
                },
                {
                    width: "00%",
                    field: "message",
                    title: "&nbsp;",
                    encoded: false
                },
                {
                    width: "00%",
                    command: {
                        name: "Εκτέλεση",
                        click: function(e) {

                            var tr = $(e.target).closest("tr");

                            var data = this.dataItem(tr);

                            $("#grid-units").data('kendoGrid').dataSource.filter(data.flts);
                        }
                    }
                }
            ],
            editable: "inline",
            dataBinding: function(e){
                
            },
            dataBound: function(e) {

                resizeGrid('grid-logs');
                
                dataView = this.dataSource.view();

                for(var i = 1; i < dataView.length; i++) {
                    var uid = dataView[i].uid;
                    var row = $("#grid-logs tbody").find("tr[data-uid=" + uid + "]");
                    var lg = row.find('.log_state');
                    lg.addClass("k-custom-ok");
                }
            }

        }).data('kendoGrid');

    });

</script>