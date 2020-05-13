<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeReqHitRateDataResponse\data;

use AlibabaCloud\Tea\Model;

class reqHitRateDataModel extends Model {
    protected $_name = [
        'reqHitRate' => 'ReqHitRate',
        'timeStamp' => 'TimeStamp',
    ];
    public function validate() {
        Model::validateRequired('reqHitRate', $this->reqHitRate, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }
    public function toMap() {
        $res = [];
        $res['ReqHitRate'] = $this->reqHitRate;
        $res['TimeStamp'] = $this->timeStamp;
        return $res;
    }
    /**
     * @param array $map
     * @return reqHitRateDataModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ReqHitRate'])){
            $model->reqHitRate = $map['ReqHitRate'];
        }
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        return $model;
    }
    /**
     * @description req_hit_rate
     * @var float
     */
    public $reqHitRate;

    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

}
