<?php
/**
*
* acp_email [Catalan (Valencian)]
*
* @package language
* @version $Id: common.php,v 1.180 2007/05/20 14:01:46 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translated by//Traduït per Pau Iranzo <pau@somgnu.cat>
* Team//Equip de traducció de SomGNU <info@somgnu.cat>
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Ací podeu enviar un missatge de correu a tots els usuaris del fòrum o bé a tots els usuaris d\'un grup concret que <strong>tinguen activada l\'opció de rebre missatges de correu massius</strong>. Per fer això, un correu serà enviat a l\'adreça que cada usuari va introduir al seu registre. Les opcions per defecte només permeten 50 destinataris per cada correu que envieu, és a dir, per cada 50 usuaris es tornarà a enviar una altra vegada el correu com si fora una nova operació (això vosaltres no ho veieu). Així que, si voleu enviar un mail a un grup gran de gent, el procés trigarà una mica més. Quan el procés acabe, sereu informats.',
	'ALL_USERS'						=> 'Tots els usuaris',

	'COMPOSE'				=> 'Redacta',

	'EMAIL_SEND_ERROR'		=> 'S\'han detectat errors mentre s\'enviava el correu. Mireu el %sRegistre%s per a més detalls de l\'error.',
	'EMAIL_SENT'			=> 'S\'ha enviat aquest missatge.',
	'EMAIL_SENT_QUEUE'		=> 'Aquest missatge s\'ha posat a la cua per ser enviat.',

	'LOG_SESSION'			=> 'Log mail session to critical log',

	'SEND_IMMEDIATELY'		=> 'Envia immediatament',
	'SEND_TO_GROUP'			=> 'Envia al grup',
	'SEND_TO_USERS'			=> 'Envia als usuaris',
	'SEND_TO_USERS_EXPLAIN'	=> 'Si introduïu noms ací, el grup seleccionat dalt serà ignorat. Introduïu cada nom d\'usuari a una nova línia.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioritat',
	'MASS_MESSAGE'			=> 'Missatge',
	'MASS_MESSAGE_EXPLAIN'	=> 'Només heu d\'introduir text pla. Les marques especials s\'esborraran abans de l\'enviament.',
	
	'NO_EMAIL_MESSAGE'		=> 'Heu d\'introduir un missatge.',
	'NO_EMAIL_SUBJECT'		=> 'Heu d\'especificar un assumpte per al missatge.',
));

?>
