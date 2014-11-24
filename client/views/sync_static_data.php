<div id="mod-sync-static-data" class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">
	<center>
		<button id="btnSyncStaticData" class="k-button btn-lg">Sync Static Data</button>
	</center>
</div>

<script type="text/javascript">

$(document).ready(function() {

	$("#mod-sync-static-data").on("destroyed", function () {
		$("body").off('click', "#btnSyncStaticData" );
	});
	
	var staticData = new Object();

	function fillStaticData(lexicalName, data){
		staticData[lexicalName] = new Object();
		staticData[lexicalName]['total'] = data.length;
		staticData[lexicalName]['data'] = data;
	}

	$("body").on("click", "#btnSyncStaticData", function(e){
		
		e.preventDefault();
        $(this).button('loading');

        $.when( 
        		$.ajax( apiUrl + "prefectures" ), 
        		$.ajax( apiUrl + "municipalities" ),
        		$.ajax( apiUrl + "region_edu_admins" ),
        		$.ajax( apiUrl + "edu_admins" ),
        		$.ajax( apiUrl + "implementation_entities" ),
        		$.ajax( apiUrl + "unit_types" ),
        		$.ajax( apiUrl + "education_levels" ),
        		$.ajax( apiUrl + "categories" ),
        		$.ajax( apiUrl + "states" ),
        		$.ajax( apiUrl + "sources" ),
        		$.ajax( apiUrl + "orientation_types" ),
        		$.ajax( apiUrl + "operation_shifts" ),
        		$.ajax( apiUrl + "special_types" ),
        		$.ajax( apiUrl + "transfer_areas" ),
        		$.ajax( apiUrl + "legal_characters" ),
        		$.ajax( apiUrl + "unit_network_subnet_types" ),
        		$.ajax( apiUrl + "circuit_types" )
        )
        .done(function( Prefectures, 
				       	Municipalities, 
        				RegionEduAdmins, 
        				EduAdmins, 
        				ImplEnt,
        				UnitTypes,
        				ΕducationLevels,
        				Categories,
        				States,
        				Sources,
        				OrientationTypes,
        				OperationShifts,
        				SpecialTypes,
        				TransferAreas,
        				LegalCharacters,
        				SubnetTypes,
        				CircuitTypes ) {

			fillStaticData('Prefectures', Prefectures[0].data);
        	fillStaticData('Municipalities', Municipalities[0].data);
        	fillStaticData('RegionEduAdmins', RegionEduAdmins[0].data);
        	fillStaticData('EduAdmins', EduAdmins[0].data);
        	fillStaticData('ImplEnt', ImplEnt[0].data);
        	fillStaticData('UnitTypes', UnitTypes[0].data);
        	fillStaticData('ΕducationLevels', ΕducationLevels[0].data);
        	fillStaticData('Categories', Categories[0].data);
        	fillStaticData('States', States[0].data);
        	fillStaticData('Sources', Sources[0].data);
        	fillStaticData('OrientationTypes', OrientationTypes[0].data);
        	fillStaticData('OperationShifts', OperationShifts[0].data);
        	fillStaticData('SpecialTypes', SpecialTypes[0].data);
        	fillStaticData('TransferAreas', TransferAreas[0].data);
        	fillStaticData('LegalCharacters', LegalCharacters[0].data);
        	fillStaticData('SubnetTypes', SubnetTypes[0].data);
        	fillStaticData('CircuitTypes', CircuitTypes[0].data);
        		
        		var strData = JSON.stringify(staticData);

        		$.ajax({
        			type: "POST",
        			url: "saveStaticData.php?auth=1",
        			data: { staticData: strData }
        		})
        		.done(function( msg ) {
        			alert( msg );
        		});

		}) // DONE-->
		.progress(function(d){
			console.log(d);
		})
		.always(function(){
			$("#btnSyncStaticData").button('reset');
		});
		 
	}); // CLICK-->
	
}); // READY-->

</script>
