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
        $formulario = new Form('form2', 'form2', 'POST', 'index.php');
        $fieldset = new Fieldset('fieldset', 'fieldset');
        $formulario->createField(new Paragraph(new Label('FORM 2 - Formulário Login')), $fieldset);
        $formulario->createField(new Paragraph(new TextInput('txt_username', 'txt_username', '', new Label('Username: '))), $fieldset);
        $formulario->createField(new Paragraph(new TextInput('txt_password', 'txt_password', '', new Label('Password: '))), $fieldset);
        $formulario->createField(new Button('btn_login', 'btn_login', 'button', new Label('LOGIN')), $fieldset);
        $formulario->render();
        
        ?>
    </body>
</html>
