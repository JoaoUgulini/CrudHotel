<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de Hóspede</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Consulta de Hóspede</h2>
        </div>
        <div class="card-body">
            <form action="TelaListarhospede.php" method="post">
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF do Hóspede:</label>
                    <input type="text" class="form-control" name="cpf" placeholder="Digite o CPF para consultar" required>
                </div>
                <button type="submit" class="btn btn-primary">
                     Consultar
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>