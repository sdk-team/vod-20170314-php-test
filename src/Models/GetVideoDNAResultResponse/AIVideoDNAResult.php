<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetVideoDNAResultResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoDNAResultResponse\AIVideoDNAResult\fpShots;

class AIVideoDNAResult extends Model {
    protected $_name = [
        'fpShots' => 'FpShots',
    ];
    public function validate() {
        Model::validateRequired('fpShots', $this->fpShots, true);
    }
    public function toMap() {
        $res = [];
        $res['FpShots'] = [];
        if(null !== $this->fpShots && is_array($this->fpShots)){
            $n = 0;
            foreach($this->fpShots as $item){
                $res['FpShots'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIVideoDNAResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FpShots'])){
            if(!empty($map['FpShots'])){
                $model->fpShots = [];
                $n = 0;
                foreach($map['FpShots'] as $item) {
                    $model->fpShots[$n++] = null !== $item ? fpShots::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description fpShots
     * @var array
     */
    public $fpShots;

}
