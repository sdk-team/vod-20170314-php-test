<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIASRJobResponse\AIASRJob;

class SubmitAIASRJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIASRJob' => 'AIASRJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIASRJob', $this->AIASRJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIASRJob'] = null !== $this->AIASRJob ? $this->AIASRJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIASRJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIASRJob'])){
            $model->AIASRJob = AIASRJob::fromMap($map['AIASRJob']);
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
     * @var SubmitAIASRJobResponse.AIASRJob
     */
    public $AIASRJob;

}
