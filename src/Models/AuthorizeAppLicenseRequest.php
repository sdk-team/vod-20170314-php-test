<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeAppLicenseRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'sdkCode' => 'SdkCode',
        'licenseVersion' => 'LicenseVersion',
        'platform' => 'Platform',
        'bundleId' => 'BundleId',
        'packageName' => 'PackageName',
        'licenseSignature' => 'LicenseSignature',
        'nonce' => 'Nonce',
        'time' => 'Time',
        'sign' => 'Sign',
        'sdkVersion' => 'SdkVersion',
        'sdkVersionCode' => 'SdkVersionCode',
    ];
    public function validate() {
        Model::validateRequired('licenseVersion', $this->licenseVersion, true);
        Model::validateRequired('platform', $this->platform, true);
        Model::validateRequired('nonce', $this->nonce, true);
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('sign', $this->sign, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['SdkCode'] = $this->sdkCode;
        $res['LicenseVersion'] = $this->licenseVersion;
        $res['Platform'] = $this->platform;
        $res['BundleId'] = $this->bundleId;
        $res['PackageName'] = $this->packageName;
        $res['LicenseSignature'] = $this->licenseSignature;
        $res['Nonce'] = $this->nonce;
        $res['Time'] = $this->time;
        $res['Sign'] = $this->sign;
        $res['SdkVersion'] = $this->sdkVersion;
        $res['SdkVersionCode'] = $this->sdkVersionCode;
        return $res;
    }
    /**
     * @param array $map
     * @return AuthorizeAppLicenseRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SdkCode'])){
            $model->sdkCode = $map['SdkCode'];
        }
        if(isset($map['LicenseVersion'])){
            $model->licenseVersion = $map['LicenseVersion'];
        }
        if(isset($map['Platform'])){
            $model->platform = $map['Platform'];
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
        if(isset($map['Nonce'])){
            $model->nonce = $map['Nonce'];
        }
        if(isset($map['Time'])){
            $model->time = $map['Time'];
        }
        if(isset($map['Sign'])){
            $model->sign = $map['Sign'];
        }
        if(isset($map['SdkVersion'])){
            $model->sdkVersion = $map['SdkVersion'];
        }
        if(isset($map['SdkVersionCode'])){
            $model->sdkVersionCode = $map['SdkVersionCode'];
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
     * @description sdkCode
     * @var integer
     */
    public $sdkCode;

    /**
     * @description licenseVersion
     * @var integer
     */
    public $licenseVersion;

    /**
     * @description platform
     * @var integer
     */
    public $platform;

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
     * @description nonce
     * @var string
     */
    public $nonce;

    /**
     * @description time
     * @var integer
     */
    public $time;

    /**
     * @description sign
     * @var string
     */
    public $sign;

    /**
     * @description sdkVersion
     * @var string
     */
    public $sdkVersion;

    /**
     * @description sdkVersionCode
     * @var integer
     */
    public $sdkVersionCode;

}
