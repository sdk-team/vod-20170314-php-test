<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppLicenseRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'licenseId' => 'LicenseId',
        'contractNo' => 'ContractNo',
        'appName' => 'AppName',
        'bundleId' => 'BundleId',
        'packageName' => 'PackageName',
        'licenseSignature' => 'LicenseSignature',
        'type' => 'Type',
        'feature' => 'Feature',
        'status' => 'Status',
        'expiredOn' => 'ExpiredOn',
        'sdkIds' => 'SdkIds',
        'customerId' => 'CustomerId',
        'accountId' => 'AccountId',
    ];
    public function validate() {
        Model::validateRequired('licenseId', $this->licenseId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['LicenseId'] = $this->licenseId;
        $res['ContractNo'] = $this->contractNo;
        $res['AppName'] = $this->appName;
        $res['BundleId'] = $this->bundleId;
        $res['PackageName'] = $this->packageName;
        $res['LicenseSignature'] = $this->licenseSignature;
        $res['Type'] = $this->type;
        $res['Feature'] = $this->feature;
        $res['Status'] = $this->status;
        $res['ExpiredOn'] = $this->expiredOn;
        $res['SdkIds'] = $this->sdkIds;
        $res['CustomerId'] = $this->customerId;
        $res['AccountId'] = $this->accountId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateAppLicenseRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['LicenseId'])){
            $model->licenseId = $map['LicenseId'];
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
        if(isset($map['Status'])){
            $model->status = $map['Status'];
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
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var string
     */
    public $ownerId;

    /**
     * @description licenseId
     * @var integer
     */
    public $licenseId;

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
     * @description status
     * @var string
     */
    public $status;

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

}
