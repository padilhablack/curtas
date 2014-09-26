<?php

include 'database.php';

class Inscricao {

    private $ra;
    private $genero;
    private $sinopse;
    private $tematica;
    private $ficha;
    private $email;
    private $telefone;
    private $ticket;
    private $video;

    public function getRa() {
        return $this->ra;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getSinopse() {
        return $this->sinopse;
    }

    public function getTematica() {
        return $this->tematica;
    }

    public function getFicha() {
        return $this->ficha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getTicket() {
        return $this->ticket;
    }

    public function setRa($ra) {
        $this->ra = $ra;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setSinopse($sinopse) {
        $this->sinopse = $sinopse;
    }

    public function setTematica($tematica) {
        $this->tematica = $tematica;
    }

    public function setFicha($ficha) {
        $this->ficha = $ficha;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setTicket() {
        $int = rand(5, 500);
        $aux = $this->getRa() * $int;
        $codigo = substr(md5($aux), 0, 10);
        $this->ticket = $codigo;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

    public function criarInscricao() {

        $sql = "INSERT INTO `inscricao` VALUES (NULL,'" . $this->getRa() . "','" . $this->getGenero() . "','" . $this->getSinopse() . "','" . $this->getTematica() . "','" . $this->getFicha() . "','" . $this->getEmail() . "','" . $this->getTelefone() . "','" . $this->getTicket() . "','" . $this->getVideo() . "')";
        $query = mysql_query($sql);

        if (!$query) {
            die('Não foi possível inserir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }
   
    public function selecionarInscricao($valor) {

        $sql = "";
        $retorno = array();

        switch ($valor) {
            case 'all':
                $sql = "Select * from inscricao";
                $query = mysql_query($sql);
                if (!$query) {
                    die('Não foi possível encontrar: ' . mysql_error());
                    return false;
                } else {

                    while ($row = mysql_fetch_array($query)) {
                        $retorno = array(
                            'ra' => $row['ra'],
                            'genero' => $row['genero'],
                            'sinopse' => $row['sinopse'],
                            'tematica' => $row['tematica'],
                            'ficha' => $row['ficha'],
                            'email' => $row['email'],
                            'telefone' => $row['telefone'],
                        );
                    }
                    return $retorno;
                }
                break;

            default:
                $sql = "SELECT * 
                        FROM  `inscricao` 
                        WHERE ticket =  '" . $valor . "'
                        LIMIT 0 , 30";

                $query = mysql_query($sql);
                if (!$query) {
                    die('Não foi possível encontrar: ' . mysql_error());
                    return false;
                } else {
                    $retorno = array();
                    while ($row = mysql_fetch_array($query)) {
                        $retorno = array(
                            'ra' => $row['ra'],
                            'genero' => $row['genero'],
                            'sinopse' => $row['sinopse'],
                            'tematica' => $row['tematica'],
                            'ficha' => $row['ficha'],
                            'email' => $row['email'],
                            'telefone' => $row['telefone']
                        );
                    }
                    return $retorno;
                }
                break;
        }
    }
    

}
