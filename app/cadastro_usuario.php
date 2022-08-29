<?php
session_start();
include_once("../conexao.php");
	echo "<b><font color='#F94609'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
if(!empty($_SESSION['usuarioNiveisAcessoId'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: /acesso_negado.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Editar</title>	
		<br> <a href="sair.php">Sair</a><br>
		<center><a href="dashboard.php">Voltar</a></cener>
		  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Yann">
    <link rel="icon" href="imagens/favicon.ico">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>
	</head>
	<body>
	<div id="container">
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cadastro_usuario.php">
			<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuarioId']; ?>">
			
			
			<input type="hidden" name="login_usuario" placeholder="Digite o nome completo" value="<?php echo $_SESSION['usuarioNome']; ?>"><br><br>
			
			<label>NOVA SENHA: </label>
			<input id="input" type="password" name="senha_usuario" placeholder="Digite a nova senha" value=""><br><br>
			
			<input id="botao" type="submit" value="Editar">
		</form>
		</div>
	</body>
	<!-- ZONA DE PERIGO EXPERIMENTAL  -->

<center>
<!-- ICONE OU GIF QUE IRÁ APARECER NA PÁGINA-->
<div id="preloader">
    <div class="inner">
          <centeR><img src="../../imagens/load.gif"></center>
    </div>
</div>
<!-- ICONE OU GIF QUE IRÁ APARECER NA PÁGINA-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- SCRIPT QUE PUXA O LOAD -->
<script>
  //<![CDATA[
  $(window).on('load', function () {
    $('#preloader .inner').fadeOut();
    $('#preloader').delay(100).fadeOut('slow'); 
    $('html').delay(100).css({'overflow': 'visible'});
  })
  //]]>
  
  </script>
<!-- SCRIPT QUE PUXA O LOAD -->
</center>


<!-- ZONA DE PERIGO EXPERIMENTAL  -->



<script>
//desabilita o botão no início
document.getElementById("botao").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("input").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("input").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("botao").disabled = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("botao").disabled = true;
    }
});
</script>


<style>
 body{
   background-image: url('../imagens/resetbg.jpg');
 }
 
 
 #container {
	background-color: #27C866;
	opacity: 0.95;
	width: 1200px;
	margin-left: auto;
	margin-right: auto;
	padding: 100px 30px;
	margin-top: 15vh;
	border-radius: 10px;
	text-align: center;
    -webkit-box-shadow: 12px 12px 4px 0px rgba(64, 69, 57, 0.75);
    -moz-box-shadow:    12px 12px 4px 0px rgba(64, 69, 57, 0.75);
    box-shadow:         12px 12px 4px 0px rgba(64, 69, 57, 0.75);

}
h1 {
	color: #A41053;
	font-family: Impact;
	text-align: center;
	text-shadow: 0 0 0.2em #87F, 0 0 0.2em #87F,0 0 0.2em #87F
}

h1:hover {
	color: #000000;
}

#preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    /*background-color:#70dbdb;  cor do background que vai ocupar o body */
	background-color: #e7dfdd;
    z-index:999; /* z-index para jogar para frente e sobrepor tudo */
}
#preloader .inner {
    position: absolute;
    top: 50%; /* centralizar a parte interna do preload (onde fica a animação)*/
    left: 50%;
    transform: translate(-50%, -50%);  
}
.bolas > div {
  display: inline-block;
  background-color: #fff;
  width: 25px;
  height: 25px;
  border-radius: 100%;
  margin: 3px;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: animarBola;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
   
}
.bolas > div:nth-child(1) {
    animation-duration:0.75s ;
    animation-delay: 0;
}
.bolas > div:nth-child(2) {
    animation-duration: 0.75s ;
    animation-delay: 0.12s;
}
.bolas > div:nth-child(3) {
    animation-duration: 0.75s  ;
    animation-delay: 0.24s;
}
 
@keyframes animarBola {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  16% {
    -webkit-transform: scale(0.1);
    transform: scale(0.1);
    opacity: 0.7;
  }
  33% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1; 
  } 
}
 
</style>

</html>