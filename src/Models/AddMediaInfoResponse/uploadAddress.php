<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\AddMediaInfoResponse;

use AlibabaCloud\Tea\Model;

class uploadAddress extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucket' => 'Bucket',
        'endPoint' => 'EndPoint',
        'expiration' => 'Expiration',
        'fileName' => 'FileName',
        'securityToken' => 'SecurityToken',
    ];
    public function validate() {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('accessKeySecret', $this->accessKeySecret, true);
        Model::validateRequired('bucket', $this->bucket, true);
        Model::validateRequired('endPoint', $this->endPoint, true);
        Model::validateRequired('expiration', $this->expiration, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('securityToken', $this->securityToken, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['AccessKeySecret'] = $this->accessKeySecret;
        $res['Bucket'] = $this->bucket;
        $res['EndPoint'] = $this->endPoint;
        $res['Expiration'] = $this->expiration;
        $res['FileName'] = $this->fileName;
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
        if(isset($map['Bucket'])){
            $model->bucket = $map['Bucket'];
        }
        if(isset($map['EndPoint'])){
            $model->endPoint = $map['EndPoint'];
        }
        if(isset($map['Expiration'])){
            $model->expiration = $map['Expiration'];
        }
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
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
     * @description bucket
     * @var string
     */
    public $bucket;

    /**
     * @description endpoint
     * @var string
     */
    public $endPoint;

    /**
     * @description expiration
     * @var string
     */
    public $expiration;

    /**
     * @description fileName
     * @var string
     */
    public $fileName;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

}
