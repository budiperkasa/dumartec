<?php
/**
*
* help_bbcode [Brezhoneg]
*
* @package language
* @version $Id: help_bbcode.php,v 1.27 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Digoradur'
	),
	array(
		0 => 'Petra eo ar BBCode ?',
		1 => 'Ur stumm simplaet ouzh an HTML eo, savet evit skrivañ war ar foromoù. Etre arouezioù karrez [ ha ] kentoc\'h eget &lt; ha &gt; e vez lakaet balizennoù ar BBCode, ha servijout a ra da verañ penaos e vez diskouezet ar pezh a skrivit. Ar Merour a zibab aotreañ pe get implij ar BBCode war ar foromoù. C\'hwi ivez a c\'hell lakaat ar BBCode dizoberiant da bep kemennadenn a gasit, gant un dilenn dindan ar banell-skridaozañ. Hervez kinnig ar forom e c\'hellit kaout ar BBCode dre glikañ war nozelennoù kentoc\'h eget skrivañ ar c\'hod. Gant an dra-se zoken e c\'hell bezañ dedennus lenn ar sturiell-mañ.'
	),
	array(
		0 => '--',
		1 => 'Reiñ stumm d\'an destenn'
	),
	array(
		0 => 'Penaos kaout un destenn druz, stouet, pe islinennet',
		1 => 'Gant BBCode e c\'hellit kemm buan kinnig ho testenn. Evel-mañ e vez graet : <ul><li>Evel lakaat un tamm testenn da vezañ druz, lakait anezhañ etre balizennoù <strong>[b][/b]</strong>, sk. <br /><br /><strong>[b]</strong>Demat<strong>[/b]</strong><br /><br />a zeuio da vezañ <strong>Demat</strong></li><li>Evit islinennañ, grit gant <strong>[u][/u]</strong>, da skouer:<br /><br /><strong>[u]</strong>Plijadur \'zo<strong>[/u]</strong><br /><br />a zeuio da vezañ <u>Plijadur \'zo</u></li><li>Evit stouiñ un destenn, grit gant <strong>[i][/i]</strong>, sk.<br /><br /><strong>[i]</strong>Dreist<strong>[/i]</strong> eo !<br /><br /> a roio : <i>Dreist</i> eo !</li></ul>'
	),
	array(
		0 => 'Penaos cheñch liv pe ment un destenn',
		1 => 'Evit kemm ment pe liv un destenn ez eus balizennoù ivez. Dalc\'hit soñj eo ar merdeer hag an urzhiataerezh degemer a zibab penaos e vez kinniget an traoù a-benn ar fin : <ul><li>Evit cheñch liv un destenn eo dav e lakaat etre balizennoù <strong>[color=][/color]</strong>. Gallout a rit ober gant un anv liv brudet e saozneg (sk. red, blue, yellow, h.a.) pe an notadur dre c\'hwec\'h degad, sk. #FFFFFF, #000000. Da skouer, evit kaout un destenn ruz, grit gant :<br /><br /><strong>[color=red]</strong>Demat !<strong>[/color]</strong><br /><br /> pe <br /><br /><strong>[color=#FF0000]</strong>Demat !<strong>[/color]</strong><br /><br />, an daou a roio <span style="color:red">Demat !</span></li><li>Memes mod e vez cheñchet ment an destenn, met gant balizennoù <strong>[size=][/size]</strong>. Herez kinnig ar forom e vo lakaet hennezh e-pleustr, setu oc\'h aliet d\'ober gant niverennoù o reiñ an niver a bikselioù. Kregiñ a ra da 1 (ken bihan ma ne vez ket gwelet) betek 29 (bras-tre). Da skouer :<br /><br /><strong>[size=9]</strong>BIHAN<strong>[/size]</strong><br /><br /> a roio alies <span style="font-size:9px;">BIHAN</span><br /><br /> padal :<br /><br /><strong>[size=24]</strong>BRAS !<strong>[/size]</strong><br /><br /> a roio <span style="font-size:24px;">BRAS!</span></li></ul>'
	),
	array(
		0 => 'Ha gallout a ran implijout balizennoù disheñvel asambles ?',
		1 => 'Ya, evel just, met taolit evezh d\'an urzh ma vint lakaet :<br /><br /><strong>[size=18][color=red][b]</strong>SELLIT ! <strong>[/b][/color][/size]</strong><br /><br />a roio <span style="color:red;font-size:18px;"><strong>SELLIT !</strong></span><br /><br />Koulskoude ne vez ket aliet skrivañ evel-mañ ! Dalc\'hit soñj eo deoc\'h da ziwall ma vo ar balizennoù en urzh mat. Direizh eo ar skouer da heul :<br /><br /><strong>[b][u]</strong>Direizh eo se<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Menegiñ unan bennak, pe enlakaat testenn ingal e ledander'
	),
	array(
		0 => 'Menegiñ unan bennak en e respontoù',
		1 => 'Daou zoare a zo da venegiñ unan bennak : o reiñ e/he anv pe get.<ul><li>Pa rit gant an nozelenn Menegiñ evit respont d\'unan bennak e c\'hellit gwelet e vez eilet e destenn, etre balizennoù <strong>[quote=""][/quote]</strong>. Gant an hentenn-se e c\'hellit reiñ anv an hini a vengit, pe laatt un dra all e plas ! Da skouer, evit menegiñ un destenn bet skrivet gant Ao. Marc\'hadour e c\'hellit ober :<br /><br /><strong>[quote="Ao. Marc\'hadour"]</strong>Amañ e vo an destenn bet skrivet gantañ<strong>[/quote]</strong><br /><br />Evel-se e vo ouzhpennet , <strong>Ao. Marc\'hadour en/he deus skrivet:</strong> a-raok an destenn meneget. Dal</strong>it soñj e <strong>rankit</strong> lakaat ar c\'hrochedigoù "" pa venegit, e mod all n\'ez a ket en-dro.</li><li>Gant an eil hentenn e c\'hellit menegiñ forzh petra. N\'ho peus nemet lakaat ho testenn etre balizennoù <strong>[quote][/quote]</strong>. Pa vo lennet ar c\'hemennadenn e vo diskouezet <strong>Meneg:</strong> a-raok an destenn.</li></ul>'
	),
	array(
		0 => 'Enlakaat testenn ingal e ledander (tarzh, da skouer)',
		1 => 'M\'ho peus c\'hoant da lakaat un tamm tarzh, pe testenn gant ledoù ingal etre an arouezioù, (sk. Courier type) eo dav deoc\'h lakaat an destenn etre baliezennoù <strong>[code][/code]</strong>, sk.<br /><br /><strong>[code]</strong>echo "Setu un tamm tarzh";<strong>[/code]</strong><br /><br />Ne vez ket cheñchet ar c\'hinnig etre ar balizennoù <strong>[code][/code]</strong>.'
	),
	array(
		0 => '--',
		1 => 'Sevel listennoù'
	),
	array(
		0 => 'Sevel ul listenn dizurzh',
		1 => 'Daou zoare listennoù a vez kinniget gant ar BBCode : re urzhiet ha re dizurzh. Dre vras e vezont memes tra hag al listennoù HTML. Ul listenn dizurzh a ginnigo pep elfenn an eil war-lerc\'h egile, ur c\'hwenenn araozo, hag un tamm muioc\'h war an tu dehou. Evit sevel ul listenn evel-se, lakait <strong>[list][/list]</strong>, hag un <strong>[*]</strong> dirak pep elfenn eus al listenn. Da skouer, evit listennañ al livioù a blij deoc\'h ar muiañ e c\'hellit ober :<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Ruz<br /><strong>[*]</strong>Glas<br /><strong>[*]</strong>Melen<br /><strong>[/list]</strong><br /><br />Ul listenn evel-mañ a vo savet :<ul><li>Ruz</li><li>Glas</li><li>Melen</li></ul>'
	),
	array(
		0 => 'Sevel ul listenn urzhiet',
		1 => 'Gant al listennoù urzhiet e c\'heller merañ ar pezh a vez diskouezhet dirak pep elfenn. Evit krouiñ seurt listenn, grit gant <strong>[list=1][/list]</strong> evit ul listenn gant niveroù, pe gant <strong>[list=a][/list]</strong> evit ul listenn lizherennek. Evel evit al listennoù dizurzh e vez graet gant <strong>[*]</strong> dirak pep elfenn. Da skouer :<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Prientiñ ur piknik<br /><strong>[*]</strong>Mont da vale war ar maez<br /><strong>[*]</strong>Debriñ ar piknik<br /><strong>[/list]</strong><br /><br />a roio :<ol type="1"><li>Prientiñ ur piknik</li><li>Mont da vale war ar maez</li><li>Debriñ ar piknik</li></ol>E urzh al lizherenneg e vo ggraet gant :<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Respont kentañ<br /><strong>[*]</strong>Eil respont<br /><strong>[*]</strong>Trede respont<br /><strong>[/list]</strong><br /><br />ha reiñ a raio<ol type="a"><li>Respont kentañ</li><li>Eil respont</li><li>Trede respont</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Sevel liammoù'
	),
	array(
		0 => 'Lakaat ul liamm davet ul lec\'hienn all',
		1 => 'Doareoù lies a zo da sevel liammoù (dle lakaat URIoù, anvet ivez URLoù, pe c\'hoazh kavelc\'h e brezhoneg) gant ar BBCode.<ul><li>An hini kentañ a zo dre implijout <strong>[url=][/url]</strong>, forzh petra ma vefe skrivet goude an arouez = e vo emzalc\'h un URL gant ar pezh a zo etre ar balizennoù. Da skouer, evit liammañ da phpBB.com, grit gant :<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Lec\'hienn phpBB!<strong>[/url]</strong><br /><br />Al liamm da-heul a vo savet, <a href="http://www.phpbb.com/" target="_blank">Lec\'hienn phpBB!</a>.Ur prenestr (pe un ivinenn) nevez a vez digoret evit al liamm, evel-mañ e c\'hell an dud kenderc\'hel o zroig war ar forom.</li><li>M\'ho peus c\'hoant ma vefe an URL a servijfe d\'ober ul liamm, skrivit :<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Al liamm da-heul a vo savet : <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a></li><li>Un dra bennak ouzhpenn a zo e-barzh phpBB, anvet <i>Liammoù Hud</i>, :pep kavlec\'h reizh a vo troet en un URL, hep ma vefe ezhomm da lakaat balizennoù, pe zoken an http://. Da skouer, ma skrivit www.phpbb.com en ho kemennadenn, e teuio da vezañ <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a>pa vo lennet war ar forom.</li><li>Memes tra evit ar postelioù :<br /><br /><strong>[email]</strong>den.ebet@postel.bzh<strong>[/email]</strong><br /><br />a roio <a href="emailto:den.ebet@postel.bzh">den.ebet@postel.bzh</a>, met gallout a rit skrivañ den.ebet@postel.bzh hepken, ha troet e vo en ul liamm davet ar postel.</li></ul>Evel evit ar balizennoù BBCode all e c\'hellit lakaat re al liammoù tro-dro da re all, da skouer <strong>[img][/img]</strong> (gwelet pelloc\'h), <strong>[b][/b]</strong>, h.a. Evel evit ar peurrest eo deoc\'h da wiriañ eo reizh an urzh :<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/images/phplogo.gif<strong>[/url][/img]</strong><br /><br />a zo <u>direizh</u> ha gallout a rafe ho kemennadenn bezañ diverket, setu taolit pled.'
	),
	array(
		0 => '--',
		1 => 'Diskouezh skeudennoù'
	),
	array(
		0 => 'Ouzhpennañ ur skeudenn en ur gemennadenn',
		1 => 'Gant ar BBCode e c\'hellit ouzhpennañ ur skeudenn en ho kemennadennoù. Daou zra a zo da zerc\'hel soñj er c\'heñver-se : da gentañ, ne blij ket d\'an implierien gwelet re a skeudennoù en o c\'hemennadennoù; da eil e rank ar skeudenn a ziskouezit bezañ dija war ar rouedad (ne vo ket mat ma n\'emañ nemet war hoc\'h urzhiataerezh). Evit ar mare, n \'eus doare ebet da lakaat skeudennoù o tont eus ho urzhiataerezh. Evit diskouezh ur skeudenn eo dav deoc\'h lakaat an URL o kas davet ar skeudenn etre balizennoù <strong>[img][/img]</strong>. Da skouer :<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Evel ma\' eo bet lavaret uheloc\'h e c\'hellit lakaat ar skeudenn etre balizennoù <strong>[url][/url]</strong> m\ho peus c\'hoant, sk.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />a roio:<br /><br /><a href="http://www.google.com/" target="_blank"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" border="0" alt="" /></a><br />'
	),
	array(
		0 => 'Ouzhpennañ ur stagadenn d\'ur gemennadenn',
		1 => 'Bremañ e c\'hellit stagañ ur restr, n\'eus forzh pelec\'h en ho kemennadenn, oc\'h ober gant ar balizenn BBCode<strong>[attachment=][/attachment]</strong>, ma vez aotreet ar stagañ restroù gant ar merour ha m\'ho peus an aotreoù a zere evit stagañ restroù. Un nozelenn a vez kinniget e-kichen an dachenn-skridaozañ evit enlakaat stagadennoù.'
	),
	array(
		0 => '--',
		1 => 'Traoù all'
	),
	array(
		0 => 'Ha gallout a ran ouzhpennañ balizennoù savet ganin ?',
		1 => 'Ma\'z oc\'h merour ar forom ha m\'ho peus an aotreoù a zere e c\'hellit ouzhpennañ balizennoù BBCode gant ar rann Personelaat BBCode'
	)
);

?>
