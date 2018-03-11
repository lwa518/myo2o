<?php
namespace app\admin\controller;
use think\Controller;
class Index extends  Controller
{
    public function index()
    { 
        return $this->fetch();
    }

    public function map() {
        return \Map::staticimage('北京昌平沙河地铁');
    }
    public function welcome() {
    
        return $this->fetch();
    }

    public function login()
    {
        //return [1,2];
        // 获取session
        $user = session('suser','', 'myo2o');
        if($user && $user->id) {
           $this->redirect(url('index/index'));
        }
        return $this->fetch();
    }

    public function logincheck() {
        //判定
        if(!request()->isPost()) {
           $this->error('提交不合法');
        }
        $data = input('post.');
        //严格检验 tp5 validate

        try {
            $user = model('User')->getUserByUsername($data['username']);
        }catch (\Exception $e){
            $this->error($e->getMessage());
        }
        ///print_r($user);

        if(!$user || $user->status != 1) {
            $this->error('该用户不存在');
        }
        // 判定密码是否合理
        if(md5($data['password'].$user->code) != $user->password) {
            $this->error('密码不正确');
        }

        // 登录成功
        model('User')->updateById(['last_login_time'=>time()], $user->id);

        //把用户信息记录到session
        session('suser', $user, 'myo2o');

        $this->success('登录成功', url('index/index'));

    }

    public function logout() {
        session(null, 'myo2o');
        $this->redirect(url('index/login'));
    }
}
