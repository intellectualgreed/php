<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Síntaxe geral</title>
    <style>
        .destaque {color: red;}
    </style>
</head>
<body>
    <h1 class= "destaque">Trabalhando com PHP</h1>
    <p>Programador: Victor Oliveira Rodrigues</p>
    <hr>
    <?php
        echo "Chama Sesi-Senai!";

        echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP. </h2>";
        echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP. </h2>";
    ?>

        <h2>HTML e PHP mesclados</h2>
        <p>Parágrafo HTML</p>

    <?php
        $linguagem = "Linguagem php.";
        ?>
        <p>Parágrafo mesclando HTML com <?=$linguagem?></p>
        <hr>
        
</body>
</html>