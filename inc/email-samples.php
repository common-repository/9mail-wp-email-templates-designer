<?php

namespace EmTmplF\Inc;

defined( 'ABSPATH' ) || exit;

class Email_Samples {

	protected static $instance = null;

	private function __construct() {
	}

	public static function init() {
		if ( null == self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public static function default_subject() {
		return apply_filters( 'emtmpl_sample_subjects', [
			'default' => esc_html__( 'WordPress email template', '9mail-wp-email-templates-designer' ),
		] );
	}

	public static function sample_templates() {
		//   ' . EMTMPL_CONST['img_url'] . '

		return apply_filters( 'emtmpl_sample_templates', [
			'default' => [
				'basic' => [
					'name' => esc_html__( 'Basic', '9mail-wp-email-templates-designer' ),
//					'data' => '{"style_container":{"background-color":"#f2f2f2","background-image":"none"},"rows":{"0":{"props":{"style_outer":{"padding":"15px 35px","background-image":"none","background-color":"#162447","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"transparent","width":"600px"},"type":"layout/grid2cols","dataCols":"2"},"cols":{"0":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"265px"}},"elements":{"0":{"type":"html/text","style":{"width":"265px","line-height":"30px","background-image":"none","background-color":"transparent","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"<p><span style=\"font-size: 20px; color: #ffffff;\">YOUR LOGO</span></p>"},"attrs":{},"childStyle":{}}}},"1":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"265px"}},"elements":{"0":{"type":"html/text","style":{"width":"265px","line-height":"30px","background-image":"none","background-color":"transparent","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"<p style=\"text-align: right;\"><span style=\"color: #ffffff;\">Help Center</span></p>"},"attrs":{},"childStyle":{}}}}}},"1":{"props":{"style_outer":{"padding":"35px","background-image":"none","background-color":"#ffffff","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"600px"},"type":"layout/grid1cols","dataCols":"1"},"cols":{"0":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"530px"}},"elements":{"0":{"type":"html/recover_content","style":{"width":"530px"},"content":{},"attrs":{},"childStyle":{"p":{"font-size":"16px","font-weight":"400","line-height":"22px","color":"#444444","background-color":"transparent","padding":"0px"}}}}}}},"2":{"props":{"style_outer":{"padding":"25px 35px","background-image":"none","background-color":"#162447","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"600px"},"type":"layout/grid1cols","dataCols":"1"},"cols":{"0":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"530px"}},"elements":{"0":{"type":"html/text","style":{"width":"530px","line-height":"22px","background-image":"none","background-color":"transparent","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"<p style=\"text-align: center;\"><span style=\"color: #f5f5f5; font-size: 20px;\">Get in Touch</span></p>"},"attrs":{},"childStyle":{}},"1":{"type":"html/social","style":{"width":"530px","text-align":"center","padding":"20px 0px 0px","background-image":"none","background-color":"transparent"},"content":{},"attrs":{"facebook":" ' . EMTMPL_CONST['img_url'] . 'fb-blue-white.png","facebook_url":"#","twitter":" ' . EMTMPL_CONST['img_url'] . 'twi-cyan-white.png","twitter_url":"#","instagram":" ' . EMTMPL_CONST['img_url'] . 'ins-white-color.png","instagram_url":"#","youtube":" ' . EMTMPL_CONST['img_url'] . 'yt-color-white.png","youtube_url":"","linkedin":" ' . EMTMPL_CONST['img_url'] . 'li-color-white.png","linkedin_url":"","whatsapp":" ' . EMTMPL_CONST['img_url'] . 'wa-color-white.png","whatsapp_url":"","direction":"","data-width":""},"childStyle":{}},"2":{"type":"html/text","style":{"width":"530px","line-height":"22px","background-image":"none","background-color":"transparent","padding":"20px 0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"<p style=\"text-align: center;\"><span style=\"color: #f5f5f5; font-size: 12px;\">This email was sent by : <span style=\"color: #ffffff;\"><a style=\"color: #ffffff;\" href=\"{admin_email}\">{admin_email}</a></span></span></p>\n<p style=\"text-align: center;\"><span style=\"color: #f5f5f5; font-size: 12px;\">For any questions please send an email to <span style=\"color: #ffffff;\"><a style=\"color: #ffffff;\" href=\"{admin_email}\">{admin_email}</a></span></span></p>"},"attrs":{},"childStyle":{}},"3":{"type":"html/text","style":{"width":"530px","line-height":"22px","background-image":"none","background-color":"transparent","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"<p style=\"text-align: center;\"><span style=\"color: #f5f5f5;\"><span style=\"color: #f5f5f5;\"><span style=\"font-size: 12px;\"><a style=\"color: #f5f5f5;\" href=\"#\">Privacy Policy</a>&nbsp; |&nbsp; <a style=\"color: #f5f5f5;\" href=\"#\">Help Center</a></span></span></span></p>"},"attrs":{},"childStyle":{}}}}}}}}',
				'data'=>'{"style_container":{"background-color":"#f2f2f2","background-image":"none"},"rows":{"0":{"props":{"style_outer":{"padding":"15px 35px","background-image":"none","background-color":"#162447","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"transparent","width":"600px"},"type":"layout/grid2cols","dataCols":"2"},"cols":{"0":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"265px"}},"elements":{"0":{"type":"html/text","style":{"width":"265px","line-height":"30px","background-image":"none","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"PHA+PHNwYW4gc3R5bGU9ImZvbnQtc2l6ZTogMjBweDsgY29sb3I6ICNmZmZmZmY7Ij5ZT1VSIExPR088L3NwYW4+PC9wPg=="},"attrs":{},"childStyle":{}}}},"1":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"265px"}},"elements":{"0":{"type":"html/text","style":{"width":"265px","line-height":"30px","background-image":"none","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"PHAgc3R5bGU9InRleHQtYWxpZ246IHJpZ2h0OyI+PHNwYW4gc3R5bGU9ImNvbG9yOiAjZmZmZmZmOyI+SGVscCBDZW50ZXI8L3NwYW4+PC9wPg=="},"attrs":{},"childStyle":{}}}}}},"1":{"props":{"style_outer":{"padding":"35px","background-image":"none","background-color":"#ffffff","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"600px"},"type":"layout/grid1cols","dataCols":"1"},"cols":{"0":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"530px"}},"elements":{"0":{"type":"html/recover_content","style":{"width":"530px"},"content":{},"attrs":{},"childStyle":{"p":{"font-family":"arial, helvetica, sans-serif","font-size":"16px","font-weight":"400","line-height":"22px","color":"#444444"},"a":{"font-family":"arial, helvetica, sans-serif","font-size":"16px","font-weight":"400","line-height":"22px","color":"#278de7","background-color":"transparent"}}}}}}},"2":{"props":{"style_outer":{"padding":"25px 35px","background-image":"none","background-color":"#162447","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"600px"},"type":"layout/grid1cols","dataCols":"1"},"cols":{"0":{"props":{"style":{"padding":"0px","background-image":"none","background-color":"transparent","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444","width":"530px"}},"elements":{"0":{"type":"html/text","style":{"width":"530px","line-height":"22px","background-image":"none","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxzcGFuIHN0eWxlPSJjb2xvcjogI2Y1ZjVmNTsgZm9udC1zaXplOiAyMHB4OyI+R2V0IGluIFRvdWNoPC9zcGFuPjwvcD4="},"attrs":{},"childStyle":{}},"1":{"type":"html/social","style":{"width":"530px","text-align":"center","padding":"20px 0px 0px","background-image":"none"},"content":{},"attrs":{"facebook":"' . EMTMPL_CONST['img_url'] . 'fb-blue-white.png","facebook_url":"#","twitter":"' . EMTMPL_CONST['img_url'] . 'twi-cyan-white.png","twitter_url":"#","instagram":"' . EMTMPL_CONST['img_url'] . 'ins-white-color.png","instagram_url":"#","youtube":"' . EMTMPL_CONST['img_url'] . 'yt-color-white.png","youtube_url":"","linkedin":"' . EMTMPL_CONST['img_url'] . 'li-color-white.png","linkedin_url":"","whatsapp":"' . EMTMPL_CONST['img_url'] . 'wa-color-white.png","whatsapp_url":"","direction":"","data-width":""},"childStyle":{}},"2":{"type":"html/text","style":{"width":"530px","line-height":"22px","background-image":"none","padding":"20px 0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxzcGFuIHN0eWxlPSJjb2xvcjogI2Y1ZjVmNTsgZm9udC1zaXplOiAxMnB4OyI+VGhpcyBlbWFpbCB3YXMgc2VudCBieSA6IDxzcGFuIHN0eWxlPSJjb2xvcjogI2ZmZmZmZjsiPjxhIHN0eWxlPSJjb2xvcjogI2ZmZmZmZjsiIGhyZWY9Im1haWx0bzp7YWRtaW5fZW1haWx9Ij57YWRtaW5fZW1haWx9PC9hPjwvc3Bhbj48L3NwYW4+PC9wPgo8cCBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyI+PHNwYW4gc3R5bGU9ImNvbG9yOiAjZjVmNWY1OyBmb250LXNpemU6IDEycHg7Ij5Gb3IgYW55IHF1ZXN0aW9ucyBwbGVhc2Ugc2VuZCBhbiBlbWFpbCB0byA8c3BhbiBzdHlsZT0iY29sb3I6ICNmZmZmZmY7Ij48YSBzdHlsZT0iY29sb3I6ICNmZmZmZmY7IiBocmVmPSJtYWlsdG86e2FkbWluX2VtYWlsfSI+e2FkbWluX2VtYWlsfTwvYT48L3NwYW4+PC9zcGFuPjwvcD4="},"attrs":{},"childStyle":{}},"3":{"type":"html/text","style":{"width":"530px","line-height":"22px","background-image":"none","padding":"0px","border-left-width":"0px","border-top-width":"0px","border-right-width":"0px","border-bottom-width":"0px","border-radius":"0px","border-color":"#444444"},"content":{"text":"PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxzcGFuIHN0eWxlPSJjb2xvcjogI2Y1ZjVmNTsiPjxzcGFuIHN0eWxlPSJjb2xvcjogI2Y1ZjVmNTsiPjxzcGFuIHN0eWxlPSJmb250LXNpemU6IDEycHg7Ij48YSBzdHlsZT0iY29sb3I6ICNmNWY1ZjU7IiBocmVmPSIjIj5Qcml2YWN5IFBvbGljeTwvYT4mbmJzcDsgfCZuYnNwOyA8YSBzdHlsZT0iY29sb3I6ICNmNWY1ZjU7IiBocmVmPSIjIj5IZWxwIENlbnRlcjwvYT48L3NwYW4+PC9zcGFuPjwvc3Bhbj48L3A+"},"attrs":{},"childStyle":{}}}}}}}}'
				],
			],
		] );

	}
}
