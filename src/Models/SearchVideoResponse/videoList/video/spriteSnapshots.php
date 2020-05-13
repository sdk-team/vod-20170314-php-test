<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\SearchVideoResponse\videoList\video;

use AlibabaCloud\Tea\Model;

class spriteSnapshots extends Model {
    protected $_name = [
        'spriteSnapshot' => 'SpriteSnapshot',
    ];
    public function validate() {
        Model::validateRequired('spriteSnapshot', $this->spriteSnapshot, true);
    }
    public function toMap() {
        $res = [];
        $res['SpriteSnapshot'] = [];
        if(null !== $this->spriteSnapshot){
            $res['SpriteSnapshot'] = $this->spriteSnapshot;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return spriteSnapshots
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SpriteSnapshot'])){
            if(!empty($map['SpriteSnapshot'])){
                $model->spriteSnapshot = [];
                $model->spriteSnapshot = $map['SpriteSnapshot'];
            }
        }
        return $model;
    }
    /**
     * @description SpriteSnapshot
     * @var array
     */
    public $spriteSnapshot;

}
