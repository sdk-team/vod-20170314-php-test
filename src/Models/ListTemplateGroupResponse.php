<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListTemplateGroupResponse\templateGroups;

class ListTemplateGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'templateGroups' => 'TemplateGroups',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateGroups', $this->templateGroups, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TemplateGroups'] = null !== $this->templateGroups ? $this->templateGroups->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListTemplateGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TemplateGroups'])){
            $model->templateGroups = templateGroups::fromMap($map['TemplateGroups']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.groups
     * @var ListTemplateGroupResponse.templateGroups
     */
    public $templateGroups;

}
