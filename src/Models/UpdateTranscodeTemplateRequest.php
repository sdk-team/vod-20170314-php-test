<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateTranscodeTemplateRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'muxer' => 'Muxer',
        'resolution' => 'Resolution',
        'detail' => 'Detail',
        'name' => 'Name',
        'videoBitrate' => 'VideoBitrate',
        'videoCodec' => 'VideoCodec',
        'audioBitrate' => 'AudioBitrate',
        'audioCodec' => 'AudioCodec',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Muxer'] = $this->muxer;
        $res['Resolution'] = $this->resolution;
        $res['Detail'] = $this->detail;
        $res['Name'] = $this->name;
        $res['VideoBitrate'] = $this->videoBitrate;
        $res['VideoCodec'] = $this->videoCodec;
        $res['AudioBitrate'] = $this->audioBitrate;
        $res['AudioCodec'] = $this->audioCodec;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateTranscodeTemplateRequest
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
        if(isset($map['Muxer'])){
            $model->muxer = $map['Muxer'];
        }
        if(isset($map['Resolution'])){
            $model->resolution = $map['Resolution'];
        }
        if(isset($map['Detail'])){
            $model->detail = $map['Detail'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['VideoBitrate'])){
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if(isset($map['VideoCodec'])){
            $model->videoCodec = $map['VideoCodec'];
        }
        if(isset($map['AudioBitrate'])){
            $model->audioBitrate = $map['AudioBitrate'];
        }
        if(isset($map['AudioCodec'])){
            $model->audioCodec = $map['AudioCodec'];
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
     * @description muxer
     * @var string
     */
    public $muxer;

    /**
     * @description resolution
     * @var string
     */
    public $resolution;

    /**
     * @description detail
     * @var string
     */
    public $detail;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description videoBitrate
     * @var string
     */
    public $videoBitrate;

    /**
     * @description videoCodec
     * @var string
     */
    public $videoCodec;

    /**
     * @description audioBitrate
     * @var string
     */
    public $audioBitrate;

    /**
     * @description audioCodec
     * @var string
     */
    public $audioCodec;

}
