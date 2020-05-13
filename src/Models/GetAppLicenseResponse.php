<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseResponse\appLicense;

class GetAppLicenseResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'appLicense' => 'AppLicense',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appLicense', $this->appLicense, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AppLicense'] = null !== $this->appLicense ? $this->appLicense->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAppLicenseResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AppLicense'])){
            $model->appLicense = appLicense::fromMap($map['AppLicense']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.appLicenseDTO
     * @var GetAppLicenseResponse.appLicense
     */
    public $appLicense;

}
