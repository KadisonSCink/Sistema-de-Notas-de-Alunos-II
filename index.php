<?php 
    require_once 'app/controller/alunoController.php';

    $controller = new AlunoController();

    if(isset($_GET['acao'])){
        switch($_GET['acao']){
            case 'cadastrar':
                $nome = $_POST["nome"];
                $n1 = $_POST["nota1"];
                $n2 = $_POST["nota2"];
                $n3 = $_POST["nota3"];
                $n4 = $_POST['nota4'];
                $controller->adicionarAluno($nome, $n1, $n2, $n3, $n4);
                break;
            case 'listar':
                $controller->listar();
                break;
            case 'excluir':
                $id_aluno = $_GET['id_aluno'];
                $controller->excluirAluno($id_aluno);
                break;   
            case 'editar':
                $id_aluno = $_GET['id_aluno'];
                $controller->editarAluno($id_aluno);
                require_once __DIR__ . '/app/view/editar.php';
                break;
            //---------------- Json ---------------------------------    
            case 'listarJson':
                $controller->listarJson();
                break;
            case 'excluirJson':
                $controller->excluirJson();
                break;
            case 'buscarPorIdJson':
                $controller->buscarPorIdJson();
                break;
            case 'atualizarJson':
                $controller->atualizarJson();
                break;      
        }
    }else{
        include 'app/view/adicionarAlunoNotas.php';
    }

?>
