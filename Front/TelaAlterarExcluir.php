<?php
require_once '../Back/buscaHospede.php';
$cpf = $_POST['cpf'];
$hospede = buscarDadosHospede($cpf);
$nome = $hospede['nome'];
$sobrenome = $hospede['sobrenome'];
$dataNascimento = $hospede['dataNascimento'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Hóspede</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Editar Dados do Hóspede</h2>
        </div>
        <div class="card-body">
            <form action="../Back/alterarExcluir.php" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                               value="<?php echo htmlspecialchars($nome); ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sobrenome" class="form-label">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                               value="<?php echo htmlspecialchars($sobrenome); ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento"
                           value="<?php echo htmlspecialchars($dataNascimento); ?>" required>
                </div>

                <input type="hidden" name="cpf" value="<?php echo htmlspecialchars($cpf); ?>">

                <div class="d-flex gap-2">
                    <button type="submit" name="editar" class="btn btn-primary">
                        Salvar Alterações
                    </button>
                    <button type="submit" name="excluir" class="btn btn-danger">
                        Excluir Hóspede
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>