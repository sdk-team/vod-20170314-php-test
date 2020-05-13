<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkSwitchResponse\waterMarkSwitch;

class GetWatermarkSwitchResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'waterMarkSwitch' => 'WaterMarkSwitch',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('waterMarkSwitch', $this->waterMarkSwitch, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['WaterMarkSwitch'] = null !== $this->waterMarkSwitch ? $this->waterMarkSwitch->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetWatermarkSwitchResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['WaterMarkSwitch'])){
            $model->waterMarkSwitch = waterMarkSwitch::fromMap($map['WaterMarkSwitch']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.waterMarkSwitchDto
     * @var GetWatermarkSwitchResponse.waterMarkSwitch
     */
    public $waterMarkSwitch;

}
