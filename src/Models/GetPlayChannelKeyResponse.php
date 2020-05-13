<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetPlayChannelKeyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'playKey' => 'PlayKey',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('playKey', $this->playKey, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PlayKey'] = $this->playKey;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPlayChannelKeyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PlayKey'])){
            $model->playKey = $map['PlayKey'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.apiAuth.apiKey
     * @var string
     */
    public $playKey;

}
