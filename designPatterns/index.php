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
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './autoload.php';
        
        $txtNome = new TextInput('nome', 'nome', '');
        $txtValor = new TextInput('valor', 'valor', '');
        $txtDescricao = new TextInput('descricao', 'descricao', '');
        
        $fieldset = new Fieldset('fieldset', 'fieldset');
        
        $formulario = new Form('form', 'form', 'POST', 'index.php');
        $formulario->createField($txtNome, $fieldset);
        $formulario->createField($txtValor, $fieldset);
        $formulario->createField($txtDescricao, $fieldset);
        
        $formulario->render();
        ?>
    </body>
</html>
