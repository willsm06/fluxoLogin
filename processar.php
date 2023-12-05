<?php
    require_once "includes/conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];
    $senha = hash("sha512", md5($senha));
    $confirmar_senha = hash("sha512", md5($confirmar_senha));

    if($pass != $confpass){
		echo "senha nao confere";
		die();
	}

    $query = "INSERT INTO usuario (nome, email, senha, conf_senha)
                    VALUES ('$nome', '$email', '$senha', '$confirmar_senha')";

    if (mysqli_query($conn, $query)) {
        echo "Registro inserido com sucesso!";
        header("location:index.php");
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
        header("location:cadastro.php");
    }

    mysqli_close($conn);
?>
