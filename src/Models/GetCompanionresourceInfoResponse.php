<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetCompanionresourceInfoResponse\companionResourceInfo;

class GetCompanionresourceInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'companionResourceInfo' => 'CompanionResourceInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('companionResourceInfo', $this->companionResourceInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['CompanionResourceInfo'] = null !== $this->companionResourceInfo ? $this->companionResourceInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCompanionresourceInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['CompanionResourceInfo'])){
            $model->companionResourceInfo = companionResourceInfo::fromMap($map['CompanionResourceInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.companionResourceInfo
     * @var GetCompanionresourceInfoResponse.companionResourceInfo
     */
    public $companionResourceInfo;

}
