<?php
require_once ('config.php');
require_once ('system/connection.php');
require_once ('system/functions.php');

require_once ('libs/db2php/Db2PhpEntity.class.php');
require_once ('libs/db2php/Db2PhpEntityBase.class.php');
require_once ('libs/db2php/Db2PhpEntityModificationTracking.class.php');
require_once ('libs/db2php/DFCInterface.class.php');
require_once ('libs/db2php/DFC.class.php');
require_once ('libs/db2php/DFCAggregate.class.php');
require_once ('libs/db2php/DSC.class.php');

// Doctrine & Entities autoloading
require_once ('libs/doctrine/bootstrap.php');
spl_autoload_register(function($class) {
    include 'entities/' . $class . '.php';
});

require_once ('libs/phpCAS/CAS.php');
require_once ('libs/PHPExcel/Classes/PHPExcel.php');
require_once('classes/UserRoles.php');

require_once ('classes/OrderTypes.php');
require_once ('../api/system/OrderEnumTypes.php');

require_once ('classes/SearchTypes.php');
require_once ('../api/system/SearchEnumTypes.php');

require_once ('classes/ExportDataTypes.php');
require_once ('../api/system/ExportDataEnumTypes.php');

require_once ('../api/system/MethodTypes.php');
require_once ('../api/system/ExceptionCodes.php');
require_once ('../api/system/ExceptionMessages.php');
require_once ('../api/system/Parameters.php');
require_once ('classes/Pagination.php');

require_once ('classes/sync/SyncEduAdmins.class.php');
require_once ('classes/sync/SyncTransferAreas.class.php');

require_once ('classes/Validator.php');
require_once ('classes/CRUDUtils.php');
require_once ('classes/Filters.php');

require_once ('classes/extends/SyncLogsExt.class.php');

require_once ('classes/UnitsExt.php');

//= Connections
require_once ('../api/get/GetConnections.php');
require_once ('../api/post/PostConnections.php');
require_once ('../api/put/PutConnections.php');
require_once ('../api/delete/DeleteConnections.php');


//= Circuits
require_once ('../api/get/GetCircuits.php');
require_once ('../api/post/PostCircuits.php');
require_once ('../api/put/PutCircuits.php');
require_once ('../api/delete/DeleteCircuits.php');


//= CircuitTypes
require_once ('../api/get/GetCircuitTypes.php');
require_once ('../api/post/PostCircuitTypes.php');
require_once ('../api/put/PutCircuitTypes.php');
require_once ('../api/delete/DeleteCircuitTypes.php');

//= UnitDns
require_once ('../api/get/GetUnitDns.php');
require_once ('../api/post/PostUnitDns.php');
require_once ('../api/put/PutUnitDns.php');
require_once ('../api/delete/DeleteUnitDns.php');

//= UnitNetworkSubnetTypes
require_once ('../api/get/GetUnitNetworkSubnetTypes.php');
require_once ('../api/post/PostUnitNetworkSubnetTypes.php');
require_once ('../api/put/PutUnitNetworkSubnetTypes.php');
require_once ('../api/delete/DeleteUnitNetworkSubnetTypes.php');

//UnitNetworkSubnets
require_once ('../api/get/GetUnitNetworkSubnets.php');
require_once ('../api/post/PostUnitNetworkSubnets.php');
require_once ('../api/put/PutUnitNetworkSubnets.php');
require_once ('../api/delete/DeleteUnitNetworkSubnets.php');

//UnitNetworkObjects
require_once ('../api/get/GetUnitNetworkObjects.php');
require_once ('../api/post/PostUnitNetworkObjects.php');
require_once ('../api/put/PutUnitNetworkObjects.php');
require_once ('../api/delete/DeleteUnitNetworkObjects.php');

//UnitConnectionNetworkSubnets
require_once ('../api/get/GetConnectionUnitNetworkSubnets.php');
require_once ('../api/post/PostConnectionUnitNetworkSubnets.php');
require_once ('../api/put/PutConnectionUnitNetworkSubnets.php');
require_once ('../api/delete/DeleteConnectionUnitNetworkSubnets.php');

//StatisticUnits
require_once ('../api/get/StatisticUnits.php');
require_once ('../api/get/CheckRequiredValues.php');

