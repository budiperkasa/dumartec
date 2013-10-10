<?php
/**
*
* help_faq [Occitan]
*
* @package language
* @version $Id : help_faq.php,v 1.41 2007/08/19 14 :08 :26 naderman Exp $
* @copyright (c) 2007 phpBB Group
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
		1 => 'Problèmes d\'identification e d\'inscripcion'
	),
	array(
		0 => 'Pourquoi ne puis-je pas me connectar ?',
		1 => 'Plusieurs rasons pòdon expliquer cela. Premièrement, vérifiez que vòstres nom d\'utilizaire e mot de pas son corrects. S\'ils lo son, contactatz l\'administrator per verificar que vos n\'avez pas été banni. Il es possible aussi que l\'administrator ait una error de configuration de son côté, e qu\'il siá necessari de la corriger.'
	),
	array(
		0 => 'Pourquoi dois-je m\'inscrire après tout ?',
		1 => 'Podètz ne pas en aver besoin mas l\'administrator pòt décider se vos devez vos inscrire per enviar dels messatges. Par aillors, l\'inscripcion vos permet de bénéficier de fonctionnalités supplémentaires inaccessibles als visiteurs coma los avatars personalizats, la messagerie privada, l\'envoi d\'corrièls als autres sòcis, l\'adhésion a dels grops, etc. L\'inscripcion es rapide e vivement conseillée.'
	),
	array(
		0 => 'Pourquoi suis-je automaticament déconnecté ?',
		1 => 'Se vos ne cochez pas la case <em>Me connectar automaticament a chaque visite</em> lors de vòstre connexion, vos ne resterez connectat que pendant una durada déterminée. Cela empêche l\'utilisation abusive de vòstre compte. Per rester connectat, cochez aquesta case lors de la connexion. Aqueste n\'es pas recommandé se utilizatz un ordenador public per acceder al forum (bibliothèque, cybercafé, université, etc.). Se vos ne voyez pas aquesta case, cela signifie que l\'administrator a desactivat aquesta foncionalitat.'
	),
	array(
		0 => 'Comment empachar mon nom d\'apparaître dins la tièra dels utilizaires connectés ?',
		1 => 'Vous trouverez dins vòstre panèl de l\'utilizaire, onglet "Préférences del forum", l\'option <em>Amagar mon statut en linha</em>. Mettez aquesta option sus <samp>Òc</samp> ainsi seuls los administrators, los moderaires e vos verrez vòstre nom dins la tièra. Vous serez compté parmi los utilizaires invisibles.'
	),
	array(
		0 => 'J\'ai perdu mon mot de pas!',
		1 => 'Pas de panique! Bien que vòstre mot de pas ne puisse pas èsser récupéré, il pòt toutefois èsser réinitialisé. Per aquò, sus la pagina de connexion, clicatz sus <em>Ai doblidat mon mot de pas</em>. Seguissètz los instructions e vos devriez pouvoir a nouveau vos connectar.'
	),
	array(
		0 => 'Je suis enregistrat mas je ne peux pas me connectar!',
		1 => 'Verificatz, en premier, vòstres nom d\'utilizaire e mot de pas. S\'ils son corrects, i a deux possibilités. Se la gestion COPPA es active e se avètz indicat aver mens de 13 ans lors de l\'inscripcion, vos devrez alors suivre los instructions reçues. Certains forums nécessitent que toute nouvelle inscripcion siá activada per vos-meteissa o per l\'administrator abans que poscatz vos connectar. Aquesta information es indicada lors de l\'inscripcion. Se avètz recebut un corrièl, suivez ses instructions. Se vos n\'avez pas recebut d\'corrièl, il se pòt que vos ayez fourni una adreça incorrecte o que lo corrièl ait été traité per un filtre anti-spam. Se vos êtes sûr de l\'adreça electronica fournie, contactatz l\'administrator.'
	),
	array(
		0 => 'Je me suis enregistrat pel passé mas je ne peux plus me connectar ?!',
		1 => 'Commencez per verificar vòstres nom d\'utilizaire e mot de pas dins lo corrièl recebut lors de vòstra inscripcion e tornatz ensajar. Il es possible aussi que l\'administrator ait suprimit o desactivat vòstre compte. En effet, il es courant de suprimir régulièrement los utilizaires ne postant pas per réduire la talha de la basa de donadas. Se cela vos arrive, tentez de vos réinscrire e soyez plus investi dins lo forum.'
	),
	array(
		0 => 'Que signifie COPPA ?',
		1 => 'COPPA (o <em>Child Online Privacy and Protection Act</em> de 1998) es una loi als Etats-Unis qui dit que los sites Internet pouvant recueillir dels entresenhas de mineurs de mens de 13 ans debon obtenir lo consentement <strong>écrit</strong> dels parents (o d\'un tuteur légal) per la collecte d\'aquestes entresenhas permettant d\'identifier un mineur de mens de 13 ans. Se vos n\'êtes pas sûr que cela s\'applique a vos, quand vos vos inscrivez, o al sit Internet auquel vos tentez de vos inscrire, demandez una assistance légale. Notatz que l\'équipe del forum pòt pas fournir de conseil légal e ne saurait èsser contactée per dels questions légales de toute sorte, a l\'exception de celles soulignées çai-jos.',
	),
	array(
		0 => 'Pourquoi ne puis-je pas m\'inscrire ?',
		1 => 'Il es possible que lo propriétaire del sit ait banni vòstre IP o interdit lo nom d\'utilizaire que vos souhaitez utilizar. Lo propriétaire del sit pòt tanben aver desactivat l\'inscripcion per en empachar de nouvelles. Contactatz l\'administrator per plus de renseignements.',
	),
	array(
		0 => 'A quoi sert "Supprimer los cookies del forum" ?',
		1 => 'Cela supprime totes los cookies créés per phpBB3 qui conservent vòstre identification e vòstre connexion al forum. Ils fournissent aussi dels fonctionnalités telles que l\'enregistrement del statut dels messatges, lu o non-lu, se cela es estat activat per l\'administrator. S'avètz dels problemas de connexion/déconnexion, la suppression dels cookies pòt los corriger.',
	),
	array(
		0 => '--',
		1 => 'Preferéncias e réglages de l\'utilizaire'
	),
	array(
		0 => 'Comment modificar los mieus réglages ?',
		1 => 'Totes vòstres réglages (se vos êtes inscrit) son enregistrats dins nòstra basa de donadas. Per los modificar, visitez lo ligam <em>Panèl de l\'utilizaire</em> (généralement affiché en haut de toutes los paginas del forum). Cela vos permettra de modificar totes vòstres réglages e preferéncias.'
	),
	array(
		0 => 'Los oras son pas correctes!',
		1 => 'Il es possible que l\'ora affichée siá sus un fuseau horaire different de celui dins lequel vos êtes. Dins aqueste cas, vos devez modificar vòstres preferéncias pel fuseau horaire de vòstre zone (Londres, Paris, New York, Sydney, etc.) dins lo panèl de l\'utilizaire. Notatz que la modificacion del fuseau horaire, coma la plupart dels réglages n\'es accessible qu\'als utilizaires enregistrats. Donc se vos n\'êtes pas inscrit, es lo bon moment pel far.'
	),
	array(
		0 => 'J\'ai changé mon fuseau horaire e l\'ora es encara incorrecte!',
		1 => 'Se vos êtes sûr d\'aver correctement paramétré vòstre fuseau horaire e l\'ora d\'estiu, il se pòt que lo servidor ne siá pas a l\'ora. Signalez aqueste problème a l\'administrator.'
	),
	array(
		0 => 'Ma langue n\'es pas dins la tièra!',
		1 => 'La rason la plus probable es que l\'administrator n\'a pas installat vòstre langue o bien que personne n\'a encara traduit phpBB3 dins vòstre langue. Essayez de demander a l\'administrator d\'installer la langue désirée. Se elle existís pas, vos êtes alors libre de créer una nouvelle traduction. Vous trouverez plus d\'entresenhas sul sit del grop phpBB (veire lo ligam en bas de pagina).'
	),
	array(
		0 => 'Comment visualizar una imatge sous mon nom ?',
		1 => 'Il pòt y aver deux imatges sous chaque nom d\'utilizaire sus la pagina de consultation dels messatges. La première es associée a vòstre rang, généralement dels étoiles o dels blocs indiquant vòstre nombre de messatges o vòstre statut sul forum. La seconde, una imatge plus grande, connue sous lo nom d\'avatar es généralement unique e personnelle a chaque utilizaire. Es a l\'administrator d\'activar los avatars e de décider de la manière dont ils son mes a disposition. Se podètz pas utilizar d\'avatar, es benlèu una décision de l\'administrator. Podètz lo contacter per lui demander ses rasons.'
	),
	array(
		0 => 'Qu\'es-aqueste que mon rang e comment lo modificar ?',
		1 => 'Los rangs qui apparaissent sous lo nom d\'utilizaire indiquent lo nombre de messatges postés o identifient certains utilizaires tels que los moderaires e administrators. En général, podètz pas directement modificar l\'intitulé d\'un rang per çò que il es paramétré per l\'administrator. Se vos abusez dels forums en postant dels messatges dins lo seul but d\'augmenter vòstre rang, un moderaire o un administrator pòt rabaisser vòstre compteur de messatges.'
	),
	array(
		0 => 'Lorsque je clique sul ligam <em>corrièl</em> d\'un utilizaire, on me demanda de me connectar ?',
		1 => 'Seuls los utilizaires enregistrats pòdon s\'enviar dels corrièls via lo formulari intégré (se la foncion es estat activada per l\'administrator). Ceci per empachar un usage abusif de la foncionalitat per los convidats.'
	),
	array(
		0 => '--',
		1 => 'Problèmes liés als envois de messatges'
	),
	array(
		0 => 'Comment enviar dins un forum ?',
		1 => 'Clicatz sul boton adéquat (Nouveau o Respondre) sus la pagina del forum o dels tèmas. Il se pòt que vos ayez besoin d\'èsser enregistrat per écrire un messatge. Una tièra dels opcions disponibles es affichée en bas dels paginas dels forums e dels tèmas, exemple : <strong>Podètz</strong> enviar dels tèmas novèls, <strong>Podètz</strong> participar als vòtes, etc.'
	),
	array(
		0 => 'Comment modificar o suprimir un messatge ?',
		1 => 'A mens d\'èsser administrator o moderaire, vos ne pouvez modificar o suprimir que vòstres propres messatges. Podètz modificar un messatge (quelquefois dins una durada limitée après sa publication) en cliquant sul boton <em>modificar</em> del messatge correspondant. Se quelqu\'un a ja respondut al messatge, un petit tèxt s\'affichera en bas del messatge indiquant qu\'il es estat édité, lo nombre de fois qu\'il es estat modificat ainsi que la data e l\'ora de la darrièra édition. Aqueste messatge n\'apparaîtra pas se un moderaire o un administrator modifie lo messatge, cependant ils ont la possibilité de laisser una note indiquant qu\'ils ont modificat lo messatge. Notatz que los utilizaires ne pòdon pas suprimir un messatge una fois que quelqu\'un y a respondut.'
	),
	array(
		0 => 'Comment apondre una signatura a los mieus messatges ?',
		1 => 'Debètz d\'abord créer una signatura dins vòstre panèl de l\'utilizaire. Una fois créée, podètz cocher <em>Attacher sa signatura</em> sul formulari de rédaction de messatge. Podètz aussi apondre la signatura per defaut a totes vòstres messatges en activant la case correspondante dins lo panèl de l\'utilizaire (onglet <em>Preferéncias del forum --> Modificar las preferéncias de messatge</em>). Par la suite, vos pourrez totjorn empachar una signatura d\'èsser ajoutée a un messatge en décochant la case <em>Attacher sa signatura</em> dins lo formulari de rédaction de messatge.'
	),
	array(
		0 => 'Comment créer un sondage ?',
		1 => 'Il es facile de créer un sondage, lors de la publication d\'un tèma novèl o la modificacion del premier messatge d\'un tèma (se vos en avez los permissions), clicatz sus l\'onglet <em>Sondage</em> sous la partida messatge (se vos ne lo voyez pas, vos n\'avez probablement pas lo droit de créer dels sondages). Picatz lo títol del sondage e al mens deux opcions possibles, entrez una option per linha dins lo champ dels responsas. Podètz aussi indicar lo nombre de responsas qu\'un utilizaire pòt causir lors de son vòte dins "Option(s) per l\'utilizaire", limiter la durada en jorns del sondage (botar "0" per una durada illimitée) e enfin permettre als utilizaires de modificar leur vòte.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas apondre plus d\'opcions a mon sondage ?',
		1 => 'Lo nombre d\'opcions maximum per sondage es definit per l\'administrator. S'avètz besoin de especificar plus d\'opcions, contactatz-lo.'
	),
	array(
		0 => 'Comment modificar o suprimir un sondage ?',
		1 => 'Comme per los messatges, los sondages ne pòdon èsser modifiés que per l\'auteur original, un moderaire o un administrator. Per modificar un sondage, clicatz sul boton <em>modificar</em> del premier messatge del tèma (es totjorn celui auquel es associé lo sondage). Se personne n\'a voté, l\'auteur pòt modificar una option o suprimir lo sondage. Autrement, seuls los moderaires e los administrators pòdon lo modificar o lo suprimir. Ceci per empachar lo trucage en changeant los intitulés en cors de sondage.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas acceder a un forum ?',
		1 => 'Certains forums pòdon èsser réservés a certains utilizaires o grops. Per los consultar, los legir, y enviar, etc., vos devez aver una permission spéciale. Seuls los moderaires de grops e los administrators pòdon accorder aqueste accès, vos devez donc los contacter.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas joindre dels fichièrs a mon messatge ?',
		1 => 'La possibilité d\'apondre dels pèças juntas pòt èsser accordée per forum, per grop, o per utilizaire. L\'administrator pòt ne pas aver autorizat l\'ajout de pèças juntas pel forum dins lequel vos postez, o benlèu que seul un grop pòt en joindre. Contactatz l\'administrator se vos ne savez pas pourquoi podètz pas apondre de pèças juntas sus un forum.'
	),
	array(
		0 => 'Pourquoi ai-je recebut un avertiment ?',
		1 => 'Chaque administrator a son propre ensemble de règles per son sit. S'avètz dérogé a una règle, podètz recevoir un avertiment. Notatz que es la décision de l\'administrator, e que lo grop phpBB n\'es pas concerné per los avertiments d\'un sit balhat. Contactatz l\'administrator se vos ne comprenez pas los rasons de vòstre avertiment.'
	),
	array(
		0 => 'Comment rapporter dels messatges a un moderaire ?',
		1 => 'Se l\'administrator l\'a permis, allez sul messatge a signaler e vos devriez veire un boton per rapporter lo messatge. En cliquant dessus, vos accéderez als etapas nécessaires per aqueste far.'
	),
	array(
		0 => 'A quoi sert lo boton "Sauvegarder" dins la pagina de rédaction de messatge ?',
		1 => 'Il vos permet d\'enregistrar los messatges a terminer per los enviar plus tard. Per los recharger, allez dins lo panèl de l\'utilizaire (onglet <em>Resumit --> Gestion dels borrolhons</em>).'
	),
	array(
		0 => 'Pourquoi mon messatge deu èsser validé ?',
		1 => 'L\'administrator pòt aver décidé que lo forum dins lequel vos postez nécessite la validation dels messatges. Il es possible aussi que l\'administrator vos ait placé dins un grop dont los messatges debon èsser validés abans d\'èsser affichés. Contactatz l\'administrator per mai d\'entresenhas.'
	),
	array(
		0 => 'Comment remonter mon tèma ?',
		1 => 'En cliquant sul ligam "Remonter lo sujet" lors de sa consultation, podètz <em>remonter</em> lo tèma en haut del forum sus la première pagina. Par aillors, se vos ne voyez pas aqueste ligam, cela signifie que la remontée de tèma es desactivada o que l\'intervalle de temps per autoriser la remontée n\'es pas atteint. Il es tanben possible de remonter un tèma simplement en y répondant. Ça que la, assurez-vos de respecter los règles del forum en lo faisant.'
	),
	array(
		0 => '--',
		1 => 'Mise en forme e types de tèma'
	),
	array(
		0 => 'Que son los BBCodes ?',
		1 => 'Lo BBCode es una variante del HTML, offrant un large contrôle de mise en forme dels éléments d\'un messatge. L\'administrator pòt décider se podètz utilizar los BBCodes, podètz aussi los desactivar dins chacun de vòstres messatges en utilizant l\'option appropriée del formulari de rédaction de messatge. Lo BBCode lui-meteissa es similaire al estil HTML, mas los balises son incluses entre crochets [ e ] plutôt que &lt; e &gt;. Per mai d\'entresenhas sul BBCode, consultatz lo guide accessible dempuèi la pagina de rédaction de messatge.'
	),
	array(
		0 => 'Puis-je utilizar lo HTML ?',
		1 => 'Non, il n\'es pas possible de publier del HTML sus aqueste forum. La plupart dels mises en forme permises pel HTML pòdon èsser appliquées amb los BBCodes.'
	),
	array(
		0 => 'Que son los smileys ?',
		1 => 'Los smileys, o émoticônes, son de petites imatges utilisées per exprimer dels sentiments amb un còdi simple, exemple : :) signifie joyeux, :( signifie triste. La tièra complète dels smileys es visible sus la pagina de rédaction de messatge. Essayez toutefois de ne pas en abuser. Ils pòdon rapidement rendre un messatge illisible e un moderaire pòt décider de los retirer o simplement d\'effacer lo messatge. L\'administrator pòt aussi aver definit un nombre maximum de smileys per messatge.'
	),
	array(
		0 => 'Puis-je publier dels imatges ?',
		1 => 'Òc, podètz visualizar dels imatges dins vòstres messatges. Par aillors, se l\'administrator a autorizat los pèças juntas, podètz transferir una imatge sul forum. Autrement, vos devez lier una imatge placée sus un servidor web public, exemple : http://www.exemple.com/mon-imatge.gif. Podètz pas lier dels imatges de vòstre ordenador (sauf se es un servidor web public) ni dels imatges placées derrière dels mécanismes d\'authentification, exemple : Boîtes corrièl Hotmail o Yahoo!, sites protégés per un mot de pas, etc. Per visualizar l\'imatge, utilizatz la balise BBCode [img].'
	),
	array(
		0 => 'Que son los anóncias generalas ?',
		1 => 'Los anóncias generalas contiennent dels entresenhas importantes que vos devez legir dès que possible. Elles apparaissent en haut de chaque forum e dins vòstre panèl de l\'utilizaire. La possibilité de publier dels anóncias generalas dépend dels permissions définies per l\'administrator.'
	),
	array(
		0 => 'Que son los anóncias ?',
		1 => 'Los anóncias contiennent souvent dels entresenhas importantes que concernisson lo forum que vos consultatz e debon èsser lues dès que possible. Los anóncias apparaissent en haut de chaque pagina del forum dins lequel elles son publiées. Comme per los anóncias generalas, la possibilité de publier dels anóncias dépend dels permissions définies per l\'administrator.'
	),
	array(
		0 => 'Que son los post-it ?',
		1 => 'Un post-it apparaît en dessous dels anóncias sus la première pagina del forum dins lequel il es estat publié. Il conten dels entresenhas relativement importantes e vos devez lo consultar régulièrement. Comme per los anóncias e los anóncias generalas, la possibilité de publier dels post-it dépend dels permissions définies per l\'administrator.'
	),
	array(
		0 => 'Que son los tèmas verrouillés ?',
		1 => 'Vous ne pouvez plus respondre dins los tèmas verrouillés e tout sondage y étant contengut es alors terminé. Los tèmas pòdon èsser verrouillés per différentes rasons per un moderaire o un administrator. Selon los permissions accordées per l\'administrator, podètz o non varrolhar vòstres propres tèmas.'
	),
	array(
		0 => 'Que son los icônes de tèma ?',
		1 => 'Los icônes de tèma son dels imatges qui pòdon èsser associées a dels messatges per refléter leur contengut. La possibilité d\'utilizar dels icônes de tèma dépend dels permissions définies per l\'administrator.'
	),
	array(
		0 => '--',
		1 => 'Niveaux d\'utilizaires e grops'
	),
	array(
		0 => 'Qui son los administrators ?',
		1 => 'Los administrators son los utilizaires qui ont lo plus haut niveau de contrôle sus tout lo forum. Ils contrôlent totes los aspects del forum coma los permissions, lo bannissement, la création de grops d\'utilizaires o de moderaires, etc., selon los permissions que lo fondateur del forum a attribuées als autres administrators. Ils pòdon aussi aver toutes los capacités de moderacion sus l\'ensemble dels forums, selon aqueste que lo fondateur a autorizat.'
	),
	array(
		0 => 'Que son los moderaires ?',
		1 => 'Los moderaires son d\'utilizaires (o grops d\'utilizaires) dont lo travail consiste a verificar al jorn lo jorn lo bon fonctionnement del forum. Ils ont lo pouvoir de modificar o suprimir dels messatges, de varrolhar, déverrouiller, desplaçar, suprimir e diviser los tèmas dels forums qu\'ils modèrent. Généralement, los moderaires empêchent que los utilizaires partent en <em>hors-tèma</em> o publient del contengut abusif o offensant.'
	),
	array(
		0 => 'Que son los grops d\'utilizaires ?',
		1 => 'Los grops son la manière per los administrators de regrouper e gerir dels utilizaires. Chaque utilizaire pòt appartenir a plusieurs grops e chaque grop pòt aver dels permissions particulières. Cela fournit als administrators una façon simple de modificar los permissions de plusieurs utilizaires en una fois, telles que rendre plusieurs utilizaires moderaires d\'un forum o leur donner accès a un forum privat.'
	),
	array(
		0 => 'Comment adhérer a un grop d\'utilizaires ?',
		1 => 'Per adhérer a un grop, clicatz sul ligam <em>Grops d\'utilizaires</em> dins vòstre panèl de l\'utilizaire, podètz ensuite veire totes los grops. Totes los grops son pas en <em>accès libre</em>. Certains pòdon nécessiter una validation, certains son fermés e d\'autres pòdon meteissa èsser masqués. Se lo grop es ouvert, podètz lo rejoindre en cliquant sul boton approprié. Se lo grop requiert una validation, podètz demander a lo rejoindre en cliquant sul boton approprié. Un moderaire de grop devra confirmar vòstre requête e pourra vos demander pourquoi volètz rejoindre lo grop. N\'importunez pas lo moderaire s\'il annule vòstre requête, il a sûrement ses rasons.'
	),
	array(
		0 => 'Comment devenir moderaire de grop ?',
		1 => 'Lorsque dels grops son créés per l\'administrator, il leur es attribué un moderaire. Se volètz créer un grop d\'utilizaires, contactatz l\'administrator en premier lieu en lui envoyant un messatge privat.',
	),
	array(
		0 => 'Pourquoi certains grops d\'utilizaires apparaissent dins una color différente ?',
		1 => 'L\'administrator pòt attribuer dels colors als sòcis d\'un grop per los rendre facilement identifiables.'
	),
	array(
		0 => 'Qu\'es-aqueste qu\'un "Groupe per défaut" ?',
		1 => 'Se vos êtes sòci de mai d\'un grop, celui per defaut es utilizat per déterminer lo rang e la color de grop affichés per defaut. L\'administrator pòt vos permettre de cambiar vòstre grop per defaut via vòstre panèl de l\'utilizaire.'
	),
	array(
		0 => 'Qu\'es-aqueste que lo ligam "L\'équipe del forum" ?',
		1 => 'Aquesta pagina donne la tièra dels sòcis de l\'équipe del forum, y compris los administrators e moderaires ainsi que d\'autres detalhs tels que los forums qu\'ils modèrent.'
	),
	array(
		0 => '--',
		1 => 'Messatjariá privada'
	),
	array(
		0 => 'Je ne peux pas enviar de messatges privats!',
		1 => 'I a trois rasons per cela : vos n\'êtes pas enregistrat e/o connectat, l\'administrator a desactivat la messagerie privada sus l\'ensemble del forum, o l\'administrator vos a empêché d\'enviar dels messatges. Contactatz l\'administrator per mai d\'entresenhas.'
	),
	array(
		0 => 'Je reçois sens arrêt dels messatges indésirables!',
		1 => 'Podètz empachar un utilizaire de vos enviar dels messatges en utilizant los filtres de messatge dins los réglages de vòstre messagerie privada. Se vos recevez dels messatges privats abusifs d\'un utilizaire en particulier, informez l\'administrator. Aqueste darrièr a la possibilité d\'empachar complètement un utilizaire d\'enviar dels messatges privats.'
	),
	array(
		0 => 'J\'ai recebut un corrièl o un courrier abusif d\'un utilizaire d\'aqueste forum!',
		1 => 'Lo formulari de courrier électronique del forum comprend dels sécurités per suivre los utilizaires qui envoient de tels messatges. Envoyez a l\'administrator una copie complète de lo corrièl recebut. Il es très important d\'inclure los encaps (ils contiennent dels entresenhas sus l\'expéditeur de lo corrièl). L\'administrator pourra alors prendre los mesures nécessaires.'
	),
	array(
		0 => '--',
		1 => 'Amics e ignorats'
	),
	array(
		0 => 'Que son los mieus tièras d\'amics e d\'ignorats ?',
		1 => 'Podètz utilizar aquestes tièras per organiser los autres sòcis del forum. Los sòcis ajoutés a vòstre tièra d\'amics seront affichés dins vòstre panèl de l\'utilizaire per un accès rapide, veire leur état de connexion e leur enviar dels messatges privats. Selon los thèmes graphiques, lors messatges pòdon èsser mes en valeur. Se vos ajoutez un utilizaire a vòstre tièra d\'ignorats, totes ses messatges seront masqués per defaut.'
	),
	array(
		0 => 'Comment puis-je apondre/suprimir dels utilizaires de ma tièra d\'amics o d\'ignorats ?',
		1 => 'Podètz apondre dels utilizaires a vòstre tièra de deux manières. Dins lo perfil de chaque sòci, i a un ligam per l\'apondre dins vòstre tièra d\'amics o d\'ignorats. Ou, dempuèi vòstre panèl de l\'utilizaire, podètz apondre directement dels sòcis en saisissant leur nom d\'utilizaire. Podètz tanben suprimir dels utilizaires de vòstre tièra dempuèi aquesta meteissa pagina.'
	),
	array(
		0 => '--',
		1 => 'Recèrca dins los forums'
	),
	array(
		0 => 'Comment rechercher dins los forums ?',
		1 => 'Picatz un terme a rechercher dins la zone de recèrca située en haut dels paginas d\'indèx, de forums o de tèmas. La recèrca avancée es accessible en cliquant sul ligam "Recherche avancée" disponible sus toutes los paginas del forum. L\'accès a la recèrca pòt dépendre dels thèmes graphiques utilisés.'
	),
	array(
		0 => 'Pourquoi ma recèrca ne renvoie aucun résultat ?',
		1 => 'Vòstre recèrca es probablement trop vague o comprend plusieurs termes courants non indexés per phpBB 3. Podètz affiner vòstre recèrca en utilizant las opcions disponibles dins la recèrca avancée.'
	),
	array(
		0 => 'Pourquoi ma recèrca retourne una pagina blanche! ?',
		1 => 'Vòstre recèrca renvoie plus de résultats que ne pòt gerir lo servidor web. Utilizatz la "Recherche avancée" e soyez plus précis dins lo choix dels termes utilisés e dels forums concernés per la recèrca.'
	),
	array(
		0 => 'Comment rechercher dels sòcis ?',
		1 => 'Allez sus la pagina "Membres", clicatz sul ligam  "Rechercher un utilizaire" e garnissètz las opcions nécessaires.'
	),
	array(
		0 => 'Comment puis-je trouver los mieus propres messatges e tèmas ?',
		1 => 'Vos messatges pòdon èsser retrouvés en cliquant sus "Voir vòstres messages" dins lo panèl de l\'utilizaire o via vòstre propre pagina de perfil. Per rechercher vòstres tèmas, utilizatz la pagina de recèrca avancée e causissètz los réglages appropriés.'
	),
	array(
		0 => '--',
		1 => 'Surveillance dels tèmas e favorits'
	),
	array(
		0 => 'Quelle es la différence entre los favorits e la surveillance ?',
		1 => 'Los favorits dins phpBB 3 son coma los favorits de vòstre navigateur. Sètz pas nécessairement averti dels mises a jorn, mas podètz revenir plus tard sul tèma. A l\'inverse, la surveillance vos préviendra lorsqu\'un tèma o un forum serà mes a jorn via vòstre choix de préférence.'
	),
	array(
		0 => 'Comment susvelhar dels forums o tèmas spécifiques ?',
		1 => 'Per susvelhar un forum particulier, una fois entré sus celui-ci, clicatz sul ligam "Surveiller aqueste forum". Per susvelhar un tèma, podètz siá respondre a-n aqueste tèma e cocher la case del formulari de rédaction de messatge pel susvelhar, siá clicar sul ligam "Surveiller aqueste sujet" disponible en consultant lo tèma lui-meteissa.'
	),
	array(
		0 => 'Comment puis-je suprimir los mieus susvelhanças de tèmas ?',
		1 => 'Per suprimir vòstres susvelhanças, allez dins vòstre panèl de l\'utilizaire (onglet <em>Resumit --> Gestion dels susvelhanças</em>) e suivez los instructions.'
	),
	array(
		0 => '--',
		1 => 'Fichièrs junts'
	),
	array(
		0 => 'Quelles pèças juntas son autorizats sus aqueste forum ?',
		1 => 'L\'administrator pòt autoriser o interdire certains types de pèças juntas. Se vos n\'êtes pas sûr d\'aqueste qui es autorizat a èsser transféré, contactatz l\'administrator per mai d\'entresenhas.'
	),
	array(
		0 => 'Comment trouver totes los mieus pèças juntas ?',
		1 => 'Per trouver la tièra dels pèças juntas qu\'avètz transférés, allez dins vòstre panèl de l\'utilizaire puis <em>Gestion dels pèças juntas</em>.'
	),
	array(
		0 => '--',
		1 => 'Concernant phpBB 3'
	),
	array(
		0 => 'Qui son los auteurs d\'aqueste forum ?',
		1 => 'Aqueste logiciel (dins sa forme originale) es produit, distribué e son copyright es détenu pel <a href="http://www.phpbb.com/">Grop phpBB</a>. Il es rendu accessible sous la Licence Publique Générale GNU e pòt èsser distribué gratuitement. Consultez lo ligam per mai d\'entresenhas.'
	),
	array(
		0 => 'Pourquoi la foncionalitat X n\'es pas disponible ?',
		1 => 'Aqueste programme es estat écrit e mes sous licence pel Grop phpBB. Se vos pensez qu\'una foncionalitat nécessite d\'èsser ajoutée, visitez lo sit Internet phpbb.com e voyez aqueste que lo Grop phpBB en dit. N\'envoyez pas de requêtes de fonctionnalités sul forum de phpbb.com, lo grop utilise SourceForge per gerir aquestes nouvelles requêtes. Lisez los forums per veire leur position, s\'ils en ont una, per rapòrt a-n aquesta foncionalitat, e suivez la procédure donnée là-bas.'
	),
	array(
		0 => 'Qui contacter per los abus o los questions légales que concernisson aqueste forum ?',
		1 => 'Contactatz n\'importe lequel dels administrators de la tièra "L\'équipe del forum". Se vos restez sens responsa alors prenez contact amb lo propriétaire del domaine (en faisant una <a href="http://www.google.com/search  ?q=whois">recèrca sus whois</a>) o se un service gratuit es utilizat (exemple : Yahoo!, Free, f2s.com, etc.), amb lo service de gestion o dels abus. Notatz que lo grop phpBB <strong>n\'a absolument aucun contrôle</strong> e ne pòt èsser en aucune façon tenu per responsable sus <em>comment</em>, <em>ont</em> o <em>per qui</em> aqueste forum es utilizat. Il es inutile de contacter lo grop phpBB per toute question légale (cessions e désistements, responsabilité, propos diffamatoires, etc.) <strong>non directement liée</strong> al sit Internet phpbb.com o al logiciel phpBB lui-meteissa. Se vos adressez un corrièl al grop phpBB a propos de l\'utilisation <strong>d\'una tierce partida</strong> d\'aqueste logiciel vos devez vos attendre a una responsa très corta voire a aucune responsa del tout.'
	)
);

 ?>
