<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkGroupResponse\watermarkGroupList;

class GetWatermarkGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'watermarkGroupList' => 'WatermarkGroupList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('watermarkGroupList', $this->watermarkGroupList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Total'] = $this->total;
        $res['WatermarkGroupList'] = null !== $this->watermarkGroupList ? $this->watermarkGroupList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetWatermarkGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['WatermarkGroupList'])){
            $model->watermarkGroupList = watermarkGroupList::fromMap($map['WatermarkGroupList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.total
     * @var string
     */
    public $total;

    /**
     * @description data.watermarkGroupDTOS
     * @var GetWatermarkGroupResponse.watermarkGroupList
     */
    public $watermarkGroupList;

}
