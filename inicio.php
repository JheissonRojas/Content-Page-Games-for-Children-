<?
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

<!--

<script>jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainerslide1").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;

            if ($.support.transition) {
                helper = new BackgroundHelper();
                helper.init("horizontal", "next", $(".art-slide-item", inner).first().css($.support.transition.prefix + "transition-duration"));
                inner.children().each(function () {
                    helper.processSlide($(this));
                });

                var items = helper.items(helper.current(0), helper.next(0));
                helper.setBackground(inner, items);
                helper.setPosition(inner, items);

                slideContainer.on("beforeSlide", function () {
                    var activeItem = $(".active", this),
                        nextItem = $(".next, .prev", this),
                        activePos = $(".art-slide-item", this).index(activeItem),
                        nextPos = $(".art-slide-item", this).index(nextItem),
                        currentItems = helper.items(helper.current(activePos), helper.current(nextPos));

                    helper.transition(inner, false);
                    helper.setBackground(inner, currentItems);
                    helper.setPosition(inner, currentItems);
                    if (inner.length) {
                        tmp = inner.get(0).offsetHeight;
                    }

                    var movedCurrentItems = helper.items(helper.current(activePos), helper.current(nextPos), true);
                    helper.transition(inner, true);
                    helper.setPosition(inner, movedCurrentItems);
                });
            }

            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 3500,
                speed: 1500,
                repeat: true,
                animation: "horizontal",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigatorslide1"),
                helper: helper
                            });
        });
    }
});
</script><style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 3px;padding-left: 3px;  }
.art-content .art-postcontent-0 .layout-item-1 { margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:3px;border-right-width:5px;border-bottom-width:5px;border-left-width:3px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; border-spacing: 15px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-3 { padding-right: 3px;padding-left: 3px; border-radius: 5px;  }
.art-content .art-postcontent-0 .layout-item-4 { border-spacing: 15px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-5 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; padding-right: 3px;padding-left: 3px; border-radius: 5px;  }
.art-content .art-postcontent-0 .layout-item-6 { background: #75F46C; padding-right: 3px;padding-left: 3px; border-radius: 5px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainerslide1 {
    position: relative;
        width: 610px;
    height: 270px;
        }

.art-slidecontainerslide1 .art-slide-item
{

}

.art-slidecontainerslide1 .art-slide-item {
    -webkit-transition: 1500ms ease-in-out left;
    -moz-transition: 1500ms ease-in-out left;
    -ms-transition: 1500ms ease-in-out left;
    -o-transition: 1500ms ease-in-out left;
    transition: 1500ms ease-in-out left;
    position: relative;
    display: none;
    width:  100%;
    height: 100%;
}

.art-slidecontainerslide1 .active, .art-slidecontainerslide1 .next, .art-slidecontainerslide1 .prev {
    display: block;
}

.art-slidecontainerslide1 .active {
    left: 0;
}

.art-slidecontainerslide1 .next, .art-slidecontainerslide1 .prev {
    position: absolute;
    top: 0;
    width: 100%;
}

.art-slidecontainerslide1 .next {
    left: 100%;
}

.art-slidecontainerslide1 .prev {
    left: -100%;
}

.art-slidecontainerslide1 .next.forward, .art-slidecontainerslide1 .prev.back {
    left: 0;
}

.art-slidecontainerslide1 .active.forward {
    left: -100%;
}

.art-slidecontainerslide1 .active.back {
    left: 100%;
}




.art-slideslide10 {
    background-image:  url('images/slideslide10.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slideslide11 {
    background-image:  url('images/slideslide11.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slideslide12 {
    background-image:  url('images/slideslide12.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigatorslide1 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 246px;
  left: 89.51%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigatorslide1
{
background: #B9C2CB;background: transparent;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigatorslide1 > a
{
background: #728597;background: #728597;background: #728597;background: #728597;background: #728597;background: #728597;background: #728597;-svg-background: #728597;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorslide1 > a.active
{
background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;background: #FD9D53;-svg-background: #FD9D53;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorslide1 > a:hover
{
background: #455B73;background: #455B73;background: #455B73;background: #455B73;background: #455B73;background: #455B73;background: #455B73;-svg-background: #455B73;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style>

-->

<?
include('encabezado.php');
?>




<!--        FACE       -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




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
    <a href="#"></a> <!-- titulo pagina -->
</h1>
<?php include 'botones_contactanos.php'; ?>

            </div>
			<!-- MENU HORIZONTAL  -->
<!--  
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="new-page.html" class="active">Inicio</a></li><li><a href="catalogo.html">Catálogo</a><ul><li><a href="ninos0a2anos.html">Niños de 0 a 2 años</a><ul><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-fina.html">Motricidad Fina</a><ul></ul></li><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa.html">Motricidad Gruesa</a><ul><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa/2.html">2</a></li><li><a href="catalogo/ninos-de-0-a-2-anos/motricidad-gruesa/3.html">3</a></li></ul></li></ul></li><li><a href="catalogo/new-page-2.html">Niños de 3 a 5 años</a><ul><li><a href="catalogo/new-page-2/motricidad-fina.html">Motricidad Fina</a></li><li><a href="catalogo/new-page-2/motricidad-gruesa.html">Motricidad Gruesa</a></li></ul></li><li><a href="catalogo/educativos.html">Educativos</a><ul><li><a href="catalogo/educativos/new-page-3.html">Matemática</a></li><li><a href="catalogo/educativos/estimulacion-del-lenguaje.html">Estimulación del Lenguaje</a></li><li><a href="catalogo/educativos/expresion-y-dramatizacion.html">Expresión y Dramatización</a></li><li><a href="catalogo/educativos/musica.html">Música</a></li></ul></li><li><a href="catalogo/libros-infantiles.html">Libros infantiles</a></li><li><a href="catalogo/accesorios-para-bebes.html">Accesorios para Bebes</a></li><li><a href="catalogo/audiovisuales.html">Audiovisuales</a></li><li><a href="catalogo/juegos-de-mesa.html">Juegos de Mesa</a></li><li><a href="catalogo/rompecabezas-y-juegos-de-encaje.html">Rompecabezas y Juegos de Encaje</a></li><li><a href="catalogo/expresion-musical.html">Expresión Musical</a></li><li><a href="catalogo/para-educadores.html">Para Educadores</a></li><li><a href="catalogo/pagina-nueva.html">Página Nueva</a></li></ul></li><li><a href="tiendas.html">Tiendas</a></li><li><a href="conozcanos.html">Conózcanos</a></li><li><a href="responsabilidad-social.html">Responsabilidad Social</a></li></ul> 
    </nav>
-->
<?
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
			
<?
include('menu_vertical.php');
?>			
			
			

			
        </div>
</div><div class="art-block clearfix">
        
</div></div>
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                               <!-- <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Niños de 0 a 2 años</h2>
                                    </div>
                                -->                
    <div class="art-postcontent art-postcontent-0 clearfix">
	<!--
	<div class="art-content-layout">
    <div class="art-content-layout-row">
	
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p>
		</p>
    </div>
	
    </div>
    </div>
-->

<!--   $$$$$$$$$$$$$$   SLIDER      $$$$$$$$$$$$$$$$$$$$ -->
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-2">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100%" >
        <p style="text-align: center;"> </p>
<div id="slide1" style="position: relative; display: inline-block; z-index: 0; margin: 2px;  border-width: 0px;  " class="art-collage">
<div class="art-slider art-slidecontainerslide1">
    <div class="art-slider-inner">
<div class="art-slide-item art-slideslide10">

</div>
<div class="art-slide-item art-slideslide11">

</div>
<div class="art-slide-item art-slideslide12">

</div>

    </div>
</div>

<!--   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$    FIN     SLIDER      $$$$$$$$$$$$$$$$$$$$ -->




<div class="art-slidenavigator art-slidenavigatorslide1">
<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
</div>



    </div>

        
    </div>
    </div>
</div>
</div>
<!--
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100%" >
        <p style="text-align: center;"><span style="color: rgb(17, 20, 23); font-size: 14px;">Frase &nbsp;de la categoruia</span></p>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 100%" >
        <span style="font-weight: bold;"><a href="catalogo/new-page.html">&lt;&lt;Anterior</a></span> <span style="color: rgb(12, 157, 14); font-weight: bold;">&nbsp;<span style="text-decoration: underline; color: #FA6114;">1</span>&nbsp;&nbsp;&nbsp;2 &nbsp; 3 &nbsp;&nbsp;<a href="catalogo/new-page.html">Siguiente&gt;&gt;</a></span>
    </div>
    </div>
</div>
</div>

-->

<!--
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>


-->


<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-6" style="width: 100%" >
        <p style="text-align: center;"><span style="font-weight: bold; font-family: 'Arial Black';">PRODUCTOS DESTACADOS</span></p>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover='this.style.background="#FFB635"' onmouseout='this.style.background="white"'>
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="images/motricidad%20gruesa%200-2.png"></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">BALANCIN OSO</span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;Disponible</span></p>
        <p style="text-align: center;">&nbsp;<a href="catalogo/ninos-0-a-2-motricidad-gruesa/balancin-oso.html" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div>
	<div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover='this.style.background="#FFB635"' onmouseout='this.style.background="white"'>
        <p style="text-align: center;"><img width="144" height="144" alt="" class="art-lightbox" src="images/casita%20villa%20feliz%20E3402%20HP.png"><br></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">CASITA VILLA FELIZ&nbsp;</span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;Disponible</span></p>
        <p style="text-align: center;">&nbsp;<a href="catalogo/educativos-expresion-y-dramatizacion/casita-villa-feliz.html" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);"></span></p>
        <p><span style="color: #0C9D0E;"></span></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover='this.style.background="#FFB635"' onmouseout='this.style.background="white"'>
        <p style="text-align: center;"><img width="144" height="144" alt="" class="art-lightbox" src="images/PIANO%20DE%20COLA%20NEGRO%20e0320%20HP.png"><br></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">PIANO DE COLA NEGRO &nbsp;</span><span style="color: rgb(12, 157, 14); font-weight: bold;">&nbsp;</span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;Disponible</span></p>
        <p style="text-align: center;">&nbsp;<a href="catalogo/musica/piano-de-cola-negro.html" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER&nbsp;</span><span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p><span style="color: #0C9D0E;"></span></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover='this.style.background="#FFB635"' onmouseout='this.style.background="white"'>
        <p style="text-align: center;"><img width="144" height="144" alt="" class="art-lightbox" src="images/SONAJAS%20DE%20TELA%20VARIADAS%2081419%20KH-LR.png"><br></p>
        <p style="text-align: center;"><span style="color: rgb(12, 157, 14); font-weight: bold;">SONAJA DE TELA&nbsp;</span></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(250, 97, 20);">&nbsp;Disponible</span></p>
        <p style="text-align: center;">&nbsp;<a href="catalogo/accesorios-para-bebes/sonaja-de-tela.html" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 25%" onmouseover='this.style.background="#FFB635"' onmouseout='this.style.background="white"'>
        <p style="text-align: center;"><img width="147" height="147" alt="" class="art-lightbox" src="images/Caja%20Multijuegos%20E1810%20HP.png"><br></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(12, 157, 14);">CAJA MULTIJUEGOS EP1810 HP</span></p>
        <p style="text-align: center;"><span style="color: rgb(250, 97, 20); font-weight: bold;">Disponible</span><br></p>
        <p style="text-align: center;">&nbsp;<a href="catalogo/ninos-0-a-2-motricidad-fina/Caja-Multijuegos-E1810-HP.html" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14); ">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div><div class="art-layout-cell layout-item-5" style="width: 25%" onmouseover='this.style.background="#FFB635"' onmouseout='this.style.background="white"'>
        <p style="text-align: center;"><img width="143" height="143" alt="" class="art-lightbox" src="images/piscina%20patitos.png"><br></p>
        <p style="text-align: center;"><span style="font-weight: bold; color: rgb(12, 157, 14);">PISCINA DISEÑO CON PATITOS C/200 PELOTAS</span></p>
        <p style="text-align: center;"><span style="color: rgb(250, 97, 20); font-weight: bold;">Disponible</span><br></p>
        <p style="text-align: center;">&nbsp;<a href="catalogo/ninos-0-a-2-motricidad-gruesa/piscina-con-patitos-200-pelotas.html" class="art-button"><span style="background-color: rgb(12, 157, 14);">VER</span>&nbsp;<span style="background-color: rgb(12, 157, 14);">DETALLE</span><span style="background-color: rgb(12, 157, 14);">S</span></a>&nbsp;</p>
        <p style="text-align: center;"><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>

<!-- ESPACIO-->
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 100%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>

<!--   BLOQUE 3
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p><br></p>
        <p style="text-align: center;"><br></p>
        <p>     </p>
    </div><div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p style="text-align: center;"><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p style="text-align: center;"><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p style="text-align: center;"><br></p>
    </div>
    </div>
</div>
</div>
-->

<!--  ESPACIO
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 100%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>
-->

<!--    BLOQUE 4
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p><br></p>
        <p style="text-align: center;"><br></p>
        <p>     </p>
    </div><div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p style="text-align: center;"><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p style="text-align: center;"><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p><a href=""></a></p>
        <p style="text-align: center;"><br></p>
    </div>
    </div>
</div>
</div>
-->

<!--   BLOQUE 5
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>
-->


<!--    ESPACIO
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>
-->


<!--     FACE  -->
<CENTER>
<div  class="fb-page" data-href="https://www.facebook.com/Didacticos-House-287066941443867/" data-tabs="timeline" data-width="500" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Didacticos-House-287066941443867/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Didacticos-House-287066941443867/">Didacticos House</a></blockquote></div>
</CENTER>


<!-- ESPACIO   -->
<div class="art-content-layout-wrapper layout-item-1">
<div class="art-content-layout layout-item-4">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100%" >
        <p><br><br><br><br></p>
    </div>
    </div>
</div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div>

<?
include('footer.php');
?>			
			
			
    </div>
   
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5489206175407e81"></script> 
</body></html>