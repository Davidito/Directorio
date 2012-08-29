<?php 
	include "../../lib/librerias.php";

	function generaDatosEmpresaAlumno (){

		//Abriendo conexion
		$conexion = getConnection();

		mysql_query("SET NAMES UTF8");
		/* SQL */
		$sqlEmpresa = "";
		$sqlEmpresa.= "SELECT ";
		$sqlEmpresa.= 			"a.idempresa as clave, ";
		$sqlEmpresa.= 			"a.numero_empresa as numero, ";
		$sqlEmpresa.= 			"a.empresa as nombre, ";
		$sqlEmpresa.= 			"c.giro as giro, ";
		$sqlEmpresa.= 			"b.tamano as tamano, ";
		$sqlEmpresa.= 			"a.calle as calle, ";
		$sqlEmpresa.= 			"a.numero_exterior as numeroexterior, ";
		$sqlEmpresa.= 			"d.localidad localidad, ";
		$sqlEmpresa.= 			"a.cp as codigopostal, ";
		$sqlEmpresa.= 			"e.municipio as municipio, ";
		$sqlEmpresa.= 			"f.estado as estado, ";
		$sqlEmpresa.= 			"a.pagina as paginaweb, ";
		$sqlEmpresa.= 			"a.lada1 as lada1, ";
		$sqlEmpresa.= 			"a.telefono1 as telefono1, ";
		$sqlEmpresa.= 			"a.ext1 as ext1, ";
		$sqlEmpresa.= 			"a.lada2 as lada2, ";
		$sqlEmpresa.= 			"a.telefono2 as telefono2, ";
		$sqlEmpresa.= 			"a.ext2 as ext2, ";
		$sqlEmpresa.= 			"a.contacto as contactoestadia, ";
		$sqlEmpresa.= 			"a.correo_contacto_estadia as correoestadia, ";
		$sqlEmpresa.= 			"a.contacto_visitas as contactovisitas, ";
		$sqlEmpresa.= 			"a.correo_contacto_visita as correovisitas, ";
		$sqlEmpresa.= 			"a.observaciones as observaciones, ";
		$sqlEmpresa.=			"g.competencia as competencia_especifica, ";
		$sqlEmpresa.=			"j.carrera as carrera, ";
		$sqlEmpresa.=			"j.idcarrera as idcarrera ";
		$sqlEmpresa.= "FROM ";
		$sqlEmpresa.= 			"siin_generales.gral_empresas a, ";
		$sqlEmpresa.= 			"siin_generales.gral_tamano_empresas b, ";
		$sqlEmpresa.=			"siin_generales.gral_giro_empresas c, ";
		$sqlEmpresa.=			"siin_generales.gral_localidades d, ";
		$sqlEmpresa.=			"siin_generales.gral_municipios e, ";
		$sqlEmpresa.=			"siin_generales.gral_estados f, ";
		$sqlEmpresa.=			"siin_control_escolar.esc_cal_planes_competencias_especifica_dir g, ";
   		$sqlEmpresa.=			"siin_control_escolar.esc_cal_competencia_empresa h, ";
    	$sqlEmpresa.=			"siin_control_escolar.esc_cal_planes_competencias_pe i, ";
    	$sqlEmpresa.=			"siin_generales.gral_carreras j ";
		$sqlEmpresa.= "WHERE ";
		$sqlEmpresa.= 			"a.idgiro = c.idgiro ";
		$sqlEmpresa.= 			"AND a.idtamano = b.idtamano ";
		$sqlEmpresa.= 			"AND a.idlocalidad = d.idlocalidad ";
		$sqlEmpresa.=			"AND a.idmunicipio = e.idmunicipio ";
		$sqlEmpresa.=			"AND a.idestado = f.idestado ";
		$sqlEmpresa.=			"AND a.idempresa = '000001' ";
		$sqlEmpresa.=			"AND a.idempresa = h.idempresa ";
	   	$sqlEmpresa.=			"AND g.idcompetenciaespecifica = h.idcompetenciaespecifica ";
	    $sqlEmpresa.=			"AND g.idcompetencia = i.idcompetencia ";
	    $sqlEmpresa.=			"AND i.idcarrera = j.idcarrera ";

		$resultSetGetDatos = mysql_query($sqlEmpresa);
		$row = mysql_fetch_array($resultSetGetDatos);


		$pantillaDatos ="";
		// Grupo Empresa -->
		
		$pantillaDatos .= "<div class='group'>";
		$pantillaDatos .=	"<div class = 'detalle'>Empresa</div>";
		$pantillaDatos .=		"<div class = 'span2 numero-alum'>";
		$pantillaDatos .=			"Numero:";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=		"<div class = 'span2 inputnumero-alum'>";
		$pantillaDatos .=			"<input class = 'span12' placeholder='Numero de empresa' value = '".utf8_decode($row['numero'])."'/>";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=		"<div class = 'span2 name-alum'>";
		$pantillaDatos .=			"Nombre:";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=		"<div class = 'span8 inputname-alum'>";
		$pantillaDatos .=			"<input class = 'span12' placeholder='Nombre de empresa' value = '".utf8_decode($row['nombre'])."'/>";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=		"<div class = 'span2 web-alum'>";
		$pantillaDatos .=			"Pagina Web:";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=		"<div class = 'span8 inputweb-alum'>";
		$pantillaDatos .=			"<input class = 'span12' placeholder='Pagina web de empresa' value = '".utf8_decode($row['paginaweb'])."'/>";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=	"</div>";	

		/***<!-- Grupo de Programas Educativos -->***/

		$pantillaDatos .="<div class = 'group'>";
		$pantillaDatos .=	"<div class = 'detalle'>Programas Educativos</div>";
		$pantillaDatos .=		"<div class = 'pe_1'>";
		$pantillaDatos .=			"<div>";
		//$plantillaElemento .=					
		if($row['idcarrera']="5"){
					$pantillaDatos .=		"<input type = 'checkbox' checked='checked' />TIC";	
				}else{
					$pantillaDatos .=		"<input type = 'checkbox'/>TIC";
				}
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>AYEP";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>EyEI";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>ENERG";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=		"<div class = 'pe_2'>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>MEC";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>METAL";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>MECATRO";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>GAST";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .=		"<div class = 'pe_3'>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>ACUI";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=			"<div>";
		$pantillaDatos .=				"<input type = 'checkbox'/>TUR";
		$pantillaDatos .=			"</div>";
		$pantillaDatos .=		"</div>";
		$pantillaDatos .="</div>";

		/***<!-- Grupo de competencias a Coadyuvar -->***/

		$pantillaDatos .="<div class = 'group2'>";
		$pantillaDatos .=	"<div class = 'detalle'>Competencias a Coadyuvar</div>";
		$pantillaDatos .=		"<textarea class = 'competencias-carrera'>".utf8_decode($row['competencia_especifica'])."----".utf8_decode($row['carrera'])."</textarea>";
		$pantillaDatos .="</div>";

		// cerrando conexion a base de datos
		close($conexion);
		
		return $pantillaDatos;		
	}
?>