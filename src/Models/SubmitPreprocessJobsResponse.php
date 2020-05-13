<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SubmitPreprocessJobsResponse\transcodeJobs;

class SubmitPreprocessJobsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeJobs' => 'TranscodeJobs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeJobs', $this->transcodeJobs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeJobs'] = null !== $this->transcodeJobs ? $this->transcodeJobs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitPreprocessJobsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeJobs'])){
            $model->transcodeJobs = transcodeJobs::fromMap($map['TranscodeJobs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.transcodeJobs
     * @var SubmitPreprocessJobsResponse.transcodeJobs
     */
    public $transcodeJobs;

}
