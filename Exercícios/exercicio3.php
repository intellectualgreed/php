<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Nº3</title>
</head>
<style>
    .dtq{color: blue;}
</style>
<body>
    <!-- Programador: Victor Oliveira Rodrigues -->
    <h1>Exemplos de dados PHP</h1>
    <hr>

    <?php
        echo "<h1 class='dtq'>Exemplos de dados numéricos</h1> <br>";
        echo 14 + 4;
        echo " - Soma de inteiros. <br>";

        $n = 12;
        echo $n;
        echo " - Alimentar variável e recuperar valor. <br>";

    ?>
    <?php
        $a = 15;

        if(is_int($a)) {//true
            echo "É um inteiro 9 <br>";
        }
    ?>
    <hr>

    <?php
        echo "<h1 class='dtq'>Exemplos de dados de texto</h1> <br>";

        echo "<br><p>Esse é um exemplo de texto</p><br>";
    ?>

    <?php
        $str = "Exemplo";
 
        if(is_string($str)) {
            echo "$str é uma string 1 <br>";
        }
    ?>
    <hr>

    <?php
        echo "<h1 class='dtq'>Exemplos de dados booleanos</h1> <br>";

        $correto = true;

        if($correto) {
            echo "O exemplo está correto!<br>";
        }
    ?>

    <?php
        $correct = true;

        if (is_bool($correct)) {
            echo "Está correto! <br>";
        }
    ?>
    <hr>
    <?php
        echo "<h1 class='dtq'>Exemplos de dados array</h1><br>";
        
        $f = array (1, 2, 3 , 4);

        echo "<p> O primeiro valor da lista é: $f[0]</p>";
    ?>

</body>
</html>