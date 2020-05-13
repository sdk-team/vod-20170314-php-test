<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainISPDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainISPDataResponse\value\ISPProportionData;

class value extends Model {
    protected $_name = [
        'ISPProportionData' => 'ISPProportionData',
    ];
    public function validate() {
        Model::validateRequired('ISPProportionData', $this->ISPProportionData, true);
    }
    public function toMap() {
        $res = [];
        $res['ISPProportionData'] = [];
        if(null !== $this->ISPProportionData && is_array($this->ISPProportionData)){
            $n = 0;
            foreach($this->ISPProportionData as $item){
                $res['ISPProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['ISPProportionData'])){
            if(!empty($map['ISPProportionData'])){
                $model->ISPProportionData = [];
                $n = 0;
                foreach($map['ISPProportionData'] as $item) {
                    $model->ISPProportionData[$n++] = null !== $item ? ISPProportionData::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ISPProportionData
     * @var array
     */
    public $ISPProportionData;

}
