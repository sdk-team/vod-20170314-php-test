<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultResponse\mediaAuditResult;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\videoResult\terrorismResult;
use AlibabaCloud\SDK\vod\V20170314\Models\videoResult\pornResult;

class videoResult extends Model {
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label' => 'Label',
        'terrorismResult' => 'TerrorismResult',
        'pornResult' => 'PornResult',
    ];
    public function validate() {
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('terrorismResult', $this->terrorismResult, true);
        Model::validateRequired('pornResult', $this->pornResult, true);
    }
    public function toMap() {
        $res = [];
        $res['Suggestion'] = $this->suggestion;
        $res['Label'] = $this->label;
        $res['TerrorismResult'] = null !== $this->terrorismResult ? $this->terrorismResult->toMap() : null;
        $res['PornResult'] = null !== $this->pornResult ? $this->pornResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return videoResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['TerrorismResult'])){
            $model->terrorismResult = terrorismResult::fromMap($map['TerrorismResult']);
        }
        if(isset($map['PornResult'])){
            $model->pornResult = pornResult::fromMap($map['PornResult']);
        }
        return $model;
    }
    /**
     * @description suggestion
     * @var string
     */
    public $suggestion;

    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description terrorismResult
     * @var videoResult.terrorismResult
     */
    public $terrorismResult;

    /**
     * @description pornResult
     * @var videoResult.pornResult
     */
    public $pornResult;

}
