<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exclusão de Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Exclusão de Registros</h2>
        </div>
        <div class="card-body">
            <form action="../Back/ExcluirCPF.php" method="post">
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF do Hóspede:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" required placeholder="Digite o CPF">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">O que deseja excluir?</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="estadia" name="perfil" value="estadia" checked>
                        <label class="form-check-label" for="estadia">Apenas Estadia</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="ambos" name="perfil" value="ambos">
                        <label class="form-check-label" for="ambos">Estadia e Dados do Hóspede</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash"></i> Excluir Registros
                </button>
            </form>
        </div>
    </div>
</body>
</html>