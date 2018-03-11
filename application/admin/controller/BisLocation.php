<?php
namespace app\admin\controller;
use think\Controller;
class BisLocation extends Base
{
    private  $obj;
    public function _initialize() {
        $this->obj = model("BisLocation");
    }
    /**
     * 正常的商户列表
     * @return mixed
     */
    public function index() {
        $locations = $this->obj->getLocations(1);
        return $this->fetch('', [
            'locations' => $locations,
        ]);
    }
    /**
     * 入驻申请列表
     * @return mixed
     */
    public function apply() {
        $locations = $this->obj->getLocations(0);
        return $this->fetch('', [
           'locations' => $locations,
        ]);
    }

    public function detail() {
        $id = input('get.id');
        if(empty($id)) {
            return $this->error('ID错误');
        }
        //获取一级城市的数据
        $citys = model('City')->getCitysByParentId();
        //获取一级栏目的数据
        $categorys = model('Category')->getNormalCategoryByParentId();
        // 获取门店数据
        $locationData = $this->obj->get(['id'=>$id]);
        return $this->fetch('',[
            'citys'=>$citys, 
            'categorys'=>$categorys, 
            'locationData' => $locationData,
        ]);
    }

}
