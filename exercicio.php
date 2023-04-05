<!DOCTYPE html>
<html>
<head>
<title>Controle de Gastos</title>
    <style>
    body {
    background-color:LightSteelBlue ;
    }
    table {
    margin-bottom: 22px;
    border-collapse: collapse;
    background-color:Pink;
    }
    th, td {
    padding: 15px;
    border: 3px solid #CCC;
    }
    th {
    background-color:Pink;
    text-align: left;
    }
    td input[type="number"] {
    width: 100%;
    box-sizing: border-box;
    }
    #total-receitas {
    color:red;
    }
    #total-despesas {
    color:blue;
    }
    #resultado {
    color: <?= $resultado == 'Crédito' ? 'green' : 'red' ?>;
    }
    hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #CCC;

    }
    </style>
    </head>
    <body>
    <h1>Tabela de Receitas e Despesas</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $receita1 = $_POST['receita1'] ?? 0;
        $receita2 = $_POST['receita2'] ?? 0;
        $despesa1 = $_POST['despesa1'] ?? 0;
        $despesa2 = $_POST['despesa2'] ?? 0;
        $despesa3 = $_POST['despesa3'] ?? 0;
        $despesa4 = $_POST['despesa4'] ?? 0;

    $total_receitas = $receita1 + $receita2;
    $total_despesas = $despesa1 + $despesa2 + $despesa3 + $despesa4;

    if ($total_receitas > $total_despesas) {
        $resultado = "Crédito";
        $cor_resultado = "green";
    } else {
        $resultado = "Débito";
        $cor_resultado = "red";
    }
    }
    ?>
    <form method="post">
    <table>
    <tr>
        <th>Receitas</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>Receita 1</td>
        <td><input type="number" name="receita1" value="<?= $receita1 ?>"></td>
    </tr>
    <tr>
        <td>Receita 2</td>
        <td><input type="number" name="receita2" value="<?= $receita2 ?>"></td>
    </tr>
    <tr>
    
    <th>Despesas</th>
    <th>Valor</th>
    </tr>
    <tr>
        <td>Despesa 1</td>
        <td><input type="number" name="despesa1" value="<?= $despesa1 ?>"></td>
    </tr>
    <tr>
        <td>Despesa 2</td>
        <td><input type="number" name="despesa2" value="<?= $despesa2 ?>"></td>
    </tr>
    <tr>
        <td>Despesa 3</td>
        <td><input type="number" name="despesa3" value="<?= $despesa3 ?>"></td>
    </tr>
    <tr>
        <td>Despesa 4</td>
        <td><input type="number" name="despesa4" value="<?= $despesa4 ?>"></td>
    </tr>
    </table>
    <button type="submit">Calcular</button>
    </form>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <h2>Resultado: <?= $resultado ?></h2>
        <h3>Receitas</h3>
    <ul>
        <li>Receita 1: R$ <?= $receita1 ?></li>
        <li>Receita 2: R$ <?= $receita2 ?></li>
        <li><strong>Total: R$ <?= $total_receitas ?></strong></li>
    </ul>
    <h3>Despesas</h3>
    <ul>
        <li>Despesa 1: R$ <?= $despesa1 ?></li>
        <li>Despesa 2: R$ <?= $despesa2 ?></li>
        <li>Despesa 3: R$ <?= $despesa3 ?></li>
        <li>Despesa 4: R$ <?= $despesa4 ?></li>
    <li><strong>Total: R$ <?= $total_despesas ?></strong></li>
    </ul>
    <?php endif; ?>
    </body>
    </html>

