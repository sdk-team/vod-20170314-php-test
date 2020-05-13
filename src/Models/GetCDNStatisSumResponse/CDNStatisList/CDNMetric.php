<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisSumResponse\CDNStatisList;

use AlibabaCloud\Tea\Model;

class CDNMetric extends Model {
    protected $_name = [
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
        'flowDataDomesticValue' => 'FlowDataDomesticValue',
        'flowDataOverseasValue' => 'FlowDataOverseasValue',
        'flowDataValue' => 'FlowDataValue',
        'bpsDataDomesticValue' => 'BpsDataDomesticValue',
        'bpsDataOverseasValue' => 'BpsDataOverseasValue',
        'bpsDataValue' => 'BpsDataValue',
    ];
    public function validate() {
        Model::validateRequired('statTime', $this->statTime, true);
        Model::validateRequired('statTimeUTC', $this->statTimeUTC, true);
        Model::validateRequired('flowDataDomesticValue', $this->flowDataDomesticValue, true);
        Model::validateRequired('flowDataOverseasValue', $this->flowDataOverseasValue, true);
        Model::validateRequired('flowDataValue', $this->flowDataValue, true);
        Model::validateRequired('bpsDataDomesticValue', $this->bpsDataDomesticValue, true);
        Model::validateRequired('bpsDataOverseasValue', $this->bpsDataOverseasValue, true);
        Model::validateRequired('bpsDataValue', $this->bpsDataValue, true);
    }
    public function toMap() {
        $res = [];
        $res['StatTime'] = $this->statTime;
        $res['StatTimeUTC'] = $this->statTimeUTC;
        $res['FlowDataDomesticValue'] = $this->flowDataDomesticValue;
        $res['FlowDataOverseasValue'] = $this->flowDataOverseasValue;
        $res['FlowDataValue'] = $this->flowDataValue;
        $res['BpsDataDomesticValue'] = $this->bpsDataDomesticValue;
        $res['BpsDataOverseasValue'] = $this->bpsDataOverseasValue;
        $res['BpsDataValue'] = $this->bpsDataValue;
        return $res;
    }
    /**
     * @param array $map
     * @return CDNMetric
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StatTime'])){
            $model->statTime = $map['StatTime'];
        }
        if(isset($map['StatTimeUTC'])){
            $model->statTimeUTC = $map['StatTimeUTC'];
        }
        if(isset($map['FlowDataDomesticValue'])){
            $model->flowDataDomesticValue = $map['FlowDataDomesticValue'];
        }
        if(isset($map['FlowDataOverseasValue'])){
            $model->flowDataOverseasValue = $map['FlowDataOverseasValue'];
        }
        if(isset($map['FlowDataValue'])){
            $model->flowDataValue = $map['FlowDataValue'];
        }
        if(isset($map['BpsDataDomesticValue'])){
            $model->bpsDataDomesticValue = $map['BpsDataDomesticValue'];
        }
        if(isset($map['BpsDataOverseasValue'])){
            $model->bpsDataOverseasValue = $map['BpsDataOverseasValue'];
        }
        if(isset($map['BpsDataValue'])){
            $model->bpsDataValue = $map['BpsDataValue'];
        }
        return $model;
    }
    /**
     * @description statTimeStr
     * @var string
     */
    public $statTime;

    /**
     * @description statTimeUTC
     * @var string
     */
    public $statTimeUTC;

    /**
     * @description flowDataDomesticValue
     * @var integer
     */
    public $flowDataDomesticValue;

    /**
     * @description flowDataOverseasValue
     * @var integer
     */
    public $flowDataOverseasValue;

    /**
     * @description flowDataValue
     * @var integer
     */
    public $flowDataValue;

    /**
     * @description bpsDataDomesticValue
     * @var integer
     */
    public $bpsDataDomesticValue;

    /**
     * @description bpsDataOverseasValue
     * @var integer
     */
    public $bpsDataOverseasValue;

    /**
     * @description bpsDataValue
     * @var integer
     */
    public $bpsDataValue;

}
