<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectListResponse\projectList;

class GetEditingProjectListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'projectList' => 'ProjectList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('projectList', $this->projectList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ProjectList'] = null !== $this->projectList ? $this->projectList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetEditingProjectListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ProjectList'])){
            $model->projectList = projectList::fromMap($map['ProjectList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.projectDOList
     * @var GetEditingProjectListResponse.projectList
     */
    public $projectList;

}
