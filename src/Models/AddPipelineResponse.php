<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddPipelineResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'pipelineId' => 'PipelineId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pipelineId', $this->pipelineId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PipelineId'] = $this->pipelineId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddPipelineResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PipelineId'])){
            $model->pipelineId = $map['PipelineId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.pipelineId
     * @var string
     */
    public $pipelineId;

}