require_once ('../api/get/GetSchoolCommittees.php');
require_once ('../api/get/GetSources.php');
require_once ('../api/get/GetStates.php');
require_once ('../api/get/GetRelationTypes.php');
require_once ('../api/get/GetCategories.php');
require_once ('../api/get/GetPrefectures.php');
require_once ('../api/get/GetTaxOffices.php');
require_once ('../api/get/GetSpecialTypes.php');
require_once ('../api/get/GetLegalCharacters.php');
require_once ('../api/get/GetOrientationTypes.php');
require_once ('../api/get/GetOperationShifts.php');
require_once ('../api/get/GetUnitTypes.php');
require_once ('../api/get/GetEducationLevels.php');
require_once ('../api/get/GetRegionEduAdmins.php');
require_once ('../api/get/GetImplementationEntities.php');
require_once ('../api/get/GetCpes.php');
require_once ('../api/get/GetLdaps.php');
require_once ('../api/get/GetEduAdmins.php');
require_once ('../api/get/GetWorkerSpecializations.php');
require_once ('../api/get/GetWorkerPositions.php');
require_once ('../api/get/GetTransferAreas.php');
require_once ('../api/get/GetMunicipalities.php');
require_once ('../api/get/GetWorkers.php');
require_once ('../api/get/GetTransferAreaMunicipalities.php');
require_once ('../api/get/GetUnitWorkers.php');
require_once ('../api/get/GetUnits.php');
require_once ('../api/get/GetRelations.php');
require_once ('../api/get/GetLevels.php');
require_once ('../api/get/GetGroups.php');
require_once ('../api/get/GetExtLogEntries.php');
require_once ('../api/get/GetMunicipalityCommunities.php');





//require_once ('classes/extends/IpMasksExt.class.php');
//require_once ('classes/extends/AddrspaceTypesExt.class.php');
//require_once ('classes/extends/AddrspacesExt.class.php');
//require_once ('classes/extends/PrefecturesExt.class.php');
//require_once ('classes/extends/CategoriesExt.class.php');
//require_once ('classes/extends/EduAdminsExt.class.php');
//require_once ('classes/extends/EducationLevelsExt.class.php');
//require_once ('classes/extends/ImplementationEntitiesExt.class.php');
//require_once ('classes/extends/LegalCharactersExt.class.php');
//require_once ('classes/extends/MunicipalitiesExt.class.php');
//require_once ('classes/extends/OperationShiftsExt.class.php');
//require_once ('classes/extends/OrientationTypesExt.class.php');
//require_once ('classes/extends/RegionEduAdminsExt.class.php');
//require_once ('classes/extends/SourcesExt.class.php');
//require_once ('classes/extends/SpecialTypesExt.class.php');
//require_once ('classes/extends/StatesExt.class.php');
//require_once ('classes/extends/TaxOfficesExt.class.php');
//require_once ('classes/extends/TransferAreasExt.class.php');
//require_once ('classes/extends/UnitsExt.class.php');
//require_once ('classes/extends/UnitTypesExt.class.php');
//require_once ('classes/extends/WorkerPositionsExt.class.php');
//require_once ('classes/extends/WorkerSpecializationsExt.class.php');
//require_once ('classes/extends/WorkersExt.class.php');
//require_once ('classes/extends/LevelsExt.class.php');
//require_once ('classes/extends/GroupsExt.class.php');
//require_once ('classes/extends/RelationsExt.class.php');
//require_once ('classes/extends/RelationTypesExt.class.php');
//require_once ('classes/extends/UnitWorkersExt.class.php');
//require_once ('classes/extends/WorkerPositionsExt.class.php');
//require_once ('classes/extends/WorkerSpecializationsExt.class.php');
//require_once ('classes/extends/UnitIpDnsExt.class.php');
//require_once ('classes/extends/ConnectivityTypesExt.class.php');
//require_once ('classes/extends/CpesExt.class.php');
//require_once ('classes/extends/CircuitsExt.class.php');

require_once ('../api/post/PostUnits.php');
require_once ('../api/post/PostWorkers.php');

//require_once ('../api/post/PostUnitWorkers.php');
//require_once ('../api/post/PostConnectivityTypes.php');
//
require_once ('../api/put/PutUnits.php');
require_once ('../api/put/PutWorkers.php');
//require_once ('../api/put/PutUnitWorkers.php');
//require_once ('../api/put/PutRelations.php');
//require_once ('../api/put/PutLevels.php');
//require_once ('../api/put/PutGroups.php');
//require_once ('../api/put/PutConnectivityTypes.php');


