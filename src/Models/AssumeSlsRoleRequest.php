<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AssumeSlsRoleRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientId' => 'ClientId',
        'businessType' => 'BusinessType',
        'terminalType' => 'TerminalType',
        'deviceModel' => 'DeviceModel',
        'appVersion' => 'AppVersion',
        'authTimestamp' => 'AuthTimestamp',
        'authInfo' => 'AuthInfo',
    ];
    public function validate() {
        Model::validateRequired('clientId', $this->clientId, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('terminalType', $this->terminalType, true);
        Model::validateRequired('deviceModel', $this->deviceModel, true);
        Model::validateRequired('appVersion', $this->appVersion, true);
        Model::validateRequired('authTimestamp', $this->authTimestamp, true);
        Model::validateRequired('authInfo', $this->authInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientId'] = $this->clientId;
        $res['BusinessType'] = $this->businessType;
        $res['TerminalType'] = $this->terminalType;
        $res['DeviceModel'] = $this->deviceModel;
        $res['AppVersion'] = $this->appVersion;
        $res['AuthTimestamp'] = $this->authTimestamp;
        $res['AuthInfo'] = $this->authInfo;
        return $res;
    }
    /**
     * @param array $map
     * @return AssumeSlsRoleRequest
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
        if(isset($map['ClientId'])){
            $model->clientId = $map['ClientId'];
        }
        if(isset($map['BusinessType'])){
            $model->businessType = $map['BusinessType'];
        }
        if(isset($map['TerminalType'])){
            $model->terminalType = $map['TerminalType'];
        }
        if(isset($map['DeviceModel'])){
            $model->deviceModel = $map['DeviceModel'];
        }
        if(isset($map['AppVersion'])){
            $model->appVersion = $map['AppVersion'];
        }
        if(isset($map['AuthTimestamp'])){
            $model->authTimestamp = $map['AuthTimestamp'];
        }
        if(isset($map['AuthInfo'])){
            $model->authInfo = $map['AuthInfo'];
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
     * @description clientId
     * @var string
     */
    public $clientId;

    /**
     * @description businessType
     * @var string
     */
    public $businessType;

    /**
     * @description terminalType
     * @var string
     */
    public $terminalType;

    /**
     * @description deviceModel
     * @var string
     */
    public $deviceModel;

    /**
     * @description appVersion
     * @var string
     */
    public $appVersion;

    /**
     * @description authTimestamp
     * @var integer
     */
    public $authTimestamp;

    /**
     * @description authInfo
     * @var string
     */
    public $authInfo;

}
