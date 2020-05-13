<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DeleteVideoTagResponse;

use AlibabaCloud\Tea\Model;

class mediaInfoDTO extends Model {
    protected $_name = [
        'userId' => 'UserId',
        'mediaId' => 'MediaId',
        'title' => 'Title',
        'tags' => 'Tags',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('tags', $this->tags, true);
    }
    public function toMap() {
        $res = [];
        $res['UserId'] = $this->userId;
        $res['MediaId'] = $this->mediaId;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        return $res;
    }
    /**
     * @param array $map
     * @return mediaInfoDTO
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        return $model;
    }
    /**
     * @description userId
     * @var integer
     */
    public $userId;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description tags
     * @var string
     */
    public $tags;

}
