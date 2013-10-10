<?php
/**
*
* acp_search [Japanese]
*
* @package language
* @version $Id: search.php 9126 2008-11-26 19:17:52Z naderman $
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

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'ここでは検索インデックスを管理できます。サーバの負担を少しでも軽くするため、利用していない方の検索バックエンドのインデックス情報は削除すべきです。検索設定（例えばインデックス化される文字の最小/最大数）を変更しても既に存在しているインデックス情報は影響を受けません。既存のインデックス情報に対して新しいインデックス設定ルールを反映するにはインデックスを再構築する必要があります。<br /><em>インデックス（index）とは索引付けの事であり、具体的には記事が投稿された際に記事の件名と文章中に含まれる単語、語句を抜き出してデータベースに保存する事を意味します。検索処理はデータベースに保存されたこのインデックス情報を基にして行われます。phpBB3 では検索バックエンドは Fulltext mysql（データベース MySQL が独自に備えているインデックス機能。インデックス化処理と検索処理は MySQL が行う。Fulltext native より高速だが細かい設定は不可能。）と Fulltext native（phpBB が独自に備えているインデックス機能。インデックス化処理と検索処理は phpBB のDBクラスが行う。細かい設定とデータベースの種類に依存しないのが利点。） の２種類用意されており、AdminCP の検索設定ページでどちらを利用するかを選択できます。デフォルトでは Fulltext native が選択されています。</em>',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'ここでは検索バックエンド（投稿記事のインデックス化処理と検索処理で使用されます。「検索エンジン」と言ったほうが分かり易いかもしれません。）を指定できます。さらに検索処理に制限を課す事によってサーバ負荷を軽くする事もできます。バックエンド共通の設定項目もありますが、バックエンド独自の設定項目もあります。<br /><em>インデックス（index）とは索引付けの事であり、具体的には記事が投稿された際に記事の件名と文章中に含まれる単語、語句を抜き出してデータベースに保存する事を意味します。検索処理はデータベースに保存されたこのインデックス情報を基にして行われます。phpBB3 では検索バックエンドは Fulltext mysql（データベース MySQL が独自に備えているインデックス機能。インデックス化処理と検索処理は MySQL が行う。Fulltext native より高速だが細かい設定は不可能。）と Fulltext native（phpBB が独自に備えているインデックス機能。インデックス化処理と検索処理は phpBB のDBクラスが行う。細かい設定とデータベースの種類に依存しないのが利点。） の２種類用意されており、ここでどちらを利用するかを選択できます。デフォルトでは Fulltext native が選択されています。</em>',

	'COMMON_WORD_THRESHOLD'					=> 'コモンワード判定レベル',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'ある検索単語/語句が全体の記事数に対してこのパーセンテージ（％）以上の記事数をヒットする場合、その検索単語/語句はコモンワード（common word)とみなされ検索処理されません。コモンワードは検索クエリ（データベースへの問い合わせ）の際に無視されます。この機能が働くのは記事数が１００を超えている場合のみです。もしこの機能を無効化したい場合は 0 を入力してください。コモンワードの判定に疑問を感じている場合はインデックスを再構築してください。',
	'CONFIRM_SEARCH_BACKEND'				=> '検索バックエンドを本当に変更してもよろしいですか？検索バックエンドを変更した後は新しい検索バックエンドにて検索インデックスを再構築する必要があります。その際、以前の検索バックエンドに戻るつもりがないならサーバ負荷を少しでも軽くするために以前のバックエンドのインデックス情報は削除しておくべきです。',
	'CONTINUE_DELETING_INDEX'				=> '継続中のインデックス削除処理を再開する',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'インデックス削除処理が開始されています。“検索インデックス” ページへアクセスするにはこの処理の完了を待つかキャンセルする必要があります。',
	'CONTINUE_INDEXING'						=> '継続中のインデックス作成処理を再開する',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'インデックス作成処理が開始しています。“検索インデックス” ページへアクセスするにはこの処理の完了を待つかキャンセルする必要があります。',
	'CREATE_INDEX'							=> 'インデックス作成',

	'DELETE_INDEX'							=> 'インデックス削除',
	'DELETING_INDEX_IN_PROGRESS'			=> 'インデックス削除の処理中です',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '検索バックエンドは現在インデックス情報を削除しています。処理が終わるには数分かかる事もあります。',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Fulltext mysql はMySQL4以上で使用できます',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Fulltext mysql を使用するにはデータベースのテーブル形式が MyISAM である必要があります',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'インデックス済み記事数',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'latin系キャラクタセット以外のUTF-8文字の使用（mbstringによるサポート）：',
	'FULLTEXT_MYSQL_PCRE'					=> 'latin系キャラクタセット以外のUTF-8文字の使用（PCREによるサポート）：',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'もしPCRE（Perl互換正規表現）関数がユニコード文字を取り扱えない場合、latin系キャラクタセット以外のUTF-8文字（漢字、ひらがな等）を検索する際、検索バックエンドはPHPの mbstring 拡張モジュールの正規表現関数の使用を試みます。',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'この検索バックエンドを使用するに当たって、latin系キャラクタセット以外のUTF-8文字（漢字、ひらがな等）を検索するには、PCRE（Perl互換正規表現）関数がユニコード文字を取り扱える必要があります。PHPは 4.4 か 5.1 以上である必要があります。',

	'GENERAL_SEARCH_SETTINGS'				=> '検索バックエンド共通設定',
	'GO_TO_SEARCH_INDEX'					=> '“検索インデックス” ページへ移動',

	'INDEX_STATS'							=> 'インデックス統計',
	'INDEXING_IN_PROGRESS'					=> 'インデックス作成中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '検索バックエンドは現在、掲示板の全投稿記事をインデックス化しています。記事数によっては数分から数時間かかる事もありえます',

	'LIMIT_SEARCH_LOAD'						=> 'サーバCPU使用率の制限',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '検索処理でCPU使用率がこの値を超えた時、掲示板は自動的にオフライン状態に移行します。0 から 1.0 の範囲の数字を入力してください。 1.0 はCPU使用率100％を意味します。この機能はUNIX系サーバにのみ効果があります。',

	'MAX_SEARCH_CHARS'						=> 'インデックスの最大文字数',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'この数を超える単語/語句はインデックスの対象となりません',
	'MIN_SEARCH_CHARS'						=> 'インデックスの最小文字数',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'この数より小さい単語/語句はインデックスの対象となりません',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '投稿者名の最小文字数',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'ワイルドカード(*)を用いて投稿者検索をする際、この数以上の文字を入力する必要があります。もしこの数より小さい文字数の投稿者がいた場合、その投稿者の完全なユーザー名を入力する必要があります。',

	'PROGRESS_BAR'							=> '進行状況',

	'SEARCH_GUEST_INTERVAL'					=> 'ゲストユーザーに対する連続検索制限',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'ゲストユーザーが連続して検索する際、検索と検索の間に挟む必要がある秒数です。ゲストユーザー毎に別々にチェックされます。この機能を無効にしたい場合は 0 を入力してください。',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> '投稿ID %1$d までのインデックス化が完了しています。このステップで %2$d 個の投稿記事をインデックス化しました。<br />現在のインデックス速度はおよそ１秒間に %3$.1f 個です。<br />インデックス化はまだ進行中です…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> '投稿ID %1$d までのインデックス情報を削除しました。<br />インデックス情報の削除はまだ進行中です…',
	'SEARCH_INDEX_CREATED'					=> 'インデックス情報の作成に成功しました',
	'SEARCH_INDEX_REMOVED'					=> 'インデックス情報の削除に成功しました',
	'SEARCH_INTERVAL'						=> '登録ユーザーに対する連続検索制限',
	'SEARCH_INTERVAL_EXPLAIN'				=> '登録ユーザーが連続して検索する際、検索と検索の間に挟む必要がある秒数です。登録ユーザー毎に別々にチェックされます。この機能を無効にしたい場合は 0 を入力してください。',
	'SEARCH_STORE_RESULTS'					=> '検索結果のキャッシュの有効期間',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'この秒数が過ぎると検索結果のキャッシュ情報は破棄されます。0 に設定した場合、検索結果はキャッシュされません。',
	'SEARCH_TYPE'							=> '検索バックエンド',
	'SEARCH_TYPE_EXPLAIN'					=> '投稿記事を検索するエンジンを選択できます。デフォルトでは Fulltext native（phpBB3 のDBクラスによる検索） を検索エンジンとして利用します。',
	'SWITCHED_SEARCH_BACKEND'				=> '検索バックエンドを変更しました。投稿記事を検索するには、検索バックエンドの検索インデックスが作成されている必要があります。',

	'TOTAL_WORDS'							=> 'インデックス化された単語/語句の総数',
	'TOTAL_MATCHES'							=> 'インデックス化された単語/語句とマッチする投稿記事の総数（のべ）',

	'YES_SEARCH'							=> '検索機能を有効にする',
	'YES_SEARCH_EXPLAIN'					=> '投稿記事検索機能とメンバー検索機能を有効にします',
	'YES_SEARCH_UPDATE'						=> 'インデックス化を強制する',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '検索機能が無効に設定されている状況で記事が投稿された場合、その投稿記事を強制的にインデックス化します',
));

?>