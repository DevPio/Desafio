<?php
require('config.php')

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>DevMedia</title>
</head>
<body>
    <header>
        <div class="menuInterno">
            <div class="logo">
                <h1><a href="index.php">LOGO</a></h1>
            </div>

            <nav>
                <ul>
                    <li><a href="index.php">CADASTRAR NOTICIAS</a></li>
                    <li><a href="listnot.php">EXIBIR NOTICIAS</a></li>
                   
                </ul>
            </nav>
            <form action="listnot.php" class="filter">
                    <input type="text" name="filtro" id="filtro">
                    <button class="icon"><span class="material-icons">search</span></button>
                    
            </form>
        </div>
    </header>


    <section class="NoticiasS">

        <div class="NoticiasSInt">

            <form method="POST" action="adcionar.php" class="formNot">
                <label for="titulo">Cadastro De Noticias</label>
                <input type="text" name="nome" id="nome" placeholder="Título da Noticia">
                <input type="text" name="categoria" id="categoria" placeholder="Categoria da Notícia">
                <textarea name="conteudoNot" id="conteudoNot" cols="30" rows="10" placeholder="Conteúdo da Notícia"></textarea>
                <button>Cadastrar</button>
            </form>

        </div>



    </section>

    <footer>
        <div class="footIn">
            <h6>DESENVOLVIDO POR PROGRAMADORES</h6>
        </div>
    </footer>


    <script src="script.js"></script>
</body>
