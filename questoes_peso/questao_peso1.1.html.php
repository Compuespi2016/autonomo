<!DOCTYPE html>
<html>
<head>
	<title>Peso</title>
</head>
<style>
body {
  background-color: lightblue;
}
</style>
<body>
	<h2>Texto</h2>
	<?php  
        include('../conexao.php');
        header("Content-Type: text/html; charset=ISO-8859-1",true);
        session_start();
        if((!isset($_SESSION['login'])==true)and(!isset($_SESSION['senha'])==true))
        {
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            header('location:login.html');   

        }
        $nome_user = $_SESSION['login'];
        $pontuacao = $_SESSION['pontuacao'];

        $query = mysqli_query($con,"SELECT * FROM questoes Where id_questao = 1 ");
        $fetch = mysqli_fetch_assoc($query);
        $descricao = $fetch['descricao'];
        $opcaoa = $fetch['opcaoa'];
        $opcaob = $fetch['opcaob'];
        $opcaoc = $fetch['opcaoc'];
        $gabarito = $fetch['gabarito'];
        $peso = $fetch['peso'];
    ?>
   
	<p> <?php echo "$descricao";?></p>
	<form  method="POST" action="../atualiza_pontuacao.php">

		<select  name="resposta_repassada">
			<option value="<?php echo "$opcaoa";?>"><?php echo "$opcaoa";?></option>
			<option value="<?php echo "$opcaob";?>"><?php echo "$opcaob";?></option>
			<option value="<?php echo "$opcaoc";?>"><?php echo "$opcaoc";?></option>
		</select>
        
        <input type="hidden" name="resposta_correta" value="<?php echo $gabarito;?>" /> 

        <input type="hidden" name="peso" value="<?php echo $peso;?>" /> 

        <button>Verificar</button>
	</form>
    <p>gabarito:<?php echo "$gabarito";?></p>
	
</body>
</html>