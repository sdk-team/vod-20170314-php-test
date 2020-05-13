<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetUploadProgressResponse\uploadProgress;

class GetUploadProgressResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadProgress' => 'UploadProgress',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('uploadProgress', $this->uploadProgress, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UploadProgress'] = null !== $this->uploadProgress ? $this->uploadProgress->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetUploadProgressResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UploadProgress'])){
            $model->uploadProgress = uploadProgress::fromMap($map['UploadProgress']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.uploadProgress
     * @var GetUploadProgressResponse.uploadProgress
     */
    public $uploadProgress;

}
