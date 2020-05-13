<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListCompanionresourceInfoResponse\companionResourceInfos;

class ListCompanionresourceInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'companionResourceInfos' => 'CompanionResourceInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('companionResourceInfos', $this->companionResourceInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['CompanionResourceInfos'] = null !== $this->companionResourceInfos ? $this->companionResourceInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListCompanionresourceInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['CompanionResourceInfos'])){
            $model->companionResourceInfos = companionResourceInfos::fromMap($map['CompanionResourceInfos']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.companionResourceInfos
     * @var ListCompanionresourceInfoResponse.companionResourceInfos
     */
    public $companionResourceInfos;

}
