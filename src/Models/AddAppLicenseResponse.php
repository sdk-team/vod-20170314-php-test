<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddAppLicenseResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'licenseId' => 'LicenseId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('licenseId', $this->licenseId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['LicenseId'] = $this->licenseId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddAppLicenseResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['LicenseId'])){
            $model->licenseId = $map['LicenseId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.licenseId
     * @var integer
     */
    public $licenseId;

}
