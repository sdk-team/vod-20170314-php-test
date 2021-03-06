<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIJobResponse\AIJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIJobResponse\nonExistAIJobIds;

class ListAIJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIJobList' => 'AIJobList',
        'nonExistAIJobIds' => 'NonExistAIJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIJobList', $this->AIJobList, true);
        Model::validateRequired('nonExistAIJobIds', $this->nonExistAIJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toMap() : null;
        $res['NonExistAIJobIds'] = null !== $this->nonExistAIJobIds ? $this->nonExistAIJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIJobList'])){
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }
        if(isset($map['NonExistAIJobIds'])){
            $model->nonExistAIJobIds = nonExistAIJobIds::fromMap($map['NonExistAIJobIds']);
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
     * @var ListAIJobResponse.AIJobList
     */
    public $AIJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIJobResponse.nonExistAIJobIds
     */
    public $nonExistAIJobIds;

}
