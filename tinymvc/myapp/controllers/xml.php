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
 * @version     v0.3
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
    $variable_XML_position = "..\\baloise\dashboard\config.xml";
    
    // Init
    $this->load->model('db_model','objDb');
    $this->load->model('xml_model','objxml');
    
    $DB_data = $this->objDb->readDb();
    $Variable_XML_Data = $this->objxml->rebuildXML($fixed_XML_position, $variable_XML_position, $DB_data);
    
  }
  
  function removeFromDb()
  {
    $removeId = $_GET['id'];
    
    $this->load->model('db_model','objDb');
    
    $this->objDb->removeId($removeId);
  }
}

?>
