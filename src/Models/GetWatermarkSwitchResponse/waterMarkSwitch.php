<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkSwitchResponse;

use AlibabaCloud\Tea\Model;

class waterMarkSwitch extends Model {
    protected $_name = [
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
        'active' => 'Active',
        'customerId' => 'CustomerId',
    ];
    public function validate() {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('active', $this->active, true);
        Model::validateRequired('customerId', $this->customerId, true);
    }
    public function toMap() {
        $res = [];
        $res['CreateTime'] = $this->createTime;
        $res['UpdateTime'] = $this->updateTime;
        $res['Active'] = $this->active;
        $res['CustomerId'] = $this->customerId;
        return $res;
    }
    /**
     * @param array $map
     * @return waterMarkSwitch
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['UpdateTime'])){
            $model->updateTime = $map['UpdateTime'];
        }
        if(isset($map['Active'])){
            $model->active = $map['Active'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        return $model;
    }
    /**
     * @description createTime
     * @var integer
     */
    public $createTime;

    /**
     * @description updateTime
     * @var integer
     */
    public $updateTime;

    /**
     * @description isOpen
     * @var string
     */
    public $active;

    /**
     * @description customerId
     * @var string
     */
    public $customerId;

}
