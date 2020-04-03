<?
//$var_ruta="/didacticoshouse23/";
$var_ruta="/";
echo'
<div id="vmenu">
<ul class="art-vmenu">
<li><a href=""><h3 class="art-vmenublockheader">Catálogo</h3></a><ul>
<li><a href="'.$var_ruta.'juegos-exclusivos-1.php#foco">Juegos Exclusivos</a></li>
<li><a href="'.$var_ruta.'ninos-0-a-2-motricidad-fina-1.php#foco">Niños de 0 a 2 años</a><ul>
<li><a href="'.$var_ruta.'ninos-0-a-2-motricidad-fina-1.php#foco">Motricidad Fina</a><ul></ul></li>
<li><a href="'.$var_ruta.'ninos-0-a-2-motricidad-gruesa-1.php#foco">Motricidad Gruesa</a></li></ul></li>
<li><a href="'.$var_ruta.'ninos-3-a-5-motricidad-fina-1.php#foco">Niños de 3 a 5 años</a><ul>
<li><a href="'.$var_ruta.'ninos-3-a-5-motricidad-fina-1.php#foco">Motricidad Fina</a></li>
<li><a href="'.$var_ruta.'ninos-3-a-5-motricidad-gruesa-1.php#foco">Motricidad Gruesa</a></li></ul></li>
<li><a href="'.$var_ruta.'educativos-matematica-1.php#foco">Educativos</a><ul>
<li><a href="'.$var_ruta.'educativos-matematica-1.php#foco">Matemática</a></li>
<li><a href="'.$var_ruta.'educativos-estimulacion-del-lenguaje-1.php#foco">Estimulación del Lenguaje</a></li>
<li><a href="'.$var_ruta.'educativos-expresion-y-dramatizacion-1.php#foco">Expresión y Dramatización</a></li>
<li><a href="'.$var_ruta.'educativos-expresion-musical-1.php#foco">Expresión Musical</a></li></ul></li>
<li><a href="'.$var_ruta.'libros-infantiles-1.php#foco">Libros infantiles</a></li>
<li><a href="'.$var_ruta.'accesorios-para-bebes-1.php#foco">Accesorios para Bebes</a></li>
<li><a href="'.$var_ruta.'audiovisuales-1.php#foco">Audiovisuales</a></li>
<li><a href="'.$var_ruta.'juegos-de-mesa-1.php#foco">Juegos de Mesa</a></li>
<li><a href="'.$var_ruta.'rompecabezas-y-juegos-de-encaje-1.php#foco">Rompecabezas y Juegos de Encaje</a></li>
<li><a href="'.$var_ruta.'musica-1.php#foco">Música</a></li>
<li><a href="'.$var_ruta.'para-educadores-1.php#foco">Para Educadores</a></li>
</ul></li></ul>
</div>
';



echo'
<br><br><br>

<div class="art-blockheader">
            <h3 class="t">Búsqueda</h3>
        </div>
<div class="art-blockcontent"><p> </p>
<!--<form class="art-search" name="Search" action="'.$_SERVER["PHP_SELF"].'" method="post" enctype="multipart/form-data" name="inscripcion" id="Search">-->
<form class="art-search" name="buscar" action="'.$var_ruta.'busqueda.php" method="post" enctype="multipart/form-data"  id="Search">
<input type="text" name="name">
<input class="art-search-button" type="submit" name="submit" value="">
</form>

</div>

';





?>