<?php
/**
*
* acp_attachments [Catalan (Valencian)]
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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Ací podeu configurar els paràmetres principals de fitxers adjunts i les categories especials associades.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Ací podeu afegir, esborrar, modificar o inhabilitar els grups d\'extensions. Cada opció té assignada una categoria espcial.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Ací podeu gestioner les extensions permeses. Per activar les vostres extensions, aneu al panell de gestió d\'extensions. Us recomanem que no permeteu extensions tipus script (com per exemple <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, i d\'altres).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Ací podeu veure els fitxers orfes. Aquest tipus de fitxers existeixen perquè potser l\'usuari ha pujat el fitxer però finalment no va publicar el missatge. Podeu esborrar aquests fitxers o afegir-los a un missatge.',
	'ADD_EXTENSION'						=> 'Afegeix extensió',
	'ADD_EXTENSION_GROUP'				=> 'Afegeix un grup d\'extensions',
	'ADMIN_UPLOAD_ERROR'				=> 'S\'ha produït un error mentre s\'adjuntava el fitxer: “%s”.',
	'ALLOWED_FORUMS'					=> 'Fòrums permesos',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Permetre publicar les extensions assignades als fòrums seleccionats.',
	'ALLOWED_IN_PM_POST'				=> 'Permès',
	'ALLOW_ATTACHMENTS'					=> 'Permetre fitxers adjunts',
	'ALLOW_ALL_FORUMS'					=> 'Permetre a tots els fòrums',
	'ALLOW_IN_PM'						=> 'Permès als missatges privats',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permetre fitxers adjunts als missatges privats',
	'ALLOW_SELECTED_FORUMS'				=> 'Només als fòrums seleccionats',
	'ASSIGNED_EXTENSIONS'				=> 'Extensions assignades',
	'ASSIGNED_GROUP'					=> 'Grup d\'extensions assignat',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensions',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grup d\'extensions',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Mida màxima del fitxer',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Mida màxima del fitxer, 0 serà il·limitat.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Mida màxima als missatges',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Mida màxima al disc per missatges privats per a cada usuari, 0 serà il·limitat.',
	'ATTACH_ORPHAN_URL'					=> 'Fitxers adjunts orfes',
	'ATTACH_POST_ID'					=> 'ID del missatge',
	'ATTACH_QUOTA'						=> 'Mida total d\'adjunts',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximum drive space available for attachments for the whole board, with 0 being unlimited.',
	'ATTACH_TO_POST'					=> 'Adjuntar fitxer al missatge',

	'CAT_FLASH_FILES'			=> 'Fitxers Flash',
	'CAT_IMAGES'				=> 'Imatges',
	'CAT_QUICKTIME_FILES'		=> 'Fitxers Quicktime',
	'CAT_RM_FILES'				=> 'Fitxers RealMedia',
	'CAT_WM_FILES'				=> 'Fitxers Windows',
	'CHECK_CONTENT'				=> 'Comprova els fitxers adjunts',
	'CHECK_CONTENT_EXPLAIN'		=> 'Alguns navegadors poden bloquejar-se en detectar un mimetype incorrecte dels fitxers carregats. Aquesta opció permet que això no passe.',
	'CREATE_GROUP'				=> 'Crea un nou grup',
	'CREATE_THUMBNAIL'			=> 'Crea previsualització',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Crea previsualització sempre que siga possible.',

	'DEFINE_ALLOWED_IPS'			=> 'Defineix IPs/nomsdehost permesos',
	'DEFINE_DISALLOWED_IPS'			=> 'Defineix IPs/nosdehost prohibits',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Per especificar vàries diferents IPs o noms de hosts, introduïu un a cada línia al camp següent. Per especificar un rang d\'IPs, separeu la IP d\'inici i final amb un guió (-).Per especificar un asterics, feu servir “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Podeu esborrar (o excloure) múltiples IPs en una de sola fent servir la combinació adequada entre el ratolí i el teclat. Les IPs excloses tenen un fons blau.',
	'DISPLAY_INLINED'				=> 'Mostra imatges en línia',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Si es fixa a <u>No</u>, les imatges adjuntes es mostraran com un enllaç.',
	'DISPLAY_ORDER'					=> 'Ordre de visualització d\'adjunts',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Mostra adjunts ordenats per temps.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Edita un grup d\'extensions',
	'EXCLUDE_ENTERED_IP'			=> 'Habilita-ho per excloure la IP/nomdehost.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclou IP de les IP/nomdehosts permesos',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exlcoure IP de les IP/nomdehosts prohibits',
	'EXTENSIONS_UPDATED'			=> 'S\'han actualitzat les extensions.',
	'EXTENSION_EXIST'				=> 'L\'extensió %s ja existeix.',
	'EXTENSION_GROUP'				=> 'Grup d\'extensions',
	'EXTENSION_GROUPS'				=> 'Grups d\'extensions',
	'EXTENSION_GROUP_DELETED'		=> 'S\'ha esborrat el grup d\'extensions.',
	'EXTENSION_GROUP_EXIST'			=> 'El grup d\'extensions %s ja existeix.',

	'GO_TO_EXTENSIONS'		=> 'Vés a la finestra de gestió d\'extensions',
	'GROUP_NAME'			=> 'Nom del grup',

	'IMAGE_LINK_SIZE'			=> 'Dimensions de la imatge enllaçada',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Mostra la imatge adjunta com un enllaç si la imatge és més gran que aquestes mides. Per deshabilitar això, fixeu els valors en 0px / 0px.',
	'IMAGICK_PATH'				=> 'Ruta a Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Ruta completa a l\'aplicació de conversió d\'imagemagick. P.e. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Nombre màxim d\'adjunts per missatge',
	'MAX_ATTACHMENTS_PM'			=> 'Nombre màxim d\'adjunts per missatge',
	'MAX_EXTGROUP_FILESIZE'			=> 'Mida màxima del fitxer',
	'MAX_IMAGE_SIZE'				=> 'Dimensions màximes de la imatge',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Mida màxima d\'imatges adjuntes. Seleccioneu 0px / 0px per deshabilitar la comprovació de les dimensions.',
	'MAX_THUMB_WIDTH'				=> 'Ample màxim de la previsualització',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'La previsualització generada no superarà l\'ample introduït ací.',
	'MIN_THUMB_FILESIZE'			=> 'Mida mínima del fitxer de previsualització',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'No crees previsualització per a les imatges més xicotetes que això.',

	'MODE_INLINE'					=> 'En línia',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Només missatges permesos',
	'NOT_ALLOWED_IN_PM_POST'	=> 'No permès',
	'NOT_ASSIGNED'				=> 'No assignat',
	'NO_EXT_GROUP'				=> 'No',
	'NO_EXT_GROUP_NAME'			=> 'No s\'ha introduït un nom de grup',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No s\'ha especificat un grup d\'extensions.',
	'NO_FILE_CAT'				=> 'No',
	'NO_IMAGE'					=> 'No hi ha imatge',
	'NO_THUMBNAIL_SUPPORT'		=> 'La previsualització s\'ha deshabilitat. Per funcionar es necessita l\'extensió GD o imagemagick ha d\'estar instal·lat. No es troba cap dels dos.',
	'NO_UPLOAD_DIR'				=> 'El directori que heu especificat no existeix.',
	'NO_WRITE_UPLOAD'			=> 'No es pot escriure al directori que heu especificat. Modifiqueu els permisos per poder escriure-hi.',

	'ONLY_ALLOWED_IN_PM'	=> 'Només permès als missatges privats',
	'ORDER_ALLOW_DENY'		=> 'Permet',
	'ORDER_DENY_ALLOW'		=> 'Prohibeix',

	'REMOVE_ALLOWED_IPS'		=> 'Esborra IPs/nomsdehost <em>permesos</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Esborra IPs/nomsdehost <em>prohibits</em>',

	'SEARCH_IMAGICK'				=> 'Cerca Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Llista Permesos/Prohibits',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Change the default behaviour when secure downloads are enabled of the Allow/Deny list to that of a <strong>whitelist</strong> (Allow) or a <strong>blacklist</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Habilita descàrregues segures',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Si està habilitada, les descàrregues només es podran fer des de les IP’s/nomsdehost que definiu.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Les descàrregues segures no estàn habilitades. Els paràmetres següents s\'aplicaran després d\'habilitar-les.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'La llista d\'IPs s\'ha actualitzat.',
	'SECURE_EMPTY_REFERRER'			=> 'Allow empty referrer',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure downloads are based on referrers. Do you want to allow downloads for those omitting the referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'Paràmetres de la categoria d\'imatges',
	'SPECIAL_CATEGORY'				=> 'Categoria especial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Special categories differ between the way presented within posts.',
	'SUCCESSFULLY_UPLOADED'			=> 'S\'ha actualitzat.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'S\'ha afegit un grup d\'extensions.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'S\'ha actualitzat un grup d\'extensions.',

	'UPLOADING_FILES'				=> 'S\'estan carregant els fitxers',
	'UPLOADING_FILE_TO'				=> 'S\'està carregant el fitxer “%1$s” al missatge número %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'No teniu permisos per pujar fitxers a aquest fòrum “%s”.',
	'UPLOAD_DIR'					=> 'Directori de càrrega',
	'UPLOAD_DIR_EXPLAIN'			=> 'Storage path for attachments. Please note that if you change this directory while already having uploaded attachments you need to manually copy the files to their new location.',
	'UPLOAD_ICON'					=> 'Icona de descàrrega',
	'UPLOAD_NOT_DIR'				=> 'La destinació que heu especificat no és un directori.',
));

?>
