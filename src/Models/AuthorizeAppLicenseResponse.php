<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeAppLicenseResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'expireDate' => 'ExpireDate',
        'sign' => 'Sign',
        'feature' => 'Feature',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('expireDate', $this->expireDate, true);
        Model::validateRequired('sign', $this->sign, true);
        Model::validateRequired('feature', $this->feature, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ExpireDate'] = $this->expireDate;
        $res['Sign'] = $this->sign;
        $res['Feature'] = $this->feature;
        return $res;
    }
    /**
     * @param array $map
     * @return AuthorizeAppLicenseResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ExpireDate'])){
            $model->expireDate = $map['ExpireDate'];
        }
        if(isset($map['Sign'])){
            $model->sign = $map['Sign'];
        }
        if(isset($map['Feature'])){
            $model->feature = $map['Feature'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.expireDate
     * @var string
     */
    public $expireDate;

    /**
     * @description data.sign
     * @var string
     */
    public $sign;

    /**
     * @description data.feature
     * @var string
     */
    public $feature;

}
