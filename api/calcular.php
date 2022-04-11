<?php

if($_POST) {

  $distancia =  $_REQUEST['distancia'];
  $consumo =  $_REQUEST['consumo'];
  $tipoCombustivel = $_REQUEST['combustivel'];

  if(is_numeric($distancia) && is_numeric($consumo)) {
    if($distancia > 0 && $consumo > 0) {
      $litros = $distancia / $consumo;
      if($tipoCombustivel == 'gasolina') {
        $tipoCombustivel = 'Gasolina';
        $precoLitro = 7.24;
        $totalGasto = round($precoLitro * $litros, 2);
      }
      else if ($tipoCombustivel == 'alcool') {
        $tipoCombustivel = 'Álcool';
        $precoLitro = 5.04;
        $totalGasto = round($precoLitro * $litros, 2);
      }
      else if($tipoCombustivel == 'diesel') {
        $tipoCombustivel = 'Diesel';
        $precoLitro = 5.89;
        $totalGasto = round($precoLitro * $litros, 2);
      }
      $mensagem = "<p><b>Distância a percorrer:</b> {$distancia}km <br> <b>Consumo do veículo:</b> {$consumo}Km/l 
      <br> <b>Combustível:</b> {$tipoCombustivel}<br> <b>Total:</b> R$ {$totalGasto}</p>";
    }
    else {
      $mensagem = "<p style='color:red; font-weight:bold; padding:20px;'>Dados inválidos!</p>";
    }   
  }
  else {
    $mensagem = "<p style='color:red; font-weight:bold; padding:20px;'>Dados inválidos!</p>";
  }
}
else {
  $mensagem = "<p style='color:red; font-weight:bold; padding:20px;'>Não foi possível realizar o cálculo!</p>";
}
?>

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
        <h1 class="titulo"><i class="ri-gas-station-fill ri-xl"></i>  Resultado do Cálculo  </h1>
        <div class="descricao-inner">
          <p class="paragrafo">Aqui estão suas informações:<?php echo "{$mensagem}"?></p>
        </div>
      </div>
    </div>
    <div class="btn-voltar">
        <a class="btn-inner" href="index.php">Recomeçar</a>
    </div>
  </main>
  <!-- rodapé -->
  <footer>
    <div class="footer-inner">
      <p>Made by <a href="https://github.com.br/j-guerreiro">j-guerreiro</a></p>
    </div>
  </footer>
</body>
</html>