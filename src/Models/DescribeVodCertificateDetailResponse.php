<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodCertificateDetailResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'cert' => 'Cert',
        'key' => 'Key',
        'certId' => 'CertId',
        'certName' => 'CertName',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('cert', $this->cert, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('certId', $this->certId, true);
        Model::validateRequired('certName', $this->certName, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Cert'] = $this->cert;
        $res['Key'] = $this->key;
        $res['CertId'] = $this->certId;
        $res['CertName'] = $this->certName;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodCertificateDetailResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Cert'])){
            $model->cert = $map['Cert'];
        }
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['CertId'])){
            $model->certId = $map['CertId'];
        }
        if(isset($map['CertName'])){
            $model->certName = $map['CertName'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.cert
     * @var string
     */
    public $cert;

    /**
     * @description data.key
     * @var string
     */
    public $key;

    /**
     * @description data.certId
     * @var integer
     */
    public $certId;

    /**
     * @description data.certName
     * @var string
     */
    public $certName;

}
