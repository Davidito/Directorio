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
	<title>Directorio Empresarial UTVM-Administrador</title>

		<!-- css application -->
	<link rel="stylesheet" href="../../css/main.css" type="text/css">

   
   	<!-- js bootstrap framework -->
	<script src="../../js/jquery-1.8.0.min.js"></script>
	
	<!-- js application -->
	<script type='text/javascript' src='../../js/main.js'></script>

	
	<?php
		require_once("administrador_lib.php");
	?>

</head>

<body>
	
	<!-- barra de encabezado -->
	<div class="navbar">
		Directorio Empresarial de la UTVM.
	</div>
	

	<!-- contenedor principal -->
	<div class="container">
		<!-- Botones -->
		<div class="botones">
			<button type="button" class = "btn-primary">Nueva </button>
			<button type="button" class = "btn-primary">Siguiente</button>
			<button type="button" class = "btn-primary">Anterior</button>
			<button type="button" class = "btn-primary">Editar</button>
			<button type="button" class = "btn-primary">Buscar</button>
		</div>
		
		
		<?php echo generaDatosHtml(); ?>


		<!-- Grupo de Programas Educativos -->
		<div class = "group">
			<div class = "detalle">Programas Educativos</div>
				<div class = "pe_1">
					<div>
						<input type = "checkbox"/>TIC
					</div>
					<div>
						<input type = "checkbox"/>AYEP
					</div>
					<div>
						<input type = "checkbox"/>EyEI
					</div>
					<div>
						<input type = "checkbox"/>ENERG
					</div>
				</div>
				<div class = "pe_2">
					<div>
						<input type = "checkbox"/>MEC
					</div>
					<div>
						<input type = "checkbox"/>METAL
					</div>
					<div>
						<input type = "checkbox"/>MECATRO
					</div>
					<div>
						<input type = "checkbox"/>GAST
					</div>
				</div>
				<div class = "pe_3">
					<div>
						<input type = "checkbox"/>ACUI
					</div>
					<div>
						<input type = "checkbox"/>TUR
					</div>
				</div>
		</div>
		<!-- Grupo de competencias a Coadyuvar -->
		<div class = "group2">
			<div class = "detalle">Competencias a Coadyuvar</div>
			<textarea class = "competencias-carrera"></textarea>
		</div>
		<!-- Grupo de Observación -->
		<div class = "group">
			<div class = "detalle">Observaciones</div>
			<textarea class = "observaciones" placeholder = "Observaciones"></textarea>
			<div class = "btn1 span2">
				<button>Nueva Observaci&oacute;n</button>
			</div>
			<div class = "btn2 span2">
				<button>Obra Observaci&oacute;n</button>
			</div>
		</div>
	</div>
	<!-- barra de pie de pagina -->
	<div class="navbarbottom">
		Derechos Reservados UTVM 2012.</br>
		Desarrolladores </br>
		T.S.U Noemi Mejia Nieto</br>
		T.S.U David Perez Perez
	</div>

</body>
</html>