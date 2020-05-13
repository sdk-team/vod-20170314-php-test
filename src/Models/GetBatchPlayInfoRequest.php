<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetBatchPlayInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'videoIds' => 'VideoIds',
        'formats' => 'Formats',
        'authTimeout' => 'AuthTimeout',
        'rand' => 'Rand',
        'authInfo' => 'AuthInfo',
        'channel' => 'Channel',
        'playerVersion' => 'PlayerVersion',
        'outputType' => 'OutputType',
        'streamType' => 'StreamType',
        'reAuthInfo' => 'ReAuthInfo',
    ];
    public function validate() {
        Model::validateRequired('videoIds', $this->videoIds, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['VideoIds'] = $this->videoIds;
        $res['Formats'] = $this->formats;
        $res['AuthTimeout'] = $this->authTimeout;
        $res['Rand'] = $this->rand;
        $res['AuthInfo'] = $this->authInfo;
        $res['Channel'] = $this->channel;
        $res['PlayerVersion'] = $this->playerVersion;
        $res['OutputType'] = $this->outputType;
        $res['StreamType'] = $this->streamType;
        $res['ReAuthInfo'] = $this->reAuthInfo;
        return $res;
    }
    /**
     * @param array $map
     * @return GetBatchPlayInfoRequest
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
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if(isset($map['VideoIds'])){
            $model->videoIds = $map['VideoIds'];
        }
        if(isset($map['Formats'])){
            $model->formats = $map['Formats'];
        }
        if(isset($map['AuthTimeout'])){
            $model->authTimeout = $map['AuthTimeout'];
        }
        if(isset($map['Rand'])){
            $model->rand = $map['Rand'];
        }
        if(isset($map['AuthInfo'])){
            $model->authInfo = $map['AuthInfo'];
        }
        if(isset($map['Channel'])){
            $model->channel = $map['Channel'];
        }
        if(isset($map['PlayerVersion'])){
            $model->playerVersion = $map['PlayerVersion'];
        }
        if(isset($map['OutputType'])){
            $model->outputType = $map['OutputType'];
        }
        if(isset($map['StreamType'])){
            $model->streamType = $map['StreamType'];
        }
        if(isset($map['ReAuthInfo'])){
            $model->reAuthInfo = $map['ReAuthInfo'];
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
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

    /**
     * @description videoIds
     * @var string
     */
    public $videoIds;

    /**
     * @description formats
     * @var string
     */
    public $formats;

    /**
     * @description authTimeout
     * @var integer
     */
    public $authTimeout;

    /**
     * @description rand
     * @var string
     */
    public $rand;

    /**
     * @description authInfo
     * @var string
     */
    public $authInfo;

    /**
     * @description channel
     * @var string
     */
    public $channel;

    /**
     * @description playerVersion
     * @var string
     */
    public $playerVersion;

    /**
     * @description outputType
     * @var string
     */
    public $outputType;

    /**
     * @description streamType
     * @var string
     */
    public $streamType;

    /**
     * @description reAuthInfo
     * @var string
     */
    public $reAuthInfo;

}
