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
 * @version     v0.1
 */

class xml_Model extends TinyMVC_Model{
    
    function readFixedXML($fixed_XML_position)
    {        
        $xml=simplexml_load_file($fixed_XML_position) or die("Error: Cannot create object");

        return($xml);
    }
}

?>