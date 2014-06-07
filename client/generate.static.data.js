//φορείς υλοποίησης
var inMeM_ImplEnt = new kendo.data.DataSource({
	transport: tsImplementationEntities,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Περιφέρειες
var inMeM_RegionEduAdmins = new kendo.data.DataSource({
	transport: tsRegionEduAdmins,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//διευθυνσεις εκπαιδευσης
var inMeM_EduAdmins = new kendo.data.DataSource({
	transport: tsEduAdmins,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//περιοχες μετάθεσης
var inMeM_TransferAreas = new kendo.data.DataSource({
	transport: tsTransferAreas,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//νομοι
var inMeM_Prefectures = new kendo.data.DataSource({
	transport: tsPrefectures,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//δημοι
var inMeM_Municipalities = new kendo.data.DataSource({
	transport: tsMunicipalities,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Τυποι Μοναδων
var inMeM_UnitTypes = new kendo.data.DataSource({
	transport: tsUnitTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Επίπεδα Εκπαιδ.
var inMeM_ΕducationLevel = new kendo.data.DataSource({
	transport: tsEducationLevels,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Κατηγορίες
var inMeM_Categories = new kendo.data.DataSource({
	transport: tsCategories,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Καταστάσεις
var inMeM_States = new kendo.data.DataSource({
	transport: tsStates,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Πηγές
var inMeM_Sources = new kendo.data.DataSource({
	transport: tsSources,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});


//Προσανατολισμοί
var inMeM_OrienTypes = new kendo.data.DataSource({
	transport: tsOrientationTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Ωράρια Λειτουργίας
var inMeM_OperatShifts = new kendo.data.DataSource({
	transport: tsOperationShifts,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Ειδικοί Τύποι
var inMeM_SpecialTypes = new kendo.data.DataSource({
	transport: tsSpecialTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

// Νομικοί Χαρακτήρες
var inMeM_LegalCharacters = new kendo.data.DataSource({
	transport: tsLegalCharacters,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Τύποι Υποδικτύων
var inMeM_SubnetTypes = new kendo.data.DataSource({
	transport: tsSubnetTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});

//Τύποι Κυκλωμάτων
var inMeM_CircuitTypes = new kendo.data.DataSource({
	transport: tsCircuitTypes,
	serverFiltering: false,
	schema: {
		data: "data",
		total: "total"
	}
});


var staticData = new Object();
function loadStaticData(){

inMeM_Prefectures.fetch(function() {
	
	
	//staticData['Prefectures'] = this.data().toJSON();
	staticData['Prefectures'] = new Object();
	staticData['Prefectures']['total'] = this.data().length;
	staticData['Prefectures']['data'] = this.data().toJSON();
	
    inMeM_Municipalities.fetch(function() {
    	
    	staticData['Municipalities'] =  new Object();
    	staticData['Municipalities']['total'] = this.data().length;
    	staticData['Municipalities']['data'] = this.data().toJSON();
    	
    	inMeM_RegionEduAdmins.fetch(function() {
    		
    		staticData['RegionEduAdmins'] =  new Object();
        	staticData['RegionEduAdmins']['total'] = this.data().length;
        	staticData['RegionEduAdmins']['data'] = this.data().toJSON();
            
    		inMeM_EduAdmins.fetch(function() {
            	
            	staticData['EduAdmins'] = new Object();
            	staticData['EduAdmins']['total'] = this.data().length;
            	staticData['EduAdmins']['data'] = this.data().toJSON();
            	           	            	
            	inMeM_ImplEnt.fetch(function() {
            		
            		staticData['ImplEnt'] = new Object();
            		staticData['ImplEnt']['total'] = this.data().length;
                	staticData['ImplEnt']['data'] = this.data().toJSON();
            		
            		inMeM_UnitTypes.fetch(function() { 
            			
            			staticData['UnitTypes'] = new Object();
            			staticData['UnitTypes']['total'] = this.data().length;
                    	staticData['UnitTypes']['data'] = this.data().toJSON();
						
						inMeM_ΕducationLevel.fetch(function() { 
							
							staticData['ΕducationLevels'] = new Object();
							staticData['ΕducationLevels']['total'] = this.data().length;
							staticData['ΕducationLevels']['data'] = this.data().toJSON();
            			
							inMeM_Categories.fetch(function() { 
								
								staticData['Categories'] = new Object();
								staticData['Categories']['total'] = this.data().length;
								staticData['Categories']['data'] = this.data().toJSON();
								
								
								inMeM_States.fetch(function() {
									
									staticData['States'] = new Object();
									staticData['States']['total'] = this.data().length;
									staticData['States']['data'] = this.data().toJSON();
									
									inMeM_Sources.fetch(function() {
									
										staticData['Sources'] = new Object();
										staticData['Sources']['total'] = this.data().length;
										staticData['Sources']['data'] = this.data().toJSON();
										
										inMeM_OrienTypes.fetch(function() {
											
											staticData['OrientationTypes'] = new Object();
											staticData['OrientationTypes']['total'] = this.data().length;
											staticData['OrientationTypes']['data'] = this.data().toJSON();
											
											
											inMeM_OperatShifts.fetch(function() {
									
												staticData['OperationShifts'] = new Object();
												staticData['OperationShifts']['total'] = this.data().length;
												staticData['OperationShifts']['data'] = this.data().toJSON();
												
												inMeM_SpecialTypes.fetch(function() {
												
													staticData['SpecialTypes'] = new Object();
													staticData['SpecialTypes']['total'] = this.data().length;
													staticData['SpecialTypes']['data'] = this.data().toJSON();
													
													inMeM_TransferAreas.fetch(function() { 
														
														staticData['TransferAreas'] = new Object();
														staticData['TransferAreas']['total'] = this.data().length;
														staticData['TransferAreas']['data'] = this.data().toJSON();
														
														inMeM_LegalCharacters.fetch(function(){
															staticData['LegalCharacters'] = new Object();
															staticData['LegalCharacters']['total'] = this.data().length;
															staticData['LegalCharacters']['data'] = this.data().toJSON();
															
															inMeM_SubnetTypes.fetch(function(){
																staticData['SubnetTypes'] = new Object();
																staticData['SubnetTypes']['total'] = this.data().length;
																staticData['SubnetTypes']['data'] = this.data().toJSON();
																
																inMeM_CircuitTypes.fetch(function(){
																	staticData['CircuitTypes'] = new Object();
																	staticData['CircuitTypes']['total'] = this.data().length;
																	staticData['CircuitTypes']['data'] = this.data().toJSON();
																});
															});
														});
													});
												});
											});
										});
									});
								});
							});
						});	
            		});
            	});
            });
    	});
    });
});
}