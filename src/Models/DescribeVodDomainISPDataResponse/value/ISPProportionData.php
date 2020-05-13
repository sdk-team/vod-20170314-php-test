<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainISPDataResponse\value;

use AlibabaCloud\Tea\Model;

class ISPProportionData extends Model {
    protected $_name = [
        'ISP' => 'ISP',
        'proportion' => 'Proportion',
        'ispEname' => 'IspEname',
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
        Model::validateRequired('ISP', $this->ISP, true);
        Model::validateRequired('proportion', $this->proportion, true);
        Model::validateRequired('ispEname', $this->ispEname, true);
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
        $res['ISP'] = $this->ISP;
        $res['Proportion'] = $this->proportion;
        $res['IspEname'] = $this->ispEname;
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
     * @return ISPProportionData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ISP'])){
            $model->ISP = $map['ISP'];
        }
        if(isset($map['Proportion'])){
            $model->proportion = $map['Proportion'];
        }
        if(isset($map['IspEname'])){
            $model->ispEname = $map['IspEname'];
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
     * @description isp
     * @var string
     */
    public $ISP;

    /**
     * @description totalQueryPer
     * @var string
     */
    public $proportion;

    /**
     * @description ispEname
     * @var string
     */
    public $ispEname;

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
