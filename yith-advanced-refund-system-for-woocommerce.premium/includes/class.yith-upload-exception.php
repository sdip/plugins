<?php

if ( ! defined( 'YITH_WCARS_VERSION' ) ) {
    exit( 'Direct access forbidden.' );
}

/**
 *
 *
 * @class      YITH_Upload_Exception
 * @package    Yithemes
 * @since      Version 1.0.0
 * @author     Your Inspiration Themes
 *
 */

if ( ! class_exists( 'YITH_Upload_Exception' ) ) {
    /**
     * Class YITH_Upload_Exception
     *
     * @author Carlos Mora <carlos.eugenio@yourinspiration.it>
     */
	class YITH_Upload_Exception extends Exception {

		public function __construct( $code ) {
			$this->message = $this->get_message_from_code( $code );
			$this->code = $code;
			parent::__construct( $this->message, $this->code, null );
		}

		private function get_message_from_code( $code ) {
			switch ( $code ) {
				case UPLOAD_ERR_INI_SIZE:
					$message = _x( 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
						'Exception description. Technical error message.', 'yith-advanced-refund-system-for-woocommerce' );
					break;
				case UPLOAD_ERR_FORM_SIZE:
					$message = _x( 'Maximum file size exceeded', 'Exception description. Technical error message.',
						'yith-advanced-refund-system-for-woocommerce' );
					break;
				case UPLOAD_ERR_PARTIAL:
					$message = _x( 'The file was uploaded only partially', 'Exception description. Technical error message.',
                        'yith-advanced-refund-system-for-woocommerce' );
					break;
				case UPLOAD_ERR_NO_FILE:
					$message = _x( 'No file was uploaded', 'Exception description. Technical error message.',
						'yith-advanced-refund-system-for-woocommerce' );
					break;
				case UPLOAD_ERR_NO_TMP_DIR:
					$message = _x( 'Missing a temporary folder', 'Exception description. Technical error message.',
						'yith-advanced-refund-system-for-woocommerce' );
					break;
				case UPLOAD_ERR_CANT_WRITE:
					$message = _x( 'Failed to write file to disk', 'Exception description. Technical error message.',
						'yith-advanced-refund-system-for-woocommerce' );
					break;
				case UPLOAD_ERR_EXTENSION:
					$message = _x( 'File upload stopped by extension', 'Exception description. Technical error message.',
						'yith-advanced-refund-system-for-woocommerce' );
					break;
				case YITH_WCARS_UPLOAD_ERR_NOT_A_IMAGE:
					$message = _x( 'File must be an image format.', 'Exception description. Technical error message.',
                        'yith-advanced-refund-system-for-woocommerce' );
					break;
				case YITH_WCARS_UPLOAD_ERR_WRONG_IMAGE_FORMAT:
					$message = _x( 'Image must either be PNG, JPEG, or GIF format.',
						'Exception description. Technical error message.', 'yith-advanced-refund-system-for-woocommerce' );
					break;

				default:
					$message = _x( 'Unknown upload error', 'Exception description. Technical error message.',
						'yith-advanced-refund-system-for-woocommerce' );
					break;
			}
			return $message;
		}
	}
}