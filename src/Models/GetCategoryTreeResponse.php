<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetCategoryTreeResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'categoryTree' => 'CategoryTree',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('categoryTree', $this->categoryTree, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['CategoryTree'] = $this->categoryTree;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCategoryTreeResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['CategoryTree'])){
            $model->categoryTree = $map['CategoryTree'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.categoryTree
     * @var string
     */
    public $categoryTree;

}
