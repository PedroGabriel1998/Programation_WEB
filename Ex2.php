<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8"/>
 <!--
 <head>
     <link href = "EstiloDropDown.css" rel = "stylesheet" type = "text/css"> 
    <meta charset="UTF-8"/>
    <title>Semana 05</title>
  -->
  </head>
  <body>
  <!--
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
  -->
    <li><a href = "./Sem5.html">Voltar para a lista de exercicios</a></li>
    <h1>Calculando a quantidade máxima de pessoas no ambiente, dado as condições de COVID-19:</h1>
    <form name="CalculoCovid" method = "post" action = "Ex2.php" >
      <label for="largura"> Largura </label><br>
      <input type="number" id="largura" name = "largura" value = $largura><br>
      <label for="comprimento"> Comprimento </label><br>
      <input type="number" id="comprimento" name = "comprimento" value = $comprimento><br>
      <br/>

      <input type="submit" value = "Calcular">

    </form>

    <br/>
            
    <?php
      function qtdAlunos($l, $c){
        $area = $l * $c;
        $qtd = floor($area / 2.25);
        echo "A quantidade de alunos possíveis nessa sala, respeitando o espaço de 2,25 m² para cada <br> um é de <b>$qtd</b>.";                
      }

      #lê os valores

      $largura = $_POST["largura"];
      $comprimento = $_POST["comprimento"];
      qtdAlunos($largura, $comprimento);

    ?>
  </body>
</html>