<?php
namespace app\admin\controller;
use think\Controller;
class User extends  Base
{
    private  $obj;
    public function _initialize() {
        $this->obj = model("User");
    }
    public function index()
    {
        $users=$this->obj->where(['status'=>'0'])->paginate(2);
        return $this->fetch('',[
            'users'=>$users,
        ]);
    }
    
    public function deleted()
    {
        $users=$this->obj->where(['status'=>'-1'])->paginate(2);
        return $this->fetch('',[
            'users'=>$users,
        ]);
    }

    // 修改状态
    /*public function status() {
        $data = input('get.');
        $validate = validate('Category');
        if(!$validate->scene('status')->check($data)) {
            $this->error($validate->getError());
        }

        $res = $this->obj->save(['status'=>$data['status']], ['id'=>$data['id']]);
        if($res) {
            $this->success('状态更新成功');
        }else {
            $this->error('状态更新失败');
        }

    }*/

}
