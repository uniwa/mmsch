<?php
require_once ('../server/config.php');
require_once ('../server/libs/phpCAS/CAS.php');
if(!isset($_GET['auth']) || $_GET['auth'] != '0') {
    if(!isset($casOptions["NoAuth"]) || $casOptions["NoAuth"] != true) {
        // initialize phpCAS using SAML
        phpCAS::client(SAML_VERSION_1_1,$casOptions["Url"],$casOptions["Port"],'');
        // no SSL validation for the CAS server, only for testing environments
        phpCAS::setNoCasServerValidation();
        // handle backend logout requests from CAS server
        phpCAS::handleLogoutRequests(array($casOptions["Url"]));
        if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
            phpCAS::logoutWithRedirectService($casOptions["LogoutURL"]);
            exit();
        } else {
            // force CAS authentication
            if (!phpCAS::checkAuthentication())
              phpCAS::forceAuthentication();
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
    }
    $user['backendAuthorizationHash'] = base64_encode($frontendOptions['backendUsername'].':'.$frontendOptions['backendPassword']);
} else {
    $user = array();
    $user['edupersonorgunitdn'] = array('ou=null');
    $user['backendAuthorizationHash'] = base64_encode('anonymous:anonymous');
}
if (isset($user['uid'])) { 
	$isAnonymous = 0;
	loginUser($user['uid']);
}
else
	$isAnonymous = 1;

$isFY = 0;
$FY = '';
if (isset($user["l"])){
	$pattern = '/ou=([^,]+)/';
	preg_match_all($pattern, $user["l"], $matches);
	if ($matches[1][1]=="partners"){
		$isFY=1;
		$FY=$matches[1][0];
		if ($FY == "episey") $FY = "ntua";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="">
<meta name="description" content="">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

<link rel="shortcut icon" href="" />

<title>MMSCH</title>

<script type="text/javascript" src="../client/static.data.js"></script>

<script type="text/javascript">
    var user = JSON.parse(atob("<?php echo base64_encode(json_encode($user)); ?>"));
    var g_casUrl = "<?php echo $casOptions['Url'] ?>";

	// start - Implement personalized default filters based on CAS a
    var tmp_regExp = /ou=([^,]+)/;
    var tmp_matches = (user.edupersonorgunitdn[0]).match(tmp_regExp);
    var g_impEntDomain = tmp_matches[1];

    if (g_impEntDomain == "episey")
    	g_impEntDomain = "ntua";
    
    var g_isAnonymous = <?php echo $isAnonymous; ?>;
	// end - Implement personalized default filters based on CAS attributes
	
	var g_isFY = <?php echo $isFY; ?>;
	if (g_isFY){
		g_FY = "<?php echo $FY; ?>";
	}  
</script>
 
<style type="text/css">
	
	div#sidebar-inner {
    	width: none !important;
    	float: clear !important;
 
	}

	.no-space [class*="span"] {
    	/*margin-left: 10px !important;*/
	}
	
	span.k-widget.bt-col-full{
		display:block !important;
		width:100% !important;
	}

</style>

<link rel="stylesheet" type="text/css" media="screen" href="../client/vendors/kendo/styles/kendo.common.min.css" />

<link rel="stylesheet" type="text/css" media="screen" href="../client/vendors/kendo/styles/kendo.default.min.css" />

<link rel="stylesheet" type="text/css" media="screen" href="../client/vendors/bootstrap335/css/bootstrap.css" >

<link rel="stylesheet" type="text/css" media="screen" href="../client/styles/override.bts.kendo.css.css" />

<link rel="stylesheet" type="text/css" media="screen" href="../client/vendors/font-awesome-4.3.0/css/font-awesome.min.css" >

<link rel="stylesheet" type="text/css" media="screen" href="../client/vendors/metisMenu/metisMenu.min.css" >


<script type="text/javascript" src="../client/vendors/jquery-1.11.3.min.js"></script>

<script type="text/javascript" src="../client/vendors/jquery-ui/js/jquery-ui.custom.min.js"></script>

<script type="text/javascript" src="../client/vendors/kendo/js/kendo.web.min.js"></script>
<script type="text/javascript" src="../client/vendors/kendo/js/cultures/kendo.culture.el-GR.min.js"></script>
  
<script type="text/javascript" src="../client/vendors/bootstrap335/js/bootstrap.js"></script>

<script type="text/javascript" src="../client/js/webtoolkit.base64.js"></script>
<script type="text/javascript" src="../client/dataSources.js"></script>
<script type="text/javascript" src="../client/mmsch.global.vars.js"></script>
<script type="text/javascript" src="../client/ddls.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>

<!-- 
<script type="text/javascript" src="client/jquery.scrollTo-min.js"></script>
 -->
 
<link rel="stylesheet" type="text/css" media="screen" href="../client/vendors/mmenu/jquery.mmenu.css" >



<script type="text/javascript" src="../client/vendors/mmsch/equal.js"></script>

<script type="text/javascript" src="../client/vendors/metisMenu/metisMenu.min.js"></script>




<!--[if IE ]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lt IE 7]>
   <style type="text/css">
        #wrapper { height:100%; }
    </style>
