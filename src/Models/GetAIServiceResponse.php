<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAIServiceResponse\AIList;

class GetAIServiceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIList' => 'AIList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIList', $this->AIList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIList'] = [];
        if(null !== $this->AIList && is_array($this->AIList)){
            $n = 0;
            foreach($this->AIList as $item){
                $res['AIList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetAIServiceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIList'])){
            if(!empty($map['AIList'])){
                $model->AIList = [];
                $n = 0;
                foreach($map['AIList'] as $item) {
                    $model->AIList[$n++] = null !== $item ? AIList::fromMap($item) : $item;
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
     * @description data.aiList
     * @var array
     */
    public $AIList;

}
