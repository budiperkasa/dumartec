<?php
/**
*
* acp_groups [Italian]
*
* @package language
* @version $Id: groups.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Da qui puoi amministrare tutti i tuoi gruppi. Puoi crearli, cancellarli e modificarli. Puoi nominare i leader di gruppo, commutare lo stato aperto/nascosto/chiuso e impostare il nome e la descrizione.',
	'ADD_USERS'						=> 'Aggiungi utenti',
	'ADD_USERS_EXPLAIN'				=> 'Da qui puoi aggiungere nuovi utenti al gruppo. Devi scegliere se questo gruppo diventa il nuovo gruppo predefinito per gli utenti selezionati. Inoltre puoi definire tali utenti come leader del gruppo. Inserisci ogni nome utente su linee separate.',

	'COPY_PERMISSIONS'				=> 'Copia permessi da',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Una volta creato, il gruppo avrà gli stessi permessi del gruppo selezionato.',
	'CREATE_GROUP'					=> 'Crea nuovo gruppo',

	'GROUPS_NO_MEMBERS'				=> 'Questo gruppo non ha membri',
	'GROUPS_NO_MODS'				=> 'Nessun leader del gruppo specificato',
	'GROUP_APPROVE'					=> 'Accetta membro',
	'GROUP_APPROVED'				=> 'Membri del gruppo',
	'GROUP_AVATAR'					=> 'Avatar gruppo',
	'GROUP_AVATAR_EXPLAIN'			=> 'Questa immagine sarà mostrata nel Pannello di Controllo Gruppo.',
	'GROUP_CLOSED'					=> 'Chiuso',
	'GROUP_COLOR'					=> 'Colore del gruppo',
	'GROUP_COLOR_EXPLAIN'			=> 'Definisce il colore che avranno i nomi utente degli appartenenti al gruppo: lascia vuoto per usare il colore predefinito.',
	'GROUP_CONFIRM_ADD_USER'        => 'Sei sicuro di voler aggiungere l’utente %1$s al gruppo?',
	'GROUP_CONFIRM_ADD_USERS'       => 'Sei sicuro di voler aggiungere gli utenti %1$s al gruppo?',
	'GROUP_CREATED'					=> 'Il gruppo è stato creato.',
	'GROUP_DEFAULT'					=> 'Rendi il gruppo come predefinito per i membri',
	'GROUP_DEFS_UPDATED'			=> 'Gruppo predefinito impostato per tutti i membri selezionati.',
	'GROUP_DELETE'					=> 'Rimuovi membro dal gruppo',
	'GROUP_DELETED'					=> 'Gruppo cancellato e gruppo predefinito utente impostato.',
	'GROUP_DEMOTE'					=> 'Retrocedi leader del gruppo',
	'GROUP_DESC'					=> 'Descrizione gruppo',
	'GROUP_DETAILS'					=> 'Dettagli gruppo',
	'GROUP_EDIT_EXPLAIN'			=> 'Da qui puoi modificare un gruppo esistente. Puoi cambiarne il nome, la descrizione e il tipo (aperto, chiuso, ecc.). Puoi anche impostare alcune opzioni globali di gruppo come i colori, i livelli, ecc. I cambiamenti qui effettuati vanno a sostituire quelli correnti degli utenti. Tieni presente che gli appartenenti al gruppo possono sostituire l’avatar di gruppo con un altro, a meno che non siano impostati permessi utente appropriati.',
	'GROUP_ERR_USERS_EXIST'			=> 'Gli utenti specificati sono già membri di questo gruppo.',
	'GROUP_FOUNDER_MANAGE'			=> 'Gestione riservata ai fondatori del gruppo',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Riserva la gestione di questo gruppo ai soli fondatori. Gli utenti che hanno permessi per questo gruppo possono comunque vedere il gruppo e i suoi membri.',
	'GROUP_HIDDEN'					=> 'Nascosto',
	'GROUP_LANG'					=> 'Lingua del gruppo',
	'GROUP_LEAD'					=> 'Leader del gruppo',
	'GROUP_LEADERS_ADDED'			=> 'Nuovi leader aggiunti.',
	'GROUP_LEGEND'					=> 'Mostra gruppo nella legenda',
	'GROUP_LIST'					=> 'Membri attuali',
	'GROUP_LIST_EXPLAIN'			=> 'Questa è la lista completa di tutti i membri appartenenti a questo gruppo. Puoi cancellare membri (eccetto in alcuni gruppi speciali) o aggiungerne di nuovi al loro posto.',
	'GROUP_MEMBERS'					=> 'Membri del gruppo',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Questa è la lista completa di tutti i membri di questo gruppo. Include sezioni separate per i moderatori e i membri esistenti o in sospeso. Da qui puoi gestire tutti gli aspetti di chi appartiene a questo gruppo e i loro ruoli. Per rimuovere un moderatore del gruppo mantenendolo come membro del gruppo usa Retrocedi anziché Cancella. Ugualmente usa Promuovi per fare di un membro esistente un moderatore.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limite messaggi privati gruppo per cartella',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Questa impostazione sostituisce quella che limita i messaggi utente. Il valore 0 significa che il limite predefinito per utente rimarrà in uso.',
	'GROUP_MODS_ADDED'				=> 'Nuovo leader del gruppo aggiunto.',
	'GROUP_MODS_DEMOTED'			=> 'Leader del gruppo retrocesso.',
	'GROUP_MODS_PROMOTED'			=> 'Membro del gruppo promosso.',
	'GROUP_NAME'					=> 'Nome gruppo',
	'GROUP_NAME_TAKEN'				=> 'Il nome del gruppo inserito è già in uso, creane uno con il nome diverso.',
	'GROUP_OPEN'					=> 'Aperto',
	'GROUP_PENDING'					=> 'Membri in sospeso',
    'GROUP_MAX_RECIPIENTS'          => 'Numero massimo di destinatari consentiti per messaggio privato',
    'GROUP_MAX_RECIPIENTS_EXPLAIN'  => 'Il numero massimo di destinatari consentiti in un messaggio privato. Se viene inserito 0, valgono le impostazioni globali.',
	'GROUP_PROMOTE'					=> 'Promuovi a leader del gruppo',
	'GROUP_RANK'					=> 'Livello gruppo',
	'GROUP_RECEIVE_PM'				=> 'Il gruppo può ricevere messaggi privati',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'I gruppi nascosti non possono essere raggiunti da messaggi privati, senza questo settaggio.',
	'GROUP_REQUEST'					=> 'Richiesta',
	'GROUP_SETTINGS_SAVE'			=> 'Impostazioni globali gruppo',
	'GROUP_TYPE'					=> 'Tipo gruppo',
	'GROUP_TYPE_EXPLAIN'			=> 'Questo determina quali utenti possono raggiungere o vedere questo gruppo.',
	'GROUP_UPDATED'					=> 'Preferenze gruppo aggiornate.',
	
	'GROUP_USERS_ADDED'				=> 'Nuovi utenti aggiunti al gruppo.',
	'GROUP_USERS_EXIST'				=> 'Gli utenti selezionati sono già membri del gruppo.',
	'GROUP_USERS_REMOVE'			=> 'Utenti rimossi dal gruppo e nuovi predefiniti impostati.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Rendi il gruppo come predefinito per tutti i membri',
	'MEMBERS'				=> 'Membri',

	'NO_GROUP'					=> 'Nessun gruppo specificato.',
	'NO_GROUPS_CREATED'			=> 'Non è stato ancora creato nessun gruppo.',
	'NO_PERMISSIONS'			=> 'Non copiare i permessi',
	'NO_USERS'					=> 'Non hai inserito alcun utente.',
	'NO_USERS_ADDED'			=> 'Nessun utente è stato aggiunto al gruppo.',
	'NO_VALID_USERS'            => 'Non hai inserito nessun utente eleggibile per quella azione.',
	
	'SPECIAL_GROUPS'			=> 'Gruppi preimpostati',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'I gruppi preimpostati sono gruppi speciali che non possono essere eliminati o modificati direttamente. Puoi comunque aggiungere utenti e modificare le impostazioni di base.',

	'TOTAL_MEMBERS'				=> 'Membri',

	'USERS_APPROVED'				=> 'Utenti approvati.',
	'USER_DEFAULT'					=> 'Utente predefinito',
	'USER_DEF_GROUPS'				=> 'Gruppi definiti dall’utente',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Questi sono gruppi creati da un amministratore. Puoi  modificarne le proprietà, cancellarlo oltre a gestire tutti gli utenti. Cliccando su “Predefinito” puoi impostare il gruppo relativo a predefinito per tutti i suoi appartenenti.',
	'USER_GROUP_DEFAULT'			=> 'Imposta come gruppo predefinito',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Selezionando Sì imposterai il gruppo come gruppo predefinito per l’aggiunta di utenti.',
	'USER_GROUP_LEADER'				=> 'Imposta come leader del gruppo',
));

?>