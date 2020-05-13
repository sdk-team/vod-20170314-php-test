<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SearchVideoResponse\videoList;

class SearchVideoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'scrollToken' => 'ScrollToken',
        'total' => 'Total',
        'videoList' => 'VideoList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('scrollToken', $this->scrollToken, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('videoList', $this->videoList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ScrollToken'] = $this->scrollToken;
        $res['Total'] = $this->total;
        $res['VideoList'] = null !== $this->videoList ? $this->videoList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SearchVideoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ScrollToken'])){
            $model->scrollToken = $map['ScrollToken'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['VideoList'])){
            $model->videoList = videoList::fromMap($map['VideoList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.lastItem
     * @var string
     */
    public $scrollToken;

    /**
     * @description data.total
     * @var integer
     */
    public $total;

    /**
     * @description data.aMediaList
     * @var SearchVideoResponse.videoList
     */
    public $videoList;

}
