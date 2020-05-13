<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainUvDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainUvDataResponse\uvDataInterval\uvDataInterval;

class uvDataInterval extends Model {
    protected $_name = [
        'uvDataInterval' => 'UvDataInterval',
    ];
    public function validate() {
        Model::validateRequired('uvDataInterval', $this->uvDataInterval, true);
    }
    public function toMap() {
        $res = [];
        $res['UvDataInterval'] = [];
        if(null !== $this->uvDataInterval && is_array($this->uvDataInterval)){
            $n = 0;
            foreach($this->uvDataInterval as $item){
                $res['UvDataInterval'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return uvDataInterval
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UvDataInterval'])){
            if(!empty($map['UvDataInterval'])){
                $model->uvDataInterval = [];
                $n = 0;
                foreach($map['UvDataInterval'] as $item) {
                    $model->uvDataInterval[$n++] = null !== $item ? uvDataInterval::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description UvDataInterval
     * @var array
     */
    public $uvDataInterval;

}
