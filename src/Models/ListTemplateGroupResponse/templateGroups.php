<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListTemplateGroupResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListTemplateGroupResponse\templateGroups\templateGroup;

class templateGroups extends Model {
    protected $_name = [
        'templateGroup' => 'TemplateGroup',
    ];
    public function validate() {
        Model::validateRequired('templateGroup', $this->templateGroup, true);
    }
    public function toMap() {
        $res = [];
        $res['TemplateGroup'] = [];
        if(null !== $this->templateGroup && is_array($this->templateGroup)){
            $n = 0;
            foreach($this->templateGroup as $item){
                $res['TemplateGroup'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return templateGroups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TemplateGroup'])){
            if(!empty($map['TemplateGroup'])){
                $model->templateGroup = [];
                $n = 0;
                foreach($map['TemplateGroup'] as $item) {
                    $model->templateGroup[$n++] = null !== $item ? templateGroup::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description TemplateGroup
     * @var array
     */
    public $templateGroup;

}
