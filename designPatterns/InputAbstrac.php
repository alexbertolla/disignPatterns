<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InputAbstrac
 *
 * @author alex
 */
abstract class InputAbstrac {

    public $type, $id, $name, $value, $label;

    public function __construct($type, $id, $name, $value, $label) {
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

}
