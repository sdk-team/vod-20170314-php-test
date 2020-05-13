<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\UploadMediaByURLResponse\uploadJobs;

class UploadMediaByURLResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadJobs' => 'UploadJobs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('uploadJobs', $this->uploadJobs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UploadJobs'] = null !== $this->uploadJobs ? $this->uploadJobs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return UploadMediaByURLResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UploadJobs'])){
            $model->uploadJobs = uploadJobs::fromMap($map['UploadJobs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.uploadJobs
     * @var UploadMediaByURLResponse.uploadJobs
     */
    public $uploadJobs;

}
