<?php
require_once 'Api_Db/Db/Api.php';
require_once 'Api_Db/Db/Catalog.php';

class Apitools_Model_Db_Sina extends Apitools_Model_Db_Abstract
{
	public function __construct()
	{
		$this->_type = Apitools_Model_Db_Abstract::SINA;
		$this->_catalogEntity = new Db_Model_Catalog();
	    $this->_apiEntity = new Db_Model_Api();
	}
		
}