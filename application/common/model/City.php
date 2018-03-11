<?php

namespace app\Common\model;

use think\Model;

class City extends Model
{
    protected  $autoWriteTimestamp = true;
    public function add($data) {
        $data['status'] = 0;
        //$data['create_time'] = time();
        $result =  $this->save($data);
        //echo $this->getLastSql();exit;
        return $result;
    }

    //
    public function getCitysByParentId($parentId=0) {
        $data = [
            'status' => 0,
            'parent_id' => $parentId,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)
            ->order($order)
            ->select();
    }

    public function getAllCities() {
        $data = [
            'status' => 0,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)
            ->order($order)
            ->select();
    }


   public function getParentCity(){

        $data = [
            'status' => 0,
            'parent_id' => 0,
        ];

        return $this->where($data)
                    ->paginate(2);
   }

   public function getHotCitys(){

        $data = [
            'status' => 0,
            'parent_id' =>['gt',0],
        ];

        return $this->where($data)
                    ->select();
   }
}
