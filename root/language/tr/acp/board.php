<?php defined('IN_PHPBB') || die('No direct access allowed.');
/**
 * @author Sevdin Filiz <angelside@users.sourceforge.net>
 *
 * @copyright (c) phpBB Limited		<http://phpbb.com>			[phpBB sistemi]
 * @copyright (c) Juy Software		<http://juysoft.com>		[Tercüme]
 *
 * @license GNU General Public License, version 2 (GPL-2.0)		http://opensource.org/licenses/gpl-2.0.php
 */

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Buradan mesaj panonuzun temel özelliklerini ayarlayabilirsiniz, pano ismini ve tanımlanmasını ve kayıt işlemini tamamladıktan sonra sistem zaman dilimi, kullanıcı lisanı gibi ayarlara ulaşılacaktır.',

	'CUSTOM_DATEFORMAT'				=> 'Özel…',
	'DEFAULT_DATE_FORMAT'			=> 'Tarih biçimi',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Tarih biçimi, PHP <code>date</code> fonksiyonu ile aynıdır.',
	'DEFAULT_LANGUAGE'				=> 'Varsayılan dil',
	'DEFAULT_STYLE'					=> 'Varsayılan biçim',
	'DISABLE_BOARD'					=> 'Panoyu kapat',
	'DISABLE_BOARD_EXPLAIN'			=> 'Bu seçenek, yönetici ve yetkili olmayan kullanıcılar için panoyu kapatır. İsterseniz gösterilmek üzere kısa bir mesaj (255 karakterlik) yazabilirsiniz.',
	'OVERRIDE_STYLE'				=> 'Kullanıcı stiline önem verme',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Kullanıcı stilini varsayılan biçim ile değiştir.',
	'SITE_DESC'						=> 'Pano açıklaması',
	'SITE_NAME'						=> 'Pano adı',
	'SYSTEM_DST'					=> 'Yaz saati/<abbr title="Gün ışığından yararlanma">DST</abbr> etkin',
	'SYSTEM_TIMEZONE'				=> 'Misafir zaman dilimi',
	'SYSTEM_TIMEZONE_EXPLAIN'		=> 'Oturum açmamış kullanıcılar (misafir, bot) için gösterilecek zaman dilimi. Oturum açan kullanıcılar kendi zaman dilimlerini kayıt sırasında veya kullanıcı panellerinden değiştirebilirler.',
	'WARNINGS_EXPIRE'				=> 'Uyarı süresi',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Uyarıların üye kaydından otomatik olarak silinmesinden önce geçmesi gereken gün sayısı. Değer olarak 0 yazmak uyarıyı kalıcı yapar.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Buradan bir çok pano özelliğini açıp/kapayabilirsiniz.',

	'ALLOW_ATTACHMENTS'			=> 'Eklentilere izin ver',
	'ALLOW_BIRTHDAYS'			=> 'Doğum günlerine izin ver',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Girilmiş olan doğum günlerini ve yaşı profillerde gösterir. Lütfen, giriş sayfasındaki doğum günü listesinin farklı yükleme ayarları tarafından kontrol edildiğini unutmayın.',
	'ALLOW_BOOKMARKS'			=> 'Konuları sık kullanılanlara eklemeye izin ver', 
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Kullanıcı kişisel sık kullanılanlarına kayıt yapabilsin.',
	'ALLOW_BBCODE'				=> 'Biçim kodlarına izin ver',
	'ALLOW_FORUM_NOTIFY'		=> 'Forum aboneliğine izin ver',
	'ALLOW_NAME_CHANGE'			=> 'Kullanıcı adı değişikliğine izin ver',
	'ALLOW_NO_CENSORS'			=> 'Kelime sansürünü kapatmaya izin ver',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Kullanıcılar özel mesajlarda ve iletilerde kelime sansürünü devredışı bırakmayı seçebilirler.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Özel mesajlarda eklentilere izin ver',
	'ALLOW_PM_REPORT'			=> 'Kullanıcıların özel mesaj rapor etmelerine izin ver',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Etkinleştirilmesi halinde kullanıcılar özel mesajları rapor etme veya pano yetkililerine yönlendirme seçeneğine sahip olur. Rapor edilen özel mesajlar böylece Yetkili Paneli’nde görünür olur.',
	'ALLOW_QUICK_REPLY'			=> 'Hızlı cevaba izin ver',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Bu ayar hızlı cevap özelliğinin pano genelinde açık veya kapalı olacağını belirler. Eğer açık olarak seçilirse, belirli forumlarda açık veya kapalı olması o forumun kendi ayarlarından seçilebilir.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Gönder ve tüm forumlar için hızlı cevap özelliğini aktif et',
	'ALLOW_SIG'					=> 'İmzalara izin ver',
	'ALLOW_SIG_BBCODE'			=> 'İmzada biçim kodlarına izin ver',
	'ALLOW_SIG_FLASH'			=> 'İmzada <code>[FLASH]</code> biçim koduna izin ver',
	'ALLOW_SIG_IMG'				=> 'İmzada <code>[IMG]</code> biçim koduna izin ver',
	'ALLOW_SIG_LINKS'			=> 'İmzada linklere izin ver',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> '<code>[URL]</code> biçim kodunu ve otomatik/hızlı URL çevirme özelliğini kapatır.',
	'ALLOW_SIG_SMILIES'			=> 'İmzada ifadelerin kullanımına izin ver',
	'ALLOW_SMILIES'				=> 'İfadelere izin ver',
	'ALLOW_TOPIC_NOTIFY'		=> 'Konu aboneliğine izin ver',
	'BOARD_PM'					=> 'Özel mesajlaşma',
	'BOARD_PM_EXPLAIN'			=> 'Özel mesaj sistemini tüm kullanıcılar için açar.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarlar, genellikle kullanıcıların kendileri ile özdeşleştirdikleri küçük resim dosyalarıdır. Avatarlar kullanıcı adlarının yanlarında görünür. Burada, kullanıcılarınızın avatarlarını nasıl seçebileceklerini tanımlayacaksınız. Lütfen unutmayın ki, avatarların yüklenebilmesi için aynı isimde bir dizininizin web sunucunuzda yer alması gerekmektedir. Ayrıca, hatırlatmakta fayda var ki; avatarların yüklenilmesi için verilen dosya büyüklük limitleri sadece sunucunuza yüklenen avatar resimlerine etki eder ve dışarıdan linklenebilen avatar resimlerini kapsamaz.',

	'ALLOW_AVATARS'					=> 'Avatarlara izin ver',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Avatarların genel kullanımına izin ver;<br />Avatar kullanımını genel olarak veya belirli bir avatar türü için kullanım dışı yaparsanız, kullanılamayan avatarlar bundan sonra panoda gösterilmeyecektir. Ancak, kullanıcılar kendi avatarlarını kullanıcı panelinden indirmeye devam edebilir.',
	
	'ALLOW_LOCAL'					=> 'Avatar galerisine izin ver',
	'ALLOW_REMOTE'					=> 'Uzak avatarlara izin ver',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarlar başka bir siteden link ile çağırılır.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Uzaktaki avatarların yüklenmesine izin ver',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Başka bir sitedeki avatarların yüklenmesine izin verir.',
	'ALLOW_UPLOAD'					=> 'Avatar yükleme açık',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galeri yolu',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'phpBB ana dizinine göre ön yüklemeli resimlerin yolu, örneğin: <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar depolama yolu',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Yol phpBB ana dizinine göredir, örneğin: <samp>images/avatars/upload</samp>.<br />Bu dizin yazılabilir değil ise avatar yükleme özelliği <strong>aktif olmayacaktır</strong>.',
	'MAX_AVATAR_SIZE'				=> 'En fazla avatar boyutları',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Piksel cinsinden genişlik x yükseklik.',
	'MAX_FILESIZE'					=> 'En fazla avatar dosya boyutu',
	'MAX_FILESIZE_EXPLAIN'			=> 'Yüklenen avatar dosyaları en fazla dosya boyutu. Eğer bu değer 0 olursa, dosya boyutu ancak PHP ayarlarıile sınırlandırılır.',
	'MIN_AVATAR_SIZE'				=> 'En az avatar boyutları',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Piksel cinsinden genişlik x yükseklik.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'Buradan özel mesajlaşma için tüm varsayılan ayarları değiştirebilirsiniz.',

	'ALLOW_BBCODE_PM'			=> 'Özel mesajlarda biçim kodlarına izin ver',
	'ALLOW_FLASH_PM'			=> '<code>[FLASH]</code> biçim koduna izin ver',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Özel mesajlarda flash kullanımı belirler, buradan açsanız bile bu izinlere bağlıdır.',
	'ALLOW_FORWARD_PM'			=> 'Özel mesaj yönlendirmesine izin ver',
	'ALLOW_IMG_PM'				=> '<code>[IMG]</code> biçim koduna izin ver',
	'ALLOW_MASS_PM'				=> 'Birden çok kullanıcıya ve gruplara özel mesaj gönderimine izin ver',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Gruplara mesaj gönderilmesi grup ayarları sayfasından grup temelli olarak ayarlanabilir.',
	'ALLOW_PRINT_PM'			=> 'Özel mesaj yazıcı görüntüsüne izin ver',
	'ALLOW_QUOTE_PM'			=> 'Özel mesaj içinde alıntılara izin ver',
	'ALLOW_SIG_PM'				=> 'Özel mesaj içinde imzalara izin ver',
	'ALLOW_SMILIES_PM'			=> 'Özel mesaj içinde ifadelere izin ver',
	'BOXES_LIMIT'				=> 'Kutu başına en fazla özel mesaj sayısı',
	'BOXES_LIMIT_EXPLAIN'		=> 'Kullanıcılar özel mesaj kutularında bu değerden fazla mesaj saklayamazlar. Bu özelliği kapatmak için 0 yazın.',
	'BOXES_MAX'					=> 'En fazla özel mesaj klasörü',
	'BOXES_MAX_EXPLAIN'			=> 'Kullanıcılar özel mesaj alanında belirttiğiniz miktarda klasör oluşturabilirler.',
	'ENABLE_PM_ICONS'			=> 'Özel mesajlarda konu ikonlarının kullanımına izin ver',
	'FULL_FOLDER_ACTION'		=> 'Dolu klasör için varsayılan işlem',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Eğer kullanıcı klasörü dolu ise kullanıcının klasör eylemi göz önünde bulundurularak yapılacak varsayılan eylem. Hepsini ayarlamanız kabul edilebilir bir eylem değildir. Varsayılan ayar her zaman eski mesajları silme yönünde olduğunda “gönderilen mesajlar” istisnadır.',
	'HOLD_NEW_MESSAGES'			=> 'Yeni mesajları tut',
	'PM_EDIT_TIME'				=> 'Değiştirme süresini kısıtla',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Henüz ulaşmamış olan özel mesajlarda değişiklik yapma süresini kısıtla. Değer olarak sıfır (0) girerseniz bu özellik kullanım dışı kalacaktır.',
	'PM_MAX_RECIPIENTS'			=> 'İzin verilen en fazla alıcı sayısı',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Bir özel mesajda izin verilen en fazla alıcı sayısı. Eğer 0 girilirse, sınırsız sayıda alıcı eklemeye izin verilir. Bu ayar her grup için grup ayarları sayfasında değiştirilebilir.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'		=> 'Buradan gönderim için tüm varsayılan ayarları değiştirebilirsiniz.',
	'ALLOW_POST_LINKS'				=> 'İleti/özel mesajlarda bağlantılara izin ver',
	'ALLOW_POST_LINKS_EXPLAIN'		=> 'Eğer <code>[URL]</code> biçim kodlarına izin verilmediyse ve otomatik/hızlı URL çevirme özelliği kapatıldıysa.',
	'ALLOW_POST_FLASH'				=> 'İletilerde <code>[FLASH]</code> biçim koduna izin ver',
	'ALLOW_POST_FLASH_EXPLAIN'		=> 'Eğer iletilerde <code>[FLASH]</code> biçim etiketini kapatırsanız, iletilerideki biçimler kapatılır. İzin sistemi kullanıcıların <code>[FLASH]</code> kullanış biçimlerini başka türlü kontrol eder.',
	'ENABLE_QUEUE_TRIGGER'			=> 'İletilerin kuyruğa alınmasını etkinleştir',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Kayıtlı kullanıcıların ileti sayısı aşağıda belirlenen değerden küçükse iletileri onaylamayarak gönderebilme yeteneği. Bu ayarın ileti/konu onaylama izini üzerinde bir etkisi yoktur.',
	'QUEUE_TRIGGER_POSTS'			=> 'Kuyruktaki iletiler için en fazla ileti sayısı',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'İletilerin kuyruğa alınması ayarı etkin iken, kullanıcının onaylanmadan ileti gönderebilmesi için ulaşması gerekli en az ileti sayısıdır. Eğer kullanıcı ileti sayısı bu değerden küçükse, ileti otomatik olarak onay kuyruğuna alınır.',
	'BUMP_INTERVAL'					=> 'Güncelleme aralığı',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Bir başlığa gönderilen son ileti ve bu başlığın değiştirilme yeteneği arasında kalan dakika, saat ya da gün sayısı. Bu özelliği kapatmak için, değer olarak 0 yazın.',
	'CHAR_LIMIT'					=> 'İleti başına en fazla karakter',
	'CHAR_LIMIT_EXPLAIN'			=> 'Bir iletide kullanılabilecek karakter sayısı. Karakter limitini kaldırmak için, değer olarak 0 yazın.',
	'DELETE_TIME'					=> 'Silme süresini sınırla',
	'DELETE_TIME_EXPLAIN'			=> 'Yeni bir iletinin silinme süresini sınırlar. Bu değerin 0 yapılması sınırlama olmamasını sağlar.',
	'DISPLAY_LAST_EDITED'			=> 'Son değiştirme tarih bilgisini göster',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Son değiştirilme zamanı seçilirse iletilerde bu bilgi gösterilecektir.',
	'EDIT_TIME'						=> 'Değiştirme süre sınırı',
	'EDIT_TIME_EXPLAIN'				=> 'Yeni iletileri değiştirme süresini kısıtlama. Değer olarak 0 yazarsanız bu özellik kullanım dışı kalacaktır.',
	'FLOOD_INTERVAL'				=> 'İleti gönderim sıklığı', // flood
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Yeni bir ileti göndermek için kullanıcının beklemesi gereken saniye miktarı. Bu özelliği aktif hale getirmek için izinleri değiştirin.',
	'HOT_THRESHOLD'					=> 'Popüler konu başlangıç',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Popüler başlıkların açılması için başlık başına düşen ileti sayısı. Popüler başlıkları devre dışı bırakmak için 0 yazın.',
	'MAX_POLL_OPTIONS'				=> 'İzin verilen en fazla anket seçeneği',
	'MAX_POST_FONT_SIZE'			=> 'İleti için en fazla yazı tipi büyüklüğü',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'İletide izin verilen en falza yazı tipi büyüklüğü. Sınır koymamak için 0 değerini yazın.',
	'MAX_POST_IMG_HEIGHT'			=> 'İletide izin verilen en fazla resim yüksekliği',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'İletideki resim/flash dosyaları için kullanılabilecek en yüksek değer. Sınır koymamak için 0 değerini yazın.',
	'MAX_POST_IMG_WIDTH'			=> 'İletilerde izin verilen en fazla resim genişliği',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'İletilerdeki resim/flash dosyaları için en fazla genişlik. Sınır koymamak için 0 değerini yazın.',
	'MAX_POST_URLS'					=> 'İletide izin verilen en fazla bağlantı',
	'MAX_POST_URLS_EXPLAIN'			=> 'Bir konuda izin verilen en fazla bağlantı sınırı. Bağlantı sınırı koymamak için 0 yazın.',
	'MIN_CHAR_LIMIT'				=> 'İleti/mesaj başına minimum karakter',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Kullanıcının bir ileti veya özel mesajda kullanması gerekli minimum karakter sayısı.',
	'POSTING'						=> 'Gönderim seçenekleri', // ileti seçenekleri için legend bu
	'POSTS_PER_PAGE'				=> 'Sayfa başına ileti',
	'QUOTE_DEPTH_LIMIT'				=> 'İç içe geçmiş en fazla alıntı sayısı',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Bir iletide iç içe geçmiş en fazla alıntı sayısıdır. Sınırsız olması için 0 olarak ayarlayın.',
	'SMILIES_LIMIT'					=> 'İletide izin verilen en fazla ifade',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Bir iletideki en fazla ifade sayısı. İfade sınırı koymamak için 0 yazın.',
	'SMILIES_PER_PAGE'				=> 'Sayfa başına ifade sayısı',
	'TOPICS_PER_PAGE'				=> 'Sayfa başına konu sayısı',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Buradan imzalar için tüm varsayılan ayarları değiştirebilirsiniz.',

	'MAX_SIG_FONT_SIZE'				=> 'En fazla font boyutu',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'İmzada kabul edilecek en fazla metin boyutu. Boyut sınırı koymamak için 0 değerini yazın.',
	'MAX_SIG_IMG_HEIGHT'			=> 'İmzada izin verilen en fazla resim yüksekliği',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'İmzadaki resim/flash dosyaları için kullanılabilecek en yüksek değer. Yükseklik sınırı koymamak için 0 değerini yazın.',
	'MAX_SIG_IMG_WIDTH'				=> 'İmzada izin verilen en fazla resim genişliği',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Kullanıcının imzasındaki resim/flash dosyalarının en fazla genişliği. Genişlik sınırı koymamak için 0 değerini yazın.',
	'MAX_SIG_LENGTH'				=> 'En fazla imza uzunluğu',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'İmzada izin verilen en fazla karakter sınırı.',
	'MAX_SIG_SMILIES'				=> 'İmzada izin verilen en fazla ifade sınırı',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'İmzada izin verilen en fazla ifade sınırı. İfade sınırı koymamak için 0 yazın.',
	'MAX_SIG_URLS'					=> 'İmzada izin verilen en fazla bağlantı',
	'MAX_SIG_URLS_EXPLAIN'			=> 'İmzada izin verilen en fazla bağlantı sınırı. Bağlantı sınırı koymamak için 0 yazın.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'Buradan profil ve kayıt olmakla ilgili bütün ayarları düzenleyebilirsiniz.',

	'ACC_ACTIVATION'				=> 'Hesap etkinleştirme',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Bu kullanıcının panoya hızlı giriş yapıp-yapamayacağını ya da onayın gerekli olup-olmadığına karar vermenizi sağlar. İsterseniz yeni kayıt alımını tamamen durdurabilirsiniz. Kullanıcı veya yönetici etkinleştirmesi için "Pano geneli e-posta" açık olmalıdır.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Yeni üye ileti limiti',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Yeni üyeler bu ileti sayısına ulaşana kadar <em>Yeni Kayıtlı Kullanıcılar</em> grubundadır. Bu grubu yeni üyelerin özel mesaj sistemini kullanamamaları sağlamak için veya iletilerini gözden geçirilmek için kullanabilirsiniz. <strong>0 değeri girilmesi bu özelliği kullanım dışı yapar.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Yeni Kayıtlı Kullanıcılar grubunu varsayılan yap',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Evet seçilmesi ve ileti limiti tanımlanması yeni kayıtlı üyeyi <em>Yeni Kayıtlı Kullanıcılar</em> grubuna üye yapmakla kalmaz, eklenilen grubu da varsayılan grup yapar. Varsayılan gruba bir seviye ve/veya avatar atanması halinde, yeni kayıtlı kullanıcı o seviye ve avatarı alacağı için, varsayılan grup seçimi kullanışlı bir özellik olabilir.',
	'ACC_ADMIN'						=> 'Yönetici',
	'ACC_DISABLE'					=> 'Kayıt olmak kapalı',
	'ACC_NONE'						=> 'Aktivasyon yok (anında erişim)',
	'ACC_USER'						=> 'Kullanıcı (e-posta aktivasyonu)',
