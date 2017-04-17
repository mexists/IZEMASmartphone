<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
//class Controller extends CController {
class Controller extends SBaseController {
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout = '//layouts/index';

	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu = [];

	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs = [];

	public function init() {
		//$this->menu_isfound = FALSE;
	}

	public function getThemePath() {
		return $theme = Yii::app()->baseUrl . "/themes/eElectronics/";
	}

	public function toDateTime($string, $format = "Y-m-d H:i:s") {
		//$string = str_replace("/", "-", $string);
		return date($format, strtotime($string));
	}

	public function arrayToObject(array $array) {
		return json_decode(json_encode($array));
	}

	public function CORS($cross_domain_url) {//cross origin resource sharing
		header('Content-type: text/plain');
		$url = utf8_decode(rawurldecode($cross_domain_url));
		//die($url);
		echo file_get_contents($url);
	}

	public function getPost($name) {
		return Yii::app()->request->getPost($name);
	}

	public function getQuery($name) {
		return Yii::app()->request->getQuery($name);
	}

	public function getClientPlugin($name) {
		$paths = null;
		switch ($name) {
			case "datatable":
				$paths[] = "css/bootstrap.datatable.min.css";
				$paths[] = "js/jquery.dataTables.min.js";
				$paths[] = "js/dataTables.fnReloadAjax.js";
				break;
			case "jQuery-UI":
				$paths[] = "jquery-ui.css";
				$paths[] = "jquery-ui.js";
				break;
			case "datepicker":
				$paths[] = "datepicker.min.css";
				$paths[] = "bootstrap-datepicker.js";
				break;
			case "datetimepicker":
				$paths[] = "jquery.datetimepicker.css";
//				$paths[] = "jquery.js";
				$paths[] = "jquery.datetimepicker.min.js";
				break;
		}

		if (is_array($paths))
			foreach ($paths as $path)
				if (preg_match("/.css$/i", $path))
					echo "<link rel='stylesheet' href='{$this->getThemePath()}assets/plugins/$name/$path'/>";
				else if (preg_match("/.js$/i", $path))
					echo "<script src='{$this->getThemePath()}assets/plugins/$name/$path'></script>";
	}

