<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro Exemplo PHP</title>
    <style>
        h2 {
            color: #e50505;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
    <h1>Testando PHP</h1>
    <?php
        echo "<h2> Olá, Mundo! </h2>";
        echo "<h3> Variáveis em PHP </h3>";
        $idade = 21;
        $salario = 1825.54;
        $nome = "Murilo";
        $casado = false;
        echo "O usuario $nome tem $idade anos, seu salário é de R$ $salario";
        echo "<h3> Operadores Aritméticos em PHP </h3>";
        $n1 = 3;
        $n2 = 2;
        echo "com o numero $n1 e $n2 tenho que <br>";
        echo "<br/> A soma vale ".($n1+$n2);
        echo "<br/> A subtração vale ".($n1-$n2);
        echo "<br/> A multiplicação vale ".($n1*$n2);
        echo "<br/> A divisão vale ".($n1/$n2);
        echo "<br/> O modulo vale ".($n1%$n2);
    ?>
</body>
</html>