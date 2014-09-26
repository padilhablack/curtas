<?php

include 'inscricao.php';

extract($_POST);

$ra;
$genero;
$sinopse;
$tematica;
$ficha;
$email;
$telefone;
$ticket;
$video;

$novo = new Inscricao();
$novo->setRa($ra);
$novo->setGenero($genero);
$novo->setSinopse($email);
$novo->setTematica($tematica);
$novo->setFicha($ficha);
$novo->setEmail($email);
$novo->setTelefone($telefone);
$novo->setVideo($video);
$novo->setTicket();
$teste = $novo->criarInscricao();

switch ($teste) {
    case true:
        echo 'Realizado com sucesso';
        break;
    case false:

        echo 'falha no cadastro';
    default:
        break;
}
echo 'Seu ticket de Inscrição: ' . $novo->getTicket();

