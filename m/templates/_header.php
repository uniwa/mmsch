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
		/*
		var self = this;
			
		if(self._hoverSidemenuTimeout){
			window.clearTimeout(self._hoverSidemenuTimeout);
		}

		self._hoverSidemenuTimeout=window.setTimeout(function(){
			
			if ( self.$sideMenu.hasClass("unpinned") ){
				self.$sideMenu.css({"right":"auto", "left":"0px", "z-index":"1"});    
			}

			self._hoverSidemenuTimeout=null;
					
		},800);
		*/
	},

	_onMouseLeaveUnpinnedSidemenu:function(e){
		/*
		var self = this;
		
		$target = $(e.target);
		
		if ( self.$sideMenu.hasClass("unpinned") ){
				
			window.clearTimeout(self._hoverSidemenuTimeout);
			self._hoverSidemenuTimeout=null;
		
			var r = (self.$sideMenu.width()-40)*-1;
			self.$sideMenu.css({"right":"auto", "left": r + "px"});
		}
		*/
	}
};

$(document).ready(function() {

	var mm_id = "<?php echo @ $_GET['mm_id']; ?>";
	
	if (typeof mmschApp.modules['main'] == 'undefined'){
		$.extend(mmschApp.modules, {'main': homePageModule});
	}
	
	mmschApp.modules['main'].initMain();

	/*		
	$('#sidemenu .ddd').mmenu({
		classes: "mm-white"
	});
	*/
	
	/*
	var grid_pane = $('.splitter-holder-inner div#left-pane:first');
	var preview_pane = $('.splitter-holder-inner div#right-pane:first');
	
	var $mainSectionPane = $('#main-splitter-inner section:first');
	var $sideMenuNav = $('#main-splitter-inner nav:first');
	*/
			
	bindStaticData(function(){

		//$(".nav-tree-prefectures")
		
		$.each(hDataPrefAndMun, function(idx_pref, val_pref){
			
			var prefecture = val_pref;
			var municipality_collection = prefecture.items;

			$("ul#nav-prefectures").append("<li id='pref_" + prefecture.prefecture_id   + "'> <a href='index.php?page=units&prefecture="+prefecture.prefecture_id+"' id='btn-"+ prefecture.prefecture_id + "' > " + prefecture.prefecture + " <span class='fa arrow'></span></a><ul id='submenu"+prefecture.prefecture_id+"' class='nav nav-third-level'></ul></li>");

			$.each(municipality_collection, function(idx_mun, val_mun){

				var municipality = val_mun;
				
				$("#pref_" + prefecture.prefecture_id + " > ul").append("<li><a href='index.php?page=units&prefecture="+prefecture.prefecture_id+"&municipality="+municipality.municipality_id+"'>" + municipality.municipality + "</a></li>");
			});
			
		});

		$.each(hDataRegionAndEdu, function(idx_reg, val_reg){
			
			var region = val_reg;
			var edu_collection = region.items;

			$("ul#nav-regions").append("<li id='region_" + region.region_edu_admin_id   + "'> <a href='index.php?page=units&region_edu_admin="+region.region_edu_admin_id+"' id='btn-"+ region.region_edu_admin_id + "' > " + region.region_edu_admin + " <span class='fa arrow'></span></a><ul id='submenu" + region.region_edu_admin_id + "' class='nav nav-third-level'></ul></li>");

			$.each(edu_collection, function(idx_edu, val_edu){

				var edu = val_edu;
				
				$("#region_" + region.region_edu_admin_id + " > ul").append("<li><a href='index.php?page=units&region_edu_admin="+region.region_edu_admin_id+"&edu_admin="+edu.edu_admin_id+"'>" + edu.edu_admin + "</a></li>");
			});
			
		});


		

		$("ul#navigation").metisMenu({toggle: false});


		return;
		
		$(".nav-tree-prefectures").kendoTreeView({
			dataSource: hDataPrefAndMun,
            dataTextField: [ "prefecture", "municipality" ],
            animation:false,
            select : function(e){
				
                var node = $(".nav-tree-prefectures").data("kendoTreeView").dataItem(e.node);

                var cfgFilter = $("#grid-units").data('kendoGrid').dataSource.filter();
				var filters = null;

				if (typeof cfgFilter == "undefined"){
					filters = [];
				}
				else {
					filters = cfgFilter.filters;
				}

				removeFromCollection(filters, "field", "region_edu_admin");
				removeFromCollection(filters, "field", "edu_admin");
				

				/*SET UP prefecture*/
				var idxFilterPrefecture = lookup(filters, "prefecture", "field");

				if (idxFilterPrefecture > -1){
					filters[idxFilterPrefecture].value = node.prefecture_id || "";
				}	
				else {
					filters.push({'field': 'prefecture', 'value': node.prefecture_id || ""});
				}
				/**/

				/*SET UP municipality*/
				var idxFilterMunicipality = lookup(filters, "municipality", "field");

				if (idxFilterMunicipality > -1){
					filters[idxFilterMunicipality].value = node.municipality_id || "";
				}	
				else {
					filters.push({'field': 'municipality', 'value': node.municipality_id || ""});
				}
				/**/

				filters.push({'field': 'state', 'value': 1});
                
                $('#grid-units').data('kendoGrid').options.inSearching = true;
                $("#grid-units").data("kendoGrid").dataSource.filter(filters);
                
				
            }
		});
		
		$(".nav-tree-regions").kendoTreeView({
			dataSource: hDataRegionAndEdu,
            dataTextField: [ "region_edu_admin", "edu_admin" ],
            animation:false,
            select : function(e){
				
                var node = $(".nav-tree-regions").data("kendoTreeView").dataItem(e.node);

                var cfgFilter = $("#grid-units").data('kendoGrid').dataSource.filter();
				var filters = null;

				if (typeof cfgFilter == "undefined"){
					filters = [];
				}
				else {
					filters = cfgFilter.filters;
				} 

				removeFromCollection(filters, "field", "prefecture");
				removeFromCollection(filters, "field", "municipality");
				
				/*SET UP region_edu_admin*/
				var idxFilterRegionEduAdmin = lookup(filters, "region_edu_admin", "field");

				if (idxFilterRegionEduAdmin > -1){
					filters[idxFilterRegionEduAdmin].value = node.region_edu_admin_id || "";
				}	
				else {
					filters.push({'field': 'region_edu_admin', 'value': node.region_edu_admin_id || ""});
				}
				/**/
				
				/*SET UP edu_admin*/
				var idxFilterEduAdmin = lookup(filters, "edu_admin", "field");

				if (idxFilterEduAdmin > -1){
					filters[idxFilterEduAdmin].value = node.edu_admin_id || "";
				}	
				else {
					filters.push({'field': 'edu_admin', 'value': node.edu_admin_id || ""});
				}
				/**/

				filters.push({'field': 'state', 'value': 1});
                
                $('#grid-units').data('kendoGrid').options.inSearching = true;
                $("#grid-units").data("kendoGrid").dataSource.filter(filters);
                
                /*
                var dsSrcParams = [];
                
                dsSrcParams.push({'field': 'region_edu_admin', 'value': node.region_edu_admin_id || ""});
                dsSrcParams.push({'field': 'edu_admin', 'value': node.edu_admin_id || ""});
                
                dsSrcParams.push({'field': 'state', 'value': 1});
                
                $('#grid-units').data('kendoGrid').options.inSearching = true;
                $("#grid-units").data("kendoGrid").dataSource.filter(dsSrcParams);
				*/
            }
		});
	});

	/*
	$('body').on("click", "#sidemenu button.navigation-control", function(e){
		
		//var r = ($sideMenuNav.width()-40)*1;
		
		if ($sideMenuNav.hasClass("pinned")){
			
			$sideMenuNav.removeClass("pinned").addClass("unpinned");
			
			var r = ($sideMenuNav.width()-40)*-1;

			$sideMenuNav.css({"right":"auto", "left": r + "px" });
			$mainSectionPane.css({"width":"auto", "left": "40px"});
			
			$sideMenuNav.on("mouseenter",function(e){
  

				mmschApp.modules['main']._onMouseEnterUnpinnedSidemenu(e);				
			});
			
			$('#main-splitter-inner .k-splitbar:first').hide();
		
			$sideMenuNav.on("mouseleave",function(e){
				
				mmschApp.modules['main']._onMouseLeaveUnpinnedSidemenu(e);				
			});
		}
		else if ( $sideMenuNav.hasClass("unpinned") ){
						
			$('#main-splitter-inner .k-splitbar:first').show();

			$sideMenuNav.removeClass("unpinned").addClass("pinned");
			$sideMenuNav.css({"z-index":"0"});
			
			$sideMenuNav.unbind("mouseenter");
			$sideMenuNav.unbind("mouseleave");
		}
		var ks = $('#main-splitter-inner').data('kendoSplitter');
			ks.expand('.k-pane:first');
			ks.expand('.k-pane:last');

	});
	*/
	
	var viewModel = kendo.observable({
		
		_resizeMainSplitter: function(e){return;
			
			console.log('index-_resizeMainSplitter');

			/*
			if ( $sideMenuNav.hasClass("unpinned") ){
			
				var r = ($sideMenuNav.width()-40)*-1;
				$mainSectionPane.css({"width":"auto", "left": "40px"});
				$sideMenuNav.css({"right":"auto", "left": r + "px" });
				
				if ($('.splitter-holder-inner').length > 0){
					var ks = $('.splitter-holder-inner').data('kendoSplitter');
					ks.expand('.k-pane:first');
				}
			}
			*/
			resizeGrid("grid-units");
		}
	});

	kendo.bind("body", viewModel);

	/*
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
	*/
	//$(".splitter-holder-inner").data('kendoSplitter').trigger('resize');
	
	
	
	$("nav#sidemenu li.load-page > a").on('click', function(e){

		e.preventDefault();
		
		$('#page-content-inner .main-pane').remove();
		
		if ($('#myModal').length>0){
			
			destroyDDL();
		}
		
				
		$('#page-content-inner').load( $(this).attr("href") , function(e){
			resizeGrid('.mmsch-grid');
		});
		
	});

	if (mm_id == "") {
		/*
		$('#page-content-inner').load( "client/views/grids/my-units.php?is_anonymous=" + g_isAnonymous  , function(e){
			resizeGrid('.mmsch-grid');
		});
		*/
	} else {
		/*
		$( "#page-content-inner" ).load( "client/views/grids/unit-card.php?mm_id=" + mm_id + "&is_anonymous=" + g_isAnonymous, function(){

		});
		*/
	}

	// Build logout link
	$("#lnkLogout").attr("href", "main.php?logout=true");

	if (typeof user.uid === "undefined"){
		$("#vUsername").html("<strong>Δημόσια Πρόσβαση</strong>");
	}
	else {
		$("#vUsername").html("<strong>" + user.uid + "</strong>");
	}

	$("#themelistView").kendoListView({
		selectable: true,
        dataSource: [
        	{
            	themeName: "Default",
            	skin: "default",
            	color1:"#ef6f1c",
            	color2:"#e24b17",
            	color3:"#5a4b43"
            },
            {
            	themeName: "Silver",
            	skin: "silver",
            	color1:"#298bc8",
            	color2:"#515967",
            	color3:"#eaeaec"
            },
            {
            	themeName: "Metro",
            	skin: "metro",
            	color1:"#8ebc00",
            	color2:"#787878",
            	color3:"#fff"
            },
            {
            	themeName: "Uniform",
            	skin: "uniform",
            	color1:"#666",
            	color2:"#ccc",
            	color3:"#fff"
            },
            {
            	themeName: "Blue Opal",
            	skin: "blueopal",
            	color1:"#076186",
            	color2:"#7ed3f6",
            	color3:"#94c0d2"
            },
            {
            	themeName: "Bootstrap",
            	skin: "bootstrap",
            	color1:"#3276b1",
            	color2:"#67afe9",
            	color3:"#fff"
            },
            {
            	themeName: "Black",
            	skin: "black",
            	color1:"#0167cc",
            	color2:"#4698e9",
            	color3:"#272727"
            },
            {
            	themeName: "Metro Black",
            	skin: "metroblack",
            	color1:"#00aba9",
            	color2:"#0e0e0e",
            	color3:"#565656"
            },
            {
            	themeName: "High Contrast",
            	skin: "highcontrast",
            	color1:"#b11e9c",
            	color2:"#880275",
            	color3:"#1b141a"
            },
            {
            	themeName: "Moonlight",
            	skin: "moonlight",
            	color1:"#ee9f05",
            	color2:"#40444f",
            	color3:"#212a33"
            }
        ],
        template: kendo.template($("#themeItemTmpl").html()),
        change: function(){

        	var data = this.dataSource.view();
        	
            var selectedSkin = $.map(this.select(), function(item) {
                return data[$(item).index()].skin;
            });

            changeTheme(selectedSkin);
        }
    });

	
	$("#dlgWndSelectTheme").kendoWindow({
		title: "Επιλογή Theme",
		visible: false,
		animation: false,
		modal: true,
		width: "30%"
	});

	$("body").on("click","#btnSelectTheme", function(){
		$("#dlgWndSelectTheme").data("kendoWindow").center().open();
	});

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

<body>

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

	


	<!-- 	
	<div id="header" class="k-state-selected" style="color:#333333; font-size:14px; padding:0px 14px 0 14px; font-family:'Open Sans', 'Segoe UI', verdana, Arial, Helvetica, Sans-Serif;">
		
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
			<span style="font-size:16px;font-weight:bold; text-shadow: 1px 1px 2px #111111; color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;ΤΕΙ ΑΘΗΝΑΣ&nbsp;&nbsp;</span> 
		</div>
		
		 
		 
		<div class="pull-right">
		<div class="btn-group">
  			<button type="button" class="k-button dropdown-toggle" data-toggle="dropdown">
    			<i class="fa fa-user fa-1x"></i>&nbsp;&nbsp;<span id="vUsername"></span>&nbsp;&nbsp;<span class="caret"></span>
    		</button>
  			<ul class="dropdown-menu" role="menu">
    			<li><a href="/hlp/user_guide_frontend_ver3.pdf" target="_blank"><i class="fa fa-question fa-1x"></i>&nbsp;&nbsp;Οδηγός Χρήσης</a></li>
    			<?php if ($isFY) : ?>
    			<li><a href="/client/stats/statistic.php?implementation_entity=<?php echo $FY; ?>" target="_blank"><i class="fa fa-bar-chart fa-1x"></i>&nbsp;&nbsp;Στατιστικα</a></li>
    			<?php endif; ?>
    			<li><a href="#" id="btnSelectTheme"><i class="fa fa-eye fa-1x"></i>&nbsp;&nbsp;Εμφάνιση</a></li>
    			<li><a href="/docs/package-GET.html" target="_blank"><i class="fa fa-code fa-1x"></i>&nbsp;&nbsp;Οδηγός API</a></li>
    			<li><a href="http://helpdesk.sch.gr/?category_id=9508" target="_blank"><i class="fa fa-support fa-1x"></i>&nbsp;&nbsp;Αναφορά Σφαλμάτων</a></li>
    			<li class="divider"></li>
    			<li><a href="#" id="lnkLogout"><i class="fa fa-sign-out fa-1x"></i>&nbsp;&nbsp;Αποσύνδεση</a></li>
  			</ul>
		</div>	
		</div> 
		
	</div>

	 -->
		
	<!-- Page container -->
 	<div class="page-container gray-bg">
 		
 		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">
			
			
			
			
			
			
							<ul id="navigation" class="nav">
									<li>
										<a href="index.php?page=units&is_anonymous=<?php echo $isAnonymous; ?>">
											<i class="fa fa-diamond"></i>
											<span class="nav-label">Μονάδες</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-globe"></i>
											<span class="nav-label">Περιφερειακές ενότητες/Δήμοι</span>
											<span class="fa arrow"></span>
										</a>
										
										<ul id="nav-prefectures" class="nav nav-second-level">
											<!-- 
											<li>
												<span>
													<div class="nav-tree-prefectures" style="overflow:hidden"></div>
												</span>
											</li>
											 -->
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-globe"></i>
											<span class="nav-label">Περιφέρειες/ Διευθύνσεις</span>
											<span class="fa arrow"></span>
										</a>
										<ul id="nav-regions" class="nav nav-second-level">
											<!-- 
											<li>
												<span>
													<div class="nav-tree-regions" ></div>
												</span>
											</li>
											 -->
										</ul>
									</li>
									<?php if (!$isAnonymous) : ?>
									<li>
										<a href="#">
											<i class="fa fa-desktop"></i>
											<span class="nav-label">Διαχείριση</span>
											<span class="fa arrow"></span>
										</a>
										<ul class="nav nav-second-level">
											<?php if ($isFY && $FY == "teiath") : ?>
											<li><a href="client/views/whatsnew.php">What's new!</a></li>
											<li><a href="client/views/sync_static_data.php">Get Static Data</a></li>
											<?php endif; ?>
											
											
											<li>
												<a href="#">Λεξικά<span class="fa arrow"></span></a>
												<ul class="nav nav-third-level">
													<li><a href="client/views/grids/categories.php">Κατηγορίες</a></li>
													<li><a href="client/views/grids/unit-types.php">Τύποι Μονάδων</a></li>
													<li><a href="client/views/grids/education-levels.php">Επίπεδα Εκπαίδευσης</a></li>
													<li><a href="client/views/grids/region-edu-admins.php">Περιφέρειες</a></li>
													<li><a href="client/views/grids/edu-admins.php">Διευθύνσεις Εκπαίδευσης</a></li>
													<li><a href="client/views/grids/transfer-areas.php">Περιοχές Μετάθεσης</a></li>
													<li><a href="client/views/grids/implementation-entities.php">Φορείς Υλοποίησης</a></li>
													<li><a href="client/views/grids/legal-characters.php">Νομικοί Χαρακτήρες</a></li>
													<li><a href="client/views/grids/tax-offices.php">Εφορίες</a></li>
													<li><a href="client/views/grids/municipalities.php">Δήμοι ΟΤΑ</a></li>
													<li><a href="client/views/grids/special-types.php">Ειδικοί Τύποι</a></li>
													<li><a href="client/views/grids/states.php">Καταστάσεις</a></li>
													<li><a href="client/views/grids/worker-specializations.php">Κατηγορίες Εργαζομένων</a></li>
													<li><a href="client/views/grids/worker-positions.php">Θέσεις Εργαζομένων</a></li>
												</ul>
											</li>
											
											<li>
												<a href="client/views/grids/cpes.php">Εξοπλισμός</a>
											</li>
											
											
											<!-- 
											<li class="load-page"><a href="client/views/grids/workers.php">Εργαζόμενοι</a></li>
											 -->
										</ul>
									</li>
									<?php endif; ?>
								</ul>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</div>
		</div>
		<!-- /Sidebar -->
		
		<!-- Page content -->
	 	<div id="page-content">
	 	
	 		<div class="row">
	 			
	 			<!-- Navbar -->
				<div class="navbar navbar-inverse" role="navigation">
					
					<div class="navbar-header">
						<!--
						<a class="navbar-brand" href="#"><img src="" alt="Πανελλήνιο Σχολικό Δίκτυο"></a>
						 
						<a class="sidebar-toggle"><i class="glyphicon glyphicon-align-justify"></i></a>
						-->
						
						<a hred="#" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
							<i class="fa fa-th"></i>
						</a>
						
						<a id="navbar-minimalize" class="btn btn-primary " href="#">
							<i class="fa fa-bars"></i> 
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
