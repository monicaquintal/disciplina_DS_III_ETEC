<?php
  if(!isset($_SESSION)) {
    session_start();
  }

  // Cadastrar
  class UsuarioController {
    public function inserir($nome, $cpf, $dataNascimento, $email, $senha) {
      require_once "../Model/Usuario.php";

      $usuario = new Usuario();
      $usuario->setNome($nome);
      $usuario->setCPF($cpf);
      $usuario->setDataNascimento($dataNascimento);
      $usuario->setEmail($email);
      $usuario->setSenha($senha);

      $r = $usuario->inserirBD();

      $_SESSION['Usuario'] = serialize($usuario);

      return $r;
    }

    // Login
    public function login($cpf, $senha) {
      require_once "../Model/Usuario.php";

      $usuario = new Usuario();
      $usuario->carregarUsuario($cpf);
      $verSenha = $usuario->getSenha();
      
      if ($senha == $verSenha) {
        $_SESSION['Usuario'] = serialize($usuario);
        return true;
      } else {
        return false;
      }
    }

    // Atualizar
    public function atualizar ($id, $nome, $cpf, $dataNascimento, $email) {
      require_once '../Model/Usuario.php';
      $usuario = new Usuario();
      $usuario->setId($id);
      $usuario->setNome($nome);
      $usuario->setCPF($cpf);
      $usuario->setDataNascimento($dataNascimento); 
      $usuario->setEmail($email);
      
      $r = $usuario->atualizarBD();
      $_SESSION['Usuario'] = serialize($usuario);
      return $r;
    }
  }
?>