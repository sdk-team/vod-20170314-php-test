<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeBpsDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeBpsDataResponse\data\bpsModel;

class data extends Model {
    protected $_name = [
        'bpsModel' => 'BpsModel',
    ];
    public function validate() {
        Model::validateRequired('bpsModel', $this->bpsModel, true);
    }
    public function toMap() {
        $res = [];
        $res['BpsModel'] = [];
        if(null !== $this->bpsModel && is_array($this->bpsModel)){
            $n = 0;
            foreach($this->bpsModel as $item){
                $res['BpsModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['BpsModel'])){
            if(!empty($map['BpsModel'])){
                $model->bpsModel = [];
                $n = 0;
                foreach($map['BpsModel'] as $item) {
                    $model->bpsModel[$n++] = null !== $item ? bpsModel::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description BpsModel
     * @var array
     */
    public $bpsModel;

}
