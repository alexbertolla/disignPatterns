<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './Form.php';
        include_once './InputAbstrac.php';
        include_once './InterfaceInput.php';
        include_once './InputText.php';
        include_once './InputRadio.php';

        $inputText = new InputText('text', 'nome', 'nome', 'Alex Bertolla', 'Nome');
        $inputRadioM = new InputRadio('radio', 'sexo', '', 'm', 'Masculino', TRUE);
        $inputRadioF = new InputRadio('radio', 'sexo', '', 'f', 'Feminino', FALSE);

        $form = new Form('formulario', '', 'POST');
        $form->attInput($inputText);
        $form->attInput($inputRadioM);
        $form->attInput($inputRadioF);
        $form->render();
        
        ?>
    </body>
</html>
