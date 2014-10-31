<?php
namespace Home\Model;
use Think\Model;
class LikeModel extends Model {
	# 点赞加1
	function dianlike($id, $imageId) {
		$data 					= array();
		$data['image'] 			= $imageId;
		$data['user_id'] 		= $id;
		$data['update_time'] 	= date("Y-m-d H:i:s", time());
		$this->add($data);
	}
	
	# 根据图片id删除点赞关系
	function delLikeByImageId($imageId){
		$this->where("image='$imageId'")->delete();
	}
	#我点过赞的
	function getImageLiked($userId){
		$ret = $this->where("user_id='$userId'")->order('update_time desc')->select();
		return $ret;
	}
}