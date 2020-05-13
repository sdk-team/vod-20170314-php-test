<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageInfoResponse\domainInfoList;
use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageInfoResponse\storage;

class GetStorageInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'storageACL' => 'StorageACL',
        'domainInfoList' => 'DomainInfoList',
        'storage' => 'Storage',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('storageACL', $this->storageACL, true);
        Model::validateRequired('domainInfoList', $this->domainInfoList, true);
        Model::validateRequired('storage', $this->storage, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['StorageACL'] = $this->storageACL;
        $res['DomainInfoList'] = null !== $this->domainInfoList ? $this->domainInfoList->toMap() : null;
        $res['Storage'] = null !== $this->storage ? $this->storage->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetStorageInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['StorageACL'])){
            $model->storageACL = $map['StorageACL'];
        }
        if(isset($map['DomainInfoList'])){
            $model->domainInfoList = domainInfoList::fromMap($map['DomainInfoList']);
        }
        if(isset($map['Storage'])){
            $model->storage = storage::fromMap($map['Storage']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.storageACL
     * @var string
     */
    public $storageACL;

    /**
     * @description data.domainDTOList
     * @var GetStorageInfoResponse.domainInfoList
     */
    public $domainInfoList;

    /**
     * @description data.storage
     * @var GetStorageInfoResponse.storage
     */
    public $storage;

}
