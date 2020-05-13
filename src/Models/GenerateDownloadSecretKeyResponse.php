<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GenerateDownloadSecretKeyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'appEncryptKey' => 'AppEncryptKey',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appEncryptKey', $this->appEncryptKey, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AppEncryptKey'] = $this->appEncryptKey;
        return $res;
    }
    /**
     * @param array $map
     * @return GenerateDownloadSecretKeyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AppEncryptKey'])){
            $model->appEncryptKey = $map['AppEncryptKey'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.appEncryptKey
     * @var string
     */
    public $appEncryptKey;

}
