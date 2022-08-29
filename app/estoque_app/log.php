<?php
	session_start();
echo "<b><font color='#B4ADAB'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
	include_once("../../conexao.php");
	if(!empty($_SESSION['usuarioNiveisAcessoId'] == '3' OR $_SESSION['usuarioNiveisAcessoId'] == '6' AND $_SESSION['id_usuario'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: ../acesso_negado.php");
}
?>
<br> <a href="../sair.php">Sair</a>
<br>
<center><a href="cadastro/cad_item.php">Cadastrar novo item</a></center<br>
<center><a href="cadastro/del_item.php">Retirar item</a></center
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> </script>
  </head>
  
  <body>
  <div class="container">
	<div id="container-est">
  <div class="container">
  <table id="example" class="table">
  <thead>
    <tr>
	 <th scope="col">#ID</th>
      <th scope="col">Código RM</th>
      <th scope="col">Nome do Item</th>
      <th scope="col">Quantidade</th>
	  <th scope="col">Patrimônio</th>
	    <th scope="col">Comentario</th>
		  <th scope="col">Alteração feita por</th>
    </tr>
  </thead>
  <tbody>
   <?php 
  $result_cliente = "SELECT * FROM log";
  $resultado_cliente = mysqli_query($conn, $result_cliente);
  while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
  ?>
    <tr>
<th scope="row"><?php echo $row_cliente['ID']; ?></th>
<th scope="row"><?php echo $row_cliente['cod_rm']; ?></th>
<th scope="row"><?php echo $row_cliente['nome_item']; ?></th>
<th scope="row"><?php echo $row_cliente['qtd_item']; ?></th>
<th scope="row"><?php echo $row_cliente['pat_item']; ?></th>
<th scope="row"><?php echo $row_cliente['comentario']; ?></th>
<th scope="row"><?php echo $row_cliente['usuario']; ?></th>
    </tr><?php }?>
  </tbody>
</table>

           <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> </script>
           <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
           <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

           <script>
               $(document).ready(function() {
    $('#example').DataTable();
} );
               </script>

</div>
</div>
<br>
<br>
	<center> <a href="estoque.php"> VOLTAR </a></center>
  </body>
  
  
   <!-- CSS -->
   <style>
   
   h2{
	font-family: 'Brush Script MT', cursive;
}
input{
	font-family: 'Brush Script MT', cursive;
}
label{
	font-family: 'Brush Script MT', cursive;
}
h2:hover {
	color: #FF0000;
}

#container-est {
	background-color: #999393;
	opacity: 0.9;
	width: 1000px;
	margin-left: auto;
	margin-right: auto;
	padding: 20px 30px;
	margin-top: 10vh;
	border-radius: 10px;
	text-align: center;
-webkit-box-shadow: 5px 5px 0px 0px #999393, 10px 10px 0px 0px #999393, 15px 15px 0px 0px #999393, 20px 20px 0px 0px #CAE6FF, 25px 25px 0px 0px #999393, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 0px 0px #999393, 10px 10px 0px 0px #999393, 15px 15px 0px 0px #999393, 20px 20px 0px 0px #999393, 25px 25px 0px 0px #999393, 5px 5px 15px 5px rgba(0,0,0,0);
}

body {
  background-image: url('../../imagens/log.jpg');
  background-color: #3FB3B3;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
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
<!-- ZONA DE PERIGO EXPERIMENTAL  -->

<center>
<!-- ICONE OU GIF QUE IRÁ APARECER NA PÁGINA-->
<div id="preloader">
    <div class="inner">
          <centeR><img src="../../imagens/load.gif"></center>
    </div>
</div>
<!-- ICONE OU GIF QUE IRÁ APARECER NA PÁGINA-->
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
</html>
