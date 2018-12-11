<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Peso</title>
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

        $query = mysqli_query($con,"SELECT * FROM questoes Where id_questao = 1 ");
        $fetch = mysqli_fetch_assoc($query);
        $descricao = $fetch['descricao'];
        $opcaoa = $fetch['opcaoa'];
        $opcaob = $fetch['opcaob'];
        $opcaoc = $fetch['opcaoc'];
        $gabarito = $fetch['gabarito'];
    ?>
    

    <div class="col-md-2">
        
    </div>
	<div  class="col-md-10">
    <h2>Texto</h2>
    <p>Alimentar-se é um ato natural e vital ao ser humano.

Alimentação é um processo de ingestão de alimentos capazes de fornecer ao nosso organismo nutrientes para o seu desenvolvimento.

Alimentação saudável é capaz de influenciar positivamente na saúde e qualidade de vida das pessoas. Além de fornecer saúde, boa energia e bem-estar geral, ela também nos ajuda a combater doenças, manter o peso corporal saudável e um bom desenvolvimento físico.

 

Nós somos formados por células e nossas células precisam de nutrientes, que são a matéria prima do organismo e por isso devem ser de boa qualidade.

 

Podemos dividir assim:

 

Macronutrientes: carboidratos, proteínas e lipídios – necessários em maiores quantidades.

 

Micronutrientes: vitaminas e minerais – necessários em menores quantidades.

 

Cada indivíduo necessita de quantidades específicas de macro e micronutrientes para manter suas funções orgânicas, suas atividades diárias e seu corpo em equilíbrio. Isto depende do sexo, da idade, do estado fisiológico e da atividade física. É sempre importante que um nutricionista calcule e adapte estas particularidades a cada pessoa individualmente.

 

As refeições devem ser variadas, oferecendo todos os grupos de nutrientes, pois nenhum alimento sozinho é capaz de proporcionar tudo que o organismo precisa, sendo necessária a variedade sempre.

Também não é porque um alimento é bom que ele deva ser consumido em excesso.

 

Pratique uma boa alimentação

 

- Escolha os alimentos corretamente. Opte mais pelos alimentos que a natureza produz. Evite o excesso de industrializados e principalmente evite os utraprocessados. Descasque mais e desembale menos.

 

- Mastigue bem os alimentos, assim terá melhor digestão, absorção de nutrientes, saciedade e consequentemente controle do metabolismo e peso corporal.

 

- Evite temperos industrializados. Use e abuse dos sabores e aromas especiais de alho, cebola, alho poro, gengibre, açafrão, alecrim, coentro, orégano, manjericão, pimentas de tantos tipos, salsão, salsinha e cebolinha e outros que melhoram o paladar e principalmente o valor nutricional da preparação. Todos têm poder antioxidante e anti-inflamatório tão necessários ao organismo.

 

- Inclua frutas e vegetais no seu dia a dia e os consuma com casca e bagaço quando possível para aproveitar melhor todos os seus elementos. As fibras neles contidas auxiliam no bom funcionamento intestinal, na saciedade e ainda permitem uma elevação de glicemia, dentro da nossa corrente sanguínea, mais lentamente e isso é favorável inclusive para evitar ganho excessivo de peso.

Um prato colorido significa uma boa variedade de alimentos e, portanto, de nutrientes. Com isso a sua saúde agradece.

 

- Opte por carnes magras, sem gordura aparente e preferencialmente cozidas.

 

- Escolha um bom azeite de oliva extravirgem, rico em gorduras boas, com poder antioxidante e anti-inflamatório que promova fortalecimento do sistema imunológico, além de prevenir doenças cardiovasculares, combater o envelhecimento precoce e doenças degenerativas.

 

- Evite o excesso de massas, doces e açúcar.

 

- Hidrate-se. Beba água ao longo do dia.

 

- Evite fazer dietas da moda.

 

- Experimente novos sabores, cozinhe com afeto e coma com prazer e moderação.

 

A nossa saúde depende muito mais do que comemos e do nosso estilo de vida do que somente da nossa herança genética.

 

Hipócrates, o pai da medicina, já dizia: “Faz do teu remédio o teu alimento e do teu alimento o teu remédio”.</p>   
</div>
<div class="col-md-4">
        
    </div>

<a href="questoes_peso/questao_peso1.1.html.php">Questão</a>	
</body>
</html>