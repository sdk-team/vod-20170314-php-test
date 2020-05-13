<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainBpsDataResponse\bpsDataPerInterval;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainBpsDataResponse\supplyBpsDatas;

class DescribeDomainBpsDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'dataInterval' => 'DataInterval',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'bpsDataPerInterval' => 'BpsDataPerInterval',
        'supplyBpsDatas' => 'SupplyBpsDatas',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('bpsDataPerInterval', $this->bpsDataPerInterval, true);
        Model::validateRequired('supplyBpsDatas', $this->supplyBpsDatas, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['DataInterval'] = $this->dataInterval;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['BpsDataPerInterval'] = null !== $this->bpsDataPerInterval ? $this->bpsDataPerInterval->toMap() : null;
        $res['SupplyBpsDatas'] = null !== $this->supplyBpsDatas ? $this->supplyBpsDatas->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainBpsDataResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['DataInterval'])){
            $model->dataInterval = $map['DataInterval'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['BpsDataPerInterval'])){
            $model->bpsDataPerInterval = bpsDataPerInterval::fromMap($map['BpsDataPerInterval']);
        }
        if(isset($map['SupplyBpsDatas'])){
            $model->supplyBpsDatas = supplyBpsDatas::fromMap($map['SupplyBpsDatas']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.domainName
     * @var string
     */
    public $domainName;

    /**
     * @description data.dataInterval
     * @var string
     */
    public $dataInterval;

    /**
     * @description data.startTime
     * @var string
     */
    public $startTime;

    /**
     * @description data.endTime
     * @var string
     */
    public $endTime;

    /**
     * @description data.bpsDataPerIntervals
     * @var DescribeDomainBpsDataResponse.bpsDataPerInterval
     */
    public $bpsDataPerInterval;

    /**
     * @description data.supplyBpsDatas
     * @var DescribeDomainBpsDataResponse.supplyBpsDatas
     */
    public $supplyBpsDatas;

}
