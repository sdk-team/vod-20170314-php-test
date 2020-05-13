<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserVvByVideoidRequest extends Model {
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'ownerId' => 'OwnerId',
        'videoid' => 'Videoid',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
    ];
    public function validate() {
        Model::validateRequired('videoid', $this->videoid, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityToken'] = $this->securityToken;
        $res['OwnerId'] = $this->ownerId;
        $res['Videoid'] = $this->videoid;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeUserVvByVideoidRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['Videoid'])){
            $model->videoid = $map['Videoid'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        return $model;
    }
    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description videoid
     * @var string
     */
    public $videoid;

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

}
