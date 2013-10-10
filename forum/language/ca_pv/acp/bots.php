<?php
/**
*
* acp_bots [Catalan (Valencian)]
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Gestiona bots',
	'BOTS_EXPLAIN'		=> '“Bots”, “spiders” o “crawlers” són agents automàtics que fan servir els cercadors per actualitzar les seues bases de dedes. Aquests agents poden distorsionar el contatge de visitants, incrementar el tràfic o altres contratemps. Ací podeu definir aquests tipus d\'usuaris especials per tal de gestionar aquest tipus de problemes.',
	'BOT_ACTIVATE'		=> 'Activa',
	'BOT_ACTIVE'		=> 'Bot actiu',
	'BOT_ADD'			=> 'Afegir bot',
	'BOT_ADDED'			=> 'S\'ha afegit un nou bot.',
	'BOT_AGENT'			=> 'Agent match',
	'BOT_AGENT_EXPLAIN'	=> 'Cerca per cadenes, es permeten cerques parcials.',
	'BOT_DEACTIVATE'	=> 'Desactiva',
	'BOT_DELETED'		=> 'S\'ha esborrat el bot.',
	'BOT_EDIT'			=> 'Edita bots',
	'BOT_EDIT_EXPLAIN'	=> 'Ací podeu afegir o editar els bots existents. Aneu amb compte quan definiu agents de cerca o adreces. A més, heu d\'especificar un estil i llengua del bot. Això us permetrà reduir l\'ample de banda que fan servir aquests bots (per exemple assignant-los un estil del fòrum senzill). Recordeu donar-los els permisos adequats per al grup especial Bot.',
	'BOT_LANG'			=> 'Llengua del bot',
	'BOT_LANG_EXPLAIN'	=> 'El llenguatge que es presenta al bot quan navega.',
	'BOT_LAST_VISIT'	=> 'Darrera visita',
	'BOT_IP'			=> 'Adreça IP del bot',
	'BOT_IP_EXPLAIN'	=> 'Es permeten cerques parcials, separeu les adreces amb una coma.',
	'BOT_NAME'			=> 'Nom del bot',
	'BOT_NAME_EXPLAIN'	=> 'Fet servir només per a la vostra informació.',
	'BOT_NAME_TAKEN'	=> 'El nom ja es troba en ús al fòrum i no pot fer-se servir per a un bot.',
	'BOT_NEVER'			=> 'Mai',
	'BOT_STYLE'			=> 'Estil del bot',
	'BOT_STYLE_EXPLAIN'	=> 'L\'estil fet servir pel bot al fòrum.',
	'BOT_UPDATED'		=> 'S\'ha actualitzat el bot.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'El bot que heu provist és semblant a un que ja s\'està fent servir. Adjusteu l\'agent per a aquest bot.',
	'ERR_BOT_NO_IP'				=> 'Les adreces IP o nomdehosts que heu provist no són vàlides o no es poden determinar.',
	'ERR_BOT_NO_MATCHES'		=> 'Heu de proveir almenys un agent o IP per a aquest bot.',

	'NO_BOT'		=> 'No s\'ha trobat cap bot amb la ID especificada.',
	'NO_BOT_GROUP'	=> 'Habilita cerca al grup especial bot.',
));

?>
