<?php

include 'database.php';

class Temporario {

    private $cpf;
    private $email;
    private $codigo;

    public function getCpf() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCodigo() {
        $int = rand(5, 500);
        $aux = $this->getCpf() * $int;
        $codigo = substr(md5($aux), 0, 10);
        $this->codigo = $codigo;
    }

    public function inseriTemp() {
        $sql = "INSERT INTO `temporario` VALUES (NULL, '".$this->getCpf()."', '".$this->getEmail()."', '".$this->getCodigo()."')";
        $query = mysql_query($sql);

        if (!$query) {
            die('Não foi possível inserir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }
    
    public function selecionaTemp($codigo) {
        $sql = "SELECT codigo FROM `temporario` WHERE codigo = '" . $codigo . "' or email = '" . $codigo . "'";
        $query = mysql_query($sql);
        $retorno = "";

        if (!$query) {
            die('Não foi possível inserir: ' . mysql_error());
            return false;
        } else {
            while ($row = mysql_fetch_array($query)) {
                $retorno = $row['codigo'];
            }

            return $retorno;
        }
    }

}
