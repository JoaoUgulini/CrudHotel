<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta por CPF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Informe o CPF</h2>

    <form action="TelaAlterarExcluir.php" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" name="cpf" placeholder="Digite o CPF para Alterar/Excluir o hospede" required>
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
</div>

</body>
</html>