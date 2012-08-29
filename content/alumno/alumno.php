<!DOCTYPE html>
<html>
<head>

	<!-- Meta -->
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Noemi Mejia, David Perez" />
	<meta name="keywords" content="Directorio de la utvm" />
	<meta name="description" content="Directorio de la Universidad Tecnologica del Valle del Mezquital" />
	<meta name="robots" content="all" />	
	
	<!-- Titulo del documento -->		
	<title>Directorio Empresarial UTVM-Alumno</title>

	
	<!-- css application -->
	<link rel="stylesheet" href="../../css/main.css" type="text/css">

   
   	<!-- js bootstrap framework -->
	<script src="../../js/jquery-1.8.0.min.js"></script>
	
	<!-- js application -->
	<script type='text/javascript' src='../../js/main.js'></script>

	<?php
		require_once("alumno_lib.php");
	?>

</head>

<body>
	
	<!-- barra de encabezado -->
	<div class="navbar">
		Directorio Empresarial de la UTVM
	</div>
	

	<!-- contenedor principal -->
	<div class="container-alum">
		<!-- Botones -->
		<div class="botones">

			<button type="button" class = "btn-primary">Siguiente</button>
			<button type="button" class = "btn-primary">Anterior</button>
			<button type="button" class = "btn-primary">Buscar</button>
		</div>
		

		<!--PHp-->

		<?php echo generaDatosEmpresaAlumno();?>
		
	</div>
	<!-- barra de pie de pagina -->
	<div class="navbarbottom">
		Derechos Reservados UTVM 2012.</br>
		
	</div>

</body>
</html>