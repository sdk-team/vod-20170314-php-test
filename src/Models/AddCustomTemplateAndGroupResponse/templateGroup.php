<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\AddCustomTemplateAndGroupResponse;

use AlibabaCloud\Tea\Model;

class templateGroup extends Model {
    protected $_name = [
        'templateGroupId' => 'TemplateGroupId',
    ];
    public function validate() {
        Model::validateRequired('templateGroupId', $this->templateGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['TemplateGroupId'] = $this->templateGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return templateGroup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TemplateGroupId'])){
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        return $model;
    }
    /**
     * @description groupId
     * @var string
     */
    public $templateGroupId;

}
