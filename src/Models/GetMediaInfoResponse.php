<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaInfoResponse\video;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaInfoResponse\video\snapshots;

class GetMediaInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'video' => 'Video',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('video', $this->video, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMediaInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Video'])){
            $model->video = video::fromMap($map['Video']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaInfo
     * @var GetMediaInfoResponse.video
     */
    public $video;

}
