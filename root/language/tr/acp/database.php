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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Buradan phpBB ile ilgili tüm verileri yedekleyebilirsiniz. Yedek arşivini <samp>store/</samp> dizininde saklayabilir veya doğrudan indirebilirsiniz. Sunucu konfigürasyonunuza bağlı olarak dosyayı birkaç biçimde sıkıştırabilirsiniz.',
	'ACP_RESTORE_EXPLAIN'	=> 'Bu işlem kayıt edilmiş bir dosyadan tüm phpBB tablolarını geri yükleyecektir. Eğer sunucunuz destekliyorsa kullanabileceğiniz gzip veya bzip2 sıkıştırılmış dosyaları sunucu otomatik olarak açacaktır. <strong>UYARI:</strong> Bu işlem, mevcut veritabanı içinde bulunan bilgilerin üzerine yazacaktır. Geri yükleme işlemi uzun sürebilir, lütfen geri yükleme tamamlanmadan bu sayfadan başka bir sayfaya geçmeyin. Yedekler <samp>store/</samp> dizininde bulunur ve phpBB’nin yedekleme fonksiyonu tarafından üretildikleri varsayılır. phpBB yedekleme sistemindan farklı bir kaynaktan alınan yedekler çalışmayabilir.',

	'BACKUP_DELETE'		=> 'Yedek silindi.',
	'BACKUP_INVALID'	=> 'Yedekleme için seçilen yedek dosyası geçersiz.',
	'BACKUP_OPTIONS'	=> 'Yedekleme seçenekleri',
	'BACKUP_SUCCESS'	=> 'Yedek dosyası oluşturuldu.',
	'BACKUP_TYPE'		=> 'Yedek tipi',

	'DATABASE'					=> 'Veritabanı Uygulamaları',
	'DATA_ONLY'					=> 'Sadece veri',
	'DELETE_BACKUP'				=> 'Yedek sil',
	'DELETE_SELECTED_BACKUP'	=> 'Seçilen yedeği silmek istediğinize emin misiniz?',
	'DESELECT_ALL'				=> 'Tümünü seçimden çıkar',
	'DOWNLOAD_BACKUP'			=> 'Yedek indir',

	'FILE_TYPE'			=> 'Dosya tipi',
	'FILE_WRITE_FAIL'	=> 'Dosya depo dizinine yazılamadı.',
	'FULL_BACKUP'		=> 'Tam',

	'RESTORE_FAILURE'		=> 'Yedek dosyası bozuk olabilir.',
	'RESTORE_OPTIONS'		=> 'Onarma seçenekleri',

	'RESTORE_SELECTED_BACKUP'	=> 'Seçilen yedeği geri yüklemek istediğinize emin misiniz?',

	'RESTORE_SUCCESS'		=> 'Veritabanı onarıldı.<br /><br />Panonuz, yedeği aldığınız zamana geri dönmüş olması gerekiyor.',

	'SELECT_ALL'			=> 'Tümünü seç',
	'SELECT_FILE'			=> 'Bir dosya seç',
	'START_BACKUP'			=> 'Yedeklemeyi başlat',
	'START_RESTORE'			=> 'Onarımı başlat',
	'STORE_AND_DOWNLOAD'	=> 'Depola ve indir',
	'STORE_LOCAL'			=> 'Dosyayı dizinde depola',
	'STRUCTURE_ONLY'		=> 'Sadece yapı',

	'TABLE_SELECT'			=> 'Tablo seçimi',
	'TABLE_SELECT_ERROR'	=> 'En az bir tablo seçmelisiniz.',
));

?>