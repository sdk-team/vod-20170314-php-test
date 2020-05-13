<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoSummaryJobResponse\AIVideoSummaryJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoSummaryJobResponse\nonExistAIVideoSummaryJobIds;

class ListAIVideoSummaryJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoSummaryJobList' => 'AIVideoSummaryJobList',
        'nonExistAIVideoSummaryJobIds' => 'NonExistAIVideoSummaryJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoSummaryJobList', $this->AIVideoSummaryJobList, true);
        Model::validateRequired('nonExistAIVideoSummaryJobIds', $this->nonExistAIVideoSummaryJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoSummaryJobList'] = null !== $this->AIVideoSummaryJobList ? $this->AIVideoSummaryJobList->toMap() : null;
        $res['NonExistAIVideoSummaryJobIds'] = null !== $this->nonExistAIVideoSummaryJobIds ? $this->nonExistAIVideoSummaryJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIVideoSummaryJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoSummaryJobList'])){
            $model->AIVideoSummaryJobList = AIVideoSummaryJobList::fromMap($map['AIVideoSummaryJobList']);
        }
        if(isset($map['NonExistAIVideoSummaryJobIds'])){
            $model->nonExistAIVideoSummaryJobIds = nonExistAIVideoSummaryJobIds::fromMap($map['NonExistAIVideoSummaryJobIds']);
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
     * @var ListAIVideoSummaryJobResponse.AIVideoSummaryJobList
     */
    public $AIVideoSummaryJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIVideoSummaryJobResponse.nonExistAIVideoSummaryJobIds
     */
    public $nonExistAIVideoSummaryJobIds;

}
