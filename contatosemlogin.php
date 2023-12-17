<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos para a barra de navegação */
        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed; /* Fixa a barra de navegação no topo da página */
            width: 100%; /* Define a largura total da barra de navegação */
            top: 0; /* Alinha a barra de navegação no topo da página */
        }

        nav a {
            text-decoration: none;
            color: white;
            margin: 0 10px;
        }

        /* Estilos para o contêiner do site */
        .site-container {
            max-width: 1000px; /* Largura máxima do contêiner do site */
            margin: 0 auto; /* Centraliza o contêiner na página */
            margin-top: 100px; /* Adiciona margem superior para evitar sobreposição com a barra de navegação */
        }

        /* Estilos para o contêiner do retângulo */
        .retangulo-container {
            background-color: rgb(182, 167, 200); /* Cor de fundo do retângulo */
            padding: 70px; /* Adiciona preenchimento interno ao retângulo */
            border: 1px solid #ccc; /* Adiciona uma borda ao redor do retângulo */
            border-radius: 10px; /* Adiciona bordas arredondadas ao retângulo */
            text-align: center; /* Centraliza o texto dentro do retângulo */
        }

        header, section {
            margin-bottom: 20px; /* Adiciona espaço entre o cabeçalho e as seções */
        }

        footer {
            text-align: center; /* Centraliza o texto no rodapé */
        }

        /* Adicione mais estilos conforme necessário */
    </style>
</head>
<body>
    <!-- Barra de Navegação -->
    <nav>
        <a href="compra.php">Livros</a>
        <a href="cadastro.php">cadastro</a>
        <a href="login.php">Login</a>
    </nav>

    <!-- Contêiner do Site -->
    <div class="site-container">

        <!-- Contêiner do Retângulo -->
        <div class="retangulo-container">
            <header>
                <h1 style="font-size: 36px; color: #333;">Contato</h1>
            </header>

            <section>
                <h2 style="font-size: 24px; color: #333;">Informações de Contato</h2>

                <p style="font-size: 23px; color: #333;">Envie-nos um e-mail para entrar em contato:</p>
                <p style="font-size: 23px; color: #333;"><strong>Email:</strong> estantemagica@gmail.com</p>

                <h2 style="font-size: 24px; color: #333;">Endereço</h2>
                <p style="font-size: 23px; color: #333;">Nosso endereço físico:</p>
                <p style="font-size: 23px; color: #333;"><strong>Endereço:</strong> Rua Principal, 123 - Cidade, Estado</p>
            </section>
        </div>

    </div>

    <footer>
        <p style="font-size: 20px; color: #999;">&copy; 2023 Seu Site</p>
    </footer>
</body>
</html>
