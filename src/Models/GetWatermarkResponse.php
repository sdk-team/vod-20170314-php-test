<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkResponse\watermark;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkResponse\watermarkInfo;

class GetWatermarkResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'watermark' => 'Watermark',
        'watermarkInfo' => 'WatermarkInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('watermark', $this->watermark, true);
        Model::validateRequired('watermarkInfo', $this->watermarkInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Watermark'] = null !== $this->watermark ? $this->watermark->toMap() : null;
        $res['WatermarkInfo'] = null !== $this->watermarkInfo ? $this->watermarkInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetWatermarkResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Watermark'])){
            $model->watermark = watermark::fromMap($map['Watermark']);
        }
        if(isset($map['WatermarkInfo'])){
            $model->watermarkInfo = watermarkInfo::fromMap($map['WatermarkInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.waterMarkDto
     * @var GetWatermarkResponse.watermark
     */
    public $watermark;

    /**
     * @description data.watermarkDto
     * @var GetWatermarkResponse.watermarkInfo
     */
    public $watermarkInfo;

}