<![endif]-->



<link type="text/css" href="css/default.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" media="all" />

<script>

function lookup(array, searchFor, property) {

	var retVal = -1;

	if (typeof array == "undefined" || array.length == 0){
		return retVal;
	}
	
    for(var index=0; index < array.length; index++){
        var item = array[index];
        if (item.hasOwnProperty(property)) {
            if (item[property] === searchFor) {
                retVal = index;
                return retVal;
            }
        }
    };
    
    return retVal;
}

function removeFromCollection(array, property, propValue){
	var retVal = 0;

	if (typeof array == "undefined" || array.length == 0){
		return retVal;
	}
	
    for(var index=0; index < array.length; index++){
        var item = array[index];
        if (item.hasOwnProperty(property)) {
            if (item[property].toLowerCase() === propValue.toLowerCase()) {
                //retVal = index;
                retVal++;
            	array.splice(index,1);
            }
        }
    };
    
    return retVal;
}

function changeTheme(skinName) {
    var doc = document,
        kendoLinks = $("link[href*='kendo.']", doc.getElementsByTagName("head")[0]),
        commonLink = kendoLinks.filter("[href*='kendo.common']"),
        skinLink = kendoLinks.filter(":not([href*='kendo.common'])"),
        href = location.href,
        skinRegex = /kendo\.\w+(\.min)?\.css/i,
        extension = skinLink.attr("rel") === "stylesheet" ? ".css" : ".less",
        url = commonLink.attr("href").replace(skinRegex, "kendo." + skinName + "$1" + extension),
        exampleElement = $("#example");
    
    function preloadStylesheet(file, callback) {
        var element = $("<link rel='stylesheet' media='print' href='" + file + "'").appendTo("head");
        
        setTimeout(function () {
            callback();
            element.remove();
        }, 100);
    }

    function replaceTheme() {
        var oldSkinName = $(doc).data("kendoSkin"),
            newLink;

            newLink = skinLink.eq(0).clone().attr("href", url);

        newLink.insertBefore(skinLink[0]);
        skinLink.remove();

        $(doc.documentElement).removeClass("k-" + oldSkinName).addClass("k-" + skinName);
    }

        replaceTheme();
};

//changeTheme("default");


// start - Implement personalized default filters based on CAS attributes
function g_findImpEnt(domain){
	return $.grep(staticData.ImplEnt.data, function(item){
		return (item.domain == domain);
	});
};

var g_impEnt = g_findImpEnt(g_impEntDomain);
// end - Implement personalized default filters based on CAS attributes

(function($){
	  $.event.special.destroyed = {
	    remove: function(o) {
	      if (o.handler) {
	        o.handler()
	      }
	    }
	  }
})(jQuery)

var mmschAppClass=function(){};

mmschAppClass.prototype={
	modules: {}
};

var mmschApp = new mmschAppClass();

var homePageModule = {

	_hoverSidemenuTimeout:null,
	$sideMenu:null,
	
	initMain: function(){

		var self = this;

		//self.$sideMenu = $('#main-splitter-inner nav#sidemenu');
		
	},
	_onMouseEnterUnpinnedSidemenu:function(e){
		
	},

	_onMouseLeaveUnpinnedSidemenu:function(e){
		
	}
};

$(document).ready(function() {

	var mm_id = "<?php echo @ $_GET['mm_id']; ?>";
	
	if (typeof mmschApp.modules['main'] == 'undefined'){
		$.extend(mmschApp.modules, {'main': homePageModule});
	}
	
	mmschApp.modules['main'].initMain();
	
	
	var viewModel = kendo.observable({
		
		_resizeMainSplitter: function(e){return;
			
			console.log('index-_resizeMainSplitter');

			
			resizeGrid("grid-units");
		}
	});

	kendo.bind("body", viewModel);

	
	// Build logout link
	$("#lnkLogout").attr("href", "main.php?logout=true");

	if (typeof user.uid === "undefined"){
		$("#vUsername").html("<strong>Δημόσια Πρόσβαση</strong>");
	}
	else {
		$("#vUsername").html("<strong>" + user.uid + "</strong>");
	}

}); // end of


var ddlsHaveBeenCreated = false;

function resizeGrid(gridId){return;
	
	var $gridEl = $('.mmsch-grid'),
		h,i,
		f= $gridEl.find(".k-grid-content:first"),
		g= $gridEl.find(".k-grid-pager");
				
	if(f.length===0){return}
				
	h=f.offset().top;
				
	i = $("#body").outerHeight() + $("#body").offset().top - h - (g.outerHeight()) - 1;
				
	$(".k-grid-content:first").height(i);
}