//require_once ('../api/post/PostCategories.php');

//DOCTRINE OLD FUNCTIONS
require_once ('../api/post/PostUnitWorkers.php');
require_once ('../api/put/PutUnitWorkers.php');

//DOCTRINE READY FUNCTIONS
require_once ('../api/post/PostCategories.php');
require_once ('../api/post/PostEduAdmins.php');
require_once ('../api/post/PostEducationLevels.php');
require_once ('../api/post/PostGroups.php');
require_once ('../api/post/PostImplementationEntities.php');
require_once ('../api/post/PostLegalCharacters.php');
require_once ('../api/post/PostLevels.php');
require_once ('../api/post/PostMunicipalities.php');
require_once ('../api/post/PostOperationShifts.php');
require_once ('../api/post/PostOrientationTypes.php');
require_once ('../api/post/PostPrefectures.php');
require_once ('../api/post/PostRegionEduAdmins.php');
require_once ('../api/post/PostRelations.php');
require_once ('../api/post/PostRelationTypes.php');
require_once ('../api/post/PostSources.php');
require_once ('../api/post/PostSpecialTypes.php');
require_once ('../api/post/PostStates.php');
require_once ('../api/post/PostTaxOffices.php');
require_once ('../api/post/PostTransferAreaMunicipalities.php');
require_once ('../api/post/PostTransferAreas.php');
require_once ('../api/post/PostUnitTypes.php');
require_once ('../api/post/PostWorkerPositions.php');
require_once ('../api/post/PostWorkerSpecializations.php');

require_once ('../api/put/PutCategories.php');
require_once ('../api/put/PutEduAdmins.php');
require_once ('../api/put/PutEducationLevels.php');
require_once ('../api/put/PutGroups.php');
require_once ('../api/put/PutImplementationEntities.php');
require_once ('../api/put/PutLegalCharacters.php');
require_once ('../api/put/PutLevels.php');
require_once ('../api/put/PutMunicipalities.php');
require_once ('../api/put/PutOperationShifts.php');
require_once ('../api/put/PutOrientationTypes.php');
require_once ('../api/put/PutPrefectures.php');
require_once ('../api/put/PutRegionEduAdmins.php');
require_once ('../api/put/PutRelations.php');
require_once ('../api/put/PutRelationTypes.php');
require_once ('../api/put/PutSources.php');
require_once ('../api/put/PutSpecialTypes.php');
require_once ('../api/put/PutStates.php');
require_once ('../api/put/PutTaxOffices.php');
require_once ('../api/put/PutTransferAreaMunicipalities.php');
require_once ('../api/put/PutTransferAreas.php');
require_once ('../api/put/PutUnitTypes.php');
require_once ('../api/put/PutWorkerPositions.php');
require_once ('../api/put/PutWorkerSpecializations.php');


require_once ('../api/delete/DeleteCategories.php');
require_once ('../api/delete/DeleteEduAdmins.php');
require_once ('../api/delete/DeleteEducationLevels.php');
require_once ('../api/delete/DeleteGroups.php');
require_once ('../api/delete/DeleteImplementationEntities.php');
require_once ('../api/delete/DeleteLegalCharacters.php');
require_once ('../api/delete/DeleteLevels.php');
require_once ('../api/delete/DeleteMunicipalities.php');
require_once ('../api/delete/DeleteOperationShifts.php');
require_once ('../api/delete/DeleteOrientationTypes.php');
require_once ('../api/delete/DeletePrefectures.php');
require_once ('../api/delete/DeleteRegionEduAdmins.php');
require_once ('../api/delete/DeleteRelations.php');
require_once ('../api/delete/DeleteRelationTypes.php');
require_once ('../api/delete/DeleteSources.php');
require_once ('../api/delete/DeleteSpecialTypes.php');
require_once ('../api/delete/DeleteStates.php');
require_once ('../api/delete/DeleteTaxOffices.php');
require_once ('../api/delete/DeleteTransferAreaMunicipalities.php');
require_once ('../api/delete/DeleteTransferAreas.php');
require_once ('../api/delete/DeleteUnitTypes.php');
require_once ('../api/delete/DeleteWorkerPositions.php');
require_once ('../api/delete/DeleteWorkerSpecializations.php');

?>