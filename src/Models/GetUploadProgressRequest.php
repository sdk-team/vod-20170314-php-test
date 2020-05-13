<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetUploadProgressRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'source' => 'Source',
        'clientId' => 'ClientId',
        'businessType' => 'BusinessType',
        'terminalType' => 'TerminalType',
        'deviceModel' => 'DeviceModel',
        'appVersion' => 'AppVersion',
        'authTimestamp' => 'AuthTimestamp',
        'authInfo' => 'AuthInfo',
        'uploadInfoList' => 'UploadInfoList',
        'userId' => 'UserId',
        'uploadAddress' => 'UploadAddress',
    ];
    public function validate() {
        Model::validateRequired('authTimestamp', $this->authTimestamp, true);
        Model::validateRequired('authInfo', $this->authInfo, true);
        Model::validateRequired('uploadInfoList', $this->uploadInfoList, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Source'] = $this->source;
        $res['ClientId'] = $this->clientId;
        $res['BusinessType'] = $this->businessType;
        $res['TerminalType'] = $this->terminalType;
        $res['DeviceModel'] = $this->deviceModel;
        $res['AppVersion'] = $this->appVersion;
        $res['AuthTimestamp'] = $this->authTimestamp;
        $res['AuthInfo'] = $this->authInfo;
        $res['UploadInfoList'] = $this->uploadInfoList;
        $res['UserId'] = $this->userId;
        $res['UploadAddress'] = $this->uploadAddress;
        return $res;
    }
    /**
     * @param array $map
     * @return GetUploadProgressRequest
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
        if(isset($map['Source'])){
            $model->source = $map['Source'];
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
        if(isset($map['UploadInfoList'])){
            $model->uploadInfoList = $map['UploadInfoList'];
        }
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['UploadAddress'])){
            $model->uploadAddress = $map['UploadAddress'];
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
     * @description source
     * @var string
     */
    public $source;

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

    /**
     * @description uploadInfoList
     * @var string
     */
    public $uploadInfoList;

    /**
     * @description userId
     * @var integer
     */
    public $userId;

    /**
     * @description uploadAddress
     * @var string
     */
    public $uploadAddress;

}
