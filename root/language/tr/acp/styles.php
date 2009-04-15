<?php
/*
*
* acp_styles [Turkish]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/* ALEXIS: önemli kelime tercümeleri

	template	-> şablon	(tema ve stili kapsayan çerçeve tasarım)
	theme		-> tema		(sanal şablonlar, css ile biçimlenebilen)
	style		-> stil		(css stilleri)
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Resim setleri, pano tarafından kullanılan her türlü buton, forum, klasör vb. spesifik imajları içermektedir. Buradan mevcut resim setlerini değiştirebilir, silebilir, yenilerini yükleyebilir ve aktif hale getirebilirsiniz.',
	'ACP_STYLES_EXPLAIN'	=> 'Buradan forumunuz için mevcut olan stilleri yönetebilirsiniz. Stil; şablon, tema ve resim setlerinden meydana gelmektedir. Var olan stilleri; silebilir, aktif veya deaktif hale getirebilir, yeni bir tane oluşturabilir ve bunları yükleyebilirsiniz. Önizleme seçeneğini kullanarak stillerin nasıl göründüklerine bakabilirsiniz. Şu anda kullanılan stil, bir asteriks işareti (*) ile gösterilmiştir. Ayrıca stili kullanan kişi sayısı da yazmaktadır.',
	'ACP_TEMPLATES_EXPLAIN' => 'Bir şablon seti panonuzun arayüzünü oluşturan tüm biçimlendirmeleri kapsar. Buradan, mevcut şablon takımını düzenleyebilir, silebilir, ihraç ya da ithal edebilir ve ayarlarınıza ön izleme yapabilirsiniz. Aynı zamanda şablon kodunuzu biçim kodu üretecek biçimde modifiye edebilirsiniz.',
	'ACP_THEMES_EXPLAIN'	=> 'Burada, tema oluşturabilir, yükleyebilir, değiştirebilir ve ihraç edebilirsiniz. Bir tema, temel görünümü sağlayan pano şablonunuz için hazırlanmış ve ona uygulanmış olan; renkler ve imajlar bütünü-kombinasyonudur. Seçenekler, sunucunuzun yapılandırılması ve phpBB yazılımının kurulumuna bağlıdır. Daha fazla bilgi için kullanma kılavuzuna bakınız. Please note that when creating new themes the use of an existing theme as a basis is optional',
	'ADD_IMAGESET'			=> 'Resim seti oluştur',
	'ADD_IMAGESET_EXPLAIN'	=> 'Buradan yeni bir resim seti grubu oluşturabilirsiniz. Sunucu yapılandırılması ve dosya izinlerine bağlı olarak burada ek tercihler görebilirsiniz. Aynı zamanda bir resim seti arşivi yükleyebilir veya ithal edebilirsiniz. Eğer bir arşivi yüklemek veya ithal etmeyi seçti iseniz resim seti isimleri opsiyonel olarak arşiv isminden atabilir (bunu yapmak için resim seti isimini boş bırakın).',
	'ADD_STYLE'				=> 'Stil oluştur',
	'ADD_STYLE_EXPLAIN' 	=> 'Buradan yeni bir stil oluşturabilirsiniz. sunucu yapılandırılması ve dosya izinlerine bağlı olarak burada ek tercihler görebilirsiniz. Dilerseniz, buraya bir stil arşivi ithal edebilir veya yükleyebilirsiniz. Eğer bir arşivi yüklemeyi veya ithal etmeyi seçerseniz, stil ismi opsiyonel olarak arşiv isminden atanabilir (Bunun gerçekleşmesi için tema ismini boş bırakmanız yeterlidir).',
	'ADD_TEMPLATE'			=> 'Şablon oluştur',
	'ADD_TEMPLATE_EXPLAIN' 	=> 'Buradan yeni bir şablon ekleyebilirsiniz. Sunucu yapılandırılması ve dosya izinlerine bağlı olarak burada ek tercihler görebilirsiniz. Dilerseniz, buraya bir şablon arşivi ithal edebilir veya yükleyebilirsiniz. Eğer bir arşiv yüklemek veya ithal etmeyi seçerseniz, şablon ismi opsiyonel olarak arşiv isminden atanabilir (Bunun gerçekleşmesi için şablon ismini boş bırakmanız yeterlidir).',
	'ADD_THEME'				=> 'Tema oluştur',
	'ADD_THEME_EXPLAIN' 	=> 'Buradan yeni bir tema ekleyebilirsiniz. Sunucu yapılandırılması ve dosya izinlerine bağlı olarak burada ek tercihler görebilirsiniz. Dilerseniz, buraya bir tema arşivi ithal edebilir veya yükleyebilirsiniz. Eğer bir arşiv yüklemeyi veya ithal etmeyi seçerseniz, tema ismi opsiyonel olarak arşiv isminden atanabilir (Bunun gerçekleşmesi için tema ismini boş bırakmanız yeterlidir).',
	'ARCHIVE_FORMAT'		=> 'Arşiv dosya türü',
	'AUTOMATIC_EXPLAIN'		=> 'Otomatik tanıma için boş bırakın.',
	
	'BACKGROUND'			=> 'Arkaplan',
	'BACKGROUND_COLOUR'		=> 'Arkaplan rengi',
	'BACKGROUND_IMAGE'		=> 'Arkaplan resimi',
	'BACKGROUND_REPEAT'		=> 'Arkaplan tekrarı',
	'BOLD'					=> 'Kalın',

	'CACHE'							=> 'Önbellek',
	'CACHE_CACHED'					=> 'Önbelleğe alındı', // cached
	'CACHE_FILENAME'				=> 'Şablon dosyası',
	'CACHE_FILESIZE'				=> 'Dosya boyutu',
	'CACHE_MODIFIED'				=> 'Değiştirildi',//modified
	'CONFIRM_IMAGESET_REFRESH' 		=> 'Tüm resim seti bilgisini yenilemek istediğinizden emin misiniz? Resim seti yapılandırılma dosyasındaki ayarlar tüm değiştirilmiş resim setlerinin üzerine yazılacak.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE' 	=> 'Şablon dosyalarınızın önbelleğe alınmış tüm sürümlerini temizlemek istediğinizden emin misiniz?',
	'CONFIRM_TEMPLATE_REFRESH' 		=> 'Dosya sisteminde ve veritabanınında bulunan şablon içerik dosyaları ile birlikte tüm şablon verilerinin yenilenmesini istiyor musunuz? Bu işlem şablon, veritabanında bulunurken, şablon editör ile birlikte taşınan daha önceki bütün değişikliklerin üzerine yazacaktır.',
	'CONFIRM_THEME_REFRESH' 		=> 'Dosya sistemindeki, tema bileşenleri ile birlikte veritabanındaki veriyi tazelemek istediğinizden emin misiniz? Bu işlem, tema editöründen taşınan tüm değişikliklerin üzerine yazacak.',
	'COPYRIGHT'						=> 'Telif', 
	'CREATE_IMAGESET'				=> 'Yeni resim seti oluştur',
	'CREATE_STYLE'					=> 'Yeni stil oluştur',
	'CREATE_TEMPLATE'				=> 'Yeni şablon seti oluştur',
	'CREATE_THEME'					=> 'Yeni tema oluştur',
	'CURRENT_IMAGE'					=> 'Geçerli resim',

	'DEACTIVATE_DEFAULT'		=> 'Varsayılan stili pasif edemezsiniz.',
	'DELETE_FROM_FS'			=> 'Dosya sisteminden sil',
	'DELETE_IMAGESET'			=> 'Resim setini sil',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Buradan seçilmiş bir resim setini veritabanınından silebilirsiniz. Buna ek olarak, eğer gerekli izinlere sahipseniz seçilmiş olan seti dosya sisteminden silebilirsiniz. Lütfen bu işlemin geri dönülebilirliğinin olmadığını dikkate alın. When the imageset is deleted it is gone for good. İleride olası kullanımlar için önceden ayarlarınızı ihraç etmeniz önerilmektedir.',
	'DELETE_STYLE'				=> 'Stili sil',
	'DELETE_STYLE_EXPLAIN' 		=> 'Seçilmiş stili buradan kaldırabilirsiniz. Ancak, buradan tüm stil elemanlarını kaldıramazsınız. Bunlar ayrıca temizlenmelidir. Stilleri silerken dikkat ediniz zira bu durumun geri döndürebilirliği mümkün değildir.',
	'DELETE_TEMPLATE'			=> 'Şablonu sil',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Buradan seçilen şablon setini veritabanından silebilirsiniz. Ek olarak, eğer izinleriniz varsa dosya sistemi kaydını seçebilir ve silebilirsiniz. Lütfen geri alma şansınızın olmadığını unutmayın. Şablon silindiğinde verileri tamamen kaybedeceksiniz. Yeniden kullanım için ilk önce şablonu dışa aktarabilirsiniz.',
	'DELETE_THEME'				=> 'Temayı sil',
	'DELETE_THEME_EXPLAIN'		=> 'Buradan seçilen temayı veritabanından silebilirsiniz. Ek olarak, eğer izinleriniz varsa dosya sisteminden tema seçebilir ve silebilirsiniz. Lütfen geri alma şansınızın olmadığını unutmayın. Tema silindiğinde verileri tamamen kaybedeceksiniz. Yeniden kullanım için ilk önce temayı dışa aktarabilirsiniz.',
	'DETAILS'					=> 'Detaylar',
	'DIMENSIONS_EXPLAIN'		=> 'Evet seçeneğini seçmeniz durumunda genişlik/yükseklik parametreleri dahil edilecektir.',

	'EDIT_DETAILS_IMAGESET'				=> 'Resim seti detaylarını değiştir',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Resim seti detaylarının açıklamalarını değiştir.',
	'EDIT_DETAILS_STYLE'				=> 'Stili değiştir',
	'EDIT_DETAILS_STYLE_EXPLAIN' 		=> 'Aşağıdaki form aracılığı ile şu anki stili düzenleyebilir, şablonun, temanın, resim setinin birleşiminde değişiklik yapabilirsiniz. Ayrıca, stili varsayılan olarak atayabilirsiniz.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Şablon detaylarını değiştir',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Buradan şablon adı gibi belirli tema detaylarını değiştirebilirsiniz. Aynı zamanda css şablon dosyasına ait depoyu da veritabanından ve karşılıklı olarak değiştirebilirsiniz. Bu seçenek PHP ayarlarınıza ve sunucu tarafından temalara yazma izni verilip vermemesine bağlıdır.',
	'EDIT_DETAILS_THEME'				=> 'Tema detaylarını değiştir',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Buradan tema adı gibi belirli tema detaylarını değiştirebilirsiniz. Aynı zamanda css şablon dosyasına ait depoyu da veritabanından ve karşılıklı olarak değiştirebilirsiniz. Bu seçenek PHP ayarlarınıza ve sunucu tarafından temalara yazma izni verilip vermemesine bağlıdır.',
	'EDIT_IMAGESET'						=> 'Resim setini değiştir',
	'EDIT_IMAGESET_EXPLAIN' 			=> 'Burada resim setini tanımlayan her bir resimi değiştirebilirsiniz. Aynı zamanda resim dosyasının boyutlarını da buradan belirleyebilmeniz mümkündür. Boyutlar opsiyoneldir, ancak onları belirlemek kimi tarayıcılardaki sorunlarına bir çare getirebilir. Boyut belirlemesine gitmez dosya büyüklüğünü azaltmaya çalışır iseniz veritabanınızda çok az yer açmış olursunuz.',
	'EDIT_TEMPLATE'						=> 'Şablonu değiştir',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Şablon ayarlarınızı direkt olarak buradan belirlemeniz mümkündür. Lütfen unutmayın ki, bu değişiklikler kalıcı olacak ve hiçbir şekilde geri alınamayacaktır. PHP, şablon dosyalarını styles dizininize yazabilirse, tüm değişiklikler bu dosyalar üzerinde etkili olacaktır. Eğer PHP, bu dosyaları yazmayı başaramaz ise, bu dosyalar veritabanına kopyalanacak ve tüm değişiklikler buraya yansıyacaktır. Lütfen şablon ayarlarını değiştirken dikkatli olunuz. Tüm yenilenme değişken terimlerini {XXXX} kapamayı unutmayınız.',
	'EDIT_TEMPLATE_STORED_DB' 			=> 'Şablon dosyası yazılamaz niteliktedir, o yüzden şablon ayarları, şu anda modifiye edilmiş dosyayı içererek veritabanına kaydedilmiştir.',
	'EDIT_THEME'						=> 'Temayı değiştir',
	'EDIT_THEME_EXPLAIN'				=> 'Buradan seçilen temayı düzenleyebilir, renkleri, resimleri, vb. değiştirebilirsiniz.',
	'EDIT_THEME_STORED_DB' 				=> 'Stil belgesi yazılamaz niteliktedir, o yüzden yapmış olduğunuz değişiklikler ile birlikte, stil belgesi şu an veritabanına kaydedilmiştir.',
	'EDIT_THEME_STORE_PARSED'			=> 'Tema css şablon dosyasının ayrıştırılmış olmasını gerektirmektedir. Bunun tek yolu ise veritabanında saklanıyor olmasıdır.',
	'EDITOR_DISABLED'					=> 'Şablon editörü kapalı.',
	'EXPORT'							=> 'İhraç et',

	'FOREGROUND'			=> 'Ön plan',
	'FONT_COLOUR'			=> 'Yazı rengi',
	'FONT_FACE'				=> 'Yazı tipi',
	'FONT_FACE_EXPLAIN'		=> 'Birden fazla yazı tipini virgül ile ayırabilirsiniz. Eğer kullanıcı kurulu olan ilk yazı tipine sahip değilse, çalışan ilk yazı tipi geçerli seçilir.',
	'FONT_SIZE'				=> 'Yazı boyutu',

	'GLOBAL_IMAGES'			=> 'Genel',

	'HIDE_CSS'				=> 'Ham CSS’yi sakla', 

	'IMAGE_WIDTH'				=> 'Resim genişliği',
	'IMAGE_HEIGHT'				=> 'Resim yüksekliği',
	'IMAGE'						=> 'Resim',
	'IMAGE_NAME'				=> 'Resim adı',
	'IMAGE_PARAMETER'			=> 'Parametre',
	'IMAGE_VALUE'				=> 'Değer',
	'IMAGESET_ADDED'			=> 'Yeni resim seti dosya sistemine eklendi.',
	'IMAGESET_ADDED_DB'			=> 'Yeni resim seti veritabanına eklendi.',
	'IMAGESET_DELETED'			=> 'Resim seti silindi.',
	'IMAGESET_DELETED_FS'		=> 'Resim seti veritabanından silindi, ancak dosya sisteminde bazı dosya kalıntıları kalmış olabilir.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Resim seti detayları silindi.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Lütfen bir arşiv metodu seçiniz.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Telif bilgisi 60 karakterden daha uzun olamaz.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Resim seti adı sadece harf ve rakamlar içerebilir, -, +, _ ve boşluk',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Bu isimde bir resim seni zaten mevcut.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Resim seti adı 30 karakterden uzun olamaz.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Belirttiğiniz isimde bir resim seti bulunamadı.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Bu resim seti için bir isim yazmalısınız.',
	'IMAGESET_EXPORT'			=> 'Resim setini ihraç et',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Buradan bir resim setini arşiv formatında ihraç edebilirsiniz. Bu arşiv bir resim setinin panoya kurulum işlemi esnasında gerekli olacak bütün bilgileri içerecektir. Dosyayı doğrudan indirme, depo dizininize daha sonra indirmek üzere saklama ya da FTP yoluyla indirme seçeneklerinden birini seçebilirsiniz.',
	'IMAGESET_EXPORTED'			=> 'Resim seti yedeklendi %s.',
	'IMAGESET_NAME'				=> 'Resim seti adı',
	'IMAGESET_REFRESHED'		=> 'Resim seti yenilendi.',
	'IMAGESET_UPDATED'			=> 'Resim seti gücellendi.',
	'ITALIC'					=> 'Eğik',

	'IMG_CAT_BUTTONS'		=> 'Yerelleşmiş butonlar', // Localised buttons
	'IMG_CAT_CUSTOM'		=> 'Özel resimler',
	'IMG_CAT_FOLDERS'		=> 'Konu ikonları',
	'IMG_CAT_FORUMS'		=> 'Forum ikonları',
	'IMG_CAT_ICONS'			=> 'Genel ikonlar',
	'IMG_CAT_LOGOS'			=> 'Logolar',
	'IMG_CAT_POLLS'			=> 'Anket resimleri', // Polling images
	'IMG_CAT_UI'			=> 'Genel kullanıcı arayüzü öğeleri',
	'IMG_CAT_USER'			=> 'İlave resimler', // Additional images

	'IMG_SITE_LOGO'			=> 'Ana logo',
	'IMG_UPLOAD_BAR'		=> 'Yükleme ilerleme çubuğu', // Upload progress bar
	'IMG_POLL_LEFT'			=> 'Anket sol bitimi', // Poll left end
	'IMG_POLL_CENTER'		=> 'Anket merkezi',
	'IMG_POLL_RIGHT'		=> 'Anket sağ bitimi',
	'IMG_ICON_FRIEND'		=> 'Arkadaş olarak ekle',
	'IMG_ICON_FOE'			=> 'Yasaklı olarak ekle',

	'IMG_FORUM_LINK'			=> 'Forum link',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum kilitli',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Alt forum',
	'IMG_FORUM_UNREAD'			=> 'Forum yeni iletiler',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Forum yeni iletiler kilitli',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Alt forum yeni iletiler',
	'IMG_SUBFORUM_READ'			=> 'Açıklama alt forumu', // ALEXIS: değişecek //Legend subforum
	'IMG_SUBFORUM_UNREAD'		=> 'Açıklama alt forumu yeni ileti', // ALEXIS: değişecek //Legend subforum new posts

	'IMG_TOPIC_MOVED'			=> 'Konu taşınmış',

	'IMG_TOPIC_READ'				=> 'Konu',
	'IMG_TOPIC_READ_MINE'			=> 'Konu gönderildi',
	'IMG_TOPIC_READ_HOT'			=> 'Popüler konu',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Popüler konu cevap var',
	'IMG_TOPIC_READ_LOCKED'			=> 'Konu kilitli',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Konu kilitli cevap var',

	'IMG_TOPIC_UNREAD'				=> 'Konu yeni iletiler',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Konu gönderildiğinde',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Konu popüler yeni iletiler',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Konu popüler gönderildiğinde',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Konu kilitli yeni',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Konu kilitli yeni gönderildiğinde',

	'IMG_STICKY_READ'				=> 'Sabit konu',
	'IMG_STICKY_READ_MINE'			=> 'Sabit konu gönderildiğinde',
	'IMG_STICKY_READ_LOCKED'		=> 'Sabit konu kilitli',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Sabit konu kilitli gönderildiğinde',
	'IMG_STICKY_UNREAD'				=> 'Sabit konu yeni gönderildiğinde',
	'IMG_STICKY_UNREAD_MINE'		=> 'Sabit konu gönderildiğinde',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Sabit konu kilitli yeni gönderildiğinde',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Sabit konu kilitli gönderildiğinde',

	'IMG_ANNOUNCE_READ'					=> 'Duyuru',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Duyuru gönderildiğinde',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Duyuru kilitli',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Duyuru kilitli gönderildiğinde',
	'IMG_ANNOUNCE_UNREAD'				=> 'Duyuru yeni gönderildiğinde',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Duyuru gönderildiğinde',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Duyuru kilitli yeni gönderildiğinde',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Duyuru kilitli gönderildiğinde',

	'IMG_GLOBAL_READ'					=> 'Genel', // Global
	'IMG_GLOBAL_READ_MINE'				=> 'Genel gönderildiğinde',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Genel kilitli',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Genel kilitli gönderildiğinde',
	'IMG_GLOBAL_UNREAD'					=> 'Genel yeni iletiler',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Genel yeni gönderildiğinde',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Genel kilitli yeni iletiler',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Genel kilitli yeni gönderildiğinde',

	'IMG_PM_READ'		=> 'Okunmuş özel mesaj',
	'IMG_PM_UNREAD'		=> 'Okunmamış özel mesaj',
	
	'IMG_ICON_BACK_TOP'		=> 'En üst',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'E-posta gönder',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM/WLM',
	'IMG_ICON_CONTACT_PM'		=> 'Mesaj gönder',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Web sayfası',

	'IMG_ICON_POST_DELETE'			=> 'İletiyi sil',
	'IMG_ICON_POST_EDIT'			=> 'İletiyi değiştir',
	'IMG_ICON_POST_INFO'			=> 'İleti detaylarını göster',
	'IMG_ICON_POST_QUOTE'			=> 'İletiden alıntı yap',
	'IMG_ICON_POST_REPORT'			=> 'iletiyi ropor et',
	'IMG_ICON_POST_TARGET'			=> 'Mini ileti', //Minipost
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Yeni mini ileti',

	'IMG_ICON_TOPIC_ATTACH'			=> 'Eklenti',
	'IMG_ICON_TOPIC_LATEST'			=> 'Son ileti',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Son okunmamış ileti',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Raporlanmış ileti',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Onaylanmamış ileti',

	'IMG_ICON_USER_ONLINE'		=> 'Kullanıcı çevrimiçi',
	'IMG_ICON_USER_OFFLINE'		=> 'Kullanıcı çevrimdışı',
	'IMG_ICON_USER_PROFILE'		=> 'Profil göster',
	'IMG_ICON_USER_SEARCH'		=> 'İletileri ara',
	'IMG_ICON_USER_WARN'		=> 'Kullanıcıyı uyar',

	'IMG_BUTTON_PM_FORWARD'		=> 'Özel mesajı ilet',
	'IMG_BUTTON_PM_NEW'			=> 'Yeni özel mesaj',
	'IMG_BUTTON_PM_REPLY'		=> 'Özel mesaja cevap yaz',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Konu kilitli',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Yeni konu',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Konuya cevap yaz',

	'IMG_USER_ICON1'		=> 'Kullanıcı tanımlı resim 1',
	'IMG_USER_ICON2'		=> 'Kullanıcı tanımlı resim 2',
	'IMG_USER_ICON3'		=> 'Kullanıcı tanımlı resim 3',
	'IMG_USER_ICON4'		=> 'Kullanıcı tanımlı resim 4',
	'IMG_USER_ICON5'		=> 'Kullanıcı tanımlı resim 5',
	'IMG_USER_ICON6'		=> 'Kullanıcı tanımlı resim 6',
	'IMG_USER_ICON7'		=> 'Kullanıcı tanımlı resim 7',
	'IMG_USER_ICON8'		=> 'Kullanıcı tanımlı resim 8',
	'IMG_USER_ICON9'		=> 'Kullanıcı tanımlı resim 9',
	'IMG_USER_ICON10'		=> 'Kullanıcı tanımlı resim 10',

	'INCLUDE_DIMENSIONS'		=> 'Boyutları dahil et',
	'INCLUDE_IMAGESET'			=> 'Resim setini dahil et',
	'INCLUDE_TEMPLATE'			=> 'Şablonu dahil et',
	'INCLUDE_THEME'				=> 'Temayı dahil et',
	'INHERITING_FROM'			=> 'Miras alınan', // Inherits from
	'INSTALL_IMAGESET'			=> 'Resim seti yükle',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Buradan, seçtiğiniz resim setlerini kurabilirsiniz. You can edit certain details if you wish or use the installation defaults.',
	'INSTALL_STYLE'				=> 'Stil yükle',
	'INSTALL_STYLE_EXPLAIN' 	=> 'Buradaki menü aracılığı ile yeni bir stil yükleyebilirsiniz. Eğer daha önceden ilintili yüklü still öğeleriniz var ise, üzerlerine yazılmayacaktır. Bazı stiller için mevcut stil öğelerinin önceden yüklenmiş olması gerekir. Eğer bir stil yüklemeye çalışıyorsanız ve gerekli öğelere sahip değil iseniz, sistem tarafından uyarılırsınız.',
	'INSTALL_TEMPLATE'			=> 'Şablon yükle',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Buradan yeni bir şablon seti kurabilirsiniz. Sunucu ayarlarınıza bağlı olarak, birkaç tane daha seçenekle karşılaşabilirsiniz.',
	'INSTALL_THEME'				=> 'Tema yükle',
	'INSTALL_THEME_EXPLAIN'		=> 'Buradan, seçtiğiniz temaları kurabilir, belirli detayları düzenleyebilir veya kurulumun varsayılan değerlerini kullanabilirsiniz.',
	'INSTALLED_IMAGESET'		=> 'Kurulu resim setleri',
	'INSTALLED_STYLE'			=> 'Kurulu stiller',
	'INSTALLED_TEMPLATE'		=> 'Kurulu şablonlar',
	'INSTALLED_THEME'			=> 'Kurulu temalar',

	'LINE_SPACING'				=> 'Satır aralığı',
	'LOCALISED_IMAGES'			=> 'Yerelleştir',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Bu ayar miras alınmıştır ve değiştirilemez.',
	
	'NO_CLASS'					=> 'Sınıf stil belgesinde bulunamadı.',
	'NO_IMAGESET'				=> 'Resim seti dosya sisteminde bulunamadı.',
	'NO_IMAGE'					=> 'Resim yok',
	'NO_IMAGE_ERROR'			=> 'Resim dosya sisteminde bulunamadı.',
	'NO_STYLE'					=> 'Stil dosya sisteminde bulunamadı.',
	'NO_TEMPLATE'				=> 'Şablon dosya sisteminde bulunamadı.',
	'NO_THEME'					=> 'Tema dosya sisteminde bulunamadı.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Kurulu olmayan resim setleri algılanmadı.',
	'NO_UNINSTALLED_STYLE'		=> 'Kurulu olmayan stiller algılanmadı.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Kurulu olmayan şablonlar algılanmadı.',
	'NO_UNINSTALLED_THEME'		=> 'Kurulu olmayan temalar algılanmadı.',
	'NO_UNIT'					=> 'Yok',

	'ONLY_IMAGESET'			=> 'Kalan tek resim setini silemezsiniz.',
	'ONLY_STYLE'			=> 'Kalan tek stili silemezsiniz.',
	'ONLY_TEMPLATE'			=> 'Kalan tek şablonu silemezsiniz.',
	'ONLY_THEME'			=> 'Kalan tek temayı silemezsiniz.',
	'OPTIONAL_BASIS'		=> 'İsteğe bağlı kaynak',

	'REFRESH'					=> 'Yenile',
	'REPEAT_NO'					=> 'Yok',
	'REPEAT_X'					=> 'Sadece yatay şekilde',
	'REPEAT_Y'					=> 'Sadece dikey şekilde',
	'REPEAT_ALL'				=> 'Her ikisi', // Both directions
	'REPLACE_IMAGESET'			=> 'Resim setinin üzerine yaz',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Bu resim seti üzerine yazdığınızı silerek yerini alacaktır .',
	'REPLACE_STYLE'				=> 'Stilin üzerine yaz',
	'REPLACE_STYLE_EXPLAIN'		=> 'Bu stil üzerine yazdığınızı silerek yerini alacaktır.',
	'REPLACE_TEMPLATE'			=> 'Şablonun üzerine yaz',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Bu şablon üzerine yazdığınızı silerek yerini alacaktır.',
	'REPLACE_THEME'				=> 'Temanın üzerine yaz',
	'REPLACE_THEME_EXPLAIN'		=> 'Bu tema üzerine yazdığınızı silerek yerini alacaktır.',
	'REQUIRES_IMAGESET'			=> 'Bu stilin kurulumu için %s resim seti yüklü olması gerekiyor.',
	'REQUIRES_TEMPLATE'			=> 'Bu stilin kurulumu için %s şablonun yüklü olması gerekiyor.',
	'REQUIRES_THEME'			=> 'Bu stilin kurulumu için %s tamanın yüklü olması gerekiyor.',

	'SELECT_IMAGE'				=> 'Resim seçiniz',
	'SELECT_TEMPLATE'			=> 'Şablon dosyası seçiniz',
	'SELECT_THEME'				=> 'Tema dosyası seçiniz',
	'SELECTED_IMAGE'			=> 'Seçili resim',
	'SELECTED_IMAGESET'			=> 'Seçili resim seti',
	'SELECTED_TEMPLATE'			=> 'Seçili şablon',
	'SELECTED_TEMPLATE_FILE'	=> 'Seçili şablon dosyası',
	'SELECTED_THEME'			=> 'Seçili tema',
	'SELECTED_THEME_FILE'		=> 'Seçili tema dosyası',
	'STORE_DATABASE'			=> 'Veritabanı',
	'STORE_FILESYSTEM'			=> 'Dosya sistemi',
	'STYLE_ACTIVATE'			=> 'Aktifleştir',
	'STYLE_ACTIVE'				=> 'Aktif',
	'STYLE_ADDED'				=> 'Stil eklendi.',
	'STYLE_DEACTIVATE'			=> 'Pasifleştir',
	'STYLE_DEFAULT'				=> 'Varsayılan stil yap',
	'STYLE_DELETED'				=> 'Stil silindi.',
	'STYLE_DETAILS_UPDATED'		=> 'Stil değiştirildi.',
	'STYLE_ERR_ARCHIVE'			=> 'Lütfen bir arşiv metodu seçiniz.',
	'STYLE_ERR_COPY_LONG'		=> 'Telif bilgisi 60 karakterden uzun olamaz.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'En az bir stil elemanı seçmelisiniz.',
	'STYLE_ERR_NAME_CHARS'		=> 'Stil adı sadece harf ve rakamlar içerebilir, -, +, _ ve boşluk',
	'STYLE_ERR_NAME_EXIST'		=> 'Bu isimde bir stil zaten mevcut.',
	'STYLE_ERR_NAME_LONG'		=> 'Stil adı 30 karakterden uzun olamaz.',
	'STYLE_ERR_NO_IDS'			=> 'Bu stil için, bir şablon, tema ve resim seti seçmek zorundasınız.',
	'STYLE_ERR_NOT_STYLE'		=> 'Yüklenen veya ihraç edilmiş dosya geçerli bir arşiv stili içermiyor.',
	'STYLE_ERR_STYLE_NAME'		=> 'Bu stil için bir isim yazmalısınız.',
	'STYLE_EXPORT'				=> 'Stil ihraç et',
	'STYLE_EXPORT_EXPLAIN'		=> 'Burada form içindeki bir stil arşivini dışarı aktarabilirsiniz. Bir stil, tüm elemanlarını kapsamayabilir ama en az bir elemanı olmalıdır. Örneğin yeni bir tema oluştursak ve görüntü seti kullandığınız bir şablon ise, temayı dışarı aktarabilirsiniz. Bu dosyayı daha sonra FTP dizinize göndermek için indirebilir veya kendi saklama dizininize bu dosyayı yollayabilirsiniz.',
	'STYLE_EXPORTED'			=> 'Stil ihraç edildi ve %s dizininde depolandı',
	'STYLE_IMAGESET'			=> 'Resim seti',
	'STYLE_NAME'				=> 'Stil adı',
	'STYLE_TEMPLATE'			=> 'Şablon',
	'STYLE_THEME'				=> 'Tema',
	'STYLE_USED_BY'				=> 'Kullanım (botlar dahil)', // Used by (including robots)

	'TEMPLATE_ADDED'			=> 'Şablon seti eklendi ve dosya sisteminde depolandı.',
	'TEMPLATE_ADDED_DB'			=> 'Şablon seti eklendi ve veritabanında depolandı.',
	'TEMPLATE_CACHE'			=> 'Şablon önbelleği',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'phpBB varsayılan olarak şablonların daha hızlı yüklenebilmesi için önbellek modülü açık gelmektedir. Bu sayfanın çok daha hızlı olarak gösterim için hazırlanması demektir. Buradan her bir dosyanın önbellek durumunu takip edebilirsiniz. Tüm önbelleği veya her birini silebilir, temizleyebilirsiniz.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Şablon önbelleği temizlendi.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Önbelleğe alınmış şablon yok.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Bu şablon seti kendisinden miras alan bir yada daha fazla şablon seti olmasından dolayı silinemez:',
	'TEMPLATE_DELETED'			=> 'Şablon seti silindi.',
	'TEMPLATE_DELETED_FS'		=> 'Şablon seti veritabanından silindi, ancak dosya sisteminde bazı dosya kalıntıları kalmış olabilir.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Şablon detayları güncellendi.',
	'TEMPLATE_EDITOR'			=> 'Ham HTML şablonu',//raw=ham, sade, doğal, saf...
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Şablon editörü yüksekliği',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Lütfen bir arşiv metodu seçiniz.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Önbellek dizini açılamayan şablon dosyalarının önbellek sürümünün depolanması için kullanılır.', //The cache directory used to store cached versions of template files could not be opened.
	'TEMPLATE_ERR_COPY_LONG'	=> 'Telif bilgisi 60 karakterden uzun olamaz.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Şablon adı sadece harf ve rakamlar içerebilir, -, +, _ ve boşluk.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Bu isimde bir şablon zaten mevcut.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Şablon adı 30 karakterden uzun olamaz.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Belirlediğiniz arşiv geçerli bir şablon seti içermemektedir.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE'	=> 'Yeni şablon seti, %s şablonunun kurulmasını ve kendi kendisini miras almamasını gerektirir.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Bu şablon için bir isim yazmalısınız.',
	'TEMPLATE_EXPORT'			=> 'Şablonları ihraç et',
	'TEMPLATE_EXPORT_EXPLAIN' 	=> 'Buradan şablon ayarlarını arşiv biçiminde ihraç edebilirsiniz. Bu arşiv, başka bir panoya yüklemek için gerekli olabilecek tüm dosyaları içermektedir. Dosyayı direkt olarak indirebileceğiniz gibi, depolama dizinine aktararak daha sonra indirmeyi seçebilirsiniz. FTP ile de bu işlemi gerçekleştirebilirsiniz.',
	'TEMPLATE_EXPORTED'			=> 'Şablon ihraç edildi ve %s dizininde depolandı.',
	'TEMPLATE_FILE'				=> 'Şablon dosyası',
	'TEMPLATE_FILE_UPDATED'		=> 'Şablon dosyası güncellendi.',
	'TEMPLATE_INHERITS'			=> 'Bu şablon seti %s den miras alır ve böylece kendi süper temasından farklı bir depolama ayarı olamaz.',
	'TEMPLATE_LOCATION'			=> 'Şablonu depola', // Store templates in
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Resimler her zaman dosya sisteminde depolanır.',
	'TEMPLATE_NAME'				=> 'Şablon adı',
	'TEMPLATE_REFRESHED'		=> 'Şablon yenilendi.',

	'THEME_ADDED'				=> 'Yeni tema dosya sistemine eklendi.',
	'THEME_ADDED_DB'			=> 'Yeni tema veritabanına eklendi.',
	'THEME_CLASS_ADDED'			=> 'Özel sınıf eklendi.',
	'THEME_DELETED'				=> 'Tema silindi.',
	'THEME_DELETED_FS'			=> 'Tema veritabanından silindi, ancak dosya sisteminde bazı dosya kalıntıları kalmış olabilir.',
	'THEME_DETAILS_UPDATED'		=> 'Tema detayları güncellendi.',
	'THEME_EDITOR'				=> 'Tema editörü',
	'THEME_EDITOR_HEIGHT'		=> 'Tema editörü yüksekliği',
	'THEME_ERR_ARCHIVE'			=> 'Lütfen bir arşiv metodu seçiniz.',
	'THEME_ERR_CLASS_CHARS'		=> 'Sadece harf ve rakamlar artı ., :, - ve # işaretleri sınıf isimlerinde geçerlidir.',
	'THEME_ERR_COPY_LONG'		=> 'Telif bilgisi 60 karakterden uzun olamaz.',
	'THEME_ERR_NAME_CHARS'		=> 'Tema adı sadece harf ve rakamlar içerebilir, -, +, _ ve boşluk.',
	'THEME_ERR_NAME_EXIST'		=> 'Bu isimde bir tema zaten mevcut.',
	'THEME_ERR_NAME_LONG'		=> 'Tema adı 30 karakterden uzun olamaz.',
	'THEME_ERR_NOT_THEME'		=> 'Belirlediğiniz arşiv geçerli bir tema içermemektedir.', //The archive you specified does not contain a valid theme
	'THEME_ERR_REFRESH_FS'		=> 'Bu tema dosya sisteminde saklanmıştır, şu an için yenilenmenize gerek yoktur.',
	'THEME_ERR_STYLE_NAME'		=> 'Bu tema için bir isim yazmalısınız.',
	'THEME_FILE'				=> 'Tema dosyası',
	'THEME_EXPORT'				=> 'Tema ihraç et',
	'THEME_EXPORT_EXPLAIN'		=> 'Buradan arşiv biçiminde tema ayarlarını ihraç edebilirsiniz. Bu arşiv, başka bir panoya yüklemek için gerekli olabilecek tüm dosyaları içermektedir. Dosyayı direkt olarak indirebileceğiniz gibi, depolama dizinine aktararak daha sonra indirmeyi seçebilirsiniz. Bu işlemi FTP ile de yapabilirsiniz.',
	'THEME_EXPORTED'			=> 'Tema ihraç edildi ve %s dizininde depolandı.',
	'THEME_LOCATION'			=> 'Stil belgesini depola', //  Store stylesheet in
	'THEME_LOCATION_EXPLAIN'	=> 'Resimler her zaman dosya sisteminde depolanır.',
	'THEME_NAME'				=> 'Tema adı',
	'THEME_REFRESHED'			=> 'Tema yenilendi.',
	'THEME_UPDATED'				=> 'Tema güncellendi.',

	'UNDERLINE'				=> 'Altı çizili',
	'UNINSTALLED_IMAGESET'	=> 'Kurulu olmayan resim setleri',
	'UNINSTALLED_STYLE'		=> 'Kurulu olmayan stiller',
	'UNINSTALLED_TEMPLATE'	=> 'Kurulu olmayan şablonlar',
	'UNINSTALLED_THEME'		=> 'Kurulu olmayan temalar',
	'UNSET'					=> 'Tanımsız',
));

?>