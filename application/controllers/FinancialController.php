<?php


class FinancialController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));

	}

	public function index()
	{
		echo "financial controller";
	}

	public function addBaseGroup()
	{
		$this->load->model('Financial_BaseProductGroup');
		if (isset($_POST) && !empty($_POST)) {
			$baseGroup = new Financial_BaseProductGroup();
			$baseGroup->addBaseProductGroup();
			echo "add shod";
		} else {
			echo "post not isset";
		}
	}


	public function getBaseGroups()
	{
		$this->load->model('Financial_BaseProductGroup');
		$baseGroup = new Financial_BaseProductGroup();
		$res = $baseGroup->getAllBaseGroupProduct();
		foreach ($res as $row) {
			echo $row['id'] . "   " . $row['title'] . "   " . $row['description'] . "\n";
		}
	}

	public function editBaseGroups()
	{
		$this->load->model('Financial_BaseProductGroup');
		if (isset($_POST) && !empty($_POST)) {
			$baseGroup = new Financial_BaseProductGroup();
			$baseGroup->editBaseProductGroup();
			echo "edit shod";
		} else {
			echo "post not isset";
		}
	}

	public function deleteBaseGroup()
	{
		$this->load->model('Financial_BaseProductGroup');
		if (isset($_POST) && !empty($_POST)) {
			$baseGroup = new Financial_BaseProductGroup();
			$baseGroup->deleteBaseProductGroup();
			echo "delete shod";
		} else {
			echo "post not isset";
		}
	}

	////////////////end base group//////////////////

	public function addSecondaryGroup()
	{
		$this->load->model('Financial_SecondaryProductGroup');
		if (isset($_POST) && !empty($_POST)) {
			$secondaryGroup = new Financial_SecondaryProductGroup();
			$secondaryGroup->addSecondaryProductGroup();
			echo "add shod";
		} else {
			echo "post not isset";
		}
	}


	public function getAllSecondaryGroups()
	{
		$this->load->model('Financial_SecondaryProductGroup');
		$secondaryGroup = new Financial_SecondaryProductGroup();
		$res = $secondaryGroup->getAllSecondaryGroupProduct();
		foreach ($res as $row) {
			echo $row['id'] . "   " . $row['title'] . "   " . $row['description'] . "   " . $row['baseProductGroupId'] . "\n";
		}
	}

	public function editSecondaryGroup()
	{
		$this->load->model('Financial_SecondaryProductGroup');
		if (isset($_POST) && !empty($_POST)) {
			$secondary = new Financial_SecondaryProductGroup();
			$secondary->editSecondaryProductGroup();
			echo "edit shod";
		} else {
			echo "post not isset";
		}
	}

	public function deleteSecondaryGroup()
	{
		$this->load->model('Financial_SecondaryProductGroup');
		if (isset($_POST) && !empty($_POST)) {
			$secondary = new Financial_SecondaryProductGroup();
			$secondary->deleteSecondaryProductGroup();
			echo "delete shod";
		} else {
			echo "post not isset";
		}
	}

	public function secondaryWithBaseId()
	{
		$this->load->model('Financial_SecondaryProductGroup');
		if (isset($_POST) && !empty($_POST)) {
			$secondary = new Financial_SecondaryProductGroup();
			$res = $secondary->getSecondaryProductGroupsWithBaseId();
			foreach ($res as $row) {
				echo $row['id'] . "   " . $row['title'] . "   " . $row['description'] . "   " . $row['baseProductGroupId'] . "\n";
			}
		} else {
			echo "post not isset";
		}
	}


	//////end secondary group/////////

	public function productForm()
	{
		$this->load->view('upload_form');
	}

	public function addProductImage()
	{
		$this->load->model('Products_Image');
		$image = new Products_Image();
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$this->load->library('upload');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			echo "error";
			var_dump($error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			var_dump($data);
			$image->addProductImage($data['upload_data']);

		}
	}


	public function addProduct()
	{
		$this->load->model('Financial_Product');
		if (isset($_POST) && !empty($_POST)) {
			$product = new Financial_Product();
			$product->addProduct();
			echo "add shod";
		} else {
			echo "post not isset";
		}
	}


	public function getAllProducts()
	{
		$this->load->model('Financial_Product');
		$this->load->model('Products_Image');
		$imageModel = new Products_Image();
		$productModel = new Financial_Product();
		$res = $productModel->getAllProduct();

		$products = array();
		foreach ($res as $row) {
			$image = $imageModel->getProductImages($row['id']);
			$row['image'] = $image[0];
			array_push($products, $row);
		}

		//$data = array('products' => $res );

		$data = array('products' => $products);

		$this->load->view('siteheader');
		$this->load->view('products', $data);
		$this->load->view('sitefooter');
	}

	public function editProduct()
	{
		$this->load->model('Financial_Product');
		if (isset($_POST) && !empty($_POST)) {
			$product = new Financial_Product();
			$product->editProduct();
			echo "edit shod";
		} else {
			echo "post not isset";
		}
	}

	public function deleteProduct()
	{
		$this->load->model('Financial_Product');
		if (isset($_POST) && !empty($_POST)) {
			$product = new Financial_Product();
			$product->deleteProduct();
			echo "delete shod";
		} else {
			echo "post not isset";
		}
	}


	public function product($id)
	{
		$this->load->model('Financial_Product');
		$this->load->model('Products_Comment');
		$this->load->model('Products_Image');
		$this->load->model('Discount');
		$product = new Financial_Product();
		$comment = new Products_Comment();
		$image = new Products_Image();
		$discount = new Discount();
		$resProduct = $product->getProductWithId($id);
		$resComments = $comment->getProductComments($id);
		$resImages = $image->getProductImages($id);
		$resDiscounts = $discount->getProductDiscount($id);

		$discountedPrice = 0;
		$totalPrice = $resProduct[0]['amountForSell'];
		foreach ($resDiscounts as $row) {
			$discountedPrice = $totalPrice * ($row['percentOfDiscount'] / 100);
		}
		$totalPrice = $totalPrice - $discountedPrice;
		$data = array(
			'product' => $resProduct,
			'images' => $resImages,
			'comments' => $resComments,
			'totalPrice' => $totalPrice,
		);
		$this->load->view('siteheader');
		$this->load->view('product', $data);
		$this->load->view('sitefooter');
	}

	public function productsWithSecondaryId()
	{
		$this->load->model('Financial_Product');
		$product = new Financial_Product();
		$res = $product->getProductsWithSecondaryGroupId();
		foreach ($res as $row) {
			echo $row['id'] . "   " . $row['title'] . "   " . $row['secondaryTitr'] . "   "
				. $row['shortDescription'] . "   " . $row['baseProductGroupId'] . "   "
				. $row['adderUsername'] . "   " . $row['doesHaveDiscount'] . "   " . $row['amountForSell']
				. "   " . $row['usersCanSendComment'] . "   " . $row['usersCanSeeThisProduct']
				. "   " . $row['status'] . "\n";
		}
	}

	public function productsWithBaseId()
	{
		$this->load->model('Financial_Product');
		$product = new Financial_Product();
		$res = $product->getProductsWithBaseGroupId();
		foreach ($res as $row) {
			echo $row['id'] . "   " . $row['title'] . "   " . $row['secondaryTitr'] . "   "
				. $row['shortDescription'] . "   " . $row['baseProductGroupId'] . "   "
				. $row['adderUsername'] . "   " . $row['doesHaveDiscount'] . "   " . $row['amountForSell']
				. "   " . $row['usersCanSendComment'] . "   " . $row['usersCanSeeThisProduct']
				. "   " . $row['status'] . "\n";
		}
	}

	///////////////end product//////////////


}
