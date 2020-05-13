<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserResourcePackageResponse\resourcePackageInfos;

class DescribeVodUserResourcePackageResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'resourcePackageInfos' => 'ResourcePackageInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resourcePackageInfos', $this->resourcePackageInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ResourcePackageInfos'] = null !== $this->resourcePackageInfos ? $this->resourcePackageInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodUserResourcePackageResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ResourcePackageInfos'])){
            $model->resourcePackageInfos = resourcePackageInfos::fromMap($map['ResourcePackageInfos']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var DescribeVodUserResourcePackageResponse.resourcePackageInfos
     */
    public $resourcePackageInfos;

}
