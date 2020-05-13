<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetThirdPartPlayPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'policyInfo' => 'PolicyInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policyInfo', $this->policyInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PolicyInfo'] = $this->policyInfo;
        return $res;
    }
    /**
     * @param array $map
     * @return GetThirdPartPlayPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PolicyInfo'])){
            $model->policyInfo = $map['PolicyInfo'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.policyInfo
     * @var string
     */
    public $policyInfo;

}
