<html><head><title>Arquivei</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.5.1.min.js"></script>
<link rel="icon" href="./img/icon.png">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #d1ddf0;}

#customers tr:hover {background-color: #80b5ed;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#307efc;
  color: white;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $("#logo").attr("src", "../img/logo.svg");
});
</script>
</head>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="#" class="w3-bar-item w3-button w3-blue w3-mobile"><img src="./img/logo.svg"></a>
  <a href="./index.php" class="w3-bar-item w3-button w3-mobile">Inicio</a>
  <a href="./index.php" class="w3-bar-item w3-button w3-mobile">Pesquisar</a>
  <a href="#rodape" class="w3-bar-item w3-button w3-mobile">Rodapé</a>
  <a href="index.php" class="w3-bar-item w3-button w3-right w3-green w3-mobile">Voltar</a>
  <a href="./sobre.html" class="w3-bar-item w3-button w3-mobile">Sobre</a>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="./img/dados.jpg" alt="" style="min-width:1000px; filter: blur(3px);" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-blue">
      <h2><i class="fa fa-search" style="font-size:36px; padding-right: 15px;"></i>Consulta de Produtos</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <!-- form -->
      <form action="consulta.php/#tabela" id="form1" method="POST">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Data inicial</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM AAAA" name="dataIni" >
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Data final</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM AAAA" name="dataFim" >
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-building"></i> Estado</label>
            <input class="w3-input w3-border" type="text" name="estado" placeholder="Ex: São Paulo" >
          </div>
          <div class="w3-half">
            <label><i class="fa fa-building"></i> Cidade</label>
          <input class="w3-input w3-border" type="text" name="cidade" placeholder="Ex: São Paulo">
          </div>
          
        </div>
         <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-briefcase"></i> Empresa</label>
            <input class="w3-input w3-border" type="text" name="cnpj_id" placeholder="Cnpj_Id">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-shopping-bag"></i> Produto</label>
          <input class="w3-input w3-border" type="text" name="produto" placeholder="Ex: Arroz" >
          </div>
        </div>


        <button class="w3-button w3-blue" type="submit"><i class="fa fa-search w3-margin-right"></i> Pesquisar</button>
      </form>
    </div>
  </div>
</header>

<div class="w3-content" style="max-width:1532px;">   
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
      </div>
    </div>
  </div>
  
  <!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-blue w3-center w3-margin-top" id="rodape">
  <h5>Redes Sociais</h5>
  <div class="w3-xlarge w3-padding-16">
    <a href="https://www.facebook.com/arquivei " target="_blank"> <i class="fa fa-facebook-official w3-hover-opacity"> </i></a>
    <a href="https://www.youtube.com/channel/UC6mrvVc7b5mA2SyYPEVg8cw" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a> 
    <a href="https://twitter.com/ArquiveiOficial" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a> 
    <a href="https://www.linkedin.com/company/arquivei/" target="_blank"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
   <a href="https://www.instagram.com/arquiveioficial/" target="_blank"> <i class="fa fa-instagram w3-hover-opacity"></i> </a>      
  </div>
  <p> © 2021 ARQUIVEI. CONSTRUÍDO COM 💙 EM SÃO CARLOS, A CAPITAL DA TECNOLOGIA
 <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green"></a></p>
</footer>

<script>
  function mascaraData( campo, e )
{
	var kC = (document.all) ? event.keyCode : e.keyCode;
	var data = campo.value;
	
	if( kC!=8 && kC!=46 )
	{
		if( data.length==2 )
		{
			campo.value = data += '/';
		}
		else if( data.length==5 )
		{
			campo.value = data += '/';
		}
		else
			campo.value = data;
	}

}
</script>



</body></html>