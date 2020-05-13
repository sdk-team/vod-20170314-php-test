<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCoverJobResponse\AIVideoCoverJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCoverJobResponse\nonExistAIVideoCoverJobIds;

class ListAIVideoCoverJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoCoverJobList' => 'AIVideoCoverJobList',
        'nonExistAIVideoCoverJobIds' => 'NonExistAIVideoCoverJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoCoverJobList', $this->AIVideoCoverJobList, true);
        Model::validateRequired('nonExistAIVideoCoverJobIds', $this->nonExistAIVideoCoverJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoCoverJobList'] = null !== $this->AIVideoCoverJobList ? $this->AIVideoCoverJobList->toMap() : null;
        $res['NonExistAIVideoCoverJobIds'] = null !== $this->nonExistAIVideoCoverJobIds ? $this->nonExistAIVideoCoverJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIVideoCoverJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoCoverJobList'])){
            $model->AIVideoCoverJobList = AIVideoCoverJobList::fromMap($map['AIVideoCoverJobList']);
        }
        if(isset($map['NonExistAIVideoCoverJobIds'])){
            $model->nonExistAIVideoCoverJobIds = nonExistAIVideoCoverJobIds::fromMap($map['NonExistAIVideoCoverJobIds']);
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
     * @var ListAIVideoCoverJobResponse.AIVideoCoverJobList
     */
    public $AIVideoCoverJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIVideoCoverJobResponse.nonExistAIVideoCoverJobIds
     */
    public $nonExistAIVideoCoverJobIds;

}
