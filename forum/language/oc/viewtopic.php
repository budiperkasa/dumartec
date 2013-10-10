<?php
/** 
*
* viewtopic [Occitan]
*
* @package language
* @version $Id : viewtopic.php,v 1.19 2007/10/04 15 :07 :24 acydburn Exp $
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
	'ATTACHMENT'						=> 'Fichièr(s) junt(s)',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Los pèças juntas son estats desactivats.',

	'BOOKMARK_ADDED'		=> 'Lo tèma es estat apondut als favorits.',
	'BOOKMARK_REMOVED'		=> 'Lo tèma es estat suprimit dels favorits.',
	'BOOKMARK_TOPIC'		=> 'Apondre aqueste tèma als favorits',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Suprimir aqueste tèma dels favorits',
	'BUMPED_BY'				=> 'Tèma montat per %1$s lo %2$s.',
	'BUMP_TOPIC'			=> 'Far montar lo tèma',

	'CODE'					=> 'Còdi',

	'DELETE_TOPIC'			=> 'Suprimir lo tèma',
	'DOWNLOAD_NOTICE'		=> 'Avètz pas los permissions necessàrias per veire los pèças juntas a-n aqueste messatge.',

	'EDITED_TIMES_TOTAL'	=> 'Darrièra modificacion per %1$s lo %2$s, modificat %3$d còps.',
	'EDITED_TIME_TOTAL'		=> 'Darrièra modificacion per %1$s lo %2$s, modificat %3$d còps.',
	'EMAIL_TOPIC'			=> 'Enviar per corrièl a un amic',
	'ERROR_NO_ATTACHMENT'	=> 'La pèça junta seleccionat es pas pus disponible.',

	'FILE_NOT_FOUND_404'	=> 'Lo fichièr <strong>%s</strong> existís pas.',
	'FORK_TOPIC'			=> 'Copiar lo tèma',

	'LINKAGE_FORBIDDEN'		=> 'Podètz pas veire, descargar o joindre de fichièrs a partir d\'aqueste sit.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Avètz demandat a susvelhar aqueste tèma. Connectatz-vos per lo veire.',
	'LOGIN_VIEWTOPIC'		=> 'Debètz èsser enregistrat e connectat per veire aqueste tèma.',

	'MAKE_ANNOUNCE'				=> 'Botar en "Anóncia"',
	'MAKE_GLOBAL'				=> 'Botar en "Anóncia generala"',
	'MAKE_NORMAL'				=> 'Botar en "Tèma estàndar"',
	'MAKE_STICKY'				=> 'Botar en "Post-it"',
	'MAX_OPTIONS_SELECT'		=> 'Debètz seleccionar mai de <strong>%d</strong> opcions',
	'MAX_OPTION_SELECT'			=> 'Debètz seleccionar <strong>1</strong> opcion',
	'MISSING_INLINE_ATTACHMENT'	=> 'La pèça junta <strong>%s</strong> es pas pus disponibla.',
	'MOVE_TOPIC'				=> 'Desplaçar lo tèma',

	'NO_ATTACHMENT_SELECTED'=> 'Avètz pas seleccionat de pèça junta a veire o a descargar.',
	'NO_NEWER_TOPICS'		=> 'Pas cap de tèma novèl dins aqueste forum.',
	'NO_OLDER_TOPICS'		=> 'Pas cap de tèma ancian dins aqueste forum.',
	'NO_UNREAD_POSTS'		=> 'Pas cap de messatge novèl pas legit dins aqueste tèma.',
	'NO_VOTE_OPTION'		=> 'Debètz causir una opcion quand votatz.',
	'NO_VOTES'				=> 'Pas cap de vòte',

	'POLL_ENDED_AT'         => 'Lo sondatge s\'es acabat lo %s',
	'POLL_RUN_TILL'			=> 'Lo sondatge es actiu fins al %s',
	'POLL_VOTED_OPTION'		=> 'Avètz votat per aquesta opcion',
	'PRINT_TOPIC'			=> 'Estampar lo tèma',

	'QUICK_MOD'				=> 'Accions rapidas de moderacion',
	'QUOTE'					=> 'Citacion',

	'REPLY_TO_TOPIC'		=> 'Respondre al tèma',
	'RETURN_POST'			=> '%sTornar al messatge%s',

	'SUBMIT_VOTE'			=> 'Votar',

	'TOTAL_VOTES'			=> 'Nombre total de vòtes',

	'UNLOCK_TOPIC'			=> 'Desvarrolhar lo tèma',

	'VIEW_INFO'				=> 'Entresenhas del messatge',
	'VIEW_NEXT_TOPIC'		=> 'Tèma seguent',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tèma precedent',
	'VIEW_RESULTS'			=> 'Veire las resultas',
	'VIEW_TOPIC_POST'		=> '1 messatge',
	'VIEW_TOPIC_POSTS'		=> '%d messatges',
	'VIEW_UNREAD_POST'		=> 'Veire lo primièr messatge pas legit',
	'VISIT_WEBSITE'			=> 'Sit web',
	'VOTE_SUBMITTED'		=> 'Vòstre vòte es estat pres en compte.',
	'VOTE_CONVERTED'		=> 'Podètz pas cambiar de vòte dins los sondatges convertits.',
	
));

 ?>
