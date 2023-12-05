<?php
	session_start();
	if(isset($_SESSION['logado'])){
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Bem-vindo(a) - SmartMove</title>
</head>
<body>

<div class="bem-vindo-container">
<img src="assets/img/logoW.jpeg" alt="Logo" class="logo">
  <div class="bem-vindo-box">
    <h2>Seja bem-vindo(a) <?php echo $_SESSION["email_user"]; ?>!</h2>
    <p>Seu login foi realizado com sucesso e agora você faz parte da nossa comunidade.</p>
    <a href="" class="botao-azul-escuro">Ir para a página inicial</a>
    <a href="logout.php" class="botao-azul-escuro">Sair</a>
  </div>
</div>

</body>
</html>

<?php 
	}
	else{
		$_SESSION['logado']=false;
		$_SESSION['erro']=2;
		header("location:index.php");
	} 
?>