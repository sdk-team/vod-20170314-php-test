<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeQpsDataResponse\data;

use AlibabaCloud\Tea\Model;

class qpsModel extends Model {
    protected $_name = [
        'qps' => 'Qps',
        'timeStamp' => 'TimeStamp',
    ];
    public function validate() {
        Model::validateRequired('qps', $this->qps, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }
    public function toMap() {
        $res = [];
        $res['Qps'] = $this->qps;
        $res['TimeStamp'] = $this->timeStamp;
        return $res;
    }
    /**
     * @param array $map
     * @return qpsModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Qps'])){
            $model->qps = $map['Qps'];
        }
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        return $model;
    }
    /**
     * @description l1_qps
     * @var float
     */
    public $qps;

    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

}
