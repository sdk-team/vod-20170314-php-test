<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateWatermarkRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'horizontalOffet' => 'HorizontalOffet',
        'horizontalOffset' => 'HorizontalOffset',
        'verticalOffset' => 'VerticalOffset',
        'position' => 'Position',
        'type' => 'Type',
        'bucket' => 'Bucket',
        'object' => 'Object',
        'name' => 'Name',
        'width' => 'Width',
        'height' => 'Height',
        'watermarkId' => 'WatermarkId',
        'screenMode' => 'ScreenMode',
        'videoWidth' => 'VideoWidth',
        'videoHeight' => 'VideoHeight',
        'watermarkConfig' => 'WatermarkConfig',
        'fileUrl' => 'FileUrl',
        'screenWidth' => 'ScreenWidth',
        'screenHeight' => 'ScreenHeight',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['HorizontalOffet'] = $this->horizontalOffet;
        $res['HorizontalOffset'] = $this->horizontalOffset;
        $res['VerticalOffset'] = $this->verticalOffset;
        $res['Position'] = $this->position;
        $res['Type'] = $this->type;
        $res['Bucket'] = $this->bucket;
        $res['Object'] = $this->object;
        $res['Name'] = $this->name;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['WatermarkId'] = $this->watermarkId;
        $res['ScreenMode'] = $this->screenMode;
        $res['VideoWidth'] = $this->videoWidth;
        $res['VideoHeight'] = $this->videoHeight;
        $res['WatermarkConfig'] = $this->watermarkConfig;
        $res['FileUrl'] = $this->fileUrl;
        $res['ScreenWidth'] = $this->screenWidth;
        $res['ScreenHeight'] = $this->screenHeight;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateWatermarkRequest
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
        if(isset($map['HorizontalOffet'])){
            $model->horizontalOffet = $map['HorizontalOffet'];
        }
        if(isset($map['HorizontalOffset'])){
            $model->horizontalOffset = $map['HorizontalOffset'];
        }
        if(isset($map['VerticalOffset'])){
            $model->verticalOffset = $map['VerticalOffset'];
        }
        if(isset($map['Position'])){
            $model->position = $map['Position'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Bucket'])){
            $model->bucket = $map['Bucket'];
        }
        if(isset($map['Object'])){
            $model->object = $map['Object'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['WatermarkId'])){
            $model->watermarkId = $map['WatermarkId'];
        }
        if(isset($map['ScreenMode'])){
            $model->screenMode = $map['ScreenMode'];
        }
        if(isset($map['VideoWidth'])){
            $model->videoWidth = $map['VideoWidth'];
        }
        if(isset($map['VideoHeight'])){
            $model->videoHeight = $map['VideoHeight'];
        }
        if(isset($map['WatermarkConfig'])){
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if(isset($map['FileUrl'])){
            $model->fileUrl = $map['FileUrl'];
        }
        if(isset($map['ScreenWidth'])){
            $model->screenWidth = $map['ScreenWidth'];
        }
        if(isset($map['ScreenHeight'])){
            $model->screenHeight = $map['ScreenHeight'];
        }
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
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
     * @description horizontalOffet
     * @var string
     */
    public $horizontalOffet;

    /**
     * @description horizontalOffset
     * @var string
     */
    public $horizontalOffset;

    /**
     * @description verticalOffset
     * @var string
     */
    public $verticalOffset;

    /**
     * @description position
     * @var string
     */
    public $position;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description bucket
     * @var string
     */
    public $bucket;

    /**
     * @description object
     * @var string
     */
    public $object;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description width
     * @var string
     */
    public $width;

    /**
     * @description height
     * @var string
     */
    public $height;

    /**
     * @description watertempId
     * @var string
     */
    public $watermarkId;

    /**
     * @description screenMode
     * @var string
     */
    public $screenMode;

    /**
     * @description videoWidth
     * @var integer
     */
    public $videoWidth;

    /**
     * @description videoHeight
     * @var integer
     */
    public $videoHeight;

    /**
     * @description watermarkConfig
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description fileUrl
     * @var string
     */
    public $fileUrl;

    /**
     * @description screenWidth
     * @var integer
     */
    public $screenWidth;

    /**
     * @description screenHeight
     * @var integer
     */
    public $screenHeight;

    /**
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

}
