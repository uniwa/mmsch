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
    /** {@see ExceptionMessages::NoErrorsImportUnit} */
    const NoErrorsImportUnit = 200;
    /** {@see ExceptionMessages::NoErrorsUpdateUnit} */
    const NoErrorsUpdateUnit = 200;



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




    //= GetUnitDns
   /** {@see ExceptionMessages::InvalidUnitDNSType} */
    const InvalidUnitDNSType = 500;
   /** {@see ExceptionMessages::InvalidExtUnitDnsType} */
    const InvalidExtUnitDnsType = 500;
   /** {@see ExceptionMessages::InvalidUnitUIDType} */
    const InvalidUnitUIDType = 500;


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
 
    
    
    
    
    
    
    
    

    

    
//= TaxOffices==================================================================
    
    /** {@see ExceptionMessages::MissingTaxOfficeIDParam} */
    const MissingTaxOfficeIDParam = 500;
    /** {@see ExceptionMessages::MissingTaxOfficeIDValue} */
    const MissingTaxOfficeIDValue = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeIDType} */
    const InvalidTaxOfficeIDType = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeIDArray} */
    const InvalidTaxOfficeIDArray = 500;
    
    /** {@see ExceptionMessages::MissingTaxOfficeParam} */
    const MissingTaxOfficeParam = 500;
    /** {@see ExceptionMessages::MissingTaxOfficeValue} */
    const MissingTaxOfficeValue = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeValue} */
    const InvalidTaxOfficeValue = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeType} */
    const InvalidTaxOfficeType = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeArray} */
    const InvalidTaxOfficeArray = 500;
     
    /** {@see ExceptionMessages::MissingTaxOfficeNameParam} */
    const MissingTaxOfficeNameParam = 500;
    /** {@see ExceptionMessages::MissingTaxOfficeNameValue} */
    const MissingTaxOfficeNameValue = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeNameType} */
    const InvalidTaxOfficeNameType = 500;
    /** {@see ExceptionMessages::InvalidTaxOfficeNameArray} */
    const InvalidTaxOfficeNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedTaxOfficeValue} */
    const DuplicatedTaxOfficeValue = 500;    
    /** {@see ExceptionMessages::DuplicatedTaxOfficeUniqueValue} */
    const DuplicatedTaxOfficeUniqueValue = 500;  
    /** {@see ExceptionMessages::UsedTaxOfficeByUnits} */
    const UsedTaxOfficeByUnits = 500;
    /** {@see ExceptionMessages::UsedTaxOfficeBySchoolCommittees} */
    const UsedTaxOfficeBySchoolCommittees = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelTaxOfficeValue} */
        const DuplicateDelTaxOfficeValue = 500;
        /** {@see ExceptionMessages::NotFoundDelTaxOfficeValue} */
        const NotFoundDelTaxOfficeValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesTaxOfficeUnits} */
        const ReferencesTaxOfficeUnits = 500;
        /** {@see ExceptionMessages::ReferencesTaxOfficeSchoolCommittees} */
        const ReferencesTaxOfficeSchoolCommittees = 500;
    
//= SpecialTypes================================================================
    
    /** {@see ExceptionMessages::MissingSpecialTypeIDParam} */
    const MissingSpecialTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingSpecialTypeIDValue} */
    const MissingSpecialTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeIDType} */
    const InvalidSpecialTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeIDArray} */
    const InvalidSpecialTypeIDArray = 500;
    
    /** {@see ExceptionMessages::MissingSpecialTypeParam} */
    const MissingSpecialTypeParam = 500;
    /** {@see ExceptionMessages::MissingSpecialTypeValue} */
    const MissingSpecialTypeValue = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeValue} */
    const InvalidSpecialTypeValue = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeType} */
    const InvalidSpecialTypeType = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeArray} */
    const InvalidSpecialTypeArray = 500;
     
    /** {@see ExceptionMessages::MissingSpecialTypeNameParam} */
    const MissingSpecialTypeNameParam = 500; 
    /** {@see ExceptionMessages::MissingSpecialTypeNameValue} */
    const MissingSpecialTypeNameValue = 500;  
    /** {@see ExceptionMessages::InvalidSpecialTypeNameType} */
    const InvalidSpecialTypeNameType = 500;
    /** {@see ExceptionMessages::InvalidSpecialTypeNameArray} */
    const InvalidSpecialTypeNameArray =  500;
    
    /** {@see ExceptionMessages::DuplicatedSpecialTypeValue} */
    const DuplicatedSpecialTypeValue = 500;
    /** {@see ExceptionMessages::DuplicatedSpecialTypeUniqueValue} */
    const DuplicatedSpecialTypeUniqueValue =  500;
    /** {@see ExceptionMessages::UsedSpecialTypeByUnits} */
    const UsedSpecialTypeByUnits =  500;
    /** {@see ExceptionMessages::UsedSpecialTypeBySyncTypes} */
    const UsedSpecialTypeBySyncTypes = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelSpecialTypeValue} */
        const DuplicateDelSpecialTypeValue = 500;
        /** {@see ExceptionMessages::NotFoundDelSpecialTypeValue} */
        const NotFoundDelSpecialTypeValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesSpecialTypeUnits} */
        const ReferencesSpecialTypeUnits = 500;
        /** {@see ExceptionMessages::ReferencesSpecialTypeSyncTypes} */
        const ReferencesSpecialTypeSyncTypes = 500;
  
//= LegalCharacters=============================================================
    
    /** {@see ExceptionMessages::MissingLegalCharacterIDParam} */
    const MissingLegalCharacterIDParam = 500;
    /** {@see ExceptionMessages::MissingLegalCharacterIDValue} */
    const MissingLegalCharacterIDValue = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterIDType} */
    const InvalidLegalCharacterIDType = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterIDArray} */
    const InvalidLegalCharacterIDArray = 500;
    
    /** {@see ExceptionMessages::MissingLegalCharacterParam} */
    const MissingLegalCharacterParam = 500;
    /** {@see ExceptionMessages::MissingLegalCharacterValue} */
    const MissingLegalCharacterValue = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterValue} */
    const InvalidLegalCharacterValue = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterType} */
    const InvalidLegalCharacterType = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterArray} */
    const InvalidLegalCharacterArray = 500;  
     
    /** {@see ExceptionMessages::MissingLegalCharacterNameParam} */
    const MissingLegalCharacterNameParam = 500;
    /** {@see ExceptionMessages::MissingLegalCharacterNameValue} */
    const MissingLegalCharacterNameValue = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterNameType} */
    const InvalidLegalCharacterNameType = 500;
    /** {@see ExceptionMessages::InvalidLegalCharacterNameArray} */
    const InvalidLegalCharacterNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedLegalCharacterValue} */
    const DuplicatedLegalCharacterValue = 500;
    /** {@see ExceptionMessages::DuplicatedLegalCharacterUniqueValue} */
    const DuplicatedLegalCharacterUniqueValue = 500;
    /** {@see ExceptionMessages::UsedLegalCharacterByUnits} */
    const UsedLegalCharacterByUnits = 500;
    /** {@see ExceptionMessages::UsedLegalCharacterBySyncTypes} */
    const UsedLegalCharacterBySyncTypes = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelLegalCharacterValue} */
        const DuplicateDelLegalCharacterValue = 500;
        /** {@see ExceptionMessages::NotFoundDelLegalCharacterValue} */
        const NotFoundDelLegalCharacterValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesLegalCharacterUnits} */
        const ReferencesLegalCharacterUnits = 500;
        /** {@see ExceptionMessages::ReferencesLegalCharacterSyncTypes} */
        const ReferencesLegalCharacterSyncTypes = 500;
         
//= OperationShifts=============================================================
    
    /** {@see ExceptionMessages::MissingOperationShiftIDParam} */
    const MissingOperationShiftIDParam = 500;
    /** {@see ExceptionMessages::MissingOperationShiftIDValue} */
    const MissingOperationShiftIDValue = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftIDType} */
    const InvalidOperationShiftIDType = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftIDArray} */
    const InvalidOperationShiftIDArray = 500;
    
    /** {@see ExceptionMessages::MissingOperationShiftParam} */
    const MissingOperationShiftParam = 500;
    /** {@see ExceptionMessages::MissingOperationShiftValue} */
    const MissingOperationShiftValue = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftValue} */
    const InvalidOperationShiftValue = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftType} */
    const InvalidOperationShiftType = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftArray} */
    const InvalidOperationShiftArray = 500;   
     
    
    /** {@see ExceptionMessages::MissingOperationShiftNameParam} */
    const MissingOperationShiftNameParam = 500;  
    /** {@see ExceptionMessages::MissingOperationShiftNameValue} */
    const MissingOperationShiftNameValue = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftNameType} */
    const InvalidOperationShiftNameType = 500;
    /** {@see ExceptionMessages::InvalidOperationShiftNameArray} */
    const InvalidOperationShiftNameArray =  500;
    
    
    /** {@see ExceptionMessages::DuplicatedOperationShiftValue} */
    const DuplicatedOperationShiftValue = 500;
    /** {@see ExceptionMessages::DuplicatedOperationShiftUniqueValue} */
    const DuplicatedOperationShiftUniqueValue =  500;  
    /** {@see ExceptionMessages::UsedOperationShiftByUnits} */
    const UsedOperationShiftByUnits =  500;
    /** {@see ExceptionMessages::UsedOperationShiftBySyncTypes} */
    const UsedOperationShiftBySyncTypes =  500;

        //delete
        /** {@see ExceptionMessages::DuplicateDelOperationShiftValue} */
        const DuplicateDelOperationShiftValue = 500;
        /** {@see ExceptionMessages::NotFoundDelOperationShiftValue} */
        const NotFoundDelOperationShiftValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesOperationShiftUnits} */
        const ReferencesOperationShiftUnits = 500;
        /** {@see ExceptionMessages::ReferencesOperationShiftSyncTypes} */
        const ReferencesOperationShiftSyncTypes = 500;
        
