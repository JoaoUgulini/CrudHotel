<?php
require_once '../Back/buscaHospede.php';
$cpf = $_POST['cpf'];
$hospede = buscarDadosHospede($cpf);
$nome = $hospede['nome'];
$sobrenome = $hospede['sobrenome'];
$dataNascimento = $hospede['dataNascimento'];
$sexo = $hospede['sexo'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Tela Listar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<h2 class="mb-4">Informações do Hóspede</h2>
<table class="table table-striped table-bordered">
    <tr>
        <td class="table-secondary"><strong>CPF:</strong></td>
        <td><?php echo $cpf; ?></td>
    </tr>
    <tr>
        <td class="table-secondary"><strong>Nome:</strong></td>
        <td><?php echo $nome; ?></td>
    </tr>
    <tr>
        <td class="table-secondary"><strong>Sobrenome:</strong></td>
        <td><?php echo $sobrenome; ?></td>
    </tr>
    <tr>
        <td class="table-secondary"><strong>Data de Nascimento:</strong></td>
        <td><?php echo $dataNascimento; ?></td>
    </tr>
    <tr>
        <td class="table-secondary"><strong>Sexo:</strong></td>
        <td><?php
            if ($sexo == 'M') {
                echo 'Masculino';
            } else if ($sexo == 'F') {
                echo 'Feminino';
            } else if ($sexo == 'O') {
                echo 'Outro';
            }
            ?></td>
    </tr>
</table>
</body>
</html>