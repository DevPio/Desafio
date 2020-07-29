<?php

require('config.php');

    $nomeNot = filter_input(INPUT_POST,'nome');
    $nomeCat = filter_input(INPUT_POST,'categoria');
    $nomeNUdo = filter_input(INPUT_POST,'conteudoNot');

    if($nomeNot && $nomeCat &&  $nomeNUdo){
        $sql = $pdo->prepare("INSERT INTO noticias (id, titulonoticia,categorianoticia,conteudonoticia)
        VALUES (:id,:titulonoticia,:categorianoticia,:conteudonoticia)");
        $sql->bindValue(':id',null);
        $sql->bindValue(':titulonoticia',$nomeNot);
        $sql->bindValue(':categorianoticia',$nomeCat);
        $sql->bindValue(':conteudonoticia',$nomeNUdo);

        $sql->execute();

        header("Location:listnot.php");
        exit;

    }else{
        header("Location:index.php");
        exit;
    }
?>
