<?php
// +----------------------------------------------------------------------
// | TwoThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.twothink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 艺品网络
// +---------------------------------------------------------------------- 

namespace app\admin\controller;
use think\Session;

/**
 * 后台首页控制器
 * @author 艺品网络  <twothink.cn>
 */
class Index extends Admin  {

    /**
     * 后台首页
     * @author 艺品网络  <twothink.cn>
     */
    public function index(){
//        var_dump(Session::get('user_auth'));die;
        $this->assign('meta_title','管理首页') ;
        return $this->fetch();
    }

}
