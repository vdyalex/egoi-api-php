<?php
namespace Egoi;

use Egoi\Translate;
use Egoi\Api;

class Egoi {

	public static $protocol = null;
	
	public static $apikey = null;
	public static $lang_id = null;
	
	public static function init($protocol)
	{
		self::$protocol = $protocol;
		
		return Factory::getApi($protocol);
	}
	
	public static function getApiKey()
	{
		return self::$apikey;
	}
	
	public static function setApiKey($apikey)
	{
		self::$apikey = $apikey;
	}
	
	public static function getLanguage()
	{
		return self::$lang_id;
	}
	
	public static function setLanguage($lang_id)
	{
		self::$lang_id = $lang_id;
	}
}