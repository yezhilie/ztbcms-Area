<?php

// +----------------------------------------------------------------------
// | Author: Jayin Ton <tonjayin@gmail.com>
// +----------------------------------------------------------------------

namespace Area\Model;


/**
 * 镇,街道级别,如如,佛山市南海区狮山镇
 *
 * @package Area\Model
 */
class StreetModel extends BaseModel{

    protected $tableName = 'area_street';

    public function getStreetsByDistrictId($id) {
        return $this->get($id, self::LEVEL_STREET);
    }

    public function getStreetById($id){
        $result = $this->where(['id' => $id])->find();
        return $result;
    }

}