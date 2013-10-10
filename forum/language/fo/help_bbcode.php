<?php
/**
*
* help_bbcode [English]
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

$help_EN = array(
	array(
		0 => '--',
		1 => 'Introduction'
	),
	array(
		0 => 'What is BBCode?',
		1 => 'BBCode is a special implementation of HTML. Whether you can actually use BBCode in your posts on the forum is determined by the administrator. In addition you can disable BBCode on a per post basis via the posting form. BBCode itself is similar in style to HTML, tags are enclosed in square brackets [ and ] rather than &lt; and &gt; and it offers greater control over what and how something is displayed. Depending on the template you are using you may find adding BBCode to your posts is made much easier through a clickable interface above the message area on the posting form. Even with this you may find the following guide useful.'
	),
	array(
		0 => '--',
		1 => 'Text Formatting'
	),
	array(
		0 => 'How to create bold, italic and underlined text',
		1 => 'BBCode includes tags to allow you to quickly change the basic style of your text. This is achieved in the following ways: <ul><li>To make a piece of text bold enclose it in <strong>[b][/b]</strong>, e.g. <br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br />will become <strong>Hello</strong></li><li>For underlining use <strong>[u][/u]</strong>, for example:<br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong><br /><br />becomes <span style="text-decoration: underline">Good Morning</span></li><li>To italicise text use <strong>[i][/i]</strong>, e.g.<br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br />would give This is <i>Great!</i></li></ul>'
	),
	array(
		0 => 'How to change the text colour or size',
		1 => 'To alter the colour or size of your text the following tags can be used. Keep in mind that how the output appears will depend on the viewers browser and system: <ul><li>Changing the colour of text is achieved by wrapping it in <strong>[color=][/color]</strong>. You can specify either a recognised colour name (eg. red, blue, yellow, etc.) or the hexadecimal triplet alternative, e.g. #FFFFFF, #000000. For example, to create red text you could use:<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />or<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />Both will output <span style="color:red">Hello!</span></li><li>Changing the text size is achieved in a similar way using <strong>[size=][/size]</strong>. This tag is dependent on the template the user has selected but the recommended format is a numerical value representing the text size in percent, starting at 20 (very small) through to 200 (very large) by default. For example:<br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong><br /><br />will generally be <span style="font-size:30%;">SMALL</span><br /><br />whereas:<br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong><br /><br />will be <span style="font-size:200%;">HUGE!</span></li></ul>'
	),
	array(
		0 => 'Can I combine formatting tags?',
		1 => 'Yes, of course you can, for example to get someones attention you may write:<br /><br /><strong>[size=200][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />this would output <span style="color:red;font-size:200%;"><strong>LOOK AT ME!</strong></span><br /><br />We don’t recommend you output lots of text that looks like this though! Remember it is up to you, the poster, to ensure tags are closed correctly. For example the following is incorrect:<br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Quoting and outputting fixed-width text'
	),
	array(
		0 => 'Quoting text in replies',
		1 => 'There are two ways you can quote text, with a reference or without.<ul><li>When you utilise the Quote function to reply to a post on the board you should notice that the post text is added to the message window enclosed in a <strong>[quote=&quot;&quot;][/quote]</strong> block. This method allows you to quote with a reference to a person or whatever else you choose to put! For example to quote a piece of text Mr. Blobby wrote you would enter:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>The text Mr. Blobby wrote would go here<strong>[/quote]</strong><br /><br />The resulting output will automatically add &quot;Mr. Blobby wrote:&quot; before the actual text. Remember you <strong>must</strong> include the quotation marks &quot;&quot; around the name you are quoting, they are not optional.</li><li>The second method allows you to blindly quote something. To utilise this enclose the text in <strong>[quote][/quote]</strong> tags. When you view the message it will simply show the text within a quotation block.</li></ul>'
	),
	array(
		0 => 'Outputting code or fixed width data',
		1 => 'If you want to output a piece of code or in fact anything that requires a fixed width, e.g. Courier type font you should enclose the text in <strong>[code][/code]</strong> tags, e.g.<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />All formatting used within <strong>[code][/code]</strong> tags is retained when you later view it. PHP syntax highlighting can be enabled using <strong>[code=php][/code]</strong> and is recommended when posting PHP code samples as it improves readability.'
	),
	array(
		0 => '--',
		1 => 'Generating lists'
	),
	array(
		0 => 'Creating an Unordered list',
		1 => 'BBCode supports two types of lists, unordered and ordered. They are essentially the same as their HTML equivalents. An unordered list outputs each item in your list sequentially one after the other indenting each with a bullet character. To create an unordered list you use <strong>[list][/list]</strong> and define each item within the list using <strong>[*]</strong>. For example to list your favourite colours you could use:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />This would generate the following list:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>'
	),
	array(
		0 => 'Creating an Ordered list',
		1 => 'The second type of list, an ordered list, gives you control over what is output before each item. To create an ordered list you use <strong>[list=1][/list]</strong> to create a numbered list or alternatively <strong>[list=a][/list]</strong> for an alphabetical list. As with the unordered list, items are specified using <strong>[*]</strong>. For example:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br />will generate the following:<ol style="list-style-type: arabic-numbers"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>Whereas for an alphabetical list you would use:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Creating Links'
	),
	array(
		0 => 'Linking to another site',
		1 => 'phpBB BBCode supports a number of ways of creating URIs (Uniform Resource Indicators) better known as URLs.<ul><li>The first of these uses the <strong>[url=][/url]</strong> tag, whatever you type after the = sign will cause the contents of that tag to act as a URL. For example to link to phpBB.com you could use:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br />This would generate the following link, <a href="http://www.phpbb.com/">Visit phpBB!</a> Please notice that the link opens in the same window or a new window depending on the users browser preferences.</li><li>If you want the URL itself displayed as the link you can do this by simply using:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />This would generate the following link, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Additionally, phpBB features something called <i>Magic Links</i>, this will turn any syntactically correct URL into a link without you needing to specify any tags or even the leading http://. For example typing www.phpbb.com into your message will automatically lead to <a href="http://www.phpbb.com/">www.phpbb.com</a> being output when you view the message.</li><li>The same thing applies equally to e-mail addresses, you can either specify an address explicitly for example:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />which will output <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> or you can just type no.one@domain.adr into your message and it will be automatically converted when you view.</li></ul>As with all the BBCode tags you can wrap URLs around any of the other tags such as <strong>[img][/img]</strong> (see next entry), <strong>[b][/b]</strong>, etc. As with the formatting tags it is up to you to ensure the correct open and close order is following, for example:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> correct which may lead to your post being deleted so take care.'
	),
	array(
		0 => '--',
		1 => 'Showing images in posts'
	),
	array(
		0 => 'Adding an image to a post',
		1 => 'phpBB BBCode incorporates a tag for including images in your posts. Two very important things to remember when using this tag are: many users do not appreciate lots of images being shown in posts and secondly the image you display must already be available on the internet (it cannot exist only on your computer for example, unless you run a webserver!). To display an image you must surround the URL pointing to the image with <strong>[img][/img]</strong> tags. For example:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />As noted in the URL section above you can wrap an image in a <strong>[url][/url]</strong> tag if you wish, e.g.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />would generate:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Adding attachments into a post',
		1 => 'Attachments can now be placed in any part of a post by using the new <strong>[attachment=][/attachment]</strong> BBCode, if the attachments functionality has been enabled by a board administrator and if you are given the appropriate permissions to create attachments. Within the posting screen is a drop-down box (respectively a button) for placing attachments inline.'
	),
	array(
		0 => '--',
		1 => 'Other matters'
	),
	array(
		0 => 'Can I add my own tags?',
		1 => 'If you are an administrator on this board and have the proper permissions, you can add further BBCodes through the Custom BBCodes section.'
	)
);


$help[] = array("--","Inngangur");
$help[] = array("Hvat er BBKota?", "BBkota er ein serlig tillaging til HTML. Um tú kann bruka BBkotu í tínum innleggum, verur avgjørt av administratorinum.. Har afturat kann tú ógilda BBkotu frá innlegg til innlegg, tá tú skrivar tey. BBkotan sjálv er meinlík HTML; spjøldrini (á Enskum: tags) vera gird við [ og ] heldur enn < og > og tað gevur størri tamarhald á hvat og hvussu okkurt verur víst. Treytað av hvør skapilón verur brúkt, kann tú finna at tað at brúka BBkotu er gjørt sera lætt ígjøgnum átrýstiliga markamóti (á Enskum: interface) uppi yvur kassanum, har ið tú skrivar títt innlegg. Sjálvt við hesum, kann tú tó finna hendan leiðbeinara gagnligan.");

$help[] = array("--","Tekst Útsjónd");
$help[] = array("Hvussu ein ger tekst feitan, skákskrivaðan og undirstrikaðan", "BBkota inniheldur spjøldur ið loyva tær skjótt at broyta grund útsjóndina á tínum teksti. Hetta verur gjørt uppá fylgjandi hættir: <ul><li>Fyri at gera eitt petti av teksti við feitari skrift, girða tað við <b>[b][/b]</b>, til dømis: <br /><br /><b>[b]</b>Halló<b>[/b]</b><br /><br />verur til <b>Halló</b></li><li>Fyri at undirstrika, brúka <b>[u][/u]</b>, til dømis: <br /><br /><b>[u]</b>Góðan Morgun<b>[/u]</b><br /><br />verur <u>Góðan Morgun</u></li><li>Fyri at gera skákskrift, brúka <b>[i][/i]</b>, til dømis: <br /><br />Hetta er <b>[i]</b>Frálíkt!<b>[/i]</b><br /><br />verur til Hetta er <i>Frálíkt!</i></li></ul>");
$help[] = array("Hvussu ein broytur tekst farvu og stødd", "Fyri at broyta farvuna og støddina av tínum teksti kunnu fylgjandi spjøldur vera brúkt. Minst til, at hvussu úrslitið sær út er veldst um hyggjarans kaga (á Enskum: browser) og kervi (á Enskum: System): <ul><li>At broyta farvuna á teksti verur gjørt við at girða hann við <b>[color=][/color]</b>. Tú kann skriva annaðhvørt eina kenda farvu (td. red, blue, yellow, osv.) ella eitt trífalda sekstandatal (á Enskum: hexadecimal), td. #FFFFFF, #000000. Til dømis, fyri at skriva reyðan tekst kann tú brúka:<br /><br /><b>[color=red]</b>Halló!<b>[/color]</b><br /><br />ella<br /><br /><b>[color=#FF0000]</b>Halló!<b>[/color]</b><br /><br />Bæði vera til  <span style=\"color:red\">Halló!</span></li><li>At broyta tekst støddina verur gjørt uppá ein líknandi máta, við at brúka <b>[size=][/size]</b>. Hetta spjøldri er treytað av hvør skapilón ið verur brúkt, men tað verur viðmælt at tú brúkar eitt tal, ið umboðar tekst-støddina í pikslum, byrjandi á 1 (so lítil at tú ikki kann lesa hann) upp til 29 (sera stórur). Til dømis: <br /><br /><b>[size=9]</b>Smátt<b>[/size]</b><br /><br />verur vanliga <span style=\"font-size:9px\">Smátt</span><br /><br />har afturímóti: <br /><br /><b>[size=24]</b>Stórt!<b>[/size]</b><br /><br />verur til <span style=\"font-size:24px\">Stórt!</span></li></ul>");
$help[] = array("Kann eg seta spjøldur saman?", "Ja, sjálvandi kann tú tað; til dømis, fyri at fáa onkran at geva tær gætur, kann tú skriva:<br /><br /><b>[size=18][color=red][b]</b>HYGG AT MÆR!<b>[/b][/color][/size]</b><br /><br />hetta verur til <span style=\"color:red;font-size:18px\"><b>HYGG AT MÆR!</b></span><br /><br />Tó, so viðmæla vit ikki, at tú skrivar nógvan tekst sum hendan! Minst til, at tað er upp til tín, skrivarin, at tryggja tær at øll spjøldur eru endaðið rætt. Til dømis, hetta er galið:<br /><br /><b>[b][u]</b>Hetta er galið<b>[/b][/u]</b><br>");

$help[] = array("--","Sitera og skriva tekst við fastari breidd");
$help[] = array("Sitera tekst í svari", "Tað eru tveir máta at sitera (á Enskum: Quoting) tekst: við eini tilvísing ella uttan.<ul><li>Tá tú brúkar Sitera funkuna (á Enskum: function) til at svara einum innleggi, burdi tú sæð at teksturin í innlegginum er blivin girdur við <b>[quote=\"\"][/quote]</b>. Hesin mátin loyvir tær at sitera við eini tilvísing til ein persón, ella hvat tú so enn ynskir at vísa til. Til dømis, fyri at sitera eitt petti av teksti, ið Hr. Træbjørn skrivaði, skrivar tú:<br /><br /><b>[quote=\"Hr. Træbjørn\"]</b>Teksturin ið Hr. Træbjørn skrivaði skal vera her<b>[/quote]</b><br /><br />Úrslitið leggur automatiskt avtrat: Hr. Træbjørn skrivaði: áðrenn tann veruliga tekstin. Minst til, at tú  <b>má</b> brúka gásareyguni \"\" rundan um navni í tú vísir til - tey eru ikki valfrí.</li><li>Tann seinni mátin loyvir tær at sitera, uttan at vísa til nakran. Fyri at gera tað, girða tekstin við <b>[quote][/quote]</b> spjøldrunum. Tá tú so hyggur at innlegginum, vil tað standa: Sitat: áðrenn sjálvan tekstin.</li></ul>");
$help[] = array("Skriva kotu ella tekst við fastari breidd", "Um tú ynskir at skriva eitt petti av kotu ella eitt hvørt ið krevur ein tekst við fastari breidd við einum Courier-slagi av teksti, burdi tú girt tað við  <b>[code][/code]</b> spjøldrum, t.d.<br><br><b>[code]</b>echo \"Hetta er eitt petti av kotu\";<b>[/code]</b><br /><br />Øll forsniðing (á Enskum: Formatting) ið verur brúkt innan fyri <b>[code][/code]</b> spjøldur er varðveitt, tá tú seinni hyggur at tí.");

$help[] = array("--","Listar");
$help[] = array("Ikki-raðfestur listi", "BBkota stuðlar tveimum sløgum av listum, ikki-raðfestar og raðfestar. Teir eru grundleggjandi líka, sum teir í HTML. Ein ikki-raðfestur listi skrivar hvønn lut í tínum lista fylgjandi, ein fyri og annan eftir, hvønn drignan inn við einum prikki framman fyri. Fyri at gera ein ikki-raðfestan lista, brúka <b>[list][/list]</b> og lýs allar lutirnar í listanum við at brúka <b>[*]</b>. Til dømis, fyri at gera ein lista yvir tínar yndis litir, kann tú brúka:<br /><br /><b>[list]</b><br /><b>[*]</b>Reytt<br /><b>[*]</b>Blátt<br /><b>[*]</b>Gult<br /><b>[/list]</b><br /><br />Hetta vil gera tann fylgjandi listan:<ul><li>Reytt</li><li>Blátt</li><li>Gult</li></ul>");
$help[] = array("Raðfestur listi", "Annað slagið av listum, ein raðfestur listi, gevur tær tamarhald á hvat ið kemur framman fyri hvønn lut. Um tú vil gera ein raðfestan lista skal tú brúka <b>[list=1][/list]</b> fyri ein talmerktan lista, ella <b>[list=a][/list]</b> fyri ein stavraðaðan lista. Sum við ikki-raðfesta listanum eru lutir lýstir við <b>[*]</b>. Til dømis:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Fara til handils<br /><b>[*]</b>Keypa nýggja teldu<br /><b>[*]</b>Banna niður yvur teldu, tá hon krasjar<br /><b>[/list]</b><br /><br />verur til :<ol type=\"1\"><li>Fara til handils</li><li>Keypa eina nýggja teldu</li><li>Banna niður yvur teldu, tá hon krasjar</li></ol>Harafturímóti, til ein stavraðaðan lista hevði tú brúkt:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Fyrsta møguliga svari<br /><b>[*]</b>Næsta møguliga svari<br /><b>[*]</b>Triðja møguliga svari<br /><b>[/list]</b><br /><br />ið gevur<ol type=\"a\"><li>Fyrsta møguliga svari</li><li>Næsta møguliga svari</li><li>Triðja møguliga svari</li></ol>");

$help[] = array("--", "Leinkjur");
$help[] = array("Leinkjur til aðrar síður", "BBkota stuðlar fleiri mátum at gera leinkjur/URL (Uniform Resource Link) uppá.<ul><li>Fyrsti mátin brúkar  <b>[url=][/url]</b> spjøldrið; hvat tú so enn skriva eftir = teknið, fær innihaldið av spjøldrinum at virka sum eina leinkju. Til dømis, fyri at leinkja til Kjak.fo kundi tú brúkt:<br /><br /><b>[url=http://www.kjak.fo/]</b>Vitja Kjak.fo!<b>[/url]</b><br /><br />Hetta hevði gjørt fylgjandi leinkjuna: <a href=\"http://www.kjak.fo/\" target=\"_blank\">Vitja Kjak.fo!</a> Legg til merkis, at leinkjan opnar eitt nýtt vindeyga, so at brúkarin kann halda á fram at kaga runt í foruminum, um hann hevur hug.</li><li>Um tú vil hava sjálvt URL'ið sýnt sum leinkju, kann tú gera tað við at brúka:<br /><br /><b>[url]</b>http://www.kjak.fo/<b>[/url]</b><br /><br />Hetta hevði gjørt fylgjandi leinkjuna: <a href=\"http://www.kjak.fo/\" target=\"_blank\">http://www.kjak.fo/</a></li><li>Har afturat hevur BBkota ein eginleika, summar tíðar kallaður <i>Ganda Leinkjur</i>, ið automatiskt ger ein og hvønn setning, ið inniheldur eitt gildugt URL, um til eina leinkju, uttan at tú noyðist at gera nøkur spjøldur og ikki ein gang hevur skriva http:// fremst. Til dømis, um tú skrivar www.kjak.fo í eitt innlegg, verður tað automatiskt til <a href=\"http://www.kjak.fo/\" target=\"_blank\">www.kjak.fo</a> tá tú hyggur at innlegginum.</li><li>Somuleiðis er við teldupost adressum; tú kann annað hvørt skriva eina teldupost adressu skilliga, sum:<br /><br /><b>[email]</b>ongin@navn.fo<b>[/email]</b><br /><br /> ið verur til <a href=\"mailto:ongin@navn.fo\">ongin@navn.fo</a> ella tú kann bara skriva ongin@navn.fo í títt innlegg, og tað verur automatiskt umskapa, tá tú hyggur.</li></ul>Sum við øllum BBkotu spjøldrunum, kann tú seta eitt URL rundan um øll hini spjøldrini, so sum <b>[img][/img]</b> (sí næstu skráseting), <b>[b][/b]</b>, osv. Líka sum við forsniðingar spjøldrunum (á Enskum: formatting tags), er tað upp til tín at tryggja tær at øll spjøldrini eru byrja og enda rætt. Til dømis:<br /><br /><b>[url=http://www.kjak.fo/][img]</b>http://www.kjak.fo/myndir/kjakfo.gif<b>[/url][/img]</b><br /><br />er <u>ikki</u> rætt  og kann føra við sær at innleggi verur sletta, so ver varin.");

$help[] = array("--", "Myndir");
$help[] = array("Myndir í innleggum", "BBkota fevnir um møguleikan at vísa myndir í tínum innleggum. Tvey sera umráðandi ting at minnast til, tá tú brúkar hetta spjøldur, eru: nógvir brúkarar viðurkenna ikki brúk av nógvum myndum í innleggum (leingi at taka niður við uppringdum sambandi), og næst, myndin tú vil vísa fram má liggja tøk á alnótini (á Enskum: Internet)  (hon kann til dømis ikki liggja á tíni teldu, uttan so at tú hevur eitt web hotell!). Sum er er tað ongin møguleiki at goyma myndir her á foruminum. Fyri at vísa eina mynd má tú girða URL'ið, ið peikar á myndina, við <b>[img][/img]</b> tags. Til dømis: <br /><br /><b>[img]</b>http://www.kjak.fo/myndir/kjakfo.gif<b>[/img]</b><br /><br />Sum tú sá í <i>Leinkjur</i> partinum uppi yvur, so kann tú girða ein mynd inni í einum  <b>[url][/url]</b> spjaldri um tú vil. Til dømis<br /><br /><b>[url=http://www.kjak.fo/][img]</b>http://www.kjak.fo/myndir/kjakfo.jpg<b>[/img][/url]</b><br /><br />verur til:<br /><br /><a href=\"http://www.kjak.fo/\" target=\"_blank\"><img src=\"http://www.kjak.fo/myndir/kjakfo.jpg\" border=\"0\" alt=\"\" /></a><br />");
?>