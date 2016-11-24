<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace src\elements\input;

use src\elements\input\AbstractInput;
use src\interfaces\InterfaceInput;

/**
 * Description of TextInput
 *
 * @author alex
 */
class TextInput extends AbstractInput implements InterfaceInput {

    public function __construct($name, $id, $value, $type, $label) {
        parent::__construct($name, $id, $value, $type, $label);
    }

    public function declararTag() {
        $this->input = "<input type='{$this->type}' id='{$this->id} name ='{$this->name}' value='{$this->value}'/ >";
    }

    public function render() {
        
    }

    public function setLabel() {
        $this->input = $this->label . ': ' . $this->input;
    }

}
