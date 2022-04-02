<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hubballi&family=Work+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">
  <title>Calculadora de Combustível</title>
</head>
<body>
  <main>
  <!--  conteiner app -->
    <div class="calculadora">
      <!--  primeiro conteiner | descricao -->
      <div class="descricao">
        <h1 class="titulo"><i class="ri-gas-station-fill"></i>  Instruções  </h1>
        <div class="descricao-inner">
          <p class="paragrafo">Esta aplicação tem como finalidade demonstrar os valores  que serão gastos 
            com combustível durante um viagem. 
            Os valores tem como base o consumo do seu veículo, e a distância a ser percorrida. 
          </p>
          <ul class="lista-combustives">
            <li class="tipo">Álcool</li>
            <li class="tipo">Diesel</li>
            <li class="tipo">Gasolina</li>
          </ul>
        </div>
      </div>
      <!-- segundo conteiner | formulário -->
      <div class="form-calculadora">
        <h1 class="titulo"><i class="ri-bus-2-fill"></i>   Cálculo do Valor(R$) do consumo</h1>
        <div class="form-inner">
          <form>
            <label for="distancia" name="distancia" min="1" max="1000000">
            <input type="number" id="distancia">Distância em quilômetros a ser percorrida</input>
            
            <label for="distancia" name="distancia" min="1" max="1000000">
            <input type="number" id="distancia">Consumo de combustível do veículo em (km/l)</input>

            <label for="calcular" name="distancia">
            <input type="submit" id="calcular" value="Calcular"></input>
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer-inner">
      <p>Made by <a href="https://github.com.br/j-guerreiro">j-guerreiro</a></p>
    </div>
  </footer>
</body>
</html>