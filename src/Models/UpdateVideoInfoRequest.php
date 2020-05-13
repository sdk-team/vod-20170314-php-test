<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'videoId' => 'VideoId',
        'title' => 'Title',
        'tags' => 'Tags',
        'description' => 'Description',
        'coverURL' => 'CoverURL',
        'cateId' => 'CateId',
        'downloadSwitch' => 'DownloadSwitch',
        'fileSize' => 'FileSize',
        'duration' => 'Duration',
        'status' => 'Status',
        'mediaType' => 'MediaType',
        'source' => 'Source',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        $res['Description'] = $this->description;
        $res['CoverURL'] = $this->coverURL;
        $res['CateId'] = $this->cateId;
        $res['DownloadSwitch'] = $this->downloadSwitch;
        $res['FileSize'] = $this->fileSize;
        $res['Duration'] = $this->duration;
        $res['Status'] = $this->status;
        $res['MediaType'] = $this->mediaType;
        $res['Source'] = $this->source;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateVideoInfoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['DownloadSwitch'])){
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['MediaType'])){
            $model->mediaType = $map['MediaType'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        return $model;
    }
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
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

    /**
     * @description mediaId
     * @var string
     */
    public $videoId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverURL;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description downloadSwitch
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description fileSize
     * @var integer
     */
    public $fileSize;

    /**
     * @description duration
     * @var string
     */
    public $duration;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description type
     * @var string
     */
    public $mediaType;

    /**
     * @description source
     * @var string
     */
    public $source;

}
