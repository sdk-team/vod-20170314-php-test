<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectResponse\project;

class GetEditingProjectResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'project' => 'Project',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('project', $this->project, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Project'] = null !== $this->project ? $this->project->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetEditingProjectResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Project'])){
            $model->project = project::fromMap($map['Project']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.project
     * @var GetEditingProjectResponse.project
     */
    public $project;

}