//= OrientationTypes============================================================
    
    /** {@see ExceptionMessages::MissingOrientationTypeIDParam} */
    const MissingOrientationTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingOrientationTypeIDValue} */
    const MissingOrientationTypeIDValue =  500;
    /** {@see ExceptionMessages::InvalidOrientationTypeIDType} */
    const InvalidOrientationTypeIDType =  500;
    /** {@see ExceptionMessages::InvalidOrientationTypeIDArray} */
    const InvalidOrientationTypeIDArray =  500;
    
    /** {@see ExceptionMessages::MissingOrientationTypeParam} */
    const MissingOrientationTypeParam =  500;
    /** {@see ExceptionMessages::MissingOrientationTypeValue} */
    const MissingOrientationTypeValue =  500;
    /** {@see ExceptionMessages::InvalidOrientationTypeValue} */
    const InvalidOrientationTypeValue =  500;
    /** {@see ExceptionMessages::InvalidOrientationTypeType} */
    const InvalidOrientationTypeType =  500;
    /** {@see ExceptionMessages::InvalidOrientationTypeArray} */
    const InvalidOrientationTypeArray =  500;
    
    /** {@see ExceptionMessages::MissingOrientationTypeNameParam} */
    const MissingOrientationTypeNameParam =  500;
    /** {@see ExceptionMessages::MissingOrientationTypeNameValue} */
    const MissingOrientationTypeNameValue =  500;
    /** {@see ExceptionMessages::InvalidOrientationTypeNameType} */
    const InvalidOrientationTypeNameType =  500;
    /** {@see ExceptionMessages::InvalidOrientationTypeNameArray} */
    const InvalidOrientationTypeNameArray =  500;
    
    /** {@see ExceptionMessages::DuplicatedOrientationTypeValue} */
    const DuplicatedOrientationTypeValue =  500;
    /** {@see ExceptionMessages::DuplicatedOrientationTypeUniqueValue} */
    const DuplicatedOrientationTypeUniqueValue =  500;
    /** {@see ExceptionMessages::UsedOrientationTypeByUnits} */
    const UsedOrientationTypeByUnits =  500;
    /** {@see ExceptionMessages::UsedOrientationTypeBySyncTypes} */
    const UsedOrientationTypeBySyncTypes =  500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelOrientationTypeValue} */
        const DuplicateDelOrientationTypeValue = 500;
        /** {@see ExceptionMessages::NotFoundDelOrientationTypeValue} */
        const NotFoundDelOrientationTypeValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesOrientationTypeUnits} */
        const ReferencesOrientationTypeUnits = 500;
        /** {@see ExceptionMessages::ReferencesOrientationTypeSyncTypes} */
        const ReferencesOrientationTypeSyncTypes = 500;
    
//= ImplementationEntities======================================================
    
    /** {@see ExceptionMessages::MissingImplementationEntityIDParam} */
    const MissingImplementationEntityIDParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityIDValue} */
    const MissingImplementationEntityIDValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityIDType} */
    const InvalidImplementationEntityIDType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityIDArray} */
    const InvalidImplementationEntityIDArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityParam} */
    const MissingImplementationEntityParam = 500;
        /** {@see ExceptionMessages::MissingImplementationEntityValue} */
    const MissingImplementationEntityValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityValue} */
    const InvalidImplementationEntityValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityType} */
    const InvalidImplementationEntityType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityArray} */
    const InvalidImplementationEntityArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityNameParam} */
    const MissingImplementationEntityNameParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityNameValue} */
    const MissingImplementationEntityNameValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityNameType} */
    const InvalidImplementationEntityNameType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityNameArray} */
    const InvalidImplementationEntityNameArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityInitialParam} */
    const MissingImplementationEntityInitialParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityInitialValue} */
    const MissingImplementationEntityInitialValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityInitialType} */
    const InvalidImplementationEntityInitialType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityInitialArray} */
    const InvalidImplementationEntityInitialArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityStreetAddressParam} */
    const MissingImplementationEntityStreetAddressParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityStreetAddressValue} */
    const MissingImplementationEntityStreetAddressValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityStreetAddressType} */
    const InvalidImplementationEntityStreetAddressType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityStreetAddressArray} */
    const InvalidImplementationEntityStreetAddressArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityPostalCodeParam} */
    const MissingImplementationEntityPostalCodeParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityPostalCodeValue} */
    const MissingImplementationEntityPostalCodeValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityPostalCodeType} */
    const InvalidImplementationEntityPostalCodeType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityPostalCodeArray} */
    const InvalidImplementationEntityPostalCodeArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityEmailParam} */
    const MissingImplementationEntityEmailParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityEmailValue} */
    const MissingImplementationEntityEmailValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityEmailType} */
    const InvalidImplementationEntityEmailType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityEmailArray} */
    const InvalidImplementationEntityEmailArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityPhoneNumberParam} */
    const MissingImplementationEntityPhoneNumberParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityPhoneNumberValue} */
    const MissingImplementationEntityPhoneNumberValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityPhoneNumberType} */
    const InvalidImplementationEntityPhoneNumberType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityPhoneNumberArray} */
    const InvalidImplementationEntityPhoneNumberArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityDomainParam} */
    const MissingImplementationEntityDomainParam = 500;
    /** {@see ExceptionMessages::MissingImplementationEntityDomainValue} */
    const MissingImplementationEntityDomainValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityDomainType} */
    const InvalidImplementationEntityDomainType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityDomainArray} */
    const InvalidImplementationEntityDomainArray = 500;
    
    /** {@see ExceptionMessages::MissingImplementationEntityUrlParam} */
    const MissingImplementationEntityUrlParam =500;
    /** {@see ExceptionMessages::MissingImplementationEntityUrlValue} */
    const MissingImplementationEntityUrlValue = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityUrlType} */
    const InvalidImplementationEntityUrlType = 500;
    /** {@see ExceptionMessages::InvalidImplementationEntityUrlArray} */
    const InvalidImplementationEntityUrlArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedImplementationEntityValue} */
    const DuplicatedImplementationEntityValue = 500;
     /** {@see ExceptionMessages::DuplicatedImplementationEntityInitialsValue} */   
    const DuplicatedImplementationEntityInitialsValue = 500;
    /** {@see ExceptionMessages::DuplicatedImplementationEntityUniqueValue} */
    const DuplicatedImplementationEntityUniqueValue = 500;
    /** {@see ExceptionMessages::UsedImplementationEntityByUnits} */
    const UsedImplementationEntityByUnits = 500;   
    /** {@see ExceptionMessages::UsedImplementationEntityByEduAdmins} */
    const UsedImplementationEntityByEduAdmins = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelImplementationEntityValue} */
        const DuplicateDelImplementationEntityValue = 500;
        /** {@see ExceptionMessages::NotFoundDelImplementationEntityValue} */
        const NotFoundDelImplementationEntityValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesImplementationEntityUnits} */
        const ReferencesImplementationEntityUnits = 500;
        /** {@see ExceptionMessages::ReferencesImplementationEntityEduAdmins} */
        const ReferencesImplementationEntityEduAdmins = 500;
    
