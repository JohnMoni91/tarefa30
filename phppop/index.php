<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa do João || 30/07</title>
</head>
<body>
<?php
/* Parte 1: Incremento e decremento
    1. Declare uma variável $x com o valor 5. Em seguida, incremente seu
valor em 1 e exiba o resultado.*/

    
        $opa=5;
            echo "Temos o valor: $opa <br/>";
            echo "Agora temos: ". ++$opa. "<br/>";

    /*>2. Declare uma variável $y com o valor 10. Em seguida, decrete seu valor
em 1 e exiba o resultado.*/

        $dem=10;
            echo "Temos o valor: $dem <br/>";
            echo "Agora temos: ". $dem--. "<br/>";

    /*3. Declare uma variável $a com o valor 3. Primeiro, exiba o valor de $a e
depois incremente usando pré-incremento e pós-incremento.*/

        $a=3;
            echo "temos: $a <br/>";
            echo "pré: ". ++$a. "<br/>";
            echo "pós: ". $a++. "<br/>";

        /*4. Declare uma variável $b com o valor 8. Primeiro, exiba o valor de $b e
depois decrete usando pré-decremento e pós-decremento.*/ 

        $b=8;
            echo "temos: $b <br/>";
            echo "pré: ". --$b. "<br/>";
            echo "pós: ". $b--. "<br/>";

        /*Parte 2: Funções
5. Crie uma função chamada helloWorld que não recebe nenhum
argumento e apenas imprime "Hello, World!".*/ 

        function olaMundoBoy () {
            echo "Hello, World! <br/>";
        }

        olaMundoBoy();


        /*6. rie uma função chamada greet que recebe um argumento $name e
imprime "Hello, [name]!".*/

        function greet($name) {
            echo "Hello, " . $name . "!<br/>";
        }
        greet("John");

    /*7. Crie uma função chamada add que recebe dois números como
argumentos, soma-os e retorna o resultado.*/

        function poPioi ($num1,$num2) {
            $num3=($num1+$num2);
            echo $num3 ."<br/>";
        }

        poPioi (10,58);

        /*8. Crie uma função chamada multiply que recebe dois números como
argumentos. O segundo argumento deve ter um valor padrão de 2. A
função deve retornar o produto dos dois números.*/

        function multiplicarNum($numero1,$numero2=2) {
        $resultado=$numero1*$numero2;
            return $resultado;
        }

        $produto1=multiplicarNum(5,3);
            echo "O produto de 5 e 3 é $produto1.<br>";
        $produto2=multiplicarNum(7); 
            echo "O produto de 7 e 2 é $produto2. <br/>";

        /*Parte 3: Funções com strings
9. Crie uma variável com uma frase, e aplique todas as funções nativas
mostradas nos slides.*/

        $texto="boulas bao demaise <br/>";
        echo "textao bao demaise <br/>";
        echo strtolower($texto) ."<br/>";
        echo Strtoupper($texto) ."<br/>";
        echo ucfirst($texto) ."<br/>";
        echo strlen($texto) ."<br/>";
        echo str_replace("bao","bom",$texto) ."<br/>";
        echo substr($texto,0,7) ."<br/>";

        /*Parte 4: Funções matemáticas

10.Crie variáveis e aplique as funções nativas matemáticas para manipulá-
las.*/
        $numero=9.7;
        echo ceil($numero) ."<br/>";
        echo floor($numero) ."<br/>";
        echo round($numero) ."<br/>";
        echo rand() ."<br/>";
        echo sqrt($numero) ."<br/>";
    ?>
</body>
</html>