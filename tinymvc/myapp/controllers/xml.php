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
 * @version     v0.1
 */

class Xml_Controller extends TinyMVC_Controller
{
  function index()
  {
    
  }
  
  function rebuildXML()
  {
    // Init
    $this->load->model('db_model','objDb');
    
    $DB_data = $this->objDb->readDb();
    
    var_dump($DB_data);
  }
}

?>
