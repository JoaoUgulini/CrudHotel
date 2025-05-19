<?php
include_once 'conecao.php';

function buscarDadosHospede($cpf){
    $conexao = conectar("bdhotel");
    $sql = "Select * from hospede where cpf = :cpf";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':cpf', $cpf);
    $pstmt->execute();
    $hospede = $pstmt->fetch(PDO::FETCH_ASSOC);
    $conexao = encerrar();
    return $hospede;
}
