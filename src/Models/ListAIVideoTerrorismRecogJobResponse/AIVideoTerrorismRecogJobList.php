<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoTerrorismRecogJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoTerrorismRecogJobResponse\AIVideoTerrorismRecogJobList\AIVideoTerrorismRecogJob;

class AIVideoTerrorismRecogJobList extends Model {
    protected $_name = [
        'AIVideoTerrorismRecogJob' => 'AIVideoTerrorismRecogJob',
    ];
    public function validate() {
        Model::validateRequired('AIVideoTerrorismRecogJob', $this->AIVideoTerrorismRecogJob, true);
    }
    public function toMap() {
        $res = [];
        $res['AIVideoTerrorismRecogJob'] = [];
        if(null !== $this->AIVideoTerrorismRecogJob && is_array($this->AIVideoTerrorismRecogJob)){
            $n = 0;
            foreach($this->AIVideoTerrorismRecogJob as $item){
                $res['AIVideoTerrorismRecogJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIVideoTerrorismRecogJobList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AIVideoTerrorismRecogJob'])){
            if(!empty($map['AIVideoTerrorismRecogJob'])){
                $model->AIVideoTerrorismRecogJob = [];
                $n = 0;
                foreach($map['AIVideoTerrorismRecogJob'] as $item) {
                    $model->AIVideoTerrorismRecogJob[$n++] = null !== $item ? AIVideoTerrorismRecogJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AIVideoTerrorismRecogJob
     * @var array
     */
    public $AIVideoTerrorismRecogJob;

}
