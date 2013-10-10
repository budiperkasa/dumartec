<?php
/**
*
* help_bbcode [Catalan (Valencian)]
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
		1 => 'Introducció'
	),
	array(
		0 => 'Què és BBCode?',
		1 => 'BBCode és una implementació especial de l\'HTML. Si podeu o no utilitzar BBCode al fòrum depèn de l\'administrador. A més, podeu deshabilitar el BBCode a través del formulari de publicació cada cop que envieu un missatge. El BBCode és similar a l\'HTML, els marcadors van entre claudàtors [ i ] i ofereix un major control sobre què es mostra. Depenent de la plantilla que feu servir, veureu que afegir BBCode als vostres missatges és molt fàcil gràcies a la interfície situada a sobre de l\'àrea que conté el missatge al formulari de publicació. Tot i això, segurament trobareu útil la següent guia.'
	),
	array(
		0 => '--',
		1 => 'Formatació de text'
	),
	array(
		0 => 'Com crear text en negreta, cursiva o subratllat?',
		1 => 'BBCode inclou marcadors que et permeten canviar ràpidament l\'estil bàsic del text. Això s\'aconsegueix de les següents maneres:. <ul><li>Per fer que un fragment de text es veja en negreta fiqueu-lo entre <strong>[b][/b]</strong>, ex. <br /><br /><strong>[b]</strong>Hola<strong>[/b]</strong><br /><br />canvia a <strong>Hola</strong></li><li>Per subratllar utilitzeu <strong>[u][/u]</strong>, ex:<br /><br /><strong>[u]</strong>Bon dia<strong>[/u]</strong><br /><br />canvia a <span style="text-decoration: underline">Bon dia</span></li><li>Per cursiva utilitzeu <strong>[i][/i]</strong>, ex.<br /><br />Això és <strong>[i]</strong>Genial!<strong>[/i]</strong><br /><br />serà Això és <i>Genial!</i></li></ul>'
	),
	array(
		0 => 'Canviar el color o la mida del text',
		1 => 'Per canviar el color i la mida es poden utilitzar els següents marcadors. Tingueu en compte que la manera com apareix el text depèn del navegador i del sistema de l\'usuari: <ul><li>Per canviar el color del text cal ficar-lo entre <strong>[color=][/color]</strong>. Podeu especificar un nom de color reconegut (ex. red, blue, yellow, etc.) o l\'alternativa del triplet hexadecimal, ex. #FFFFFF, #000000. Per exemple, per crear text roig podeu utilitzar::<br /><br /><strong>[color=red]</strong>Hola!<strong>[/color]</strong><br /><br />o<br /><br /><strong>[color=#FF0000]</strong>Hola!<strong>[/color]</strong><br /><br />que donarà com a resultat <span style="color:red">Hola!</span></li><li>Canviar la mida del text s\'aconsegueix de manera similar utilitzant <strong>[size=][/size]</strong>. Aquest marcador dependrà de la plantilla que estigueu utilitzant però el format recomanat és un valor numèric que representa la mida del text en píxels, començant per l\'1 (tan xicotet que ni el veureu) fins al 29 (enorme). Per exemple:<br /><br /><strong>[size=30]</strong>XICOTETA<strong>[/size]</strong><br /><br />esdevindrà <span style="font-size:30%;">XICOTETA</span><br /><br />mentre que:<br /><br /><strong>[size=200]</strong>GRAN!<strong>[/size]</strong><br /><br />esdevindrà <span style="font-size:200%;">GRAN!</span></li></ul>'
	),
	array(
		0 => 'Es pot combinar marcadors de formatació?',
		1 => 'Clar que podeu, per exemple, per captar l\'atenció d\'algú podeu escriure:<br /><br /><strong>[size=150][color=red][b]</strong>MIRA\'M!<strong>[/b][/color][/size]</strong><br /><br />donarà la següent eixida <span style="color:red;font-size:250%;"><strong>MIRA\'M!</strong></span><br /><br />Us recomanem, però, que no escrigueu molts texts amb aquest aspecte! Recordeu que és cosa vostra assegurar-vos que els marcadors es tanquen correctament. Per exemple, la següent línia és incorrecta:
<br /><br /><strong>[b][u]</strong>Això no és correcte<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citar text i mostrar codi tabulat'
	),
	array(
		0 => 'Citar un text en una resposta',
		1 => 'Hi ha dues formes de citar un text, amb una referència o sense.<ul><li>Quan utilitzeu la funció Citar per respondre a un missatge del fòrum, adone-vos que el missatge s\'afegeix a la finestra de missatge dintre d\'un bloc <strong>[quote=&quot;&quot;][/quote]</strong>. Aquest mètode us permet escriure cites amb una referència a una persona o a qualsevol cosa que decidiu posar! Per exemple, per citar un fragment de text escrit per Mr Blobby hauríeu d\'escriure:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>El text escrit per Mr. Blobby aniria ací<strong>[/quote]</strong><br /><br />El missatge resultant afegirà automàticament, Mr. Blobby escrigué: abans del text del vostre missatge. Recordeu que <strong>heu d\'incloure</strong> les cometes " " envoltant el nom de la persona que esteu citant, no són opcionals.</li><li>El segon mètode permet citar qualsevol cosa sense cap referència. Per fer-ho envolteu el text amb els marcadors <strong>[quote][/quote]</strong>. Quan vegeu el missatge, simplement mostrarà Cita: abans del text pròpiament dit.</li></ul>'
	),
	array(
		0 => 'Escriure codi o dades tabulades',
		1 => 'Si voleu escriure un fragment de codi o, de fet, qualsevol cosa que requerisca una amplada fixa, ex. font del tipus Courier, hauríeu de col·locar el text entre els marcadors <strong>[code][/code]</strong>, ex.<br /><br /><strong>[code]</strong>echo "Això és un fragment de codi";<strong>[/code]</strong><br /><br />Tota la formatació utilitzada dintre dels marcadors <strong>[code][/code]</strong> es conserva quan es visualitza després. La sintaxi PHP es pot activar fent servir <strong>[code=php][/code]</strong>.'
	),
	array(
		0 => '--',
		1 => 'Generar Llistes'
	),
	array(
		0 => 'Crear una llista desordenada',
		1 => 'BBCode suporta dos tipus de llistes, desordenades i ordenades. Fonamentalment són el mateix que els seus equivalents HTML. Una llista desordenada mostra cada element de la vostra llista seqüencialment, un després de l\'altre, amb sagnia i un determinat caràcter. Per crear una llista desordenada utilitzeu <strong>[list][/list]</strong> i cada element de la llista es definiex utilitzant <strong>[*]</strong>. Per exemple, per llistar els vostres colors preferits podeu utilitzar:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Roig<br /><strong>[*]</strong>Blau<br /><strong>[*]</strong>Groc<br /><strong>[/list]</strong><br /><br />Es generarà la següent llista:<ul><li>Roig</li><li>Blau</li><li>Groc</li></ul>'
	),
	array(
		0 => 'Crear una llista ordenada',
		1 => 'El segon tipus de llista, una llista ordenada, dóna control sobre què es mostra abans de cada element. Per crear una llista ordenada utilitzeu <strong>[list=1][/list]</strong> per crear una llista numerada o, alternativament, <strong>[list=a][/list]</strong> per una llista alfabètica. De la mateixa manera que amb les llistes desordenades, els elements s\'especifiquen utilitzant  <strong>[*]</strong>. Per exemple:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Anar a la tenda<br /><strong>[*]</strong>Comprar un nou ordinador<br /><strong>[*]</strong>Maleir l\'ordinador quan es penje<br /><strong>[/list]</strong><br /><br />generarà:<ol style="list-style-type: arabic-numbers"><li>Anar a la tenda</li><li>Comprar un ordinadr</li><li>Maleir l\'ordinador quan es penje</li></ol>Mentre que per una llista alfabètica hauríeu d\'utilitzar:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Primera resposta<br /><strong>[*]</strong>Segona resposta<br /><strong>[*]</strong>Tercera resposta<br /><strong>[/list]</strong><br /><br />esdevindrà<ol style="list-style-type: lower-alpha"><li>Primera resposta</li><li>Segona resposta</li><li>Tercera resposta</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Crear Enllaços'
	),
	array(
		0 => 'Crear un enllaç a una altra pàgina web',
		1 => 'phpBB BBCode suporta diverses maneres de crear URLs.<ul><li>La primera utilitza el marcador <strong>[url=][/url]</strong>, qualsevol cosa que escrigueu després del signe = farà que el contingut d\'aquest marcador actue com una URL. Per exemple per ficar un enllaç a phpBB.com podríeu utilitzar:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visiteu phpBB!<strong>[/url]</strong><br /><br />Generarà el següent enllaç, <a href="http://www.phpbb.com/">Visiteu phpBB!</a> Us adonareu que l\'enllaç s\'obre en una finestra nova per tal que els usuaris puguen continuar navegant pels fòrums si així ho desitge.</li><li>Si voleu que la URL mateixa es mostre com un enllaç podeu fer-ho simplement utilitzant:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Això generarà, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>A més, phpBB permet una cosa anomenada <i>Magic Links</i>, que fan que qualsevol URL sintàcticament correcta es convertisca en un enllaç sense necessitat d\'especificar cap marcador ni l\'entrada http://. Per exemple, escriure www.phpbb.com en el vostre missatge farà automàticament que <a href="http://www.phpbb.com/">www.phpbb.com</a> es mostre en el vostre missatge.</li><li>Amb les adreces electròniques el procediment és el mateix, podeu especificar una adreça de manera explícita, per exemple:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />donarà com a resultat <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> o podeu escriure no.one@domain.adr en el vostre missatge i serà convertit automàticament.</li></ul>Com amb tots els marcadors BBCode, podeu modificar les URLs amb qualsevol dels altres marcadors com <strong>[img][/img]</strong> (mireu el següent punt), <strong>[b][/b]</strong>, etc. De la mateixa manera que amb els marcadors de formatació, és la vostra responsabilitat assegurar-vos que aquests s\'obren i es tanquen correctament, per exemple:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">no</span> és correcte, la qual cosa podria portar a que el vostre missatge siga esborrat, és a dir, aneu amb cura.'
	),
	array(
		0 => '--',
		1 => 'Mostrar imatges en els missatges'
	),
	array(
		0 => 'Afegir una imatge a un missatge',
		1 => 'phpBB BBCode incorpora un marcador per incloure imatges als vostres missatges. Dues coses molt importants que cal recordar quan s\'utilitzen marcadors són les següents: a molts usuaris no els agrada que els missatges mostren munts d\'imatges i, segon, la imatge que mostreu ha d\'estar disponible a internet (no pot existir només al vostre ordinador per exemple, a no ser que siga un servidor web!). Per mostrar una imatge hue d\'envoltar l\'URL que indica l\'adreça de la imatge amb els marcadors <strong>[img][/img]</strong>. Per exemple:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Com s\'ha explicat en la secció anterior podeu ficar una imatge dintre un marcador <strong>[url][/url]</strong> si ho desitgeu, ex.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />generaria:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Afegir fitxers adjunts en els missatges',
		1 => 'A la versió 3.0 de phpBB, els adjunts poden formar part del missatge fent servir el BBCode <strong>[attachment=][/attachment]</strong>, en cas de que aquesta opció haja estat activada per l\'administrador &amp; i també en cas de que tingueu els permisos que calguen.'
	),
	array(
		0 => '--',
		1 => 'Altres'
	),
	array(
		0 => 'Es poden afegir marcadors personals?',
		1 => 'Si sou administradors i teniu els permisos necessaris, sí.'
	)
);

?>
