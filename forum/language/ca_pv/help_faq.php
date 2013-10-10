<?php
/** 
*
* help_faq [Catalan (Valencian)]
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
		1 => 'Inici de sessió (login) i registre'
	),
	array(
		0 => 'Per què no es pot iniciar una sessió?',
		1 => 'Us heu registrat? Heu de registrar-vos per tal de poder iniciar una sessió. Us han exclòs del fòrum? (si es així, quan proveu d\'iniciar una sessió eixirà un missatge dient-vos-ho). En aquest cas, envieu un missatge al webmaster o l\'administrador del fòrum per saber quina és la raó. Si us heu registrat i no heu estat exclosos verifique que el vos nom d\'usuari i contrasenya siguen correctes, és el problema més habitual. Si esteu segurs que les vostres dades són correctes, envieu un missatge a l\'administrador del fòrum, és possible que hi haja algun problema de configuració.'
	),
	array(
		0 => 'Per què cal registrar-se?',
		1 => 'Potser que no calga, és decisió de l\'administrador del fòrum si és necessari registrar-se per tal de publicar missatges. No obstant, registrar-te us donarà accés a característiques addicionals no disponibles per als usuaris invitats com ara tenir el teu gràfic personalitzat (avatar), enviar missatges privats o correu electrònic a altres usuaris, subscripció a grups d\'usuaris, etc. Només costa un moment, per tant és molt recomanable.'
	),
	array(
		0 => 'Per què el sistema ix de la sessió automàticament?',
		1 => 'Si no activeu la casella <em>Entra-hi automàticament a cada visita</em>, quan inicieu la sessió al fòrum, només us mantindreu dins el sistema durant un temps predeterminat. Això es fa per evitar l\'ús inadequat del vostre compte per part d\'algú altre. Per mantenir-vos dintre del sistema activeu la casella quan inicieu la sessió, però recordeu que això no és recomanable si accediu al fòrum des d\'un ordinador compartit, ex. biblioteca, cibercafè, universitat, etc..'
	),
	array(
		0 => 'Com es pot evitar aparèixer als llistats d\'usuaris connectats?',
		1 => 'Al vostre perfil trobaràs l\'opció <em>Oculta el meu estat</em>. Si activeu aquesta opció, només sereu visibles per als administradors i per a vosaltres mateixos. Comptareu com a usuaris ocults.'
	),
	array(
		0 => 'En cas de pèrdua de contrasenya',
		1 => 'Calma, tot i que la vostra contrasenya no es pot recuperar, es pot canviar per una de nova. Per fer-ho heu d\'anar a la pàgina d\'inici de sessió on heu de clicar sobre <em>He oblidat la meua contrasenya</em>, després heu de seguir les instruccions i en poc temps tindreu una contrasenya nova.'
	),
	array(
		0 => 'Esteu registrats però no podeu iniciar una sessió!',
		1 => 'Primer verifiqueu que esteu introduint el nom d\'usuari i la contrasenya correctament. Si tot és correcte, poden haver passat dues coses. Si el Sistema de Protecció Infantil (COPPA) està activat i quan us heu registrat heu triat l\'opció <em>Sóc menor de 13 anys d\'edat</em>, llavors tindreu que seguir les instruccions que hageu rebut. Si no és el cas, potser el vostre compte necessita ser activat. Alguns fòrums requereixen que o bé vosaltres mateixos o l\'administrador activeu el nou compte abans de poder iniciar una sessió. Quan vau registrar-vos s\'us va donar un missatge d\'informació sobre si era necessària l\'activació. Si heu rebut un email, segueix-ne les instruccions; si no l\'heu rebut, llavors assegureu-vos que l\'adreça de correu electrònica que vau introduir siga vàlida. Una raó per la qual s\'utilitza l\'activació d\'usuaris és reduir la possibilitat que algú malintencionat s\'aprofite del fòrum de manera anònima.'
	),
	array(
		0 => 'Vau registrar-vos fa temps però ara ja no podeu iniciar una sessió',
		1 => 'Les raons més probables són aquestes: el nom d\'usuari o la contrasenya que heu introduït són incorrectes (reviseu l\'email que vau rebre quan vau registrar-vos), o bé l\'administrador ha esborrat el vostre compte per alguna raó. Si aquest és el cas, potser no vau arribar a enviar cap missatge. Sol passar que els fòrums esborren periòdicament els usuaris que no han publicat mai res per tal de reduïr la mida de la base de dades. Proveu a registrar-vos novament i participar en algunes discussions.'
	),
	array(
		0 => 'Què és COPPA?',
		1 => 'COPPA, o en anglès <em>Child Online Privacy and Protection Act</em> de 1998, és una llei feta als Estats Units que obliga a les pàgines web a tindre una política de protecció dels menors. Per això mateix, a l\'hora del registre es demana la edat i l\'acceptació dels termes.',
	),
	array(
		0 => 'Per què no podem registrar-nos?',
		1 => 'Potser que l\'administrador haja banejat la teua IP o haja desactivat el teu compte. Si teniu problemes, contacteu amb l\'administrador.',
	),
	array(
		0 => 'Què vol dir "Suprimeix totes les cookies"?',
		1 => 'Aquesta ordre suprimeix totes les cookies que phpBB haja creat al teu navegador (dades d\'autenticació, usuari, contrasenya).',
	),
	array(
		0 => '--',
		1 => 'Preferències d\'usuari i configuracions'
	),
	array(
		0 => 'Canviar les opcions del perfil de l\'usuari',
		1 => 'Totes les vostres configuracions (si esteu registrats) estan emmagatzemades en una base de dades. Per modificar-les cliqueu l\'enllaç Perfil de l\'usuari que es troba, generalment, a dalt de cada pàgina, tot i que la ubicació pot canviar. Això us permetrà canviar la vostra configuració personal.'
	),
	array(
		0 => 'Les hores no són correctes!',
		1 => 'Les hores segurament són correctes però és possible que estigueu veient les hores corresponents a un altre fus horari. Si aquest és el cas, hauríeu de canviar la configuració del fus horari al vostre perfil per tal de que es corresponga amb el vostre: ex. Londres, Paris, New York, Sydney, etc. Tingueu present que per canviar el fus horari heu d\'estar registrats. Per tant, si no esteu registrats, podeu pensar en fer-ho.'
	),
	array(
		0 => 'S\'ha canviat el fus horari però l\'hora segueix estant malament',
		1 => 'Si esteu segurs que heu seleccionat el fus horari correcte i l\'hora encara és diferent, el més probable és que siga degut al canvi horari que es fa a l\'estiu en alguns països. El fòrum no està dissenyat per gestionar aquest canvi horari i, per tant, durant els mesos d\'estiu el fòrum pot diferir de l\'hora local real en una hora.'
	),
	array(
		0 => 'L\'idioma que es vol no està a la llista d\'idiomes!',
		1 => 'El més probable és que l\'administrador no haja instal·lat el paquet del vostre idioma o bé que ningú haja fet la traducció del fòrum. Proveu a demanar-li a l\'administrador del fòrum si pot instal·lar el paquet d\'idioma que necessiteu. Si no existeix, llavors sou lliures de crear una nova traducció. Podeu trobar més informació a la pàgina web del phpBB Group (cliqueu l\'enllaç que hi ha al final de la pàgina).'
	),
	array(
		0 => 'Com es pot mostrar una imatge sota el nom d\'usuari?',
		1 => 'Pot haver-hi dos tipus d\'imatges sota el vostre nom d\'usuari en els missatges. La primera és una imatge associada al vostre rang, generalment té forma d\'estrelles o blocs que indiquen quants missatges heu publicat o el vostre status. A sota d\'aquesta pot haver-hi una imatge més gran coneguda com Avatar, un gràfic generalment únic i personal per a cada usuari. És decisió de l\'administrador del fòrum permetre l\'ús d\'avatars i com es poden obtenir. Si no podeu utilitzar-los és perquè així ho ha decidit l\'administrador, podeu preguntar-li les raons per les quals ho ha fet.'
	),
	array(
		0 => 'Què és el rank i com es canvia?',
		1 => 'El rank expressa el nombre de missatges que heu publicat. Generalment no podeu canviar el vostre rang directament. La majoria de fòrums utilitzen els rangs per indicar el nombre de missatges que s\'han publicat i per identificar determinats usuaris, ex. moderadors i administradors poden tenir un rang especial. No heu de fer un ús abusiu del fòrum enviant missatges de forma innecessària només per incrementar el vostre rang; si ho feu, és probable que un moderador o l\'administrador simplement baixen el vostre nombre de missatges publicats.'
	),
	array(
		0 => 'Enviar e-mails als usuaris',
		1 => 'Només els usuaris registrats poden enviar emails a través del formulari d\'email que té implementat el fòrum (sempre i quan l\'administrador haja activat aquesta característica). Això es fa per evitar un ús inadequat del sistema d\'email per part d\'usuaris anònims.'
	),
	array(
		0 => '--',
		1 => 'Publicació de missatges'
	),
	array(
		0 => 'Com es crea un tema al fòrum?',
		1 => 'Cliqueu el botó de NOU TEMA a la pantalla del fòrum o tema. És possible que necessiteu registrar-vos abans de poder publicar missatges, allò que s\'us permet està llistat al final de les pantalles dels fòrums i dels temes (la llista Podeu publicar nous temes, Podeu votar a les enquestes, etc.)'
	),
	array(
		0 => 'Com s\'editen o s\'esborren missatges?',
		1 => 'Si no sou moderadors o adminsitradors del fòrum només podeu editar o esborrar els vostres propis missatges. Podeu editar un missatges (de vegades només durant un període de temps limitat després de ser publicat) clicant el botó editar del missatge en qüestió. Si algú ja ha respost al vostre missatge trobareu un xicotet text sota el vostre missatge quan torneu a la pantalla del tema que llista el nombre de vegades que l\'heu editat. Això no apareixerà si ningú hi ha contestat ni tampoc si són els administradors o els moderadors els que editen el missatge (haurien de deixar un missatge dient què han modificat i per què). Tingueu en compte que els usuaris normals no poden esborrar un missatge un cop algú hi ha contestat.'
	),
	array(
		0 => 'Com s\'afegeix una signatura al missatge?',
		1 => 'Per afegir una signatura a un missatge primer n\'heu de crear una, això es fa a través del vostre perfil. Un cop creada podeu activar l\'opció Adjunta signatura al formulari de publicació per tal d\'afegir-la. També podeu afegir la signatura per defecte a tots el missatges activant l\'opció corresponent del vostre perfil (de totes maneres podeu desactivar l\'addició de la vostra signatura a missatges individuals deseleccionant l\'opció adjuntar signatura al formulari de publicació).'
	),
	array(
		0 => 'Com es crea una enquesta?',
		1 => 'Crear una enquesta és fàcil, quan publiqueu un tema nou (o editeu el primer missatge d\'un tema) hauríeu de veure l\'opció Afegir enquesta sota el quadre del missatge principal (si no ho podeu veure probablement no teniu permís per crear enquestes). Heu d\'introduir un títol per a l\'enquesta i dues opcions com a mínim (per afegir una opció heu d\'escriure la pregunta i clicar sobre el botó Afegir opció). També podeu decidir el límit de temps durant el qual l\'enquesta estarà activa, 0 és una enquesta que no acaba mai.'
	),
	array(
		0 => 'Quin és el límit d\'opcions a una enquesta?',
		1 => 'Hi haurà un límit per al nombre d\'opcions que podeu llistar que és decidit per l\'administrador del fòrum.'
	),
	array(
		0 => 'Com s\'edita o s\'esborra una enquesta?',
		1 => 'Igual que amb els missatges, les enquestes només poden ser editades per l\'usuari que les va crear, un moderador o l\'administrador del fòrum. Per editar una enquesta cliqueu sobre el primer missatge del tema (aquest sempre hi té l\'enquesta associada). Si ningú ha emès cap vot llavors els usuaris poden esborrar l\'enquesta o editar qualsevol opció, no obstant si algú ja hi ha votat, només els moderadors i administradors poden editar-la o esborrar-la. Això és per evitar que la gent les falsege canviant opcions a mitja enquesta.'
	),
	array(
		0 => 'Per què no es pot accedir al fòrum?',
		1 => 'Alguns fòrums poden estar limitats a determinats grups d\'usuaris. Per veure, llegir, enviar missatges, etc. potser necessiteu una autorització especial, només el moderador del fòrum i l\'administrador poden permetre-vos l\'accés, prova de contactar-hi.'
	),
	array(
		0 => 'Per què no es pot afegir fitxer adjunts?',
		1 => 'Adjuntar fitxers requereix uns permisos donats pels administradors. Normalment, si esteu registrats no hi haurà problema en afegir fitxers adjunts als vostres missatges. Això també varia segons el sub-fòrum al qual us trobeu, potser uns ho permetran i d\'altres no. Això és cosa dels administradors.'
	),
	array(
		0 => 'Per què es pot rebre un Warning?',
		1 => 'Cada fòrum té unes normes de funcionament. Si trenqueu les normes, rebreu un avís dels moderadors/administradors avisant-vos de la vostra acció. Això pot suposar la expulsió del fòrum, així que us demanem que llegiu les normes.'
	),
	array(
		0 => 'Com es pot enviar un avís als moderadors/administradors?',
		1 => 'Si l\'administrador ho ha activat, al costat dels missatges trobareu un botó d\'avís als moderadors/administradors. Així, si us trobeu amb algun missatge que penseu que han de conèixer els moderadors/adminstradors, podeu clicar-hi i informar.'
	),
	array(
		0 => 'Què és el botó “Desa” que hi ha quan s\'envia un missatge?',
		1 => 'Aquesta opció permet desar els missatges que no heu completat i recuperar-los després per publicar-los. Això ho podeu controlar des del Perfil de l\'usuari.'
	),
	array(
		0 => 'Per què alguns missatges necessiten aprovació?',
		1 => 'Això normalment és perquè l\'administrador ho ha decidit. Potser a alguns fòrums cal aprovació del moderador segons el missatge. Potser també, si sou un usuari conflictiu, l\'administrador us ha afegit a un grup especial per controlar els vostres missatges.'
	),
	array(
		0 => 'Com es pot reflotar un missatge?',
		1 => 'Si cliqueu a l\'opció "Reflotar missatge" quan l\'esteu veient, podeu reflotar-lo i pujar-lo als darrers missatges publicats per tal de que siga visible novament a tot el món. Això normalment es fa per donar vida novament a un missatge que s\'allunyava dels primers llocs. Tingueu en compte que és possible que no tingueu permisos per fer això.'
	),
	array(
		0 => '--',
		1 => 'Formateig i Tipus de temes'
	),
	array(
		0 => 'Què és el BBCode?',
		1 => 'BBCode és una implementació especial de l\'HTML. Si podeu utilitzar BBCode o no ho decideix l\'administrador (també podeu deshabilitar-lo per a missatges individuals al formulari de publicació). BBCode té un estil molt similar al de l\'HTML, els marcadors van entre claudàtors [ i ] i ofereix un major control sobre què i com es mostren els elements. Per més informació sobre el BBCode mireu la guia a que podeu accedir des de la pàgina de publicació.'
	),
	array(
		0 => 'Es pot fer servir HTML?',
		1 => 'No. La raó del BBCode és evitar l\'ús de l\'HTML.'
	),
	array(
		0 => 'Què són els Smilies?',
		1 => 'Els Smileys o Emoticons son xicotetes imatges que poden ser utilitzades per expressar alguns sentiments utilitzant un codi, ex. :) significa feliç, :( significa trist. La llista completa d\'emoticons es pot veure al formulari de publicació. Intenteu no abusar-ne però, ja que poden fer ràpidament que un missatge es torne il·legible i aleshores un moderador pot decidir treure\'ls o eliminar el missatge completament.'
	),
	array(
		0 => 'Es poden afegir imatges als missatges?',
		1 => 'Podeu mostrar imatges en els vostres missatges. Podeu fer-ho de diverses maneres: podeu d\'enllaçar a una imatge emmagatzemada en un servidor web accessible públicament, ex. http://www.some-unknown-place.net/my-picture.gif. No podeu ficar enllaços a imatges emmagatzemades al vostre PC (si no és que es tracta d\'un servidor accessible públicament) ni imatges emmagatzemades amb mecanismes d\'autentificació, ex. bústies de hotmail, yahoo, pàgines protegides per contrasenya, etc. Per mostrar la imatge utilitzeu el marcador de BBCode [img]).'
	),
	array(
		0 => 'Què són els Anuncis Globals?',
		1 => 'Els anuncis globals normalment contenen informació important que l\'administrador considera que heu de llegir. Aquests anuncis globals apareixeran a la part de dals de qualsevol lloc del fòrum que estigueu visitant.'
	),
	array(
		0 => 'Què són els Anuncis?',
		1 => 'Els anuncis sovint contenen informació important i els hauríeu de llegir tan aviat com siga possible. Els anuncis apareixen a dalt de cada pagina al fòrum on són publicats. Si podeu o no publicar un anunci depèn dels permisos necessaris, aquests els decideix l\'administrador.'
	),
	array(
		0 => 'Què són els Temes Recurrents?',
		1 => 'Els temes recurrents apareixen sota els anuncis als fòrums i només a la primera pàgina. Sovint són força importants i els hauríeu de llegir quan siga possible. Igual com amb els anuncis, l\'administrador del fòrum decideix quins permisos es necessiten per publicar temes permanents a cada fòrum.'
	),
	array(
		0 => 'Per què hi ha temes bloquejats?',
		1 => 'Els temes tancats o bloquejats estan així perquè un moderador o administrador del fòrum ho ha decidit. No podeu enviar respostes als temes tancats i qualsevol enquesta que contingueren s\'acaba automàticament. Els temes poden ser tancats per moltes raons.'
	),
	array(
		0 => 'Què són les icones de tema?',
		1 => 'Les icones de tema són imatges que es poden associar als nous temes que es creen. La disponibilitat d\'aquesta opció depèn de si l\'administrador ho ha permès o no.'
	),
	array(
		0 => '--',
		1 => 'Nivells d\'usuari i Grups'
	),
	array(
		0 => 'Què són els Administradors?',
		1 => 'Els administradors són persones a les quals se\'ls ha assignat el nivell de control més alt sobre el fòrum sencer. Poden controlar totes les facetes del fòrum com ara permisos, excloure usuaris, crear grups d\'usuaris o moderadors, etc. També tenen permisos de moderador a tot el fòrum.'
	),
	array(
		0 => 'What are Moderators?',
		1 => 'Moderators are individuals (or groups of individuals) who look after the forums from day to day. They have the authority to edit or delete posts and lock, unlock, move, delete and split topics in the forum they moderate. Generally, moderators are present to prevent users from going off-topic or posting abusive or offensive material.'
	),
	array(
		0 => 'Què són els Moderadors?',
		1 => 'Els moderadors són persones (o grups de persones) el treball dels quals és vigilar la marxa dels fòrums regularment. Poden editar o esborrar missatges i tancar, desbloquejar, moure, esborrar i dividir temes al fòrum que moderen. Normalment els moderadors hi són per evitar que la gent es desvie dels temes o que envien missatges ofensius o insultants.'
	),
	array(
		0 => 'Què són els Grups d\'Usuaris i com Unir-se?',
		1 => 'Els grups d\'usuaris són un mètode per que l\'administrador puga agrupar usuaris. Cada usuari pot pertànyer a diversos grups (això és diferent els fòrums) i a cada grup se li poden assignar drets d\'accés individuals. Això facilita a l\'administrador fer moderadors d\'un fòrum a un grup d\'usuaris o donar-los accés a un fòrum privat. Per unir-vos a un grup d\'usuaris clique l\'enllaç de Grups d\'Usuaris situat a la capçalera de la pàgina (depenent del disseny de la plantilla) i podreu veure tots els grups d\'usuaris. No tots els grups són oberts, alguns estan tancats i d\'altres fins i tot poden estar ocults. Si el grup és obert podeu demanar unir-vos clicant el botó corresponent. El moderador del grup d\'usuaris haurà d\'acceptar la vostra petició, potser s\'us demanarà per què voleu unir-vos al grup. No critiqueu el moderador d\'un grup en el cas de no ser acceptat, segur que tindran les seues raons.'
	),
	array(
		0 => 'Com convertir-se en Moderador d\'un Grup d\'Usuaris?',
		1 => 'Inicialment els grups d\'usuaris els crea l\'administrador del fòrum i també assigna un moderador. Si esteu interessats en crear un grup d\'usuaris hauríeu de contactar amb l\'administrador, proveu d\'enviar-li un missatge privat.',
	),
	array(
		0 => 'Per què alguns grups tenen diferent color?',
		1 => 'Això és possible perquè l\'administrador pot assignar un color diferent a cada grup d\'usuari. Això es fa normalment per poder diferenciar ràpidament de quin grup forma part cada usuari.'
	),
	array(
		0 => 'Què és el "Grup d\'usuaris per defecte"?',
		1 => 'Si sou membres de més d\'un grup, el vostre gurp d\'usuaris per defecte definirà quin és el color del vostre usuari. Des del Perfil de l\'usuari podeu canviar entre un i altre grup.'
	),
	array(
		0 => 'Què és l\'enllaç “L\'equip”?',
		1 => 'Aquesta pàgina mostra als moderadors i administradors del fòrums així com altres detalls.'
	),
	array(
		0 => '--',
		1 => 'Missatgeria privada'
	),
	array(
		0 => 'No es pot enviar missatges privats!',
		1 => 'Hi ha tres possibles raons: no esteu registrats o no heu iniciat una sessió, l\'administrador del fòrum ha deshabilitat la missatgeria privada a tot el fòrum o bé us ha prohibit enviar missatges privats. Si es tracta del darrer cas proveu de preguntar-li a l\'administrador el perquè.'
	),
	array(
		0 => 'En cas de rebre missatges privats no desitjats',
		1 => 'Podeu bloquejar a l\'usuari que us està enviant aquests missatges fent servir les regles que hi ha al vostre Perfil de l\'usuari. Si esteu sent víctima d\'un bombardeig, contacteu amb l\'administrador.'
	),
	array(
		0 => 'Si heu rebut spam o correu amb insults d\'algú d\'aquest fòrum!',
		1 => 'La característica d\'enviar emails d\'aquest fòrum inclou mecanismes de seguretat per localitzar els usuaris que envien aquests missatges. Hauries d\'enviar un email a l\'administrador amb una còpia completa de l\'email que heu rebut, és molt important que incloga les capçaleres (conté detalls de l\'usuari que ha enviat l\'email). Ell se\'n pot ocupar.'
	),
	array(
		0 => '--',
		1 => 'Amics i no tan amics'
	),
	array(
		0 => 'Què són les llistes d\'amics i enemics?',
		1 => 'Com usuaris, podeu fer servir aquestes llistes per organitzar les vostres relacions al fòrum. Des del Perfil de l\'usuari podreu gestionar tot açò: als vostres amics els tindreu a mà per saber si estan o no connectats, per enviar-los missatges privats, etc. En el cas dels enemics, si feu que un usuari siga el vostre enemic, el que fareu realment és ignorar els seus missatges automàticament.'
	),
	array(
		0 => 'Com s\'afegeixen usuaris als grups d\'amics i enemics?',
		1 => 'Podeu fer-ho de dues formes: des del perfil de l\'usuari de l\'usuari concret o bé des del vostre perfil de l\'usuari propi.'
	),
	array(
		0 => '--',
		1 => 'Cercant als fòrums'
	),
	array(
		0 => 'Com es cerca al fòrum?',
		1 => 'Només heu d\'introduïr la paraula clau que necessiteu al quadre "Cerca" que hi ha a la pàgina principal. També podeu fer clic sobre "Cerca avançada" per afegir altres opcions com per exemple cercar en un fòrum concret o cercar un usuari.'
	),
	array(
		0 => 'Per què a vegades la cerca dóna un resultat buit?',
		1 => 'Potser que la paraula clau que he ficat no es trobe en tot el fòrum. Recordeu que heu d\'esser concrets, però no massa, a l\'hora de cercar algun tema concret al fòrum. Si amb això no podeu, mireu amb les opcions de la cerca avançada.'
	),
	array(
		0 => 'Per què a vegades la cerca retorna una pàgina en blanc?',
		1 => 'Això passa quan s\'han trobat massa resultats. Heu d\'ésser una mica més concrets per trobar allò que voleu.'
	),
	array(
		0 => 'Com puc cercar membres?',
		1 => 'Aneu a la secció “Membres” i després a "Cerca un membre".'
	),
	array(
		0 => 'Com es poden trobar el missatges d\'un usuari?',
		1 => 'Els vostres missatges podeu trobar-los des de l\'opció de "Cercar missatges de l\'usuari" al vostre Perfil de l\'usuari. També des de "Cerca avançada" podeu trobar els missatges d\'altres usuaris.'
	),
	array(
		0 => '--',
		1 => 'Subscripció a Temes i Preferits'
	),
	array(
		0 => 'Quina és la diferència entre afegir preferits i subscriure\'s?',
		1 => 'Afegir a preferits és la mateixa acció que feu amb el vostre navegador. En canvi, subscrivint-vos, rebreu un missatge d\'aví s cada vegada que hi haja una novetat al fòrum/tema que us heu subscrit.'
	),
	array(
		0 => 'Com afegir una subscripció?',
		1 => 'Per subscriure\'s a un fòrum determinat, heu de clicar sobre el botó "Subscribir-se al fòrum" que trobeu a dins del fòrum concret. Els mateixos passos s\'han de continuar en cas de que vulgueu subscriure-vos a un tema concret.'
	),
	array(
		0 => 'Com s\'esborren les subscripcions?',
		1 => 'Per esborrar les vostres subscripcions, aneu al vostre Perfil de l\'usuari i seguiu els enllaços cap a les vostres subscripcions.'
	),
	array(
		0 => '--',
		1 => 'Fitxers adjunts'
	),
	array(
		0 => 'Quin tipus de fitxers adjunts es permeten al fòrum?',
		1 => 'Cada administrador pot permetre o no la possibilitat d\'adjuntar alguns tipus d\'arxius o d\'altres. Si algun format que en principi es permet, no podeu pujar-lo, contacteu amb l\'administrador del fòrum.'
	),
	array(
		0 => 'Com es pot trobar tots els fitxers adjunts que ha carregat un usuari?',
		1 => 'Per veure tots els vostres fitxers adjunts que heu carregat, heu d\'anar al Perfil de l\'usuari i anar a la secció de fitxers adjunts carregats.'
	),
	array(
		0 => '--',
		1 => 'Sobre phpBB 3'
	),
	array(
		0 => 'Qui ha programat aquest fòrum?',
		1 => 'Aquesta aplicació (en la seua forma original) està produïda, llançada i amb drets d\'autor de <a href="http://www.phpbb.com/">phpBB Group</a>. Està disponible mitjançant la GNU General Public Licence i és de lliure distribució, veure l\'enllaç per més detalls.'
	),
	array(
		0 => 'Per què la característica X no està disponible?',
		1 => 'Aquesta aplicació està escrita sota llicència GPL a través del phpBB Group. Si creeu que s\'ha d\'incloure una característica, visiteu la pàgina web phpbb.com i mireu què hi tenen a dir. No envieu demandes de noves característiques als fòrums de phpbb.com, el Grup utilitza sourceforge gestionar les tasques per incloure noves característiques. Llegeix els fòrums per veure quina és la posició dels autors, si és que en tenen, respecte una característica donada i llavors haureu de seguir el procediment descrit.'
	),
	array(
		0 => 'Amb qui s\'ha de contactar sobre abusos i/o problemes legals relacionats amb aquest fòrum?',
		1 => 'Primerament, hauríeu de contactar amb l\'administrador del fòrum. Si no podeu esbrinar qui és, primer hauríeu de contactar amb un dels moderadors del fòrum i preguntar-li amb qui us heu de posar en contacte. Si fins i tot així no obtinguéreu cap resposta, hauríeu de contactar amb el propietari del domini (podeu fer una cerca whois) o en cas de que el fòrum és en un servei gratuït (ex. yahoo, free.fr, f2s.com, etc.), l\'administració o departament d\'abús d\'aquest servei. Tingueu en compte que el phpBB Group no en té cap control i no pot ser de cap manera responsable de com, on o per qui aquest fòrum és utilitzat. És absolutament inútil contactar amb el phpBB Group en relació amb qualsevol problema legal (comentaris difamatoris, etc.) que no estiga relacionat directament amb la pàgina web phpbb.com o l\'aplicació de phpBB mateixa. Si envieu un email al phpBB Group sobre un ús aliè d\'aquesta aplicació hauríeu d\'esperar una resposta tibant o cap resposta en absolut.'
	)
);

?>
