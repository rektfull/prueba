<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {		

    		$name = new Zend_Form_Element_Text('name');
    		$name->setLabel('name')
    			 ->addFilter('Striptags')
    			 ->setRequired(true);	

    		$password = new Zend_Form_Element_Password('password');
    		$password->setLabel('password')
    				 ->addFilter('StripTags')
    				 ->setRequired(true);

    		$submit = new Zend_Form_Element_Submit('subbbbb');
    		$submit->setLabel('Submit Son');


    		$this->addElements(array($name, $password, $submit));		 
	}



/**
<form action="page .php" method="post">
|	<input type="text" name="blah"/>	
</form>
*/
}

