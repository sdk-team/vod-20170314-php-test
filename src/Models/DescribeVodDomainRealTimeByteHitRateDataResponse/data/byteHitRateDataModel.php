<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeByteHitRateDataResponse\data;

use AlibabaCloud\Tea\Model;

class byteHitRateDataModel extends Model {
    protected $_name = [
        'byteHitRate' => 'ByteHitRate',
        'timeStamp' => 'TimeStamp',
    ];
    public function validate() {
        Model::validateRequired('byteHitRate', $this->byteHitRate, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }
    public function toMap() {
        $res = [];
        $res['ByteHitRate'] = $this->byteHitRate;
        $res['TimeStamp'] = $this->timeStamp;
        return $res;
    }
    /**
     * @param array $map
     * @return byteHitRateDataModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ByteHitRate'])){
            $model->byteHitRate = $map['ByteHitRate'];
        }
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        return $model;
    }
    /**
     * @description byte_hit_rate
     * @var float
     */
    public $byteHitRate;

    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

}
