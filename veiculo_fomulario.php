<?php include("includes/header.php"); ?>

<h1>Veículos Fomulários</h1>

<button onclick="window.location.href='veiculo_formulario.php'">Novo veículo</button>

<label>Tipo de Combustível</label>
<select>
    <option value="">Selecione o Tipo</option>
    <option value="1">Diesel</option>
    <option value="2">Flex</option>
    <option value="3">Etanol</option>
    <option value="4">Gasolina</option>
</select>

<label>Placa</label>
<input type="text" placeholder="Escreva a placa do veículo"/>

<label>Ano</label>
<input type="text" placeholder="Escreva o ano do veículo"/>

<label>Cor</label>
<input type="text" placeholder="Escreva a cor do veículo"/>

<select>
    <option value="">Selecione o Status</option>
    <option value="">Disponível</option>
    <option value="">Em rota</option>
    <option value="">Manutenção</option>
</select><br>

<label>Km_inicial</label>
<label>data ultima manutenção</label>
<label>intervalo de manutenção</label>

include("includes/footer.php");