<?php

  class ExperienciaProfissional {
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $empresa;
    private $descricao;

    // Getters e Setters

    // id
    public function setID ($id) {
      $this->id = $id;
    }

    public function getID() {
      return $this->id;
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

    // empresa
    public function setEmpresa ($empresa) {
      $this->empresa = $empresa;
    }

    public function getEmpresa() {
      return $this->empresa;
    }

    // descrição
    public function setDescricao ($descricao) {
      $this->descricao = $descricao;
    }

    public function getDescricao() {
      return $this->descricao;
    }

    // método inserirBD()

    public function inserirBD() {
      require_once 'Conexao.php';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO experienciaprofissional (idusuario, inicio, fim, empresa, descricao)
      VALUES('".$this->idusuario."', '".$this->inicio."','". $this->fim."', '".$this->empresa."', '".$this->descricao."')";

      if ($conn->query($sql) === TRUE) {
        $this->id = mysqli_insert_id($conn);
        $conn->close();
        return TRUE;
      } else {
        $conn->close();
        return FALSE;
      }
    }

    // Método excluirBD()

    public function excluirBD($id) {

      require_once 'ConexaoBD';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "DELETE FROM experienciaprofissional WHERE idexperienciaprofissional = '".$id ."';";

      if ($conn->query($sql) === TRUE) {
        $this->id = mysqli_insert_id($conn);
        $conn->close();
        return TRUE;
      } else {
        $conn->close();
        return FALSE;
      }
    }

    // Método listaExperiencias()

    public function listaExperiencias($idusuario) {

      require_once 'ConexaoBD.php';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM experienciaProfissional WHERE idusuario = '".$idusuario."'";
      $re = $conn->query($sql);
      $conn->close();
      return $re;
    }
  }
?>