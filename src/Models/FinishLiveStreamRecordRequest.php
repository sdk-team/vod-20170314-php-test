<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class FinishLiveStreamRecordRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'customerId' => 'CustomerId',
        'streamName' => 'StreamName',
        'domainName' => 'DomainName',
        'appName' => 'AppName',
        'autoCompose' => 'AutoCompose',
        'transcodeGroupId' => 'TranscodeGroupId',
    ];
    public function validate() {
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CustomerId'] = $this->customerId;
        $res['StreamName'] = $this->streamName;
        $res['DomainName'] = $this->domainName;
        $res['AppName'] = $this->appName;
        $res['AutoCompose'] = $this->autoCompose;
        $res['TranscodeGroupId'] = $this->transcodeGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return FinishLiveStreamRecordRequest
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
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['StreamName'])){
            $model->streamName = $map['StreamName'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        if(isset($map['AutoCompose'])){
            $model->autoCompose = $map['AutoCompose'];
        }
        if(isset($map['TranscodeGroupId'])){
            $model->transcodeGroupId = $map['TranscodeGroupId'];
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
     * @description customerId
     * @var integer
     */
    public $customerId;

    /**
     * @description streamName
     * @var string
     */
    public $streamName;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description appName
     * @var string
     */
    public $appName;

    /**
     * @description autoCompose
     * @var string
     */
    public $autoCompose;

    /**
     * @description transcodeGroupId
     * @var string
     */
    public $transcodeGroupId;

}
