<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace elements\fieldset;

use interfaces\InterfaceElement;
use interfaces\InterfaceFullElements;
use elements\AbstractElement;

/**
 * Description of Filedset
 *
 * @author alex.bertolla
 */
class Fieldset implements InterfaceElement, InterfaceFullElements {

    private $tag;
    public $name;
    private $id;
    private $children;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
        $this->children = [];
    }

    function addChild(InterfaceElement $element) {
        $this->children[] = $element;
    }

    public function renderChildren() {
        foreach ($this->children as $child) {
            $this->tag.=$child->render();
        }
    }

    public function abrirTag() {
        $attributes = $this->setAttributes();
        $this->tag = "<fieldset {$attributes}>";
    }

    public function fecharTag() {
        $this->tag .= "</fieldset>";
    }

    public function render() {
        $this->abrirTag();
        $this->renderChildren();
        $this->fecharTag();
        return $this->tag;
    }

    public function setAttributes() {
        return " name='{$this->name}'"
                . " id='{$this->id}' ";
    }

}