//	'ACC_USER_ADMIN'				=> 'Kullanıcı + Yönetici',
	'ALLOW_EMAIL_REUSE'				=> 'E-posta adresinin tekrar kullanımı',
	'ALLOW_EMAIL_REUSE_EXPLAIN'		=> 'Farklı kullanıcılar aynı e-posta adresi ile kayıt olabilir.',
	'COPPA'							=> 'COPPA',
	'COPPA_FAX'						=> 'COPPA faks numarası',
	'COPPA_MAIL'					=> 'COPPA e-posta adresi',
	'COPPA_MAIL_EXPLAIN'			=> 'Burası ailelerin COPPA kayıt formlarını size iletecekleri e-posta adresidir.',
	'ENABLE_COPPA'					=> 'COPPA’ya izin ver',
	'ENABLE_COPPA_EXPLAIN'			=> 'Bu 13 yaşında olup olmadığınızı ya da U.S. COPPA anlaşmasına katılımınızın olup/olmadığını bildirmenizi gerektirebilir. Eğer devre dışı bırakırsanız COPPA’ya özel gruplar artık engellenmeyecektir.',
	'MAX_CHARS'						=> 'En fazla',
	'MIN_CHARS'						=> 'En az',
	'NO_AUTH_PLUGIN'				=> 'Uygun yetki eklentisi bulunamadı.',
	'PASSWORD_LENGTH'				=> 'Parola uzunluğu',
	'PASSWORD_LENGTH_EXPLAIN'		=> 'Paroladaki en az ve en çok karakter uzunluğu.',
	'REG_LIMIT'						=> 'Kayıt denemeleri',
	'REG_LIMIT_EXPLAIN'				=> 'Kullanıcının oturumun kilitlenmesinden önce doğrulama kodunu girebileceği deneme sayısı.',
	'USERNAME_ALPHA_ONLY'			=> 'Sadece harfler',
	'USERNAME_ALPHA_SPACERS'		=> 'Harfler ve boşluklar',
	'USERNAME_ASCII'				=> 'ASCII (uluslararası unicode kullanılmasın)',
	'USERNAME_LETTER_NUM'			=> 'Herhangi harf ve sayı',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Herhangi harf, sayı ve boşluk',
	'USERNAME_CHARS'				=> 'Kullanıcı adı karakter sayısını kısıtla',
	'USERNAME_CHARS_ANY'			=> 'Herhangi karakter',
	'USERNAME_CHARS_EXPLAIN'		=> 'Kullanıcı adı belirlenirken sınırlı tipte özel karakter girebilir bunlar, boşluk, -, +, _, [ ve ]’dir.',
	'USERNAME_LENGTH'				=> 'Kullanıcı adı uzunluğu',
	'USERNAME_LENGTH_EXPLAIN'		=> 'En az ve en çok kullanıcı adı karakter uzunluğu.',
));

