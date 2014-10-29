<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ItemModel;
class IndexController extends Controller {
    public function index(){
	    $ret = $this->getImageByTheme(1); 
		$this->assign('images',   $ret);
		$this->display();
    }
    
    private  function getImageByTheme($theme){
    	$Obj = new ItemModel();
    	$ret =$Obj->getItemByTheme($theme);
    	return $ret;
    }
    private function getImageByUserId($userId){
    	$Obj = new ItemModel();
    	$ret =$Obj->getItemByUserId($userId);
    	return $ret;
    }
    //安卓
    public function getImageByTheme_encode(){
    	$theme = $_REQUEST['theme'];
    	$Obj = new ItemModel();
    	$ret =$Obj->getItemByTheme($theme);
    	echo json_encode($ret);
    }
    //安卓
    public function getImageByUserId_encode(){
    	$userId = $_REQUEST['userId'];
    	$Obj = new ItemModel();
    	$ret =$Obj->getItemByUserId($userId);
    	echo json_encode($ret);
    }
    public function upload(){
    	$user_id = $_REQUEST['user_id'];
    	$theme = $_REQUEST['theme'];
    	$desc = $_REQUEST['desc'];
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     3145728 ;// 设置附件上传大小
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    	$upload->savePath  =     ''; // 设置附件上传（子）目录
    	// 上传文件
    	$info   =   $upload->upload();
    	if(!$info) {// 上传错误提示错误信息
    		$this->error($upload->getError());
    	}else{// 上传成功
    		$model = M('Item');
    		// 保存当前数据对象
    		$data['image_url'] = $info[0]['savename'];
    		$data['updated_at'] = NOW_TIME;
    		$data['user_id'] = $user_id;
    		$data['theme'] = $theme;
    		$data['like'] = 0;
    		$data['image_desc']=$desc;	
     		$model->add($data);
    		$this->success('上传成功！');
    	}
    }
}


