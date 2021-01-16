<!DOCTYPE html> 
<html> 
  
<head> 
    <link href = "EstiloDropDown.css" rel = "stylesheet" type = "text/css"> 
    <meta charset="UTF-8"/>
    <title>Semana 05 - EX3</title>
    <style>
        h1{
            font-family: Arial;
            text-align: center;
            font-size: 20pt;
        }
        h2{
            text-indent: 30px;
            font-family: Arial;
            font-size: 15pt;
        }
    </style>
</head> 
  
<body> 
    <nav>
        <p>Pedro Gabriel</p>
        <ul>
        <li><a href = "index.html">Home</a><li>
                <li><a href = "#">Programação WEB</a>
                <ul>
                    <li><a href = "./Sem1.html">Semana 01</a></li>
                    <li><a href = "./Sem2.html">Semana 02</a></li>
                    <li><a href = "./Sem3.html">Semana 03</a></li>
                    <li><a href = "./Sem4.html">Semana 04</a></li>
                    <li><a href = "./Sem5.html">Semana 05</a></li>
                </ul>
                </li>
                <li><a href = "#">TCC Senai 2020</a>
                    <ul>
                        <li><a href = "./BracoRobotico.html">Braço Robótico</a></li>
                        <li><a href = "#">Eletroímã</a></li>
                        <li><a href = "#">Mesa de Sensores</a></li>
                    </ul>
                </li>
        </ul>
    </nav>
    <?php 

        $A = $B = $C = $Modulo_1 = $Modulo_2 = $Modulo_3 = 0; 
        $Resposta = " ";
  
        if (isset($_POST["submit"])) { 
            $A = $_POST["A"]; 
            $B = $_POST["B"]; 
            $C = $_POST["C"]; 

            $Modulo_1 = abs($B-$C);
            $Modulo_2 = abs($B-$C);
            $Modulo_3 = abs($B-$C);

            if(($A > 0) && ($B > 0) && ($C > 0)) {
                if(($Modulo_1 < $A) && ($A < ($B+$C)) && ($Modulo_2 < $B) && ($B < ($A+$C)) && ($Modulo_3 < $C) && ($C < ($A+$B))) {
                    if($A == $B && $B == $C) {
                        $Resposta = "O triangulo é equilatero!";
                    }
                    else if($A == $B || $A == $C || $B == $C) {
                        $Resposta = "O triangulo é isoceles!";
                    }
                    else {
                        $Resposta = "O triangulo é escaleno!!";
                    }
                }
                else{
                    $Resposta = "Erro!!! impossivel formar um triangulo com estes valores";
                }
            }
            else{
                $Resposta = "Erro!!! impossivel formar um triangulo com estes valores";
            }
        }
    ?> 
        <br>
        <h1>Verificando o tipo de um triangulo.</h1> 
        <a href = "./Sem5.html">Voltar para a lista de exercicios</a>
        <br> 
        <h2>Informe as dimensões da figura:</h2> 
        <form method="post" action= "<?php echo $_SERVER[" PHP_SELF "];?>"> 
            Lado A: 
            <input type="number" name="A"> 
            <br> 
            <br>  
            Lado B: 
            <input type="number" name="B"> 
            <br> 
            <br> 
            Lado C: 
            <input type="number" name="C"> 
            <br> 
            <br>  
            <input type="submit" value = "Verificar" name="submit">
        </form> 
        <br> 
  
        <?php 
            echo "<br>"; 
            echo "<h2>Este triangulo é do tipo:</h2>"; 
            echo $Resposta; 
            echo "<br>"; 
        ?> 
</body> 
  
</html> 