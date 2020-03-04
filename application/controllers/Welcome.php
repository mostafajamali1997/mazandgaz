<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));

	}

	public function index()
	{
		$this->load->model('Financial_Product');
		$product = new Financial_Product();
		$res = $product->getAllProduct();
		$data = array(
			'products' => $res,
		);
                //////////////////////////////
                $this->load->model('SiteInfo');
                $siteInfo = new SiteInfo();
                $res = $siteInfo->getSiteInfo();
                $res = $res[0];
                $socialMedia = json_decode($res['socialMedia']);
                $phoneNumbers= json_decode($res['phoneNumbers']);
                $dataFooter = array(
                  'header' => $res['header'] ,
                  'title'  => $res['title']  ,
                  'socialMedia' => $socialMedia ,
                  'phoneNumbers' => $phoneNumbers ,
                );
                //////////////////////////////
		$this->load->view('siteheader');
		$this->load->view('home', $data);
		$this->load->view('sitefooter',$dataFooter);

	}
	/*
	public function time(){
		$this->load->helper('date');

		echo "now()   ".now()."\n";

		$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
		$time = time();
		echo mdate($datestring, $time);
		echo "--------------------\n";
		$format = 'DATE_RFC822';
		$time = time();
		echo standard_date($format, $time);

		echo "-------------------- \n";
		$now = time();
		echo unix_to_human($now, TRUE, 'us'); // U.S. time with seconds
	}
	*/
}
