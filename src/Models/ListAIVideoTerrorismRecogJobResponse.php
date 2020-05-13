<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoTerrorismRecogJobResponse\AIVideoTerrorismRecogJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoTerrorismRecogJobResponse\nonExistTerrorismRecogJobIds;

class ListAIVideoTerrorismRecogJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoTerrorismRecogJobList' => 'AIVideoTerrorismRecogJobList',
        'nonExistTerrorismRecogJobIds' => 'NonExistTerrorismRecogJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoTerrorismRecogJobList', $this->AIVideoTerrorismRecogJobList, true);
        Model::validateRequired('nonExistTerrorismRecogJobIds', $this->nonExistTerrorismRecogJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoTerrorismRecogJobList'] = null !== $this->AIVideoTerrorismRecogJobList ? $this->AIVideoTerrorismRecogJobList->toMap() : null;
        $res['NonExistTerrorismRecogJobIds'] = null !== $this->nonExistTerrorismRecogJobIds ? $this->nonExistTerrorismRecogJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIVideoTerrorismRecogJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoTerrorismRecogJobList'])){
            $model->AIVideoTerrorismRecogJobList = AIVideoTerrorismRecogJobList::fromMap($map['AIVideoTerrorismRecogJobList']);
        }
        if(isset($map['NonExistTerrorismRecogJobIds'])){
            $model->nonExistTerrorismRecogJobIds = nonExistTerrorismRecogJobIds::fromMap($map['NonExistTerrorismRecogJobIds']);
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
     * @var ListAIVideoTerrorismRecogJobResponse.AIVideoTerrorismRecogJobList
     */
    public $AIVideoTerrorismRecogJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIVideoTerrorismRecogJobResponse.nonExistTerrorismRecogJobIds
     */
    public $nonExistTerrorismRecogJobIds;

}
