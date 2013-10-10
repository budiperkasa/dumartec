<?php
/**
*
* acp_board [French]
*
* @package language
* @version $Id: board.php 9037 2008-10-26 10:52:43Z acydburn $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Vous pouvez effectuer ici les réglages de base de votre forum, lui attribuer un nom et une description, régler son fuseau horaire ou encore définir sa langue par défaut.',
	'CUSTOM_DATEFORMAT'				=> 'Personnaliser…',
	'DEFAULT_DATE_FORMAT'			=> 'Format de la date',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Le format de la date est le même que celui de la fonction <code>date</code> de PHP.',
	'DEFAULT_LANGUAGE'				=> 'Langue par défaut',
	'DEFAULT_STYLE'					=> 'Style par défaut',
	'DISABLE_BOARD'					=> 'Désactiver le forum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Cela rendra le forum indisponible aux utilisateurs. Si vous le souhaitez, vous pouvez également fournir une brève explication (de 255 caractères maximum) à afficher.',
	'OVERRIDE_STYLE'				=> 'Écraser le style des utilisateurs',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Remplace le style des utilisateurs par le style par défaut.',
	'SITE_DESC'						=> 'Description du forum',
	'SITE_NAME'						=> 'Nom du forum',
	'SYSTEM_DST'					=> 'Activer l’heure d’été',
	'SYSTEM_TIMEZONE'				=> 'Fuseau horaire',
	'WARNINGS_EXPIRE'				=> 'Durée des avertissements',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Nombre de jours qui s’écoulera avant qu’un avertissement expire automatiquement.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Vous pouvez activer ou désactiver ici plusieurs fonctionnalités du forum.',

	'ALLOW_ATTACHMENTS'			=> 'Autoriser les pièces jointes',
	'ALLOW_BIRTHDAYS'			=> 'Autoriser les anniversaires',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Autoriser la saisie des dates d’anniversaires et l’affichage de l’âge dans les profils. Veuillez noter que la liste des anniversaires sur l’index du forum ne dépend pas de ce réglage.',
	'ALLOW_BOOKMARKS'			=> 'Autoriser la mise en favoris des sujets',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Les utilisateurs pourront stocker des favoris personnels.',
	'ALLOW_BBCODE'				=> 'Autoriser le BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Autoriser l’abonnement aux forums',
	'ALLOW_NAME_CHANGE'			=> 'Autoriser la modification des noms d’utilisateurs',
	'ALLOW_NO_CENSORS'			=> 'Autoriser la désactivation de la censure de mots',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Les utilisateurs pourront désactiver la censure de mots automatique dans les messages et les messages privés.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Autoriser les pièces jointes dans les messages privés',
	'ALLOW_SIG'					=> 'Autoriser les signatures',
	'ALLOW_SIG_BBCODE'			=> 'Autoriser le BBCode dans les signatures',
	'ALLOW_SIG_FLASH'			=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code> dans les signatures',
	'ALLOW_SIG_IMG'				=> 'Autoriser l’utilisation de la balise BBCode <code>[IMG]</code> dans les signatures',
	'ALLOW_SIG_LINKS'			=> 'Autoriser l’utilisation des liens dans les signatures',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Si désactivé, la balise BBCode <code>[URL]</code> et la transformation automatique des textes en liens seront désactivées.',
	'ALLOW_SIG_SMILIES'			=> 'Autoriser l’utilisation des émoticônes dans les signatures',
	'ALLOW_SMILIES'				=> 'Autoriser les émoticônes',
	'ALLOW_TOPIC_NOTIFY'		=> 'Autoriser l’abonnement aux sujets',
	'BOARD_PM'					=> 'Messagerie privée',
	'BOARD_PM_EXPLAIN'			=> 'Activer ou désactiver la messagerie privée à tous les utilisateurs.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Les avatars sont généralement de petites images uniques qu’un utilisateur peut associer à sa personnalité. Selon le style utilisé, ils sont habituellement affichés sous le nom d’utilisateur lorsque vous consultez des sujets. Vous pouvez déterminer ici quels sont les utilisateurs qui peuvent utiliser des avatars. Veuillez noter que pour transférer des avatars, vous devez avoir préalablement créé le répertoire que vous indiquerez ci-dessous et vous assurer qu’il soit accessible en écriture au serveur Internet. Veuillez également noter que les limitations de taille ne sont imposées qu’aux avatars transférés, elles ne s’appliquent pas aux images à distance.',

	'ALLOW_LOCAL'					=> 'Activer la galerie d’avatars',
	'ALLOW_REMOTE'					=> 'Activer les avatars à distance',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Les avatars sur un site Internet externe.',
	'ALLOW_UPLOAD'					=> 'Activer le transfert d’avatars',
	'AVATAR_GALLERY_PATH'			=> 'Chemin vers la galerie d’avatars',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Chemin depuis la racine de votre répertoire phpBB vers les images, comme <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Chemin vers le répertoire de stockage des avatars',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Chemin depuis la racine de votre répertoire phpBB, comme <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensions maximales des avatars',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Largeur x hauteur en pixels.',
	'MAX_FILESIZE'					=> 'Taille maximale des avatars',
	'MAX_FILESIZE_EXPLAIN'			=> 'Ne concerne que les avatars transférés.',
	'MIN_AVATAR_SIZE'				=> 'Dimensions minimales des avatars',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Largeur x hauteur en pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Vous pouvez effectuer ici tous les réglages par défaut de la messagerie privée.',

	'ALLOW_BBCODE_PM'			=> 'Autoriser le BBCode dans les messages privés',
	'ALLOW_FLASH_PM'			=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Notez que l’utilisation du Flash dans les messages privés dépend également des permissions.',
	'ALLOW_FORWARD_PM'			=> 'Autoriser la transmission de messages privés',
	'ALLOW_IMG_PM'				=> 'Autoriser l’utilisation de la balise BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Autoriser l’envoi de messages privés de masse à plusieurs utilisateurs et groupes',
	'ALLOW_MASS_PM_EXPLAIN'      => 'L’envoi aux groupes peut être ajusté par groupe dans la page des réglages des groupes.',
	'ALLOW_PRINT_PM'			=> 'Autoriser l’impression des messages privés',
	'ALLOW_QUOTE_PM'			=> 'Autoriser les citations dans les messages privés',
	'ALLOW_SIG_PM'				=> 'Autoriser les signatures dans les messages privés',
	'ALLOW_SMILIES_PM'			=> 'Autoriser les émoticônes dans les messages privés',
	'BOXES_LIMIT'				=> 'Nombre maximal de messages privés par boîte',
	'BOXES_LIMIT_EXPLAIN'		=> 'Les utilisateurs ne pourront pas recevoir plus de messages privés que la valeur insérée ici si leur boîte est pleine. Réglez cette valeur à <samp>0</samp> afin d’autoriser un nombre illimité de messages privés par boîte.',
	'BOXES_MAX'					=> 'Nombre maximal de dossiers de messages privés',
	'BOXES_MAX_EXPLAIN'			=> 'Par défaut, les utilisateurs peuvent créer de nombreux dossiers pour y stocker des messages privés.',
	'ENABLE_PM_ICONS'			=> 'Activer l’utilisation d’icônes de sujets dans les messages privés',
	'FULL_FOLDER_ACTION'		=> 'Action par défaut lorsque un dossier est plein',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Action par défaut à réaliser lorsque le dossier d’un utilisateur est plein, dans le cas où l’action spécifiée par l’utilisateur n’est pas applicable. La seule exception s’applique au dossier des “Messages envoyés” où l’action par défaut est de toujours supprimer les anciens messages.',
	'HOLD_NEW_MESSAGES'			=> 'Refuser les nouveaux messages',
	'PM_EDIT_TIME'				=> 'Durée limite d’édition',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limite la durée qui est disponible afin d’éditer les messages privés qui n’ont pas encore été délivrés. Le réglage de cette valeur à <samp>0</samp> désactive ce comportement.',
	'PM_MAX_RECIPIENTS'         => 'Nombre maximum de destinataires autorisés',
  'PM_MAX_RECIPIENTS_EXPLAIN'   => 'Le nombre maximum de destinataires autorisés dans un message privé. Réglez cette valeur à <samp>0</samp> si vous ne souhaitez pas limiter le nombre de destinataires. Ce réglage peut être ajusté pour chaque groupe dans la page des réglages des groupes.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Vous pouvez effectuer ici tous les réglages par défaut concernant la publication.',
	'ALLOW_POST_LINKS'					=> 'Autoriser les liens dans les messages et les messages privés',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Si refusé, la balise BBCode <code>[URL]</code> et la transformation automatique des textes en liens seront désactivées.',
	'ALLOW_POST_FLASH'					=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code> dans les messages',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Si refusé, la balise BBCode <code>[FLASH]</code> sera désactivée dans les messages. Dans le cas contraire, le système de permission déterminera quels seront les utilisateurs qui pourront utiliser la balise BBCode <code>[FLASH]</code>.',

	'ENABLE_QUEUE_TRIGGER'         => 'Activer la mise en attente des messages',
  'ENABLE_QUEUE_TRIGGER_EXPLAIN'   => 'Permet de soumettre à validation les messages des utilisateurs inscrits si leur compteur de messages est plus faible que la valeur saisie ci-dessous. Ce réglage n’a aucun effet sur les réglages des permissions relatifs à l’approbation des messages et des sujets.',
  'QUEUE_TRIGGER_POSTS'         => 'Nombre maximum de messages requis dans le compteur',
  'QUEUE_TRIGGER_POSTS_EXPLAIN'   => 'Si la mise en attente des messages est activée, ceci représente le compteur de messages que l’utilisateur doit dépasser afin de pouvoir publier ses messages sans qu’ils soient approuvés. Si le compteur de messages des utilisateurs est en dessous de ce nombre, leurs messages seront automatiquement mis en attente d’approbation.',

	'BUMP_INTERVAL'					=> 'Intervalle de remontée des sujets',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Nombre de minutes, heures ou jours entre le dernier message d’un sujet et la possibilité de remonter ce sujet.',
	'CHAR_LIMIT'					=> 'Nombre maximum de caractères par message',
	'CHAR_LIMIT_EXPLAIN'			=> 'Le nombre maximum de caractères autorisés dans un message. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter le nombre de caractères.',
	'DISPLAY_LAST_EDITED'			=> 'Afficher l’information sur la date de la dernière édition',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Choisissez si l’information sur la date de la dernière édition doit être affichée ou non dans les messages.',
	'EDIT_TIME'						=> 'Durée limite d’édition',
	'EDIT_TIME_EXPLAIN'				=> 'Limite la durée disponible afin d’éditer un nouveau message. Le réglage de cette valeur à <samp>0</samp> désactive ce comportement.',
	'FLOOD_INTERVAL'				=> 'Intervalle de flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Nombre de secondes qu’un utilisateur doit attendre afin de publier de nouveaux messages. Pour autoriser les utilisateurs à ignorer cet intervalle, modifiez leur permissions.',
	'HOT_THRESHOLD'					=> 'Seuil de popularité des sujets',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Seuil des messages par sujet afin de marquer ce dernier comme un sujet populaire. Réglez cette valeur à <samp>0</samp> afin de désactiver les sujets populaires.',
	'MAX_POLL_OPTIONS'				=> 'Nombre maximum d’options par sondage',
	'MAX_POST_FONT_SIZE'			=> 'Taille maximale de la police dans les messages',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Taille maximale de la police autorisée dans un message. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter la taille de la police.',
	'MAX_POST_IMG_HEIGHT'			=> 'Hauteur maximale des images dans les messages',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale des images ou des fichiers Flash dans les messages. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter la taille.',
	'MAX_POST_IMG_WIDTH'			=> 'Largeur maximale des images dans les messages',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largeur maximale des images ou des fichiers Flash dans les messages. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter la taille.',
	'MAX_POST_URLS'					=> 'Nombre maximum de liens par message',
	'MAX_POST_URLS_EXPLAIN'			=> 'Nombre maximum de liens dans un message. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter le nombre de liens.',
	'POSTING'						=> 'Publication',
	'POSTS_PER_PAGE'				=> 'Messages par page',
	'QUOTE_DEPTH_LIMIT'				=> 'Nombre maximum de citations imbriquées par message',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Nombre maximal de citations imbriquées dans un message. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter ce nombre.',
	'SMILIES_LIMIT'					=> 'Nombre maximum d’émoticônes par message',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Nombre maximum d’émoticônes dans un message. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter le nombre d’émoticônes.',
	'TOPICS_PER_PAGE'				=> 'Sujets par page',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Vous pouvez effectuer ici tous les réglages concernant les signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Taille maximale de la police dans les signatures',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Taille maximale de la police autorisée dans les signatures des utilisateurs. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter la taille de la police.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Hauteur maximale des images dans les signatures',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale des images ou des fichiers Flash dans les signatures des utilisateurs. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter la hauteur.',
	'MAX_SIG_IMG_WIDTH'				=> 'Largeur maximale des images dans les signatures',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largeur maximale des images ou des fichiers Flash dans les signatures des utilisateurs. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter la largeur.',
	'MAX_SIG_LENGTH'				=> 'Longueur maximale des signatures',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Nombre maximum de caractères dans les signatures des utilisateurs.',
	'MAX_SIG_SMILIES'				=> 'Nombre maximum d’émoticônes dans les signatures',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Nombre maximum d’émoticônes autorisées dans les signatures des utilisateurs. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter le nombre d’émoticônes.',
	'MAX_SIG_URLS'					=> 'Nombre maximum de liens dans les signatures',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Nombre maximum de liens autorisés dans les signatures des utilisateurs. Réglez cette valeur à <samp>0</samp> afin de ne pas limiter le nombre de liens.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Vous pouvez effectuer ici les réglages relatifs aux inscriptions et aux profils des utilisateurs.',

	'ACC_ACTIVATION'			=> 'Activation du compte',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Cela détermine quels sont les utilisateurs qui bénéficieront d’un accès immédiat au forum ou si une confirmation leur sera demandée. Vous pouvez également désactiver entièrement les nouvelles inscriptions.',
	'ACC_ADMIN'					=> 'Par l’administrateur',
	'ACC_DISABLE'				=> 'Désactivée',
	'ACC_NONE'					=> 'Aucune',
	'ACC_USER'					=> 'Par l’utilisateur',
//	'ACC_USER_ADMIN'			=> 'Par l’utilisateur et l’administrateur',
	'ALLOW_EMAIL_REUSE'			=> 'Autoriser les adresses e-mail à être réutilisées',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Différents utilisateurs pourront s’inscrire avec la même adresse e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numéro de fax de la COPPA',
	'COPPA_MAIL'				=> 'Adresse e-mail de la COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Ceci est l’adresse e-mail où les parents enverront les formulaires de la COPPA.',
	'ENABLE_COPPA'				=> 'Activer la COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Cela oblige les utilisateurs à déclarer qu’ils ont 13 ans ou plus afin d’être conforme à la COPPA. Si ceci est désactivé, les groupes spécifiques à la COPPA ne seront plus affichés.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Aucun plugin d’authentification n’a été trouvé.',
	'PASSWORD_LENGTH'			=> 'Longueur du mot de passe',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Nombre de caractères minimum et maximum exigé dans les mots de passe.',
	'REG_LIMIT'					=> 'Nombre de tentatives d’inscription',
	'REG_LIMIT_EXPLAIN'			=> 'Nombre de tentatives que les utilisateurs pourront réaliser lors de l’inscription avant que leur session n’expire.',
	'USERNAME_ALPHA_ONLY'		=> 'Alphanumérique uniquement',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumérique et espaces',
	'USERNAME_ASCII'			=> 'ASCII (aucun caractère international)',
	'USERNAME_LETTER_NUM'		=> 'Lettres et nombres',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Lettres, nombres et espaces',
	'USERNAME_CHARS'			=> 'Limite des caractères du nom d’utilisateur',
	'USERNAME_CHARS_ANY'		=> 'Tous les caractères',
	'USERNAME_CHARS_EXPLAIN'	=> 'Limite le type de caractères qui peut être utilisés dans les noms d’utilisateurs. Les espaces comprennent : espace, -, +, _, [ et ].',
	'USERNAME_LENGTH'			=> 'Longueur du nom d’utilisateur',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Nombre de caractères minimum et maximum autorisés dans les noms d’utilisateurs.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Vous pouvez effectuer ici les réglages de la confirmation visuelle et du CAPTCHA.',

	'CAPTCHA_GD'							=> 'GD du CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Bruit GD de premier plan du CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utiliser l’extension GD afin de rendre le CAPTCHA plus difficile à déchiffrer.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Utiliser un bruit de premier plan afin de rendre le CAPTCHA basé sur l’extension GD plus difficile à déchiffrer.',
	'CAPTCHA_GD_X_GRID'						=> 'Bruit GD de fond sur l’axe des abscisses du CAPTCHA',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilisez des valeurs faibles afin de rendre le CAPTCHA basé sur l’extension GD plus difficile à déchiffrer. Réglez cette valeur à <samp>0</samp> afin de désactiver le bruit de fond sur l’axe des abscisses.',
	'CAPTCHA_GD_Y_GRID'						=> 'Bruit GD de fond sur l’axe des ordonnées du CAPTCHA',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilisez des valeurs faibles afin de rendre le CAPTCHA basé sur l’extension GD plus difficile à déchiffrer. Réglez cette valeur à <samp>0</samp> afin de désactiver le bruit de fond sur l’axe des ordonnées.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Les modifications que vous avez apportées sur le réglage de la confirmation visuelle n’ont pas été sauvegardées. Ceci n’est qu’un aperçu.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Le CAPTCHA tel qu’il ressemblera avec les réglages actuels. Utilisez le bouton de l’aperçu afin de rafraîchir. Notez que le CAPTCHA est aléatoire et qu’il sera différent à chaque fois.',
	'VISUAL_CONFIRM_POST'					=> 'Activer la confirmation visuelle pour les invités',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Oblige les invités à saisir un code aléatoire basé sur une image afin d’empêcher la publication de messages automatisés.',
	'VISUAL_CONFIRM_REG'					=> 'Activer la confirmation visuelle lors des inscriptions',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Oblige les nouveaux utilisateurs à saisir un code aléatoire basé sur une image afin d’empêcher les inscriptions automatisées.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Ces informations définissent les données utilisées à envoyer sous forme de cookie au navigateur de vos utilisateurs. Dans la plupart des cas, les valeurs par défaut devraient être suffisantes. Si vous avez besoin de les modifier, faites-le avec vigilance car des réglages incorrects peuvent empêcher les utilisateurs à se connecter correctement.',

	'COOKIE_DOMAIN'				=> 'Domaine du cookie',
	'COOKIE_NAME'				=> 'Nom du cookie',
	'COOKIE_PATH'				=> 'Chemin du cookie',
	'COOKIE_SECURE'				=> 'Cookie sécurisé',
	'COOKIE_SECURE_EXPLAIN'		=> 'Si votre serveur fonctionne par l’intermédiaire d’SSL, activez cette option. Si vous activez cette option alors que votre serveur n’est pas sous SSL, des erreurs se produiront lors des redirections.',
	'ONLINE_LENGTH'				=> 'Durée d’apparition dans la liste des utilisateurs en ligne',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Nombre de minutes après lequel les utilisateurs inactifs n’apparaîtront plus dans la liste des utilisateurs en ligne. Plus la valeur est élevée, plus le traitement pour générer la liste sera long.',
	'SESSION_LENGTH'			=> 'Durée de la session',
	'SESSION_LENGTH_EXPLAIN'	=> 'Les sessions expireront une fois que cette durée, en secondes, sera dépassée.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Vous pouvez activer et désactiver ici certaines fonctionnalités du forum afin de réduire sa quantité de traitement. Sur la plupart des serveurs, il n’y a pas besoin de désactiver ces fonctionnalités. Cependant, sur certains systèmes ou hébergements, il est préférable de désactiver certaines fonctionnalités dont vous n’avez pas réellement besoin. Vous pouvez également spécifier des limites pour la charge du système et les sessions actives au delà desquelles le forum sera hors-ligne.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Champs de profil personnalisés',
	'LIMIT_LOAD'					=> 'Charge maximale du système',
	'LIMIT_LOAD_EXPLAIN'			=> 'Si la charge du système dépasse cette valeur durant la dernière minute, le forum sera automatiquement désactivé. Une valeur de <samp>1.0</samp> équivaut à environ 100% de l’utilisation d’un processeur. Cela ne fonctionne que sur des serveurs basés sous UNIX et où cette information est accessible. Cette valeur se réinitialise à <samp>0</samp> si phpBB n’arrive pas à obtenir la valeur de la charge du système.',
	'LIMIT_SESSIONS'				=> 'Limiter les sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Si le nombre de sessions dépasse cette valeur durant une minute, le forum sera hors-ligne. Réglez cette valeur à <samp>0</samp> pour ne pas limiter le nombre de sessions.',
	'LOAD_CPF_MEMBERLIST'			=> 'Autoriser les styles à afficher les champs de profil personnalisés dans la liste des membres',
	'LOAD_CPF_VIEWPROFILE'			=> 'Afficher les champs de profil personnalisés dans les profils des utilisateurs',
	'LOAD_CPF_VIEWTOPIC'			=> 'Afficher les champs de profil personnalisés dans les pages des sujets',
	'LOAD_USER_ACTIVITY'			=> 'Afficher l’activité de l’utilisateur',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Affiche dans le profil et le panneau de contrôle de l’utilisateur la liste des sujets et des forums actifs. Il est recommandé de désactiver cette fonctionnalité sur les forums ayant plus d’un million de messages.',
	'RECOMPILE_STYLES'				=> 'Recompiler les composants périmés des styles',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Vérifier les mises à jour des composants périmés des styles sur le système et les recompiler.',
	'YES_ANON_READ_MARKING'			=> 'Activer l’indicateur de lecture des sujets pour les invités',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Stocke l’indicateur de lecture des sujets (s’ils sont lus ou non lus) pour les invités. Si cette option est désactivée, les messages apparaîtront toujours comme lus pour les invités.',
	'YES_BIRTHDAYS'					=> 'Activer la liste des anniversaires',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si cette option est désactivée, la liste des anniversaires ne sera plus affichée. Pour que ce réglage prenne effet, la fonctionnalité des anniversaires doit également être activée.',
	'YES_JUMPBOX'					=> 'Activer l’affichage de l’accès rapide aux forums',
	'YES_MODERATORS'				=> 'Activer l’affichage des modérateurs',
	'YES_ONLINE'					=> 'Activer l’affichage de la liste des utilisateurs',
	'YES_ONLINE_EXPLAIN'			=> 'Afficher la liste des utilisateurs parcourant le forum sur l’index, les forums et les pages des sujets.',
	'YES_ONLINE_GUESTS'				=> 'Activer l’affichage des invités dans la liste des utilisateurs',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Afficher les invités dans la liste des utilisateurs parcourant le forum.',
	'YES_ONLINE_TRACK'				=> 'Activer l’affichage de la vérification du statut des utilisateurs',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Afficher le statut en ligne des utilisateurs dans les profils et les pages des sujets.',
	'YES_POST_MARKING'				=> 'Activer les sujets pointés',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indique à l’utilisateur s’il a publié un message ou non dans un sujet.',
	'YES_READ_MARKING'				=> 'Activer l’indicateur de lecture par le serveur',
	'YES_READ_MARKING_EXPLAIN'		=> 'Stocke l’indicateur de lecture des sujets (s’ils sont lus ou non lus) dans la base de données plutôt que dans un cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB supporte les modules (ou plugins) d’authentification. Ceux-ci vous permettent de déterminer la manière dont les utilisateurs s’authentifient lors de leur connexion au forum. Trois modules sont fournis par défaut : DB, LDAP et Apache. Toutes les méthodes ne nécessitent pas d’informations supplémentaires, ne remplissez les champs que s’ils sont appropriés à la méthode sélectionnée.',

	'AUTH_METHOD'				=> 'Sélectionner une méthode d’authentification',

	'APACHE_SETUP_BEFORE_USE'	=> 'Vous devez configurer l’authentification d’Apache avant de faire fonctionner phpBB avec cette méthode d’authentification. Gardez à l’esprit que le nom d’utilisateur que vous utilisez pour vous authentifier à Apache doit être le même que votre nom d’utilisateur phpBB. L’authentification vers Apache ne peut être utilisé que si <var>mod_php</var> (sans CGI) et <var>safe_mode</var> sont désactivés.',

	'LDAP_DN'						=> 'Base LDAP vers <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Ceci est le “Distinguished Name”, situant toutes les informations des utilisateurs, comme <samp>o=Ma Compagnie,c=FR</samp>.',
	'LDAP_EMAIL'					=> 'Attribut LDAP des e-mail',
	'LDAP_EMAIL_EXPLAIN'			=> 'Ceci est le nom de l’attribut de l’e-mail de vos utilisateurs (s’il existe) afin de compléter automatiquement l’adresse e-mail de tous vos nouveaux utilisateurs. Laissez cette case vide pour que l’adresse e-mail soit vide pour les utilisateurs qui se connectent pour la première fois.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La connexion au serveur LDAP a échouée car le nom d’utilisateur ou le mot de passe que vous avez spécifié est incorrect.',
	'LDAP_NO_EMAIL'					=> 'L’attribut de l’e-mail que vous avez spécifié n’existe pas.',
	'LDAP_NO_IDENTITY'				=> 'L’identifiant de connexion pour %s est introuvable.',
	'LDAP_PASSWORD'					=> 'Mot de passe LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Laissez ceci vide pour utiliser une connexion anonyme. Sinon, indiquez le mot de passe pour l’utilisateur spécifié ci-dessus. Ceci est obligatoire pour les serveurs à répertoire actif. <strong>ATTENTION :</strong> Ce mot de passe sera stocké en texte brut dans la base de données, visible à tous ceux qui ont accès à votre base de données ou à la page de configuration.',
	'LDAP_PORT'						=> 'Port du serveur LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Si vous le souhaitez, vous pouvez spécifier un port LDAP qui sera utilisé pour vous connecter sur un port autre que le port 389 utilisé par défaut.',
	'LDAP_SERVER'					=> 'Nom du serveur LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Si vous utilisez LDAP, ceci est le nom d’hôte ou l’adresse IP du serveur LDAP. Vous pouvez également spécifier un lien comme <samp>ldap://hostname:port/</samp>',
	'LDAP_UID'						=> 'Clé <var>uid</var> de LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Ceci est la clé avec laquelle vous pouvez rechercher un identifiant de connexion, ex. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'Utilisateur <var>dn</var> LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Laissez ceci vide afin d’utiliser une connexion anonyme. Si cela a été renseigné dans phpBB, utilisez le “Distinguished Name” que vous avez spécifié lors des tentatives de connexion afin de trouver l’utilisateur correct, comme <samp>uid=Nom,ou=MonUnité,o=MaCompagnie,c=FR</samp>. Ceci est obligatoire pour les serveurs à répertoire actif.',
	'LDAP_USER_FILTER'				=> 'Filtre de l’utilisateur LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Si vous le souhaitez, vous pouvez limiter les objets recherchés avec des filtres additionnels. Par exemple, <samp>objectClass=posixGroup</samp> deviendra lors de l’utilisation <samp>(&(uid=$username)(objectClass=posixGroup))</samp>.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Vous pouvez effectuer ici les réglages du serveur et du domaine. Veuillez vous assurer que les données que vous saisissez sont correctes car des erreurs peuvent apparaître dans les e-mail dans le cas contraire. Lorsque vous saisissez le nom de domaine, n’oubliez pas d’y inclure le protocole, comme <samp>http://</samp>. Ne modifiez le numéro de port que si vous savez que le serveur en utilise un différent mais le port 80 est correct dans la plupart des cas.',

	'ENABLE_GZIP'				=> 'Activer la compression GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Le contenu généré sera compressé avant d’être envoyé aux utilisateurs. Cela peut réduire le trafic du réseau, mais cela augmentera par conséquent l’utilisation du processeur de votre serveur et celui de vos utilisateurs.',
	'FORCE_SERVER_VARS'			=> 'Forcer les réglages des liens du serveur',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si ceci est réglé sur <samp>Oui</samp>, les réglages du serveur définis ici seront utilisés à la place des valeurs déterminées automatiquement.',
	'ICONS_PATH'				=> 'Chemin vers le répertoire de stockage des icônes',
	'ICONS_PATH_EXPLAIN'		=> 'Chemin depuis la racine de votre répertoire phpBB, comme <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Réglages du chemin',
	'RANKS_PATH'				=> 'Chemin vers le répertoire de stockage des images de rangs',
	'RANKS_PATH_EXPLAIN'		=> 'Chemin depuis la racine de votre répertoire phpBB, comme <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Chemin du script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Le chemin où phpBB est installé par rapport au nom de domaine, comme <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nom de domaine',
	'SERVER_NAME_EXPLAIN'		=> 'Le nom de domaine sur lequel votre serveur fonctionne (par exemple : <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'Port du serveur',
	'SERVER_PORT_EXPLAIN'		=> 'Le port sur lequel votre serveur fonctionne, habituellement 80.',
	'SERVER_PROTOCOL'			=> 'Protocole du serveur',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Ceci est utilisé comme protocole du serveur. Si celui-ci est vide ou qu’il n’a pas été forcé, le protocole à utiliser sera déterminé par le réglage des cookies sécurisés (<samp>http://</samp> ou <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Réglages des liens du serveur',
	'SMILIES_PATH'				=> 'Chemin vers le répertoire de stockage des émoticônes',
	'SMILIES_PATH_EXPLAIN'		=> 'Chemin depuis la racine de votre répertoire phpBB, comme <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Chemin vers le répertoire de stockage des icônes des groupes d’extensions',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Chemin depuis la racine de votre répertoire phpBB, comme <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Vous pouvez effectuer ici les réglages relatifs aux sessions et aux connexions.',

	'ALL'							=> 'Tous',
	'ALLOW_AUTOLOGIN'				=> 'Autoriser les connexions automatiques',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Détermine si les utilisateurs peuvent se connecter automatiquement lors de leur visite sur le forum.',
	'AUTOLOGIN_LENGTH'				=> 'Durée d’expiration des clés de connexions automatiques',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Nombre de jours après lequel les clés de connexions automatiques sont supprimées. Réglez cette valeur à <samp>0</samp> afin de désactiver ce comportement.',
	'BROWSER_VALID'					=> 'Valider les navigateurs',
	'BROWSER_VALID_EXPLAIN'			=> 'Active la validation des navigateurs sur chaque session, ce qui améliore la sécurité.',
	'CHECK_DNSBL'					=> 'Vérifier les IP dans la liste noire des DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Si ceci est activé, les adresses IP des utilisateurs seront vérifiées par les services DNSBL suivants lors de l’inscription et de la publication de messages : <a href="http://spamcop.net">spamcop.net</a> et <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Cette vérification peut prendre un certain temps, tout dépend de la configuration de chaque serveur. Si vous remarquez des ralentissements ou des erreurs de jugement, il est conseillé de désactiver cette vérification.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Vérifier les e-mail pour un enregistrement MX correct',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Si ceci est activé, le domaine de l’e-mail que vous avez spécifié lors de l’inscription et des modifications du profil est vérifié pour s’assurer qu’il possède un enregistrement MX valide.',
	'FORCE_PASS_CHANGE'				=> 'Forcer la modification du mot de passe',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Oblige les utilisateurs à modifier leur mot de passe après un certain nombre de jours. Réglez cette valeur à <samp>0</samp> afin de désactiver ce comportement.',
	'FORM_TIME_MAX'					=> 'Durée maximale pour envoyer des formulaires',
	'FORM_TIME_MAX_EXPLAIN'			=> 'La durée maximale afin qu’un utilisateur puisse envoyer des formulaires. Réglez cette valeur à <samp>-1</samp> afin de désactiver ce comportement. Notez qu’un formulaire peut devenir incorrect si la session expire, et cela indépendamment de ce réglage.',
	'FORM_SID_GUESTS'				=> 'Lier les formulaires aux sessions des invités',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Si ceci est activé, les formulaires émis aux invités seront exclusifs à leur session. Cela peut entraîner quelques problèmes avec certains FAI.',
	'FORWARDED_FOR_VALID'			=> 'En-tête <var>X_FORWARDED_FOR</var> validé',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Les sessions ne continueront que si l’en-tête <var>X_FORWARDED_FOR</var> envoyé équivaut à celui qui avait été envoyé lors de la requête précédente. L’en-tête <var>X_FORWARDED_FOR</var> vérifiera également si les adresses IP n’ont pas été bannies.',
	'IP_VALID'						=> 'Validation de la session IP',
	'IP_VALID_EXPLAIN'				=> 'Détermine quelle partie de l’IP des utilisateurs sera utilisée afin de valider une session ; <samp>Tous</samp> compare l’adresse complète, <samp>A.B.C</samp> les premiers x.x.x, <samp>A.B</samp> les premiers x.x et <samp>Aucune</samp> désactive cette vérification. Pour les adresses IPv6, <samp>A.B.C</samp> compare les 4 premiers blocs et <samp>A.B</samp> les 3 premiers blocs.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Nombre maximal de tentatives de connexion',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Une fois que ce nombre de tentatives de connexions infructueuses a été atteint, l’utilisateur devra en plus fournir un code de confirmation visuelle.',
	'NO_IP_VALIDATION'				=> 'Aucune',
	'NO_REF_VALIDATION'				=> 'Aucune',
	'PASSWORD_TYPE'					=> 'Complexité du mot de passe',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Détermine la complexité des mots de passe qui sont demandés ou qui ont été modifiés, chaque option incluant les options précédentes.',
	'PASS_TYPE_ALPHA'				=> 'Doit contenir des lettres et des nombres',
	'PASS_TYPE_ANY'					=> 'Aucune obligation',
	'PASS_TYPE_CASE'				=> 'Doit contenir des majuscules et des minuscules',
	'PASS_TYPE_SYMBOL'				=> 'Doit contenir des symboles spéciaux',
	'REF_HOST'						=> 'Valider uniquement l’hôte',
	'REF_PATH'						=> 'Valider également le chemin',
	'REFERER_VALID'					=> 'Valider le référant',
	'REFERER_VALID_EXPLAIN'			=> 'Si ceci est activé, le référant des requêtes <code>POST</code> sera vérifié à la place des réglages effectués pour le chemin de l’hôte ou du script. Cela peut s’avérer problématique pour les forums utilisant plusieurs domaines ou connexions externes.',
	'TPL_ALLOW_PHP'					=> 'Autoriser le PHP dans les templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Si cette option est activée, les instructions <code>PHP</code> et <code>INCLUDEPHP</code> seront reconnues et analysées dans les templates.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Ces informations sont utilisées lors de l’envoi d’e-mail à vos utilisateurs. Veuillez vous assurer que l’adresse e-mail que vous avez spécifiée est correcte, les messages refusés ou qui ne peuvent pas être envoyés seront probablement retournés à cette adresse. Si votre hébergeur ne fournit pas de service d’envoi d’e-mail en PHP par défaut, vous pouvez envoyer directement des messages en utilisant le protocole SMTP. Cela demande l’adresse d’un serveur approprié (demandez cela à votre hébergeur si besoin). Si le serveur exige une authentification (et seulement dans ce cas), saisissez le nom d’utilisateur, le mot de passe et la méthode d’authentification nécessaire.',

	'ADMIN_EMAIL'					=> 'Adresse e-mail de retour',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Cette adresse sera utilisée comme l’adresse de retour dans tous les e-mail. C’est l’adresse e-mail du contact technique. Elle sera toujours utilisée comme l’adresse du <samp>Chemin de retour</samp> et de l’<samp>Expéditeur</samp> dans les e-mail.',
	'BOARD_EMAIL_FORM'				=> 'Envoi d’e-mail par l’intermédiaire du forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Au lieu d’afficher les adresses e-mail, les utilisateurs pourront, si cette option est activée, envoyer des e-mail par l’intermédiaire du forum.',
	'BOARD_HIDE_EMAILS'				=> 'Masquer les adresses e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Cette fonction masque les adresses e-mail afin qu’elles soient entièrement privées.',
	'CONTACT_EMAIL'					=> 'Adresse e-mail de contact',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Cette adresse sera utilisée lorsqu’un contact particulier est nécessaire, ex. spam, erreur survenue, etc. Elle est toujours utilisée comme l’adresse du <samp>Destinataire</samp> et du <samp>Chemin de l’envoi</samp> dans les e-mail.',
	'EMAIL_FUNCTION_NAME'			=> 'Nom de la fonction e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'La fonction e-mail utilisée afin d’envoyer un e-mail par l’intermédiaire de PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Nombre d’e-mail envoyés en une fois',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Ceci est le nombre d’e-mail envoyés en une seule fois. Ce réglage est appliqué à la file d’attente de la messagerie interne ; si vous rencontrez des problèmes lors de l’envoi de messages e-mail alors que cette option est activée, il est conseillé de régler cette valeur à <samp>0</samp>.',
	'EMAIL_SIG'						=> 'Signature de l’e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Ce texte sera inséré en bas de tous les e-mail envoyés à partir du forum.',
	'ENABLE_EMAIL'					=> 'Autoriser l’envoi d’e-mail par l’intermédiaire du forum',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Si ce réglage est désactivé, aucun e-mail ne pourra être envoyé à partir du forum.',
	'SMTP_AUTH_METHOD'				=> 'Méthode d’authentification SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Seulement utilisé si un nom d’utilisateur et un mot de passe a été renseigné, demandez à votre hébergeur si vous n’êtes pas certain de la méthode à utiliser.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Mot de passe SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Ne saisissez un mot de passe que si votre serveur SMTP le demande.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Port du serveur SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Ne modifiez cela que si vous savez que votre serveur SMTP utilise un port différent.',
	'SMTP_SERVER'					=> 'Adresse du serveur SMTP',
	'SMTP_SETTINGS'					=> 'Réglages SMTP',
	'SMTP_USERNAME'					=> 'Nom d’utilisateur SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Ne saisissez un nom d’utilisateur que si votre serveur SMTP le demande.',
	'USE_SMTP'						=> 'Utiliser un serveur SMTP pour l’envoi d’e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Sélectionnez <samp>Oui</samp> si vous souhaitez envoyer les e-mail par l’intermédiaire d’un serveur SMTP plutôt que par la fonction e-mail locale.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Vous pouvez activer et contrôler ici l’utilisation de Jabber afin d’envoyer des messages instantanés et des avertissements sur le forum. Jabber est un protocole libre et gratuit. Certains serveurs Jabber incluent des passerelles qui vous permettent de contacter des utilisateurs sur d’autres réseaux, mais tous les serveurs Jabber n’offrent pas cette possibilité. Veuillez vous assurer d’avoir déjà saisi les informations du compte inscrit - phpBB les utilisera comme telles.',

	'JAB_ENABLE'				=> 'Activer Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Active l’utilisation de Jabber pour l’envoi de messages et d’avertissements.',
	'JAB_GTALK_NOTE'			=> 'Veuillez noter que GTalk ne marchera pas car la fonction <samp>dns_get_record</samp> est introuvable. Cette fonction n’est pas disponible dans PHP4 et elle n’est pas implémentée sur les plates-formes Windows. Cela ne fonctionnera pas non plus sur les systèmes basés sous BSD, incluant Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Nombre de messages envoyés en une fois',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Ceci est le nombre de messages envoyés en une seule fois. Si cette valeur est réglée à <samp>0</samp>, les messages seront envoyés immédiatement et ne seront pas mis en file d’attente.',
	'JAB_PASSWORD'				=> 'Mot de passe de Jabber',
	'JAB_PORT'					=> 'Port de Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Laissez vide, sauf si vous savez que le port utilisé n’est pas le 5222.',
	'JAB_SERVER'				=> 'Serveur Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Consultez %sjabber.org%s afin d’afficher une liste de serveurs.',
	'JAB_SETTINGS_CHANGED'		=> 'Les réglages de Jabber ont été modifiés avec succès.',
	'JAB_USE_SSL'				=> 'Utiliser une connexion SSL',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si ceci est activé, une connexion sécurisée essaiera d’être établie. Le port Jabber sera modifié en 5223 si le port 5222 est spécifié.',
	'JAB_USERNAME'				=> 'Nom d’utilisateur Jabber ou JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Spécifiez un nom d’utilisateur inscrit ou un JID valide. La validité de ce nom d’utilisateur ne sera pas vérifiée. Si vous ne spécifiez qu’un nom d’utilisateur, votre JID sera le nom d’utilisateur et le serveur spécifié ci-dessous. Dans le cas contraire, spécifiez un JID valide, comme par exemple utilisateur@jabber.org.',
));

?>
