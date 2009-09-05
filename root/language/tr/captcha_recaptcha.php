<?php
/**
* @version $Id$
* @author Sevdin Filiz <angelside@users.sourceforge.net>
* @copyright (c) 2009, Canver Software <http://www.canversoft.net>
*/

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

// dil değişkenleri
$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'tr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha kullanmak istiyorsanız, <a href="http://recaptcha.net">reCaptcha.net</a> web sitesinden bir hesap açmalısınız.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Yazdığınız görsel doğrulama kodu cevabı yanlış',

	'RECAPTCHA_PUBLIC'				=> 'Genel reCaptcha anahtarı (public key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Genel reCaptcha anahtarınız. Anahtarlar <a href="http://recaptcha.net">reCaptcha.net</a> sitesi tarafından sağlanır.',
	'RECAPTCHA_PRIVATE'				=> 'Özel reCaptcha anahtarı (private key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Özel reCaptcha anahtarınız. Anahtarlar <a href="http://recaptcha.net">reCaptcha.net</a> sitesi tarafından sağlanır.',

	'RECAPTCHA_EXPLAIN'				=> 'Otomatik kayıtları engellemek için iki kelime gösterilir ve bu kelimelerin yazı alanına yazılması istenir.',
));

?>