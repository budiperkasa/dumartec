<?php
/**
*
* posting [Farsi]
*
* @package language
* @version $Id: posting.php 8555 2008-05-15 14:10:11Z Kellanved $
* @copyright (c) 2005 phpBB Group
* @Language file persian edited by phpBBIran.com - Majid
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ADD_ATTACHMENT'	=> 'Ø¢Ù¾Ù„ÙˆØ¯ Ù¾ÛŒÙˆØ³Øª',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ø¯Ø± ØµÙˆØ±ØªÙŠ Ú©Ù‡ ØªÙ…Ø§ÙŠÙ„ Ø¯Ø§Ø±ÙŠØ¯ Ø¨Ø®Ø´ Ø§Ø·Ù„Ø§Ø¹Ø§Øª ÙØ§ÙŠÙ„ Ø±Ø§ ØªÚ©Ù…ÙŠÙ„ Ú©Ù†ÙŠØ¯.',
	'ADD_FILE'	=> 'Ø§ÙØ²ÙˆØ¯Ù† ÙØ§ÛŒÙ„',
	'ADD_POLL'	=> 'Ø§ÛŒØ¬Ø§Ø¯ Ù†Ø¸Ø± Ø³Ù†Ø¬ÛŒ',
	'ADD_POLL_EXPLAIN'	=> 'Ø¯Ø± ØµÙˆØ±ØªÙŠ Ú©Ù‡ Ù…ÙŠ Ø®ÙˆØ§Ù‡ÙŠØ¯ Ø¯Ø± Ù…Ø¨Ø­Ø« Ø®ÙˆØ¯ ÙŠÚ© Ù†Ø¸Ø±Ø³Ù†Ø¬ÙŠ Ø¯Ø§Ø´ØªÙ‡ Ø¨Ø§Ø´ÙŠØ¯ ÙÙŠÙ„Ø¯Ù‡Ø§ Ø±Ø§ ØªÚ©Ù…ÙŠÙ„ Ú©Ù†ÙŠØ¯.Ø¯Ø± ØµÙˆØ±ØªÙŠ Ú©Ù‡ Ù†Ù…ÙŠ Ø®ÙˆØ§Ù‡ÙŠØ¯ Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ø¯Ø§Ø´ØªÙ‡ Ø¨Ø§Ø´ÙŠØ¯ ÙÙŠÙ„Ø¯Ù‡Ø§ Ø±Ø§ Ø±Ù‡Ø§ Ú©Ù†ÙŠØ¯.',
	'ALREADY_DELETED'	=> 'Ù…ØªØ§Ø³ÙÙŠÙ… Ø§ÙŠÙ† Ù¾ÙŠØºØ§Ù… Ù¾ÙŠØ´ Ø§Ø² Ø§ÙŠÙ† Ø­Ø°Ù Ø´Ø¯Ù‡ Ø¨ÙˆØ¯.',
	'ATTACH_QUOTA_REACHED'	=> 'Ù…ØªØ§Ø³ÙÙŠÙ… ØŒ Ø³Ù‡Ù…ÙŠÙ‡ Ù¾ÙŠÙˆØ³Øª Ø§Ù†Ø¬Ù…Ù† Ø¨Ù‡ Ù¾Ø§ÙŠØ§Ù† Ø±Ø³ÙŠØ¯Ù‡ Ø§Ø³Øª.',
	'ATTACH_SIG'	=> 'Ù†Ù…Ø§ÙŠØ´ Ø§Ù…Ø¶Ø§ ( ØªØ¹ÛŒÛŒÙ† Ø´Ø¯Ù‡ Ø¯Ø± Ú©Ù†ØªØ±Ù„ Ù¾Ù†Ù„ Ú©Ø§Ø±Ø¨Ø±ÛŒ',

	'BBCODE_A_HELP'	=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'	=> 'Ù†ÙˆØ´ØªÙ‡ Ú©Ù„ÙØª : [b]text[/b]',
	'BBCODE_C_HELP'	=> 'Ù†Ù…Ø§ÙŠØ´ Ú©Ø¯ : [code]code[/code]',
	'BBCODE_E_HELP'	=> 'Ù„ÙŠØ³Øª : Ø§ÙØ²ÙˆØ¯Ù† Ø§Ø³Ø§Ø³ Ù„ÙŠØ³Øª',
	'BBCODE_F_HELP'	=> 'Ø§Ù†Ø¯Ø§Ø²Ù‡ ÙÙˆÙ†Øª: [size=85]small text[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s  <em>ØºÛŒØ±ÙØ¹Ø§Ù„</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s  <em>ÙØ¹Ø§Ù„</em>',
	'BBCODE_I_HELP'	=> 'Ù†ÙˆØ´ØªÙ‡ Ú©Ø¬ : [i]text[/i]',
	'BBCODE_L_HELP'	=> 'Ù„ÙŠØ³Øª : [list]text[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'Ø¨Ø®Ø´ Ù„ÙŠØ³Øª : [*]text[/*]',
	'BBCODE_O_HELP'	=> 'Ù„ÙŠØ³Øª Ø³ÙØ§Ø±Ø´ÙŠ : [list=]text[/list]',
	'BBCODE_P_HELP'	=> 'Ø¯Ø±Ø¬ ØªØµÙˆÙŠØ± : [img]http://image_url[/img]',
	'BBCODE_Q_HELP'	=> 'Ù†ÙˆØ´ØªÙ‡ Ù†Ù‚Ù„ Ù‚ÙˆÙ„ : [quote]text[/quote]',
	'BBCODE_S_HELP'	=> 'Ø±Ù†Ú¯ ÙÙˆÙ†Øª : [color=red]text[/color]  Tip: you can also use color=#FF0000',
	'BBCODE_U_HELP'	=> 'Ù†ÙˆØ´ØªÙ‡ Ø²ÙŠØ±Ø®Ø· Ø¯Ø§Ø± : [u]text[/u]',
	'BBCODE_W_HELP'	=> 'Ø§ÙŠØ¬Ø§Ø¯ URL : [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'	=> 'ÙÙ„Ø´ : [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'	=> 'You cannot bump this topic so soon after the last post.',

	'CANNOT_DELETE_REPLIED'	=> 'Sorry but you may only delete posts which have not been replied to.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ø§ÙŠÙ† Ù¾Ø³Øª Ø¨Ø³ØªÙ‡ Ø´Ø¯Ù‡ Ø§Ø³Øª.Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ø¢Ù†Ø±Ø§ ÙˆÙŠØ±Ø§ÙŠØ´ Ú©Ù†ÙŠØ¯.',
	'CANNOT_EDIT_TIME'	=> 'You can no longer edit or delete that post.',
	'CANNOT_POST_ANNOUNCE'	=> 'Ù…ØªØ§Ø³ÙÙŠÙ… Ø²ÙŠØ±Ø§ Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ø§Ø·Ù„Ø§Ø¹ÙŠÙ‡ Ø§Ø±Ø³Ø§Ù„ Ú©Ù†ÙŠØ¯.',
	'CANNOT_POST_STICKY'	=> 'Ù…ØªØ§Ø³ÙÙŠÙ… Ø²ÙŠØ±Ø§ Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ù…Ø¨Ø­Ø« Ù‡Ø§ÙŠ Ù…Ù‡Ù… Ø§Ø±Ø³Ø§Ù„ Ù†Ù…Ø§ÙŠÙŠØ¯.',
	'CHANGE_TOPIC_TO'	=> 'ÙˆÙŠØ±Ø§ÙŠØ´ Ø­Ø§Ù„Øª Ù…Ø¨Ø­Ø« Ø¨Ù‡',
	'CLOSE_TAGS'	=> 'Ø¨Ø³ØªÙ† ØªÚ¯ Ù‡Ø§',
	'CURRENT_TOPIC'	=> 'Ù…Ø¨Ø­Ø« Ú©Ù†ÙˆÙ†ÙŠ',

	'DELETE_FILE'	=> 'Ø­Ø°Ù ÙØ§ÙŠÙ„',
	'DELETE_MESSAGE'	=> 'Ø­Ø°Ù Ù¾ÙŠØºØ§Ù…',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ø¢ÛŒØ§ Ø§Ø² Ø­Ø°Ù Ù¾ÛŒØºØ§Ù… Ø§Ø·Ù…ÛŒÙ†Ø§Ù† Ø¯Ø§Ø±ÛŒØ¯ ØŸ',
	'DELETE_OWN_POSTS'	=> 'Ù…ØªØ§Ø³ÙÙŠÙ… ØŒ Ø´Ù…Ø§ ÙÙ‚Ø· Ø§Ø¬Ø§Ø²Ù‡ Ø­Ø¯Ù Ù¾Ø³Øª Ù‡Ø§ÙŠ Ø®ÙˆØ¯ Ø±Ø§ Ø¯Ø§Ø±ÙŠØ¯.',
	'DELETE_POST_CONFIRM'	=> 'Ø¢ÛŒØ§ Ø§Ø² Ø­Ø°Ù Ù¾Ø³Øª Ø§Ø·Ù…ÛŒÙ†Ø§Ù† Ø¯Ø§Ø±ÛŒØ¯ ØŸ',
	'DELETE_POST_WARN'	=> 'Ø¯Ø±ØµÙˆØ±ØªÙŠ Ú©Ù‡ Ù¾Ø³Øª Ø­Ø°Ù Ø´Ø¯ Ù‚Ø§Ø¨Ù„ Ø¨Ø§Ø²Ú¯Ø±Ø¯Ø§Ù†ÙŠ Ù†Ø¨Ø§Ø´Ø¯',
	'DISABLE_BBCODE'	=> 'ØºÙŠØ±ÙØ¹Ø§Ù„ Ú©Ø±Ø¯Ù† BBCode',
	'DISABLE_MAGIC_URL'	=> 'Ø¢Ø¯Ø±Ø³ Ù‡Ø§ÙŠ ÙˆØ¨ Ø±Ø§ Ø§ØªÙˆÙ…Ø§ØªÙŠÚ© ØªØ¬Ø²ÙŠÙ‡ Ù†Ú©Ù†.',
	'DISABLE_SMILIES'	=> 'ØºÙŠØ±ÙØ¹Ø§Ù„ Ú©Ø±Ø¯Ù† Ø´Ú©Ù„Ú© Ù‡Ø§',
	'DISALLOWED_CONTENT'		=> 'The upload was rejected because the uploaded file was identified as a possible attack vector.',
	'DISALLOWED_EXTENSION'	=> 'Ø­Ø§Ù„Øª  %s  ØºÙŠØ± ÙØ¹Ø§Ù„ Ø§Ø³Øª.',
	'DRAFT_LOADED'	=> 'Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³ Ù‡Ø§ Ø¯Ø± Ù…Ø­Ø¯ÙˆØ¯Ù‡ Ø§Ø±Ø³Ø§Ù„ Ù¾Ø³Øª Ø¨Ø§Ø±Ú¯Ø°Ø§Ø±ÙŠ Ø´Ø¯Ù‡ Ø§Ù†Ø¯, Ø´Ù…Ø§ Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ø¨Ù‡ Ù¾Ø³ØªØªØ§Ù† Ù¾Ø§ÙŠØ§Ù† Ø¯Ù‡ÙŠØ¯.<br />Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³ Ø´Ù…Ø§ Ù¾Ø³ Ø§Ø² Ø§Ø±Ø³Ø§Ù„ Ù¾Ø³Øª Ø­Ø°Ù Ø®ÙˆØ§Ù‡Ø¯ Ø´Ø¯.',
	'DRAFT_LOADED_PM'	=> 'Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³ Ù‡Ø§ Ø¯Ø± Ù…Ø­Ø¯ÙˆØ¯Ù‡ Ù¾ÙŠØºØ§Ù… Ù‡Ø§ Ø¨Ø§Ø±Ú¯Ø°Ø§Ø±ÙŠ Ø´Ø¯Ù‡ Ø§Ù†Ø¯, Ø´Ù…Ø§ Ù‡Ù… Ø§Ú©Ù†ÙˆÙ† Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ø¨Ù‡ Ù¾ÙŠØºØ§Ù… Ø®ØµÙˆØµÙŠ Ø®ÙˆØ¯ Ù¾ÙŠØ§ÙŠÙ† Ø¯Ù‡ÙŠØ¯.<br />Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³ Ù¾Ø³ Ø§Ø² Ø§Ø±Ø³Ø§Ù„ Ù¾ÙŠØºØ§Ù… Ø­Ø°Ù Ø®ÙˆØ§Ù‡Ø¯ Ø´Ø¯.',
	'DRAFT_SAVED'	=> 'Ù¾ÛŒØ´ Ù†ÙˆÛŒØ³ Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ø°Ø®ÛŒØ±Ù‡ Ø´Ø¯.',
	'DRAFT_TITLE'	=> 'Ø¹Ù†ÙˆØ§Ù† Ù¾ÛŒØ´ Ù†ÙˆÛŒØ³',

	'EDIT_REASON'	=> 'Ø¯Ù„ÛŒÙ„ ÙˆÛŒØ±Ø§ÛŒØ´ Ø§ÛŒÙ† Ù¾Ø³Øª',
	'EMPTY_FILEUPLOAD'	=> 'ÙØ§ÛŒÙ„ Ø¢Ù¾Ù„ÙˆØ¯ Ø´Ø¯Ù‡ Ø®Ø§Ù„ÛŒ Ø§Ø³Øª.',
	'EMPTY_MESSAGE'	=> 'ÙØ§ÙŠÙ„ Ø¢Ù¾Ù„ÙˆØ¯ Ù†Ù…ÙŠ Ø´ÙˆØ¯ . Ù„Ø·ÙØ§ ÙØ§ÙŠÙ„ Ø±Ø§ Ø¨ØµÙˆØ±Øª Ø¯Ø³ØªÙŠ Ø¢Ù¾Ù„ÙˆØ¯ Ú©Ù†ÙŠØ¯.',
	'EMPTY_REMOTE_DATA'	=> 'ÙØ§ÙŠÙ„ Ø¢Ù¾Ù„ÙˆØ¯ Ù†Ù…ÙŠ Ø´ÙˆØ¯ . Ù„Ø·ÙØ§ ÙØ§ÙŠÙ„ Ø±Ø§ Ø¨ØµÙˆØ±Øª Ø¯Ø³ØªÙŠ Ø¢Ù¾Ù„ÙˆØ¯ Ú©Ù†ÙŠØ¯.',

	'FLASH_IS_OFF'	=> '[flash] <em>ØºÛŒØ± ÙØ¹Ø§Ù„</em>',
	'FLASH_IS_ON'	=> '[flash] <em>ÙØ¹Ø§Ù„</em>',
	'FLOOD_ERROR'	=> 'You cannot make another post so soon after your last.',
	'FONT_COLOR'	=> 'Ø±Ù†Ú¯ ÙÙˆÙ†Øª',
	'FONT_COLOR_HIDE'	=> 'Ù…Ø®ÙÛŒ Ú©Ø±Ø¯Ù† Ø§Ù†ØªØ®Ø§Ø¨Ú¯Ø± Ø±Ù†Ú¯',
	'FONT_HUGE'	=> 'ØªÙ†ÙˆÙ…Ù†Ø¯',
	'FONT_LARGE'	=> 'Ø¨Ø²Ø±Ú¯',
	'FONT_NORMAL'	=> 'Ø§Ø³ØªØ§Ù†Ø¯Ø§Ø±Ø¯',
	'FONT_SIZE'	=> 'Ø§Ù†Ø¯Ø§Ø²Ù‡ ÙÙˆÙ†Øª',
	'FONT_SMALL'	=> 'Ú©ÙˆÚ†Ú©',
	'FONT_TINY'	=> 'Ø±ÛŒØ²',

	'GENERAL_UPLOAD_ERROR'	=> 'Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ù¾ÙŠÙˆØ³ØªÙŠ Ø¯Ø± %s Ø¢Ù¾Ù„ÙˆØ¯ Ú©Ù†ÙŠØ¯.',

	'IMAGES_ARE_OFF'	=> '[img] <em>ØºÛŒØ± ÙØ¹Ø§Ù„</em>',
	'IMAGES_ARE_ON'	=> '[img] <em>ÙØ¹Ø§Ù„</em>',
	'INVALID_FILENAME'	=> '%s ÙŠÚ© Ù†Ø§Ù… Ø¯Ø±Ø³Øª Ø¨Ø±Ø§ÙŠ ÙØ§ÙŠÙ„ Ø§Ø³Øª.',

	'LOAD'	=> 'Ø¨Ø§Ø²Ú¯Ø°Ø§Ø±ÛŒ',
	'LOAD_DRAFT'	=> 'Ø¨Ø§Ø±Ú¯Ø°Ø§Ø±ÙŠ Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³',
	'LOAD_DRAFT_EXPLAIN'	=> 'Here you are able to select the draft you want to continue writing. Your current post will be cancelled, all current post contents will be deleted. View, edit and delete drafts within your User Control Panel.',
	'LOGIN_EXPLAIN_BUMP'	=> 'Ø¨Ø±Ø§ÙŠ Ø¨Ø§Ù…Ù¾ Ú©Ø±Ø¯Ù† Ù…Ø¨Ø§Ø­Ø« Ø¯Ø± Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† ØŒ Ø¨Ø§ÙŠØ¯ ÙˆØ§Ø±Ø¯ Ø´ÙˆÙŠØ¯.',
	'LOGIN_EXPLAIN_DELETE'	=> 'Ø´Ù…Ø§ Ø¨Ø±Ø§ÙŠ Ø­Ø°Ù Ù¾Ø³Øª Ù‡Ø§ Ø¯Ø± Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ù…Ø³ØªÙ„Ø²Ù…ÙŠØ¯ Ø¨Ù‡ Ø³Ø§ÙŠØª ÙˆØ§Ø±Ø¯ Ø´ÙˆÙŠØ¯.',
	'LOGIN_EXPLAIN_POST'	=> 'Ø¨Ø±Ø§ÙŠ Ø§Ø±Ø³Ø§Ù„ Ù¾Ø³Øª Ø¯Ø± Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ø¨Ø§ÙŠØ¯ ÙˆØ§Ø±Ø¯ Ø´ÙˆÙŠØ¯.',
	'LOGIN_EXPLAIN_QUOTE'	=> 'Ø´Ù…Ø§ Ø¨Ø±Ø§ÙŠ Ù†Ù‚Ù„ Ù‚ÙˆÙ„ Ú©Ø±Ø¯Ù† Ù¾Ø³Øª Ù‡Ø§ÙŠ Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ù†ÙŠØ§Ø²Ù…Ù†Ø¯ ÙˆØ±ÙˆØ¯ Ø¨Ù‡ Ø§Ù†Ø¬Ù…Ù† Ù‡Ø³ØªÙŠØ¯.',
	'LOGIN_EXPLAIN_REPLY'	=> 'Ø¨Ø±Ø§ÙŠ Ø¯Ø± Ø§Ø®ØªÙŠØ§Ø± Ø¯Ø§Ø´ØªÙ† ØªÙˆØ§Ù†Ø§ÙŠÙŠ Ø§Ø±Ø³Ø§Ù„ Ù¾Ø§Ø³Ø® Ø¯Ø± Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ù†ÙŠØ§Ø²Ù…Ù†Ø¯ ÙˆØ±ÙˆØ¯ Ø¨Ù‡ Ø§Ù†Ø¬Ù…Ù† Ù‡Ø³ØªÙŠØ¯.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels high.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels wide.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Your images may only be up to %1$d pixels high.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Your images may only be up to %1$d pixels wide.',

	'MESSAGE_BODY_EXPLAIN'	=> 'Ù¾ÙŠØºØ§Ù… Ø®ÙˆØ¯ Ø±Ø§ Ø§ÙŠØ¬Ø§ ÙˆØ§Ø±Ø¯ Ú©Ù†ÙŠØ¯.ØªÙˆØ¬Ù‡ Ø¯Ø§Ø´ØªÙ‡ Ø¨Ø§Ø´ÙŠØ¯ Ù¾ÙŠØºØ§Ù… Ø´Ù…Ø§ Ù†Ø¨Ø§ÙŠØ¯ Ø¨ÙŠØ´ Ø§Ø²<strong>%d</strong> Ú©Ø§Ø±Ø§Ú©ØªØ± Ø¨Ø§Ø´Ø¯.',
	'MESSAGE_DELETED'	=> 'Ø§ÙŠÙ† Ù¾ÙŠØºØ§Ù… Ø¨Ø§ Ù…ÙˆÙÙ‚ÙŠØª Ø­Ø°Ù Ú¯Ø±Ø¯ÙŠØ¯.',
	'MORE_SMILIES'	=> 'Ù†Ù…Ø§ÛŒØ´ Ø´Ú©Ù„Ú© Ù‡Ø§ÙŠ Ø¨ÙŠØ´ØªØ±',

	'NOTIFY_REPLY'	=> 'Ø¯Ø±ØµÙˆØ±ØªÙŠ Ú©Ù‡ Ø¨Ù‡ Ù…Ø¨Ø­Ø« Ù¾Ø§Ø³Ø® Ø¯Ø§Ø¯Ù‡ Ø´Ø¯ Ù…Ø±Ø§ Ø¨Ø§Ø®Ø¨Ø± Ú©Ù† !',
	'NOT_UPLOADED'	=> 'ÙØ§ÛŒÙ„ Ù‚Ø§Ø¯Ø± Ø¨Ù‡ Ø¢Ù¾Ù„ÙˆØ¯ Ø´Ø¯Ù† Ù†ÛŒØ³Øª.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ú¯Ø²ÙŠÙ†Ù‡ Ù‡Ø§ÙŠ Ù…ÙˆØ¬ÙˆØ¯ Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ø±Ø§ Ø­Ø°Ù Ú©Ù†ÙŠØ¯.',
	'NO_PM_ICON'	=> 'Ø¨Ø¯ÙˆÙ† Ø¢ÙŠÚ©ÙˆÙ† Ù¾ÙŠØºØ§Ù…',
	'NO_POLL_TITLE'	=> 'Ù†Ø¸Ø±Ø³Ù†Ø¬ÛŒ Ø´Ù…Ø§ Ø¨Ø§ÛŒØ¯ ÛŒÚ© Ø¹Ù†ÙˆØ§Ù† Ø¯Ø§Ø´ØªÙ‡ Ø¨Ø§Ø´Ø¯.',
	'NO_POST'	=> 'Ù¾Ø³Øª Ø¯Ø±Ø®ÙˆØ§Ø³Øª Ø´Ø¯Ù‡ Ù…ÙˆØ¬ÙˆØ¯ Ù†Ù…ÙŠ Ø¨Ø§Ø´Ø¯.',
	'NO_POST_MODE'	=> 'Ù‡ÙŠÚ† Ø­Ø§Ù„ØªÙŠ Ø¨Ø±Ø§ÙŠ Ù¾Ø³Øª ØªØ¹ÙŠÙŠÙ† Ù†Ø´Ø¯Ù‡ Ø§Ø³Øª.',

	'PARTIAL_UPLOAD'	=> 'The uploaded file was only partially uploaded.',
	'PHP_SIZE_NA'	=> 'Ø­Ø¬Ù… ÙØ§ÙŠÙ„ Ù‡Ø§ÙŠ Ù¾ÙŠÙˆØ³Øª Ø²ÙŠØ§Ø¯ Ø§Ø³Øª.<br />Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ø§ÙŠÙ† Ø±Ø§ ØªØ¹ÙŠÙŠÙ† Ú©Ù†ÙŠØ¯ Ø²ÙŠØ±Ø§ Ø¯Ø± ÙØ§ÙŠÙ„ php.ini ØªØ¹ÙŠÙŠÙ† Ø´Ø¯Ù‡ Ø§Ø³Øª.',
	'PHP_SIZE_OVERRUN'	=> 'Ø­Ø¬Ù… ÙØ§ÙŠÙ„ Ù‡Ø§ÙŠ Ù¾ÙŠÙˆØ³Øª Ø²ÙŠØ§Ø¯ Ø§Ø³Øª, Ø­Ø¯ Ø§Ú©Ø«Ø± Ø­Ø¬Ù… Ø¢Ù¾Ù„ÙˆØ¯ %dÙ…Ú¯Ø§Ø¨Ø§ÙŠØª Ù…ÙŠ Ø¨Ø§Ø´Ø¯.<br />Ù„Ø·ÙØ§ Ø¨ÙŠØ§Ø¯ Ø¯Ø§Ø´ØªÙ‡ Ø¨Ø§Ø´ÙŠØ¯ Ú©Ù‡ Ø§ÙŠÙ† Ø¹Ù…Ù„Ú©Ø±Ø¯ Ø¯Ø± php.ini ØªØ¹ÙŠÙŠÙ† Ø´Ø¯Ù‡ Ùˆ Ø¨Ù‡ Ù‡ÙŠÚ† ÙˆØ¬Ù‡ Ù‚Ø§Ø¨Ù„ Ù„ØºÙˆ Ù†ÙŠØ³Øª.',
	'PLACE_INLINE'	=> 'Ø¬Ø§ÙŠÚ¯Ø§Ù‡ Ø¯Ø± Ø®Ø·',
	'POLL_DELETE'	=> 'Ø­Ø°Ù Ù†Ø¸Ø±Ø³Ù†Ø¬ÙŠ',
	'POLL_FOR'	=> 'Ø¯ÙˆØ§Ù… ÙŠØ§ÙØªÙ† Ù†Ø¸Ø±Ø³Ù†Ø¬ÙŠ Ø¨Ø±Ø§ÙŠ',
	'POLL_FOR_EXPLAIN'	=> 'Ø¯Ø± ØµÙˆØ±Øª Ø§Ù†ØªØ®Ø§Ø¨ 0 Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ù‡ÙŠÚ† Ú¯Ø§Ù‡ Ù¾Ø§ÙŠØ§Ù† Ù†Ù…ÙŠ ÙŠØ§Ø¨Ø¯.',
	'POLL_MAX_OPTIONS'	=> 'Ø§Ù†ØªØ®Ø§Ø¨ Ú¯Ø²ÙŠÙ†Ù‡ Ø¨Ø±Ø§ÙŠ Ù‡Ø± Ú©Ø§Ø±Ø¨Ø±',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Ø§ÙŠÙ† ØªØ¹Ø¯Ø§Ø¯ Ú¯Ø²ÙŠÙ†Ù‡ Ù‡Ø§ÙŠÙŠ Ø§Ø³Øª Ú©Ù‡ Ù‡Ø± Ú©Ø§Ø±Ø¨Ø± Ø¨Ø±Ø§ÙŠ Ø´Ø±Ú©Øª Ø¯Ø± Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ù…ÙŠ ØªÙˆØ§Ù†Ø¯ Ø§Ù†ØªØ®Ø§Ø¨ Ù†Ù…Ø§ÙŠØ¯.',
	'POLL_OPTIONS'	=> 'ØªÙ†Ø¸ÙŠÙ…Ø§Øª Ù†Ø¸Ø±Ø³Ù†Ø¬ÙŠ',
	'POLL_OPTIONS_EXPLAIN'	=> 'Ù…Ú©Ø§Ù† Ù‡Ø± Ú¯Ø²ÙŠÙ†Ù‡ Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ø¯Ø± ÙŠÚ© Ø®Ø· Ùˆ Ø¨ØµÙˆØ±Øª Ø¬Ø§Ú¯Ø§Ù†Ù‡ Ø§Ø³Øª(Ø¨Ø±Ø§ÙŠ Ø±ÙØªÙ† Ø¨Ù‡ Ø®Ø·Ø¨Ø¹Ø¯ÙŠ Ø§Ø² Ú©Ù„ÙŠØ¯ Enter Ø§Ø³ØªÙØ§Ø¯Ù‡ Ú©Ù†ÙŠØ¯). Ø´Ù…Ø§ Ø¨Ø±Ø§ÙŠ Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ø®ÙˆØ¯ Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ <strong>%d</strong> Ú¯Ø²ÙŠÙ†Ù‡ Ø¯Ø± Ù†Ø¸Ø± Ø¨Ú¯ÙŠØ±ÙŠØ¯.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	'POLL_QUESTION'	=> 'Ø³ÙˆØ§Ù„ Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ',
	'POLL_TITLE_TOO_LONG'	=> 'Ø¹Ù†ÙˆØ§Ù† Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ù…ÙŠ Ø¨Ø§ÙŠØ³Øª Ú©Ù…ØªØ± Ø§Ø² 100 Ú©Ø§Ø±Ø§Ú©ØªØ± Ø¨Ø§Ø´Ø¯.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'	=> 'ÙØ¹Ø§Ù„ Ø¨ÙˆØ¯Ù† Ø±Ø§ÙŠ Ø¯Ø§Ø¯Ù† Ø¯ÙˆØ¨Ø§Ø±Ù‡',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ø¯Ø± ØµÙˆØ±Øª Ø§Ù†ØªØ®Ø§Ø¨ Ø§ÙŠÙ† Ú¯Ø²ÙŠÙ†Ù‡ Ú©Ø§Ø±Ø¨Ø±Ø§Ù† Ù…ÙŠ ØªÙˆØ§Ù†Ø¯ Ø±Ø§ÙŠ Ø®ÙˆØ¯ Ø±Ø§ ØªØºÙŠÙŠØ± Ø¯Ù‡Ù†Ø¯.',
	'POSTED_ATTACHMENTS'	=> 'Ù¾ÙŠÙˆØ³Øª Ù‡Ø§ÙŠ Ø§Ø±Ø³Ø§Ù„ Ø´Ø¯Ù‡',
	'POST_APPROVAL_NOTIFY'	=> 'Ø¯Ø± ØµÙˆØ±Øª ØªØ§ÙŠÙŠØ¯ Ù¾Ø³Øª Ø´Ù…Ø§ Ø¨Ø§ Ø®Ø¨Ø± Ø®ÙˆØ§Ù‡ÙŠØ¯ Ø´Ø¯.',
	'POST_CONFIRMATION'	=> 'ØªØ§ÙŠÙŠØ¯ÙŠÙ‡ Ù¾Ø³Øª',
	'POST_CONFIRM_EXPLAIN'	=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'	=> 'Ø§ÙŠÙ† Ù¾ÙŠØºØ§Ù… Ø¨Ø§ Ù…ÙˆÙÙ‚ÙŠØª Ø­Ø°Ù Ø´Ø¯.',
	'POST_EDITED'	=> 'Ø§ÙŠÙ† Ù¾ÙŠØºØ§Ù… Ø¨Ø§ Ù…ÙˆÙÙ‚ÙŠØª ÙˆÙŠØ±Ø§ÙŠØ´ Ø´Ø¯.',
	'POST_EDITED_MOD'	=> 'Ø§ÙŠÙ† Ù¾ÙŠØºØ§Ù… Ø¨Ø§ Ù…ÙˆÙÙ‚ÙŠØª ÙˆÙŠØ±Ø§ÙŠØ´ Ø´Ø¯, Ø§Ù…Ø§ Ø§Ø­ØªØ§ÙŠØ¬ Ø¨Ù‡ ØªØ§ÙŠÙŠØ¯ Ù…Ø¯ÙŠØ± Ø§Ù†Ø¬Ù…Ù† Ù¾ÙŠØ´ Ø§Ø² Ù†Ù…Ø§ÙŠØ´ Ù‡Ù…Ú¯Ø§Ù†ÙŠ Ø¯Ø§Ø±Ø¯.',
	'POST_GLOBAL'	=> 'Ø§Ø·Ù„Ø§Ø¹ÙŠÙ‡ Ú©Ù„ÙŠ (Ø¯Ø±Ù‡Ù…Ù‡ Ø§Ù†Ø¬Ù…Ù†Ù‡Ø§)',
	'POST_ICON'	=> 'Ø¢ÙŠÚ©ÙˆÙ† Ù¾Ø³Øª ',
	'POST_NORMAL'	=> 'Ù†Ø±Ù…Ø§Ù„',
	'POST_REVIEW'	=> 'Ø¨Ø§Ø²Ø¨ÙŠÙ†ÙŠ Ù¾Ø³Øª',
	'POST_REVIEW_EXPLAIN'	=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'	=> 'Ø§ÙŠÙ† Ù¾ÙŠØºØ§Ù… Ø¨Ø§ Ù…ÙˆÙÙ‚ÙŠØª Ø§Ø±Ø³Ø§Ù„ Ø´Ø¯.',
	'POST_STORED_MOD'	=> 'Ø§ÙŠÙ† Ù¾ÙŠØºØ§Ù… Ø¨Ø§ Ù…ÙˆÙÙ‚ÙŠØª Ø«Ø¨Øª Ø´Ø¯, Ø§Ù…Ø§ Ù¾ÙŠØ´ Ø§Ø² Ù†Ù…Ø§ÙŠØ´ Ù‡Ù…Ú¯Ø§Ù†ÙŠ Ø§Ø­ØªÙŠØ§Ø¬ Ø¨Ù‡ ØªØ§ÙŠÙŠØ¯ Ù…Ø¯ÙŠØ± Ø§Ù†Ø¬Ù…Ù† Ø¯Ø§Ø±Ø¯.',
	'POST_TOPIC_AS'	=> 'Ø§Ø±Ø³Ø§Ù„ Ù…Ø¨Ø­Ø« Ø¨ØµÙˆØ±Øª',
	'PROGRESS_BAR'	=> 'Ø±ÙˆÙ†Ø¯ Ù¾ÙŠØ´Ø±ÙØª',

	'QUOTE_DEPTH_EXCEEDED'	=> 'Ø´Ù…Ø§ Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ ÙÙ‚Ø· %1$d Ù†Ù‚Ù„ Ù‚ÙˆÙ„ Ù‚Ø±Ø§Ø± Ø¯Ù‡ÙŠØ¯.',

	'SAVE'	=> 'Ø°Ø®ÙŠØ±Ù‡',
	'SAVE_DATE'	=> 'Ø°Ø®ÙŠØ±Ù‡ Ø´Ø¯Ù‡ Ø¯Ø±',
	'SAVE_DRAFT'	=> 'Ø°Ø®ÙŠØ±Ù‡ Ø¨Ø¹Ù†ÙˆØ§Ù† Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³',
	'SAVE_DRAFT_CONFIRM'	=> 'Ø¯Ø± ØµÙˆØ±Øª Ø°Ø®ÙŠØ±Ù‡ Ø¨Ø¹Ù†ÙˆØ§Ù† Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³ ÙÙ‚Ø· Ø¹Ù†ÙˆØ§Ù† Ùˆ Ù…ØªÙ† Ù…Ø·Ù„Ø¨ Ø°Ø®ÙŠØ±Ù‡ Ø®ÙˆØ§Ù‡Ù†Ø¯ Ø´Ø¯ ØŒ Ø¢ÙŠØ§ Ù…Ø§ÙŠÙ„ÙŠØ¯ Ø§ÙŠÙ† Ù…Ø·Ù„Ø¨ Ø±Ø§ Ø¨Ø¹Ù†ÙˆØ§Ù† Ù¾ÙŠØ´ Ù†ÙˆÙŠØ³ Ø°Ø®ÙŠØ±Ù‡ Ú©Ù†ÙŠØ¯ ØŸ',
	'SMILIES'	=> 'Ø´Ú©Ù„Ú©Ù‡Ø§',
	'SMILIES_ARE_OFF'	=> 'Ø´Ú©Ù„Ú© Ù‡Ø§ <em>ØºÙŠØ± ÙØ¹Ø§Ù„ Ù‡Ø³ØªÙ†Ø¯</em>',
	'SMILIES_ARE_ON'	=> 'Ø´Ú©Ù„Ú© Ù‡Ø§ <em>ÙØ¹Ø§Ù„ Ù‡Ø³ØªÙ†Ø¯</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Ø²Ù…Ø§Ù† Ø¨Ù‡ Ù¾Ø§ÙŠØ§Ù† Ø±Ø³ÙŠØ¯Ù† Ù…Ø¨Ø­Ø« Ù‡Ø§ÙŠ Ù…Ù‡Ù…/Ø§Ø·Ù„Ø§Ø¹ÙŠÙ‡',
	'STICK_TOPIC_FOR'	=> 'Ù…Ù‡Ù… Ú©Ø±Ø¯Ù† Ù…Ø¨Ø­Ø« Ø¨Ø±Ø§ÙŠ',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Ø¯Ø± ØµÙˆØ±ØªÙŠ Ú©Ù‡ Ø¹Ø¯Ø¯ 0 Ø±Ø§ Ø¨Ø±Ú¯Ø²ÙŠÙ†ÙŠØ¯ Ù…Ø¨Ø­Ø« Ø¨Ø±Ø§ÙŠ Ù‡Ù…ÙŠØ´Ù‡ Ø¨ØµÙˆØ±Øª Ù…Ù‡Ù… ÙŠØ§ Ø§Ø·Ù„Ø§Ø¹ÛŒÙ‡ Ø¨Ø§Ù‚ÙŠ Ø®ÙˆØ§Ù‡Ø¯ Ù…Ø§Ù†Ø¯.',
	'STYLES_TIP'	=> 'Ù†Ú©ØªÙ‡ : Ø§Ø³ØªØ§ÙŠÙ„ Ù‡Ø§ Ù…ÙŠ ØªÙˆØ§Ù†Ù†Ø¯ Ø®ÙŠÙ„ÙŠ Ø³Ø±ÙŠØ¹ Ø±ÙˆÙŠ Ù…ØªÙ† Ø§Ù†ØªØ®Ø§Ø¨ Ø´Ø¯Ù‡ Ø§Ø¹Ù…Ø§Ù„ Ú¯Ø±Ø¯Ù†Ø¯.',

	'TOO_FEW_CHARS'	=> 'ØªØ¹Ø¯Ø§Ø¯ Ú©Ø§Ø±Ø§Ú©ØªØ± Ù‡Ø§ÙŠ Ù…Ø¨Ø­Ø« Ø´Ù…Ø§ Ú©Ù… Ø§Ø³Øª.',
	'TOO_FEW_POLL_OPTIONS'	=> 'Ø´Ù…Ø§ Ø¨Ø§ÙŠØ¯ Ø­Ø¯Ø§Ù‚Ù„ Ø¯Ùˆ Ú¯Ø²ÙŠÙ†Ù‡ Ø¨Ø±Ø§ÙŠ Ù†Ø¸Ø± Ø³Ù†Ø¬ÙŠ Ø®ÙˆØ¯ ÙˆØ§Ø±Ø¯ Ú©Ù†ÙŠØ¯.',
	'TOO_MANY_ATTACHMENTS'	=> 'Ù‚Ø§Ø¯Ø± Ø¨Ù‡ Ø§ÙØ²ÙˆØ¯Ù† Ù¾ÙŠÙˆØ³Øª Ø¯ÙŠÚ¯Ø± Ù†Ù…ÙŠ Ø¨Ø§Ø´Ø¯, %d Ø¯Ø± Ø­Ø§Ù„Øª Ø­Ø¯Ø§Ú©Ø«Ø± Ø§Ø³Øª.',
	'TOO_MANY_CHARS'	=> 'Ø§ÛŒÙ† Ù¾ÛŒØºØ§Ù… Ø­Ø§ÙˆÛŒ Ú©Ø§Ø±Ø§Ú©ØªØ±Ù‡Ø§ÛŒ Ø²ÛŒØ§Ø¯ÛŒ Ø§Ø³Øª.',
	'TOO_MANY_CHARS_POST'	=> 'Ù¾ÙŠØºØ§Ù… Ø´Ù…Ø§ Ø­Ø§ÙˆÙŠ %1$d Ú©Ø§Ø±Ø§Ú©ØªØ± Ù…ÙŠ Ø¨Ø§Ø´Ø¯. Ø­Ø¯ Ø§Ú©Ø«Ø± ØªØ¹Ø¯Ø§Ø¯ Ú©Ø§Ø±Ø§Ú©ØªØ± Ù‡Ø§ %2$d Ù…ÛŒ Ø¨Ø§Ø´Ø¯.',
	'TOO_MANY_CHARS_SIG'	=> 'Ø§Ù…Ø¶Ø§ÛŒ Ø´Ù…Ø§ Ø­Ø§ÙˆÛŒ %1$d Ú©Ø§Ø±Ø§Ú©ØªØ± Ù…ÛŒ Ø¨Ø§Ø´Ø¯. Ø­Ø¯ Ø§Ú©Ø«Ø± ØªØ¹Ø¯Ø§Ø¯ Ú©Ø§Ø±Ø§Ú©ØªØ±Ù‡Ø§ÛŒ Ù…Ø¬Ø§Ø² %2$d Ù…ÛŒ Ø¨Ø§Ø´Ø¯.',
	'TOO_MANY_POLL_OPTIONS'	=> 'Ø´Ù…Ø§ Ù‚Ø§Ø¯Ø± Ø¨Ù‡ Ø§Ù†ØªØ®Ø§Ø¨ ØªØ¹Ø¯Ø§Ø¯ Ø²ÙŠØ§Ø¯ÙŠ Ú¯Ø²ÙŠÙ†Ù‡ Ù†Ø¸Ø±Ø³Ù†Ø¬ÙŠ Ù†ÙŠØ³ØªÙŠØ¯.',
	'TOO_MANY_SMILIES'	=> 'Ù¾ÙŠØºØ§Ù… Ø´Ù…Ø§ Ø­Ø§ÙˆÙŠ Ø´Ú©Ù„Ú© Ù‡Ø§ÙŠ Ø²ÙŠØ§Ø¯ÙŠ Ø§Ø³Øª. Ø­Ø¯Ø§Ú©Ø«Ø± ØªØ¹Ø¯Ø§Ø¯ Ø´Ú©Ù„Ú© Ù‡Ø§ %d Ø¹Ø¯Ø¯ Ø§Ø³Øª.',
	'TOO_MANY_URLS'	=> 'Ù¾ÛŒØºØ§Ù… Ø´Ù…Ø§ Ù…Ø´Ù…ÙˆÙ„ URL Ù‡Ø§ÛŒ Ø²ÛŒØ§Ø¯ÛŒ Ø§Ø³Øª . ØªØ¹Ø¯Ø§Ø¯ Ø­Ø¯Ø§Ú©Ø«Ø± URL Ù‡Ø§ÛŒ Ø¨Ú©Ø§Ø± Ø±ÙØªÙ‡ %d Ø¹Ø¯Ø¯ Ù…ÛŒ Ø¨Ø§Ø´Ø¯.',
	'TOO_MANY_USER_OPTIONS'	=> 'Ø´Ù…Ø§ Ù†Ù…ÛŒ ØªÙˆØ§Ù†ÛŒØ¯ Ú¯Ø²ÛŒÙ†Ù‡ Ù‡Ø§ÛŒ Ø²ÛŒØ§Ø¯ÛŒ Ø¨Ø±Ø§ÛŒ Ù‡Ø± Ú©Ø§Ø±Ø¨Ø± Ù†Ø³Ø¨Øª Ø¨Ù‡ Ú¯Ø²ÛŒÙ†Ù‡ Ù‡Ø§ÛŒ Ù†Ø¸Ø±Ø³Ù†Ø¬ÛŒ Ù…ÙˆØ¬ÙˆØ¯ ØªØ¹ÛŒÛŒÙ† Ù†Ù…Ø§ÛŒÛŒØ¯.',
	'TOPIC_BUMPED'	=> 'Ù…Ø¨Ø­Ø« Ø¨Ø§ Ù…ÙˆÙÙ‚ÙŠØª Ø¨Ø§Ù…Ù¾ Ø´Ø¯.',

	'UNAUTHORISED_BBCODE'	=> 'Ø´Ù…Ø§ Ù‚Ø§Ø¯Ø± Ø¨Ù‡ Ø¨Ú©Ø§Ø±Ú¯ÙŠØ±ÙŠ Ø¨Ø¹Ø¶ÙŠ Ø§Ø² BBcode Ù‡Ø§ Ù†ÙŠØ³ØªÙŠØ¯: %s.',
	'UNGLOBALISE_EXPLAIN'	=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UPDATE_COMMENT'	=> 'Ø¨Ø±ÙˆØ² Ø±Ø³Ø§Ù†ÙŠ Ù†Ø¸Ø±',
	'URL_INVALID'	=> 'URL ØªØ¹ÙŠÙŠÙ† Ø´Ø¯Ù‡ ØµØ­ÙŠØ­ Ù†Ù…ÙŠ Ø¨Ø§Ø´Ø¯.',
	'URL_NOT_FOUND'	=> 'ÙØ§ÙŠÙ„ ØªØ¹ÙŠÙŠÙ† Ø´Ø¯Ù‡ Ù¾ÙŠØ¯Ø§ Ù†Ù…ÙŠ Ø´ÙˆØ¯.',
	'URL_IS_OFF'	=> '[url] <em>ØºÙŠØ±ÙØ¹Ø§Ù„ Ø§Ø³Øª</em>',
	'URL_IS_ON'	=> '[url] <em>ÙØ¹Ø§Ù„ Ø§Ø³Øª</em>',
	'USER_CANNOT_BUMP'	=> 'Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ù…Ø¨Ø§Ø­Ø« Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ø±Ø§ Ø¨Ø§Ù…Ù¾ Ú©Ù†ÙŠØ¯.',
	'USER_CANNOT_DELETE'	=> 'Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ù¾Ø³Øª Ù‡Ø§ Ø±Ø§ Ø¯Ø± Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ø­Ø°Ù Ú©Ù†ÙŠØ¯.',
	'USER_CANNOT_EDIT'	=> 'Ø´Ù…Ø§ Ù†Ù…ÙŠ ØªÙˆØ§Ù†ÙŠØ¯ Ø¯Ø± Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ù¾Ø³Øª Ø®ÙˆØ¯ Ø±Ø§ ÙˆÙŠØ±Ø§ÙŠØ´ Ú©Ù†ÙŠØ¯.',
	'USER_CANNOT_REPLY'	=> 'Ø´Ù…Ø§ Ø§Ø¬Ø§Ø²Ù‡ Ù¾Ø§Ø³Ø® Ø¯Ø§Ø¯Ù† Ø¯Ø± Ø§ÙŠÙ† Ø§Ù†Ø¬Ù…Ù† Ø±Ø§ Ù†Ø¯Ø§Ø±ÙŠØ¯.',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'	=> '%sÙ†Ù…Ø§ÙŠØ´ Ù¾ÙŠØºØ§Ù… Ø«Ø¨Øª Ø´Ø¯Ù‡ Ø´Ù…Ø§%s',
	'VIEW_PRIVATE_MESSAGE'	=> '%sÙ†Ù…Ø§ÙŠØ´ Ù¾ÙŠØºØ§Ù… Ù‡Ø§ÙŠ Ø®ØµÙˆØµÙŠ Ø«Ø¨Øª Ø´Ø¯Ù‡ Ø´Ù…Ø§%s',

	'WRONG_FILESIZE'	=> 'Ø­Ø¬Ù… ÙØ§ÛŒÙ„ Ø²ÛŒØ§Ø¯ Ø¨ÙˆØ¯, Ø­Ø¯ Ø§Ú©Ø«Ø± Ø­Ø¬Ù… ÙØ§ÛŒÙ„ Ù…ÛŒ Ø¨Ø§ÛŒØ³Øª %1d %2s Ø¨Ø§Ø´Ø¯.',
	'WRONG_SIZE'				=> 'The image must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high. The submitted image is %5$d pixels wide and %6$d pixels high.',
));

?>