<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodServiceResponse\operationLocks;

class DescribeVodServiceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'instanceId' => 'InstanceId',
        'internetChargeType' => 'InternetChargeType',
        'openingTime' => 'OpeningTime',
        'changingChargeType' => 'ChangingChargeType',
        'changingAffectTime' => 'ChangingAffectTime',
        'operationLocks' => 'OperationLocks',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('openingTime', $this->openingTime, true);
        Model::validateRequired('changingChargeType', $this->changingChargeType, true);
        Model::validateRequired('changingAffectTime', $this->changingAffectTime, true);
        Model::validateRequired('operationLocks', $this->operationLocks, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['InstanceId'] = $this->instanceId;
        $res['InternetChargeType'] = $this->internetChargeType;
        $res['OpeningTime'] = $this->openingTime;
        $res['ChangingChargeType'] = $this->changingChargeType;
        $res['ChangingAffectTime'] = $this->changingAffectTime;
        $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodServiceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['InternetChargeType'])){
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if(isset($map['OpeningTime'])){
            $model->openingTime = $map['OpeningTime'];
        }
        if(isset($map['ChangingChargeType'])){
            $model->changingChargeType = $map['ChangingChargeType'];
        }
        if(isset($map['ChangingAffectTime'])){
            $model->changingAffectTime = $map['ChangingAffectTime'];
        }
        if(isset($map['OperationLocks'])){
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description data.internetChargeType
     * @var string
     */
    public $internetChargeType;

    /**
     * @description data.openingTime
     * @var string
     */
    public $openingTime;

    /**
     * @description data.changingChargeType
     * @var string
     */
    public $changingChargeType;

    /**
     * @description data.changingAfterTime
     * @var string
     */
    public $changingAffectTime;

    /**
     * @description data.operationLocks
     * @var DescribeVodServiceResponse.operationLocks
     */
    public $operationLocks;

}
