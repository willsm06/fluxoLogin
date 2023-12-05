<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Login - SmartMove</title>
</head>
<body>

<div class="login-container">
  <img src="assets/img/logoW.jpeg" alt="Logo" class="logo">
  <div class="login-box">
    <h1>Login</h1>
    <p>Entre em sua conta SmartMove</p>
    <form action="validar.php" method="post">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <a href="recuperar_senha.php">Esqueci minha senha</a>
      <button type="submit">Entrar</button>
      <?php 
        if(isset($_SESSION['erro']) && $_SESSION['erro'] == 2){
          echo "<p>Erro ao logar!</p>";
        }else{}
      ?>
    </form>
    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
  </div>
</div>

</body>
</html>
