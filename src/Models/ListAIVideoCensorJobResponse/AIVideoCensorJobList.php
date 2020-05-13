<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCensorJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCensorJobResponse\AIVideoCensorJobList\AIVideoCensorJob;

class AIVideoCensorJobList extends Model {
    protected $_name = [
        'AIVideoCensorJob' => 'AIVideoCensorJob',
    ];
    public function validate() {
        Model::validateRequired('AIVideoCensorJob', $this->AIVideoCensorJob, true);
    }
    public function toMap() {
        $res = [];
        $res['AIVideoCensorJob'] = [];
        if(null !== $this->AIVideoCensorJob && is_array($this->AIVideoCensorJob)){
            $n = 0;
            foreach($this->AIVideoCensorJob as $item){
                $res['AIVideoCensorJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIVideoCensorJobList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AIVideoCensorJob'])){
            if(!empty($map['AIVideoCensorJob'])){
                $model->AIVideoCensorJob = [];
                $n = 0;
                foreach($map['AIVideoCensorJob'] as $item) {
                    $model->AIVideoCensorJob[$n++] = null !== $item ? AIVideoCensorJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AIVideoCensorJob
     * @var array
     */
    public $AIVideoCensorJob;

}
