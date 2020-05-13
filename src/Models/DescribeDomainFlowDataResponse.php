<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainFlowDataResponse\flowDataPerInterval;

class DescribeDomainFlowDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'dataInterval' => 'DataInterval',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'flowDataPerInterval' => 'FlowDataPerInterval',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('flowDataPerInterval', $this->flowDataPerInterval, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['DataInterval'] = $this->dataInterval;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['FlowDataPerInterval'] = null !== $this->flowDataPerInterval ? $this->flowDataPerInterval->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainFlowDataResponse
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
        if(isset($map['FlowDataPerInterval'])){
            $model->flowDataPerInterval = flowDataPerInterval::fromMap($map['FlowDataPerInterval']);
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
     * @description data.flowDataPerIntervals
     * @var DescribeDomainFlowDataResponse.flowDataPerInterval
     */
    public $flowDataPerInterval;

}
