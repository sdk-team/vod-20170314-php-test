<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetOSSStatisResponse\ossStatisList;

use AlibabaCloud\Tea\Model;

class OSSMetric extends Model {
    protected $_name = [
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
        'storageUtilization' => 'StorageUtilization',
    ];
    public function validate() {
        Model::validateRequired('statTime', $this->statTime, true);
        Model::validateRequired('statTimeUTC', $this->statTimeUTC, true);
        Model::validateRequired('storageUtilization', $this->storageUtilization, true);
    }
    public function toMap() {
        $res = [];
        $res['StatTime'] = $this->statTime;
        $res['StatTimeUTC'] = $this->statTimeUTC;
        $res['StorageUtilization'] = $this->storageUtilization;
        return $res;
    }
    /**
     * @param array $map
     * @return OSSMetric
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StatTime'])){
            $model->statTime = $map['StatTime'];
        }
        if(isset($map['StatTimeUTC'])){
            $model->statTimeUTC = $map['StatTimeUTC'];
        }
        if(isset($map['StorageUtilization'])){
            $model->storageUtilization = $map['StorageUtilization'];
        }
        return $model;
    }
    /**
     * @description statTimeStr
     * @var string
     */
    public $statTime;

    /**
     * @description statTimeUTC
     * @var string
     */
    public $statTimeUTC;

    /**
     * @description storageUtilization
     * @var integer
     */
    public $storageUtilization;

}
