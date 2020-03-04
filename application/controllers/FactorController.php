<?php


class FactorController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form', 'url');
		$this->load->library('cart');
	}

	public function index()
	{
		//$this->load->view('cartview');
		$this->load->view('siteheader');
		$this->load->view('cart');
		$this->load->view('sitefooter');

	}

	public function addToCart($productId, $amountForSell)
	{
		$data = array(
			'id' => $productId,
			'qty' => $this->input->post('qty'),
			'price' => $amountForSell,
			'name' => $this->input->post('title'),
		);
		$this->cart->insert($data);
		//$this->load->view('cartview');
		redirect(base_url() . 'index.php/FinancialController/getAllProducts');
	}

	public function updateCart()
	{
		$count = $this->input->post('count');
		$data = array();
		for ($k = 1; $k <= $count; $k++) {
			$rowid = $this->input->post($k . '[rowid]');
			$qty = $this->input->post($k . '[qty]');
			array_push($data, array(
				'rowid' => $rowid,
				'qty' => $qty,
			));
		}
		$this->cart->update($data);
		$this->load->view('siteheader');
		$this->load->view('cart');
		$this->load->view('sitefooter');

	}

	public function destroyCart()
	{
		$this->cart->destroy();
		redirect(base_url() . 'index.php/FinancialController/getAllProducts');
	}

	////////////////////////END CART ACTIONS///////////////////////////


	///////////////FINISH SHOPPING/////////////////////////
	///
	public function addFactor()
	{
		//if ($this->doesUserLoggedInWithSessionOrCookies()) {//my_controller
		$this->load->model('Factors');
		$factor = new Factors();
		$totalPrice = $this->cart->total();
		$factorId = $factor->addFactor($totalPrice);
		echo "add shod";
		foreach ($this->cart->contents() as $item) {
			$productId = $item['id'];
			$amountForSell = $item['price'];
			$amountOfBoughtItem = $item['qty'];
			$this->addProductToFactor($factorId, $productId, $amountForSell, $amountOfBoughtItem);

		}
		//$this->cart->destroy();


		// }
		/*
		else {
			$data['message']='کاربر عزیز برای ثبت سفارش باید وارد سامانه شوید.';
			$this->load->view('siteheader');
			$this->load->view('message', $data);
			$this->load->view('sitefooter');
		}
		*/
	}

	public function addProductToFactor($factorId, $productId, $amountForSell, $amountOfBoughtItem)
	{
		$this->load->model('Factors_Content');
		$fac_con = new Factors_Content();
		$fac_con->addFactorContent($factorId, $productId, $amountForSell, $amountOfBoughtItem);
		echo "add shod";

	}

	public function getUserFactors()
	{
		$this->load->model('Factors');
		$factor = new Factors();
		$res = $factor->getFactorsWithUsername();
		$data = array(
			'factors' => $res
		);
		$this->load->view('siteheader');
		$this->load->view('userfactors', $data);
		$this->load->view('sitefooter');
	}

	public function factorContents($factorId)
	{
		$this->load->model('Factors_Content');
		$this->load->model('Financial_Product');
		$fac_con = new Factors_Content();
		$product = new Financial_Product();
		$res = $fac_con->getContentsWithFactorId($factorId);
		$contents = array();
		$content = array();
		foreach ($res as $row) {
			$content['selledPrice'] = $row['selledPrice'];
			$content['amountOfDiscounts'] = $row['amountOfDiscounts'];
			$content['amountOfBoughtItem'] = $row['amountOfBoughtItem'];
			$arr = $product->getProductWithId($row['productId']);
			$content['productTitle'] = $arr[0]['title'];
			array_push($contents, $content);
		}
		$data = array(
			'contents' => $contents
		);
		$this->load->view('siteheader');
		$this->load->view('userfactorcontents', $data);
		$this->load->view('sitefooter');

	}

	public function deleteFactorContent()
	{
		$this->load->model('Factors_Content');
		if (isset($_POST) && !empty($_POST)) {
			$fac_con = new Factors_Content();
			$fac_con->deleteFactorContent();
			echo "delete shod";
		} else {
			echo "post not isset";
		}
	}
}
