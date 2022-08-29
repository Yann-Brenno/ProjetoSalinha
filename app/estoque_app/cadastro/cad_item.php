<!DOCTYPE html>
<?php
session_start();
	echo "<b><font color='#FFFFFF'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
if(!empty($_SESSION['usuarioNiveisAcessoId'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: /acesso_negado.php");
}
?>
		<br> <a href="sair.php">Sair</a><br>
		<input id="botao_voltar" type="button" value="Voltar" onclick="history.go(-1)">
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cadastrar itens</title>

</head>
<body>
<center><h2> Preencha os dados abaixo para cadastrar um novo item </h2></center>
<div>
    <div class="container">
	<div id="container-cad">
<center>
<form action="proc_cad_item.php" method="post">
    <p>
        <label for="cod_rm">Codigo RM:</label>
        <input id="1" type="text" name="cod_rm" id="cod_rm">
    </p>
    <p>
        <label id="label-nome" for="nome_item">Nome do item:</label>
        <input id="2" type="string" name="nome_item" id="nome_item">
    </p>
    <p>
        <label id="label-qtd" for="qtd_item">Quantidade:</label>
        <input id="3" type="number" name="qtd_item" id="qtd_item">
    </p>
	    <p>
        <label id="label-pat"for="pat_item">Patrimônio:</label>
        <input id="4" type="text" name="pat_item" id="pat_item">
    </p>


    <input id="botao"class="button1" type="submit" value="Cadastrar">
</form>
	</div>
    </div> 
</body>





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

#container-cad {
	background-color: #FAA537;
	opacity: 1;
	width: 400px;
	margin-left: auto;
	margin-right: auto;
	padding: 20px 30px;
	margin-top: 10vh;
	border-radius: 10px;
	text-align: center;
-webkit-box-shadow: 4px -4px 15px 0px #FF1F1F, 12px -11px 7px 0px #FF9376, 20px -5px 7px 0px #FFE264, 20px 6px 7px 0px #F6FF33, 13px 12px 17px 0px #FF9527, 2px 17px 17px 0px #FF0000, -9px 21px 18px 0px #FFF212, -9px 6px 11px 0px #FF0808, -11px -9px 11px 0px #FFFA17, -11px -9px 11px 0px #FFFA17, 50px 50px 50px 50px rgba(0,0,0,0); 
box-shadow: 4px -4px 15px 0px #FF1F1F, 12px -11px 7px 0px #FF9376, 20px -5px 7px 0px #FFE264, 20px 6px 7px 0px #F6FF33, 13px 12px 17px 0px #FF9527, 2px 17px 17px 0px #FF0000, -9px 21px 18px 0px #FFF212, -9px 6px 11px 0px #FF0808, -11px -9px 11px 0px #FFFA17, -11px -9px 11px 0px #FFFA17, 50px 50px 50px 50px rgba(0,0,0,0);

}

body {
  background-image: url('../../../imagens/cad.jpg');
  background-color: #3FB3B3;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */

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
          <centeR><img src="../../../imagens/load.gif"></center>
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


</html>


<script>


//INPUTSSSSSS
//desabilita o botão no início
document.getElementById("2").hidden = true;

//cria um event listener que escuta mudanças no input
document.getElementById("1").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("1").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("2").hidden = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("2").hidden = true;
    }
});

//desabilita o botão no início
document.getElementById("3").hidden = true;

//cria um event listener que escuta mudanças no input
document.getElementById("2").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("2").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("3").hidden = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("3").hidden = true;
    }
});

//desabilita o botão no início
document.getElementById("4").hidden = true;

//cria um event listener que escuta mudanças no input
document.getElementById("3").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("3").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("4").hidden = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("4").hidden = true;
    }
});








//LABELSSSSSSSSSSSS
//desabilita o botão no início
document.getElementById("label-nome").hidden = true;

//cria um event listener que escuta mudanças no input
document.getElementById("1").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("1").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("label-nome").hidden = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("label-nome").hidden = true;
    }
});


//desabilita o botão no início
document.getElementById("label-qtd").hidden = true;

//cria um event listener que escuta mudanças no input
document.getElementById("2").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("2").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("label-qtd").hidden = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("label-qtd").hidden = true;
    }
});


//desabilita o botão no início
document.getElementById("label-pat").hidden = true;

//cria um event listener que escuta mudanças no input
document.getElementById("3").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("3").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("label-pat").hidden = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("label-pat").hidden = true;
    }
});

//desabilita o botão no início
document.getElementById("botao").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("4").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("4").value;

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




	