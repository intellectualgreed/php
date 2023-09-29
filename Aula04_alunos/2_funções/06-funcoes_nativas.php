<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas PHP</title>
</head>
<body>
    <h1>Exemplos de funções nativas do PHP</h1>
    <hr>

    <h2>Strings</h2>
    <h3>String</h3>
<?php
// Trim(param) -> Remove espaços antes e depois de strings
$nome = "Ignacio Cunha        ";
$nomeSemEspaco = trim($nome);
$nome2 = "      Victor        "

?>

<!-- 1ª Digitação (Aqui) -->
<pre> <?=var_dump($nome)?> </pre>
<pre> <?=var_dump(trim($nome))?> </pre>

<!-- ___________________________________________________________ -->
<!-- Substitui um texto por outro-->
<h3>str_replace</h3>
<?php
$fraseFeia = "<p>Fulano é um bobão e xarope</p>";
// $fraseBonita = "<p>Fulano é um lindinho e maravilhoso</p>";

//  2ª Digitação (Aqui)

$fraseBonita = str_replace(['bobão','xarope'] ,['lindinho','maravilhoso'], $fraseFeia);

echo $fraseFeia;
echo $fraseBonita;
?>
<!-- ___________________________________________________________ -->
<!-- Separa os texto através de um delimitador -->
<h3>explode</h3>
<?php
$linguagens = "HTML - CSS - JS";
$arrayLinguagens = explode(" - ", $linguagens);

    foreach($arrayLinguagens as $i){
        echo $i . '<br>';
    }

?>
    
<!-- ___________________________________________________________ -->
<hr>
    <h2>Arrays</h2>
    <h3>implode()</h3>

<!-- 4ª Digitação (Aqui) -->
<?php
    $bandas = ["Ghost", "Slipknot", "Nirvana"];
    $stringBandas= implode("|", $bandas);
?>

<pre> <?=var_dump($bandas)?> </pre>
<pre> <?=var_dump($stringBandas)?> </pre>
<!-- ___________________________________________________________ -->
<!-- Simplifica a saída -->
    <h3>extract()</h3>

<!-- 5ª Digitação (Aqui) -->

<?php
    $infoPessoal = array("nome" => "Victor", "idade" => "16", "sexo" => "Masculino", "cidade" => "Santo André - SP");

    extract ($infoPessoal)

?>

<p> <?=$nome?> </p>
<p> <?=$idade?> </p>
<p> <?=$sexo?> </p>
<p> <?=$cidade?> </p>

<!-- ___________________________________________________________ -->
<hr>

<!-- Filtra indicando um preenchimento errado -->
    <h2>Filtros</h2>
<?php
$email = "ignacio@gmail.com.br";
$ataque = "<script> document.body.innerHTML = '<h1>Sou ráqui!! hahahah >.<</h1>' </script>";

// echo $ataque;

//  6ª Digitação (Aqui)

$ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

    echo $ataqueAnulado;
?>
<p>
    <!-- <?=var_dump(filter_var($ataque))?> -->
</p>

<p>
    <?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))?>
</p>



<!-- ___________________________________________________________ -->
<hr>
    <h2>Segurança (Criptografia)</h2>

<?php
$senha = "123abc"; // texto puro ou plain text (sem segurança)

/* Algoritmos mais comuns (Criptografia)
MD5, SHA1, SHA256 */
$senhaMD5 = md5($senha);
$senhaSHA1 = sha1($senha);
$senhaSHA256 = hash('sha256', $senha);

// Método recomendado atualmente
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

?>

<!-- strlen($senha) Para ler nº caracteres -->

<p> Senha (texto puro): <?=$senha?> </p>
<p> Senha (MD5): <?=$senhaMD5?> </p>
<p> Senha (SHA1): <?=$senhaSHA1?> </p>
<p> Senha (SHA256): <?=$senhaSHA256?> </p>

<!-- Gera um Hash de 60 caracteres -->
<p> Senha (Usando password_hash): <?=$senhaSegura?> </p>

<hr>
<!-- Como checar se a senha é a correta -->

<!-- 7ª Digitação (Aqui)  -->
    <?php
        $i = "123ab";

        if ($i === $senha){
            echo "Senha correta";
        }  else{
            echo "Senha incorreta";
        }
    ?>
</body>
</html>