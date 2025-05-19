<?php
require_once '../Back/buscarEstadia.php';
$hospedeCpf = $_POST['cpf'];
$estadia = buscarDadosEstadia($hospedeCpf);
$pais = $estadia['paisOrigem'];;
$previsaoEstadia = $estadia['previsaoEstadia'];
$compAerea = $estadia['ciasAereas'];
$compAerea = explode(", ",$compAerea);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Tela de Alterar Excluir Estadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<h1 class="mb-4">Tela de Alteração de Estadia</h1>
<form name="entrada" method="post" action="../Back/AlterarExcluirEstadia.php" class="form">
    <div class="mb-3">
        <Label class="form-label fw-bold">Pais de Origem: </Label><br><br>
        <div class="form-check">
            <input type="radio" name="paisOrigem" value="Brasil" class="form-check-input" <?php if ($pais == 'Brasil') echo 'checked'; ?>>
            <label class="form-check-label">Brasil</label>
        </div>
        <div class="form-check">
            <input type="radio" name="paisOrigem" value="Argentina" class="form-check-input" <?php if ($pais == 'Argentina') echo 'checked'; ?>>
            <label class="form-check-label">Argentina</label>
        </div>
        <div class="form-check">
            <input type="radio" name="paisOrigem" value="Paraguai" class="form-check-input" <?php if ($pais == 'Paraguai') echo 'checked'; ?>>
            <label class="form-check-label">Paraguai</label>
        </div>
        <div class="form-check">
            <input type="radio" name="paisOrigem" value="Uruguai" class="form-check-input" <?php if ($pais == 'Uruguai') echo 'checked'; ?>>
            <label class="form-check-label">Uruguai</label>
        </div>
        <div class="form-check">
            <input type="radio" name="paisOrigem" value="Chile" class="form-check-input" <?php if ($pais == 'Chile') echo 'checked'; ?>>
            <label class="form-check-label">Chile</label>
        </div>
        <div class="form-check mb-3">
            <input type="radio" name="paisOrigem" value="Peru" class="form-check-input" <?php if ($pais == 'Peru') echo 'checked'; ?>>
            <label class="form-check-label">Peru</label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Previsão de Estadia: </label>
        <select name="previsaoEstadia" class="form-select">
            <option value="3 Dias" <?php if ($previsaoEstadia == '3 Dias') echo 'selected'; ?>>3 dias</option>
            <option value="5 Dias" <?php if ($previsaoEstadia == '5 Dias') echo 'selected'; ?>>5 dias</option>
            <option value="1 Semana" <?php if ($previsaoEstadia == '1 Semana') echo 'selected'; ?>>1 Semana</option>
            <option value="2 semanas" <?php if ($previsaoEstadia == '2 semanas') echo 'selected'; ?>>2 semanas</option>
            <option value="3 SemanasOu+" <?php if ($previsaoEstadia == '3 SemanasOu+') echo 'selected'; ?>>3 Semanas ou Mais</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Companhias Aéreas já Utilizadas: </label><br>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="compAerea[]" value="GOL" class="form-check-input" <?php if (in_array('GOL', $compAerea)) echo 'checked'; ?>>
            <label class="form-check-label">GOL</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="compAerea[]" value="AZUL" class="form-check-input" <?php if (in_array('AZUL', $compAerea)) echo 'checked'; ?>>
            <label class="form-check-label">AZUL</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="compAerea[]" value="TRIP" class="form-check-input" <?php if (in_array('TRIP', $compAerea)) echo 'checked'; ?>>
            <label class="form-check-label">TRIP</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="compAerea[]" value="AVIANCA" class="form-check-input" <?php if (in_array('AVIANCA', $compAerea)) echo 'checked'; ?>>
            <label class="form-check-label">AVIANCA</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="compAerea[]" value="RISSETTI" class="form-check-input" <?php if (in_array('RISSETTI', $compAerea)) echo 'checked'; ?>>
            <label class="form-check-label">RISSETTI</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="compAerea[]" value="GLOBAL" class="form-check-input" <?php if (in_array('GLOBAL', $compAerea)) echo 'checked'; ?>>
            <label class="form-check-label">GLOBAL</label>
        </div>
    </div>

    <input type="hidden" name="cpf" value="<?php echo $hospedeCpf; ?>">
    <div class="d-flex gap-2">
        <button type="submit" name="editar" class="btn btn-primary">
            Salvar Alterações
        </button>
        <button type="submit" name="excluir" class="btn btn-danger">
            Excluir Estadia
        </button>
    </div>
</form>
</body>
</html>