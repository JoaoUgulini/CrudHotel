<?php
include_once 'conecao.php';
$hospedeCpf = $_POST['CPF'];
$paisOrigem = $_POST['paisOrigem'];
$previsaoEstadia = $_POST['previsaoEstadia'];
$vetorCompA = $_POST['compAerea'];
$ciasAereas = implode(", ",$vetorCompA );

function cadastroEstadia($hospedeCpf, $paisOrigem, $previsaoEstadia, $ciasAereas)
{
    $conexao = conectar("bdhotel");
    $sql = "Insert into controle (hospedeCpf, paisOrigem, previsaoEstadia, ciasAereas) 
            values (:hospedeCpf, :paisOrigem, :previsaoEstadia, :ciasAereas)";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':hospedeCpf', $hospedeCpf);
    $pstmt->bindValue(':paisOrigem', $paisOrigem); // Corrigido o nome do parâmetro
    $pstmt->bindValue(':previsaoEstadia', $previsaoEstadia);
    $pstmt->bindValue(':ciasAereas', $ciasAereas);

    $pstmt->execute();
    $conexao = encerrar();
    header("Location: ../Front/index.php");
}
cadastroEstadia($hospedeCpf, $paisOrigem, $previsaoEstadia, $ciasAereas);
?>