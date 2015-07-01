<?php

/**
 * Created by IntelliJ IDEA.
 * User: petr
 * Date: 1.7.15
 * Time: 13:55
 */
class PDF extends TCPDF {
	public static function factory($config_key = 'default'){

		$config = Kohana::$config->load('tcpdf.'.$config_key);

		$doc = TCPDF();

	}

	/**
	 *
	 *
	 * @param string $orientation
	 * @param string $unit
	 * @param string $format
	 * @param bool|true $unicode
	 * @param string $encoding
	 * @param bool|false $diskcache
	 * @param bool|false $pdfa
	 */
	public function __construct( $orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false ) {

		if (!class_exists('TCPDF', FALSE))
		{
			// Load SwiftMailer
			require Kohana::find_file('vendor', 'tcpdf/tcpdf');
		}

		parent::__construct( $orientation, $unit, $format, $unicode, $encoding, $diskcache, $pdfa ); // TODO:
	}


}