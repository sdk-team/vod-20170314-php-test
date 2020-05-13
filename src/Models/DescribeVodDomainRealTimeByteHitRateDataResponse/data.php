<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeByteHitRateDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeByteHitRateDataResponse\data\byteHitRateDataModel;

class data extends Model {
    protected $_name = [
        'byteHitRateDataModel' => 'ByteHitRateDataModel',
    ];
    public function validate() {
        Model::validateRequired('byteHitRateDataModel', $this->byteHitRateDataModel, true);
    }
    public function toMap() {
        $res = [];
        $res['ByteHitRateDataModel'] = [];
        if(null !== $this->byteHitRateDataModel && is_array($this->byteHitRateDataModel)){
            $n = 0;
            foreach($this->byteHitRateDataModel as $item){
                $res['ByteHitRateDataModel'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ByteHitRateDataModel'])){
            if(!empty($map['ByteHitRateDataModel'])){
                $model->byteHitRateDataModel = [];
                $n = 0;
                foreach($map['ByteHitRateDataModel'] as $item) {
                    $model->byteHitRateDataModel[$n++] = null !== $item ? byteHitRateDataModel::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ByteHitRateDataModel
     * @var array
     */
    public $byteHitRateDataModel;

}
