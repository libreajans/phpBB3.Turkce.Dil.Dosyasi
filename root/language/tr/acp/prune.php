<?php defined('IN_PHPBB') OR die('No direct access allowed.');
/**
 * @author Sevdin Filiz <angelside@users.sourceforge.net>
 * @copyright (c) phpBB Group <http://www.phpbb.com>			[phpBB sistemi]
 * @copyright (c) Canver Software <http://www.canversoft.net>	[tercüme]
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Bu kısım panodaki kullanıcıları silmeye veya pasif yapmaya izin verir. Kullanıcı hesapları ileti sayısı ve son aktiflik tarihi gibi çeşitli parametrelerle tüm kullanıcılar seçilip, eleme yapılabilir. Hangi hesapların seçileceğini sınırlamak için kriter değiştirilebilir. Örnek olarak 2002-01-01 tarihinden sonra aktif olmayan ileti sayısı 10 iletiden daha az olan kullanıcıları temizlemek şeklinde. Alternatif olarak, kriter ile seçme adımını geçip metin kutusunda her satıra bir kullanıcı adı ekleyebilirsiniz. Bu özelliğe dikkat edin, çünkü kullanıcı bir kez silindikten sonra, yapılan silme işlemini geriye alma imkanı yoktur.',
	'DEACTIVATE_DELETE'			=> 'Pasif hale getir veya sil',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Seçenek, kullanıcıları pasif hale getirir veya onları tamamen siler. Bu geri dönüşü olmayan bir işlemdir, silinen üyeler onarılamaz!',
	'DELETE_USERS'				=> 'Sil',
	'DELETE_USER_POSTS'			=> 'Silinecek kullanıcıların iletilerini temizle',
	'DELETE_USER_POSTS_EXPLAIN' => 'Silinecek kullanıcıların iletilerini siler, eğer kullanıcı pasif ise hiçbir etkisi olmayacaktır.',

	'JOINED_EXPLAIN'			=> '<kbd>YYYY-AA-GG</kbd> biçiminde bir tarih girin.',

	'LAST_ACTIVE_EXPLAIN'		=> '<kbd>YYYY-AA-GG</kbd> biçiminde bir tarih girin. Hiç oturum açmamış kullanıcıları temizlemek için <kbd>0000-00-00</kbd> biçiminde bir tarih girin, <em>Önce</em> ve <em>Sonra</em> koşulları göz önüne alınmayacaktır.',

	'PRUNE_USERS_LIST'				=> 'Ayrıştırılacak kullanıcılar', // TODO: kullanıcı temizliği olabilir mi ?
	'PRUNE_USERS_LIST_DELETE'		=> 'Ayrıştırılan kullanıcılar ile ilgili olarak seçilen kriterlerle takip eden hesaplar silinecektir.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Ayrıştırılan kullanıcılar ile ilgili olarak seçilen kriterlerle takip eden hesaplar pasif hale gelecektir.',
	
	'SELECT_USERS_EXPLAIN'		=> 'Buraya özel bir kullanıcı ismi yazın, yazdığınız kullanıcılar yukarıdaki kriterlere göre seçeneklendirilecekler. Kurucular temizlemenez.', // TODO: prune "temizleme" yerine "silme" olması gerekebilir

	'USER_DEACTIVATE_SUCCESS'	=> 'Seçilen kullanıcılar pasif edildi.',
	'USER_DELETE_SUCCESS'		=> 'Seçilen kullanıcılar silindi.',
	'USER_PRUNE_FAILURE'		=> 'Seçilen kriterlere göre uygun kullanıcı bulunamadı.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Yazılan tarih yanlış, olması gereken biçim <kbd>YYYY-AA-GG</kbd> şeklindedir.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Bu sayfadan, seçtiğiniz rakama göre belirlenen konuları veya belirlenen günde yeterince gösterime ulaşmayan iletileri silebilirsiniz. Eğer bir rakam yazmaziseniz, daha sonra bütün konular silinecektir. Varsayılan olarak şu an kullanılan anketler, sabit konular ve duyurular silinmeyecektir.',

	'FORUM_PRUNE'		=> 'Forum temizliği',

	'NO_PRUNE'			=> 'Hiçbir forum temizlenmedi.',

	'SELECTED_FORUM'	=> 'Seçilmiş forum',
	'SELECTED_FORUMS'	=> 'Seçilmiş forumlar',

	'POSTS_PRUNED'					=> 'İleti temizle',
	'PRUNE_ANNOUNCEMENTS'			=> 'Duyuruları temizle',
	'PRUNE_FINISHED_POLLS'			=> 'Kapalı anketleri temizle',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'İçerisinde sona ermiş anket bulunan konuları siler.',
	'PRUNE_FORUM_CONFIRM'			=> 'Belirlenen ayarları kullanarak seçilen forumları ayrıştırmak istediğinizden emin misiniz? Daha sonra ayrıştırılan ileti ve konuları geri getirmek mümkün olmayacaktır.',
	'PRUNE_NOT_POSTED'				=> 'En son mesajdan beri günler',
	'PRUNE_NOT_VIEWED'				=> 'En son gösterimden beri günler',
	'PRUNE_OLD_POLLS'				=> 'Eski anketleri temizle',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Mesaj günü geçen oylanmamış anket konularını siler.',
	'PRUNE_STICKY'					=> 'Sabit konuları temizle',
	'PRUNE_SUCCESS'					=> 'Forumların temizlenmesi gerçekleştirildi.',

	'TOPICS_PRUNED'		=> 'Konular temizlendi',
));

?>