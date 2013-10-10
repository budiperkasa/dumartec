<?php
/** 
*
* mcp [Turkish]
*
* @package language
* @version $Id: mcp.php,v 1.80 2007/06/09 11:10:24 acydburn Exp $ 
* @copyright (c) 2005 phpBB Group 
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
	'ACTION'				=> 'Eylem',
	'ACTION_NOTE'			=> 'Eylem/Not',
	'ADD_FEEDBACK'			=> 'Geribildirim ekle',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Eğer buna bir bildiri eklemek istiyorsanız lütfen alttaki formu doldurun. Sadece düz metin kullanın; HTML, BBCode, v.b. kullanım izni yoktur.',
	'ADD_WARNING'			=> 'Uyarı ekle',
	'ADD_WARNING_EXPLAIN'	=> 'Bu kullanıcıya bir uyarı göndermek için lütfen alttaki formu doldurun. Sadece düz metin kullanın; HTML, BBCode, v.b. kullanım izni yoktur.',
	'ALL_ENTRIES'			=> 'Tüm girdiler',
	'ALL_NOTES_DELETED'		=> 'Tüm kullanıcı notları başarıyla silindi.',
	'ALL_REPORTS'			=> 'Tüm bildiriler',
	'ALREADY_REPORTED'		=> 'Bu mesaj zaten bildirildi.',
	'ALREADY_WARNED'		=> 'Bu mesaj için zaten bir uyarı yapıldı.',
	'APPROVE'				=> 'Onay',
	'APPROVE_POST'			=> 'Mesajı onayla',
	'APPROVE_POST_CONFIRM'	=> 'Bu mesajı onaylamak istediğinize emin misiniz?',
	'APPROVE_POSTS'			=> 'Mesajları onayla',
	'APPROVE_POSTS_CONFIRM'	=> 'Seçilen mesajları onaylamak istediğinize emin misiniz?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Aynı forum içerisinde zaten bulunan bir başlığı taşıyamazsınız.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Bir misafir kullanıcıya uyarı veremezsiniz.',
	'CANNOT_WARN_SELF'		=> 'Kendinize uyarı veremezsiniz.',
	'CAN_LEAVE_BLANK'		=> 'Burayı boş bırakabilirsiniz.',
	'CHANGE_POSTER'			=> 'Yazarı değiştir',
	'CLOSE_REPORT'			=> 'Bildiriyi kapat',
	'CLOSE_REPORT_CONFIRM'	=> 'Seçilen bildiriyi kapatmak istediğinize emin misiniz?',
	'CLOSE_REPORTS'			=> 'Bildirileri kapat',
	'CLOSE_REPORTS_CONFIRM'	=> 'Seçilen bildirileri kapatmak istediğinize emin misiniz?',

	'DELETE_POSTS'			=> 'Mesajları sil',
	'DELETE_POSTS_CONFIRM'	=> 'Bu mesajları silmek istediğinize emin misiniz?',
	'DELETE_POST_CONFIRM'	=> 'Bu mesajı silmek istediğinize emin misiniz?',
	'DELETE_REPORT'			=> 'Bildiriyi sil',
	'DELETE_REPORT_CONFIRM'	=> 'Seçilen bildiriyi silmek istediğinize emin misiniz?',
	'DELETE_REPORTS'		=> 'Bildirileri sil',
	'DELETE_REPORTS_CONFIRM'	=> 'Seçilen bildirileri silmek istediğinize emin misiniz?',
	'DELETE_SHADOW_TOPIC'		=> 'Gölgeli başlığı sil',
	'DELETE_TOPICS'			=> 'Seçilen başlıkları sil',
	'DELETE_TOPICS_CONFIRM'	=> 'Bu başlıkları silmek istediğinize emin misiniz?',
	'DELETE_TOPIC_CONFIRM'	=> 'Bu başlığı silmek istediğinize emin misiniz?',
	'DISAPPROVE'			=> 'Onaylama',
	'DISAPPROVE_REASON'		=> 'Onaylamama sebebi',
	'DISAPPROVE_POST'		=> 'Mesajı onaylama',
	'DISAPPROVE_POST_CONFIRM'	=> 'Bu mesajı onaylamamak istediğinize emin misiniz?',
	'DISAPPROVE_POSTS'		=> 'Mesajları onaylama',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Seçilen mesajları onaylamamak istediğinize emin misiniz?',
	'DISPLAY_LOG'			=> 'Eskiden başlayarak girdileri göster',
	'DISPLAY_OPTIONS'		=> 'Görüntüleme seçenekleri',

	'EMPTY_REPORT'			=> 'Bu sebebi seçtiğiniz zaman bir açıklama girmelisiniz.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Not: Bir veya bir kaç başlık veritabanından silindi çünkü var olan bu başlıklar boş görünüyordu.',

	'FEEDBACK'				=> 'Geribildirim',
	'FORK'					=> 'Kopyala',
	'FORK_TOPIC'			=> 'Başlığı kopyala',
	'FORK_TOPIC_CONFIRM'	=> 'Bu başlığı kopyalamak istediğinize emin misiniz?',
	'FORK_TOPICS'			=> 'Seçilen başlıkları kopyala',
	'FORK_TOPICS_CONFIRM'	=> 'Seçilen başlıkları kopyalamak istediğinize emin misiniz?',
	'FORUM_DESC'			=> 'Açıklama',
	'FORUM_NAME'			=> 'Forum adı',
	'FORUM_NOT_EXIST'		=> 'Seçtiğiniz forum bulunmuyor.',
	'FORUM_NOT_POSTABLE'	=> 'Seçilen foruma mesaj gönderilememektedir.',
	'FORUM_STATUS'			=> 'Forum durumu',
	'FORUM_STYLE'			=> 'Forum stili',

	'GLOBAL_ANNOUNCEMENT'	=> 'Global duyuru',

	'IP_INFO'				=> 'IP adresi bilgisi',
	'IPS_POSTED_FROM'		=> 'Bu kullanıcının mesaj gönderdiği IP adresleri',
	
	'LATEST_LOGS'				=> 'Kaydedilen son 5 eylem',
	'LATEST_REPORTED'			=> 'Son 5 bildiri',
	'LATEST_UNAPPROVED'			=> 'Onay bekleyen son 5 mesaj',
	'LATEST_WARNING_TIME'		=> 'Son alınan uyarılar',
	'LATEST_WARNINGS'			=> 'Son 5 uyarı',
	'LEAVE_SHADOW'				=> 'Burada bulunan gölgeli başlığı boş bırak',
	'LIST_REPORT'				=> '1 bildiri',
	'LIST_REPORTS'				=> '%d bildiri',
	'LOCK'						=> 'Kilitle',
	'LOCK_POST_POST'			=> 'Mesajı kilitle',
	'LOCK_POST_POST_CONFIRM'	=> 'Bu mesajın düzenlenmesini engellemek istediğinize emin misiniz?',
	'LOCK_POST_POSTS'			=> 'Seçilen mesajları kilitle',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Seçilen mesajların düzenlenmesini engellemek istediğinize emin misiniz?',
	'LOCK_TOPIC_CONFIRM'		=> 'Bu başlığı kilitlemek istediğinize emin misiniz?',
	'LOCK_TOPICS'				=> 'Seçilen başlıkları kilitle',
	'LOCK_TOPICS_CONFIRM'		=> 'Bütün seçilen başlıkları kilitlemek istediğinize emin misiniz?',
	'LOGS_CURRENT_TOPIC'		=> 'Şu anki görüntülenen kayıtlar:',
	'LOGIN_EXPLAIN_MCP'			=> 'Bu forumu yönetebilmek için giriş yapmalısınız.',
	'LOGVIEW_VIEWTOPIC'			=> 'Başlığı görüntüle',
	'LOGVIEW_VIEWLOGS'			=> 'Başlık kaydını görüntüle',
	'LOGVIEW_VIEWFORUM'			=> 'Forumu görüntüle',
	'LOOKUP_ALL'				=> 'Tüm IP adreslerini incele',
	'LOOKUP_IP'					=> 'IP adresini incele',

	'MARKED_NOTES_DELETED'		=> 'Tüm seçilen kullanıcı notları başarıyla silindi.',

	'MCP_ADD'						=> 'Bir uyarı ekle',

	'MCP_BAN'					=> 'Yasaklama',
	'MCP_BAN_EMAILS'			=> 'E-posta adreslerini yasakla',
	'MCP_BAN_IPS'				=> 'IP adreslerini yasakla',
	'MCP_BAN_USERNAMES'			=> 'Kullanıcı adlarını yasakla',

	'MCP_LOGS'						=> 'Moderatör kayıtları',
	'MCP_LOGS_FRONT'				=> 'Ön sayfa',
	'MCP_LOGS_FORUM_VIEW'			=> 'Forum kayıtları',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Başlık kayıtları',

	'MCP_MAIN'						=> 'Ana Sayfa',
	'MCP_MAIN_FORUM_VIEW'			=> 'Forumu görüntüle',
	'MCP_MAIN_FRONT'				=> 'Ön sayfa',
	'MCP_MAIN_POST_DETAILS'			=> 'Mesaj detayları',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Başlığı görüntüle',
	'MCP_MAKE_ANNOUNCEMENT'			=> '“Duyuru” olarak değiştir',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Bu başlığı “Duyuru” olarak değiştirmek istediğinize emin misiniz?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> '“Duyurular” olarak değiştir',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'	=> 'Seçilen başlıkları “Duyurular” olarak değiştirmek istediğinize emin misiniz?',
	'MCP_MAKE_GLOBAL'				=> '“Global duyuru” olarak değiştir',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Bu başlığı “Global duyuru” olarak değiştirmek istediğinize emin misiniz?',
	'MCP_MAKE_GLOBALS'			=> '“Global duyurular” olarak değiştir',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Seçilen başlıkları “Global duyurular” olarak değiştirmek istediğinize emin misiniz?',
	'MCP_MAKE_STICKY'				=> '“Sabit Başlık” olarak değiştir',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Bu başlığı “Sabit Başlık” olarak değiştirmek istediğinize emin misiniz?',
	'MCP_MAKE_STICKIES'			=> '“Sabit Başlıklar” olarak değiştir',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Seçilen başlıkları “Sabit Başlıklar” olarak değiştirmek istediğinize emin misiniz?',
	'MCP_MAKE_NORMAL'				=> '“Standart Başlık” olarak değiştir',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Bu başlığı “Standart Başlık” olarak değiştirmek istediğinize emin misiniz?',
	'MCP_MAKE_NORMALS'				=> '“Standart Başlıklar” olarak değiştir',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Seçilen başlıkları “Standart Başlıklar” olarak değiştirmek istediğinize emin misiniz?',

	'MCP_NOTES'						=> 'Kullanıcı notları',
	'MCP_NOTES_FRONT'				=> 'Ön sayfa',
	'MCP_NOTES_USER'				=> 'Kullanıcı detayları',

 	'MCP_POST_REPORTS'				=> 'Bu mesajda bildiriler bulunuyor',

	'MCP_REPORTS'					=> 'Bildirilen mesajlar',
	'MCP_REPORT_DETAILS'			=> 'Bildiri detayları',
	'MCP_REPORTS_CLOSED'			=> 'Kapalı bildiriler',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Bu önceden çözülmüş tüm bildiri alan mesajların bir listesidir.',
	'MCP_REPORTS_OPEN'				=> 'Açık bildiriler',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Bu çözülmemiş tüm bildiri alan mesajların bir listesidir.',

	'MCP_QUEUE'								=> 'Yönetim sırası',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Detayları onayla',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Onay bekleyen mesajlar',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Bu kullanıcılara görüntülenmeden önce onay isteyen tüm mesajların bir listesidir.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Onay bekleyen başlıklar',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Bu kullanıcılara görüntülenmeden önce onay isteyen tüm başlıkların bir listesidir.',

	'MCP_VIEW_USER'			=> 'Belirli bir kullanıcı için uyarıları görüntüle',

	'MCP_WARN'				=> 'Uyarılar',
	'MCP_WARN_FRONT'			=> 'Ön sayfa',
	'MCP_WARN_LIST'			=> 'Uyarı listesi',
	'MCP_WARN_POST'			=> 'Belirli mesaj için uyarı ver',
	'MCP_WARN_USER'			=> 'Kullanıcıya uyarı ve',

	'MERGE_POSTS'			=> 'Mesajları birleştir',
	'MERGE_POSTS_CONFIRM'		=> 'Seçilen mesajları birleştirmek istediğinize emin misiniz?',
	'MERGE_TOPIC_EXPLAIN'		=> 'Alttaki formu kullanarak seçilen mesajları diğer bir başlıkla birleştirebilirsiniz. Bu mesajlar yeniden düzenlenmeyecektir ve kullanıcılar mesajlarını yeni başlıkta göreceklerdir.<br />Lütfen gidecek başlık id numarası girin veya "Başlık seç" butonuna tıklayarak başlığı arayın.',
	'MERGE_TOPIC_ID'			=> 'Gidecek başlık id numarası',
 	'MERGE_TOPICS'			=> 'Başlıkları birleştir',
 	'MERGE_TOPICS_CONFIRM'	=> 'Seçilen başlıkları birleştirmek istediğinize emin misiniz?',
	'MODERATE_FORUM'		=> 'Forum yönetimi',
 	'MODERATE_TOPIC'		=> 'Başlık yönetimi',
 	'MODERATE_POST'			=> 'Mesaj yönetimi',
	'MOD_OPTIONS'			=> 'Moderatör seçenekleri',
	'MORE_INFO'				=> 'Daha fazla bilgi',
	'MOST_WARNINGS'			=> 'En çok uyarı alan kullanıcılar',
	'MOVE_TOPIC_CONFIRM'		=> 'Bu başlığı yeni bir foruma taşımak istediğinize emin misiniz?',
	'MOVE_TOPICS'			=> 'Seçilen başlıkları taşı',
	'MOVE_TOPICS_CONFIRM'		=> 'Seçilen başlıkları yeni bir foruma taşımak istediğinize emin misiniz?',

	'NOTIFY_POSTER_APPROVAL'	=> 'Yazara onay hakkında bildiri gönder?',
	'NOTIFY_POSTER_DISAPPROVAL' 	=> 'Yazara onaylanmama hakkında bildiri gönder?',
	'NOTIFY_USER_WARN'		=> 'Kullanıcıya uyarı hakkında bildiri gönder?',
	'NOT_MODERATOR'			=> 'Bu forumun bir moderatörü değilsiniz.',
	'NO_DESTINATION_FORUM'		=> 'Lütfen gidecek bir forum seçin.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Gidecek forum mevcut değil.',
	'NO_ENTRIES'			=> 'Bu dönem için hiç bir kayıt girdisi yok.',
	'NO_FEEDBACK'			=> 'Bu kullanıcı için geribildirim bulunmuyor.',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Mesajların birleştirilmesi için gidecek bir başlık seçmelisiniz.',
	'NO_MATCHES_FOUND'		=> 'Uygun sonuç bulunamadı.',
	'NO_POST'				=> 'Bu mesaj yüzünden kullanıcıya verilecek uyarı için bir mesaj seçmelisiniz.',
	'NO_POST_REPORT'			=> 'Bu mesaj bildiri almadı.',
	'NO_POST_SELECTED'		=> 'Bu eylemi uygulamak için en az bir tane mesaj seçmelisiniz.',
	'NO_REASON_DISAPPROVAL'		=> 'Lütfen onaylamama için uygun bir sebep girin.',
	'NO_REPORT'						=> 'Hiç bir bildiri bulunamadı',
	'NO_REPORTS'              => 'Hiç bir bildiri bulunamadı',
	'NO_REPORT_SELECTED'			=> 'Bu eylemi uygulamak için en az bir tane bildiri seçmelisiniz.',
	'NO_TOPIC_ICON'			=> 'Yok',
	'NO_TOPIC_SELECTED'		=> 'Bu eylemi uygulamak için en az bir tane başlık seçmelisiniz.',
	'NO_TOPICS_QUEUE'				=> 'Onay için bekleyen hiç bir başlık yok.',

	'ONLY_TOPIC'			=> 'Sadece başlık “%s”',
	'OTHER_USERS'			=> 'Bu IP adresinden mesaj gönderen diğer kullanıcılar',

	'POSTER'				=> 'Yazar',
	'POSTS_APPROVED_SUCCESS'	=> 'Seçilen mesajlar onaylandı.',
	'POSTS_DELETED_SUCCESS'		=> 'Seçilen mesajlar veritabanından başarıyla silindi.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Seçilen mesajlar onaylanmadı.',
	'POSTS_LOCKED_SUCCESS'		=> 'Seçilen mesajlar başarıyla kilitlendi.',
	'POSTS_MERGED_SUCCESS'		=> 'Seçilen mesajlar birleştirildi.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Seçilen mesajların kilidi başarıyla açıldı.',
	'POSTS_PER_PAGE'			=> 'Her sayfadaki mesaj sayısı',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Tüm mesajları görmek için 0 yazın.)',
	'POST_APPROVED_SUCCESS'		=> 'Seçilen mesaj onaylandı.',
	'POST_DELETED_SUCCESS'		=> 'Seçilen mesaj veritabanından başarıyla silindi.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Seçilen mesaj onaylanmadı.',
	'POST_LOCKED_SUCCESS'		=> 'Mesaj başarıyla kilitlendi.',
	'POST_NOT_EXIST'			=> 'İstediğiniz mesaj bulunamıyor.',
	'POST_REPORTED_SUCCESS'		=> 'Bu mesaj başarıyla bildirildi.',
	'POST_UNLOCKED_SUCCESS'		=> 'Mesajın kilidi başarıyla açıldı.',

	'READ_USERNOTES'			=> 'Kullanıcı notları',
	'READ_WARNINGS'			=> 'Kullanıcı uyarıları',
	'REPORTER'				=> 'Bildiren',
	'REPORTED'				=> 'Bildirildi',
	'REPORTED_BY'			=> 'Bildiri yapan',
	'REPORTED_ON_DATE'		=> 'tarih',
	'REPORTS_CLOSED_SUCCESS'	=> 'Seçilen bildiriler başarıyla kapatıldı.',
	'REPORTS_DELETED_SUCCESS'	=> 'Seçilen bildiriler başarıyla silindi.',
	'REPORTS_TOTAL'			=> 'İncelemek için toplam <strong>%d</strong> bildiri var.',
	'REPORTS_ZERO_TOTAL'		=> 'İncelemek için hiç bir bildiri yok.',
	'REPORT_CLOSED'			=> 'Bu bildiri zaten kapatıldı.',
	'REPORT_CLOSED_SUCCESS'		=> 'Seçilen bildiri başarıyla kapatıldı.',
	'REPORT_DELETED_SUCCESS'	=> 'Seçilen bildiri başarıyla silindi.',
	'REPORT_DETAILS'			=> 'Bildiri detayları',
	'REPORT_MESSAGE'			=> 'Bu mesajı bildir',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Seçilen mesajı bildirmek için bu formu kullanın. Bildiri genel olarak sadece forum kurallarını çiğneyen mesaj için kullanılmalıdır.',
	'REPORT_NOTIFY'			=> 'Beni haberdar et',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Yapmış olduğunuz bildiri çözüme ulaştığında size bilgi verir',
	'REPORT_POST_EXPLAIN'		=> 'Seçilen mesajı forum moderatörlerine ve mesaj panosu yöneticilerine bildirmek için bu formu kullanın. Bildiri genel olarak sadece forum kurallarını çiğneyen mesaj için kullanılmalıdır.',
	'REPORT_REASON'			=> 'Bildiri sebebi',
	'REPORT_TIME'			=> 'Bildiri zamanı',
	'REPORT_TOTAL'			=> 'İnceleme için toplam <strong>1</strong> bildiri var.',
	'RESYNC'				=> 'Yeniden senkronize et',
	'RETURN_MESSAGE'			=> '%sMesaja dön%s',
	'RETURN_NEW_FORUM'		=> '%sYeni foruma git%s',
	'RETURN_NEW_TOPIC'		=> '%sYeni başlığa git%s',
	'RETURN_POST'			=> '%sMesaja dön%s',
	'RETURN_QUEUE'			=> '%sSıralamaya dön%s',
	'RETURN_REPORTS'			=> '%sBildirilere dön%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sBaşlığa dön%s',

	'SEARCH_POSTS_BY_USER'				=> 'Şu kullanıcının mesajlarını ara',
	'SELECT_ACTION'						=> 'İstenilen eylemi seçin',
 	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Lütfen bu global duyurunun gösterilmesini istediğiniz forumu seçin.',
 	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Seçilen başlıkların bir veya daha fazlası global duyurudur. Lütfen bunların gösterilmesini istediğiniz forumu seçin.',
 	'SELECT_MERGE'						=> 'Birleştirmek için seç',
	'SELECT_TOPICS_FROM'				=> 'Şuradan başlık seç',
	'SELECT_TOPIC'						=> 'Başlık seç',
	'SELECT_USER'						=> 'Kullanıcı seç',
	'SORT_ACTION'					=> 'Kayıt eylemi',
	'SORT_DATE'							=> 'Tarih',
	'SORT_IP'							=> 'IP adresi',
	'SORT_WARNINGS'						=> 'Uyarılar',
	'SPLIT_AFTER'						=> 'Seçilen mesajdan ilerisini ayır',
	'SPLIT_FORUM'					=> 'Yeni başlık için forum',
	'SPLIT_POSTS'						=> 'Seçilen mesajları ayır',
	'SPLIT_SUBJECT'						=> 'Yeni başlık konusu',
	'SPLIT_TOPIC_ALL'					=> 'Seçilen mesajlardan başlığı ayır',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Bu başlığı ayırmak istediğinize emin misiniz?',
	'SPLIT_TOPIC_BEYOND'				=> 'Seçilen mesajdan başlığı ayır',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Seçilen mesajdan bu başlığı ayırmak istediğinize emin misiniz?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Alttaki formu kullanarak başlığı ikiye ayırabilirsiniz, mesajları ayrı ayrı seçerek veya tek bir mesajdan ayırabilirsiniz.',

	'THIS_POST_IP'			=> 'Bu mesaj için IP adresi',
	'TOPICS_APPROVED_SUCCESS'	=> 'Seçilen başlıklar onaylandı.',
	'TOPICS_DELETED_SUCCESS'	=> 'Seçilen başlıklar veritabanından başarıyla silindi.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'Seçilen başlıklar onaylanmadı.',
	'TOPICS_FORKED_SUCCESS'		=> 'Seçilen başlıklar başarıyla kopyalandı.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Seçilen başlıklar kilitlendi.',
	'TOPICS_MOVED_SUCCESS'		=> 'Seçilen başlıklar başarıyla taşındı.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Seçilen başlıklar başarıyla yeniden senkronize edildi.',
	'TOPICS_TYPE_CHANGED'			=> 'Başlık türleri başarıyla değiştirildi.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Seçilen başlıkların kilidi açıldı.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Seçilen başlık onaylandı.',
	'TOPIC_DELETED_SUCCESS'		=> 'Seçilen başlık veritabanından başarıyla silindi.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Seçilen başlık onaylanmadı.',
	'TOPIC_FORKED_SUCCESS'		=> 'Seçilen başlık başarıyla kopyalandı.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Seçilen başlık kilitlendi.',
	'TOPIC_MOVED_SUCCESS'		=> 'Seçilen başlık başarıyla taşındı.',
	'TOPIC_NOT_EXIST'			=> 'Seçilen başlık bulunmuyor.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Seçilen başlık yeniden senkronize edildi.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Seçilen başlık başarıyla ayrıldı.',
	'TOPIC_TIME'			=> 'Başlık zamanı',
	'TOPIC_TYPE_CHANGED'		=> 'Başlık türü başarıyla değiştirildi.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Seçilen başlığın kilidi açıldı.',
	'TOTAL_WARNINGS'			=> 'Toplam Uyarılar',

	'UNAPPROVED_POSTS_TOTAL'	=> 'Onay için bekleyen toplam <strong>%d</strong> mesaj var.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Onay için bekleyen mesaj yok.',
	'UNAPPROVED_POST_TOTAL'		=> 'Onay için bekleyen toplam <strong>1</strong> mesaj var.',
	'UNLOCK'						=> 'Kilidi aç',
	'UNLOCK_POST'					=> 'Mesajın kilidini aç',
	'UNLOCK_POST_EXPLAIN'			=> 'Düzenlemeye izin ver',
	'UNLOCK_POST_POST'				=> 'Mesajın kilidini aç',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Bu mesajın düzenlenebilmesine izin vermek istediğinize emin misiniz?',
	'UNLOCK_POST_POSTS'				=> 'Seçilen mesajların kilidini aç',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Bu mesajların düzenlenebilmesine izin vermek istediğinize emin misiniz?',
	'UNLOCK_TOPIC'					=> 'Başlığın kilidini aç',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Bu başlığın kilidini açmak istediğinize emin misiniz?',
	'UNLOCK_TOPICS'					=> 'Seçilen başlıkların kilidini aç',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Tüm seçilen başlıkların kilidini açmak istediğinize emin misiniz?',
	'USER_CANNOT_POST'				=> 'Bu foruma mesaj gönderemezsiniz.',
	'USER_CANNOT_REPORT'			=> 'Bu forumdaki başlıkları bildiremezsiniz.',
	'USER_FEEDBACK_ADDED'			=> 'Kullanıcı geribildirimi başarıyla eklendi',
	'USER_WARNING_ADDED'			=> 'Kullanıcıya başarıyla uyarı verildi',

	'VIEW_DETAILS'			=> 'Detayları görüntüle',
	'VIEW_POST'            => 'Mesajı görüntüle',

	'WARNED_USERS'			=> 'Uyarı alan kullanıcılar',
	'WARNED_USERS_EXPLAIN'	=> 'Bu uyarılarının süresi dolmayan kullanıcıların bir listesidir.',
	'WARNING_PM_BODY'		=> 'Altta bu mesaj panosunun yöneticisi veya moderatörü tarafından size hangi sebepten dolayı bir uyarı verildiği bulunmaktadır.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Mesaj panosu uyarı bildirisi',
	'WARNING_POST_DEFAULT'	=> 'Tarafınızdan gönderilen bu mesaj bir uyarı sebebidir: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Hiç bir uyarı mevcut değil.',

	'YOU_SELECTED_TOPIC'	=> 'Seçtiğiniz başlık numarası %d: %s.',

	'report_reasons'		=> array(
			'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Konu Dışı',
			'OTHER'		=> 'Diğer',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Mesaj illegal veya korsan yazılım bağlantıları içeriyor.',
			'SPAM'		=> 'Bildirilen mesaj bir web sitesinin veya diğer bir ürünün reklamını yapma amacında.',
			'OFF_TOPIC'	=> 'Bildirilen mesaj konu dışı.',
			'OTHER'		=> 'Bildirilen mesaj diğer kategorilerden herhangi birine uymuyor, lütfen daha fazla bilgi alanını kullanın.'
		)
	),
));

?>