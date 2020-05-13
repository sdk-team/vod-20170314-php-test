<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\AddEditingProjectResponse;

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
    ];
    public function validate() {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('title', $this->title, true);
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

}
