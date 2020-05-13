<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodServiceResponse\operationLocks;

use AlibabaCloud\Tea\Model;

class lockReason extends Model {
    protected $_name = [
        'lockReason' => 'LockReason',
    ];
    public function validate() {
        Model::validateRequired('lockReason', $this->lockReason, true);
    }
    public function toMap() {
        $res = [];
        $res['LockReason'] = $this->lockReason;
        return $res;
    }
    /**
     * @param array $map
     * @return lockReason
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LockReason'])){
            $model->lockReason = $map['LockReason'];
        }
        return $model;
    }
    /**
     * @description lockReason
     * @var string
     */
    public $lockReason;

}
