<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseListResponse\appLicenseList;

use AlibabaCloud\Tea\Model;

class appLicense extends Model {
    protected $_name = [
        'licenseId' => 'LicenseId',
        'creationTime' => 'CreationTime',
        'contractNo' => 'ContractNo',
        'appName' => 'AppName',
        'bundleId' => 'BundleId',
        'packageName' => 'PackageName',
        'licenseSignature' => 'LicenseSignature',
        'type' => 'Type',
        'feature' => 'Feature',
        'expiredOn' => 'ExpiredOn',
        'status' => 'Status',
        'sdkIds' => 'SdkIds',
        'accountId' => 'AccountId',
        'customerId' => 'CustomerId',
    ];
    public function validate() {
        Model::validateRequired('licenseId', $this->licenseId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('contractNo', $this->contractNo, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('bundleId', $this->bundleId, true);
        Model::validateRequired('packageName', $this->packageName, true);
        Model::validateRequired('licenseSignature', $this->licenseSignature, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('feature', $this->feature, true);
        Model::validateRequired('expiredOn', $this->expiredOn, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('sdkIds', $this->sdkIds, true);
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('customerId', $this->customerId, true);
    }
    public function toMap() {
        $res = [];
        $res['LicenseId'] = $this->licenseId;
        $res['CreationTime'] = $this->creationTime;
        $res['ContractNo'] = $this->contractNo;
        $res['AppName'] = $this->appName;
        $res['BundleId'] = $this->bundleId;
        $res['PackageName'] = $this->packageName;
        $res['LicenseSignature'] = $this->licenseSignature;
        $res['Type'] = $this->type;
        $res['Feature'] = $this->feature;
        $res['ExpiredOn'] = $this->expiredOn;
        $res['Status'] = $this->status;
        $res['SdkIds'] = $this->sdkIds;
        $res['AccountId'] = $this->accountId;
        $res['CustomerId'] = $this->customerId;
        return $res;
    }
    /**
     * @param array $map
     * @return appLicense
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LicenseId'])){
            $model->licenseId = $map['LicenseId'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ContractNo'])){
            $model->contractNo = $map['ContractNo'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
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
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['SdkIds'])){
            $model->sdkIds = $map['SdkIds'];
        }
        if(isset($map['AccountId'])){
            $model->accountId = $map['AccountId'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        return $model;
    }
    /**
     * @description licenseId
     * @var integer
     */
    public $licenseId;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description contractNo
     * @var string
     */
    public $contractNo;

    /**
     * @description appName
     * @var string
     */
    public $appName;

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
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description sdkIds
     * @var string
     */
    public $sdkIds;

    /**
     * @description customerId
     * @var integer
     */
    public $accountId;

    /**
     * @description userId
     * @var integer
     */
    public $customerId;

}
