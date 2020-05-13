<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetMezzanineInfoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'videoId' => 'VideoId',
        'authTimeout' => 'AuthTimeout',
        'outputType' => 'OutputType',
        'additionType' => 'AdditionType',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['AuthTimeout'] = $this->authTimeout;
        $res['OutputType'] = $this->outputType;
        $res['AdditionType'] = $this->additionType;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMezzanineInfoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['AuthTimeout'])){
            $model->authTimeout = $map['AuthTimeout'];
        }
        if(isset($map['OutputType'])){
            $model->outputType = $map['OutputType'];
        }
        if(isset($map['AdditionType'])){
            $model->additionType = $map['AdditionType'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

    /**
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description authTimeout
     * @var integer
     */
    public $authTimeout;

    /**
     * @description outputType
     * @var string
     */
    public $outputType;

    /**
     * @description additionType
     * @var string
     */
    public $additionType;

}
