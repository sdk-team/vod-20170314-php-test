<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddAudioTemplateRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'codec' => 'Codec',
        'bitrate' => 'Bitrate',
        'channel' => 'Channel',
        'remove' => 'Remove',
        'name' => 'Name',
        'muxer' => 'Muxer',
        'status' => 'Status',
        'type' => 'Type',
        'isDefault' => 'IsDefault',
    ];
    public function validate() {
        Model::validateRequired('codec', $this->codec, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('muxer', $this->muxer, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Codec'] = $this->codec;
        $res['Bitrate'] = $this->bitrate;
        $res['Channel'] = $this->channel;
        $res['Remove'] = $this->remove;
        $res['Name'] = $this->name;
        $res['Muxer'] = $this->muxer;
        $res['Status'] = $this->status;
        $res['Type'] = $this->type;
        $res['IsDefault'] = $this->isDefault;
        return $res;
    }
    /**
     * @param array $map
     * @return AddAudioTemplateRequest
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
        if(isset($map['Codec'])){
            $model->codec = $map['Codec'];
        }
        if(isset($map['Bitrate'])){
            $model->bitrate = $map['Bitrate'];
        }
        if(isset($map['Channel'])){
            $model->channel = $map['Channel'];
        }
        if(isset($map['Remove'])){
            $model->remove = $map['Remove'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Muxer'])){
            $model->muxer = $map['Muxer'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['IsDefault'])){
            $model->isDefault = $map['IsDefault'];
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
     * @description codec
     * @var string
     */
    public $codec;

    /**
     * @description bitrate
     * @var string
     */
    public $bitrate;

    /**
     * @description channel
     * @var string
     */
    public $channel;

    /**
     * @description remove
     * @var string
     */
    public $remove;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description muxer
     * @var string
     */
    public $muxer;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description isDefault
     * @var string
     */
    public $isDefault;

}
