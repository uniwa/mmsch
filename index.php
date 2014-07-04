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
    if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
        phpCAS::logout();
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

<script type="text/javascript" src="client/static.data.js"></script>

<script type="text/javascript">
    var user = JSON.parse(atob("<?php echo base64_encode(json_encode($user)); ?>"));
    var g_casUrl = "<?php echo $casOptions['Url'] ?>";

	// start - Implement personalized default filters based on CAS a
    var tmp_regExp = /ou=([^,]+)/;
    var tmp_matches = (user.edupersonorgunitdn[0]).match(tmp_regExp);
    var g_impEntDomain = tmp_matches[1];
	// end - Implement personalized default filters based on CAS attributes
    
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

<link rel="stylesheet" type="text/css" media="screen" href="client/vendors/kendo/styles/kendo.common.min.css" />

<link rel="stylesheet" type="text/css" media="screen" href="client/vendors/kendo/styles/kendo.default.min.css" />



<link rel="stylesheet" type="text/css" media="screen" href="client/vendors/bootstrap3/css/bootstrap.css" >


<link rel="stylesheet" type="text/css" media="screen" href="client/styles/override.bts.kendo.css.css" />

<link rel="stylesheet" type="text/css" media="screen" href="client/vendors/font-awesome/css/font-awesome.min.css" />

<script type="text/javascript" src="client/vendors/kendo/js/jquery.min.js"></script>

<script type="text/javascript" src="client/vendors/jquery-ui/js/jquery-ui.custom.min.js"></script>

<script type="text/javascript" src="client/vendors/kendo/js/kendo.web.min.js"></script>
<script type="text/javascript" src="client/vendors/kendo/js/cultures/kendo.culture.el-GR.min.js"></script>
  
<script type="text/javascript" src="client/vendors/bootstrap3/js/bootstrap.js"></script>

<script type="text/javascript" src="client/js/webtoolkit.base64.js"></script>
<script type="text/javascript" src="client/dataSources.js"></script>
<script type="text/javascript" src="client/mmsch.global.vars.js"></script>
<script type="text/javascript" src="client/ddls.js"></script>

<script type="text/javascript" src="client/jquery.scrollTo-min.js"></script>





<link rel="stylesheet" type="text/css" media="screen" href="client/vendors/mmenu/jquery.mmenu.css" >
<script type="text/javascript" src="client/vendors/mmenu/jquery.mmenu.js"></script>



<!--[if IE ]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lt IE 7]>
   <style type="text/css">
        #wrapper { height:100%; }
    </style>
<![endif]-->



<link type="text/css" href="my.css" rel="stylesheet" media="all" />

<script>

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

		self.$sideMenu = $('#main-splitter-inner nav#sidemenu');
		
	},
	_onMouseEnterUnpinnedSidemenu:function(e){

		var self = this;
			
		if(self._hoverSidemenuTimeout){
			window.clearTimeout(self._hoverSidemenuTimeout);
		}

		self._hoverSidemenuTimeout=window.setTimeout(function(){
			
			if ( self.$sideMenu.hasClass("unpinned") ){
				self.$sideMenu.css({"right":"auto", "left":"0px", "z-index":"1000"});    
			}

			self._hoverSidemenuTimeout=null;
					
		},800);
	},

	_onMouseLeaveUnpinnedSidemenu:function(e){
		
		var self = this;
		
		$target = $(e.target);
		
		if ( self.$sideMenu.hasClass("unpinned") ){
				
			window.clearTimeout(self._hoverSidemenuTimeout);
			self._hoverSidemenuTimeout=null;
		
			var r = (self.$sideMenu.width()-40)*-1;
			self.$sideMenu.css({"right":"auto", "left": r + "px"});
		}
	}
};

