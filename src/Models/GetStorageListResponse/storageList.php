<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetStorageListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageListResponse\storageList\storage;

class storageList extends Model {
    protected $_name = [
        'storage' => 'Storage',
    ];
    public function validate() {
        Model::validateRequired('storage', $this->storage, true);
    }
    public function toMap() {
        $res = [];
        $res['Storage'] = [];
        if(null !== $this->storage && is_array($this->storage)){
            $n = 0;
            foreach($this->storage as $item){
                $res['Storage'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return storageList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Storage'])){
            if(!empty($map['Storage'])){
                $model->storage = [];
                $n = 0;
                foreach($map['Storage'] as $item) {
                    $model->storage[$n++] = null !== $item ? storage::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Storage
     * @var array
     */
    public $storage;

}
