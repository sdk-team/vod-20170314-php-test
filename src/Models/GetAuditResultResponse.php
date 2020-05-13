<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultResponse\AIAuditResult;

class GetAuditResultResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIAuditResult' => 'AIAuditResult',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIAuditResult', $this->AIAuditResult, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIAuditResult'] = null !== $this->AIAuditResult ? $this->AIAuditResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAuditResultResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIAuditResult'])){
            $model->AIAuditResult = AIAuditResult::fromMap($map['AIAuditResult']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.resultDTO
     * @var GetAuditResultResponse.AIAuditResult
     */
    public $AIAuditResult;

}
