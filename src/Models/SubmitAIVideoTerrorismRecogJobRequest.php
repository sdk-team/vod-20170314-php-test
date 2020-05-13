<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIVideoTerrorismRecogJobRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'mediaId' => 'MediaId',
        'AIVideoTerrorismRecogConfig' => 'AIVideoTerrorismRecogConfig',
        'userData' => 'UserData',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['MediaId'] = $this->mediaId;
        $res['AIVideoTerrorismRecogConfig'] = $this->AIVideoTerrorismRecogConfig;
        $res['UserData'] = $this->userData;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIVideoTerrorismRecogJobRequest
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
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['AIVideoTerrorismRecogConfig'])){
            $model->AIVideoTerrorismRecogConfig = $map['AIVideoTerrorismRecogConfig'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
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
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description config
     * @var string
     */
    public $AIVideoTerrorismRecogConfig;

    /**
     * @description userData
     * @var string
     */
    public $userData;

}
