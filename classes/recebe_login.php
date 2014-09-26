<?php

include 'inscricao.php';

extract($_POST);
 $ticket;
 $teste ="";
 $login = new Inscricao();
switch ($login) {
    case true:
        echo 'Realizado com sucesso';
        break;
    case false:

        echo 'falha no cadastro';
    default:
        break;
}
$teste = $login->selecionarCurtas($ticket);
var_dump($teste);
