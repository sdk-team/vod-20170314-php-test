<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisSumResponse\CDNStatisList;

class GetCDNStatisSumResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'sumFlowDataValue' => 'SumFlowDataValue',
        'maxBpsDataValue' => 'MaxBpsDataValue',
        'current95BpsDataValue' => 'Current95BpsDataValue',
        'level' => 'Level',
        'CDNStatisList' => 'CDNStatisList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('sumFlowDataValue', $this->sumFlowDataValue, true);
        Model::validateRequired('maxBpsDataValue', $this->maxBpsDataValue, true);
        Model::validateRequired('current95BpsDataValue', $this->current95BpsDataValue, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('CDNStatisList', $this->CDNStatisList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SumFlowDataValue'] = $this->sumFlowDataValue;
        $res['MaxBpsDataValue'] = $this->maxBpsDataValue;
        $res['Current95BpsDataValue'] = $this->current95BpsDataValue;
        $res['Level'] = $this->level;
        $res['CDNStatisList'] = null !== $this->CDNStatisList ? $this->CDNStatisList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCDNStatisSumResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SumFlowDataValue'])){
            $model->sumFlowDataValue = $map['SumFlowDataValue'];
        }
        if(isset($map['MaxBpsDataValue'])){
            $model->maxBpsDataValue = $map['MaxBpsDataValue'];
        }
        if(isset($map['Current95BpsDataValue'])){
            $model->current95BpsDataValue = $map['Current95BpsDataValue'];
        }
        if(isset($map['Level'])){
            $model->level = $map['Level'];
        }
        if(isset($map['CDNStatisList'])){
            $model->CDNStatisList = CDNStatisList::fromMap($map['CDNStatisList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.sumFlowDataValue
     * @var integer
     */
    public $sumFlowDataValue;

    /**
     * @description data.maxBpsDataValue
     * @var integer
     */
    public $maxBpsDataValue;

    /**
     * @description data.current95BpsDataValue
     * @var integer
     */
    public $current95BpsDataValue;

    /**
     * @description data.level
     * @var string
     */
    public $level;

    /**
     * @description data.cdnStatisList
     * @var GetCDNStatisSumResponse.CDNStatisList
     */
    public $CDNStatisList;

}
