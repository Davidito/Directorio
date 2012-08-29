<?php
	include "../../lib/librerias.php";
	
	function generaDatosHtml(){
		
		//if(!verificarSesionDelUsuario()){ return; }; //IMPORTANTE: verifica la sesion del usuario

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
		//echo $sqlEmpresa;
		$plantillaElemento = "";

		/***<!--Grupo Empresa-->***/

		$plantillaElemento .="<div class='group'>";
		$plantillaElemento .=	"<div class = 'detalle'>Empresa</div>";
		$plantillaElemento .=		"<div class = 'span2 numero'>";
		$plantillaElemento .=			"Numero:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 inputnumero'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Numero de empresa' value = '".utf8_decode($row['numero'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 clave'>";
		$plantillaElemento .=			"Clave:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 inputclave'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Clave de empresa' value = '".utf8_decode($row['clave'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 name'>";
		$plantillaElemento .=			"Nombre:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputname span9'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Nombre de la empresa' value = '".utf8_decode($row['nombre'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 sector'>";
		$plantillaElemento .=			"Sector:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span5 inputsector'>";
		$plantillaElemento .=		"<select class = 'span12' type= 'combobox' placeholder='Elige el sector'  >";
		$plantillaElemento .=			"<option>".utf8_decode($row['giro'])."</option>";
		$plantillaElemento .=			"<option>PAPEL, PRODUCTOS DE PAPEL, IMPRENTAS Y EDITORIALES</option>";
		$plantillaElemento .=			"<option>PRODUCTOS ALIMENTICIOS, BEBIDAS Y TABACO</option>";
		$plantillaElemento .=			"<option>PRODUCTOS DE MINERALES NO MET&Aacute;LICOS</option>";
		$plantillaElemento .=			"<option>PRODUCTOS MET&Aacute;LICOS MAQUINARIA Y EQUIPO </option>";
		$plantillaElemento .=			"<option>SERVICIOS COMUNALES, SOCIALES Y PERSONALES </option>";
		$plantillaElemento .=			"<option>SERVICIOS FINANCIEROS, SEGUROS Y BIENES INMUEBLES </option>";
		$plantillaElemento .=			"<option>SUSTANCIAS QU&Iacute;MICAS Y DERIVADOS DEL PETR&Oacute;LEO </option>";
		$plantillaElemento .=			"<option>TEXTILES, PRENDAS DE VESTIR E INDUSTRIA DE CUERO </option>";
		$plantillaElemento .=			"<option>TRANSPORTE ALMACENAMIENTO Y COMUNICACIONES </option>";
		$plantillaElemento .=			"<option>AGROPECUARIO, SILVICULTURA Y PESCA </option>";
		$plantillaElemento .=			"<option>COMERCIO RESTAURANTES Y HOTELES </option>";
		$plantillaElemento .=			"<option>CONSTRUCCI&Oacute;N </option>";
		$plantillaElemento .=			"<option>ELECTRICIDAD GAS Y AGUA </option>";
		$plantillaElemento .=			"<option>INDUSTRIA DE LA MADERA Y PRODUCTOS DE MADERA </option>";
		$plantillaElemento .=			"<option>INDUSTRIAS MET&Aacute;LICAS B&Aacute;SICAS </option>";
		$plantillaElemento .=			"<option>MINER&Iacute;A (EXCLUIDO PETR&Oacute;LEO) </option>";
		$plantillaElemento .=			"<option>OTRAS INDUSTRIAS MANUFACTURERAS </option>";
		$plantillaElemento .=		"</select>";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 tamano'>";
		$plantillaElemento .=			"Tama&ntildeo:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputtamano span3'>";
		$plantillaElemento .=		"<select class = 'span12' type= 'combobox' placeholder='Elige el tama&ntildeo'  >";
		$plantillaElemento .=			"<option>".utf8_decode($row['tamano'])."</option>";
		$plantillaElemento .=			"<option>GRANDE (MAYOR A 101)</option>";
		$plantillaElemento .=			"<option>GRANDE (MAYOR A 251)</option>";
		$plantillaElemento .=			"<option>MEDIANA (31-100)</option>";
		$plantillaElemento .=			"<option>MEDIANA (51-100)</option>";
		$plantillaElemento .=			"<option>MEDIANA (51-250)</option>";
		$plantillaElemento .=			"<option>MICRO (0-10)</option>";
		$plantillaElemento .=			"<option>PEQUE&NtildeA (11-30)</option>";
		$plantillaElemento .=			"<option>PEQUE&NtildeA (11-50)</option>";
		$plantillaElemento .=		"</select>";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .="</div>";
		
		/***<!-- Grupo Dirección de la empresa -->***/

		$plantillaElemento .="<div class='group'>";
		$plantillaElemento .=	"<div class = 'detalle'>Direcci&oacute;n</div>";
		$plantillaElemento .=		"<div class = 'span4 calle'>";
		$plantillaElemento .=			"Calle:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span5 inputcalle'>";
		$plantillaElemento .=			"<input  class = 'span12'  placeholder='Nombre de la Calle' value = '".utf8_decode($row['calle'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 num'>";
		$plantillaElemento .=			"No.:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span3 inputnum'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Número' value = '".utf8_decode($row['numeroexterior'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span3 colonia'>";
		$plantillaElemento .=			"Colonia:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputcolonia  span5'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Nombre de la Colonia' value = '".utf8_decode($row['localidad'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 cp'>";
		$plantillaElemento .=			"C.P.:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputcp span3'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Codigo Postal' value = '".utf8_decode($row['codigopostal'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 ciudad'>";
		$plantillaElemento .=			"Ciudad:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputciudad span5'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Elige la Ciudad'  value = '".utf8_decode($row['municipio'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 estado'>";
		$plantillaElemento .=			"Estado:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputestado span3'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Elige el estado'  value = '".utf8_decode($row['estado'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .="</div>";

		/***<!-- Grupo Contacto-->***/

		$plantillaElemento .="<div class = 'group2'>";
		$plantillaElemento .=	"<div class = 'detalle'> Contacto </div>";
		$plantillaElemento .=		"<div class = 'span2 web'>";
		$plantillaElemento .=			"Pagina Web:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputweb span8'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Sitio oficial de la empresa' value = '".utf8_decode($row['paginaweb'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 teluno'>";
		$plantillaElemento .=			"Tel&eacute;fono(1):";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span5 inputteluno'>";
		$plantillaElemento .=			"<input class = 'span2' placeholder = 'Lada' value = '".utf8_decode($row['lada1'])."' />";
		$plantillaElemento .=			"<input  class = 'span8'  placeholder='Telefono de la empresa' value = '".utf8_decode($row['telefono1'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 extuno'>";
		$plantillaElemento .=			"Ext.:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span3 inputextuno'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder = 'Extencion' value = '".utf8_decode($row['ext1'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span3 teldos'>";
		$plantillaElemento .=			"Tel&eacute;fono(2):";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputteldos  span5'>";
		$plantillaElemento .=			"<input class = 'lada2 span2' placeholder = 'Lada' value = '".utf8_decode($row['lada2'])."' />";
		$plantillaElemento .=			"<input class = 'span8' placeholder='Telefono de la empresa' value = '".utf8_decode($row['telefono2'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span3 extdos'>";
		$plantillaElemento .=			"Ext.:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputextdos span3'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Extencion' value = '".utf8_decode($row['ext2'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 cnt_e'>";
		$plantillaElemento .=			"Contacto de Estadia:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputcnt_e span4'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Nombre del contacto' value = '".utf8_decode($row['contactoestadia'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 e-mailuno'>";
		$plantillaElemento .=			"E-mail:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inpute-mailuno span3'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Correo electronico' value = '".utf8_decode($row['correoestadia'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 cnt_vi'>";
		$plantillaElemento .=			"Contacto de visita Ind.:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputcnt_vi span4'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Nombre del contacto' value = '".utf8_decode($row['contactovisitas'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 e-maildos'>";
		$plantillaElemento .=			"E-mail:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inpute-maildos span3'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Correo electronico' value = '".utf8_decode($row['correovisitas'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .="</div>";

		/***<!-- Grupo de Programas Educativos -->***/

		$plantillaElemento .="<div class = 'group'>";
		$plantillaElemento .=	"<div class = 'detalle'>Programas Educativos</div>";
		$plantillaElemento .=		"<div class = 'pe_1'>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox' />TIC";	
		/*if($row['idcarrera'] = 1){
					$plantillaElemento .=		;
				}else{
					$plantillaElemento .=		".........";
				}*/
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>AYEP";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>EyEI";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>ENERG";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'pe_2'>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>MEC";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>METAL";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>MECATRO";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>GAST";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'pe_3'>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>ACUI";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=			"<div>";
		$plantillaElemento .=				"<input type = 'checkbox'/>TUR";
		$plantillaElemento .=			"</div>";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .="</div>";

		/***<!-- Grupo de competencias a Coadyuvar -->***/

		$plantillaElemento .="<div class = 'group2'>";
		$plantillaElemento .=	"<div class = 'detalle'>Competencias a Coadyuvar</div>";
		$plantillaElemento .=		"<textarea class = 'competencias-carrera'>".utf8_decode($row['competencia_especifica'])."----".utf8_decode($row['carrera'])."</textarea>";
		$plantillaElemento .="</div>";

		/***<!-- Grupo de Observación -->***/

		$plantillaElemento .="<div class = 'group'>";
		$plantillaElemento .=	"<div class = 'detalle'>Observaciones</div>";
		$plantillaElemento .=		"<textarea class = 'observaciones' placeholder = 'Observaciones'>".utf8_decode($row['observaciones'])."</textarea>";
		$plantillaElemento .=	"<div class = 'btn1 span2'>";
		$plantillaElemento .=		"<button>Nueva Observaci&oacute;n</button>";
		$plantillaElemento .=	"</div>";
		$plantillaElemento .=	"<div class = 'btn2 span2'>";
		$plantillaElemento .=		"<button>Obra Observaci&oacute;n</button>";
		$plantillaElemento .=	"</div>";
		$plantillaElemento .="</div>";
		

		// cerrando conexion a base de datos
		close($conexion);
		
		return $plantillaElemento;

	}
?>