<!DOCTYPE html> 
<html> 
  
<head> 
    <link href = "EstiloDropDown.css" rel = "stylesheet" type = "text/css"> 
    <meta charset="UTF-8"/>
    <title>Semana 05 - EX3</title>
</head> 
  
<body> 
    <nav>
        <p>Pedro Gabriel</p>
        <ul>
            <li><a href = "index.html">Home</a></li>
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
        // Defining variables 
        $B_Maior = $B_Menor = $Altura = $area = $LBase = $AlturaP = $volume = 0; 
  
        // Checking for a POST request 
        if (isset($_POST["submit"])) { 
          $B_Maior = $_POST["B_Maior"]; 
          $B_Menor = $_POST["B_Menor"]; 
          $AlturaT = $_POST["AlturaT"]; 
          $LBase = $_POST["LBase"]; 
          $AlturaP = $_POST["AlturaP"]; 
          $area = (($B_Maior + $B_Menor) * $AlturaT)/2; 
          $volume = (($LBase + $LBase) * $AlturaP)/3; 
        }
    ?> 
        <h1>Calculando area para um Trapézio e volume de uma Piramide.</h1> 
        <h2>Calculando area para um Trapézio:</h2> 
        <form method="post" action= "<?php echo $_SERVER[" PHP_SELF "];?>"> 
            Base Maior: 
            <input type="number" name="B_Maior"> 
            <br> 
            <br>  
            Base Menor: 
            <input type="text" name="B_Menor"> 
            <br> 
            <br> 
            Altura do Trapézio: 
            <input type="text" name="AlturaT"> 
            <br> 
            <br>  
            <input type="submit" value = "Calcular" name="submit">
        </form> 
        <h2>Calculando volume para uma Piramide:</h2>
        <form method="post" action= "<?php echo $_SERVER[" PHP_SELF "];?>"> 
            Lado da base quadrada: 
            <input type="number" name="LBase"> 
            <br> 
            <br>  
            Altura da Piramide: 
            <input type="text" name="AlturaP"> 
            <br> 
            <br>  
            <input type="submit" value = "Calcular" name="submit">
        </form> 
  
        <?php 
            echo "<h2>Area Trapezio:</h2>"; 
            echo $area; 
            echo "<br>"; 
            echo "<h2>Volume Piramide:</h2>"; 
            echo $volume; 
            echo "<br>";
        ?> 
</body> 
  
</html> 