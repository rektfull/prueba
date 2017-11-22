<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        echo 1;
    }

    public function chatAction()
    {
 	   	$this->view->assign('msg', 'This is a message that holds data');
 	   	//'Im in the chat method';
    }
    public function otherAction()
    {

    	echo 22;
    }

}

