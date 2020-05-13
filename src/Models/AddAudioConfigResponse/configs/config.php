<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\AddAudioConfigResponse\configs;

use AlibabaCloud\Tea\Model;

class config extends Model {
    protected $_name = [
        'templateId' => 'TemplateId',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['TemplateId'] = $this->templateId;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return config
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TemplateId'])){
            $model->templateId = $map['TemplateId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description templateId
     * @var string
     */
    public $templateId;

    /**
     * @description mapStatus
     * @var string
     */
    public $status;

}
