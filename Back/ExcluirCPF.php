<?php
require_once 'conecao.php';
$cpf = $_POST['cpf'];
$perfil = $_POST['perfil'];
if($perfil == 'ambos'){
    $conexao = conectar("bdhotel");
    $sql2 = "Delete from controle where hospedeCpf = :cpf";
    $pstmt2 = $conexao->prepare($sql2);
    $pstmt2->bindValue(':cpf', $cpf);
    $pstmt2->execute();
    $sql = "Delete from hospede where cpf = :cpf";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':cpf', $cpf);
    $pstmt->execute();
    $conexao = encerrar();
    header("Location: ../Front/index.php");
}
else{
    $conexao = conectar("bdhotel");
    $sql2 = "Delete from controle where hospedeCpf = :cpf";
    $pstmt2 = $conexao->prepare($sql2);
    $pstmt2->bindValue(':cpf', $cpf);
    $pstmt2->execute();
    $conexao = encerrar();
    header("Location: ../Front/index.php");
}
?>