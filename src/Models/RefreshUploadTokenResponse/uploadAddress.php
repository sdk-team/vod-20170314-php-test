<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadTokenResponse;

use AlibabaCloud\Tea\Model;

class uploadAddress extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'expiration' => 'Expiration',
        'securityToken' => 'SecurityToken',
    ];
    public function validate() {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('accessKeySecret', $this->accessKeySecret, true);
        Model::validateRequired('expiration', $this->expiration, true);
        Model::validateRequired('securityToken', $this->securityToken, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['AccessKeySecret'] = $this->accessKeySecret;
        $res['Expiration'] = $this->expiration;
        $res['SecurityToken'] = $this->securityToken;
        return $res;
    }
    /**
     * @param array $map
     * @return uploadAddress
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['AccessKeySecret'])){
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if(isset($map['Expiration'])){
            $model->expiration = $map['Expiration'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        return $model;
    }
    /**
     * @description accessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description accessKeySecret
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description expiration
     * @var string
     */
    public $expiration;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

}
