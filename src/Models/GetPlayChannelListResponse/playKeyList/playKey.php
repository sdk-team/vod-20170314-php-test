<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelListResponse\playKeyList;

use AlibabaCloud\Tea\Model;

class playKey extends Model {
    protected $_name = [
        'channel' => 'Channel',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'signVersion' => 'SignVersion',
        'description' => 'Description',
        'clientVersion' => 'ClientVersion',
        'status' => 'Status',
        'source' => 'Source',
    ];
    public function validate() {
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('signVersion', $this->signVersion, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('clientVersion', $this->clientVersion, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('source', $this->source, true);
    }
    public function toMap() {
        $res = [];
        $res['Channel'] = $this->channel;
        $res['CreateTime'] = $this->createTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['SignVersion'] = $this->signVersion;
        $res['Description'] = $this->description;
        $res['ClientVersion'] = $this->clientVersion;
        $res['Status'] = $this->status;
        $res['Source'] = $this->source;
        return $res;
    }
    /**
     * @param array $map
     * @return playKey
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Channel'])){
            $model->channel = $map['Channel'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['ModifyTime'])){
            $model->modifyTime = $map['ModifyTime'];
        }
        if(isset($map['SignVersion'])){
            $model->signVersion = $map['SignVersion'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['ClientVersion'])){
            $model->clientVersion = $map['ClientVersion'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        return $model;
    }
    /**
     * @description channel
     * @var string
     */
    public $channel;

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
     * @description signVersion
     * @var string
     */
    public $signVersion;

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

    /**
     * @description state
     * @var string
     */
    public $status;

    /**
     * @description source
     * @var string
     */
    public $source;

}
