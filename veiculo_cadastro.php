<?php include("includes/header.php");

echo $idveiculo = $_POST['idveiculo'] ?? null;

try {
    $sql = "select * from veiculo where idveiculo = :idveiculo";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':idveiculo' => $idveiculo]);
    $veiculo = $stmt->fetch();
} catch (PDOException $e) {
    "Erro: " . $e->getMessage();
}

$tipo = $veiculo['tipo'] ?? '';
$placa = $veiculo['placa'] ?? '';
$ano = $veiculo['ano'] ?? '';
$cor = $veiculo['cor'] ?? '';
$status_op = $veiculo['status_op'] ?? '';
$km_inicial = $veiculo['km_inicial'] ?? '';
$data_ultimamanutencao = $veiculo['data_ultimamanutencao'] ?? '';
$intervalo_manutencao = $veiculo['intervalo_manutencao'] ?? '';

$url_action = $idveiculo ? "actions/veiculo_alterar.php" : "actions/veiculo_gravar.php"
    ?>

<h1>Veículos Formulário</h1>

<form action="actions/veiculo_gravar.php" method="POST">

    <input type="hidden" value="<?php echo $idveiculo ?>" name="idveiculo">

    <label>Tipo combustivel</label>
    <select name="tipo">
        <option value="" <?php echo $tipo == '' ? 'selected' : '' ?>>Selecione o Tipo</option>
        <option value="1" <?php echo $tipo == '1' ? 'selected' : '' ?>>Diesel</option>
        <option value="2" <?php echo $tipo == '2' ? 'selected' : '' ?>>Flex</option>
        <option value="3" <?php echo $tipo == '3' ? 'selected' : '' ?>>Etanol</option>
        <option value="4" <?php echo $tipo == '4' ? 'selected' : '' ?>>Gasolina</option>
    </select><br>

    <label>Placa</label>
    <input value="<?php echo $placa ?>" name="placa" type="text" placeholder="Escreva a placa" /><br>

    <label>Ano</label>
    <input value="<?php echo $ano ?>" name="ano" type="text" placeholder="Escreva o ano" /><br>

    <label>Cor</label>
    <input value="<?php echo $cor ?>" name="cor" type="text" placeholder="Escreva a cor" /><br>

    <select name="status_op">
        <option value="" <?php echo $status_op == '' ? 'selected' : '' ?>>Selecione o status</option>
        <option value="1" <?php echo $status_op == '1' ? 'selected' : '' ?>>Disponível</option>
        <option value="2" <?php echo $status_op == '2' ? 'selected' : '' ?>>Em Rota</option>
        <option value="3" <?php echo $status_op == '3' ? 'selected' : '' ?>>Manutenção</option>
    </select>

    <label>Km Inicial</label>
    <input value="<?php echo $km_inicial ?>" name="km_inicial" type="text" placeholder="Escreva o número" /><br>

    <label>Data Última Manutenção</label>
    <input value="<?php echo $data_ultimamanutencao ?>" name="data_ultimamanutencao" type="datetime-local"
        placeholder="Escreva a data" /><br>

    <label>Intervalo Manutenção (Dias)</label>
    <input value="<?php echo $intervalo_manutencao ?>" name="intervalo_manutencao" type="text"
        placeholder="Escreva em dias" /><br>

    <input type="submit" value="Gravar">
    <input type="button" value="Cancelar" onclick="window.location = 'veiculos.php'">
</form>


<?php include("includes/footer.php");