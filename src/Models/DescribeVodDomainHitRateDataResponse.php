<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHitRateDataResponse\hitRateInterval;

class DescribeVodDomainHitRateDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'dataInterval' => 'DataInterval',
        'hitRateInterval' => 'HitRateInterval',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('hitRateInterval', $this->hitRateInterval, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['DataInterval'] = $this->dataInterval;
        $res['HitRateInterval'] = null !== $this->hitRateInterval ? $this->hitRateInterval->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainHitRateDataResponse
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
        if(isset($map['HitRateInterval'])){
            $model->hitRateInterval = hitRateInterval::fromMap($map['HitRateInterval']);
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
     * @var DescribeVodDomainHitRateDataResponse.hitRateInterval
     */
    public $hitRateInterval;

}