//= Categories==================================================================
    
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
    /** {@see ExceptionMessages::UsedCategoriesByUnits} */
    const UsedCategoriesByUnits = 500;
    /** {@see ExceptionMessages::UsedCategoriesBySpecialTypes} */
    const UsedCategoriesBySpecialTypes = 500;
    /** {@see ExceptionMessages::UsedCategoriesByLegalCharacters} */
    const UsedCategoriesByLegalCharacters = 500;
    /** {@see ExceptionMessages::UsedCategoriesByOperationShifts} */
    const UsedCategoriesByOperationShifts = 500;
    /** {@see ExceptionMessages::UsedCategoriesByOrientationTypes} */
    const UsedCategoriesByOrientationTypes = 500;
    /** {@see ExceptionMessages::UsedCategoriesByUnitTypes} */
    const UsedCategoriesByUnitTypes = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelCategoryValue} */
        const DuplicateDelCategoryValue = 500;
        /** {@see ExceptionMessages::NotFoundDelCategoryValue} */
        const NotFoundDelCategoryValue = 500;
        
        //references
        /** {@see ExceptionMessages::ReferencesCategoryUnits} */
        const ReferencesCategoryUnits = 500;
        /** {@see ExceptionMessages::ReferencesCategorySpecialTypes} */
        const ReferencesCategorySpecialTypes = 500;
        /** {@see ExceptionMessages::ReferencesCategoryUnitTypes} */
        const ReferencesCategoryUnitTypes = 500;
        /** {@see ExceptionMessages::ReferencesCategoryOrientationTypes} */
        const ReferencesCategoryOrientationTypes = 500;
        /** {@see ExceptionMessages::ReferencesCategoryOperationShifts} */
        const ReferencesCategoryOperationShifts = 500;
        /** {@see ExceptionMessages::ReferencesCategoryLegalCharacters} */
        const ReferencesCategoryLegalCharacters = 500;
    
//= RegionEduAdmins=============================================================
    
    /** {@see ExceptionMessages::MissingRegionEduAdminIDParam} */
    const MissingRegionEduAdminIDParam = 500;
    /** {@see ExceptionMessages::MissingRegionEduAdminIDValue} */
    const MissingRegionEduAdminIDValue = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminIDType} */
    const InvalidRegionEduAdminIDType = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminIDArray} */
    const InvalidRegionEduAdminIDArray = 500;
    
    /** {@see ExceptionMessages::MissingRegionEduAdminParam} */
    const MissingRegionEduAdminParam = 500;
    /** {@see ExceptionMessages::MissingRegionEduAdminValue} */
    const MissingRegionEduAdminValue = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminValue} */
    const InvalidRegionEduAdminValue = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminType} */
    const InvalidRegionEduAdminType = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminArray} */
    const InvalidRegionEduAdminArray = 500;
 
    /** {@see ExceptionMessages::MissingRegionEduAdminNameParam} */
    const MissingRegionEduAdminNameParam = 500;
    /** {@see ExceptionMessages::MissingRegionEduAdminNameValue} */
    const MissingRegionEduAdminNameValue = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminNameType} */
    const InvalidRegionEduAdminNameType = 500;
    /** {@see ExceptionMessages::InvalidRegionEduAdminNameArray} */
    const InvalidRegionEduAdminNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedRegionEduAdminValue} */
    const DuplicatedRegionEduAdminValue = 500;
    /** {@see ExceptionMessages::DuplicatedRegionEduAdminUniqueValue} */
    const DuplicatedRegionEduAdminUniqueValue = 500;
    /** {@see ExceptionMessages::UsedRegionEduAdminByUnits} */
    const UsedRegionEduAdminByUnits = 500;
    /** {@see ExceptionMessages::UsedRegionEduAdminByEduAdmins} */   
    const UsedRegionEduAdminByEduAdmins = 500;
    /** {@see ExceptionMessages::UsedRegionEduAdminBySchoolCommittees} */   
    const UsedRegionEduAdminBySchoolCommittees = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelRegionEduAdminValue} */ 
        const DuplicateDelRegionEduAdminValue = 500;
        /** {@see ExceptionMessages::NotFoundDelRegionEduAdminValue} */ 
        const NotFoundDelRegionEduAdminValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesRegionEduAdminUnits} */ 
        const ReferencesRegionEduAdminUnits = 500;
        /** {@see ExceptionMessages::ReferencesRegionEduAdminEduAdmins} */ 
        const ReferencesRegionEduAdminEduAdmins = 500;
        /** {@see ExceptionMessages::ReferencesRegionEduAdminSchoolCommittees} */ 
        const ReferencesRegionEduAdminSchoolCommittees = 500;
  
//= EduAdmins===================================================================
    
    /** {@see ExceptionMessages::MissingEduAdminIDParam} */   
    const MissingEduAdminIDParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminIDValue} */   
    const MissingEduAdminIDValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminIDType} */   
    const InvalidEduAdminIDType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminIDArray} */   
    const InvalidEduAdminIDArray = 500;
    
    /** {@see ExceptionMessages::MissingEduAdminParam} */   
    const MissingEduAdminParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminValue} */   
    const MissingEduAdminValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminValue} */   
    const InvalidEduAdminValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminType} */   
    const InvalidEduAdminType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminArray} */   
    const InvalidEduAdminArray = 500;
    
    /** {@see ExceptionMessages::MissingEduAdminNameParam} */ 
    const MissingEduAdminNameParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminNameValue} */ 
    const MissingEduAdminNameValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminNameType} */ 
    const InvalidEduAdminNameType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminNameArray} */ 
    const InvalidEduAdminNameArray = 500;

    /** {@see ExceptionMessages::MissingEduAdminCodeParam} */   
    const MissingEduAdminCodeParam = 500;
    /** {@see ExceptionMessages::MissingEduAdminCodeValue} */   
    const MissingEduAdminCodeValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminCodeType} */   
    const InvalidEduAdminCodeValue = 500;
    /** {@see ExceptionMessages::InvalidEduAdminCodeValue} */ 
    const InvalidEduAdminCodeType = 500;
    /** {@see ExceptionMessages::InvalidEduAdminCodeArray} */   
    const InvalidEduAdminCodeArray = 500;
      
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
    /** {@see ExceptionMessages::DuplicatedEduAdminUniqueValue} */   
    const DuplicatedEduAdminUniqueValue = 500;
    /** {@see ExceptionMessages::DuplicatedEduAdminCodeValue} */   
    const DuplicatedEduAdminCodeValue = 500;
    /** {@see ExceptionMessages::UsedEduAdminByUnits} */   
    const UsedEduAdminByUnits =500;
    /** {@see ExceptionMessages::UsedEduAdminByTransferAreas} */   
    const UsedEduAdminByTransferAreas = 500;
    /** {@see ExceptionMessages::UsedEduAdminBySchoolCommittees} */   
    const UsedEduAdminBySchoolCommittees = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelEduAdminValue} */   
        const DuplicateDelEduAdminValue = 500;
        /** {@see ExceptionMessages::NotFoundDelEduAdminValue} */   
        const NotFoundDelEduAdminValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesEduAdminUnits} */   
        const ReferencesEduAdminUnits = 500;
        /** {@see ExceptionMessages::ReferencesEduAdminSchoolCommittees} */   
        const ReferencesEduAdminSchoolCommittees = 500;
        /** {@see ExceptionMessages::ReferencesEduAdminTransferAreas} */   
        const ReferencesEduAdminTransferAreas= 500;
    
//= TransferAreas===============================================================
    
    /** {@see ExceptionMessages::MissingTransferAreaIDParam} */   
    const MissingTransferAreaIDParam = 500;
    /** {@see ExceptionMessages::MissingTransferAreaIDValue} */   
    const MissingTransferAreaIDValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaIDType} */   
    const InvalidTransferAreaIDType = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaIDArray} */   
    const InvalidTransferAreaIDArray = 500;
    
    /** {@see ExceptionMessages::MissingTransferAreaParam} */   
    const MissingTransferAreaParam = 500;
    /** {@see ExceptionMessages::MissingTransferAreaValue} */   
    const MissingTransferAreaValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaValue} */   
    const InvalidTransferAreaValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaType} */   
    const InvalidTransferAreaType = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaArray} */   
    const InvalidTransferAreaArray = 500;
   
    /** {@see ExceptionMessages::MissingTransferAreaNameParam} */  
    const MissingTransferAreaNameParam = 500;
    /** {@see ExceptionMessages::MissingTransferAreaNameValue} */  
    const MissingTransferAreaNameValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaNameType} */  
    const InvalidTransferAreaNameType = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaNameArray} */  
    const InvalidTransferAreaNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedTransferAreaValue} */   
    const DuplicatedTransferAreaValue = 500;
    /** {@see ExceptionMessages::DuplicatedTransferAreaUniqueValue} */   
    const DuplicatedTransferAreaUniqueValue = 500;
    /** {@see ExceptionMessages::UsedTransferAreaByUnits} */   
    const UsedTransferAreaByUnits = 500;
    /** {@see ExceptionMessages::UsedTransferAreaByTransferAreaMunicipality} */   
    const UsedTransferAreaByTransferAreaMunicipality = 500;

        //delete
        /** {@see ExceptionMessages::DuplicateDelTransferAreaValue} */   
        const DuplicateDelTransferAreaValue = 500;
        /** {@see ExceptionMessages::NotFoundDelTransferAreaValue} */   
        const NotFoundDelTransferAreaValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesTransferAreaUnits} */   
        const ReferencesTransferAreaUnits = 500;
        /** {@see ExceptionMessages::ReferencesTransferAreaTransferAreaMunicipalitiesc} */   
        const ReferencesTransferAreaTransferAreaMunicipalities = 500;
        
