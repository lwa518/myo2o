<?php
namespace app\admin\controller;
use think\Controller;
class City extends  Base
{
    private  $obj;
    public function _initialize() {
        $this->obj = model("City");
    }
    public function index()
    {
        $parentId = intval(input('get.parent_id'));
        $normalCity = $this->obj->getCitysByParentId($parentId);
        return $this->fetch('',[
            'parentId'=>$parentId,
            'normalCity'=>$normalCity,
        ]);
    }

    public function add() {
        $normalCity = $this->obj->getCitysByParentId();
        return $this->fetch('', [
            'normalCity'=> $normalCity,
        ]);
    }

    public function save() {
        //print_r($_POST);
        //print_r(input('post.'));
        //print_r(request()->post());
        /**
         * 做下严格判定
         */
        if(!request()->isPost()) {
            $this->error('请求失败');
        }

        $data = input('post.');
        //dump($data);exit;
        //halt($data);
        //echo 12;exit;
        ///$data['status'] = 10;
        //debug('begin');
        $validate = validate('City');
        $data['name'] = htmlentities($data['name']);
        if(!$validate->scene('add')->check($data)) {
            $this->error($validate->getError());
        }
        if(!empty($data['id'])) {
            return $this->update($data);
        }
        //debug('end');
        //echo debug('begin', 'end','m');exit;

        // 把$data 提交model层
        $res = $this->obj->add($data);
        if($res) {
            $this->success('新增成功');
        }else {
            $this->error('新增失败');
        }
    }

    /**
     * 编辑页面
     */
    public function edit($id=0) {
        if(intval($id) < 1) {
            $this->error('参数不合法');
        }
        $city = $this->obj->get($id);
        $parent_city = $this->obj->getParentCity();
        return $this->fetch('', [
            'city'=> $city,
            'parent_city' => $parent_city,
        ]);
    }

    public function update($data) {
        $res =  $this->obj->save($data, ['id' => intval($data['id'])]);
        if($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

    // 排序逻辑
    public function listorder($id, $listorder) {
        $res = $this->obj->save(['listorder'=>$listorder], ['id'=>$id]);
        if($res) {
            $this->result($_SERVER['HTTP_REFERER'], 1, 'success');
        }else {
            $this->result($_SERVER['HTTP_REFERER'], 0, '更新失败');
        }
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
