<?php
/**
*
* acp_posting [Brezhoneg]
*
* @package language
* @version $Id: posting.php 8479 2008-03-29 00:22:48Z naderman $
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'Ur stumm deveret diouzh an HTML eo ar BBCode, reiñ a ra tro da verañ mat an doareoù ma vez diskouezet testenn ar c\'hemennadennoù. Adal ar bajenn-mañ e c\'hellit ouzhpennañ, dilemel, ha kemm kodoù BBCode.',
	'ADD_BBCODE'				=> 'Ouzhpennañ ur c\'hod BBCode nevez',

	'BBCODE_ADDED'				=> 'Ouzhpennet eo bet ar c\'hod BBCode.',
	'BBCODE_EDITED'				=> 'Kemmet eo bet ar c\'hod BBCode.',
	'BBCODE_NOT_EXIST'			=> 'N\'eus ket ouzh ar c\'hod BBCode bet diuzet ganeoc\'h.',
	'BBCODE_HELPLINE'			=> 'Linenn-skoazell',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Amañ e vo an destenn a vo diskouezet pa dremeno al logodenn dreist d\'ar c\'hod BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Testenn al linenn-skoazell',
	'BBCODE_INVALID_TAG_NAME'	=> 'C\'hoazh ez eus ouzh ur valizenn BBCode anvet evel-mañ.',
	'BBCODE_INVALID'         => 'En ur stumm fall eo savet ho BBCode.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Ur valizenn-digeriñ hag unan-serriñ a rank bezañ en ho kod BBCode personelaet.',
	'BBCODE_TAG'				=> 'Balizenn',
	'BBCODE_TAG_TOO_LONG'		=> 'Re hir eo anv ar valizenn bet dibabet ganeoc\'h.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Re hir eo termenadur ar valizenn bet dibabet ganeoc\'h, berrait anezhi mar-plij.',
	'BBCODE_USAGE'				=> 'Implij ar BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[livañ={COLOR}]{TEXT}[/livañ]<br /><br />[skritur={SIMPLETEXT1}]{SIMPLETEXT2}[/skritur]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Amañ e c\'hellit termeniñ penaos ober gant ar c\'hod BBCode. Erlec\'hiit an argemenn gant ar c\'hemerad a zere (%sgwelet dindan%s).',

	'EXAMPLE'						=> 'Skouer :',
	'EXAMPLES'						=> 'Skouerioù:',

	'HTML_REPLACEMENT'				=> 'erlec\'hiañ HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Amañ e c\'hellit termeniñ an erlec\'hiadennoù HTML dre ziouer. N\'ankaouit ket adimplijout ar memes kemeradoù hag a zo bet implijet ganeoc\'h uheloc\'h !',

	'TOKEN'					=> 'Kemerad',
	'TOKENS'				=> 'Kemeradoù',
	'TOKENS_EXPLAIN'		=> 'Takadoù evit ma c\'hellfe bezañ enlakaet traoù gant an izili eo ar c\'hemeradoù. Ne vo degemeret ar pezh a zo bet enlakaet gant an ezel nemet ma klot gant an termenadur a zere. Ma vez ezhomm e c\'hellit rieñ un niver dezho, an vo lakaet en arouez diwezhañ a-raok ar c\'hromelloù, sk. {TEXT1}, {TEXT2}.<br /><br />E-touez ar pezh a c\'hell erlec\'hiañ HTML e c\'hellit implijout ivez forzh peseurt chadenn-yezh a zo en ho teuliad language/ : {L_<em>&lt;STRINGNAME&gt;</em>} e-lec\'h ma vo <em>&lt;STRINGNAME&gt;</em> anv ar chadenn bet troet ho peus c\'hoant da ouzhpennañ. Da skouer, evit {L_WROTE} e vo diskouezet &quot;wrote&quot; pe e droidigezh, diouzh ar yezh a vez implijet gant an ezel.<br /><br /><strong>N\'eus nemet ar c\'hemeradoù el listenn amañ-dindan hag a c\'hell bezañ implijet e-barzh kodoù BBCode boutin.</strong>',
	'TOKEN_DEFINITION'		=> 'Petra e c\'hell bezañ ?',
	'TOO_MANY_BBCODES'		=> 'N\'hallit ket krouiñ kodoù BBCode ouzhpenn. Dilamit unan pe zoau kuit, ha klaskit en-dro.',

	'tokens'	=>	array(
		'TEXT'			=> 'Forzh peseurt testenn, ha zoken arouezioù estren, sifroù, h.a. …',
		'SIMPLETEXT'	=> 'Lizherennoù (A-Z), sifroù, toulloù, skejoù (,), poentoù, nemet, mui, barennig-stagañ ha barennig en-traoñ',
		'IDENTIFIER'	=> 'Lizherennoù (A-Z), sifroù, barrennig-stagañ, ha barennig en-traoñ',

		'NUMBER'		=> 'Un heuliad sifroù',
		'EMAIL'			=> 'Ur postel reizh',
		'URL'			=> 'Ur chomlec\'h URL reizh, o venegiñ an doare da vont war internet (http, ftp, etc… n\'hallont ket bezañ implijet evit traoù javascript). Ma n\'eus roet hini ebet e vo lakaet &quot;http://&quot; e penn kentañ ar chadenn.',
		'LOCAL_URL'		=> 'Un URL lec\'hel (war ar forom). Dav eo dezhi morc\'hañ ouzh pajenn ar sujed, hag arabat dezhi kaout meneget enni an doare da vont war internet.',
		'COLOR'			=> 'Ul liv HTML, a c\'hell bezañ roet gant he stumm niverel <samp>#FF1234</samp> pe gant ar <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">ger-stur evit al livioù CSS</a> evel <samp>fuchsia</samp> pe <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Adal ar bajenn-mañ e c\'hellit ouzhpennañ, kemm, pe dilemel skeudennigoù a c\'hell bezañ staget gant an izili ouzh o sujedoù pe ouzh o c\'hemennadennoù. Alies e vezont diskouezet e-kichen titloù ar sujedoù war bajennoù ar foromoù, pe e-kichen titl ar gemennadenn war bajennoù ar sujedoù. Gallout a rit ivez staliañ ha krouiñ pakadoù skeudennigoù nevez.',
	'ACP_SMILIES_EXPLAIN'	=> 'Skeudennigoù bihan, fiñvus a-wechoù, eo ar <i>smilies</i>, implijet e vezont peurliesañ evit ezteurel un trivliad pe ur santadur. Adal ar bajenn-mañ e c\'hellit ouzhpennañ, kemm pe dilemel ar skeudennigoù-imor a c\'hell bezañ lakaet en o c\'hemennadennoù pe Gerigoù Prevez gant an izili. Gallout a rit ivez staliañ ha krouiñ pakadennoù skeudennigoù all.',
	'ADD_SMILIES'			=> 'Ouzhpennañ skeudennigoù-imor lies',
	'ADD_SMILEY_CODE'		=> 'Ouzhpennañ ur c\'hod ouzhpenn evit ur skeudennig-imor',
	'ADD_ICONS'				=> 'Ouzhpennañ skeudennigoù-kemennadenn',
	'AFTER_ICONS'			=> 'Goude %s',
	'AFTER_SMILIES'			=> 'Goude %s',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Skeudennigoù-kemennadenn a zo bremañ',
	'CURRENT_ICONS_EXPLAIN'		=> 'Dibabit ar pezh a zo d\'ober gant ar skeudennigoù a zo staliet c\'hoazh.',
	'CURRENT_SMILIES'			=> 'Skeudennigoù-imor a zo bremañ',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Dibabit ar pezh a zo d\'ober gant ar skeudennigoù a zo staliet c\'hoazh.',

	'DISPLAY_ON_POSTING'	=> 'Diskouez war bajenn ar c\'has-kemennadennoù',
	'DISPLAY_POSTING'			=> 'War ar bajenn-kas',
	'DISPLAY_POSTING_NO'		=> 'Ket war ar bajenn-kas',



	'EDIT_ICONS'				=> 'Kemm skeudennigoù-kemennadenn',
	'EDIT_SMILIES'				=> 'Kemm skeudennigoù-imor',
	'EMOTION'					=> 'Trivliad',
	'EXPORT_ICONS'				=> 'Ezporzhiañ ha pellgargañ icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%s O klikañ war al liamm-mañ e vo lakaet perzhioù ar skeudennigoù bet staliet ganeoc\'h en ur pakad <samp>icons.pak</samp>, hag a c\'hello, ur wech bet pellgarget, bezañ implijet evit sevel ur restr <samp>.zip</samp> pe <samp>.tgz</samp> ennañ an holl skeudennigoù mui ar restr-ardremmeziñ <samp>icons.pak</samp>-mañ%s.',
	'EXPORT_SMILIES'			=> 'Ezporzhiañ ha pellgargañ smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sO klikañ amañ e vo lakaet perzhioù ar skeudennigoù-imor staliet amañ en ur pakad <samp>smilies.pak</samp>, hag a c\'hello, ur wech bet pellgarget, bezañ implijet evit sevel ur restr <samp>.zip</samp> pe <samp>.tgz</samp> ennañ an holl skeudennigoù-imor mui ar restr-ardremmeziñ <samp>smilies.pak</samp>-mañ%s.',

	'FIRST'			=> 'Da gentañ',

	'ICONS_ADD'				=> 'Ouzhpennañ ur skeudennig nevez',
	'ICONS_NONE_ADDED'		=> 'N\'eus bet ouzhpennet skeudennig ebet.',
	'ICONS_ONE_ADDED'			=> 'Ouzhpennet eo bet ar skeudennig.',
	'ICONS_ADDED'			=> 'Ouzhpennet eo bet ar skeudennigoù.',
	'ICONS_CONFIG'			=> 'Perzhioù ar skeudennig',
	'ICONS_DELETED'			=> 'Tennet eo bet ar skeudennig.',
	'ICONS_EDIT'			=> 'Kemm ar skeudennig',
	'ICONS_ONE_EDITED'			=> 'Hizivaet eo bet ar skeudennig.',
	'ICONS_NONE_EDITED'		=> 'N\'eus bet hizivaet skeudennig ebet.',
	'ICONS_EDITED'			=> 'Ouzhpennet eo bet ar skeudennigoù.',
	'ICONS_HEIGHT'			=> 'Uhelder ar skeudennig',
	'ICONS_IMAGE'			=> 'Skeudenn ar skeudennig',
	'ICONS_IMPORTED'		=> 'Staliet eo bet ar pakad skeudennigoù.',
	'ICONS_IMPORT_SUCCESS'	=> 'Enborzhet eo bet ar pakad skeudennigoù.',
	'ICONS_LOCATION'		=> 'Lec\'hiadur ar skeudennig',
	'ICONS_NOT_DISPLAYED'	=> 'Ne vez ket diskouezet ar skeudennigoù da-heul war ar bajenn kas kemennadennoù',
	'ICONS_ORDER'			=> 'Urzh ar skeudennigoù',
	'ICONS_URL'				=> 'Restr ar skeudennig',
	'ICONS_WIDTH'			=> 'Ledander ar skeudennig',
	'IMPORT_ICONS'			=> 'Staliañ ur pakad skeudennigoù-kemennadenn',
	'IMPORT_SMILIES'		=> 'Staliañ ur pakad skeudennigoù-imor',

	'KEEP_ALL'			=> 'Mirout an holl',

	'MASS_ADD_SMILIES'	=> 'Ouzhpennañ skeudennigoù-imor lies',

	'NO_ICONS_ADD'		=> 'N\'eus skeudenig ebet da ouzhpennañ.',
	'NO_ICONS_EDIT'		=> 'N\'eus skeudennig ebet da gemm.',
	'NO_ICONS_EXPORT'	=> 'N\'eus skeudennig ebet da grouiñ ur pakad ganti.',
	'NO_ICONS_PAK'		=> 'N\'eus bet kavet pakad ebet.',
	'NO_SMILIES_ADD'	=> 'N\'eus skeudennig-imor ebet da ouzhpennañ.',
	'NO_SMILIES_EDIT'	=> 'N\'eus skeudennig-imor ebet da gemm.',
	'NO_SMILIES_EXPORT'	=> 'N\'eus skeudennig-imor ebet da grouiñ ur pakad ganti.',
	'NO_SMILIES_PAK'	=> 'N\'eus bet kavet pakad skeudennigoù-imor ebet.',

	'PAK_FILE_NOT_READABLE'		=> 'N\'eus ket bet tu da lenn ar restr <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Erlec\'hiañ ar re-se',

	'SELECT_PACKAGE'			=> 'Diuz ur pakad',
	'SMILIES_ADD'				=> 'Ouzhpennañ ur skeudennig-imor nevez',
	'SMILIES_NONE_ADDED'		=> 'N\'eus bet ouzhpennet skeudennig-imor ebet.',
	'SMILIES_ONE_ADDED'				=> 'Ouzhpennet eo bet ar skeudennig-imor.',
	'SMILIES_ADDED'				=> 'Ouzhpennet eo bet ar skeudennigoù-imor.',
	'SMILIES_CODE'				=> 'Kod ar skeudennig-imor',
	'SMILIES_CONFIG'			=> 'Perzhioù ar skeudennig-imor',
	'SMILIES_DELETED'			=> 'Tennet eo bet ar skeudennig-imor.',
	'SMILIES_EDIT'				=> 'Kemm ar skeudennig-imor',
	'SMILIE_NO_CODE'			=> 'N\'eus ket bet tennet kont ouzh ar skeudennig-imor “%s” dre ma n\'eus bet roet kod ebet.',
	'SMILIE_NO_EMOTION'			=> 'N\{eus ket bet tennet kont ouzh ar skeudennig-imor “%s” dre ma n\'eus bet roet trivliad ebet.',
	'SMILIES_NONE_EDITED'		=> 'N\'eus bet hizivaet skeudennig-imor ebet.',
	'SMILIES_ONE_EDITED'			=> 'Hizivaet eo bet ar skeudennig-imor.',
	'SMILIES_EDITED'			=> 'Hizivaet eo bet ar skeudennigoù-imor.',
	'SMILIES_EMOTION'			=> 'Trivliad',
	'SMILIES_HEIGHT'			=> 'Uhelder ar skeudennig-imor',
	'SMILIES_IMAGE'				=> 'Skeudenn ar skeudennig-imor',
	'SMILIES_IMPORTED'			=> 'Staliet eo bet ar pakad skeudennigoù-imor.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Enborzhet eo bet ar pakad skeudennigoù-imor.',
	'SMILIES_LOCATION'			=> 'Lec\'hiadur ar skeudennig-imor',
	'SMILIES_NOT_DISPLAYED'		=> 'Ne vez ket diskouezet ar skeudennigoù-imor da-heul war ar bajenn kas kemennadennoù',
	'SMILIES_ORDER'				=> 'Urzh ar skeudennigoù-imor',
	'SMILIES_URL'				=> 'Restr ar skeudennif-imor',
	'SMILIES_WIDTH'				=> 'Ledander ar skeudennig-imor',

	'WRONG_PAK_TYPE'	=> 'N\'eus ket an titouroù a zere er pakad bet roet ganeoc\'h.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Adal ar bajenn-mañ e c\'hellit ouzhpennañ, kemm, ha dilemel gerioù diaotre a vo eskemmet gant re all e-barzh ar forom. Ne vo ket aotreet an dud da emezelañ gant ar gerioù-mañ en o anv kenebeut. Grit gant * evit ar gerioù diglok. Da skouer, ma rit gant *penn e vo nac\'het ar ger “ouzhpenn”, ma rit gant penn* e vo nac\'het ar ger “pennek”, ha ma rit gant *penn* e vo nac\'het ar ger “eilpennañ”.',
	'ADD_WORD'				=> 'Ouzhpenañ ur ger nevez',

	'EDIT_WORD'		=> 'Kemm un eskemm-gerioù',
	'ENTER_WORD'	=> 'Dav eo deoc\'h reiñ un anv ha gant petra e vo erlec\'hiet.',

	'NO_WORD'	=> 'N\'eus bet diuzet ger ebet da vezañ kemmet.',

	'REPLACEMENT'	=> 'Erlec\'hiañ',

	'UPDATE_WORD'	=> 'Hizivaat an erlec\'hiañ gerioù diaotre',

	'WORD'				=> 'Ger',
	'WORD_ADDED'		=> 'Ouzhpennet eo bet an erlec\'hiadenn-mañ.',
	'WORD_REMOVED'		=> 'Dilemet eo bet an erlec\'hiadenn-mañ.',
	'WORD_UPDATED'		=> 'Hizivaet eo bet an erlec\'hiadenn-mañ.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Amañ e c\'hellit ouzhpennañ, kemm, gwelet ha dilemel renkadoù. Gallout a rit ivez krouiñ ur renkad ispisial a vo roet d\'un ezel resis, gant benveg merañ an izili.',
	'ADD_RANK'				=> 'Ouzhpennañ ur renkad nevez',

	'MUST_SELECT_RANK'		=> 'Dav eo deoc\'h diuz ur renkad.',

	'NO_ASSIGNED_RANK'		=> 'N\'eus termenet renkad ispisial ebet.',
	'NO_RANK_TITLE'			=> 'N\'ho peus roet anv ebet d\'ar renkad.',
	'NO_UPDATE_RANKS'		=> 'Diverket eo bet ar renkad. Met n\'eo ket bet kemmet kontoù an izili a oa ar renkad-mañ ganto. Dav e vo deoc\'h kemm ar re-se unan-hag-unan.',

	'RANK_ADDED'			=> 'Ouzhpennet eo bet ar renkad.',
	'RANK_IMAGE'			=> 'Skeudennig ar renkad',
	'RANK_IMAGE_EXPLAIN'	=> 'Grit gant se evit dibab ur skeudennig a vo diskouezet e-kichen ar renkad. Loc\'hañ a ra an trueg gant teuliad phpBB.',
	'RANK_MINIMUM'			=> 'Kemennadennoù d\'an nebeutañ',
	'RANK_REMOVED'			=> 'Diverket eo bet ar renkad.',
	'RANK_SPECIAL'			=> 'Lakaat da renkad ispisial',
	'RANK_TITLE'			=> 'Anv ar renkad',
	'RANK_UPDATED'			=> 'Hizivaet eo bet ar renkad.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Amañ e c\'hellit merañ an anvioù-ezel diaotre. Gallout a rit ober gant * evit gerioù diglok. Ne voc\'h ket aotreet da lakaat anv unan a zo emezelet c\'hoazh, dav vo deoc\'h diverkañ ar c\'hont-se en a-raok, ha lakaat e anv diaotre da c\'houde.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Gallout a rit lakaat anvioù-ezel diaotre oc\'h ober gant * evit gerioù diglok.',
	'ADD_DISALLOW_TITLE'	=> 'Ouzhpennañ un anv a vo diaotre',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Gallout a rit tennañ un anv diouzh listenn ar re ziaotre o tiuz e anv ha klikañ war Kas.',
	'DELETE_DISALLOW_TITLE'		=> 'Aotreañ un anv en-dro',
	'DISALLOWED_ALREADY'		=> 'N\'eus ket gallet an anv bet roet ganeoc\'h bezañ ouzhpennet e listenn ar re ziaotre. Pe emañ el listenn c\'hoazh, pe emañ e listenn ar gerioù diaotre, pe e klot gant un anv ur * gantañ.',
	'DISALLOWED_DELETED'		=> 'Tennet eo bet an anv diouzh listenn ar re ziaotre.',
	'DISALLOW_SUCCESSFUL'		=> 'Ouzhpennet eo bet an anv e listenn ar re ziaotre.',

	'NO_DISALLOWED'				=> 'N\'eus anv diaotre ebet',
	'NO_USERNAME_SPECIFIED'		=> 'N\'ho peus roet anv-ezel ebet d\'ober gantañ.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Amañ e c\'hellit ober war-dro an abegoù a vez roet evit an danevelloù pe evit nac\'hañ kemennadennoù. Unan anezho (gant ur *) a vez lakaet dre ziouer, ha n\'hall ket bezañ tennet. An abeg boutin a vez implijet eo ma n\'eus hini all ebet o klotañ.',
	'ADD_NEW_REASON'		=> 'Ouzhpennañ un abeg',
	'AVAILABLE_TITLES'		=> 'Titloù abegoù bet kavet da gaout',

	'IS_NOT_TRANSLATED'			=> 'N\'eo <strong>ket</strong> bet kavet an abeg.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'N\'eo <strong>ket</strong> bet kavet an abeg. M\'ho peus c\'hoant d\'ober gant ar stumm troet, roit an alc\'hwez a zere o tont ouzh rann abegoù an danevelloù er restr-yezh.',
	'IS_TRANSLATED'				=> 'Kavet eo bet an abeg.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Kavet eo bet an abeg. Ma vez kavet an titl a rit gantañ er restr-yezh a zere e vo graet gant troidigezh an titl-mañ.',

	'NO_REASON'					=> 'N\'eo ket bet kavet an abeg.',
	'NO_REASON_INFO'			=> 'Dav eo deoc\'h reiñ un titl hag un deskrivadur d\'an abeg-mañ.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'N\'hallit ket tennañ an abeg “Abeg all”.',

	'REASON_ADD'				=> 'Ouzhpennañ un abeg d\'an danevell pe d\'an nac\'hadenn',
	'REASON_ADDED'				=> 'Ouzhpennet eo bet an abeg d\'an danevell pe d\'an nac\'hadenn.',
	'REASON_ALREADY_EXIST'		=> 'C\'hoazh ez eus ouzh un abeg an titl-mañ gantañ, dibabit un titl all mar plij.',
	'REASON_DESCRIPTION'		=> 'Deskrivadur an abeg',
	'REASON_DESC_TRANSLATED'	=> 'Deskrivadur an abeg a vo diskouezet',
	'REASON_EDIT'				=> 'Kemm un abeg d\'an danevell pe d\'an nac\'hadenn',
	'REASON_EDIT_EXPLAIN'		=> 'Amañ e c\'hellit ouzhpennañ pe kemm un abeg. Ma\'z eo bet troet an abeg e vo graet gant an droidigezh kentoc\'h eget gant an deskrivadur a vez roet amañ.',
	'REASON_REMOVED'			=> 'Dilamet eo bet an abeg.',
	'REASON_TITLE'				=> 'Titl an abeg',
	'REASON_TITLE_TRANSLATED'	=> 'An titl a vo diskouezet',
	'REASON_UPDATED'			=> 'Hizivaet eo bet an abeg.',

	'USED_IN_REPORTS'		=> 'Implijet en danevelloù',
));

?>
