<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserVodStatusResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'enabled' => 'Enabled',
        'onService' => 'OnService',
        'inDebt' => 'InDebt',
        'inDebtOverdue' => 'InDebtOverdue',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('onService', $this->onService, true);
        Model::validateRequired('inDebt', $this->inDebt, true);
        Model::validateRequired('inDebtOverdue', $this->inDebtOverdue, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Enabled'] = $this->enabled;
        $res['OnService'] = $this->onService;
        $res['InDebt'] = $this->inDebt;
        $res['InDebtOverdue'] = $this->inDebtOverdue;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeUserVodStatusResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Enabled'])){
            $model->enabled = $map['Enabled'];
        }
        if(isset($map['OnService'])){
            $model->onService = $map['OnService'];
        }
        if(isset($map['InDebt'])){
            $model->inDebt = $map['InDebt'];
        }
        if(isset($map['InDebtOverdue'])){
            $model->inDebtOverdue = $map['InDebtOverdue'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.enabled
     * @var bool
     */
    public $enabled;

    /**
     * @description data.onService
     * @var bool
     */
    public $onService;

    /**
     * @description data.inDebt
     * @var bool
     */
    public $inDebt;

    /**
     * @description data.inDebtOverdue
     * @var bool
     */
    public $inDebtOverdue;

}