// Feed settings
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Genel besleme ayarları',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Bu modül biçim kodlarının temizlenerek okunabilir çeşitli ATOM beslemelerin sunulmasını sağlar.',

	'ACP_FEED_GENERAL'					=> 'Genel besleme ayarları',
	'ACP_FEED_POST_BASED'				=> 'İleti tabanlı besleme ayarları',
	'ACP_FEED_TOPIC_BASED'				=> 'Konu tabanlı besleme ayarları',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Diğer ayarlar', // Other feeds and settings

	'ACP_FEED_ENABLE'					=> 'Beslemeleri etkinleştir',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Pano üzerindeki tüm ATOM beslemeleri açar veya kapatır.<br />Aşağıda hangi ayarlar olursa olsun, bu ayarın kapatılması tüm beslemelerin durmasına sebep olur.',
	'ACP_FEED_LIMIT'					=> 'Haber sayısı',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Gösterilecek maksimum besleme haberi sayısı.',

	'ACP_FEED_OVERALL'					=> 'Beslemeleri pano genelinde etkinleştir',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Pano genelinde yeni iletiler.',
	'ACP_FEED_FORUM'					=> 'Forum başına beslemeleri etkinleştir',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Tek forum yeni iletiler.',
	'ACP_FEED_TOPIC'					=> 'Konu başına beslemeler',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Tek konu yeni iletiler.',

	'ACP_FEED_TOPICS_NEW'				=> 'Yeni konular beslemesini etkinleştir',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> '"Yeni Konular" beslemesini etkinleştirir, ilk ileti dahil olmak üzere son açılan konuları gösterir.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Aktif konular beslemesini etkinleştir',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> '"Aktif Konular" beslemesini etkinleştirir, ilk ileti dahil olmak üzere son aktif konuları gösterir.',
	'ACP_FEED_NEWS'						=> 'Haber beslemeleri',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Bu forumlardan ilk iletileri çek. Haber beslemesini kapatmak isterseniz hiçbir forumu seçmeyin. <br /><samp>CTRL</samp> basılı tutup tıklayarak birden fazla forum seçebilirsiniz.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Forumlarda beslemeleri etkinleştir',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Bu besleme tüm forumlardaki konulardan son iletileri gösterir.',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP Yetkilendirilmesine izin ver',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'HTTP Yetkilendirilmesine izin verir, gizli misafir kullanıcılar besleme URL adresine <samp>auth=http</samp> paremetresini ekleyerek içeriği alabilirler. Bazı PHP kurulumları ek .htaccess değişiklikleri gerektirebilir. Talimatlar dosyada bulunmaktadır',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Haber istatistikleri',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Besleme haberleri altında ayrı ayrı istatistikler göster<br />(Örneğin: gönderen, tarih ve saat, cevaplar, gösterim)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Bu forumları hariç tut',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Bu forumlardaki içerik <strong>beslemelerde gösterilmeyecektir</strong>. Tüm forumlardan haber çekilmesi için hiçbir forumu seçmeyin.<br /><samp>CTRL</samp> tuşunu basılı tutup tıklayarak birden fazla forum seçebilir veya seçti iseniz çıkarabilirsiniz.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'	=> 'Buradan istem dışı iletileri engellemek üzere kullanacağınız eklentiyi seçip yapılandırabilirsiniz. Bu eklentiler genellikle bir görsel doğrulma kodu <em>CAPTCHA</em> ile kullanıcıları zorlarlar. Bunları bir otomatik ileti gönderi yazılımının çözmesi zordur.',

	'AVAILABLE_CAPTCHAS'					=> 'Mevcut eklentiler',
	'CAPTCHA_UNAVAILABLE'					=> 'Gereksinimleri yerine getirilmediği için bu eklenti seçilemez.',
	'CAPTCHA_GD'							=> 'GD resmi',
	'CAPTCHA_GD_3D'							=> 'GD 3D resmi',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Arkaplan gürültüsü',
	'CAPTCHA_GD_EXPLAIN'					=> 'Daha gelişmiş bir istek dışı ileti engelleyici yapmak için GD kullanın.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Resim okunmasını zorlaştırmak için arkaplan gürültüsü kullanın.',
	'CAPTCHA_GD_X_GRID'						=> 'Arkaplan gürültüsü x-ekseni',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Güçlendirmek için bu ayarları düşük seviyede kullanın. 0 x-eksenli arkaplan uygulamasını kısık hale getirecektir.',
	'CAPTCHA_GD_Y_GRID'						=> 'Arkaplan gürültüsü y-ekseni',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Güçlendirmek için bu ayarları düşük seviyede kullanın. 0 y-eksenli arkaplan uygulaması kısık hale getirecektir.',
	'CAPTCHA_GD_WAVE'						=> 'Dalga bozulması',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Resim için uygulanan bir dalga bozulmasıdır.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D-gürültü nesneleri ekle',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Bu harfler resim üzerine ilave nesneler ekler.',
	'CAPTCHA_GD_FONTS'						=> 'Farklı yazı tipi kullan',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Bu ayar kaç tane farklı harf şekli kullanılacağını kontrol eder. Varsayılan şekiller kullanabilir veya değiştirilmiş harfler gösterebilirsiniz. Küçük harf eklemek de mümkündür.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Varsayılan',
	'CAPTCHA_FONT_NEW'						=> 'Yeni şekiller',
	'CAPTCHA_FONT_LOWER'					=> 'Küçük harf de kullan',
	'CAPTCHA_NO_GD'							=> 'Basit resim',
	'CAPTCHA_PREVIEW_MSG'					=> 'Değişiklikler kaydedilmedi. Bu sadece bir önizlemedir.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Mavcut ayarları kullanıyor gibi görünüyor. Sayfayı yenilemek için önizleme butonunu tıklayın. Resimlerin rastgele olduğunu ve bir görüntünün diğerinden farklı olacağını unutmayın.',

	'CAPTCHA_SELECT'						=> 'Kurulu eklentiler',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Açılan menüde pano tarafından tanınan eklentiler bulunur. Gri renkte olan ifadeler şu anda mevcut olmayan ve kullanılmadan önce yapılandırılması gereken eklentilerdir.',
	'CAPTCHA_CONFIGURE'						=> 'Eklentileri yapılandır',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Seçilen eklentinin ayarlarını değiştirir.',
	'CONFIGURE'								=> 'Yapılandır',
	'CAPTCHA_NO_OPTIONS'					=> 'Bu eklenti yapılandırma seçenekleri içermiyor.',
	
	'VISUAL_CONFIRM_POST'					=> 'İstek dışı ileti engelleyiciyi misafirler için aktif hale getir',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Yığın halinde ileti gönderilimesini engellemek için misafirlere istek dışı ileti engelleyici işlemler uygular.',
	'VISUAL_CONFIRM_REG'					=> 'Kayıtlar için istek dışı ileti engelleyiciyi aktif hale getir',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Yeni üyelerin yığın halinde kayıt olmalarını engellemek için istek dışı kayıt engelleyici işlemler uygular.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Kullanıcılar istek dışı kayıt engelleyici işlemini yenileyebilsin',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Kullanıcılar, eğer istek dışı kayıt engelleyici işlemini çözemezse, yeni işlem talep etmelerine izin ver. Bazı eklentiler bunu desteklemeyebilir',   
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'Bu detaylar tarayıcınıza çerez gönderilirken kullanılan bilgileri tanımlar. Genelde varsayılan çerez ayarları yeterli olacaktır. Eğer bu ayarlardan birini değiştirmeniz gerekiyorsa dikkatli olun çünkü; yanlış yapmanız kullanıcılarınızın girişlerini engelleyebilir.',
	'COOKIE_DOMAIN'					=> 'Çerez alan adı',
	'COOKIE_NAME'					=> 'Çerez adı',
	'COOKIE_PATH'					=> 'Çerez yolu',
	'COOKIE_SECURE'					=> 'Çerez güvenliği',
	'COOKIE_SECURE_EXPLAIN'			=> 'Eğer sunucunuz SSL ile çalışıyor ise bu ayarı açınız, aksi halde kapalı bırakınız. Bunu aktif hale getirmeniz ve SSL üzerinde çalışmaması durumunda yönlendirme esnasında birçok hata alabilirisniz.',
	'ONLINE_LENGTH'					=> 'Çevirimiçi geçen süreye bak',
	'ONLINE_LENGTH_EXPLAIN'			=> 'Aktif olmayan kullanıcının “Kimler çevirimiçi” listesinde görünme süresini kısıtlayan dakika miktarı. Bu değerin yüksek olması listenin oluşturulması için daha fazla işlem gerektirecektir.',
	'SESSION_LENGTH'				=> 'Oturum uzunluğu',
	'SESSION_LENGTH_EXPLAIN'		=> 'Oturumlar saniye cinsinden olan bu süre bitiminde sonlanacaktır.'
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN' 	=> 'Buradaki panel aracılığı ile panonuzun belirli özelliklerini açık veya kapalı konumuna alarak kullanılan sistem kaynakları üzerindeki yükü düşürebilirsiniz. Genellikle hemen hemen hiçbir sunucuda bu özellikleri kapatmak durumunda kalmazsınız. Bunun yanısıra normal sistemlerde veya paylaşımlı barındırma ortamında yine de ihtiyaç duymadığınız özellikleri kapatmak size yarar sağlayabilir. Aynı zamanda buradan, sistem yükü için limiteri belirleyebilirsiniz.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Özel profil bilgi alanı',
	'LIMIT_LOAD'					=> 'Sistem yüklenmelerini sınırla',
	'LIMIT_LOAD_EXPLAIN'			=> 'Eğer sistem, 1 dakika yükleme sınırını geçerse bu değer panoyu çevrimdışı duruma getirecektir, 1.0 değeri 1 işlemci için ~100% faydalanma anlamındadır. Bu özellik sadece UNIX tabanlı sunucularda ve bu bilgiye erişebilen yerlerde geçerlidir. Eğer phpBB yükleme limitine ulaşamazsa buradaki değer kendini resetleyerek 0 olacaktır.',
	'LIMIT_SESSIONS'				=> 'Oturum limitleri',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Oturumların sayısı burada belirtilen değeri aşarsa, pano çevrimdışı konuma geçer. Oturum sınırı koymak istemiyorsanız 0 yazın.',
	'LOAD_CPF_MEMBERLIST'			=> 'Üye listesinde özel profil alanları göster',
	'LOAD_CPF_VIEWPROFILE'			=> 'Profillerde özel profil alanlarını göster',
	'LOAD_CPF_VIEWTOPIC'			=> 'Konularda özel profil alanlarını göster',
	'LOAD_USER_ACTIVITY'			=> 'Kullanıcı aktivitelerini göster',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Aktif konu/forum kısımlarında kullanıcı panelini ve kullanıcı profillerini göster. Eğer 1 milyon iletiye sahip bir foruma sahip iseniz, bu özelliği kapamanızı tavsiye ederiz.',
	'RECOMPILE_STYLES'				=> 'Eskimiş biçim bileşenlerini tekrar derle',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Dosya sistemindeki güncellenmiş biçim bileşenlerini kontrol et ve tekrar derle.',
	'YES_ANON_READ_MARKING'			=> 'Misafirler için konu işaretlemeye izin ver',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Misafirler için okundu/okunmadı durum bilgilerini depolar. Eğer kapatılırsa, misafirler iletileri daima okunmuş görecektir.',
	'YES_BIRTHDAYS'					=> 'Doğum günü listesine izin ver',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Doğum günlerinin liste halinde sıralanmasını istiyorsanız bu özelliği açmanız gerekir. Eğer kapatırsanız doğum günü listesinde görüntülenmezler.',
	'YES_JUMPBOX'					=> 'Forum seçim kutusunu göster',
	'YES_MODERATORS'				=> 'Yetkililerin görüntülenmesine izin ver',
	'YES_ONLINE'					=> 'Çevrimiçi kullanıcıların listelenmesine izin ver',
	'YES_ONLINE_EXPLAIN'			=> 'Çevrimiçi kullanıcı bilgilerini anasayfada, forum ve konu sayfalarında göster.',
	'YES_ONLINE_GUESTS'				=> 'Çevrimiçi misafirlerin kimler çevrimiçi bölümünde listelenmesine izin ver',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Çevrimiçi misafirlerin kimler çevrimiçi bölümünde gösterilmesine izin verir.',
	'YES_ONLINE_TRACK'				=> 'Kullanıcı çevrimiçi/çevrimdışı bilgisini göster',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Kullanıcıların çevirimiçi bilgilerini kullanıcı hesap bilgilerinde ve ileti gösterim ekranında göster.', 
	'YES_POST_MARKING'				=> 'Noktalı başlıkları aktif hale getir.',
	'YES_POST_MARKING_EXPLAIN'		=> 'Kullanıcının bir konuya ileti yazıp yazmadığını göster.',
	'YES_READ_MARKING'				=> 'Sunucu taraflı konu işaretlemeye izin ver',
	'YES_READ_MARKING_EXPLAIN'		=> 'Okundu/okunmadı durum bilgilerini çerez yerine veritabanında depolar.',
	'YES_UNREAD_SEARCH'				=> 'Okunmamış iletilerde arama yapmaya izin ver',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN' => 'phpBB, yetkilendirme eklentilerini, modüllerini desteklemektedir. Bunlar kullanıcılarınızın panoya oturum açarken nasıl tanımlanacağına karar vermenize yardımcı olur. Standart olarak 3 eklenti sağlanmaktadır. Bu eklentiler; DB, LDAP, Apache eklentileridir. Her metod ayrıca bilgi verilmesine ihtiyaç duymaz, öyle ise ilgili boşlukları seçilmiş metod ile uyumlu ise doldurun.',

	'AUTH_METHOD'				=> 'Bir yetkilendirme metodu seçiniz',

	'APACHE_SETUP_BEFORE_USE' 	=> 'phpBB sisteminizde, bu doğrulama yöntemine geçmeden önce, apache doğrulama metodunu kurmanız gerekir. Bu işlemden önce phpBB için kullandığınız kullanıcı adının aynı zamanda apache doğrulaması için de kullanılacak kullanıcı adınızla aynı olması gerektiğini unutmayın. Apache doğrulaması sadece mod_php ile beraber kullanılır (bir CGI sürümü ile değil) ve safe_mode kapatılmalıdır.',
	
	'LDAP_DN'						=> 'LDAP tabanı <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Bu ayrılmış isim, kullanıcı bilgisi konumudur, örn: <samp>o=Şirketim,c=TR</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-posta niteliği',
	'LDAP_EMAIL_EXPLAIN'			=> 'Kullanıcıların otomatik giriş e-posta adres niteliklerini belirler (eğer bir tane varsa) örn: posta@posta.com. Yeni kullanıcılar için bu alanı boş bırakabilirsiniz.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Belirtilen kullanıcı/parola ile LDAP sunucusuna bağlanma başarısız oldu.',
	'LDAP_NO_EMAIL'					=> 'Belirtilen e-posta niteliği bulunmuyor.',
	'LDAP_NO_IDENTITY'				=> '%s için bir giriş kimliği bulunamadı.',
	'LDAP_PASSWORD'					=> 'LDAP parolası',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Anonim erişim kullanmak için boş bırakınız. Aksi takdirde yukarıdaki kullanıcılar için parolayı doldurun. <strong>UYARI:</strong> Bu parola düz metin olarak veritabanında saklanacak ve veritabanınıza girebilen herkes tarafından görüntülenebilecektir.',
	'LDAP_PORT'						=> 'LDAP sunucu portu',
	'LDAP_PORT_EXPLAIN'				=> 'Belirliyebileceğiniz bir port kullanabilirsiniz. Mevcut port "389" LDAP sunucusuna bağlanır.',
	'LDAP_SERVER'					=> 'LDAP sunucu adı',
	'LDAP_SERVER_EXPLAIN'			=> 'Eğer LDAP kullanıyorsanız, sunucu adı veya IP adresi.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Bu verilen kullanıcı giriş kimliğinde arama altında kullanılan anahtardır. Örn. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP kullanıcısı <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Anonim erişim kullanıyorsanız boş bırakın. Eğer phpBB kayıtlarında belirtiliyor ise, kullanıcı girişinde belirtilen isim doğru kullanıcıyı bulmayı dener. örn: <samp>uid=KullanıcıAdı,ou=Birimim,o=Şirketim,c=TR</samp>. Aktif sunucu dizinleri için gereklidir.',
	'LDAP_USER_FILTER'				=> 'LDAP kullanıcı filtresi',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'İsteğe bağlı olarak ta, belirliyebileceğiniz özel filtrelerle aranan kelimeleri sınırlayabilirsiniz. Örneğin: <samp>=posixGroup</samp>, bu şekilde sonuçlanacaktır <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN' => 'Buradan sunucu ve alan adı ayarlarını belirleyebilirsiniz. Lütfen girdiğiniz bilginin doğruluğundan emin olun, hatalar e-postaların yanlış bilgi içermesine sebebiyet verir. Bir alan adı girerken her zaman http:// veya diğer protokolleri içerdiğine emin olun. Port numarasını sadece sunucunuz başka bir port numarasını kullanıyorsa verin, port 80, genellikle standart ve doğru olan port numarasıdır.',

	'ENABLE_GZIP'				=> 'GZip sıkıştırmaya izin ver',
	'ENABLE_GZIP_EXPLAIN'		=> 'Oluşturulan içerik kullanıcıya gönderilmeden önce sıkıştırılacaktır. Bu trafik oranını düşürür ancak sunucu ve tarayıcı üzerindeki CPU kullanımını arttırır. PHP zlib eklentisinin kurulu olmasını gerektirir.',
	'FORCE_SERVER_VARS'			=> 'Sunucu URL ayarlarını zorunlu hale getir',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Evet olarak seçerseniz sunucu ayarları bu kısımdaki, otomatik olarak belirlenmiş değerleri kullanılacaktır.',
	'ICONS_PATH'				=> 'İleti ikonları depo yolu',
	'ICONS_PATH_EXPLAIN'		=> 'phpBB ana dizini altındaki yol, örn. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Yol ayarları',
	'RANKS_PATH'				=> 'Seviye resimleri depo yolu',
	'RANKS_PATH_EXPLAIN'		=> 'phpBB ana dizini altındaki yol, örn. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Yazılım yolu',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB’nin alan adı altındaki göreceli yolu, örn. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Alan adı',
	'SERVER_NAME_EXPLAIN'		=> 'Bu panonun çalıştığı alan adı (örn: <samp>phpbbturkiye.net</samp>).',
	'SERVER_PORT'				=> 'Sunucu portu',
	'SERVER_PORT_EXPLAIN'		=> 'Sunucunun çalıştığı port, genellikle 80, eğer sadece farklı ise değiştiriniz.',
	'SERVER_PROTOCOL'			=> 'Sunucu protokolü',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Zorunlu olarak belirlenirse sunucu protokolü olarak kullanılır. Eğer boş bırakırsanız çerezler güvenlik ayarları tarafından belirlenir (<samp>http://</samp> veya <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Sunucu URL ayarları',
	'SMILIES_PATH'				=> 'İfade depolama yolu',
	'SMILIES_PATH_EXPLAIN'		=> 'phpBB ana dizini altındaki yol, örn. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Uzantı grubu ikonları depo yolu',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'phpBB ana dizini altındaki yol, örn. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Buradan oturum ve oturum açma ile ilgili ayarları tanımlayabilirsiniz.',

	'ALL'							=> 'Tümü',
	'ALLOW_AUTOLOGIN'				=> 'Sürekli girişlere izin ver', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Kullanıcı panoyu ziyaret ettiğinde otomatik olarak girişin yapılabilmesini sağlar.', 
	'AUTOLOGIN_LENGTH'				=> 'Giriş anahtarının son günü',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Belirlediğiniz günde giriş anahtarı kaldırılır. Kapatmak için 0 yazınız.', 
	'BROWSER_VALID'					=> 'Web tarayıcı doğrulama',
	'BROWSER_VALID_EXPLAIN'			=> 'Tarayıcı doğrulamayı aktif hale getirmeniz oturum güveliğini arttıracaktır.',
	'CHECK_DNSBL'					=> 'DNS kara listesinde IP kontrolü',
	'CHECK_DNSBL_EXPLAIN'			=> 'Eğer aktif ise, kullanıcıların iletileri ve kayıtları sırasında DNSBL servislerini izleyerek buna karşı IP adresi kontrol edilir: <a href="http://spamcop.net">spamcop.net</a> ve <a href="http://spamhaus.org">spamhaus.org</a>. Bu arama hemen de olabilir, sunucunuzun yapılandırılmasına bağlı olarak zaman da alabilir. Eğer yavaşlama olursa veya çok fazla kesin yanlış bilgi varsa bu özelliği kapatmanız önerilir.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Geçerli MX kaydı için alan adını kontrol et', 
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Eğer aktif ise, e-posta alan adı sağlayıcısı kayıt ve profil değişikliklerinde geçerli bir MX kaydı için alan adı kontrol edilir.',
	'FORCE_PASS_CHANGE'				=> 'Zorunlu şifre değişimi',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Kullanıcıların şifrelerini değiştirmesi için geçecek gün sayısı. Bu özelliği kapatmak için 0 yazın.',
	'FORM_TIME_MAX'					=> 'Formların gönderilmesi için en fazla zaman',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Bu süre içinde kullanıcı formu göndermek zorunda. Kapatmak için -1 yazın. Oturum sonlanırsa, bu ayara aldırmayarak form geçersiz olabilir.',	
	'FORM_SID_GUESTS'				=> 'Bu bağ misafir oturumlarına oluşturulur',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Eğer aktif hale getirilirse, misafir kullanıcılar için oturum-özel olacak. Bazı servis sağlayıcılarda bununla ilgili sorun çıkabilir.',
	'FORWARDED_FOR_VALID'			=> '<var>X_FORWARDED_FOR</var> başlıklarını kontrol et',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Oturumlar sadece gönderilen <var>X_FORWARDED_FOR</var> başlık daha önceki bir talepte gönderilene denk ise devam edecektir. Uzaklaştırmalar <var>X_FORWARDED_FOR</var> içinde olan IP adreslerine karşı da kontrol edilecektir.',
	'IP_VALID'						=> 'Oturum IP onaylama',
	'IP_VALID_EXPLAIN'				=> 'Bir oturumda ne kadar kullanıcı IP adresinin onaylanması gerektiğini belirlemek için kullanılır; <samp>Hepsi</samp> kıyaslanan adresler, <samp>A.B.C</samp> ilk olarak x.x.x, <samp>A.B</samp> ilk olarak x.x, <samp>Yok</samp> kontrolü iptal eder. IPv6 adreslerinde <samp>A.B.C</samp> ilk 4 blok ile karşılaştırılır ve <samp>A.B</samp> ilk 3 blok ile.',
	'IP_LOGIN_LIMIT_MAX'			=> 'IP adresi başına en fazla oturum açma teşebbüsü sayısı',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Görsel doğrulama kodu devreye girmeden önce tek IP adresinden izin verilen yanlış oturum açma teşebbüs sayısıdır. Görsel doğrulama kodunun devreye girmesini önlemek için 0 yazın.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP adresi oturum açma teşebbüsü sona erme zamanı',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Oturum açma teşebbüsleri burada belirtilen zaman sonunda sıfırlanır.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> '<var>X_FORWARDED_FOR</var> başlığı ile oturum açma teşebbüslerini sınırlama',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'IP adresleri oturum açma teşebbüs limitleri <var>X_FORWARDED_FOR</var> başlığna göre sınırlandırılır. <br /><em><strong>Uyarı:</strong> Bu ayarı sadece vekil sunucu güvenilir <var>X_FORWARDED_FOR</var> değeri sağılıyorsa kullanın.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Kullanıcı adı başına en fazla oturum açma teşebbüsü',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Görsel doğrulama uygulaması tetiklenmeden önce tek bir hesap için izin verilen oturum açma teşebbüs sayısıdır. Görsel doğrulama uygulamasının tetiklenmemesi için 0 yazın.',
	'NO_IP_VALIDATION'				=> 'Yok',
	'NO_REF_VALIDATION'				=> 'Yok',
	'PASSWORD_TYPE'					=> 'Parola karmaşıklığı',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Bir parolanın ne kadar karmaşık yapısı olabileceği belirlenir. Sonraki özellikler öncekileri kapsar',
	'PASS_TYPE_ALPHA'				=> 'Harfler ve rakamlar içermelidir',
	'PASS_TYPE_ANY'					=> 'Gerek yok',
	'PASS_TYPE_CASE'				=> 'Karışık olmalı',
	'PASS_TYPE_SYMBOL'				=> 'Semboller içermelidir',
	'REF_HOST'						=> 'Sadece sunucuyu doğrula',
	'REF_PATH'						=> 'Yolu da doğrula',
	'REFERER_VALID'					=> 'Göndereni (referrer) doğrula',
	'REFERER_VALID_EXPLAIN'			=> 'Etkinleştirilmişse, POST talebini gönderen (referrer), sunucu/betik yol ayarları için kontrol edilecektir. Birden fazla alan adı veya harici oturum açma sistemi kullanan panolar için bu ayar sorunlara yol açabilir.',
	'TPL_ALLOW_PHP'					=> 'Şablonlarda php’ye izin ver',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Bu özellik açılırsa, <code>PHP</code> ve <code>INCLUDEPHP</code> ifadeleri tekrar organize edilecek ve temaların içinde işlenecektir.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN' 	=> 'Bu bilgi, kullanıcılarınıza pano tarafından e-posta gönderimi yapıldığı zaman kullanılır. Lütfen girdiğiniz e-posta adreslerinin doğruluğundan ve geçerliliğinden emin olun. Eğer servis sağlayıcınızın hostu PHP tabanlı e-posta gönderimine izin vermiyor ise SMTP ile de bu işlemi gerçekleştirebileceğinizi unutmayın. Bu özellik uygun bir sunucu adresi gerektirir (servis sağlayıcınızdan öğrenebilirsiniz). Eğer sunucu yetkilendirme gerektiriyor ise gerekli olan kullanıcı, parola ve yetkilendirme yöntemini girin.',
	
	'ADMIN_EMAIL'					=> 'Geri dönüş e-posta adresi',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Bu, bütün e-postalarda geri dönüşü için ve teknik temas e-posta adresi gibi kullanılacak. E-posta adresleri <samp>geri dönüş yolu</samp> ve <samp>gönderen</samp> olarak kullanılır.',
	'BOARD_EMAIL_FORM'				=> 'Kullanıcılar pano aracılığı ile e-posta gönderebilsin',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Kullanıcılar e-posta adreslerinin görüntülenmeden pano aralıcılığı ile e-posta gönderebilirler.',
	'BOARD_HIDE_EMAILS'				=> 'E-posta adresini gizle',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Bu fonksiyon e-posta adreslerini tamamen gizler.',
	'CONTACT_EMAIL'					=> 'İletişim e-posta adresi',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Bu e-posta adresi spam, hata çıktı sayfaları gibi bazı özel durumlarda iletişim olarak ve e-posta yollanırken kullanılacak olan yol <samp>kimden</samp> ve <samp>kime</samp> adresleri için kullanılacaktır.',
	'EMAIL_FUNCTION_NAME'			=> 'E-posta fonksiyon adı',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'PHP yoluyla gönderilecek e-postaların kullanacağı fonksiyon.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-posta paket boyutu',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Bir paketin içinde gönderilebilecek en fazla e-posta sayısını belirler. Bu ayar dahili mesaj sırasına uygulanır.',
	'EMAIL_SIG'						=> 'E-posta imzası',
	'EMAIL_SIG_EXPLAIN'				=> 'Bu metin, pano tarafından gönderilecek tüm e-postalara eklenecektir.',
	'ENABLE_EMAIL'					=> 'Pano genelinde e-posta’lara izin ver',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Bu özellik kapatılırsa pano kullanılarak hiçbir e-posta gönderilemez. <em>Kullanıcı ve yönetici aktivasyon ayarları bu özelliğin etkin olmasını gerektirebilir. Eğer panoda aktivasyon ayarlarında “kullanıcı” veya “yönetici” aktivasyon seçili ise, bu özelliğin kullanım dışı olması yeni kayıtlarda aktivasyon gerekmeyeceği anlamına gelir.</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP için yetkilendirme metodu',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Sadece kullanıcı adı/parola ile kullanılır, eğer bu yöntemin nasıl kullanılacağından şüpheliyseniz sunucunuz ile irtibata geçin.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP parolası',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Sadece SMTP sunucunuz bir parola gerektiriyorsa yazınız. <em><strong>Uyarı:</strong> Bu parola veritabanında düz metin olarak saklanacak ve veritabanına veya bu ayar sayfasına erişimi olan herkes tarafından görülebilecektir.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP', 
	'SMTP_PORT'						=> 'SMTP sunucu portu',
	'SMTP_PORT_EXPLAIN'				=> 'Sadece SMTP’nün farklı bir port üzerinden çalıştığını biliyorsanız değiştirin.',
	'SMTP_SERVER'					=> 'SMTP sunucu adresi',
	'SMTP_SETTINGS'					=> 'SMTP ayarları',
	'SMTP_USERNAME'					=> 'SMTP kullanıcı adı',
	'SMTP_USERNAME_EXPLAIN'			=> 'Sadece SMTP sunucunuz için kullanıcı adı gerekli ise giriniz.',
	'USE_SMTP'						=> 'E-posta için SMTP kullan',
	'USE_SMTP_EXPLAIN'              => 'Eğer “Evet” olarak seçerseniz yerel posta fonksiyonu yerine, bir isim verilmiş veya belirlenmiş sunucu yoluyla e-posta yollamak zorunda kalırsınız.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Buradan Jabber kontrolü ve anında mesajlaşma kullanımını sağlayabilirsiniz. Jabber bir açık kaynak protokolüdür ve oturum açan herhangi bir kullancı tarafından kullanılabilir. Bazı Jabber sunucuları diğer şebekelerde kullanıcılarla temas kurmanız için size izin veren portları veya ulaşımları kapsar. Bütün sunucular protokollerde bütün ulaşımlar ve değişikliklerin izinsiz ulaşımlarını engelleyebildiğini garanti etmez. Lütfen hesap detaylarınızın doğruluğundan emin olun — phpBB, sizin buraya girdiğiniz hesap bilgilerini kullanarak oturum açacaktır.',

	'JAB_ENABLE'				=> 'Jabber’e izin ver',
	'JAB_ENABLE_EXPLAIN'		=> 'Mesajlaşma ve uyarılarda Jabber özelliğini açar.',
	'JAB_GTALK_NOTE'			=> 'GTalk, <samp>dns_get_record</samp> fonksiyonunun bulunamaması durumunda çalışmaz. Bu fonksiyon PHP4’te bulunmaz ve Windows platformunda kullanılanamaz. Şu anda bu fonksiyon Mac OS’u da kapsayan BSD tabanlı sistemlerde çalışmamaktadır.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber paket boyutu',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Bu bir pakette yollanan mesajların sayısıdır. Eğer 0 olarak belirlerseniz mesaj hemen yollanır ve daha geç yollama için sırada bekletilmez.',
	'JAB_PASSWORD'				=> 'Jabber parolası',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Uyarı:</strong> Bu parola veritabanında düz metin olarak saklanacak ve veritabanına veya bu ayar sayfasına erişimi olan herkes tarafından görülebilecektir.</em>',
	'JAB_PORT'					=> 'Jabber portu',
	'JAB_PORT_EXPLAIN'			=> 'Eğer portun 5222 olduğundan emin değil iseniz boş bırakın.',
	'JAB_SERVER'				=> 'Jabber sunucu',
	'JAB_SERVER_EXPLAIN'		=> 'Sunucu listesi için %sjabber.org%s adresine bakabilirsiniz.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber ayarları değiştirildi.',
	'JAB_USE_SSL'				=> 'Bağlantı için SSL kullan',
	'JAB_USE_SSL_EXPLAIN'		=> 'Etkinleştirilmesi halinde güvenli bir bağlantı kurulmaya çalışılır. 5222 portu tanımlı ise, Jabber portu 5223 olarak değiştirilir.',
	'JAB_USERNAME'				=> 'Jabber kullanıcı adı veya JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Geçerli bir kayıtlı kullanıcı adı veya JID tanımlayın. Kullanıcı adının geçerli olup olmadığı kontrol edilmeyecektir. Sadece bir kullanıcı adı tanımlarsanız, JID değeriniz kullanıcı adınız ve sunucu da yukarıda tanımlandığınız olacaktır. Aksi halde, geçerli bir JID tanımlayın, örneğin kullanıcı@jabber.org.',
));

?>
