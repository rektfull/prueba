<?php

class ClientController extends Zend_Controller_Action{

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

        curl_close($process);

        $this->_helper->layout->setLayout('layout');

        $this->view->something = $response;


    }

    public function newclientAction()
    {
        

        $this->_helper->layout->setLayout('layout');

    }
    public function saveAction(){

            include("config.php");

            $fields = array();

            if (isset($_POST["nombre"])) {
                $fields["name"] = urlencode($_POST["nombre"]);  
            }
            if (isset($_POST["nit"])) {
                $fields["identification"] = urlencode($_POST["nit"]);  
            }
            /*if (isset($_POST["direccion"])) {
                $fields["address"] = $_POST["direccion"];  
            }
            if (isset($_POST["correo"])) {
                $fields["email"] = $_POST["correo"];  
            }
            if (isset($_POST["telefono1"])) {
                $fields["phonePrimary"] = $_POST["telefono1"];  
            }
            if (isset($_POST["telefono2"])) {
                $fields["phoneSecondary"] = $_POST["telefono2"];  
            }
            if (isset($_POST["fax"])) {
                $fields["fax"] = $_POST["fax"];  
            }
            if (isset($_POST["celular"])) {
                $fields["mobile"] = $_POST["celular"];  
            }
            if (isset($_POST["combo"])) {
                $fields["priceList"] = $_POST["combo"];  
            }
            if (isset($_POST["combo2"])) {
                $fields["seller"] = $_POST["combo2"];  
            }
             if (isset($_POST["combo3"])) {
                $fields["term"] = $_POST["combo3"];  
            }
            if (isset($_POST["checkbox"])) {
                $fields["type"] = $_POST["checkbox"];  
            }
            if (isset($_POST["message"])) {
                $fields["observations"] = $_POST["message"];  
            }*/

            $url = 'https://app.alegra.com/api/v1/contacts';


            $ch = curl_init('https://app.alegra.com/api/v1/contacts');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml','Accept: application/json' )); 
            curl_setopt($ch, CURLOPT_USERPWD, $token);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "name=holaaaa&identification=3567");

            // execute!
            $response = curl_exec($ch);

            // close the connection, release resources used
            curl_close($ch);

            // do anything you want with your response
            var_dump($response);


        }//ActionSAVE
}

?>