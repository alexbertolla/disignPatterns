<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InputText
 *
 * @author alex
 */
class InputText extends InputAbstrac implements InterfaceInput {

    public function __construct($type, $id, $name, $value, $label) {
        parent::__construct($type, $id, $name, $value, $label);
    }

    public function renderInput() {
        return "{$this->label}: <input type='{$this->type}' id='{$this->id} name ='{$this->name}' value='{$this->value}' >";
    }

}
