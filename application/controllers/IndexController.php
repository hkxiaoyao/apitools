<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        //$this->_helper->getHelper('viewRenderer')->setNoRender();
		$this->_helper->layout->disableLayout();
				
    }


}

