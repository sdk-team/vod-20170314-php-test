<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddLiveStreamVideoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaId' => 'MediaId',
        'playlistId' => 'PlaylistId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('playlistId', $this->playlistId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaId'] = $this->mediaId;
        $res['PlaylistId'] = $this->playlistId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddLiveStreamVideoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['PlaylistId'])){
            $model->playlistId = $map['PlaylistId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description data.playlistId
     * @var string
     */
    public $playlistId;

}
