<?php
namespace app\home\controller;
use think\Db;
use think\Session;

class Logout extends Home
{
    public function index(){
        if(Session::get('user_auth')){
            Session::delete('user_auth');
            $this->success('退出成功！', url('/user/login/index'));
        } else {
            $this->redirect('login');
        }
    }
}