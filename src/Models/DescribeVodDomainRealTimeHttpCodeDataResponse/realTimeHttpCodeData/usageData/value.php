<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeHttpCodeDataResponse\realTimeHttpCodeData\usageData;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeHttpCodeDataResponse\realTimeHttpCodeData\usageData\value\realTimeCodeProportionData;

class value extends Model {
    protected $_name = [
        'realTimeCodeProportionData' => 'RealTimeCodeProportionData',
    ];
    public function validate() {
        Model::validateRequired('realTimeCodeProportionData', $this->realTimeCodeProportionData, true);
    }
    public function toMap() {
        $res = [];
        $res['RealTimeCodeProportionData'] = [];
        if(null !== $this->realTimeCodeProportionData && is_array($this->realTimeCodeProportionData)){
            $n = 0;
            foreach($this->realTimeCodeProportionData as $item){
                $res['RealTimeCodeProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return value
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RealTimeCodeProportionData'])){
            if(!empty($map['RealTimeCodeProportionData'])){
                $model->realTimeCodeProportionData = [];
                $n = 0;
                foreach($map['RealTimeCodeProportionData'] as $item) {
                    $model->realTimeCodeProportionData[$n++] = null !== $item ? realTimeCodeProportionData::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description RealTimeCodeProportionData
     * @var array
     */
    public $realTimeCodeProportionData;

}
