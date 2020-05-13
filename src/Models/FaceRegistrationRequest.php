<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class FaceRegistrationRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'personName' => 'PersonName',
        'personId' => 'PersonId',
        'personLibrary' => 'PersonLibrary',
        'category' => 'Category',
        'imageIds' => 'ImageIds',
    ];
    public function validate() {
        Model::validateRequired('personName', $this->personName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['PersonName'] = $this->personName;
        $res['PersonId'] = $this->personId;
        $res['PersonLibrary'] = $this->personLibrary;
        $res['Category'] = $this->category;
        $res['ImageIds'] = $this->imageIds;
        return $res;
    }
    /**
     * @param array $map
     * @return FaceRegistrationRequest
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
        if(isset($map['PersonName'])){
            $model->personName = $map['PersonName'];
        }
        if(isset($map['PersonId'])){
            $model->personId = $map['PersonId'];
        }
        if(isset($map['PersonLibrary'])){
            $model->personLibrary = $map['PersonLibrary'];
        }
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['ImageIds'])){
            $model->imageIds = $map['ImageIds'];
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
     * @description personName
     * @var string
     */
    public $personName;

    /**
     * @description personId
     * @var string
     */
    public $personId;

    /**
     * @description personLibrary
     * @var string
     */
    public $personLibrary;

    /**
     * @description category
     * @var string
     */
    public $category;

    /**
     * @description imageIds
     * @var string
     */
    public $imageIds;

}