$(document).ready(function() {

	var mm_id = "<?php echo @ $_GET['mm_id']; ?>";
	
	if (typeof mmschApp.modules['main'] == 'undefined'){
		$.extend(mmschApp.modules, {'main': homePageModule});
	}
	
	mmschApp.modules['main'].initMain();
						
	$('#sidemenu .ddd').mmenu();

	
	
	var grid_pane = $('.splitter-holder-inner div#left-pane:first');
	var preview_pane = $('.splitter-holder-inner div#right-pane:first');
	
	var $mainSectionPane = $('#main-splitter-inner section:first');
	var $sideMenuNav = $('#main-splitter-inner nav:first');

			
	bindStaticData(function(){
		
		$(".nav-tree-prefectures").kendoTreeView({
			dataSource: hDataPrefAndMun,
            dataTextField: [ "prefecture", "municipality" ],
            animation:false,
            select : function(e){
				
                var node = $(".nav-tree-prefectures").data("kendoTreeView").dataItem(e.node);
				
                var dsSrcParams = [];

                dsSrcParams.push({'field': 'prefecture', 'value': node.prefecture_id || ""});
                dsSrcParams.push({'field': 'municipality', 'value': node.municipality_id || ""});
                
                //dsSrcParams.push({'field': 'region_edu_admin', 'value': node.region_edu_admin_id || ""});
                //dsSrcParams.push({'field': 'edu_admin', 'value': node.edu_admin_id || ""});
                
                dsSrcParams.push({'field': 'state', 'value': 1});
                
                $('#grid-units').data('kendoGrid').options.inSearching = true;
                $("#grid-units").data("kendoGrid").dataSource.filter(dsSrcParams);
				
            }
		});
		
		$(".nav-tree-regions").kendoTreeView({
			dataSource: hDataRegionAndEdu,
            dataTextField: [ "region_edu_admin", "edu_admin" ],
            animation:false,
            select : function(e){
				
                var node = $(".nav-tree-regions").data("kendoTreeView").dataItem(e.node);

                var dsSrcParams = [];

                //dsSrcParams.push({'field': 'prefecture', 'value': node.prefecture_id || ""});
                //dsSrcParams.push({'field': 'municipality', 'value': node.manicipality_id || ""});
                
                dsSrcParams.push({'field': 'region_edu_admin', 'value': node.region_edu_admin_id || ""});
                dsSrcParams.push({'field': 'edu_admin', 'value': node.edu_admin_id || ""});
                
                dsSrcParams.push({'field': 'state', 'value': 1});
                
                $('#grid-units').data('kendoGrid').options.inSearching = true;
                $("#grid-units").data("kendoGrid").dataSource.filter(dsSrcParams);
				
            }
		});
	});

	$('body').on("click", "#sidemenu button.navigation-control", function(e){
		
		//var r = ($sideMenuNav.width()-40)*1;
		
		if ($sideMenuNav.hasClass("pinned")){
			
			$sideMenuNav.removeClass("pinned").addClass("unpinned");
			
			var r = ($sideMenuNav.width()-40)*-1;

			$sideMenuNav.css({"right":"auto", "left": r + "px" });
			$mainSectionPane.css({"width":"auto", "left": "40px"});
			
			$sideMenuNav.on("mouseenter",function(e){
				//$sideMenuNav.css({"right":"auto", "left":"0px", "z-index":"1000"});  

				mmschApp.modules['main']._onMouseEnterUnpinnedSidemenu(e);				
			});
			
			$('#main-splitter-inner .k-splitbar:first').hide();
		
			$sideMenuNav.on("mouseleave",function(e){
				//var r = ($sideMenuNav.width()-40)*-1;
				//$sideMenuNav.css({"right":"auto", "left": r + "px"});
				
				mmschApp.modules['main']._onMouseLeaveUnpinnedSidemenu(e);				
			});
		}
		else if ( $sideMenuNav.hasClass("unpinned") ){

			$('#main-splitter-inner .k-splitbar:first').show();

			$sideMenuNav.removeClass("unpinned").addClass("pinned");
			
			$sideMenuNav.unbind("mouseenter");
			$sideMenuNav.unbind("mouseleave");
		}
		var ks = $('#main-splitter-inner').data('kendoSplitter');
			ks.expand('.k-pane:first');
			ks.expand('.k-pane:last');

	});

	var viewModel = kendo.observable({
		
		_resizeMainSplitter: function(e){
			
			console.log('index-_resizeMainSplitter');
			
			if ( $sideMenuNav.hasClass("unpinned") ){
			
				var r = ($sideMenuNav.width()-40)*-1;
				$mainSectionPane.css({"width":"auto", "left": "40px"});
				$sideMenuNav.css({"right":"auto", "left": r + "px" });
				
				if ($('.splitter-holder-inner').length > 0){
					var ks = $('.splitter-holder-inner').data('kendoSplitter');
					ks.expand('.k-pane:first');
				}
			}
			
			resizeGrid("grid-units");
		}
	});

	kendo.bind("body", viewModel);

	if ( $sideMenuNav.hasClass("unpinned") ){
		var r = ($sideMenuNav.width()-40)*-1;
		$mainSectionPane.css({"width":"auto", "left": "40px"});
		$sideMenuNav.css({"right":"auto", "left": r + "px" });
		
		if ($('.splitter-holder-inner').length > 0){
			var ks = $('.splitter-holder-inner').data('kendoSplitter');
			ks.expand('.k-pane:first');
		}

		$sideMenuNav.on("mouseenter",function(e){
			
			mmschApp.modules['main']._onMouseEnterUnpinnedSidemenu(e);
		});

		$sideMenuNav.on("mouseleave",function(e){
			
			mmschApp.modules['main']._onMouseLeaveUnpinnedSidemenu(e);
		});
	}
	//$(".splitter-holder-inner").data('kendoSplitter').trigger('resize');
	
	
	
	$("nav#sidemenu li.load-page > a").on('click', function(e){

		e.preventDefault();
		
		$('#bodyInner .main-pane').remove();
		
		if ($('#myModal').length>0){
			
			destroyDDL();
		}
		
				
		$('#bodyInner').load( $(this).attr("href") , function(e){
			resizeGrid('.mmsch-grid');
		});
		
	});

	if (mm_id == "") {
		$('#bodyInner').load( "client/views/grids/my-units.php" , function(e){
			resizeGrid('.mmsch-grid');
		});
	} else {
		$( "#bodyInner" ).load( "client/views/grids/unit-card.php?mm_id=" + mm_id, function(){

		});
	}

	// Build logout link
	$("#lnkLogout").attr("href", "http://" + g_casUrl + "/logout");
	$("#lnkLogout").html("<strong>" + user.uid + " [Logout]" + "</strong>");

}); // end of


