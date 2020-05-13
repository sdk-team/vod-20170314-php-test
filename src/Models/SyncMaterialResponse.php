<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SyncMaterialResponse\successVideoIds;
use AlibabaCloud\SDK\vod\V20170314\Models\SyncMaterialResponse\failedVideoIds;

class SyncMaterialResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'successVideoIds' => 'SuccessVideoIds',
        'failedVideoIds' => 'FailedVideoIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('successVideoIds', $this->successVideoIds, true);
        Model::validateRequired('failedVideoIds', $this->failedVideoIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SuccessVideoIds'] = null !== $this->successVideoIds ? $this->successVideoIds->toMap() : null;
        $res['FailedVideoIds'] = null !== $this->failedVideoIds ? $this->failedVideoIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SyncMaterialResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SuccessVideoIds'])){
            $model->successVideoIds = successVideoIds::fromMap($map['SuccessVideoIds']);
        }
        if(isset($map['FailedVideoIds'])){
            $model->failedVideoIds = failedVideoIds::fromMap($map['FailedVideoIds']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description successVideoIds
     * @var SyncMaterialResponse.successVideoIds
     */
    public $successVideoIds;

    /**
     * @description failedVideoIds
     * @var SyncMaterialResponse.failedVideoIds
     */
    public $failedVideoIds;

}
