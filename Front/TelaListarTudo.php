<?php
require_once '../Back/Conecao.php';
$conexao = conectar("bdhotel");
$sql = "SELECT * FROM hospede";
$stmt = $conexao->query($sql);
$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sql2 = "SELECT * FROM controle";
$stmt2 = $conexao->query($sql2);
$dados2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tela Listar Tudo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2 class="mb-4">Lista de Hóspedes</h2>
    <div class="table-responsive mb-5">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <?php if (!empty($dados)): ?>
                        <?php foreach (array_keys($dados[0]) as $coluna): ?>
                            <th><?php echo $coluna; ?></th>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $hospede): ?>
                    <tr>
                        <?php foreach ($hospede as $valor): ?>
                            <td><?php echo $valor; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <h2 class="mb-4">Lista de Controle</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <?php if (!empty($dados2)): ?>
                        <?php foreach (array_keys($dados2[0]) as $coluna): ?>
                            <th><?php echo $coluna; ?></th>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados2 as $controle): ?>
                    <tr>
                        <?php foreach ($controle as $valor): ?>
                            <td><?php echo $valor; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>