<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadMediaFileResponse\mediaFileInfo;

class CreateUploadMediaFileResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaFileInfo' => 'MediaFileInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaFileInfo', $this->mediaFileInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaFileInfo'] = null !== $this->mediaFileInfo ? $this->mediaFileInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadMediaFileResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaFileInfo'])){
            $model->mediaFileInfo = mediaFileInfo::fromMap($map['MediaFileInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaFileInfo
     * @var CreateUploadMediaFileResponse.mediaFileInfo
     */
    public $mediaFileInfo;

}
