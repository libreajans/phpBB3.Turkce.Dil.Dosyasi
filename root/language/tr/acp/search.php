<?php defined('IN_PHPBB') OR die('No direct access allowed.');
/**
 * @author Sevdin Filiz <angelside@users.sourceforge.net>
 *
 * @copyright (c) phpBB Group 		<http://phpbb.com>			[phpBB sistemi]
 * @copyright (c) Canver Software	<http://canversoft.net>		[Tercüme]
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

/**
 * DEĞİŞTİRMEYİN
 */
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Dil değişkenleri
$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Buradan arama uygulama indekslerini yönetebilirsiniz. Normal olarak bir indeksi kullanmadan veya yeni indeks oluşturmadan önce mevcut indekslerin hepsini silmelisiniz. Bazı arama ayarlarını değiştirdikten sonra (ör. en düşük/en yüksek karakter sayısı) değişikliklerin indekse yansıması için yeniden indeksleme yapılmalıdır.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Buradan arama ve mesaj indekslemesi için kullanılacak olan uygulamayı belirleyebilirsiniz. Bu seçeneklerin ne kadar işleme tabi tutması gerektirdiğini etkileyebilen çeşitli seçenekleri belirleyebilirsiniz. Bu ayarların bazıları tüm arama motorları için aynıdır.',

	'COMMON_WORD_THRESHOLD'					=> 'Genel kelime başlangıcı',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Tüm iletilerde belli bir orandan fazla bulunan kelimeler yaygın kelime sayılır. Yaygın kelimeler arama sorgularında yok sayılırlar; yok sayılmamaları için "0" yazınız. Bu özellik panodaki ileti sayısı 100 den fazla ise etkili olur. Şu anki yaygın kelimelerin durumunun tekrar değerlendirilmesi için arama indeksini silip yeniden oluşturmalısınız.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Arama sonuçlarını farklı bir sisteme değiştirmek istediğinze emin misiniz? Arama sistemini değiştirdikten sonra yeni sistem için, bir arama indeksi oluşturmanız gerekecek. Eğer eski arama sistemine dönmeyi planlamıyorsanız, sistem kaynaklarınızı boşaltmak için eski arama indekslerini silebilirsiniz.',
	'CONTINUE_DELETING_INDEX'				=> 'Önceki indeks silme işlemine devam et',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Bir indeks silme işlemi başlatıldı. Arama indeksi sayfasına erişmek için, silme işlemini tamamlamalı veya iptal etmelisiniz.',
	'CONTINUE_INDEXING'						=> 'Önceki indeks oluşturma işlemine devam et',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Bir indeks oluşturma işlemi başlatıldı. Arama indeksi sayfasına erişmek için, indeks oluşturma işlemini tamamlamalı veya iptal etmelisiniz.',
	'CREATE_INDEX'							=> 'İndeks oluştur',

	'DELETE_INDEX'							=> 'İndeks sil',
	'DELETING_INDEX_IN_PROGRESS'			=> 'İndeks siliniyor',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Arama uygulaması indeksi siliniyor. Bu işlem bir kaç dakika sürebilir.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL tam metin (fulltext) indekslemesi sadece MySQL4 ve üzeri ile kullanılabilir.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL tam metin (fulltext) indekslemesi sadece MyISAM veya InnoDB tablolar ile kullanılabilir. InnoDB tabloları tam metin indeksleme özellikleri için MySQL 5.6.4 veya üstü sürüm gerekmektedir.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Kayıt altına alınan mesajların toplam sayısı',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Latin olmayan UTF-8 karakterleri için mbstring kullanımı:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Latin olmayan UTF-8 karakterleri için PCRE kullanımı:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Eğer PRCE unicode karakter özelliklerine sahip değilse, arama uygulaması mbstring düzenli ifade motorunu kullanmayı deneyecektir.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Latin dışı karakterler için arama yapmak isterseniz, bu arama uygulaması sadece PHP 4.4, 5.1 ve üzeri sürümlerde bulunan PRCE unicode karakter özelliklerine ihtiyaç duyar.',
	
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Arama indeksinde kayıt altına alınacak en az karakter. Siz veya barındırıcınız bu ayarı sadece mysql ayarlarından değiştirebilir.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Arama indeksinde altına alınacak en fazla karakter. Siz veya barındırıcınız bu ayarı sadece mysql ayarlarından değiştirebilir.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Genel arama ayarları',
	'GO_TO_SEARCH_INDEX'					=> 'Arama anasayfasına git',

	'INDEX_STATS'							=> 'İndeks istatistikleri',
	'INDEXING_IN_PROGRESS'					=> 'Kayıtlar alınıyor',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Arama sayfası şu an panodaki bütün mesajları indeksliyor. Bu işlem panonuzun büyüklüğüne göre birkaç dakika ile birkaç saat boyunca sürebilir.',

	'LIMIT_SEARCH_LOAD'						=> 'Arama sayfası sistem yüklenme sınırı',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Eğer 1 dakikalık sistem yükü bu değeri aşarsa arama sayfası çevrimdışı olur. 1.0, bir işlemcinin ~100% kullanımına karşı gelir. Bu sadece UNIX tabanlı sunucularda işlevseldir.',

	'MAX_SEARCH_CHARS'						=> 'Arama indeksinde kayıt altına alınacak en fazla karakter',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Arama indeksinde altına alınacak karakterler bundan fazla olmayacak.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'İzin verilen en fazla anahtar kelime sayısı',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Bir kullanıcının arama yapabileceği en fazla kelime sayısı. 0 yazılırsa sınırsız sayıda kelime aranabilir.',

	'MIN_SEARCH_CHARS'						=> 'Aramada kayıt altına alınacak en az karakter',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Aramada kayıt altına alınacak karakterler bundan az olmayacak.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'En az yazar ismi karakter uzunluğu',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Kullanıcılar jokerli yazar araması yaparken en az bu sayı kadar harf girmek zorundalar. Yazar adı karakter sayısı burada girilen sayıdan daha az olsa bile, yazarın tam adını girerek iletilerini arayabilirsiniz.',

	'PROGRESS_BAR'							=> 'Durum çubuğu',
	
	'SEARCH_GUEST_INTERVAL'					=> 'Misafir kullanıcı arama zaman aralığı',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Misafirlerin aramalar arasında beklemesi gereken saniye sayısı. Eğer bir misafir arama yaparsa, tüm misafirler yeni arama yapmak için aramanın üzerinden bu sürenin geçmesini beklemeliler.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> '%1$d numaralı iletiye kadar olan tüm iletiler indekslendi. Bu aşamada %2$d ileti vardı.<br />Şu andaki indeksleme oranı saniye başına yaklaşık %3$.1f iletidir. <br />İndeksleme sürüyor…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> '%1$d numaralı iletiye kadar tüm iletiler arama indeksinden kaldırıldı. <br />Silme işlemi devam ediyor…',
	'SEARCH_INDEX_CREATED'					=> 'Pano veritabanındaki tüm mesajlar sorunsuzca indekslendi.',
	'SEARCH_INDEX_REMOVED'					=> 'Bu uygulama için arama indeksi sorunsuzca silindi.',
	'SEARCH_INTERVAL'						=> 'Kullanıcı arama zaman aralığı',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'İki arama arasında beklenecek saniye cinsinden süre. Bu süre her kullanıcı için bağımsız kontrol edilir.',
	'SEARCH_STORE_RESULTS'					=> 'Arama sonucu önbellek boyutu',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Önbelleğe alınmış arama sonuçlarının saniye cinsinden sona ereceği süre. Eğer arama önbelleğini kapatmak istiyorsanız 0 olarak ayarlayın.',
	'SEARCH_TYPE'							=> 'Arama uygulaması',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB ileti içeriğindeki yazıyı ararken kullanılacak sisteminizi kendinizin seçmesine olanak tanır. Varsayılan olarak phpBB’nin tam metin arama özelliği kullanılır.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Arama uygulamasını değiştirdiniz. Yeni arama uygulamasını kullanabilmek amacıyla uygulama için bir indeks seçtiğinize emin olmalısınız.',

	'TOTAL_WORDS'							=> 'Kayıt altına alınan kelimelerin toplam sayısı',
	'TOTAL_MATCHES'							=> 'İletilere bağlı olarak kayıt altına alınan kelimenin toplam sayısı',

	'YES_SEARCH'							=> 'Arama özelliğini aktif hale getirir.',
	'YES_SEARCH_EXPLAIN'					=> '"Kullanıcı arama" da dahil olmak üzere arama özelliğini aktif hale getirir.',
	'YES_SEARCH_UPDATE'						=> 'Tam metin güncellemesini aç',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Her ileti gönderildiğinde tam metin arama indeksi güncellenir. Eğer arama özelliği kapalıysa güncelleme yapılmaz.',
));

?>