var dictionary = {
		"mm_id": "Κωδικός ΜΜ",
		"registry_no": "Κωδικός ΥΠΕΠΘ",
		"source": "Πρωτογενής Πηγή",
		"name": "Ονομασία",
		"special_name": "Ειδική Ονομασία",
		"state": "Κατάσταση",
		"region_edu_admin": "Περιφέρεια",
		"edu_admin": "Διεύθυνση Εκπαίδευσης",
		"implementation_entity": "Φορεάς Υλοποίησης",
		"transfer_area": "Περιοχή Μετάθεσης",
		"prefecture": "Νομός",
		"municipality": "Δήμος ΟΤΑ",
		"education_level": "Βαθμίδα",
		"phone_number": "Τηλέφωνο Επικοινωνίας",
		"email": "Ηλεκτρονική Αλληλογραφία",
		"fax_number": "Αριθμός FAX",
		"street_address": "Οδός, Αριθμός",
		"postal_code": "Ταχυδρομικός Κώδικας",
		"tax_number": "Αριθμός Φορολογικού Μητρώου",
		"tax_office": "Δ.Ο.Υ.",
		"area_team_number": "Ομάδα Σχολείων",
		"category": "Κατηγορία",
		"unit_type": "Τύπος Μονάδας",
		"operation_shift": "Ωράριο Λειτουργίας",
		"legal_character": "Νομικός Χαρακτήρας",
		"orientation_type": "Προσανατολισμός",
		"special_type": "Ειδικός Χαρακτηρισμός"
};


//φορείς υλοποίησης
var inMemoryImplEnt = new kendo.data.DataSource({
	//transport: tsImplementationEntities,
	data: staticData.ImplEnt,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	},
	requestEnd: function(e) {
		//console.log(e.response);
		//e.sender.insert(0, { region_edu_admin_id: -1, name: "--Χωρίς Περιφέρεια--" });
		if(typeof e.type !== 'undefined')
			e.response.data.unshift({ implementation_entity_id: -1, implementation_entity: "--Χωρίς ΦΥ--", implementation_entity_initials: "--Χωρίς ΦΥ--" });
	}
});

// Περιφέρειες
var inMemoryRegionEduAdmins = new kendo.data.DataSource({
	//transport: tsRegionEduAdmins,
	data: staticData.RegionEduAdmins,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	},
	requestEnd: function(e) {
		//console.log(e.response);
		//e.sender.insert(0, { region_edu_admin_id: -1, name: "--Χωρίς Περιφέρεια--" });
		if(typeof e.type !== 'undefined')
			e.response.data.unshift({ region_edu_admin_id: -1, region_edu_admin: "--Χωρίς Περιφέρεια--" });
	}
});

// Διευθυνσεις Εκπαιδευσης
$.each(staticData['EduAdmins']['data'], function(i,item){
	var short_name = item.edu_admin.replace("ΔΙΕΥΘΥΝΣΗ ", "Δ.");
	item["short_name"] = short_name;
});

var inMemoryEduAdmins = new kendo.data.DataSource({
	//transport: tsEduAdmins,
	data: staticData.EduAdmins,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	},
	requestEnd: function(e) {
		if(typeof e.type !== 'undefined')
			e.response.data.unshift({ edu_admin_id: -1, edu_admin: "--Χωρίς Διεύθυνση εκπαίδευσης--", region_edu_admin_id: -1, short_name: "--Χωρίς Διεύθυνση εκπαίδευσης--"  });
	}
});
//inMemoryEduAdmins.insert(0, { edu_admin_id: -1, name: "--Χωρίς Διεύθυνση εκπαίδευσης--" });

// Περιοχες μετάθεσης
var inMemoryTransferAreas = new kendo.data.DataSource({
	//transport: tsTransferAreas,
	data: staticData.TransferAreas,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	},
	requestEnd: function(e) {
		if(typeof e.type !== 'undefined')
			e.response.data.unshift({ transfer_area_id: -1, transfer_area: "--Χωρίς Περιοχή Μετάθεσης--", region_edu_admin_id: -1, edu_admin_id: -1 });
	}
});

// Νομοι
var inMemoryPrefectures = new kendo.data.DataSource({
	//transport: tsPrefectures,
	data: staticData.Prefectures,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	},
	requestEnd: function(e) {
		if(typeof e.type !== 'undefined'){
			e.response.data.unshift({ prefecture_id: -1, prefecture: "--Χωρίς Νομό--"});
		}
	}
});

