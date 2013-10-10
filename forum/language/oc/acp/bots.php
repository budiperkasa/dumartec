<?php
/**
*
* acp_bots [Occitan]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Gestion dels robots',
	'BOTS_EXPLAIN'		=> 'Les "robots" o "aspirateurs" sont dels agents automatisés lo plus souvent utilisés per les moteurs de recherches per botar à jour lors bases de données. Etant balhat que ceux-ci font rarement una utilisation appropriée dels sessions, ils peuvent fausser lo compteur de visiteurs, augmenter la charge del servidor e parfois ne pas indexer correctement les sites. Ici, vous pouvez définir un type especial d\'utilizaires afin de résoudre aquestes problèmes.',
	'BOT_ACTIVATE'		=> 'Activar',
	'BOT_ACTIVE'		=> 'Robot actif',
	'BOT_ADD'			=> 'Apondre un robot',
	'BOT_ADDED'			=> 'Nouveau robot ajouté.',
	'BOT_AGENT'			=> 'Agent correspondant',
	'BOT_AGENT_EXPLAIN'	=> 'Une chaîne de caractères correspondante à l\'agent del robot, les correspondances partielles sont autorizadas.',
	'BOT_DEACTIVATE'	=> 'Desactivar',
	'BOT_DELETED'		=> 'Robot supprimé.',
	'BOT_EDIT'			=> 'Editer les robots',
	'BOT_EDIT_EXPLAIN'	=>  'Cette page vous permet d\'éditer un robot existant o d\'en apondre un nouveau. Podètz définir una chaîne de caractères per l\'agent e/o una o plusieurs adreças IP (o una série d\'adreças) correspondantes. Faites attention en définissant la chaîne de caractères correspondants à l\'agent o als adreças. Podètz également indicar un estil e una langue que lo robot visualisera lorsqu\'il serà sul forum. Cela peut vous permettre de réduire la bande passante utilisée en configurant un estil simple per les robots. N\'oubliez pas de botar les permissions appropriées al grop d\'utilizaires especial robot.',
	'BOT_LANG'			=> 'Langue del robot',
	'BOT_LANG_EXPLAIN'	=> 'Langue présentée al robot lors de son passage.',
	'BOT_LAST_VISIT'	=> 'Dernière visite',
	'BOT_IP'			=> 'Adreça IP del robot',
	'BOT_IP_EXPLAIN'	=> 'Les correspondances partielles sont autorizadas, séparez les adreças per una virgule.',
	'BOT_NAME'			=> 'Nom del robot',
	'BOT_NAME_EXPLAIN'	=> 'Utilisé uniquement per information.',
	'BOT_NAME_TAKEN'	=> 'Ce nom est déjà utilisé sur vòstre forum e ne peut èsser utilisé per lo robot.',
	'BOT_NEVER'			=> 'Jamais',
	'BOT_STYLE'			=> 'Style del robot',
	'BOT_STYLE_EXPLAIN'	=> 'Lo estil utilisé per lo robot sul forum.',
	'BOT_UPDATED'		=> 'Robot mes à jour.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'L\'agent del robot indiqué est identique à celui que vous utilisez actuellement. Fournissez un autre agent per aqueste robot.',
	'ERR_BOT_NO_IP'				=> 'Les adreças IP que vous avez fournies sont invalides o lo nom de domaine ne peut pas èsser résolu.',
	'ERR_BOT_NO_MATCHES'		=> 'Debètz fournir al mens un agent o una IP per correspondre à aqueste robot.',

	'NO_BOT'		=> 'Il n\'y a pas de robot amb cette ID.',
	'NO_BOT_GROUP'	=> 'Impossible de trouver lo grop especial del robot.',
));

 ?>
