    <div class="form-calculadora">
      <h1 class="titulo"><i class="ri-bus-2-fill ri-xl"></i> Cálculo do Valor(R$) do consumo</h1>
      <div class="form-inner">
        <p class="paragrafo">Selecione o combustível do seu veículo:</p>

        <form action="calcular.php" method="POST">

          <input class="tipo" type="radio" id="alcool" name="combustivel" value="alcool" required></input>
          <label class="tipo" for="alcool"> Álcool (etanol) </label>

          <input class="tipo" type="radio" id="diesel" name="combustivel" value="diesel" required></input>
          <label class="tipo" for="diesel"> Diesel (óleo diesel) </label>

          <input class="tipo" type="radio" id="gasolina" name="combustivel" value="gasolina" required></input>
          <label class="tipo" for="gasolina"> Gasolina (gasolina comum) </label>

          <input class="entrada" type="number" id="distancia" name="distancia" required><span id="variavel">Distância</span> em quilômetros</input>
          <label for="distancia" min="1" max="1000000">

          <input class="entrada" type="number" id="consumo" name="consumo" required><span id="variavel">Consumo</span> em Km/l</input>
          <label for="consumo" consumo min="1" max="1000000">

          <input class="btn-calcular" type="submit" id="calcular" value="Calcular" name="calcular"></input>
          <label for="calcular">

        </form>
      </div>
    </div>
  </div>
</main>