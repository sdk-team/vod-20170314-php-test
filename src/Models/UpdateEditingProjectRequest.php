<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateEditingProjectRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'projectId' => 'ProjectId',
        'title' => 'Title',
        'timeline' => 'Timeline',
        'description' => 'Description',
        'coverUrl' => 'CoverUrl',
        'duration' => 'Duration',
    ];
    public function validate() {
        Model::validateRequired('projectId', $this->projectId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['ProjectId'] = $this->projectId;
        $res['Title'] = $this->title;
        $res['Timeline'] = $this->timeline;
        $res['Description'] = $this->description;
        $res['CoverUrl'] = $this->coverUrl;
        $res['Duration'] = $this->duration;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateEditingProjectRequest
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
        if(isset($map['ProjectId'])){
            $model->projectId = $map['ProjectId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Timeline'])){
            $model->timeline = $map['Timeline'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
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
     * @description projectId
     * @var string
     */
    public $projectId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description timeline
     * @var string
     */
    public $timeline;

    /**
     * @description description
     * @var string
     */
    public $description;

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
