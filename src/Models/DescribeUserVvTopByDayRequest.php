<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserVvTopByDayRequest extends Model {
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'ownerId' => 'OwnerId',
        'videoType' => 'VideoType',
        'bizdate' => 'Bizdate',
    ];
    public function validate() {
        Model::validateRequired('videoType', $this->videoType, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityToken'] = $this->securityToken;
        $res['OwnerId'] = $this->ownerId;
        $res['VideoType'] = $this->videoType;
        $res['Bizdate'] = $this->bizdate;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeUserVvTopByDayRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['VideoType'])){
            $model->videoType = $map['VideoType'];
        }
        if(isset($map['Bizdate'])){
            $model->bizdate = $map['Bizdate'];
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
     * @description videoType
     * @var string
     */
    public $videoType;

    /**
     * @description bizdate
     * @var string
     */
    public $bizdate;

}