	/**
	 * Translates a number to a short alhanumeric version
	 *
	 * Translated any number up to 9007199254740992
	 * to a shorter version in letters e.g.:
	 * 9007199254740989 --> PpQXn7COf
	 *
	 * specifiying the second argument true, it will
	 * translate back e.g.:
	 * PpQXn7COf --> 9007199254740989
	 *
	 * this function is based on any2dec && dec2any by
	 * fragmer[at]mail[dot]ru
	 * see: http://nl3.php.net/manual/en/function.base-convert.php#52450
	 *
	 * If you want the alphaID to be at least 3 letter long, use the
	 * $pad_up = 3 argument
	 *
	 * In most cases this is better than totally random ID generators
	 * because this can easily avoid duplicate ID's.
	 * For example if you correlate the alpha ID to an auto incrementing ID
	 * in your database, you're done.
	 *
	 * The reverse is done because it makes it slightly more cryptic,
	 * but it also makes it easier to spread lots of IDs in different
	 * directories on your filesystem. Example:
	 * $part1 = substr($alpha_id,0,1);
	 * $part2 = substr($alpha_id,1,1);
	 * $part3 = substr($alpha_id,2,strlen($alpha_id));
	 * $destindir = "/".$part1."/".$part2."/".$part3;
	 * // by reversing, directories are more evenly spread out. The
	 * // first 26 directories already occupy 26 main levels
	 *
	 * more info on limitation:
	 * - http://blade.nagaokaut.ac.jp/cgi-bin/scat.rb/ruby/ruby-talk/165372
	 *
	 * if you really need this for bigger numbers you probably have to look
	 * at things like: http://theserverpages.com/php/manual/en/ref.bc.php
	 * or: http://theserverpages.com/php/manual/en/ref.gmp.php
	 * but I haven't really dugg into this. If you have more info on those
	 * matters feel free to leave a comment.
	 *
	 * The following code block can be utilized by PEAR's Testing_DocTest
	 * <code>
	 * // Input //
	 * $number_in = 2188847690240;
	 * $alpha_in  = "SpQXn7Cb";
	 *
	 * // Execute //
	 * $alpha_out  = alphaID($number_in, false, 8);
	 * $number_out = alphaID($alpha_in, true, 8);
	 *
	 * if ($number_in != $number_out) {
	 *     echo "Conversion failure, ".$alpha_in." returns ".$number_out." instead of the ";
	 *     echo "desired: ".$number_in."\n";
	 * }
	 * if ($alpha_in != $alpha_out) {
	 *     echo "Conversion failure, ".$number_in." returns ".$alpha_out." instead of the ";
	 *     echo "desired: ".$alpha_in."\n";
	 * }
	 *
	 * // Show //
	 * echo $number_out." => ".$alpha_out."\n";
	 * echo $alpha_in." => ".$number_out."\n";
	 * echo alphaID(238328, false)." => ".alphaID(alphaID(238328, false), true)."\n";
	 *
	 * // expects:
	 * // 2188847690240 => SpQXn7Cb
	 * // SpQXn7Cb => 2188847690240
	 * // aaab => 238328
	 *
	 * </code>
	 *
	 * @author    Kevin van Zonneveld <kevin@vanzonneveld.net>
	 * @author    Simon Franz
	 * @author    Deadfish
	 * @author    SK83RJOSH
	 * @copyright 2008 Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD Licence
	 * @version   SVN: Release: $Id: alphaID.inc.php 344 2009-06-10 17:43:59Z kevin $
	 * @link      http://kevin.vanzonneveld.net/
	 *
	 * @param mixed $in String or long input to translate
	 * @param boolean $to_num Reverses translation when true
	 * @param mixed $pad_up Number or boolean padds the result up to a specified length
	 * @param string $pass_key Supplying a password makes it harder to calculate the original ID
	 *
	 * @return mixed string or long
	 */
	function alphaID($in, $to_num = false, $pad_up = false, $pass_key = null) {
		$out = '';
		$index = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$base = strlen($index);

		if ($pass_key !== null) {
			// Although this function's purpose is to just make the
			// ID short - and not so much secure,
			// with this patch by Simon Franz (http://blog.snaky.org/)
			// you can optionally supply a password to make it harder
			// to calculate the corresponding numeric ID

			for ($n = 0; $n < strlen($index); $n++) {
				$i[] = substr($index, $n, 1);
			}

			$pass_hash = hash('sha256', $pass_key);
			$pass_hash = (strlen($pass_hash) < strlen($index) ? hash('sha512', $pass_key) : $pass_hash);

			for ($n = 0; $n < strlen($index); $n++) {
				$p[] = substr($pass_hash, $n, 1);
			}

			array_multisort($p, SORT_DESC, $i);
			$index = implode($i);
		}

		if ($to_num) {
			// Digital number  <<--  alphabet letter code
			$len = strlen($in) - 1;

			for ($t = $len; $t >= 0; $t--) {
				$bcp = bcpow($base, $len - $t);
				$out = $out + strpos($index, substr($in, $t, 1)) * $bcp;
			}

			if (is_numeric($pad_up)) {
				$pad_up--;

				if ($pad_up > 0) {
					$out -= pow($base, $pad_up);
				}
			}
		} else {
			// Digital number  -->>  alphabet letter code
			if (is_numeric($pad_up)) {
				$pad_up--;

				if ($pad_up > 0) {
					$in += pow($base, $pad_up);
				}
			}

			for ($t = ($in != 0 ? floor(log($in, $base)) : 0); $t >= 0; $t--) {
				$bcp = bcpow($base, $t);
				$a = floor($in / $bcp) % $base;
				$out = $out . substr($index, $a, 1);
				$in = $in - ($a * $bcp);
			}
		}

		return $out;
	}


	public function crypt_pack() {
		return pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
	}

