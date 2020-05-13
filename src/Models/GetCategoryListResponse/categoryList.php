<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCategoryListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoryListResponse\categoryList\category;

class categoryList extends Model {
    protected $_name = [
        'category' => 'Category',
    ];
    public function validate() {
        Model::validateRequired('category', $this->category, true);
    }
    public function toMap() {
        $res = [];
        $res['Category'] = [];
        if(null !== $this->category && is_array($this->category)){
            $n = 0;
            foreach($this->category as $item){
                $res['Category'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return categoryList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Category'])){
            if(!empty($map['Category'])){
                $model->category = [];
                $n = 0;
                foreach($map['Category'] as $item) {
                    $model->category[$n++] = null !== $item ? category::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Category
     * @var array
     */
    public $category;

}
