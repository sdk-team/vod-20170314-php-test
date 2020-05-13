<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeReqHitRateDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeReqHitRateDataResponse\data\reqHitRateDataModel;

class data extends Model {
    protected $_name = [
        'reqHitRateDataModel' => 'ReqHitRateDataModel',
    ];
    public function validate() {
        Model::validateRequired('reqHitRateDataModel', $this->reqHitRateDataModel, true);
    }
    public function toMap() {
        $res = [];
        $res['ReqHitRateDataModel'] = [];
        if(null !== $this->reqHitRateDataModel && is_array($this->reqHitRateDataModel)){
            $n = 0;
            foreach($this->reqHitRateDataModel as $item){
                $res['ReqHitRateDataModel'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ReqHitRateDataModel'])){
            if(!empty($map['ReqHitRateDataModel'])){
                $model->reqHitRateDataModel = [];
                $n = 0;
                foreach($map['ReqHitRateDataModel'] as $item) {
                    $model->reqHitRateDataModel[$n++] = null !== $item ? reqHitRateDataModel::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ReqHitRateDataModel
     * @var array
     */
    public $reqHitRateDataModel;

}
