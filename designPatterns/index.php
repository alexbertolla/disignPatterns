<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

use elements\form\Form;
use elements\input\TextInput;
use elements\label\Label;
use elements\button\Button;
use elements\select\Select;
use elements\breakpoint\Breakpoint;
use pdo\ConnectionSqlite;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './autoload.php';
        
        
        
//         $dados = array(
//            'nome' => 'Carro',
//            'valor' => 30000.00,
//            'descricao' => 'Ford Fiesta 1.6 flex ano 2016/2017 5 portas!'
//        );

        $dados = array(
            'nome' => '',
            'valor' => 'ABC',
            'descricao' => 'Ford Fiesta 1.6 flex ano 2016/2017 5 portas!'
            . '[ggdfjgklsdfjgjsdlfgjlsdkfjglsdjglkdsjgjsdçgjdjgsçdfljgçsldf'
            . 'sdfmndfgsdklgsdmg,msdf,.gms;d.mfg;,.sdm;gmsd.,;fg sdd  '
            . 'gsd ngjkdfhgkdflkgdsfklgklsdfgklsdf'
            . 'dfdfjhlkdfjhlkjdhkljdfklhjdfkjdfjhkdfjhçljdfçlhjdfçhjdfçjhdçfjhç'
        );

        $listaCategoria = ConnectionSqlite::listaDados();
        $select = new Select('select', 'select', FALSE, new Label('Categoria: '));
        foreach ($listaCategoria as $categoria){
            $select->addChild($categoria->id, $categoria->nome);
        }
        

        $txtNome = new TextInput('nome', 'nome', '', new Label('Nome: '));
        $txtValor = new TextInput('valor', 'valor', '', new Label('Valor: '));
        $txtDescricao = new TextInput('descricao', 'descricao', '', new Label('Descrção: '));
        $btnEnviar = new Button('enviar', 'enviar', 'button', new Label('Enviar'));

        
        $formulario = new Form('form', 'form', 'POST', 'index.php');
        
        $formulario->addChild($txtNome);
        $formulario->addChild(new Breakpoint('br1'));
//        
        $formulario->addChild($txtValor);
        $formulario->addChild(new Breakpoint('br2'));
//        
        $formulario->addChild($txtDescricao);
        $formulario->addChild(new Breakpoint('br3'));
//        
        $formulario->addChild($select);
        $formulario->addChild(new Breakpoint('br4'));
//        
        $formulario->addChild($btnEnviar);
        
        
        $formulario->pupular($dados);
        $formulario->validarCampos();
        $formulario->render();

        
        ?>
    </body>
</html>
