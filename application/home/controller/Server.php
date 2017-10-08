<?php
namespace app\home\controller;
use think\Db;

class Server extends Home
{
    public function index(){
            return $this->fetch('page');
//        $document=Db::name('document')->where('category_id',47)->where('display',1)->where('deadline','>',time())->select();
//        $cover_id=[];
//        foreach($document as $docu){
//            $cover_id[]=$docu['cover_id'];
//        }
//        $picture=Db::name('picture')->where('id','in',$cover_id)->select();
//        $this->assign('document',$document);
//        $picture=array_column($picture,'path');
//        $this->assign('picture',$picture);
//        return $this->fetch('index');
    }
    public function ajaxpage($page=1){

        $document=Db::name('document')->where('category_id',47)->where('display',1)->where('deadline','>',time())->paginate(1);
        $cover_id=[];
        foreach($document as $docu){
            $cover_id[]=$docu['cover_id'];
        }
        $picture=Db::name('picture')->where('id','in',$cover_id)->select();
        $this->assign('document',$document);
        $picture=array_column($picture,'path');
        $this->assign('picture',$picture);
        $this->assign('no',++$page);

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