//= Municipalities==============================================================
    
    /** {@see ExceptionMessages::MissingMunicipalityIDParam} */   
    const MissingMunicipalityIDParam = 500;
    /** {@see ExceptionMessages::MissingMunicipalityIDValue} */   
    const MissingMunicipalityIDValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityIDType} */   
    const InvalidMunicipalityIDType = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityIDArray} */   
    const InvalidMunicipalityIDArray = 500;
    
    /** {@see ExceptionMessages::MissingMunicipalityParam} */   
    const MissingMunicipalityParam = 500;
    /** {@see ExceptionMessages::MissingMunicipalityValue} */   
    const MissingMunicipalityValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityValue} */   
    const InvalidMunicipalityValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityType} */   
    const InvalidMunicipalityType = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityArray} */   
    const InvalidMunicipalityArray = 500;
  
    /** {@see ExceptionMessages::MissingMunicipalityNameParam} */   
    const MissingMunicipalityNameParam = 500;
    /** {@see ExceptionMessages::MissingMunicipalityNameValue} */   
    const MissingMunicipalityNameValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityNameType} */   
    const InvalidMunicipalityNameType = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityNameArray} */   
    const InvalidMunicipalityNameArray = 500;  

    /** {@see ExceptionMessages::DuplicatedMunicipalityValue} */   
    const DuplicatedMunicipalityValue = 500;
    /** {@see ExceptionMessages::DuplicatedMunicipalityUniqueValue} */   
    const DuplicatedMunicipalityUniqueValue = 500;
    /** {@see ExceptionMessages::UsedMunicipalityByUnits} */   
    const UsedMunicipalityByUnits = 500;
    /** {@see ExceptionMessages::UsedMunicipalityByTransferAreaMunicipality} */   
    const UsedMunicipalityByTransferAreaMunicipality = 500;
    /** {@see ExceptionMessages::UsedMunicipalityBySchoolCommittees} */   
    const UsedMunicipalityBySchoolCommittees = 500;

        //delete
        /** {@see ExceptionMessages::DuplicateDelMunicipalityValue} */ 
        const DuplicateDelMunicipalityValue = 500;
        /** {@see ExceptionMessages::NotFoundDelMunicipalityValue} */ 
        const NotFoundDelMunicipalityValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesMunicipalityUnits} */ 
        const ReferencesMunicipalityUnits = 500;
        /** {@see ExceptionMessages::ReferencesMunicipalityTransferAreaMunicipalities} */ 
        const ReferencesMunicipalityTransferAreaMunicipalities = 500;
        /** {@see ExceptionMessages::ReferencesMunicipalitySchoolCommittees} */ 
        const ReferencesMunicipalitySchoolCommittees = 500;
        
//= MunicipalityCommunities=====================================================
      
    /** {@see ExceptionMessages::MissingMunicipalityCommunityIDParam} */ 
    const MissingMunicipalityCommunityIDParam = 500;
    /** {@see ExceptionMessages::MissingMunicipalityCommunityIDValue} */ 
    const MissingMunicipalityCommunityIDValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityCommunityIDType} */ 
    const InvalidMunicipalityCommunityIDType = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityCommunityIDArray} */ 
    const InvalidMunicipalityCommunityIDArray = 500;
    
    /** {@see ExceptionMessages::MissingMunicipalityCommunityParam} */ 
    const MissingMunicipalityCommunityParam = 500;
    /** {@see ExceptionMessages::MissingMunicipalityCommunityValue} */ 
    const MissingMunicipalityCommunityValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityCommunityValue} */ 
    const InvalidMunicipalityCommunityValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityCommunityType} */ 
    const InvalidMunicipalityCommunityType = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityCommunityArray} */ 
    const InvalidMunicipalityCommunityArray = 500;
    
    /** {@see ExceptionMessages::MissingMunicipalityCommunityNameParam} */ 
    const MissingMunicipalityCommunityNameParam = 500;
    /** {@see ExceptionMessages::MissingMunicipalityCommunityNameValue} */ 
    const MissingMunicipalityCommunityNameValue = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityCommunityNameType} */ 
    const InvalidMunicipalityCommunityNameType = 500;
    /** {@see ExceptionMessages::InvalidMunicipalityCommunityNameArray} */ 
    const InvalidMunicipalityCommunityNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedMunicipalityCommunityValue} */ 
    const DuplicatedMunicipalityCommunityValue = 500;
    /** {@see ExceptionMessages::DuplicatedMunicipalityCommunityUniqueValue} */ 
    const DuplicatedMunicipalityCommunityUniqueValue = 500;
    /** {@see ExceptionMessages::UsedMunicipalityCommunityByUnits} */ 
    const UsedMunicipalityCommunityByUnits = 500;
    /** {@see ExceptionMessages::UsedMunicipalityCommunityByMunicipalities} */ 
    const UsedMunicipalityCommunityByMunicipalities = 500;

        //delete  
        /** {@see ExceptionMessages::DuplicateDelMunicipalityCommunityValue} */ 
        const DuplicateDelMunicipalityCommunityValue = 500;
        /** {@see ExceptionMessages::NotFoundDelMunicipalityCommunityValue} */ 
        const NotFoundDelMunicipalityCommunityValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesMunicipalityCommunityUnits} */ 
        const ReferencesMunicipalityCommunityUnits = 500;
        /** {@see ExceptionMessages::ReferencesMunicipalityCommunityMunicipalities} */ 
        const ReferencesMunicipalityCommunityMunicipalities = 500;
 
//= Prefectures=================================================================
    
    /** {@see ExceptionMessages::MissingPrefectureIDParam} */   
    const MissingPrefectureIDParam = 500;
    /** {@see ExceptionMessages::MissingPrefectureIDValue} */   
    const MissingPrefectureIDValue = 500;
    /** {@see ExceptionMessages::InvalidPrefectureIDType} */   
    const InvalidPrefectureIDType = 500;
    /** {@see ExceptionMessages::InvalidPrefectureIDArray} */   
    const InvalidPrefectureIDArray = 500;
    
    /** {@see ExceptionMessages::MissingPrefectureParam} */   
    const MissingPrefectureParam = 500;
    /** {@see ExceptionMessages::MissingPrefectureValue} */   
    const MissingPrefectureValue = 500;
    /** {@see ExceptionMessages::InvalidPrefectureValue} */   
    const InvalidPrefectureValue = 500;
    /** {@see ExceptionMessages::InvalidPrefectureType} */   
    const InvalidPrefectureType = 500;
    /** {@see ExceptionMessages::InvalidPrefectureArray} */   
    const InvalidPrefectureArray = 500;
  
    /** {@see ExceptionMessages::MissingPrefectureNameParam} */  
    const MissingPrefectureNameParam = 500;
    /** {@see ExceptionMessages::MissingPrefectureNameValue} */  
    const MissingPrefectureNameValue = 500;
    /** {@see ExceptionMessages::InvalidPrefectureNameType} */  
    const InvalidPrefectureNameType = 500;
    /** {@see ExceptionMessages::InvalidPrefectureNameArray} */  
    const InvalidPrefectureNameArray = 500;  

    /** {@see ExceptionMessages::DuplicatedPrefectureValue} */   
    const DuplicatedPrefectureValue = 500;
    /** {@see ExceptionMessages::DuplicatedPrefectureUniqueValue} */   
    const DuplicatedPrefectureUniqueValue = 500;
    /** {@see ExceptionMessages::UsedPrefectureByUnits} */   
    const UsedPrefectureByUnits = 500;
    /** {@see ExceptionMessages::UsedPrefectureByMunicipalities} */   
    const UsedPrefectureByMunicipalities = 500;
    /** {@see ExceptionMessages::UsedPrefectureBySchoolCommittees} */   
    const UsedPrefectureBySchoolCommittees = 500;

        //delete
        /** {@see ExceptionMessages::DuplicateDelPrefectureValue} */ 
        const DuplicateDelPrefectureValue = 500;
        /** {@see ExceptionMessages::NotFoundDelPrefectureValue} */ 
        const NotFoundDelPrefectureValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesPrefectureUnits} */ 
        const ReferencesPrefectureUnits = 500;
        /** {@see ExceptionMessages::ReferencesPrefectureMunicipalities} */ 
        const ReferencesPrefectureMunicipalities = 500;
        /** {@see ExceptionMessages::ReferencesPrefectureSchoolCommittees} */ 
        const ReferencesPrefectureSchoolCommittees = 500;

