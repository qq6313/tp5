<?php
namespace app\home\controller;
use think\Db;
use think\Session;

class About extends Home
{
    public function index(){
        $document=Db::name('document')->where('category_id',48)->where('display',1)->select();
        $cover_id=[];
        foreach($document as $docu){
            $cover_id[]=$docu['cover_id'];
        }
        $picture=Db::name('picture')->where('id','in',$cover_id)->select();
        $this->assign('document',$document);
        $picture=array_column($picture,'path');
        $this->assign('picture',$picture);
        return $this->fetch('index');

    }
    public function article($id){
        if(Session::get('user_auth')){
            $data=Db::name('document_article')->where('id',$id)->select();

            $document=$document=Db::name('document')->where('id',$id)->select();
            $this->assign('article',$data);
            $this->assign('document',$document);
            return $this->fetch();

        }else{
            $this->redirect('/user/login/index.html');
        }
    }

    public function add($id){

        $data=Db::name('document')->where('id',$id)->select();
//        var_dump($data);exit;
        if(!$data['0']['activity']==1){

            Db::name('document')
                ->where('id', $id)
                ->update(['activity' => 1]);

            return 'success';
        }

    }
}