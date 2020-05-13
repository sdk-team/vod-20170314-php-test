<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseListResponse\appLicenseList;

class GetAppLicenseListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'appLicenseList' => 'AppLicenseList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('appLicenseList', $this->appLicenseList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Total'] = $this->total;
        $res['AppLicenseList'] = null !== $this->appLicenseList ? $this->appLicenseList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAppLicenseListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['AppLicenseList'])){
            $model->appLicenseList = appLicenseList::fromMap($map['AppLicenseList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.total
     * @var integer
     */
    public $total;

    /**
     * @description data.appLicenseDTO
     * @var GetAppLicenseListResponse.appLicenseList
     */
    public $appLicenseList;

}
