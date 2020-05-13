<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DisplayAIAuditSwitchResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'isDisplay' => 'IsDisplay',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isDisplay', $this->isDisplay, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['IsDisplay'] = $this->isDisplay;
        return $res;
    }
    /**
     * @param array $map
     * @return DisplayAIAuditSwitchResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['IsDisplay'])){
            $model->isDisplay = $map['IsDisplay'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.isDisplay
     * @var bool
     */
    public $isDisplay;

}
