<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultResponse;

use AlibabaCloud\Tea\Model;

class AIAuditResult extends Model {
    protected $_name = [
        'abnormalModules' => 'AbnormalModules',
        'label' => 'Label',
        'pornResult' => 'PornResult',
        'terrorismResult' => 'TerrorismResult',
        'titleResult' => 'TitleResult',
        'coverResult' => 'CoverResult',
    ];
    public function validate() {
        Model::validateRequired('abnormalModules', $this->abnormalModules, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('pornResult', $this->pornResult, true);
        Model::validateRequired('terrorismResult', $this->terrorismResult, true);
        Model::validateRequired('titleResult', $this->titleResult, true);
        Model::validateRequired('coverResult', $this->coverResult, true);
    }
    public function toMap() {
        $res = [];
        $res['AbnormalModules'] = $this->abnormalModules;
        $res['Label'] = $this->label;
        $res['PornResult'] = $this->pornResult;
        $res['TerrorismResult'] = $this->terrorismResult;
        $res['TitleResult'] = $this->titleResult;
        $res['CoverResult'] = $this->coverResult;
        return $res;
    }
    /**
     * @param array $map
     * @return AIAuditResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AbnormalModules'])){
            $model->abnormalModules = $map['AbnormalModules'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['PornResult'])){
            $model->pornResult = $map['PornResult'];
        }
        if(isset($map['TerrorismResult'])){
            $model->terrorismResult = $map['TerrorismResult'];
        }
        if(isset($map['TitleResult'])){
            $model->titleResult = $map['TitleResult'];
        }
        if(isset($map['CoverResult'])){
            $model->coverResult = $map['CoverResult'];
        }
        return $model;
    }
    /**
     * @description abnormalModules
     * @var string
     */
    public $abnormalModules;

    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description pornResult
     * @var string
     */
    public $pornResult;

    /**
     * @description terrorismResult
     * @var string
     */
    public $terrorismResult;

    /**
     * @description titleResult
     * @var string
     */
    public $titleResult;

    /**
     * @description coverResult
     * @var string
     */
    public $coverResult;

}
