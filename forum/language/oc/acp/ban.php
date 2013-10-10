<?php
/** 
*
* acp_ban [Occitan]
*
* @package language
* @version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 heure',
	'30_MINS'		=> '30 minutes',
	'6_HOURS'		=> '6 heures',

	'ACP_BAN_EXPLAIN'	=> 'Ici, vous pouvez contrôler lo bannissement d\'utilizaires per nom, adresse IP o adresse e-mail. Aquestes méthodes empêchent un utilizaire d\'atteindre n\'importe quelle partie del forum. Podètz donner si vous lo souhaitez una courte rason (3000 caractères maximum) al bannissement. Cela serà affiché dins l\'historique de l\'administracion. La durée del bannissement peut également èsser spécifiée. Si vous voulez que lo bannissement termine à una date especific plutôt qu\'après una période de temps, sélectionnez <span estil="text-decoration: underline;">Jusqu\'à -&gt;</span> per la durée del bannissement e entrez una date al format <kbd>AAAA-MM-JJ</kbd>.',

	'BAN_EXCLUDE'			=> 'Exclure del bannissement',
	'BAN_LENGTH'			=> 'Durée del bannissement',
	'BAN_REASON'			=> 'Raison del bannissement',
	'BAN_GIVE_REASON'		=> 'Raison affichée del bannissement',
	'BAN_UPDATE_SUCCESSFUL'	=> 'La liste dels bannissements a été mise à jour.',

	'EMAIL_BAN'					=> 'Fòrabandir una o plusieurs adreças e-mails',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Si activé, permet d\'exclure de toutes les interdictions courantes les adreças e-mails renseignées.',
	'EMAIL_BAN_EXPLAIN'			=> 'Pour spécifier plus d\'una adresse e-mail, entrez chacune d\'elles sur una nouvelle linha. Pour efectuar una interdiction sur una partie del nom, utilisez * coma caractère joker, per exemple: *@hotmail.com, *@*.domain.tld, etc.',
	'EMAIL_NO_BANNED'			=> 'Aucune adresse e-mail bannie',
	'EMAIL_UNBAN'				=> 'Débannir o ne plus exclure dels adreças e-mails',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Podètz débannir (o ne plus exclure) plusieurs adreças e-mails d\'un coup en utilisant la combinaison de touches appropriée amb vòstre clavier e vòstre souris. Les adreças e-mails exclues sont grisées e en gras.',

	'IP_BAN'					=> 'Fòrabandir una o plusieurs adreças IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Si activé, permet d\'exclure de toutes les interdictions courantes les adreças IP renseignées.',
	'IP_BAN_EXPLAIN'			=> 'Pour spécifier plusieurs adreças IP o noms d\'òstes différents, entrez chacun d\'eux sur una nouvelle linha. Pour spécifier un rang d\'adreças IP, séparez lo début e la fin per un tiret, e utilisez * coma caractère joker.',
	'IP_HOSTNAME'				=> 'Adreças IP o noms d\'òstes',
	'IP_NO_BANNED'				=> 'Aucune adresse IP bannie',
	'IP_UNBAN'					=> 'Débannir o ne plus exclure dels adreças IP',
	'IP_UNBAN_EXPLAIN'			=> 'Podètz débannir (o ne plus exclure) plusieurs adreças IP d\'un coup en utilisant la combinaison de touches appropriée amb vòstre clavier e vòstre souris. Les adreças IP exclues sont grisées e en gras.',

	'LENGTH_BAN_INVALID'		=> 'La date indiquée doit èsser al format <kbd>AAAA-MM-JJ</kbd>.',

	'PERMANENT'		=> 'Permanent',
	
	'UNTIL'						=> 'Jusqu\'à',
	'USER_BAN'					=> 'Fòrabandir un o plusieurs noms d\'utilizaires',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Si activé, permet d\'exclure de toutes les interdictions courantes les noms d\'utilizaires renseignés.',
	'USER_BAN_EXPLAIN'			=> 'Podètz bannir plusieurs utilizaires en una fois en entrant chaque nom sur una nouvelle linha. Utilisez la fonction <span estil="text-decoration: underline;">Rechercher un membre</span> per apondre un o plusieurs utilizaires automatiquement.',
	'USER_NO_BANNED'			=> 'Aucun nom d\'utilizaire banni',
	'USER_UNBAN'				=> 'Débannir o ne plus exclure dels noms d\'utilizaires',
	'USER_UNBAN_EXPLAIN'		=> 'Podètz débannir (o ne plus exclure) plusieurs noms d\'utilizaires d\'un coup, en utilisant la combinaison de touches appropriée amb vòstre clavier e vòstre souris. Les noms d\'utilizaires exclus sont grisés e en gras.',
	

));

 ?>
