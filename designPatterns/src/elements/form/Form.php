<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace src\elements\form;

use src\elements\AbstractElement;
use src\interfaces\InterfaceFullElements;
/**
 * Description of Form
 *
 * @author alex
 */
class Form extends AbstractElement implements InterfaceFullElements{

    private $form;
    private $method;
    private $action;
    private $children;

    public function __construct($name, $id, $method, $action) {
        parent::__construct($name, $id);
        $this->method = $method;
        $this->action = $action;
        $this->children = [];
    }

    public function abrirTag() {
        $attributes = $this->renderAttributes()
                . " method={$this->method} "
                . " action={$this->action} ";
        $this->form = "<form {$attributes} >";
    }

    public function fecharTag() {
        $this->form .= ' </form>';
    }

    public function render() {
        $this->abrirTag();
        $this->renderElement();
        $this->fecharTag();
        echo $this->form;
    }

    public function renderElements() {
        foreach ($this->children as $child) {
            $this->form .= $child->render();
        }
    }

    public function addElement($element) {
        $this->children[] = $element;
    }

}
