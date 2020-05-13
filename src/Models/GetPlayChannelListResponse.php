<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelListResponse\playKeyList;

class GetPlayChannelListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'playKeyList' => 'PlayKeyList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('playKeyList', $this->playKeyList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Total'] = $this->total;
        $res['PlayKeyList'] = null !== $this->playKeyList ? $this->playKeyList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPlayChannelListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['PlayKeyList'])){
            $model->playKeyList = playKeyList::fromMap($map['PlayKeyList']);
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
     * @description data.apiAuthList
     * @var GetPlayChannelListResponse.playKeyList
     */
    public $playKeyList;

}
