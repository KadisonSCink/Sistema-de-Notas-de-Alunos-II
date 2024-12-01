<?php 
    require_once __DIR__ . "/../model/aluno.php";

    class AlunoController{
        public function adicionarAluno($nome, $n1, $n2, $n3, $n4){
            $resultado = Aluno::adicionarAluno($nome, $n1, $n2, $n3, $n4);
            header("Location: index.php?acao=listar");
            exit;
        }

        public function listar(){
            $alunos = Aluno::listar();
            require_once __DIR__ . '/../view/listar.php';
        }

        public function excluirAluno($id_aluno){
            $excluir = Aluno::excluir($id_aluno);
            header("Location: index.php?acao=listar");
            exit;
        }

        public function editarAluno($id_aluno){
            $aluno = Aluno::buscarPorId($id_aluno);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nome = $_POST['nome'];
                $n1 = $_POST['nota1'];
                $n2 = $_POST['nota2'];
                $n3 = $_POST['nota3'];
                $n4 = $_POST['nota4'];
                Aluno::editarAluno($id_aluno, $nome, $n1, $n2, $n3, $n4);
                header("Location: index.php?acao=listar");
                exit;
            }

            require_once __DIR__ . '/../view/editar.php';
            
        }

        //---------------- Json --------------------------------- 
        public function listarJson(){
            header('content-type: application/json');
            $alunosJson = Aluno::listar();
            echo json_encode($alunosJson);
        }
    
        public function buscarPorIdJson(){
            header('content-type: application/json');
            $alunoJson = Aluno::buscarPorId($_GET['id_aluno']);
            echo json_encode($alunoJson);
        }
    
        public function excluirJson(){
            $resultadoJson = Aluno::excluir($_GET['id_aluno']);
            header('content-type: application/json');
            echo json_encode($resultadoJson);
        }
    
        public function atualizarJson(){
            header('content-type: application/json');
            $id_aluno = $_GET['id_aluno'];
            $nome = $_GET['nome'];
            $n1 = $_GET['nota1'];
            $n2 = $_GET['nota2'];
            $n3 = $_GET['nota3'];
            $n4 = $_GET['nota4'];
            $resultadoo = Aluno::editarAluno($id_aluno, $nome, $n1, $n2, $n3, $n4);
            echo json_encode(['sucess' => $resultadoo]);
        }
    }    
?>