<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InputRadio
 *
 * @author alex
 */
class InputRadio extends InputAbstrac implements InterfaceInput {

    private $checked;

    public function __construct($type, $id, $name, $value, $label, $checked) {
        parent::__construct($type, $id, $name, $value, $label);
        $this->checked = ($checked) ? "checked='{$this->checked}'" : '';
    }

    public function renderInput() {
        return "{$this->label}: "
                . "<input "
                . "type='{$this->type}' "
                . " id='{$this->id} "
                . " name ='{$this->name}' "
                . " value='{$this->value}' "
                . " {$this->checked} "
                . ">";
    }

}
