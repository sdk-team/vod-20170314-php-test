<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeSrcBpsDataResponse\realTimeSrcBpsDataPerInterval;

class DescribeVodDomainRealTimeSrcBpsDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'dataInterval' => 'DataInterval',
        'realTimeSrcBpsDataPerInterval' => 'RealTimeSrcBpsDataPerInterval',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('realTimeSrcBpsDataPerInterval', $this->realTimeSrcBpsDataPerInterval, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['DataInterval'] = $this->dataInterval;
        $res['RealTimeSrcBpsDataPerInterval'] = null !== $this->realTimeSrcBpsDataPerInterval ? $this->realTimeSrcBpsDataPerInterval->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainRealTimeSrcBpsDataResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['DataInterval'])){
            $model->dataInterval = $map['DataInterval'];
        }
        if(isset($map['RealTimeSrcBpsDataPerInterval'])){
            $model->realTimeSrcBpsDataPerInterval = realTimeSrcBpsDataPerInterval::fromMap($map['RealTimeSrcBpsDataPerInterval']);
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
     * @description data.content.interval
     * @var string
     */
    public $dataInterval;

    /**
     * @description data.content.data
     * @var DescribeVodDomainRealTimeSrcBpsDataResponse.realTimeSrcBpsDataPerInterval
     */
    public $realTimeSrcBpsDataPerInterval;

}
