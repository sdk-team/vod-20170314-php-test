<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaInfoListResponse\videoList;

class GetMediaInfoListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'videoList' => 'VideoList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('videoList', $this->videoList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VideoList'] = null !== $this->videoList ? $this->videoList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMediaInfoListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VideoList'])){
            $model->videoList = videoList::fromMap($map['VideoList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.aMediaList
     * @var GetMediaInfoListResponse.videoList
     */
    public $videoList;

}
