<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCensorJobResponse\AIVideoCensorJob;

class SubmitAIVideoCensorJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoCensorJob' => 'AIVideoCensorJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoCensorJob', $this->AIVideoCensorJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoCensorJob'] = null !== $this->AIVideoCensorJob ? $this->AIVideoCensorJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIVideoCensorJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoCensorJob'])){
            $model->AIVideoCensorJob = AIVideoCensorJob::fromMap($map['AIVideoCensorJob']);
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
     * @var SubmitAIVideoCensorJobResponse.AIVideoCensorJob
     */
    public $AIVideoCensorJob;

}
