<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHttpCodeDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHttpCodeDataResponse\httpCodeData\usageData;

class httpCodeData extends Model {
    protected $_name = [
        'usageData' => 'UsageData',
    ];
    public function validate() {
        Model::validateRequired('usageData', $this->usageData, true);
    }
    public function toMap() {
        $res = [];
        $res['UsageData'] = [];
        if(null !== $this->usageData && is_array($this->usageData)){
            $n = 0;
            foreach($this->usageData as $item){
                $res['UsageData'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return httpCodeData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UsageData'])){
            if(!empty($map['UsageData'])){
                $model->usageData = [];
                $n = 0;
                foreach($map['UsageData'] as $item) {
                    $model->usageData[$n++] = null !== $item ? usageData::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description UsageData
     * @var array
     */
    public $usageData;

}
