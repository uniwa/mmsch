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

require_once ('classes/OrderTypes.php');
require_once ('../api/system/OrderEnumTypes.php');

require_once ('classes/SearchTypes.php');
require_once ('../api/system/SearchEnumTypes.php');

require_once ('../api/system/MethodTypes.php');
require_once ('../api/system/ExceptionCodes.php');
require_once ('../api/system/ExceptionMessages.php');
require_once ('../api/system/Parameters.php');

require_once ('classes/sync/SyncEduAdmins.class.php');
require_once ('classes/sync/SyncTransferAreas.class.php');
require_once ('classes/sync/SyncTypes.class.php');

require_once ('classes/Validator.php');

require_once ('classes/extends/SyncLogsExt.class.php');


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




require_once ('../api/get/GetSchoolCommittees.php');
require_once ('../api/get/GetUnitDns.php');
require_once ('../api/get/GetAddrspaceTypes.php');
require_once ('../api/get/GetSources.php');
require_once ('../api/get/GetStates.php');
require_once ('../api/get/GetRelationTypes.php');
require_once ('../api/get/GetCategories.php');
require_once ('../api/get/GetIpMasks.php');
require_once ('../api/get/GetPrefectures.php');
require_once ('../api/get/GetTaxOffices.php');
require_once ('../api/get/GetSpecialTypes.php');
require_once ('../api/get/GetLegalCharacters.php');
require_once ('../api/get/GetOrientationTypes.php');
require_once ('../api/get/GetOperationShifts.php');
require_once ('../api/get/GetUnitTypes.php');
require_once ('../api/get/GetEducationLevels.php');
require_once ('../api/get/GetAddrspaces.php');
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
require_once ('../api/get/GetTransitions.php');
require_once ('../api/get/GetLevels.php');
require_once ('../api/get/GetGroups.php');




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
//require_once ('classes/extends/TransitionsExt.class.php');
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





//require_once ('../api/post/PostUnits.php');
//require_once ('../api/post/PostWorkers.php');
//require_once ('../api/post/PostUnitWorkers.php');
//require_once ('../api/post/PostRelations.php');
//require_once ('../api/post/PostLevels.php');
//require_once ('../api/post/PostGroups.php');
//require_once ('../api/post/PostConnectivityTypes.php');
//
//require_once ('../api/put/PutUnits.php');
//require_once ('../api/put/PutWorkers.php');
//require_once ('../api/put/PutUnitWorkers.php');
//require_once ('../api/put/PutRelations.php');
//require_once ('../api/put/PutLevels.php');
//require_once ('../api/put/PutGroups.php');
//require_once ('../api/put/PutConnectivityTypes.php');


//require_once ('../api/post/PostCategories.php');
//require_once ('../api/post/PostTransitions.php');



?>