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
 * @version     v0.1
 */

class db_Model extends TinyMVC_Model{
    
    function readDB()
    {
        $strsql = "SELECT * FROM jobs";
        $objPdoStmt = $this->db->pdo->prepare($strsql);
        $objPdoStmt->execute();
        $arrResult = $objPdoStmt->fetchall(PDO::FETCH_ASSOC);
        
        return($arrResult);
        
    }
}

?>