<?php 
  session_start();
// session_start inicia a sessão
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['username'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
include('conexao.php');
 
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = mysqli_query($con,"SELECT * FROM usuarios WHERE nome_user = '$login' and senha = '$senha' ");

	if(mysqli_num_rows($result) > 0 )
	{
		while($line = mysqli_fetch_array($result) ){
		
			$id = $line['id'];
			$pont = $line['pontuacao'];
			$senha = $line['senha'];

		}

		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		
		$_SESSION['pontuacao'] = $pont;
		$_SESSION['id'] = $id;

		header('location:index.html.php');
	}else{
	    unset ($_SESSION['login']);
	    unset ($_SESSION['senha']);
	    header('location:login.html');   
    }
    
?>