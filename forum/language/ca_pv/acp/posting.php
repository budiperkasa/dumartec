<?php
/**
*
* posting [Catalan (Valencian)]
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode és una implementació especial d\'HTML que ofereix un control senzill amb una sintaxi reduïda per introduir enllaços, imatges, descàrregues, etc. Des d\'aquesta pàgina podeu afegir, suprimir o editar els vostres BBCodes personalitzats.',
	'ADD_BBCODE'				=> 'Add a new BBCode',

	'BBCODE_ADDED'				=> 'S\'ha afegit el BBCode.',
	'BBCODE_EDITED'				=> 'S\'ha editat el BBCode.',
	'BBCODE_NOT_EXIST'			=> 'El BBCode que heu seleccionat no existeix.',
	'BBCODE_HELPLINE'			=> 'Línia d\'ajuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Aquest camp conté el text que es mostra quan es passa el ratolí per sobre.',
	'BBCODE_HELPLINE_TEXT'		=> 'Text',
	'BBCODE_INVALID_TAG_NAME'	=> 'L\'etiqueta que heu triat per al BBCode ja existeix.',
	'BBCODE_INVALID'			=> 'El BBCode no té una construcció correcta.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'El BBCode personalitzat ha de tindre etiquetes d\'obrir i tancar.',
	'BBCODE_TAG'				=> 'Etiqueta',
	'BBCODE_TAG_TOO_LONG'		=> 'El nom de l\'etiqueta és massa llarg.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'La definició és massa llarga, introduïu una més curta.',
	'BBCODE_USAGE'				=> 'Utilització del BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Ací podeu definir com es fa servir el BBCode. Substituïu qualsevol variable d\'entrada pel corresponent símbol (%smireu a sota%s).',

	'EXAMPLE'						=> 'Exemple:',
	'EXAMPLES'						=> 'Exemples:',

	'HTML_REPLACEMENT'				=> 'Sustitució de l\'HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Ací podeu definir el reemplaçament per defecte de l\'HTML. No oblideu posar els símbols que heu posat dalt',

	'TOKEN'					=> 'Símbol',
	'TOKENS'				=> 'Símbols',
	'TOKENS_EXPLAIN'		=> 'Els símbols són són sostenidors per a les entrades de l\'usuari. Aquestes entrades es validaran només si corresponen amb la definició corresponent. Si cal, podeu numerar-les afegit un número al darrer caràcter entre els claudàtors, e.x. {TEXT1}, {TEXT2}.<br /><br />També podeu fer servir una cadena de la vostra pròpia llengua/ directori com aquest: {L_<em>&lt;STRINGNAME&gt;</em>} a on <em>&lt;STRINGNAME&gt;</em> és el nom de la cadena traduïda que voleu afegir. Per exemple, {L_WROTE} es mostrarà com &quot;wrote&quot; o la traducció segons la localització de l\'usuari.<br /><br /><strong>Només els símbols llistat tot seguit es poden fer servir a dins dels BBCodes personalitzats.</strong>',
	'TOKEN_DEFINITION'		=> 'Què és?',
	'TOO_MANY_BBCODES'		=> 'No podeu crear més BBCodes. Suprimiu un o més i proveu novament.',

	'tokens'	=>	array(
		'TEXT'			=> 'Qualsevol text, incloent caràcters especials, números, etc. No es recomana fer servir aquests símbols a les etiquetes HTML. En aquest cas, proveu de fer servir IDENTIFIER o SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caràcters de l\'alfabet llatí (A-Z), números, espais, comes, punts, menys, més, major i menor',
		'IDENTIFIER'	=> 'Caràcters de l\'alfabet llatí (A-Z), números, major i menor',
		'NUMBER'		=> 'Qualsevol sèrie de dígits',
		'EMAIL'			=> 'Una adreça de correu vàlida',
		'URL'			=> 'Una adreça web vàlida fent servir qualsevol protocol (http, ftp, etc…). Si no es dóna, &quot;http://&quot; es posarà al principi.',
		'LOCAL_URL'		=> 'Una URL local. L\'URL ha de ser relativa a la pàgina del tema i no pot contindre cap tipus de nom de servidor o protocol.',
		'COLOR'			=> 'Un color HTML, pot estar també en la forma numèrica <samp>#FF1234</samp> o <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">color clau CSS</a> com <samp>fuchsia</samp> o <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Des d\'aquesta pàgina podeu afegir, suprimir o editar les icones que els usuaris poden afegir als seus temes o missatges. Aquestes icones normalment es mostren al costat del títol al llistat del fòrum o als assumptes dels missatges a la llista de tems. A més també podeu instal·lar paquets d\'icones.',
	'ACP_SMILIES_EXPLAIN'	=> 'Els smilies o emoticons normalment són xicotets, algunes vegades són imatges animades que expressen alguna emoció o sentiment. Des d\'aquesta pàgina podeu afegir, suprimir o editar els emoticons que els usuaris poden fer servir als seus missatges públics i privats. A més també podeu instal·lar paquets d\'icones.',
	'ADD_SMILIES'			=> 'Afegeix varis smilies',
	'ADD_SMILEY_CODE'		=> 'Afegeix un codi smilie adicional',
	'ADD_ICONS'				=> 'Afegeix varis icones',
	'AFTER_ICONS'			=> 'Després %s',
	'AFTER_SMILIES'			=> 'Després %s',

	'CODE'						=> 'Codi',
	'CURRENT_ICONS'				=> 'Icones actuals',
	'CURRENT_ICONS_EXPLAIN'		=> 'Trieu què fer amb les icones instal·lades actualment.',
	'CURRENT_SMILIES'			=> 'Smilies actuals',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Trieu què fer amb els smilies instal·lades actualment.',

	'DISPLAY_ON_POSTING'		=> 'Mostra a la pàgina de redacció',
	'DISPLAY_POSTING'			=> 'A la pàgina de redacció',
	'DISPLAY_POSTING_NO'		=> 'No a la pàgina de redacció',


	
	'EDIT_ICONS'				=> 'Edita icones',
	'EDIT_SMILIES'				=> 'Edita smilies',
	'EMOTION'					=> 'Emoció',
	'EXPORT_ICONS'				=> 'Exporta i descarrega icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sClicant sobre aquest enllaç, la configuració de les vostres icones instal·lades s\'empaquetarà en un fitxer <samp>icons.pak</samp> que una vegada descarregat es podrà comprimir a un fitxer <samp>.zip</samp> o <samp>.tgz</samp> que contindrà totes les icones més els fitxers de configuració <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Exporta i descarrega smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sClicant sobre aquest enllaç, la configuració dels vostres smilies instal·lats s\'empaquetarà en un fitxer <samp>smilies.pak</samp> que una vegada descarregat es podrà comprimir a un fitxer <samp>.zip</samp> o <samp>.tgz</samp> que contindrà tots els smilies més els fitxers de configuració <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Primer',

	'ICONS_ADD'				=> 'Add a new icon',
	'ICONS_NONE_ADDED'		=> 'No icons were added.',
	'ICONS_ONE_ADDED'		=> 'The icon has been added successfully.',
	'ICONS_ADDED'			=> 'The icons have been added successfully.',
	'ICONS_CONFIG'			=> 'Icon configuration',
	'ICONS_DELETED'			=> 'The icon has been removed successfully.',
	'ICONS_EDIT'			=> 'Edit icon',
	'ICONS_ONE_EDITED'		=> 'The icon has been updated successfully.',
	'ICONS_NONE_EDITED'		=> 'No icons were updated.',
	'ICONS_EDITED'			=> 'The icons have been updated successfully.',
	'ICONS_HEIGHT'			=> 'Icon height',
	'ICONS_IMAGE'			=> 'Icon image',
	'ICONS_IMPORTED'		=> 'The icons pack has been installed successfully.',
	'ICONS_IMPORT_SUCCESS'	=> 'The icons pack was imported successfully.',
	'ICONS_LOCATION'		=> 'Icon location',
	'ICONS_NOT_DISPLAYED'	=> 'The following icons are not displayed on the posting page',
	'ICONS_ORDER'			=> 'Icon order',
	'ICONS_URL'				=> 'Icon image file',
	'ICONS_WIDTH'			=> 'Icon width',
	'IMPORT_ICONS'			=> 'Install icons package',
	'IMPORT_SMILIES'		=> 'Install smilies package',

	'KEEP_ALL'			=> 'Conserva-ho tot',

	'MASS_ADD_SMILIES'	=> 'Afegeix varis smilies',

	'NO_ICONS_ADD'		=> 'No hi ha icones disponibles per afegir.',
	'NO_ICONS_EDIT'		=> 'No hi ha icones disponibles per modificar.',
	'NO_ICONS_EXPORT'	=> 'No hi ha icones amb els quals crear un paquet.',
	'NO_ICONS_PAK'		=> 'No s\'ha trobat cap paquet d\'icones.',
	'NO_SMILIES_ADD'	=> 'No hi ha carotes disponibles per afegir.',
	'NO_SMILIES_EDIT'	=> 'No hi ha carotes disponibles per modificar.',
	'NO_SMILIES_EXPORT'	=> 'No hi ha carotes amb els quals crear un paquet.',
	'NO_SMILIES_PAK'	=> 'No s\'ha trobat cap paquet d\'smilies.',

	'PAK_FILE_NOT_READABLE'		=> 'No s\'ha pogut llegir el fitxer <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Substitueix resultats',

	'SELECT_PACKAGE'			=> 'Seleccioneu un fitxer de paquet',
	'SMILIES_ADD'				=> 'Afegir un nou smilie',
	'SMILIES_NONE_ADDED'		=> 'No s\'ha afegit cap smilie.',
	'SMILIES_ONE_ADDED'			=> 'S\'ha afegit la carota.',
	'SMILIES_ADDED'				=> 'S\'han afegit les carotes.',
	'SMILIES_CODE'				=> 'Codi de l\'smilie',
	'SMILIES_CONFIG'			=> 'Configuració de la carota',
	'SMILIES_DELETED'			=> 'S\'ha suprimit la carota.',
	'SMILIES_EDIT'				=> 'Edita carota',
	'SMILIE_NO_CODE'			=> 'S\'ha ignorat la carota “%s” perquè no heu introduït cap codi.',
	'SMILIE_NO_EMOTION'			=> 'S\'ha ignorat la carota “%s” perquè no heu introduït cap emoció.',
	'SMILIES_NONE_EDITED'		=> 'No s\'ha actualitzat cap carota.',
	'SMILIES_ONE_EDITED'		=> 'S\'ha actualitzat la carota.',
	'SMILIES_EDITED'			=> 'S\'han actualitzat les carotes.',
	'SMILIES_EMOTION'			=> 'Emoció',
	'SMILIES_HEIGHT'			=> 'Alçada',
	'SMILIES_IMAGE'				=> 'Imatge',
	'SMILIES_IMPORTED'			=> 'S\'han actualitzat els paquets de carotes.',
	'SMILIES_IMPORT_SUCCESS'	=> 'S\'ha importat el paquet de carotes.',
	'SMILIES_LOCATION'			=> 'Situació de la carota',
	'SMILIES_NOT_DISPLAYED'		=> 'Les següents carotes no es mostren a la pàgina de redacció',
	'SMILIES_ORDER'				=> 'Odre de les carotes',
	'SMILIES_URL'				=> 'Fitxer d\'imatge de la carota',
	'SMILIES_WIDTH'				=> 'Ample',

	'WRONG_PAK_TYPE'	=> 'El paquet especificat no conté les dades apropiades.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Des d\'aquest panell de control podeu afegir, editar i suprimir paraules que seran automàticament censurades als fòrums. A més, els nous usuaris no podran registrar-se amb paraules censurades. Els comodins (*) s\'accepten al camp paraula.',
	'ADD_WORD'				=> 'Afegeix una paraula nova',

	'EDIT_WORD'		=> 'Edita la paraula censurada',
	'ENTER_WORD'	=> 'Cal que introduïu una paraula i el seu substitut.',

	'NO_WORD'	=> 'No heu seleccionat cap paraula per editar-la.',

	'REPLACEMENT'	=> 'Substitut',

	'UPDATE_WORD'	=> 'Actualitza la paraula censurada',

	'WORD'				=> 'Paraula',
	'WORD_ADDED'		=> 'S\'ha afegit la paraula censurada correctament.',
	'WORD_REMOVED'		=> 'La paraula censurada seleccionada s\'ha eliminat correctament.',
	'WORD_UPDATED'		=> 'La paraula censurada seleccionada s\'ha actualitzat correctament.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Amb aquest formulari podeu afegir, editar, veure i esborrar els diferents rangs. A més, podeu crear rangs especials que poden aplicar-se als usuaris.',
	'ADD_RANK'				=> 'Afegeix nou rang',

	'MUST_SELECT_RANK'		=> 'Heu de seleccionar un rang.',
	
	'NO_ASSIGNED_RANK'		=> 'No hi ha cap rang especial assignat.',
	'NO_RANK_TITLE'			=> 'No heu especificat un títol per al rang.',
	'NO_UPDATE_RANKS'		=> 'S\'ha suprimit el rang. Tot i així, els comptes que ho feien servir no s\'han actualitzat. Haureu de resetejar manualment el rang d\'aquests comptes.',

	'RANK_ADDED'			=> 'S\'ha afegit el rang.',
	'RANK_IMAGE'			=> 'Imatge del rang',
	'RANK_IMAGE_EXPLAIN'	=> 'Feu servir això per definir una xicoteta imatge associada al rang. La ruta és relativa al directori base del phpBB.',
	'RANK_MINIMUM'			=> 'Mínim de missatges',
	'RANK_REMOVED'			=> 'S\'ha suprimit el rang.',
	'RANK_SPECIAL'			=> 'Estableix com a rang especial',
	'RANK_TITLE'			=> 'Títol del rang',
	'RANK_UPDATED'			=> 'S\'ha actualitzat el rang.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Ací podeu controlar els noms d\'usuari que no es permetran. Els noms no permesos poden contindre comodins (*). No podeu prohibir un nom d\'usuari que ja estiga registrat. En aquest cas, abans haureu de suprimir-lo.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Podeu prohibir noms d\'usuari fent servir * per especificar que pot ser qualsevol caràcter.',
	'ADD_DISALLOW_TITLE'	=> 'Afegir un nom d\'usuari prohibit',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Podeu suprimir noms d\'usuari prohibits seleccionant el nom d\'usuari de la següent llista i després clicant a envia.',
	'DELETE_DISALLOW_TITLE'		=> 'Suprimeix nom d\'usuari prohibit',
	'DISALLOWED_ALREADY'		=> 'No es pot prohibir el nom d\'usuari que heu introduït. Potser que existisca a la llista o bé ja existeix un nom d\'usuari actiu amb aquest nom.',
	'DISALLOWED_DELETED'		=> 'S\'ha suprimit el nom d\'usuari prohibit.',
	'DISALLOW_SUCCESSFUL'		=> 'S\'ha afegit el nom d\'usuari prohibit.',

	'NO_DISALLOWED'				=> 'No hi ha cap nom d\'usuari prohibit',
	'NO_USERNAME_SPECIFIED'		=> 'No heu seleccionat o introduït cap nom d\'usuari per operar amb ell.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Ací podeu gestionar les raons que es fan servir als informes i als missateges denegats quan un missatge es desaprova. Hi ha una raó per defecte (marcada amb *) que no podeu suprimir, aquesta raó es fa servir per a missatges que no tenen una raó concreta.',
	'ADD_NEW_REASON'		=> 'Afegeix nova raó',
	'AVAILABLE_TITLES'		=> 'Títols de raons localitzades disponibles',
	
	'IS_NOT_TRANSLATED'			=> 'La raó va ser <strong>no</strong> haver estat localitzat.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'La raó va ser <strong>no</strong> haver estat localitzat. Si voleu proveir el formulari de localització, especifiqueu la clau correcta a la secció d\'informe de raons del fitxer de llengua.',
	'IS_TRANSLATED'				=> 'S\'ha localitzat la raó.',
	'IS_TRANSLATED_EXPLAIN'		=> 'S\'ha localitzat la raó. Si el títol que heu que heu introduïtestà especificada a dins de la secció d\'informe de raons del fitxer de llengua, es farà servir el formulari de localització del títol i descripció.',
	
	'NO_REASON'					=> 'No s\'ha trobat la raó.',
	'NO_REASON_INFO'			=> 'Heu d\'especificar un títol i una descripció per a aquesta raó.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'No podeu suprimir la raó per defecte "Altra".',

	'REASON_ADD'				=> 'Afegeix raó d\'informe/denegació',
	'REASON_ADDED'				=> 'S\'ha afegit raó d\'informe/denegació.',
	'REASON_ALREADY_EXIST'		=> 'Ja existeix una raó amb aquest títol, proveu amb una altra.',
	'REASON_DESCRIPTION'		=> 'Descripció de la raó',
	'REASON_DESC_TRANSLATED'	=> 'Descripció que es mostra de la raó',
	'REASON_EDIT'				=> 'Edita raó d\'informe/denegació',
	'REASON_EDIT_EXPLAIN'		=> 'Ací podeu afegir o editar una raó.',
	'REASON_REMOVED'			=> 'S\'ha suprimit raó d\'informe/denegació.',
	'REASON_TITLE'				=> 'Títol de la raó',
	'REASON_TITLE_TRANSLATED'	=> 'Títol que es mostra de la raó',
	'REASON_UPDATED'			=> 'S\'ha actualitzat raó d\'informe/denegació.',

	'USED_IN_REPORTS'		=> 'Fet servir als informes',
));

?>
