<?php

/**
 * Class WOOMULTI_CURRENCY_F_Plugin_LearnPress
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WOOMULTI_CURRENCY_F_Plugin_LearnPress {
	protected $settings;

	public function __construct() {
		$this->settings = new WOOMULTI_CURRENCY_F_Data();
		if ( $this->settings->get_enable() ) {
			add_filter( 'learn-press/course-price', array( $this, 'learn_press_course_price' ), 99, 2 );
			add_filter( 'learn_press_course_price_html', array( $this, 'learn_press_course_price_html' ), 99, 2 );
			add_filter( 'learn_press_course_origin_price_html', array(
				$this,
				'learn_press_course_origin_price_html'
			), 99, 2 );
		}
	}
	public function learn_press_course_price( $price, $product_id ) {
		return wmc_get_price( $price );
	}
	public function learn_press_course_price_html( $price, $course ) {
		return wc_price( ( $course->get_price() ) );
	}


	public function learn_press_course_origin_price_html( $sale_price, $course ) {
		if($course->has_sale_price()){
			return wc_price( wmc_get_price( $course->get_origin_price() ) );
		}else{
			return '';
		}
	}
}