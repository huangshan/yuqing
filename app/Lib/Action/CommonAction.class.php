<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
    
    function insert() {
        $name =$_GET['model'];
        $model = M($name);
        if (false === $model->create()) {
            $this->error($model->getError());
        }
        //保存当前数据对象
        $list = $model->add();
        if ($list !== false) { //保存成功
            $this->success('新增成功!',cookie('_currentUrl_'));
        } else {
            //失败提示
            $this->error('新增失败!');
        }
    }

  
    public function save(){
        $name =$_GET['model'];
        $model = M($name);
	    if($result   =  $model->create()){
            if(false !==$model->save($result)){
	   	  	    $this->success("用户修改成功");	   	  	
	   	  	}else{
	   	  	    $this->error("用户修改失败");
	   	  	}
	   	}else{
	   	  	$this->error($dao->getError());
	   	}	     
	    
    }    	

    

    public function del(){
      
      $name = $_GET['model'];
      $id   = $_GET['Id'];
      $dao = M($name);
      if (false !== $dao->where ('Id='.$id)->delete () ) {
		 $this->success ('删除成功！');
	  } else {
	     $this->error ('删除失败！');
	  }	  

    }    
    

    
}