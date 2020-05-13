<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIASRJobResponse\AIASRJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIASRJobResponse\nonExistAIASRJobIds;

class ListAIASRJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIASRJobList' => 'AIASRJobList',
        'nonExistAIASRJobIds' => 'NonExistAIASRJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIASRJobList', $this->AIASRJobList, true);
        Model::validateRequired('nonExistAIASRJobIds', $this->nonExistAIASRJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIASRJobList'] = null !== $this->AIASRJobList ? $this->AIASRJobList->toMap() : null;
        $res['NonExistAIASRJobIds'] = null !== $this->nonExistAIASRJobIds ? $this->nonExistAIASRJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIASRJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIASRJobList'])){
            $model->AIASRJobList = AIASRJobList::fromMap($map['AIASRJobList']);
        }
        if(isset($map['NonExistAIASRJobIds'])){
            $model->nonExistAIASRJobIds = nonExistAIASRJobIds::fromMap($map['NonExistAIASRJobIds']);
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
     * @var ListAIASRJobResponse.AIASRJobList
     */
    public $AIASRJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIASRJobResponse.nonExistAIASRJobIds
     */
    public $nonExistAIASRJobIds;

}
