<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoPornRecogJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoPornRecogJobResponse\AIVideoPornRecogJobList\AIVideoPornRecogJob;

class AIVideoPornRecogJobList extends Model {
    protected $_name = [
        'AIVideoPornRecogJob' => 'AIVideoPornRecogJob',
    ];
    public function validate() {
        Model::validateRequired('AIVideoPornRecogJob', $this->AIVideoPornRecogJob, true);
    }
    public function toMap() {
        $res = [];
        $res['AIVideoPornRecogJob'] = [];
        if(null !== $this->AIVideoPornRecogJob && is_array($this->AIVideoPornRecogJob)){
            $n = 0;
            foreach($this->AIVideoPornRecogJob as $item){
                $res['AIVideoPornRecogJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIVideoPornRecogJobList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AIVideoPornRecogJob'])){
            if(!empty($map['AIVideoPornRecogJob'])){
                $model->AIVideoPornRecogJob = [];
                $n = 0;
                foreach($map['AIVideoPornRecogJob'] as $item) {
                    $model->AIVideoPornRecogJob[$n++] = null !== $item ? AIVideoPornRecogJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AIVideoPornRecogJob
     * @var array
     */
    public $AIVideoPornRecogJob;

}
