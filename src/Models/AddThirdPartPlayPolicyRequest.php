<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddThirdPartPlayPolicyRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'policyInfoList' => 'PolicyInfoList',
        'source' => 'Source',
        'authTimestamp' => 'AuthTimestamp',
        'authInfo' => 'AuthInfo',
    ];
    public function validate() {
        Model::validateRequired('policyInfoList', $this->policyInfoList, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('authTimestamp', $this->authTimestamp, true);
        Model::validateRequired('authInfo', $this->authInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['PolicyInfoList'] = $this->policyInfoList;
        $res['Source'] = $this->source;
        $res['AuthTimestamp'] = $this->authTimestamp;
        $res['AuthInfo'] = $this->authInfo;
        return $res;
    }
    /**
     * @param array $map
     * @return AddThirdPartPlayPolicyRequest
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
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if(isset($map['PolicyInfoList'])){
            $model->policyInfoList = $map['PolicyInfoList'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
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
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

    /**
     * @description policyInfoList
     * @var string
     */
    public $policyInfoList;

    /**
     * @description source
     * @var string
     */
    public $source;

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
