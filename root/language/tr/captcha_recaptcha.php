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

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'			=> 'tr',
	'RECAPTCHA_NOT_AVAILABLE'	=> 'reCaptcha kullanmak istiyorsanız, <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> web sitesinden bir hesap açmalısınız.',
	'CAPTCHA_RECAPTCHA'			=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'		=> 'Yazdığınız görsel doğrulama kodu cevabı yanlış',

	'RECAPTCHA_PUBLIC'			=> 'Genel reCaptcha anahtarı (public key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'	=> 'Genel reCaptcha anahtarınız. Anahtarlar <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> sitesi tarafından sağlanır.',
	'RECAPTCHA_PRIVATE'			=> 'Özel reCaptcha anahtarı (private key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'	=> 'Özel reCaptcha anahtarınız. Anahtarlar <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> sitesi tarafından sağlanır.',

	'RECAPTCHA_EXPLAIN'			=> 'Otomatik kayıtları engellemek için iki kelime gösterilir ve bu kelimelerin yazı alanına yazılması istenir.',
));

?>