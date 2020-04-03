<?php

$titulo_categoria='ESCRIBANOS';

$imagen_1='';
$imagen_2='';
$imagen_3='';

$titulo='ESCRIBANOS PARA MAYOR INFORMACIÓN DE PRODUCTOS O PRESUPUESTOS';

//$enlace='';
$descripcion='
<DIV ID="MENSAJE" STYLE="ALIGN:LEFT">
        <FORM id="contacto" name="contacto" action="enviar.php" method="POST">
		<p>
		<label ALIGN="LEFT">Nombre 
		<input name="nombre" type="text" id="nombre"
		 size="42"/></label>
		</p>
		<p>
		<label ALIGN="LEFT">Empresa
		<input name="empresa" type="text" id="empresa" size="31"/></label></p>
		<p>
                 <label ALIGN="LEFT">E-mail <input name="mail" type="text" id="mail" size="43"/>
		</label>
		</p>
		<p>
		<label ALIGN="LEFT">Telefono
		<input name="telefono" type="text" id="telefono" size="31"/></label></p>
		<p>
                 <label ALIGN="LEFT">Mensaje<br>
		<textarea name="mensaje" cols="40" rows="8" id="mensaje">
		</textarea></label>
		</p>
		<p><input type="submit" class="art-button" name="Submit" value="Enviar"/></p>
		</FORM>

</DIV>



';
$edad='';
$caracteristicas=' ';


include 'plantilla_pagina_conozcanos.php';
?>