<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\UpdateApiAuthResponse;

use AlibabaCloud\Tea\Model;

class apiAuth extends Model {
    protected $_name = [
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'status' => 'Status',
        'expireTime' => 'ExpireTime',
        'signVersion' => 'SignVersion',
        'channel' => 'Channel',
        'description' => 'Description',
        'clientVersion' => 'ClientVersion',
    ];
    public function validate() {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('signVersion', $this->signVersion, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('clientVersion', $this->clientVersion, true);
    }
    public function toMap() {
        $res = [];
        $res['CreateTime'] = $this->createTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['Status'] = $this->status;
        $res['ExpireTime'] = $this->expireTime;
        $res['SignVersion'] = $this->signVersion;
        $res['Channel'] = $this->channel;
        $res['Description'] = $this->description;
        $res['ClientVersion'] = $this->clientVersion;
        return $res;
    }
    /**
     * @param array $map
     * @return apiAuth
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['ModifyTime'])){
            $model->modifyTime = $map['ModifyTime'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['ExpireTime'])){
            $model->expireTime = $map['ExpireTime'];
        }
        if(isset($map['SignVersion'])){
            $model->signVersion = $map['SignVersion'];
        }
        if(isset($map['Channel'])){
            $model->channel = $map['Channel'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['ClientVersion'])){
            $model->clientVersion = $map['ClientVersion'];
        }
        return $model;
    }
    /**
     * @description gmtCreate
     * @var string
     */
    public $createTime;

    /**
     * @description gmtModified
     * @var string
     */
    public $modifyTime;

    /**
     * @description state
     * @var integer
     */
    public $status;

    /**
     * @description expireTime
     * @var string
     */
    public $expireTime;

    /**
     * @description signVersion
     * @var string
     */
    public $signVersion;

    /**
     * @description channel
     * @var string
     */
    public $channel;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description clientVersion
     * @var string
     */
    public $clientVersion;

}