//= TransferAreaMunicipalities==================================================
    
    /** {@see ExceptionMessages::MissingTransferAreaMunicipalityIDParam} */   
    const MissingTransferAreaMunicipalityIDParam = 500;
    /** {@see ExceptionMessages::MissingTransferAreaMunicipalityIDValue} */   
    const MissingTransferAreaMunicipalityIDValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaMunicipalityIDType} */   
    const InvalidTransferAreaMunicipalityIDType = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaMunicipalityIDArray} */   
    const InvalidTransferAreaMunicipalityIDArray = 500;
    
    /** {@see ExceptionMessages::MissingTransferAreaMunicipalityParam} */   
    const MissingTransferAreaMunicipalityParam = 500;
    /** {@see ExceptionMessages::MissingTransferAreaMunicipalityValue} */   
    const MissingTransferAreaMunicipalityValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaMunicipalityValue} */   
    const InvalidTransferAreaMunicipalityValue = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaMunicipalityType} */   
    const InvalidTransferAreaMunicipalityType = 500;
    /** {@see ExceptionMessages::InvalidTransferAreaMunicipalityArray} */   
    const InvalidTransferAreaMunicipalityArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedTransferAreaMunicipalityValue} */   
    const DuplicatedTransferAreaMunicipalityValue = 500;
    /** {@see ExceptionMessages::DuplicatedTransferAreaMunicipalityUniqueValue} */   
    const DuplicatedTransferAreaMunicipalityUniqueValue = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelTransferAreaMunicipalityValue} */   
        const DuplicateDelTransferAreaMunicipalityValue = 500;
        /** {@see ExceptionMessages::NotFoundDelTransferAreaMunicipalityValue} */   
        const NotFoundDelTransferAreaMunicipalityValue = 500;
    
//= EducationLevels=============================================================
    
    /** {@see ExceptionMessages::MissingEducationLevelIDParam} */   
    const MissingEducationLevelIDParam = 500;
    /** {@see ExceptionMessages::MissingEducationLevelIDValue} */   
    const MissingEducationLevelIDValue = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelIDType} */   
    const InvalidEducationLevelIDType = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelIDArray} */   
    const InvalidEducationLevelIDArray = 500;
    
    /** {@see ExceptionMessages::MissingEducationLevelParam} */    
    const MissingEducationLevelParam = 500;
    /** {@see ExceptionMessages::MissingEducationLevelValue} */   
    const MissingEducationLevelValue = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelValue} */   
    const InvalidEducationLevelValue = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelType} */   
    const InvalidEducationLevelType = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelArray} */   
    const InvalidEducationLevelArray = 500;
    
    /** {@see ExceptionMessages::MissingEducationLevelNameParam} */   
    const MissingEducationLevelNameParam = 500;
    /** {@see ExceptionMessages::MissingEducationLevelNameValue} */   
    const MissingEducationLevelNameValue = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelNameType} */   
    const InvalidEducationLevelNameType = 500;
    /** {@see ExceptionMessages::InvalidEducationLevelNameArray} */   
    const InvalidEducationLevelNameArray = 500;  
    
    /** {@see ExceptionMessages::DuplicatedEducationLevelValue} */   
    const DuplicatedEducationLevelValue = 500;
    /** {@see ExceptionMessages::DuplicatedEducationLevelUniqueValue} */   
    const DuplicatedEducationLevelUniqueValue = 500;
    /** {@see ExceptionMessages::UsedEducationLevelByUnits} */   
    const UsedEducationLevelByUnits = 500;
    /** {@see ExceptionMessages::UsedEducationLevelByUnitTypes} */   
    const UsedEducationLevelByUnitTypes = 500;
    /** {@see ExceptionMessages::UsedEducationLevelBySchoolCommittees} */   
    const UsedEducationLevelBySchoolCommittees = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelEducationLevelValue} */   
        const DuplicateDelEducationLevelValue = 500;
        /** {@see ExceptionMessages::NotFoundDelEducationLevelValue} */   
        const NotFoundDelEducationLevelValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesEducationLevelUnits} */   
        const ReferencesEducationLevelUnits = 500;
        /** {@see ExceptionMessages::ReferencesEducationLevelSchoolCommittees} */   
        const ReferencesEducationLevelSchoolCommittees = 500;
        /** {@see ExceptionMessages::ReferencesEducationLevelUnitTypes} */   
        const ReferencesEducationLevelUnitTypes = 500;
    
//= UnitTypes===================================================================
    
    /** {@see ExceptionMessages::MissingUnitTypeIDParam} */   
    const MissingUnitTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingUnitTypeIDValue} */   
    const MissingUnitTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeIDType} */   
    const InvalidUnitTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeIDArray} */   
    const InvalidUnitTypeIDArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitTypeParam} */   
    const MissingUnitTypeParam = 500;
    /** {@see ExceptionMessages::MissingUnitTypeValue} */   
    const MissingUnitTypeValue = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeValue} */   
    const InvalidUnitTypeValue = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeType */   
    const InvalidUnitTypeType = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeArray} */   
    const InvalidUnitTypeArray = 500; 
    
    /** {@see ExceptionMessages::MissingUnitTypeNameParam} */   
    const MissingUnitTypeNameParam = 500;
    /** {@see ExceptionMessages::MissingUnitTypeNameValue} */   
    const MissingUnitTypeNameValue = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeNameType} */   
    const InvalidUnitTypeNameType = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeNameArray} */   
    const InvalidUnitTypeNameArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitTypeInitialParam} */   
    const MissingUnitTypeInitialParam = 500;
    /** {@see ExceptionMessages::MissingUnitTypeInitialValue} */   
    const MissingUnitTypeInitialValue = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeInitialType} */   
    const InvalidUnitTypeInitialType = 500;
    /** {@see ExceptionMessages::InvalidUnitTypeInitialArray} */   
    const InvalidUnitTypeInitialArray = 500;
  
    /** {@see ExceptionMessages::DuplicatedUnitTypeValue} */   
    const DuplicatedUnitTypeValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitTypeUniqueValue} */   
    const DuplicatedUnitTypeUniqueValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitTypeNameValue} */   
    const DuplicatedUnitTypeNameValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitTypeInitialValue} */   
    const DuplicatedUnitTypeInitialValue = 500;
    /** {@see ExceptionMessages::UsedUnitTypeByUnits} */   
    const UsedUnitTypeByUnits = 500;
    /** {@see ExceptionMessages::UsedUnitTypeBySyncTypeUnits} */   
    const UsedUnitTypeBySyncTypeUnits = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelUnitTypeValue} */ 
        const DuplicateDelUnitTypeValue = 500;
        /** {@see ExceptionMessages::NotFoundDelUnitTypeValue} */ 
        const NotFoundDelUnitTypeValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesUnitTypeUnits} */ 
        const ReferencesUnitTypeUnits = 500;
        /** {@see ExceptionMessages::ReferencesUnitTypeSyncTypes} */ 
        const ReferencesUnitTypeSyncTypes = 500;
      
//= States======================================================================
    
    /** {@see ExceptionMessages::MissingStateIDParam} */   
    const MissingStateIDParam = 500;
    /** {@see ExceptionMessages::MissingStateIDValue} */   
    const MissingStateIDValue = 500;
    /** {@see ExceptionMessages::InvalidStateIDType} */   
    const InvalidStateIDType = 500;
    /** {@see ExceptionMessages::InvalidStateIDArray} */   
    const InvalidStateIDArray = 500;
    
    /** {@see ExceptionMessages::MissingStateParam} */   
    const MissingStateParam = 500;
    /** {@see ExceptionMessages::MissingStateValue} */   
    const MissingStateValue = 500;
    /** {@see ExceptionMessages::InvalidStateValue} */   
    const InvalidStateValue = 500;
    /** {@see ExceptionMessages::InvalidStateType} */   
    const InvalidStateType = 500;
    /** {@see ExceptionMessages::InvalidStateArray} */   
    const InvalidStateArray = 500;
    
    /** {@see ExceptionMessages::MissingStateNameParam} */   
    const MissingStateNameParam = 500;
    /** {@see ExceptionMessages::MissingStateNameValue} */ 
    const MissingStateNameValue = 500;
    /** {@see ExceptionMessages::InvalidStateNameType} */ 
    const InvalidStateNameType = 500;
    /** {@see ExceptionMessages::InvalidStateNameArray} */ 
    const InvalidStateNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedStateValue} */   
    const DuplicatedStateValue = 500;
    /** {@see ExceptionMessages::DuplicatedStateUniqueValue} */   
    const DuplicatedStateUniqueValue = 500;
    /** {@see ExceptionMessages::UsedStateByUnits} */   
    const UsedStateByUnits = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelStateValue} */   
        const DuplicateDelStateValue = 500;
        /** {@see ExceptionMessages::NotFoundDelStateValue} */   
        const NotFoundDelStateValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesStateUnits} */   
        const ReferencesStateUnits = 500;
   
    
