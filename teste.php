<?php

include 'classes/temporario.php';

$temp = new Temporario();

//$cpf = '05349553399';
//$email = 'padilhamidia@hotmail.com';
//
//
//$temp->setCpf($cpf);
//$temp->setEmail($email);
//$temp->setCodigo();
//
//$teste = $temp->inseriTemp();
 
$all = $temp->selecionaTemp('padilhamidia@hotfghfgmail.com');

switch ($all) {
    case true:
        echo utf8_decode('você pode ir pra votação ');
        echo "codigo :".$all;

        break;
    case false:
        
        echo utf8_decode('Realize um cadastro e receba seu código de segurança');
    default:
        break;
}


var_dump($all);