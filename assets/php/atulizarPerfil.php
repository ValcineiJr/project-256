<?php
require('connect.php');
$nameIsSet = (!empty($_POST['nome']) && isset($_POST['nome']));
$sobreIsSet = (!empty($_POST['sobre']) && isset($_POST['sobre']));
$passIsSet = (!empty($_POST['senha']) && isset($_POST['senha']));
$userIsSet = (!empty($_POST['usuario']) && isset($_POST['usuario']));
$mailIsSet = (!empty($_POST['email']) && isset($_POST['email']));

$id = $_SESSION['id'];

//Trocar o nome
if($nameIsSet){
    $NOME = $_POST['nome'];
    
    try {
        $sql = "UPDATE loginsitedirack set nome = '$NOME' where id = '$id'";
        $sql = $pdo->query($sql) or die();
        $_SESSION['nome'] = $NOME;

    } catch (PDOExcpetion $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
    
}
//Trocar o sobrenome
if($sobreIsSet){
    $SOBRE = $_POST['sobre'];
    
    try {
        $sql = "UPDATE loginsitedirack set sobrenome = '$SOBRE' where id = '$id'";
        $sql = $pdo->query($sql) or die();
        $_SESSION['sobrenome'] = $SOBRE;

    } catch (PDOExcpetion $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
    
}
//Trocar a senha
if($passIsSet){
    $SENHA   = md5($_POST['senha']);

    try {
        $sql = "UPDATE loginsitedirack set senha = '$SENHA' where id = '$id'";
        $sql = $pdo->query($sql) or die();
        $_SESSION['senha'] = $SENHA;

    } catch (PDOExcpetion $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
}
//Trocar o usuário
if($userIsSet){
    $USER  = $_POST['usuario'];

    try {
        $sql = "UPDATE loginsitedirack set usuario = '$USER' where id = '$id'";
        $sql = $pdo->query($sql) or die();
        $_SESSION['usuario'] = $USER;

    } catch (PDOExcpetion $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
}
//Trocar o Email
if($mailIsSet){
    $EMAIL  = $_POST['email'];

    try {
        $sql = "UPDATE loginsitedirack set email = '$EMAIL' where id = '$id'";
        $sql = $pdo->query($sql) or die();
        $_SESSION['email'] = $EMAIL;

    } catch (PDOExcpetion $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
}


