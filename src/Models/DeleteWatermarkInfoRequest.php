<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DeleteWatermarkInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'watermarkIds' => 'WatermarkIds',
        'delEmptyGroup' => 'DelEmptyGroup',
    ];
    public function validate() {
        Model::validateRequired('watermarkIds', $this->watermarkIds, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['WatermarkIds'] = $this->watermarkIds;
        $res['DelEmptyGroup'] = $this->delEmptyGroup;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteWatermarkInfoRequest
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
        if(isset($map['WatermarkIds'])){
            $model->watermarkIds = $map['WatermarkIds'];
        }
        if(isset($map['DelEmptyGroup'])){
            $model->delEmptyGroup = $map['DelEmptyGroup'];
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
     * @description watermarkIds
     * @var string
     */
    public $watermarkIds;

    /**
     * @description delEmptyGroup
     * @var string
     */
    public $delEmptyGroup;

}
