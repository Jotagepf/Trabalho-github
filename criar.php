<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Livro</title>
    <style>
        /* Estilos para a barra de navegação */
        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: white;
            margin: 0 10px;
        }

        header {
            background-color: rgb(182, 167, 200);
            padding: 20px;
            text-align: center;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; /* Ajusta a altura da seção conforme necessário */
            text-align: center;
            position: relative; /* Adiciona posição relativa para que a mensagem seja posicionada em relação a esta seção */
        }

        /* Estilos para cada livro individual */
        .livro {
            width: 490px; /* Ajusta a largura do bloco de cada livro conforme necessário */
            padding: 40px;
            margin: 140px;
            text-align: center;
            border: 1px solid #ccc; /* Adiciona uma borda para destacar o bloco */
            border-radius: 10px; /* Adiciona bordas arredondadas */
        }

        /* Ajusta a largura da caixa de texto para o título */
        #titulo {
            width: 100%; /* Define a largura para 100% do contêiner pai */
            height: 40px; /* Ajusta a altura conforme necessário */
            margin-bottom: 10px; /* Adiciona margem inferior para espaçamento */
        }

        /* Ajusta a largura da área de texto para a história */
        #historia {
            width: 100%; /* Define a largura para 100% do contêiner pai */
            height: 200px; /* Ajusta a altura conforme necessário */
            margin-bottom: 10px; /* Adiciona margem inferior para espaçamento */
            color: #000; /* Cor padrão do texto da história */
        }

        /* Estilo adicional para a mensagem de sucesso */
        .mensagem-sucesso {
            color: green; /* Cor da mensagem de sucesso, ajuste conforme necessário */
            margin-top: 10px; /* Adiciona margem superior para espaçamento */
            font-size: 16px; /* Ajusta o tamanho da fonte conforme necessário */
            position: absolute; /* Adiciona posição absoluta para que a frase seja posicionada abaixo da seção */
            bottom: -30px; /* Ajusta a distância da frase em relação à seção */
            left: 50%; /* Centraliza a frase horizontalmente */
            transform: translateX(-50%); /* Centraliza a frase horizontalmente */
            display: none; /* Inicialmente, a mensagem está oculta */
        }
    </style>
</head>
<body>
    <!-- Barra de Navegação -->
    <nav>
        <a href="compra.php">Livros</a>
        <a href="contato.php">Contato</a>
        <a href="login.php">Login</a>
        <a href="cadastro.php">cadastro</a>
    </nav>

    <header>
        <h1>Criar Livro</h1>
    </header>

    <section>
        <h2>Crie a Sua História</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Processar os dados do formulário aqui
                $titulo = $_POST["titulo"];
                $historia = $_POST["historia"];

                // Exemplo: salvar os dados em um banco de dados
                // ...

                echo "<p class='mensagem-sucesso'>Livro criado com sucesso!</p>";
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="livro">
            <!-- Título do Livro -->
            <label for="titulo">Título do Livro:</label>
            <br>
            <input type="text" id="titulo" name="titulo" required>
            <br>

            <!-- Sua História -->
            <label for="historia">Sua História:</label>
            <br>
            <!-- Adiciona o campo de entrada de cor para a história -->
            <input type="color" id="corHistoria" name="corHistoria" onchange="mudarCorHistoria(this.value)">
            <textarea id="historia" name="historia" rows="10" required></textarea>
            <br>

            <!-- Botão Criar Livro -->
            <button type="submit" onclick="exibirMensagem()">Criar Livro</button>
        </form>
    </section>

    <script>
        function exibirMensagem() {
            document.querySelector('.mensagem-sucesso').style.display = 'block';
        }

        function mudarCorHistoria(cor) {
            document.getElementById('historia').style.color = cor;
        }
    </script>
</body>
</html>
