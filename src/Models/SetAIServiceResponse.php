<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SetAIServiceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'successTypes' => 'SuccessTypes',
        'failedTypes' => 'FailedTypes',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('successTypes', $this->successTypes, true);
        Model::validateRequired('failedTypes', $this->failedTypes, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SuccessTypes'] = $this->successTypes;
        $res['FailedTypes'] = $this->failedTypes;
        return $res;
    }
    /**
     * @param array $map
     * @return SetAIServiceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SuccessTypes'])){
            $model->successTypes = $map['SuccessTypes'];
        }
        if(isset($map['FailedTypes'])){
            $model->failedTypes = $map['FailedTypes'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.successTypes
     * @var string
     */
    public $successTypes;

    /**
     * @description data.failedTypes
     * @var string
     */
    public $failedTypes;

}
