<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetPersonalStorageListResponse\storageInfoList;

class GetPersonalStorageListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'storageInfoList' => 'StorageInfoList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('storageInfoList', $this->storageInfoList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['StorageInfoList'] = null !== $this->storageInfoList ? $this->storageInfoList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPersonalStorageListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['StorageInfoList'])){
            $model->storageInfoList = storageInfoList::fromMap($map['StorageInfoList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.storageInfoList
     * @var GetPersonalStorageListResponse.storageInfoList
     */
    public $storageInfoList;

}