//= CircuitTypes================================================================
    
    /** {@see ExceptionMessages::MissingCircuitTypeIDParam} */  
    const MissingCircuitTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingCircuitTypeIDValue} */  
    const MissingCircuitTypeIDValue = 500; 
    /** {@see ExceptionMessages::InvalidCircuitTypeIDType} */  
    const InvalidCircuitTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeIDArray} */  
    const InvalidCircuitTypeIDArray = 500;
    
    /** {@see ExceptionMessages::MissingCircuitTypeParam} */
    const MissingCircuitTypeParam = 500;
    /** {@see ExceptionMessages::MissingCircuitTypeValue} */  
    const MissingCircuitTypeValue = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeValue} */  
    const InvalidCircuitTypeValue = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeType} */  
    const InvalidCircuitTypeType = 500;
    /** {@see ExceptionMessages::InvalidCircuitTypeArray} */  
    const InvalidCircuitTypeArray = 500; 
  
    /** {@see ExceptionMessages::MissingCircuitTypeNameParam} */  
    const MissingCircuitTypeNameParam = 500; 
    /** {@see ExceptionMessages::MissingCircuitTypeNameValue} */  
    const MissingCircuitTypeNameValue = 500; 
    /** {@see ExceptionMessages::InvalidCircuitTypeNameType} */  
    const InvalidCircuitTypeNameType = 500; 
    /** {@see ExceptionMessages::InvalidCircuitTypeNameArray} */  
    const InvalidCircuitTypeNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedCircuitTypeValue} */  
    const DuplicatedCircuitTypeValue = 500;
    /** {@see ExceptionMessages::DuplicatedCircuitTypeUniqueValue} */  
    const DuplicatedCircuitTypeUniqueValue = 500;
    /** {@see ExceptionMessages::UsedCircuitTypeByCircuits} */  
    const UsedCircuitTypeByCircuits = 500;
    
//= RelationTypes===============================================================
   
    /** {@see ExceptionMessages::MissingRelationTypeIDParam} */  
    const MissingRelationTypeIDParam = 500;
    /** {@see ExceptionMessages::MissingRelationTypeIDValue} */  
    const MissingRelationTypeIDValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeIDType} */  
    const InvalidRelationTypeIDType = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeIDArray} */  
    const InvalidRelationTypeIDArray = 500;
    
    /** {@see ExceptionMessages::MissingRelationTypeParam} */  
    const MissingRelationTypeParam = 500;
    /** {@see ExceptionMessages::MissingRelationTypeValue} */  
    const MissingRelationTypeValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeValue} */  
    const InvalidRelationTypeValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeType} */  
    const InvalidRelationTypeType = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeArray} */  
    const InvalidRelationTypeArray = 500;
  
    /** {@see ExceptionMessages::MissingRelationTypeNameParam} */  
    const MissingRelationTypeNameParam = 500;
    /** {@see ExceptionMessages::MissingRelationTypeNameValue} */  
    const MissingRelationTypeNameValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeNameType} */  
    const InvalidRelationTypeNameType = 500;
    /** {@see ExceptionMessages::InvalidRelationTypeNameArray} */  
    const InvalidRelationTypeNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedRelationTypeValue} */  
    const DuplicatedRelationTypeValue = 500;
    /** {@see ExceptionMessages::DuplicateRelationTypeUniqueValue} */     
    const DuplicateRelationTypeUniqueValue = 500;
    /** {@see ExceptionMessages::UsedRelationTypeByRelations} */  
    const UsedRelationTypeByRelations = 500;
    
       //delete
        /** {@see ExceptionMessages::DuplicateDelRelationTypeValue} */  
        const DuplicateDelRelationTypeValue = 500;
        /** {@see ExceptionMessages::NotFoundDelRelationTypeValue} */  
        const NotFoundDelRelationTypeValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesRelationTypeRelations} */  
        const ReferencesRelationTypeRelations = 500;
    
//= WorkerPositions=============================================================
    
    /** {@see ExceptionMessages::MissingWorkerPositionIDParam} */  
    const MissingWorkerPositionIDParam = 500;
    /** {@see ExceptionMessages::MissingWorkerPositionIDValue} */  
    const MissingWorkerPositionIDValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionIDType} */  
    const InvalidWorkerPositionIDType = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionIDArray} */  
    const InvalidWorkerPositionIDArray = 500;
    
    /** {@see ExceptionMessages::MissingWorkerPositionParam} */  
    const MissingWorkerPositionParam = 500;
    /** {@see ExceptionMessages::MissingWorkerPositionValue} */  
    const MissingWorkerPositionValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionValue} */  
    const InvalidWorkerPositionValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionType} */  
    const InvalidWorkerPositionType = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionArray} */  
    const InvalidWorkerPositionArray = 500;
    
    /** {@see ExceptionMessages::MissingWorkerPositionNameParam} */  
    const MissingWorkerPositionNameParam = 500;
    /** {@see ExceptionMessages::MissingWorkerPositionNameValue} */  
    const MissingWorkerPositionNameValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionNameType} */  
    const InvalidWorkerPositionNameType = 500;
    /** {@see ExceptionMessages::InvalidWorkerPositionNameArray} */  
    const InvalidWorkerPositionNameArray = 500; 

    /** {@see ExceptionMessages::DuplicatedWorkerPositionValue} */  
    const DuplicatedWorkerPositionValue = 500;
    /** {@see ExceptionMessages::DuplicatedWorkerPositionUniqueValue} */  
    const DuplicatedWorkerPositionUniqueValue = 500;
    /** {@see ExceptionMessages::UsedWorkerPositionByUnitWorkers} */  
    const UsedWorkerPositionByUnitWorkers = 500;
    
        //delete
         /** {@see ExceptionMessages::DuplicateDelWorkerPositionValue} */  
        const DuplicateDelWorkerPositionValue = 500;
        /** {@see ExceptionMessages::NotFoundDelWorkerPositionValue} */  
        const NotFoundDelWorkerPositionValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesWorkerPositionUnitWorkers} */  
        const ReferencesWorkerPositionUnitWorkers = 500;

//= WorkerSpecializations=======================================================
    
    /** {@see ExceptionMessages::MissingWorkerSpecializationIDParam} */  
    const MissingWorkerSpecializationIDParam = 500;
    /** {@see ExceptionMessages::MissingWorkerSpecializationIDValue} */  
    const MissingWorkerSpecializationIDValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationIDType} */  
    const InvalidWorkerSpecializationIDType = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationIDArray} */  
    const InvalidWorkerSpecializationIDArray = 500;
    
    /** {@see ExceptionMessages::MissingWorkerSpecializationParam} */  
    const MissingWorkerSpecializationParam = 500;
    /** {@see ExceptionMessages::MissingWorkerSpecializationValue} */  
    const MissingWorkerSpecializationValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationValue} */  
    const InvalidWorkerSpecializationValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationType} */  
    const InvalidWorkerSpecializationType = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationArray} */  
    const InvalidWorkerSpecializationArray = 500;
 
    /** {@see ExceptionMessages::MissingWorkerSpecializationNameParam} */  
    const MissingWorkerSpecializationNameParam = 500;
    /** {@see ExceptionMessages::MissingWorkerSpecializationNameValue} */  
    const MissingWorkerSpecializationNameValue = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationNameType} */  
    const InvalidWorkerSpecializationNameType = 500;
    /** {@see ExceptionMessages::InvalidWorkerSpecializationNameArray} */  
    const InvalidWorkerSpecializationNameArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedWorkerSpecializationValue} */  
    const DuplicatedWorkerSpecializationValue = 500;
    /** {@see ExceptionMessages::DuplicatedWorkerSpecializationUniqueValue} */  
    const DuplicatedWorkerSpecializationUniqueValue = 500;
    /** {@see ExceptionMessages::UsedWorkerSpecializationByUnitWorkers} */  
    const UsedWorkerSpecializationByUnitWorkers = 500;

        //delete
         /** {@see ExceptionMessages::DuplicateDelWorkerSpecializationValue} */  
        const DuplicateDelWorkerSpecializationValue = 500;
        /** {@see ExceptionMessages::NotFoundDelWorkerSpecializationValue} */  
        const NotFoundDelWorkerSpecializationValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesWorkerSpecializationWorkers} */  
        const ReferencesWorkerSpecializationWorkers = 500;
      
//=Sources =====================================================================

    /** {@see ExceptionMessages::MissingSourceIDParam} */  
    const MissingSourceIDParam = 500;
    /** {@see ExceptionMessages::MissingSourceIDValue} */  
    const MissingSourceIDValue = 500;
    /** {@see ExceptionMessages::InvalidSourceIDType} */  
    const InvalidSourceIDType = 500;
    /** {@see ExceptionMessages::InvalidSourceIDArray} */  
    const InvalidSourceIDArray = 500;
    
    /** {@see ExceptionMessages::MissingSourceParam} */  
    const MissingSourceParam = 500;
    /** {@see ExceptionMessages::MissingSourceValue} */  
    const MissingSourceValue = 500;
    /** {@see ExceptionMessages::InvalidSourceValue} */  
    const InvalidSourceValue = 500;
    /** {@see ExceptionMessages::InvalidSourceType} */  
    const InvalidSourceType = 500;
    /** {@see ExceptionMessages::InvalidSourceArray} */  
    const InvalidSourceArray = 500;

    /** {@see ExceptionMessages::MissingSourceNameParam} */  
    const MissingSourceNameParam = 500;
    /** {@see ExceptionMessages::MissingSourceNameValue} */  
    const MissingSourceNameValue = 500;
    /** {@see ExceptionMessages::InvalidSourceNameType} */  
    const InvalidSourceNameType = 500;
    /** {@see ExceptionMessages::InvalidSourceNameArray} */  
    const InvalidSourceNameArray = 500;
    
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
    /** {@see ExceptionMessages::DuplicatedSourceUniqueValue} */  
    const DuplicatedSourceUniqueValue = 500;
    /** {@see ExceptionMessages::UsedSourceByWorkers} */  
    const UsedSourceByWorkers = 500;
    /** {@see ExceptionMessages::UsedSourceByUnits} */  
    const UsedSourceByUnits = 500;
    
        //delete
        /** {@see ExceptionMessages::DuplicateDelSourceValue} */  
        const DuplicateDelSourceValue = 500;
        /** {@see ExceptionMessages::NotFoundDelSourceValue} */  
        const NotFoundDelSourceValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesSourceUnits} */  
        const ReferencesSourceUnits = 500;
        /** {@see ExceptionMessages::ReferencesSourceWorkers} */  
        const ReferencesSourceWorkers = 500;