// Δημοι
var inMemoryMunicipalities = new kendo.data.DataSource({
	//transport: tsMunicipalities,
	data: staticData.Municipalities,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	},
	requestEnd: function(e) {
		if(typeof e.type !== 'undefined'){
			e.response.data.unshift({ municipality_id :-1, municipality: "--Χωρίς Δήμο--", prefecture_id: -1});
		}	
	}
});

// Τυποι
var inMemoryUnitTypes = new kendo.data.DataSource({
	//transport: tsUnitTypes,
	data: staticData.UnitTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Κατηγορίες
var inMemoryCategories = new kendo.data.DataSource({
	data: staticData.Categories,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Ωράρια Λειτουργίας
var inMemoryOperationShifts = new kendo.data.DataSource({
	data: staticData.OperationShifts,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Προσανατολισμοί
var inMemoryOrientationTypes = new kendo.data.DataSource({
	data: staticData.OrientationTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Ειδικοί τύποι
var inMemorySpecialTypes = new kendo.data.DataSource({
	data: staticData.SpecialTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Καταστάσεις
var inMemoryStates = new kendo.data.DataSource({
	data: staticData.States,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Πηγές
var inMemorySources = new kendo.data.DataSource({
	data: staticData.Sources,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Επίπεδα Εκπαιδ.
var inMemoryΕducationLevels = new kendo.data.DataSource({
	data: staticData.ΕducationLevels,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//var hDataPrefAndMun = new Array();

var hDataPrefAndMun = new Array();
var hDataRegionAndEdu = new Array();
	/*
	hDataPrefAndMun.push(
		new kendo.data.ObservableObject({
			name: "Νομοί/ Δήμοι",
			expanded: false,
			spriteCssClass: "rootfolder",
			items: []
		})
	);
	*/
	/*
	hDataRegionAndEdu.push(
		new kendo.data.ObservableObject({
			name: "Περιφέρειες/ Διευθύνσεις Εκπαίδευσης",
			expanded: false,
			spriteCssClass: "rootfolder",
			items: []
		})
	);
	*/
/********************************************/

function getObjects(obj, key, val) {
    var objects = [];
    for (var i in obj) {
        if (!obj.hasOwnProperty(i)) continue;
        if (typeof obj[i] == 'object') {
            objects = objects.concat(getObjects(obj[i], key, val));
        } else if (i == key && obj[key] == val) {
            objects.push(obj);
        }
    }
    return objects;
}

function bindStaticData(callback)
{
	
inMemoryPrefectures.fetch(function() {
	
	var data = this.data();
    //hDataPrefAndMun[0]['items'] = data;
	hDataPrefAndMun = data;
	
    hDataPrefAndMun = data.slice();
    hDataPrefAndMun.shift();

	
    inMemoryMunicipalities.fetch(function() {
    	
    	$.each(hDataPrefAndMun, function(i, v) {
    		
    		inMemoryMunicipalities.filter(
    				{field: "prefecture_id", value: v.prefecture_id}
    		);

            //v['spriteCssClass'] = "folder";
            v['items'] = inMemoryMunicipalities.view();

            $.each(v['items'], function(i2, v2) {
                //v2['spriteCssClass'] = "folder";
            });
			
			
        });
    	
		//callback();
		
		
    	inMemoryRegionEduAdmins.fetch(function() {
    		
    		var data = this.data(); 
			hDataRegionAndEdu = data;
            
            hDataRegionAndEdu = data.slice();
            hDataRegionAndEdu.shift();
            
            inMemoryEduAdmins.fetch(function() {
            	
            	$.each(hDataRegionAndEdu, function(i, v) {
            		
            		inMemoryEduAdmins.filter(
            				{field: "region_edu_admin_id", value: v.region_edu_admin_id}
                    );

                    //v['spriteCssClass'] = "folder";
                    v['items'] = inMemoryEduAdmins.view();

                    $.each(v['items'], function(i2, v2) {
                        //v2['spriteCssClass'] = "folder";
                    });
                });
            	
            	inMemoryImplEnt.fetch(function() {
            		callback();
            	});
            });

    	});
		
		
    	
    });
	
});




}




