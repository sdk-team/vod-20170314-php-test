<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\CheckVideoResponse\failedList;

class CheckVideoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'failedList' => 'FailedList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('failedList', $this->failedList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['FailedList'] = null !== $this->failedList ? $this->failedList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CheckVideoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['FailedList'])){
            $model->failedList = failedList::fromMap($map['FailedList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description checkFailed
     * @var CheckVideoResponse.failedList
     */
    public $failedList;

}
