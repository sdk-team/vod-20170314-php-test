<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\SetCheckChannelResponse;

use AlibabaCloud\Tea\Model;

class audit extends Model {
    protected $_name = [
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
        'channel' => 'Channel',
        'customerId' => 'CustomerId',
        'legalSwitch' => 'LegalSwitch',
    ];
    public function validate() {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('legalSwitch', $this->legalSwitch, true);
    }
    public function toMap() {
        $res = [];
        $res['CreateTime'] = $this->createTime;
        $res['UpdateTime'] = $this->updateTime;
        $res['Channel'] = $this->channel;
        $res['CustomerId'] = $this->customerId;
        $res['LegalSwitch'] = $this->legalSwitch;
        return $res;
    }
    /**
     * @param array $map
     * @return audit
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['UpdateTime'])){
            $model->updateTime = $map['UpdateTime'];
        }
        if(isset($map['Channel'])){
            $model->channel = $map['Channel'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['LegalSwitch'])){
            $model->legalSwitch = $map['LegalSwitch'];
        }
        return $model;
    }
    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description updateTime
     * @var string
     */
    public $updateTime;

    /**
     * @description channel
     * @var string
     */
    public $channel;

    /**
     * @description customerId
     * @var string
     */
    public $customerId;

    /**
     * @description legalSwitch
     * @var string
     */
    public $legalSwitch;

}
