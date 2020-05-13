<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaCategoryResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\media\snapshots;

class media extends Model {
    protected $_name = [
        'mediaId' => 'MediaId',
        'title' => 'Title',
        'description' => 'Description',
        'coverUrl' => 'CoverUrl',
        'cateId' => 'CateId',
        'tags' => 'Tags',
        'duration' => 'Duration',
        'fileSize' => 'FileSize',
        'state' => 'State',
        'mediaWorkflowRunId' => 'MediaWorkflowRunId',
        'createTime' => 'CreateTime',
        'createIp' => 'CreateIp',
        'mediaWorkflowId' => 'MediaWorkflowId',
        'publicType' => 'PublicType',
        'snapshots' => 'Snapshots',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('coverUrl', $this->coverUrl, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('mediaWorkflowRunId', $this->mediaWorkflowRunId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createIp', $this->createIp, true);
        Model::validateRequired('mediaWorkflowId', $this->mediaWorkflowId, true);
        Model::validateRequired('publicType', $this->publicType, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
    }
    public function toMap() {
        $res = [];
        $res['MediaId'] = $this->mediaId;
        $res['Title'] = $this->title;
        $res['Description'] = $this->description;
        $res['CoverUrl'] = $this->coverUrl;
        $res['CateId'] = $this->cateId;
        $res['Tags'] = $this->tags;
        $res['Duration'] = $this->duration;
        $res['FileSize'] = $this->fileSize;
        $res['State'] = $this->state;
        $res['MediaWorkflowRunId'] = $this->mediaWorkflowRunId;
        $res['CreateTime'] = $this->createTime;
        $res['CreateIp'] = $this->createIp;
        $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        $res['PublicType'] = $this->publicType;
        $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return media
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CoverUrl'])){
            $model->coverUrl = $map['CoverUrl'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['State'])){
            $model->state = $map['State'];
        }
        if(isset($map['MediaWorkflowRunId'])){
            $model->mediaWorkflowRunId = $map['MediaWorkflowRunId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateIp'])){
            $model->createIp = $map['CreateIp'];
        }
        if(isset($map['MediaWorkflowId'])){
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if(isset($map['PublicType'])){
            $model->publicType = $map['PublicType'];
        }
        if(isset($map['Snapshots'])){
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        return $model;
    }
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
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverUrl;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description duration
     * @var string
     */
    public $duration;

    /**
     * @description fileSize
     * @var string
     */
    public $fileSize;

    /**
     * @description state
     * @var integer
     */
    public $state;

    /**
     * @description mediaWorkflowRunId
     * @var string
     */
    public $mediaWorkflowRunId;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description createIp
     * @var string
     */
    public $createIp;

    /**
     * @description mediaWorkflowId
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @description publicType
     * @var integer
     */
    public $publicType;

    /**
     * @description snapshots
     * @var media.snapshots
     */
    public $snapshots;

}