	public function encrypt($plaintext) {

		# --- ENCRYPTION ---
		# the key should be random binary, use scrypt, bcrypt or PBKDF2 to
		# convert a string into a key
		# key is specified using hexadecimal
		$key = $this->crypt_pack();

		# show key size use either 16, 24 or 32 byte keys for AES-128, 192
		# and 256 respectively
		$key_size = strlen($key);
		//echo "Key size: " . $key_size . "\n";
		//$plaintext = "This string was AES-256 / CBC / ZeroBytePadding encrypted.";
		# create a random IV to use with CBC encoding
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

		# creates a cipher text compatible with AES (Rijndael block size = 128)
		# to keep the text confidential
		# only suitable for encoded input that never ends with value 00h
		# (because of default zero padding)
		$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);

		# prepend the IV for it to be available for decryption
		$ciphertext = $iv . $ciphertext;

		# encode the resulting cipher text so it can be represented by a string
		$ciphertext_base64 = base64_encode($ciphertext);

		return $ciphertext_base64;
	}

	public function uploadFile($files, $destination) {
		//header('Content-Type: text/plain; charset=utf-8');

		try {

			// Undefined | Multiple Files | $_FILES Corruption Attack
			// If this request falls under any of them, treat it invalid.
			if (!isset($files['error']) || is_array($files['error'])
			) {
				die('Invalid parameters.');
			}

			// Check $files['error'] value.
			switch ($files['error']) {
				case UPLOAD_ERR_OK:
					break;
				case UPLOAD_ERR_NO_FILE:
					die('No file sent.');
				case UPLOAD_ERR_INI_SIZE:
				case UPLOAD_ERR_FORM_SIZE:
					die('Exceeded filesize limit.');
				default:
					die('Unknown errors.');
			}

			// You should also check filesize here.
			if ($files['size'] > 1000000) {
				die('Exceeded filesize limit.');
			}

			// DO NOT TRUST $files['mime'] VALUE !!
			// Check MIME Type by yourself.
			$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension

			if (false === $ext = array_search(finfo_file($finfo, $files['tmp_name']), [
							'jpg' => 'image/jpeg',
							'png' => 'image/png',
							'gif' => 'image/gif',
					], true)
			) {
				die('Invalid file format.');
			}
			finfo_close($finfo);


			/*$finfo = new finfo(FILEINFO_MIME_TYPE);
			if (FALSE === $ext = array_search($finfo->file($files['tmp_name']), array(
					'jpg' => 'image/jpeg',
					'png' => 'image/png',
					'gif' => 'image/gif',
				), TRUE)
			) {
				die('Invalid file format.');
			}*/


			// You should name it uniquely.
			// DO NOT USE $files['name'] WITHOUT ANY VALIDATION !!
			// On this example, obtain safe unique name from its binary data.
			//die(print_r($files));
			$encypted = sha1_file($files['tmp_name']) . ".$ext";
			$destination = sprintf("./$destination/%s.%s", sha1_file($files['tmp_name']), $ext);
			if (!move_uploaded_file($files['tmp_name'], $destination)) {
				die('Failed to move uploaded file.');
			}

			echo 'File is uploaded successfully.';

			return $encypted;
		} catch (RuntimeException $e) {

			echo $e->getMessage();

		}
	}

	public function decrypt($ciphertext_base64) {
		# === WARNING ===
		# Resulting cipher text has no integrity or authenticity added
		# and is not protected against padding oracle attacks.
		# --- DECRYPTION ---

		$ciphertext_dec = base64_decode($ciphertext_base64);

		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);

		# retrieves the IV, iv_size should be created using mcrypt_get_iv_size()
		$iv_dec = substr($ciphertext_dec, 0, $iv_size);

		# retrieves the cipher text (everything except the $iv_size in the front)
		$ciphertext_dec = substr($ciphertext_dec, $iv_size);

		# may remove 00h valued characters from end of plain text
		$plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->crypt_pack(), $ciphertext_dec, MCRYPT_MODE_CBC,
				$iv_dec);

		return $plaintext_dec;
	}

	public function mailsend($to, $from, $subject, $message) {
		$mail = Yii::app()->Smtpmail;
		$mail->SetFrom($from, 'IZEMASmartphone Staff');
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		$mail->AddAddress($to, "To");
		if (!$mail->Send()) {
			echo ("Mailer Error: " . $mail->ErrorInfo);
		} else {
			echo ("Message sent!");
		}
		$mail->ClearAddresses(); //clear addresses for next email sending
	}

}
