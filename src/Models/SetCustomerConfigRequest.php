<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SetCustomerConfigRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'downloadSwitch' => 'DownloadSwitch',
        'metricConfig' => 'MetricConfig',
        'AIConfig' => 'AIConfig',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DownloadSwitch'] = $this->downloadSwitch;
        $res['MetricConfig'] = $this->metricConfig;
        $res['AIConfig'] = $this->AIConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return SetCustomerConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DownloadSwitch'])){
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if(isset($map['MetricConfig'])){
            $model->metricConfig = $map['MetricConfig'];
        }
        if(isset($map['AIConfig'])){
            $model->AIConfig = $map['AIConfig'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description downloadSwitch
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description metricConfig
     * @var string
     */
    public $metricConfig;

    /**
     * @description aIConfig
     * @var string
     */
    public $AIConfig;

}
