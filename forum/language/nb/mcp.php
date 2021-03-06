<?php
/**
*
* mcp.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-06-25 - phpBB.no
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
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
  'ACTION_NOTE'  => 'Handling/notat',
  'MCP_POST_REPORTS'  => 'Rapporter alt som omhandler dette innlegget',
  'MERGE_TOPICS'  => 'Slå sammen emner',
  'MERGE_TOPICS_CONFIRM'  => 'Er du sikker på at du vil slå sammen de valgte emnene?',
  'MODERATE_TOPIC'  => 'Moderer emne',
  'MODERATE_POST'  => 'Moderer innlegg',
  'NO_REPORT'  => 'Ingen rapporter funnet',
  'NO_REPORT_SELECTED'  => 'Velg minst èn rapport for å utføre den valgte handlingen.',
  'NO_TOPICS_QUEUE'  => 'Ingen emner',
  'SELECT_MERGE'  => 'Velg for sammenslåing',
  'CANNOT_WARN_SELF'  => 'Du kan ikke advare deg selv',
  'DELETE_SHADOW_TOPIC'  => 'Slett skygget emne',
  'IPS_POSTED_FROM'  => 'IP-adresse denne brukeren har postet fra',
  'MODERATE_FORUM'  => 'Moderer forum',
  'NO_DESTINATION_FORUM_FOUND'  => 'Destinasjonsforumet ble ikke funnet.',
  'NO_REPORTS'  => 'Ingen rapporter',
  'NO_TOPIC_ICON'  => 'Ingen',
  'REPORTED_BY'  => 'Rapportert av:',
  'REPORTED_ON_DATE'  => 'Tid:',
  'RETURN_TOPIC_SIMPLE'  => '%sTilbake til emnet%s',
  'SEARCH_POSTS_BY_USER'  => 'Søk etter innlegg av',
  'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'  => 'Merk forumet hvor du vil at denne globale annonseringen skal være.',
  'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'  => 'Et eller flere av de merkede emnene er globale annonseringer. Merk forumet hvor disse skal være.',
  'SELECT_TOPICS_FROM'  => 'Merk emner fra',
  'TOPICS_TYPE_CHANGED'  => 'Emnetypene er endret.',
  'WARNING_POST_DEFAULT'  => 'Dette er en advarsel som angår et innlegg som er skrevet av deg: %s',
  'ACTION'  => 'Handling',
  'ADD_FEEDBACK'  => 'Legg til kommentarer',
  'ADD_FEEDBACK_EXPLAIN'  => 'Hvis du vil legge til en rapport fyller du ut følgende tekstfelt. Bruk bare ren tekst; HTML, BBKode og lignende er ikke tillatt.',
  'ADD_WARNING'  => 'Legg til advarsel',
  'ADD_WARNING_EXPLAIN'  => 'For å sende en advarsel til denne brukeren fyller du ut tekstfeltet nedenfor. Bruk bare ren tekst; HTML, BBKode og lignende er ikke tillatt.',
  'ALL_ENTRIES'  => 'Alle oppføringer',
  'ALL_NOTES_DELETED'  => 'Alle brukernotater er fjernet.',
  'ALL_REPORTS'  => 'Alle rapporter',
  'ALREADY_REPORTED'  => 'Dette innlegget har allerede blitt rapportert.',
  'ALREADY_WARNED'  => 'En advarsel har allerede blitt sendt for dette innlegget.',
  'APPROVE'  => 'Godkjenn',
  'APPROVE_POST'  => 'Godkjenn innlegg',
  'APPROVE_POST_CONFIRM'  => 'Er du sikker på at du vil godkjenne dette innlegget?',
  'APPROVE_POSTS'  => 'Godkjenn innlegg',
  'APPROVE_POSTS_CONFIRM'  => 'Er du sikker på at du vil godkjenne de valgte innleggene?',
  'CANNOT_MOVE_SAME_FORUM'  => 'Du kan ikke flytte et emne til det samme forumet som det allerede er i.',
  'CANNOT_WARN_ANONYMOUS'  => 'Du kan ikke advare en anonym bruker',
  'CAN_LEAVE_BLANK'  => 'Dette feltet kan være blankt',
  'CHANGE_POSTER'  => 'Endre eier av innlegget',
  'CLOSE_REPORT'  => 'Lukk rapport',
  'CLOSE_REPORT_CONFIRM'  => 'Er du sikker på at du vil lukke den valgte rapporten?',
  'CLOSE_REPORTS'  => 'Lukk rapporter',
  'CLOSE_REPORTS_CONFIRM'  => 'Er du sikker på at du vil lukke de valgte rapportene?',
  'DELETE_POSTS'  => 'Slett innlegg',
  'DELETE_POSTS_CONFIRM'  => 'Er du sikker på at du vil slette disse innleggene?',
  'DELETE_POST_CONFIRM'  => 'Er du sikker på at du vil slette dette innlegget?',
  'DELETE_REPORT'  => 'Slett rapport',
  'DELETE_REPORT_CONFIRM'  => 'Er du sikker på at du vil slette den valgte rapporten?',
  'DELETE_REPORTS'  => 'Slett rapporter',
  'DELETE_REPORTS_CONFIRM'  => 'Er du sikker på at du vil slette de valgte rapportene?',
  'DELETE_TOPICS'  => 'Slett valgte emner',
  'DELETE_TOPICS_CONFIRM'  => 'Er du sikker på at du vil slette disse emnene?',
  'DELETE_TOPIC_CONFIRM'  => 'Er du sikker på at du vil slette dette emnet?',
  'DISAPPROVE'  => 'Forkast',
  'DISAPPROVE_REASON'  => 'Grunn til forkastning',
  'DISAPPROVE_POST'  => 'Forkast innlegg',
  'DISAPPROVE_POST_CONFIRM'  => 'Er du sikker på at du vil forkaste dette innlegget?',
  'DISAPPROVE_POSTS'  => 'Forkast innlegg',
  'DISAPPROVE_POSTS_CONFIRM'  => 'Er du sikker på at du vil forkaste de valgte innleggene?',
  'DISPLAY_LOG'  => 'Vis oppføringer fra forrige',
  'DISPLAY_OPTIONS'  => 'Vis valg',
  'EMPTY_REPORT'  => 'Du må skrive inn en beskrivelse når du velger denne grunnen.',
  'EMPTY_TOPICS_REMOVED_WARNING'  => 'Et eller flere emner har blitt fjernet fra databasen fordi de var eller ble tomme.',
  'FEEDBACK'  => 'Tilbakemelding',
  'FORK'  => 'Kopier',
  'FORK_TOPIC'  => 'Kopier emne',
  'FORK_TOPIC_CONFIRM'  => 'Er du sikker på at du vil kopiere dette emnet?',
  'FORK_TOPICS'  => 'Kopier valgte emner',
  'FORK_TOPICS_CONFIRM'  => 'Er du sikker på at du vil kopiere de valgte emnene?',
  'FORUM_DESC'  => 'Beskrivelse',
  'FORUM_NAME'  => 'Forumnavn',
  'FORUM_NOT_EXIST'  => 'Forumet du har valgt eksisterer ikke.',
  'FORUM_NOT_POSTABLE'  => 'Det er ikke mulig å legge til innlegg i forumet du har valgt.',
  'FORUM_STATUS'  => 'Forumstatus',
  'FORUM_STYLE'  => 'Forumstil',
  'GLOBAL_ANNOUNCEMENT'  => 'Global annonsering',
  'IP_INFO'  => 'IP-informasjon',
  'LATEST_LOGS'  => 'Siste 5 loggede handlinger',
  'LATEST_REPORTED'  => 'Siste 5 rapporter',
  'LATEST_UNAPPROVED'  => 'Siste 5 poster som venter på godkjenning',
  'LATEST_WARNING_TIME'  => 'Siste advarsel utstedt',
  'LATEST_WARNINGS'  => 'Siste fem advarsler',
  'LEAVE_SHADOW'  => 'La speilet kopi ligge',
  'LIST_REPORT'  => '1 rapport',
  'LIST_REPORTS'  => '%d rapporter',
  'LOCK'  => 'Lås',
  'LOCK_POST_POST'  => 'Lås innlegg',
  'LOCK_POST_POST_CONFIRM'  => 'Er du sikker på at du vil forhindre redigering av dette innlegget?',
  'LOCK_POST_POSTS'  => 'Lås valgte innlegg',
  'LOCK_POST_POSTS_CONFIRM'  => 'Er du sikker på at du vil forhindre endringer av de valgte innleggene?',
  'LOCK_TOPIC_CONFIRM'  => 'Er du sikker på at du vil låse dette emnet?',
  'LOCK_TOPICS'  => 'Lås valgte emner',
  'LOCK_TOPICS_CONFIRM'  => 'Er du sikker på at du vil låse alle de valgte emnene?',
  'LOGS_CURRENT_TOPIC'  => 'Ser på logger over:',
  'LOGIN_EXPLAIN_MCP'  => 'For å moderere dette forumet må du logge deg inn.',
  'LOGVIEW_VIEWTOPIC'  => 'Vis emne',
  'LOGVIEW_VIEWLOGS'  => 'Vis emneloggen',
  'LOGVIEW_VIEWFORUM'  => 'Vis forum',
  'LOOKUP_ALL'  => 'Slå opp alle IPer',
  'LOOKUP_IP'  => 'Slå opp IP',
  'MARKED_NOTES_DELETED'  => 'Alle brukernotater er slettet',
  'MCP_ADD'  => 'Legg til en advarsel',
  'MCP_BAN'  => 'Utestenging',
  'MCP_BAN_EMAILS'  => 'Utesteng epostadresser',
  'MCP_BAN_IPS'  => 'Utesteng IPer',
  'MCP_BAN_USERNAMES'  => 'Utesteng brukernavn',
  'MCP_LOGS'  => 'Moderatorlogger',
  'MCP_LOGS_FRONT'  => 'Hovedside',
  'MCP_LOGS_FORUM_VIEW'  => 'Forumlogger',
  'MCP_LOGS_TOPIC_VIEW'  => 'Emnelogger',
  'MCP_MAIN'  => 'Hovedside',
  'MCP_MAIN_FORUM_VIEW'  => 'Vis forum',
  'MCP_MAIN_FRONT'  => 'Hovedside',
  'MCP_MAIN_POST_DETAILS'  => 'Innleggsdetaljer',
  'MCP_MAIN_TOPIC_VIEW'  => 'Vis emne',
  'MCP_MAKE_ANNOUNCEMENT'  => 'Gjør om til annonsering',
  'MCP_MAKE_ANNOUNCEMENT_CONFIRM'  => 'Er du sikker på at du vil gjøre om det valgte innlegget til en annonsering?',
  'MCP_MAKE_ANNOUNCEMENTS'  => 'Gjør om til annonseringer',
  'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'  => 'Er du sikker på at du vil gjøre om de valgte emnene til annonseringer?',
  'MCP_MAKE_GLOBAL'  => 'Gjør om til global annonsering',
  'MCP_MAKE_GLOBAL_CONFIRM'  => 'Er du sikker på at du vil gjøre om det valgte emnet til en global annonsering?',
  'MCP_MAKE_GLOBALS'  => 'Gjør om til globale annonseringer',
  'MCP_MAKE_GLOBALS_CONFIRM'  => 'Er du sikker på at du vil gjøre om de valgte emnene til globale annonseringer?',
  'MCP_MAKE_STICKY'  => 'Gjør om til prioritert emne',
  'MCP_MAKE_STICKY_CONFIRM'  => 'Er du sikker på at du vil gjøre om det valgte emnet til et prioritert emne?',
  'MCP_MAKE_STICKIES'  => 'Gjør om til prioriterte emner',
  'MCP_MAKE_STICKIES_CONFIRM'  => 'Er du sikker på at du vil gjøre om de valgte emnene til prioriterte emner?',
  'MCP_MAKE_NORMAL'  => 'Gjør om til standardemne',
  'MCP_MAKE_NORMAL_CONFIRM'  => 'Er du sikker på at du vil gjøre om det valgte emnet til et standardemne?',
  'MCP_MAKE_NORMALS'  => 'Gjør om til standardemner',
  'MCP_MAKE_NORMALS_CONFIRM'  => 'Er du sikker på at du vil gjøre om de valgte emnene til standardemner?',
  'MCP_NOTES'  => 'Brukernotater',
  'MCP_NOTES_FRONT'  => 'Hovedside',
  'MCP_NOTES_USER'  => 'Brukerdetaljer',
  'MCP_REPORTS'  => 'Rapporterte innlegg',
  'MCP_REPORT_DETAILS'  => 'Rapportdetaljer',
  'MCP_REPORTS_CLOSED'  => 'Lukkede rapporter',
  'MCP_REPORTS_CLOSED_EXPLAIN'  => 'Dette er en liste over alle ferdigbehandlede innleggsrapporter.',
  'MCP_REPORTS_OPEN'  => 'åpne rapporter',
  'MCP_REPORTS_OPEN_EXPLAIN'  => 'Dette er en liste over alle innleggsrapporter som ennå ikke er blitt behandlet.',
  'MCP_QUEUE'  => 'Modereringskø',
  'MCP_QUEUE_APPROVE_DETAILS'  => 'Godkjenningsdetaljer',
  'MCP_QUEUE_UNAPPROVED_POSTS'  => 'Innleggene venter på godkjenning',
  'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'  => 'Dette er en liste over alle innlegg som krever godkjenning før de vil bli synlige for forumets brukere.',
  'MCP_QUEUE_UNAPPROVED_TOPICS'  => 'Emner som venter på godkjenning',
  'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'  => 'Dette er en liste over alle emner som krever godkjenning før de vil bli synlige for forumets brukere.',
  'MCP_VIEW_USER'  => 'Se på advarsler for en spesifikk bruker',
  'MCP_WARN'  => 'Advarsler',
  'MCP_WARN_FRONT'  => 'Hovedside',
  'MCP_WARN_LIST'  => 'Liste over advarsler',
  'MCP_WARN_POST'  => 'Advarsel for et spesifikt innlegg',
  'MCP_WARN_USER'  => 'Advar bruker',
  'MERGE_POSTS'  => 'Slå sammen innlegg',
  'MERGE_POSTS_CONFIRM'  => 'Er du sikker på at du vil slå sammen de valgte innleggene?',
  'MERGE_TOPIC_EXPLAIN'  => 'Ved å bruke nedenforstående skjema kan du flytte innleggene du velger inn i et annet emne. Innleggene vil legge seg sist i emnet uavhengig av når de er postet, slik at det ser ut som om de er postet nå.<br />Skriv inn emne-IDen til destinasjonsemnet, eller bruk "Velg"-knappen for å søke deg fram til riktig emne.',
  'MERGE_TOPIC_ID'  => 'Destinasjonsemnets ID',
  'MOD_OPTIONS'  => 'Moderatorvalg',
  'MORE_INFO'  => 'Ytterligere informasjon',
  'MOST_WARNINGS'  => 'Brukere med flest advarsler',
  'MOVE_TOPIC_CONFIRM'  => 'Er du sikker på at du vil flytte det valgte emnet til et annet forum?',
  'MOVE_TOPICS'  => 'Flytt valgte emner',
  'MOVE_TOPICS_CONFIRM'  => 'Er du sikker på at du vil flytte de valgte emnene til et annet forum?',
  'NOTIFY_POSTER_APPROVAL'  => 'Informere brukeren om godkjennelsen?',
  'NOTIFY_POSTER_DISAPPROVAL'  => 'Informere brukeren om forkastelsen?',
  'NOTIFY_USER_WARN'  => 'Informere brukeren om advarselen?',
  'NOT_MODERATOR'  => 'Du er ikke en moderator for dette forumet.',
  'NO_DESTINATION_FORUM'  => 'Du må velge et destinasjonsforum.',
  'NO_ENTRIES'  => 'Ingen loggoppføringer for denne perioden.',
  'NO_FEEDBACK'  => 'Ingen tilbakemeldinger eksisterer for denne brukeren.',
  'NO_FINAL_TOPIC_SELECTED'  => 'Du må velge et destinasjonsemne når du flytter innlegg.',
  'NO_MATCHES_FOUND'  => 'Ingen treff funnet.',
  'NO_POST'  => 'Du må velge et innlegg for å kunne advare brukeren for et innlegg.',
  'NO_POST_REPORT'  => 'Dette innlegget var ikke rapportert.',
  'NO_POST_SELECTED'  => 'Du må velge minst ett innlegg for å utføre denne handlingen',
  'NO_REASON_DISAPPROVAL'  => 'Vennligst oppgi en passende grunn for forkastingen',
  'NO_TOPIC_SELECTED'  => 'Du må velge minst ett emne for å kunne utføre denne handlingen.',
  'ONLY_TOPIC'  => 'Bare emnet "%s"',
  'OTHER_USERS'  => 'Brukere som har skrevet innlegg fra denne IPen',
  'POSTER'  => 'Bruker',
  'POSTS_APPROVED_SUCCESS'  => 'De valgte innleggene har blitt godkjent.',
  'POSTS_DELETED_SUCCESS'  => 'De valgte innleggene har blitt fjernet fra databasen.',
  'POSTS_DISAPPROVED_SUCCESS'  => 'De valgte innleggene har blitt forkastet.',
  'POSTS_LOCKED_SUCCESS'  => 'De valgte innleggene har blitt låst.',
  'POSTS_MERGED_SUCCESS'  => 'De valgte innleggene har blitt sammenslått.',
  'POSTS_UNLOCKED_SUCCESS'  => 'De valgte innleggene har blitt åpnet.',
  'POSTS_PER_PAGE'  => 'Innlegg per side',
  'POSTS_PER_PAGE_EXPLAIN'  => '(Sett til 0 for å vise alle innlegg)',
  'POST_APPROVED_SUCCESS'  => 'Det valgte innlegget har blitt godkjent.',
  'POST_DELETED_SUCCESS'  => 'Det valgte innlegget har blitt fjernet fra databasen.',
  'POST_DISAPPROVED_SUCCESS'  => 'Det valgte innlegget har blitt forkastet.',
  'POST_LOCKED_SUCCESS'  => 'Innlegget ble stengt.',
  'POST_NOT_EXIST'  => 'Innlegget du forespurte eksisterer ikke.',
  'POST_REPORTED_SUCCESS'  => 'Innlegget har blitt rapportert.',
  'POST_UNLOCKED_SUCCESS'  => 'Innlegget er åpnet.',
  'READ_USERNOTES'  => 'Brukernotater',
  'READ_WARNINGS'  => 'Brukeradvarsler',
  'REPORTER'  => 'Rapporter',
  'REPORTED'  => 'Rapportert',
  'REPORTS_CLOSED_SUCCESS'  => 'Den valgte rapporten har blitt avsluttet.',
  'REPORTS_DELETED_SUCCESS'  => 'De valgte rapportene har blitt avsluttet.',
  'REPORTS_TOTAL'  => 'Totalt er det <strong>%d</strong> ubehandlede rapporter.',
  'REPORTS_ZERO_TOTAL'  => 'Det er ingen ubehandlede rapporter.',
  'REPORT_CLOSED'  => 'Denne rapporten har tidligere blitt avsluttet.',
  'REPORT_CLOSED_SUCCESS'  => 'Den valgte rapporten har blitt avsluttet.',
  'REPORT_DELETED_SUCCESS'  => 'Den valgte rapporten har blitt slettet.',
  'REPORT_DETAILS'  => 'Rapportdetaljer',
  'REPORT_MESSAGE'  => 'Rapporter denne meldingen',
  'REPORT_MESSAGE_EXPLAIN'  => 'Bruk dette skjemaet for å rapportere meldingen til forumets administrator. Rapportering skal generelt sett bare brukes om meldingen bryter forumreglene.',
  'REPORT_NOTIFY'  => 'Varsle meg',
  'REPORT_NOTIFY_EXPLAIN'  => 'Varsler deg når rapporten er behandlet.',
  'REPORT_POST_EXPLAIN'  => 'Bruk dette skjemaet for å rapportere innlegget til forumets administrator. Rapportering skal generelt sett bare brukes om meldingen bryter forumreglene.',
  'REPORT_REASON'  => 'Rapportgrunn',
  'REPORT_TIME'  => 'Rapporttid',
  'REPORT_TOTAL'  => 'Totalt er det <strong>1</strong> ubehandlet rapport.',
  'RESYNC'  => 'Resynkroniser',
  'RETURN_MESSAGE'  => '%sReturner til meldingen%s',
  'RETURN_NEW_FORUM'  => '%sReturner til det nye forumet%s',
  'RETURN_NEW_TOPIC'  => '%sReturner til det nye emnet%s',
  'RETURN_POST'  => '%sReturner til innlegget%s',
  'RETURN_QUEUE'  => '%sReturner til køen%s',
  'RETURN_REPORTS'  => '%sReturner til rapportene%s',
  'SELECT_ACTION'  => 'Velg ønsket handling',
  'SELECT_TOPIC'  => 'Velg emne',
  'SELECT_USER'  => 'Velg bruker',
  'SORT_ACTION'  => 'Logg handling',
  'SORT_DATE'  => 'Dato',
  'SORT_IP'  => 'IP-addresse',
  'SORT_WARNINGS'  => 'Advarsler',
  'SPLIT_AFTER'  => 'Splitt fra og med valgte innlegg',
  'SPLIT_FORUM'  => 'Forum for det nye emnet',
  'SPLIT_POSTS'  => 'Splitt ut valgte innlegg',
  'SPLIT_SUBJECT'  => 'Navn på det nye emnet',
  'SPLIT_TOPIC_ALL'  => 'Splitt emne fra valgte innlegg',
  'SPLIT_TOPIC_ALL_CONFIRM'  => 'Er du sikker på at du vil splitte dette emnet?',
  'SPLIT_TOPIC_BEYOND'  => 'Splitt emne ved valgt innlegg',
  'SPLIT_TOPIC_BEYOND_CONFIRM'  => 'Er du sikker på at du vil splitte emnet ved det valgte innlegget?',
  'SPLIT_TOPIC_EXPLAIN'  => 'Ved å bruke skjemaet under kan du splitte et emne i to, enten ved å velge innleggene du vil splitte ut individuelt, eller ved å splitte emnet ved et valgt innlegg.',
  'THIS_POST_IP'  => 'IP for dette innlegget',
  'TOPICS_APPROVED_SUCCESS'  => 'De valgte emnene har blitt godkjent.',
  'TOPICS_DELETED_SUCCESS'  => 'De valgte emnene har blitt fjernet fra databasen.',
  'TOPICS_DISAPPROVED_SUCCESS'  => 'De valgte emnene har blitt forkastet.',
  'TOPICS_FORKED_SUCCESS'  => 'De valgte emnene har blitt kopiert.',
  'TOPICS_LOCKED_SUCCESS'  => 'De valgte emnene har blitt låst.',
  'TOPICS_MOVED_SUCCESS'  => 'De valgte emnene har blitt flyttet.',
  'TOPICS_RESYNC_SUCCESS'  => 'De valgte emnene har blitt resynkronisert.',
  'TOPICS_UNLOCKED_SUCCESS'  => 'De valgte emnene har blitt åpnet.',
  'TOPIC_APPROVED_SUCCESS'  => 'Det valgte emnet har blitt godkjent.',
  'TOPIC_DELETED_SUCCESS'  => 'Det valgte emnet er slettet fra databasen.',
  'TOPIC_DISAPPROVED_SUCCESS'  => 'Det valgte emnet har blitt forkastet.',
  'TOPIC_FORKED_SUCCESS'  => 'Det valgte emnet har blitt kopiert.',
  'TOPIC_LOCKED_SUCCESS'  => 'Det valgte emnet har blitt låst.',
  'TOPIC_MOVED_SUCCESS'  => 'Det valgte emnet har blitt flyttet.',
  'TOPIC_NOT_EXIST'  => 'Emnet du valgte eksisterer ikke.',
  'TOPIC_RESYNC_SUCCESS'  => 'Det valgte emnet har blitt resynkronisert.',
  'TOPIC_SPLIT_SUCCESS'  => 'Det valgte emnet har blitt splittet.',
  'TOPIC_TIME'  => 'Emnetid',
  'TOPIC_TYPE_CHANGED'  => 'Emnetypen har blitt forandret',
  'TOPIC_UNLOCKED_SUCCESS'  => 'Det valgte emnet har blitt åpnet',
  'TOTAL_WARNINGS'  => 'Antall advarsler',
  'UNAPPROVED_POSTS_TOTAL'  => 'Totalt er det <strong>%d</strong> innlegg som venter på godkjenning.',
  'UNAPPROVED_POSTS_ZERO_TOTAL'  => 'Det er ingen innlegg som venter på godkjenning.',
  'UNAPPROVED_POST_TOTAL'  => 'Totalt er det <strong>1</strong> innlegg som venter på godkjenning.',
  'UNLOCK'  => 'åpne',
  'UNLOCK_POST'  => 'åpne innlegg',
  'UNLOCK_POST_EXPLAIN'  => 'Tillat endringer',
  'UNLOCK_POST_POST'  => 'Lås opp innlegg',
  'UNLOCK_POST_POST_CONFIRM'  => 'Er du sikker på at du vil tillate brukeren å endre på innlegget?',
  'UNLOCK_POST_POSTS'  => 'åpne valgte emner',
  'UNLOCK_POST_POSTS_CONFIRM'  => 'Er du sikker på at du vil tillate brukerene å endre på innleggene?',
  'UNLOCK_TOPIC'  => 'åpne emne',
  'UNLOCK_TOPIC_CONFIRM'  => 'Er du sikker på at du vil åpne dette emnet?',
  'UNLOCK_TOPICS'  => 'åpne valgte emner',
  'UNLOCK_TOPICS_CONFIRM'  => 'Er du sikker på at du vil åpne alle valgte emner?',
  'USER_CANNOT_POST'  => 'Du kan ikke skrive i dette forumet.',
  'USER_CANNOT_REPORT'  => 'Du kan ikke rapportere innlegg i dette forumet.',
  'USER_FEEDBACK_ADDED'  => 'Brukerkommentarer lagt til.',
  'USER_WARNING_ADDED'  => 'Brukeren har blitt advart.',
  'VIEW_DETAILS'  => 'Se detaljer',
  'WARNED_USERS'  => 'Advarte brukere',
  'WARNED_USERS_EXPLAIN'  => 'Dette er en liste over brukere med aktive advarsler.',
  'WARNING_PM_BODY'  => 'Du har mottatt følgende advarsel fra en administrator eller moderator for dette forumet:[quote]%s[/quote]',
  'WARNING_PM_SUBJECT'  => 'Forumadvarsel er utstedt.',
  'WARNINGS_ZERO_TOTAL'  => 'Ingen advarsler eksisterer.',
  'YOU_SELECTED_TOPIC'  => 'Du valgte emnenummer %d: %s',

  'report_reasons'  => array(

    'TITLE'  => array(
      'WAREZ'  => 'Warez',
      'SPAM'  => 'Spam',
      'OFF_TOPIC'  => 'Feilpostet',
      'OTHER'  => 'Annet',
    ),


    'DESCRIPTION'  => array(
      'WAREZ'  => 'Innlegget inneholder linker til ulovlig piratkopiert programvare.',
      'SPAM'  => 'Innlegget har kun til hensikt å reklamere for andre nettsider eller produkter.',
      'OFF_TOPIC'  => 'Innlegget har ikke noe med emnet eller forumet å gjøre.',
      'OTHER'  => 'Innlegget passer ikke med noen andre begrunnelser (bruk begrunnelsesfeltet).',
    ),

  ),
	
	'VIEW_POST'				=> 'Vis innlegg',

));

?>