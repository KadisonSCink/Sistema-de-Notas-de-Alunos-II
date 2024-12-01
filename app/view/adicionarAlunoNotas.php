<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app\view\styles.css">
        <title>Adicionar Alunos</title>
    </head>
    <body>
        <h1>Adicionando Novo Aluno</h1>
        <form action="index.php?acao=cadastrar" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome" required><br><br>

            <label for="nota1">Nota 1</label>
            <input type="number" name="nota1" id="nota1" step="0.1" min="0" max="10" required><br><br>

            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" id="nota2" step="0.1" min="0" max="10" required><br><br>

            <label for="nota3">Nota 3</label>
            <input type="number" name="nota3" id="nota3" step="0.1" min="0" max="10" required><br><br>

            <label for="nota4">Nota 4</label>
            <input type="number" name="nota4" id="nota4" step="0.1" min="0" max="10" required><br><br>

            <button type="submit">Cadastrar</button><br><br>
        </form>

        <a href="index.php?acao=listar">Ver lista de Alunos</a>
        
    </body>
</html>