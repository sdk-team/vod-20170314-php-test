<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\muxConfig\segment;

class muxConfig extends Model {
    protected $_name = [
        'segment' => 'Segment',
    ];
    public function validate() {
        Model::validateRequired('segment', $this->segment, true);
    }
    public function toMap() {
        $res = [];
        $res['Segment'] = null !== $this->segment ? $this->segment->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return muxConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Segment'])){
            $model->segment = segment::fromMap($map['Segment']);
        }
        return $model;
    }
    /**
     * @description segment
     * @var muxConfig.segment
     */
    public $segment;

}
