<?php
/** 
*
* acp_permissions [Occitan]
*
* @package language
* @version $Id: permissions.php,v 1.38 2007/10/08 14:38:26 acydburn Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>Les permissions sont très variées e groupées en quatre grandes sections, qui sont:

		</p><h2>Permissions globales</h2>
		<p>Elles sont utilisées per contrôler l\'accès de façon globale e sont appliquées à l\'ensemble del forum. Elles sont elles-mêmes divisées en permissions dels utilizaires, grops, administrateurs e moderaires globaux.</p>

		<h2>Permissions dels forums</h2>
		<p>Elles sont utilisées per contrôler l\'accès de base als forums. Elles sont elles-mêmes divisées en permissions dels forums, moderaires dels forums, permissions dels forums per les utilizaires e permissions dels forums per les grops.</p>

		<h2>Modèls dels permissions</h2>
		<p>Ils sont utilisés afin de créer différents ensembles de permissions per les différents types de permission pouvant èsser assignés plus tard à una base de modèles de base. Les modèles per défaut doivent couvrir l\'administracion dels petits e grands forums, cependant dins chacune dels quatre divisions, vous pouvez apondre/éditer/suprimir dels modèles selon vos souhaits.</p>

		<h2>Masques dels permissions</h2>
		<p>Ils sont utilisés afin de veire les permissions effectives assignées als utilizaires, moderaires (locaux e globaux), administrateurs del forum.</p>

		<br />

		<p>Pour de plus amples informations sur la configuration e la gestion dels permissions de vòstre forum phpBB3, consultez lo <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapitre 1.5 de notre Guide de Démarrage Rapide</a>.</p>
	',
	'ACL_NEVER'				=> 'Jamai',
	'ACL_SET'				=> 'Configuracion dels Permissions',
	'ACL_SET_EXPLAIN'		=> 'Les permissions sont basées sur un simple système <samp>OUI</samp>/<samp>NON</samp>. Régler una option sur <samp>JAMAIS</samp> per un utilizaire o grop d\'utilizaires l\'emporte sur toute autre valeur qui lui était assignée. Si vous ne souhaitez pas assigner de valeur à una option per cet utilizaire o aqueste grop, sélectionnez <samp>NON</samp>. Si dels valors sont assignées aillors per cette option, elles seront utilisées de préférence, autrement <samp>JAMAIS</samp> est appliqué. Tous les objets marqués ( amb la case de choix dabans eux ) copieront l\'ensemble de permissions que vous aurez definit.',
	'ACL_SETTING'			=> 'Configuracion',

	'ACL_TYPE_A_'			=> 'Permissions d\'administracion',
	'ACL_TYPE_F_'			=> 'Permissions dels forums',
	'ACL_TYPE_M_'			=> 'Permissions de moderacion',
	'ACL_TYPE_U_'			=> 'Permissions de l\'utilizaire',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permissions d\'administracion',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permissions de l\'utilizaire',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permissions dels moderaires globals',
	'ACL_TYPE_LOCAL_M_'		=> 'Permissions dels moderaires',
	'ACL_TYPE_LOCAL_F_'		=> 'Permissions dels forums',

	'ACL_NO'				=> 'Non',
	'ACL_VIEW'				=> 'Aperçu dels Permissions',
	'ACL_VIEW_EXPLAIN'		=> 'Ici vous pouvez veire les permissions effectives de l\'utilizaire/del grop. Un rectangle rouge indique que l\'utilizaire/lo grop n\'a pas la permission, un rectangle vert indique que l\'utilizaire/lo grop a la permission.',
	'ACL_YES'				=> 'Oui',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Podètz attribuer ici dels droits d\'administracion à dels utilizaires o grops. Tous les utilizaires amb dels permissions d\'administracion peuvent accedir al panèl d\'administracion.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Podètz attribuer ici dels utilizaires e dels grops en tant que moderaires del forum. Pour attribuer l\'accès dels utilizaires als forums e per définir dels droits de moderacion globale o d\'administracion, utilisez la page appropriée.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Podètz modificar ici lo nombre d\'utilizaires e de grops pouvant accedir à certains forums. Pour attribuer dels moderaires o définir dels administrateurs, utilisez la page appropriée.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Podètz attribuer ici les droits de modérateur global als utilizaires o als grops. Aquestes moderaires sont dels moderaires ordinaires excepté qu\'ils ont accès à tous les forums.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Podètz attribuer ici les permissions dels forums als grops.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Podètz attribuer ici les permissions globales als grops d\'utilizaire, de modérateur global e d\'administrateur. Les permissions d\'utilizaire incluent dels possibilités coma l\'utilisation d\'avatar, l\'envoi de messatges privats, etc. les permissions de modérateur global coma l\'aprovacion dels messatges, la gestion dels sujets, la gestion dels bannissements, etc. e enfin les permissions d\'administrateur coma la modification de permissions, la gestion dels BBCodes personalizats, la gestion dels forums, etc. Les permissions individuelles dels utilizaires ne doivent èsser modifiées que dins de rares occasions, la méthode appropriée est l\'intégration d\'utilizaires dins dels grops puis l\'attribution de permissions à aquestes grops.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Podètz gerir ici les modèles dels permissions dels administrateurs. Les modèles sont dels permissions effectives, si vous modifiez un modèle les éléments auxquels aqueste modèle était assigné verront aussi lors permissions modifiées.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Podètz gerir ici les modèles dels permissions dels forums. Les modèles sont dels permissions effectives, si vous modifiez un modèle les éléments auxquels aqueste modèle était assigné verront lors permissions modifiées aussi.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Podètz gerir ici les modèles dels permissions dels moderaires. Les modèles sont dels permissions effectives, si vous modifiez un modèle les éléments auxquels aqueste modèle était assigné verront lors permissions modifiées aussi.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Podètz gerir ici les modèles dels permissions dels utilizaires. Les modèles sont dels permissions effectives, si vous modifiez un modèle les éléments auxquels aqueste modèle était assigné verront lors permissions modifiées aussi.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Podètz attribuer ici les permissions dels forums als utilizaires.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Podètz attribuer ici les permissions globales als utilizaires - permissions d\'utilizaire, permissions de modérateur global e permissions d\'administrateur. Les permissions d\'utilizaire incluent dels possibilités coma l\'utilisation d\'avatar, l\'envoi de messatges privats, etc. les permissions de modérateur global coma l\'aprovacion dels messatges, la gestion dels sujets, la gestion dels bannissements, etc. e enfin les permissions d\'administrateur coma la modification de permissions, la gestion dels BBCodes personalizats, la gestion dels forums, etc. Pour modificar les permissions d\'un grand nombre d\'utilizaires, lo système de permissions dels grops est la méthode la plus appropriée. Les permissions individuelles dels utilizaires ne doivent èsser modifiées que dins de rares occasions, la méthode appropriée est l\'intégration d\'utilizaires dins dels grops e l\'attribution de permissions à aquestes grops.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Podètz consulter ici les permissions effectives dels administrateurs assignées als utilizaires o grops sélectionnés',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Podètz consulter ici les permissions effectives dels moderaires globaux assignées als utilizaires o grops sélectionnés',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Podètz consulter ici les permissions effectives dels forums assignées als utilizaires o grops sélectionnés',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Podètz consulter ici les permissions effectives dels moderaires del forum assignées als utilizaires o grops sélectionnés',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Podètz consulter ici les permissions effectives dels utilizaires assignées als utilizaires o grops sélectionnés',

	'ADD_GROUPS'				=> 'Apondre dels grops',
	'ADD_PERMISSIONS'			=> 'Apondre dels permissions',
	'ADD_USERS'					=> 'Apondre dels utilizaires',
	'ADVANCED_PERMISSIONS'		=> 'Permissions avancées',
	'ALL_GROUPS'				=> 'Seleccionar tous les grops',
	'ALL_NEVER'					=> '<samp>JAMAIS</samp> per tout',
	'ALL_NO'					=> '<samp>NON</samp> per tout',
	'ALL_USERS'					=> 'Seleccionar tous les utilizaires',
	'ALL_YES'					=> '<samp>OUI</samp> per tout',
	'APPLY_ALL_PERMISSIONS'		=> 'Appliquer toutes les permissions',
	'APPLY_PERMISSIONS'			=> 'Appliquer les permissions',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Les permissions e modèles définis per cet élément seront appliqués uniquement à cet élément e à tous les éléments cochés.',
	'AUTH_UPDATED'				=> 'Les permissions ont été mises à jour.',

	'CREATE_ROLE'				=> 'Créer un modèle',
	'CREATE_ROLE_FROM'			=> 'Utiliser les réglages de…',
	'CUSTOM'					=> 'Personnaliser…',

	'DEFAULT'					=> 'Défaut',
	'DELETE_ROLE'				=> 'Supprimer lo modèle',
	'DELETE_ROLE_CONFIRM'		=> 'Êtes-vous sûr(e) de vouloir suprimir aqueste modèle ? Les éléments auxquels aqueste modèle est assigné <strong>ne</strong> perdront <strong>pas</strong> lors réglages de permission.',
	'DISPLAY_ROLE_ITEMS'		=> 'Voir les éléments utilisant aqueste modèle',

	'EDIT_PERMISSIONS'			=> 'Editer les permissions',
	'EDIT_ROLE'					=> 'Editer lo modèle',

	'GROUPS_NOT_ASSIGNED'		=> 'Aucun grop n\'est assigné à aqueste modèle',

	'LOOK_UP_GROUP'				=> 'Rechercher lo grop d\'utilizaires',
	'LOOK_UP_USER'				=> 'Rechercher l\'utilizaire',

	'MANAGE_GROUPS'		=> 'Gerir les grops',
	'MANAGE_USERS'		=> 'Gerir les utilizaires',

	'NO_AUTH_SETTING_FOUND'		=> 'Réglages de permission non définis.',
	'NO_ROLE_ASSIGNED'			=> 'Aucun modèle assigné…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'La configuration de aqueste modèle ne modifie pas les permissions sur la droite. Si vous souhaitez modificar/suprimir toutes les permissions, vous devez utiliser lo lien "<samp>NON</samp> à tout".',
	'NO_ROLE_AVAILABLE'			=> 'Aucun modèle disponible',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Merci de donner un nom al modèle.',
	'NO_ROLE_SELECTED'			=> 'Lo modèle n\'a pas été trouvé.',
	'NO_USER_GROUP_SELECTED'	=> 'Vous n\'avez pas seleccionat d\'utilizaire o de grop.',

	'ONLY_FORUM_DEFINED'	=> 'Vous n\'avez definit que dels forums dins vòstre sélection. Seleccionatz aussi, al mens, un utilizaire o un grop.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Les permissions e modèles seront aussi appliqués à tous les objets cochés',
	'PLUS_SUBFORUMS'				=> '+Sous-forums',

	'REMOVE_PERMISSIONS'			=> 'Supprimer dels permissions',
	'REMOVE_ROLE'					=> 'Supprimer un modèle',
	'RESULTING_PERMISSION'			=> 'Permission résultante',
	'ROLE'							=> 'modèle',
	'ROLE_ADD_SUCCESS'				=> 'modèle ajouté.',
	'ROLE_ASSIGNED_TO'				=> 'Utilisateurs/grops assignés à %s',
	'ROLE_DELETED'					=> 'modèle supprimé.',
	'ROLE_DESCRIPTION'				=> 'Descripcion del modèle',

	'ROLE_ADMIN_FORUM'			=> 'Administrateur del forum',
	'ROLE_ADMIN_FULL'			=> 'Super Administrateur',
	'ROLE_ADMIN_STANDARD'		=> 'Administrateur standard',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrateur dels utilizaires e dels grops',
	'ROLE_FORUM_BOT'			=> 'Accès robots',
	'ROLE_FORUM_FULL'			=> 'Accès total',
	'ROLE_FORUM_LIMITED'		=> 'Accès limité',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Accès limité + Sondages',
	'ROLE_FORUM_NOACCESS'		=> 'Aucun accès',
	'ROLE_FORUM_ONQUEUE'		=> 'Attente de moderacion',
	'ROLE_FORUM_POLLS'			=> 'Accès standard + Sondages',
	'ROLE_FORUM_READONLY'		=> 'Accès en lecture uniquement',
	'ROLE_FORUM_STANDARD'		=> 'Accès standard',
	'ROLE_MOD_FULL'				=> 'Super Modérateur',
	'ROLE_MOD_QUEUE'			=> 'Modérateur suppléant',
	'ROLE_MOD_SIMPLE'			=> 'Modérateur simple',
	'ROLE_MOD_STANDARD'			=> 'Modérateur standard',
	'ROLE_USER_FULL'			=> 'Toutes fonctionnalités',
	'ROLE_USER_LIMITED'			=> 'Fonctionnalités limitées',
	'ROLE_USER_NOAVATAR'		=> 'Aucun avatar',
	'ROLE_USER_NOPM'			=> 'Aucun messatge privé',
	'ROLE_USER_STANDARD'		=> 'Fonctionnalités standards',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Peut accedir à la gestion e à la configuration dels permissions del forum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'A accès à toutes les fonctions administratives del forum.<br />Non recommandé.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'A accès à la plupart dels fonctionnalités administratives mas ne peut pas utiliser lo servidor o les outils relatifs al système.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Peut gerir dels grops e dels utilizaires: est autorisé à modificar les permissions, les réglages, à gerir les bannissements e les rangs.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ce modèle est recommandé per les robots e moteurs de recèrca.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Peut utiliser toutes les fonctionnalités del forum, y compris les annonces e les post-it. N\'est pas concerné(e) per la limite de flood.<br />Non recommandé per les utilizaires normaux.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Peut utiliser quelques fonctionnalités del forum, mas ne peut pas joindre de fichièrs o utiliser les icônes dels messatges.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Comme l\'Accès Limité mas peut aussi créer dels sondages.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Ne peut ni veire ni accedir al forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Peut utiliser la plupart dels fonctionnalités del forum y compris les fichièrs junts, mas les messatges e les sujets doivent èsser approuvés per un modérateur.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Comme l\'Accès Standard mas peut aussi créer dels sondages.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Peut lire lo forum, mas ne peut pas créer de nouveaux sujets o répondre als messatges.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Peut utiliser la plupart dels fonctionnalités del forum y compris les fichièrs junts, mas ne peut pas verrouiller o suprimir ses propres sujets, e ne peut pas créer de sondages.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Peut utiliser toutes les fonctionnalités de moderacion, y compris lo bannissement.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Peut utiliser l\'attente de moderacion per valider o éditer dels messatges, mas rien d\'autre.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Peut utiliser seulement les actions de tèma de base. Ne peut pas envoyer d\'avertiments o utiliser l\'attente de moderacion.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Peut utiliser la plupart dels outils de moderacion, mas ne peut pas bannir les utilizaires o modificar l\'auteur del messatge.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Peut utiliser toutes les fonctionnalités disponibles del forum per les utilizaires, y compris modificar lo nom d\'utilizaire o ignorer la limite de flood.<br />Non recommandé.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Peut avoir accès à la plupart dels fonctionnalités de l\'utilizaire. Les fichièrs junts, e-mails o messatges instantanés ne sont pas autorizats.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'A un ensemble limité de fonctionnalités e es pas autorisé à avoir d\'avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'A un ensemble limité de fonctionnalités e es pas autorisé à envoyer de messatges privats.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Peut accedir à la plupart dels fonctionnalités de l\'utilizaire, mas pas à toutes. Par exemple, ne peut pas modificar lo nom d\'utilizaire o ignorer la limite de flood.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Vous avez la possibilité d\'entrer una courte explication sur aqueste que fait lo modèle o aqueste qu\'il signifie. Lo tèxt que vous entrez serà aussi affiché dins l\'écran dels permissions.',
	'ROLE_DESCRIPTION_LONG'			=> 'La description del modèle est trop longue. Limitez-la à 4000 caractères.',
	'ROLE_DETAILS'					=> 'Détails del modèle',
	'ROLE_EDIT_SUCCESS'				=> 'Lo modèle a été édité.',
	'ROLE_NAME'						=> 'Nom del modèle',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Un modèle nommé <strong>%s</strong> existe déjà per lo type de permission spécifié.',
	'ROLE_NOT_ASSIGNED'				=> 'Lo modèle n\'a pas encore été assigné.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Lo(s) forum(s) seleccionat(s) n\'existe(nt) pas.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Lo(s) grop(s) seleccionat(s) n\'existe(nt) pas.',
	'SELECTED_USER_NOT_EXIST'		=> 'L\'utilizaire (les utilizaires) seleccionat(s) n\'existe(nt) pas.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Lo forum que vous sélectionnez ici inclura tous les sous-forums dins la sélection',
	'SELECT_ROLE'					=> 'Seleccionar un modèle…',
	'SELECT_TYPE'					=> 'Seleccionar un type',
	'SET_PERMISSIONS'				=> 'Régler les permissions',
	'SET_ROLE_PERMISSIONS'			=> 'Régler les permissions del modèle',
	'SET_USERS_PERMISSIONS'			=> 'Régler les permissions dels utilizaires',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Régler les permissions dels utilizaires del forum',

	'TRACE_DEFAULT'					=> 'Par défaut, chaque permission est sur <samp>NON</samp> (Désactivée). Ainsi la permission peut èsser outrepassée per d\'autres réglages.',
	'TRACE_FOR'						=> 'Tracer per',
	'TRACE_GLOBAL_SETTING'	=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Cette permission de grop est réglée sur <samp>JAMAIS</samp> tout coma lo résultat total, l\'ancien résultat est donc conservé..',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Cette permission de grop per aqueste forum est réglée sur <samp>JAMAIS</samp> tout coma lo résultat total, l\'ancien résultat est donc conservé.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Cette permission de grop est réglée sur <samp>JAMAIS</samp> aqueste qui devient la nouvelle valeur globale car elle n\'était pas encore réglée (Réglage sur <samp>NON</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Cette permission de grop per aqueste forum est réglée sur <samp>JAMAIS</samp> aqueste qui devient la nouvelle valeur globale car elle n\'était pas encore réglée (Réglage sur <samp>NON</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Cette permission de grop est réglée sur <samp>JAMAIS</samp> aqueste qui outrepasse lo <samp>OUI</samp> per appliquer <samp>JAMAIS</samp> per cet utilizaire.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Cette permission de grop per aqueste forum est réglée sur <samp>JAMAIS</samp> aqueste qui outrepasse lo <samp>OUI</samp> per appliquer <samp>JAMAIS</samp> per cet utilizaire.',
	'TRACE_GROUP_NO'				=> 'Cette permission de grop est réglée sur <samp>NON</samp> per aqueste grop, ainsi l\'ancienne valeur est conservée.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Cette permission de grop est réglée sur <samp>NON</samp> per aqueste grop dins aqueste forum, ainsi l\'ancienne valeur est conservée.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Cette permission de grop est réglée sur <samp>OUI</samp> mas la valeur globale <samp>JAMAIS</samp> ne peut pas èsser outrepassée.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Cette permission de grop per aqueste forum est réglée sur <samp>OUI</samp> mas la valeur globale <samp>JAMAIS</samp> ne peut pas èsser outrepassée.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Cette permission de grop est réglée sur <samp>OUI</samp> aqueste qui devient la nouvelle valeur globale car elle n\'était pas encore réglée (Réglage sur <samp>NON</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'Cette permission de grop per aqueste forum est réglée sur <samp>OUI</samp> aqueste qui devient la nouvelle valeur globale car elle n\'était pas encore réglée (Réglage sur <samp>NON</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Cette permission de grop est réglée sur <samp>OUI</samp> e la permission totale est déjà réglée sur <samp>OUI</samp> , elle est donc conservée.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'Cette permission de grop per aqueste forum est réglée sur <samp>OUI</samp> e la permission totale est déjà réglée sur <samp>OUI</samp> , elle est donc conservée.',
	'TRACE_PERMISSION'				=> 'Tracer la permission - %s',
	'TRACE_RESULT'					=> 'Tracer lo résultat',
	'TRACE_SETTING'					=> 'Tracer la configuration',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'La permission de l\'utilizaire sul forum est sur <samp>OUI</samp>, mas la permission commune étant déjà réglée sur <samp>OUI</samp>, elle est conservée. %sTracer la permission globale%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'La permission de l\'utilizaire sul forum est sur <samp>OUI</samp>, aqueste qui outrepasse lo résultat actuel <samp>JAMAIS</samp>. %sTracer la permission globale%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'La permission de l\'utilizaire sul forum est sur <samp>JAMAIS</samp> aqueste qui n\'influence pas la permission locale. %sTracer la permission globale%s',
	
	'TRACE_USER_FOUNDER'					=> 'L\'utilizaire est un fondateur, c\'est pourquoi les permissions d\'administracion sont toutes réglées sur <samp>OUI</samp> per défaut.',
	'TRACE_USER_KEPT'						=> 'La permission de l\'utilizaire est réglée sur <samp>NON</samp>, ainsi l\'ancienne valeur globale est conservée.',
	'TRACE_USER_KEPT_LOCAL'						=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>NON</samp>, ainsi l\'ancienne valeur globale est conservée.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'La permission de l\'utilizaire est réglée sur <samp>JAMAIS</samp> e la valeur commune est réglée sur <samp>JAMAIS</samp>, donc rien n\'est modifié.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'			=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>JAMAIS</samp> e la valeur commune est réglée sur <samp>JAMAIS</samp>, donc rien n\'est modifié.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'La permission de l\'utilizaire est réglée sur <samp>JAMAIS</samp> aqueste qui devient la valeur commune car elle était réglée sur NON.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'				=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>JAMAIS</samp> aqueste qui devient la valeur commune car elle était réglée sur NON.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'La permission de l\'utilizaire est réglée sur <samp>JAMAIS</samp> e outrepasse lo <samp>OUI</samp> précédent.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'			=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>JAMAIS</samp> e outrepasse lo <samp>OUI</samp> précédent.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'La permission de l\'utilizaire est réglée sur <samp>NON</samp> e la valeur commune était réglée sur NON ainsi per défaut sur <samp>JAMAIS</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'				=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>NON</samp> e la valeur commune était réglée sur NON ainsi per défaut sur <samp>JAMAIS</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'La permission de l\'utilizaire est réglée sur <samp>OUI</samp> mas la valeur commune est sur <samp>JAMAIS</samp> e ne peut pas èsser outrepassée.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'			=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>OUI</samp> mas la valeur commune est sur <samp>JAMAIS</samp> e ne peut pas èsser outrepassée.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'La permission de l\'utilizaire est réglée sur <samp>OUI</samp> aqueste qui devient la valeur commune car elle était réglée sur <samp>NON</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'				=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>OUI</samp> aqueste qui devient la valeur commune car elle était réglée sur <samp>NON</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'La permission de l\'utilizaire est réglée sur <samp>OUI</samp> e la valeur commune est réglée sur <samp>OUI</samp>, donc rien n\'est modifié.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'				=> 'La permission de l\'utilizaire per aqueste forum est réglée sur <samp>OUI</samp> e la valeur commune est réglée sur <samp>OUI</samp>, donc rien n\'est modifié.',
	'TRACE_WHO'									=> 'Qui',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Aucun utilizaire assigné à aqueste modèle',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'est un membre dels grops predefinits suivants',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'est un membre dels grops normaux suivants',

	'VIEW_ASSIGNED_ITEMS'	=> 'Voir les éléments assignés',
	'VIEW_LOCAL_PERMS'		=> 'Permissions locales',
	'VIEW_GLOBAL_PERMS'		=> 'Permissions globales',
	'VIEW_PERMISSIONS'		=> 'Voir les permissions',

	'WRONG_PERMISSION_TYPE'	=> 'Mauvais type de permission seleccionat.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Les réglages dels permissions sont enregistrés dins un mauvais format, phpBB est incapable de les traiter correctement.',
));

 ?>
