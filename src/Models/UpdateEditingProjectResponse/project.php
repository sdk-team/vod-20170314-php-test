<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\UpdateEditingProjectResponse;

use AlibabaCloud\Tea\Model;

class project extends Model {
    protected $_name = [
        'projectId' => 'ProjectId',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'customerId' => 'CustomerId',
        'status' => 'Status',
        'description' => 'Description',
        'title' => 'Title',
        'timeline' => 'Timeline',
        'producedMediaId' => 'ProducedMediaId',
        'duration' => 'Duration',
        'coverUrl' => 'CoverUrl',
    ];
    public function validate() {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('timeline', $this->timeline, true);
        Model::validateRequired('producedMediaId', $this->producedMediaId, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('coverUrl', $this->coverUrl, true);
    }
    public function toMap() {
        $res = [];
        $res['ProjectId'] = $this->projectId;
        $res['CreateTime'] = $this->createTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['CustomerId'] = $this->customerId;
        $res['Status'] = $this->status;
        $res['Description'] = $this->description;
        $res['Title'] = $this->title;
        $res['Timeline'] = $this->timeline;
        $res['ProducedMediaId'] = $this->producedMediaId;
        $res['Duration'] = $this->duration;
        $res['CoverUrl'] = $this->coverUrl;
        return $res;
    }
    /**
     * @param array $map
     * @return project
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ProjectId'])){
            $model->projectId = $map['ProjectId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['ModifyTime'])){
            $model->modifyTime = $map['ModifyTime'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Timeline'])){
            $model->timeline = $map['Timeline'];
        }
        if(isset($map['ProducedMediaId'])){
            $model->producedMediaId = $map['ProducedMediaId'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['CoverUrl'])){
            $model->coverUrl = $map['CoverUrl'];
        }
        return $model;
    }
    /**
     * @description projectId
     * @var string
     */
    public $projectId;

    /**
     * @description gmtCreateStr
     * @var string
     */
    public $createTime;

    /**
     * @description gmtModifiedStr
     * @var string
     */
    public $modifyTime;

    /**
     * @description userId
     * @var string
     */
    public $customerId;

    /**
     * @description stateStr
     * @var string
     */
    public $status;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description timeline
     * @var string
     */
    public $timeline;

    /**
     * @description producedMediaId
     * @var string
     */
    public $producedMediaId;

    /**
     * @description duration
     * @var float
     */
    public $duration;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverUrl;

}
