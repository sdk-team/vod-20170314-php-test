<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainQpsDataResponse\qpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model {
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
        'domesticValue' => 'DomesticValue',
        'overseasValue' => 'OverseasValue',
        'accValue' => 'AccValue',
        'accDomesticValue' => 'AccDomesticValue',
        'accOverseasValue' => 'AccOverseasValue',
        'httpsValue' => 'HttpsValue',
        'httpsDomesticValue' => 'HttpsDomesticValue',
        'httpsOverseasValue' => 'HttpsOverseasValue',
        'httpsAccValue' => 'HttpsAccValue',
        'httpsAccDomesticValue' => 'HttpsAccDomesticValue',
        'httpsAccOverseasValue' => 'HttpsAccOverseasValue',
    ];
    public function validate() {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('domesticValue', $this->domesticValue, true);
        Model::validateRequired('overseasValue', $this->overseasValue, true);
        Model::validateRequired('accValue', $this->accValue, true);
        Model::validateRequired('accDomesticValue', $this->accDomesticValue, true);
        Model::validateRequired('accOverseasValue', $this->accOverseasValue, true);
        Model::validateRequired('httpsValue', $this->httpsValue, true);
        Model::validateRequired('httpsDomesticValue', $this->httpsDomesticValue, true);
        Model::validateRequired('httpsOverseasValue', $this->httpsOverseasValue, true);
        Model::validateRequired('httpsAccValue', $this->httpsAccValue, true);
        Model::validateRequired('httpsAccDomesticValue', $this->httpsAccDomesticValue, true);
        Model::validateRequired('httpsAccOverseasValue', $this->httpsAccOverseasValue, true);
    }
    public function toMap() {
        $res = [];
        $res['TimeStamp'] = $this->timeStamp;
        $res['Value'] = $this->value;
        $res['DomesticValue'] = $this->domesticValue;
        $res['OverseasValue'] = $this->overseasValue;
        $res['AccValue'] = $this->accValue;
        $res['AccDomesticValue'] = $this->accDomesticValue;
        $res['AccOverseasValue'] = $this->accOverseasValue;
        $res['HttpsValue'] = $this->httpsValue;
        $res['HttpsDomesticValue'] = $this->httpsDomesticValue;
        $res['HttpsOverseasValue'] = $this->httpsOverseasValue;
        $res['HttpsAccValue'] = $this->httpsAccValue;
        $res['HttpsAccDomesticValue'] = $this->httpsAccDomesticValue;
        $res['HttpsAccOverseasValue'] = $this->httpsAccOverseasValue;
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
        if(isset($map['AccValue'])){
            $model->accValue = $map['AccValue'];
        }
        if(isset($map['AccDomesticValue'])){
            $model->accDomesticValue = $map['AccDomesticValue'];
        }
        if(isset($map['AccOverseasValue'])){
            $model->accOverseasValue = $map['AccOverseasValue'];
        }
        if(isset($map['HttpsValue'])){
            $model->httpsValue = $map['HttpsValue'];
        }
        if(isset($map['HttpsDomesticValue'])){
            $model->httpsDomesticValue = $map['HttpsDomesticValue'];
        }
        if(isset($map['HttpsOverseasValue'])){
            $model->httpsOverseasValue = $map['HttpsOverseasValue'];
        }
        if(isset($map['HttpsAccValue'])){
            $model->httpsAccValue = $map['HttpsAccValue'];
        }
        if(isset($map['HttpsAccDomesticValue'])){
            $model->httpsAccDomesticValue = $map['HttpsAccDomesticValue'];
        }
        if(isset($map['HttpsAccOverseasValue'])){
            $model->httpsAccOverseasValue = $map['HttpsAccOverseasValue'];
        }
        return $model;
    }
    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

    /**
     * @description l1_vod_all_all_all_qps
     * @var string
     */
    public $value;

    /**
     * @description l1_vod_all_inner_all_qps
     * @var string
     */
    public $domesticValue;

    /**
     * @description l1_vod_all_out_all_qps
     * @var string
     */
    public $overseasValue;

    /**
     * @description l1_vod_all_all_all_acc
     * @var string
     */
    public $accValue;

    /**
     * @description l1_vod_all_inner_out_acc
     * @var string
     */
    public $accDomesticValue;

    /**
     * @description l1_vod_all_out_all_acc
     * @var string
     */
    public $accOverseasValue;

    /**
     * @description l1_vod_all_all_https_qps
     * @var string
     */
    public $httpsValue;

    /**
     * @description l1_vod_all_inner_https_qps
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @description l1_vod_all_out_https_qps
     * @var string
     */
    public $httpsOverseasValue;

    /**
     * @description l1_vod_all_all_https_acc
     * @var string
     */
    public $httpsAccValue;

    /**
     * @description l1_vod_all_inner_https_acc
     * @var string
     */
    public $httpsAccDomesticValue;

    /**
     * @description l1_vod_all_out_https_acc
     * @var string
     */
    public $httpsAccOverseasValue;

}
