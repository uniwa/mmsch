function make_base_auth(user, password) {
  var tok = user + ':' + password;
  var hash = Base64.encode(tok);
  //var hash = btoa(tok);
  return "Basic " + hash;
}

var itemsPerPage = 50;
//var apiUrl = "../ver2/api/";
var apiUrl = "/api/";
//var auth = btoa('mmsch' + ":" + 'mmsch');

$.ajaxSetup({
    beforeSend: function(req) {
        req.setRequestHeader(
            'Authorization',
            make_base_auth (user.backendUsername, user.backendPassword)
        );
    }
});

/** 
 * Ξ�ΞΏΞ½Ξ¬Ξ΄ΞµΟ‚
 */
var tsUnits = {
    read: {
        url: apiUrl + "units",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        /*
        console.log(data);
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
        */
        if (type == 'read') {
            //console.log(data);

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                	
                    var filter = data.filter.filters[index];
                    
                    if (filter.value == null || filter.value == 'undefined' || filter.value == '');
                    else {
                    	normalizedFilter[filter.field] = filter.value;
                    	try	{
                        	$('#grid-units').data('kendoGrid').showColumn(filter.field);
                        }
                        catch(ex){
                        	
                        }
                    }
                    
                    var arr = ["region_edu_admin", "edu_admin", "implementation_entity", "transfer_area", "prefecture", "municipality", "source" ];
                    if ( jQuery.inArray(filter.field, arr) >=0 && filter.value == -1 &&  filter.value != ''){
                    	normalizedFilter[filter.field] = "null";
                    }
                    
                    if ( jQuery.inArray(filter.field, arr) >=0 && typeof filter.value === 'string' && filter.value != '' && filter.value.indexOf("-1") >= 0 ){
                    	normalizedFilter[filter.field] = (filter.value).replace("-1", "null");
                    }
                    
                });
               
                $.extend(data, normalizedFilter);
                
                delete data.filter;                
            }
            
            if (typeof data.sort != 'undefined') {
                var normalizedSort = {};
                var sort = data.sort[0];
                normalizedSort['orderby'] = sort.field;
                normalizedSort['ordertype'] = sort.dir;
                
                $.extend(data, normalizedSort);
                delete data.sort;                
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

var dsUnits = new kendo.data.DataSource({
    serverFiltering: true,
    serverPaging: true,
    pageSize: itemsPerPage,
    //type: "odata",
    transport: tsUnits,
    schema: {
        data: "data",
        total: "total"
    },
    error: function(e) {
    },
    change: function(e) {
    },
    requestEnd: function(e) {
    	
    	
    }
});

var tsUnitNetworkSubnets = {
	read: {
		url: apiUrl + "unit_network_subnets",
		type: "GET",
	        data: {},
	        dataType: "json"
	    },
	    parameterMap: function(data, type) {
	       
	    	if (type == 'read') {
	        

	            if (typeof data.filter != 'undefined') {

	                var normalizedFilter = {};

	                $.each(data.filter.filters, function(index, value) {
	                	
	                    var filter = data.filter.filters[index];
	                    
	                    if (filter.value == null || filter.value == 'undefined' || filter.value == '');
	                    else {
	                    	//normalizedFilter[filter.field] = filter.value;
	                    	try	{
	                        	//$('#grid-units').data('kendoGrid').showColumn(filter.field);
	                        }
	                        catch(ex){
	                        	
	                        }
	                    }
	                    
	                    var arr = ["region_edu_admin", "edu_admin", "implementation_entity", "transfer_area", "prefecture", "municipality", "source" ];
	                    if ( jQuery.inArray(filter.field, arr) >=0 && filter.value == -1 &&  filter.value != ''){
	                    	//normalizedFilter[filter.field] = "null";
	                    }
	                    
	                    if ( jQuery.inArray(filter.field, arr) >=0 && typeof filter.value === 'string' && filter.value != '' && filter.value.indexOf("-1") >= 0 ){
	                    	//normalizedFilter[filter.field] = (filter.value).replace("-1", "null");
	                    }
	                    
	                });
	               
	                $.extend(data, normalizedFilter);
	                
	                delete data.filter;                
	            }
	            
	            if (typeof data.sort != 'undefined') {
	                var normalizedSort = {};
	                var sort = data.sort[0];
	                normalizedSort['orderby'] = sort.field;
	                normalizedSort['ordertype'] = sort.dir;
	                
	                $.extend(data, normalizedSort);
	                delete data.sort;                
	            }
	        }

	        data['pagesize'] = data.pageSize;
	        delete data.pageSize;

	        return data;
	    }
	};


var dsUnitNetworkSubnets = new kendo.data.DataSource({
    serverFiltering: true,
    serverPaging: true,
    pageSize: itemsPerPage,
    //type: "odata",
    transport: tsUnitNetworkSubnets,
    schema: {
        data: "data",
        total: "total"
    },
    error: function(e) {
    },
    change: function(e) {
    }
});

/** 
 * Ξ�Ξ±Ο„Ξ·Ξ³ΞΏΟ�Ξ―ΞµΟ‚
 */
var tsCategories = {
    read: {
        url: apiUrl + "categories",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
            
            data['pagesize'] = data.pageSize;
            delete data.pageSize;
        }
        return data;
    }
};

