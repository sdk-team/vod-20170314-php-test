<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class TransferMediaDataRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'videoId' => 'VideoId',
        'videoInfo' => 'VideoInfo',
        'mezzanineInfo' => 'MezzanineInfo',
        'streamInfos' => 'StreamInfos',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['VideoInfo'] = $this->videoInfo;
        $res['MezzanineInfo'] = $this->mezzanineInfo;
        $res['StreamInfos'] = $this->streamInfos;
        return $res;
    }
    /**
     * @param array $map
     * @return TransferMediaDataRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
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
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['VideoInfo'])){
            $model->videoInfo = $map['VideoInfo'];
        }
        if(isset($map['MezzanineInfo'])){
            $model->mezzanineInfo = $map['MezzanineInfo'];
        }
        if(isset($map['StreamInfos'])){
            $model->streamInfos = $map['StreamInfos'];
        }
        return $model;
    }
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
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description videoInfo
     * @var string
     */
    public $videoInfo;

    /**
     * @description mezzanineInfo
     * @var string
     */
    public $mezzanineInfo;

    /**
     * @description streamInfos
     * @var string
     */
    public $streamInfos;

}