function dataBoundDetailsGridHandler(o, evt) {
	
    var ds = o.dataSource;
    var len = ds.data().length;
    var hasData = len > 0 ? true : false;

    if (ds.sort() == null || ds.sort() == 'undefined')
    {
        var di = o.element.parent().attr('id');
        var tab = o.element.parent().prevAll('ul').find('li[aria-controls="' + di + '"]');
        var lnk = tab.find('a.k-link');
        var tabStripElement = o.element.parent().prevAll('ul').parent().data('kendoTabStrip');

        lnk.prepend("&nbsp;<b>" + len + "</b>&nbsp;");

        if (!hasData) {
 
            o.element.find('tbody').append('<tr class=""><td collspan="3"><p>[ Δεν υπάρχουν δεδομένα ]<p></td></tr>');
        }
    }
}

function tplFunc(model) {

    if (model == null)
        return "--";

    return model;
}

function renderer(cacheData, model_id, value) {
	
    var val = "";

    if (typeof value == "string") {

        var substr = (value).split(',');

		var tmp=[];
        for (var i = 0; i < substr.length; i++) {
            cacheData.filter([
                {
                    field: model_id,
                    value: parseInt(substr[i])
                }
            ]);

            //val += " | " + cacheData.view()[0].name;
			if (typeof cacheData.view()[0] != 'undefined')
            tmp.push(cacheData.view()[0].name);
        }

        val = tmp.join(', ');
    } else {
        cacheData.filter([{field: model_id, value: parseInt(value)}]);
        val = cacheData.view()[0].name;
    }

    return val;
}

function evalLexicalId(cacheData, model_id, value, return_value){

	var val = "";

    if (typeof value == "string") {

        var substr = (value).split(',');
		var tmp=[];

        for (var i = 0; i < substr.length; i++) {

			$.grep(cacheData, function(item){
				if (item[model_id] == substr[i]){
					tmp.push(item[return_value]);
				}
			});
        }

        val = tmp.join(', ');

    } else {
        //cacheData.filter([{field: model_id, value: parseInt(value)}]);
		$.grep(cacheData, function(item){
			if (item[model_id] == value){
				val = item[return_value];
			}
		});
    }

    return val;
}


            
</script>



</head>

<body class="gray-bg">

	<div id="dlgWndSelectTheme" class="" style="">
		<center>
			<div id="themelistView"></div>
		</center>
	</div>
	
	<script type="text/x-kendo-template" id="themeItemTmpl">
   <div class="theme">
	<span style="display:block; margin-right:2px; float:left; border:1px grey solid; width:16px; height:16px; background-color:#:color1#">&nbsp;</span>
	<span style="display:block; margin-right:2px; float:left; border:1px grey solid; width:16px; height:16px; background-color:#:color2#">&nbsp;</span>
	<span style="display:block; margin-right:2px; float:left; border:1px grey solid; width:16px; height:16px; background-color:#:color3#">&nbsp;</span>
    <span style="display:block; white-space:nowrap">#:themeName#</span>
   </div>
	</script>

	


	
		
	<!-- Page container -->
 	<div class="page-container gray-bg">
 		
		<!-- Page content -->
	 	<div id="page-content">
	 	
	 		<div class="row">
	 			
	 			<!-- Navbar -->
				<div class="navbar navbar-inverse" role="navigation">
					
					<div class="navbar-header">
						
						<a class="navbar-brand" href=""><img class="img-rounded" src="../client/img/schgr.jpg" alt="Πανελλήνιο Σχολικό Δίκτυο" style="width:80px; margin-top:-10px;"></a>
						
						<a class="navbar-brand" href="#">Πανελλήνιο Σχολικό Δίκτυο</a>
						 
						<a hred="#" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
							<i class="fa fa-th"></i>
						</a>
						
						
						 
					</div>
					
					<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
						
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-user"></i>
								<span id="vUsername"></span>
								<i class="caret"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-right icons-right">
			    					<li><a href="/hlp/user_guide_frontend_ver3.pdf" target="_blank"><i class="fa fa-question fa-1x"></i>&nbsp;&nbsp;Οδηγός Χρήσης</a></li>
			    					<?php if ($isFY) : ?>
			    					<li><a href="../client/stats/statistic.php?implementation_entity=<?php echo $FY; ?>" target="_blank"><i class="fa fa-bar-chart fa-1x"></i>&nbsp;&nbsp;Στατιστικα</a></li>
			    					<?php endif; ?>
			    					<li><a href="#" id="btnSelectTheme"><i class="fa fa-eye fa-1x"></i>&nbsp;&nbsp;Εμφάνιση</a></li>
			    					<li><a href="/docs/package-GET.html" target="_blank"><i class="fa fa-code fa-1x"></i>&nbsp;&nbsp;Οδηγός API</a></li>
			    					<li><a href="http://helpdesk.sch.gr/?category_id=9508" target="_blank"><i class="fa fa-support fa-1x"></i>&nbsp;&nbsp;Αναφορά Σφαλμάτων</a></li>
			    					<li class="divider"></li>
			    					<li><a href="#" id="lnkLogout"><i class="fa fa-sign-out fa-1x"></i>&nbsp;&nbsp;Αποσύνδεση</a></li>
							</ul>
						</li>
						
					</ul>
					
				</div>
				<!-- /navbar -->
	 		
	 		</div>
	 	
	 		<div id="page-content-inner">
