<?php
include_once 'conecao.php';
$cpf = $_POST['CPF'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$dataNascimento = $_POST['dataNascimento'];
function cadastro($cpf, $nome, $sobrenome, $sexo, $dataNascimento)
{
    $conexao = conectar("bdhotel");
    $sql = "Insert into hospede (cpf, nome, sobrenome, sexo, dataNascimento) values (:cpf, :nome, :sobrenome, :sexo, :dataNascimento )";
    $pstmt = $conexao->prepare($sql);
    $pstmt->bindValue(':cpf', $cpf);
    $pstmt->bindValue(':nome', $nome);
    $pstmt->bindValue(':sobrenome', $sobrenome);
    $pstmt->bindValue(':sexo', $sexo);
    $pstmt->bindValue(':dataNascimento', $dataNascimento);
    $pstmt->execute();
    $conexao = encerrar();
    header("Location: ../Front/index.php");
}

cadastro($cpf, $nome, $sobrenome, $sexo, $dataNascimento);

?>
