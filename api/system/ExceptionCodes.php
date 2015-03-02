<?php

/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package System
 */

header("Content-Type: text/html; charset=utf-8");

/** 
 * Κωδικοί Σφαλμάτων
 * 
 * Παρακάτω εμφανίζονται οι Κωδικοί Σφαλμάτων που διαχειρίζετε η {@see CustomException}
 *
 * Δείτε τα Μηνύματα Σφαλμάτων που αντιστοιχούν στους παρακάτω Κωδικούς {@see ExceptionMessages}
 *  
 */

class ExceptionCodes
{
    /** {@see ExceptionMessages::NoErrors} */
    const NoErrors = 200;



    /** {@see ExceptionMessages::Unauthorized} */
    const Unauthorized = 401;
    /** {@see ExceptionMessages::UserAccesDenied} */
    const UserAccesDenied = 401;
    /** {@see ExceptionMessages::UserNoPermissions} */
    const UserNoPermissions = 401;



    /** {@see ExceptionMessages::MethodNotFound} */
    const MethodNotFound = 500;



    /** {@see ExceptionMessages::MissingPageValue} */
    const MissingPageValue = 500;
    /** {@see ExceptionMessages::InvalidPageNumber} */
    const InvalidPageNumber = 500;
    /** {@see ExceptionMessages::InvalidPageType} */
    const InvalidPageType = 500;
    /** {@see ExceptionMessages::InvalidPageArray} */
    const InvalidPageArray = 500;



    /** {@see ExceptionMessages::MissingPageSizeValue} */
    const MissingPageSizeValue = 500;
    /** {@see ExceptionMessages::InvalidPageSizeNumber} */
    const InvalidPageSizeNumber = 500;
    /** {@see ExceptionMessages::InvalidPageSizeType} */
    const InvalidPageSizeType = 500;
    /** {@see ExceptionMessages::InvalidPageSizeArray} */
    const InvalidPageSizeArray = 500;
     /** {@see ExceptionMessages::MissingPageSizeNegativeValue} */   
    const MissingPageSizeNegativeValue = 500;

    /** {@see ExceptionMessages::InvalidMaxPageNumber} */
    const InvalidMaxPageNumber = 500;



    /** {@see ExceptionMessages::InvalidSearchType} */
    const InvalidSearchType = 500;
    /** {@see ExceptionMessages::InvalidOrderType} */
    const InvalidOrderType = 500;
    /** {@see ExceptionMessages::InvalidOrderBy} */
    const InvalidOrderBy = 500;
    /** {@see ExceptionMessages::InvalidExportType} */   
    const InvalidExportType = 500;

    /** {@see ExceptionMessages::MissingSelectionCheckRequiredParam} */ 
    const MissingSelectionCheckRequiredParam = 500;
    /** {@see ExceptionMessages::MissingSelectionCheckRequiredValue} */    
    const MissingSelectionCheckRequiredValue = 500;
    /** {@see ExceptionMessages::InvalidSelectionCheckRequiredType} */     
    const InvalidSelectionCheckRequiredType = 500;
    /** {@see ExceptionMessages::InvalidSelectionCheckRequiredArray} */     
    const InvalidSelectionCheckRequiredArray = 500;
    /** {@see ExceptionMessages::InvalidSelectionCheckRequiredValue} */     
    const InvalidSelectionCheckRequiredValue = 500;
    /** {@see ExceptionMessages::InvalidAllDataSelectionCheckRequiredValue} */  
    const InvalidAllDataSelectionCheckRequiredValue = 500;
    
    /** {@see ExceptionMessages::MissingXAxisParam} */
    const MissingXAxisParam = 500;
    /** {@see ExceptionMessages::MissingXAxisValue} */
    const MissingXAxisValue = 500;
    /** {@see ExceptionMessages::InvalidXAxisType} */
    const InvalidXAxisType = 500;
    /** {@see ExceptionMessages::InvalidXAxisArray} */
    const InvalidXAxisArray = 500;
    /** {@see ExceptionMessages::InvalidXAxis} */
    const InvalidXAxis = 500;

    /** {@see ExceptionMessages::MissingYAxisParam} */
    const MissingYAxisParam = 500;
    /** {@see ExceptionMessages::MissingYAxisValue} */
    const MissingYAxisValue = 500;
    /** {@see ExceptionMessages::InvalidYAxisType} */
    const InvalidYAxisType = 500;
    /** {@see ExceptionMessages::InvalidYAxisArray} */
    const InvalidYAxisArray = 500;
    /** {@see ExceptionMessages::InvalidYAxis} */
    const InvalidYAxis = 500;
    
    /** {@see ExceptionMessages::MissingNameParam} */
    const MissingNameParam = 500;
    /** {@see ExceptionMessages::MissingNameValue} */
    const MissingConnectionIDValueMissingNameValue = 500;
    /** {@see ExceptionMessages::InvalidNameType} */
    const InvalidNameType = 500;
    /** {@see ExceptionMessages::InvalidNameArray} */
    const InvalidNameArray = 500;

    //= Categories==============================================================
    
    /** {@see ExceptionMessages::MissingCategoryIDParam} */
    const MissingCategoryIDParam = 500;
    /** {@see ExceptionMessages::MissingCategoryIDValue} */
    const MissingCategoryIDValue = 500;
    /** {@see ExceptionMessages::InvalidCategoryIDType} */
    const InvalidCategoryIDType = 500;
    /** {@see ExceptionMessages::InvalidCategoryIDArray} */
    const InvalidCategoryIDArray = 500;
    /** {@see ExceptionMessages::MissingCategoryParam} */
    
    const MissingCategoryParam = 500;
    /** {@see ExceptionMessages::MissingCategoryValue} */
    const MissingCategoryValue = 500;
    /** {@see ExceptionMessages::InvalidCategoryValue} */
    const InvalidCategoryValue = 500;
    /** {@see ExceptionMessages::InvalidCategoryType} */
    const InvalidCategoryType = 500;
    /** {@see ExceptionMessages::InvalidCategoryArray} */  
    const InvalidCategoryArray = 500;

