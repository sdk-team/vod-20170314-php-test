<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkInfoResponse;

use AlibabaCloud\Tea\Model;

class watermarkInfo extends Model {
    protected $_name = [
        'watermarkConfig' => 'WatermarkConfig',
        'watermarkId' => 'WatermarkId',
        'watermarkType' => 'WatermarkType',
        'watermarkName' => 'WatermarkName',
        'watermarkFileUrl' => 'WatermarkFileUrl',
    ];
    public function validate() {
        Model::validateRequired('watermarkConfig', $this->watermarkConfig, true);
        Model::validateRequired('watermarkId', $this->watermarkId, true);
        Model::validateRequired('watermarkType', $this->watermarkType, true);
        Model::validateRequired('watermarkName', $this->watermarkName, true);
        Model::validateRequired('watermarkFileUrl', $this->watermarkFileUrl, true);
    }
    public function toMap() {
        $res = [];
        $res['WatermarkConfig'] = $this->watermarkConfig;
        $res['WatermarkId'] = $this->watermarkId;
        $res['WatermarkType'] = $this->watermarkType;
        $res['WatermarkName'] = $this->watermarkName;
        $res['WatermarkFileUrl'] = $this->watermarkFileUrl;
        return $res;
    }
    /**
     * @param array $map
     * @return watermarkInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['WatermarkConfig'])){
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if(isset($map['WatermarkId'])){
            $model->watermarkId = $map['WatermarkId'];
        }
        if(isset($map['WatermarkType'])){
            $model->watermarkType = $map['WatermarkType'];
        }
        if(isset($map['WatermarkName'])){
            $model->watermarkName = $map['WatermarkName'];
        }
        if(isset($map['WatermarkFileUrl'])){
            $model->watermarkFileUrl = $map['WatermarkFileUrl'];
        }
        return $model;
    }
    /**
     * @description watermarkConfig
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description watermarkId
     * @var string
     */
    public $watermarkId;

    /**
     * @description watermarkType
     * @var string
     */
    public $watermarkType;

    /**
     * @description watermarkName
     * @var string
     */
    public $watermarkName;

    /**
     * @description watermarkFileUrl
     * @var string
     */
    public $watermarkFileUrl;

}
