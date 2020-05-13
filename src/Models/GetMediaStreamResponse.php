<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaStreamResponse\streamInfo;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaStreamResponse\streamInfo\audioStream;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaStreamResponse\streamInfo\videoStream;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaStreamResponse\streamInfo\playInfo;

class GetMediaStreamResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'streamInfo' => 'StreamInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('streamInfo', $this->streamInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['StreamInfo'] = null !== $this->streamInfo ? $this->streamInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMediaStreamResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['StreamInfo'])){
            $model->streamInfo = streamInfo::fromMap($map['StreamInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.streamInfo
     * @var GetMediaStreamResponse.streamInfo
     */
    public $streamInfo;

}
