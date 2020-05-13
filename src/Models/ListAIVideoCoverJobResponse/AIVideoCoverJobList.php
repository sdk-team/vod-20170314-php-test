<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCoverJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCoverJobResponse\AIVideoCoverJobList\AIVideoCoverJob;

class AIVideoCoverJobList extends Model {
    protected $_name = [
        'AIVideoCoverJob' => 'AIVideoCoverJob',
    ];
    public function validate() {
        Model::validateRequired('AIVideoCoverJob', $this->AIVideoCoverJob, true);
    }
    public function toMap() {
        $res = [];
        $res['AIVideoCoverJob'] = [];
        if(null !== $this->AIVideoCoverJob && is_array($this->AIVideoCoverJob)){
            $n = 0;
            foreach($this->AIVideoCoverJob as $item){
                $res['AIVideoCoverJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIVideoCoverJobList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AIVideoCoverJob'])){
            if(!empty($map['AIVideoCoverJob'])){
                $model->AIVideoCoverJob = [];
                $n = 0;
                foreach($map['AIVideoCoverJob'] as $item) {
                    $model->AIVideoCoverJob[$n++] = null !== $item ? AIVideoCoverJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AIVideoCoverJob
     * @var array
     */
    public $AIVideoCoverJob;

}
