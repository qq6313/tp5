<?php
namespace app\home\controller;
use think\Db;

class Life extends Home{
    public function index(){

        $document=Db::name('document')->where('category_id',45)->where('display',1)->select();
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
        $data=Db::name('document_article')->where('id',$id)->select();

        $document=$document=Db::name('document')->where('id',$id)->select();
        $this->assign('article',$data);
        $this->assign('document',$document);
        return $this->fetch();

    }
}