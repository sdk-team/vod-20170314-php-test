<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainPvDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainPvDataResponse\pvDataInterval\pvDataInterval;

class pvDataInterval extends Model {
    protected $_name = [
        'pvDataInterval' => 'PvDataInterval',
    ];
    public function validate() {
        Model::validateRequired('pvDataInterval', $this->pvDataInterval, true);
    }
    public function toMap() {
        $res = [];
        $res['PvDataInterval'] = [];
        if(null !== $this->pvDataInterval && is_array($this->pvDataInterval)){
            $n = 0;
            foreach($this->pvDataInterval as $item){
                $res['PvDataInterval'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return pvDataInterval
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PvDataInterval'])){
            if(!empty($map['PvDataInterval'])){
                $model->pvDataInterval = [];
                $n = 0;
                foreach($map['PvDataInterval'] as $item) {
                    $model->pvDataInterval[$n++] = null !== $item ? pvDataInterval::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PvDataInterval
     * @var array
     */
    public $pvDataInterval;

}
