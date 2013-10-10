<?php
/**
*
* acp_styles [正體中文]
*
* @package language
* @version $Id: styles.php 9046 2008-11-02 16:19:11Z acydburn $
* @copyright (c) 2001 - 2007 phpBB TW Group (心靈捕手)
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
	'ACP_IMAGESETS_EXPLAIN'	=> '圖檔組包含所有按鈕、版面、資料夾等等討論區所使用而無特定風格的圖片。在這裡，您可以編輯、匯出或者刪除圖檔組，以及匯入或啟用新的設定。',
	'ACP_STYLES_EXPLAIN'	=> '在這裡，您可以管理在您討論區可用的風格。一個風格包含一個樣板、主題和圖檔包。您可以更改存在的風格、刪除、停用、啟用、建立或匯入新的風格。您也可以使用預覽功能看看風格像甚麼樣子。目前的預設風格使用星號 (*) 標示。這裡還列出了使用每個風格的會員總數，此數不考慮會員風格被覆蓋的情況。',
	'ACP_TEMPLATES_EXPLAIN'	=> '樣板組包含所有用於生成您討論區佈置的標示。在這裡，您可以編輯已經存在的樣板設定、刪除、匯入、匯出以及預覽。您也可以修改用於生成 BBCode 的樣板代碼。',
	'ACP_THEMES_EXPLAIN'	=> '在這裡，您可以建立、安裝、編輯、刪除和匯出主題。主題是色彩和圖檔的結合，應用於樣板上而定義您討論區基本的樣帽。選項開放的範圍取決於您的伺服器和 phpBB 安裝的設定，檢視手冊以獲得更多說明。請注意！以目前存在的主題為基礎建立新主題是可行的。',
	'ADD_IMAGESET'			=> '建立圖檔組',
	'ADD_IMAGESET_EXPLAIN'	=> '在這裡，您可以建立新的圖檔組。取決於您的伺服器設定以及檔案權限，在此您也許有額外的選項。例如：您可以基於已經存在的圖檔組建立新的，您也可以上傳或匯入 (從 store 檔案夾) 圖檔組壓縮檔。如果您上傳或匯入圖檔組壓縮檔，圖檔組名稱是可選的 (將圖檔組名稱留白)。',
	'ADD_STYLE'				=> '建立風格',
	'ADD_STYLE_EXPLAIN'		=> '在這裡，您可以建立新的風格。取決於您的伺服器設定以及檔案權限，在此您也許有額外的選項。例如：您可以基於已經存在的風格建立新的。您也可以上傳或匯入 (從 store 檔案夾) 風格壓縮檔。如果您上傳或匯入風格壓縮檔，風格名稱將自動產生。',
	'ADD_TEMPLATE'			=> '建立樣板',
	'ADD_TEMPLATE_EXPLAIN'	=> '在這裡，您可以增加新的樣板。取決於您的伺服器設定以及檔案權限，在此您也許有額外的選項。例如：您可以基於已經存在的樣板增加新的。您也可以上傳或匯入 (從 store 檔案夾) 樣板壓縮檔。如果您上傳或匯入樣板壓縮檔，樣板名稱是可選的 (將樣板名稱留白)。',
	'ADD_THEME'				=> '建立主題',
	'ADD_THEME_EXPLAIN'		=> '在這裡，您可以增加新的主題。取決於您的伺服器設定以及檔案權限，在此您也許有額外的選項。例如：您可以基於已經存在的主題增加新的。您也可以上傳或匯入 (從 store 檔案夾) 主題壓縮檔。如果您上傳或匯入主題壓縮檔，主題名稱是可選的 (將主題名稱留白)。',
	'ARCHIVE_FORMAT'		=> '壓縮檔類型',
	'AUTOMATIC_EXPLAIN'		=> '如果留白，那麼系統將嘗試自動檢測。',

	'BACKGROUND'			=> '背景',
	'BACKGROUND_COLOUR'		=> '背景顏色',
	'BACKGROUND_IMAGE'		=> '背景圖片',
	'BACKGROUND_REPEAT'		=> '背景重複',
	'BOLD'					=> '粗體',

	'CACHE'							=> '快取',
	'CACHE_CACHED'					=> '已快取',
	'CACHE_FILENAME'				=> '樣板檔案',
	'CACHE_FILESIZE'				=> '檔案大小',
	'CACHE_MODIFIED'				=> '已修改',
	'CONFIRM_IMAGESET_REFRESH'		=> '您確定要重新整理所有的圖檔組資料嗎？圖檔組設定檔的資料將覆寫所有的修改到圖檔組，以實現圖檔組的編輯。',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> '您確定要清除所有已經快取的樣板檔案嗎？',
	'CONFIRM_TEMPLATE_REFRESH'		=> '您確定要以檔案系統中的樣板檔案內容重新整理在資料庫中所有的樣板資料嗎？當樣板檔案被儲存在資料庫中將覆寫所有的修改，以實現樣板的編輯。',
	'CONFIRM_THEME_REFRESH'			=> '您確定要以檔案系統中的主題內容重新整理儲存在資料庫中所有的主題資料嗎？當主題檔案被儲存在資料庫中將覆寫所有的修改，以實現主題的編輯。',
	'COPYRIGHT'						=> '版權',
	'CREATE_IMAGESET'				=> '建立新的圖檔組',
	'CREATE_STYLE'					=> '建立新的風格',
	'CREATE_TEMPLATE'				=> '建立新的樣板',
	'CREATE_THEME'					=> '建立新的主題',
	'CURRENT_IMAGE'					=> '目前的圖片',

	'DEACTIVATE_DEFAULT'		=> '您不能停用預設的風格。',
	'DELETE_FROM_FS'			=> '從檔案系統中刪除',
	'DELETE_IMAGESET'			=> '刪除圖檔組',
	'DELETE_IMAGESET_EXPLAIN'	=> '在這裡，您可以從資料庫中移除已選擇的圖檔組。此外，如果您有權限，那麼您可以選擇從檔案系統中移除這個設定。請注意！此動作無法復原。當圖檔組被刪除將不再回來。建議您先匯出您的設定以備將來使用。',
	'DELETE_STYLE'				=> '刪除風格',
	'DELETE_STYLE_EXPLAIN'		=> '在這裡，您可以移除已選擇的風格。在此您不能移除所有的風格元素。這些必須經由個別的表單逐一刪除。注意！此動作無法復原。',
	'DELETE_TEMPLATE'			=> '刪除樣板',
	'DELETE_TEMPLATE_EXPLAIN'	=> '在這裡，您可以從資料庫中移除已選擇的樣板。此外，如果您有權限，那麼您可以選擇從檔案系統中移除這個設定。請注意！此動作無法復原。當樣板被刪除將不再回來。建議您先匯出您的設定以備將來使用。',
	'DELETE_THEME'				=> '刪除主題',
	'DELETE_THEME_EXPLAIN'		=> '在這裡，您可以從資料庫中移除已選擇的主題。此外，如果您有權限，那麼您可以選擇從檔案系統中移除這個主題。請注意！此動作無法復原。當主題被刪除將不再回來。建議您先匯出您的主題以備將來使用。',
	'DETAILS'					=> '細節',
	'DIMENSIONS_EXPLAIN'		=> '選擇「是」將包含高度/寬度的參數。',

	'EDIT_DETAILS_IMAGESET'				=> '編輯圖檔組細節',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> '在這裡，您可以編輯圖檔組的細節，例如：它的名稱。',
	'EDIT_DETAILS_STYLE'				=> '編輯風格',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> '使用下面的表單您可以修改已經存在的風格。您可以更改樣板，主題和圖檔組的組合來定義風格。您也可以設定風格為預設的。',
	'EDIT_DETAILS_TEMPLATE'				=> '編輯樣板細節',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> '在這裡，您可以編輯某個樣板細節，例如：它的名稱。您也可以使用選項去切換風格表單的儲存方式為資料庫或檔案系統。這個選項取決於您的 PHP 設定以及您的樣板設定是否可以被網站伺服器寫入。',
	'EDIT_DETAILS_THEME'				=> '編輯主題細節',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> '在這裡，您可以編輯某個主題細節，例如：它的名稱。您也可以使用選項去切換風格表單的儲存方式為資料庫或檔案系統。這個選項取決於您的 PHP 設定以及您的樣板設定是否可以被網站伺服器寫入。',
	'EDIT_IMAGESET'						=> '編輯圖檔組',
	'EDIT_IMAGESET_EXPLAIN'				=> '在這裡，您可以編輯個別的圖檔以定義圖檔組。您也可以設定圖檔大小。尺寸是可選擇的，指定它們可以克服部份瀏覽器的某些問題。不指定的話，可以減少一些資料庫記錄量。',
	'EDIT_TEMPLATE'						=> '編輯樣板',
	'EDIT_TEMPLATE_EXPLAIN'				=> '在這裡，您可以直接編輯您的樣板組。請記住！這些編輯是永久性的，一旦送出不可以復原。如果 PHP 允許寫入，這裡任何的修改將直接寫入您風格中的樣板檔案。如果 PHP 不允許寫入，那些檔案將被複製到資料庫而所有的更改只會影響資料庫。請注意！當編輯樣板組時，記得要用 {XXXX} 的形式去結束所有替代變數項目以及條件語句。',
	'EDIT_TEMPLATE_STORED_DB'			=> '樣板檔案不可寫，所以樣板組現在被儲存在資料庫中包含已修改檔案。',
	'EDIT_THEME'						=> '編輯主題',
	'EDIT_THEME_EXPLAIN'				=> '在這裡，您可以編輯所選擇的主題、更改顏色、圖片、...等。',
	'EDIT_THEME_STORED_DB'				=> '風格表單檔案不可寫，所以表單現在被儲存在資料庫中包含您做的修改。',
	'EDIT_THEME_STORE_PARSED'			=> '這個主題需要它的風格表單被解析。如果它是儲存在資料庫中，那麼這個情況才可能發生。',
	'EDITOR_DISABLED'					=> '此樣板編輯器是無效的。',
	'EXPORT'							=> '匯出',

	'FOREGROUND'			=> '前景',
	'FONT_COLOUR'			=> '字型顏色',
	'FONT_FACE'				=> '字體',
	'FONT_FACE_EXPLAIN'		=> '您可以用逗號分隔指定多種的字體。如果會員沒有安裝第一個字體，那麼會依次選擇其他可用的字體。',
	'FONT_SIZE'				=> '字型大小',

	'GLOBAL_IMAGES'			=> '全域',

	'HIDE_CSS'				=> '隱藏簡易的 CSS',

	'IMAGE_WIDTH'				=> '圖檔寬度',
	'IMAGE_HEIGHT'				=> '圖檔高度',
	'IMAGE'						=> '圖檔',
	'IMAGE_NAME'				=> '圖檔名稱',
	'IMAGE_PARAMETER'			=> '參數',
	'IMAGE_VALUE'				=> '值',
	'IMAGESET_ADDED'			=> '新的圖檔組增加在檔案系統。',
	'IMAGESET_ADDED_DB'			=> '新的圖檔組增加到資料庫中。',
	'IMAGESET_DELETED'			=> '圖檔組刪除成功。',
	'IMAGESET_DELETED_FS'		=> '圖檔組從資料庫中刪除，但是某些檔案也許還保留在檔案系統。',
	'IMAGESET_DETAILS_UPDATED'	=> '圖檔組細節更新成功。',
	'IMAGESET_ERR_ARCHIVE'		=> '請選擇壓縮檔案的方式。',
	'IMAGESET_ERR_COPY_LONG'	=> '版權聲明不能多於 60 個字元。',
	'IMAGESET_ERR_NAME_CHARS'	=> '圖檔組名稱只能包含英文字母、數字、-、+、_ 和空格。',
	'IMAGESET_ERR_NAME_EXIST'	=> '圖檔組名稱已經存在。',
	'IMAGESET_ERR_NAME_LONG'	=> '圖檔組名稱不能多於 30 個字元。',
	'IMAGESET_ERR_NOT_IMAGESET'	=> '您指定的壓縮檔中沒有包含有效的圖檔組。',
	'IMAGESET_ERR_STYLE_NAME'	=> '您必須為圖檔組提供一個名稱。',
	'IMAGESET_EXPORT'			=> '匯出圖檔組',
	'IMAGESET_EXPORT_EXPLAIN'	=> '在這裡，您可以從壓縮檔的表單中匯出圖檔組。這個壓縮檔包含所有在另一個討論區安裝圖檔的設定所需要的資料。您可以選擇直接下載檔案或者是放置在 store/ 資料夾中，等待以後下載或經由 FTP 下載。',
	'IMAGESET_EXPORTED'			=> '圖檔組匯出成功並儲存在 %s。',
	'IMAGESET_NAME'				=> '圖檔組名稱',
	'IMAGESET_REFRESHED'		=> '圖檔組重新整理成功。',
	'IMAGESET_UPDATED'			=> '圖檔組更新成功。',
	'ITALIC'					=> '斜體',

	'IMG_CAT_BUTTONS'		=> '本地化按鈕',
	'IMG_CAT_CUSTOM'		=> '自行定義圖檔',
	'IMG_CAT_FOLDERS'		=> '主題圖示',
	'IMG_CAT_FORUMS'		=> '版面圖示',
	'IMG_CAT_ICONS'			=> '一般圖示',
	'IMG_CAT_LOGOS'			=> 'Logo',
	'IMG_CAT_POLLS'			=> '投票圖示',
	'IMG_CAT_UI'			=> '一般會員界面元素',
	'IMG_CAT_USER'			=> '附加的圖檔',

	'IMG_SITE_LOGO'			=> '主要的 logo',
	'IMG_UPLOAD_BAR'		=> '上傳進度棒',
	'IMG_POLL_LEFT'			=> '投票左端',
	'IMG_POLL_CENTER'		=> '投票中間',
	'IMG_POLL_RIGHT'		=> '投票右端',
	'IMG_ICON_FRIEND'		=> '增加為好友',
	'IMG_ICON_FOE'			=> '增加到黑名單',

	'IMG_FORUM_LINK'			=> '版面連結',
	'IMG_FORUM_READ'			=> '版面',
	'IMG_FORUM_READ_LOCKED'		=> '版面鎖定',
	'IMG_FORUM_READ_SUBFORUM'	=> '子版面',
	'IMG_FORUM_UNREAD'			=> '有新文章的版面',
	'IMG_FORUM_UNREAD_LOCKED'	=> '有新鎖定文章的版面',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> '有新文章的子版面',
	'IMG_SUBFORUM_READ'			=> '子版面圖示',
	'IMG_SUBFORUM_UNREAD'		=> '有新文章的子版面圖示',

	'IMG_TOPIC_MOVED'			=> '移動的主題',

	'IMG_TOPIC_READ'				=> '主題',
	'IMG_TOPIC_READ_MINE'			=> '我有參與討論的主題',
	'IMG_TOPIC_READ_HOT'			=> '熱門的主題',
	'IMG_TOPIC_READ_HOT_MINE'		=> '我有參與討論的熱門主題',
	'IMG_TOPIC_READ_LOCKED'			=> '鎖定的主題',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> '我有參與討論的鎖定主題',

	'IMG_TOPIC_UNREAD'				=> '有新文章的主題',
	'IMG_TOPIC_UNREAD_MINE'			=> '我有參與討論的主題有新文章',
	'IMG_TOPIC_UNREAD_HOT'			=> '有新文章的熱門主題',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> '我有參與討論的熱門主題有新文章',
	'IMG_TOPIC_UNREAD_LOCKED'		=> '有新文章的鎖定主題',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> '我有參與討論的鎖定主題有新文章',

	'IMG_STICKY_READ'				=> '置頂主題',
	'IMG_STICKY_READ_MINE'			=> '我有參與討論的置頂主題',
	'IMG_STICKY_READ_LOCKED'		=> '鎖定的置頂主題',
	'IMG_STICKY_READ_LOCKED_MINE'	=> '我有參與討論的鎖定的置頂主題',
	'IMG_STICKY_UNREAD'				=> '有新文章的置頂主題',
	'IMG_STICKY_UNREAD_MINE'		=> '我有參與討論的置頂主題有新文章',
	'IMG_STICKY_UNREAD_LOCKED'		=> '有新文章的鎖定的置頂主題',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> '我有參與討論的鎖定的置頂主題有新文章',

	'IMG_ANNOUNCE_READ'					=> '公告',
	'IMG_ANNOUNCE_READ_MINE'			=> '我有參與討論的公告',
	'IMG_ANNOUNCE_READ_LOCKED'			=> '鎖定的公告',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> '我有參與討論的鎖定的公告',
	'IMG_ANNOUNCE_UNREAD'				=> '有新文章的公告',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> '我有參與討論的公告有新文章',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> '有新文章的鎖定的公告',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> '我有參與討論的鎖定的公告有新文章',

	'IMG_GLOBAL_READ'					=> '全域公告',
	'IMG_GLOBAL_READ_MINE'				=> '我有參與討論的全域公告',
	'IMG_GLOBAL_READ_LOCKED'			=> '鎖定的全域公告',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> '我有參與討論的鎖定的全域公告',
	'IMG_GLOBAL_UNREAD'					=> '有新文章的全域公告',
	'IMG_GLOBAL_UNREAD_MINE'			=> '我有參與討論的全域公告有新文章',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> '鎖定的全域公告',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> '我有參與討論的鎖定的全域公告有新文章',

	'IMG_PM_READ'		=> '已讀私人訊息',
	'IMG_PM_UNREAD'		=> '未讀私人訊息',

	'IMG_ICON_BACK_TOP'		=> '最頂端',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> '發送 e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> '發送訊息',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> '網站',

	'IMG_ICON_POST_DELETE'			=> '刪除文章',
	'IMG_ICON_POST_EDIT'			=> '編輯文章',
	'IMG_ICON_POST_INFO'			=> '顯示文章細節',
	'IMG_ICON_POST_QUOTE'			=> '引用文章',
	'IMG_ICON_POST_REPORT'			=> '檢舉文章',
	'IMG_ICON_POST_TARGET'			=> '迷你文章',
	'IMG_ICON_POST_TARGET_UNREAD'	=> '新的迷你文章',


	'IMG_ICON_TOPIC_ATTACH'			=> '附加檔案',
	'IMG_ICON_TOPIC_LATEST'			=> '最後發表',
	'IMG_ICON_TOPIC_NEWEST'			=> '未讀的最後發表',
	'IMG_ICON_TOPIC_REPORTED'		=> '被檢舉的文章',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> '未核准的文章',

	'IMG_ICON_USER_ONLINE'		=> '線上的會員',
	'IMG_ICON_USER_OFFLINE'		=> '離線的會員',
	'IMG_ICON_USER_PROFILE'		=> '顯示個人資料',
	'IMG_ICON_USER_SEARCH'		=> '搜尋文章',
	'IMG_ICON_USER_WARN'		=> '警告會員',

	'IMG_BUTTON_PM_FORWARD'		=> '轉寄私人訊息',
	'IMG_BUTTON_PM_NEW'			=> '新的私人訊息',
	'IMG_BUTTON_PM_REPLY'		=> '回覆私人訊息',
	'IMG_BUTTON_TOPIC_LOCKED'	=> '鎖定的主題',
	'IMG_BUTTON_TOPIC_NEW'		=> '新的主題',
	'IMG_BUTTON_TOPIC_REPLY'	=> '回覆主題',

	'IMG_USER_ICON1'		=> '會員自訂圖檔 1',
	'IMG_USER_ICON2'		=> '會員自訂圖檔 2',
	'IMG_USER_ICON3'		=> '會員自訂圖檔 3',
	'IMG_USER_ICON4'		=> '會員自訂圖檔 4',
	'IMG_USER_ICON5'		=> '會員自訂圖檔 5',
	'IMG_USER_ICON6'		=> '會員自訂圖檔 6',
	'IMG_USER_ICON7'		=> '會員自訂圖檔 7',
	'IMG_USER_ICON8'		=> '會員自訂圖檔 8',
	'IMG_USER_ICON9'		=> '會員自訂圖檔 9',
	'IMG_USER_ICON10'		=> '會員自訂圖檔 10',

	'INCLUDE_DIMENSIONS'		=> '包含尺寸',
	'INCLUDE_IMAGESET'			=> '包含圖檔組',
	'INCLUDE_TEMPLATE'			=> '包含樣板',
	'INCLUDE_THEME'				=> '包含主題',
	'INHERITING_FROM'			=> '繼承',
	'INSTALL_IMAGESET'			=> '安裝圖檔組',
	'INSTALL_IMAGESET_EXPLAIN'	=> '在這裡，您可以安裝您所選擇的圖檔組。如果需要，那麼您可以編輯某個細節，或使用預設的方法安裝。',
	'INSTALL_STYLE'				=> '安裝風格',
	'INSTALL_STYLE_EXPLAIN'		=> '在這裡，您可以安裝新的風格以及其適合的相關風格元素。已經有安裝相關的風格元素，那麼它們將不會被覆蓋。某些風格需要預先安裝風格元素。如果您試著安裝風格而沒有必須的風格元素，那麼您會得到一個提示。',
	'INSTALL_TEMPLATE'			=> '安裝模板',
	'INSTALL_TEMPLATE_EXPLAIN'	=> '在這裡，您可以安裝新的樣板組。在此依您的伺服器設定，您可以有一些選項。',
	'INSTALL_THEME'				=> '安裝主題',
	'INSTALL_THEME_EXPLAIN'		=> '在這裡，您可以安裝您所選擇的主題。如果需要，那麼您可以編輯某個細節，或使用預設的方法安裝。',
	'INSTALLED_IMAGESET'		=> '已安裝的圖檔組',
	'INSTALLED_STYLE'			=> '已安裝的風格',
	'INSTALLED_TEMPLATE'		=> '已安裝的樣板',
	'INSTALLED_THEME'			=> '已安裝的主題',

	'LINE_SPACING'				=> '行間距',
	'LOCALISED_IMAGES'			=> '本地化',
	'LOCATION_DISABLED_EXPLAIN'	=> '這個設定是繼承的，而無法被改變。',

	'NO_CLASS'					=> '在風格表單中無法找到類型。',
	'NO_IMAGESET'				=> '在檔案系統中無法找到圖檔組。',
	'NO_IMAGE'					=> '沒有圖檔',
	'NO_IMAGE_ERROR'			=> '在檔案系統中無法找到圖檔。',
	'NO_STYLE'					=> '在檔案系統中無法找到風格。',
	'NO_TEMPLATE'				=> '在檔案系統中無法找到樣板。',
	'NO_THEME'					=> '在檔案系統中無法找到主題。',
	'NO_UNINSTALLED_IMAGESET'	=> '沒有檢測到未安裝的圖檔組',
	'NO_UNINSTALLED_STYLE'		=> '沒有檢測到未安裝的風格',
	'NO_UNINSTALLED_TEMPLATE'	=> '沒有檢測到未安裝的樣板',
	'NO_UNINSTALLED_THEME'		=> '沒有檢測到未安裝的主題',
	'NO_UNIT'					=> '沒有',

	'ONLY_IMAGESET'			=> '這是惟一剩下的圖檔組，您不能刪除它。',
	'ONLY_STYLE'			=> '這是惟一剩下的風格，您不能刪除它。',
	'ONLY_TEMPLATE'			=> '這是惟一剩下的樣板組，您不能刪除它。',
	'ONLY_THEME'			=> '這是惟一剩下的主題，您不能刪除它。',
	'OPTIONAL_BASIS'		=> '可選擇的基礎',

	'REFRESH'					=> '重新整理',
	'REPEAT_NO'					=> '沒有',
	'REPEAT_X'					=> '只有水平地',
	'REPEAT_Y'					=> '只有垂直地',
	'REPEAT_ALL'				=> '兩個方向都有',
	'REPLACE_IMAGESET'			=> '取代圖檔組使用',
	'REPLACE_IMAGESET_EXPLAIN'	=> '這個圖檔組將在任何風格使用這個圖檔，而圖檔正在被您刪除的情況下取代它。',
	'REPLACE_STYLE'				=> '取代風格使用',
	'REPLACE_STYLE_EXPLAIN'		=> '這個風格將在會員使用的風格已經被刪除的情況下取代它。',
	'REPLACE_TEMPLATE'			=> '取代樣板使用',
	'REPLACE_TEMPLATE_EXPLAIN'	=> '這個樣板將在任何風格使用這個樣板，而樣板正在被您刪除的情況下取代它。',
	'REPLACE_THEME'				=> '取代主題使用',
	'REPLACE_THEME_EXPLAIN'		=> '這個主題將在任何風格使用這個主題，而主題正在被您刪除的情況下取代它。',
	'REQUIRES_IMAGESET'			=> '這個風格需要先安裝這個 %s 圖檔組。',
	'REQUIRES_TEMPLATE'			=> '這個風格需要先安裝這個 %s 樣板組。',
	'REQUIRES_THEME'			=> '這個風格需要先安裝這個 %s 主題。',

	'SELECT_IMAGE'				=> '選擇圖檔',
	'SELECT_TEMPLATE'			=> '選擇樣板檔案',
	'SELECT_THEME'				=> '選擇主題檔案',
	'SELECTED_IMAGE'			=> '已選擇的圖檔',
	'SELECTED_IMAGESET'			=> '已選擇的圖檔組',
	'SELECTED_TEMPLATE'			=> '已選擇的樣板',
	'SELECTED_TEMPLATE_FILE'	=> '已選擇的樣板檔案',
	'SELECTED_THEME'			=> '已選擇的主題',
	'SELECTED_THEME_FILE'		=> '已選擇的主題檔案',
	'STORE_DATABASE'			=> '資料庫',
	'STORE_FILESYSTEM'			=> '檔案系統',
	'STYLE_ACTIVATE'			=> '啟用',
	'STYLE_ACTIVE'				=> '啟用',
	'STYLE_ADDED'				=> '風格增加成功。',
	'STYLE_DEACTIVATE'			=> '停用',
	'STYLE_DEFAULT'				=> '標示為預設風格',
	'STYLE_DELETED'				=> '風格刪除成功。',
	'STYLE_DETAILS_UPDATED'		=> '刪除更新成功。',
	'STYLE_ERR_ARCHIVE'			=> '請選擇一個壓縮檔案的方式。',
	'STYLE_ERR_COPY_LONG'		=> '版權聲明不能多於 60 個字元。',
	'STYLE_ERR_MORE_ELEMENTS'	=> '您必須至少選擇一個風格元素。',
	'STYLE_ERR_NAME_CHARS'		=> '風格名稱只能包含英文字母、數字、-、+、_ 和空格。',
	'STYLE_ERR_NAME_EXIST'		=> '風格名稱已經存在。',
	'STYLE_ERR_NAME_LONG'		=> '風格名稱不能多於 30 個字元。',
	'STYLE_ERR_NO_IDS'			=> '您必須為這個風格選擇一個樣板、主題和圖檔組。',
	'STYLE_ERR_NOT_STYLE'		=> '匯入或上傳的檔案中沒有包含有效的風格檔。',
	'STYLE_ERR_STYLE_NAME'		=> '您必須為這個風格提供一個名稱。',
	'STYLE_EXPORT'				=> '匯出風格',
	'STYLE_EXPORT_EXPLAIN'		=> '在這裡，您可以匯出風格為壓縮檔形式。風格不需要包含所有的元素，但是必須至少包含一種。例如：如果您已經為一個共用的樣板建立了新主題和圖檔組，你可以忽略樣板而只匯出這個主題和圖檔組。您可以選擇是直接下載檔案，還是儲存到 store/ 資料夾中，等待以後下載或經由 FTP 下載。',
	'STYLE_EXPORTED'			=> '風格匯出成功並儲存在 %s。',
	'STYLE_IMAGESET'			=> '圖檔組',
	'STYLE_NAME'				=> '風格名稱',
	'STYLE_TEMPLATE'			=> '樣板',
	'STYLE_THEME'				=> '主題',
	'STYLE_USED_BY'				=> '已使用 (包含機器人)',

	'TEMPLATE_ADDED'			=> '樣板組已經增加並儲存在檔案系統。',
	'TEMPLATE_ADDED_DB'			=> '樣板組已經增加並儲存在資料庫中。',
	'TEMPLATE_CACHE'			=> '樣板快取',
	'TEMPLATE_CACHE_EXPLAIN'	=> '預設下 phpBB 會快取編譯過的樣板版本。這種方式可以減少在伺服器上每次頁面被檢視的負荷，和減少頁面生成的時間。在這裡，您可以檢視每個檔案快取的情形，以及刪除個別的檔案或所有的快取。',
	'TEMPLATE_CACHE_CLEARED'	=> '樣板快取清除成功。',
	'TEMPLATE_CACHE_EMPTY'		=> '沒有快取的樣板。',
	'TEMPLATE_DELETED'			=> '樣板組刪除成功。',
	'TEMPLATE_DELETE_DEPENDENT'	=> '樣板的設定無法被刪除，因為有一個或多個樣板的設定是繼承它的：',
	'TEMPLATE_DELETED_FS'		=> '樣板組已經從資料庫中刪除，但是某些檔案可能還保留在檔案系統中。',
	'TEMPLATE_DETAILS_UPDATED'	=> '樣板細節更新成功。',
	'TEMPLATE_EDITOR'			=> '簡易 HTML 樣板編輯器',
	'TEMPLATE_EDITOR_HEIGHT'	=> '樣板編輯器高度',
	'TEMPLATE_ERR_ARCHIVE'		=> '請選擇檔案方式。',
	'TEMPLATE_ERR_CACHE_READ'	=> '儲存快取樣板的快取資料夾無法打開。',
	'TEMPLATE_ERR_COPY_LONG'	=> '版權聲明不能多於 60 個字元。',
	'TEMPLATE_ERR_NAME_CHARS'	=> '樣板名稱只能包含英文字母、數字、-、+、_ 和空格。',
	'TEMPLATE_ERR_NAME_EXIST'	=> '樣板組名稱已經存在。',
	'TEMPLATE_ERR_NAME_LONG'	=> '樣板名稱不能多於 30 個字元。',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> '您指定的檔案中沒有包含有效的樣板組。',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => '新的樣板設定需要安裝 %s 樣板，以及沒有繼承它自己。',
	'TEMPLATE_ERR_STYLE_NAME'	=> '您必須為這個樣板提供一個名稱。',
	'TEMPLATE_EXPORT'			=> '匯出樣板',
	'TEMPLATE_EXPORT_EXPLAIN'	=> '在這裡，您可以匯出樣板為壓縮檔形式。這個壓縮檔將包含所有在另一個討論區安裝這個樣板所需要的檔案。您可以選擇是直接下載檔案，還是儲存到 store/ 資料夾中，等待以後下載或經由 FTP 下載。',
	'TEMPLATE_EXPORTED'			=> '樣板匯出成功並儲存在 %s。',
	'TEMPLATE_FILE'				=> '樣板檔案',
	'TEMPLATE_FILE_UPDATED'		=> '樣板檔案更新成功。',
	'TEMPLATE_INHERITS'			=> '這個樣板設定繼承 %s ，因此，不能比它的上級樣板，有不一樣的儲存設定。',
	'TEMPLATE_LOCATION'			=> '儲存樣板在',
	'TEMPLATE_LOCATION_EXPLAIN'	=> '圖檔總是儲存在檔案系統。',
	'TEMPLATE_NAME'				=> '樣板名稱',
	'TEMPLATE_REFRESHED'		=> '樣板重新整理成功。',

	'THEME_ADDED'				=> '新的主題增加在檔案系統。',
	'THEME_ADDED_DB'			=> '新的主題增加到資料庫中。',
	'THEME_CLASS_ADDED'			=> '自訂類別增加成功。',
	'THEME_DELETED'				=> '主題刪除成功。',
	'THEME_DELETED_FS'			=> '主題已經從資料庫中刪除，但是某些檔案可能還保留在檔案系統中。',
	'THEME_DETAILS_UPDATED'		=> '主題細節更新成功。',
	'THEME_EDITOR'				=> '主題編輯器',
	'THEME_EDITOR_HEIGHT'		=> '主題編輯器高度',
	'THEME_ERR_ARCHIVE'			=> '請選擇一個壓縮檔案方式。',
	'THEME_ERR_CLASS_CHARS'		=> '只有英文字母、數字、+、.、:、-、_ 以及 # 可以用於類別名稱。',
	'THEME_ERR_COPY_LONG'		=> '版權聲明不能多於 60 個字元。',
	'THEME_ERR_NAME_CHARS'		=> '主題名稱只能包含英文字母、數字、-、+、_ 以及空格。',
	'THEME_ERR_NAME_EXIST'		=> '主題名稱已經存在。',
	'THEME_ERR_NAME_LONG'		=> '主題名稱不能多於 30 個字元。',
	'THEME_ERR_NOT_THEME'		=> '您指定的檔案中沒有有效的主題。',
	'THEME_ERR_REFRESH_FS'		=> '主題儲存在檔案系統，所以不需要重新整理。',
	'THEME_ERR_STYLE_NAME'		=> '您必須為主題提供一個名稱。',
	'THEME_FILE'				=> '主題檔案',
	'THEME_EXPORT'				=> '匯出主題',
	'THEME_EXPORT_EXPLAIN'		=> '在這裡，您可以匯出主題為壓縮檔形式。這個壓縮檔將包含所有在另一個討論區安裝這個主題所需要的檔案。您可以選擇是直接下載檔案，還是儲存到 store/ 資料夾中，等待以後下載或經由 FTP 下載。',
	'THEME_EXPORTED'			=> '主題匯出成功並儲存在 %s。',
	'THEME_LOCATION'			=> '風格表單儲存在',
	'THEME_LOCATION_EXPLAIN'	=> '圖檔總是儲存在檔案系統。',
	'THEME_NAME'				=> '主題名稱',
	'THEME_REFRESHED'			=> '主題重新整理成功。',
	'THEME_UPDATED'				=> '主題更新成功。',

	'UNDERLINE'				=> '底線',
	'UNINSTALLED_IMAGESET'	=> '未安裝的圖檔組',
	'UNINSTALLED_STYLE'		=> '未安裝的風格',
	'UNINSTALLED_TEMPLATE'	=> '未安裝的樣板',
	'UNINSTALLED_THEME'		=> '未安裝的主題',
	'UNSET'					=> '未定義',

));

?>