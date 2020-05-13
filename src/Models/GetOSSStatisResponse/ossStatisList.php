<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetOSSStatisResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetOSSStatisResponse\ossStatisList\OSSMetric;

class ossStatisList extends Model {
    protected $_name = [
        'OSSMetric' => 'OSSMetric',
    ];
    public function validate() {
        Model::validateRequired('OSSMetric', $this->OSSMetric, true);
    }
    public function toMap() {
        $res = [];
        $res['OSSMetric'] = [];
        if(null !== $this->OSSMetric && is_array($this->OSSMetric)){
            $n = 0;
            foreach($this->OSSMetric as $item){
                $res['OSSMetric'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ossStatisList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OSSMetric'])){
            if(!empty($map['OSSMetric'])){
                $model->OSSMetric = [];
                $n = 0;
                foreach($map['OSSMetric'] as $item) {
                    $model->OSSMetric[$n++] = null !== $item ? OSSMetric::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description OSSMetric
     * @var array
     */
    public $OSSMetric;

}
