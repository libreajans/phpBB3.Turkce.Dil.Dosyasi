<?php defined('IN_PHPBB') OR die('No direct access allowed.');
/**
 * @author Sevdin Filiz <angelside@users.sourceforge.net>
 * @copyright (c) 2005 phpBB Group <http://www.phpbb.com>			[phpBB sistemi]
 * @copyright (c) 2010 Canver Software <http://www.canversoft.net>	[tercüme]
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// dil değişkenleri
$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Aktif Konular',
	'ANNOUNCEMENTS'			=> 'Duyurular',
	
	'FORUM_PERMISSIONS'		=> 'Forum izinleri',

	'ICON_ANNOUNCEMENT'		=> 'Duyuru',
	'ICON_STICKY'			=> 'Sabit',

	'LOGIN_NOTIFY_FORUM'	=> 'Bu forum hakkında bilgilendirildiniz, incelemek için lütfen oturum açınız.',

	'MARK_TOPICS_READ'		=> 'Konuları okundu olarak işaretle',

	'NEW_POSTS_HOT'			=> 'Yeni ileti var [ Popüler ]',
	'NEW_POSTS_LOCKED'		=> 'Yeni ileti var [ Kilitli ]',
	'NO_NEW_POSTS_HOT'		=> 'Yeni ileti yok [ Popüler ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Yeni ileti yok [ Kilitli ]',
	'NO_READ_ACCESS'		=> 'Bu forumdaki konuları okuyabilmek için gerekli izniniz yok.',

	'POST_FORUM_LOCKED'		=> 'Forum kilitli',

	'TOPICS_MARKED'			=> 'Bu forumdaki tüm konular okundu olarak işaretlendi.',

	'VIEW_FORUM'			=> 'Forumu görüntüle',
	'VIEW_FORUM_TOPIC'		=> '1 konu',
	'VIEW_FORUM_TOPICS'		=> '%d konu',
));

?>