<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de Estadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Consulta de Estadia</h2>
        </div>
        <div class="card-body">
            <form action="TelaListarEstadia.php" method="post">
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF do Hóspede:</label>
                    <input type="text" name="cpf" class="form-control" placeholder="Digite o CPF para consultar a estadia" required>
                </div>
                <button type="submit" class="btn btn-primary">
                    Consultar
                </button>
            </form>
        </div>
    </div>
</body>
</html>