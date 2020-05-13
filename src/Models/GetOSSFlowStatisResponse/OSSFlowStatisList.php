<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetOSSFlowStatisResponse;

use AlibabaCloud\Tea\Model;

class OSSFlowStatisList extends Model {
    protected $_name = [
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
        'networkOut' => 'NetworkOut',
    ];
    public function validate() {
        Model::validateRequired('statTime', $this->statTime, true);
        Model::validateRequired('statTimeUTC', $this->statTimeUTC, true);
        Model::validateRequired('networkOut', $this->networkOut, true);
    }
    public function toMap() {
        $res = [];
        $res['StatTime'] = $this->statTime;
        $res['StatTimeUTC'] = $this->statTimeUTC;
        $res['NetworkOut'] = $this->networkOut;
        return $res;
    }
    /**
     * @param array $map
     * @return OSSFlowStatisList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StatTime'])){
            $model->statTime = $map['StatTime'];
        }
        if(isset($map['StatTimeUTC'])){
            $model->statTimeUTC = $map['StatTimeUTC'];
        }
        if(isset($map['NetworkOut'])){
            $model->networkOut = $map['NetworkOut'];
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
     * @description networkOut
     * @var integer
     */
    public $networkOut;

}
