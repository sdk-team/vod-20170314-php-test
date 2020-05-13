<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListWatermarkInfoResponse\watermarkInfos;

class ListWatermarkInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'watermarkInfos' => 'WatermarkInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('watermarkInfos', $this->watermarkInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['WatermarkInfos'] = null !== $this->watermarkInfos ? $this->watermarkInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListWatermarkInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['WatermarkInfos'])){
            $model->watermarkInfos = watermarkInfos::fromMap($map['WatermarkInfos']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.watermarkInfos
     * @var ListWatermarkInfoResponse.watermarkInfos
     */
    public $watermarkInfos;

}
