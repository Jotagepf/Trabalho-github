<?php
ob_start(); // Inicia o buffer de saída

// ... (seu código existente)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados do formulário aqui
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $tipo = $_POST["tipo"];

    // Exemplo: salvar os dados em um banco de dados
    // ...

    echo "<p>Usuário cadastrado com sucesso!</p>";

    // Redirecionar para compra.php após o envio bem-sucedido
    header("Location: compra.php");
    exit(); // Certifique-se de sair após o redirecionamento
}

ob_end_flush(); // Limpa o buffer e envia a saída para o navegador
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        /* Estilos para o contêiner do formulário */
        .form-container {
            max-width: 400px;
            margin: 130px auto; /* Ajuste a margem para mover o quadrado */
            padding: 40px;
            border: 7px solid #ccc;
            border-radius: 10px;
        }

        /* Estilos para a barra de navegação */
        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Estilos para o formulário dentro do quadrado */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box; /* Garante que o padding não afeta a largura total */
        }

        button {
            background-color: rgb(159, 106, 187); /* Nova cor de fundo */
            color: #fff; /* Nova cor do texto */
            padding: 12px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9; /* Cor de fundo ao passar o mouse */
        }
    </style>
</head>
<body>
    <!-- Barra de Navegação -->
   

    <div class="form-container">
        <h2>Preencha o Formulário de Cadastro</h2>

        <?php
            // ... (seu código de exibição de mensagens, se necessário)
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="tipo">Tipo de Usuário:</label>
            <select id="tipo" name="tipo">
                <option value="leitor">Leitor</option>
                <option value="comprador">Comprador</option>
                <option value="criador">Criador de Livros</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
