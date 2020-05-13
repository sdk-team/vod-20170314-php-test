<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetMessageCallbackEventListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'eventList' => 'EventList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('eventList', $this->eventList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['EventList'] = $this->eventList;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMessageCallbackEventListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['EventList'])){
            $model->eventList = $map['EventList'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.eventList
     * @var string
     */
    public $eventList;

}