var ddlsHaveBeenCreated = false;

function resizeGrid(gridId){
	
	var $gridEl = $('.mmsch-grid'),
		h,i,
		f= $gridEl.find(".k-grid-content:first"),
		g= $gridEl.find(".k-grid-pager");
				
	if(f.length===0){return}
				
	h=f.offset().top;
				
	i = $("#body").outerHeight() + $("#body").offset().top - h - (g.outerHeight());
				
	$(".k-grid-content:first").height(i)
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

<body>

<div id="page" class="">
		
	<div id="header" style="color:#333333; font-size:14px; padding:0px 14px 0 14px; font-family:'Open Sans', 'Segoe UI', verdana, Arial, Helvetica, Sans-Serif;">
		
		<div class="pull-left">
			<span style="font-size:16px;font-weight:bold"><img src="client/img/schgr.jpg" style="width:70px;" class="img-rounded" alt="Πανελλήνιο Σχολικό Δίκτυο" /></span> 
		</div>
		
		<div class="pull-left">
			<span style="font-size:16px;font-weight:bold; text-shadow: 1px 1px 2px #111111; color: #fff;">&nbsp;Πανελλήνιο Σχολικό Δίκτυο -</span> 
		</div>
		
		<div class="pull-left">
			<span style="font-size:16px;font-weight:bold; text-shadow: 1px 1px 2px #111111; color: #fff;">&nbsp;Μητρώο Μονάδων <sub class="label label-danger">ΒΕΤΑ Version</sub></span> 
		</div>
		
		<div class="pull-right">
			<a style="font-size:16px;font-weight:bold" href="http://mmsch.teiath.gr/docs/package-GET.html" target="_blank">API</a>
		</div>
		
		<div class="pull-right">
			<span style="font-size:16px;font-weight:bold; text-shadow: 1px 1px 2px #111111; color: #fff;">ΤΕΙ ΑΘΗΝΑΣ&nbsp;&nbsp;</span> 
		</div>
		
		<div class="pull-right">
			<a href="#" id="lnkLogout" class="btn btn-sm btn-warning"></a>
			&nbsp;&nbsp;&nbsp;&nbsp;
		</div> 		 
		
	</div>

	<div id="main-splitter" style="position:absolute;top:50px;left:0; right:0;bottom:0">
		
		<div 	id="main-splitter-inner" 
				data-role="splitter" 
				data-orientation="horizontal" 
				data-panes="[{size:'17%'},{size:'83%'}]" 
				data-bind="events: { resize: _resizeMainSplitter }"
				style="height:100%;">
	
			
			<nav id="sidemenu" class="unpinned" style="height:100%">
				
				<div style="position:absolute; top:0; bottom:33px;width:inherit;overflow:auto; ">
			
				<div class="ddd" >
				
								<ul>
									<li class="load-page Selected"><a href="client/views/grids/my-units.php">Μονάδες</a></li>
									<li>
										<a href="#">Νομοι/Δήμοι</a>
										<ul><li style="height:100%; overflow-x:hidden; overflow-y:auto">
										<span>
											<div class="nav-tree-prefectures" style="overflow:hidden"></div>
										</span>
										</li></ul>
									</li>
									<li>
										<a href="#">Περιφέρειες/ Διευθύνσεις</a>
										<ul><li style="height:100%; overflow-x:hidden; overflow-y:auto">
										<span>
											<div class="nav-tree-regions" style="overflow:hidden"></div>
										</span>
										</li></ul>
									</li>
									<li>
										<a href="#">Διαχείριση</a>
										<ul class="">
											<li class="load-page"><a href="client/views/grids/categories.php">Κατηγορίες</a></li>
											<li class="load-page"><a href="client/views/grids/unit-types.php">Τύποι Μονάδων</a></li>
											<li class="load-page"><a href="client/views/grids/education-levels.php">Επίπεδα Εκπαίδευσης</a></li>
											<li class="load-page"><a href="client/views/grids/region-edu-admins.php">Περιφέρειες</a></li>
											<li class="load-page"><a href="client/views/grids/edu-admins.php">Διευθύνσεις Εκπαίδευσης</a></li>
											<li class="load-page"><a href="client/views/grids/transfer-areas.php">Περιοχές Μετάθεσης</a></li>
											<li class="load-page"><a href="client/views/grids/implementation-entities.php">Φορείς Υλοποίησης</a></li>
											<li class="load-page"><a href="client/views/grids/legal-characters.php">Νομικοί Χαρακτήρες</a></li>
											<li class="load-page"><a href="client/views/grids/tax-offices.php">Εφορίες</a></li>
											<li class="load-page"><a href="client/views/grids/municipalities.php">Δήμοι ΟΤΑ</a></li>
											<li class="load-page"><a href="client/views/grids/special-types.php">Ειδικοί Τύποι</a></li>
											<li class="load-page"><a href="client/views/grids/states.php">Καταστάσεις</a></li>
											<li class="load-page"><a href="client/views/grids/worker-specializations.php">Κατηγορίες Εργαζομένων</a></li>
											<li class="load-page"><a href="client/views/grids/worker-positions.php">Θέσεις Εργαζομένων</a></li>
											<li class="load-page"><a href="client/views/grids/workers.php">Εργαζόμενοι</a></li>
										</ul>
									</li>
								</ul>
							
					
				</div>
				
				</div>
				
				<button class="navigation-control" type="button">
					<span class="pin-text">Pin pane</span>
					<span class="unpin-text">Unpin pane</span>
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-left"></i>
				</button>
							
			</nav>
		
			
			
			
			
			<section id="main" class="" style="left:40px; height:100%; overflow-y:hidden;">  
			<div id="body">
				<div id="bodyInner">
				
				</div>
			</div>
			</section>
			
	
	
		</div>
	</div>
	
</div>
	


	
</body>
</html>
