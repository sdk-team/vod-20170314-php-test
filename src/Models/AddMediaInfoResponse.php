<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\AddMediaInfoResponse\uploadAddress;

class AddMediaInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'videoId' => 'VideoId',
        'uploadKey' => 'UploadKey',
        'uploadAddress' => 'UploadAddress',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('uploadKey', $this->uploadKey, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VideoId'] = $this->videoId;
        $res['UploadKey'] = $this->uploadKey;
        $res['UploadAddress'] = null !== $this->uploadAddress ? $this->uploadAddress->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return AddMediaInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['UploadKey'])){
            $model->uploadKey = $map['UploadKey'];
        }
        if(isset($map['UploadAddress'])){
            $model->uploadAddress = uploadAddress::fromMap($map['UploadAddress']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaInfo.mediaId
     * @var string
     */
    public $videoId;

    /**
     * @description data.uploadKey
     * @var string
     */
    public $uploadKey;

    /**
     * @description data.uploadAddressDO
     * @var AddMediaInfoResponse.uploadAddress
     */
    public $uploadAddress;

}
