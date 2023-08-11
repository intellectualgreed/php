<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Síntaxe geral</title>
    <style>
        .destaque {color: indigo; font-weight:bold;}
        .title {color: blue;}
    </style>
</head>
<body>
    <h1 class= "destaque">Sofrendo com PHP</h1>
    <p>Programador: Victor Oliveira Rodrigues</p>
    <hr>
    <?php
        echo "Chama Sesi-Senai!";

        echo "<h2>Gerando <span class='destaque'>Loucura e perda de sanidade</span> através do PHP. </h2>";
        echo "<h2>Gerando <span class=\"destaque\">Loucura e perda de sanidade</span> através do PHP. </h2>";
    ?>

        <h2>HTML e PHP mesclados</h2>
        <p>to ficando biruta</p>

    <?php
        $linguagem = "Linguagem php.";
        ?>
        <p>socorro <?=$linguagem?></p>
        <hr>
        
    <?php 
        echo "Soltando a criatividade - Exercicio 2" 
        ?>
        
        <h2 class="title">Lil Peep - Falling down (Feat XXXTENTACION)</h2>
        <p class="destaque">
            Come, let's watch the rain as it's falling down <br>
            Sunlight on your skin when I'm not around<br>
            Shit don't feel the same when you're out of town<br>
            So come, let's watch the rain as it's falling down<br>
            <br>
            Rain keeps falling, tears keep falling<br>
            Rain keeps falling, tears keep falling<br>
            Darling, your love is like walking a bed of nails<br>
            And I just can't keep on fine<br>
        </p>
</body>
</html>