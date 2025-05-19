<?php
require_once 'conecao.php';
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNascimento = $_POST['dataNascimento'];
function alterar($cpf, $nome, $sobrenome, $dataNascimento){
$conexao = conectar("bdhotel");
$sql = "Update hospede set nome = :nome, sobrenome = :sobrenome, dataNascimento = :dataNascimento where cpf = :cpf";
$pstmt = $conexao->prepare($sql);
$pstmt->bindValue(':cpf', $cpf);
$pstmt->bindValue(':nome', $nome);
$pstmt->bindValue(':sobrenome', $sobrenome);
$pstmt->bindValue(':dataNascimento', $dataNascimento);
$pstmt->execute();
$conexao = encerrar();
header("Location: ../Front/index.php");
}
function deletar($cpf){
    $conexao = conectar("bdhotel");
    $sql = "Delete from hospede where cpf = :cpf";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':cpf', $cpf);
    $pstmt->execute();
    $conexao = encerrar();
    header("Location: ../Front/index.php");
}
if(isset($_POST['excluir'])){
    deletar($cpf);
}else {
    alterar($cpf, $nome, $sobrenome, $dataNascimento);;
}

?>