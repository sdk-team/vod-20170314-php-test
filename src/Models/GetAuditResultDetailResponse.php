<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultDetailResponse\AIAuditResultDetail;

class GetAuditResultDetailResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIAuditResultDetail' => 'AIAuditResultDetail',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIAuditResultDetail', $this->AIAuditResultDetail, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIAuditResultDetail'] = null !== $this->AIAuditResultDetail ? $this->AIAuditResultDetail->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAuditResultDetailResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIAuditResultDetail'])){
            $model->AIAuditResultDetail = AIAuditResultDetail::fromMap($map['AIAuditResultDetail']);
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
     * @var GetAuditResultDetailResponse.AIAuditResultDetail
     */
    public $AIAuditResultDetail;

}
