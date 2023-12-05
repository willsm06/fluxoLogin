<!-- cadastro.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Cadastro - SmartMove</title>
</head>
<body>

<div class="cadastro-container">
<img src="assets/img/logoW.jpeg" alt="Logo" class="logo">
  <div class="cadastro-box">
    <form action="processar.php" method="post">
      <input type="text" name="nome" placeholder="Nome" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Criar senha" required>
      <input type="password" name="confirmar_senha" placeholder="Confirmar senha" required>
      <button type="submit">Cadastre-se</button>
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
  </div>
</div>

</body>
</html>
