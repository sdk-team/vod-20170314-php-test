<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIASRJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIASRJobResponse\AIASRJobList\AIASRJob;

class AIASRJobList extends Model {
    protected $_name = [
        'AIASRJob' => 'AIASRJob',
    ];
    public function validate() {
        Model::validateRequired('AIASRJob', $this->AIASRJob, true);
    }
    public function toMap() {
        $res = [];
        $res['AIASRJob'] = [];
        if(null !== $this->AIASRJob && is_array($this->AIASRJob)){
            $n = 0;
            foreach($this->AIASRJob as $item){
                $res['AIASRJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIASRJobList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AIASRJob'])){
            if(!empty($map['AIASRJob'])){
                $model->AIASRJob = [];
                $n = 0;
                foreach($map['AIASRJob'] as $item) {
                    $model->AIASRJob[$n++] = null !== $item ? AIASRJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AIASRJob
     * @var array
     */
    public $AIASRJob;

}
