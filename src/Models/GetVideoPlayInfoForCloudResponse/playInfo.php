<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayInfoForCloudResponse;

use AlibabaCloud\Tea\Model;

class playInfo extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'authInfo' => 'AuthInfo',
        'securityToken' => 'SecurityToken',
        'region' => 'Region',
        'playDomain' => 'PlayDomain',
    ];
    public function validate() {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('accessKeySecret', $this->accessKeySecret, true);
        Model::validateRequired('authInfo', $this->authInfo, true);
        Model::validateRequired('securityToken', $this->securityToken, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('playDomain', $this->playDomain, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['AccessKeySecret'] = $this->accessKeySecret;
        $res['AuthInfo'] = $this->authInfo;
        $res['SecurityToken'] = $this->securityToken;
        $res['Region'] = $this->region;
        $res['PlayDomain'] = $this->playDomain;
        return $res;
    }
    /**
     * @param array $map
     * @return playInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['AccessKeySecret'])){
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if(isset($map['AuthInfo'])){
            $model->authInfo = $map['AuthInfo'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['PlayDomain'])){
            $model->playDomain = $map['PlayDomain'];
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
     * @description authInfo
     * @var string
     */
    public $authInfo;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description playDomain
     * @var string
     */
    public $playDomain;

}
