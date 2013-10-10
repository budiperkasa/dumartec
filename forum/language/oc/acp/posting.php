<?php
/** 
*
* posting [Occitan]
*
* @package language
* @version $Id: posting.php,v 1.47 2007/10/04 15:07:24 acydburn Exp $
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
// in a URL you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'Lo BBCode est una implémentation spéciale del HTML qui offre un plus grand contrôle sur l\'affichage dels messatges. Depuis cette page, vous pouvez apondre, suprimir o éditer dels BBCodes personalizats.',
	'ADD_BBCODE'				=> 'Apondre un nouveau BBCode',

	'BBCODE_ADDED'				=> 'BBCode ajouté.',
	'BBCODE_EDITED'				=> 'BBCode édité.',
	'BBCODE_NOT_EXIST'			=> 'Lo BBCode que vous avez seleccionat existís pas.',
	'BBCODE_HELPLINE'			=> 'Ligne d\'aide',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Ce champ contient lo tèxt del BBCode qui serà affiché lors del passage de la souris.',
	'BBCODE_HELPLINE_TEXT'		=> 'Tèxt de la linha d\'aide',
	'BBCODE_INVALID_TAG_NAME'	=> 'Lo nom de la balise BBCode que vous avez seleccionat existe déjà.',
	'BBCODE_INVALID'			=> 'Vòstre BBCode est construite dins una forme invalide.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Vòstre BBCode personalizat doit contenir una balise d\'ouverture e de fermeture.',
	'BBCODE_TAG'				=> 'Balise',
	'BBCODE_TAG_TOO_LONG'		=> 'Lo nom de la balise que vous avez seleccionat est trop long.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'La definicion de la balise que vous avez entrée est trop longue, raccourcissez vòstre definicion.',
	'BBCODE_USAGE'				=> 'Utilisation del BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Podètz définir ici comment utiliser lo BBCode. Remplacez n\'importe quelle variable d\'entrée per la chaîne de symboles correspondante (%svoir ci-dessous%s).',

	'EXAMPLE'						=> 'Exemple:',
	'EXAMPLES'						=> 'Exemples:',

	'HTML_REPLACEMENT'				=> 'Code HTML de remplacement',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span estil="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span estil="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Ici, vous pouvez définir lo code HTML de remplacement de vòstre BBCode. N\'oubliez pas de remettre la chaîne de symboles que vous avez utilisée ci-dessus!',

	'TOKEN'					=> 'Chaîne de symboles',
	'TOKENS'				=> 'Chaînes de symboles',
	'TOKENS_EXPLAIN'		=> 'Les marques sont dels conteneurs per les utilizaires. Les entrées ne seront validées que si elles trouvent la definicion correspondante. Si besoin, vous pouvez les numéroter en y ajoutant un nombre coma dernier caractère entre dels accolades, exemple: {TEXT1}, {TEXT2}.<br /><br />Podètz utiliser, en plus del remplacement HTML, una chaîne de langue dins vòstre repertòri language/ coma ceci: {L_<em>&lt;STRINGNAME&gt;</em>} ont <em>&lt;STRINGNAME&gt;</em> est lo nom de la chaîne traduite que vous souhaitez apondre. Par exemple, {L_WROTE} serà affiché en tant que &quot;a écrit&quot; o sa traduction selon la langue locale de l\'utilizaire.<br /><br /><strong>Notez que seules les chaînes listées ci-dessous sont autorizadas à èsser utilisées dins les BBCodes personalizats.</strong>',
	'TOKEN_DEFINITION'		=> 'Que peut il èsser ?',
	'TOO_MANY_BBCODES'		=> 'Vous ne pouvez pas créer d\'autres BBCodes. Supprimez un o plusieurs BBCodes puis réessayez.',

	'tokens'	=>	array(
		'TEXT'			=> 'Du tèxt, incluant dels caractères étrangers, chiffres, etc. Vous ne devriez pas utiliser cette marque dins les tags HTML. Essayez d\'utiliser à la place les marques IDENTIFIER o SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caractères alphabétiques latins (A-Z), chiffres, espaces, virgules, points, -, +, - e _',
		'IDENTIFIER'	=> 'Caractères alphabétiques latins (A-Z), chiffres, - e _',
		'NUMBER'		=> 'Une série de chiffres',
		'EMAIL'			=> 'Une adresse e-mail valide',
		'URL'			=> 'Une URL valide utilisant un quelconque protocole (http, ftp, etc. ne peuvent pas èsser utilisés per dels exploits javascripts). Si aucun n\'est balhat, &quot;http://&quot; serà utilisé per défaut per la chaîne.',
		'LOCAL_URL'		=> 'Une URL locale. L\'URL doit èsser relative per rapport à la page del tèma e ne peut contenir un nom de servidor o un protocol.',
		'COLOR'			=> 'Une couleur HTML, peut èsser al choix soit una forme numérique <samp>#FF1234</samp> o un <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">nom de couleur CSS/a> coma per exemple <samp>fuchsia</samp> o <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Depuis cette page, vous pouvez apondre, suprimir o éditer les icônes que les utilizaires pourront apondre à leur tèma o messatge. Aquestes icônes sont généralement affichées à côté dels titres dels sujets sur la liste dels forums, o dels titres dels messatges sur la liste dels sujets. Podètz également installer e créer de nouveaux packs d\'icônes.',
	'ACP_SMILIES_EXPLAIN'	=> 'Les smileys o émoticônes sont généralement de petites images, parfois dels images animées qui sont utilisées per exprimer una émotion o un sentiment. Depuis cette page, vous pouvez apondre, suprimir o éditer les smileys que les utilizaires peuvent utiliser dins lors messatges e messatges privats. Podètz également installer e créer de nouveaux packs de smileys.',
	'ADD_SMILIES'			=> 'Apondre de multiples smileys',
	'ADD_SMILEY_CODE'		=> 'Apondre un code de smiley additionnel',
	'ADD_ICONS'				=> 'Apondre de multiples icônes',
	'AFTER_ICONS'			=> 'Après %s',
	'AFTER_SMILIES'			=> 'Après %s',

	'CODE'						=> 'Code',
	'CURRENT_ICONS'				=> 'Icònas actuelles',
	'CURRENT_ICONS_EXPLAIN'		=> 'Choisissez que far amb les icônes actuellement installées.',
	'CURRENT_SMILIES'			=> 'Smileys actuels',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Choisissez que far amb les smileys actuellement installés.',

	'DISPLAY_ON_POSTING'	=> 'Afficher sur la page de rédaction d\'un messatge',
	'DISPLAY_POSTING'			=> 'Sur la page de rédaction d\'un messatge',
	'DISPLAY_POSTING_NO'		=> 'Absent de la page de rédaction d\'un messatge',
	
	

	'EDIT_ICONS'				=> 'Editer les icônes',
	'EDIT_SMILIES'				=> 'Editer les smileys',
	'EMOTION'					=> 'Emotion',
	'EXPORT_ICONS'				=> 'Exporter e descargar vers icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sEn cliquant sur aqueste lien, la configuration de vos icônes installées serà regroupée dins lo pack <samp>icons.pak</samp> qui, una fois téléchargé, peut èsser utilisé per créer un fichièr <samp>.zip</samp> o <samp>.tgz</samp> qui contient toutes vos icônes, ainsi que lo fichièr de configuration <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Exporter e descargar vers smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sEn cliquant sur aqueste lien, la configuration de vos smileys installés serà regroupée dins lo pack <samp>smilies.pak</samp> qui, una fois téléchargé, peut èsser utilisé per créer un fichièr <samp>.zip</samp> o <samp>.tgz</samp> qui contient tout vos smileys, ainsi que lo fichièr de configuration <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Premier',

	'ICONS_ADD'				=> 'Apondre una nouvelle icòna',
	'ICONS_NONE_ADDED'		=> 'Aucune icòna n\'a été ajoutée.',
	'ICONS_ONE_ADDED'		=> 'L\'icòna a été ajoutée.',
	'ICONS_ADDED'			=> 'Les icônes ont été ajoutées.',
	'ICONS_CONFIG'			=> 'Configuracion de l\'icòna',
	'ICONS_DELETED'			=> 'L\'icòna a été supprimée.',
	'ICONS_EDIT'			=> 'Editer l\'icòna',
	'ICONS_ONE_EDITED'		=> 'L\'icòna a été mise à jour.',
	'ICONS_NONE_EDITED'		=> 'Aucune icòna n\'a été mise à jour.',
	'ICONS_EDITED'			=> 'Les icônes ont été mises à jour.',
	'ICONS_HEIGHT'			=> 'Hauteur de l\'icòna',
	'ICONS_IMAGE'			=> 'Image de l\'icòna',
	'ICONS_IMPORTED'		=> 'Lo pack d\'icônes a été installé.',
	'ICONS_IMPORT_SUCCESS'	=> 'Lo pack d\'icônes a été importé.',
	'ICONS_LOCATION'		=> 'Emplacement de l\'icòna',
	'ICONS_NOT_DISPLAYED'	=> 'Les icônes suivantes ne sont pas affichées sur la page de rédaction',
	'ICONS_ORDER'			=> 'Classement de l\'icòna',
	'ICONS_URL'				=> 'Image de l\'icòna',
	'ICONS_WIDTH'			=> 'Largeur de l\'icòna',
	'IMPORT_ICONS'			=> 'Installer un pack d\'icônes',
	'IMPORT_SMILIES'		=> 'Installer un pack de smileys',

	'KEEP_ALL'			=> 'Tout conserver',

	'MASS_ADD_SMILIES'	=> 'Apondre de multiples smileys',

	'NO_ICONS_ADD'		=> 'Il n\'y a pas d\'icônes à apondre.',
	'NO_ICONS_EDIT'		=> 'Il n\'y a pas d\'icòna à modification.',
	'NO_ICONS_EXPORT'	=> 'Vous n\'avez pas d\'icônes amb lesquelles créer un pack.',
	'NO_ICONS_PAK'		=> 'Aucun pack d\'icônes trouvé.',
	'NO_SMILIES_ADD'	=> 'Il n\'y a pas de smileys à apondre.',
	'NO_SMILIES_EDIT'	=> 'Il n\'y a pas de smileys à modification.',
	'NO_SMILIES_EXPORT'	=> 'Vous n\'avez pas de smileys amb lesquels créer un pack.',
	'NO_SMILIES_PAK'	=> 'Aucun pack de smileys trouvé.',

	'PAK_FILE_NOT_READABLE'		=> 'Impossible de lire lo fichièr <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Remplacer les résultats',

	'SELECT_PACKAGE'			=> 'Seleccionar un pack',
	'SMILIES_ADD'				=> 'Apondre un nouveau smiley',
	'SMILIES_NONE_ADDED'		=> 'Aucun smiley n\'a été ajouté.',
	'SMILIES_ONE_ADDED'			=> 'Lo smiley a été ajouté.',
	'SMILIES_ADDED'				=> 'Les smileys ont été ajoutés.',
	'SMILIES_CODE'				=> 'Code del smiley',
	'SMILIES_CONFIG'			=> 'Configuracion del smiley',
	'SMILIES_DELETED'			=> 'Lo smiley a été supprimé.',
	'SMILIES_EDIT'				=> 'Editer lo smiley',
	'SMILIE_NO_CODE'			=> 'The smilie “%s”  was ignored, as there was no code entered.',
	'SMILIE_NO_EMOTION'			=> 'The smilie “%s” was ignored, as there was no emotion entered.',
	'SMILIES_NONE_EDITED'		=> 'Aucun smiley n\'a été mes à jour.',
	'SMILIES_ONE_EDITED'		=> 'Lo smiley a été mes à jour.',
	'SMILIES_EDITED'			=> 'Les smileys ont été mes à jour.',
	'SMILIES_EMOTION'			=> 'Emotion',
	'SMILIES_HEIGHT'			=> 'Hauteur del smiley',
	'SMILIES_IMAGE'				=> 'Image del smiley',
	'SMILIES_IMPORTED'			=> 'Lo pack de smileys a été installé.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Lo pack de smileys a été importé.',
	'SMILIES_LOCATION'			=> 'Emplacement del smiley',
	'SMILIES_NOT_DISPLAYED'		=> 'Les smileys suivants ne sont pas affichés sur la page de rédaction',
	'SMILIES_ORDER'				=> 'Classement del smiley',
	'SMILIES_URL'				=> 'Image del smiley',
	'SMILIES_WIDTH'				=> 'Largeur del smiley',

	'WRONG_PAK_TYPE'	=> 'Lo pack spécifié ne contient pas les données appropriées.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Depuis aqueste panèl de contrôle, vous pouvez apondre, éditer e suprimir les mots qui seront automatiquement censurés sur vòstre forum. En outre, personne ne pourra s\'inscrire amb un nom d\'utilizaire contenant un d\'aquestes mots. Les jokers (*) sont acceptés dins lo champ, exemple: *test* censurera détestable, test* censurera testament, *test censurera contest.',
	'ADD_WORD'				=> 'Apondre un nouveau mot',

	'EDIT_WORD'		=> 'Editer la censure',
	'ENTER_WORD'	=> 'Debètz entrer un mot e son remplaçant.',

	'NO_WORD'	=> 'Aucun mot seleccionat à édité.',

	'REPLACEMENT'	=> 'Remplacement',

	'UPDATE_WORD'	=> 'Botar à jour la censure',

	'WORD'				=> 'Mot',
	'WORD_ADDED'		=> 'La censure a été ajoutée.',
	'WORD_REMOVED'		=> 'La censure seleccionat a été supprimée.',
	'WORD_UPDATED'		=> 'La censure seleccionat a été mise à jour.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Utilisez aqueste formulaire per apondre, éditer, visionner o suprimir dels rangs. Podètz aussi créer dels rangs spéciaux qui pourront èsser attribués à un utilizaire via la gestion de l\'utilizaire.',
	'ADD_RANK'				=> 'Apondre un nouveau rang',

	'MUST_SELECT_RANK'		=> 'Debètz seleccionar un rang.',

	'NO_ASSIGNED_RANK'		=> 'Pas de rang especial assigné.',
	'NO_RANK_TITLE'			=> 'Vous n\'avez pas spécifié de titre per lo rang.',
	'NO_UPDATE_RANKS'		=> 'Lo rang a été supprimé. Cependant les comptes d\'utilizaires utilisant aqueste rang n\'ont pas été mes à jour. Vous devrez donc reinicializar manuellement lo rang d\'aquestes comptes.',

	'RANK_ADDED'			=> 'Lo rang a été ajouté.',
	'RANK_IMAGE'			=> 'Image del rang',
	'RANK_IMAGE_EXPLAIN'	=> 'Utilisez ceci per définir una petite image à associer al rang. Lo chemin est relatif per rapport à la racine de vòstre forum phpBB.',
	'RANK_MINIMUM'			=> 'Messatges minimums',
	'RANK_REMOVED'			=> 'Lo rang a été supprimé.',
	'RANK_SPECIAL'			=> 'Définir coma rang especial',
	'RANK_TITLE'			=> 'Titre del rang',
	'RANK_UPDATED'			=> 'Lo rang a été mes à jour.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Podètz contrôler ici les noms d\'utilizaires qui ne sont pas autorizats à èsser utilisés. Les noms d\'utilizaires interdits sont autorizats à contenir un joker *. Notez que vous ne serez pas autorisé à spécifier tout nom d\'utilizaire étant déjà inscrit, vous devez d\'abord suprimir aqueste nom, puis l\'interdire.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Podètz utiliser lo caractère * per far una correspondance amb n\'importe quel caractère.',
	'ADD_DISALLOW_TITLE'	=> 'Apondre un nom interdit',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Podètz retirer un nom de la liste en lo sélectionnant puis en cliquant sur envoyer.',
	'DELETE_DISALLOW_TITLE'		=> 'Supprimer un nom interdit',
	'DISALLOWED_ALREADY'		=> 'Lo nom entré ne peut èsser interdit. Il peut soit déjà èsser interdit, soit èsser déjà utilisé sul forum.',
	'DISALLOWED_DELETED'		=> 'Lo nom interdit a été supprimé.',
	'DISALLOW_SUCCESSFUL'		=> 'Lo nom interdit a été ajouté.',

	'NO_DISALLOWED'				=> 'Aucun nom interdit',
	'NO_USERNAME_SPECIFIED'		=> 'Vous n\'avez spécifié aucun nom.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Ici, vous pouvez gerir les rasons utilisées dins les rapòrts lors de la desaprovacion de messatges. Il y a una rason per défaut (marquée amb *) que vous ne pouvez pas suprimir, cette rason est utilisée normalement per les messatges personalizats si aucune rason n\'est spécifiée.',
	'ADD_NEW_REASON'		=> 'Apondre una nouvelle rason',
	'AVAILABLE_TITLES'		=> 'Titres dels rasons traduits disponibles',

	'IS_NOT_TRANSLATED'			=> 'La rason n\'a <strong>pas</strong> été traduite.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'La rason n\'a <strong>pas</strong> été traduite. Si vous souhaitez renseigner lo formulaire traduit, spécifiez la clé correcte dels fichièrs de lengas dins la section dels rasons de rapòrts/refus.',
	'IS_TRANSLATED'				=> 'La rason a été traduite.',
	'IS_TRANSLATED_EXPLAIN'		=> 'La rason a été traduite. Si lo titre que vous avez entré ici est spécifié dins les fichièrs de lengas dins la section dels rasons de rapòrts/refus, lo formulaire traduit del titre e de la description serà utilisé.',

	'NO_REASON'					=> 'La rason est introuvable.',
	'NO_REASON_INFO'			=> 'Debètz spécifier un titre e una description per cette rason.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Vous ne pouvez pas suprimir la rason per défaut "Autres".',

	'REASON_ADD'				=> 'Apondre una rason al rapport',
	'REASON_ADDED'				=> 'Une rason a été ajoutée al rapport.',
	'REASON_ALREADY_EXIST'		=> 'Une rason existe déjà amb aqueste titre, entrez un autre titre per cette rason.',
	'REASON_DESCRIPTION'		=> 'Descripcion de la rason',
	'REASON_DESC_TRANSLATED'	=> 'Descripcion affichée de la rason',
	'REASON_EDIT'				=> 'Editer la rason del rapport',
	'REASON_EDIT_EXPLAIN'		=> 'Ici, vous pouvez apondre o éditer una rason. Si la rason est traduite, la version traduite serà utilisée al lieu de la description entrée ici.',
	'REASON_REMOVED'			=> 'La rason del rapport a été supprimée.',
	'REASON_TITLE'				=> 'Titre de la rason',
	'REASON_TITLE_TRANSLATED'	=> 'Titre affiché de la rason',
	'REASON_UPDATED'			=> 'La rason a été mise à jour.',

	'USED_IN_REPORTS'		=> 'Utilisé dins les rapòrts',
));

 ?>
