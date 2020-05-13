<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkGroupResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkGroupResponse\watermarkGroupList\watermarkGroup;

class watermarkGroupList extends Model {
    protected $_name = [
        'watermarkGroup' => 'WatermarkGroup',
    ];
    public function validate() {
        Model::validateRequired('watermarkGroup', $this->watermarkGroup, true);
    }
    public function toMap() {
        $res = [];
        $res['WatermarkGroup'] = [];
        if(null !== $this->watermarkGroup && is_array($this->watermarkGroup)){
            $n = 0;
            foreach($this->watermarkGroup as $item){
                $res['WatermarkGroup'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return watermarkGroupList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['WatermarkGroup'])){
            if(!empty($map['WatermarkGroup'])){
                $model->watermarkGroup = [];
                $n = 0;
                foreach($map['WatermarkGroup'] as $item) {
                    $model->watermarkGroup[$n++] = null !== $item ? watermarkGroup::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description WatermarkGroup
     * @var array
     */
    public $watermarkGroup;

}
