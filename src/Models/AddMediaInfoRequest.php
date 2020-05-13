<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddMediaInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'fileUrl' => 'FileUrl',
        'title' => 'Title',
        'tags' => 'Tags',
        'privilege' => 'Privilege',
        'IP' => 'IP',
        'fileSize' => 'FileSize',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileMd5' => 'FileMd5',
        'description' => 'Description',
        'coverURL' => 'CoverURL',
        'cateId' => 'CateId',
        'mediaWorkflowId' => 'MediaWorkflowId',
        'mediaWorkflowUserData' => 'MediaWorkflowUserData',
        'mediaWorkflowRunId' => 'MediaWorkflowRunId',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('fileName', $this->fileName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['FileUrl'] = $this->fileUrl;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        $res['Privilege'] = $this->privilege;
        $res['IP'] = $this->IP;
        $res['FileSize'] = $this->fileSize;
        $res['Duration'] = $this->duration;
        $res['FileName'] = $this->fileName;
        $res['FileMd5'] = $this->fileMd5;
        $res['Description'] = $this->description;
        $res['CoverURL'] = $this->coverURL;
        $res['CateId'] = $this->cateId;
        $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        $res['MediaWorkflowUserData'] = $this->mediaWorkflowUserData;
        $res['MediaWorkflowRunId'] = $this->mediaWorkflowRunId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddMediaInfoRequest
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
        if(isset($map['FileUrl'])){
            $model->fileUrl = $map['FileUrl'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Privilege'])){
            $model->privilege = $map['Privilege'];
        }
        if(isset($map['IP'])){
            $model->IP = $map['IP'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
        }
        if(isset($map['FileMd5'])){
            $model->fileMd5 = $map['FileMd5'];
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
        if(isset($map['MediaWorkflowId'])){
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if(isset($map['MediaWorkflowUserData'])){
            $model->mediaWorkflowUserData = $map['MediaWorkflowUserData'];
        }
        if(isset($map['MediaWorkflowRunId'])){
            $model->mediaWorkflowRunId = $map['MediaWorkflowRunId'];
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
     * @description fileUrl
     * @var string
     */
    public $fileUrl;

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
     * @description publicType
     * @var integer
     */
    public $privilege;

    /**
     * @description createIp
     * @var string
     */
    public $IP;

    /**
     * @description fileSize
     * @var integer
     */
    public $fileSize;

    /**
     * @description duration
     * @var integer
     */
    public $duration;

    /**
     * @description fileName
     * @var string
     */
    public $fileName;

    /**
     * @description fileMd5
     * @var string
     */
    public $fileMd5;

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
     * @description mediaWorkflowId
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @description mediaWorkflowUserData
     * @var string
     */
    public $mediaWorkflowUserData;

    /**
     * @description mediaWorkflowRunId
     * @var string
     */
    public $mediaWorkflowRunId;

}
