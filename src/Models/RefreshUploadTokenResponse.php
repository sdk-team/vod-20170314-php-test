<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadTokenResponse\uploadAddress;

class RefreshUploadTokenResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadKey' => 'UploadKey',
        'uploadAddress' => 'UploadAddress',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('uploadKey', $this->uploadKey, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UploadKey'] = $this->uploadKey;
        $res['UploadAddress'] = null !== $this->uploadAddress ? $this->uploadAddress->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return RefreshUploadTokenResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UploadKey'])){
            $model->uploadKey = $map['UploadKey'];
        }
        if(isset($map['UploadAddress'])){
            $model->uploadAddress = uploadAddress::fromMap($map['UploadAddress']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.uploadKey
     * @var string
     */
    public $uploadKey;

    /**
     * @description data.uploadAddressDO
     * @var RefreshUploadTokenResponse.uploadAddress
     */
    public $uploadAddress;

}
