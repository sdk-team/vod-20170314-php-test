<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GenerateDownloadSecretKeyRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'appIdentification' => 'AppIdentification',
        'appDecryptKey' => 'AppDecryptKey',
    ];
    public function validate() {
        Model::validateRequired('appIdentification', $this->appIdentification, true);
        Model::validateRequired('appDecryptKey', $this->appDecryptKey, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['AppIdentification'] = $this->appIdentification;
        $res['AppDecryptKey'] = $this->appDecryptKey;
        return $res;
    }
    /**
     * @param array $map
     * @return GenerateDownloadSecretKeyRequest
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
        if(isset($map['AppIdentification'])){
            $model->appIdentification = $map['AppIdentification'];
        }
        if(isset($map['AppDecryptKey'])){
            $model->appDecryptKey = $map['AppDecryptKey'];
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
     * @description appIdentification
     * @var string
     */
    public $appIdentification;

    /**
     * @description appDecryptKey
     * @var string
     */
    public $appDecryptKey;

}
