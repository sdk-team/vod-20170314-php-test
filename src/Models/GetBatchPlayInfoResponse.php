<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetBatchPlayInfoResponse\batchPlayInfoList;

class GetBatchPlayInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'batchPlayInfoList' => 'BatchPlayInfoList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('batchPlayInfoList', $this->batchPlayInfoList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['BatchPlayInfoList'] = [];
        if(null !== $this->batchPlayInfoList && is_array($this->batchPlayInfoList)){
            $n = 0;
            foreach($this->batchPlayInfoList as $item){
                $res['BatchPlayInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetBatchPlayInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['BatchPlayInfoList'])){
            if(!empty($map['BatchPlayInfoList'])){
                $model->batchPlayInfoList = [];
                $n = 0;
                foreach($map['BatchPlayInfoList'] as $item) {
                    $model->batchPlayInfoList[$n++] = null !== $item ? batchPlayInfoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.batchPlayInfo
     * @var array
     */
    public $batchPlayInfoList;

}
