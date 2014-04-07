function make_base_auth(user, password) {
  var tok = user + ':' + password;
  var hash = Base64.encode(tok);
  //var hash = btoa(tok);
  return "Basic " + hash;
}

var itemsPerPage = 50;
//var apiUrl = "../ver2/api/";
var apiUrl = "../api/";
//var auth = btoa('mmsch' + ":" + 'mmsch');

$.ajaxSetup({
    beforeSend: function(req) {
        req.setRequestHeader(
            'Authorization', 
            //auth
            make_base_auth ('mmsch', 'mmsch')
        );
    }
});

/** 
 * Μονάδες
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
    }
});

/** 
 * Κατηγορίες
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
 * Τύποι Μονάδων
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
 * Επίπεδα Εκπαίδευσης
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
 * Περιφέρειες
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
 * Διευθύνσεις Εκπαίδευσης
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
 * Περιοχές Μετάθεσης
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
 * Εργαζόμενοι
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
 * Κατηγορίες Εργαζομένων
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
 * Θέσεις Εργασίας
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
 * Φορείς υλοποίησης
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
 * Εφορίες
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
 * Νομικοί Χαρακτήρες
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
 * Ειδικοί Τύποι
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
 * Καταστάσεις
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
 * Προσανατολισμοί
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
 * Ωράρια Λειτουργίας
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
 * Νομοί
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
 * Δήμοι ΟΤΑ
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
 * Πηγές Μονάδων
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
