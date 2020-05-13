<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListCustomTemplateResponse\templates;

class ListCustomTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'templates' => 'Templates',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templates', $this->templates, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Templates'] = null !== $this->templates ? $this->templates->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListCustomTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Templates'])){
            $model->templates = templates::fromMap($map['Templates']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.templates
     * @var ListCustomTemplateResponse.templates
     */
    public $templates;

}
