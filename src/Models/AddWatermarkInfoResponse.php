<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddWatermarkInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'result' => 'Result',
        'watermarkId' => 'WatermarkId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateRequired('watermarkId', $this->watermarkId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Result'] = $this->result;
        $res['WatermarkId'] = $this->watermarkId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddWatermarkInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Result'])){
            $model->result = $map['Result'];
        }
        if(isset($map['WatermarkId'])){
            $model->watermarkId = $map['WatermarkId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.result
     * @var bool
     */
    public $result;

    /**
     * @description data.watermarkId
     * @var string
     */
    public $watermarkId;

}
