<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetCustomerConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'downloadSwitch' => 'DownloadSwitch',
        'metricConfig' => 'MetricConfig',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('downloadSwitch', $this->downloadSwitch, true);
        Model::validateRequired('metricConfig', $this->metricConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DownloadSwitch'] = $this->downloadSwitch;
        $res['MetricConfig'] = $this->metricConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCustomerConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DownloadSwitch'])){
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if(isset($map['MetricConfig'])){
            $model->metricConfig = $map['MetricConfig'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.downloadSwitchDTO.downloadSwitch
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description data.downloadSwitchDTO.metricConfig
     * @var string
     */
    public $metricConfig;

}
