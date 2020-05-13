<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddApiAuthRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'state' => 'State',
        'playKey' => 'PlayKey',
        'expireTime' => 'ExpireTime',
        'signVersion' => 'SignVersion',
        'channel' => 'Channel',
        'description' => 'Description',
        'clientVersion' => 'ClientVersion',
        'source' => 'Source',
    ];
    public function validate() {
        Model::validateRequired('playKey', $this->playKey, true);
        Model::validateRequired('signVersion', $this->signVersion, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('clientVersion', $this->clientVersion, true);
        Model::validateRequired('source', $this->source, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['State'] = $this->state;
        $res['PlayKey'] = $this->playKey;
        $res['ExpireTime'] = $this->expireTime;
        $res['SignVersion'] = $this->signVersion;
        $res['Channel'] = $this->channel;
        $res['Description'] = $this->description;
        $res['ClientVersion'] = $this->clientVersion;
        $res['Source'] = $this->source;
        return $res;
    }
    /**
     * @param array $map
     * @return AddApiAuthRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['State'])){
            $model->state = $map['State'];
        }
        if(isset($map['PlayKey'])){
            $model->playKey = $map['PlayKey'];
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
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var string
     */
    public $ownerId;

    /**
     * @description state
     * @var integer
     */
    public $state;

    /**
     * @description apiKey
     * @var string
     */
    public $playKey;

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

    /**
     * @description source
     * @var string
     */
    public $source;

}
