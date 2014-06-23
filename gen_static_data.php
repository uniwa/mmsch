<?php
require_once ('server/config.php');
require_once ('server/libs/phpCAS/CAS.php');
if(!isset($casOptions["NoAuth"]) || $casOptions["NoAuth"] != true) {
    // initialize phpCAS using SAML
    phpCAS::client(SAML_VERSION_1_1,$casOptions["Url"],$casOptions["Port"],'');
    // no SSL validation for the CAS server, only for testing environments
    phpCAS::setNoCasServerValidation();
    // handle backend logout requests from CAS server
    phpCAS::handleLogoutRequests(array($casOptions["Url"]));
    // force CAS authentication
    if (!phpCAS::checkAuthentication())
      phpCAS::forceAuthentication();
    // at this step, the user has been authenticated by the CAS server and the user's login name can be read with //phpCAS::getUser(). for this test, simply print who is the authenticated user and his attributes.
    $user = phpCAS::getAttributes();
} else {
    $user = array(
        'uid' => $frontendOptions['backendUsername'],
        'mail' => $frontendOptions['backendUsername'].'@sch.gr',
        'title' => 'ΠΡΟΣΩΠΙΚΟ ΠΣΔ',
        'ou' => 'ΤΕΙ ΑΘΗΝΑΣ',
        'cn' => 'ΝΙΚΟΥΔΗΣ ΔΗΜΟΣΘΕΝΗΣ',
        'gsnBranch' => 'ΠΕ20',
        'edupersonorgunitdn' => array(
            'ou=teiath,ou=partners,ou=units,dc=sch,dc=gr',
            'ou=partners,ou=units,dc=sch,dc=gr'
        ),
        'l' => 'ou=teiath,ou=partners,ou=units,dc=sch,dc=gr',
        'memberof' => '',
        'umdobject' => 'Personel',
    );
}
$user['backendUsername'] = $frontendOptions['backendUsername'];
$user['backendPassword'] = $frontendOptions['backendPassword'];
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="">
<meta name="description" content="">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

<link rel="shortcut icon" href="" />

<title>MMSCH</title>

<script type="text/javascript">
    var user = JSON.parse(atob("<?php echo base64_encode(json_encode($user)); ?>"));
    var g_casUrl = "<?php echo $casOptions['Url'] ?>";

    var regExp = /ou=([^,]+)/;
    var matches = (user.edupersonorgunitdn[0]).match(regExp);
    var g_impEnt = matches[1];
</script>

<script type="text/javascript" src="client/vendors/kendo/js/jquery.min.js"></script>
<script type="text/javascript" src="client/js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="client/vendors/kendo/js/kendo.web.min.js"></script>
<script type="text/javascript" src="client/vendors/kendo/js/cultures/kendo.culture.el-GR.min.js"></script>
  

<script type="text/javascript" src="client/js/webtoolkit.base64.js"></script>
<script type="text/javascript" src="client/dataSources.js"></script>
<script type="text/javascript" src="client/generate.static.data.js"></script>





<!--[if lt IE 7]>
   <style type="text/css">
        #wrapper { height:100%; }
    </style>
<![endif]-->

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script>
$(document).ready(function() {
	
	
	loadStaticData();

	
	
});

</script>

</head>

<body>


</body>
</html>