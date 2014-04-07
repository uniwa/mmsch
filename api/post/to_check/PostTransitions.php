<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * Καταχώρηση : Μεταβάσεις Μονάδων
 * 
 * 
 * Η κλήση της μεθόδου μπορεί να γίνει με POST της παραμέτρου {'method': 'PostTransitions'} στη διεύθυνση : 
 * <br> http://localhost/~khitas/mmsch/server/api.php 
 *
 * 
 * 
 */

function PostTransitions( $mm_id, $fek, $transition_date, $from_state, $to_state )
{
    global $db;
    global $Options;

    $result = array();  

    $result["method"] = "PostTransitions";

    try
    {
//==============================================================================
        
        $oFromState = new StatesExt($db);
        if (is_numeric($from_state))
        {
            $filter = array( new DFC(StatesExt::FIELD_STATE_ID, $from_state, DFC::EXACT) );
            $oFromState = $oFromState->findByFilter($db, $filter, true);  
        }
        else if ($from_state)
        {
            $filter = array( new DFC(StatesExt::FIELD_NAME, $from_state, DFC::EXACT) );
            $oFromState = $oFromState->findByFilter($db, $filter, true);
        }
        
        if (count($oFromState) < 1)
	        throw new Exception("Η Αρχική Κατάσταση δεν βρέθηκε (from_state : $from_state)", 500);
        else if ($from_state)
            $fFromState = $oFromState[0]->getStateId();
        else 
            $fFromState = NULL;
        
//==============================================================================
       
        $oToState = new StatesExt($db);
        if (is_numeric($to_state))
        {
            $filter = new DFC(StatesExt::FIELD_STATE_ID, $to_state, DFC::EXACT);
            $oToState = $oToState->findByFilter($db, $filter, true);  
        }
        else if ($to_state)
        {
            $filter = new DFC(StatesExt::FIELD_NAME, $to_state, DFC::EXACT);
            $oToState = $oToState->findByFilter($db, $filter, true);
        }
        
        if (count($oToState) < 1)
	        throw new Exception("Η Αρχική Κατάσταση δεν βρέθηκε (to_state : $to_state)", 500);
        else if ($to_state)
            $fToState = $oToState[0]->getStateId();
        else 
            $fToState = NULL;
        
//==============================================================================

        $oUnit = new UnitsExt($db);
        if (! $mm_id)
        {
	        throw new Exception("Ο Κωδικός ΜΜ της Μονάδας δεν έχει τιμή (mm_id : $mm_id)", 500);
        }
        else if (!is_numeric($mm_id))
        {
	        throw new Exception("Ο Κωδικός ΜΜ της Μονάδας πρέπει να είναι αριθμητικός (mm_id : $mm_id)", 500);
        }
        else if ($mm_id)
        {
            $filter = new DFC(UnitsExt::FIELD_MM_ID, $mm_id, DFC::EXACT);
            $oUnit = $oUnit->findByFilter($db, $filter, true);
        }
        
        if (count($oUnit) < 1)
	        throw new Exception("Η Μονάδα δεν βρέθηκε (mm_id : $mm_id)", 500);
        else if ($mm_id)
            $fMMId = $oUnit[0]->getMmId();
        
//==============================================================================
        
        $fFek = $fek ? $fek : NULL;
        $fTransitionDate = $transition_date ? $transition_date : NULL;
                
//= Στοιχεία Μετάβασης ==========================================================

        $oTransition = new TransitionsExt($db);
        
        $oTransition->setMmId( $fMMId );
        $oTransition->setFek( $fFek );
        $oTransition->setFromStateId($fFromState);        
        $oTransition->setToStateId( $fToState );
        $oTransition->setTransitionDate( $fTransitionDate );
        
        $oTransition->insertIntoDatabase($db);
        
        $result["transition_id"] = $oTransition->getTransitionId();
        
        $result["message"] = "Η Μετάβαση της Μονάδας δημιουργήθηκε";
 
        $result["status"] = 200;
        
    } 
    catch (Exception $e) 
    {
        //var_dump($e->getMessage());
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]:".$e->getMessage();
    } 
    
    return $result;
}

?>