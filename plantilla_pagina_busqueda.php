<?php
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
<link href="images/didacticos_house_icono.ico" type="image/x-icon" rel="shortcut icon" />
    <title>Didacticos House</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Chewy|Didact+Gothic&amp;subset=latin">

    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<?php
include('encabezado.php');
?>




<!--        FACE       
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

-->


<script>
$(document).ready(function(){
 $('#vmenu').hover();
 $('#vmenu').active();
});    
</script>







</head>
<body>

<?php include 'codigo_megusta.php'; ?>


<div id="art-main">
    <div class="art-sheet clearfix">
	
<header class="art-header clearfix">

    <div class="art-shapes">
<h1 class="art-headline" data-left="2.77%">
    <a href="#"></a> <!-- titulo -->
</h1>

<?php include 'botones_contactanos.php'; ?>


            </div>
			<!-- MENU HORIZONTAL  -->
<!--  
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="new-page.html" class="active">Inicio</a></li><li><a href="catalogo.html">Catálogo</a><ul><li><a href="ninos0a2anos.html">Niños de 0 a 2 años</a><ul><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-fina.html">Motricidad Fina</a><ul></ul></li><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa.html">Motricidad Gruesa</a><ul><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa/2.html">2</a></li><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa/3.html">3</a></li></ul></li></ul></li><li><a href="catalogo/new-page-2.html">Niños de 3 a 5 años</a><ul><li><a href="catalogo/new-page-2/motricidad-fina.html">Motricidad Fina</a></li><li><a href="catalogo/new-page-2/motricidad-gruesa.html">Motricidad Gruesa</a></li></ul></li><li><a href="catalogo/educativos.html">Educativos</a><ul><li><a href="catalogo/educativos/new-page-3.html">Matemática</a></li><li><a href="catalogo/educativos/estimulacion-del-lenguaje.html">Estimulación del Lenguaje</a></li><li><a href="catalogo/educativos/expresion-y-dramatizacion.html">Expresión y Dramatización</a></li><li><a href="catalogo/educativos/musica.html">Música</a></li></ul></li><li><a href="catalogo/libros-infantiles.html">Libros infantiles</a></li><li><a href="catalogo/accesorios-para-bebes.html">Accesorios para Bebes</a></li><li><a href="catalogo/audiovisuales.html">Audiovisuales</a></li><li><a href="catalogo/juegos-de-mesa.html">Juegos de Mesa</a></li><li><a href="catalogo/rompecabezas-y-juegos-de-encaje.html">Rompecabezas y Juegos de Encaje</a></li><li><a href="catalogo/expresion-musical.html">Expresión Musical</a></li><li><a href="catalogo/para-educadores.html">Para Educadores</a></li><li><a href="catalogo/pagina-nueva.html">Página Nueva</a></li></ul></li><li><a href="tiendas.html">Tiendas</a></li><li><a href="conozcanos.html">Conózcanos</a></li><li><a href="responsabilidad-social.html">Responsabilidad Social</a></li></ul> 
    </nav>
-->
<?php
include('menu_horizontal.php');
?>			
</header>


<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
		<!--
            <h3 class="t">Catálogo</h3>
			-->
        </div>
        <div class="art-vmenublockcontent">
		<!--MENU VERTICAL -->
		<!--
