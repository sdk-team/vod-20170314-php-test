<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SearchMaterialResponse\materialList;

class SearchMaterialResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'materialList' => 'MaterialList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('materialList', $this->materialList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Total'] = $this->total;
        $res['MaterialList'] = null !== $this->materialList ? $this->materialList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SearchMaterialResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['MaterialList'])){
            $model->materialList = materialList::fromMap($map['MaterialList']);
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
     * @description data.materialList
     * @var SearchMaterialResponse.materialList
     */
    public $materialList;

}
