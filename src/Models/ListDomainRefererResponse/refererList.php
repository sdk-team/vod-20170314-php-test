<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListDomainRefererResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListDomainRefererResponse\refererList\refererItem;

class refererList extends Model {
    protected $_name = [
        'refererItem' => 'RefererItem',
    ];
    public function validate() {
        Model::validateRequired('refererItem', $this->refererItem, true);
    }
    public function toMap() {
        $res = [];
        $res['RefererItem'] = [];
        if(null !== $this->refererItem && is_array($this->refererItem)){
            $n = 0;
            foreach($this->refererItem as $item){
                $res['RefererItem'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return refererList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RefererItem'])){
            if(!empty($map['RefererItem'])){
                $model->refererItem = [];
                $n = 0;
                foreach($map['RefererItem'] as $item) {
                    $model->refererItem[$n++] = null !== $item ? refererItem::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description RefererItem
     * @var array
     */
    public $refererItem;

}
