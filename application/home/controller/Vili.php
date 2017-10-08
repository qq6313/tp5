<?php
namespace app\home\controller;
use think\Db;
use think\Session;

class Vili extends Home{
    public function index(){
        if(request()->isPost()){

            $expire = model('vili');
//die;
            $post_data=\think\Request::instance()->post();

            //自动验证
            $validate = validate('vili');
            if(!$validate->check($post_data)){
                return $this->error($validate->getError());
            }
            $data=Db::name('vili')->insert($post_data);

            if($data){
                $this->success('新增成功', url('index'));
//                action_log('del_expire', 'expire', $data->id, UID);
            } else {
                $this->error($expire->getError());
            }
            $this->redirect('/my/index.html');
        } else {
//            die;
            $uid=Session::get('user_auth')['uid'];
            $this->assign('uid',$uid);
            $this->assign('info',null);

            return $this->fetch('index');
        }
    }

}