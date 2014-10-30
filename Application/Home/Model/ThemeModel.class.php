<?php
namespace Home\Model;
use Think\Model;
class ThemeModel extends Model {
	
	# 找到所有的主题
	public function getAllTheme(){
		$ret=$this->select();
		return  $ret;
	}
	
}