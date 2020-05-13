<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateMaterialRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'materialId' => 'MaterialId',
        'title' => 'Title',
        'description' => 'Description',
        'tags' => 'Tags',
        'coverUrl' => 'CoverUrl',
        'cateId' => 'CateId',
    ];
    public function validate() {
        Model::validateRequired('materialId', $this->materialId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['MaterialId'] = $this->materialId;
        $res['Title'] = $this->title;
        $res['Description'] = $this->description;
        $res['Tags'] = $this->tags;
        $res['CoverUrl'] = $this->coverUrl;
        $res['CateId'] = $this->cateId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateMaterialRequest
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
        if(isset($map['MaterialId'])){
            $model->materialId = $map['MaterialId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['CoverUrl'])){
            $model->coverUrl = $map['CoverUrl'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
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
     * @description materialId
     * @var string
     */
    public $materialId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverUrl;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

}
