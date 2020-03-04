<?php


class MY_Controller extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
	}

	public function doesUserSendForms()
	{
		if ($this->input->post()) {
			return 'formWasSent';
		} else {
			return "requestMustBePost";
		}
	}

	public function doesUserLoggedInWithSessionOrCookies()
	{

		if (!$this->doesVisitorHaveSession() && !$this->doesVisitorHaveCookies())
			return false;
		return true;
	}

	public function doesVisitorHaveSession()
	{
		//  if(!$loginSession=$this->session->userdata('usersSession')) inghalate az method has_userdata estefade kon
		if (!$loginSession = $this->session->has_userdata('usersSession')) {
			return false;
		}
		return true;
	}

	public function doesVisitorHaveCookies()
	{

		if (!$loginSession = $this->input->cookie('loggingCookieStatus')) {
			return false;

		}
		return true;
	}

	public function makeCaptcha()
	{
		$captcha_data = array(
			'word' => rand(12345, 50000),
			'img_path' => './captcha/',
			'img_url' => 'https://saadco.co/webapp/captcha/',
			'img_width' => '100',
			'img_height' => 30,
			'expiration' => 7200,
			'word_length' => 8,
			'font_size' => 16,
			'img_id' => 'Imageid',
			'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors' => array(
				'background' => array(255, 255, 255),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)
		);
		$captchaOfPage = create_captcha($captcha_data);
		$captchaDatabaseData = array(
			'captcha_time' => time(),
			'ip_address' => $this->input->ip_address(),
			'word' => $captcha_data['word']

		);
		$captcha_insert_query = $this->db->insert_string('captcha', $captchaDatabaseData);
		$this->db->query($captcha_insert_query);
	}

	public function doesCaptchaFilledCorrectly()
	{
		$this->form_validation->set_rules( //for captcha checking
			'captcha', 'captcha',
			array(
				'required',
				array(
					'captcha_callable',
					function ($captchaFieldImputed) {
						$expiration = time() - 7200; // Two hour limit
						$this->db->where('captcha_time < ', $expiration)
							->delete('captcha');
						// Then see if a captcha exists:
						$sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
						$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
						$query = $this->db->query($sql, $binds);
						$row = $query->row();

						if ($row->count == 0) {
							return false;
						} else
							return true;
					}
				)
			)
		);

		// return true;
	}
}
