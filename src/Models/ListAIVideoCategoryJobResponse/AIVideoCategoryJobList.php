<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCategoryJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCategoryJobResponse\AIVideoCategoryJobList\AIVideoCategoryJob;

class AIVideoCategoryJobList extends Model {
    protected $_name = [
        'AIVideoCategoryJob' => 'AIVideoCategoryJob',
    ];
    public function validate() {
        Model::validateRequired('AIVideoCategoryJob', $this->AIVideoCategoryJob, true);
    }
    public function toMap() {
        $res = [];
        $res['AIVideoCategoryJob'] = [];
        if(null !== $this->AIVideoCategoryJob && is_array($this->AIVideoCategoryJob)){
            $n = 0;
            foreach($this->AIVideoCategoryJob as $item){
                $res['AIVideoCategoryJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIVideoCategoryJobList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AIVideoCategoryJob'])){
            if(!empty($map['AIVideoCategoryJob'])){
                $model->AIVideoCategoryJob = [];
                $n = 0;
                foreach($map['AIVideoCategoryJob'] as $item) {
                    $model->AIVideoCategoryJob[$n++] = null !== $item ? AIVideoCategoryJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AIVideoCategoryJob
     * @var array
     */
    public $AIVideoCategoryJob;

}
