<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace elements\form;

use elements\form\validators\Validator;
use interfaces\InterfaceFullElements;
use interfaces\InterfaceElement;

/**
 * Description of Form
 *
 * @author alex
 */
class Form extends Validator implements InterfaceFullElements, InterfaceElement {

    private $name;
    private $id;
    private $form;
    private $method;
    private $action;
    private $children;

    public function __construct($name, $id, $method, $action) {
        $this->name = $name;
        $this->id = $id;
        $this->method = $method;
        $this->action = $action;
        $this->children = [];
    }

    public function abrirTag() {
        $attributes = $this->setAttributes();
        $this->form = "<form {$attributes} >";
    }

    public function fecharTag() {
        $this->form .= ' </form>';
    }

    public function setAttributes() {
        return " name='{$this->name}' "
                . " id='{$this->id}' "
                . " method={$this->method} "
                . " action={$this->action} ";
    }

    private function renderPrepare($elementsRendered) {
        $this->abrirTag();
        $this->form.=$elementsRendered;
        $this->fecharTag();
    }

    public function render() {
        $renderAll = $this->renderElements();
        $this->renderPrepare($renderAll);
        echo $this->form;
    }

    public function renderField($field) {
        $child = $this->children[$field];
        if ($child) {
            $this->renderPrepare($child->render());
            $resultado = $this->form;
        }else{
            $resultado = "elemento {$field} não existe no formulário! ";
        }
        $this->exibirResultado($resultado);
    }

    private function exibirResultado($resultado) {
        echo $resultado;
    }

    public function renderElements() {
        $form = '';
        foreach ($this->children as $child) {
            $form .= $child->render();
        }
        return $form;
    }

    public function createField(InterfaceElement $element, $field) {
        $this->children[$field] = $element;
    }

}
