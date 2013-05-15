<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
    
    function insert() {
        //$name =$_GET['model'];
        $model = M('user');
        print_r($_POST);
        //exit;
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
    
    
}