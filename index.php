<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="imagens/favicon.ico">
    <title>AOL5 - Banco de dados</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	 <link href="css/login.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
  
  
  
  <header>
<video autoplay muted loop id="video_bg">
  <source src="imagens/video.mp4" type="video/mp4">
</video>
  </header>

  
  <div>
    <div class="container">
	<div id="container">

      <form class="form-signin" method="POST" action="valida.php">
        <h2 class="form-signin-heading">Login</h2>
        <label for="login" class="sr-only">Login</label>
        <input type="text" name="login_usuario" id="login" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha_usuario" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-success btn-block" type="submit">Acessar</button>
      </form>
	  <p class="text-center text-success">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
		</div>
    </div> <!-- /container -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	

  
  
  </body>
  <footer>
Página desenvolvida por YANN BRENNO DA COSTA RAMOS - Matricula: 01388232 - Curso: Analise e desenvolvimento de sistemas (EAD) Uninassau - Campina Grande/PB
</footer>
  
</html>