<ul class="art-vmenu"><li><a href=""><h3 class="t">Catálogo</h3></a><ul><li><a href="ninos0a2anos.html">Niños de 0 a 2 años</a><ul><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-fina.html">Motricidad Fina</a><ul></ul></li><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa.html">Motricidad Gruesa</a><ul></ul></li></ul></li><li><a href="catalogo/new-page-2.html">Niños de 3 a 5 años</a><ul><li><a href="catalogo/new-page-2/motricidad-fina.html">Motricidad Fina</a></li><li><a href="catalogo/new-page-2/motricidad-gruesa.html">Motricidad Gruesa</a></li></ul></li><li><a href="catalogo/educativos.html">Educativos</a><ul><li><a href="catalogo/educativos/new-page-3.html">Matemática</a></li><li><a href="catalogo/educativos/estimulacion-del-lenguaje.html">Estimulación del Lenguaje</a></li><li><a href="catalogo/educativos/expresion-y-dramatizacion.html">Expresión y Dramatización</a></li><li><a href="catalogo/educativos/musica.html">Música</a></li></ul></li><li><a href="catalogo/libros-infantiles.html">Libros infantiles</a></li><li><a href="catalogo/accesorios-para-bebes.html">Accesorios para Bebes</a></li><li><a href="catalogo/audiovisuales.html">Audiovisuales</a></li><li><a href="catalogo/juegos-de-mesa.html">Juegos de Mesa</a></li><li><a href="catalogo/rompecabezas-y-juegos-de-encaje.html">Rompecabezas y Juegos de Encaje</a></li><li><a href="catalogo/expresion-musical.html">Expresión Musical</a></li><li><a href="catalogo/para-educadores.html">Para Educadores</a></li><li><a href="catalogo/pagina-nueva.html">Página Nueva</a></li></ul></li></ul>
            -->   
			<!--
<ul class="art-vmenu"><li><a href=""><h3 class="art-vmenublockheader">Catálogo</h3></a><ul><li><a href="ninos0a2anos.html">Niños de 0 a 2 años</a><ul><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-fina.html">Motricidad Fina</a><ul></ul></li><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa.html">Motricidad Gruesa</a><ul></ul></li></ul></li><li><a href="catalogo/new-page-2.html">Niños de 3 a 5 años</a><ul><li><a href="catalogo/new-page-2/motricidad-fina.html">Motricidad Fina</a></li><li><a href="catalogo/new-page-2/motricidad-gruesa.html">Motricidad Gruesa</a></li></ul></li><li><a href="catalogo/educativos.html">Educativos</a><ul><li><a href="catalogo/educativos/new-page-3.html">Matemática</a></li><li><a href="catalogo/educativos/estimulacion-del-lenguaje.html">Estimulación del Lenguaje</a></li><li><a href="catalogo/educativos/expresion-y-dramatizacion.html">Expresión y Dramatización</a></li><li><a href="catalogo/educativos/musica.html">Música</a></li></ul></li><li><a href="catalogo/libros-infantiles.html">Libros infantiles</a></li><li><a href="catalogo/accesorios-para-bebes.html">Accesorios para Bebes</a></li><li><a href="catalogo/audiovisuales.html">Audiovisuales</a></li><li><a href="catalogo/juegos-de-mesa.html">Juegos de Mesa</a></li><li><a href="catalogo/rompecabezas-y-juegos-de-encaje.html">Rompecabezas y Juegos de Encaje</a></li><li><a href="catalogo/expresion-musical.html">Expresión Musical</a></li><li><a href="catalogo/para-educadores.html">Para Educadores</a></li><li><a href="catalogo/pagina-nueva.html">Página Nueva</a></li></ul></li></ul>
			-->
			
<?php
include('menu_vertical.php');
?>			
			
			

			
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            
        </div>
        <div class="art-blockcontent"><p> </p>


<p>                                  </p></div>
</div></div>
                        <div class="art-layout-cell art-content clearfix">
						<article class="art-post art-article">
<div id="foco">
</div>
                                <div class="art-postmetadataheader">
                                        <h1 class="art-postheader"><?php echo $titulo ?></h1>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
<!--			
				<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p></p>
    </div>
    </div>
</div>
-->

<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100% text-align: left" >
	
	<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
	<!-- $$$$$$$$$$$$$$$$$   FRASE DE LA CATEGORIA    $$$$$$$$$$$$$$$$$$$$$$$ -->
	
	        <p style="text-align: left;"><span style="color: rgb(17, 20, 23); font-size: 14px;"><?php echo $frase ?></span></p>
			
			
			
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 100%" >
<!--
	<span style="font-weight: bold;"><a href="">&lt;&lt;Anterior</a></span>
		<span style="color: rgb(12, 157, 14); font-weight: bold;">&nbsp;
		<span style="text-decoration: underline; color: #FA6114;">1</span>&nbsp;&nbsp;&nbsp;
		<a href="ninos-0-a-2-motricidad-fina-2.php">2</a> &nbsp;&nbsp;&nbsp;
		<a href="ninos-0-a-2-motricidad-fina-3.php">3</a> &nbsp;&nbsp;&nbsp;
		<a href="ninos-0-a-2-motricidad-fina-2.php">Siguiente&gt;&gt;</a></span>
