<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8"/>
 
 <head>
    <link href = "EstiloDropDown.css" rel = "stylesheet" type = "text/css"> 
    <meta charset="UTF-8"/>
    <title>Semana 05</title>
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
    
    <br>
    <h1>Calculando o consumo de um veiculo que anda 55KM com 5 Litros de gasolina:</h1>
    <a href = "./Sem5.html">Voltar para a lista de exercicios</a>
    <br>
    <br>    
    <?php

      static $Quilometros = 55;
      static $litros = 5;

      $consumer = $Quilometros/$litros;

      echo "O consumo é de ", $consumer, " km/L";
    ?>
  </body>
</html>