    /** {@see ExceptionMessages::MissingCategoryNameParam} */  
    const MissingCategoryNameParam = 500;
    /** {@see ExceptionMessages::MissingCategoryNameValue} */  
    const MissingCategoryNameValue = 500;
    /** {@see ExceptionMessages::InvalidCategoryNameType} */  
    const InvalidCategoryNameType = 500;
    /** {@see ExceptionMessages::InvalidCategoryNameArray} */  
    const InvalidCategoryNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedCategoryValue} */
    const DuplicatedCategoryValue = 500;
    /** {@see ExceptionMessages::DuplicatedCategoryUniqueValue} */
    const DuplicatedCategoryUniqueValue = 500;
    
    //= GetLdaps
    /** {@see ExceptionMessages::MissingUnitID} */
    const MissingUnitID = 500;

    //= GetSchoolCommittees
    /** {@see ExceptionMessages::MissingSchoolCommitteeIDParam} */
    const MissingSchoolCommitteeIDParam = 500;
    /** {@see ExceptionMessages::MissingSchoolCommitteeIDValue} */
    const MissingSchoolCommitteeIDValue = 500;
    /** {@see ExceptionMessages::InvalidSchoolCommitteeIDType} */
    const InvalidSchoolCommitteeIDType = 500;
    /** {@see ExceptionMessages::MissingSchoolCommitteeParam} */
    const MissingSchoolCommitteeParam = 500;
    /** {@see ExceptionMessages::MissingSchoolCommitteeValue} */
    const MissingSchoolCommitteeValue = 500;
    /** {@see ExceptionMessages::InvalidSchoolCommitteeValue} */
    const InvalidSchoolCommitteeValue = 500;
    /** {@see ExceptionMessages::InvalidSchoolCommitteeType} */
    const InvalidSchoolCommitteeType = 500;
    /** {@see ExceptionMessages::DuplicatedSchoolCommitteeValue} */
    const DuplicatedSchoolCommitteeValue = 500;



    //= GetEducationLevels
    /** {@see ExceptionMessages::MissingEducationLevelIDParam} */
    const MissingEducationLevelIDParam = 500;
    /** {@see ExceptionMessages::MissingEducationLevelIDValue} */
    const MissingEducationLevelIDValue = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelIDType} */
    const InvalidEducationLevelIDType = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelIDArray} */
    const InvalidEducationLevelIDArray = 500;
    /** {@see ExceptionMessages::MissingEducationLevelValue} */
    const MissingEducationLevelValue = 500;
    /** {@see ExceptionMessages::MissingEducationLevelParam} */
    const MissingEducationLevelParam = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelValue} */
    const InvalidEducationLevelValue = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelType} */
    const InvalidEducationLevelType = 500;
    /** {@see ExceptionMessages::DuplicatedEducationLevelValue} */
    const DuplicatedEducationLevelValue = 500;



    //= GetUnitDns
   /** {@see ExceptionMessages::InvalidUnitDNSType} */
    const InvalidUnitDNSType = 500;
   /** {@see ExceptionMessages::InvalidExtUnitDnsType} */
    const InvalidExtUnitDnsType = 500;
   /** {@see ExceptionMessages::InvalidUnitUIDType} */
    const InvalidUnitUIDType = 500;



    //= CircuitTypes
    /** {@see ExceptionMessages::MissingCircuitTypeIDParam} */
    const MissingCircuitTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingCircuitTypeIDValue} */
    const MissingCircuitTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeIDType} */
    const InvalidCircuitTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeIDArray} */
    const InvalidCircuitTypeIDArray = 500;
    /** {@see ExceptionMessages::MissingCircuitTypeValue} */
    const MissingCircuitTypeValue = 500;
    /** {@see ExceptionMessages::MissingCircuitTypeParam} */
    const MissingCircuitTypeParam = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeValue} */
    const InvalidCircuitTypeValue = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeType} */
    const InvalidCircuitTypeType = 500;
    /** {@see ExceptionMessages::DuplicatedCircuitTypeValue} */
    const DuplicatedCircuitTypeValue = 500;
    /** {@see ExceptionMessages::UsedCircuitTypeByCircuits} */
    const UsedCircuitTypeByCircuits = 500;



    //= GetAddrspaceTypes
    /** {@see ExceptionMessages::MissingAddrspaceTypeIDParam} */
    const MissingAddrspaceTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingAddrspaceTypeIDValue} */
    const MissingAddrspaceTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceTypeIDType} */
    const InvalidAddrspaceTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceTypeIDArray} */
    const InvalidAddrspaceTypeIDArray = 500;
    /** {@see ExceptionMessages::MissingAddrspaceTypeValue} */
    const MissingAddrspaceTypeValue = 500;
    /** {@see ExceptionMessages::MissingAddrspaceTypeParam} */
    const MissingAddrspaceTypeParam = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceTypeValue} */
    const InvalidAddrspaceTypeValue = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceTypeType} */
    const InvalidAddrspaceTypeType = 500;
    /** {@see ExceptionMessages::DuplicatedAddrspaceTypeValue} */
    const DuplicatedAddrspaceTypeValue = 500;
    
    //= GetSources
    /** {@see ExceptionMessages::MissingSourceIDParam} */
    const MissingSourceIDParam = 500;
    /** {@see ExceptionMessages::MissingSourceIDValue} */
    const MissingSourceIDValue = 500;
    /** {@see ExceptionMessages::InvalidSourceIDType} */
    const InvalidSourceIDType = 500;
    /** {@see ExceptionMessages::InvalidSourceIDArray} */
    const InvalidSourceIDArray = 500;
    /** {@see ExceptionMessages::MissingSourceValue} */
    const MissingSourceValue = 500;
    /** {@see ExceptionMessages::MissingSourceParam} */
    const MissingSourceParam = 500;
    /** {@see ExceptionMessages::InvalidSourceValue} */
    const InvalidSourceValue = 500;
    /** {@see ExceptionMessages::InvalidSourceType} */
    const InvalidSourceType = 500;
    /** {@see ExceptionMessages::MissingSourceVisibleParam} */
    const MissingSourceVisibleParam = 500;
    /** {@see ExceptionMessages::MissingSourceVisibleValue} */
    const MissingSourceVisibleValue = 500;
    /** {@see ExceptionMessages::InvalidSourceVisibleType} */
    const InvalidSourceVisibleType = 500;
    /** {@see ExceptionMessages::InvalidSourceVisibleArray} */
    const InvalidSourceVisibleArray = 500;
    /** {@see ExceptionMessages::DuplicatedSourceValue} */
    const DuplicatedSourceValue = 500;



    //= GetStates
    /** {@see ExceptionMessages::MissingStateIDParam} */
    const MissingStateIDParam = 500;
    /** {@see ExceptionMessages::MissingStateIDValue} */
    const MissingStateIDValue = 500;
    /** {@see ExceptionMessages::InvalidStateIDType} */
    const InvalidStateIDType = 500;
    /** {@see ExceptionMessages::InvalidStateIDArray} */
    const InvalidStateIDArray = 500;
    /** {@see ExceptionMessages::MissingStateValue} */
    const MissingStateValue = 500;
    /** {@see ExceptionMessages::MissingStateParam} */
    const MissingStateParam = 500;
    /** {@see ExceptionMessages::InvalidStateValue} */
    const InvalidStateValue = 500;
    /** {@see ExceptionMessages::InvalidStateType} */
    const InvalidStateType = 500;
    /** {@see ExceptionMessages::DuplicatedStateValue} */
    const DuplicatedStateValue = 500;



    //= GetRelationTypes
    /** {@see ExceptionMessages::MissingRelationTypeIDParam} */
    const MissingRelationTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingRelationTypeIDValue} */
    const MissingRelationTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeIDType} */
    const InvalidRelationTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeIDArray} */
    const InvalidRelationTypeIDArray = 500;
    /** {@see ExceptionMessages::MissingRelationTypeValue} */
    const MissingRelationTypeValue = 500;
    /** {@see ExceptionMessages::MissingRelationTypeParam} */
    const MissingRelationTypeParam = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeValue} */
    const InvalidRelationTypeValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeType} */
    const InvalidRelationTypeType = 500;
    /** {@see ExceptionMessages::DuplicatedRelationTypeValue} */
    const DuplicatedRelationTypeValue = 500;




    //= GetIpMasks
    /** {@see ExceptionMessages::MissingIpMaskIDParam} */
    const MissingIpMaskIDParam = 500;
    /** {@see ExceptionMessages::MissingIpMaskIDValue} */
    const MissingIpMaskIDValue = 500;
    /** {@see ExceptionMessages::InvalidIpMaskIDType} */
    const InvalidIpMaskIDType = 500;
    /** {@see ExceptionMessages::InvalidIpMaskIDArray} */
    const InvalidIpMaskIDArray = 500;
    /** {@see ExceptionMessages::MissingIpMaskValue} */
    const MissingIpMaskValue = 500;
    /** {@see ExceptionMessages::MissingIpMaskParam} */
    const MissingIpMaskParam = 500;
    /** {@see ExceptionMessages::InvalidIpMaskValue} */
    const InvalidIpMaskValue = 500;
    /** {@see ExceptionMessages::InvalidIpMaskType} */
    const InvalidIpMaskType = 500;
    /** {@see ExceptionMessages::DuplicatedIpMaskValue} */
    const DuplicatedIpMaskValue = 500;



    //= GetPrefectures
    /** {@see ExceptionMessages::MissingPrefectureIDValue} */
    const MissingPrefectureIDValue = 500;
    /** {@see ExceptionMessages::MissingPrefectureIDParam} */
    const MissingPrefectureIDParam = 500;
    /** {@see ExceptionMessages::InvalidPrefectureIDType} */
    const InvalidPrefectureIDType = 500;
    /** {@see ExceptionMessages::InvalidPrefectureIDArray} */
    const InvalidPrefectureIDArray = 500;
    /** {@see ExceptionMessages::MissingPrefectureValue} */
    const MissingPrefectureValue = 500;
    /** {@see ExceptionMessages::MissingPrefectureParam} */
    const MissingPrefectureParam = 500;
    /** {@see ExceptionMessages::InvalidPrefectureValue} */
    const InvalidPrefectureValue = 500;
    /** {@see ExceptionMessages::InvalidPrefectureType} */
    const InvalidPrefectureType = 500;
    /** {@see ExceptionMessages::DuplicatedPrefectureValue} */
    const DuplicatedPrefectureValue = 500;



    //= GetTaxOffices
    /** {@see ExceptionMessages::MissingTaxOfficeIDValue} */
    const MissingTaxOfficeIDValue = 500;
    /** {@see ExceptionMessages::MissingTaxOfficeIDParam} */
    const MissingTaxOfficeIDParam = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeIDType} */
    const InvalidTaxOfficeIDType = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeIDArray} */
    const InvalidTaxOfficeIDArray = 500;
    /** {@see ExceptionMessages::MissingTaxOfficeValue} */
    const MissingTaxOfficeValue = 500;
    /** {@see ExceptionMessages::MissingTaxOfficeParam} */
    const MissingTaxOfficeParam = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeValue} */
    const InvalidTaxOfficeValue = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeType} */
    const InvalidTaxOfficeType = 500;
    /** {@see ExceptionMessages::DuplicatedTaxOfficeValue} */
    const DuplicatedTaxOfficeValue = 500;




    //= GetSpecialTypes
    /** {@see ExceptionMessages::MissingSpecialTypeIDValue} */
    const MissingSpecialTypeIDValue = 500;
    /** {@see ExceptionMessages::MissingSpecialTypeIDParam} */
    const MissingSpecialTypeIDParam = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeIDType} */
    const InvalidSpecialTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeIDArray} */
    const InvalidSpecialTypeIDArray = 500;
    /** {@see ExceptionMessages::MissingSpecialTypeValue} */
    const MissingSpecialTypeValue = 500;
    /** {@see ExceptionMessages::MissingSpecialTypeParam} */
    const MissingSpecialTypeParam = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeValue} */
    const InvalidSpecialTypeValue = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeType} */
    const InvalidSpecialTypeType = 500;
    /** {@see ExceptionMessages::DuplicatedSpecialTypeValue} */
    const DuplicatedSpecialTypeValue = 500;



    //= GetLegalCharacters
    /** {@see ExceptionMessages::MissingLegalCharacterIDValue} */
    const MissingLegalCharacterIDValue = 500;
    /** {@see ExceptionMessages::MissingLegalCharacterIDParam} */
    const MissingLegalCharacterIDParam = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterIDType} */
    const InvalidLegalCharacterIDType = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterIDArray} */
    const InvalidLegalCharacterIDArray = 500;
    /** {@see ExceptionMessages::MissingLegalCharacterValue} */
    const MissingLegalCharacterValue = 500;
    /** {@see ExceptionMessages::MissingLegalCharacterParam} */
    const MissingLegalCharacterParam = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterValue} */
    const InvalidLegalCharacterValue = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterType} */
    const InvalidLegalCharacterType = 500;
    /** {@see ExceptionMessages::DuplicatedLegalCharacterValue} */
    const DuplicatedLegalCharacterValue = 500;



    //= GetOrientationTypes
    /** {@see ExceptionMessages::MissingOrientationTypeIDValue} */
    const MissingOrientationTypeIDValue = 500;
    /** {@see ExceptionMessages::MissingOrientationTypeIDParam} */
    const MissingOrientationTypeIDParam = 500;
    /** {@see ExceptionMessages::InvalidOrientationTypeIDType} */
    const InvalidOrientationTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidOrientationTypeIDArray} */
    const InvalidOrientationTypeIDArray = 500;
    /** {@see ExceptionMessages::MissingOrientationTypeValue} */
    const MissingOrientationTypeValue = 500;
    /** {@see ExceptionMessages::MissingOrientationTypeParam} */
    const MissingOrientationTypeParam = 500;
    /** {@see ExceptionMessages::InvalidOrientationTypeValue} */
    const InvalidOrientationTypeValue = 500;
    /** {@see ExceptionMessages::InvalidOrientationTypeType} */
    const InvalidOrientationTypeType = 500;
    /** {@see ExceptionMessages::DuplicatedOrientationTypeValue} */
    const DuplicatedOrientationTypeValue = 500;




    //= GetOperationShifts
    /** {@see ExceptionMessages::MissingOperationShiftIDValue} */
    const MissingOperationShiftIDValue = 500;
    /** {@see ExceptionMessages::MissingOperationShiftIDParam} */
    const MissingOperationShiftIDParam = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftIDType} */
    const InvalidOperationShiftIDType = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftIDArray} */
    const InvalidOperationShiftIDArray = 500;
    /** {@see ExceptionMessages::MissingOperationShiftValue} */
    const MissingOperationShiftValue = 500;
    /** {@see ExceptionMessages::MissingOperationShiftParam} */
    const MissingOperationShiftParam = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftValue} */
    const InvalidOperationShiftValue = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftType} */
    const InvalidOperationShiftType = 500;
    /** {@see ExceptionMessages::DuplicatedOperationShiftValue} */
    const DuplicatedOperationShiftValue = 500;



    //= GetUnitTypes
    /** {@see ExceptionMessages::MissingUnitTypeIDValue} */
    const MissingUnitTypeIDValue = 500;
    /** {@see ExceptionMessages::MissingUnitTypeIDParam} */
    const MissingUnitTypeIDParam = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeIDType} */
    const InvalidUnitTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeIDArray} */
    const InvalidUnitTypeIDArray = 500;
    /** {@see ExceptionMessages::MissingUnitTypeValue} */
    const MissingUnitTypeValue = 500;
    /** {@see ExceptionMessages::MissingUnitTypeParam} */
    const MissingUnitTypeParam = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeValue} */
    const InvalidUnitTypeValue = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeType} */
    const InvalidUnitTypeType = 500;
    /** {@see ExceptionMessages::DuplicatedUnitTypeValue} */
    const DuplicatedUnitTypeValue = 500;



    //= GetAddrspaces
    /** {@see ExceptionMessages::MissingAddrspaceIDParam} */
    const MissingAddrspaceIDParam = 500;
    /** {@see ExceptionMessages::MissingAddrspaceIDValue} */
    const MissingAddrspaceIDValue = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceIDType} */
    const InvalidAddrspaceIDType = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceIDArray} */
    const InvalidAddrspaceIDArray = 500;
    /** {@see ExceptionMessages::MissingAddrspaceValue} */
    const MissingAddrspaceValue = 500;
    /** {@see ExceptionMessages::MissingAddrspaceParam} */
    const MissingAddrspaceParam = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceValue} */
    const InvalidAddrspaceValue = 500;
    /** {@see ExceptionMessages::InvalidAddrspaceType} */
    const InvalidAddrspaceType = 500;
    /** {@see ExceptionMessages::DuplicatedAddrspaceValue} */
    const DuplicatedAddrspaceValue = 500;



    //= GetRegionEduAdmins
    /** {@see ExceptionMessages::MissingRegionEduAdminIDParam} */
    const MissingRegionEduAdminIDParam = 500;
    /** {@see ExceptionMessages::MissingRegionEduAdminIDValue} */
    const MissingRegionEduAdminIDValue = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminIDType} */
    const InvalidRegionEduAdminIDType = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminIDArray} */
    const InvalidRegionEduAdminIDArray = 500;
    /** {@see ExceptionMessages::MissingRegionEduAdminValue} */
    const MissingRegionEduAdminValue = 500;
    /** {@see ExceptionMessages::MissingRegionEduAdminParam} */
    const MissingRegionEduAdminParam = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminValue} */
    const InvalidRegionEduAdminValue = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminType} */
    const InvalidRegionEduAdminType = 500;
    /** {@see ExceptionMessages::DuplicatedRegionEduAdminValue} */
    const DuplicatedRegionEduAdminValue = 500;



    //= GetImplementationEntities
    /** {@see ExceptionMessages::MissingImplementationEntityIDParam} */
    const MissingImplementationEntityIDParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityIDValue} */
    const MissingImplementationEntityIDValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityIDType} */
    const InvalidImplementationEntityIDType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityIDArray} */
    const InvalidImplementationEntityIDArray = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityValue} */
    const MissingImplementationEntityValue = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityParam} */
    const MissingImplementationEntityParam = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityValue} */
    const InvalidImplementationEntityValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityType} */
    const InvalidImplementationEntityType = 500;
    /** {@see ExceptionMessages::DuplicatedImplementationEntityValue} */
    const DuplicatedImplementationEntityValue = 500;



    //= GetCpes
    /** {@see ExceptionMessages::MissingCpeIDParam} */
    const MissingCpeIDParam = 500;
    /** {@see ExceptionMessages::MissingCpeIDValue} */
    const MissingCpeIDValue = 500;
    /** {@see ExceptionMessages::InvalidCpeIDType} */
    const InvalidCpeIDType = 500;
    /** {@see ExceptionMessages::InvalidCpeIDArray} */
    const InvalidCpeIDArray = 500;
    /** {@see ExceptionMessages::MissingCpeValue} */
    const MissingCpeValue = 500;
    /** {@see ExceptionMessages::MissingCpeParam} */
    const MissingCpeParam = 500;
    /** {@see ExceptionMessages::InvalidCpeValue} */
    const InvalidCpeValue = 500;
    /** {@see ExceptionMessages::InvalidCpeType} */
    const InvalidCpeType = 500;
    /** {@see ExceptionMessages::DuplicatedCpeValue} */
    const DuplicatedCpeValue = 500;



    //= GetLdaps
    /** {@see ExceptionMessages::MissingLdapIDParam} */
    const MissingLdapIDParam = 500;
    /** {@see ExceptionMessages::MissingLdapIDValue} */
    const MissingLdapIDValue = 500;
    /** {@see ExceptionMessages::InvalidLdapIDType} */
    const InvalidLdapIDType = 500;
    /** {@see ExceptionMessages::InvalidLdapIDArray} */
    const InvalidLdapIDArray = 500;
    /** {@see ExceptionMessages::MissingLdapValue} */
    const MissingLdapValue = 500;
    /** {@see ExceptionMessages::MissingLdapParam} */
    const MissingLdapParam = 500;
    /** {@see ExceptionMessages::InvalidLdapValue} */
    const InvalidLdapValue = 500;
    /** {@see ExceptionMessages::InvalidLdapType} */
    const InvalidLdapType = 500;
    /** {@see ExceptionMessages::DuplicatedLdapValue} */
    const DuplicatedLdapValue = 500;



    //= GetEduAdmins
    /** {@see ExceptionMessages::MissingEduAdminIDParam} */
    const MissingEduAdminIDParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminIDValue} */
    const MissingEduAdminIDValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminIDType} */
    const InvalidEduAdminIDType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminIDArray} */
    const InvalidEduAdminIDArray = 500;
    
    /** {@see ExceptionMessages::MissingEduAdminValue} */
    const MissingEduAdminValue = 500;
    /** {@see ExceptionMessages::MissingEduAdminParam} */
    const MissingEduAdminParam = 500;
    /** {@see ExceptionMessages::InvalidEduAdminValue} */
    const InvalidEduAdminValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminType} */
    const InvalidEduAdminType = 500;
 
    /** {@see ExceptionMessages::MissingEduAdminNameParam} */   
    const MissingEduAdminNameParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminNameValue} */
    const MissingEduAdminNameValue =500;
    /** {@see ExceptionMessages::InvalidEduAdminNameType} */
    const InvalidEduAdminNameType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminNameArray} */
    const InvalidEduAdminNameArray = 500;
    
    /** {@see ExceptionMessages::MissingEduAdminParentRdnParam} */
    const MissingEduAdminParentRdnParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminParentRdnValue} */
    const MissingEduAdminParentRdnValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminParentRdnType} */
    const InvalidEduAdminParentRdnType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminParentRdnArray} */
    const InvalidEduAdminParentRdnArray = 500;
    
    /** {@see ExceptionMessages::MissingEduAdminThirdLevelDnsParam} */
    const MissingEduAdminThirdLevelDnsParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminThirdLevelDnsValue} */
    const MissingEduAdminThirdLevelDnsValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminThirdLevelDnsType} */
    const InvalidEduAdminThirdLevelDnsType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminThirdLevelDnsArray} */
    const InvalidEduAdminThirdLevelDnsArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedEduAdminValue} */
    const DuplicatedEduAdminValue = 500;

    //= GetWorkerSpecializations
    /** {@see ExceptionMessages::MissingWorkerSpecializationIDParam} */
    const MissingWorkerSpecializationIDParam = 500;
    /** {@see ExceptionMessages::MissingWorkerSpecializationIDValue} */
    const MissingWorkerSpecializationIDValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationIDType} */
    const InvalidWorkerSpecializationIDType = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationIDArray} */
    const InvalidWorkerSpecializationIDArray = 500;
    /** {@see ExceptionMessages::MissingWorkerSpecializationValue} */
    const MissingWorkerSpecializationValue = 500;
    /** {@see ExceptionMessages::MissingWorkerSpecializationParam} */
    const MissingWorkerSpecializationParam = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationValue} */
    const InvalidWorkerSpecializationValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationType} */
    const InvalidWorkerSpecializationType = 500;
    /** {@see ExceptionMessages::DuplicatedWorkerSpecializationValue} */
    const DuplicatedWorkerSpecializationValue = 500;



    //= GetWorkerPositions
    /** {@see ExceptionMessages::MissingWorkerPositionIDParam} */
    const MissingWorkerPositionIDParam = 500;
    /** {@see ExceptionMessages::MissingWorkerPositionIDValue} */
    const MissingWorkerPositionIDValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionIDType} */
    const InvalidWorkerPositionIDType = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionIDArray} */
    const InvalidWorkerPositionIDArray = 500;
    /** {@see ExceptionMessages::MissingWorkerPositionValue} */
    const MissingWorkerPositionValue = 500;
    /** {@see ExceptionMessages::MissingWorkerPositionParam} */
    const MissingWorkerPositionParam = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionValue} */
    const InvalidWorkerPositionValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionType} */
    const InvalidWorkerPositionType = 500;
    /** {@see ExceptionMessages::DuplicatedWorkerPositionValue} */
    const DuplicatedWorkerPositionValue = 500;




    //= GetWorkerPositions
    /** {@see ExceptionMessages::MissingTransferAreaIDParam} */
    const MissingTransferAreaIDParam = 500;
    /** {@see ExceptionMessages::MissingTransferAreaIDValue} */
    const MissingTransferAreaIDValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaIDType} */
    const InvalidTransferAreaIDType = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaIDArray} */
    const InvalidTransferAreaIDArray = 500;
    /** {@see ExceptionMessages::MissingTransferAreaValue} */
    const MissingTransferAreaValue = 500;
    /** {@see ExceptionMessages::MissingTransferAreaParam} */
    const MissingTransferAreaParam = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaValue} */
    const InvalidTransferAreaValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaType} */
    const InvalidTransferAreaType = 500;
    /** {@see ExceptionMessages::DuplicatedTransferAreaValue} */
    const DuplicatedTransferAreaValue = 500;



    //= GetWorkerPositions
    /** {@see ExceptionMessages::MissingMunicipalityIDParam} */
    const MissingMunicipalityIDParam = 500;
    /** {@see ExceptionMessages::MissingMunicipalityIDValue} */
    const MissingMunicipalityIDValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityIDType} */
    const InvalidMunicipalityIDType = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityIDArray} */
    const InvalidMunicipalityIDArray = 500;
    /** {@see ExceptionMessages::MissingMunicipalityValue} */
    const MissingMunicipalityValue = 500;
    /** {@see ExceptionMessages::MissingMunicipalityParam} */
    const MissingMunicipalityParam = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityValue} */
    const InvalidMunicipalityValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityType} */
    const InvalidMunicipalityType = 500;
    /** {@see ExceptionMessages::DuplicatedMunicipalityValue} */
    const DuplicatedMunicipalityValue = 500;



    //= GetWorkers
    /** {@see ExceptionMessages::MissingWorkerIDParam} */
    const MissingWorkerIDParam = 500;
    /** {@see ExceptionMessages::MissingWorkerIDValue} */
    const MissingWorkerIDValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerIDType} */
    const InvalidWorkerIDType = 500;
    /** {@see ExceptionMessages::InvalidWorkerIDArray} */
    const InvalidWorkerIDArray = 500;

    /** {@see ExceptionMessages::MissingWorkerParam} */
    const MissingWorkerParam = 500;
    /** {@see ExceptionMessages::MissingWorkerValue} */
    const MissingWorkerValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerType} */
    const InvalidWorkerType = 500;
    /** {@see ExceptionMessages::InvalidWorkerValue} */
    const InvalidWorkerValue = 500;
    /** {@see ExceptionMessages::DuplicatedWorkerValue} */
    const DuplicatedWorkerValue = 500;

    /** {@see ExceptionMessages::MissingWorkerRegistryNoValue} */
    const MissingWorkerRegistryNoValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerRegistryNoType} */
    const InvalidWorkerRegistryNoType = 500;
    /** {@see ExceptionMessages::MissingWorkerRegistryNoParam} */
    const MissingWorkerRegistryNoParam = 500;
    /** {@see ExceptionMessages::DuplicatedWorkerRegistryNoValue} */
    const DuplicatedWorkerRegistryNoValue = 500;

    /** {@see ExceptionMessages::MissingWorkerLastnameValue} */
    const MissingWorkerLastnameValue = 500;
    /** {@see ExceptionMessages::MissingWorkerFirstnameValue} */
    const MissingWorkerFirstnameValue = 500;



    //= Circuits
    /** {@see ExceptionMessages::MissingCircuitIDParam} */
    const MissingCircuitIDParam = 500;
    /** {@see ExceptionMessages::MissingCircuitIDValue} */
    const MissingCircuitIDValue = 500;
    /** {@see ExceptionMessages::InvalidCircuitIDType} */
    const InvalidCircuitIDType = 500;
    /** {@see ExceptionMessages::InvalidCircuitIDArray} */
    const InvalidCircuitIDArray = 500;
    /** {@see ExceptionMessages::MissingCircuitValue} */
    const MissingCircuitValue = 500;
    /** {@see ExceptionMessages::MissingCircuitParam} */
    const MissingCircuitParam = 500;
    /** {@see ExceptionMessages::InvalidCircuitValue} */
    const InvalidCircuitValue = 500;
    /** {@see ExceptionMessages::InvalidCircuitType} */
    const InvalidCircuitType = 500;
    /** {@see ExceptionMessages::DuplicatedCircuitValue} */
    const DuplicatedCircuitValue = 500;

        /** {@see ExceptionMessages::MissingCircuitPhoneNumberParam} */
    const MissingCircuitPhoneNumberParam = 500;
    /** {@see ExceptionMessages::MissingCircuitPhoneNumberValue} */
    const MissingCircuitPhoneNumberValue = 500;
    /** {@see ExceptionMessages::InvalidCircuitPhoneNumberType} */
    const InvalidCircuitPhoneNumberType = 500;
    /** {@see ExceptionMessages::InvalidCircuitPhoneNumberArray} */
    const InvalidCircuitPhoneNumberArray = 500;

    /** {@see ExceptionMessages::InvalidCircuitStateType} */
    const InvalidCircuitStateType = 500;
    /** {@see ExceptionMessages::InvalidCircuitActivatedDateType} */
    const InvalidCircuitActivatedDateType = 500;
    /** {@see ExceptionMessages::InvalidCircuitUpdatedDateType} */
    const InvalidCircuitUpdatedDateType = 500;
    /** {@see ExceptionMessages::InvalidCircuitDeactivatedDateType} */
    const InvalidCircuitDeactivatedDateType = 500;
    /** {@see ExceptionMessages::InvalidCircuitBandwidthType} */
    const InvalidCircuitBandwidthType = 500;
    /** {@see ExceptionMessages::InvalidCircuitReadspeedhType} */
    const InvalidCircuitReadspeedhType = 500;
    /** {@see ExceptionMessages::InvalidCircuitPaidByPsdType} */
    const InvalidCircuitPaidByPsdType = 500;
   
    //= ExtLogEntries
    
    /** {@see ExceptionMessages::InvalidExtLogEntryIDType} */
    const InvalidExtLogEntryIDType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryActionType} */
    const InvalidExtLogEntryActionType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryLoggedAtType} */
    const InvalidExtLogEntryLoggedAtType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryObjectIdType} */
    const InvalidExtLogEntryObjectIdType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryObjectClassType} */
    const InvalidExtLogEntryObjectClassType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryVersionType} */
    const InvalidExtLogEntryVersionType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryDataType} */
    const InvalidExtLogEntryDataType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryUsernameType} */
    const InvalidExtLogEntryUsernameType = 500;
    /** {@see ExceptionMessages::InvalidExtLogEntryIpType} */
    const InvalidExtLogEntryIpType = 500;
    
