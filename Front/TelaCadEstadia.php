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
    <h2 class="mb-4">Cadastro de Estadia</h2>

    <form name="entrada" method="post" action="../Back/cadastroEstadia.php">
        <div class="mb-3">
            <label class="form-label">CPF:</label>
            <input type="text" class="form-control" name="CPF" placeholder="Digite o CPF">
        </div>

        <div class="mb-3">
            <label class="form-label">País de Origem:</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="paisOrigem" value="Brasil">
                <label class="form-check-label">Brasil</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="paisOrigem" value="Argentina">
                <label class="form-check-label">Argentina</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="paisOrigem" value="Paraguai">
                <label class="form-check-label">Paraguai</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="paisOrigem" value="Uruguai">
                <label class="form-check-label">Uruguai</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="paisOrigem" value="Chile">
                <label class="form-check-label">Chile</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="paisOrigem" value="Peru">
                <label class="form-check-label">Peru</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Previsão de Estadia:</label>
            <select class="form-select" name="previsaoEstadia">
                <option value="3 Dias">3 dias</option>
                <option value="5 Dias">5 dias</option>
                <option value="1 Semana">1 Semana</option>
                <option value="2 semanas">2 semanas</option>
                <option value="3 Semanas Ou +">3 Semanas ou Mais</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Companhias Aéreas já Utilizadas:</label>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="compAerea[]" value="GOL">
                        <label class="form-check-label">GOL</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="compAerea[]" value="AZUL">
                        <label class="form-check-label">AZUL</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="compAerea[]" value="TRIP">
                        <label class="form-check-label">TRIP</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="compAerea[]" value="AVIANCA">
                        <label class="form-check-label">AVIANCA</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="compAerea[]" value="RISSETTI">
                        <label class="form-check-label">RISSETTI</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="compAerea[]" value="GLOBAL">
                        <label class="form-check-label">GLOBAL</label>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" name="botao" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

</body>
</html>