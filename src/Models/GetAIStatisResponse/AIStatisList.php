<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetAIStatisResponse;

use AlibabaCloud\Tea\Model;

class AIStatisList extends Model {
    protected $_name = [
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
        'duration' => 'Duration',
    ];
    public function validate() {
        Model::validateRequired('statTime', $this->statTime, true);
        Model::validateRequired('statTimeUTC', $this->statTimeUTC, true);
        Model::validateRequired('duration', $this->duration, true);
    }
    public function toMap() {
        $res = [];
        $res['StatTime'] = $this->statTime;
        $res['StatTimeUTC'] = $this->statTimeUTC;
        $res['Duration'] = $this->duration;
        return $res;
    }
    /**
     * @param array $map
     * @return AIStatisList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StatTime'])){
            $model->statTime = $map['StatTime'];
        }
        if(isset($map['StatTimeUTC'])){
            $model->statTimeUTC = $map['StatTimeUTC'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        return $model;
    }
    /**
     * @description statTimeStr
     * @var string
     */
    public $statTime;

    /**
     * @description statTimeUTC
     * @var string
     */
    public $statTimeUTC;

    /**
     * @description duration
     * @var integer
     */
    public $duration;

}
