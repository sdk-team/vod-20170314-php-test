<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DeleteVodTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'vodTemplateId' => 'VodTemplateId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('vodTemplateId', $this->vodTemplateId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VodTemplateId'] = $this->vodTemplateId;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteVodTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VodTemplateId'])){
            $model->vodTemplateId = $map['VodTemplateId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.vodTemplateId
     * @var string
     */
    public $vodTemplateId;

}
