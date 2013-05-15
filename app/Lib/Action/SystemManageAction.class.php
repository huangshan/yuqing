<?php
class SystemManageAction extends CommonAction{
	
	//用户管理
	public function userManage()
	{
       $model  =  M('users');
       import("@.ORG.Util.Page");       //导入分页类 
       $count   =  $model->count(); //计算总数
       $p  =  new Page($count,6);  //实例化Page类
       $list = $model->limit($p->firstRow.','.$p->listRows)->order('Id desc')->select();//带参数查询
       $page = $p->show();            //分页的导航条的输出变量 
       $this->assign("page", $page); 
       $this->assign("list", $list); //数据循环变量 
       $this->display();  

	}
	//用户添加
	public function userAdd()
	{
		$this->display();
	}
	//用户编辑
	public function userEdit()
	{  
	   $id  =  $_GET['Id'];
	   $model  =  M('users');
	   $list   =  $model->where('Id='.$id)->find();	 
	   $this->assign('list',$list);
	   $this->display();
	   
	}	
	
}