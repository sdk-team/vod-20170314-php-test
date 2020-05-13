<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListDomainRefererResponse\refererList;

use AlibabaCloud\Tea\Model;

class refererItem extends Model {
    protected $_name = [
        'refererId' => 'RefererId',
        'referer' => 'Referer',
        'createTime' => 'CreateTime',
    ];
    public function validate() {
        Model::validateRequired('refererId', $this->refererId, true);
        Model::validateRequired('referer', $this->referer, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }
    public function toMap() {
        $res = [];
        $res['RefererId'] = $this->refererId;
        $res['Referer'] = $this->referer;
        $res['CreateTime'] = $this->createTime;
        return $res;
    }
    /**
     * @param array $map
     * @return refererItem
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RefererId'])){
            $model->refererId = $map['RefererId'];
        }
        if(isset($map['Referer'])){
            $model->referer = $map['Referer'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        return $model;
    }
    /**
     * @description id
     * @var integer
     */
    public $refererId;

    /**
     * @description referer
     * @var string
     */
    public $referer;

    /**
     * @description gmtCreate
     * @var string
     */
    public $createTime;

}
