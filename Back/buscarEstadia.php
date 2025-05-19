<?php
include_once 'conecao.php';
function buscarDadosEstadia($hospedeCpf){
    $conexao = conectar("bdhotel");
    $sql = "Select * from controle where hospedeCpf = :hospedeCpf";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':hospedeCpf', $hospedeCpf);
    $pstmt->execute();
    $estadia = $pstmt->fetch(PDO::FETCH_ASSOC);
    $conexao = encerrar();
    return $estadia;
}
?>
