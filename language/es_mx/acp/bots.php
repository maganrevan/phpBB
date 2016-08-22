<?php
/** 
*
* acp_bots.php [Mexican Spanish]
*
* @package language
* @version $Id$
* @copyright (c) 2007 phpBB Group.
* @author 2013-7-13 - Traducido por cisco007 for phpbbmexico.com.
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) 
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Administrar robots',
	'BOTS_EXPLAIN'		=> 'Robots o Spiders son agentes automatizados, en su mayoría utilizados por los buscadores, para actualizar tus bases de datos. Ya que raramente hacen un uso apropiado de las sesiones pueden alterar los contadores de visitas, incrementar la carga y a veces indexar sitios incorrectamente. Aquí puedes definir un tipo especial de usuario para sobrellevar esos problemas.',
	'BOT_ACTIVATE'		=> 'Activar',
	'BOT_ACTIVE'		=> 'Robot activo',
	'BOT_ADD'			=> 'Añadir robot',
	'BOT_ADDED'			=> 'Nuevo robot añadido correctamente.',
	'BOT_AGENT'			=> 'Coincidir',
	'BOT_AGENT_EXPLAIN'	=> 'Palabra coincidente con el nombre del robot, se permiten coincidencias parciales.',
	'BOT_DEACTIVATE'	=> 'Desactivar',
	'BOT_DELETED'		=> 'Robot borrado correctamente.',
	'BOT_EDIT'			=> 'Editar robots',
	'BOT_EDIT_EXPLAIN'	=> 'Aquí puede añadir o editar un robot existente. Puede definir un nombre y/o una o más direcciones de IP (o rango de direcciones) que coincidan. Házlo con cuidado. También puedes especificar un estilo y un idioma con los cuales el robot "verá" el Sitio. Puede ayudarte a reducir ancho de banda establecer un estilo simple para robots. Recuerda establecer los permisos apropiados para el grupo Robots.',
	'BOT_LANG'			=> 'Idioma para el robot',
	'BOT_LANG_EXPLAIN'	=> 'Idioma presentado al robot mientras navega.',
	'BOT_LAST_VISIT'	=> 'Última visita',
	'BOT_IP'			=> 'Dirección de IP del robot',
	'BOT_IP_EXPLAIN'	=> 'Se permiten coincidencias parciales. Separa las direcciones con una coma.',
	'BOT_NAME'			=> 'Nombre del robot',
	'BOT_NAME_EXPLAIN'	=> 'Solo se emplea como información interna.',
	'BOT_NAME_TAKEN'	=> 'El nombre ya está en uso en el foro y no puede ser usado para el Robot.',
	'BOT_NEVER'			=> 'Nunca',
	'BOT_STYLE'			=> 'Estilo para el robot',
	'BOT_STYLE_EXPLAIN'	=> 'El estilo en que el robot "verá" en el Foro.',
	'BOT_UPDATED'		=> 'Robot actualizado correctamente.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'La palabra coincidente que proporcionaste es similar a una que ya estás usando. Por favor cámbiala.',
	'ERR_BOT_NO_IP'				=> 'La dirección de IP que proporcionaste es inválida o no se puede resolver el nombre del host.',
	'ERR_BOT_NO_MATCHES'		=> 'Tienes que proporcionar al menos una palabra o IP que coincidan con este robot.',

	'NO_BOT'				=> 'No se encontró ningún robot con el ID especificado.',
	'NO_BOT_GROUP'			=> 'No se puede encontrar el grupo Robots.',
));

?>