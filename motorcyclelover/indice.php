<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>	
		<title>Indice</title>
		
		<?php
		include "head.php"
		?>

	</head>
		<body>
		<?php
		include "menu.php"
		?>
			<div class="row">
				<div class="col-xs-6 col-md-8 col-lg-12">
		<h1>Bienvenido a mi primer Sitio WEB</h1>
		<p>Este Sitio esta dedicado para los amantes de las motocicletas bienvenido!
		</p>
		 <div id="valor">
              10%
              </div>
			  <input type="range" onchange="redimensionarImagen(event)" value="10" max="100" min="10" id="rango"><br/>
              <img src="http://3.bp.blogspot.com/-ToI9rhBYbNE/UOoT9Ho-_II/AAAAAAAC38w/JtCxDYNgXgE/s1600/kawasaki_logo1.jpg" id="imagen" width="200" />
              <script type=" text/javascript">
                    
					function redimensionarImagen() {

					var elementoRango = document.getElementById('rango').value;		  
					var imagenC = document.getElementById('imagen');      

					document.getElementById('valor').innerHTML = elementoRango + "%";      
				imagenC.style.width = elementoRango + '%';
			 }
			</script>
			<br/>
			
				</div>
			</div>
		
			</body>		
</html>		