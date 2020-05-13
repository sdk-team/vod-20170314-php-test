<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCategoryJobResponse\AIVideoCategoryJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCategoryJobResponse\nonExistAIVideoCategoryJobIds;

class ListAIVideoCategoryJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoCategoryJobList' => 'AIVideoCategoryJobList',
        'nonExistAIVideoCategoryJobIds' => 'NonExistAIVideoCategoryJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoCategoryJobList', $this->AIVideoCategoryJobList, true);
        Model::validateRequired('nonExistAIVideoCategoryJobIds', $this->nonExistAIVideoCategoryJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoCategoryJobList'] = null !== $this->AIVideoCategoryJobList ? $this->AIVideoCategoryJobList->toMap() : null;
        $res['NonExistAIVideoCategoryJobIds'] = null !== $this->nonExistAIVideoCategoryJobIds ? $this->nonExistAIVideoCategoryJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIVideoCategoryJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoCategoryJobList'])){
            $model->AIVideoCategoryJobList = AIVideoCategoryJobList::fromMap($map['AIVideoCategoryJobList']);
        }
        if(isset($map['NonExistAIVideoCategoryJobIds'])){
            $model->nonExistAIVideoCategoryJobIds = nonExistAIVideoCategoryJobIds::fromMap($map['NonExistAIVideoCategoryJobIds']);
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
     * @var ListAIVideoCategoryJobResponse.AIVideoCategoryJobList
     */
    public $AIVideoCategoryJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIVideoCategoryJobResponse.nonExistAIVideoCategoryJobIds
     */
    public $nonExistAIVideoCategoryJobIds;

}
