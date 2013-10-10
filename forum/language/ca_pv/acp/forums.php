<?php
/**
*
* acp_forums [Catalan (Valencian)]
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Temps del missatge per autoneteja',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Nombre de dies a partir de la publicació del darrer missatge per esborrar el tema',
	'AUTO_PRUNE_FREQ'			=> 'Freqüència d\'autoneteja',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Temps en dies entre tasques d\'autoneteja.',
	'AUTO_PRUNE_VIEWED'			=> 'Temps del missatge vist per autoneteja',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Nombre de dies a partir de la darrera visita al tema per esborrar-lo.',

	'COPY_PERMISSIONS'				=> 'Copia permisos de',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Una vegada creat, el fòrum tindrà els mateixos permisos que el que seleccioneu ací. Si no en seleccioneu cap, el fòrum creat no serà visible als usuaris fins que no definiu els permisos.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Si seleccioneu copiar permisos, el fòrum tindrà els mateixos permisos que el que seleccioneu. Això es copiarà a sobre dels permisos que tinguera aquest fòrum. Si no seleccioneu cap fòrum, no es copiarà res.',
	'CREATE_FORUM'					=> 'Crea un nou fòrum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Esborra contingut o mou al fòrum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Esborra subfòrums o mou al fòrum',
	'DEFAULT_STYLE'						=> 'Estil per defecte',
	'DELETE_ALL_POSTS'					=> 'Suprimeix missatges',
	'DELETE_SUBFORUMS'					=> 'Suprimeix subfòrums i missatges',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Habilita temes actius',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Si s\'activa, els temes dels subfòrums seleccionats es mostraran a aquesta categoria.',

	'EDIT_FORUM'					=> 'Edita el fòrum',
	'ENABLE_INDEXING'				=> 'Habilita cerca indexada',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Si es fixa com a afirmatiu, aquest fòrum s\'indexarà per a les cerques.',
	'ENABLE_POST_REVIEW'			=> 'Habilita previsualització del missatge',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Si es fixa com a afirmatiu, els usuaris podran revisar el seu missatge en cas que algú haguera publicat mentre ells estaven escrivint. Això hauria d\'estar desactivat per als fòrums tipus xat.',
	'ENABLE_RECENT'					=> 'Mostra temes actius',
	'ENABLE_RECENT_EXPLAIN'			=> 'Si es fixa com a afirmatiu, els temes creats a aquest fòrum es mostraran a la llista de temes actius.',
	'ENABLE_TOPIC_ICONS'			=> 'Habilita icones de tema',

	'FORUM_ADMIN'						=> 'Administració del fòrum',
	'FORUM_ADMIN_EXPLAIN'				=> 'A phpBB3 no hi ha categories, tot es basa en el fòrum. Cada fòrum pot tindre un nombre il·limitat de subfòrums i podeu determinar els seus permisos. Ací podeu afegir, editar, suprimir, bloquejar o desbloquejar fòrums individualment a més d\'altres opcions adicionals. <strong>Heu de copiar o afegir els permisos adequats per als nous fòrums creats per tal de que es puguen visualitzar.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Habilita auto-neteja',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Neteja el fòrum de temes, fixeu els paràmetres de freqüència/temps a continuació.',
	'FORUM_CREATED'						=> 'S\'ha creat el fòrum.',
	'FORUM_DATA_NEGATIVE'				=> 'Els paràmetres de neteja no poden tindre valors negatius.',
	'FORUM_DESC_TOO_LONG'				=> 'La descripció del fòrum és massa llarga. No pot superar els 4000 caràcters.',
	'FORUM_DELETE'						=> 'Suprimeix fòrum',
	'FORUM_DELETE_EXPLAIN'				=> 'El següent formulari permet esborrar un fòrum. Podeu triar on voleu moure tots els temes/missatges/subfòrums que continga.',
	'FORUM_DELETED'						=> 'S\'ha suprimit el fòrum.',
	'FORUM_DESC'						=> 'Descripció',
	'FORUM_DESC_EXPLAIN'				=> 'Qualsevol codi HTML introduït ací es mostrara tal qual.',
	'FORUM_EDIT_EXPLAIN'				=> 'El següent formulari permet personalitzar el fòrum. Noteu que el control de moderació i de contatge de missatges es gestionen per a cada usuari o grup.',
	'FORUM_IMAGE'						=> 'Imatge del fòrum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Ruta, relativa al directori phpBB o una altra imatge associada a aquest fòrum.',
	'FORUM_LINK_EXPLAIN'				=> 'URL completa (incloent el protocol, p.e.: <samp>http://</samp>) a l\'enllaç.',
	'FORUM_LINK_TRACK'					=> 'Track link redirects',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Grava el nombre de vegades que un enllaç al fòrum s\'ha clicat.',
	'FORUM_NAME'						=> 'Nom del fòrum',
	'FORUM_NAME_EMPTY'					=> 'Heu d\'introduir un nom per a aquest fòrum.',
	'FORUM_PARENT'						=> 'Fòrum pare',
	'FORUM_PASSWORD'					=> 'Contrasenya del fòrum',
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmeu contrasenya del fòrum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Només s\'ha de posar en cas de que s\'haja introduït una contrasenya.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Defineix una contrasenya per a aquest fòrum. Feu servir les preferències del sistema de permisos.',
	'FORUM_PASSWORD_UNSET'				=> 'Elimina la contrasenya del fòrum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Seleccioneu aquesta opció si voleu eliminar la contrasenya del fòrum.',
	'FORUM_PASSWORD_OLD'				=> 'La contrasenya del fòrum utilitza una encriptació antiga i és recomanable que la canvieu.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Les contrasenyes no coincideixen.',
	'FORUM_PRUNE_SETTINGS'				=> 'Paràmetres de neteja del fòrum',
	'FORUM_RESYNCED'					=> 'El fòrum "%s" s\'ha tornat a sincronitzar',
	'FORUM_RULES_EXPLAIN'				=> 'Les normes del fòrum es mostren a qualsevol pàgina del fòrum mateix.',
	'FORUM_RULES_LINK'					=> 'Enllaç a les normes del fòrum',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Podeu introduir l\'URL de la pàgina/missatge on es troben les normes del fòrum.',
	'FORUM_RULES_PREVIEW'				=> 'Previsualització de les normes del fòrum',
	'FORUM_RULES_TOO_LONG'				=> 'Les normes del fòrum no poden contindre més de 4000 caràcters.',
	'FORUM_SETTINGS'					=> 'Paràmetres del fòrum',
	'FORUM_STATUS'						=> 'Estat del fòrum',
	'FORUM_STYLE'						=> 'Estil del fòrum',
	'FORUM_TOPICS_PAGE'					=> 'Temes per pàgina',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'If non-zero this value will override the default topics per page setting.',
	'FORUM_TYPE'						=> 'Tipus de fòrum',
	'FORUM_UPDATED'						=> 'S\'ha actualitzat la informació del fòrum.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'You want to change a postable forum having subforums to a link. Please move all subforums out of this forum before you proceed, because after changing to a link you are no longer able to see the subforums currently connected to this forum.',

	'GENERAL_FORUM_SETTINGS'	=> 'Paràmetres generals del fòrum',

	'LINK'					=> 'Enllaç',
	'LIST_INDEX'			=> 'Mostra el subfòrum a la llegenda del fòrum pare',
	'LIST_INDEX_EXPLAIN'	=> 'Mostra aquest fòrum a l\'índex i a qualsevol lloc com on aparega un enllaç al fòrum pare.',
	'LIST_SUBFORUMS'			=> 'Llista els subfòrums a la llegenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Mostra els subfòrums d’aquest fòrum a l\'índex i en altres pàgines com un enllaç a la llegenda.',
	'LOCKED'				=> 'Bloquejat',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'El fòrum que heu seleccionat per moure els missatges no permet escriure-hi. Seleccioneu un altre fòrum o canvieu els permisos.',
	'MOVE_POSTS_TO'					=> 'Moure missatges a',
	'MOVE_SUBFORUMS_TO'				=> 'Moure subfòrums a',

	'NO_DESTINATION_FORUM'			=> 'No heu especificat un fòrum on moure els missatges.',
	'NO_FORUM_ACTION'				=> 'No heu especificat una acció a dur a terme per al contingut del fòrum.',
	'NO_PARENT'						=> 'Sense pare',
	'NO_PERMISSIONS'				=> 'No copies permisos',
	'NO_PERMISSION_FORUM_ADD'		=> 'No teniu els permisos necessaris per afegir fòrums.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'No teniu els permisos necessaris per suprimir fòrums.',

	'PARENT_IS_LINK_FORUM'		=> 'El fòrum pare que heu especificat és un enllaç. Aquest tipus de fòrum no permeten fer això, seleccioneu una altra categoria o un altre fòrum pare.',
	'PARENT_NOT_EXIST'			=> 'El fòrum pare no existeix.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Neteja anuncis',
	'PRUNE_STICKY'				=> 'Neteja recurrents',
	'PRUNE_OLD_POLLS'			=> 'Neteja enquestes antigues',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Suprimeix enquestes que no han tingut cap vot durant l\'edat fixada del missatge.',

	'REDIRECT_ACL'	=> 'No podeu %sfixar permisos%s a aquest fòrum.',

	'SYNC_IN_PROGRESS'			=> 'S\'està sincronitzant el fòrum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'S\'està tornant a sincronitzar el tema %1$d/%2$d.',

	'TYPE_CAT'			=> 'Categoria',
	'TYPE_FORUM'		=> 'Fòrum',
	'TYPE_LINK'			=> 'Enllaç',

	'UNLOCKED'			=> 'Desbloquejat',
));

?>
