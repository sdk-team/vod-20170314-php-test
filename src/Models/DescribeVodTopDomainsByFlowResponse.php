<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodTopDomainsByFlowResponse\topDomains;

class DescribeVodTopDomainsByFlowResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'domainCount' => 'DomainCount',
        'domainOnlineCount' => 'DomainOnlineCount',
        'topDomains' => 'TopDomains',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('domainCount', $this->domainCount, true);
        Model::validateRequired('domainOnlineCount', $this->domainOnlineCount, true);
        Model::validateRequired('topDomains', $this->topDomains, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['DomainCount'] = $this->domainCount;
        $res['DomainOnlineCount'] = $this->domainOnlineCount;
        $res['TopDomains'] = null !== $this->topDomains ? $this->topDomains->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodTopDomainsByFlowResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['DomainCount'])){
            $model->domainCount = $map['DomainCount'];
        }
        if(isset($map['DomainOnlineCount'])){
            $model->domainOnlineCount = $map['DomainOnlineCount'];
        }
        if(isset($map['TopDomains'])){
            $model->topDomains = topDomains::fromMap($map['TopDomains']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.content.startTime
     * @var string
     */
    public $startTime;

    /**
     * @description data.content.endTime
     * @var string
     */
    public $endTime;

    /**
     * @description data.content.statisData.dm_cnt
     * @var integer
     */
    public $domainCount;

    /**
     * @description data.content.statisData.dm_online_cnt
     * @var integer
     */
    public $domainOnlineCount;

    /**
     * @description data.content.data
     * @var DescribeVodTopDomainsByFlowResponse.topDomains
     */
    public $topDomains;

}
