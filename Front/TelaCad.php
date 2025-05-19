<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tela De Cadastro</title>
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Cadastro de Hóspede</h2>
    <form name="entrada" method="post" action="../Back/cadastroHospede.php">
        <div class="mb-3">
            <label class="form-label">CPF:</label>
            <input type="text" class="form-control" name="CPF" placeholder="Digite o CPF">
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
            </div>
            <div class="col">
                <label class="form-label">Sobrenome:</label>
                <input type="text" class="form-control" name="sobrenome" placeholder="Digite o sobrenome">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Sexo:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="M">
                <label class="form-check-label">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="F">
                <label class="form-check-label">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="O">
                <label class="form-check-label">Outro</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Data de Nascimento:</label>
            <input type="date" class="form-control" name="dataNascimento">
        </div>
        <button type="submit" name="botao" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

</body>
</html>