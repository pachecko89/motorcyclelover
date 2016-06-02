<html>
	<head>
	<title>Formulario</title>
	<meta charset="utf-8">
		<?php
		include "head.php"
		?>
	</head>
	<body>
	<div class='container'>
		<div class="row">
			<div class="col-xs-8 col-md-9 col-lg-12">
	<?php 
		include "menu.php";
	?>
	<br/>
		<form method="post" action="mailto:elsrpachi@hotmail.com">
		Selecciona tus intereses:
		<table>
         	<tr>
         		<td><input name="Motocicletas" type="checkbox">Motocicletas</td>
         	</tr>
			<tr>
             	<td><input name="Autos" type="checkbox" checked="checked">Autos</td>
            </tr>
			<tr>
             	<td><input name="Aviones" type="checkbox">Aviones</td>
            </tr>
         </table>
		</form>				
		</table>
				<b>Mensaje</b> obligatorio<br/>
				<textarea name="comentarios" rows="5" cols="60" placeholder="Envianos tus comentarios"></textarea>
				<br/>
				<input type="submit" value="Enviar" class="myButton">
				<p>
				</p>
				</div>
			</div>
		</div>
		</form>
		<hr/>


	<div class='container'>
		<div class="row">
			<div class="col-xs-8 col-md-9 col-lg-12">

		<form action="action.php" method="post">
 		<p>Su nombre: <input type="text" name="nombre" /></p>
 		<p>Su edad: <input type="text" name="edad" /></p>
 		<p><input type="submit" /></p>
		</form>		
			</div>
		</div>
	</div>		

	</body>
</html>	