var dsCategories = new kendo.data.DataSource({
    transport: tsCategories,
    schema: {
        data: "data",
        total: "total"
    }
});

/** 
 * Ξ¤Ο�Ο€ΞΏΞΉ Ξ�ΞΏΞ½Ξ¬Ξ΄Ο‰Ξ½
 */
var tsUnitTypes = {
    read: {
        url: apiUrl + "unit_types",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
            
            data['pagesize'] = data.pageSize;
            delete data.pageSize;
        }
        return data;
    }
};

var dsUnitTypes = new kendo.data.DataSource({
    serverFiltering: true,
    transport: tsUnitTypes,
    schema: {
        data: "data",
        total: "total"
    }
});

/** 
 * Ξ•Ο€Ξ―Ο€ΞµΞ΄Ξ± Ξ•ΞΊΟ€Ξ±Ξ―Ξ΄ΞµΟ…ΟƒΞ·Ο‚
 */
var tsEducationLevels = {
    read: {
        url: apiUrl + "education_levels",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }
        
        data['pagesize'] = data.pageSize;
        delete data.pageSize;
        
        return data;
    }
};

var dsEducationLevels = new kendo.data.DataSource({
    serverFiltering: true,
    transport: tsEducationLevels,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ ΞµΟ�ΞΉΟ†Ξ­Ο�ΞµΞΉΞµΟ‚
 */
var tsRegionEduAdmins = {
    read: {
        url: apiUrl + "region_edu_admins",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
            
            data['pagesize'] = data.pageSize;
            delete data.pageSize;
        }
        return data;
    }
};

var dsRegionEduAdmins = new kendo.data.DataSource({
    serverFiltering: true,
    transport: tsRegionEduAdmins,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ”ΞΉΞµΟ…ΞΈΟ�Ξ½ΟƒΞµΞΉΟ‚ Ξ•ΞΊΟ€Ξ±Ξ―Ξ΄ΞµΟ…ΟƒΞ·Ο‚
 */
var tsEduAdmins = {
    read: {
        url: apiUrl + "edu_admins",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {

        if (type == 'read') {
            if (
                typeof data.filter != 'undefined' &&
                typeof data.filter.filters != 'undefined' &&
                data.filter.filters[0].field == 'region_edu_admin_id') {
                var field = 'region_edu_admin';
                //$.extend(data, { field : data.filter.filters[0].value } );
                data[field] = data.filter.filters[0].value;
                delete data.filter;
            }
            
            data['pagesize'] = data.pageSize;
            delete data.pageSize;
        }
        return data;
    }
};

var dsEduAdmins = new kendo.data.DataSource({
    serverFiltering: true,
    transport: tsEduAdmins,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ ΞµΟ�ΞΉΞΏΟ‡Ξ­Ο‚ Ξ�ΞµΟ„Ξ¬ΞΈΞµΟƒΞ·Ο‚
 */
var tsTransferAreas = {
    read: {
        url: apiUrl + "transfer_areas",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {

        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                if (typeof normalizedFilter.edu_admin_id != 'undefined') {
                    normalizedFilter['edu_admin'] = normalizedFilter.edu_admin_id;
                    delete normalizedFilter.edu_admin_id;
                }

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

var dsTransferAreas = new kendo.data.DataSource({
    serverFiltering: true,
    serverPaging: true,
    pageSize: itemsPerPage,
    transport: tsTransferAreas,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ•Ο�Ξ³Ξ±Ξ¶Ο�ΞΌΞµΞ½ΞΏΞΉ
 */
var tsWorkers = {
    read: {
        url: apiUrl + "workers",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

var dsWorkers = new kendo.data.DataSource({
    serverFiltering: true,
    serverPaging: true,
    pageSize: itemsPerPage,
    transport: tsWorkers,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ�Ξ±Ο„Ξ·Ξ³ΞΏΟ�Ξ―ΞµΟ‚ Ξ•Ο�Ξ³Ξ±Ξ¶ΞΏΞΌΞ­Ξ½Ο‰Ξ½
 */
var tsWorkerSpecializations = {
    read: {
        url: apiUrl + "worker_specializations",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};
    
var dsWorkerSpecializations = new kendo.data.DataSource({
    serverFiltering: true,
    serverPaging: true,
    pageSize: itemsPerPage,
    transport: tsWorkerSpecializations,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ�Ξ­ΟƒΞµΞΉΟ‚ Ξ•Ο�Ξ³Ξ±ΟƒΞ―Ξ±Ο‚
 */
var tsWorkerPositions = {
    read: {
        url: apiUrl + "worker_positions",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ¦ΞΏΟ�ΞµΞ―Ο‚ Ο…Ξ»ΞΏΟ€ΞΏΞ―Ξ·ΟƒΞ·Ο‚
 */
var tsImplementationEntities = {
    read: {
        url: apiUrl + "implementation_entities",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {

        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

var dsImplementationEntities = new kendo.data.DataSource({
    serverFiltering: true,
    serverPaging: true,
    pageSize: itemsPerPage,
    transport: tsImplementationEntities,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ•Ο†ΞΏΟ�Ξ―ΞµΟ‚
 */
var tsTaxOffices = {
    read: {
        url: apiUrl + "tax_offices",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

var dsTaxOffices = new kendo.data.DataSource({
    serverFiltering: true,
    serverPaging: true,
    pageSize: itemsPerPage,
    transport: tsTaxOffices,
    schema: {
        data: "data",
        total: "total"
    }
});

/**
 * Ξ�ΞΏΞΌΞΉΞΊΞΏΞ― Ξ§Ξ±Ο�Ξ±ΞΊΟ„Ξ®Ο�ΞµΟ‚
 */
var tsLegalCharacters = {
    read: {
        url: apiUrl + "legal_characters",
        type: "GET",
        data: {
        //"method": "GetLegalCharacters"
        },
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ•ΞΉΞ΄ΞΉΞΊΞΏΞ― Ξ¤Ο�Ο€ΞΏΞΉ
 */
var tsSpecialTypes = {
    read: {
        url: apiUrl + "special_types",
        type: "GET",
        data: {
        //"method": "GetSpecialTypes"
        },
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ�Ξ±Ο„Ξ±ΟƒΟ„Ξ¬ΟƒΞµΞΉΟ‚
 */
var tsStates = {
    read: {
        url: apiUrl + "states",
        type: "GET",
        data: {
        //"method": "GetStates"
        },
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {
                $.extend(data, data.filter.filters[0]);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ Ο�ΞΏΟƒΞ±Ξ½Ξ±Ο„ΞΏΞ»ΞΉΟƒΞΌΞΏΞ―
 */
var tsOrientationTypes = {
    read: {
        url: apiUrl + "orientation_types",
        type: "GET",
        data: {
        //"method": "GetOrientationTypes"
        },
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ©Ο�Ξ¬Ο�ΞΉΞ± Ξ›ΞµΞΉΟ„ΞΏΟ…Ο�Ξ³Ξ―Ξ±Ο‚
 */
var tsOperationShifts = {
    read: {
        url: apiUrl + "operation_shifts",
        type: "GET",
        data: {
        //"method": "GetOperationShifts"
        },
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ�ΞΏΞΌΞΏΞ―
 */
var tsPrefectures = {
    read: {
        url: apiUrl + "prefectures",
        type: "GET",
        data: {
        //"method": "GetPrefectures"
        },
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ”Ξ®ΞΌΞΏΞΉ Ξ�Ξ¤Ξ‘
 */
var tsMunicipalities = {
    read: {
        url: apiUrl + "municipalities",
        type: "GET",
        data: {},
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

/**
 * Ξ Ξ·Ξ³Ξ­Ο‚ Ξ�ΞΏΞ½Ξ¬Ξ΄Ο‰Ξ½
 */
var tsSources = {
    read: {
        url: apiUrl + "sources",
        type: "GET",
        data: {
        //"method": "GetSources"
        },
        dataType: "json"
    },
    parameterMap: function(data, type) {
        if (type == 'read') {

            if (typeof data.filter != 'undefined') {

                var normalizedFilter = {};

                $.each(data.filter.filters, function(index, value) {
                    var filter = data.filter.filters[index];
                    normalizedFilter[filter.field] = filter.value;
                });

                $.extend(data, normalizedFilter);
                delete data.filter;
            }
        }

        data['pagesize'] = data.pageSize;
        delete data.pageSize;

        return data;
    }
};

var tsSubnetTypes = {
	    read: {
	        url: apiUrl + "unit_network_subnet_types",
	        type: "GET",
	        data: {
	        //"method": "GetSpecialTypes"
	        },
	        dataType: "json"
	    },
	    parameterMap: function(data, type) {
	        if (type == 'read') {

	            if (typeof data.filter != 'undefined') {

	                var normalizedFilter = {};

	                $.each(data.filter.filters, function(index, value) {
	                    var filter = data.filter.filters[index];
	                    normalizedFilter[filter.field] = filter.value;
	                });

	                $.extend(data, normalizedFilter);
	                delete data.filter;
	            }
	        }

	        data['pagesize'] = data.pageSize;
	        delete data.pageSize;

	        return data;
	    }
};

var tsCircuitTypes = {
	    read: {
	        url: apiUrl + "circuit_types",
	        type: "GET",
	        data: {
	        //"method": "GetSpecialTypes"
	        },
	        dataType: "json"
	    },
	    parameterMap: function(data, type) {
	        if (type == 'read') {

	            if (typeof data.filter != 'undefined') {

	                var normalizedFilter = {};

	                $.each(data.filter.filters, function(index, value) {
	                    var filter = data.filter.filters[index];
	                    normalizedFilter[filter.field] = filter.value;
	                });

	                $.extend(data, normalizedFilter);
	                delete data.filter;
	            }
	        }

	        data['pagesize'] = data.pageSize;
	        delete data.pageSize;

	        return data;
	    }
};
