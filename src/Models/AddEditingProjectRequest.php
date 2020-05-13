<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddEditingProjectRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'title' => 'Title',
        'description' => 'Description',
        'timeline' => 'Timeline',
        'coverUrl' => 'CoverUrl',
        'duration' => 'Duration',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['Title'] = $this->title;
        $res['Description'] = $this->description;
        $res['Timeline'] = $this->timeline;
        $res['CoverUrl'] = $this->coverUrl;
        $res['Duration'] = $this->duration;
        return $res;
    }
    /**
     * @param array $map
     * @return AddEditingProjectRequest
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
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['Timeline'])){
            $model->timeline = $map['Timeline'];
        }
        if(isset($map['CoverUrl'])){
            $model->coverUrl = $map['CoverUrl'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
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
     * @description timeline
     * @var string
     */
    public $timeline;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverUrl;

    /**
     * @description duration
     * @var float
     */
    public $duration;

}
