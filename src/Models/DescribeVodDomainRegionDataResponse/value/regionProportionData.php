<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRegionDataResponse\value;

use AlibabaCloud\Tea\Model;

class regionProportionData extends Model {
    protected $_name = [
        'region' => 'Region',
        'proportion' => 'Proportion',
        'regionEname' => 'RegionEname',
        'avgObjectSize' => 'AvgObjectSize',
        'avgResponseTime' => 'AvgResponseTime',
        'bps' => 'Bps',
        'qps' => 'Qps',
        'avgResponseRate' => 'AvgResponseRate',
        'reqErrRate' => 'ReqErrRate',
        'totalBytes' => 'TotalBytes',
        'bytesProportion' => 'BytesProportion',
        'totalQuery' => 'TotalQuery',
    ];
    public function validate() {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('proportion', $this->proportion, true);
        Model::validateRequired('regionEname', $this->regionEname, true);
        Model::validateRequired('avgObjectSize', $this->avgObjectSize, true);
        Model::validateRequired('avgResponseTime', $this->avgResponseTime, true);
        Model::validateRequired('bps', $this->bps, true);
        Model::validateRequired('qps', $this->qps, true);
        Model::validateRequired('avgResponseRate', $this->avgResponseRate, true);
        Model::validateRequired('reqErrRate', $this->reqErrRate, true);
        Model::validateRequired('totalBytes', $this->totalBytes, true);
        Model::validateRequired('bytesProportion', $this->bytesProportion, true);
        Model::validateRequired('totalQuery', $this->totalQuery, true);
    }
    public function toMap() {
        $res = [];
        $res['Region'] = $this->region;
        $res['Proportion'] = $this->proportion;
        $res['RegionEname'] = $this->regionEname;
        $res['AvgObjectSize'] = $this->avgObjectSize;
        $res['AvgResponseTime'] = $this->avgResponseTime;
        $res['Bps'] = $this->bps;
        $res['Qps'] = $this->qps;
        $res['AvgResponseRate'] = $this->avgResponseRate;
        $res['ReqErrRate'] = $this->reqErrRate;
        $res['TotalBytes'] = $this->totalBytes;
        $res['BytesProportion'] = $this->bytesProportion;
        $res['TotalQuery'] = $this->totalQuery;
        return $res;
    }
    /**
     * @param array $map
     * @return regionProportionData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['Proportion'])){
            $model->proportion = $map['Proportion'];
        }
        if(isset($map['RegionEname'])){
            $model->regionEname = $map['RegionEname'];
        }
        if(isset($map['AvgObjectSize'])){
            $model->avgObjectSize = $map['AvgObjectSize'];
        }
        if(isset($map['AvgResponseTime'])){
            $model->avgResponseTime = $map['AvgResponseTime'];
        }
        if(isset($map['Bps'])){
            $model->bps = $map['Bps'];
        }
        if(isset($map['Qps'])){
            $model->qps = $map['Qps'];
        }
        if(isset($map['AvgResponseRate'])){
            $model->avgResponseRate = $map['AvgResponseRate'];
        }
        if(isset($map['ReqErrRate'])){
            $model->reqErrRate = $map['ReqErrRate'];
        }
        if(isset($map['TotalBytes'])){
            $model->totalBytes = $map['TotalBytes'];
        }
        if(isset($map['BytesProportion'])){
            $model->bytesProportion = $map['BytesProportion'];
        }
        if(isset($map['TotalQuery'])){
            $model->totalQuery = $map['TotalQuery'];
        }
        return $model;
    }
    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description totalQueryPer
     * @var string
     */
    public $proportion;

    /**
     * @description regionEname
     * @var string
     */
    public $regionEname;

    /**
     * @description avgObjectSize
     * @var string
     */
    public $avgObjectSize;

    /**
     * @description avgResponseTime
     * @var string
     */
    public $avgResponseTime;

    /**
     * @description bps
     * @var string
     */
    public $bps;

    /**
     * @description qps
     * @var string
     */
    public $qps;

    /**
     * @description avgResponseRate
     * @var string
     */
    public $avgResponseRate;

    /**
     * @description reqErrRate
     * @var string
     */
    public $reqErrRate;

    /**
     * @description totalBytes
     * @var string
     */
    public $totalBytes;

    /**
     * @description totalBytesPer
     * @var string
     */
    public $bytesProportion;

    /**
     * @description totalQuery
     * @var string
     */
    public $totalQuery;

}
