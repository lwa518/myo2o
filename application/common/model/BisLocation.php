<?php
namespace app\common\model;

use think\Model;

class BisLocation extends BaseModel
{

    public function getNormalLocationByBisId($bisId) {
        $data = [
            'bis_id' => $bisId,
            'status' => 1,
        ];

        $result = $this->where($data)
            ->order('id', 'desc')
            ->select();
        return $result;
    }

    public function getNormalLocationsInId($ids) {
        $data = [
            'id' => ['in', $ids],
            'status' => 1,
        ];
        return $this->where($data)
            ->select();
    }
    
     public function getLocations($status=1) {
        $data = [
            'is_main' => 0,
            'status' => $status,
        ];
        return $this->where($data)
            ->select();
    }

}