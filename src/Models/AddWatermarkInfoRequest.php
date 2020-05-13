<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddWatermarkInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'watermarkType' => 'WatermarkType',
        'watermarkConfig' => 'WatermarkConfig',
        'watermarkName' => 'WatermarkName',
        'mediaFileId' => 'MediaFileId',
    ];
    public function validate() {
        Model::validateRequired('watermarkType', $this->watermarkType, true);
        Model::validateRequired('watermarkConfig', $this->watermarkConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['WatermarkType'] = $this->watermarkType;
        $res['WatermarkConfig'] = $this->watermarkConfig;
        $res['WatermarkName'] = $this->watermarkName;
        $res['MediaFileId'] = $this->mediaFileId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddWatermarkInfoRequest
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
        if(isset($map['WatermarkType'])){
            $model->watermarkType = $map['WatermarkType'];
        }
        if(isset($map['WatermarkConfig'])){
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if(isset($map['WatermarkName'])){
            $model->watermarkName = $map['WatermarkName'];
        }
        if(isset($map['MediaFileId'])){
            $model->mediaFileId = $map['MediaFileId'];
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
     * @description watermarkType
     * @var string
     */
    public $watermarkType;

    /**
     * @description watermarkConfig
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description watermarkName
     * @var string
     */
    public $watermarkName;

    /**
     * @description watermarkFileId
     * @var string
     */
    public $mediaFileId;

}
