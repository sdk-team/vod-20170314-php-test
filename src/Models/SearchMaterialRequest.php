<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SearchMaterialRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'cateId' => 'CateId',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'type' => 'Type',
        'source' => 'Source',
        'title' => 'Title',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['CateId'] = $this->cateId;
        $res['EndTime'] = $this->endTime;
        $res['StartTime'] = $this->startTime;
        $res['Status'] = $this->status;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['SortBy'] = $this->sortBy;
        $res['Type'] = $this->type;
        $res['Source'] = $this->source;
        $res['Title'] = $this->title;
        return $res;
    }
    /**
     * @param array $map
     * @return SearchMaterialRequest
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
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
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
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
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
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description state
     * @var string
     */
    public $status;

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
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description title
     * @var string
     */
    public $title;

}
