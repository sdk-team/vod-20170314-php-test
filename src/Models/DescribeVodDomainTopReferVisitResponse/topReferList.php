<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopReferVisitResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopReferVisitResponse\topReferList\referList;

class topReferList extends Model {
    protected $_name = [
        'referList' => 'ReferList',
    ];
    public function validate() {
        Model::validateRequired('referList', $this->referList, true);
    }
    public function toMap() {
        $res = [];
        $res['ReferList'] = [];
        if(null !== $this->referList && is_array($this->referList)){
            $n = 0;
            foreach($this->referList as $item){
                $res['ReferList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return topReferList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ReferList'])){
            if(!empty($map['ReferList'])){
                $model->referList = [];
                $n = 0;
                foreach($map['ReferList'] as $item) {
                    $model->referList[$n++] = null !== $item ? referList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ReferList
     * @var array
     */
    public $referList;

}