//= Levels======================================================================
    
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
    /** {@see ExceptionMessages::UsedLevelByGroups} */ 
    const UsedLevelByGroups = 500;
    /** {@see ExceptionMessages::DuplicatedLevelIDUniqueValue} */
    const DuplicatedLevelIDUniqueValue = 500;  //EXTRA only for ID REFERENCE

        //delete
        /** {@see ExceptionMessages::DuplicateDelLevelsValue} */
        const DuplicateDelLevelsValue = 500;
        /** {@see ExceptionMessages::NotFoundDelLevelsValue} */
        const NotFoundDelLevelsValue = 500;

        //references
        /** {@see ExceptionMessages::ReferencesLevelsGroups} */
        const ReferencesLevelsGroups = 500;
        
//= Groups======================================================================
    
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

        //delete
        /** {@see ExceptionMessages::DuplicateDelGroupValue} */
        const DuplicateDelGroupValue = 500;
        /** {@see ExceptionMessages::NotFoundDelGroupValue} */
        const NotFoundDelGroupValue = 500;

//******************************************************************************  



    
    
        
    
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
    
    //= Units===================================================================
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
    
    /** {@see ExceptionMessages::MissingUnitNameParam} */   
    const MissingUnitNameParam = 500;
    /** {@see ExceptionMessages::MissingUnitNameValue} */   
    const MissingUnitNameValue = 500;
    /** {@see ExceptionMessages::InvalidUnitNameType} */   
    const InvalidUnitNameType = 500;
    /** {@see ExceptionMessages::InvalidUnitNameArray} */   
    const InvalidUnitNameArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitRegistryNoParam} */   
    const MissingUnitRegistryNoParam = 500;
    /** {@see ExceptionMessages::MissingUnitRegistryNoValue} */   
    const MissingUnitRegistryNoValue = 500;
    /** {@see ExceptionMessages::InvalidUnitRegistryNoType} */   
    const InvalidUnitRegistryNoType = 500;
    /** {@see ExceptionMessages::InvalidUnitRegistryNoArray} */   
    const InvalidUnitRegistryNoArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitSpecialNameParam} */   
    const MissingUnitSpecialNameParam = 500;
    /** {@see ExceptionMessages::MissingUnitSpecialNameValue} */   
    const MissingUnitSpecialNameValue = 500;
    /** {@see ExceptionMessages::InvalidUnitSpecialNameType} */   
    const InvalidUnitSpecialNameType = 500;
    /** {@see ExceptionMessages::InvalidUnitSpecialNameArray} */   
    const InvalidUnitSpecialNameArray = 500;
       
    /** {@see ExceptionMessages::MissingUnitPhoneNumberParam} */   
    const MissingUnitPhoneNumberParam = 500;
    /** {@see ExceptionMessages::MissingUnitPhoneNumberValue} */   
    const MissingUnitPhoneNumberValue = 500;
    /** {@see ExceptionMessages::InvalidUnitPhoneNumberType} */   
    const InvalidUnitPhoneNumberType = 500;
    /** {@see ExceptionMessages::InvalidUnitPhoneNumberArray} */   
    const InvalidUnitPhoneNumberArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitEmailParam} */   
    const MissingUnitEmailParam = 500;
    /** {@see ExceptionMessages::MissingUnitEmailValue} */   
    const MissingUnitEmailValue = 500;
    /** {@see ExceptionMessages::InvalidUnitEmailType} */   
    const InvalidUnitEmailType = 500;
    /** {@see ExceptionMessages::InvalidUnitEmailArray} */   
    const InvalidUnitEmailArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitFaxNumberParam} */   
    const MissingUnitFaxNumberParam = 500;
    /** {@see ExceptionMessages::MissingUnitFaxNumberValue} */   
    const MissingUnitFaxNumberValue = 500;
    /** {@see ExceptionMessages::InvalidUnitFaxNumberType} */   
    const InvalidUnitFaxNumberType = 500;
    /** {@see ExceptionMessages::InvalidUnitFaxNumberArray} */   
    const InvalidUnitFaxNumberArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitStreetAddressParam} */   
    const MissingUnitStreetAddressParam = 500;
    /** {@see ExceptionMessages::MissingUnitStreetAddressValue} */   
    const MissingUnitStreetAddressValue = 500;
    /** {@see ExceptionMessages::InvalidUnitStreetAddressType} */   
    const InvalidUnitStreetAddressType = 500;
    /** {@see ExceptionMessages::InvalidUnitStreetAddressArray} */   
    const InvalidUnitStreetAddressArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitPostalCodeParam} */   
    const MissingUnitPostalCodeParam = 500;
    /** {@see ExceptionMessages::MissingUnitPostalCodeValue} */   
    const MissingUnitPostalCodeValue = 500;
    /** {@see ExceptionMessages::InvalidUnitPostalCodeType} */   
    const InvalidUnitPostalCodeType = 500;
    /** {@see ExceptionMessages::InvalidUnitPostalCodeArray} */   
    const InvalidUnitPostalCodeArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitTaxNumberParam} */   
    const MissingUnitTaxNumberParam = 500;
    /** {@see ExceptionMessages::MissingUnitTaxNumberValue} */   
    const MissingUnitTaxNumberValue = 500;
    /** {@see ExceptionMessages::InvalidUnitTaxNumberType} */   
    const InvalidUnitTaxNumberType = 500;
    /** {@see ExceptionMessages::InvalidUnitTaxNumberArray} */   
    const InvalidUnitTaxNumberArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitAreaTeamNumberParam} */   
    const MissingUnitAreaTeamNumberParam = 500;
    /** {@see ExceptionMessages::MissingUnitAreaTeamNumberValue} */   
    const MissingUnitAreaTeamNumberValue = 500;
    /** {@see ExceptionMessages::InvalidUnitAreaTeamNumberType} */   
    const InvalidUnitAreaTeamNumberType = 500;
    /** {@see ExceptionMessages::InvalidUnitAreaTeamNumberArray} */   
    const InvalidUnitAreaTeamNumberArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitLevelsCountParam} */   
    const MissingUnitLevelsCountParam = 500;
    /** {@see ExceptionMessages::MissingUnitLevelsCountValue} */   
    const MissingUnitLevelsCountValue = 500;
    /** {@see ExceptionMessages::InvalidUnitLevelsCountType} */   
    const InvalidUnitLevelsCountType = 500;
    /** {@see ExceptionMessages::InvalidUnitLevelsCountArray} */   
    const InvalidUnitLevelsCountArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitGroupsCountParam} */   
    const MissingUnitGroupsCountParam = 500;
    /** {@see ExceptionMessages::MissingUnitGroupsCountValue} */   
    const MissingUnitGroupsCountValue = 500;
    /** {@see ExceptionMessages::InvalidUnitGroupsCountType} */   
    const InvalidUnitGroupsCountType = 500;
    /** {@see ExceptionMessages::InvalidUnitGroupsCountArray} */   
    const InvalidUnitGroupsCountArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitStudentsCountParam} */   
    const MissingUnitStudentsCountParam = 500;
    /** {@see ExceptionMessages::MissingUnitStudentsCountValue} */   
    const MissingUnitStudentsCountValue = 500;
    /** {@see ExceptionMessages::InvalidUnitStudentsCountType} */   
    const InvalidUnitStudentsCountType = 500;
    /** {@see ExceptionMessages::InvalidUnitStudentsCountArray} */   
    const InvalidUnitStudentsCountArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitLatitudeParam} */   
    const MissingUnitLatitudeParam = 500;
    /** {@see ExceptionMessages::MissingUnitLatitudeValue} */   
    const MissingUnitLatitudeValue = 500;
    /** {@see ExceptionMessages::InvalidUnitLatitudeType} */   
    const InvalidUnitLatitudeType = 500;
    /** {@see ExceptionMessages::InvalidUnitLatitudeArray} */   
    const InvalidUnitLatitudeArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitLongitudeParam} */   
    const MissingUnitLongitudeParam = 500;
    /** {@see ExceptionMessages::MissingUnitLongitudeValue} */   
    const MissingUnitLongitudeValue = 500;
    /** {@see ExceptionMessages::InvalidUnitLongitudeType} */   
    const InvalidUnitLongitudeType = 500;
    /** {@see ExceptionMessages::InvalidUnitLongitudeArray} */   
    const InvalidUnitLongitudeArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitPositioningParam} */   
    const MissingUnitPositioningParam = 500;
    /** {@see ExceptionMessages::MissingUnitPositioningValue} */   
    const MissingUnitPositioningValue = 500;
    /** {@see ExceptionMessages::InvalidUnitPositioningType} */   
    const InvalidUnitPositioningType = 500;
    /** {@see ExceptionMessages::InvalidUnitPositioningArray} */   
    const InvalidUnitPositioningArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitCreationFekParam} */       
    const MissingUnitCreationFekParam = 500;
    /** {@see ExceptionMessages::MissingUnitCreationFekValue} */   
    const MissingUnitCreationFekValue = 500;
    /** {@see ExceptionMessages::InvalidUnitCreationFekType} */   
    const InvalidUnitCreationFekType = 500;
    /** {@see ExceptionMessages::InvalidUnitCreationFekArray} */   
    const InvalidUnitCreationFekArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitLastUpdateParam} */   
    const MissingUnitLastUpdateParam = 500;
    /** {@see ExceptionMessages::MissingUnitLastUpdateValue} */   
    const MissingUnitLastUpdateValue = 500;
    /** {@see ExceptionMessages::InvalidUnitLastUpdateType} */   
    const InvalidUnitLastUpdateType = 500;
    /** {@see ExceptionMessages::InvalidUnitLastUpdateArray} */   
    const InvalidUnitLastUpdateArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitLastSyncParam} */   
    const MissingUnitLastSyncParam = 500;
    /** {@see ExceptionMessages::MissingUnitLastSyncValue} */   
    const MissingUnitLastSyncValue = 500;    
    /** {@see ExceptionMessages::InvalidUnitLastSyncType} */   
    const InvalidUnitLastSyncType = 500;
    /** {@see ExceptionMessages::InvalidUnitLastSyncArray} */   
    const InvalidUnitLastSyncArray = 500;
    
    /** {@see ExceptionMessages::MissingUnitCommentsParam} */   
    const MissingUnitCommentsParam = 500;
    /** {@see ExceptionMessages::MissingUnitCommentsValue} */   
    const MissingUnitCommentsValue = 500;
    /** {@see ExceptionMessages::InvalidUnitCommentsType} */   
    const InvalidUnitCommentsType = 500;    
    /** {@see ExceptionMessages::InvalidUnitCommentsArray} */   
    const InvalidUnitCommentsArray = 500;

    /** {@see ExceptionMessages::DuplicatedUnitValue} */
    const DuplicatedUnitValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitUniqueValue} */
    const DuplicatedUnitUniqueValue = 500;
    /** {@see ExceptionMessages::DuplicatedUnitMMIDUniqueValue} */
    const DuplicatedUnitMMIDUniqueValue = 500;  //EXTRA only for ID REFERENCE

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

    //= Connections=============================================================
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
    
    // =Relations===============================================================
    /** {@see ExceptionMessages::MissingRelationIDParam} */
    const MissingRelationIDParam = 500;
    /** {@see ExceptionMessages::MissingRelationIDValue} */
    const MissingRelationIDValue = 500;
    /** {@see ExceptionMessages::InvalidRelationIDType} */
    const InvalidRelationIDType = 500;
    /** {@see ExceptionMessages::InvalidRelationIDArray} */
    const InvalidRelationIDArray = 500;
    
    /** {@see ExceptionMessages::MissingRelationValue} */
    const MissingRelationValue = 500;
    /** {@see ExceptionMessages::MissingRelationParam} */
    const MissingRelationParam = 500;
    /** {@see ExceptionMessages::InvalidRelationValue} */
    const InvalidRelationValue = 500;
    /** {@see ExceptionMessages::InvalidRelationType} */
    const InvalidRelationType = 500;
    /** {@see ExceptionMessages::InvalidRelationArray} */
    const InvalidRelationArray = 500;
    
    /** {@see ExceptionMessages::MissingRelationHostUnitMMIDParam} */  
    const MissingRelationHostUnitMMIDParam = 500;
    /** {@see ExceptionMessages::MissingRelationHostUnitMMIDValue} */
    const MissingRelationHostUnitMMIDValue = 500;
    /** {@see ExceptionMessages::InvalidRelationHostUnitMMIDType} */
    const InvalidRelationHostUnitMMIDType = 500;
    /** {@see ExceptionMessages::InvalidRelationHostUnitMMIDArray} */
    const InvalidRelationHostUnitMMIDArray = 500;
    /** {@see ExceptionMessages::InvalidRelationHostUnitMMIDValue} */
    const InvalidRelationHostUnitMMIDValue = 500; //EXTRA only for ID REFERENCE
    
    /** {@see ExceptionMessages::MissingRelationGuestUnitMMIDParam} */
    const MissingRelationGuestUnitMMIDParam = 500;
    /** {@see ExceptionMessages::MissingRelationGuestUnitMMIDValue} */
    const MissingRelationGuestUnitMMIDValue = 500;
    /** {@see ExceptionMessages::InvalidRelationGuestUnitMMIDType} */
    const InvalidRelationGuestUnitMMIDType = 500;
    /** {@see ExceptionMessages::InvalidRelationGuestUnitMMIDArray} */
    const InvalidRelationGuestUnitMMIDArray = 500;
    /** {@see ExceptionMessages::InvalidRelationGuestUnitMMIDValue} */
    const InvalidRelationGuestUnitMMIDValue = 500; //EXTRA only for ID REFERENCE
    
    
    /** {@see ExceptionMessages::MissingRelationStateParam} */
    const MissingRelationStateParam = 500;
    /** {@see ExceptionMessages::MissingRelationStateValue} */
    const MissingRelationStateValue = 500;
    /** {@see ExceptionMessages::InvalidRelationStateType} */
    const InvalidRelationStateType = 500;
    /** {@see ExceptionMessages::InvalidRelationStateArray} */
    const InvalidRelationStateArray = 500;

    /** {@see ExceptionMessages::MissingRelationTrueDateParam} */
    const MissingRelationTrueDateParam = 500;
    /** {@see ExceptionMessages::MissingRelationTrueDateValue} */
    const MissingRelationTrueDateValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTrueDateType} */
    const InvalidRelationTrueDateType = 500;
    /** {@see ExceptionMessages::InvalidRelationTrueDateArray} */
    const InvalidRelationTrueDateArray = 500;
    /** {@see ExceptionMessages::InvalidRelationTrueDateValidType} */
    const InvalidRelationTrueDateValidType = 500;
    
    /** {@see ExceptionMessages::MissingRelationTrueFekParam} */
    const MissingRelationTrueFekParam = 500;
    /** {@see ExceptionMessages::MissingRelationTrueFekValue} */
    const MissingRelationTrueFekValue = 500;
    /** {@see ExceptionMessages::InvalidRelationTrueFekType} */
    const InvalidRelationTrueFekType = 500;
    /** {@see ExceptionMessages::InvalidRelationTrueFekArray} */
    const InvalidRelationTrueFekArray = 500;
    
    /** {@see ExceptionMessages::MissingRelationFalseDateParam} */
    const MissingRelationFalseDateParam = 500;
    /** {@see ExceptionMessages::MissingRelationFalseDateValue} */
    const MissingRelationFalseDateValue = 500;
    /** {@see ExceptionMessages::InvalidRelationFalseDateType} */
    const InvalidRelationFalseDateType = 500;  
    /** {@see ExceptionMessages::InvalidRelationFalseDateArray} */
    const InvalidRelationFalseDateArray = 500;
    /** {@see ExceptionMessages::InvalidRelationFalseDateValidType} */
    const InvalidRelationFalseDateValidType = 500;
    
    /** {@see ExceptionMessages::MissingRelationFalseFekParam} */
    const MissingRelationFalseFekParam = 500;
    /** {@see ExceptionMessages::MissingRelationFalseFekValue} */
    const MissingRelationFalseFekValue = 500;
    /** {@see ExceptionMessages::InvalidRelationFalseFekType} */
    const InvalidRelationFalseFekType = 500;
    /** {@see ExceptionMessages::InvalidRelationFalseFekArray} */
    const InvalidRelationFalseFekArray = 500;
    
    /** {@see ExceptionMessages::DuplicatedRelationValue} */
    const DuplicatedRelationValue = 500;
    /** {@see ExceptionMessages::DuplicatedRelationUniqueValue} */
    const DuplicatedRelationUniqueValue = 500;
  
        //delete
        /** {@see ExceptionMessages::DuplicateDelRelationValue} */
        const DuplicateDelRelationValue = 500;
        /** {@see ExceptionMessages::NotFoundDelRelationValue} */
        const NotFoundDelRelationValue = 500;
        
}

?>