<?php
    session_start();
    require_once "includes/conexao.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $_SESSION["email_user"] = $_POST["email"];
    $senha = hash("sha512", md5($senha));

    $query = mysqli_query($conn, "select * from usuario WHERE email = '".$email."' AND senha = '".$senha."'");

    $n = mysqli_num_rows($query);

    if($n == 1){
        $_SESSION['logado']=true;
        $_SESSION['erro']=0;
        header("location:home.php");
    }
    else{
        $_SESSION['logado']=false;
        $_SESSION['erro']= 2;
        header("location:index.php");
    } 
?>