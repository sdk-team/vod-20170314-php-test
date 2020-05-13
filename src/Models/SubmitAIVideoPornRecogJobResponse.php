<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoPornRecogJobResponse\AIVideoPornRecogJob;

class SubmitAIVideoPornRecogJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoPornRecogJob' => 'AIVideoPornRecogJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoPornRecogJob', $this->AIVideoPornRecogJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoPornRecogJob'] = null !== $this->AIVideoPornRecogJob ? $this->AIVideoPornRecogJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIVideoPornRecogJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoPornRecogJob'])){
            $model->AIVideoPornRecogJob = AIVideoPornRecogJob::fromMap($map['AIVideoPornRecogJob']);
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
     * @var SubmitAIVideoPornRecogJobResponse.AIVideoPornRecogJob
     */
    public $AIVideoPornRecogJob;

}
