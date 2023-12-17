<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <style>
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

        /* Estilos para o cabeçalho da página */
        header {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        /* Estilos para a seção de livros */
        section {
            padding: 20px;
        }

        /* Estilos para a lista de livros */
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap; /* Para permitir que os itens se movam para a próxima linha */
            justify-content: space-around; /* Alinha os itens ao centro */
        }

        /* Estilos para cada livro individual */
        .livro {
            width: 230px; /* Largura do bloco de cada livro */
            margin: 10px;
            text-align: center;
        }

        img {
            width: 100%; /* A imagem ocupa 100% da largura do contêiner pai */
            height: auto; /* Mantém a proporção original da imagem */
        }

        /* Estilos para o botão "Adicionar no Carrinho" */
        .btn-carrinho {
            background-color:rgb(159, 106, 187);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .carrinho-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Barra de Navegação -->
    <nav>
        <a href="cadastro.php">Cadastro</a>
        <a href="contatosemlogin.php">Contato</a>
        <a href="login.php">Login</a>
    </nav>

    <!-- Cabeçalho -->
    <header>
        <h1>Opções de Livros</h1>
    </header>

    <!-- Seção de Livros -->
    <section>
        <h2>Escolha um Livro</h2>
        <ul>
            <!-- Livro 1 -->
            <li class="livro">
                <img src="livro0.jpg" alt="Livro 1">
                <p>Preço: R$ 20,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(20)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 2 -->
            <li class="livro">
                <img src="livro1.jpg" alt="Livro 2">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 3 -->
            <li class="livro">
                <img src="livro2.jpg" alt="Livro 3">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 4 -->
            <li class="livro">
                <img src="livro3.jpg" alt="Livro 4">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 5 -->
            <li class="livro">
                <img src="livro4.jpg" alt="Livro 5">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 6 -->
            <li class="livro">
                <img src="livro5.jpg" alt="Livro 6">
                <p>Preço: R$ 30,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(30)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 7 -->
            <li class="livro">
                <img src="livro6.jpg" alt="Livro 7">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 8 -->
            <li class="livro">
                <img src="livro7.jpg" alt="Livro 8">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 9 -->
            <li class="livro">
                <img src="livro8.jpg" alt="Livro 9">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>

            <!-- Livro 10 -->
            <li class="livro">
                <img src="livro9.jpg" alt="Livro 10">
                <p>Preço: R$ 25,00</p>
                <button class="btn-carrinho" onclick="adicionarNoCarrinho(25)">Adicionar no Carrinho</button>
            </li>
        </ul>
    </section>

    <!-- Carrinho -->
    <div class="carrinho-container">
        <h2>Carrinho</h2>
        <div id="carrinho-itens"></div>
        <p>Total: R$ <span id="total-carrinho">0.00</span></p>
    </div>

    <script>
        const carrinho = [];

        function adicionarNoCarrinho(preco) {
            carrinho.push(preco);
            exibirCarrinho();
        }

        function exibirCarrinho() {
            const carrinhoItens = document.getElementById('carrinho-itens');
            carrinhoItens.innerHTML = '';

            carrinho.forEach((preco, index) => {
                const carrinhoItem = document.createElement('div');
                carrinhoItem.classList.add('carrinho-item');
                carrinhoItem.textContent = `Item ${index + 1}: R$ ${preco.toFixed(2)}`;
                carrinhoItens.appendChild(carrinhoItem);
            });

            const total = carrinho.reduce((acc, preco) => acc + preco, 0);
            document.getElementById('total-carrinho').textContent = total.toFixed(2);
        }
    </script>
</body>
</html>
