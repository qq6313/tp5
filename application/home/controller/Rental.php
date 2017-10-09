<?php
namespace app\home\controller;
use think\Db;

class Rental extends Home
{
    public function index(){
//出租
        $document=Db::name('rental')->where('type',1)->select();
        $this->assign('document',$document);
//出售
        $document1=Db::name('rental')->where('type',2)->select();
        $this->assign('document1',$document1);
        return $this->fetch('index');

    }
    public function article($id){
        $data=Db::name('rental')->where('id',$id)->select();
        $this->assign('article',$data);
        return $this->fetch();

    }

}