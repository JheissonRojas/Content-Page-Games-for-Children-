<?php

//$desc2="<? \$write_cont2={$write_cont2}; ? >";

$include='siguientes_ninos-3-a-5-motricidad-fina.php';
$siguiente='siguiente_2_2.php';

// Si hay paginas siguientes  hay variabe include y variable siguiente
$var_include="include '{$include}';";
$var_sig="\$sig='{$siguiente}';";

// Si no hay siguientes no hay variabe include  ni variable siguiente
//$var_include="";
//$var_sig="";

$carpeta_categoria_producto="ninos-3-a-5-motricidad-fina";		
$pagina_16productos="ninos-3-a-5-motricidad-fina-2.php";

$titulo_categoria=strtoupper('ninos 3 a 5 motricidad fina'); 
$frase ='
estimula la coordinacion de la viso-motora fina junto con el reconocimiento de colores y formas.
';

//$carpeta_origen="catalogo/carpeta_plantilla";
// ###################################################################################
//$carpeta_destino="catalogo/ninos-3-a-5-motricidad-fina";

		
		$carpetaDestino_imagen_producto="catalogo/".$carpeta_categoria_producto."/imagenes/";
		$carpetaDestino_pagina_producto="catalogo/".$carpeta_categoria_producto."/";
		$var_dir_img="\$dir_img='catalogo/{$carpeta_categoria_producto}/imagenes';";
		$var_dir_pag="\$dir_pag='catalogo/{$carpeta_categoria_producto}';";


$titulo="";
$descripcion="";
$precio="disponible";
$edad="";
$caracteristicas="";




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







<script>
$(document).ready(function(){
 $('#vmenu').hover();
 $('#vmenu').active();
});    
</script>







</head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
	
<header class="art-header clearfix">

    <div class="art-shapes">
<h1 class="art-headline" data-left="2.77%">
    <a href="#">Didácticos House</a>
</h1>


            </div>
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
			
<?php
include('menu_vertical.php');
?>			
			
			

			
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Búsqueda</h3>
        </div>
        <div class="art-blockcontent"><p> </p>
<form class="art-search" name="Search" action="#" id="Search"><input type="text"><input class="art-search-button" type="submit" name="search" value=""></form>

<p>                                  </p></div>
</div></div>
                        <div class="art-layout-cell art-content clearfix">
						<article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                   <!--     <h1 class="art-postheader">< ?php echo $titulo ?></h1>  -->
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
	
	      <!--  <p style="text-align: left;"><span style="color: rgb(17, 20, 23); font-size: 14px;">< ?php echo $frase ?></span></p>
			-->
			
			
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 100%" >

<?php
/*
include "$sig";
*/
?>

	<hr>	
    </div>
    </div>
</div>
</div>
<br><br>



<?
/*
$carpetaDestino_pagina_imagen="imagenes/";
$carpetaDestino_pagina_muestra="";
$nombre_archivo="";
$titulo="";
$descripcion="";
$precio="disponible";
$edad="";
$caracteristicas="";
*/
/*
 $file_name_tit ="{$directory}tit_{$arch}.php"; 
    $file_name_desc ="{$directory}desc_{$arch}.php"; 
    $file_name_vid ="{$directory}vid_{$arch}.php"; 
    $file_name_des_post ="{$directory}des_post_{$arch}.php"; 

$tit='tit_'.$arch;
$desc='desc_'.$arch;
$vid='vid_'.$arch;
$des_post='des_post_'.$arch;
*/


/*
    if($archivo = fopen($file_name_tit, "w")&& $archivo2 = fopen($file_name_tit, "w"))
    {

       if(fwrite($archivo,"{$$tit}"))
                    echo "Se ha escrito en $directory  del archivo  $file_name_tit del contenido $cont_X ejecutado correctamente <br>";
                else
                    echo "  $file_name_tit    del    $directory   del   $cont_X  Problema al escribir el archivo<br> ";
        }
         fclose($archivo);
    }
    else
   { 
    echo "  $file_name_tit    del    $directory   del   $cont_X   problema al crear el archivo <br>";
    }

    if($archivo = fopen($file_name_desc, "w"))
    {
        if(fwrite($archivo, "{$$desc}"))
        {
            echo "Se ha escrito en $directory  el archivo  $file_name_desc del $cont_X ejecutado correctamente<br>";
        }
        else
        {
            echo " $file_name_desc   del    $directory   del   $cont_X  problema al escribir en el archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo " $file_name_desc  del    $directory   del   $cont_X  problema al crear el archivo<br>";
    }





$write_cont2+=1;

$desc2="<? \$write_cont2={$write_cont2}; ?>";
$archivo = fopen("z_write_cont2.php", "w");
fwrite($archivo,"{$desc2}");
fclose($archivo);


$directory='_CONT_CURIO/'.$cont_cur.'/';
write($directory, $cont_cur);

// to create the achive for change actual article and change the actual image to last index
$directory2='_CONT_KNOWING/'.$cont_kno.'/Num_article.php';
 $archivo = fopen($directory2, "w");
 fwrite($archivo,'0');
 fclose($archivo);


*/
 
 ?>
