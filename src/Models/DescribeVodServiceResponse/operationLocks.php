<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodServiceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodServiceResponse\operationLocks\lockReason;

class operationLocks extends Model {
    protected $_name = [
        'lockReason' => 'LockReason',
    ];
    public function validate() {
        Model::validateRequired('lockReason', $this->lockReason, true);
    }
    public function toMap() {
        $res = [];
        $res['LockReason'] = [];
        if(null !== $this->lockReason && is_array($this->lockReason)){
            $n = 0;
            foreach($this->lockReason as $item){
                $res['LockReason'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return operationLocks
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LockReason'])){
            if(!empty($map['LockReason'])){
                $model->lockReason = [];
                $n = 0;
                foreach($map['LockReason'] as $item) {
                    $model->lockReason[$n++] = null !== $item ? lockReason::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description LockReason
     * @var array
     */
    public $lockReason;

}
