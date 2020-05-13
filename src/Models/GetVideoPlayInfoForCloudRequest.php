<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPlayInfoForCloudRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'channel' => 'Channel',
        'clientTS' => 'ClientTS',
        'clientVersion' => 'ClientVersion',
        'playSign' => 'PlaySign',
        'signVersion' => 'SignVersion',
        'videoId' => 'VideoId',
    ];
    public function validate() {
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('clientTS', $this->clientTS, true);
        Model::validateRequired('clientVersion', $this->clientVersion, true);
        Model::validateRequired('playSign', $this->playSign, true);
        Model::validateRequired('signVersion', $this->signVersion, true);
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Channel'] = $this->channel;
        $res['ClientTS'] = $this->clientTS;
        $res['ClientVersion'] = $this->clientVersion;
        $res['PlaySign'] = $this->playSign;
        $res['SignVersion'] = $this->signVersion;
        $res['VideoId'] = $this->videoId;
        return $res;
    }
    /**
     * @param array $map
     * @return GetVideoPlayInfoForCloudRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['Channel'])){
            $model->channel = $map['Channel'];
        }
        if(isset($map['ClientTS'])){
            $model->clientTS = $map['ClientTS'];
        }
        if(isset($map['ClientVersion'])){
            $model->clientVersion = $map['ClientVersion'];
        }
        if(isset($map['PlaySign'])){
            $model->playSign = $map['PlaySign'];
        }
        if(isset($map['SignVersion'])){
            $model->signVersion = $map['SignVersion'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
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
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description channel
     * @var string
     */
    public $channel;

    /**
     * @description clientTS
     * @var integer
     */
    public $clientTS;

    /**
     * @description clientVersion
     * @var string
     */
    public $clientVersion;

    /**
     * @description playSign
     * @var string
     */
    public $playSign;

    /**
     * @description signVersion
     * @var string
     */
    public $signVersion;

    /**
     * @description mediaId
     * @var string
     */
    public $videoId;

}
