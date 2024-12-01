<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app\view\styles.css">
        <title>Editar Aluno</title>
    </head>
    <body>
        <h1>Editar Notas de Aluno</h1>
        <form action="index.php?acao=editar&id_aluno=<?= $aluno['id'] ?>" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?= $aluno['nome'] ?>"><br><br>

            <label for="nota1">Nota 1</label>
            <input type="number" name="nota1" value="<?= $aluno['nota1'] ?>" step="0.01"><br><br>

            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" value="<?= $aluno['nota2'] ?>" step="0.01"><br><br>

            <label for="nota3">Nota 3</label>
            <input type="number" name="nota3" value="<?= $aluno['nota3'] ?>" step="0.01"><br><br>

            <label for="nota4">Nota 4</label>
            <input type="number" name="nota4" value="<?= $aluno['nota4'] ?>" step="0.01"><br><br>

            <button type="submit">Atualizar</button><br><br>
        </form>

        <a href="index.php?acao=listar">Voltar para a lista de Alunos</a>
    </body>
</html>
