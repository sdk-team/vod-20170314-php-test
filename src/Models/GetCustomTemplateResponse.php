<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template\video;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template\audio;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template\container;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template\transConfig;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template\muxConfig;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template\muxConfig\segment;

class GetCustomTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'template' => 'Template',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('template', $this->template, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCustomTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Template'])){
            $model->template = template::fromMap($map['Template']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.template
     * @var GetCustomTemplateResponse.template
     */
    public $template;

}
