/**
 * 
 */

// loads new stylesheet
function changeTheme(skinName, animate) {
	
	var doc = document, kendoLinks = $("link[href*='kendo.']", doc
			.getElementsByTagName("head")[0]), commonLink = kendoLinks
			.filter("[href*='kendo.common']"), skinLink = kendoLinks
			.filter(":not([href*='kendo.common'])"), href = location.href, skinRegex = /kendo\.\w+(\.min)?\.css/i, extension = skinLink
			.attr("rel") === "stylesheet" ? ".css" : ".less", url = commonLink
			.attr("href").replace(skinRegex,
					"kendo." + skinName + "$1" + extension), exampleElement = $("#example");

	function preloadStylesheet(file, callback) {
		var element = $(
				"<link rel='stylesheet' media='print' href='" + file + "'")
				.appendTo("head");

		setTimeout(function() {
			callback();
			element.remove();
		}, 100);
	}

	function replaceTheme() {
		var oldSkinName = $(doc).data("kendoSkin"), newLink;

		if (kendo.support.browser.msie) {
			newLink = doc.createStyleSheet(url);
		} else {
			newLink = skinLink.eq(0).clone().attr("href", url);
			newLink.insertBefore(skinLink[0]);
		}

		skinLink.remove();

		$(doc.documentElement).removeClass("k-" + oldSkinName).addClass(
				"k-" + skinName);
	}

	if (animate) {
		preloadStylesheet(url, replaceTheme);
	} else {
		replaceTheme();
	}
};

function resizeSearchWidget(searchForm)
{
    var searchWidget = $("#" + searchForm + " .searchComponent");
    var dataArea = searchWidget.find(".k-content:first");
    var container = searchWidget.closest('.container-fluid').parent();
    var newHeight = container.innerHeight();

    newHeight -= parseInt(container.css("padding-top"));
    newHeight -= parseInt(container.css("padding-bottom"));
    newHeight -= parseInt(container.css("border-bottom-width"));
    newHeight -= parseInt(container.css("border-top-width"));

    searchWidget.height(newHeight);

    var otherElements = $("#" + searchForm + " .searchComponent").children().not(".k-content");
    var otherElementsHeight = 0;
    otherElements.each(function() {
        otherElementsHeight += $(this).outerHeight(true);
    });

    otherElementsHeight += parseInt(dataArea.css("padding-top"));
    otherElementsHeight += parseInt(dataArea.css("padding-bottom"));

    dataArea.height(newHeight - otherElementsHeight);
}

function resizeGrid(gridId)
{
    var gridElement = $("#" + gridId);
    var dataArea = gridElement.find(".k-grid-content");
    var newHeight = gridElement.parent().innerHeight();

    newHeight -= parseInt(gridElement.parent().css("padding-top"));
    newHeight -= parseInt(gridElement.parent().css("padding-bottom"));
    newHeight -= parseInt(gridElement.css("border-bottom-width"));
    newHeight -= parseInt(gridElement.css("border-top-width"));

    gridElement.height(newHeight);

    var otherElements = gridElement.children().not(".k-grid-content");
    var otherElementsHeight = 0;
    otherElements.each(function() {
        otherElementsHeight += $(this).outerHeight();
    });

    dataArea.height(newHeight - otherElementsHeight);
}

function resizeTabs(tabId) {

    var tabStripElement = $(tabId);
    var pt = parseInt($(tabId).children(".k-content").css("padding-top"));
    var pb = parseInt($(tabId).children(".k-content").css("padding-bottom"));

    tabStripElement.children(".k-content").height(
        tabStripElement.innerHeight() - tabStripElement.children(".k-tabstrip-items").outerHeight() - (pt + pb + 2)
    );
}

function resizeTree()
{
    var gridElement = $("#treeview-left");
    var dataArea = gridElement.find("ul:first");
    var newHeight = gridElement.parent().innerHeight();

    newHeight -= parseInt(gridElement.parent().css("padding-top"));
    newHeight -= parseInt(gridElement.parent().css("padding-bottom"));
    newHeight -= parseInt(gridElement.css("border-bottom-width"));
    newHeight -= parseInt(gridElement.css("border-top-width"));

    gridElement.height(newHeight);

    var otherElements = gridElement.children().not(".ul");
    var otherElementsHeight = 0;
    otherElements.each(function() {
        otherElementsHeight += $(this).outerHeight();
    });

    dataArea.height(newHeight - otherElementsHeight);
    //gridElement.height(newHeight - otherElementsHeight);
}

function resizeUnitDetails()
{
	if (typeof $('.unit-panel-details:visible') == 'undefined') 
    	return;
    	
    var unitDetailsPanel = $(".unit-panel-details:visible").parent();
    var dataArea = unitDetailsPanel.find(".accordion-wrapper");
             
    var newHeight = unitDetailsPanel.innerHeight();
    newHeight -= parseInt(unitDetailsPanel.css("padding-top"));
    newHeight -= parseInt(unitDetailsPanel.css("padding-bottom"));
    newHeight -= parseInt(unitDetailsPanel.css("border-bottom-width"));
    newHeight -= parseInt(unitDetailsPanel.css("border-top-width"));
    
    unitDetailsPanel.height(newHeight+2);
             
    var otherElements = $(".unit-panel-details:visible").children().not(".accordion-wrapper");
    var otherElementsHeight = 2;
    otherElements.each(function() {
        otherElementsHeight += $(this).outerHeight(true);
    });
    
    otherElementsHeight += 40;
            
    dataArea.height(newHeight - otherElementsHeight);
}

var renderer = function(cacheData, model_id, value) {

    var val = "";

    if (typeof value == "string") {

        var substr = (value).split(',');

        for (var i = 0; i < substr.length; i++) {
            cacheData.filter([
                {
                    field: model_id,
                    value: parseInt(substr[i])
                }
            ]);

            val += " | " + cacheData.view()[0].name;
        }
    } else {
        cacheData.filter([{field: model_id, value: parseInt(value)}]);
        val = cacheData.view()[0].name;
    }

    return val;
};
