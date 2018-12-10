<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Escolha</title>
    <link rel="stylesheet" href="css/pages/home.css">
    <link rel="stylesheet" media="Screen and (max-width: 700px)" href="css/mobile.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

</head>
<body>
    <header id="header" class="page-home">
        <div class="container">
            <div class="row">
                <div class="col col-4 col-mobile-6">
                </div>
                <?php  
			    include('conexao.php');
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

			    ?>
                <div class="col col-8 col-mobile-6">
                    <nav>
                        <ul>
                            <li><a href="index.html.php" class="">Usuario:<?php echo " $nome_user";?></a></li>
                            <li><a href="login.html">Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </div>    
</header>

<main>
    <section id="middle" class="section section-center">

        <h2>Escolha uma forma de Avaliacao</h2>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <nav>
                        <tr>
                            <td><button class="btn"><a href="">Sequencial</a></button></td>
                            <td><button class="btn"><a href="">Peso</a></button></td>
                            <td><button class="btn"><a href="">Aleatorio</a></button></td>
                        </tr>
                    </nav>
                </div>
            </div>  
        </div>         
    </section>
</main>



<footer id="header" class="page-home">

    <div class="container">
  
    </div>

</footer>


</body>
</html>