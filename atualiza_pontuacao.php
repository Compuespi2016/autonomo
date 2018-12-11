<?php  
    include('conexao.php');

    $resposta_correta = $_POST['resposta_correta'];
    $resposta_repassada = $_POST['resposta_repassada'];
    $peso_repassado = $_POST['peso'];

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

    echo $resposta_correta;

    if($resposta_correta == $resposta_repassada){

    	$pontuacao = $pontuacao + (10 * $peso_repassado);

        $_SESSION['pontuacao'] = $pontuacao;

    	echo"<script language='javascript' type='text/javascript'>alert('deu certo,$pontuacao');window.location.href='index.html.php'</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('não deu certo');window.location.href='index.html.php'</script>";
    }


?>