<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\SearchMediaResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\mediaList\video;
use AlibabaCloud\SDK\vod\V20170314\Models\mediaList\audio;
use AlibabaCloud\SDK\vod\V20170314\Models\mediaList\image;

class mediaList extends Model {
    protected $_name = [
        'mediaType' => 'MediaType',
        'creationTime' => 'CreationTime',
        'mediaId' => 'MediaId',
        'video' => 'Video',
        'audio' => 'Audio',
        'image' => 'Image',
    ];
    public function validate() {
        Model::validateRequired('mediaType', $this->mediaType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('video', $this->video, true);
        Model::validateRequired('audio', $this->audio, true);
        Model::validateRequired('image', $this->image, true);
    }
    public function toMap() {
        $res = [];
        $res['MediaType'] = $this->mediaType;
        $res['CreationTime'] = $this->creationTime;
        $res['MediaId'] = $this->mediaId;
        $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return mediaList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MediaType'])){
            $model->mediaType = $map['MediaType'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Video'])){
            $model->video = video::fromMap($map['Video']);
        }
        if(isset($map['Audio'])){
            $model->audio = audio::fromMap($map['Audio']);
        }
        if(isset($map['Image'])){
            $model->image = image::fromMap($map['Image']);
        }
        return $model;
    }
    /**
     * @description mediaType
     * @var string
     */
    public $mediaType;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description video
     * @var mediaList.video
     */
    public $video;

    /**
     * @description audio
     * @var mediaList.audio
     */
    public $audio;

    /**
     * @description image
     * @var mediaList.image
     */
    public $image;

}
