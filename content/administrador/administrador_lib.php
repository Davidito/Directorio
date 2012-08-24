<?php
	include "../../lib/librerias.php";
	
	function generaDatosHtml(){
		
		//if(!verificarSesionDelUsuario()){ return; }; //IMPORTANTE: verifica la sesion del usuario

		$conexion = getConnection();
		mysql_query("SET NAMES UTF8");
		/* SQL */
		$sqlEmpresa = "";
		$sqlEmpresa.= "SELECT ";
		$sqlEmpresa.= 			"a.idempresa as numero, ";
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
		$sqlEmpresa.= 			"a.ext2 as ext2 ";
		$sqlEmpresa.= "FROM ";
		$sqlEmpresa.= 			"gral_empresas a, ";
		$sqlEmpresa.= 			"gral_tamano_empresas b, ";
		$sqlEmpresa.=			"gral_giro_empresas c, ";
		$sqlEmpresa.=			"gral_localidades d, ";
		$sqlEmpresa.=			"gral_municipios e, ";
		$sqlEmpresa.=			"gral_estados f ";
		$sqlEmpresa.= "WHERE ";
		$sqlEmpresa.= 			"a.idgiro = c.idgiro ";
		$sqlEmpresa.= 			"AND a.idtamano = b.idtamano ";
		$sqlEmpresa.= 			"AND a.idlocalidad = d.idlocalidad ";
		$sqlEmpresa.=			"AND a.idmunicipio = e.idmunicipio ";
		$sqlEmpresa.=			"AND a.idestado = f.idestado ";
		$sqlEmpresa.=			"AND idempresa = '000648'";

		$resultSetGetDatos = mysql_query($sqlEmpresa);
		$row = mysql_fetch_array($resultSetGetDatos);
		
		$plantillaElemento = "";
		/*Grupo Empresa*/
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
		$plantillaElemento .=			"<input class = 'span12' placeholder='Clave de empresa' value = '".utf8_decode($row['numero'])."' />";
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
		$plantillaElemento .=			"<input class = 'span12' type= 'combobox' placeholder='Elige el sector' value = '".utf8_decode($row['giro'])."'  />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 tamano'>";
		$plantillaElemento .=			"Tama&ntildeo:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputtamano span3'>";
		$plantillaElemento .=			"<input class = 'span12' type= 'combobox' placeholder='Elige el tama&ntildeo' value = '".utf8_decode($row['tamano'])."' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .="</div>";
		
		/* Grupo Dirección de la empresa */
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

		/* Grupo Contacto */
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
		$plantillaElemento .=			"<input class = 'span12' placeholder='Nombre del contacto' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 e-mailuno'>";
		$plantillaElemento .=			"E-mail:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inpute-mailuno span3'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Correo electronico' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 cnt_vi'>";
		$plantillaElemento .=			"Contacto de visita Ind.:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inputcnt_vi span4'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Nombre del contacto' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'span2 e-maildos'>";
		$plantillaElemento .=			"E-mail:";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .=		"<div class = 'inpute-maildos span3'>";
		$plantillaElemento .=			"<input class = 'span12' placeholder='Correo electronico' />";
		$plantillaElemento .=		"</div>";
		$plantillaElemento .="</div>";
		

		// cerrando conexion a base de datos
		close($conexion);
		
		return $plantillaElemento;

	}
?>