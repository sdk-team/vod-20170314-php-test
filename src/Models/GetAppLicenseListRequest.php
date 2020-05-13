<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetAppLicenseListRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'customerId' => 'CustomerId',
        'accountId' => 'AccountId',
        'contractNo' => 'ContractNo',
        'appName' => 'AppName',
        'bundleId' => 'BundleId',
        'packageName' => 'PackageName',
        'type' => 'Type',
        'sdkIds' => 'SdkIds',
        'feature' => 'Feature',
        'status' => 'Status',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'startCreationTime' => 'StartCreationTime',
        'endCreationTime' => 'EndCreationTime',
        'startExpiredTime' => 'StartExpiredTime',
        'endExpiredTime' => 'EndExpiredTime',
        'sortBy' => 'SortBy',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['CustomerId'] = $this->customerId;
        $res['AccountId'] = $this->accountId;
        $res['ContractNo'] = $this->contractNo;
        $res['AppName'] = $this->appName;
        $res['BundleId'] = $this->bundleId;
        $res['PackageName'] = $this->packageName;
        $res['Type'] = $this->type;
        $res['SdkIds'] = $this->sdkIds;
        $res['Feature'] = $this->feature;
        $res['Status'] = $this->status;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['StartCreationTime'] = $this->startCreationTime;
        $res['EndCreationTime'] = $this->endCreationTime;
        $res['StartExpiredTime'] = $this->startExpiredTime;
        $res['EndExpiredTime'] = $this->endExpiredTime;
        $res['SortBy'] = $this->sortBy;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAppLicenseListRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['AccountId'])){
            $model->accountId = $map['AccountId'];
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
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['SdkIds'])){
            $model->sdkIds = $map['SdkIds'];
        }
        if(isset($map['Feature'])){
            $model->feature = $map['Feature'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['StartCreationTime'])){
            $model->startCreationTime = $map['StartCreationTime'];
        }
        if(isset($map['EndCreationTime'])){
            $model->endCreationTime = $map['EndCreationTime'];
        }
        if(isset($map['StartExpiredTime'])){
            $model->startExpiredTime = $map['StartExpiredTime'];
        }
        if(isset($map['EndExpiredTime'])){
            $model->endExpiredTime = $map['EndExpiredTime'];
        }
        if(isset($map['SortBy'])){
            $model->sortBy = $map['SortBy'];
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
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description sdkIds
     * @var string
     */
    public $sdkIds;

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
     * @description pageNo
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description startCreationTime
     * @var string
     */
    public $startCreationTime;

    /**
     * @description endCreationTime
     * @var string
     */
    public $endCreationTime;

    /**
     * @description startExpiredTime
     * @var string
     */
    public $startExpiredTime;

    /**
     * @description endExpiredTime
     * @var string
     */
    public $endExpiredTime;

    /**
     * @description sortBy
     * @var string
     */
    public $sortBy;

}
