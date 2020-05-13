<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetOSSStatisResponse\ossStatisList;

class GetOSSStatisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'maxStorageUtilization' => 'MaxStorageUtilization',
        'ossStatisList' => 'OssStatisList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('maxStorageUtilization', $this->maxStorageUtilization, true);
        Model::validateRequired('ossStatisList', $this->ossStatisList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MaxStorageUtilization'] = $this->maxStorageUtilization;
        $res['OssStatisList'] = null !== $this->ossStatisList ? $this->ossStatisList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetOSSStatisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MaxStorageUtilization'])){
            $model->maxStorageUtilization = $map['MaxStorageUtilization'];
        }
        if(isset($map['OssStatisList'])){
            $model->ossStatisList = ossStatisList::fromMap($map['OssStatisList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.maxStorageUtilization
     * @var integer
     */
    public $maxStorageUtilization;

    /**
     * @description data.ossStatisList
     * @var GetOSSStatisResponse.ossStatisList
     */
    public $ossStatisList;

}
