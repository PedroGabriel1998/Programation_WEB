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
    <?php  
        $largura = $comprimento = $area = $quantidade = 0; 

        if (isset($_POST["submit"])) { 
          $largura = $_POST["largura"]; 
          $comprimento = $_POST["comprimento"]; 
          $area = $largura * $comprimento;
          $quantidade = floor($area / 2.25);
        }
    ?> 
    
      <br>
      <h1>Calculando a quantidade máxima de pessoas no ambiente, dado as condições de COVID-19:</h1>
      <a href = "./Sem5.html">Voltar para a lista de exercicios</a>
      <br> 
      <h2>Informe as dimensões da sala:</h2> 
      <form method="post" action= "<?php echo $_SERVER[" PHP_SELF "];?>"> 
        Largura: 
        <input type="number" name="largura"> 
        <br> 
        <br>  
        Comprimento: 
        <input type="number" name="comprimento"> 
        <br> 
        <br> 
        <input type="submit" value = "Calcular" name="submit">
      </form> 
      <br> 
  
    <?php 
      echo "<br>"; 
      echo "<h2>Quantidade máxima de alunos respeitando os 2,25 m² de distanciamento mínimo:</h2>"; 
      echo $quantidade; 
       echo "<br>"; 
    ?> 
  </body>
</html>