//##########################################################################################################################
// IP/DNS
//##########################################################################################################################
    
    //======================================================================================================================
    // =UnitDns
    //======================================================================================================================
     /** {@see ExceptionMessages::MissingUnitDnsIDParam} */
    const MissingUnitDnsIDParam = 500;
     /** {@see ExceptionMessages::MissingUnitDnsIDValue} */
    const MissingUnitDnsIDValue = 500;
     /** {@see ExceptionMessages::InvalidUnitDnsIDType} */
    const InvalidUnitDnsIDType = 500;
     /** {@see ExceptionMessages::InvalidUnitDnsIDArray} */
    const InvalidUnitDnsIDArray = 500; 
    
     /** {@see ExceptionMessages::MissingUnitDnsParam} */
    const MissingUnitDnsParam = 500;   
     /** {@see ExceptionMessages::MissingUnitDnsValue} */
    const MissingUnitDnsValue = 500;
     /** {@see ExceptionMessages::InvalidUnitDnsValue} */
    const InvalidUnitDnsValue = 500;
     /** {@see ExceptionMessages::InvalidUnitDnsType} */
    const InvalidUnitDnsType = 500;
     /** {@see ExceptionMessages::InvalidUnitDnsArray} */
    const InvalidUnitDnsArray = 500; 
    
     /** {@see ExceptionMessages::DuplicatedUnitDnsValue} */
    const DuplicatedUnitDnsValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitExtDnsValue} */
    const DuplicatedUnitExtDnsValue = 500;
    
     /** {@see ExceptionMessages::MissingUnitExtDnsParam} */
    const MissingUnitExtDnsParam = 500;
     /** {@see ExceptionMessages::MissingUnitExtDnsValue} */
    const MissingUnitExtDnsValue = 500;
     /** {@see ExceptionMessages::InvalidUnitExtDnsType} */
    const InvalidUnitExtDnsType = 500;
     /** {@see ExceptionMessages::InvalidUnitExtDnsArray} */
    const InvalidUnitExtDnsArray = 500;
    
    //======================================================================================================================
    // =UnitNetworkSubnetTypes
    //======================================================================================================================
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetTypeIDParam} */
    const MissingUnitNetworkSubnetTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetTypeIDValue} */
    const MissingUnitNetworkSubnetTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeIDType} */
    const InvalidUnitNetworkSubnetTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeIDArray} */
    const InvalidUnitNetworkSubnetTypeIDArray = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetTypeValue} */
    const MissingUnitNetworkSubnetTypeValue = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetTypeParam} */
    const MissingUnitNetworkSubnetTypeParam = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeValue} */
    const InvalidUnitNetworkSubnetTypeValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeType} */
    const InvalidUnitNetworkSubnetTypeType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeArray} */
    const InvalidUnitNetworkSubnetTypeArray = 500;
    /** {@see ExceptionMessages::DuplicatedUnitNetworkSubnetTypeValue} */
    const DuplicatedUnitNetworkSubnetTypeValue = 500;
    /** {@see ExceptionMessages::UsedUnitNetworkSubnetTypeByUnitNetworkSubnets} */
    const UsedUnitNetworkSubnetTypeByUnitNetworkSubnets = 500;
    
    //======================================================================================================================
    // =UnitNetworkSubnets
    //======================================================================================================================
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetIDParam} */
    const MissingUnitNetworkSubnetIDParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetIDValue} */
    const MissingUnitNetworkSubnetIDValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetIDType} */
    const InvalidUnitNetworkSubnetIDType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetIDArray} */
    const InvalidUnitNetworkSubnetIDArray = 500; 
    
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetParam} */
    const MissingUnitNetworkSubnetParam = 500;   
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetValue} */
    const MissingUnitNetworkSubnetValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetValue} */
    const InvalidUnitNetworkSubnetValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetType} */
    const InvalidUnitNetworkSubnetType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetArray} */
    const InvalidUnitNetworkSubnetArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedUnitNetworkSubnetValue} */
    const DuplicatedUnitNetworkSubnetValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitNetworkSubnetNameValue} */
    const DuplicatedUnitNetworkSubnetNameValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitNetworkSubnetIpValue} */
    const DuplicatedUnitNetworkSubnetIpValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitNetworkSubnetMaskValue} */
    const DuplicatedUnitNetworkSubnetMaskValue = 500;
    /** {@see ExceptionMessages::UsedUnitNetworkSubnetByUnitNetworkObjects} */
    const UsedUnitNetworkSubnetByUnitNetworkObjects = 500;
    /** {@see ExceptionMessages::UsedUnitNetworkSubnetByConnections} */
    const UsedUnitNetworkSubnetByConnections = 500;
    
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetNameParam} */
    const MissingUnitNetworkSubnetNameParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetNameValue} */
    const MissingUnitNetworkSubnetNameValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetNameType} */
    const InvalidUnitNetworkSubnetNameType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetNameArray} */
    const InvalidUnitNetworkSubnetNameArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetΙpParam} */
    const MissingUnitNetworkSubnetΙpParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetIpValue} */
    const MissingUnitNetworkSubnetIpValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetIpType} */
    const InvalidUnitNetworkSubnetIpType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetIpArray} */
    const InvalidUnitNetworkSubnetIpArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetDefaultRouterParam} */
    const MissingUnitNetworkSubnetDefaultRouterParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetDefaultRouterValue} */
    const MissingUnitNetworkSubnetDefaultRouterValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterType} */
    const InvalidUnitNetworkSubnetDefaultRouterType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterArray} */
    const InvalidUnitNetworkSubnetDefaultRouterArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetMaskParam} */
    const MissingUnitNetworkSubnetMaskParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkSubnetMaskValue} */
    const MissingUnitNetworkSubnetMaskValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetMaskType} */
    const InvalidUnitNetworkSubnetMaskType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkSubnetMaskArray} */
    const InvalidUnitNetworkSubnetMaskArray = 500;

    //======================================================================================================================
    // =UnitNetworkObjects
    //======================================================================================================================
    /** {@see ExceptionMessages::MissingUnitNetworkObjectIDParam} */
    const MissingUnitNetworkObjectIDParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkObjectIDValue} */
    const MissingUnitNetworkObjectIDValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectIDType} */
    const InvalidUnitNetworkObjectIDType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectIDArray} */
    const InvalidUnitNetworkObjectIDArray = 500; 
    /** {@see ExceptionMessages::MissingUnitNetworkObjectParam} */
    const MissingUnitNetworkObjectParam = 500;   
    /** {@see ExceptionMessages::MissingUnitNetworkObjectValue} */
    const MissingUnitNetworkObjectValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectValue} */
    const InvalidUnitNetworkObjectValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectType} */
    const InvalidUnitNetworkObjectType = 500;
    
    /** {@see ExceptionMessages::DuplicatedUnitNetworkObjectValue} */   
    const DuplicatedUnitNetworkObjectValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitNetworkObjectIpValue} */ 
    const DuplicatedUnitNetworkObjectIpValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitNetworkObjectDnsNameValue} */ 
    const DuplicatedUnitNetworkObjectDnsNameValue = 500;
    
    
    /** {@see ExceptionMessages::MissingUnitNetworkObjectIpParam} */
    const MissingUnitNetworkObjectIpParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkObjectIpValue} */
    const MissingUnitNetworkObjectIpValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectIpType} */
    const InvalidUnitNetworkObjectIpType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectIpArray} */
    const InvalidUnitNetworkObjectIpArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitNetworkObjectDnsNameParam} */
    const MissingUnitNetworkObjectDnsNameParam = 500;
    /** {@see ExceptionMessages::MissingUnitNetworkObjectDnsNameValue} */
    const MissingUnitNetworkObjectDnsNameValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectDnsNameType} */
    const InvalidUnitNetworkObjectDnsNameType = 500;
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectDnsNameArray} */
    const InvalidUnitNetworkObjectDnsNameArray = 500;
    
    /** {@see ExceptionMessages::InvalidUnitNetworkObjectDescriptionType} */
    const InvalidUnitNetworkObjectDescriptionType = 500;
      
    //======================================================================================================================
    // =ConnectionUnitNetworkSubnets
    //======================================================================================================================
    /** {@see ExceptionMessages::MissingConnectionUnitNetworkOSubnetIDParam} */
    const MissingConnectionUnitNetworkOSubnetIDParam = 500;
    /** {@see ExceptionMessages::MissingConnectionUnitNetworkOSubnetIDValue} */
    const MissingConnectionUnitNetworkOSubnetIDValue = 500;
    /** {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDType} */
    const InvalidConnectionUnitNetworkOSubnetIDType = 500;
    /** {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDArray} */
    const InvalidConnectionUnitNetworkOSubnetIDArray = 500; 
    
    /** {@see ExceptionMessages::MissingConnectionUnitNetworkOSubnetParam} */
    const MissingConnectionUnitNetworkOSubnetParam = 500;   
    /** {@see ExceptionMessages::MissingConnectionUnitNetworkOSubnetValue} */
    const MissingConnectionUnitNetworkOSubnetValue = 500;
    /** {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetValue} */
    const InvalidConnectionUnitNetworkOSubnetValue = 500;
    /** {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetType} */
    const InvalidConnectionUnitNetworkOSubnetType = 500;
    /** {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetArray} */
    const InvalidConnectionUnitNetworkOSubnetArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedConnectionUnitNetworkOSubnetValue} */
    const DuplicatedConnectionUnitNetworkOSubnetValue = 500;
    /** {@see ExceptionMessages::DifferenceConnectionUnitNetworkOSubnetMMIdValue} */  
    const DifferenceConnectionUnitNetworkOSubnetMMIdValue = 500;
    
    //= GetUnits
    /** {@see ExceptionMessages::MissingUnitMMIDParam} */
    const MissingUnitMMIDParam = 500;
    /** {@see ExceptionMessages::MissingUnitMMIDValue} */
    const MissingUnitMMIDValue = 500;
    /** {@see ExceptionMessages::InvalidUnitMMIDType} */
    const InvalidUnitMMIDType = 500;
    /** {@see ExceptionMessages::InvalidUnitMMIDArray} */
    const InvalidUnitMMIDArray = 500;
    /** {@see ExceptionMessages::InvalidUnitMMIDValue} */
    const InvalidUnitMMIDValue = 500;   //EXTRA only for ID REFERENCE
    
    /** {@see ExceptionMessages::MissingUnitValue} */
    const MissingUnitValue = 500;
    /** {@see ExceptionMessages::MissingUnitParam} */
    const MissingUnitParam = 500;
    /** {@see ExceptionMessages::InvalidUnitValue} */
    const InvalidUnitValue = 500;
    /** {@see ExceptionMessages::InvalidUnitType} */
    const InvalidUnitType = 500;
     /** {@see ExceptionMessages::InvalidUnitArray} */   
    const InvalidUnitArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedUnitValue} */
    const DuplicatedUnitValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitUniqueValue} */
    const DuplicatedUnitUniqueValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitMMIDUniqueValue} */
    const DuplicatedUnitMMIDUniqueValue = 500;  //EXTRA only for ID REFERENCE

    /** {@see ExceptionMessages::DuplicatedUnitValue} */
    const MissingRegistryNoValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitValue} */
    const MissingRegistryNoParam = 500;
    /** {@see ExceptionMessages::DuplicatedUnitValue} */
    const InvalidRegistryNoType = 500;

    /** {@see ExceptionMessages::MissingHostUnitValue} */
    const MissingHostUnitValue = 500;
    /** {@see ExceptionMessages::MissingHostUnitParam} */
    const MissingHostUnitParam = 500;
    /** {@see ExceptionMessages::InvalidHostUnitValue} */
    const InvalidHostUnitValue = 500;
    /** {@see ExceptionMessages::InvalidHostUnitType} */
    const InvalidHostUnitType = 500;

    /** {@see ExceptionMessages::MissingGuestUnitValue} */
    const MissingGuestUnitValue = 500;
    /** {@see ExceptionMessages::MissingGuestUnitParam} */
    const MissingGuestUnitParam = 500;
    /** {@see ExceptionMessages::InvalidGuestUnitValue} */
    const InvalidGuestUnitValue = 500;
    /** {@see ExceptionMessages::InvalidGuestUnitType} */
    const InvalidGuestUnitType = 500;

    //= Levels==================================================================
    
    /** {@see ExceptionMessages::MissingLevelIDParam} */
    const MissingLevelIDParam = 500;
    /** {@see ExceptionMessages::MissingLevelIDValue} */
    const MissingLevelIDValue = 500;
    /** {@see ExceptionMessages::InvalidLevelIDType} */
    const InvalidLevelIDType = 500;
    /** {@see ExceptionMessages::InvalidLevelIDArray} */
    const InvalidLevelIDArray = 500;
    /** {@see ExceptionMessages::InvalidLevelIDValue} */
    const InvalidLevelIDValue = 500;   //EXTRA only for ID REFERENCE
    
    /** {@see ExceptionMessages::MissingLevelValue} */
    const MissingLevelValue = 500;
    /** {@see ExceptionMessages::MissingLevelParam} */
    const MissingLevelParam = 500;
    /** {@see ExceptionMessages::InvalidLevelValue} */
    const InvalidLevelValue = 500;
    /** {@see ExceptionMessages::InvalidLevelType} */
    const InvalidLevelType = 500;
    /** {@see ExceptionMessages::InvalidLevelArray} */   
    const InvalidLevelArray = 500;
    
    /** {@see ExceptionMessages::MissingLevelNameParam} */
    const MissingLevelNameParam = 500;
    /** {@see ExceptionMessages::MissingLevelNameValue} */
    const MissingLevelNameValue = 500;
    /** {@see ExceptionMessages::InvalidLevelNameType} */
    const InvalidLevelNameType = 500;
    /** {@see ExceptionMessages::InvalidLevelNameArray} */
    const InvalidLevelNameArray = 500;
    
    /** {@see ExceptionMessages::MissingLevelGroupsCountParam} */
    const MissingLevelGroupsCountParam = 500;   
    /** {@see ExceptionMessages::MissingLevelGroupsCountValue} */
    const MissingLevelGroupsCountValue = 500;  
    /** {@see ExceptionMessages::InvalidLevelGroupsCountType} */
    const InvalidLevelGroupsCountType = 500;
    /** {@see ExceptionMessages::InvalidLevelGroupsCountArray} */
    const InvalidLevelGroupsCountArray = 500;
    
    /** {@see ExceptionMessages::MissingLevelStudentsCountParam} */
    const MissingLevelStudentsCountParam = 500;
    /** {@see ExceptionMessages::MissingLevelStudentsCountValue} */
    const MissingLevelStudentsCountValue = 500;
    /** {@see ExceptionMessages::InvalidLevelStudentsCountType} */
    const InvalidLevelStudentsCountType = 500;
    /** {@see ExceptionMessages::InvalidLevelStudentsCountArray} */
    const InvalidLevelStudentsCountArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedLevelValue} */
    const DuplicatedLevelValue = 500;
     /** {@see ExceptionMessages::DuplicatedLevelUniqueValue} */ 
    const DuplicatedLevelUniqueValue = 500;
    /** {@see ExceptionMessages::DuplicatedLevelIDUniqueValue} */
    const DuplicatedLevelIDUniqueValue = 500;  //EXTRA only for ID REFERENCE

    //= Groups==================================================================
    
    /** {@see ExceptionMessages::MissingGroupIDParam} */
    const MissingGroupIDParam = 500;
    /** {@see ExceptionMessages::MissingGroupIDValue} */
    const MissingGroupIDValue = 500;
    /** {@see ExceptionMessages::InvalidGroupIDType} */
    const InvalidGroupIDType = 500;
    /** {@see ExceptionMessages::InvalidGroupIDArray} */
    const InvalidGroupIDArray = 500;
    
    /** {@see ExceptionMessages::MissingGroupValue} */
    const MissingGroupValue = 500;
    /** {@see ExceptionMessages::MissingGroupParam} */
    const MissingGroupParam = 500;
    /** {@see ExceptionMessages::InvalidGroupValue} */
    const InvalidGroupValue = 500;
    /** {@see ExceptionMessages::InvalidGroupType} */
    const InvalidGroupType = 500;
    /** {@see ExceptionMessages::InvalidGroupArray} */  
    const InvalidGroupArray = 500;
    
    /** {@see ExceptionMessages::MissingGroupNameParam} */ 
    const MissingGroupNameParam = 500;
    /** {@see ExceptionMessages::MissingGroupNameValue} */ 
    const MissingGroupNameValue = 500;
    /** {@see ExceptionMessages::InvalidGroupNameType} */
    const InvalidGroupNameType = 500;
    /** {@see ExceptionMessages::InvalidGroupNameArray} */
    const InvalidGroupNameArray = 500;
    
    /** {@see ExceptionMessages::MissingGroupStudentsCountParam} */
    const MissingGroupStudentsCountParam = 500;
    /** {@see ExceptionMessages::MissingGroupStudentsCountValue} */
    const MissingGroupStudentsCountValue = 500;
    /** {@see ExceptionMessages::InvalidGroupStudentsCountType} */
    const InvalidGroupStudentsCountType = 500;
    /** {@see ExceptionMessages::InvalidGroupStudentsCountArray} */
    const InvalidGroupStudentsCountArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedGroupValue} */
    const DuplicatedGroupValue = 500;
     /** {@see ExceptionMessages::DuplicatedGroupUniqueValue} */ 
    const DuplicatedGroupUniqueValue = 500;



    //= Connections
    /** {@see ExceptionMessages::MissingConnectionIDParam} */
    const MissingConnectionIDParam = 500;
    /** {@see ExceptionMessages::MissingConnectionIDValue} */
    const MissingConnectionIDValue = 500;
    /** {@see ExceptionMessages::InvalidConnectionIDType} */
    const InvalidConnectionIDType = 500;
    /** {@see ExceptionMessages::InvalidConnectionIDArray} */
    const InvalidConnectionIDArray = 500;
 
    /** {@see ExceptionMessages::MissingConnectionParam} */
    const MissingConnectionParam = 500;
    /** {@see ExceptionMessages::MissingConnectionValue} */
    const MissingConnectionValue = 500;
    /** {@see ExceptionMessages::InvalidConnectionValue} */
    const InvalidConnectionValue = 500;
    /** {@see ExceptionMessages::InvalidConnectionType} */
    const InvalidConnectionType = 500;
    /** {@see ExceptionMessages::InvalidConnectionArray} */
    const InvalidConnectionArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedConnectionCircuitValue} */
    const DuplicatedConnectionCircuitValue = 500;
    /** {@see ExceptionMessages::DuplicatedConnectionLdapValue} */
    const DuplicatedConnectionLdapValue = 500;
    /** {@see ExceptionMessages::DifferenceConnectionCircuitMMIdValue} */
    const DifferenceConnectionCircuitMMIdValue = 500;/**
    /** {@see ExceptionMessages::DifferenceConnectionLdapMMIdValue} */
    const DifferenceConnectionLdapMMIdValue = 500;
    /** {@see ExceptionMessages::DifferenceConnectionCpeMMIdValue} */
    const DifferenceConnectionCpeMMIdValue = 500;
    /** {@see ExceptionMessages::BanConnectionCircuitStatusValue} */
    const BanConnectionCircuitStatusValue = 500;
    /** {@see ExceptionMessages::UsedConnectionByUnitNetworkSubnets} */
    const UsedConnectionByUnitNetworkSubnets = 500;
    
    // =UnitWorkers
    /** {@see ExceptionMessages::MissingUnitWorkerIDParam} */
    const MissingUnitWorkerIDParam = 500;
    /** {@see ExceptionMessages::MissingUnitWorkerIDValue} */
    const MissingUnitWorkerIDValue = 500;
    /** {@see ExceptionMessages::InvalidUnitWorkerIDType} */
    const InvalidUnitWorkerIDType = 500;
    /** {@see ExceptionMessages::InvalidUnitWorkerIDArray} */
    const InvalidUnitWorkerIDArray = 500; 
    
    /** {@see ExceptionMessages::MissingUnitWorkerParam} */
    const MissingUnitWorkerParam = 500;
    /** {@see ExceptionMessages::MissingUnitWorkerValue} */
    const MissingUnitWorkerValue = 500;
    /** {@see ExceptionMessages::InvalidUnitWorkerValue} */
    const InvalidUnitWorkerValue = 500;
    /** {@see ExceptionMessages::InvalidUnitWorkerType} */
    const InvalidUnitWorkerType = 500;
    /** {@see ExceptionMessages::InvalidUnitWorkerArray} */
    const InvalidUnitWorkerArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedUnitWorkerValue} */
    const DuplicatedUnitWorkerValue = 500;




    /** {@see ExceptionMessages::MissingMMIdParam} */
    const MissingMMIdParam = 500;
    /** {@see ExceptionMessages::MissingMMIdValue} */
    const MissingMMIdValue = 500;
    /** {@see ExceptionMessages::InvalidMMIdType} */
    const InvalidMMIdType  = 500;
    /** {@see ExceptionMessages::InvalidMMIdValue} */
    const InvalidMMIdValue = 500;

    /** {@see ExceptionMessages::InvalidIpNatMaskType} */
    const InvalidIpNatMaskType = 500;
    /** {@see ExceptionMessages::InvalidIpLanMaskType} */
    const InvalidIpLanMaskType = 500;

    /** {@see ExceptionMessages::InvalidSpecialNameType} */
    const InvalidSpecialNameType = 500;
    /** {@see ExceptionMessages::InvalidPhoneNumberType} */
    const InvalidPhoneNumberType = 500;
    /** {@see ExceptionMessages::InvalidFaxNumberType} */
    const InvalidFaxNumberType = 500;
    /** {@see ExceptionMessages::InvalidEmailType} */
    const InvalidEmailType = 500;
    /** {@see ExceptionMessages::InvalidStreetAddressType} */
    const InvalidStreetAddressType = 500;
    /** {@see ExceptionMessages::InvalidPostalCodeType} */
    const InvalidPostalCodeType = 500;
    /** {@see ExceptionMessages::InvalidTaxNumberType} */
    const InvalidTaxNumberType = 500;
    /** {@see ExceptionMessages::InvalidAreaTeamNumberType} */
    const InvalidAreaTeamNumberType = 500;
    /** {@see ExceptionMessages::InvalidLevelsCountType} */
    const InvalidLevelsCountType = 500;
    /** {@see ExceptionMessages::InvalidGroupsCountType} */
    const InvalidGroupsCountType = 500;
    /** {@see ExceptionMessages::InvalidStudentsCountType} */
    const InvalidStudentsCountType = 500;
    /** {@see ExceptionMessages::InvalidLatitudeType} */
    const InvalidLatitudeType = 500;
    /** {@see ExceptionMessages::InvalidLongitudeType} */
    const InvalidLongitudeType = 500;
    /** {@see ExceptionMessages::InvalidPositioningType} */
    const InvalidPositioningType = 500;
    /** {@see ExceptionMessages::InvalidLastUpdateType} */
    const InvalidLastUpdateType = 500;
    /** {@see ExceptionMessages::InvalidLastSyncType} */
    const InvalidLastSyncType = 500;
    /** {@see ExceptionMessages::InvalidFekType} */
    const InvalidFekType = 500;
    /** {@see ExceptionMessages::InvalidCommentsType} */
    const InvalidCommentsType = 500;
   
    /** {@see ExceptionMessages::InvalidWorkerLastnameType} */
    const InvalidWorkerLastnameType = 500;
    /** {@see ExceptionMessages::InvalidWorkerFirstnameType} */
    const InvalidWorkerFirstnameType = 500;
    /** {@see ExceptionMessages::InvalidWorkerFathernameType} */
    const InvalidWorkerFathernameType = 500;
    /** {@see ExceptionMessages::InvalidWorkerSexType} */
    const InvalidWorkerSexType = 500;
    /** {@see ExceptionMessages::InvalidWorkerTaxNumberType} */
    const InvalidWorkerTaxNumberType = 500;

    /** {@see ExceptionMessages::MissingConnectivityTypeValue} */
    const MissingConnectivityTypeValue = 500;
    /** {@see ExceptionMessages::MissingConnectivityTypeParam} */
    const MissingConnectivityTypeParam = 500;
    /** {@see ExceptionMessages::InvalidConnectivityTypeValue} */
    const InvalidConnectivityTypeValue = 500;
    /** {@see ExceptionMessages::InvalidConnectivityTypeType} */
    const InvalidConnectivityTypeType = 500;
    /** {@see ExceptionMessages::DuplicatedConnectivityTypeValue} */
    const DuplicatedConnectivityTypeValue = 500;
    /** {@see ExceptionMessages::MissingConnectivityTypeIDParam} */
    const MissingConnectivityTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingConnectivityTypeIDValue} */
    const MissingConnectivityTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidConnectivityTypeIDType} */
    const InvalidConnectivityTypeIDType = 500;

     /** {@see ExceptionMessages::MissingHostMMIdValue} */
    const MissingHostMMIdValue = 500;
    /** {@see ExceptionMessages::InvalidHostMMIdType} */
    const InvalidHostMMIdType  = 500;
    /** {@see ExceptionMessages::InvalidHostMMIdValue} */
    const InvalidHostMMIdValue = 500;
    /** {@see ExceptionMessages::MissingGuestMMIdValue} */
    const MissingGuestMMIdValue = 500;
    /** {@see ExceptionMessages::InvalidGuestMMIdType} */
    const InvalidGuestMMIdType  = 500;
    /** {@see ExceptionMessages::InvalidGuestMMIdValue} */
    const InvalidGuestMMIdValue = 500;

    /** {@see ExceptionMessages::MissingRelationIDValue} */
    const MissingRelationIDValue = 500;
    /** {@see ExceptionMessages::InvalidRelationIDType} */
    const InvalidRelationIDType  = 500;
    /** {@see ExceptionMessages::InvalidRelationValue} */
    const InvalidRelationValue  = 500;    
    /** {@see ExceptionMessages::DuplicatedRelationValue} */
    const DuplicatedRelationValue  = 500;
  
}

?>