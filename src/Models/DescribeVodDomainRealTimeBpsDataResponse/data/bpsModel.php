<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeBpsDataResponse\data;

use AlibabaCloud\Tea\Model;

class bpsModel extends Model {
    protected $_name = [
        'bps' => 'Bps',
        'timeStamp' => 'TimeStamp',
    ];
    public function validate() {
        Model::validateRequired('bps', $this->bps, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }
    public function toMap() {
        $res = [];
        $res['Bps'] = $this->bps;
        $res['TimeStamp'] = $this->timeStamp;
        return $res;
    }
    /**
     * @param array $map
     * @return bpsModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Bps'])){
            $model->bps = $map['Bps'];
        }
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        return $model;
    }
    /**
     * @description l1_bps
     * @var float
     */
    public $bps;

    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

}
