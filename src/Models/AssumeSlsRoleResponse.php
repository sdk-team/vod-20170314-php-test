<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AssumeSlsRoleResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'slsAuthResult' => 'SlsAuthResult',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('slsAuthResult', $this->slsAuthResult, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SlsAuthResult'] = $this->slsAuthResult;
        return $res;
    }
    /**
     * @param array $map
     * @return AssumeSlsRoleResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SlsAuthResult'])){
            $model->slsAuthResult = $map['SlsAuthResult'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.slsAuthResult
     * @var string
     */
    public $slsAuthResult;

}
