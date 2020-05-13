<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template\muxConfig;

use AlibabaCloud\Tea\Model;

class segment extends Model {
    protected $_name = [
        'duration' => 'Duration',
    ];
    public function validate() {
        Model::validateRequired('duration', $this->duration, true);
    }
    public function toMap() {
        $res = [];
        $res['Duration'] = $this->duration;
        return $res;
    }
    /**
     * @param array $map
     * @return segment
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        return $model;
    }
    /**
     * @description duration
     * @var string
     */
    public $duration;

}
