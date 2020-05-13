<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AssumeOssRoleResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'ossAuthResult' => 'OssAuthResult',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ossAuthResult', $this->ossAuthResult, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['OssAuthResult'] = $this->ossAuthResult;
        return $res;
    }
    /**
     * @param array $map
     * @return AssumeOssRoleResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['OssAuthResult'])){
            $model->ossAuthResult = $map['OssAuthResult'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.ossAuthResult
     * @var string
     */
    public $ossAuthResult;

}
