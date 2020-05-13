<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainsUsageByDayResponse;

use AlibabaCloud\Tea\Model;

class usageTotal extends Model {
    protected $_name = [
        'bytesHitRate' => 'BytesHitRate',
        'requestHitRate' => 'RequestHitRate',
        'maxBps' => 'MaxBps',
        'maxBpsTime' => 'MaxBpsTime',
        'maxSrcBps' => 'MaxSrcBps',
        'maxSrcBpsTime' => 'MaxSrcBpsTime',
        'totalAccess' => 'TotalAccess',
        'totalTraffic' => 'TotalTraffic',
    ];
    public function validate() {
        Model::validateRequired('bytesHitRate', $this->bytesHitRate, true);
        Model::validateRequired('requestHitRate', $this->requestHitRate, true);
        Model::validateRequired('maxBps', $this->maxBps, true);
        Model::validateRequired('maxBpsTime', $this->maxBpsTime, true);
        Model::validateRequired('maxSrcBps', $this->maxSrcBps, true);
        Model::validateRequired('maxSrcBpsTime', $this->maxSrcBpsTime, true);
        Model::validateRequired('totalAccess', $this->totalAccess, true);
        Model::validateRequired('totalTraffic', $this->totalTraffic, true);
    }
    public function toMap() {
        $res = [];
        $res['BytesHitRate'] = $this->bytesHitRate;
        $res['RequestHitRate'] = $this->requestHitRate;
        $res['MaxBps'] = $this->maxBps;
        $res['MaxBpsTime'] = $this->maxBpsTime;
        $res['MaxSrcBps'] = $this->maxSrcBps;
        $res['MaxSrcBpsTime'] = $this->maxSrcBpsTime;
        $res['TotalAccess'] = $this->totalAccess;
        $res['TotalTraffic'] = $this->totalTraffic;
        return $res;
    }
    /**
     * @param array $map
     * @return usageTotal
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BytesHitRate'])){
            $model->bytesHitRate = $map['BytesHitRate'];
        }
        if(isset($map['RequestHitRate'])){
            $model->requestHitRate = $map['RequestHitRate'];
        }
        if(isset($map['MaxBps'])){
            $model->maxBps = $map['MaxBps'];
        }
        if(isset($map['MaxBpsTime'])){
            $model->maxBpsTime = $map['MaxBpsTime'];
        }
        if(isset($map['MaxSrcBps'])){
            $model->maxSrcBps = $map['MaxSrcBps'];
        }
        if(isset($map['MaxSrcBpsTime'])){
            $model->maxSrcBpsTime = $map['MaxSrcBpsTime'];
        }
        if(isset($map['TotalAccess'])){
            $model->totalAccess = $map['TotalAccess'];
        }
        if(isset($map['TotalTraffic'])){
            $model->totalTraffic = $map['TotalTraffic'];
        }
        return $model;
    }
    /**
     * @description byteHitRate
     * @var string
     */
    public $bytesHitRate;

    /**
     * @description requestHitRate
     * @var string
     */
    public $requestHitRate;

    /**
     * @description maxBps
     * @var string
     */
    public $maxBps;

    /**
     * @description maxBpsTime
     * @var string
     */
    public $maxBpsTime;

    /**
     * @description maxSrcBps
     * @var string
     */
    public $maxSrcBps;

    /**
     * @description maxSrcBpsTime
     * @var string
     */
    public $maxSrcBpsTime;

    /**
     * @description totalAccess
     * @var string
     */
    public $totalAccess;

    /**
     * @description totalTraffic
     * @var string
     */
    public $totalTraffic;

}
