<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class QueryUploadInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'bucket' => 'Bucket',
        'endpoint' => 'Endpoint',
        'fileDir' => 'FileDir',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('bucket', $this->bucket, true);
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('fileDir', $this->fileDir, true);
        Model::validateRequired('resourceOwnerId', $this->resourceOwnerId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Bucket'] = $this->bucket;
        $res['Endpoint'] = $this->endpoint;
        $res['FileDir'] = $this->fileDir;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryUploadInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Bucket'])){
            $model->bucket = $map['Bucket'];
        }
        if(isset($map['Endpoint'])){
            $model->endpoint = $map['Endpoint'];
        }
        if(isset($map['FileDir'])){
            $model->fileDir = $map['FileDir'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.bucket
     * @var string
     */
    public $bucket;

    /**
     * @description data.endpoint
     * @var string
     */
    public $endpoint;

    /**
     * @description data.fileDir
     * @var string
     */
    public $fileDir;

    /**
     * @description data.resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

}
