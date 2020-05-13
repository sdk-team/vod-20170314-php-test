<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeCdnDomainLogsResponse\domainLogModel\domainLogDetails;

use AlibabaCloud\Tea\Model;

class domainLogDetail extends Model {
    protected $_name = [
        'logPath' => 'LogPath',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'logSize' => 'LogSize',
        'logName' => 'LogName',
    ];
    public function validate() {
        Model::validateRequired('logPath', $this->logPath, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('logSize', $this->logSize, true);
        Model::validateRequired('logName', $this->logName, true);
    }
    public function toMap() {
        $res = [];
        $res['LogPath'] = $this->logPath;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['LogSize'] = $this->logSize;
        $res['LogName'] = $this->logName;
        return $res;
    }
    /**
     * @param array $map
     * @return domainLogDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LogPath'])){
            $model->logPath = $map['LogPath'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['LogSize'])){
            $model->logSize = $map['LogSize'];
        }
        if(isset($map['LogName'])){
            $model->logName = $map['LogName'];
        }
        return $model;
    }
    /**
     * @description logPath
     * @var string
     */
    public $logPath;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description logSize
     * @var integer
     */
    public $logSize;

    /**
     * @description logName
     * @var string
     */
    public $logName;

}
