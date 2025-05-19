<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de Estadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Consulta de Estadia</h2>
    <form action="TelaAlterarExcluirEstadia.php" method="post">
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF do Hóspede:</label>
            <input type="text" class="form-control" name="cpf" placeholder="Digite o CPF para Alterar/Excluir a estadia" required>
        </div>
        <button type="submit" class="btn btn-primary">Buscar Estadia</button>
    </form>
</div>

</body>
</html>