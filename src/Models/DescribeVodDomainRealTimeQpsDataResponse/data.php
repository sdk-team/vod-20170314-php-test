<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeQpsDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeQpsDataResponse\data\qpsModel;

class data extends Model {
    protected $_name = [
        'qpsModel' => 'QpsModel',
    ];
    public function validate() {
        Model::validateRequired('qpsModel', $this->qpsModel, true);
    }
    public function toMap() {
        $res = [];
        $res['QpsModel'] = [];
        if(null !== $this->qpsModel && is_array($this->qpsModel)){
            $n = 0;
            foreach($this->qpsModel as $item){
                $res['QpsModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['QpsModel'])){
            if(!empty($map['QpsModel'])){
                $model->qpsModel = [];
                $n = 0;
                foreach($map['QpsModel'] as $item) {
                    $model->qpsModel[$n++] = null !== $item ? qpsModel::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description QpsModel
     * @var array
     */
    public $qpsModel;

}
