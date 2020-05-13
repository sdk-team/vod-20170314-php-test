<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaCategoryResponse\media;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaCategoryResponse\media\snapshots;

class UpdateMediaCategoryResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'media' => 'Media',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('media', $this->media, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Media'] = null !== $this->media ? $this->media->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateMediaCategoryResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Media'])){
            $model->media = media::fromMap($map['Media']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaInfoDTO
     * @var UpdateMediaCategoryResponse.media
     */
    public $media;

}
