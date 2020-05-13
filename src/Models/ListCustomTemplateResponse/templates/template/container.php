<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListCustomTemplateResponse\templates\template;

use AlibabaCloud\Tea\Model;

class container extends Model {
    protected $_name = [
        'format' => 'Format',
    ];
    public function validate() {
        Model::validateRequired('format', $this->format, true);
    }
    public function toMap() {
        $res = [];
        $res['Format'] = $this->format;
        return $res;
    }
    /**
     * @param array $map
     * @return container
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Format'])){
            $model->format = $map['Format'];
        }
        return $model;
    }
    /**
     * @description format
     * @var string
     */
    public $format;

}
