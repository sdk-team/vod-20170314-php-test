<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayInfoForCloudResponse\playInfo;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayInfoForCloudResponse\videoInfo;

class GetVideoPlayInfoForCloudResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'playInfo' => 'PlayInfo',
        'videoInfo' => 'VideoInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('playInfo', $this->playInfo, true);
        Model::validateRequired('videoInfo', $this->videoInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PlayInfo'] = null !== $this->playInfo ? $this->playInfo->toMap() : null;
        $res['VideoInfo'] = null !== $this->videoInfo ? $this->videoInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetVideoPlayInfoForCloudResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PlayInfo'])){
            $model->playInfo = playInfo::fromMap($map['PlayInfo']);
        }
        if(isset($map['VideoInfo'])){
            $model->videoInfo = videoInfo::fromMap($map['VideoInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.playInfo
     * @var GetVideoPlayInfoForCloudResponse.playInfo
     */
    public $playInfo;

    /**
     * @description data.videoInfo
     * @var GetVideoPlayInfoForCloudResponse.videoInfo
     */
    public $videoInfo;

}
