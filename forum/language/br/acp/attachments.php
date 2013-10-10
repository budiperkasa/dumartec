<?php
/**
*
* acp_attachments [Brezhoneg]
*
* @package language
* @version $Id: attachments.php 8555 2008-05-15 14:10:11Z Kellanved $
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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Amañ e c\'hellit merañ ar pezh a den ouzh restroù stag ouzh ur gemennadenn, pe ar rannoù stag.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Amañ e c\'hellit ouzhpennañ, diverkañ, kemm, pe nac\'hañ ar strolladoù astennoù. Dilennoù spisoc\'h a ro tro da lakaat anezho e-barzh rannoù ispisial, evit tremeniñ resisoc\'h an doare ma vint pellgarget, pe ar skeudennig a vo diskouezet dirak ar restroù-se.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Amañ e c\'hellit merañ peseurt astennoù a vez aotreet. Evit enaouiñ hoc\'h astennoù, kit da welet war panell-merañ ar strolladoù astennoù. Aliet oc\'h da chom hep degemer astennoù ar furmskridoù (evel <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, hag kement zo…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Amañ e c\'hellit gwelet ar restroù emzivad, da lâret eo ar restroù a zo chomet o-unan. Kavet e vezont, da skouer, pa vez staget ur restr ouzh ur gemennadenn gant un ezel met pa ne vez ket embannet e gemennadenn gantañ. Gallout a rit diverkañ ar restroù-mañ, pe stagañ anezho da gemennadennoù a zo outo c\'hoazh. Evit stagañ anezho ouzh ur gemennadenn eo dav deoc\'h reiñ niverenn-anavezout ar gemennadenn (ID). An niverenn-se ho peus da gavout ho-unan. Neuze e vo staget ar restr ouzh ar gemenadenn a glot gant an niver bet roet ganeoc\'h.',
	'ADD_EXTENSION'						=> 'Ouzhpennañ un astenn',
	'ADD_EXTENSION_GROUP'				=> 'Ouzhpennañ ur strollad astennoù',
	'ADMIN_UPLOAD_ERROR'				=> 'Ur fazi a zo bet o klask stagañ ar restr-mañ: “%s”.',
	'ALLOWED_FORUMS'					=> 'Foromoù aotreet',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Aotreañ da stagañ restrom an astenn-mañ ganto d\'ar forom diuzet, pe d\'an holl foromoù ma\'z int holl diuzet.',
	'ALLOWED_IN_PM_POST'				=> 'Aotreet',
	'ALLOW_ATTACHMENTS'					=> 'Aotreañ ar stagadennoù',
	'ALLOW_ALL_FORUMS'					=> 'Aotreañ an holl foromoù',
	'ALLOW_IN_PM'						=> 'Aotreet er Gerigoù Prevez',
	'ALLOW_PM_ATTACHMENTS'				=> 'Aotreañ da stagañ restroù ouzh ar Gerigoù Prevez',
	'ALLOW_SELECTED_FORUMS'				=> 'Foromoù diuzet amañ-dindan hepken',
	'ASSIGNED_EXTENSIONS'				=> 'Astennoù deverket',
	'ASSIGNED_GROUP'					=> 'Strollad astennoù deverket',
	'ATTACH_EXTENSIONS_URL'				=> 'Astennoù',
	'ATTACH_EXT_GROUPS_URL'				=> 'Strolladoù astennoù',
	'ATTACH_ID'							=> 'Niverenn anavezout',
	'ATTACH_MAX_FILESIZE'				=> 'Ment brasañ posupl ar restr',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Ar ment brasañ a c\'hell pep restr bezañ, ma lakait 0 n\'eus bevenn ebet d\'o vent.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Ment brasañ posupl ur restr kaset dre GP',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Ar ment brasañ a c\'hell pep restr kaset dre Gerig Prevez bezañ, ma lakait 0 n\'eus bevenn ebet d\o vent.',
	'ATTACH_ORPHAN_URL'					=> 'Stagadennoù emzivad',
	'ATTACH_POST_ID'					=> 'Niverenn anavezout ar gemennadenn',
	'ATTACH_QUOTA'						=> 'Ment gouestlet d\'ar stagadennoù',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Ar ment brasañ a c\'hell bezañ gouestlet d\'an holl stagadennoù war ar forom, ma lakait 0 n\'eus bevenn ebet d\'ar ment-se.',
	'ATTACH_TO_POST'					=> 'Stagañ ar restr ouzh ar gemennadenn',

	'CAT_FLASH_FILES'			=> 'Restroù flash',
	'CAT_IMAGES'				=> 'Skeudennoù',
	'CAT_QUICKTIME_FILES'		=> 'Restroù Quicktime media',
	'CAT_RM_FILES'				=> 'Restroù RealMedia',
	'CAT_WM_FILES'				=> 'Restroù Windows Media',
	'CHECK_CONTENT'				=> 'Gwiriañ ar restroù staget',
	'CHECK_CONTENT_EXPLAIN'		=> 'Lod ouzh ar verdeourien a c\'hell bezañ graet ma tegemeront astennoù mimetype direizh evit ar restroù pellgaset. Gant an dilenn-mañ e vo nac\'het seurt restroù.',
	'CREATE_GROUP'				=> 'Sevel ur strollad nevez',
	'CREATE_THUMBNAIL'			=> 'Krouiñ ur skeudennig',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Krouiñ bepred ur skeudennig pa vez tu.',

	'DEFINE_ALLOWED_IPS'			=> 'Termeniñ an IPoù pe ar boderien aotreet',
	'DEFINE_DISALLOWED_IPS'			=> 'Termeniñ an IPoù pe ar boderien na vezont ket aotreet',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Evit reiñ meur a IP pe boder, lakait anezho war bep a linenn. Evit reiñ un teskad chomlec\'hioù IP, lakait ur varennig-stagañ (-), evit lezel un toull, grit gant “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Gallout a rit tennañ (pe adlakaat) meur a chomlec\'h IP d\'un taol, oc\'h ober ar pezh a zere gant al logodenn hag an douchennaoueg, hervez oc\'h urzhiataerez hag ho merdeer. Ur foñs gals a zo d\'an IPoù harluet.',
	'DISPLAY_INLINED'				=> 'Diskouez ar skeudennoù e-barzh ar gemennadenn',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ma lakait Ket, ne vo ket gwelet ar skeudenn er gemennadenn, met ul liamm a vo en he flas.',
	'DISPLAY_ORDER'					=> 'Urzhiañ diskouez ar stagadennoù',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Urzhiañ ar stagadennoù hervez ar mare ma\'z int bet kaset.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Kemm strollad an astenn',
	'EXCLUDE_ENTERED_IP'			=> 'Grit gant an dra-mañ evit tennañ an IP pe ar boder.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Tennañ ar IP diouzh listenn an IPoù/boderien aotreet',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Tennañ an IP diouzh listen an IPoù/boderien na vezont ket aotreet',
	'EXTENSIONS_UPDATED'			=> 'Kemmet eo bet an astennoù.',
	'EXTENSION_EXIST'				=> 'An astenn %s a zo outi c\'hoazh.',
	'EXTENSION_GROUP'				=> 'Strollad astennoù',
	'EXTENSION_GROUPS'				=> 'Strolladoù astennoù',
	'EXTENSION_GROUP_DELETED'		=> 'Diverket eo bet ar strollad astennoù.',
	'EXTENSION_GROUP_EXIST'			=> 'Ar strollad astennoù %s a zo outañ c\'hoazh.',

	'GO_TO_EXTENSIONS'		=> 'Mont da bajenn verañ an astennoù',
	'GROUP_NAME'			=> 'Anv ar strollad',

	'IMAGE_LINK_SIZE'			=> 'Mentoù ur skeudenn staget e-stumm ul liamm',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Ma\'z eo ledanoc\'h eget an talvoud-mañ e vo diskouezet ar skeudenn e-barzh ar gemenandenn. Evit ma ne vefe ket graet kement-mañ, lakait an talvoudoù da 0px war 0px.',
	'IMAGICK_PATH'				=> 'Treug Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'An treug a-bezh davet ar poellad-treiñ imagemagick, sk. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Niver brasañ a stagadennoù aotreet dre gemennadenn',
	'MAX_ATTACHMENTS_PM'			=> 'Niver brasañ a stagadennoù aotreet dre Gerig Prevez',
	'MAX_EXTGROUP_FILESIZE'			=> 'Ment brasañ aotreet evit ur restr',
	'MAX_IMAGE_SIZE'				=> 'Ment brasañ aotreet evit ar skeudennoù',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'An hed hag al ledander brasañ a vez aotreet evit ar skeudennoù stag. Lakait an talvoudoù 0px war 0px evit ma ne vefe ket gwiriet ment ar skeudennoù.',
	'MAX_THUMB_WIDTH'				=> 'Ledander brasañ aotreet evit ur skeudennig (piksel)',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Ne vo ket ledanoc\'h ment ur skeudennig evit an talvoud-mañ.',
	'MIN_THUMB_FILESIZE'			=> 'Ment bihanañ evit ur skeudennig',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ne vo ket krouet ur skeudennig ma\'z eo ar skeudenn bihanoc\'h eget an talvoud-mañ.',
	'MODE_INLINE'					=> 'E-barzh ar gemennadenn',
	'MODE_PHYSICAL'					=> 'Restr stag',

	'NOT_ALLOWED_IN_PM'			=> 'Aotreet er c\'hemennadennoù hepken',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Ket aotreet',
	'NOT_ASSIGNED'				=> 'Ket deverket',
	'NO_EXT_GROUP'				=> 'Hini ebet',
	'NO_EXT_GROUP_NAME'			=> 'N\'eus bet roet anv ebet d\'ar strollad',
	'NO_EXT_GROUP_SPECIFIED'	=> 'N\'eus bet termenet strollad astennoù ebet.',
	'NO_FILE_CAT'				=> 'Hini ebet',
	'NO_IMAGE'					=> 'Skeudenn ebet',
	'NO_THUMBNAIL_SUPPORT'		=> 'Ne vez ket graet gant ar skeudennigoù. Evit ma\'z afe en-dro eo dav ma vefe staliet GD pe Imagemagick, met n\'eus bet kavet nag an eil nag egile.',
	'NO_UPLOAD_DIR'				=> 'N\'eus ket ouzh an teuliad meneget evit ar pellgas.',
	'NO_WRITE_UPLOAD'			=> 'N\'eo ket posupl skrivañ e-barzh an teuliad ho peus meneget evit ar pellgas. Dav eo deoc\'h kemm an aotreoù evit aotreañ ar servijour web d\'hen ober.',

	'ONLY_ALLOWED_IN_PM'	=> 'Aotreet er Gerigoù Prevez hepken',
	'ORDER_ALLOW_DENY'		=> 'Aotreañ',
	'ORDER_DENY_ALLOW'		=> 'Nac\'hañ',

	'REMOVE_ALLOWED_IPS'		=> 'Tennañ pe paouez da harluiñ an IPoù/boderien <em>aotreet</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Tennañ pe paouez da harluiñ an IPoù/boderien <em>na vezont ket aotreet</em>',

	'SEARCH_IMAGICK'				=> 'Klask Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Listenn ar pezh a vez aotreet hag ar pezh na vez ket',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Pa vez cheñchet emzalc\'h an degemer stagadennoù d\'ar mod surentezet ez a en-dro gant ul  <strong>listenn Wenn</strong> (Degemer) pe ul <strong>listenn zu</strong> (Nac\'hañ).',
	'SECURE_DOWNLOADS'				=> 'Ober gant ar pellgargañ surentezet',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Gant an dilenn-mañ, n\'eus tu pellgargañ nemet adal an IPoù/boderien bet termenet ganeoc\'h.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Ne vez ket graet gant ar pellgargañ surentezet. Lakaet e vo an dilenn-mañ e-pleutr pa vo graet gant ar pellgargañ surentezet.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Hizivaet eo bet listenn an IPoù.',
	'SECURE_EMPTY_REFERRER'			=> 'Aotreañ al lec\'hiennoù-orin goullo',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'War lec\'hiennoù-orin e vez diazezet ar pellgargañ surentezet. Ha c\'hoant ho peus da aotreañ ar pellgargañ d\'ar re ha na lakont lec\'hienn-orin (referrer) ebet ?',
	'SETTINGS_CAT_IMAGES'			=> 'Dilennoù ar rann skeudennoù',
	'SPECIAL_CATEGORY'				=> 'Rann ispisial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Un diforc\'h a zo er rannoù ispisial hervez an doare ma vezxont diskouezet er c\'hemennadennoù.',
	'SUCCESSFULLY_UPLOADED'			=> 'Pellgaset eo bet ar restr.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Ouzhpennet eo bet ar strollad astennoù.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Hizivaet eo bet ar strollade astennoù.',

	'UPLOADING_FILES'				=> 'O pellgas ar restroù',
	'UPLOADING_FILE_TO'				=> 'O pellgas ar restr “%1$s” davet ar gemennadenn niverenn %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'N\'oc\'h ket aotreet da bellgas restroù davet ar forom “%s”.',
	'UPLOAD_DIR'					=> 'Teuliad pellgas',
	'UPLOAD_DIR_EXPLAIN'			=> 'al lec\'h e-lec\'h ma vo miret ar stagadennoù. Ma kemmit an teuliad-mañ goude ma vefe bet pellgaset restroù c\'hoazh e vo ret deoc\'h dilec\'hiañ ar re-se gant an dorn betek an teuliad nevez.',
	'UPLOAD_ICON'					=> 'Skeudennig pellgas',
	'UPLOAD_NOT_DIR'				=> 'Ne seblant ket an treug pellgas bet roet ganeoc\'h bezañ un teuliad.',
));

?>
