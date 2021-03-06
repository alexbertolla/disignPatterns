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
use elements\fieldset\Fieldset;
use interfaces\InterfaceEditbleElement;
use interfaces\InterfaceElementHasChildren;
use elements\ul\UL;
use elements\li\LI;

/**
 * Description of Form
 *
 * @author alex
 */
class Form extends Validator implements InterfaceFullElements, InterfaceElement, InterfaceElementHasChildren {

    private $headerMessages;
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
        $this->setHeaderMessages();
        parent::__construct($this);
    }

    private function setHeaderMessages() {
        $this->headerMessages = new UL('header', 'header');
        $this->addChild($this->headerMessages);
    }

    public function addMessageToHeader(LI $liErrorMessage) {
        print_r($liErrorMessage->render());
//        echo $liErrorMessage->render() . '|';
        $this->headerMessages->addChild($liErrorMessage);
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
        $renderAll = $this->renderChildren();
        $this->renderPrepare($renderAll);
        echo $this->form;
    }

    public function renderField($field) {
        $child = $this->children[$field];
        if ($child) {
            $this->renderPrepare($child->render());
            $resultado = $this->form;
        } else {
            $resultado = "elemento {$field} não existe no formulário! ";
        }
        $this->exibirResultado($resultado);
    }

    private function exibirResultado($resultado) {
        echo $resultado;
    }

    public function createField(InterfaceElement $element, Fieldset $field) {
        $field->addChild($element);
        $this->addChild($field);
    }

    public function pupular(array $dados = NULL) {
        foreach ($dados as $key => $value) {
            foreach ($this->children as $name => $element) {
                if (($element instanceof InterfaceEditbleElement) && ($key === $name)) {
                    $element->setValue($value);
                }
            }
        }
    }

    public function validarCampos() {
        $this->validarCampoVazio($this->children['nome']);
        $this->validarCampoNumerico($this->children['valor']);
        $this->validarCampoMaxLenght($this->children['descricao']);
    }

    public function addChild(InterfaceElement $element) {
        $this->children[$element->name] = $element;
    }

    public function renderChildren() {
        $children = '';
        foreach ($this->children as $child) {
            $children .= $child->render();
        }
        return $children;
    }

}
