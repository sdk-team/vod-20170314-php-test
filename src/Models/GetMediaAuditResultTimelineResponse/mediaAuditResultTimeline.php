<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultTimelineResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultTimelineResponse\mediaAuditResultTimeline\porn;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultTimelineResponse\mediaAuditResultTimeline\terrorism;

class mediaAuditResultTimeline extends Model {
    protected $_name = [
        'porn' => 'Porn',
        'terrorism' => 'Terrorism',
    ];
    public function validate() {
        Model::validateRequired('porn', $this->porn, true);
        Model::validateRequired('terrorism', $this->terrorism, true);
    }
    public function toMap() {
        $res = [];
        $res['Porn'] = [];
        if(null !== $this->porn && is_array($this->porn)){
            $n = 0;
            foreach($this->porn as $item){
                $res['Porn'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Terrorism'] = [];
        if(null !== $this->terrorism && is_array($this->terrorism)){
            $n = 0;
            foreach($this->terrorism as $item){
                $res['Terrorism'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return mediaAuditResultTimeline
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Porn'])){
            if(!empty($map['Porn'])){
                $model->porn = [];
                $n = 0;
                foreach($map['Porn'] as $item) {
                    $model->porn[$n++] = null !== $item ? porn::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Terrorism'])){
            if(!empty($map['Terrorism'])){
                $model->terrorism = [];
                $n = 0;
                foreach($map['Terrorism'] as $item) {
                    $model->terrorism[$n++] = null !== $item ? terrorism::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description porn
     * @var array
     */
    public $porn;

    /**
     * @description terrorism
     * @var array
     */
    public $terrorism;

}
