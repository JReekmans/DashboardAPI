<?php

/**
 * db_model.php
 *
 * Functions to call DB
 *
 * @author		Jeroen Reekmans
 * @company     Xerox
 * @client      Baloise
 * @copyright   2016
 * @version     v0.2
 */

class db_Model extends TinyMVC_Model{
    
    function readDB()
    {
        $strsql = "SELECT * FROM jobs";
        $objPdoStmt = $this->db->pdo->prepare($strsql);
        $objPdoStmt->execute();
        $arrResult = $objPdoStmt->fetchall(PDO::FETCH_ASSOC);
        
            $temp_array = array(); 
            $i = 0; 
            $key_array = array(); 
            
            foreach($arrResult as $val) { 
                if (!in_array($val['processname'], $key_array)) { 
                    $key_array[$i] = $val['processname']; 
                    $temp_array[$i] = $val; 
                } 
                $i++; 
            } 
        
        return($temp_array);
    }
    
    function removeId($removeId)
    {
        $strsql = "DELETE FROM jobs WHERE processname = '".$removeId."'";
        $objPdoStmt = $this->db->pdo->prepare($strsql);
        $objPdoStmt->execute();
    }
}

?>