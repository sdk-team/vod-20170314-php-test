<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageListResponse\storageList;

class GetStorageListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'totalCount' => 'TotalCount',
        'storageList' => 'StorageList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('storageList', $this->storageList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['TotalCount'] = $this->totalCount;
        $res['StorageList'] = null !== $this->storageList ? $this->storageList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetStorageListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['StorageList'])){
            $model->storageList = storageList::fromMap($map['StorageList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description data.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description data.storageDTOList
     * @var GetStorageListResponse.storageList
     */
    public $storageList;

}
