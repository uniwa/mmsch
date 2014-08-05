<?php
require_once ('../../server/config.php');
require_once ('../../server/libs/phpCAS/CAS.php');

phpCAS::client(SAML_VERSION_1_1,$casOptions["Url"],$casOptions["Port"],'');
phpCAS::setNoCasServerValidation();
phpCAS::handleLogoutRequests(array($casOptions["Url"]));
if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
    phpCAS::logout();
    exit();
} else {
    if (!phpCAS::checkAuthentication())
      phpCAS::forceAuthentication();
}
              
$user['backendAuthorizationHash'] = base64_encode($frontendOptions['backendUsername'].':'.$frontendOptions['backendPassword']);       

$fy = $_GET['implementation_entity'];  
$convert_fy = array(
                "auth" => "1" ,
                "duth" => "2",
                "uoa"=> "3",         
                "ntua"=> "4",
                "cti"=> "5",
                "aegean"=> "6",
                "uth"=> "7",
                "uoi"=> "8",
                "uoc"=> "9",      
                "uom"=> "10",           
                "teiath"=> "11",          
                "teithe"=> "12",       
                "teilar"=> "13"
    );

     if (!array_key_exists($fy, $convert_fy)){     
        echo 'Error implementation code';die();
     }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script  type="text/javascript" src="../../client/_js/jquery.min.js"></script>
        <link href="../../client/_styles/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
        <script>
             
            var user = JSON.parse(atob("<?php echo base64_encode(json_encode($user)); ?>"));
            var apiUrl = "/api/";
            
            function make_base_auth(hash) { return "Basic " + hash;}

            var parameters = {
                 implementation_entity: <?php echo $convert_fy[$fy] ?>,
                 x_axis: "edu_admin",
                 y_axis: "unit_type"
             };

             $.ajax({
                 type: "GET",
                 url: apiUrl + "statistic_units",
                 dataType: "json",
                 data: JSON.stringify(parameters),
                 beforeSend: function(req) {
                     req.setRequestHeader(
                     'Authorization', make_base_auth (user.backendAuthorizationHash)
                     );
                 },
                 success: function(data){

                   $(document).ready(function() {
                       
                       var results = data.results;          
                       var unit_types = [{"unit_type_id": 1,"name": "ΝΗΠΙΑΓΩΓΕΙΟ","initials": "ΝΗΠ","category_id": 1,"education_level_id": 1}, {"unit_type_id": 2,"name": "ΔΗΜΟΤΙΚΟ","initials": "ΔΗΜ","category_id": 1,"education_level_id": 1}, {"unit_type_id": 3,"name": "ΓΥΜΝΑΣΙΟ","initials": "ΓΥΜ","category_id": 1,"education_level_id": 2}, {"unit_type_id": 4,"name": "ΓΕΝΙΚΟ ΛΥΚΕΙΟ","initials": "ΓΕΛ","category_id": 1,"education_level_id": 2}, {"unit_type_id": 5,"name": "ΕΠΑΓΓΕΛΜΑΤΙΚΟ ΛΥΚΕΙΟ","initials": "ΕΠΑΛ","category_id": 1,"education_level_id": 2}, {"unit_type_id": 6,"name": "ΕΠΑΓΓΕΛΜΑΤΙΚΗ ΣΧΟΛΗ","initials": "ΕΠΑΣ","category_id": 1,"education_level_id": 2}, {"unit_type_id": 7,"name": "ΤΕΧΝΙΚΟ ΕΠΑΓΓΕΛΜΑΤΙΚΟ ΕΚΠΑΙΔΕΥΤΗΡΙΟ","initials": "ΤΕΕ","category_id": 1,"education_level_id": 2}, {"unit_type_id": 8,"name": "ΕΡΓΑΣΤΗΡΙΑΚΟ ΚΕΝΤΡΟ","initials": "ΕΚ","category_id": 1,"education_level_id": 2}, {"unit_type_id": 9,"name": "ΕΠΑΓΓΕΛΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ ","initials": "ΕΠΑΓ","category_id": null,"education_level_id": null}, {"unit_type_id": 10,"name": "ΓΕΝΙΚΟ ΑΡΧΕΙΟ ΚΡΑΤΟΥΣ","initials": "ΓΑΚ","category_id": 5,"education_level_id": 4}, {"unit_type_id": 11,"name": "ΕΙΔΙΚΟ ΕΡΓΑΣΤΗΡΙΟ ΕΠΑΓΓΕΛΜΑΤΙΚΗΣ ΕΚΠΑΙΔΕΥΣΗΣ ΚΑΙ ΚΑΤΑΡΤΙΣΗΣ","initials": "ΕΕΕΕΚ","category_id": 1,"education_level_id": 2}, {"unit_type_id": 12,"name": "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΠΡΩΤΟΒΑΘΜΙΑΣ","initials": "ΣΕΠ","category_id": 3,"education_level_id": 4}, {"unit_type_id": 13,"name": "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ","initials": "ΣΕΔ","category_id": 3,"education_level_id": 4}, {"unit_type_id": 14,"name": "ΔΙΕΥΘΥΝΣΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ","initials": "ΔΔΕ","category_id": 8,"education_level_id": 4}, {"unit_type_id": 15,"name": "ΔΙΕΥΘΥΝΣΗ ΠΡΩΤΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ","initials": "ΔΠΕ","category_id": 8,"education_level_id": 4}, {"unit_type_id": 16,"name": "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΕΚΠΑΙΔΕΥΣΗΣ","initials": "ΠΔΕ","category_id": 8,"education_level_id": 4}, {"unit_type_id": 17,"name": "ΓΡΑΦΕΙΟ ΠΡΩΤΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ","initials": "ΓΠΕ","category_id": 8,"education_level_id": 4}, {"unit_type_id": 18,"name": "ΓΡΑΦΕΙΟ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ","initials": "ΓΔΕ","category_id": 8,"education_level_id": 4}, {"unit_type_id": 19,"name": "ΓΡΑΦΕΙΟ ΕΠΑΓΓΕΛΜΑΤΙΚΗΣ ΕΚΠΑΙΔΕΥΣΗΣ","initials": "ΓΕΕ","category_id": 8,"education_level_id": 4}, {"unit_type_id": 20,"name": "ΚΕΣΥΠ","initials": "ΚΕΣΥΠ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 21,"name": "ΓΡΑΣΕΠ","initials": "ΓΡΑΣΕΠ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 22,"name": "ΣΣΝ","initials": "ΣΣΝ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 23,"name": "ΚΕΔΔΥ","initials": "ΚΕΔΔΥ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 24,"name": "ΚΕΠΛΗΝΕΤ","initials": "ΚΕΠΛΗΝΕΤ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 25,"name": "ΕΚΦΕ","initials": "ΕΚΦΕ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 26,"name": "ΚΠΕ","initials": "ΚΠΕ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 27,"name": "ΠΕΚ","initials": "ΠΕΚ","category_id": 2,"education_level_id": 4}, {"unit_type_id": 28,"name": "ΣΕΠΕΗΥ","initials": "ΣΕΠΕΗΥ","category_id": 4,"education_level_id": 4}, {"unit_type_id": 29,"name": "ΕΡΓΑΣΤΗΡΙΑ ΦΥΣΙΚΩΝ ΕΠΙΣΤΗΜΩΝ","initials": "ΕΦΕ","category_id": 4,"education_level_id": 4}, {"unit_type_id": 30,"name": "ΣΧΟΛΙΚΕΣ ΒΙΒΛΙΟΘΗΚΕΣ","initials": "ΣΒ","category_id": 4,"education_level_id": 4}];
                       var edu_admins = [];
                       
                       for (i = 0; i < results.length; i++) {
                           if(jQuery.inArray( results[i].edu_admin_name, edu_admins ) === -1){
                               edu_admins.push(results[i].edu_admin_name);
                           }
                       }

                       for (j = 0; j < edu_admins.length; j++) {
                           jQuery("#table thead tr").append("<th>" + edu_admins[j] + "</th>");
                       }

                       for (i = 0; i < unit_types.length; i++) {
                           jQuery("#table tbody").append("<tr id=" + i + "><th class='text-nowrap'>" + unit_types[i].name + "</th></tr>");

                           for(j = 0; j < edu_admins.length; j++){
                               jQuery("#"+i).append("<td> </td>");
                           }
                       }

                       for (i = 0; i < results.length; i++) {

                           var edu_admin = results[i].edu_admin_name;
                           var unit_type = results[i].unit_type_name;
                           var value = results[i].total_units;

                           var column = jQuery.inArray( edu_admin, edu_admins );

                           for (x = 0; x < unit_types.length; x++) {
                               if(unit_types[x].name === unit_type){
                                   var row = x;
                               }
                           }    

                           jQuery("#table tbody").find("tr:eq(" + row + ")>td:eq(" + column + ")").text(value);

                       }
                   });
                   
                   
               },
               error: function (data){
                   console.log("GET statistic_units error data: ", data);
               }
           });
           
           
       </script>
   </head>
   <body style="font-size: 11px; color: #565e66">
       <h4 style="text-align: center; margin-top:15px;">Στατιστικά</h4>
       <div class="container" style="margin-top: 50px;">
           <div class="row-fluid">
               <div class="col-md-12">
                   <table id="table" class="table table-bordered table-striped">
                       <thead>
                           <tr>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </body>
</html>