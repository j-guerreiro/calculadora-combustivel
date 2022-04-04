<?php

  echo $_REQUEST['distancia'];
  echo $_REQUES['consumo'];

  $resultado = $distancia * $consumo;


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
          <p class="paragrafo"> Você irá gastar R$ <?php echo "{$resultado}"?>.</p>
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