<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMediaStreamResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\streamInfo\audioStream;
use AlibabaCloud\SDK\vod\V20170314\Models\streamInfo\videoStream;
use AlibabaCloud\SDK\vod\V20170314\Models\streamInfo\playInfo;

class streamInfo extends Model {
    protected $_name = [
        'videoId' => 'VideoId',
        'fileType' => 'FileType',
        'audioStream' => 'AudioStream',
        'videoStream' => 'VideoStream',
        'playInfo' => 'PlayInfo',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('fileType', $this->fileType, true);
        Model::validateRequired('audioStream', $this->audioStream, true);
        Model::validateRequired('videoStream', $this->videoStream, true);
        Model::validateRequired('playInfo', $this->playInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoId'] = $this->videoId;
        $res['FileType'] = $this->fileType;
        $res['AudioStream'] = null !== $this->audioStream ? $this->audioStream->toMap() : null;
        $res['VideoStream'] = null !== $this->videoStream ? $this->videoStream->toMap() : null;
        $res['PlayInfo'] = null !== $this->playInfo ? $this->playInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return streamInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['FileType'])){
            $model->fileType = $map['FileType'];
        }
        if(isset($map['AudioStream'])){
            $model->audioStream = audioStream::fromMap($map['AudioStream']);
        }
        if(isset($map['VideoStream'])){
            $model->videoStream = videoStream::fromMap($map['VideoStream']);
        }
        if(isset($map['PlayInfo'])){
            $model->playInfo = playInfo::fromMap($map['PlayInfo']);
        }
        return $model;
    }
    /**
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description fileType
     * @var string
     */
    public $fileType;

    /**
     * @description audioStream
     * @var streamInfo.audioStream
     */
    public $audioStream;

    /**
     * @description videoStream
     * @var streamInfo.videoStream
     */
    public $videoStream;

    /**
     * @description playInfo
     * @var streamInfo.playInfo
     */
    public $playInfo;

}
