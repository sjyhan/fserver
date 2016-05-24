<?php
namespace api\Model;
use Think\Model;
class FangModel extends Model
{
	protected $tablePrefix = "house_"
	public function getHouses($uid)
	{
		$houses = $this->where('uid='.$uid)->find();
		return $houses;
	}
}