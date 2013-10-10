<?php
/** 
*
* acp_email [Occitan]
*
* @package language
* @version $Id: email.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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

	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Ici, vous pouvez envoyer un e-mail à tous vos utilizaires o à tous les membres d\'un grop especific. Pour cela, un e-mail serà envoyé via l\'adresse administrative, amb tous les destinataires en copie cachée. Si vous envoyez lo messatge à un grand grop de personnes, merci de patienter après avoir validé e de ne pas arrêter la page lors del traitement. Il est normal qu\'un envoi de masse prenne del temps, vous aurez una notification quand lo script aura terminé.',
	'ALL_USERS'						=> 'Tous les utilizaires',
	
	'COMPOSE'				=> 'Escriure',

	'EMAIL_SEND_ERROR'		=> 'I a aguda una error lors de l\'envoi de l\'e-mail. Merci de consulter lo %sJournal d\'erreurs%s per un messatge plus détaillé.',
	'EMAIL_SENT'			=> 'Vòstre messatge es estat enviat.',
	'EMAIL_SENT_QUEUE'		=> 'Vòstre messatge a été mes en attente per l\'envoi.',

	'LOG_SESSION'			=> 'Enregistre la sesilha mail dins les journaux d\'erreurs critiques',

	'SEND_IMMEDIATELY'		=> 'Enviar immédiatement',
	'SEND_TO_GROUP'			=> 'Enviar al grop',
	'SEND_TO_USERS'			=> 'Enviar als utilizaires',
	'SEND_TO_USERS_EXPLAIN'	=> 'Entrer dels noms ici écrasera tout grop seleccionat ci-dessus. Entrez chaque nom d\'utilizaire sur una linha différente.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Haute',
	'MAIL_LOW_PRIORITY'		=> 'Basse',
	'MAIL_NORMAL_PRIORITY'	=> 'Normale',
	'MAIL_PRIORITY'			=> 'Priorité del mail',
	'MASS_MESSAGE'			=> 'Vòstre messatge',
	'MASS_MESSAGE_EXPLAIN'	=> 'Notez que vous ne pouvez botar que del tèxt brut. Toutes les balises seront supprimées avant l\'envoi.',
	
	'NO_EMAIL_MESSAGE'		=> 'Debètz entrer un messatge.',
	'NO_EMAIL_SUBJECT'		=> 'Debètz spécifier un tèma per vòstre messatge.',
));

 ?>
