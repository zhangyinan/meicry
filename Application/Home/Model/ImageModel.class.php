<?php
namespace Home\Model;
use Think\Model;
class ImageModel extends Model {
	
/* 	public function getItemByTheme($theme){
		$ret=$this->field('image_url,image_desc,id,template')->select();
		return  $ret;
	} */
	
	public function getItemByUserId($UserId){
		$ret=$this->where("user_id='$UserId'")->field('image_url,image_desc,id')->select();
		return  $ret;
	}
	
	#  根据模板id找到所有图片的信息
	public function getImageByTemplateId($templateId)  {
		# return array(0=>array('id'=>1,'name'=>'test'));
		$ret=$this->where("template='$templateId'")->select();
		
		return  $ret;
	}
	
}