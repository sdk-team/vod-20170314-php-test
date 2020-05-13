<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetServiceStatusResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'status' => 'status',
        'serviceState' => 'serviceState',
        'instanceId' => 'InstanceId',
        'chargeType' => 'ChargeType',
        'changingChargeType' => 'ChangingChargeType',
        'changingAfterTime' => 'ChangingAfterTime',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('serviceState', $this->serviceState, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('changingChargeType', $this->changingChargeType, true);
        Model::validateRequired('changingAfterTime', $this->changingAfterTime, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['status'] = $this->status;
        $res['serviceState'] = $this->serviceState;
        $res['InstanceId'] = $this->instanceId;
        $res['ChargeType'] = $this->chargeType;
        $res['ChangingChargeType'] = $this->changingChargeType;
        $res['ChangingAfterTime'] = $this->changingAfterTime;
        return $res;
    }
    /**
     * @param array $map
     * @return GetServiceStatusResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['serviceState'])){
            $model->serviceState = $map['serviceState'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['ChargeType'])){
            $model->chargeType = $map['ChargeType'];
        }
        if(isset($map['ChangingChargeType'])){
            $model->changingChargeType = $map['ChangingChargeType'];
        }
        if(isset($map['ChangingAfterTime'])){
            $model->changingAfterTime = $map['ChangingAfterTime'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.status
     * @var integer
     */
    public $status;

    /**
     * @description data.serviceState
     * @var integer
     */
    public $serviceState;

    /**
     * @description data.instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description data.chargeType
     * @var integer
     */
    public $chargeType;

    /**
     * @description data.changingChargeType
     * @var string
     */
    public $changingChargeType;

    /**
     * @description data.changingAfterTime
     * @var string
     */
    public $changingAfterTime;

}
