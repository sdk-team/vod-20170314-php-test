<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddAppLicenseRequest extends Model {
    protected $_name = [
        'appName' => 'AppName',
        'contractNo' => 'ContractNo',
        'bundleId' => 'BundleId',
        'packageName' => 'PackageName',
        'licenseSignature' => 'LicenseSignature',
        'type' => 'Type',
        'feature' => 'Feature',
        'expiredOn' => 'ExpiredOn',
        'sdkIds' => 'SdkIds',
        'customerId' => 'CustomerId',
        'accountId' => 'AccountId',
        'licenseId' => 'LicenseId',
        'createTime' => 'CreateTime',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('expiredOn', $this->expiredOn, true);
    }
    public function toMap() {
        $res = [];
        $res['AppName'] = $this->appName;
        $res['ContractNo'] = $this->contractNo;
        $res['BundleId'] = $this->bundleId;
        $res['PackageName'] = $this->packageName;
        $res['LicenseSignature'] = $this->licenseSignature;
        $res['Type'] = $this->type;
        $res['Feature'] = $this->feature;
        $res['ExpiredOn'] = $this->expiredOn;
        $res['SdkIds'] = $this->sdkIds;
        $res['CustomerId'] = $this->customerId;
        $res['AccountId'] = $this->accountId;
        $res['LicenseId'] = $this->licenseId;
        $res['CreateTime'] = $this->createTime;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return AddAppLicenseRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        if(isset($map['ContractNo'])){
            $model->contractNo = $map['ContractNo'];
        }
        if(isset($map['BundleId'])){
            $model->bundleId = $map['BundleId'];
        }
        if(isset($map['PackageName'])){
            $model->packageName = $map['PackageName'];
        }
        if(isset($map['LicenseSignature'])){
            $model->licenseSignature = $map['LicenseSignature'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Feature'])){
            $model->feature = $map['Feature'];
        }
        if(isset($map['ExpiredOn'])){
            $model->expiredOn = $map['ExpiredOn'];
        }
        if(isset($map['SdkIds'])){
            $model->sdkIds = $map['SdkIds'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['AccountId'])){
            $model->accountId = $map['AccountId'];
        }
        if(isset($map['LicenseId'])){
            $model->licenseId = $map['LicenseId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description appName
     * @var string
     */
    public $appName;

    /**
     * @description contractNo
     * @var string
     */
    public $contractNo;

    /**
     * @description bundleId
     * @var string
     */
    public $bundleId;

    /**
     * @description packageName
     * @var string
     */
    public $packageName;

    /**
     * @description signature
     * @var string
     */
    public $licenseSignature;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description feature
     * @var string
     */
    public $feature;

    /**
     * @description expiredOn
     * @var string
     */
    public $expiredOn;

    /**
     * @description sdkIds
     * @var string
     */
    public $sdkIds;

    /**
     * @description customerId
     * @var integer
     */
    public $customerId;

    /**
     * @description accountId
     * @var integer
     */
    public $accountId;

    /**
     * @description licenseId
     * @var integer
     */
    public $licenseId;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description status
     * @var string
     */
    public $status;

}
