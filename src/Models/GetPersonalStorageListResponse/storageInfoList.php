<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPersonalStorageListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetPersonalStorageListResponse\storageInfoList\storageInfo;

class storageInfoList extends Model {
    protected $_name = [
        'storageInfo' => 'StorageInfo',
    ];
    public function validate() {
        Model::validateRequired('storageInfo', $this->storageInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['StorageInfo'] = [];
        if(null !== $this->storageInfo && is_array($this->storageInfo)){
            $n = 0;
            foreach($this->storageInfo as $item){
                $res['StorageInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return storageInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StorageInfo'])){
            if(!empty($map['StorageInfo'])){
                $model->storageInfo = [];
                $n = 0;
                foreach($map['StorageInfo'] as $item) {
                    $model->storageInfo[$n++] = null !== $item ? storageInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description StorageInfo
     * @var array
     */
    public $storageInfo;

}
