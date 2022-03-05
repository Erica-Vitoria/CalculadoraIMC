<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>
    <link rel="stylesheet" href="style.css">
    <style>
        fieldset{
            margin-left: 515px;
        }
    </style>
</head>
<body>
<div style="text-align:center;"> 
    <h1>Resultado do IMC</h1>
    </div>
    <?php
    //para mulheres o imc ideal é de 19 a 24
    //para homens o imc ideal é de 20 a 25
    //o imc é o peso / altura^2
    $altura = (double)$_GET["altura"];
    $peso = (double) $_GET["peso"];
    
    //calculo do imc

    $imc = $peso / pow ($altura,2);
    echo "<fieldset>O seu IMC é ". number_format($imc,2)."</fieldset>"; 
    $sexo = $_GET["sexo"];
    
    //testando para mulheres

    if($sexo=="mulher"){
        if($imc < 19){
            echo "<fieldset>Abaixo do peso ideal</fieldset>";
        }
        if($imc >=19 && $imc<=24){
            echo "<fieldset>Você está no peso ideal</fieldset>";
        }
        if($imc>24){
        echo "<fieldset>Você está acima do peso</fieldset>";}
    }

    //testando para homens

        elseif ($sexo == "homem"){
            if($imc < 20){
                echo "<fieldset>Abaixo do peso ideal</fieldset>";
            }
            if($imc >=20 && $imc<=25){
                echo "<fieldset>Você está no peso ideal</fieldset>";
            }
            if($imc > 25) {
        echo "<fieldset>Você está acima do peso</fieldset>";}
        }
            ?>

            <br/>
            <div style="text-align:center;">
            <a href="calculadoraimc.html">Voltar</a></div>
</body>
</html>