<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRegionDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRegionDataResponse\value\regionProportionData;

class value extends Model {
    protected $_name = [
        'regionProportionData' => 'RegionProportionData',
    ];
    public function validate() {
        Model::validateRequired('regionProportionData', $this->regionProportionData, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionProportionData'] = [];
        if(null !== $this->regionProportionData && is_array($this->regionProportionData)){
            $n = 0;
            foreach($this->regionProportionData as $item){
                $res['RegionProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['RegionProportionData'])){
            if(!empty($map['RegionProportionData'])){
                $model->regionProportionData = [];
                $n = 0;
                foreach($map['RegionProportionData'] as $item) {
                    $model->regionProportionData[$n++] = null !== $item ? regionProportionData::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description RegionProportionData
     * @var array
     */
    public $regionProportionData;

}
