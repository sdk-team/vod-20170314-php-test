<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListCustomTemplateResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListCustomTemplateResponse\templates\template;

class templates extends Model {
    protected $_name = [
        'template' => 'Template',
    ];
    public function validate() {
        Model::validateRequired('template', $this->template, true);
    }
    public function toMap() {
        $res = [];
        $res['Template'] = [];
        if(null !== $this->template && is_array($this->template)){
            $n = 0;
            foreach($this->template as $item){
                $res['Template'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return templates
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Template'])){
            if(!empty($map['Template'])){
                $model->template = [];
                $n = 0;
                foreach($map['Template'] as $item) {
                    $model->template[$n++] = null !== $item ? template::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Template
     * @var array
     */
    public $template;

}
