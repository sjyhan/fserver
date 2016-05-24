<?php
namespace api\Controller;
use Think\Controller;

class FangController extends BaseController
{
	
	public function __construct()
	{
		$this->model = new FangModel();
		parent::__construct();
	}
	public function index()
	{
		
	}

	public function get_fang_list($uid)
	{
		$houses = $this->model->getHouses($uid);
		// return $houses;
		 $this->showResult(1, $houses);
	}
}