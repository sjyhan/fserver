<?php
namespace api\Controller;
use Think\Controller;
class BaseController extends Controller
{
	protected $model;

	public function showResult($error, $data)
	{
		$result = array();
		$result['error'] = $error;
		$result['data'] = $data;
		$this->ajaxReturn($result, 'json');
	}
}