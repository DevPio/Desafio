<?php

require('config.php');
    $list = [];
    $sql = $pdo->query("SELECT *FROM noticias");
    if($sql->rowCount()>0){
        $list = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    $pesquisa = filter_input(INPUT_GET,'filtro');

    if($pesquisa){
        $dados = $pdo->query("SELECT *FROM noticias WHERE titulonoticia like '$pesquisa%'
        OR categorianoticia like  '%$pesquisa%'
        " );
        $list = $dados->fetchAll(PDO::FETCH_ASSOC);
    }
   
  
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
           
            <form action="" class="filter">
                    <input type="text" name="filtro" id="filtro">
                    <button class="icon"><span class="material-icons">search</span></button>
            </form>
            
        </div>
    </header>


    <section class="NoticiasS">

        <div class="NoticiasSInt">
            <div class="lis">
                <?php foreach($list as $usuario):?>
                    
                    <div class="card">
                        <div class="intcard">
                        
                        <div class="itemC">
                            <h5><?php echo $usuario["titulonoticia"];?></h5>
                        </div>
                        <div class="itemC">
                            <p><?php echo $usuario["categorianoticia"];?></p>
                        </div>

                        <div class="itemC">
                            <button>Acessar</button>
                        </div>
                       
                        </div>

                       
                    </div>
            
            
                    
            
                <?php endforeach;?>

            </div>
        </div>



    </section>

    <footer>
        <div class="footIn">
            <h6>DESENVOLVIDO POR PROGRAMADORES</h6>
        </div>
    </footer>


    <script src="script.js"></script>
</body>
</html>