<?php
session_start();
include_once("../conexao.php");
	echo "<b><font color='#080808'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
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
		<title>CRUD - Editar</title>	
		<br> <a href="sair.php">Sair</a><br>
		<center><a href="dashboard.php">Voltar</a></cener>
	</head>
	<body>
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
	</body>
</html>


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