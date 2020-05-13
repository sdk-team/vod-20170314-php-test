<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksResponse\watermarks\watermark;

class watermarks extends Model {
    protected $_name = [
        'watermark' => 'Watermark',
    ];
    public function validate() {
        Model::validateRequired('watermark', $this->watermark, true);
    }
    public function toMap() {
        $res = [];
        $res['Watermark'] = [];
        if(null !== $this->watermark && is_array($this->watermark)){
            $n = 0;
            foreach($this->watermark as $item){
                $res['Watermark'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return watermarks
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Watermark'])){
            if(!empty($map['Watermark'])){
                $model->watermark = [];
                $n = 0;
                foreach($map['Watermark'] as $item) {
                    $model->watermark[$n++] = null !== $item ? watermark::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Watermark
     * @var array
     */
    public $watermark;

}
