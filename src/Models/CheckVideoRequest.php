<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class CheckVideoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'videoIds' => 'VideoIds',
        'checkStatus' => 'CheckStatus',
        'checkReason' => 'CheckReason',
    ];
    public function validate() {
        Model::validateRequired('videoIds', $this->videoIds, true);
        Model::validateRequired('checkStatus', $this->checkStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VideoIds'] = $this->videoIds;
        $res['CheckStatus'] = $this->checkStatus;
        $res['CheckReason'] = $this->checkReason;
        return $res;
    }
    /**
     * @param array $map
     * @return CheckVideoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['VideoIds'])){
            $model->videoIds = $map['VideoIds'];
        }
        if(isset($map['CheckStatus'])){
            $model->checkStatus = $map['CheckStatus'];
        }
        if(isset($map['CheckReason'])){
            $model->checkReason = $map['CheckReason'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

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
     * @description mediaIds
     * @var string
     */
    public $videoIds;

    /**
     * @description checkState
     * @var string
     */
    public $checkStatus;

    /**
     * @description checkReason
     * @var string
     */
    public $checkReason;

}
