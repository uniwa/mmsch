<div id="mod-sync-static-data" class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">
	<center>
		<button id="btnSyncStaticData" class="k-button btn-lg">Get Static Data</button>
		<textarea id="txtStaticData" rows="10" cols="30" style="" disabled></textarea>
		<div id="txtNoteStaticData" class="hidden well" >
			<center>
			<p style="font-size:16px;">		
			Η ανάκτηση των static data ολοκληρώθηκε.<br>
			Αντιγράψτε το περιεχόμενο του πλαισίου χωρίς καμία τροποποίηση στο αρχείο static.data.js
			</p>
			</center>
		</div>		

	</center>
</div>

<script type="text/javascript">

$(document).ready(function() {

	$("#mod-sync-static-data").on("destroyed", function () {
		$("body").off('click', "#btnSyncStaticData" );
	});
	
	var staticData = new Object();

	var callbackSuccessGetStaticData = function(){
		
	};
	
	var callbackFailGetStaticData = function(){
	};
	
	function fillStaticData(lexicalName, data){
		staticData[lexicalName] = new Object();
		staticData[lexicalName]['total'] = data.length;
		staticData[lexicalName]['data'] = data;
	}

	$("#txtStaticData").kendoEditor({tools: [], encoded: false});

	var kui_txtStaticData = $('#txtStaticData').data('kendoEditor');
	kui_txtStaticData.body.contentEditable=false;

	$("body").on("click", "#btnSyncStaticData", function(e){

		kui_txtStaticData.value(null);
		$("#txtNoteStaticData").addClass("hidden");
		
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
        		$.ajax( apiUrl + "legal_characters" )
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
        				LegalCharacters ) {

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
        		
        		var strData = JSON.stringify(staticData);
        		$("#txtNoteStaticData").removeClass("hidden");

        		strFinalData = "var staticData =" + strData + ";";

        		kui_txtStaticData.value(strFinalData);
        		
				/*
        		$.ajax({
        			type: "POST",
        			url: "saveStaticData.php?auth=1",
        			data: { staticData: strData }
        		})
        		.done(function( msg ) {
        			alert( msg );

        			kui_txtStaticData.value(strData);
        		});
        		*/

		}) // DONE-->
		.progress(function(d){

		})
		.then(callbackSuccessGetStaticData, callbackFailGetStaticData)
		.always(function(){
			$("#btnSyncStaticData").button('reset');
		});
		 
	}); // CLICK-->
	
}); // READY-->

</script>
