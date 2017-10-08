<?php
namespace app\home\controller;
use think\Db;

class Rental extends Home
{
    public function index(){
//出租
        $document=Db::name('document')->where('category_id',49)->where('display',1)->select();

        $cover_id=[];
        foreach($document as $docu){
            $cover_id[]=$docu['cover_id'];
        }
        $picture=Db::name('picture')->where('id','in',$cover_id)->select();
        $this->assign('document',$document);
        $picture=array_column($picture,'path');
        $this->assign('picture',$picture);
//出售
        $document1=Db::name('document')->where('category_id',49)->where('display',0)->select();
        $cover_id1=[];
        foreach($document1 as $docu){
            $cover_id1[]=$docu['cover_id'];
        }
        $picture1=Db::name('picture')->where('id','in',$cover_id1)->select();
        $this->assign('document1',$document1);
        $picture1=array_column($picture1,'path');
        $this->assign('picture1',$picture1);
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