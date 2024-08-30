<?php 
function file_get_contents_utf8($fn) {
	$content = file_get_contents($fn);
	return mb_convert_encoding($content, 'UTF-8',
			mb_detect_encoding($content, 'UTF-8, ISO-8859-7', true));
}

$whatsnew = trim(file_get_contents_utf8('whatsnew.txt'));
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

<title>ΜΜ ΠΣΔ</title>

<link rel="stylesheet" type="text/css" media="screen" href="client/vendors/bootstrap334/css/bootstrap.css" >

<script type="text/javascript" src="client/vendors/kendo/js/jquery.min.js"></script>
<script type="text/javascript" src="client/vendors/bootstrap334/js/bootstrap.js"></script>
<script data-cookie-notice='{ "learnMoreLinkEnabled": true, "learnMoreLinkHref": "https://www.sch.gr/aboutcookies" }' src="client/js/cookie.notice.js"></script>

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

<div class="modal" id="whatsNewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">What's new</h4>
      </div>
      <div class="modal-body"><?php echo $whatsnew; ?></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
		
	<div style="clear: both;" >&nbsp;</div>
		
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-xs-6">
					<p class="pull-left"><img class="img-responsive" src="/img/sch_logo.png" />&nbsp;&nbsp;&nbsp;</p>			
					<p class="pull-left" style="padding-top:5px;"><strong><a href="http://www.sch.gr" style="color: #1d73a3;font: bold 20px Tahoma,sans-serif;">Πανελλήνιο Σχολικό Δίκτυο</a></strong><br>
						<span class="sch_logo_text2">Το Δίκτυο στην Υπηρεσία της Εκπαίδευσης</span>
					</p>
				</div>
				
				<div class="col-md-4 col-xs-6">
					<p class="pull-right"><button class="btn btn-xs btn-link" data-toggle="modal" data-target="#whatsNewModal"><img class="pull-right" src="/img/whats_new_icon.jpg" style="width:30%" />
					</button>
					</p>
				</div>
				
			</div>
		 </div>
        
         
              
      </div>
      

      <div class="jumbotron" style="background-color: #FFDC95;">
   		
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12"><h2 style="color: #fff;font-weight: bold; text-shadow: 1px 1px 2px #111111;">Κεντρικό Μητρώο Μονάδων <br/>Πανελλήνιου Σχολικού Δικτύου</h2></div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<p>
							<strong>H υπηρεσία «Κεντρικό Μητρώο ΠΣΔ» παρέχει τη δυνατότητα διαβαθμισμένης πρόσβασης στα βασικά αλλά και τα δικτυακά στοιχεία των μονάδων που εξυπηρετεί το Πανελλήνιο Σχολικό Δίκτυο.</strong>
							</p>
						</div>				
					</div>
					
					<div class="row">
						<div class="col-md-12">
						<p>
						<strong><span style="color: #fff;font-weight: bold; text-shadow: 1px 1px 2px #111111;">Νέες δυνατότητες:</span>
						<ul class="list-group list-unstyled">
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Εμπλουτισμός περιεχομένου μόνο μέσω Web Services</li> 
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Συσχέτιση δομών συνδεσιμότητας (εξοπλισμός CPE – τηλεπικοινωνιακό κύκλωμα – λογαριασμός ευρυζωνικής υπηρεσίας – δικτυακά στοιχεία)</li> 
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Υποσυστήματα – δορυφόροι για καλύτερη διαχείριση των δεδομένων και έλεγχο των πηγών τους: MyLab, SCH Units Subsystem, Line management System</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Φιλικό και προσωποποιημένο UI</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Ολοκλήρωση με το περιβάλλον single sign-on και τον LDAP του ΠΣΔ</li>
						<ul></strong>
						</p>
						</div>
						
					</div>

                                       <div class="row">
                                                <div class="col-md-12">
                                                        <a href="/hlp/term_of_use_mm.pdf" target="_blank">Όροι χρήσης</a> | <a href="/hlp/user_guide_mm_ver6.pdf" target="_blank">Οδηγός χρήστη</a> | <a href="https://www.sch.gr/dataprivacy/short.php" target="_blank">Προστασία Προσωπικών Δεδομένων</a>
                                                </div>
                                        </div>
					
				</div>
				
				<div class="col-md-4">
					
					<div class="row">&nbsp;</div>
					
					<div class="row">
						<div class="col-md-12">
						<center><img src="/img/mm_sch.png" class="" /></center>
						</div>	
					</div>
					
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-12">						
							<a role="button" href="/main.php?auth=1" class="btn btn-primary btn-lg btn-block">Πιστοποιημένη πρόσβαση</a>&nbsp;
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">						
        					<a role="button" href="/main.php?auth=0" class="btn btn-success btn-lg btn-block">Δημόσια πρόσβαση</a>
						</div>
					</div>
					
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-12">
							<div class="pull-right">
							<strong>Υποστηρίζεται από το Πανεπιστήμιο Δυτικής Αττικής<br><br>
							Για προβλήματα ή απορίες επικοινωνήστε μαζί μας στο email: mm@sch.gr<br>
							Μπορείτε επίσης, να χρησιμοποιείτε και το online σύστημα καταγραφής προβλημάτων στη διεύθυνση <a href="https://helpdesk.sch.gr/?category_id=9508" target="_blank">https://helpdesk.sch.gr</a><br><br>
							</strong>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		
			
			
			
			
			
		</div>
		
		
        
        
      </div>

     

      <div class="footer">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4"><p><img class="img-responsive" src="/img/mainlogo_p8.png" /></p></div>
				<div class="col-md-4"><p><img class="img-responsive" src="/img/logo_stirizo.png" /></p></div>
				<div class="col-md-4"><p><img class="img-responsive" src="/img/logo.png" /></p></div>
			</div>
		</div>
       
      </div>

    </div>






</body>

</html>
