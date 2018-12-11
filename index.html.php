<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automato</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" media="Screen and (max-width: 700px)" href="css/mobile.css">
</head>
<style>
body {
  background-color: lightblue;
}
</style>
<body>
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
    <header id="header" class="page-home">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-2" align="left">
                    <nav>
                        <tr>                            
                            <h4><a href="index.html.php" class="">Usuario:<?php echo " $nome_user";?></a></h4>
                            <h4><a href="index.html.php" class="">Pontuacao:<?php echo " $pontuacao";?></a></h4>
                        </tr>
                    </nav>
            </div>
             <div class="col-md-1" align="left">
                    
            </div>
            <div class="col-md-1" align="left">
                    <nav>
                        <tr>                            
                            
                            <h4 align="left"><a href="login.html">Sair</a></h4>
                        </tr>
                    </nav>
            </div>
        </div>    
    </header>
<main>
    
    <div align="center"> 
            <section id="middle" class="section section-center" >
        <h2>Escolha o Modelo de Avalicao</h2>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <nav>
                        <tr>
                            <td>
                                <button class="btn">
                                    <h3><a href="">Sequencial</a></h3>
                                </button>
                            </td>
                            <td>
                                <button class="btn">
                                    <h3><a href="peso.html.php">Peso</a></h3>
                                </button>
                            </td>
                            <td>
                                <button class="btn">
                                    <h3><a href="">Aleatorio</a></h3>
                                </button>
                            </td>
                        </tr>
                    </nav>
                </div>
            </div>  
        </div>         
    </section>      
    </div>
    <header id="header" class="page-home">
        <div class="container" >
            <div class="row">   
                <div class="col col-8 col-mobile-6">
                    <nav>
                        <tr>
                            <td>
                                <h3><p>  </p></h3>
                                <h3><p>  </p></h3>
                            </td> 
                            <td>
                                <h3><p>  </p></h3>
                                <h3><p>  </p></h3>
                            </td>                           
                        </tr>
                    </nav>
                </div>
            </div>
        </div>    
    </header>
</main>
</body>
</html>