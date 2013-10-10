<?php
/**
*
* ucp [Brezhoneg]
*
* @package language
* @version $Id: ucp.php 8479 2008-03-29 00:22:48Z naderman $	
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'O vont war “%1$s” (anvet “ni”, “hon”, “-omp”, h.a. amañ pelloc\'h “%1$s”, “%2$s”), e asantit kaout da zoujañ ouzh ar reolennoù a vez skrivet amañ-dindan. Ma n\'hoc\'h ket a-du da zoujañ ouzh ar reolennoù-mañ, neuze eo arabat deoc\'h mont war pe ober gant “%1$s”. Ma kemmomp ar reolennoù-mañ e klaskimp kelaouiñ ac\'hanoc\'h, met fur e c\'hell bezañ dont da adlenn ar reolennoù war ar bajenn-mañ gwech ha gwech all; ma kendalc\'hit d\'ober gant “%1$s” goude ur cheñchamant e talvez oc\'h a-du gant ar pezh a zo bet cheñchet ivez.<br />
	<br />
	Gant phpBB e vez kinniget ar foromoù-mañ (anvet “int”, “o”, “ar meziant phpBB”, “www.phpbb.com”, “strollad phpBB”, “skipailhoù phpBB”, h.a. amañ pelloc\'h). Ur meziant evit sevel foromoù eo, kinniget dindan ar meneg “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (anvet “GPL” amañ-pelloc\'h) ha gallout a ra bezañ pellgarget war <a href="http://www.phpbb.com/">www.phpbb.com</a>. Graet eo ar meziant phpBB evit aesaat ar c\'haozeadennoù war internet, ha n\'he deus ar skipailh liamm ebet gant ar pezh a vez eskemmet e-pad ar c\'haozeadennoù-se. Evit titouroù ouzhpenn diwar-benn phpBB, kit da welet <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Asantiñ a rit da chom hep embann kaozioù hudur, drouklavarus, astut, a gas da vagañ kasoni, falloberiant, reizhel, pe forzh petra a c\'hellfe mont a-enep da lezennoù ho pro, da re ar vro e-lec\'h ma vez bodet “%1$s”, pe da lezennoù etrevroadel. Ma rafec\'h kement-mañ e vefec\'h skarzhet diouzhtu ha da viken, ha gallout a rafe ho Kinniger-Doned-War-Internet bezañ kelaouet ma kav deomp e talvez ar boan. Enrollet e vez ar chomlec\'h IP evit pep kemennadenn evit sikour ma vefe doujet ouzh kement-mañ. Asantiñ a rit ma c\'hellfe “%1$s” diverkañ, kemm, dilec\'hiañ, pe prennañ forzh peseurt sujed ma kav deomp eo dav hen ober. Oc\'h emezelañ ec\'h asantit ma vefe miret titouroù diwar ho penn en un diaz-titouroù. Ne vo ket kinniget an titouroù-mañ da dud eus an diavaez hep ho asant, met n\'hall ket “%1$s” pe phpBB bezañ lakaet da gablus ma vefent diskuilhet goude bezañ bet kavet gant preizherien.
	',

	'PRIVACY_POLICY'		=> 'Amañ e vez displeget dre ar munud penaos e vez implijet titouroù diwar ho penn (anvet “ho titouroù” amañ pelloc\'h)gant “%1$s” hag an embregerezhioù stag ma vez lod (anvet “ni”, “hon”, “-omp”,h.a. amañ pelloc\'h “%1$s”, “%2$s”) ha phpBB (anvet “int”, “o”, , “ar meziant phpBB”, “www.phpbb.com”, “strollad phpBB”, “skipailhoù phpBB” amañ pelloc\'h).<br />
	<br />
	Daou zoare a zo da zezastum ho titouroù. Da gentañ, dre weladenniñ “%1$s” e vo savet toupinoù gant phpBB. Restroù testenn bihan eo ar re-se, pellgarget e vezont e-barzh teuliadoù ar restroù internet berr o vuhez. En daou re gentañ, ne gaver nemet hennad an implijer hag hennadoù an tremenoù dianv, a vez roet deoc\'h ez-emgefreek gant phpBB. Un trede hini a vo krouet ur wech m\'ho po lennet sujedoù war “%1$s”, servijout a ra da notenniñ peseurt kemennadennoù ho peus lennet, evit ma vefe aesoc\'h deoc\'h en em gavout war ar forom.<br />
	<br />
	Posupl eo ivez ma vefe savet toupinoù e diavaez “%1$s”, met kement-mañ az a re bel evit ar bajenn-mañ, a rank displegañ hepken peseurt toupinoù a vez krouet gant phpBB war “%1$s”. An eil zoare da zezastum titouroù diwar ho penn a zeu ouzh an titouroù a vez roet ganeoc\'h ho-unan. Gallout a ra bezañ, e-touez traoù all: kas kemennadennoù hep bezañ anavezet gant al lec\'hienn (anvet “kemennadennoù dianavez” amañ pelloc\'h), emezelañ da “%1$s” (anvet “ho kont” amañ pelloc\'h) hag ar c\'hemenadennoù a vez kaset ganeoc\'h pa vezit anavezet (anvet “ho kemennadennoù” amañ pelloc\'h).<br />
	<br />
	En ho kont e vo d\'an nebeutañ un anv ezel evit anavezout ac\'hanoc\'h (anvet “ho anv ezel” amañ pelloc\'h), ur ger-tremen hiniennel implijet evit kennaskañ ouzh ho kont (anvet “ho ker-tremen” amañ-pelloc\'h) hag ur postel hiniennel hag hegerzh (anvet “ho postel” amañ-pelloc\'h). Gwarezet e vez ho titouroù evit ho kont war “%1$s” gant lezennoù diwar-benn roadennoù an implijer a c\'hell bezañ lakaet e-pleustr er vro e-lec\'h ma vezomp bodet. Evit forzh peseurt titour estreget ho postel, ho anv-ezel, hag ho ker-tremen war “%1$s” eo hervezomp e vezont embannet pe ne vezont ket. En holl degouezhioù e c\'hellit dibab ar pezh a vo diskouezet hag ar pezh na vo ket. Adalek ho kont e c\'hellit dibab degemer pe chom hep degemer ar posteloù a vez savet ez-emgefreek gant phpBB.<br />
	<br />
	Rineget e vez ho ker-tremen en un doare ma c\'heller mont eus an tu kentañ d\'an eil, met ket eus an eil d\'an hini kentañ. Aliet e vezoc\'h d\'ober gant gerioù-tremen disheñvel war lec\'hiennoù disheñvel. Gant ho ker-tremen e c\'hellit bezañ anavezet gant “%1$s”, setu diwallit mat outañ. E degouezh ebet eo abeget un den eus “%1$s”, phpBB pe un den all da c\'houlenn ho ker-tremen diganeoc\'h. Ma vefe kollet ho ker-tremen ganeoc\'h e c\'hellit ober gant “Kollet em eus ma c\'her-tremen”. N\'ho po ken nemet reiñ hoc\'h anv-ezel hag o postel, hag e vo kaset ur ger-tremen nevez deoc\'h dre bostel.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Enaouet eo ho kont, trugarez da vezañ bet emezelet.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Enaouet eo bet ar c\'hont.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Adenaouet eo bet ar c\'hont.',
	'ACCOUNT_ADDED'					=> 'Trugarez evit bezañ emezelet, krouet eo bet ho kont. Bremañ e vo tu deoc\'h bezañ anavezet gant ar forom, o lakaat ho anv-ezel hag ho ker-tremen.',
	'ACCOUNT_COPPA'					=> 'Krouet eo bet ho kont, met dav eo dezhañ bezañ asantet. Lennit ho posteloù evit titouroù ouzhpenn.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Hizivaet eo bet ho kont. Pa vez cheñchet postel eo dav adenaouiñ ar c\'hont. Peadra d\'hen ober a zo bet kaset d\'ar postel nevez a zo bet roet ganeoc\'h. Sellit ouzh ho posteloù evit titouroù ouzhpenn.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Hizivaet eo bet ho kont. Pa vez cheñchet postel eo dav ma vefe asantet en-dro gant skipailh ar Merañs. Kaset ez eus bet ur postel dezhañ/dezhi, hag e voc\'h kelaouet pa vo bet adasantet ho kont.',
	'ACCOUNT_INACTIVE'				=> 'Krouet eo bet ho kont. Bremañ eo dav deoc\'h kadarnaat e grouidigezh o klikañ war ul liamm a vo kaset deoc\'h dre bostel. Gwelit ho posteloù evit titouroù ouzhpenn.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Krouet eo bet ho kont. Dav eo dezhañ bezañ asantet gant skipailh ar Merañs. Kaset ez eus bet ur postel dezho, hag e voc\'h kelaouet pa vo bet krouet ho kont.',
	'ACTIVATION_EMAIL_SENT'			=> 'Ur postel-kadarnaat a zo bet kaset d\'ar chomlec\'h bet roet ganeoc\'h.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Kaset eo bet ar postel evit ma c\'hellfe ar c\'hont bezañ enaouet da verour ar forom.',
	'ADD'							=> 'Ouzhpennañ',
	'ADD_BCC'						=> 'Ouzhpennañ [Eilskouerenn Kuzhet]',
	'ADD_FOES'						=> 'Ouzhpennañ enebourien nevez',
	'ADD_FOES_EXPLAIN'				=> 'War bep a linenn eo dav deoc\'h ouzhpennañ an anvioù-ezel nevez.',
	'ADD_FOLDER'					=> 'Ouzhpennañ un teuliad',
	'ADD_FRIENDS'					=> 'Ouzhpennañ mignoned nevez',
	'ADD_FRIENDS_EXPLAIN'			=> 'War bep a linenn eo dav deoc\'h ouzhpennañ an anvioù-ezel.',
	'ADD_NEW_RULE'					=> 'Ouzhpenañ ur sil nevez',
	'ADD_RULE'						=> 'Ouzhpennañ ur sil',
	'ADD_TO'						=> 'Ouzhpennañ [Da]',
	'ADMIN_EMAIL'					=> 'Gallout a ra ar merourien kas titouroù din dre bostel',
	'AGREE'							=> 'Asantiñ a ran d\'ober gant ar reolennoù-mañ',
	'ALLOW_PM'						=> 'Aotreañ izili all da gas Gerigoù Prevez deoc\'h',
	'ALLOW_PM_EXPLAIN'				=> 'Atav e vo aotreet ar merourien hag ar gasourien da gas Gerigoù Prevez deoc\'h.',
	'ALREADY_ACTIVATED'				=> 'Enaouet eo bet ho kont c\'hoazh.',
	'ATTACHMENTS_EXPLAIN'			=> 'Setu listenn ar restroù a zo bet staget ganeoc\'h ouzh kemennadennoù war ar forom-mañ.',
	'ATTACHMENTS_DELETED'			=> 'Diverket eo bet ar stagadennoù.',
	'ATTACHMENT_DELETED'			=> 'Diverket eo bet ar stagadenn.',
	'AVATAR_CATEGORY'				=> 'Rann',
	'AVATAR_EXPLAIN'				=> ' %1$d piksel ledander ha %2$d piksel uhelder d\'ar muiañ, %3$.2f KiB  d\'ar muiañ.',
	'AVATAR_FEATURES_DISABLED'		=> 'Ne vez ket graet gant ar skeudennigoù amañ.',
	'AVATAR_GALLERY'				=> 'Garidenn al lec\'hienn',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'N\'eus ket bet tu da bellgas skeudennigoù betek %s.',
	'AVATAR_PAGE'					=> 'Pajenn',

	'BACK_TO_DRAFTS'			=> 'Distreiñ d\'ar vrouilhoñsoù bet saveteet',
	'BACK_TO_LOGIN'				=> 'Distreiñ d\'ar bajenn anavezout',
	'BIRTHDAY'					=> 'Deiz-ha-bloaz',
	'BIRTHDAY_EXPLAIN'			=> 'Ma roit ur vloaz e vo diskouezet ho oad pa vo ho teiz-ha-bloaz.',
	'BOARD_DATE_FORMAT'			=> 'Stumm an deiziad',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Heñvel eo an ereiñ ouzh hini ar fonksion PHP <a href="http://www.php.net/date">date()</a>.',
	'BOARD_DST'					=> 'Eurioù an hañv/<abbr title="Eur ma Sav an Heol">DST</abbr> a vez graet ganti',
	'BOARD_LANGUAGE'			=> 'Ma yezh',
	'BOARD_STYLE'				=> 'Ma wiskadur evit ar forom',
	'BOARD_TIMEZONE'			=> 'Ma werzhid-eur',
	'BOOKMARKS'					=> 'Sinedoù',
	'BOOKMARKS_EXPLAIN'			=> 'Gallout a rit lakaat sujedoù da sinedoù, a-benn gallout heuliañ anezho aezet da c\'houde. diuzit ar c\'hombodig evit pep sined ho peus c\'hoant da ziverkañ, ha klikit war an nozelenn <em>Tennañ ar sinedoù diuzet</em>.',
	'BOOKMARKS_DISABLED'		=> 'Ne vez ket graet gant ar sinedoù war ar forom-mañ.',
	'BOOKMARKS_REMOVED'			=> 'Tennet eo bet ar sinedoù.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'N\'hallit ket kemm pe dilemel ar gemennadenn-mañ ken.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'N\'hall ket ar c\'hemennadennoù bezañ dilec\'hiet davet an teuliad a vo diverket ganeoc\'h.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'N\'hall ket ar gerigoù bezañ dilec\'hiet kuit diouzh ar voest-kas.',
	'CANNOT_RENAME_FOLDER'		=> 'N\'hall ket an teuliad-mañ bezañ adanvet.',
	'CANNOT_REMOVE_FOLDER'		=> 'N\'hall ket an teuliad-mañ bezañ dilamet.',
	'CHANGE_DEFAULT_GROUP'		=> 'cheñch ar strollad dre-ziouer',
	'CHANGE_PASSWORD'			=> 'Cheñch ar ger-tremen',
	'CLICK_RETURN_FOLDER'		=> '%1$sDistreiñ d\'an teuliad “%3$s” %2$s',
	'CONFIRMATION'				=> 'Gwiriañ an emezelañ',
	'CONFIRM_CHANGES'			=> 'Gwiriañ ar c\'hemmoù',	
	'CONFIRM_EMAIL'				=> 'Gwiriañ ar postel',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'N\'ho peus ezhomm da resisaat an dra-mañ nemet m\'emaoc\'h o cheñch postel.',
	'CONFIRM_EXPLAIN'			=> 'Evit talañ ouzh an emezelañ gant poelladoù e vez goulennet ganeoc\'h adskrivañ ar c\'hod a welit amañ-dindan. Kavet e vo hennezh er skeudennig amañ-dindan. M\'ho peus kudennoù da welet, pe ma n\'hallit ket lenn ar c\'hod, kit e-darempred gant %sar Merour%s.',
	'CONFIRM_PASSWORD'			=> 'Gwiriañ ar ger-tremen',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'N\'ho peus ezhomm da wiriañ ho ker-tremen nemet m\'emaoc\'h o paouez cheñch anezhañ.',
	'COPPA_BIRTHDAY'			=> 'Evit kenderc\'hel gant an emezelañ, lavarit deomp pegoulz oc\'h ganet.',
	'COPPA_COMPLIANCE'			=> 'Doujañ ouzh COPPA',
	'COPPA_EXPLAIN'				=> 'O klikañ amañ-dindan e vo krouet ho kont. Met n\'hallo ket bezañ enaouet a-raok ma vefe roet e asant gant ur c\'har deoc\'h pe unan e-karg ouzhoc\'h. Ur postel a vo kaset deoc\'h, ennañ ar pezh a zo da gas ha titouroù war an doare da gas kement-mañ.',
	'CREATE_FOLDER'				=> 'Ouzhpennañ un teuliad…',
	'CURRENT_IMAGE'				=> 'Skeudenn a zo bremañ',
	'CURRENT_PASSWORD'			=> 'Ger-tremen a zo bremañ',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Evit gallout kemm ho ker-tremen, ho postel, pe ho anv-ezel eo dav deoc\'h reiñ en-dro ar ger-tremen ho peus bremañ.',
	'CUR_PASSWORD_ERROR'		=> 'Direizh eo ar ger-tremen bet roet ganeoc\'h.',
	'CUSTOM_DATEFORMAT'			=> 'Boaz…',

	'DEFAULT_ACTION'			=> 'Oberenn dre-ziouer',
	'DEFAULT_ACTION_EXPLAIN'	=> 'An oberenn-mañ a vo lakaet e-pleustr ma n\'eo ket posupl ober kement-all gant ar re a vez listennet amañ-dindan.',
	'DEFAULT_ADD_SIG'			=> 'Stagañ dre-ziouer ma sinadur',
	'DEFAULT_BBCODE'			=> 'Ober dre-ziouer gant ar BBCode',
	'DEFAULT_NOTIFY'			=> 'Kelaouiñ dre-ziouer ac\'hanon eus ar respotoù',
	'DEFAULT_SMILIES'			=> 'Ober dre-ziouer gant ar <i>smilies</i>',
	'DEFINED_RULES'				=> 'Siloù bet termenet',
	'DELETED_TOPIC'				=> 'Dilamet eo bet ar sujed.',
	'DELETE_ATTACHMENT'			=> 'Dilemel ar stagadenn',
	'DELETE_ATTACHMENTS'		=> 'Dilemel ar stagadennoù',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar stagadenn-mañ ?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar stagadennoù-mañ ?',
	'DELETE_AVATAR'				=> 'Dilemel ar skeudenn',
	'DELETE_COOKIES_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da ziverkañ an holl doupinoù bet krouert gant ar forom-mañ?',
	'DELETE_MARKED_PM'			=> 'Dilemel ar gerigoù bet diuzet',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da zilemel an holl gerigoù bet diuzet ganeoc\'h?',
	'DELETE_OLDEST_MESSAGES'	=> 'Dilemel ar c\'hemennadennoù koshañ',
	'DELETE_MESSAGE'			=> 'Dilemel ar gerig',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar Gerig Prevez-mañ ?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Dilemel an holl gerigoù a zo en teuliad a denner',
	'DELETE_RULE'				=> 'Dilemel ar sil',
	'DELETE_RULE_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar sli ?',
	'DEMOTE_SELECTED'			=> 'Diskar ar re ziuzet',
	'DISABLE_CENSORS'			=> 'Erlec\'hiañ ar gerioù diaotre',
	'DISPLAY_GALLERY'			=> 'Diskouez ar garidenn',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'N\'eus ket a zone MX reizh gant domani ar postel bet roet.',
	'DOWNLOADS'					=> 'Pellgargadennoù',
	'DRAFTS_DELETED'			=> 'Dilamet eo bet ar vrouilhoñsoù bet diuzet.',
	'DRAFTS_EXPLAIN'			=> 'Amañ e c\'hellit gwelet, kemm, ha diverkañ ho prouilhoñsoù.',
	'DRAFT_UPDATED'				=> 'Hizivaet eo bet ar vrouilhoñs.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Amañ e c\'hellit kemm ho prouilhoñs. Ne vez kavet nag ar stagadennoù na dilennoù ur vouezhiadeg en ur vrouilhoñs.',
	'EMAIL_BANNED_EMAIL'		=> 'Difennet eo bet ar postel a zo bet roet ganeoc\'h.',
	'EMAIL_INVALID_EMAIL'		=> 'Direizh eo ar postel a zo bet roet ganeoc\'h.',
	'EMAIL_REMIND'				=> 'Rankout a ra bezañ ar postel a glot gant ho kont. Ma n\'ho peus ket kemmet an dra-mañ e-barzh Pajenn an Ezel eo ar postel a zo bet roet ganeoc\'h pa\'z oc\'h emezelet.',
	'EMAIL_TAKEN_EMAIL'			=> 'Unan bennak a ra dija gant ar postel a zo bet roet ganeoc\'h.',
	'EMPTY_DRAFT'				=> 'Dav eo deoc\'h lakaat un dra bennak a-bnn gallout lakaat ho kemmoù e-pleustr.',
	'EMPTY_DRAFT_TITLE'			=> 'Dav eo deoc\'h reiñ un titl d\'ar vrouilhoñs.',
	'EXPORT_AS_XML'				=> 'Ezporzhañ evel XML',
	'EXPORT_AS_CSV'				=> 'Ezporzhañ evel CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Ezporzhañ evel CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Ezporzhañ evel TXT',
	'EXPORT_AS_MSG'				=> 'Ezporzhañ evel MSG',
	'EXPORT_FOLDER'				=> 'Ezporzhañ ar gwel-mañ',

	'FIELD_REQUIRED'					=> 'Dav eo deoc\'h leuniañ an dakad “%s”.',
	'FIELD_TOO_SHORT'					=> 'Re verr eo ar pezh a zo e-barzh “%1$s”, %2$d arouez e rank bezañ d\'an nebeutañ.',
	'FIELD_TOO_LONG'					=> 'Re hir eo ar pezh a zo e-barzh “%1$s”, %2$d e rank bezañ d\'ar muiañ.',
	'FIELD_TOO_SMALL'					=> 're vihan eo talvoud “%1$s”, %2$d e rank bezañ d\'an nebeutañ.',
	'FIELD_TOO_LARGE'					=> 'Re vras eo talvoud “%1$s”, %2$d e rank bezañ d\'ar muiañ.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Arouezioù direizh a zo e-barzh “%s”, ne vez aotreet nemet sifroù.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Arouezioù direizh a zo e-barzh “%s”, ne vez aotreet nemet lizherennoù ha sifroù.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Arouezioù direizh a zo e-barzh “%s”, ne vez aotreet nemet ar sifroù, al lizherennoù, ar spas, pe -+_[].',
	'FIELD_INVALID_DATE'				=> 'Un deiziad direizh a zo e-barzh “%s”.',

	'FOE_MESSAGE'				=> 'Gerig o tont eus un enebour',
	'FOES_EXPLAIN'				=> 'Tud ho peus dibabet chom hep lenn ar pezh a gasont war ar foromoù eo hoc\'h enebourien. Pa gasont ur gemennadenn, ne vo ket gwelet penn-da-benn ganeoc\'h. Aotreet e vez memes tra ar gerigoù prevez. N\'hallit ket lakaat ur c\'hasour pe ur merour da enebour.',
	'FOES_UPDATED'				=> 'Hzivaet eo bet listenn ho enebourien.',
	'FOLDER_ADDED'				=> 'Ouzhpennet eo bet an teuliad.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d gerig miret war %2$d',
	'FOLDER_NAME_EXIST'			=> 'C\'hoazh ez eus ouzh an teuliad <strong>%s</strong>.',
	'FOLDER_OPTIONS'			=> 'Dilennoù an teuliad',
	'FOLDER_RENAMED'			=> 'Adanvet eo bet an teuliad.',
	'FOLDER_REMOVED'			=> 'Dilamet eo bet an teuliad.',
	'FOLDER_STATUS_MSG'			=> '%1$d%% leun eo an teuliad (%2$d gerig miret war %3$d)',
	'FORWARD_PM'				=> 'Treuzkas ar GP',
	'FORCE_PASSWORD_EXPLAIN'	=> 'A-raok kenderc\'hel da weladenniñ ar forom e vo goulennet diganeoc\'h cheñch ho ker-tremen.',
	'FRIEND_MESSAGE'			=> 'Gerig o tont ouzh ur mignon',
	'FRIENDS'					=> 'Mignoned',
	'FRIENDS_EXPLAIN'			=> 'Lakaat unan bennak da vignon a ro tro deoc\'h da eskemm buanoc\'h gant an den-mañ. Diouzh ar gwiskadur e c\'hell bezañ diskouezet gwelloc\'h kemennadenn ur mignon war ar forom.',
	'FRIENDS_OFFLINE'			=> 'Ket amañ',
	'FRIENDS_ONLINE'			=> 'Amañ',
	'FRIENDS_UPDATED'			=> 'Hizivaet eo bet listenn ho mignoned.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Kemmet eo bet ar pezh a zo d\'ober pa vez leun un teuliad.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Kemennadenn orin --------',
	'FWD_SUBJECT'				=> 'Sujed: %s',
	'FWD_DATE'					=> 'Deiziad: %s',
	'FWD_FROM'					=> 'Eus: %s',
	'FWD_TO'					=> 'Da: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Kemenn hollek',

	'HIDE_ONLINE'				=> 'Kuzhat ma vezañs war ar forom',
	'HIDE_ONLINE_EXPLAIN'      => 'Ma cheñchit an dilenn-mañ, ne vo ket graet ar c\'hemm a-raok ho kweladenn a zeu war ar forom.',
	'HOLD_NEW_MESSAGES'			=> 'Chom hep degemer gerigoù nevez (Harzet e vo ar gerigoù nevez keit ha ma ne vo ket bet graet plas e-barzh an teuliad)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Harzet e vo ar gerigoù nevez',

	'IF_FOLDER_FULL'			=> 'Ma vez leun an teuliad',
	'IMPORTANT_NEWS'			=> 'Kemennoù a-bouez',
	'INVALID_USER_BIRTHDAY'			=> 'N\'eo ket un deiziad reizh a zo bet roet evit an deiz-ha-bloaz.',
	'INVALID_CHARS_USERNAME'	=> 'Arouezioù diaotre a zo en anv-ezel.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'N\'eus ket an arouezioù ret er ger-tremen.',
	'ITEMS_REQUIRED'			=> 'Pa vez ur * eo dav deoc\'h leuniañ an titouroù.',

	'JOIN_SELECTED'				=> 'Stagañ an diuzad',

	'LANGUAGE'					=> 'Yezh',
	'LINK_REMOTE_AVATAR'		=> 'Liamm e-diavaez al lec\'hienn',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Lakait URL ar skeudenn ho peus c\'hoant da liammañ daveti.',
	'LINK_REMOTE_SIZE'			=> 'Mentoù ar skeudennig',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Resisait uhelder ha ledander ar skeudennig, na lakait netra evit ma vefe dibabet ez-emgefreek.',
	'LOGIN_EXPLAIN_UCP'			=> 'Dav eo deoc\'h bezañ anavezet gant ar forom a-benn gallout tizhout Panell-Merañ an Ezel.',
	'LOGIN_REDIRECT'			=> 'Anavezet oc\'h gant ar forom.',
	'LOGOUT_FAILED'				=> 'N\'oc\'h ket bet disgennasket, peogwir n\'eo ket deuet ar goulenn a-benn da dizhout ho tone. Kit e-darempred gant ar merour ma kendalc\'hit da gaout kudennoù evel-mañ.',
	'LOGOUT_REDIRECT'			=> 'Digennasket oc\'h bet.',

	'MARK_IMPORTANT'				=> 'Lakaat da / Paouez da lakaat da bouezus',
	'MARKED_MESSAGE'				=> 'Gerig bet lakaet da bouezus',
	'MAX_FOLDER_REACHED'			=> 'Tizhet eo bet an niver vrasañ posupl a zeuliadoù a c\'hell bezañ savet gant un implijer.',
	'MESSAGE_BY_AUTHOR'				=> 'gant',
	'MESSAGE_COLOURS'				=> 'Livioù ar gerig',
	'MESSAGE_DELETED'				=> 'Dilamet eo bet ar gerig.',
	'MESSAGE_HISTORY'				=> 'Istor ar gerig',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Tennet eo bet ar gerig-mañ gant e aozer a-raok bezañ bet lennet gant ar resever.',
	'MESSAGE_SENT_ON'				=> 'd\'an',
	'MESSAGE_STORED'				=> 'Kaset eo bet ar gerig.',
	'MESSAGE_TO'					=> 'Da',
	'MESSAGES_DELETED'				=> 'Dilamet eo bet ar gerigoù',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Dilec\'hiañ ar gerigoù eus an teuliad dilamet betek',
	'MOVE_DOWN'						=> 'Diskenn',
	'MOVE_MARKED_TO_FOLDER'			=> 'Dilec\'hiañ an diuzad betek %s',
	'MOVE_PM_ERROR'					=> 'Ur fazi a zo bet e-pad an dilec\'hiañ, n\'eus bet dilec\'hiet nemet %1d gerig war %2d.',
	'MOVE_TO_FOLDER'				=> 'Dilec\'hiañ betek an teuliad',
	'MOVE_UP'						=> 'Pignat',

	'NEW_EMAIL_ERROR'				=> 'Ur gudenn a zo gant ar postel bet roet ganeoc\'h.',
	'NEW_FOLDER_NAME'				=> 'anv an teuliad nevez',
	'NEW_PASSWORD'					=> 'Ger-tremen nevez',
	'NEW_PASSWORD_ERROR'			=> 'Ur gudenn a zo gant ar ger-tremen bet roet ganeoc\'h.',
	'NOTIFY_METHOD'					=> 'Doare da gelaouiñ',
	'NOTIFY_METHOD_BOTH'			=> 'An daou',
	'NOTIFY_METHOD_EMAIL'			=> 'Postel hepken',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Hentenn evit kas ar gerigoù a vez kaset dre ar forom-mañ.',
	'NOTIFY_METHOD_IM'				=> 'Jabber hepken',
	'NOTIFY_ON_PM'					=> 'Kelaouit ac\'hanon pa vez kaset ur Gerig nevez din',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'N\'hallit ket lakaat unan ha n\'eo ket ezel ouzh listenn ho mignoned.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'N\'hallit ket lakaat un ezel e-barzh listenn ho mignoned m\'emañ dija e-barzh hini ho enebourien.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'N\'hallit ket en em lakaat e-barzh listenn ho mignoned .',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'N\'hallit ket lakaat merourien pe kasourien e-barzh listenn ho enebourien.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'N\'hallit ket lakaat unan ha n\'eo ket ezel e-barzh listenn ho enebourien.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'N\'hallit ket lakaat un ezel e-barzh listenn ho enebourien m\'emañ dija e-barzh hini ho mignoned.',
	'NOT_ADDED_FOES_SELF'			=> 'N\'hallit ket en em lakaat e-barzh listenn ho enebourien.',
	'NOT_AGREE'						=> 'Ne asantan ket ar reolennoù-mañ',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Leun e seblant “%s” bezañ. N\'eus ket bet graet ar pezh a oa goulennet.',
	'NOT_MOVED_MESSAGE'				=> '1 eus ho Kerigoù Prevez a vez harzet evit ar mare, peogwir eo leun ho teuliad.',
	'NOT_MOVED_MESSAGES'			=> '%d eus ho Kerigoù Prevez a vez harzet evit ar mare, peogwir eo leun ho teuliad.',
	'NO_ACTION_MODE'				=> 'N\'eo ket bet resisaet oberenn ar Gerig.',
	'NO_AUTHOR'						=> 'N\'eo ket bet termenet aozer ar gerig',
	'NO_AVATAR_CATEGORY'			=> 'Hini ebet',

	'NO_AUTH_DELETE_MESSAGE'		=> 'N\'oc\'h ket aotreet da zilemel Gerigoù Prevez.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'N\'oc\'h ket aotreet da gemm Gerigoù Prevez.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'N\'oc\'h ket aotreet da dreuzkas Gerigoù Prevez.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'N\'oc\'h ket aotreet da gas Gerifoù Prevez da strolladoù.',
	'NO_AUTH_READ_MESSAGE'			=> 'N\'oc\'h ket aotreet da lenn Gerigoù Prevez.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'N\'hallit ket lenn ar Gerig Prevez-mañ peogwir eo bet tennet gant e aozer.',
	'NO_AUTH_SEND_MESSAGE'			=> 'N\'oc\'h ket aotreet da gas Gerigoù Prevez.',
	'NO_AUTH_SIGNATURE'				=> 'N\'oc\'h ket aotreet da dermeniñ ur sinadur.',

	'NO_BCC_RECIPIENT'			=> 'Den ebet',
	'NO_BOOKMARKS'				=> 'N\'ho peus sined ebet.',
	'NO_BOOKMARKS_SELECTED'		=> 'N\'ho peus diuzet sined ebet.',
	'NO_EDIT_READ_MESSAGE'		=> 'N\'hall ket ar Gerig Prevez bezañ kemmet ken peogwir eo bet lennet c\'hoazh.',
	'NO_EMAIL_USER'				=> 'N\'eo ket bet kavet ar postel pe an implijer.',
	'NO_FOES'					=> 'N\'ho peus lakaet den da enebour',
	'NO_FRIENDS'				=> 'N\'ho peus lakaet den da vignon',
	'NO_FRIENDS_OFFLINE'		=> 'N\'eus mignon ebet na vefe ket kennasket',
	'NO_FRIENDS_ONLINE'			=> 'N\'eus mignon kennasket ebet',
	'NO_GROUP_SELECTED'			=> 'N\'eus bet resisaet strollad ebet.',
	'NO_IMPORTANT_NEWS'			=> 'N\'eo kemenn a-bouez ebet.',
	'NO_MESSAGE'				=> 'N\'eo ket bet kavet ar Gerig Prevez.',
	'NO_NEW_FOLDER_NAME'		=> 'Dav eo deoc\'h resisaat anv un teuliad nevez.',
	'NO_NEWER_PM'				=> 'Gerig nevesoc\'h ebet.',
	'NO_OLDER_PM'				=> 'Gerig kozhoc\'h ebet.',
	'NO_PASSWORD_SUPPLIED'		=> 'Ur ger-tremen eo dav deoc\'h lakaat evit bezañ anavezet.',
	'NO_RECIPIENT'				=> 'N\'eus bet resisaet resever ebet.',
	'NO_RULES_DEFINED'			=> 'N\'eus bet termenet sil ebet.',
	'NO_SAVED_DRAFTS'			=> 'N\'eus bet miret brouilhoñs ebet.',
	'NO_TO_RECIPIENT'			=> 'Den ebet',
	'NO_WATCHED_FORUMS'			=> 'Na evezhiit forom ebet.',
	'NO_WATCHED_TOPICS'			=> 'Na evezhiit sujed ebet.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Etre %1$d hag %2$d arouez e rank ar ger-tremen bezañ, dav eo dezhañ bezañ graet ouzh ur meskaj a lizherennoù munut, pennlizherennoù, ha sifroù.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Etre %1$d hag %2$d arouez e rank ar ger-tremen bezañ.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Etre %1$d hag %2$d arouez e rank ar ger-tremen bezañ, dav eo dezhañ bezañ graet ouzh ur meskaj a lizherennoù munut hag a benlizherennoù.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Etre %1$d hag %2$d arouez e rank ar gre-tremen bezañ, dav eo dezhañ bezañ graet ouzh ur meskaj a lizherennoù munut, pennlizherennoù, sifroù, hag arouezioù all.',
	'PASSWORD'					=> 'Ger-tremen',
	'PASSWORD_ACTIVATED'		=> 'Enrollet eo bet ho ker-tremen nevez.',
	'PASSWORD_UPDATED'			=> 'Kaset eo bet ho ker-tremen d\'ar postel a oa bet roet ganeoc\'h.',
	'PERMISSIONS_RESTORED'		=> 'Adlakaet eo bet an aotreoù evel ma oant en orin.',
	'PERMISSIONS_TRANSFERRED'	=> 'Treuzkaset ez eus bet deoc\'h aotreoù <strong>%s</strong>, bremañ e c\'hellit gweladenniñ ar forom gant ar memes aotreoù hag an den-mañ.<br />An aotreoù-merañs n\'int ket bet treuzkaset deoc\'h. Forzh pegoulz e c\'hellit distreiñ d\'ho aotreoù orin.',
	'PM_DISABLED'				=> 'Ne vez ket graet gant an eskemm Gerigoù Prevez war ar forom-mañ.',
	'PM_FROM'					=> 'Eus',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Kaset eo bet ar gerig-mañ gant un ezel a zo dizemezelet abaoe.',
	'PM_ICON'					=> 'skeudennig GP',
	'PM_INBOX'					=> 'Boest-degemer',
	'PM_NO_USERS'				=> 'N\'ez eus ket ouzh an izili ho peus goulennet ouzhpennañ.',
	'PM_OUTBOX'					=> 'Boest-kas',
	'PM_SENTBOX'				=> 'Gerigoù bet kaset',
	'PM_SUBJECT'				=> 'Sujed ar Gerig',
	'PM_TO'						=> 'Kas da',
	'PM_USERS_REMOVED_NO_PM'	=> 'Izili \'zo n\'int ket bet ouzhpennet peogwir o deus dibabet chom hep degemer gerigoù prevez.',
	'POPUP_ON_PM'				=> 'Prenestr o tiflugellañ pa vez erru ur Gerig Prevez nevez',
	'POST_EDIT_PM'				=> 'Kemm ar gerig',
	'POST_FORWARD_PM'			=> 'Treuzkas ar gerig',
	'POST_NEW_PM'				=> 'Skrivañ ur gerig',
	'POST_PM_LOCKED'			=> 'Prennet eo ar c\'has gerigoù prevez',
	'POST_PM_POST'				=> 'Menegiñ ur gemennadenn',
	'POST_QUOTE_PM'				=> 'Menegiñ ur gerig prevez',
	'POST_REPLY_PM'				=> 'Respont d\'ur gerig prevez',
	'PRINT_PM'					=> 'Moullañ ar gwel',
	'PREFERENCES_UPDATED'		=> 'Hizivaet eo bet ho tibaboù.',
	'PROFILE_INFO_NOTICE'		=> 'Gant izili all e c\'hello an titouroù-mañ bezañ gwelet. Diwallit neuze ouzh an titouroù hiniennel a lakait amañ. Pa vez ur * eo dav lakaat un dra bennak.',
	'PROFILE_UPDATED'			=> 'Hizivaet eo bet ho pajenn-emginnig.',

	'RECIPIENT'							=> 'Resever',
	'RECIPIENTS'						=> 'Reseverien',
	'REGISTRATION'						=> 'Emezelañ',
	'RELEASE_MESSAGES'					=> '%sDieubiñ an holl gerigoù war-c\'hortoz%s… adurzhiet e vint e-barzh an teuliad a zere ma vez plas a-walc\'h.',
	'REMOVE_ADDRESS'					=> 'Tennañ ar chomlec\'h',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Tennañ ar sinedoù diuzet',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da dennañ an holl sujedoù diuzet ?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Tennañ ar sujedoù diuzet',
	'REMOVE_FOLDER'						=> 'Tennañ an teuliad',
	'REMOVE_FOLDER_CONFIRM'				=> 'Ha sur oc\'h ho peus c\'hoant da dennañ an teuliad-mañ ?',
	'RENAME'							=> 'Adenvel',
	'RENAME_FOLDER'						=> 'Adenvel an teuliad',
	'REPLIED_MESSAGE'					=> 'Respontet d\'ar gerig',
	'RESIGN_SELECTED'					=> 'Dilezel an diuzad',
	'RETURN_FOLDER'						=> '%1$sDistreiñ d\'an teuliad kent%2$s',
	'RETURN_UCP'						=> '%sDistreiñ da Banell-Merañ an Ezel%s',
	'RULE_ADDED'						=> 'Ouzhpennet eo bet ar sil.',
	'RULE_ALREADY_DEFINED'				=> 'Termenet e oa bet ar sil-mañ en a-raok.',
	'RULE_DELETED'						=> 'Tennet eo bet ar sil.',
	'RULE_NOT_DEFINED'					=> 'N\'eo ket resisaet mat ar sil.',
	'RULE_REMOVED_MESSAGE'				=> 'Tennet ez eus bet ur Gerig Prevez gant ar sil Gerigoù Prevez.',
	'RULE_REMOVED_MESSAGES'				=> '%d Gerig Prevez a zo bet tennet gant ar sil Gerigoù Prevez.',

	'SAME_PASSWORD_ERROR'		=> 'Ar ger-tremen ho peus roet a zo ar memes hini hag an hini a oa a-raok.',
	'SEARCH_YOUR_POSTS'			=> 'Diskouez ho kemennadennoù',
	'SEND_PASSWORD'				=> 'Kas ger-tremen',
	'SENT_AT'					=> 'Kaset da',
	'SHOW_EMAIL'				=> 'Gallout a ra an izili kas ur postel din',
	'SIGNATURE_EXPLAIN'			=> 'Un destennig eo, a c\'hell bezañ staget e dibenn ho kemennadennoù. N\'hall ket bezañ ouzhpenn %d arouez.',
	'SIGNATURE_PREVIEW'			=> 'Evel-mañ e vo gwelet ho sinadur er gemennadenn',
	'SIGNATURE_TOO_LONG'		=> 'Re hir eo ho sinadur.',
	'SORT'						=> 'Urzhiañ',
	'SORT_COMMENT'				=> 'Evezhiadennoù diwar-benn ar restr',
	'SORT_DOWNLOADS'			=> 'Pellgargadennoù',
	'SORT_EXTENSION'			=> 'Astenn',
	'SORT_FILENAME'				=> 'Anv ar restr',
	'SORT_POST_TIME'			=> 'Mare ar c\'hasadenn',
	'SORT_SIZE'					=> 'Ment ar restr',

	'TIMEZONE'					=> 'Gwerzhid-eur',
	'TO'						=> 'Da',
	'TOO_MANY_RECIPIENTS'		=> 'Re a reseverien.',
	'TOO_MANY_REGISTERS'		=> 'Re a wechoù ho peus klasket emezelañ evit an taol-mañ. Klaskit en-dro ur wech all.',

	'UCP'						=> 'Panell-Merañ an Ezel',
	'UCP_ACTIVATE'				=> 'Enaouiñ ar c\'hont',
	'UCP_ADMIN_ACTIVATE'		=> 'Ho postel a vo ret deoc\'h reiñ a-raok ma vefe enaouet ho kont. Kinniget e vo e grouidigezh d\'ar Merour, ha ma vez asantet e vo kaset ur postel deoc\'h.',
	'UCP_AIM'					=> 'Flaperez prim AOL',
	'UCP_ATTACHMENTS'			=> 'Stagadennoù',
	'UCP_COPPA_BEFORE'			=> 'A-raok %s',
	'UCP_COPPA_ON_AFTER'		=> 'Da pe goude %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Ho postel a vo ret deoc\'h reiñ a-raok ma vefe enaouet ho kont. Ur postel a vo kaset deoc\'h, ennañ ul liamm evit enaouiñ ho kont.',
	'UCP_ICQ'					=> 'Niverenn ICQ',
	'UCP_JABBER'				=> 'Chomlec\'h Jabber',

	'UCP_MAIN'					=> 'Rakwelet',
	'UCP_MAIN_ATTACHMENTS'		=> 'Merañ ar stagadennoù',
	'UCP_MAIN_BOOKMARKS'		=> 'Merañ ar sinedoù',
	'UCP_MAIN_DRAFTS'			=> 'Merañ ar vrouilhoñsoù',
	'UCP_MAIN_FRONT'			=> 'Pajenn pennañ',
	'UCP_MAIN_SUBSCRIBED'		=> 'Merañ an emezeladurioù',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'N\'ho peus staget restr ebet.',

	'UCP_PREFS'					=> 'Dibaboù ar forom',
	'UCP_PREFS_PERSONAL'		=> 'Kemm an dilennoù hollek',
	'UCP_PREFS_POST'			=> 'Kemm dibaboù dre-ziouer ar c\'has',
	'UCP_PREFS_VIEW'			=> 'Kemm dibaboù an diskwel',
	
	'UCP_PM'					=> 'Gerigoù Prevez',
	'UCP_PM_COMPOSE'			=> 'Skrivañ ur Gerig',
	'UCP_PM_DRAFTS'				=> 'Merañ brouilhoñsoù ar Gerigoù Prevez',
	'UCP_PM_OPTIONS'			=> 'Siloù, teuliadoù, ha dibaboù',
	'UCP_PM_POPUP'				=> 'Gerigoù prevez',
	'UCP_PM_POPUP_TITLE'		=> 'Diflugell ar gerigoù prevez',
	'UCP_PM_UNREAD'				=> 'Gerigoù n\'int ket bet lennet',
	'UCP_PM_VIEW'				=> 'Gwelet ar gerigoù',

	'UCP_PROFILE'				=> 'Pajenn-emginnig',
	'UCP_PROFILE_AVATAR'		=> 'Kemm ar skeudennig',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Kemm ar bajenn-emginnig',
	'UCP_PROFILE_REG_DETAILS'	=> 'Kemm dilennoù ar c\'hont',
	'UCP_PROFILE_SIGNATURE'		=> 'Kemm ar sinadur',

	'UCP_USERGROUPS'			=> 'Strolladoù-implijerien',
	'UCP_USERGROUPS_MEMBER'		=> 'Kemm ar c\'hemer-perzh ar strolladoù',
	'UCP_USERGROUPS_MANAGE'		=> 'Merañ ar strolladoù',

	'UCP_REGISTER_DISABLE'			=> 'N\'eo ket posupl krouiñ ur c\'hont nevez.',
	'UCP_REMIND'					=> 'Kas ar ger-tremen',
	'UCP_RESEND'					=> 'Kas ur postel-kadarnaat',
	'UCP_WELCOME'					=> 'Degemer mat war Pannell-Merañ an Ezel. Adalek amañ e c\'hellit merañ ha gwelet ho pajenn-emginnig, ho tibaboù, hag ar foromoù oc\'h dedennet ganto. Gallout a rit ivez kas gerigoù da dud all (ma vez aotreet). Bezit sur ho peus lennet an holl gemennoù a-raok kenderc\'hel.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Mignoned hag Enebourien',
	'UCP_ZEBRA_FOES'				=> 'Merañ an enebourien',
	'UCP_ZEBRA_FRIENDS'				=> 'Merañ ar vignoned',
	'UNKNOWN_FOLDER'				=> 'Teuliad dianav',
	'UNWATCH_MARKED'				=> 'Paouez da evezhiañ an diuzad',
	'UPLOAD_AVATAR_FILE'			=> 'Pellgas adal hoc\'h urzhiataerez',
	'UPLOAD_AVATAR_URL'				=> 'Pellgas adal un URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Roit URL ar skeudenn hag e vo graet un eilskouerenn outi war al lec\'hienn.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Etre %1$d ha %2$d arouez e rank bezañ an anv-ezel, ha ne rank bezañ nemet lizherennoù pe sifroù ennañ.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Etre %1$d ha %2$d arouez e rank bezañ an anv-ezel, ha ne rank bezañ nemet lizherennoù, sifroù, ur spas, pe -+_[] ennañ.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Etre %1$d ha %2$d arouez e rank bezañ an anv-ezel, ha ne rank bezañ nemet arouezioù ASCII ennañ, da lâret eo arouez divoutin ebet.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Etre %1$d ha %2$d arouez e rank bezañ an anv-ezel, ha ne rank bezañ nemet lizherennoù pe sifroù ennañ.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Etre %1$d ha %2$d arouez e rank bezañ an anv-ezel, ha ne rank bezañ nemet lizherennoù, sifroù, ur spas, pe -+_[] ennañ.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Etre%1$d ha %2$d arouez e rank bezañ an anv-ezel.',
	'USERNAME_TAKEN_USERNAME'		=> 'Unan bennak a ra dija gant an anv-ezel-mañ, dibabit unan all mar plij.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Diaotre eo an anv-ezel implijet ganeoc\'h pe ur ger diaotre a zo ennañ. Dibabit unan all mar plij.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'N\'eo ket bet kavet an anv-ezel bet roet ganeoc\'h, pe neuze n\'eo ket anv un ezel oberiant, bet eaouet e gont.',

	'VIEW_AVATARS'				=> 'Diskouez ar skeudennigoù',
	'VIEW_EDIT'					=> 'Gwelet/Kemm',
	'VIEW_FLASH'				=> 'Diskouez ar fiñvskeudennoù flash',
	'VIEW_IMAGES'				=> 'Diskouez ar skeudennoù e-barzh ar c\'hemennadennoù',
	'VIEW_NEXT_HISTORY'			=> 'GP da heul en istor',
	'VIEW_NEXT_PM'				=> 'GP da heul',
	'VIEW_PM'					=> 'Gwelet ar gerig',
	'VIEW_PM_INFO'				=> 'Munudoù diwar-benn ar gerig',
	'VIEW_PM_MESSAGE'			=> '1 gerig',
	'VIEW_PM_MESSAGES'			=> '%d gerig',
	'VIEW_PREVIOUS_HISTORY'		=> 'GP kent en istor',
	'VIEW_PREVIOUS_PM'			=> 'GP kent',
	'VIEW_SIGS'					=> 'Diskouez ar sinadurioù',
	'VIEW_SMILIES'				=> 'Diskouez ar <i>smilies</i> evel skeudennoù',
	'VIEW_TOPICS_DAYS'			=> 'Diskouez sujedoù an deizioù tremenet',
	'VIEW_TOPICS_DIR'			=> 'Diskouez tu urzh ar sujedoù',
	'VIEW_TOPICS_KEY'			=> 'Urzhioù ar sujedoù diouzh',
	'VIEW_POSTS_DAYS'			=> 'Diskouez kemennadennoù an deizioù tremenet',
	'VIEW_POSTS_DIR'			=> 'Diskouez tu urzh ar c\'hemennadennoù',
	'VIEW_POSTS_KEY'			=> 'Urzhiañ ar c\'hemennadennoù diouzh',

	'WATCHED_EXPLAIN'			=> 'Amañ-dindan ez eus ul listenn ouzh ar foromoù hag ar sujedoù a heuliit gant aked. Kelaouet e voc\'h pa vo kaset kemennadennoù nevez er re-se. Evit paouez da evezhiañ ar re-se, diuzit ar foromoù pe ar sujedoù, ha klikit war an nozelenn <em>Paouez da evezhiañ an diuzad</em>.',
	'WATCHED_FORUMS'			=> 'Foromoù evezhiet',
	'WATCHED_TOPICS'			=> 'Sujedoù evezhiet',
	'WRONG_ACTIVATION'			=> 'Ne glot ar c\'hod-enaouiñ bet roet ganeoc\'h gant hini ebet eus hon diaz-titouroù.',

	'YOUR_DETAILS'				=> 'Hoc\'h oberiantiz',
	'YOUR_FOES'					=> 'Hoc\'h enebourien',
	'YOUR_FOES_EXPLAIN'			=> 'Evit tennañ izili, diuzit anezho, ha klikit war an nozelenn.',
	'YOUR_FRIENDS'				=> 'Ho mignoned',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Evit tennañ izili, diuzit anezho, ha klikit war an nozelenn.',
	'YOUR_WARNINGS'				=> 'Ho live e-kañver ar c\'hemennoù groñs',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Lakaat en teuliad',
		'MARK_AS_READ'		=> 'Lakaat da lennet',
		'MARK_AS_IMPORTANT'	=> 'Lakaat da bouezus',
		'DELETE_MESSAGE'	=> 'Diverket ar gerig'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Sujed',
		'SENDER'	=> 'Kaser',
		'MESSAGE'	=> 'Gerig',
		'STATUS'	=> 'Statud ar gerig',
		'TO'		=> 'Kaset da'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'a zo evel',
		'IS_NOT_LIKE'	=> 'n\'eo ket evel',
		'IS'			=> 'a zo',
		'IS_NOT'		=> 'n\'eo ket',
		'BEGINS_WITH'	=> 'a grog gant',
		'ENDS_WITH'		=> 'a echu gant',
		'IS_FRIEND'		=> 'a zo mignon da',
		'IS_FOE'		=> 'a zo enebour da',
		'IS_USER'		=> 'a zo ezel',
		'IS_GROUP'		=> 'a zo er strollad-izili',
		'ANSWERED'		=> 'respontet',
		'FORWARDED'		=> 'treuzkaset',
		'TO_GROUP'		=> 'c\'am strollad-izili dre-ziouer',
		'TO_ME'			=> 'din'
	),


	'GROUPS_EXPLAIN'	=> 'Reiñ a ra ar strolladoù-izili tro d\'ar Merour da verañ gwelloc\'h an izili. Dre ziouer e voc\'h lakaet en ur strollad resis, ho strollad dre-ziouer e vo. Diouzh ar strollad emaoc\'h ennañ e vo disheñvel an doare ma vezit gwelet gant an izili all : liv ho anv-ezel, ho skeudenn, ho renk, h.a.. Hervez ar pezh a vo bet aotreet gant ar Merour e vo tu deoc\'h pe ne vo ket cheñch strollad dre-ziouer. Gallout a rit ivez bezañ lakaet e-barzh pe bezañ aotreet da vont e strolladoù all. Bezañ e-barzh strolladoù \'zo a roio deoc\'h aotreoù brasoc\'h evit tizhout lodennoù \'zo eus ar forom, pe evit ober traoù all.',
	'GROUP_LEADER'		=> 'E-penn',
	'GROUP_MEMBER'		=> 'Ezel',
	'GROUP_PENDING'		=> 'Emezelañ war-c\'hortoz',
	'GROUP_NONMEMBER'	=> 'Ket ezel',
	'GROUP_DETAILS'		=> 'Munudoù ar strollad',

	'NO_LEADER'		=> 'Den ebet e-penn',
	'NO_MEMBER'		=> 'Den ebet ezel',
	'NO_PENDING'	=> 'Den ebet war-c\'hortoz bezañ ezel',
	'NO_NONMEMBER'	=> 'Den ebet ha n\'eo ket ezel',
));

?>