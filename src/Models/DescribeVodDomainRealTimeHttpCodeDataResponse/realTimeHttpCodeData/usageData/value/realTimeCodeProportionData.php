<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeHttpCodeDataResponse\realTimeHttpCodeData\usageData\value;

use AlibabaCloud\Tea\Model;

class realTimeCodeProportionData extends Model {
    protected $_name = [
        'code' => 'Code',
        'proportion' => 'Proportion',
        'count' => 'Count',
    ];
    public function validate() {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('proportion', $this->proportion, true);
        Model::validateRequired('count', $this->count, true);
    }
    public function toMap() {
        $res = [];
        $res['Code'] = $this->code;
        $res['Proportion'] = $this->proportion;
        $res['Count'] = $this->count;
        return $res;
    }
    /**
     * @param array $map
     * @return realTimeCodeProportionData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Proportion'])){
            $model->proportion = $map['Proportion'];
        }
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        return $model;
    }
    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description number
     * @var string
     */
    public $proportion;

    /**
     * @description count
     * @var string
     */
    public $count;

}
