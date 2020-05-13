<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetOSSFlowStatisResponse\OSSFlowStatisList;

class GetOSSFlowStatisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'OSSFlowStatisList' => 'OSSFlowStatisList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('OSSFlowStatisList', $this->OSSFlowStatisList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['OSSFlowStatisList'] = [];
        if(null !== $this->OSSFlowStatisList && is_array($this->OSSFlowStatisList)){
            $n = 0;
            foreach($this->OSSFlowStatisList as $item){
                $res['OSSFlowStatisList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOSSFlowStatisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['OSSFlowStatisList'])){
            if(!empty($map['OSSFlowStatisList'])){
                $model->OSSFlowStatisList = [];
                $n = 0;
                foreach($map['OSSFlowStatisList'] as $item) {
                    $model->OSSFlowStatisList[$n++] = null !== $item ? OSSFlowStatisList::fromMap($item) : $item;
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
     * @description data.ossStatisList
     * @var array
     */
    public $OSSFlowStatisList;

}
