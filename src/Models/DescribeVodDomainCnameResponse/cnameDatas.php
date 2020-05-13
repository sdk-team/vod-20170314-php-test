<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainCnameResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainCnameResponse\cnameDatas\data;

class cnameDatas extends Model {
    protected $_name = [
        'data' => 'Data',
    ];
    public function validate() {
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        $res['Data'] = [];
        if(null !== $this->data && is_array($this->data)){
            $n = 0;
            foreach($this->data as $item){
                $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return cnameDatas
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Data'])){
            if(!empty($map['Data'])){
                $model->data = [];
                $n = 0;
                foreach($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Data
     * @var array
     */
    public $data;

}
