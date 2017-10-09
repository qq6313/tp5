<?php
namespace app\admin\controller;
use think\Db;

class Vili extends Admin{
    public function index(){
        $expire=Db::name('vili')->paginate(8);
        $page =$expire->render();

        $this->assign('expire',$expire);
        $this->assign('page',$page);

        return $this->fetch('index');

    }
    public function edit($id){

        Db::name('vili')->where('id', $id)->update(['status' => 1]);
        return 'success';
    }

}
