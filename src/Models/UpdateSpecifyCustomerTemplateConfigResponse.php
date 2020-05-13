<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateSpecifyCustomerTemplateConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'ret' => 'Ret',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ret', $this->ret, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Ret'] = $this->ret;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateSpecifyCustomerTemplateConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Ret'])){
            $model->ret = $map['Ret'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.ret
     * @var bool
     */
    public $ret;

}
