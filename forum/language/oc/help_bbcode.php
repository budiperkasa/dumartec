<?php
/** 
*
* help_bbcode [Occitan]
*
* @package language
* @version $Id : help_bbcode.php,v 1.27 2007/10/04 15 :07 :24 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
// 'Pagina %s of %s' you can (and should) write 'Pagina %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Messatge %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Introduccion'
	),
	array(
		0 => 'Lo BBCode, qu\'es aquò ?',
		1 => 'Lo BBCode es una implémentation spéciale del HTML. L\'administrator détermine se lo BBCode pòt èsser utilizat dins vòstres messatges sul forum. Podètz desactivar lo BBCode dins certains messatges via lo formulari de rédaction de messatge. Lo BBCode ressemble al HTML, los balises son entre crochets [ e ] al lieu de &lt; e &gt;, e offre una meilleure maîtrise de l\'affichage del contengut. Selon lo thème utilizat, podètz tanben apondre los BBCodes en cliquant dins l\'interface al-dessus del formulari de rédaction de messatge. Même amb cela, aqueste guide pòt vos èsser utile.'
	),
	array(
		0 => '--',
		1 => 'Mesa en forma del tèxt'
	),
	array(
		0 => 'Comment utilizar lo gras, l\'italique e lo souligné',
		1 => 'Lo BBCode permet de modificar rapidement la forme del tèxt grâce als méthodes suivantes:<ul><li>Encadrez lo tèxt entre <strong>[b][/b]</strong> per botar en gras, exemple:<br /><br /><strong>[b]</strong>Salut<strong>[/b]</strong><br /><br />devient <strong>Salut</strong></li><li>Utilizatz <strong>[u][/u]</strong> per souligner, exemple:<br /><br /><strong>[u]</strong>Bonjorn<strong>[/u]</strong><br /><br />devient <span estil="text-decoration : underline">Bonjorn</span></li><li>Utilizatz <strong>[i][/i]</strong> per l\'italique, exemple:<br /><br />Es <strong>[i]</strong>génial!<strong>[/i]</strong><br /><br />donne Es <em>génial!</em></li></ul>'
	),
	array(
		0 => 'Cambiar la color e la talha del tèxt',
		1 => 'Per modificar la color o la talha de vòstre tèxt, podètz utilizar los balises suivantes. Gardez a l\'esprit que la façon dont vòstre messatge s\'affichera dépendra del navigateur e del sistèma:<ul><li>Podètz cambiar la color d\'un tèxt en l\'encadrant entre los balises <strong>[color=][/color]</strong>. Podètz especificar un nom de color connu (coma : red, blue, yellow, etc.) o bien indicar un còdi hexadécimal, c.-a-d. #FFFFFF, #000000. Par exemple, per del tèxt rouge:<br /><br /><strong>[color=red]</strong>Salut!<strong>[/color]</strong><br /><br />o<br /><br /><strong>[color=#FF0000]</strong>Salut!<strong>[/color]</strong><br /><br />afficheront totes los deux <span estil="color :red">Salut!</span></li><li>Podètz cambiar la talha del tèxt de façon analogue amb los balises <strong>[size=][/size]</strong>. Aquesta balise dépend del thème utilizat mas lo format recommandé es una valeur numérique représentant la nautor del tèxt en pourcentage, a partir de 20 (tellement petit que vos ne pourrez pas lo veire) jusqu\'a 200 (très grand). Par exemple:<br /><br /><strong>[size=30]</strong>PETIT<strong>[/size]</strong><br /><br />serà affiché <span estil="font-size :30%;">PETIT</span><br /><br />alors que<br /><br /><strong>[size=200]</strong>ENORME!<strong>[/size]</strong><br /><br />donnera <span estil="font-size :200%;">ENORME!</span></li></ul>'
	),
	array(
		0 => 'Pòdi combinar de balisas ?',
		1 => 'Òc, bien évidemment, podètz écrire per attirer l\'attention:<br /><br /><strong>[size=200][color=red][b]</strong>REGARDEZ-MOI!<strong>[/b][/color][/size]</strong><br /><br />aqueste qui donne <span estil="color :red;font-size :200%;"><strong>REGARDEZ-MOI!</strong></span><br /><br />Attention toutefois a ne pas en abuser! Retenez aussi que es a vos, l\'auteur, de vos assurer que los balises son correctement fermées. Par exemple, ceci es incorrècte:<br /><br /><strong>[b][u]</strong>Es faux!<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citacions e tèxtes d\'espaçament fix'
	),
	array(
		0 => 'Citer de tèxt dins los responsas',
		1 => 'I a deux manières de citer un tèxt, amb o sens référence.<ul><li>Lorsque utilizatz la foncion de citation per respondre a un messatge sul forum, podètz noter que lo tèxt del messatge es apondut a l\'intérieur d\'un bloc <strong>[quote=&quot;&quot;][/quote]</strong>. Aquesta metòde vos permet de citer amb una référence a una personne o toute autre référence! Par exemple, per citer un tèxt de M. Goutte, vos mettrez:<br /><br /><strong>[quote=&quot;M. Goutte&quot;]</strong>Lo tèxt de M. Goutte ira aicí<strong>[/quote]</strong><br /><br /><em>M. Goutte a écrit:</em> serà apondut automaticament abans lo tèxt. Souvenez-vos que vos <strong>devez</strong> encadrer entre &quot;&quot; lo nom a citer, aqueste n\'es pas optionnel.</li><li>La deuxième metòde vos permet de far dels citations en aveugle. Per l\'utilizar, encadrez lo tèxt amb los balises <strong>[quote][/quote]</strong>. Lorsque vos consulterez lo messatge, cela affichera, en foncion del thème utilizat, <em>Citacion:</em> abans lo tèxt lui-meteissa.</li></ul>'
	),
	array(
		0 => 'Visualizar del còdi o dels données d\'espaçament fix',
		1 => 'Se volètz insérer del còdi o quoi que aqueste siá qui nécessite una poliça a largor fix, per exemple : una poliça de type Courier, encadrez vòstre tèxt entre los balises <strong>[còdi][/còdi]</strong>:<br /><br /><strong>[còdi]</strong>echo &quot;Un peu de còdi&quot;;<strong>[/còdi]</strong><br /><br />Lo format utilizat entre los balises <strong>[còdi][/còdi]</strong> es enregistrat per una consultation ultérieure. La sintaxi PHP pòt èsser mise en valeur en utilizant <strong>[còdi=php][/còdi]</strong> e es recommandé quand dels extraits de còdi PHP son publiés afin d\'en améliorer la lisibilité.'
	),
	array(
		0 => '--',
		1 => 'Generacion de tièras'
	),
	array(
		0 => 'Creacion d\'una tièra pas ordenada',
		1 => 'Lo BBCode gère deux types de tièras : ordonnées o non. Elles son los meteisses que leur équivalent HTML. Una tièra non ordenada affiche chaque élément de la tièra séquentiellement l\'un après l\'autre, chacun indenté per una puce. Utilizatz <strong>[list][/list]</strong> per créer una tièra non ordenada e définissez chaque élément amb <strong>[*]</strong>. Par exemple, per la tièra de vòstres colors préférées, utilizatz:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Roge<br /><strong>[*]</strong>Bleu<br /><strong>[*]</strong>Jaune<br /><strong>[/list]</strong><br /><br />Aqueste qui générera la tièra seguenta:<ul><li>Roge</li><li>Bleu</li><li>Jaune</li></ul>'
	),
	array(
		0 => 'Creacion d\'una tièra ordenada',
		1 => 'Lo deuxième type de tièra, la tièra ordenada, vos permet de décider d\'aqueste qui s\'affiche abans chaque élément. Utilizatz <strong>[list=1][/list]</strong> per créer una tièra ordenada numérotée o <strong>[list=a][/list]</strong> per una tièra alphabétique. Comme per los tièras non ordonnées, los éléments son indicats amb <strong>[*]</strong>. Par exemple:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Faire los courses<br /><strong>[*]</strong>Acheter un nouvel ordenador<br /><strong>[*]</strong>Jurer quand lo PC plante<br /><strong>[/list]</strong><br /><br />affichera<ol estil="list-estil-type : arabic-numbers"><li>Faire los courses</li><li>Acheter un nouvel ordenador</li><li>Jurer quand lo PC plante</li></ol>Alors que per una tièra alphabétique, vos utiliserez:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Responsa 1<br /><strong>[*]</strong>Responsa 2<br /><strong>[*]</strong>Responsa 3<br /><strong>[/list]</strong><br /><br />e vos obtiendrez<ol estil="list-estil-type : lower-alpha"><li>Responsa 1</li><li>Responsa 2</li><li>Responsa 3</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Creacion de ligams'
	),
	array(
		0 => 'Liens cap a un autre sit',
		1 => 'Lo BBCode permet de créer dels URI (Indicateurs de Ressources Uniformes) o URL de différentes façons.<ul><li>La première es d\'utilizar los balises <strong>[url=][/url]</strong>, aqueste que vos taperez après lo signe = se comportera coma una URL. Par exemple, per un ligam cap a phpBB-fr.com, podètz utilizar:<br /><br /><strong>[url=http://forums.phpbb-fr.com/]</strong>Visitez phpBB!<strong>[/url]</strong><br /><br />Aqueste qui générera lo ligam, <a href="http://forums.phpbb-fr.com/" target="_blank">Visitez phpBB!</a> Vous noterez que lo ligam s\'ouvre siá dins la meteissa fenèstra, siá dins una nouvelle fenèstra selon las preferéncias del navigateur.</li> <li>Se volètz que l\'URL elle-meteissa siá affichée coma un ligam, podètz simplement utilizar:<br /><br /><strong>[url]</strong>http://forums.phpbb-fr.com/<strong>[/url]</strong><br /><br />Aqueste qui générera lo ligam, <a href="http://forums.phpbb-fr.com/" target="_blank">http://forums.phpbb-fr.com/</a></li><li>De plus, phpBB autorise los <em>Liens Magiques</em>, aqueste qui transforme automaticament los URL correctement écrites en ligam sens especificar de balise o meteissa http://. Par exemple, se vos tapez forums.phpbb-fr.com, un ligam <a href="http://forums.phpbb-fr.com/" target="_blank">forums.phpbb-fr.com</a> serà affiché automaticament a la lecture de vòstre messatge.</li><li>La meteissa chose s\'applique als adreças corrièls, podètz especificar l\'adreça explicitement, coma per exemple:<br /><br /><strong>[corrièl]</strong>personne@domain.adr<strong>[/corrièl]</strong><br /><br />aqueste qui affichera <a href="mailto :personne@domain.adr">personne@domain.adr</a> o bien podètz simplement taper personne@domain.adr dins vòstre messatge e cela serà automaticament converti lors de la consultation.</li></ul>Comme amb toutes los balises BBCode, podètz encapsuler amb dels URL d\'autres balises telles que <strong>[img][/img]</strong> (veire l\'dintrada seguenta), <strong>[b][/b]</strong>, etc. Comme amb los balises de mise en forme, es a vos de vos assurer de los ouvrir e de los fermer correctement, per exemple:<br /><br /><strong>[url=http://forums.phpbb-fr.com/][img]</strong>http://forums.phpbb-fr.com/imatges/phplogo.gif<strong>[/url][/img]</strong><br /><br />n\'es <span estil="text-decoration : underline">pas</span> correct aqueste que pòt entraîner la suppression de vòstre messatge, donc faites attention.'
	),
	array(
		0 => '--',
		1 => 'Visualizar dels imatges dins los messatges'
	),
	array(
		0 => 'Ajout d\'una imatge dins un messatge',
		1 => 'Lo BBCode permet d\'inclure dels imatges dins vòstres messatges a l\'aide d\'una balise. I a deux choses importantes a se rappeler lors de l\'utilisation de aquesta balise qui son d\'una part, que beaucoup d\'utilizaires n\'apprécient pas qu\'il y ait beaucoup d\'imatges dins los messatges e d\'autre part, que l\'imatge affichée deu èsser disponible sus Internet (elle ne pòt èsser sonque que sus vòstre ordenador, sauf se avètz un servidor web!). Per visualizar una imatge, vos devez encadrer son URL entre dels balises <strong>[img][/img]</strong>. Par exemple:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/imatges/logo.gif<strong>[/img]</strong><br /><br />Comme noté dins la section URL çai-sus, podètz entourer l\'imatge entre dels balises <strong>[url][/url]</strong> se désiré, exemple:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/imatges/logo.gif<strong>[/img][/url]</strong><br /><br />affichera<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/imatges/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Joindre un fichièr a un messatge',
		1 => 'Los fichièrs pòdon maintenant èsser junts a n\'importe quel endroit del messatge en utilizant lo BBcode <strong>[attachment=][/attachment]</strong>, se l\'administrator a activat aquesta foncionalitat e se vos en avez la permission. Dins l\'ecran de rédaction de messatge, vos trouverez un menut déroulant (respectivement un boton) per joindre vòstres fichièrs en linha.'
	),
	array(
		0 => '--',
		1 => 'Autres questions'
	),
	array(
		0 => 'Puis-je apondre los mieus balises ?',
		1 => 'Se vos êtes administrator del forum e avez los autorisations nécessaires, podètz apondre dels BBcodes supplémentaires via la section &quot;BBcodes&quot; dins lo sous menut &quot;Messatges&quot;.'
	)
);

 ?>
