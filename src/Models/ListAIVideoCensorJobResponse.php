<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCensorJobResponse\AIVideoCensorJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCensorJobResponse\nonExistAIVideoCensorJobIds;

class ListAIVideoCensorJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoCensorJobList' => 'AIVideoCensorJobList',
        'nonExistAIVideoCensorJobIds' => 'NonExistAIVideoCensorJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoCensorJobList', $this->AIVideoCensorJobList, true);
        Model::validateRequired('nonExistAIVideoCensorJobIds', $this->nonExistAIVideoCensorJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoCensorJobList'] = null !== $this->AIVideoCensorJobList ? $this->AIVideoCensorJobList->toMap() : null;
        $res['NonExistAIVideoCensorJobIds'] = null !== $this->nonExistAIVideoCensorJobIds ? $this->nonExistAIVideoCensorJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIVideoCensorJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoCensorJobList'])){
            $model->AIVideoCensorJobList = AIVideoCensorJobList::fromMap($map['AIVideoCensorJobList']);
        }
        if(isset($map['NonExistAIVideoCensorJobIds'])){
            $model->nonExistAIVideoCensorJobIds = nonExistAIVideoCensorJobIds::fromMap($map['NonExistAIVideoCensorJobIds']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.jobDTOs
     * @var ListAIVideoCensorJobResponse.AIVideoCensorJobList
     */
    public $AIVideoCensorJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIVideoCensorJobResponse.nonExistAIVideoCensorJobIds
     */
    public $nonExistAIVideoCensorJobIds;

}
