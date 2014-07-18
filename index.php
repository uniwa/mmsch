<?php
require_once ('server/config.php');
require_once ('server/libs/phpCAS/CAS.php');

if (isset($_GET['auth'])){
	
	if ($_GET['auth']==1){
		
		if(!isset($casOptions["NoAuth"]) || $casOptions["NoAuth"] != true) {
			// initialize phpCAS using SAML
			phpCAS::client(SAML_VERSION_1_1,$casOptions["Url"],$casOptions["Port"],'');
			// no SSL validation for the CAS server, only for testing environments
			phpCAS::setNoCasServerValidation();
			// handle backend logout requests from CAS server
			phpCAS::handleLogoutRequests(array($casOptions["Url"]));
			if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
				phpCAS::logout();
				exit();
			} else {
				// force CAS authentication
				if (!phpCAS::checkAuthentication()){
					phpCAS::forceAuthentication();
				}
				else {
					header("Location: /main.php");
					exit();
				}
			}
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
		    
		    header("Location: /main.php");
		    exit();
		}
	}
	else if ($_GET['auth']==0){
		header("Location: /main.php");
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
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

<link rel="stylesheet" type="text/css" media="screen" href="client/vendors/bootstrap3/css/bootstrap.css" >

<script type="text/javascript" src="client/vendors/kendo/js/jquery.min.js"></script>
<script type="text/javascript" src="client/vendors/bootstrap3/js/bootstrap.js"></script>

<style>
.sch_logo_text {
    color: #1d73a3;
    float: left;
    font-size: 19px;
    line-height: 0.9;
    /*margin: 21px 0 0;*/
    font-weight:bold;
}

.sch_logo_text2 {
    color: #73a41d;
    font-size: 12px;
    fonr-weight:bold;
     font-weight:bold;
}

.vcenter {
    display: inline-block;
    vertical-align: middle;
    float: none;
}
</style>

</head>

<body>

<div class="container">
		
		<div style="clear: both;" >&nbsp;</div>
		<div style="clear: both;" >&nbsp;</div>
		
      <div class="header">
         <div class="pull-left"><img src="/img/logo_stirizo.png" /></div>     
        
         <div class="pull-right sch_logo_text vcenter">
         	<a href="http://www.sch.gr">Πανελλήνιο Σχολικό Δίκτυο</a>
			<br>
			<span class="sch_logo_text2">Το Δίκτυο στην Υπηρεσία της Εκπαίδευσης</span>
         </div>  
         <div class="pull-right"><img src="/img/sch_logo.png" /></div>  
              
      </div>
      <div style="clear: both;" >&nbsp;</div>

      <div class="jumbotron" style="background-color: #FF9900; -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;">
   		
   		<div>
      	<center>
        <h3 style="color:#0076B9">Κεντρικό Μητρώο Μονάδων <br/>Πανελλήνιου Σχολικού Δικτύου</h3>
        </center>
        <p class="lead"></p>
        <center>
        <p>
	       	<a role="button" href="/index.php?auth=1" class="btn btn-success">Πιστοποιημένη πρόσβαση</a>&nbsp;
        	<a role="button" href="/index.php?auth=0" class="btn btn-success">Δημόσια πρόσβαση</a>
        </p>
        </center>
        </div>
        
        <div style="padding-top:120px;">
	        <p class="pull-left" style="font-size:12px; font-weight:bold;">
	        Υποστηρίζεται από το ΤΕΙ Αθήνας <br/>
			Επικοινωνία: teiath-net@sch.gr 
	        </p>
	        
	        <p class="pull-right" style="font-size:12px; font-weight:bold;">
	        Εγχειρίδιο χρήστη (PDF)  
	        </p>
        </div>
        
        
        
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
                  </div>

        <div class="col-lg-6">
          
        </div>
      </div>

      <div class="footer">
       <div class="pull-left"><img src="/img/ypepth_logo.png" /></div>  
       <div class="pull-right"><img src="/img/espa_logo.png" /></div>  
      </div>

    </div>

</body>

</html>