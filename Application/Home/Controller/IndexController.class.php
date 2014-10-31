<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ThemeModel;
use Home\Model\TemplateModel;
use Home\Model\ImageModel;
use Home\Model\LikeModel;
use Home\Model\UserModel;
class IndexController extends Controller {
    public function index(){
	    $ret = $this->getAllImage();
	    $all_theme = $this->getAllTheme();
		$all_template =$this->getAllTemplate();
		
		$_SESSION["user_id"] = 1;
		
		$this->assign('templates',   $all_template);
		$this->assign('themes',   $all_theme);
		$this->assign('images',   $ret);
		$this->display();
    }
    private  function getAllTheme(){
    	$Obj = new ThemeModel();
    	$res =$Obj->getAllTheme();
    	$ret = array();
    	foreach ($res as $value) {
    		$ret[$value['id']] = $value;
    	}
    	return $ret;
    }
    private  function getAllTemplate(){
    	$Obj = new TemplateModel();
    	$res =$Obj->getAllTemplate();
    	$ret = array();
    	foreach ($res as $value) {
    		$ret[$value['id']] = $value;
    	}
    	return $ret;
    }
   
    # 拼凑所有的数据
    public function getAllImage() {
    	# 找到所有主题id
    	#getAllImageByThemeId()
    	$allTheme = $this->getAllTheme();
    	$res = array();
    	foreach ($allTheme as $values) {
    		$themeId = $values['id'];
    		$res[$themeId]  = $this->getAllImageByThemeId($themeId);
    	}
    	
    	return $res;
    }
    
    #  拼凑单个数据结构
    public function getAllImageByThemeId($themeId) {
		$res = array ();
		$tmps = array ();
		$templateModel = new TemplateModel ();
		$imageModel = new ImageModel ();
		$tmps = $templateModel->getTemplateByThemeId ( $themeId );
		
		$tmplateArr = array ();
		foreach ( $tmps as $value ) {
			$images = array ();
			$templateId = $value ['id'];
			$images = $imageModel->getImageByTemplateId ( $templateId );
			
			$tmplateArr [$templateId] = $images;
		}
    	
    	
    	return $tmplateArr;
    }
    	
    public function delImageById(){
    	$imageId = $_REQUEST['imageId'];
    	$obj = new ImageModel();
    	$obj1 = new LikeModel();
    	$obj->delImageById($imageId);
    	$obj1->delLikeByImageId($imageId);
    	 
    }	
    
    public  function owner(){
    	$userId = $_SESSION["user_id"];
    	$obj = new ImageModel();
    	$ret = $obj->getImageByUserId($userId);
    	dump($ret);
    	exit;
    	$this->assign("image_info",$ret);
    	$this->display();
    }
    
    #找我爱过的们
    public function getImageLiked(){
    	$userId = $_SESSION["user_id"];
    	$obj = new ImageModel();
    	$obj1 = new LikeModel();
    	$obj2 = new UserModel();
    	$obj3 = new TemplateModel();
    	$obj4 = new ThemeModel();
    	$res = $obj1->getImageLiked($userId);
    	
    	$allLiked = array();
    	foreach ($res as $value){
    		$image_id = $value['image_id'];
    		$imageInfo =  $obj->getImageInfoById($image_id);
    		$user_id = $value['user_id'];
    		$userInfo = $obj2 ->getUserInfoById($user_id);
    		$allLikedTmp = array();
    		$tmpId = $imageInfo['template'];
    		$allLikedTmp["imageInfo"] = $imageInfo;
    		$allLikedTmp["userInfo"] = $userInfo;
    		$templateInfo = $obj3->getThemeByTemplateId($tmpId);
    		$themeId = $templateInfo['theme'];
    		$allLikedTmp["themeInfo"] =$obj4->getThemeInfoByThemeId($themeId);
    		$allLiked[] = $allLikedTmp;
    	}
    	return $allLiked;
    }
    
    
    
    
    private function getImageByUserId($userId){
    	$Obj = new ImageModel();
    	$ret =$Obj->getItemByUserId($userId);
    	return $ret;
    }
    	
    //安卓
    public function getImageByTheme_encode(){
    	$theme = $_REQUEST['theme'];
    	$Obj = new ImageModel();
    	$ret =$Obj->getItemByTheme($theme);
    	echo json_encode($ret);
    }
    //安卓
    public function getImageByUserId_encode(){
    	$userId = $_REQUEST['userId'];
    	$Obj = new ImageModel();
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


