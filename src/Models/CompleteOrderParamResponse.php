<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class CompleteOrderParamResponse extends Model {
    protected $_name = [
        'requestId' => 'requestId',
        'success' => 'success',
        'code' => 'code',
        'message' => 'message',
        'data' => 'data',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        $res['requestId'] = $this->requestId;
        $res['success'] = $this->success;
        $res['code'] = $this->code;
        $res['message'] = $this->message;
        $res['data'] = $this->data;
        return $res;
    }
    /**
     * @param array $map
     * @return CompleteOrderParamResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['requestId'])){
            $model->requestId = $map['requestId'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['message'])){
            $model->message = $map['message'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description success
     * @var bool
     */
    public $success;

    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description message
     * @var string
     */
    public $message;

    /**
     * @description data
     * @var string
     */
    public $data;

}
