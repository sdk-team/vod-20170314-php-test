<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadMaterialResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'materialId' => 'MaterialId',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth' => 'UploadAuth',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('materialId', $this->materialId, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
        Model::validateRequired('uploadAuth', $this->uploadAuth, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MaterialId'] = $this->materialId;
        $res['UploadAddress'] = $this->uploadAddress;
        $res['UploadAuth'] = $this->uploadAuth;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadMaterialResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MaterialId'])){
            $model->materialId = $map['MaterialId'];
        }
        if(isset($map['UploadAddress'])){
            $model->uploadAddress = $map['UploadAddress'];
        }
        if(isset($map['UploadAuth'])){
            $model->uploadAuth = $map['UploadAuth'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.material.materialId
     * @var string
     */
    public $materialId;

    /**
     * @description data.uploadAddress
     * @var string
     */
    public $uploadAddress;

    /**
     * @description data.uploadAuth
     * @var string
     */
    public $uploadAuth;

}
