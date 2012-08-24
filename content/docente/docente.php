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
	<title>Directorio Empresarial UTVM-Docente</title>

	<!-- css application -->
	<link rel="stylesheet" href="../../css/main.css" type="text/css">

   
   	<!-- js bootstrap framework -->
	<script src="../../js/jquery-1.8.0.min.js"></script>
	
	<!-- js application -->
	<script type='text/javascript' src='../../js/main.js'></script>

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
		<!-- Grupo Empresa -->
		<div class="group">
			<div class = "detalle">Empresa</div>	
				<div class = "span2 numero">
					Numero:
				</div>
				<div class = "span2 inputnumero">
					<input class = "span12" placeholder="Numero de empresa"/>
				</div>
				<div class = "span2 clave">
					Clave:
				</div>
				<div class = "span2 inputclave">
					<input class = "span12" placeholder="Clave de empresa"/>
				</div>
				<div class = "span2 name">
					Nombre:
				</div>
				<div class = "inputname span9">
					<input class = "span12" placeholder="Nombre de la empresa"/>
				</div>
				<div class = "span2 sector">
					Sector:
				</div>
				<div class = "span2 inputsector">
					<input class = "span12" type= "combobox" placeholder="Elige el sector" />
				</div>
				<div class = "span2 tamano">
					Tamaño:
				</div>
				<div class = "inputtamano span2">
					<input class = "span12" type= "combobox" placeholder="Elige el tamaño" />
				</div>
		</div>
		<!-- Grupo Dirección de la empresa -->
		<div class="group">
			<div class = "detalle">Direcci&oacute;n</div>	
				<div class = "span4 calle">
					Calle:
				</div>
				<div class = "span5 inputcalle">
					<input  class = "span12"  placeholder="Nombre de la Calle"/>
				</div>
				<div class = "span2 num">
					No.:
				</div>
				<div class = "span3 inputnum">
					<input class = "span12" placeholder="Número"/>
				</div>
				<div class = "span3 colonia">
					Colonia:
				</div>
				<div class = "inputcolonia  span5">
					<input class = "span12" placeholder="Nombre de la Colonia"/>
				</div>
				<div class = "span2 cp">
					C.P.:
				</div>
				<div class = "inputcp span3">
					<input class = "span12" placeholder="Codigo Postal" />
				</div>
				<div class = "span2 ciudad">
					Ciudad:
				</div>
				<div class = "inputciudad span5">
					<input class = "span12" placeholder="Elige la Ciudad" />
				</div>
				<div class = "span2 estado">
					Estado:
				</div>
				<div class = "inputestado span3">
					<input class = "span12" placeholder="Elige el estado" />
				</div>
		</div>
		<!-- Grupo Contacto -->
		<div class = "group2">
			<div class = "detalle"> Contacto </div>
				<div class = "span2 web">
					P&aacute;gina Web:
				</div>
				<div class = "inputweb span8">
					<input class = "span12" placeholder="Sitio oficial de la empresa"/>
				</div>
				<div class = "span2 teluno">
					Tel&eacute;fono(1):
				</div>
				
				<div class = "span5 inputteluno">
					<input class = "span2" placeholder = "Lada"/>
					<input  class = "span8"  placeholder="Telefono de la empresa"/>
				</div>
				<div class = "span2 extuno">
					Ext.:
				</div>
				<div class = "span2 inputextuno">
					<input class = "span12" placeholder="Extencion"/>
				</div>
				<div class = "span3 teldos">
					Tel&eacute;fono(2):
				</div>
				<div class = "inputteldos  span5">
					<input class = "lada2 span2" placeholder = "Lada"/>
					<input class = "span8" placeholder="Telefono de la empresa"/>
				</div>
				<div class = "span2 extdos">
					Ext.:
				</div>
				<div class = "inputextdos span2">
					<input class = "span12" placeholder="Extencion" />
				</div>
				<div class = "span2 cnt_e">
					Contacto de Estadia:
				</div>
				<div class = "inputcnt_e span4">
					<input class = "span12" placeholder="Nombre del contacto" />
				</div>
				<div class = "span2 e-mailuno">
					E-mail:
				</div>
				<div class = "inpute-mailuno span2">
					<input class = "span12" placeholder="Correo electronico" />
				</div>
				<div class = "span2 cnt_vi">
					Contacto de visita Ind.:
				</div>
				<div class = "inputcnt_vi span4">
					<input class = "span12" placeholder="Nombre del contacto" />
				</div>
				<div class = "span2 e-maildos">
					E-mail:
				</div>
				<div class = "inpute-maildos span2">
					<input class = "span12" placeholder="Correo electronico" />
				</div>
		</div>
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