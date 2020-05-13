<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetCheckChannelResponse\audit;

class GetCheckChannelResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'audit' => 'Audit',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('audit', $this->audit, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Audit'] = null !== $this->audit ? $this->audit->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCheckChannelResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Audit'])){
            $model->audit = audit::fromMap($map['Audit']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.audit
     * @var GetCheckChannelResponse.audit
     */
    public $audit;

}
