<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisResponse\CDNStatisList\CDNMetric;

class CDNStatisList extends Model {
    protected $_name = [
        'CDNMetric' => 'CDNMetric',
    ];
    public function validate() {
        Model::validateRequired('CDNMetric', $this->CDNMetric, true);
    }
    public function toMap() {
        $res = [];
        $res['CDNMetric'] = [];
        if(null !== $this->CDNMetric && is_array($this->CDNMetric)){
            $n = 0;
            foreach($this->CDNMetric as $item){
                $res['CDNMetric'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CDNStatisList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CDNMetric'])){
            if(!empty($map['CDNMetric'])){
                $model->CDNMetric = [];
                $n = 0;
                foreach($map['CDNMetric'] as $item) {
                    $model->CDNMetric[$n++] = null !== $item ? CDNMetric::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description CDNMetric
     * @var array
     */
    public $CDNMetric;

}
