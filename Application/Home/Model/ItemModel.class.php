<?php
namespace Home\Model;
use Think\Model;
class ItemModel extends Model {
	
	public function getItemByTheme($theme){
		$ret=$this->where("theme='$theme'")->field('image_url,image_desc,id')->select();
		return  $ret;
	}
	public function getItemByUserId($UserId){
		$ret=$this->where("user_id='$UserId'")->field('image_url,image_desc,id')->select();
		return  $ret;
	}
}