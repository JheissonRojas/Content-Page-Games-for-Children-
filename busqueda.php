<?php

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



$texto_buscado = $_POST['name'];
$texto_buscado=str_replace(' ',"-",$texto_buscado);
$directorio_=array();

$directorio_[0]="catalogo/accesorios-para-bebes/";
$directorio_[1]="catalogo/audiovisuales/";
$directorio_[2]="catalogo/educativos-estimulacion-del-lenguaje/";
$directorio_[3]="catalogo/educativos-expresion-musical/";
$directorio_[4]="catalogo/educativos-expresion-y-dramatizacion/";
$directorio_[5]="catalogo/educativos-matematica/";
$directorio_[6]="catalogo/juegos-de-mesa/";
$directorio_[7]="catalogo/musica/";
$directorio_[8]="catalogo/ninos-0-a-2-motricidad-fina/";
$directorio_[9]="catalogo/ninos-0-a-2-motricidad-gruesa/";
$directorio_[10]="catalogo/ninos-3-a-5-motricidad-fina/";
$directorio_[11]="catalogo/ninos-3-a-5-motricidad-gruesa/";
$directorio_[12]="catalogo/para-educadores/";
$directorio_[13]="catalogo/rompecabezas-y-encaje/";
$directorio_[14]="catalogo/libros-infantiles/";


$ficheros_1=array();

$num_categorias=count($directorio_);

//echo $texto_buscado.'<br>';
//echo $num_productos.'<br>';
//echo $ficheros_1[2];

$var_encontrados=0;
$producto_=array();
$direccion_img_=array();
$direccion_enlace_=array();
$precio_=array();
$a=0;
$directorio="";
while($a<$num_categorias)
{
	
	global $directorio_;
	$directorio=$directorio_[$a];
	$ficheros_1=scandir($directorio);
	$num_productos=count($ficheros_1);	
	
	
for($i=0;$i<$num_productos;$i++)
{
	
	global $directorio;
	global $ficheros_1;
	global $var_encontrados;
	global $texto_buscado;
	
	if(stripos($ficheros_1[$i],$texto_buscado)!==FALSE && stripos($ficheros_1[$i],'.php')!== FALSE)
	{		
            $var_encontrados++;
			$cadena=$ficheros_1[$i];
			$cadena=str_replace('.php',"",$cadena);
			//echo $cadena.'<br>';
			//echo $i.'<br>';
			$cadena_modificada=verifica_cadena($cadena);	
			$producto_[$var_encontrados]=$cadena_modificada;
			$direccion_img_[$var_encontrados]=''.$directorio.'imagenes/'.$cadena.'.png';
			$direccion_enlace_[$var_encontrados]=''.$directorio.$cadena.'.php';
			$precio_[$var_encontrados]="Disponible";
		
	
	}
	if($var_encontrados==16) break;
}

$a++;
}



$titulo='Resultado Busqueda';
$frase='Encuentra los mejores productos para el desarrollo de tu niño en DIDACTICO\'S HOUSE';

//$dir_img='catalogo/accesorios-para-bebes/imagenes';
//$dir_pag='catalogo/accesorios-para-bebes';


include 'plantilla_pagina_busqueda.php';
?>