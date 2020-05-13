<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoryListResponse\categoryList;

class GetCategoryListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'categoryList' => 'CategoryList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('categoryList', $this->categoryList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['CategoryList'] = null !== $this->categoryList ? $this->categoryList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCategoryListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['CategoryList'])){
            $model->categoryList = categoryList::fromMap($map['CategoryList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.categoryList
     * @var GetCategoryListResponse.categoryList
     */
    public $categoryList;

}
