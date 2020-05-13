<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainPvDataResponse\pvDataInterval;

use AlibabaCloud\Tea\Model;

class pvDataInterval extends Model {
    protected $_name = [
        'value' => 'Value',
        'timeStamp' => 'TimeStamp',
    ];
    public function validate() {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }
    public function toMap() {
        $res = [];
        $res['Value'] = $this->value;
        $res['TimeStamp'] = $this->timeStamp;
        return $res;
    }
    /**
     * @param array $map
     * @return pvDataInterval
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        return $model;
    }
    /**
     * @description pv
     * @var string
     */
    public $value;

    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

}
