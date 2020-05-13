<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCoverJobResponse\AIVideoCoverJob;

class SubmitAIVideoCoverJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoCoverJob' => 'AIVideoCoverJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoCoverJob', $this->AIVideoCoverJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoCoverJob'] = null !== $this->AIVideoCoverJob ? $this->AIVideoCoverJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIVideoCoverJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoCoverJob'])){
            $model->AIVideoCoverJob = AIVideoCoverJob::fromMap($map['AIVideoCoverJob']);
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
     * @var SubmitAIVideoCoverJobResponse.AIVideoCoverJob
     */
    public $AIVideoCoverJob;

}
