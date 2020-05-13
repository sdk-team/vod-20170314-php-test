<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserResourcePackageResponse\resourcePackageInfos;

use AlibabaCloud\Tea\Model;

class resourcePackageInfo extends Model {
    protected $_name = [
        'currCapacity' => 'CurrCapacity',
        'initCapacity' => 'InitCapacity',
        'commodityCode' => 'CommodityCode',
        'displayName' => 'DisplayName',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('currCapacity', $this->currCapacity, true);
        Model::validateRequired('initCapacity', $this->initCapacity, true);
        Model::validateRequired('commodityCode', $this->commodityCode, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['CurrCapacity'] = $this->currCapacity;
        $res['InitCapacity'] = $this->initCapacity;
        $res['CommodityCode'] = $this->commodityCode;
        $res['DisplayName'] = $this->displayName;
        $res['InstanceId'] = $this->instanceId;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return resourcePackageInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CurrCapacity'])){
            $model->currCapacity = $map['CurrCapacity'];
        }
        if(isset($map['InitCapacity'])){
            $model->initCapacity = $map['InitCapacity'];
        }
        if(isset($map['CommodityCode'])){
            $model->commodityCode = $map['CommodityCode'];
        }
        if(isset($map['DisplayName'])){
            $model->displayName = $map['DisplayName'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description currCapacity
     * @var string
     */
    public $currCapacity;

    /**
     * @description initCapacity
     * @var string
     */
    public $initCapacity;

    /**
     * @description commodityCode
     * @var string
     */
    public $commodityCode;

    /**
     * @description displayName
     * @var string
     */
    public $displayName;

    /**
     * @description instanceName
     * @var string
     */
    public $instanceId;

    /**
     * @description status
     * @var string
     */
    public $status;

}
