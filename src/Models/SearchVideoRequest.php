<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SearchVideoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'cateId' => 'CateId',
        'title' => 'Title',
        'keyWord' => 'KeyWord',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'status' => 'Status',
        'mediaType' => 'MediaType',
        'resultTypes' => 'ResultTypes',
        'playRand' => 'PlayRand',
        'source' => 'Source',
        'apiVersion' => 'ApiVersion',
        'scrollToken' => 'ScrollToken',
        'preprocessStatus' => 'PreprocessStatus',
        'storageLocation' => 'StorageLocation',
        'videoId' => 'VideoId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CateId'] = $this->cateId;
        $res['Title'] = $this->title;
        $res['KeyWord'] = $this->keyWord;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['SortBy'] = $this->sortBy;
        $res['Status'] = $this->status;
        $res['MediaType'] = $this->mediaType;
        $res['ResultTypes'] = $this->resultTypes;
        $res['PlayRand'] = $this->playRand;
        $res['Source'] = $this->source;
        $res['ApiVersion'] = $this->apiVersion;
        $res['ScrollToken'] = $this->scrollToken;
        $res['PreprocessStatus'] = $this->preprocessStatus;
        $res['StorageLocation'] = $this->storageLocation;
        $res['VideoId'] = $this->videoId;
        return $res;
    }
    /**
     * @param array $map
     * @return SearchVideoRequest
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
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['KeyWord'])){
            $model->keyWord = $map['KeyWord'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['SortBy'])){
            $model->sortBy = $map['SortBy'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['MediaType'])){
            $model->mediaType = $map['MediaType'];
        }
        if(isset($map['ResultTypes'])){
            $model->resultTypes = $map['ResultTypes'];
        }
        if(isset($map['PlayRand'])){
            $model->playRand = $map['PlayRand'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        if(isset($map['ApiVersion'])){
            $model->apiVersion = $map['ApiVersion'];
        }
        if(isset($map['ScrollToken'])){
            $model->scrollToken = $map['ScrollToken'];
        }
        if(isset($map['PreprocessStatus'])){
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
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
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description keyWord
     * @var string
     */
    public $keyWord;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description pageNo
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description sortBy
     * @var string
     */
    public $sortBy;

    /**
     * @description state
     * @var string
     */
    public $status;

    /**
     * @description type
     * @var string
     */
    public $mediaType;

    /**
     * @description resultTypes
     * @var string
     */
    public $resultTypes;

    /**
     * @description playRand
     * @var string
     */
    public $playRand;

    /**
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description version
     * @var string
     */
    public $apiVersion;

    /**
     * @description lastItem
     * @var string
     */
    public $scrollToken;

    /**
     * @description preprocessStatus
     * @var string
     */
    public $preprocessStatus;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description videoId
     * @var string
     */
    public $videoId;

}
