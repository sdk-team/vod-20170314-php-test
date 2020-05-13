<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetTotalStatisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeDuration' => 'TranscodeDuration',
        'storageUtilization' => 'StorageUtilization',
        'networkOut' => 'NetworkOut',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeDuration', $this->transcodeDuration, true);
        Model::validateRequired('storageUtilization', $this->storageUtilization, true);
        Model::validateRequired('networkOut', $this->networkOut, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeDuration'] = $this->transcodeDuration;
        $res['StorageUtilization'] = $this->storageUtilization;
        $res['NetworkOut'] = $this->networkOut;
        return $res;
    }
    /**
     * @param array $map
     * @return GetTotalStatisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeDuration'])){
            $model->transcodeDuration = $map['TranscodeDuration'];
        }
        if(isset($map['StorageUtilization'])){
            $model->storageUtilization = $map['StorageUtilization'];
        }
        if(isset($map['NetworkOut'])){
            $model->networkOut = $map['NetworkOut'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.transcodeDuration
     * @var integer
     */
    public $transcodeDuration;

    /**
     * @description data.storageUtilization
     * @var integer
     */
    public $storageUtilization;

    /**
     * @description data.networkOut
     * @var integer
     */
    public $networkOut;

}
