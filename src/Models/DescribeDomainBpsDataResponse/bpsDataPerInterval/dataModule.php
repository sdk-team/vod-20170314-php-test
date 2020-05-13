<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainBpsDataResponse\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model {
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
        'domesticValue' => 'DomesticValue',
        'overseasValue' => 'OverseasValue',
        'l2Value' => 'L2Value',
        'domesticL2Value' => 'DomesticL2Value',
        'overseasL2Value' => 'OverseasL2Value',
        'dynamicValue' => 'DynamicValue',
        'dynamicDomesticValue' => 'DynamicDomesticValue',
        'dynamicOverseasValue' => 'DynamicOverseasValue',
        'staticValue' => 'StaticValue',
        'staticDomesticValue' => 'StaticDomesticValue',
        'staticOverseasValue' => 'StaticOverseasValue',
    ];
    public function validate() {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('domesticValue', $this->domesticValue, true);
        Model::validateRequired('overseasValue', $this->overseasValue, true);
        Model::validateRequired('l2Value', $this->l2Value, true);
        Model::validateRequired('domesticL2Value', $this->domesticL2Value, true);
        Model::validateRequired('overseasL2Value', $this->overseasL2Value, true);
        Model::validateRequired('dynamicValue', $this->dynamicValue, true);
        Model::validateRequired('dynamicDomesticValue', $this->dynamicDomesticValue, true);
        Model::validateRequired('dynamicOverseasValue', $this->dynamicOverseasValue, true);
        Model::validateRequired('staticValue', $this->staticValue, true);
        Model::validateRequired('staticDomesticValue', $this->staticDomesticValue, true);
        Model::validateRequired('staticOverseasValue', $this->staticOverseasValue, true);
    }
    public function toMap() {
        $res = [];
        $res['TimeStamp'] = $this->timeStamp;
        $res['Value'] = $this->value;
        $res['DomesticValue'] = $this->domesticValue;
        $res['OverseasValue'] = $this->overseasValue;
        $res['L2Value'] = $this->l2Value;
        $res['DomesticL2Value'] = $this->domesticL2Value;
        $res['OverseasL2Value'] = $this->overseasL2Value;
        $res['DynamicValue'] = $this->dynamicValue;
        $res['DynamicDomesticValue'] = $this->dynamicDomesticValue;
        $res['DynamicOverseasValue'] = $this->dynamicOverseasValue;
        $res['StaticValue'] = $this->staticValue;
        $res['StaticDomesticValue'] = $this->staticDomesticValue;
        $res['StaticOverseasValue'] = $this->staticOverseasValue;
        return $res;
    }
    /**
     * @param array $map
     * @return dataModule
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['DomesticValue'])){
            $model->domesticValue = $map['DomesticValue'];
        }
        if(isset($map['OverseasValue'])){
            $model->overseasValue = $map['OverseasValue'];
        }
        if(isset($map['L2Value'])){
            $model->l2Value = $map['L2Value'];
        }
        if(isset($map['DomesticL2Value'])){
            $model->domesticL2Value = $map['DomesticL2Value'];
        }
        if(isset($map['OverseasL2Value'])){
            $model->overseasL2Value = $map['OverseasL2Value'];
        }
        if(isset($map['DynamicValue'])){
            $model->dynamicValue = $map['DynamicValue'];
        }
        if(isset($map['DynamicDomesticValue'])){
            $model->dynamicDomesticValue = $map['DynamicDomesticValue'];
        }
        if(isset($map['DynamicOverseasValue'])){
            $model->dynamicOverseasValue = $map['DynamicOverseasValue'];
        }
        if(isset($map['StaticValue'])){
            $model->staticValue = $map['StaticValue'];
        }
        if(isset($map['StaticDomesticValue'])){
            $model->staticDomesticValue = $map['StaticDomesticValue'];
        }
        if(isset($map['StaticOverseasValue'])){
            $model->staticOverseasValue = $map['StaticOverseasValue'];
        }
        return $model;
    }
    /**
     * @description timeStamp
     * @var string
     */
    public $timeStamp;

    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description domesticValue
     * @var string
     */
    public $domesticValue;

    /**
     * @description overseasValue
     * @var string
     */
    public $overseasValue;

    /**
     * @description l2Value
     * @var string
     */
    public $l2Value;

    /**
     * @description domesticL2Value
     * @var string
     */
    public $domesticL2Value;

    /**
     * @description overseasL2Value
     * @var string
     */
    public $overseasL2Value;

    /**
     * @description dynamicValue
     * @var integer
     */
    public $dynamicValue;

    /**
     * @description dynamicDomesticValue
     * @var string
     */
    public $dynamicDomesticValue;

    /**
     * @description dynamicOverseasValue
     * @var string
     */
    public $dynamicOverseasValue;

    /**
     * @description staticValue
     * @var string
     */
    public $staticValue;

    /**
     * @description staticDomesticValue
     * @var string
     */
    public $staticDomesticValue;

    /**
     * @description staticOverseasValue
     * @var string
     */
    public $staticOverseasValue;

}
