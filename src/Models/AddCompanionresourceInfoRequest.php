<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddCompanionresourceInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'mediaFileId' => 'MediaFileId',
        'companionResourceType' => 'CompanionResourceType',
        'companionResourceConfig' => 'CompanionResourceConfig',
        'resourceName' => 'ResourceName',
        'resourceTags' => 'ResourceTags',
    ];
    public function validate() {
        Model::validateRequired('mediaFileId', $this->mediaFileId, true);
        Model::validateRequired('companionResourceType', $this->companionResourceType, true);
        Model::validateRequired('companionResourceConfig', $this->companionResourceConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['MediaFileId'] = $this->mediaFileId;
        $res['CompanionResourceType'] = $this->companionResourceType;
        $res['CompanionResourceConfig'] = $this->companionResourceConfig;
        $res['ResourceName'] = $this->resourceName;
        $res['ResourceTags'] = $this->resourceTags;
        return $res;
    }
    /**
     * @param array $map
     * @return AddCompanionresourceInfoRequest
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
        if(isset($map['MediaFileId'])){
            $model->mediaFileId = $map['MediaFileId'];
        }
        if(isset($map['CompanionResourceType'])){
            $model->companionResourceType = $map['CompanionResourceType'];
        }
        if(isset($map['CompanionResourceConfig'])){
            $model->companionResourceConfig = $map['CompanionResourceConfig'];
        }
        if(isset($map['ResourceName'])){
            $model->resourceName = $map['ResourceName'];
        }
        if(isset($map['ResourceTags'])){
            $model->resourceTags = $map['ResourceTags'];
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
     * @description mediaFileId
     * @var string
     */
    public $mediaFileId;

    /**
     * @description companionResourceType
     * @var string
     */
    public $companionResourceType;

    /**
     * @description companionResourceConfig
     * @var string
     */
    public $companionResourceConfig;

    /**
     * @description resourceName
     * @var string
     */
    public $resourceName;

    /**
     * @description resourceTags
     * @var string
     */
    public $resourceTags;

}
