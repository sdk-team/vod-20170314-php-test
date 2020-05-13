<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadMaterialRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'coverURL' => 'CoverURL',
        'description' => 'Description',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'title' => 'Title',
        'createTime' => 'CreateTime',
        'cateId' => 'CateId',
        'tags' => 'Tags',
    ];
    public function validate() {
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('title', $this->title, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CoverURL'] = $this->coverURL;
        $res['Description'] = $this->description;
        $res['FileName'] = $this->fileName;
        $res['FileSize'] = $this->fileSize;
        $res['Title'] = $this->title;
        $res['CreateTime'] = $this->createTime;
        $res['CateId'] = $this->cateId;
        $res['Tags'] = $this->tags;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUploadMaterialRequest
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
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
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
     * @description coverUrl
     * @var string
     */
    public $coverURL;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description fileName
     * @var string
     */
    public $fileName;

    /**
     * @description fileSize
     * @var integer
     */
    public $fileSize;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description tags
     * @var string
     */
    public $tags;

}
