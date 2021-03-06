<?php
/**
*
* acp_ban [French]
*
* @package language
* @version $Id: ban.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

//
// TRANSLATION DETAILS
//
// Author: Xaphos (Maël Soucaze)
// Website: http://www.phpbb.fr/
//
// TRANSLATION LICENSE
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, version 2 of the License.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see http://opensource.org/licenses/gpl-license.php.
//
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
//

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 heure',
	'30_MINS'		=> '30 minutes',
	'6_HOURS'		=> '6 heures',

	'ACP_BAN_EXPLAIN'	=> 'Vous pouvez contrôler ici le bannissement d’utilisateurs par nom, adresse IP ou adresse e-mail. Ces différentes méthodes empêchent qu’un utilisateur indésirable puisse participer à l’ensemble de votre forum. Si vous le souhaitez, vous pouvez fournir une courte raison (3000 caractères maximum) qui sera affichée à l’utilisateur banni. Cela sera affiché dans l’historique des administrateurs. La durée du bannissement peut également être spécifiée. Si vous souhaitez que le bannissement termine à une date spécifique plutôt qu’après une certaine période de temps, sélectionnez <span style="text-decoration: underline;">Jusqu’à -&gt;</span> pour la durée du bannissement et saisissez une date au format <kbd>AAAA-MM-JJ</kbd>.',

	'BAN_EXCLUDE'			=> 'Exclure du bannissement',
	'BAN_LENGTH'			=> 'Durée du bannissement',
	'BAN_REASON'			=> 'Raison du bannissement',
	'BAN_GIVE_REASON'		=> 'Raison affichée à l’utilisateur banni',
	'BAN_UPDATE_SUCCESSFUL'	=> 'La liste des bannissements a été mise à jour avec succès.',

	'EMAIL_BAN'					=> 'Bannir une ou plusieurs adresses e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Activez ceci pour exclure les adresses e-mail spécifiées de tous les bannissements actuels.',
	'EMAIL_BAN_EXPLAIN'			=> 'Pour spécifier plusieurs adresses e-mail, saisissez chacune d’elles sur une nouvelle ligne. Pour utiliser partiellement des adresses, utilisez * comme joker, comme <samp>*@hotmail.com</samp>, <samp>*@*.domaine.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Aucune adresse e-mail n’a été bannie',
	'EMAIL_UNBAN'				=> 'Exclure les e-mail du bannissement',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Vous pouvez exclure plusieurs adresses e-mail du bannissement en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de notre navigateur. Les adresses e-mail exclues sont grisées.',

	'IP_BAN'					=> 'Bannir une ou plusieurs IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Activez ceci pour exclure les adresses IP spécifiées de tous les bannissements actuels.',
	'IP_BAN_EXPLAIN'			=> 'Pour spécifier plusieurs adresses IP ou noms d’hôtes, saisissez chacun d’eux sur une nouvelle ligne. Pour spécifier une plage d’adresses IP, séparez le début et la fin par un tiret (-) et pour spécifier un joker, utilisez “*”.',
	'IP_HOSTNAME'				=> 'Adresses IP ou noms d’hôtes',
	'IP_NO_BANNED'				=> 'Aucune adresse IP n’a été bannie',
	'IP_UNBAN'					=> 'Exclure les IP du bannissement',
	'IP_UNBAN_EXPLAIN'			=> 'Vous pouvez exclure plusieurs adresses IP du bannissement en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de notre navigateur. Les adresses IP exclues sont grisées.',

	'LENGTH_BAN_INVALID'		=> 'La date doit être au format <kbd>AAAA-MM-JJ</kbd>.',

	'PERMANENT'		=> 'Permanent',
	
	'UNTIL'						=> 'Jusqu’à',
	'USER_BAN'					=> 'Bannir un ou plusieurs noms d’utilisateurs',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Activez ceci pour exclure les utilisateurs spécifiés de tous les bannissements actuels.',
	'USER_BAN_EXPLAIN'			=> 'Pour spécifier plusieurs utilisateurs, saisissez chacun d’eux sur une nouvelle ligne. Utilisez la fonction <span style="text-decoration: underline;">Trouver un membre</span> afin de rechercher et d’ajouter automatiquement un ou plusieurs utilisateurs.',
	'USER_NO_BANNED'			=> 'Aucun nom d’utilisateur n’a été banni',
	'USER_UNBAN'				=> 'Exclure les noms d’utilisateurs',
	'USER_UNBAN_EXPLAIN'		=> 'Vous pouvez exclure plusieurs utilisateurs du bannissement en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de notre navigateur. Les utilisateurs exclus sont grisés.',
	

));

?>
