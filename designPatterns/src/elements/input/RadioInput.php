<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace src\elements\input;

use src\elements\input\AbstractInput;

/**
 * Description of RadioInput
 *
 * @author alex
 */
class RadioInput extends AbstractInput {

    private $checked;

    public function __construct($name, $id, $value, $type, $label, $checked) {
        parent::__construct($name, $id, $value, $type, $label);
        $this->checked = $checked;
    }

    public function declararTag() {
        $this->checked = ($this->checked) ? $this->checked : '';
        $this->input = "<input "
                . " type='{$this->type}' "
                . " id='{$this->id} "
                . " name ='{$this->name}' "
                . " value='{$this->value}' "
                . " {$this->checked} "
                . "/>";
    }

    public function render() {
        echo $this->input;
    }
    
    public function setLabel() {
        $this->input = $this->label . ': ' . $this->input;
    }

}
