<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse\playStatisByPlatformDOs\playStatisByPlatform;

class playStatisByPlatformDOs extends Model {
    protected $_name = [
        'playStatisByPlatform' => 'PlayStatisByPlatform',
    ];
    public function validate() {
        Model::validateRequired('playStatisByPlatform', $this->playStatisByPlatform, true);
    }
    public function toMap() {
        $res = [];
        $res['PlayStatisByPlatform'] = [];
        if(null !== $this->playStatisByPlatform && is_array($this->playStatisByPlatform)){
            $n = 0;
            foreach($this->playStatisByPlatform as $item){
                $res['PlayStatisByPlatform'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return playStatisByPlatformDOs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PlayStatisByPlatform'])){
            if(!empty($map['PlayStatisByPlatform'])){
                $model->playStatisByPlatform = [];
                $n = 0;
                foreach($map['PlayStatisByPlatform'] as $item) {
                    $model->playStatisByPlatform[$n++] = null !== $item ? playStatisByPlatform::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PlayStatisByPlatform
     * @var array
     */
    public $playStatisByPlatform;

}
