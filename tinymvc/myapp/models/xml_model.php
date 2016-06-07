<?php

/**
 * xml_model.php
 *
 * Functions to read/write XML files
 *
 * @author		Jeroen Reekmans
 * @company     Xerox
 * @client      Baloise
 * @copyright   2016
 * @version     v0.2
 */

class xml_Model extends TinyMVC_Model{
    
    function rebuildXML($fixed_XML_position, $variable_XML_position, $DB_data)
    {        
        $xml=simplexml_load_file($fixed_XML_position) or die("Error: Cannot create object");

        var_dump($DB_data);
        
        foreach ($DB_data as $value) {
                $xmlChild = $xml->addChild('app');
                $xmlChild->addChild('id', $value['processname']);
                $xmlChild->addChild('title', $value['processname']);
                $xmlChild->addChild('frequency', 'MONTHLY');
                $xmlChild->addChild('processing_type', 'MOVE_TNO');
                $xmlChild->addChild('target_dir', 'd:\xpp\tno</target_dir');
                $xmlChild->addChild('source_dir', 'd:\xpp\basetno\\'.$value['processname']);
                $xmlChild->addChild('csv_dir', 'd:\xpp\csv');
                $xmlChild->addChild('log_base_dir', 'd:\xpp\log');
                $xmlChild->addChild('backend_dir', 'd:\xpp\backend');
                $xmlChild->addChild('report_text', $value['deviated'].' '.$value['processname']);
                $xmlChild->addChild('report_path', 'd:\xpp\tmp\report.xml');
            }
        
        $xml->asXml('../baloise/dashboard/config.xml');
        var_dump($xml);
        
        return($xml);
    }
    
    <target_dir>d:\xpp\tno</target_dir>

}

?>