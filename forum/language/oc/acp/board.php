<?php
/**
*
* acp_board [Occitan]
*
* @package language
* @version $Id: board.php,v 1.100 2007/10/09 15:42:39 kellanved Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez modificar les paramètres de base de vòstre forum, depuis lo nom del site jusqu\'à la validation de l\'inscription per messatge privé.',
	'CUSTOM_DATEFORMAT'				=> 'Personnalisée',
	'DEFAULT_DATE_FORMAT'			=> 'Format de la date',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Lo format de la date est lo même que la fonction <code>date</code> de PHP',
	'DEFAULT_LANGUAGE'				=> 'Langue per défaut',
	'DEFAULT_STYLE'					=> 'Style per défaut',
	'DISABLE_BOARD'					=> 'Desactivar lo forum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ceci va rendre lo forum inaccessible à vos utilizaires. Podètz rentrer un messatge (255 caractères max.) per leur en expliquer la rason.',
	'OVERRIDE_STYLE'				=> 'Annuler lo estil de l\'utilizaire',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Remplace lo estil de l\'utilizaire per lo estil per défaut.',
	'SITE_DESC'						=> 'Descripcion del site',
	'SITE_NAME'						=> 'Nom del site',
	'SYSTEM_DST'					=> 'Activar l\'heure d\'été',
	'SYSTEM_TIMEZONE'				=> 'Fuseau horaire',
	'WARNINGS_EXPIRE'				=> 'Durée de l\'avertiment',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Nombre de jours avant que l\'avertiment ne disparaisse dels paramètres de l\'utilizaire.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Ici, vous pouvez activar/desactivar certaines opcions del forum.',

	'ALLOW_ATTACHMENTS'			=> 'Autorizar les fichièrs junts',
	'ALLOW_BIRTHDAYS'			=> 'Autoriza les anniversaires',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Autoriza la saisie dels dates anniversaires e l\'affichage de l\'âge dins les profils. Notez que l\'affichage dels anniversaires sur l\'indèx del forum est un réglage différent de celui-ci.',
	'ALLOW_BOOKMARKS'			=> 'Autorizar la mise en favoris dels sujets',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Autoriza les utilizaires à botar dels sujets en favoris.',
	'ALLOW_BBCODE'				=> 'Autorizar les BBCodes',
	'ALLOW_FORUM_NOTIFY'		=> 'Autorizar la surveillance dels forums',
	'ALLOW_NAME_CHANGE'			=> 'Autorizar les modifications de nom d\'utilizaire',
	'ALLOW_NO_CENSORS'			=> 'Autorizar la désactivation de la censure',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'L\'utilizaire peut desactivar la censure dins ses messatges.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Autorizar les fichièrs junts dins les messatges privats',
	'ALLOW_SIG'					=> 'Autorizar les signatures',
	'ALLOW_SIG_BBCODE'			=> 'Autorizar les BBCodes dins les signatures',
	'ALLOW_SIG_FLASH'			=> 'Autorizar l\'utilisation del BBCode <code>[FLASH]</code> dins la signatura',
	'ALLOW_SIG_IMG'				=> 'Autorizar l\'utilisation del BBCode <code>[IMG]</code> dins la signatura',
	'ALLOW_SIG_LINKS'			=> 'Autorizar les ligams dins les signatures',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Si non autorisé, lo BBCode <code>[URL]</code> serà désactivé.',
	'ALLOW_SIG_SMILIES'			=> 'Autorizar les smileys dins les signatures',
	'ALLOW_SMILIES'				=> 'Autorizar les smileys',
	'ALLOW_TOPIC_NOTIFY'		=> 'Autorizar la surveillance dels sujets',
	'BOARD_PM'					=> 'Messatjariá privée',
	'BOARD_PM_EXPLAIN'			=> 'Activar o desactivar la messagerie privée.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Les avatars sont de petites images choisies per un utilizaire per lo représenter. Selon lo thème, ils sont en général affichés sous lo nom d\'utilizaire lors de la visualisation dels forums. Ici, vous pouvez causir quelle méthode l\'utilizaire peut utiliser per causir son avatar. Dans lo cas ont vous autorisez l\'envoi d\'avatar, vous devez spécifier ci-dessous lo nom del repertòri en question e vous assurer dels droits en écriture de aqueste repertòri. Notez enfin que les limites de tailles d\'avatar envoyé sul servidor ne concernent pas les avatars dont on aura fourni un lien externe.',

	'ALLOW_LOCAL'					=> 'Activar la galerie d\'avatars',
	'ALLOW_REMOTE'					=> 'Autorizar les avatars',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Autorizar les avatars liés à un autre site',
	'ALLOW_UPLOAD'					=> 'Autorizar l\'envoi d\'avatar',
	'AVATAR_GALLERY_PATH'			=> 'Répertoire de la galerie d\'avatars',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Chemin d\'accès al dossier d\'avatars depuis la racine de phpBB, exemple: <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Dossier de stockage dels avatars',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Chemin d\'accès al dossier d\'avatars depuis la racine de phpBB, exemple: <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensions maximales dels avatars',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Hauteur x Largeur en pixels.',
	'MAX_FILESIZE'					=> 'Poids maximum de l\'avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Poids maximum dels avatars envoyés sul servidor.',
	'MIN_AVATAR_SIZE'				=> 'Dimensions minimales de l\'avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Hauteur x Largeur en pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez modificar tous les paramètres de la messagerie privée.',

	'ALLOW_BBCODE_PM'			=> 'Autorizar les BBCodes',
	'ALLOW_FLASH_PM'			=> 'Autorizar lo BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Notez que si vous autorisez ici l\'utilisation del Flash dins les messatges privats, cela dépendra également dels permissions.',
	'ALLOW_FORWARD_PM'			=> 'Autorizar lo transferiment de messatge vers un autre utilizaire',
	'ALLOW_IMG_PM'				=> 'Autorizar lo BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Autorizar l\'envoi de messatges privats à plusieurs utilizaires o à un grop complet en même temps',
	'ALLOW_PRINT_PM'			=> 'Autorizar la visualisation de l\'impression dins la messagerie privée',
	'ALLOW_QUOTE_PM'			=> 'Autorizar les citations dins les messatges privats',
	'ALLOW_SIG_PM'				=> 'Autorizar les signatures dins les messatges privats',
	'ALLOW_SMILIES_PM'			=> 'Autorizar les smileys dins les messatges privats',
	'BOXES_LIMIT'				=> 'Nombre de messatges maximum dins la messagerie privée',
	'BOXES_LIMIT_EXPLAIN'		=> 'Botar "0" per ne pas imposer de limite.',
	'BOXES_MAX'					=> 'Nombre maximum de dossiers',
	'BOXES_MAX_EXPLAIN'			=> 'Les utilizaires peuvent créer autant de dossiers per classer lors messatges.',
	'ENABLE_PM_ICONS'			=> 'Autorizar les icônes de tèma',
	'FULL_FOLDER_ACTION'		=> 'Que far en cas de messagerie pleine ?',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Seleccionatz l\'action à efectuar lorsqu\'un utilizaire reçoit un messatge privé mas que sa messagerie est pleine.',
	'HOLD_NEW_MESSAGES'			=> 'Rejeter les nouveaux messatges',
	'PM_EDIT_TIME'				=> 'Temps limite d\'édition',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Temps après lequel on ne peut plus éditer un messatge privé quand il n\'a pas encore été délivré.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Podètz définir tous les réglages per défaut per les messatges.',
	'ALLOW_POST_LINKS'					=> 'Autorizar les ligams dins lo messatges',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Si interdit, la balise bbcode <code>[URL]</code> e les urls seront désactivées.',
	'ALLOW_POST_FLASH'					=> 'Autorizar lo BBCode <code>[FLASH]</code>. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Si interdit, lo BBCode <code>[FLASH]</code> serà désactivé. Autrement, lo système de permission déterminera les membres pouvant utiliser lo BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Intervalle de remontée de tèma',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Durée entre la date d\'écriture del dernier messatge e la possibilité de remonter lo tèma.',
	'CHAR_LIMIT'					=> 'Nombre maximum de caractères per messatge',
	'CHAR_LIMIT_EXPLAIN'			=> 'Botar "0" per ne pas imposer de limite.',
	'DISPLAY_LAST_EDITED'			=> 'Afficher la rason de la dernière édition',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Afficher o non la rason de la modificacion d\'un messatge.',
	'EDIT_TIME'						=> 'Temps limite d\'édition',
	'EDIT_TIME_EXPLAIN'				=> 'Durée d\'autorisation d\'édition del messatge après l\'avoir posté.',
	'FLOOD_INTERVAL'				=> 'Intervalle de flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Temps d\'attente entre lo postage de 2 messatges. Pour autoriser les utilizaires à outrepasser aqueste temps, modifiez lo dins lors permissions.',
	'HOT_THRESHOLD'					=> 'Seuil de popularité dels sujets',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Nombre de messatges requis afin qu\'un tèma soit affiché coma étant populaire. Botar "0" per desactivar les sujets populaires.',
	'MAX_POLL_OPTIONS'				=> 'Nombre maximum d\'opcions de vote',
	'MAX_POST_FONT_SIZE'			=> 'Taille maximale de la police',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Botar "0" per ne pas imposer de limite.',
	'MAX_POST_IMG_HEIGHT'			=> 'Hauteur maximale d\'una image',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale d\'un fichièr image o flash dins un messatge. Botar "0" per ne pas imposer de limite.',
	'MAX_POST_IMG_WIDTH'			=> 'Largeur maximale d\'una image',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largeur maximale d\'un fichièr image o flash dins un messatge. Botar "0" per ne pas imposer de limite.',
	'MAX_POST_URLS'					=> 'Nombre maximum de ligams',
	'MAX_POST_URLS_EXPLAIN'			=> 'Botar "0" per ne pas imposer de limite.',
	'POSTING'						=> 'Messatges',
	'POSTS_PER_PAGE'				=> 'Messatges per page',
	'QUOTE_DEPTH_LIMIT'				=> 'Nombre maximum de citations imbriquées',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Nombre maximum de citations imbriquées autorizadas dins un messatge. Botar "0" per ne pas imposer de limite.',
	'SMILIES_LIMIT'					=> 'Nombre maximum de smileys per messatge',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Botar "0" per ne pas imposer de limite.',
	'TOPICS_PER_PAGE'				=> 'Sujets per page',
));

// Signatura Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez modificar les paramètres per les signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Taille maximale de la police',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Taille de police maximale autorisée dins les signatures. Botar "0" per ne pas imposer de limite.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Hauteur maximale d\'una image',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale d\'un fichièr image o flash dins la signatura. Botar "0" per ne pas imposer de limite.',
	'MAX_SIG_IMG_WIDTH'				=> 'Largeur maximale d\'una image',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largeur maximale d\'un fichièr image o flash dins la signatura. Botar "0" per ne pas imposer de limite.',
	'MAX_SIG_LENGTH'				=> 'Longueur maximale de la signatura',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Nombres de caractères maximum dins la signatura.',
	'MAX_SIG_SMILIES'				=> 'Nombre maximum de smileys',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Nombre maximum de smileys dins les signatures. Botar "0" per ne pas imposer de limite.',
	'MAX_SIG_URLS'					=> 'Nombre maximum de ligams',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Nombre maximum de ligams hypertexte dins la signatura. Botar "0" per ne pas imposer de limite.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez modificar les paramètres relatifs à l\'inscription e als profils d\'utilizaires.',

	'ACC_ACTIVATION'			=> 'Activation del compte',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Définit si les utilizaires ont accès al forum immédiatement après l\'enregistrement o si leur compte doit èsser activé (soit per l\'utilizaire lui-même o per un administrateur). Podètz également desactivar les inscriptions temporairement.',
	'ACC_ADMIN'					=> 'Par l\'administrateur',
	'ACC_DISABLE'				=> 'Desactivar',
	'ACC_NONE'					=> 'Aucun',
	'ACC_USER'					=> 'Par l\'utilizaire',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Partage dels adreças e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Si "Oui", plusieurs utilizaires peuvent s\'enregistrer amb la même adresse e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numéro de fax COPPA',
	'COPPA_MAIL'				=> 'Adreça e-mail COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Adreça e-mail ont les parents envoient les formulaires COPPA.',
	'ENABLE_COPPA'				=> 'Activar la COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Nécessite de déclarer si les utilizaires inscrits ont 13 ans o plus en accord amb la COPPA. Si aqueste réglage est désactivé, les grops COPPA ne seront plus affichés.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'MIN_TIME_REG'				=> 'Temps minimum requis per l\'inscription',
	'MIN_TIME_REG_EXPLAIN'		=> 'Lo formulaire d\'inscription ne pourra pas èsser envoyé avant que aqueste temps ne soit dépassé.',
	'MIN_TIME_TERMS'			=> 'Temps minimum requis per l\'acceptation dels conditions',
	'MIN_TIME_TERMS_EXPLAIN'	=> 'Les conditions d\'utilisation ne pourront pas èsser acceptées o refusées avant que aqueste temps ne soit dépassé.',
	'NO_AUTH_PLUGIN'			=> 'Aucun module d\'authentification trouvé.',
	'PASSWORD_LENGTH'			=> 'Longueur del mot de pas',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Nombre de caractères minimum e maximum dins lo mot de pas.',
	'REG_LIMIT'					=> 'Tentatives d\'inscription',
	'REG_LIMIT_EXPLAIN'			=> 'Nombre de tentatives de saisie del code visuel avant d\'èsser exclu per la sesilha.',
	'USERNAME_ALPHA_ONLY'		=> 'Alphanumérique',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumérique e spacers',
	'USERNAME_ASCII'			=> 'ASCII (aucun caractère unicode international)',
	'USERNAME_LETTER_NUM'		=> 'Tous chiffres e lettres',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Tous chiffres, lettres e espaces',
	'USERNAME_CHARS'			=> 'Restriction dels caractéristiques del nom d\'utilizaire',
	'USERNAME_CHARS_ANY'		=> 'N\'importe quel caractère',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restriction del type de caractères utilisables dins les noms d\'utilizaires, les espaces comprennent: espace, -, +, _, [ e ].',
	'USERNAME_LENGTH'			=> 'Longueur del nom d\'utilizaire',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Nombre de caractères minimum e maximum dins lo nom d\'utilizaire.',));

// Visual Confirmacion Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez définir les réglages de la confirmacion visuala e les réglages de <a target="_blank" href="http://fr.wikipedia.org/wiki/Captcha">Captcha</a>.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA amb bruit de fond',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilise GD per un CAPTCHA plus avancé.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Utiliser un bruit de fond per far una CAPTCHA plus difficile à déchiffrer per les robots.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA amb bruit de fond x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utiliser lo paramètre ci-dessous per rendre la confirmacion visuala plus difficile à déchiffrer. Botar "0" per desactivar lo bruit de fond x-axis.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA amb bruit de fond y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utiliser lo paramètre ci-dessous per rendre la confirmacion visuala plus difficile à déchiffrer. Botar "0" per desactivar lo bruit de fond y-axis.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Vos modifications per les paramètres de la confirmacion visuala n\'ont pas été sauvegardées. Ceci est juste un aperçu.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Voici la CAPTCHA telle qu\'elle va apparaître amb vos paramètres actuels. Utiliser lo bouton précédent per rafraîchir. Notez que les CAPTCHA sont aléatoires e différents d\'un membre à l\'autre.',
	'VISUAL_CONFIRM_POST'					=> 'Activar la confirmacion visuala per les visiteurs',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Oblige les utilizaires invités à saisir un code aléatoire correspondant à una image per pouvoir poster un messatge.',
	'VISUAL_CONFIRM_REG'					=> 'Activar la confirmacion visuala per les inscriptions',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Oblige les nouveaux utilizaires à saisir un code aléatoire correspondant à una image per valider les inscriptions.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Entresenhas permettant d\'envoyer dels cookies. Dans la majorité dels cas, les valors per défaut suffisent. Attention en cas de modification, dels paramètres incorrects peuvent empachar la connexion dels membres.',

	'COOKIE_DOMAIN'				=> 'Domaine dels cookies',
	'COOKIE_NAME'				=> 'Nom dels cookies',
	'COOKIE_PATH'				=> 'Chemin de cookie',
	'COOKIE_SECURE'				=> 'Cookie sécurisé',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ne fonctionne que si vòstre servidor gère lo protocole SSL. Si vous l\'activez e que vòstre servidor ne gère pas lo protocole SSL, dels erreurs se produiront lors dels redirections.',
	'ONLINE_LENGTH'				=> 'Voir la durée de connexion',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Durée après laquelle les utilizaires inactius sont déconnectés, una valeur basse est recommandée.',
	'SESSION_LENGTH'			=> 'Durée de la sesilha',
	'SESSION_LENGTH_EXPLAIN'	=> 'Les sessions expirent après cette durée, en secondes.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Podètz desactivar certaines fonctions per réduire lo temps processeur utilisé. Sur la plupart dels serveurs, c\'est inutile. Cela peut cependant èsser utile de desactivar aqueste qui es pas nécessaire sur dels serveurs mutualisés. Podètz spécifier una limite de charge al-delà de laquelle les forums se déconnectent.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Camps de perfil personalizats',
	'LIMIT_LOAD'					=> 'Limiter la charge système',
	'LIMIT_LOAD_EXPLAIN'			=> 'Si la charge d\'una minute dépasse cette valeur les forums seront déconnectés, 1.0 signifie approximativement 100% de l\'utilisation d\'un processeur. Ne fonctionne que sur les serveurs UNIX.',
	'LIMIT_SESSIONS'				=> 'Nombre de sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Si lo nombre de connexions per minute dépasse cette valeur, lo forum serà désactivé. Botar "0" per illimité.',
	'LOAD_CPF_MEMBERLIST'			=> 'Afficher dels champs personalizats dins la liste dels membres',
	'LOAD_CPF_VIEWPROFILE'			=> 'Afficher dels champs personalizats dins lo perfil public de l\'utilizaire',
	'LOAD_CPF_VIEWTOPIC'			=> 'Afficher dels champs personalizats dins la lecture dels sujets',
	'LOAD_USER_ACTIVITY'			=> 'Afficher l\'activité dels utilizaires',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Affiche les sujets/forums actifs sur les cartes de visites e dins les préférences. Il est recommandé de suprimir cette option per les forums de mai d\'un million de messatges.',
	'RECOMPILE_STYLES'				=> 'Recompiler les différents éléments del estil',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Cherche les nouvelles mises à jour del estil e les recompile.',
	'YES_ANON_READ_MARKING'			=> 'Activar l\'indicateur de lecture per les visiteurs',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Enregistre l\'état de lecture per les visiteurs. Si désactivé, les contributions sont toujours considérées coma lues per les visiteurs.',
	'YES_BIRTHDAYS'					=> 'Affichage de la liste dels anniversaires',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si désactivé, la liste dels anniversaires ne serà plus affichée. Ce réglage n\'est pris en compte que si la fonctionnalité dels anniversaires est également activée.',
	'YES_JUMPBOX'					=> 'Affichage de l\'accès rapide als forums',
	'YES_MODERATORS'				=> 'Affichage dels moderaires',
	'YES_ONLINE'					=> 'Affichage de la liste dels membres en linha',
	'YES_ONLINE_EXPLAIN'			=> 'Affiche aquestes informations sur l\'accueil, dins les forums e sujets.',
	'YES_ONLINE_GUESTS'				=> 'Affichage dels visiteurs dins "Qui est en ligne"',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Affiche les informations concernant les visiteurs dins "Qui est en ligne".',
	'YES_ONLINE_TRACK'				=> 'Affichage de l\'état de connexion',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Affiche dins lo perfil public e les sujets lo statut de l\'utilizaire.',
	'YES_POST_MARKING'				=> 'Activar les sujets publiés',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indique si lo membre a participé al tèma.',
	'YES_READ_MARKING'				=> 'Sujets cochés per lo servidor',
	'YES_READ_MARKING_EXPLAIN'		=> 'Enregistre l\'état lu/non lu dins la base plutôt que dins un cookie.',));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB utilise dels moduls d\'authentification. Ils déterminent la manière de s\'authentifier per accedir als forums. Trois moduls sont fournis en standard; DB, LDAP e Apache. Toutes les méthodes ne nécessitent pas d\'informations supplémentaires, ne saisissez donc que les informations concernant vòstre méthode.',

	'AUTH_METHOD'				=> 'Méthode d\'authentification',

	'APACHE_SETUP_BEFORE_USE'	=> 'Debètz configurer l\'authentification apache avant que phpBB ne puisse l\'utiliser. Gardez en tête que lo pseudonyme utilisé per l\'authentification Apache est identique à vòstre pseudonyme phpBB.',

	'LDAP_DN'						=> '<var>DN</var> de la base LDAP',
	'LDAP_DN_EXPLAIN'				=> '<var>DN</var> est lo "Distinguished Name", il situe les informations utilizaires, exemple: <samp>o=Mon entreprise, c=FR</samp>.',
	'LDAP_EMAIL'					=> 'Attribut adresse LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Nom de l\'entrée d\'attribut d\'adresse électronique (s\'il existe) per définir automatiquement l\'adresse électronique dels nouveaux utilizaires. Lo laisser void donnera una adresse void per les utilizaires se connectant per la première fois.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La connexion al servidor LDAP a échoué amb les login/mot de pas spécifiés.',
	'LDAP_NO_EMAIL'					=> 'Aqueste attribut d\'adresse électronique existís pas.',
	'LDAP_NO_IDENTITY'				=> 'Impossible de trouver un identifiant de connexion per %s',
	'LDAP_PASSWORD'					=> 'Mot de pas LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Laissez void per un accès convidat. Sinon, indiquez lo mot de pas de connexion. Requis per les serveurs possédant un Active Directory. <strong>ATTENTION:</strong> Ce mot de pas serà stocké en clair dins vòstre de base de données e serà, per conséquent, visible per n\'importe qui ayant accès à vòstre base o à cette page de configuration.',
	'LDAP_PORT'						=> 'Port del servidor LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Sur option, vous pouvez indicar un port qui devrait èsser employé per se relier al servidor LDAP al lieu del port 389 per défaut.',
	'LDAP_SERVER'					=> 'Nom del servidor LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Nom o IP del servidor LDAP éventuel. Podètz également spécifier una URL del type ldap://hostname:port/',
	'LDAP_UID'						=> 'Identifiant LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Clé utilisée per la recèrca d\'un identifiant de connexion, exemple: <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'Utilizaire LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Laissez void per utiliser un accès convidat. Si renseigné dins phpBB, il se connectera al servidor LDAP en tant qu\'un utilizaire spécifié, exemple: <samp>uid=Utilizaire,o=MonUnité,o=MaCompagnie,c=FR</samp>. Requis per les serveurs possédant un Active Directory.',
	'LDAP_USER_FILTER'				=> 'Filtre de l\'utilizaire LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Sur option, vous pouvez en plus limiter les objets recherchés amb dels filtres additionnels. Par exemple <samp>objectClass=posixGroup</samp> aurait coma conséquence l\'utilisatiuon de <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez modificar les paramètres de domaine e de servidor. Vérifiez la précision dels données saisies, afin d\'éviter que vos messatges électroniques ne contiennent dels données erronées. Lo nom de domaine doit contenir http:// o una autre information de protocole. Ne modifiez aqueste réglage que si vòstre servidor n\'utilise pas la valeur standard, 80 fonctionne dins la majorité dels cas.',

	'ENABLE_GZIP'				=> 'Activar la compression GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Lo contenu généré serà compressé avant d\'èsser envoyé à l\'utilizaire. Cela peut réduire lo trafic mas également augmenter l\'utilisation del CPU à la fois del côté servidor e client.',
	'FORCE_SERVER_VARS'			=> 'Forcer les réglages URL del servidor',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si "Oui" les réglages définis ici seront utilisés à la place dels valors déterminées automatiquement.',
	'ICONS_PATH'				=> 'Emplacement dels icônes',
	'ICONS_PATH_EXPLAIN'		=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/icons</samp>',
	'PATH_SETTINGS'				=> 'Chemins d\'accès',
	'RANKS_PATH'				=> 'Emplacement dels images dels rangs',
	'RANKS_PATH_EXPLAIN'		=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Chemin del script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Chemin d\'accès ont sont situés les fichièrs phpBB depuis la racine de vòstre site. exemple: <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'Nom de domaine',
	'SERVER_NAME_EXPLAIN'		=> 'Nom de domaine del servidor exécutant phpBB. (per exemple: <samp>www.exemple.com</samp>)',
	'SERVER_PORT'				=> 'Port del servidor',
	'SERVER_PORT_EXPLAIN'		=> 'Port utilisé per lo servidor, normalement 80.',
	'SERVER_PROTOCOL'			=> 'Protocole del servidor',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Utilisé coma protocole del servidor si les réglages sont forcés. Si void o non forcé lo protocole à utiliser est déterminé per lo réglage dels cookies sécurisés. (<samp>http://</samp> o <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Réglages URL del servidor',
	'SMILIES_PATH'				=> 'Emplacement dels smileys',
	'SMILIES_PATH_EXPLAIN'		=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Emplacement dels icônes de pièces jointes',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/upload_icons</samp>',
	));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez définir les réglages relatifs à l\'identification e à la sesilha.',

	'ALL'							=> 'Tous',
	'ALLOW_AUTOLOGIN'				=> 'Autoriza les connexions automatiques',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Détermine si les utilizaires peuvent èsser connectés automatiquement à chaque visite dels forums.',
	'AUTOLOGIN_LENGTH'				=> 'Expiration dels connexions automatiques (en jours)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Nombre de jours après lequel les clés de connexions automatiques sont retirées o botar "0" per rendre lo nombre de jours illimité.',
	'BROWSER_VALID'					=> 'Valider lo navigateur',
	'BROWSER_VALID_EXPLAIN'			=> 'Vérification del navigateur per améliorer la seguretat.',
	'CHECK_DNSBL'					=> 'Comparer l\'IP amb la liste noire DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Si actif, l\'IP est comparée per les services DNSBL lors de l\'inscription e dels contributions: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> e <a href="http://wwww.spamhaus.org">www.spamhaus.org</a>. Cette vérification peut prendre un moment, selon la configuration dels serveurs. Si vous remarquez dels ralentissements o de trop nombreux faux positifs il est recommandé de desactivar la vérification.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Verificar l\'e-mail per un enregistrement MX valide',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Si activé, lo domaine de l\'e-mail fourni lors de l\'inscription e dels modifications de perfil est contrôlé, per s\'assurer qu\'il possède un enregistrement MX valide.',
	'FORCE_PASS_CHANGE'				=> 'Forcer la modification del mot de pas',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Impose à l\'utilizaire de modificar son mot de pas après una certaine durée en jours. Botar "0" per desactivar cette fonctionnalité.',
	'FORM_TIME_MAX'					=> 'Temps maximum lors de l\'envoi dels formulaires',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Détermine lo temps qu\'un utilizaire mettra per envoyer un formulaire. Botar "-1" per desactivar aqueste comportement. Notez qu\'un formulaire peut devenir invalide si la sesilha expire, e cela indépendamment de aqueste réglage.',
	'FORM_TIME_MIN'					=> 'Temps minimum lors de l\'envoi dels formulaires',
	'FORM_TIME_MIN_EXPLAIN'			=> 'Les soumissions plus rapides que lo temps saisi ici seront ignorées. Botar "0" per desactivar aqueste comportement.',
	'FORM_SID_GUESTS'				=> 'Lier les formulaires als sessions dels invités',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Si activé, les formulaires émis als invités seront exclusifs à leur sesilha. Cela peut entraîner quelques problèmes amb certains fournisseurs d\'accés.',
	'FORWARDED_FOR_VALID'			=> 'Entête <var>X_FORWARDED_FOR</var> validée',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Les sessions seront seulement continuées si l\'entête <var> X_FORWARDED_FOR </var> envoyée est égale à celle envoyée amb la demande précédente. L\'en-tête <var>X_FORWARDED_FOR</var> vérifiera également si les adreças IP n\'ont pas été bannies.',
	'IP_VALID'						=> 'Validation de sesilha IP',
	'IP_VALID_EXPLAIN'				=> 'Détermine quelle partie de l\'IP dels utilizaires serà utilisée per valider una sesilha : <samp>Tout</samp> compare l\'adresse complète, <samp>A.B.C</samp> les premiers x.x.x, <samp>A.B</samp> les premiers x.x, <samp>Aucun</samp> désactive la vérification. Pour les adreças IPv6, <samp>A.B.C</samp> compare les 4 premiers blocs e <samp>A.B</samp> les 3 premiers.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Nombre maximal de tentatives de connexion',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Après aqueste nombre d\'échec l\'utilizaire devra procéder à una nouvelle confirmacion visuala.',
	'NO_IP_VALIDATION'				=> 'Pas cap',
	'NO_REF_VALIDATION'				=> 'Pas cap',
	'PASSWORD_TYPE'					=> 'Complexité del mot de pas',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Détermine la complexité requise per définir o modificar un mot de pas, les opcions successives incluent les précédentes.',
	'PASS_TYPE_ALPHA'				=> 'Doit contenir dels lettres e dels chiffres',
	'PASS_TYPE_ANY'					=> 'Saisie libre',
	'PASS_TYPE_CASE'				=> 'Doit contenir dels min e maj',
	'PASS_TYPE_SYMBOL'				=> 'Doit contenir dels symboles',
	'REF_HOST'						=> 'Validar pas que l\òste',
	'REF_PATH'						=> 'Validar tanben lo camin',
	'REFERER_VALID'					=> 'Validar lo referent',
	'REFERER_VALID_EXPLAIN'			=> 'S\'es activat, lo referent de las requèstas POST serà verificact per rapòrt als paramètres del camin de l\'òste/del escript. Pòt pausar de problèmas amb de forums qu\'utilizan mai d\'un domeni e/o d\'identificacions extèrnas.',
	'TPL_ALLOW_PHP'					=> 'Autoriza lo php dins los modèls',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Si cette option est activée, les instructions <code>PHP</code> e <code>INCLUDEPHP</code> seront reconnues e analysées.',
	));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Cette information est utilisée per l\'envoi de courriers électroniques. Vérifiez la validité de l\'adresse spécifiée car les messatges refusés o indélivrables y seront renvoyés. Si vòstre fournisseur d\'hébergement ne fournit pas nativement un service d\'envoi d\'e-mails, (via PHP) vous pouvez envoyer directement les messatges en utilisant SMTP. Vous devrez indicar l\'adresse del servidor approprié (contactez vòstre fournisseur d\'hébergement si besoin). Si lo servidor nécessite una authentification (e seulement dins aqueste cas) entrez lo nom d\'utilizaire, lo mot de pas e la méthode d\'authentification nécessaire.',

	'ADMIN_EMAIL'					=> 'Adreça e-mail de l\'administrateur',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Cette adresse servira d\'adresse de réponse als e-mails envoyés.',
	'BOARD_EMAIL_FORM'				=> 'Messatjariá e-mail via lo forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Au lieu de montrer publiquement les adreças e-mails dels utilizaires, cette fonction permet d\'envoyer dels e-mails via lo forum.',
	'BOARD_HIDE_EMAILS'				=> 'Masquer les adreças électroniques',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Cette fonction préserve les adreças électroniques privées.',
	'CONTACT_EMAIL'					=> 'E-mail de contact',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Adreça utilisée lorsqu\'un contact particulier est nécessaire, exemple: spam, erreur survenue, etc. Elle est toujours utilisée coma adresse de l\'<samp>Expéditeur</samp> e <samp>adresse de réponse</samp> dins les e-mails.',
	'EMAIL_FUNCTION_NAME'			=> 'Nom de la fonction mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Fonction utilisée per envoyer dels courriers via PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Taille dels piles d\'e-mails',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Nombre d\'e-mails envoyés en una fois. Cette option est appliquée à la file d\'attente dels messatges; Botar "0" si vous rencontrez dels problèmes, tel que dels avertiments de messatges qui n\'ont pas été délivrés.',
	'EMAIL_SIG'						=> 'Signatura de l\'e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Ce tèxt serà junt à tous les e-mails envoyés.',
	'ENABLE_EMAIL'					=> 'Autorizar l\'envoi d\'e-mail via lo forum',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Si désactivé, aucun courrier ne serà envoyé per phpBB.',
	'SMTP_AUTH_METHOD'				=> 'Méthode d\'authentification SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'N\'utilisez la méthode d\'authentification que si un nom d\'utilizaire/mot de pas est requis. Contactez vòstre fournisseur d\'accès per plus de renseignements.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'Nom d\'utilizaire',
	'SMTP_PASSWORD'					=> 'Mot de pas SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'N\'entrez un mot de pas que si vòstre servidor SMTP en requiert un.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-AVANT-SMTP',
	'SMTP_PORT'						=> 'Port del servidor SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'N\'entrez un port différent que si vous êtes certain que vòstre servidor SMTP l\'utilise.',
	'SMTP_SERVER'					=> 'Adreça del servidor SMTP',
	'SMTP_SETTINGS'					=> 'Paramètres SMTP',
	'SMTP_USERNAME'					=> 'Nom d\'utilizaire SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'N\'entrez un nom d\'utilizaire que si vòstre servidor SMTP en requiert un.',
	'USE_SMTP'						=> 'Utiliser un servidor SMTP per l\'envoi d\'e-mails',
	'USE_SMTP_EXPLAIN'				=> 'Choisissez "oui" per envoyer les courriers per l\'intermédiaire d\'un servidor al lieu d\'utiliser la fonction mail.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez activar e contrôler l\'utilisation de Jabber per la messagerie instantanée e les notifications per les forums. Jabber est un protocole open-source e donc librement utilisable. Certains serveurs Jabber contiennent dels passerelles vers d\'autres réseaux. Tous les serveurs ne gèrent pas tous les réseaux. Aquestes passerelles peuvent cesser de fonctionner si lo protocole d\'un service change. Merci d\'indicar les informations d\'un nom d\'utilizaire inscrit - phpBB utilisera les informations indiquées telles quelles.',

	'JAB_ENABLE'				=> 'Activar lo service Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Active la messagerie e les notes Jabber.',
	'JAB_GTALK_NOTE'			=> 'Notez que GTalk ne marchera pas car la fonction <samp>dns_get_record</samp> est introuvable. Cette fonction es pas disponible dins PHP4 e elle es pas implémentée sur les environnements Windows. Cela ne fonctionne pas non plus sur les système basés sous BSD, y compris Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Taille dels paquets Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Nombre de messatges envoyés en una opération. Si mes à "0", lo messatge est envoyé immédiatement e ne serà pas placé en file d\'attente.',
	'JAB_PASSWORD'				=> 'Mot de pas Jabber',
	'JAB_PORT'					=> 'Port Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Ne pas modificar sauf si aqueste es pas lo port 5222.',
	'JAB_SERVER'				=> 'Serveur Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Aller veire %sjabber.org%s per la liste dels serveurs.',
	'JAB_SETTINGS_CHANGED'		=> 'Les paramètres Jabber ont été modifiés.',
	'JAB_USE_SSL'				=> 'Utiliser SSL per se connecter',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si activé, una connexion sécurisée tentera d\'èsser établie. Lo port de Jabber serà modifié en 5223, si lo port 5222 est utilisé.',
	'JAB_USERNAME'				=> 'Nom d\'utilizaire Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Indicatz un nom d\'utilizaire inscrit. La validité del nom d\'utilizaire ne serà pas vérifié.',
));

 ?>
