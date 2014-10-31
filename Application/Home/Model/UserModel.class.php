<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	# 找到所有的用户
	public function getAllUser(){
		$ret=$this->select();
		return  $ret;
	}
	public function getUserInfoById($userId){
		$ret = $this->find($userId);
		return $ret;
	}
}