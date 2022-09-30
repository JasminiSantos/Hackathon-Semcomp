<?php 

if(isset($_POST["produto"]))
{
  $sql = "SELECT * from produtos where 1=1";

  if(isset($_POST["produto"]))
    if($_POST["produto"]!= ""){
      $produto = $_POST["produto"];
      $sql = $sql." and prod_xProd like '%".$produto."%'";
    }

  if(isset($_POST["dataIni"]) && isset($_POST["dataFim"]))
    if($_POST["dataIni"]!= "" && $_POST["dataFim"]){
      $dataIni = $_POST["dataIni"];
      $dataFim = $_POST["dataFim"];
      $sql = $sql." and dhEmi between ".date($dataIni)." and ".date($dataFim);
    }

  if(isset($_POST["cnpj_id"]))
    if($_POST["cnpj_id"]!= ""){
      $cnpj_id = $_POST["cnpj_id"];
      $sql = $sql." and cnpj_id = ".$cnpj_id;
    }

 $sql = $sql." order by qtd_vendida desc LIMIT 10";

 $strcon = mysqli_connect('localhost','root','', 'semcomp') or die ('Erro BD');
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
    
}
?>

<html><head><title>Arquivei - Consulta</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<link rel="icon" href="./img/icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   $("#dados").attr("src", "../img/dados.jpg");
});
</script>


</head>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="#" class="w3-bar-item w3-button w3-blue w3-mobile"><img id="logo" src="./img/logo.svg"></a>
  <a href="../index.php" class="w3-bar-item w3-button w3-mobile">Inicio</a>
  <a href="../index.php/#form1" class="w3-bar-item w3-button w3-mobile">Pesquisar</a>
  <a href="#rodape" class="w3-bar-item w3-button w3-mobile">Rodapé</a>
  <a href="../sobre.html" class="w3-bar-item w3-button w3-mobile">Sobre</a>
  <a href="index.php" class="w3-bar-item w3-button w3-right w3-green w3-mobile">Voltar</a>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="../img/dados.jpg" alt="" style="min-width:1000px; filter: blur(3px);" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col l12 m8">
    <div class="w3-container w3-blue">
      <h2><i class="fa fa-database" style="font-size:36px; padding-right: 15px;"></i>Resultado da Consulta</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <!-- form -->
      <?php
if(isset($_POST["produto"]) && isset($resultado))
{
  echo "
  <div id='tabela' class='w3-content w3-container w3-white w3-padding-32' style='max-width:1532px;'>
  <table id='customers'>
    <tr>
      <th>Empresa (Cnpj_Id)</th>
      <th>Data da Emissão</th>
      <th>Descrição</th>
      <th>Quantidade Vendida</th>
    </tr>
    ";
    while ($registro = mysqli_fetch_array($resultado))
  {
      echo "<tr>";
      echo "<td>".$registro['cnpj_id']."</td>";
      echo "<td>".date("D/M/Y", strtotime($registro['dhEmi']))."</td>";
      echo "<td>".$registro['prod_xProd']."</td>";
      echo "<td>".$registro['qtd_vendida']."</td>";
      echo "</tr>";
  }

  mysqli_close($strcon);
  echo "
  </table>
  </div>
";
}
?>
    </div>
  </div>
</header>
    
<!-- Page content -->


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
<footer class="w3-padding-32 w3-blue w3-center w3-margin-top">
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