<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

use elements\form\Form;
use elements\input\TextInput;
use elements\input\RadioInput;
use elements\paragraph\Paragraph;
use elements\label\Label;
use elements\button\Button;
use elements\fieldset\Fieldset;
use elements\select\Select;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './autoload.php';

        $select = new Select('select', 'select', FALSE, new Label('Categoria: '));
        $select->addChild(1, 'Cat1');
        $select->addChild(2, 'Cat2');
        $select->addChild(3, 'Cat3');

        $txtNome = new TextInput('nome', 'nome', '', new Label('Nome: '));
        $txtValor = new TextInput('valor', 'valor', '', new Label('Valor: '));
        $txtDescricao = new TextInput('descricao', 'descricao', '', new Label('Descrção: '));
        $btnEnviar = new Button('enviar', 'enviar', 'button', new Label('Enviar'));

        $fieldset = new Fieldset('fieldset', 'fieldset');

        $formulario = new Form('form', 'form', 'POST', 'index.php');
        $formulario->createField(new Paragraph($txtNome), $fieldset);
        $formulario->createField(new Paragraph($txtValor), $fieldset);
        $formulario->createField(new Paragraph($txtDescricao), $fieldset);
        $formulario->createField(new Paragraph($select), $fieldset);
            
        $formulario->createField(new Paragraph($btnEnviar), $fieldset);
        

        $formulario->render();
        ?>
    </body>
</html>
