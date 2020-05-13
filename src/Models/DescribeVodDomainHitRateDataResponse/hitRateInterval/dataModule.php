<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHitRateDataResponse\hitRateInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model {
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
        'httpsValue' => 'HttpsValue',
    ];
    public function validate() {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('httpsValue', $this->httpsValue, true);
    }
    public function toMap() {
        $res = [];
        $res['TimeStamp'] = $this->timeStamp;
        $res['Value'] = $this->value;
        $res['HttpsValue'] = $this->httpsValue;
        return $res;
    }
    /**
     * @param array $map
     * @return dataModule
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['HttpsValue'])){
            $model->httpsValue = $map['HttpsValue'];
        }
        return $model;
    }
    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

    /**
     * @description l1_vod_all_all_all_byte_hit_rate
     * @var string
     */
    public $value;

    /**
     * @description l1_vod_all_all_https_byte_hit_rate
     * @var string
     */
    public $httpsValue;

}
