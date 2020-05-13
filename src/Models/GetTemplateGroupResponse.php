<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetTemplateGroupResponse\templateGroup;
use AlibabaCloud\SDK\vod\V20170314\Models\GetTemplateGroupResponse\templateGroup\templates;

class GetTemplateGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'templateGroup' => 'TemplateGroup',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateGroup', $this->templateGroup, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TemplateGroup'] = null !== $this->templateGroup ? $this->templateGroup->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetTemplateGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TemplateGroup'])){
            $model->templateGroup = templateGroup::fromMap($map['TemplateGroup']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.group
     * @var GetTemplateGroupResponse.templateGroup
     */
    public $templateGroup;

}
