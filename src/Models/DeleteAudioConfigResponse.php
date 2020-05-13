<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DeleteAudioConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'result' => 'Result',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('result', $this->result, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Result'] = $this->result;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteAudioConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Result'])){
            $model->result = $map['Result'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description result
     * @var bool
     */
    public $result;

}
