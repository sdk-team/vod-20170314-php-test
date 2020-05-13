<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class QueryUploadInfoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'customerId' => 'CustomerId',
        'transcodeGroupId' => 'TranscodeGroupId',
        'storageLocation' => 'StorageLocation',
        'liveRegionId' => 'LiveRegionId',
        'composeTranscodeGroupId' => 'ComposeTranscodeGroupId',
    ];
    public function validate() {
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('transcodeGroupId', $this->transcodeGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CustomerId'] = $this->customerId;
        $res['TranscodeGroupId'] = $this->transcodeGroupId;
        $res['StorageLocation'] = $this->storageLocation;
        $res['LiveRegionId'] = $this->liveRegionId;
        $res['ComposeTranscodeGroupId'] = $this->composeTranscodeGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryUploadInfoRequest
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
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['TranscodeGroupId'])){
            $model->transcodeGroupId = $map['TranscodeGroupId'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['LiveRegionId'])){
            $model->liveRegionId = $map['LiveRegionId'];
        }
        if(isset($map['ComposeTranscodeGroupId'])){
            $model->composeTranscodeGroupId = $map['ComposeTranscodeGroupId'];
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
     * @description customerId
     * @var integer
     */
    public $customerId;

    /**
     * @description transcodeGroupId
     * @var string
     */
    public $transcodeGroupId;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description liveRegionId
     * @var string
     */
    public $liveRegionId;

    /**
     * @description composeTranscodeGroupId
     * @var string
     */
    public $composeTranscodeGroupId;

}
