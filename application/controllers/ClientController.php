<?php

class ClientController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }
    public function listclientAction()
    {
        include("config.php");
        $process = curl_init("https://app.alegra.com/api/v1/contacts/");
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml','Accept: application/json' ));
        curl_setopt($process, CURLOPT_USERPWD, $token);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($process, CURLOPT_GET, 1);
        
        $return = curl_exec($process);

        

        $response = json_decode($return, true );

        echo var_dump($response);

        curl_close($process);

        $this->_helper->layout->setLayout('layout');
        $this->view->something = $response;


    }

    public function newclientAction()
    {
        $this->_helper->layout->setLayout('layout');

    }
    public function saveAction()
    {


	}	

}

