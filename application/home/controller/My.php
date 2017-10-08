<?php
namespace app\home\controller;
use think\Session;

class My extends Home {
  public function index(){
      $name=Session::get('user_auth')['username'];
      $this->assign('name',$name);
      return $this->fetch('index');
  }
}