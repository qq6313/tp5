<?php
namespace app\home\controller;
use think\Db;
use think\Session;

class Expire extends Home
{
    public function add()
    {
        if(request()->isPost()){

            $expire = model('expire');

            $post_data=\think\Request::instance()->post();
            $post_data['create_time']=time();
            $post_data['status']=1;

            //自动验证
            $validate = validate('expire');
            if(!$validate->check($post_data)){
                return $this->error($validate->getError());
            }
            $data=Db::name('expire')->insert($post_data);

            if($data){
                $this->success('新增成功', url('index'));
                action_log('del_expire', 'expire', $data->id, UID);
            } else {
                $this->error($expire->getError());
            }
            $this->redirect('/expire/index.html');
        } else {
            $id=Session::get('user_auth')['uid'];
            $vili=Db::name('vili')->where('uid',$id)->select();
//            var_dump($vili[0]['status']);die;
            if(!$vili[0]['status']==1){
                $this->redirect('home/index/index.html');
            }
            $uid=Session::get('user_auth')['uid'];
            $this->assign('uid',$uid);
            $this->assign('info',null);
            return $this->fetch('add');
        }

    }
}