<?php

class ConexaoBD {
  private $serverName = "localhost";
  private $userName = "root";
  private $password = "senha";
  private $dbName = "projeto_final";


  public function conectar() {
    $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
    return $conn;
  }
}

?>