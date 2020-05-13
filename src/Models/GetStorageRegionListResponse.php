<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageRegionListResponse\regionList;

class GetStorageRegionListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'regionList' => 'RegionList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionList', $this->regionList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RegionList'] = null !== $this->regionList ? $this->regionList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetStorageRegionListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RegionList'])){
            $model->regionList = regionList::fromMap($map['RegionList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.regionList
     * @var GetStorageRegionListResponse.regionList
     */
    public $regionList;

}
