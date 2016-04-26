<?php

/**
 * xml.php
 *
 * API for editing XML file for dashboard
 *
 * @author		Jeroen Reekmans
 * @company     Xerox
 * @client      Baloise
 * @copyright   2016
 * @version     v0.2
 */

class Xml_Controller extends TinyMVC_Controller
{
  function index()
  {
    
  }
  
  function rebuildXML()
  {
    // Variable
    $fixed_XML_position = "..\\baloise\dashboard\config_fixed.xml";
    
    // Init
    $this->load->model('db_model','objDb');
    $this->load->model('xml_model','objxml');
    
    $DB_data = $this->objDb->readDb();
    $Fixed_XML_Data = $this->objxml->readFixedXML($fixed_XML_position);
    
    var_dump($Fixed_XML_Data);
        
    
  }
}

?>
