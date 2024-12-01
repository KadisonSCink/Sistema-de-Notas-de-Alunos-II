<?php
    require_once __DIR__ . "/../../config/conexao.php";

    class Aluno{
        public static function listar(){
            $con = Conexao::conectar();
            $smt = $con->prepare("SELECT * FROM alunos");
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function adicionarAluno($nome, $n1, $n2, $n3, $n4){
            $con = Conexao::conectar();
            $prepara = $con->prepare("INSERT INTO alunos (nome, nota1, nota2, nota3, nota4, media)VALUES (?,?,?,?,?,?)");
            $media = ($n1 + $n2 + $n3 + $n4)/4;
            return $prepara->execute([$nome, $n1, $n2, $n3, $n4, $media]);
        }

        public static function excluir($id_aluno){
            $con = Conexao::conectar();
            $exclui = $con->prepare("DELETE FROM alunos WHERE id=?");
            return $exclui->execute([$id_aluno]);
        }

        public static function buscarPorId($id_aluno){
            $con = Conexao::conectar();
            $smt = $con->prepare("SELECT * FROM alunos WHERE id=?");
            $smt->execute([$id_aluno]);
            return $smt->fetch(PDO::FETCH_ASSOC);
        }

        public static function editarAluno($id_aluno, $nome, $n1, $n2, $n3, $n4){
            $con = Conexao::conectar();
            $media = ($n1 + $n2 + $n3 + $n4) / 4;
            $smt = $con->prepare("UPDATE alunos SET nome=?, nota1=?, nota2=?, nota3=?, nota4=?, media=? WHERE id=?");
            return $smt->execute([$nome, $n1, $n2, $n3, $n4, $media, $id_aluno]);
        }
    }
?>
