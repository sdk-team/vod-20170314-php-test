<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateSpecifyCustomerTemplateConfigRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'transcodeIds' => 'TranscodeIds',
        'encryptTemplateIds' => 'EncryptTemplateIds',
        'customerId' => 'CustomerId',
    ];
    public function validate() {
        Model::validateRequired('transcodeIds', $this->transcodeIds, true);
        Model::validateRequired('customerId', $this->customerId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['TranscodeIds'] = $this->transcodeIds;
        $res['EncryptTemplateIds'] = $this->encryptTemplateIds;
        $res['CustomerId'] = $this->customerId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateSpecifyCustomerTemplateConfigRequest
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
        if(isset($map['TranscodeIds'])){
            $model->transcodeIds = $map['TranscodeIds'];
        }
        if(isset($map['EncryptTemplateIds'])){
            $model->encryptTemplateIds = $map['EncryptTemplateIds'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
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
     * @description transcodeIds
     * @var string
     */
    public $transcodeIds;

    /**
     * @description encryptIds
     * @var string
     */
    public $encryptTemplateIds;

    /**
     * @description customerId
     * @var string
     */
    public $customerId;

}
