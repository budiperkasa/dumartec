<?php
/**
*
* acp_prune [Japanese]
*
* @package language
* @version $Id: prune.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'ここではユーザーアカウントの削除（または停止）を行うことができます。条件を設けてアカウントを削除する事も可能です: 投稿数、最近の訪問日時など。これらの条件を同時に指定する事も可能です。例えば、最近の訪問日時が 2002-01-01 以前でかつ投稿数が 10 以下のユーザーのみのアカウントを削除/停止できます。削除するアカウントのリストを直接テキストボックスに入力する事によって複数のアカウントを削除する事もできます。その場合、設定した条件は無視されます。一度削除したアカウントを元に戻す機能は用意されていないので注意してください。',

	'DEACTIVATE_DELETE'			=> 'アカウント停止/削除',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'アカウントの削除または停止を選択してください。削除したユーザーを元に戻す機能は用意されてないので注意してください。 “無効化” はアカウントの “停止” を意味します。',
	'DELETE_USERS'				=> '削除',
	'DELETE_USER_POSTS'			=> 'ユーザーが投稿した記事を削除する',
	'DELETE_USER_POSTS_EXPLAIN' => 'アカウントを削除すると同時にそのユーザーが過去に投稿した全投稿記事も削除します。アカウント停止の場合、効果はありません。',

	'JOINED_EXPLAIN'			=> '日付を <kbd>YYYY-MM-DD</kbd> 形式で入力してください',

	'LAST_ACTIVE_EXPLAIN'		=> '日付を <kbd>YYYY-MM-DD</kbd> 形式で入力してください',

	'PRUNE_USERS_LIST'				=> 'プルーニングするユーザー',
	'PRUNE_USERS_LIST_DELETE'		=> '次に挙げるユーザーのアカウントが削除されます',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> '次に挙げるユーザーのアカウントが停止されます',

	'SELECT_USERS_EXPLAIN'		=> 'ユーザーを特定する場合はこのテキストボックスにユーザー名を入力してください。ここで特定したユーザー名は上記の条件設定より優先され、必ずアカウント削除/停止されます。',

	'USER_DEACTIVATE_SUCCESS'	=> 'ユーザーのアカウント停止に成功しました',
	'USER_DELETE_SUCCESS'		=> 'ユーザーのアカウント削除に成功しました',
	'USER_PRUNE_FAILURE'		=> '設定条件を満たすユーザーが見つかりません',

	'WRONG_ACTIVE_JOINED_DATE'	=> '入力した日付が正しくありません。日付は <kbd>YYYY-MM-DD</kbd> 形式にする必要があります。',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'ここでは選択したフォーラム内のトピックをプルーニング（自動削除）できます。指定した日数内に返信または閲覧されていないトピックだけをプルーニングできます。日数を指定せずに削除した場合、フォーラム内の全トピックが削除されます。デフォルトでは投票トピック、注目トピック、告知トピックは削除の対象から外されています。',

	'FORUM_PRUNE'		=> 'フォーラムのプルーニング',

	'NO_PRUNE'			=> 'プルーニングしたフォーラムはありません。',

	'SELECTED_FORUM'	=> '選択したフォーラム',
	'SELECTED_FORUMS'	=> '選択したフォーラム',

	'POSTS_PRUNED'					=> 'プルーニングした返信記事',
	'PRUNE_ANNOUNCEMENTS'			=> '告知トピックをプルーニングする',
	'PRUNE_FINISHED_POLLS'			=> '終了済み投票トピックをプルーニングする',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> '既に終了している投票トピックを削除します',
	'PRUNE_FORUM_CONFIRM'			=> '選択したフォーラムを本当にプルーニングしますか？削除した返信記事とトピックを復元する機能は用意されていないので注意してください。',
	'PRUNE_NOT_POSTED'				=> 'トピックの未返信経過日数（返信寿命）',
	'PRUNE_NOT_VIEWED'				=> 'トピックの未閲覧経過日数（閲覧寿命）',
	'PRUNE_OLD_POLLS'				=> '投票トピックをプルーニングする',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> '返信寿命が過ぎても投票されなかった投票トピックを削除します',
	'PRUNE_STICKY'					=> '注目トピックをプルーニングする',
	'PRUNE_SUCCESS'					=> 'フォーラムのプルーニングに成功しました',

	'TOPICS_PRUNED'		=> 'プルーニングされたトピック',
));

?>