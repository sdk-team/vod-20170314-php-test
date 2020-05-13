<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoTerrorismRecogJobResponse\AIVideoTerrorismRecogJob;

class SubmitAIVideoTerrorismRecogJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoTerrorismRecogJob' => 'AIVideoTerrorismRecogJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoTerrorismRecogJob', $this->AIVideoTerrorismRecogJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoTerrorismRecogJob'] = null !== $this->AIVideoTerrorismRecogJob ? $this->AIVideoTerrorismRecogJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIVideoTerrorismRecogJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoTerrorismRecogJob'])){
            $model->AIVideoTerrorismRecogJob = AIVideoTerrorismRecogJob::fromMap($map['AIVideoTerrorismRecogJob']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.jobDTO
     * @var SubmitAIVideoTerrorismRecogJobResponse.AIVideoTerrorismRecogJob
     */
    public $AIVideoTerrorismRecogJob;

}
