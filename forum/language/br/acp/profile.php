<?php
/**
*
* acp_profile [Brezhoneg]
*
* @package language
* @version $Id: profile.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Ouzhpennet eo bet ho takad personelaet.',
	'ALPHA_ONLY'			=> 'Lizherennoù ha sifroù hepken',
	'ALPHA_SPACERS'			=> 'Lizherennoù, sifroù, ha stagerien',
	'ALWAYS_TODAY'			=> 'Hiziv atav',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Roit ho tilennoù bremañ',
	'BOOL_TYPE_EXPLAIN'		=> 'Termenit an doare, pe kombodoù da ziuz pe nozelennoù radio. Ne vo diskouezet kombodoù da ziuz nemet ma vez dibabet evit un ezel resis. En degouezh-mañ eo an <strong>eil</strong> dibab yezh a vo impljet. An nozelennoù radio a vo diskouezet hep derc\'hel kont eus o zalvoud.',

	'CHANGED_PROFILE_FIELD'		=> 'Kemmet eo bet takad ar bajenn-emginnig.',
	'CHARS_ANY'					=> 'Forzh peseurt arouez',
	'CHECKBOX'					=> 'Kombod da ziuz',
	'COLUMNS'					=> 'Bannoù',
	'CP_LANG_DEFAULT_VALUE'		=> 'Talvoud dre ziouer',
	'CP_LANG_EXPLAIN'			=> 'Deskrivadur an takad',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'An displegadur evit an takad-mañ a vo diskouezet d\'an izili.',
	'CP_LANG_NAME'				=> 'Anv pe titl ar takad a vo diskouezet d\'an izili',
	'CP_LANG_OPTIONS'			=> 'Dilennoù',
	'CREATE_NEW_FIELD'			=> 'Krouiñ un dakad nevez',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Un dakad er bajenn-emginnig pe ouzhpenn n\'int ket bet troet. Roet an titouroù a zere o klikañ war al liamm “Treiñ”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Yezh dre ziouer [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'N\'eo ket leuniet an doneoù-yezh evit ar yezh dre ziouer war an dakad-mañ.',
	'DEFAULT_VALUE'					=> 'Talvoud dre ziouer',
	'DELETE_PROFILE_FIELD'			=> 'Tennañ an dakad diouzh ar bajenn-emginnig',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da dennañ an dakad-mañ diouzh ar bajenn-emginnig ?',
	'DISPLAY_AT_PROFILE'			=> 'Diskouez war b/Pajenn an Ezel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Gallout a raio an ezel cheñch an takad-mañ eus e bajenn-emginnig war b/Pajenn an Ezel. ',
	'DISPLAY_AT_REGISTER'			=> 'Diskouez war ar bajenn-emezelañ',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Ma vez dibabet an dra-mañ e c\'hello an dakad bezañ diskouezet war ar bajenn-emezelañ, ha gallout a raio bezañ kemmet war b/Pajenn an Ezel.',
	'DISPLAY_PROFILE_FIELD'			=> 'Diskouez splann an dakad-mañ',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Diskouezet e vo an dakad-mañ en holl lec\'ioù aotreet gant dilennoù ar c\'hargañ. Ma lakait “ket” e vo kuzhet an takad war bajennoù ar sujedoù, ar pajennoù-emginnig, ha listenn an izili.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Lakait an dilennoù amañ, pep hini war ul linenn disheñvel.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Gallout a rit kemm testenn ho tilennoù, hag ouzhpenn dilennoù ouzhpenn e penn diwezhañ al listenn. Ne vez ket aliet da ouzhpennañ dilennoù nevez etre ar re a zo outo c\'hoazh, peogwir e c\'hellfe bezañ kemmesket an talvoudoù. Kement-mañ a c\'hellfe c\'hoarvezout ivez ma tennit dilennoù eus kreiz al listenn. Ma tennit dilennoù eus penn diwezhañ al listenn, ha ma oant bet dibabet gant izili, e tistroint d\'an hini dre ziouer.',
	'EMPTY_FIELD_IDENT'				=> 'Goullo eo anv-anavezout an dakad',
	'EMPTY_USER_FIELD_NAME'			=> 'Roit un anv pe un titl d\'an dakad',
	'ENTRIES'						=> 'Doneoù',
	'EVERYTHING_OK'					=> 'Mat eo pep tra',

	'FIELD_BOOL'				=> 'Boulean (Ya/Ket)',
	'FIELD_DATE'				=> 'Deiziad',
	'FIELD_DESCRIPTION'			=> 'Deskrivadur an dakad',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'An displegadur evit an dakad-mañ a vo roet d\'an izili.',
	'FIELD_DROPDOWN'			=> 'Kombod dilennoù',
	'FIELD_IDENT'				=> 'anv-anavezout an dakad',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'C\'hoazh ez eus ouzh an anv-anavezout-mañ. Dibabit un anv all.',
	'FIELD_IDENT_EXPLAIN'		=> 'Un anv evit adkavout an dakad en diaz-titouroù hag ar patromoù eo an anv-anavezout.',
	'FIELD_INT'					=> 'Sifroù',
	'FIELD_LENGTH'				=> 'Hirder ar c\'hombod-enlakaat',
	'FIELD_NOT_FOUND'			=> 'N\'eus ket bet kavet takad ar bakenn-emginnig.',
	'FIELD_STRING'				=> 'Ur frazennig hepken',
	'FIELD_TEXT'				=> 'Un testenn',
	'FIELD_TYPE'				=> 'Doare an dakad',
	'FIELD_TYPE_EXPLAIN'		=> 'Ne vo ket tu deoc\'h cheñch doare an takadoù diwezhatoc\'h.',
	'FIELD_VALIDATION'			=> 'Asantiñ an dakad',
	'FIRST_OPTION'				=> 'Dilenn gentañ',

	'HIDE_PROFILE_FIELD'			=> 'Kuzhat an dakad',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Ne vo nemet ar verourien hag ar gasourien evit gwelet pe leuniañ an dakad-mañ. Ma vez graet gant an dilenn-mañ, ne vo diskouezet an dakad nemet war bajenn-kinnig an izili.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Anv-anavezout an dakad n\'hall bezañ nemet lizherennoù munut ha _ ',
	'INVALID_FIELD_IDENT_LEN'	=> '17 arouez d\'ar muiañ e rank bezañ anv-anavezout an dakad',
	'ISO_LANGUAGE'				=> 'Yezh[%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Dilennoù yezh ispisial [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Niver brasañ a arouezioù aotreet',
	'MAX_FIELD_NUMBER'		=> 'Niver uhelañ aotreet',
	'MIN_FIELD_CHARS'		=> 'Niver brasañ a arouezioù aotreet',
	'MIN_FIELD_NUMBER'		=> 'Niver izelañ aotreet',

	'NO_FIELD_ENTRIES'			=> 'N\'eus bet termenet done ebet',
	'NO_FIELD_ID'				=> 'N\'eus bet termenet takad ebet.',
	'NO_FIELD_TYPE'				=> 'N\'eo ket bet termenet doare an dakad.',
	'NO_VALUE_OPTION'			=> 'Talvoud n\'hall ket klotañ an dilenn ganti',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Ma vez ret leuniañ an dakad-mañ, ha ma vez roet an talvoud-mañ gant an ezel, ne vo ket degemeret.',
	'NUMBERS_ONLY'				=> 'Sifroù hepken (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'dilennoù diazez',
	'PROFILE_FIELD_ACTIVATED'	=> 'Graet e vez gant takad ar bajenn-emginnig.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Ne vez ket graet ken gant takad ar bajenn-emginnig.',
	'PROFILE_LANG_OPTIONS'		=> 'Dilennoù yezh ispisial',
	'PROFILE_TYPE_OPTIONS'		=> 'Dilennoù ispisial doare an dakad',

	'RADIO_BUTTONS'				=> 'Nozelennoù radio',
	'REMOVED_PROFILE_FIELD'		=> 'Tennet eo bet an dakad diouzh ar bajenn-emginnig.',
	'REQUIRED_FIELD'			=> 'Takad ret',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Rediañ an dakad da vezañ leuniet pe resisaet gant an hini oc\'h emezelañ. Diskouezet e vo an dakad da vare an emezelañ ha war b/Pajenn an Ezel.',
	'ROWS'						=> 'Bannoù',

	'SAVE'							=> 'Mirout',
	'SECOND_OPTION'					=> 'Eil dilennn',
	'STEP_1_EXPLAIN_CREATE'			=> 'Amañ e c\'hellit reiñ perzhioù diazez an dakad nevez a vo krouet ganeoc\'h. Ezhomm e vo ouzh an titouroù-mañ evit an eil bazenn e-lec\'h ma vo posupl dibab an dilennoù a chom ha mont pelloc\'h gant implij an dakad-mañ.',
	'STEP_1_EXPLAIN_EDIT'			=> 'amañ e c\'hellit kemm perzhioù diazez ho takad war ar bajenn-emginnnig. Adjedet e vo an talvoudoù roet ganeoc\'h amañ evit tizhout an eil bazenn.',
	'STEP_1_TITLE_CREATE'			=> 'Ouzhpennañ un dakad ouzh ar bajenn-emginnig',
	'STEP_1_TITLE_EDIT'				=> 'Kemm un dakad eus ar bajenn-emginnig',
	'STEP_2_EXPLAIN_CREATE'			=> 'Amañ e c\'hellit termeniñ un nebeud dilennoù ho po c\'hoant da glenkañ.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Amañ e c\'hellit kemm dilennoù boutin.<br /><strong> Ar c\'hemmoù graet war an dakad-mañ na dizhint ket an takadoù a zo c\'hoazh outo evit ar re a zo ezel c\'hoazh.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Dilennoù ispisial o tennañ da zoare ar bajenn-emginnig',
	'STEP_2_TITLE_EDIT'				=> 'Dilennoù ispisial o tennañ da zoare ar bajenn-emginnig',
	'STEP_3_EXPLAIN_CREATE'			=> 'Dre ma vez staliet ouzhpenn ur yezh war ho forom eo dav deoc\'h leuniañ an elfennoù-yezh-mañ ivez. Mont a raio an dakad en-dro gant ar yezh dre ziouer, posupl e vo deoc\'h leuniañ an takadoù-mañ diwezhatoc\'h ivez.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Dre ma vez staliet ouzhpenn ur yezh war ho forom e c\'hellit cheñch pe ouzhpennañ ar frazennoù a glot gant an dakad er yezhoù all ivez. E mod all ez aio takad ar bajenn-emginnig en-dro gant yezh dre ziouer ar forom.',
	'STEP_3_TITLE_CREATE'			=> 'Termenadurioù yezh a chom',
	'STEP_3_TITLE_EDIT'				=> 'Termenadurioù yezh',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Roit ur frazennig dre ziouer a vo diskouezet. Na lakait netra m\'ho peus c\'hoant ma chomfe goullo er penn kentañ.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Roit un destenn dre ziouer a vo diskouezet. Na lakait netra m\'ho peus c\'hoant ma chomfe goullo er penn kentañ.',
	'TRANSLATE'						=> 'Treiñ',

	'USER_FIELD_NAME'	=> 'Anv pe titl an dakad a vo kinniget d\'an izili',

	'VISIBILITY_OPTION'				=> 'Dilennoù an diskwel',
));

?>
