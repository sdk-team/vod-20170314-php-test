<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHttpCodeDataResponse\httpCodeData\usageData;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHttpCodeDataResponse\httpCodeData\usageData\value\codeProportionData;

class value extends Model {
    protected $_name = [
        'codeProportionData' => 'CodeProportionData',
    ];
    public function validate() {
        Model::validateRequired('codeProportionData', $this->codeProportionData, true);
    }
    public function toMap() {
        $res = [];
        $res['CodeProportionData'] = [];
        if(null !== $this->codeProportionData && is_array($this->codeProportionData)){
            $n = 0;
            foreach($this->codeProportionData as $item){
                $res['CodeProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['CodeProportionData'])){
            if(!empty($map['CodeProportionData'])){
                $model->codeProportionData = [];
                $n = 0;
                foreach($map['CodeProportionData'] as $item) {
                    $model->codeProportionData[$n++] = null !== $item ? codeProportionData::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description CodeProportionData
     * @var array
     */
    public $codeProportionData;

}
