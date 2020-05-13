<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkGroupResponse\watermarkGroupList;

use AlibabaCloud\Tea\Model;

class watermarkGroup extends Model {
    protected $_name = [
        'watermarkId' => 'WatermarkId',
        'watermarkGroupId' => 'WatermarkGroupId',
        'watermarkFileURL' => 'WatermarkFileURL',
        'watermarkType' => 'WatermarkType',
        'watermarkConfig' => 'WatermarkConfig',
    ];
    public function validate() {
        Model::validateRequired('watermarkId', $this->watermarkId, true);
        Model::validateRequired('watermarkGroupId', $this->watermarkGroupId, true);
        Model::validateRequired('watermarkFileURL', $this->watermarkFileURL, true);
        Model::validateRequired('watermarkType', $this->watermarkType, true);
        Model::validateRequired('watermarkConfig', $this->watermarkConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['WatermarkId'] = $this->watermarkId;
        $res['WatermarkGroupId'] = $this->watermarkGroupId;
        $res['WatermarkFileURL'] = $this->watermarkFileURL;
        $res['WatermarkType'] = $this->watermarkType;
        $res['WatermarkConfig'] = $this->watermarkConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return watermarkGroup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['WatermarkId'])){
            $model->watermarkId = $map['WatermarkId'];
        }
        if(isset($map['WatermarkGroupId'])){
            $model->watermarkGroupId = $map['WatermarkGroupId'];
        }
        if(isset($map['WatermarkFileURL'])){
            $model->watermarkFileURL = $map['WatermarkFileURL'];
        }
        if(isset($map['WatermarkType'])){
            $model->watermarkType = $map['WatermarkType'];
        }
        if(isset($map['WatermarkConfig'])){
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        return $model;
    }
    /**
     * @description watermarkId
     * @var string
     */
    public $watermarkId;

    /**
     * @description watermarkGroupId
     * @var string
     */
    public $watermarkGroupId;

    /**
     * @description watermarkFileURL
     * @var string
     */
    public $watermarkFileURL;

    /**
     * @description watermarkType
     * @var string
     */
    public $watermarkType;

    /**
     * @description watermarkConfig
     * @var string
     */
    public $watermarkConfig;

}
