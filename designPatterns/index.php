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
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './autoload.php';
        $fomulario = new Form('form', 'form', 'POST', 'index.php');

        $fomulario->createField(new Paragraph(new Label('FORM 1 - exibir elementos separadamento')), 'paragrafo');
        $fomulario->renderField('paragrafo');
        $fomulario->renderField('campoQualquer');

        $fomulario->createField(new TextInput('txt_nome', 'txt_nome', '', new Label('Nome: ')), 'text1');
        $fomulario->renderField('text1');

        $fomulario->createField(new RadioInput('rdo_sexo', 'rdo_m', 'M', TRUE, new Label('M')), 'radioSexoM');
        $fomulario->renderField('radioSexoM');

        $fomulario->createField(new RadioInput('rdo_sexo', 'rdo_f', 'F', FALSE, new Label('F')), 'radioSexoF');
        $fomulario->renderField('radioSexoF');

        $fomulario->createField(new Button('btn_enviar', 'btn_enviar', 'button', new Label('Enviar')), 'botao');
        $fomulario->renderField('botao');
########################################################################################################################################################################

        $fomulario2 = new Form('form2', 'form2', 'POST', 'index.php');
        $fomulario2->createField(new Paragraph(new Label('FORM 2 - Formulário Login')), 'labelTitle');
        $fomulario2->createField(new Paragraph(new TextInput('txt_username', 'txt_username', '', new Label('Username: '))), 'txt_username');
        $fomulario2->createField(new Paragraph(new TextInput('txt_password', 'txt_password', '', new Label('Password: '))), 'txt_password');
        $fomulario2->createField(new Button('btn_login', 'btn_login', 'button', new Label('LOGIN')), 'btn_login');
        $fomulario2->render();
########################################################################################################################################################################

        $fomulario3 = new Form('form3', 'form3', 'POST', 'index.php');
        $fomulario3->createField(new Paragraph(new Label('FORM 3 - Submeter e-mail')), 'labelTitle');

        $paragrafoSubmeterEmail = new Paragraph();
        $textEmail = new TextInput('txt_email', 'txt_email', '', new Label('E-mail: '));
        $paragrafoSubmeterEmail->addContentLine($textEmail);

        $labelButtonSubmeter = new Label('Enviar');
        $buttonSubmeter = new Button('btn_submeter_email', 'btn_submeter_email', 'button', $labelButtonSubmeter);
        $paragrafoSubmeterEmail->addContentLine($buttonSubmeter);

        $fomulario3->createField($paragrafoSubmeterEmail, 'paragrafoSubmeterEmail');

        $fomulario3->render();
########################################################################################################################################################################

        $fomulario4 = new Form('form4', 'form4', 'POST', 'index.php');
        $fomulario4->createField(new Paragraph(new Label('FORM 4 - Formulário de pesquisa')), 'labelTitle');
        $fomulario4->createField(new TextInput('txt_pesquisa', 'txt_pesquisa', '', NULL, 'Digite o contúdo a ser pesquisado'), 'txt_pesquisa');
        $fomulario4->createField(new Button('btn_pesquisar', 'btn_pesquisar', 'button', new Label('Pesquisar')), 'btn_pesquisar');
        $fomulario4->render();
        ?>
        
    </body>
</html>
