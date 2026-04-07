<?php
require 'includes/functions.php';
$dados = carregarDados();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Controle de Gastos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Controle de Gastos</h1>

<div id="resumo">
    <p>Total: R$ <span id="total">0</span></p>
</div>

<table>
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th>Categoria</th>
            <th>Autor</th>
        </tr>
    </thead>
    <tbody id="tabela"></tbody>
</table>

<p>TESTE</p>

<script>
const dados = <?php echo json_encode($dados); ?>;
</script>

<script src="script.js"></script>
</body>
</html>
