<?php
/**
*
* memberlist [Occitan]
*
* @package language
* @version $Id : memberlist.php,v 1.35 2007/10/04 15 :07 :24 acydburn Exp $
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
// 'Pagina %s of %s' you can (and should) write 'Pagina %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Messatge %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
   'ABOUT_USER'   => 'Perfil',
   'ACTIVE_IN_FORUM'   => 'Fòrom pus popular ',
   'ACTIVE_IN_TOPIC'   => 'Tèma pus popular ',
   'ADD_FOE'   => 'Apondre a ma tièra d\'ignorats',
   'ADD_FRIEND'   => 'Apondre a ma tièra d\'amics',
   'AFTER'   => 'Aprèp',
   'ALL'   => 'Totes',
   'BEFORE'   => 'Abans',
   'CC_EMAIL'   => 'S\'enviar una copie d\'aqueste corrièl.',
   'CONTACT_USER'   => 'Contactar',
   'DEST_LANG'   => 'Lenga',
   'DEST_LANG_EXPLAIN'   => 'Causissètz una langue appropriée (se disponible) pel destinataire d\'aqueste messatge.',
   'EMAIL_BODY_EXPLAIN'   => 'Aqueste messatge serà enviat al format tèxt, ne pas inclure de còdi HTML ni de BBCode. L\'adreça de responsa a-n aqueste messatge serà vòstre adreça electronica.',
   'EMAIL_DISABLED'   => 'Desconsolat mas toutes los fonctions en rapòrt amb los corrièls son estats désactivées.',
   'EMAIL_SENT'   => 'L\'corrièl es estat enviat.',
   'EMAIL_TOPIC_EXPLAIN'   => 'Aqueste messatge serà enviat al format tèxt, ne pas inclure de còdi HTML ni de BBCode. Notatz que los entresenhas sul tèma son ja incluses dins lo messatge. L\'adreça de responsa a-n aqueste messatge serà vòstre adreça electronica.',
   'EMPTY_ADDRESS_EMAIL'   => 'Debètz fournir una adreça electronica valide pel destinataire.',
   'EMPTY_MESSAGE_EMAIL'   => 'Debètz écrire un messatge.',
   'EMPTY_MESSAGE_IM'		=> 'Debètz entrer un messatge a enviar.',
   'EMPTY_NAME_EMAIL'   => 'Debètz entrer lo nom réel del destinataire.',
   'EMPTY_SUBJECT_EMAIL'   => 'Debètz especificar un tèma pel corrièl.',
   'EQUAL_TO'   => 'Egal a',
   'FIND_USERNAME_EXPLAIN'   => 'Utilizatz aqueste formulari per rechercher un sòci. Avètz pas besoin de compléter totes los champs. Per efectuar una recèrca partielle, utilizatz un * coma joker. Utilizatz lo format de data <kbd>AAAA-MM-JJ</kbd>, per exemple : <samp>2004-02-29</samp>. Utilizatz las casas de seleccionar per seleccionar un o plusieurs noms d\'utilizaires (plusieurs noms d\'utilizaires pòdon èsser acceptés selon lo formulari lui-meteissa) puis clicatz sus "Insérer la seleccion" per retourner al formulari precedent.',
   'FLOOD_EMAIL_LIMIT'   => 'Podètz pas enviar un autre corrièl se rapidement. Réessayez a nouveau dins un momenton.',
   'GROUP_LEADER'   => 'Moderaire del grop',
   'HIDE_MEMBER_SEARCH'   => 'Amagar la recèrca dels sòcis',
   'IM_ADD_CONTACT'   => 'Apondre lo contact',
   'IM_AIM'   => 'Notatz que per utilizar aquesta foncion vos devez aver installat AOL Instant Messenger.',
   'IM_AIM_EXPRESS'   => 'AIM Express',
   'IM_DOWNLOAD_APP'   => 'Descargar l\'application',
   'IM_ICQ'   => 'Notatz que los sòcis ont pu causir de ne pas recevoir de messatges instantanés non sollicités.',
   'IM_JABBER'   => 'Notatz que los sòcis ont pu causir de ne pas recevoir de messatges instantanés non sollicités.',
   'IM_JABBER_SUBJECT'   => 'Ceci es un messatge automatique, merci de ne pas y respondre! Messatge de l\'utilizaire %1$s lo %2$s.',
   'IM_MESSAGE'   => 'Vòstre messatge',
   'IM_MSNM'   => 'Notatz que per utilizar aquesta foncion vos devez aver installat Windows Messenger.',
   'IM_MSNM_BROWSER'   => 'Vòstre navigateur ne supporte pas cela.',
   'IM_MSNM_CONNECT'   => 'Windows Messenger n\'es pas connectat.\nVous devez vos connectar per contunhar.',
   'IM_NAME'   => 'Vòstre nom',
   'IM_NO_DATA'			=> 'Pas cap de information de contact per aqueste utilizaire.',
   'IM_NO_JABBER'   => 'Desconsolat, la transmission de messatges instantanés dels utilizaires de Jabber n\'es pas supportée sus aqueste servidor. Vòstre devez aver un client Jabber installat sus vòstre sistèma per contacter lo destinataire çai-sus.',
   'IM_RECIPIENT'   => 'Destinataire',
   'IM_SEND'   => 'Enviar un messatge',
   'IM_SEND_MESSAGE'   => 'Enviar un messatge',
   'IM_SENT_JABBER'   => 'Vòstre messatge cap a %1$s es estat enviat.',
   'IM_USER'   => 'Enviar un messatge instantané',
   'LAST_ACTIVE'   => 'Darrièra visita ',
   'LESS_THAN'   => 'Moins que',
   'LIST_USER'   => '1 utilizaire',
   'LIST_USERS'   => '%d utilizaires',
   'LOGIN_EXPLAIN_LEADERS'   => 'L\'administrator exige que vos soyez enregistrat e connectat per veire la tièra dels sòcis de l\'équipe.',
   'LOGIN_EXPLAIN_MEMBERLIST'   => 'L\'administrator exige que vos soyez enregistrat e connectat per veire la tièra dels sòcis.',
   'LOGIN_EXPLAIN_SEARCHUSER'   => 'L\'administrator exige que vos soyez enregistrat e connectat per rechercher dels sòcis.',
   'LOGIN_EXPLAIN_VIEWPROFILE'   => 'L\'administrator exige que vos soyez enregistrat e connectat per veire los profils.',
   'MORE_THAN'   => 'Plus que',

   'NO_EMAIL'   => 'Podètz pas enviar d\'corrièl a-n aqueste sòci.',
   'NO_VIEW_USERS'   => 'Podètz pas veire la tièra dels sòcis o los profils.',
   'ORDER'   => 'Ordre',
   'OTHER'   => 'Autre',
   'POST_IP'   => 'Enviat dempuèi IP/domaine',
   'RANK'   => 'Rang',
   'REAL_NAME'   => 'Nom del destinataire',
   'RECIPIENT'   => 'Destinataire',
   'REMOVE_FOE'   => 'Suprimir de ma tièra d\'ignorats',
   'REMOVE_FRIEND'   => 'Suprimir de ma tièra d\'amics',
   'SEARCH_USER_POSTS'   => 'Recercar los messatges de l\'utilizaire',
   'SELECT_MARKED'   => 'Valider la seleccion',
   'SELECT_SORT_METHOD'   => 'Choisir la metòde de tri',
   'SEND_AIM_MESSAGE'   => 'Enviar un messatge AIM',
   'SEND_ICQ_MESSAGE'   => 'Enviar un messatge ICQ',
   'SEND_IM'   => 'Messatjariá instantanèa',
   'SEND_JABBER_MESSAGE'   => 'Enviar un messatge Jabber',
   'SEND_MESSAGE'   => 'Messatge',
   'SEND_MSNM_MESSAGE'   => 'Enviar un messatge MSN/WLM',
   'SEND_YIM_MESSAGE'   => 'Enviar un messatge YIM',
   'SORT_EMAIL'   => 'E-mail',
   'SORT_LAST_ACTIVE'   => 'Darrièra visita ',
   'SORT_POST_COUNT'   => 'Nombre de messatges',
   'USERNAME_BEGINS_WITH'   => 'Noms commençant per',
   'USER_ADMIN'   => 'Administrer l\'utilizaire',
   'USER_BAN'				=> 'Fòrabandiment',
   'USER_FORUM'   => 'Estatisticas de l\'utilizaire',
   'USER_ONLINE'   => 'Connectat',
   'USER_PRESENCE'   => 'Présence sul forum',
   'VIEWING_PROFILE'   => 'Vista del perfil - %s',
   'VISITED'   => 'Darrièra visita ',
   'WWW'   => 'Sit web ',
));

 ?>
