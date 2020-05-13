<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoPornRecogJobResponse\AIVideoPornRecogJobList;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoPornRecogJobResponse\nonExistPornRecogJobIds;

class ListAIVideoPornRecogJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoPornRecogJobList' => 'AIVideoPornRecogJobList',
        'nonExistPornRecogJobIds' => 'NonExistPornRecogJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoPornRecogJobList', $this->AIVideoPornRecogJobList, true);
        Model::validateRequired('nonExistPornRecogJobIds', $this->nonExistPornRecogJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoPornRecogJobList'] = null !== $this->AIVideoPornRecogJobList ? $this->AIVideoPornRecogJobList->toMap() : null;
        $res['NonExistPornRecogJobIds'] = null !== $this->nonExistPornRecogJobIds ? $this->nonExistPornRecogJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIVideoPornRecogJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoPornRecogJobList'])){
            $model->AIVideoPornRecogJobList = AIVideoPornRecogJobList::fromMap($map['AIVideoPornRecogJobList']);
        }
        if(isset($map['NonExistPornRecogJobIds'])){
            $model->nonExistPornRecogJobIds = nonExistPornRecogJobIds::fromMap($map['NonExistPornRecogJobIds']);
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
     * @var ListAIVideoPornRecogJobResponse.AIVideoPornRecogJobList
     */
    public $AIVideoPornRecogJobList;

    /**
     * @description data.nonExistJobIds
     * @var ListAIVideoPornRecogJobResponse.nonExistPornRecogJobIds
     */
    public $nonExistPornRecogJobIds;

}
