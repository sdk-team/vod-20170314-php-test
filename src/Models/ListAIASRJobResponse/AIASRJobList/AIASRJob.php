<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIASRJobResponse\AIASRJobList;

use AlibabaCloud\Tea\Model;

class AIASRJob extends Model {
    protected $_name = [
        'jobId' => 'JobId',
        'mediaId' => 'MediaId',
        'status' => 'Status',
        'code' => 'Code',
        'message' => 'Message',
        'creationTime' => 'CreationTime',
        'data' => 'Data',
    ];
    public function validate() {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        $res['JobId'] = $this->jobId;
        $res['MediaId'] = $this->mediaId;
        $res['Status'] = $this->status;
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['CreationTime'] = $this->creationTime;
        $res['Data'] = $this->data;
        return $res;
    }
    /**
     * @param array $map
     * @return AIASRJob
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['Data'])){
            $model->data = $map['Data'];
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $jobId;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description message
     * @var string
     */
    public $message;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description data
     * @var string
     */
    public $data;

}
