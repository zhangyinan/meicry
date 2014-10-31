<?php
namespace Home\Model;
use Think\Model;
class ThemeModel extends Model {
	
	# 找到所有的主题
	public function getAllTheme(){
		$ret=$this->select();
		return  $ret;
	}
	#根据主题的id找到主题信息
	public function getThemeInfoByThemeId($themeId){
		$ret=$this->find($themeId);
		return  $ret;
	}
}