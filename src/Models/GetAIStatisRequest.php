<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetAIStatisRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'startTimeUTC' => 'StartTimeUTC',
        'endTimeUTC' => 'EndTimeUTC',
        'level' => 'Level',
        'type' => 'Type',
        'division' => 'Division',
    ];
    public function validate() {
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('type', $this->type, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['StartTimeUTC'] = $this->startTimeUTC;
        $res['EndTimeUTC'] = $this->endTimeUTC;
        $res['Level'] = $this->level;
        $res['Type'] = $this->type;
        $res['Division'] = $this->division;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAIStatisRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['StartTimeUTC'])){
            $model->startTimeUTC = $map['StartTimeUTC'];
        }
        if(isset($map['EndTimeUTC'])){
            $model->endTimeUTC = $map['EndTimeUTC'];
        }
        if(isset($map['Level'])){
            $model->level = $map['Level'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Division'])){
            $model->division = $map['Division'];
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
     * @description resourceOwnerId
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description startTime
     * @var integer
     */
    public $startTime;

    /**
     * @description endTime
     * @var integer
     */
    public $endTime;

    /**
     * @description startTimeUTC
     * @var string
     */
    public $startTimeUTC;

    /**
     * @description endTimeUTC
     * @var string
     */
    public $endTimeUTC;

    /**
     * @description level
     * @var string
     */
    public $level;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description division
     * @var string
     */
    public $division;

}
