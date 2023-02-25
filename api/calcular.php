<?php

/**
 * This function prints out results.
 * 
 * @return float $saidaCalculo
 * @param int $distancia
 * @param float $consumo
 * @param string $tipoCombustivel
 * @param float $totalGasto
 */
function printResultado($distancia, $consumo, $tipoCombustivel, $totalGasto)
{

  $saidaCalculo = <<<MENSAGEM

    <p style='padding:20px;'>
    <b>Distância a percorrer:</b> {$distancia}km <br> 
    <b>Consumo do veículo:</b> {$consumo}Km/l <br> 
    <b>Combustível:</b> {$tipoCombustivel}<br> 
    <b>Total:</b> R$ {$totalGasto}</p>

  MENSAGEM;

  return $saidaCalculo;
};

function verificaCombustivel($tipoCombustivel, $litros, $distancia, $consumo)
{


  switch ($tipoCombustivel) {

    case 'gasolina':
      $tipoCombustivel = 'Gasolina';
      $precoLitro = 7.24;
      $totalGasto = round($precoLitro * $litros, 2);
      return printResultado($distancia, $consumo, $tipoCombustivel, $totalGasto);
      break;

    case 'alcool':
      $tipoCombustivel = 'Álcool';
      $precoLitro = 5.04;
      $totalGasto = round($precoLitro * $litros, 2);
      return printResultado($distancia, $consumo, $tipoCombustivel, $totalGasto);
      break;

    case 'diesel':
      $tipoCombustivel = 'Diesel';
      $precoLitro = 5.89;
      $totalGasto = round($precoLitro * $litros, 2);
      return printResultado($distancia, $consumo, $tipoCombustivel, $totalGasto);
      break;
  };
}

if ($_POST) {

  $distancia = $_REQUEST['distancia'];
  $consumo = $_REQUEST['consumo'];
  $tipoCombustivel = $_REQUEST['combustivel'];

  if (is_numeric($distancia) && is_numeric($consumo)) {
    if ($distancia > 0 && $consumo > 0) {

      $litros = $distancia / $consumo;
      $mensagem = verificaCombustivel($tipoCombustivel, $litros, $distancia, $consumo);
    } else {
      $mensagem = "<p style='color:red; font-weight:bold; padding:20px;'>Dados inválidos!</p>";
    }
  } else {
    $mensagem = "<p style='color:red; font-weight:bold; padding:20px;'>Dados inválidos!</p>";
  }
} else {
  $mensagem = "<p style='color:red; font-weight:bold; padding:20px;'>Não foi possível realizar o cálculo!</p>";
}

?>
<!-- header -->
<?php require_once 'header.php'; ?>
<!-- results -->
<?php require_once 'result.php'; ?>
<!-- footer -->
<?php require_once 'footer.php'; ?>