<?php
//include "copia.php";


//function cambiar_guion_x_espacio($var)

function verifica_cadena($cadena)
{
	$long_cadena=strlen($cadena);
	if($long_cadena<21)
	{
		$cadena=$cadena.'<br>'.'  '.'____________';
		return $cadena;
	}
	else
	{
		if($long_cadena>37)
		{
			$cadena=substr($cadena, 0, 35);  // abcd
			$cadena=$cadena.'...';
			return $cadena;
		}else{
			return $cadena;
		}
		
	}
	
}


?>


<?php

    // definimos la carpeta destino al inicio del archivo
    //$carpetaDestino="imagenes/";
    // si hay algun archivo que subir

	$php_inicio="<?php";
		$php_fin="?>";
		$espacio="\n";

	
    if($_FILES["archivo"]["name"][0])
    {
		
		$var_titulo_categoria="\$titulo=strtoupper('{$titulo_categoria}');";
		
		$var_frase="\$frase='{$frase}';";
		
		$cant_products=count($_FILES["archivo"]["name"]);
		
		$var_num_productos="\$num_productos={$cant_products};";	
		
		$directorio=$pagina_16productos;
		 $archivo = fopen($directorio, "a");
		 
		
		fwrite($archivo,"{$php_inicio}");
		 fwrite($archivo,$espacio);
		 fwrite($archivo,"{$var_include}");
		 fwrite($archivo,$espacio);
		 fwrite($archivo,"{$var_sig}");
		 fwrite($archivo,$espacio);
		 fwrite($archivo,"{$var_num_productos}");
		 fwrite($archivo,$espacio);
		 fwrite($archivo,"{$var_titulo_categoria}");
		 fwrite($archivo,$espacio);
		 fwrite($archivo,"{$var_frase}");
		 fwrite($archivo,$espacio);
		 fwrite($archivo,"{$var_dir_img}");
		 fwrite($archivo,$espacio);
		 fwrite($archivo,"{$var_dir_pag}");
		 fwrite($archivo,$espacio);
		 fclose($archivo);		
		 
		 /*  al final del for $var_plantilla="include 'plantilla_muestra_productos.php';";
		*/
 //rec_copy("/de/","/a/copia/");
		
        # recorremos todos los arhivos que se han subido
		
		/*
			$directorio=$pagina_16productos;
			 $archivo = fopen($directorio, "a");
			 fwrite($archivo,"{$var_direccion_img}");
			 fwrite($archivo,$espacio);
			 fwrite($archivo,"{$var_direccion_enlace}");
			 fwrite($archivo,$espacio);
			 fwrite($archivo,"{$var_precio_muestra}");
			 fwrite($archivo,"\n");
			 fwrite($archivo,"\n");
			 
			 fclose($archivo);		
		*/
        for($n=0;$n<count($_FILES["archivo"]["name"]);$n++)
        {
			$i=$n+1;
			$cadena=$_FILES["archivo"]["name"][$n];
			$cadena_enlace_img_png=str_replace(" ","-",$cadena);
			$cadena=str_replace('.png',"",$cadena);
			
			$cadena_enlace_pag=str_replace(" ","-",$cadena);
			$cadena_enlace_img=str_replace(" ","-",$cadena);
			
			
			$titulo=str_replace("-"," ", $cadena);	
			
			$titulo_pag_muestra=verifica_cadena($cadena);
			
			$titulo_pag_muestra=str_replace("-", " ", $titulo_pag_muestra);	
			
			//preg_replace('/-/'," " , $titulo_pag_muestra, 1 , $cuenta );
			//preg_replace('/-/',"<br>", $titulo_pag_muestra, 1 , $cuenta );
			
			
			
			$enlace_imagen=$carpetaDestino_imagen_producto.$cadena_enlace_img.".png";		
			$enlace_pagina=$carpetaDestino_pagina_producto.$cadena_enlace_pag.".php";
			
			/*   ###########################     IMPRESION DE LA PAGINA MUESTRA DE 16   #############################     */
			
			$var_producto="\$producto_{$i}=strtoupper('{$titulo_pag_muestra}');";
			$var_direccion_img="\$direccion_img_{$i}='{$enlace_imagen}';";
			$var_direccion_enlace="\$direccion_enlace_{$i}='{$enlace_pagina}';";
			$var_precio_muestra="\$precio_{$i}='Disponible';";
			$directorio=$pagina_16productos;
			 $archivo = fopen($directorio, "a");
			 fwrite($archivo,"{$var_producto}");
			 fwrite($archivo,$espacio);
			 fwrite($archivo,"{$var_direccion_img}");
			 fwrite($archivo,$espacio);
			 fwrite($archivo,"{$var_direccion_enlace}");
			 fwrite($archivo,$espacio);
			 fwrite($archivo,"{$var_precio_muestra}");
			 fwrite($archivo,"\n");
			 fwrite($archivo,"\n");
			 
			 fclose($archivo);		
			echo "Producto insertado en pagina de muestra <br>";
			
			
			/* #############################         IMPRESION DE LA PAGINA PRODUCTO           #######################      */
			
			
			$var_titulo_categoria="\$titulo_categoria='{$titulo_categoria}';";
			$var_imagen="\$imagen='imagenes/{$cadena_enlace_img}.png';";
			$var_titulo="\$titulo=strtoupper('{$titulo}');";
			$var_precio="\$precio='Disponible';";
			$var_descripcion="\$descripcion=' ';";
			$var_edad="\$edad=' ';";
			$var_caracteristicas="\$caracteristicas=' ';";
			$var_plantilla_pagina_producto="include 'plantilla_pagina_producto.php';";
			
			
			$directorio=$enlace_pagina;
			$archivo = fopen($directorio, "w");
			fwrite($archivo,"<?php");
			fwrite($archivo,"\n");
			fwrite($archivo,"{$var_titulo_categoria}");
			 fwrite($archivo,"\n");
			fwrite($archivo,"{$var_imagen}");
			 fwrite($archivo,"\n");
			fwrite($archivo,"{$var_titulo}");
			 fwrite($archivo,"\n");
			fwrite($archivo,"{$var_precio}");
			 fwrite($archivo,"\n");
			fwrite($archivo,"{$var_descripcion}");
			 fwrite($archivo,"\n");
			fwrite($archivo,"{$var_edad}");
			 
			 fwrite($archivo,"\n");
			fwrite($archivo,"{$var_caracteristicas}");
			 fwrite($archivo,"\n");
			 fwrite($archivo,"\n");
			 fwrite($archivo,"\n");
			fwrite($archivo,"{$var_plantilla_pagina_producto}");
			 fwrite($archivo,"\n");
			 fwrite($archivo,"?>");
			fclose($archivo);		
			
			echo "pagina de producto creada<br>";
			
			//preg_replace('/uno/', $cadena_nueva, $cadena, -1 , $cuenta );
			# si es un formato de imagen
            if($_FILES["archivo"]["type"][$n]=="image/jpg" || $_FILES["archivo"]["type"][$n]=="image/pjpeg" || $_FILES["archivo"]["type"][$n]=="image/gif" || $_FILES["archivo"]["type"][$n]=="image/png")
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino_imagen_producto) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$n];
					
                    //$destino=$carpetaDestino_imagen_producto.$_FILES["archivo"]["name"][$n];
					$destino=$carpetaDestino_imagen_producto.$cadena_enlace_img_png;
					
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>".$_FILES["archivo"]["name"][$n]." movido correctamente";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$n];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$n]." - NO es imagen jpg";
            }
        }
		
		$var_plantilla_muestra16="include 'plantilla_muestra_productos.php';";
		$directorio=$pagina_16productos;
		 $archivo = fopen($directorio, "a");
		  fwrite($archivo,"\n");
		 fwrite($archivo,"{$var_plantilla_muestra16}");
		  fwrite($archivo,"\n");
		  fwrite($archivo,"?>");
		 fclose($archivo);		
		
		 

		
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }
    ?>
 
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
        <input type="file" name="archivo[]" multiple="multiple">
        <input type="submit" value="Enviar"  class="trig">
    </form>





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
/*
include "$sig";

*/
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