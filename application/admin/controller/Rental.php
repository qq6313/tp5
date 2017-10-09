<?php
namespace app\admin\controller;
use think\Db;
use think\Session;

class Rental extends Admin{
    public function index(){


        $expire=Db::name('rental')->paginate(8);
        $page =$expire->render();
//        var_dump($expire);die;
        $this->assign('expire',$expire);
        $this->assign('page',$page);

        return $this->fetch('index');

    }
    public function add(){
        if(request()->isPost()){
            $expire = model('rental');
            $post_data=\think\Request::instance()->post();
            //自动验证
            $validate = validate('rental');
            if(!$validate->check($post_data)){
                return $this->error($validate->getError());
            }
            $data=Db::name('rental')->insert($post_data);

            if($data){
                $this->success('新增成功', url('index'));
            } else {
                $this->error($expire->getError());
            }
            $this->redirect('/rental/index.html');
        } else {

            $this->assign('info',null);
            return $this->fetch('add');
        }
    }

    public function edit($id = 0){
        if($this->request->isPost()){
            $postdata = \think\Request::instance()->post();
            $post_data['update_time']=time();
            $Channel = \think\Db::name("rental");
            $data = $Channel->update($postdata);
            if($data !== false){
                $this->success('编辑成功', url('index'));
            } else {
                $this->error('编辑失败');
            }
            $this->redirect('/rental/index.html');
        } else {
            $info = array();
            /* 获取数据 */
            $info = \think\Db::name('rental')->find($id);

            if(false === $info){
                $this->error('获取配置信息错误');
            }
            $this->assign('info', $info);

            return $this->fetch('add');
        }
    }

    public function del(){
        $id = array_unique((array)input('id/a',0));

        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }

        $map = array('id' => array('in', $id) );
//        var_dump(input('id/a',0));die;
        if(\think\Db::name('expire')->where($map)->delete()){
            //记录行为
            action_log('del_expire', 'expire', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

}
