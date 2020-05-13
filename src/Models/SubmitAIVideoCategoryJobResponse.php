<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCategoryJobResponse\AIVideoCategoryJob;

class SubmitAIVideoCategoryJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoCategoryJob' => 'AIVideoCategoryJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoCategoryJob', $this->AIVideoCategoryJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoCategoryJob'] = null !== $this->AIVideoCategoryJob ? $this->AIVideoCategoryJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIVideoCategoryJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoCategoryJob'])){
            $model->AIVideoCategoryJob = AIVideoCategoryJob::fromMap($map['AIVideoCategoryJob']);
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
     * @var SubmitAIVideoCategoryJobResponse.AIVideoCategoryJob
     */
    public $AIVideoCategoryJob;

}
