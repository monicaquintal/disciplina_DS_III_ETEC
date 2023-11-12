<?php 

if(!isset($_SESSION)) {
  session_start();
}

if(isset($_POST["btnADM"])) {
  include_once '../View/admLogin.php';
}

switch ($_POST) {
  //Caso a variavel seja nula mostrar tela de login
  case isset($_POST[""]):
    include_once "./View/login.php";
    break;

  //--- Primeiro Acesso ---//
  case isset($_POST["btnPrimeiroAcesso"]):
    include_once "../View/primeiroAcesso.php";
    break;

  //--- Cadastrar ---//
  case isset($_POST["btnCadastrar"]):
    require_once "../Controller/UsuarioController.php";
    $uController = new UsuarioController();
    if ($uController->inserir(
      $_POST["txtNome"],
      $_POST["txtCPF"],
      date("Y-m-d", strtotime($_POST["dataNascimento"])),
      $_POST["txtEmail"],
      $_POST["txtSenha"]
    )) {
      include_once "../View/cadastroRealizado.php";
    } else {
      include_once "../View/cadastroNaoRealizado.php";
    }
    break;
  
    //--- Login ---//
    case isset($_POST["btnLogin"]):
      require_once "../Controller/UsuarioController.php";

      $uController = new UsuarioController();

      if($uController->login($_POST["txtLogin"], $_POST["txtSenha"])) {
        include_once "../View/principal.php";
      } else {
        include_once "../View/cadastroNaoRealizado.php";
      }
      break;
    
    //--- Cadastro Realizado ---//
    case isset($_POST["btnCadRealizado"]):
      include_once "../View/principal.php";
      break;

    //--- Cadastro Não Realizado ---//
    case isset($_POST["btnCadNRealizado"]):
      include_once "../View/primeiroAcesso.php";
      break;
    
    //--- Atualizar ---//
    case isset($_POST["btnAtualizar"]):
      require_once "../Controller/UsuarioController.php";
      $uController = new UsuarioController();
      if ($uController->atualizar(
        $_POST["txtID"],
        $_POST["txtNome"],
        $_POST["txtCPF"],
        date("Y-m-d", strtotime($_POST["txtData"])),
        $_POST["txtEmail"]        
      )) {
        include_once "../View/atualizacaoRealizada.php";
      } else {
        include_once "../View/operacaoNaoRealizada.php";
      }
      break;

      //--- Adicionar Formacao ---//
      case isset($_POST["btnAddFormacao"]):
        require_once "../Controller/FormacaoAcadController.php";
        include_once "../Model/Usuario.php";
        $fController = new FormacaoAcadController();
        if ($fController->inserir(
          date("Y-m-d", strtotime($_POST["txtInicioFA"])),
          date("Y-m-d", strtotime($_POST["txtFimFA"])),
          $_POST["txtDescFA"],
          unserialize($_SESSION["Usuario"])->getID()
          ) != false
        ) {
          include_once "../View/cadastroRealizado.php";
        } else {
          include_once "../View/cadastroNaoRealizado.php";
        }
        break;

        //--- Excluir Formacao ---//
        case isset($_POST["btnExcluirFA"]):
          require_once "../Controller/FormacaoAcadController.php";
          include_once "../Model/Usuario.php";
          $fController = new FormacaoAcadController();
          if ($fController->remover($_POST["id"]) == true) {
            include_once "../View/informacaoExcluida.php";
          } else {
            include_once "../View/operacaoNaoRealizada.php";
          }
          break;
      
        //--- Adicionar Experiencia Profissional ---//
        case isset($_POST["btnAddEP"]):
          require_once "../Controller/experienciaProfissionalController.php";
          include_once "../Model/Usuario.php";
          $epController = new ExperienciaProfissionalController();
          if ($epController->inserir(
            date("Y-m-d", strtotime($_POST["txtInicioEP"])),
            date("Y-m-d", strtotime($_POST["txtFimEP"])),
            $_POST["txtEmpEP"],
            $_POST["txtDescEP"],
            unserialize($_SESSION["Usuario"])->getID()
            ) != false
          ) {
            include_once "../View/cadastroRealizado.php";
          } else {
            include_once "../View/operacaoNaoRealizada.php";
          }
          break;

        //--- Excluir Experiencia Profissional ---//
        case isset($_POST["btnExcluirEP"]):
          require_once "../Controller/experienciaProfissionalController.php";
          include_once "../Model/Usuario.php";
          $epController = new ExperienciaProfissionalController();
          if ($epController->remover($_POST["idEP"]) == true) {
            include_once "../View/informacaoExcluida.php";
          } else {
            include_once "../View/operacaoNRealizada.php";
          }
          break;
        
        //--- Adicionar Outra Formacao ---//
        case isset($_POST["btnAddOF"]):
          require_once "../Controller/outrasFormacoesController.php";
          include_once "../Model/Usuario.php";
          $ofController = new outrasFormacoesController();
          if ($ofController->inserir(
            date("Y-m-d", strtotime($_POST["txtInicioOF"])),
            date("Y-m-d", strtotime($_POST["txtFimOF"])),
            $_POST["txtDescOF"],
            unserialize($_SESSION["Usuario"])->getID()
            ) != false
          ) {
            include_once "../View/cadastroRealizado.php";
          } else {
            include_once "../View/operacaoNaoRealizada.php";
          }
          break;

        //--- Excluir Outra Formacao ---//
        case isset($_POST["btnExcluirOF"]):
          require_once "../Controller/outrasFormacoesController.php";
          include_once "../Model/Usuario.php";
          $ofController = new outrasFormacoesController();
          if ($ofController->remover($_POST["idoutrasformacoes"]) == true) {
            include_once "../View/informacaoExcluida.php";
          } else {
            include_once "../View/operacaoNaoRealizada.php";
          }
          break;
        
        //--- Login Administrador ---//
        case isset($_POST['btnLoginADM']):
          require_once "../Controller/AdministradorController.php";
          $aController = new AdministradorController();

          if($aController->login($_POST['txtLoginADM'], $_POST['txtSenhaADM'])) {
            include_once '../View/admPrincipal.php';
          }
          break;
      
        case isset($_POST['btnADM']):
          include_once '../View/admLogin.php';
        break;

        case isset($_POST['btnListarCadastrados']):
          include_once '../View/admListarCadastrados.php';
        break;
        
        case isset($_POST['btnVoltar']):
          include_once '../View/admPrincipal.php';
        break; 

        case isset($_POST['btnListarAdministradores']):
          include_once '../View/admListarAdministradores.php';
        break;

        case isset($_POST['btnVoltarAdm']):
          include_once '../View/admPrincipal.php';
        break; 

        case isset($_POST['btnVisualizar']):
          if (isset($_POST['idusuario'])) {
            $idusuario = $_POST['idusuario'];
            include_once '../View/admVisualizarCadastro.php';
          }
          break; 
  
      }
        
?>