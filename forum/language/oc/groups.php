<?php
/** 
*
* groups [Occitan]
*
* @package language
* @version $Id : groups.php,v 1.22 2007/10/04 15 :07 :24 acydburn Exp $
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
// 'Pagina %s of %s' you can (and should) write 'Pagina %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Messatge %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
   'ALREADY_DEFAULT_GROUP'   => 'Lo grop seleccionat es ja vòstre grop per defaut.',
   'ALREADY_IN_GROUP' => 'Vous êtes ja sòci del grop seleccionat.',
   'ALREADY_IN_GROUP_PENDING'   => 'Vous avez ja demandat a rejoindre lo grop causit.',

   'CANNOT_JOIN_GROUP'			=> 'Vos podètz pas inscriure a-n aqueste grop. Vos podètz pas inscriure qu\'a de grops dobèrts e liurament dobèrts.',
   'CANNOT_RESIGN_GROUP'		=> 'Vos podètz pas desinscriure a-n aqueste grop. Vos podètz pas desinscriure qu\'a de grops dobèrts e liurament dobèrts.',
   
   'CHANGED_DEFAULT_GROUP'   => 'Lo grop per defaut es estat modificat.',
   
   'GROUP_AVATAR' => 'Avatar del grop',
   'GROUP_CHANGE_DEFAULT' => 'Sètz segur que volètz cambiar vòstre grop per defaut per "%s" ?',
   'GROUP_CLOSED' => 'Fermé',
   'GROUP_DESC' => 'Descripcion del grop',
   'GROUP_HIDDEN' => 'Invisible',
   'GROUP_INFORMATION' => 'Entresenha sul grop',
   'GROUP_IS_CLOSED' => 'Es un grop fermé, aucun nouveau sòci pòt èsser apondut.',
   'GROUP_IS_FREE' => 'Es un grop libre e ouvert, chaque utilizaire pòt en devenir sòci.',
   'GROUP_IS_HIDDEN' => 'Es un grop amagat, seuls los sòcis d\'aqueste grop pòdon en veire los entresenhas.',
   'GROUP_IS_OPEN' => 'Es un grop ouvert, mas l\'utilizaire deu far una demanda per en devenir sòci.',
   'GROUP_IS_SPECIAL' => 'Es un grop especial, los grops especials son gerits per los administrators.',
   'GROUP_JOIN' => 'Rejoindre lo grop',
   'GROUP_JOIN_CONFIRM' => 'Sètz segur que volètz rejoindre lo grop seleccionat ?',
   'GROUP_JOIN_PENDING' => 'Demander a rejoindre un grop',
   'GROUP_JOIN_PENDING_CONFIRM' => 'Sètz segur que volètz demander a rejoindre lo grop seleccionat ?',
   'GROUP_JOINED' => 'Vous êtes désormais sòci d\'aqueste grop.',
   'GROUP_JOINED_PENDING' => 'Vòstre demanda d\'adhésion es estat prise en compte. Debètz attendre que lo moderaire del grop approuve vòstre demanda.',
   'GROUP_LIST' => 'Gerir los sòcis',
   'GROUP_MEMBERS' => 'Sòcis del grop',
   'GROUP_NAME' => 'Nom del grop',
   'GROUP_OPEN' => 'Ouvrir',
   'GROUP_RANK' => 'Rang del grop',
   'GROUP_RESIGN_MEMBERSHIP' => 'Se désinscrire del grop',
   'GROUP_RESIGN_MEMBERSHIP_CONFIRM' => 'Sètz segur que volètz vos désinscrire del grop seleccionat ?',
   'GROUP_RESIGN_PENDING' => 'Anullar una demanda d\'adhésion',
   'GROUP_RESIGN_PENDING_CONFIRM' => 'Sètz segur que volètz annuler vòstre demanda d\'adhésion al grop seleccionat ?',
   'GROUP_RESIGNED_MEMBERSHIP' => 'Sètz estat désinscrit del grop seleccionat.',
   'GROUP_RESIGNED_PENDING' => 'Vòstre demanda d\'adhésion pel grop seleccionat es estat annulée.',
   'GROUP_TYPE' => 'Statut del grop',
   'GROUP_UNDISCLOSED' => 'Grop invisible',
   'FORUM_UNDISCLOSED'   => 'Moderaire dels forums cachés',

   'LOGIN_EXPLAIN_GROUP' => 'Debètz vos connectar per veire los detalhs d\'aqueste grop.',

   'NO_LEADERS' => 'Sètz pas moderaire d\'un grop.',
   'NOT_LEADER_OF_GROUP' => 'L\'operacion demandée ne pòt aboutir per çò que vos n\'êtes pas moderaire del grop seleccionat.',
   'NOT_MEMBER_OF_GROUP' => 'L\'operacion demandée ne pòt aboutir per çò que vos n\'êtes pas sòci del grop seleccionat.',
   'NOT_RESIGN_FROM_DEFAULT_GROUP'   => 'Podètz pas èsser retiré de vòstre grop per defaut.',
   
   'PRIMARY_GROUP' => 'Grop per defaut',

   'REMOVE_SELECTED' => 'Suprimir la seleccion',

   'USER_GROUP_CHANGE' => 'De "%1$s" cap a "%2$s"',
   'USER_GROUP_DEMOTE' => 'Cambiar lo moderaire en simple sòci.',
   'USER_GROUP_DEMOTE_CONFIRM'   => 'Sètz segur que volètz destituer lo moderaire del grop seleccionat ?',
   'USER_GROUP_DEMOTED' => 'Lo moderaire es estat changé en simple sòci.',
));

 ?>
