<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelListResponse\playKeyList\playKey;

class playKeyList extends Model {
    protected $_name = [
        'playKey' => 'PlayKey',
    ];
    public function validate() {
        Model::validateRequired('playKey', $this->playKey, true);
    }
    public function toMap() {
        $res = [];
        $res['PlayKey'] = [];
        if(null !== $this->playKey && is_array($this->playKey)){
            $n = 0;
            foreach($this->playKey as $item){
                $res['PlayKey'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return playKeyList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PlayKey'])){
            if(!empty($map['PlayKey'])){
                $model->playKey = [];
                $n = 0;
                foreach($map['PlayKey'] as $item) {
                    $model->playKey[$n++] = null !== $item ? playKey::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PlayKey
     * @var array
     */
    public $playKey;

}
