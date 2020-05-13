<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoSummaryJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoSummaryJobResponse\AIVideoSummaryJobList\AIVideoSummaryJob;

class AIVideoSummaryJobList extends Model {
    protected $_name = [
        'AIVideoSummaryJob' => 'AIVideoSummaryJob',
    ];
    public function validate() {
        Model::validateRequired('AIVideoSummaryJob', $this->AIVideoSummaryJob, true);
    }
    public function toMap() {
        $res = [];
        $res['AIVideoSummaryJob'] = [];
        if(null !== $this->AIVideoSummaryJob && is_array($this->AIVideoSummaryJob)){
            $n = 0;
            foreach($this->AIVideoSummaryJob as $item){
                $res['AIVideoSummaryJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AIVideoSummaryJobList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AIVideoSummaryJob'])){
            if(!empty($map['AIVideoSummaryJob'])){
                $model->AIVideoSummaryJob = [];
                $n = 0;
                foreach($map['AIVideoSummaryJob'] as $item) {
                    $model->AIVideoSummaryJob[$n++] = null !== $item ? AIVideoSummaryJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AIVideoSummaryJob
     * @var array
     */
    public $AIVideoSummaryJob;

}
