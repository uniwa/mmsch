<script>
    
    
            
    $(document).ready(function() {

        $("#frmTreeNav .searchComponent").find(".k-toolbar").insertAfter($("#frmTreeNav .searchComponent .k-content"));

        //resizeSearchWidget('frmTreeNav');

        $("#treeview-left").kendoTreeView({
            dataSource: hDataPrefAndMun,
            dataTextField: [ "name", "name" ],
            animation:false,
            select : function(e){
                var node = $("#treeview-left").data("kendoTreeView").dataItem(e.node);

                var dsSrcParams = [];

                dsSrcParams.push({'field': 'prefecture', 'value': node.prefecture_id || ""});
                dsSrcParams.push({'field': 'municipality', 'value': node.manicipality_id || ""});
                
                dsSrcParams.push({'field': 'region_edu_admin', 'value': node.region_edu_admin_id || ""});
                dsSrcParams.push({'field': 'edu_admin', 'value': node.edu_admin_id || ""});
                
                dsSrcParams.push({'field': 'state', 'value': 1});
                
                $('#grid-units').data('kendoGrid').options.inSearching = true;
                $("#grid-units").data("kendoGrid").dataSource.filter(dsSrcParams);
            },
            dataBound: function(e) {
                resizeTree();
            }
        });
       
       
    });

</script>

<link rel="stylesheet" href="client/styles/override.bts.kendo.css.css" />

<div id="treeview-left"></div>

<style scoped>
    .demo-section {
        width: 200px;
    }

    #treeview-left .k-sprite {
        background-image: url("client/img/coloricons-sprite.png");
    }

    .rootfolder { background-position: 0 0; }
    .folder { background-position: 0 -16px; }
    .pdf { background-position: 0 -32px; }
    .html { background-position: 0 -48px; }
    .image { background-position: 0 -64px; }

</style>
