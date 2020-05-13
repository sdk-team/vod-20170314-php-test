<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksResponse\watermarks;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksResponse\watermarkInfos;

class GetWatermarksResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'watermarks' => 'Watermarks',
        'watermarkInfos' => 'WatermarkInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('watermarks', $this->watermarks, true);
        Model::validateRequired('watermarkInfos', $this->watermarkInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Watermarks'] = null !== $this->watermarks ? $this->watermarks->toMap() : null;
        $res['WatermarkInfos'] = null !== $this->watermarkInfos ? $this->watermarkInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetWatermarksResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Watermarks'])){
            $model->watermarks = watermarks::fromMap($map['Watermarks']);
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
     * @description data.waterMarkDtos
     * @var GetWatermarksResponse.watermarks
     */
    public $watermarks;

    /**
     * @description data.watermarkDtos
     * @var GetWatermarksResponse.watermarkInfos
     */
    public $watermarkInfos;

}
