<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateWatermarkGroupRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'watermarkGroupId' => 'WatermarkGroupId',
        'watermarkGroupName' => 'WatermarkGroupName',
        'isDefault' => 'IsDefault',
    ];
    public function validate() {
        Model::validateRequired('watermarkGroupId', $this->watermarkGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['WatermarkGroupId'] = $this->watermarkGroupId;
        $res['WatermarkGroupName'] = $this->watermarkGroupName;
        $res['IsDefault'] = $this->isDefault;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateWatermarkGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['WatermarkGroupId'])){
            $model->watermarkGroupId = $map['WatermarkGroupId'];
        }
        if(isset($map['WatermarkGroupName'])){
            $model->watermarkGroupName = $map['WatermarkGroupName'];
        }
        if(isset($map['IsDefault'])){
            $model->isDefault = $map['IsDefault'];
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
     * @var string
     */
    public $ownerId;

    /**
     * @description resourceOwnerId
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description watermarkGroupId
     * @var string
     */
    public $watermarkGroupId;

    /**
     * @description watermarkGroupName
     * @var string
     */
    public $watermarkGroupName;

    /**
     * @description isDefault
     * @var bool
     */
    public $isDefault;

}
