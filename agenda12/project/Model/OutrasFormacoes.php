<?php

  class OutrasFormacoes {
    private $idoutrasformacoes;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;
  
    // Getters e Setters

    // id
    public function setID ($idoutrasformacoes) {
      $this->idoutrasformacoes = $idoutrasformacoes;
    }

    public function getID() {
      return $this->idoutrasformacoes;
    }

    // idusuario
    public function setIdUsuario ($idusuario) {
      $this->idusuario = $idusuario;
    }

    public function getIdUsuario() {
      return $this->idusuario;
    }

    // inicio
    public function setInicio ($inicio) {
      $this->inicio = $inicio;
    }

    public function getInicio() {
      return $this->inicio;
    }

    // fim
    public function setFim ($fim) {
      $this->fim = $fim;
    }

    public function getFim() {
      return $this->fim;
    }

    // descrição
    public function setDescricao ($descricao) {
      $this->descricao = $descricao;
    }

    public function getDescricao() {
      return $this->descricao;
    }

    // Método inserirBD()

    public function inserirBD() {
      require_once 'Conexao.php';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao)
      VALUES('".$this->idusuario."', '".$this->inicio."','". $this->fim."', '".$this->descricao."')";

      if ($conn->query($sql) === TRUE) {
        $this->idoutrasformacoes = mysqli_insert_id($conn);
        $conn->close();
        return TRUE;
      } else {
        $conn->close();
        return FALSE;
      }
    }

    // Método excluirBD()

    public function excluirBD($idoutrasformacoes) {

      require_once 'ConexaoBD';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes = '".$idoutrasformacoes ."';";

      if ($conn->query($sql) === TRUE) {
        $this->idoutrasformacoes = mysqli_insert_id($conn);
        $conn->close();
        return TRUE;
      } else {
        $conn->close();
        return FALSE;
      }
    }
  
    
    // Método listaFormacoes()

    public function listaFormacoes($idusuario) {

      require_once 'ConexaoBD.php';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM outrasformacoes WHERE idusuario = '".$idusuario."'";
      $re = $conn->query($sql);
      $conn->close();
      return $re;
    }
  }
?>