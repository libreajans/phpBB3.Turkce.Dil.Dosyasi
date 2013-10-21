<?php defined('IN_PHPBB') OR die('No direct access allowed.');
/**
 * @author Sevdin Filiz <angelside@users.sourceforge.net>
 *
 * @copyright (c) phpBB Group 		<http://phpbb.com>			[phpBB sistemi]
 * @copyright (c) Canver Software	<http://canversoft.net>		[Tercüme]
 *
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'CAPTCHA_QA'				=> 'Soru/Cevap doğrulama kodu',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Bu sorular otomatik kayıtları engellemek için doğrulama sağlayacaktır.',
	'CONFIRM_QUESTION_WRONG'	=> 'Doğrulama sorusuna yanlış cevap verdiniz.',

	'QUESTION_ANSWERS'			=> 'Cevaplar',
	'ANSWERS_EXPLAIN'			=> 'Her satıra bir tane gelecek şekilde soru için cevaplar yazın.',
	'CONFIRM_QUESTION'			=> 'Soru',

	'ANSWER'					=> 'Cevap',
	'EDIT_QUESTION'				=> 'Soru düzenleme',
	'QUESTIONS'					=> 'Sorular',
	'QUESTIONS_EXPLAIN'			=> 'Soru/Cevap eklentisinin aktif edildiği her formda, kullanıcılardan burada belirtilen sorulardan birinin cevabı istenecektir. Bu eklentiyi kullanmak için en az bir soru varsayılan dilde girilmiş olmalıdır. Bu soruları cevaplamak hedef kitleniz için kolay olacaktır, ancak Google™ mantığında çalışan duyarlı botların anlama yeteneğinin ötesindedir.  Soru kümelerini geniş tutmak düzenli ve iyi sonuçlar verecektir. Eğer yeterli gelmeyeceğini düşünürseniz daha iyi bir koruma için büyük-küçük harf karışıklığı, boşluk ve noktalama işaretleri için sıkı kontrolü açın.',
	'QUESTION_DELETED'			=> 'Soru silindi',
	'QUESTION_LANG'				=> 'Dil',
	'QUESTION_LANG_EXPLAIN'		=> 'Bu sorunun ve cevabın yazıldığı dil.',
	'QUESTION_STRICT'			=> 'Sıkı kontrol',
	'QUESTION_STRICT_EXPLAIN'	=> 'Büyük-küçük harf karışıklılığını, boşlukları ve noktalama işaretlerini zorunlu kıl.',

	'QUESTION_TEXT'				=> 'Soru',
	'QUESTION_TEXT_EXPLAIN'		=> 'Kullanıcıya sorulacak soru.',

	'QA_ERROR_MSG'				=> 'Lütfen tüm alanları doldurun ve en az bir cevap girin.',
	'QA_LAST_QUESTION'			=> 'Bu eklenti aktif iken tüm soruları silemezsiniz.',
));

?>