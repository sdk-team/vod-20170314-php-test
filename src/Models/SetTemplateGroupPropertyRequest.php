<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SetTemplateGroupPropertyRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'groupId' => 'GroupId',
        'propertyName' => 'PropertyName',
        'propertyValue' => 'PropertyValue',
    ];
    public function validate() {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('propertyName', $this->propertyName, true);
        Model::validateRequired('propertyValue', $this->propertyValue, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['GroupId'] = $this->groupId;
        $res['PropertyName'] = $this->propertyName;
        $res['PropertyValue'] = $this->propertyValue;
        return $res;
    }
    /**
     * @param array $map
     * @return SetTemplateGroupPropertyRequest
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
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['PropertyName'])){
            $model->propertyName = $map['PropertyName'];
        }
        if(isset($map['PropertyValue'])){
            $model->propertyValue = $map['PropertyValue'];
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
     * @description groupId
     * @var string
     */
    public $groupId;

    /**
     * @description propertyName
     * @var string
     */
    public $propertyName;

    /**
     * @description propertyValue
     * @var string
     */
    public $propertyValue;

}
