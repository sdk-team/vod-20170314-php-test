<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'imageId' => 'ImageId',
        'imageURL' => 'ImageURL',
        'uploadAddress' => 'UploadAddress',
        'uploadAuth' => 'UploadAuth',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
        Model::validateRequired('uploadAuth', $this->uploadAuth, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ImageId'] = $this->imageId;
        $res['ImageURL'] = $this->imageURL;
        $res['UploadAddress'] = $this->uploadAddress;
        $res['UploadAuth'] = $this->uploadAuth;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadImageResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ImageId'])){
            $model->imageId = $map['ImageId'];
        }
        if(isset($map['ImageURL'])){
            $model->imageURL = $map['ImageURL'];
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
     * @description data.mediaId
     * @var string
     */
    public $imageId;

    /**
     * @description data.imageURL
     * @var string
     */
    public $imageURL;

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
