<?php
/**
*
* memberlist [Catalan (Valencian)]
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Perfil',
	'ACTIVE_IN_FORUM'		=> 'Fòrum més actiu',
	'ACTIVE_IN_TOPIC'		=> 'Tema més actiu',
	'ADD_FOE'				=> 'Afegeix enemic',
	'ADD_FRIEND'			=> 'Afegeix amic',
	'AFTER'					=> 'Després',

	'ALL'					=> 'Tot',

	'BEFORE'				=> 'Abans',

	'CC_EMAIL'				=> 'Envia\'m una còpia d\'això.',
	'CONTACT_USER'			=> 'Contacte',

	'DEST_LANG'				=> 'Llengua',
	'DEST_LANG_EXPLAIN'		=> 'Sel·leccioneu el llenguatge apropiat (si està disponible) per al destinatari del missatge.',

	'EMAIL_BODY_EXPLAIN'	=> 'El missatge s\'enviarà com a text pla, sense incloure HTML ni BBCode. The return address for this message will be set to your e-mail address.',
	'EMAIL_DISABLED'		=> 'Les funcions relacionades amb aquest e-mail s\'han desactivat.',
	'EMAIL_SENT'			=> 'S\'ha enviat l\'email.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'El missatge s\'enviarà com a text pla, sense incloure HTML ni BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your e-mail address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Heu d\'introduir una adreça de correu vàlida per al destinatari.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Heu d\'introduir un missatge per tal de que siga enviat.',
	'EMPTY_MESSAGE_IM'		=> 'Heu d\'introduir un missatge.',
	'EMPTY_NAME_EMAIL'		=> 'Heu d\'introduir el nom real del destinatari.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Heu d\'especificar un assumpte per al missatge.',
	'EQUAL_TO'				=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Feu servir aquest formulari per cercar a membres concrets. No cal que ompliu tots els camps. En cas de que no conegueu el nom exacte, podeu fer servir *. Si introduïu una data, feu servir el format següent: <kbd>YYYY-MM-DD</kbd>, ex. <samp>2004-02-29</samp>. Feu servir les caselles de sel·lecció per sel·leccionar un o més usuaris i després heu de fer clic el botó "Sel·lecciona marcats" per tornar al formulari anterior.',
	'FLOOD_EMAIL_LIMIT'		=> 'No podeu enviar un altre correu ara mateix. Torneu-ho a provar més tard.',

	'GROUP_LEADER'			=> 'Líder del grup',

	'HIDE_MEMBER_SEARCH'	=> 'Amaga cerca de membres',

	'IM_ADD_CONTACT'		=> 'Afegeix Contacte',
	'IM_AIM'				=> 'Necessiteu el missatger instantani d\'AOL per fer servir això.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Descarrega aplicació',
	'IM_ICQ'				=> 'Potser alguns dels usuaris que heu sel·leccionat tenen habilitada la funció de rebre missatges de no sol·licitats.',
	'IM_JABBER'				=> 'Potser alguns dels usuaris que heu sel·leccionat tenen habilitada la funció de rebre missatges de no sol·licitats.',
	'IM_JABBER_SUBJECT'		=> 'Aquest és un missatge automàtic, no heu de respondre. Missatge de l\'usuari %1$s el %2$s.',
	'IM_MESSAGE'			=> 'El vostre missatge',
	'IM_MSNM'				=> 'Heu de tindre instal·lat el missatger instantani de Windows per poder fer servir això.',
	'IM_MSNM_BROWSER'		=> 'El vostre navegador no suporta això.',
	'IM_MSNM_CONNECT'		=> 'MSNM no està connectat.\nHeu de connectar-vos a MSNM per continuar.',		
	'IM_NAME'				=> 'El vostre nom',
	'IM_NO_DATA'			=> 'No hi ha informació de contacte adient per aquest usuari.',
	'IM_NO_JABBER'			=> 'La missatgeria amb Jabber no està suportada per aquest servidor. Necessitareu tindre un client Jabber instal·lat al vostre ordinador per contactar amb el destinatari.',
	'IM_RECIPIENT'			=> 'Destinatari',
	'IM_SEND'				=> 'Envia el missatge',
	'IM_SEND_MESSAGE'		=> 'Envia el missatge',
	'IM_SENT_JABBER'		=> 'El vostre missatge per %1$s s\'ha enviat.',
	'IM_USER'				=> 'Envia un missatge instantani',
	
	'LAST_ACTIVE'				=> 'Darrera participació',
	'LESS_THAN'					=> 'Menys que',
	'LIST_USER'					=> '1 usuari',
	'LIST_USERS'				=> '%d usuaris',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Heu d\'estar registrats per poder veure la llista de membres de l\'equip.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Heu d\'estar registrats per poder veure la llista de membres.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Heu d\'estar registrats per poder cercar usuaris.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Heu d\'estar registrats per poder veure perfils.',

	'MORE_THAN'				=> 'Més que',

	'NO_EMAIL'				=> 'No esteu autoritzats a enviar correus a aquest usuari.',
	'NO_VIEW_USERS'			=> 'No esteu autoritzats a veure la llista de membres o perfils.',

	'ORDER'					=> 'Ordre',
	'OTHER'					=> 'Altre',

	'POST_IP'				=> 'Escrit des de IP/domini',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Nom del destinatari',
	'RECIPIENT'				=> 'Destinatari',
	'REMOVE_FOE'			=> 'Elimina enemic',
	'REMOVE_FRIEND'			=> 'Elimina amic',

	'SEARCH_USER_POSTS'		=> 'Cerca els missatges de l\'usuari',
	'SELECT_MARKED'			=> 'Sel·lecciona marcats',
	'SELECT_SORT_METHOD'	=> 'Sel·leccioneu el mode de visualització',
	'SEND_AIM_MESSAGE'		=> 'Envia un missatge AIM',
	'SEND_ICQ_MESSAGE'		=> 'Envia un missatge ICQ',
	'SEND_IM'				=> 'Missatgeria instantània',
	'SEND_JABBER_MESSAGE'	=> 'Envia un missatge Jabber',
	'SEND_MESSAGE'			=> 'Missatge',
	'SEND_MSNM_MESSAGE'		=> 'Envia un missatge MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Envia un missatge YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Darrera participació',
	'SORT_POST_COUNT'		=> 'Recompte de missatges',

	'USERNAME_BEGINS_WITH'	=> 'El nom d\'usuari comença per',
	'USER_ADMIN'			=> 'Administra usuari',
	'USER_BAN'				=> 'Baneig',
	'USER_FORUM'			=> 'Estadístiques de l\'usuari',
	'USER_ONLINE'			=> 'En línia',
	'USER_PRESENCE'			=> 'Presència al fòrum',

	'VIEWING_PROFILE'		=> 'S\'està veient el perfil - %s',
	'VISITED'				=> 'Darrera visita',

	'WWW'					=> 'Lloc web',
));

?>
