<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAIStatisResponse\AIStatisList;

class GetAIStatisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIStatisList' => 'AIStatisList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIStatisList', $this->AIStatisList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIStatisList'] = [];
        if(null !== $this->AIStatisList && is_array($this->AIStatisList)){
            $n = 0;
            foreach($this->AIStatisList as $item){
                $res['AIStatisList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetAIStatisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIStatisList'])){
            if(!empty($map['AIStatisList'])){
                $model->AIStatisList = [];
                $n = 0;
                foreach($map['AIStatisList'] as $item) {
                    $model->AIStatisList[$n++] = null !== $item ? AIStatisList::fromMap($item) : $item;
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
     * @description data.aiStatisList
     * @var array
     */
    public $AIStatisList;

}
