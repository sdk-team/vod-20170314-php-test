<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SetCDNForceRedirectConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'response' => 'Response',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('response', $this->response, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Response'] = $this->response;
        return $res;
    }
    /**
     * @param array $map
     * @return SetCDNForceRedirectConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Response'])){
            $model->response = $map['Response'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.response
     * @var string
     */
    public $response;

}
