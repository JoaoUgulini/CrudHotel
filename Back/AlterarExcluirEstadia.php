<?php
require_once 'conecao.php';
$hospedeCpf = $_POST['cpf'];
$paisOrigem = $_POST['paisOrigem'];
$previsaoEstadia = $_POST['previsaoEstadia'];
$vetorCompA = $_POST['compAerea'];
$ciasAereas = implode(", ",$vetorCompA );
function alterarEstadia($hospedeCpf, $paisOrigem, $previsaoEstadia, $ciasAereas)
{
    $conexao = conectar("bdhotel");
    $sql = "Update controle set paisOrigem = :paisOrigem, previsaoEstadia = :previsaoEstadia, ciasAereas = :ciasAereas where hospedeCpf = :hospedeCpf";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':hospedeCpf', $hospedeCpf);
    $pstmt->bindValue(':paisOrigem', $paisOrigem);
    $pstmt->bindValue(':previsaoEstadia', $previsaoEstadia);
    $pstmt->bindValue(':ciasAereas', $ciasAereas);
    $pstmt->execute();
    $conexao = encerrar();
    header("Location: ../Front/index.php");
}

function deletarEstadia($hospedeCpf)
{
    $conexao = conectar("bdhotel");
    $sql = "Delete from controle where hospedeCpf = :hospedeCpf";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':hospedeCpf', $hospedeCpf);
    $pstmt->execute();
    $conexao = encerrar();
    header("Location: ../Front/index.php");

}

if (isset($_POST['excluir'])) {
    deletarEstadia($hospedeCpf);
} else {
    alterarEstadia($hospedeCpf, $paisOrigem, $previsaoEstadia, $ciasAereas);;
}

