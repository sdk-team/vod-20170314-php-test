<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateSnapshotRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'time' => 'Time',
        'height' => 'Height',
        'width' => 'Width',
        'number' => 'Number',
        'interval' => 'Interval',
        'snapshotId' => 'SnapshotId',
    ];
    public function validate() {
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('number', $this->number, true);
        Model::validateRequired('snapshotId', $this->snapshotId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Time'] = $this->time;
        $res['Height'] = $this->height;
        $res['Width'] = $this->width;
        $res['Number'] = $this->number;
        $res['Interval'] = $this->interval;
        $res['SnapshotId'] = $this->snapshotId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateSnapshotRequest
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
        if(isset($map['Time'])){
            $model->time = $map['Time'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Number'])){
            $model->number = $map['Number'];
        }
        if(isset($map['Interval'])){
            $model->interval = $map['Interval'];
        }
        if(isset($map['SnapshotId'])){
            $model->snapshotId = $map['SnapshotId'];
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
     * @description time
     * @var string
     */
    public $time;

    /**
     * @description height
     * @var string
     */
    public $height;

    /**
     * @description width
     * @var string
     */
    public $width;

    /**
     * @description num
     * @var string
     */
    public $number;

    /**
     * @description interval
     * @var string
     */
    public $interval;

    /**
     * @description snapshotId
     * @var string
     */
    public $snapshotId;

}
