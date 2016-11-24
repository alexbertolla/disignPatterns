<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace src\elements;

use src\interfaces\InterfaceElement;

/**
 * Description of AbstractElement
 *
 * @author alex
 */
abstract class AbstractElement implements InterfaceElement {

    protected $name;
    protected $id;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    protected function renderAttributes() {
        return " name='{$this->name}' id='{$this->id}' ";
    }

}
