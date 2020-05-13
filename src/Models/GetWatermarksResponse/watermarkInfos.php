<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksResponse\watermarkInfos\watermarkInfo;

class watermarkInfos extends Model {
    protected $_name = [
        'watermarkInfo' => 'WatermarkInfo',
    ];
    public function validate() {
        Model::validateRequired('watermarkInfo', $this->watermarkInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['WatermarkInfo'] = [];
        if(null !== $this->watermarkInfo && is_array($this->watermarkInfo)){
            $n = 0;
            foreach($this->watermarkInfo as $item){
                $res['WatermarkInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return watermarkInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['WatermarkInfo'])){
            if(!empty($map['WatermarkInfo'])){
                $model->watermarkInfo = [];
                $n = 0;
                foreach($map['WatermarkInfo'] as $item) {
                    $model->watermarkInfo[$n++] = null !== $item ? watermarkInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description WatermarkInfo
     * @var array
     */
    public $watermarkInfo;

}
