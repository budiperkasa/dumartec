<?php
/** 
*
* acp_ban [Italian]
*
* @package language
* @version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c)  2008 phpBB.it - translated on 2008/11/05
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @original copyright: (c) 2005 phpBB Group
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 ora',
	'30_MINS'		=> '30 minuti',
	'6_HOURS'		=> '6 ore',

	'ACP_BAN_EXPLAIN'	=> 'Da qui puoi effettuare il ban di utenti tramite il nome, l’IP o l’indirizzo e-mail. Questo impedisce all’utente di raggiungere alcuna parte della board. Puoi allegare una breve spiegazione del ban se lo desideri (30000 caratteri), che verrà visualizzata anche nel log amministratore. Anche la durata del ban può essere specificata. Se desideri che un ban finisca ad una data specifica piuttosto che dopo un periodo di tempo determinato, seleziona <span style="text-decoration: underline;">Fino a -&gt;</span> nella durata del ban e inserisci una data nel formato <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Escludi dal ban',
	'BAN_LENGTH'			=> 'Durata del ban',
	'BAN_REASON'			=> 'Motivo del ban',
	'BAN_GIVE_REASON'		=> 'Motivazione visualizzata dal bannato',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista dei ban aggiornata.',

	'EMAIL_BAN'					=> 'Banna uno o più indirizzi e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Attiva questo per escludere l’indirizzo e-mail inserito da tutti i ban correnti.',
	'EMAIL_BAN_EXPLAIN'			=> 'Puoi indicare più di un indirizzo e-mail inserendone uno per linea. Per indirizzi parziali usa “*” es. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Nessun indirizzo e-mail bannato',
	'EMAIL_UNBAN'				=> 'Riabilita o non escludere e-mail',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Puoi riabilitare (o non escludere) dal ban più indirizzi e-mail in una volta, utilizzando l’appropriata combinazione di mouse e tastiera per il tuo computer e browser. Gli indirizzi e-mail esclusi hanno uno sfondo grigio.',

	'IP_BAN'					=> 'Banna uno o più IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Attiva questo per escludere l’indirizzo IP da tutti i ban correnti.',
	'IP_BAN_EXPLAIN'			=> 'Puoi indicare diversi IP o nome server inserendone uno per linea. Per indicare un range di indirizzi IP, separane l’inizio e la fine con un trattino (-) mentre per indicare un’abbreviazione usa “*”.',
	'IP_HOSTNAME'				=> 'Indirizzo IP o nome server',
	'IP_NO_BANNED'				=> 'Nessun indirizzo IP bannato',
	'IP_UNBAN'					=> 'Riabilita o non escludere IP',
	'IP_UNBAN_EXPLAIN'			=> 'Puoi riabilitare (o non-escludere) dal ban più indirizzi IP in una volta, utilizzando l’appropriata combinazione di mouse e tastiera per il tuo computer e browser. Gli IP esclusi hanno uno sfondo grigio.',

	'LENGTH_BAN_INVALID'		=> 'La data deve essere nel formato <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanente',
	
	'UNTIL'						=> 'Fino a',
	'USER_BAN'					=> 'Banna uno o più nomi utente',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Attiva questo per escludere gli utenti inseriti da tutti i ban correnti.',
	'USER_BAN_EXPLAIN'			=> 'Puoi bannare più utenti inserendone uno per linea. Usa <span style="text-decoration: underline;">Trova utente</span> per trovare e aggiungere uno o più utenti automaticamente.',
	'USER_NO_BANNED'			=> 'Nessun nome utente bannato',
	'USER_UNBAN'				=> 'Riabilita o non escludere nomi utente',
	'USER_UNBAN_EXPLAIN'		=> 'Puoi riabilitare (o non-escludere) dal ban più utenti in una volta, utilizzando l’appropriata combinazione di mouse e tastiera per il tuo computer e browser. Gli utenti esclusi hanno uno sfondo grigio.',
	

));

?>