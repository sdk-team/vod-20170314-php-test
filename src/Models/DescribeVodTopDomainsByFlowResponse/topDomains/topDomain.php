<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodTopDomainsByFlowResponse\topDomains;

use AlibabaCloud\Tea\Model;

class topDomain extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'rank' => 'Rank',
        'totalTraffic' => 'TotalTraffic',
        'trafficPercent' => 'TrafficPercent',
        'maxBps' => 'MaxBps',
        'maxBpsTime' => 'MaxBpsTime',
        'totalAccess' => 'TotalAccess',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('rank', $this->rank, true);
        Model::validateRequired('totalTraffic', $this->totalTraffic, true);
        Model::validateRequired('trafficPercent', $this->trafficPercent, true);
        Model::validateRequired('maxBps', $this->maxBps, true);
        Model::validateRequired('maxBpsTime', $this->maxBpsTime, true);
        Model::validateRequired('totalAccess', $this->totalAccess, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['Rank'] = $this->rank;
        $res['TotalTraffic'] = $this->totalTraffic;
        $res['TrafficPercent'] = $this->trafficPercent;
        $res['MaxBps'] = $this->maxBps;
        $res['MaxBpsTime'] = $this->maxBpsTime;
        $res['TotalAccess'] = $this->totalAccess;
        return $res;
    }
    /**
     * @param array $map
     * @return topDomain
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Rank'])){
            $model->rank = $map['Rank'];
        }
        if(isset($map['TotalTraffic'])){
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if(isset($map['TrafficPercent'])){
            $model->trafficPercent = $map['TrafficPercent'];
        }
        if(isset($map['MaxBps'])){
            $model->maxBps = $map['MaxBps'];
        }
        if(isset($map['MaxBpsTime'])){
            $model->maxBpsTime = $map['MaxBpsTime'];
        }
        if(isset($map['TotalAccess'])){
            $model->totalAccess = $map['TotalAccess'];
        }
        return $model;
    }
    /**
     * @description dm_name
     * @var string
     */
    public $domainName;

    /**
     * @description rank
     * @var integer
     */
    public $rank;

    /**
     * @description t_traf
     * @var string
     */
    public $totalTraffic;

    /**
     * @description traf_per
     * @var string
     */
    public $trafficPercent;

    /**
     * @description max_bps
     * @var integer
     */
    public $maxBps;

    /**
     * @description max_bps_time
     * @var string
     */
    public $maxBpsTime;

    /**
     * @description t_acc
     * @var integer
     */
    public $totalAccess;

}