-->
<?php
include "$sig";
?>

	<hr>	
    </div>
    </div>
</div>
</div>
<br><br>
<!--
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-6" style="width: 100%" >
        <p style="text-align: center;"><span style="font-weight: bold; font-family: 'Arial Black';">PRODUCTOS DESTACADOS</span></p>
    </div>
    </div>
</div>
</div>
-->

<?php
$num_productos=$var_encontrados;

while($num_productos>0)
{
	$i=1;   //para recorrer los campos de los productos encontrados
echo'
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;"> '.$producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;  '.$precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'.$direccion_enlace_[$i].'" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br><br></p>
    </div>';
	$num_productos--;
	$i++;
	if($num_productos==0)
	{ 
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}else{
		echo'
		</div>
		</div>
		</div>	
		';
	}
    
echo'
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
     <div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;"> '.$producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;  '.$precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'.$direccion_enlace_[$i].'" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br><br></p>
    </div>';
	$num_productos--;
	$i++;
	if($num_productos==0)
	{ 
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}else{
		echo'
		</div>
		</div>
		</div>	
		';
	}
    

echo'
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;"> '.$producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;  '.$precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'.$direccion_enlace_[$i].'" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br><br></p>
    </div>';
	$num_productos--;
	$i++;
	if($num_productos==0)
	{ 
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}else{
		echo'
		</div>
		</div>
		</div>	
		';
	}
	
 echo'   
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;"> '.$producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;  '.$precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'.$direccion_enlace_[$i].'" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br><br></p>
    </div>';
	$num_productos--;
	$i++;
	if($num_productos==0)
	{ 
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos--;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}
	echo'
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover="this.style.background=\'#FFB635\'" onmouseout="this.style.background=\'white\'">
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="'. $direccion_img_[$i].'" ></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">'. $producto_[$i].' </span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;'.  $precio_[$i].' </span></p>
        <p style="text-align: center;">&nbsp;<a href="'. $direccion_enlace_[$i].' " class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	';
	
	$num_productos=0;
	$i++;
	if($num_productos==0)
	{
		echo'
		</div>
		</div>
		</div>	
		';
			break;
	}else{
		echo'
		</div>
		</div>
		</div>	
		';
	}


}

?>



<!-- ESPACIO-->
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 100%" >
        <p><br><br></p>
    </div>
    </div>
</div>
</div>

<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 100%" >
<!--
	<span style="font-weight: bold;"><a href="">&lt;&lt;Anterior</a></span>
		<span style="color: rgb(12, 157, 14); font-weight: bold;">&nbsp;
		<span style="text-decoration: underline; color: #FA6114;">1</span>&nbsp;&nbsp;&nbsp;
		<a href="ninos-0-a-2-motricidad-fina-2.php">2</a> &nbsp;&nbsp;&nbsp;
		<a href="ninos-0-a-2-motricidad-fina-3.php">3</a> &nbsp;&nbsp;&nbsp;
		<a href="ninos-0-a-2-motricidad-fina-2.php">Siguiente&gt;&gt;</a></span>
-->
<?php
include "$sig";
?>

	<hr>	
    </div>
    </div>
</div>
</div>





<!--     FACE  
<CENTER>
<div  class="fb-page" data-href="https://www.facebook.com/Didacticos-House-287066941443867/" data-tabs="timeline" data-width="500" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Didacticos-House-287066941443867/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Didacticos-House-287066941443867/">Didacticos House</a></blockquote></div>
</CENTER>
-->

<!-- ESPACIO   -->
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100%" >
        <p><br><br>
    </div>
    </div>
</div>
</div>

</div>
</article></div>
                    </div>
                </div>
            </div>

<?php
include('footer.php');
?>			
			
			
    </div>
   
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5489206175407e81"></script> 
</body></html>