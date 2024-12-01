<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app\view\styletable.css">
    <title>Lista de Alunos/Notas</title>
</head>

<body>
    <h1>Lista de Alunos/Notas</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Média</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= $aluno['id'] ?></td>
                <td><?= $aluno['nome'] ?></td>
                <td><?= $aluno['nota1'] ?></td>
                <td><?= $aluno['nota2'] ?></td>
                <td><?= $aluno['nota3'] ?></td>
                <td><?= $aluno['nota4'] ?></td>
                <td><?= $aluno['media'] ?></td>
                <td class="<?= ($aluno['media'] >= 7) ? 'aprovado' : 'desaprovado'; ?>">
                    <?= ($aluno['media'] >= 7) ? 'Aprovado' : 'Desaprovado'; ?>
                </td>
                <td>
                    <button><a href="index.php?acao=excluir&id_aluno=<?= $aluno['id'] ?>">Excluir</a></button>
                    <button><a href="index.php?acao=editar&id_aluno=<?= $aluno['id'] ?>">Editar</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table><br>
    <button id="novo"><a href="index.php">Cadastrar outro Aluno</a></button>
</body>

</html>