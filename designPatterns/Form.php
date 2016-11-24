<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Form
 *
 * @author alex
 */
class Form {

    public $name;
    public $action;
    public $method;
    public $children;

    public function __construct($name, $action, $method) {
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
        $this->children = array();
    }

    function addInput(InterfaceInput $input) {
        $this->children[]=$input->renderInput();
    }
    
    function render(){
        foreach ($this->children as $child){
            echo $child;
        }
    }

}
