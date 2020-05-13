<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\UploadMediaByURLResponse\uploadJobs;

use AlibabaCloud\Tea\Model;

class uploadJob extends Model {
    protected $_name = [
        'jobId' => 'JobId',
        'sourceURL' => 'SourceURL',
    ];
    public function validate() {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('sourceURL', $this->sourceURL, true);
    }
    public function toMap() {
        $res = [];
        $res['JobId'] = $this->jobId;
        $res['SourceURL'] = $this->sourceURL;
        return $res;
    }
    /**
     * @param array $map
     * @return uploadJob
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        if(isset($map['SourceURL'])){
            $model->sourceURL = $map['SourceURL'];
        }
        return $model;
    }
    /**
     * @description jobId
     * @var string
     */
    public $jobId;

    /**
     * @description sourceUrl
     * @var string
     */
    public $sourceURL;

}
