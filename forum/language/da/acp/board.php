<?php
/**
*
* acp_board.php [Danish]
*
* @package language
* @version Id: board.php 9037 2008-10-26 10:52:43Z acydburn $
* @version $Id: board.php,v 1.15 2008/12/10 19:21:07 jansk Exp $
* @source file is copyright (c) 2000, 2002, 2005, 2007 phpBB Group, 
* @modified and translated by Olympus DK Team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk 
*
* This file is part of the Danish language package for phpBB 3.0.x.
* Copyright (c) 2006, 2007, 2008 Olympus DK Team
*
* The Danish language package for phpBB 3.0.x is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by the Free Software
* Foundation, version 2 of the License.
*
* The Danish language package for phpBB 3.0.x is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with this language
* package. If not, see <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>.
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
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Her kan du bestemme en række vigtige standardindstillinger. Dit boards navn og beskrivelsen af det, og også indstillingerne for tidszone, sprog m.v.',

	'CUSTOM_DATEFORMAT'				=> 'Brugerdefineret...',
	'DEFAULT_DATE_FORMAT'			=> 'Datoformat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Datoformatet er det samme som PHPs <code>date</code>-funktion.',
	'DEFAULT_LANGUAGE'				=> 'Standardsprog',
	'DEFAULT_STYLE'					=> 'Standardtypografi',
	'DISABLE_BOARD'					=> 'Slå boardet fra',
	'DISABLE_BOARD_EXPLAIN'			=> 'Dette vil sætte boardet offline for brugere. Du kan vælge at indtaste en kort meddelelse, der skal vises i stedet (maksimalt 255 tegn).',
	'OVERRIDE_STYLE'				=> 'Tilsidesæt brugeres valg af typografi',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Erstatter brugeres valg af typografi med boardets standardtypografi.',
	'SITE_DESC'						=> 'Boardbeskrivelse',
	'SITE_NAME'						=> 'Boardnavn',
	'SYSTEM_DST'					=> 'Slå sommertid/<abbr title="Daylight Saving Time">DST</abbr> til',
	'SYSTEM_TIMEZONE'				=> 'Tidszone for board',
	'WARNINGS_EXPIRE'				=> 'Varighed for advarsler',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Antal dage fra en advarsel udstedes, til den fjernes fra brugeres profildata.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hér kan du aktivere eller deaktivere flere af boardets udvidede funktioner.',

	'ALLOW_ATTACHMENTS'			=> 'Tillad at vedhæfte filer',
	'ALLOW_BIRTHDAYS'			=> 'Brugeres alder og fødselsdage',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Vis brugeres alder i brugerprofil. Fødselsdag vises desuden på boardindekset, hvis fødselsdagslisten er aktiveret under Serverkonfiguration -> Belastning.',
	'ALLOW_BOOKMARKS'			=> 'Tillad bogmærker på emner',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Brugere kan gemme personlige bogmærker.',
	'ALLOW_BBCODE'				=> 'Tillad BBkode',
	'ALLOW_FORUM_NOTIFY'		=> 'Tillad forumovervågning',
	'ALLOW_NAME_CHANGE'			=> 'Tillad ændring af brugernavn',
	'ALLOW_NO_CENSORS'			=> 'Tillad deaktivering af ordcensur',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Brugere kan vælge at slå censur af ord fra i indlæg og private beskeder.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Tillad vedhæftede filer i private beskeder',
	'ALLOW_SIG'					=> 'Tillad signaturer',
	'ALLOW_SIG_BBCODE'			=> 'Tillad BBkode i brugersignaturer',
	'ALLOW_SIG_FLASH'			=> 'Tillad brug af BBkode-tag\'en <code>[FLASH]</code> i brugersignaturer',
	'ALLOW_SIG_IMG'				=> 'Tillad brug af BBkode-tag\'en <code>[IMG]</code>  i brugersignaturer',
	'ALLOW_SIG_LINKS'			=> 'Tillad brug af links i brugersignaturer',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Hvis brugen af BBkode-tag\'en <code>[URL]</code> forbydes, afbrydes samtidig automatiske (magiske) URL\'er.',
	'ALLOW_SIG_SMILIES'			=> 'Tillad brug af smilies i brugersignaturer',
	'ALLOW_SMILIES'				=> 'Tillad smilies',
	'ALLOW_TOPIC_NOTIFY'		=> 'Tillad emneovervågning',
	'BOARD_PM'					=> 'Tillad private beskeder',
	'BOARD_PM_EXPLAIN'			=> 'Brugere kan anvende boardets indbyggede system til sende beskeder til hinanden.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatars er generelt små, unikke billeder en bruger kan knytte til sin profil. Afhængig af boardets typografi, vises disse oftest lige under brugernavnet, når man læser et indlæg. Herfra styrer du hvordan brugerne kan definere deres avatars. Bemærk venligst at for at kunne uploade avatars skal du på forhånd have oprettet den herunder angivne mappe og sikre dig, at der kan skrives til mappen fra serveren. Bemærk også, at begrænsningerne for filstørrelse kun bruges på uploadede avatars, de gælder ikke for eksternt linkede billeder.',

	'ALLOW_LOCAL'					=> 'Slå galleriavatars til',
	'ALLOW_REMOTE'					=> 'Tillad eksterne avatars',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars placeret på en anden hjemmeside, hvor der kan linkes til.',
	'ALLOW_UPLOAD'					=> 'Tillad upload af avatars',
	'AVATAR_GALLERY_PATH'			=> 'Avatargallerimappens placering',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe for forhåndsuploadede avatars, f.eks. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatarmappens placering',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe, f.eks. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Største dimensioner for avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Bredde x højde i pixels.',
	'MAX_FILESIZE'					=> 'Maksimal filstørrelse for avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'For uploadede avatarfiler.',
	'MIN_AVATAR_SIZE'				=> 'Mindste dimensioner for avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Bredde x højde i pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse alle standardindstillinger for private beskeder.',

	'ALLOW_BBCODE_PM'			=> 'Tillad BBkode i private beskeder',
	'ALLOW_FLASH_PM'			=> 'Tillad brug af BBkode-tag\'en <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Bemærk at muligheden for at anvende flash i private beskeder, forudsætter at flash også er tilladt i de overordnede tilladelsesindstillinger.',
	'ALLOW_FORWARD_PM'			=> 'Tillad videresending af private beskeder',
	'ALLOW_IMG_PM'				=> 'Tillad brug af BBkode-tag\'en <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Tillad samtidig afsending til flere brugere og grupper',
	'ALLOW_MASS_PM_EXPLAIN'	=> 'Afsending til grupper kan indstilles for hver gruppe under gruppeadministration.',
	'ALLOW_PRINT_PM'			=> 'Tillad printervenlig visning af private beskeder',
	'ALLOW_QUOTE_PM'			=> 'Tillad citater i private beskeder',
	'ALLOW_SIG_PM'				=> 'Tillad signatur i private beskeder',
	'ALLOW_SMILIES_PM'			=> 'Tillad smilies i private beskeder',
	'BOXES_LIMIT'				=> 'Maksimalt antal private beskeder pr. mappe',
	'BOXES_LIMIT_EXPLAIN'		=> 'Brugere kan ikke modtage flere end dette antal beskeder i hver af deres mapper til private beskeder. Sæt til 0 for ubegrænset antal meddelelser.',
	'BOXES_MAX'					=> 'Maksimalt antal mapper til private beskeder',
	'BOXES_MAX_EXPLAIN'			=> 'Brugere kan oprette op til dette antal mapper til private beskeder.',
	'ENABLE_PM_ICONS'			=> 'Tillad brug af emneikoner',
	'FULL_FOLDER_ACTION'		=> 'Handling ved fuld mappe',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Udført standardhandling hvis en brugers mappe er fuld og eventuelle brugerdefinerede mappehandlinger ikke er anvendelige. Eneste undtagelse er mappen "Sendte beskeder", hvor standardhandlingen altid er sletning af ældste beskeder.',
	'HOLD_NEW_MESSAGES'			=> 'Tilbagehold nye beskeder',
	'PM_EDIT_TIME'				=> 'Begræns redigeringstid',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Begrænser hvor længe en endnu ikke afleveret besked kan redigeres. Sæt til 0 for deaktivering af denne begrænsning.',
	'PM_MAX_RECIPIENTS'		=> 'Maksimalt antal tilladte modtagere',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Det maksimale antal modtagere af en privat besked. Hvis 0 tillades ubegrænset antal. Indstillingen kan sættes for hver gruppe under gruppeadministration.'
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse alle standardindstillinger for at skrive indlæg.',
	'ALLOW_POST_LINKS'				=> 'Tillad at anvende links i indlæg og private beskeder',
	'ALLOW_POST_LINKS_EXPLAIN'		=> 'Hvis anvendelse ikke er tilladt, er BBkode-tag for URL\'er og automatiske(magiske) URL\'er slået fra.',
	'ALLOW_POST_FLASH'				=> 'Tillad brug af BBkode-tag\'en <code>[FLASH]</code> i indlæg',
	'ALLOW_POST_FLASH_EXPLAIN'		=> 'Hvis anvendelse ikke er tilladt, er BBkode-tag\'en <code>[FLASH]</code> ikke synlig når der skrives indlæg. Ellers kan tilladelsessystemet anvendes til af definere hvilke brugere der må bruge BBkode-tag\'en<code>[FLASH]</code> .',

	'ENABLE_QUEUE_TRIGGER'	=> 'Aktivér indlæg i kø',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Sætter tilmeldte brugeres indlæg i kø til godkendelse, hvis disse ikke har indsendt flere indlæg end antallet herunder. Indstillingen påvirker ikke tilladelseindstillinger for godkendelse af indlæg og emner.',
	'QUEUE_TRIGGER_POSTS'			=> 'Antal indlæg for deaktivering af indlæg i kø',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Er indlæg i kø er aktiveret, sættes indlæg i kø til godkendelse fra brugere der har indsendt færre end dette antal indlæg. Funktionen deaktiveres automatisk for brugere der har indsendt dette antal indlæg eller flere.',
	
	'BUMP_INTERVAL'					=> 'Interval for placér øverst',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Antal minutter, timer eller dage siden seneste indlæg i et emne, inden det kan placeres øverst.',
	'CHAR_LIMIT'					=> 'Maksimalt antal tegn pr. indlæg',
	'CHAR_LIMIT_EXPLAIN'			=> 'Det maksimale antal tegn tilladt i et indlæg. Sæt til 0 for deaktivering af denne begrænsning.',
	'DISPLAY_LAST_EDITED'			=> 'Vis sidst redigeret',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Vælg om seneste redigeringstidspunkt skal vises i indlæg.',
	'EDIT_TIME'						=> 'Begræns tidsrum for redigering',
	'EDIT_TIME_EXPLAIN'				=> 'Begrænser tidsrummet hvori man kan redigere et nyt indlæg. Sæt til 0 for deaktivering af denne begrænsning.',
	'FLOOD_INTERVAL'				=> 'Interval mellem nye indlæg',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Antal sekunder en bruger skal vente mellem indsendelse af nye indlæg. For at lade brugerne ignorere denne indstilling skal du rette i deres tilladelser.',
	'HOT_THRESHOLD'					=> 'Grænse for populært emne',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Antal indlæg pr. emne for at dette kategoriseres populært emne. Sæt til 0 for at slå populære emner fra.',
	'MAX_POLL_OPTIONS'				=> 'Maksimalt antal afstemningsmuligheder',
	'MAX_POST_FONT_SIZE'			=> 'Maksimal skriftstørrelse i indlæg',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Den maksimalt anvendelige skriftstørrelse i indlæg. Sæt til 0 for deaktivering af denne begrænsning.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maksimal billedhøjde i indlæg',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maksimalhøjde på billeder og flashfiler i indlæg. Sæt til 0 for ubegrænset højde.',
	'MAX_POST_IMG_WIDTH'			=> 'Maksimal billedbredde i indlæg',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maksimal bredde på billeder og flashfiler i indlæg. Sæt til 0 for ubegrænset bredde.',
	'MAX_POST_URLS'					=> 'Maksimalt antal links i indlæg',
	'MAX_POST_URLS_EXPLAIN'			=> 'Højeste antal URL\'er pr. indlæg. Sæt til 0 for ubegrænset antal links.',
	'POSTING'						=> 'Indlæg',
	'POSTS_PER_PAGE'				=> 'Indlæg pr. side',
	'QUOTE_DEPTH_LIMIT'				=> 'Maksimalt antal indlejrede citater pr. indlæg',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Definerer hvor mange gange et tidligere citat kan indlejres. Sæt til 0 for ubegrænset dybde.',
	'SMILIES_LIMIT'					=> 'Maksimalt antal smilies pr. indlæg',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Sæt til 0 for ubegrænset antal smilies.',
	'TOPICS_PER_PAGE'				=> 'Emner pr. side',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Her kan du tilpasse alle standardindstillinger for signaturer.',

	'MAX_SIG_FONT_SIZE'				=> 'Maksimal skriftstørrelse i signatur',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maksimal skriftstørrelse tilladt i brugersignaturer. Sæt til 0 for ubegrænset størrelse.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maksimal billedhøjde i signatur',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maksimal højde på et billede eller flashfil i brugersignaturer. Sæt til 0 for ubegrænset højde.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maksimal billedbredde i signatur',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maksimal bredde på et billede eller flashfil i brugersignaturer. Sæt til 0 for ubegrænset bredde.',
	'MAX_SIG_LENGTH'				=> 'Maksimal længde af signatur',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maksimalt antal tegn i brugersignaturer.',
	'MAX_SIG_SMILIES'				=> 'Maksimalt antal smilies i signatur',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maksimalt antal smilies tilladt i brugersignaturer. Sæt til 0 for ubegrænset antal.',
	'MAX_SIG_URLS'					=> 'Maksimalt antal links i signatur',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maksimalt antal links i brugersignaturer. Sæt til 0 for ubegrænset antal links.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse tilmeldings- og profilrelaterede indstillinger.',

	'ACC_ACTIVATION'			=> 'Kontoaktivering',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Bestemmer om brugere har øjeblikkelig adgang til boardet eller om der kræves anden form for bekræftelse. Du kan også deaktivere muligheden for at tilmelde sig boardet.',
	'ACC_ADMIN'					=> 'Af administrator',
	'ACC_DISABLE'				=> 'Deaktiveret',
	'ACC_NONE'					=> 'Ingen',
	'ACC_USER'					=> 'Af bruger',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Tillad genbrug af emailadresse',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Forskellige brugere kan tilmelde sig med samme emailadresse.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA-telefaxnummer',
	'COPPA_MAIL'				=> 'COPPA-emailadresse',
	'COPPA_MAIL_EXPLAIN'		=> 'Angiv den emailadresse hvortil forældre eller værge kan sende COPPA-tilmeldingsformularerne.',
	'ENABLE_COPPA'				=> 'Aktivér COPPA-funktion',
	'ENABLE_COPPA_EXPLAIN'		=> 'For at overholde den amerikanske U.S. COPPA lovgivning, afkræves brugere i forbindelse med tilmeldingen, en erklæring om hvorvidt de er 13 år eller ældre. Hvis COPPA-funktionen deaktiveres, vises COPPA-specifikke grupper ikke.',
	'MAX_CHARS'					=> 'Maks',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Intet passende autorisationsmodul blev fundet.',
	'PASSWORD_LENGTH'			=> 'Længde af kodeord',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimalt og maksimalt antal tegn i kodeord.',
	'REG_LIMIT'					=> 'Tilmeldingsforsøg',
	'REG_LIMIT_EXPLAIN'			=> 'Antal tilmeldingsforsøg brugere har før de udelukkes for den pågældende session.',
	'USERNAME_ALPHA_ONLY'		=> 'Kun bogstaver og tal',
	'USERNAME_ALPHA_SPACERS'	=> 'Bogstaver, tal og mellemrumstegn',
	'USERNAME_ASCII'			=> 'ASCII (ingen international unicode)',
	'USERNAME_LETTER_NUM'		=> 'Ethvert bogstav og tal',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Ethvert bogstav, tal og mellemrum',
	'USERNAME_CHARS'			=> 'Begræns brugbare tegn i brugernavn',
	'USERNAME_CHARS_ANY'		=> 'Ethvert tegn',
	'USERNAME_CHARS_EXPLAIN'	=> 'Begræns typen af tegn, der kan bruges i brugernavne, mellemrumstegn er: mellemrum, -, +, _, [ og ].',
	'USERNAME_LENGTH'			=> 'Længde af brugernavn',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimalt og maksimalt antal tegn i brugernavne.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse standardindstillinger for visuel bekræftelse og CAPTCHA.',

	'CAPTCHA_GD'					=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'	=> 'Forgrundsstøj i GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'			=> 'Anvend GD hvis du ønsker en mere avanceret CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN' => 'Anvend forgrundsstøj for at gøre den GD-baserede CAPTCHA sværere at aflæse.',
	'CAPTCHA_GD_X_GRID'				=> 'Baggrundsstøj i GD CAPTHA\'s x-akse',
	'CAPTCHA_GD_X_GRID_EXPLAIN'		=> 'En lavere indstilling her, gør den GD-baserede CAPTCHA sværere at aflæse. 0 deaktiverer baggrundsstøj i x-aksen.',
	'CAPTCHA_GD_Y_GRID'				=> 'Baggrundsstøj i GD CAPTHA\'s y-akse',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'		=> 'En lavere indstilling her, gør den GD-baserede CAPTCHA sværere at aflæse. 0 deaktiverer baggrundsstøj i y-aksen.',

	'CAPTCHA_PREVIEW_MSG'		=> 'Visningen er kun en prøve. Dine ændringer af indstillingerne er ikke gemt.',
	'CAPTCHA_PREVIEW_EXPLAIN'	=> 'CAPTCHA - som funktionen vises med de nuværende indstillinger. Brug knappen "Vis prøve" for at genopfriske. Bemærk at CAPTCHAs vises tilfældigt og varierer fra den ene visning til den næste.',
	'VISUAL_CONFIRM_POST'			=> 'Aktivér visuel bekræftelse for indlæg fra gæster',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Kræver at gæster (ikke tilmeldte brugere) indtaster en tilfældig kode der matcher et billede for at forhindre automatiseret spamming og skrivning af masseindlæg.',
	'VISUAL_CONFIRM_REG'			=> 'Aktivér visuel bekræftelse for tilmelding',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'Kræver af nye brugere at de indtaster en tilfældig kode der matcher et billede for at forhindre automatiseret massetilmelding.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'En cookie er en lille mængde data, der sendes til brugernes browser. Den omfatter bl.a. et anonymt, men entydigt id, som eksempelvis anvendes til at logge dine brugere automatisk ind. Indstillingerne her bestemmer de parametre boardets cookies afsendes med. I de fleste tilfælde er de valgte standardværdier tilstrækkelige. Ændrer du indstillingerne på et board i drift, så gør det med forsigtighed. I værste fald kan dine brugere ikke mere logge ind automatisk.',

	'COOKIE_DOMAIN'			=> 'Cookiedomæne',
	'COOKIE_NAME'			=> 'Cookienavn',
	'COOKIE_PATH'			=> 'Sti til cookie',
	'COOKIE_SECURE'			=> 'Sikker cookie',
	'COOKIE_SECURE_EXPLAIN'	=> 'Hvis din server kører via SSL, indstil dette til slået til og lad det ellers være slået fra. Hvis dette slås til på et domæne, der ikke kører SSL, vil det resultere i serverfejl ved viderestillinger.',
	'ONLINE_LENGTH'				=> 'Varighed af onlineinformation',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Tid i minutter hvorefter inaktive brugere bliver fjernet fra "Hvem er online" listen. Jo større tidsrum, desto længere behandlingstid for at generere listen.',
	'SESSION_LENGTH'			=> 'Sessionslængde',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessioner vil udløbe efter denne tid, i sekunder.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Her kan du slå visse boardfunktioner fra, for at reducere boardets belastning af serveren. På de fleste servere skulle der ikke være brug for at slå nogen funktioner fra. Men på visse systemer eller i delte værtsmiljøer kan det være en fordel at slå unødvendige funktioner fra. Desuden kan du definere tærskler for systembelastning og antal aktive sessioner, overskrides disse vil boardet gå offline.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Tilpassede profilfelter',
	'LIMIT_LOAD'					=> 'Begræns systembelastning',
	'LIMIT_LOAD_EXPLAIN'			=> 'Hvis systembelastningen i gennemsnit over 1 minut overskrider denne værdi, vil boardet gå offline, 1.0 er lig ~100% belastning af én processor. Dette virker kun på UNIX-baserede servere og hvor denne information er tilgængelig. Værdien nulstiller sig selv hvis phpBB ikke var i stand til at finde belastningsgrænsen.',
	'LIMIT_SESSIONS'				=> 'Begræns sessioner',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Hvis antallet af sessioner overskrider denne værdi indenfor 1 minut, vil boardet gå offline. Sæt til 0 for ubegrænset antal sessioner.',
	'LOAD_CPF_MEMBERLIST'			=> 'Vis tilpassede profilfelter i listen med tilmeldte brugere',
	'LOAD_CPF_VIEWPROFILE'			=> 'Vis tilpassede profilfelter i brugerprofiler',
	'LOAD_CPF_VIEWTOPIC'			=> 'Vis tilpassede profilfelter på emnesider',
	'LOAD_USER_ACTIVITY'			=> 'Brugeres aktivitet',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Viser aktivt emne og forum i brugerprofiler og brugerkontrolpanel. Det anbefales at deaktivere dette for boards med mere end en million indlæg.',
	'RECOMPILE_STYLES'				=> 'Rekompilér fastfrosne typografikomponenter',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Kontrollerer for opdaterede typografikomponenter i filsystemet og rekompilerer.',
	'YES_ANON_READ_MARKING'			=> 'Emnemarkering for gæster',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Gem læst/ulæst statusinformation for gæster. Vælges "Nej" vises emner altid som læste for gæster.',
	'YES_BIRTHDAYS'					=> 'Vis fødselsdagslisten',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Brugere med fødselsdag vises nederst på boardindekset. Visning af listen forudsætter at fødselsdage er tilladt under Boardfinesser.',
	'YES_JUMPBOX'					=> 'Vis "Hop til" boksen',
	'YES_MODERATORS'				=> 'Vis redaktører',
	'YES_ONLINE'					=> 'Vis brugere online',
	'YES_ONLINE_EXPLAIN'			=> 'Brugernavn vises nederst på boardindeks, forum og emnesider.',
	'YES_ONLINE_GUESTS'				=> 'Antal gæster online',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Vis antal gæster i listen "Hvem er online", i fora og emner.',
	'YES_ONLINE_TRACK'				=> 'Vis brugeres online og offline-status',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Status vises med relevant ikon i profilfelt.',
	'YES_POST_MARKING'				=> 'Anvend prikkede emner',
	'YES_POST_MARKING_EXPLAIN'		=> 'Et prikket emneikon viser bruger om denne har skrevet indlæg i emnet.',
	'YES_READ_MARKING'				=> 'Database-emnemarkering',
	'YES_READ_MARKING_EXPLAIN'		=> 'Gem læst/ulæst statusinformation i databasen, i stedet for i en cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB understøtter forskellige autentifikationsmoduler, som giver mulighed for at bestemme hvordan en bruger skal autentificeres ved login på boardet. Der er tre standardmoduler med i phpBB: DB, LDAP og Apache. Ikke alle metoderne kræver yderligere information, så udfyld kun felterne, hvis det er relevant til den valgte metode.',

	'AUTH_METHOD'				=> 'Vælg en autentifikationsmetode',

	'APACHE_SETUP_BEFORE_USE'	=> 'Du skal konfigurere autentifikation i Apache før du ændrer phpBB til at anvende denne metode. Husk at det anvendte brugernavn til autentifikationen skal være det samme som dit phpBB-brugernavn. Autentifikation i Apache kan kun anvendes med mod_php (ikke med en CGI-version) og med safe_mod slået fra.',

	'LDAP_DN'					=> 'LDAP-base <var>dn</var>',
	'LDAP_DN_EXPLAIN'			=> 'Dette er LDAP Distinguished Name som angiver brugerinformationen f.eks. <samp>o=mit firma,c=dk</samp>.',
	'LDAP_EMAIL'				=> 'LDAP-emailattribut',
	'LDAP_EMAIL_EXPLAIN'		=> 'Sæt denne til navnet på din brugertabels emailattribut (hvis en sådan findes) for automatisk at sætte emailadressen for nye brugere. Ved at lade dette felt være tomt vil brugere ved første login få tildelt en tom emailadresse.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Forbindelse til LDAP-server mislykkedes med det anvendte brugernavn og kodeord.',
	'LDAP_NO_EMAIL'				=> 'Den angivne emailattribut findes ikke.',
	'LDAP_NO_IDENTITY'			=> 'Kunne ikke finde en login-identitet for %s.',
	'LDAP_PASSWORD'				=> 'LDAP-kodeord',
	'LDAP_PASSWORD_EXPLAIN'		=> 'Efterlades tomt for at benytte anonym tilslutning, udfyldes ellers med ovenstående brugers kodeord.  Kræves af Active Directory servere. <strong>ADVARSEL:</strong> Kodeordet bliver lagret i databasen i klar og ukrypteret tekst, og vil være synligt for alle med adgang til databasen eller til denne konfigurationsside.',
	'LDAP_PORT'					=> 'LDAP-serverport',
	'LDAP_PORT_EXPLAIN'			=> 'Hvis standardporten 389 ikke anvendes når der tilsluttes til LDAP serveren, kan du her angive hvilken alternativ port phpBB skal anvende i stedet.',
	'LDAP_SERVER'				=> 'LDAP-servernavn',
	'LDAP_SERVER_EXPLAIN'		=> 'Ved brug af LDAP er dette navnet eller IP-adressen på LDAP-serveren. Alternativt kan du angive en URL, eksempelvis ldap://hostname:port/.',
	'LDAP_UID'					=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'			=> 'Dette er den nøgle under hvilken der søges efter et givent login, f.eks. <var>uid</var>, <var>sn</var>, osv.',
	'LDAP_USER'					=> 'LDAP-bruger <var>dn</var>',
	'LDAP_USER_EXPLAIN'			=> 'Efterlades tomt for at benytte anonym tilslutning. Udfyldes feltet vil phpBB anvende det angivne Distinguished Name (DN) ved loginforsøg for at bestemme den korrekte bruger, f.eks. <samp>uid=Brugernavn,ou=MinAfdeling,o=MitFirma,c=DK</samp>. Kræves af Active Directory servere.',
	'LDAP_USER_FILTER'			=> 'LDAP-brugerfilter',
	'LDAP_USER_FILTER_EXPLAIN'	=> 'Ved at anvende yderligere filtre har du mulighed for at begrænse de objekter der søges i. For eksempel vil <samp>objectClass=posixGroup</samp> betyde at <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> anvendes.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Her kan du tilpasse server- og domæneafhængige indstillinger. Du bør sikre dig at data er akkurate, da fejl her vil resultere i emails med forkerte links. Bemærk at indtastning af domænenavn inkluderer http:// eller anden protokolangivelse. Ret kun portnummeret hvis du véd at din server bruger en anden værdi, port 80 er korrekt i de fleste tilfælde.',

	'ENABLE_GZIP'				=> 'Aktivér GZip-komprimering',
	'ENABLE_GZIP_EXPLAIN'           => 'Det genererede indhold bliver komprimeret inden afsendelse. Det kan medvirke til at mindske netværkstrafikken, og dermed også båndbreddeforbruget, til gengæld øges belastningen af både serverens og brugeres CPU.',
	'FORCE_SERVER_VARS'			=> 'Gennemtving servers URL-indstillinger',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Serverindstillingerne angivet nedenfor vil blive brugt frem for de automatisk læste værdier.',
	'ICONS_PATH'				=> 'Indlægsikon-mappens placering',
	'ICONS_PATH_EXPLAIN'		=> 'Sti under din phpBB-rodmappe, f.eks. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Stikonfigurationer',
	'RANKS_PATH'				=> 'Rangikonmappens placering',
	'RANKS_PATH_EXPLAIN'		=> 'Sti under din phpBB-rodmappe, f.eks. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Sti til script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Sti til phpBB relativt i forhold til domænenavnet, eksempelvis <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domænenavn',
	'SERVER_NAME_EXPLAIN'		=> 'Domænenavn hvorfra dette board kører (for eksempel: <samp>www.eksempel.com</samp>).',
	'SERVER_PORT'				=> 'Serverport',
	'SERVER_PORT_EXPLAIN'		=> 'Port 80 anvendes som standard af alle webservere. Indstillingen skal kun ændres i helt særlige tilfælde.',
	'SERVER_PROTOCOL'			=> 'Serverprotokol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Denne indstilling kan sættes til enten http:// eller https:// og er dermed fast defineret. Hvis feltet ikke udfyldes, fastsættes protokollen ud fra sikkerhedsindstillingerne i cookies (<samp>http://</samp> eller <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Servers URL-indstillinger',
	'SMILIES_PATH'				=> 'Smiliemappens placering',
	'SMILIES_PATH_EXPLAIN'		=> 'Sti under din phpBB-rodmappe, f.eks. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Filtypeikonmappens placering',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe, f.eks. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse sessions- og loginrelaterede indstillinger',

	'ALL'							=> 'Alle',
	'ALLOW_AUTOLOGIN'				=> 'Tillad automatisk login',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Ved første login får brugere mulighed for at vælge at blive logget automatisk ind ved fremtidige besøg på boardet.',
	'AUTOLOGIN_LENGTH'				=> 'Loginnøgle udløber efter',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Automatisk login udløber efter det angivne antal dage. Angives nul udløber nøglen ikke.',
	'BROWSER_VALID'					=> 'Validér browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Brugeres browser valideres for hver session.',
	'CHECK_DNSBL'					=> 'Kontrollér IP-adresser imod DNS blackhole liste',
	'CHECK_DNSBL_EXPLAIN'			=> 'Brugeres IP-adresse kontrolleres ved tilmelding og når der indsendes indlæg, i følgende DNSBL services: <a href="http://spamcop.net">spamcop.net</a> og <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Opslaget kan tage lidt tid, afhængig af serverkonfigurationen. Hvis kontrollen medfører for mange fejlagtige afvisninger eller nedsætter "ekspeditionstiden", anbefales det at slå kontrollen fra.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kontrollér emaildomæne',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Emaildomæne kontrolleres for en gyldig MX-record ved tilmelding og ændring i brugerprofiler.',
	'FORCE_PASS_CHANGE'				=> 'Gennemtving kodeordsændring efter',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Tilmeldte brugere bliver bedt om at skifte kodeord efter det valgte antal dage. 0 deaktiverer denne tvangsændring.',
	'FORM_TIME_MAX'					=> 'Maksimal tid til at indsende formularer',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Tidsrummet brugere har til at indsende en formular. Sæt værdien til -1 for at slå indstillingen fra. Bemærk at en formular kan blive ugyldig hvis sessionen udløber, uanset denne indstilling.',
	'FORM_SID_GUESTS'				=> 'Knyt formularer til gæstesessioner',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Formularers token udgivet til gæster baseres på enkeltsessioner. Bemærk at denne indstilling kan give problemer i forhold til nogle værter.',
	'FORWARDED_FOR_VALID'			=> 'Validér <var>X_FORWARDED_FOR</var>-hoved',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessioner vil kun blive fortsat, hvis det sendte <var>X_FORWARDED_FOR</var>-hoved svarer til dét, der blev sendt med den forrige anmodning. Udelukkelser bliver også kontrolleret imod IP-adresser i <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validering af IP-adresser',
	'IP_VALID_EXPLAIN'				=> 'Afgør hvor meget af brugeres IP-adresse, der bruges til at validere en session. <samp>Alle</samp> sammenligner hele adressen, <samp>A.B.C</samp> de første x.x.x, <samp>A.B</samp> de første x.x, <samp>Ingen</samp> slår kontrol fra. I IPv6 adresser vil <samp>A.B.C</samp> sammenligne de første 4 blokke og <samp>A.B</samp> de første 3 blokke.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maksimalt antal loginforsøg',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Efter dette antal forsøg, afkræves desuden visuel bekræftelse.',
	'NO_IP_VALIDATION'				=> 'Ingen',
	'NO_REF_VALIDATION'		=> 'Ingen',
	'PASSWORD_TYPE'					=> 'Kodeordskompleksitet',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Bestem kompleksiteten af brugeres kodeord. Dit valg i dropdownmenuen inkluderer ovenstående krav, eksklusiv "Ingen krav".',
	'PASS_TYPE_ALPHA'				=> 'Skal indeholde bogstaver og tal',
	'PASS_TYPE_ANY'					=> 'Ingen krav',
	'PASS_TYPE_CASE'				=> 'Skal indeholde store og små bogstaver',
	'PASS_TYPE_SYMBOL'				=> 'Skal indeholde symboler',
	'REF_HOST'						=> 'Validér kun vært',
	'REF_PATH'						=> 'Validér også sti',
	'REFERER_VALID'				=> 'Validér reference',
	'REFERER_VALID_EXPLAIN'	=> 'Hvis kontrollen er aktiveret, bliver referencens POST-requests kontrolleret mod hosten/indstillinger for scriptsti. Denne kontrol kan medføre problemer på boards med flere domæner og/eller eksterne logins.',
	'TPL_ALLOW_PHP'					=> 'Tillad PHP i skabeloner',
	'TPL_ALLOW_PHP_EXPLAIN'			=> '<code>PHP</code> og <code>INCLUDEPHP</code>-kodning i skabelonfilerne bliver genkendt og fortolket.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Disse indstillinger anvendes af boardet ved forsendelse af emails til tilmeldte brugere. Bemærk venligst at denne emailadresse skal være gyldig, da enhver tilbagesendt eller vildfaren email sandsynligvis vil blive returneret til denne emailaddresse. Hvis din vært ikke lader dig bruge den indbyggede (PHP-baserede) emailservice, kan du i stedet sende emails direkte igennem SMTP. Dette kræver adressen på en passende server (spørg om nødvendigt din vært). Hvis serveren kræver autentifikation (og kun hvis den gør) angives det nødvendige brugernavn, kodeord og autentifikationsmetoden.',

	'ADMIN_EMAIL'					=> 'Returadresse for emails',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Denne emailadresse bruges som returadresse for alle emails, dvs. emailadressen for teknisk kontakt. Den bruges altid som <samp>Return-Path</samp> og <samp>Sender</samp> adressen i emails.',
	'BOARD_EMAIL_FORM'				=> 'Brugere sender emails via boardet',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'I stedet for at vise brugerens emailadresse kan brugere sende emails via boardet.',
	'BOARD_HIDE_EMAILS'				=> 'Skjul emailadresser',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Denne funktion holder emailadresser fuldstændigt private.',
	'CONTACT_EMAIL'					=> 'Emailadresse for kontakt',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Denne emailadresse bruges overalt, hvor der er specifikke kontaktpunkter, f.eks. spam, fejlmeddelelser, problemer med tilmelding osv. Den vil altid blive anvendt som <samp>From</samp> og <samp>Reply-To</samp>-adresserne i emails.',
	'EMAIL_FUNCTION_NAME'			=> 'Navn på emailfunktion',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Navnet på den anvendte emailfunktion ved forsendelse af emails gennem PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Pakkestørrelse for emails',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Antallet af emails der afsendes i en pakke. Indstillingen tilføjes den interne meddelelseskø; sæt indstillingen til 0 hvis du oplever problemer med ikke afleverede adviseringsemails.',
	'EMAIL_SIG'						=> 'Signatur i emails',
	'EMAIL_SIG_EXPLAIN'				=> 'Denne tekst bruges som signatur i alle emails udsendt af boardet.',
	'ENABLE_EMAIL'					=> 'Aktivér boardets emailsystem',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Hvis slået fra vil boardet ikke sende nogen emails overhovedet.',
	'SMTP_AUTH_METHOD'				=> 'Autentifikationsmetode for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Bruges kun, hvis et brugernavn og kodeord er angivet, spørg din vært, hvis du er usikker på hvilken metode, der skal bruges.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-kodeord',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Indtast kun et kodeord, hvis din SMTP-server kræver det.',
	'SMTP_PLAIN'					=> 'Almindelig',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-før-SMTP',
	'SMTP_PORT'						=> 'SMTP-serverport',
	'SMTP_PORT_EXPLAIN'				=> 'Skift kun denne, hvis du ved, at din SMTP-server benytter en anden port.',
	'SMTP_SERVER'					=> 'Adresse på SMTP-server',
	'SMTP_SETTINGS'					=> 'SMTP-indstillinger',
	'SMTP_USERNAME'					=> 'SMTP-brugernavn',
	'SMTP_USERNAME_EXPLAIN'			=> 'Indtast kun et brugernavn, hvis din SMTP-server kræver det.',
	'USE_SMTP'						=> 'Brug SMTP-server til email',
	'USE_SMTP_EXPLAIN'				=> 'Vælg "Ja", hvis du vil eller skal bruge en navngiven server til at sende email i stedet for boardets indbyggede emailfunktion.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Herfra kan du aktivere og administrere brugen af Jabber til at fremsende adviseringer om nye private beskeder og ved opdateringer i overvågede emner og fora. Jabber er en Open Source protokol og kan derfor bruges af enhver. Nogle Jabber servere inkluderer gateways eller transporter, der tillader dig at kontakte brugere af andre netværk. Ikke alle servere tilbyder alle former for transporter, og ændringer i protokoller kan forhindre transporter i at fungere. Angiv her omhyggeligt en til formålet oprettet Jabberkonto - phpBB gør brug af disse data.',

	'JAB_ENABLE'				=> 'Aktivér Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Slår brugen af beskeder og adviseringer via Jabber til.',
	'JAB_GTALK_NOTE'	=> 'Bemærk venligst at funktionen <samp>dns_get_record</samp> ikke blev fundet, hvorfor anvendelsen af GTalk ikke fungerer. <samp>dns_get_record</samp> er ikke tilgængelig i PHP4 og ikke implementeret på Windowsplatformene. Den fungerer i øjeblikket heller ikke på BSD-baserede systemer, som også inkluderer MacOS.',
	'JAB_PACKAGE_SIZE'			=> 'Pakkestørrelse for Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Dette er antallet af beskeder sendt i en pakke. Hvis indstillet til 0 sendes meddelelsen øjeblikkeligt og sættes ikke i kø til senere afsendelse.',
	'JAB_PASSWORD'				=> 'Jabberkodeord',
	'JAB_PORT'					=> 'Jabberport',
	'JAB_PORT_EXPLAIN'			=> 'Udfyldes ikke, med mindre du véd at det ikke er port 5222.',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'Se listen over offentligt tilgængelige servere på %sjabber.org%s.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabberindstillinger korrekt opdateret.',
	'JAB_USE_SSL'				=> 'Tilslut med SSL',
	'JAB_USE_SSL_EXPLAIN'		=> 'En sikker forbindelse forsøges etableret. Den anvendte Jabberport bliver ændret til 5223, hvis port 5222 er angivet.',
	'JAB_USERNAME'				=> 'Jabberbrugernavn eller JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Angiv en tilmeldt Jabberkonto eller et gyldigt JID. Brugernavnets gyldighed kontrolleres ikke. Anfører du alene brugernavn, sættes dit JID som dette og serveren som specificeret ovenfor. Ellers angives et gyldigt JID, eksempelvis user@jabber.org.',
));

?>