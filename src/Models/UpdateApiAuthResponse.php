<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\UpdateApiAuthResponse\apiAuth;

class UpdateApiAuthResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'apiAuth' => 'ApiAuth',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('apiAuth', $this->apiAuth, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ApiAuth'] = null !== $this->apiAuth ? $this->apiAuth->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateApiAuthResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ApiAuth'])){
            $model->apiAuth = apiAuth::fromMap($map['ApiAuth']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.apiAuthDto
     * @var UpdateApiAuthResponse.apiAuth
     */
    public $apiAuth;

}
