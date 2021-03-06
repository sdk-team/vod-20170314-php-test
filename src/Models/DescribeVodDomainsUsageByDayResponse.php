<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainsUsageByDayResponse\usageByDays;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainsUsageByDayResponse\usageTotal;

class DescribeVodDomainsUsageByDayResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'dataInterval' => 'DataInterval',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'usageByDays' => 'UsageByDays',
        'usageTotal' => 'UsageTotal',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('usageByDays', $this->usageByDays, true);
        Model::validateRequired('usageTotal', $this->usageTotal, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['DataInterval'] = $this->dataInterval;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['UsageByDays'] = null !== $this->usageByDays ? $this->usageByDays->toMap() : null;
        $res['UsageTotal'] = null !== $this->usageTotal ? $this->usageTotal->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainsUsageByDayResponse
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
        if(isset($map['UsageByDays'])){
            $model->usageByDays = usageByDays::fromMap($map['UsageByDays']);
        }
        if(isset($map['UsageTotal'])){
            $model->usageTotal = usageTotal::fromMap($map['UsageTotal']);
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
     * @description data.content.usageByDays
     * @var DescribeVodDomainsUsageByDayResponse.usageByDays
     */
    public $usageByDays;

    /**
     * @description data.content.usageTotal
     * @var DescribeVodDomainsUsageByDayResponse.usageTotal
     */
    public $usageTotal;

}
