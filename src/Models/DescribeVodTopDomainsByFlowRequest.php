<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodTopDomainsByFlowRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'product' => 'Product',
        'limit' => 'Limit',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['Product'] = $this->product;
        $res['Limit'] = $this->limit;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodTopDomainsByFlowRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['Product'])){
            $model->product = $map['Product'];
        }
        if(isset($map['Limit'])){
            $model->limit = $map['Limit'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description product
     * @var string
     */
    public $product;

    /**
     * @description limit
     * @var integer
     */
    public $limit;

}
