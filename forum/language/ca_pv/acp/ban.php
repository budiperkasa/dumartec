<?php
/**
*
* acp_ban [Catalan (Valencian)]
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 hora',
	'30_MINS'		=> '30 minuts',
	'6_HOURS'		=> '6 hores',

	'ACP_BAN_EXPLAIN'	=> 'Ací podeu controlar el bandeig d\'usuaris mitjançant el seu nom, IP o adreça de correu. Si voleu, podeu donar una raó per cada bandeig (com a màxim 3000 caràcters). Aquesta raó es mostrarà al registre d\'administradors. A més, la duració del bandeig pot fixar-se. Si voleu que el bandeig acabe a una data determinada podeu seleccionar <span style="text-decoration: underline;">Fins -&gt;</span> per a la duració del bandeig o bé introduir una data concreta <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Exclou del bandeig',
	'BAN_LENGTH'			=> 'Duració del bandeig',
	'BAN_REASON'			=> 'Raó del bandeig',
	'BAN_GIVE_REASON'		=> 'Raó provada del bandeig',
	'BAN_UPDATE_SUCCESSFUL'	=> 'The banlist has been updated successfully.',

	'EMAIL_BAN'					=> 'Bandeja una o més adreces de correu',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Habilita això per excloure les adreces de correu dels bandejos actuals.',
	'EMAIL_BAN_EXPLAIN'			=> 'Per especificar més d\'una adreça de correu, introduïu cada adreça a una nova línia. Per cercar adreces parcials, feu servir *, p.e. <samp>*@gmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'No hi ha cap adreça de correu bandejada',
	'EMAIL_UNBAN'				=> 'Desbandeja o exclou adreces de correu',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Podeu desbandejar (o excloure) vàries adreces de correu en una de sola fent servir la combinació adequada del ratolí i teclat (prement la tecla ctrl). Les adreces de correu excloses es mostren marcades.',

	'IP_BAN'					=> 'Bandeja una o més IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Habilita això per excloure la IP introduida de les bandejades actualment.',
	'IP_BAN_EXPLAIN'			=> 'Per especificar diferents IPs o nomsdehost, introduïu cada una a una nova línia. Per esfecificar un rang d\'IPs, separeu la d\'inici i final amb un guionet (-).',
	'IP_HOSTNAME'				=> 'Adreces IP o nomsdehost',
	'IP_NO_BANNED'				=> 'No hi ha cap adreça IP badejada',
	'IP_UNBAN'					=> 'Desbandeja o exclou IPs',
	'IP_UNBAN_EXPLAIN'			=> 'Podeu desbandejar (o excloure) vàries IP en una de sola fent servir la combinació adequada del ratolí i teclat (prement la tecla ctrl). Les IP excloses es mostren marcades.',

	'LENGTH_BAN_INVALID'		=> 'La data s\'ha d\'escriure amb el següent format <kbd>AAAA-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanent',
	
	'UNTIL'						=> 'Fins',
	'USER_BAN'					=> 'Bandeja un o més noms d\'usuari',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Habilita això per excloure els usuaris introduits dels bandejats actualment.',
	'USER_BAN_EXPLAIN'			=> 'Podeu bandejar varis usuaris en un de sol introduint cada nom en una nova línia. Feu servir <span style="text-decoration: underline;">Cerca un usuari</span> per cercar-ne i afegir-los automàticament.',
	'USER_NO_BANNED'			=> 'No hi ha cap nom d\'usuari bandejat',
	'USER_UNBAN'				=> 'Desbandeja o exclou noms d\'usuari',
	'USER_UNBAN_EXPLAIN'		=> 'Podeu desbandejar (o excloure) varis usuaris en un de sol fent servir la combinació adequada del ratolí i teclat (prement la tecla ctrl). Els noms d\'usuari exclosos es mostren marcats.',
	

));

?>
