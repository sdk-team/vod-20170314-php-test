<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadMediaFileRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'businessType' => 'BusinessType',
        'fileExtension' => 'FileExtension',
        'mediaId' => 'MediaId',
        'userData' => 'UserData',
    ];
    public function validate() {
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('fileExtension', $this->fileExtension, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['BusinessType'] = $this->businessType;
        $res['FileExtension'] = $this->fileExtension;
        $res['MediaId'] = $this->mediaId;
        $res['UserData'] = $this->userData;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadMediaFileRequest
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
        if(isset($map['BusinessType'])){
            $model->businessType = $map['BusinessType'];
        }
        if(isset($map['FileExtension'])){
            $model->fileExtension = $map['FileExtension'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
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
     * @description businessType
     * @var string
     */
    public $businessType;

    /**
     * @description fileExtension
     * @var string
     */
    public $fileExtension;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description userData
     * @var string
     */
    public $userData;

}
