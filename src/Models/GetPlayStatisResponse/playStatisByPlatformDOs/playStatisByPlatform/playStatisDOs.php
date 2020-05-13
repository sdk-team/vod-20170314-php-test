<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse\playStatisByPlatformDOs\playStatisByPlatform;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse\playStatisByPlatformDOs\playStatisByPlatform\playStatisDOs\playStatisDO;

class playStatisDOs extends Model {
    protected $_name = [
        'playStatisDO' => 'PlayStatisDO',
    ];
    public function validate() {
        Model::validateRequired('playStatisDO', $this->playStatisDO, true);
    }
    public function toMap() {
        $res = [];
        $res['PlayStatisDO'] = [];
        if(null !== $this->playStatisDO && is_array($this->playStatisDO)){
            $n = 0;
            foreach($this->playStatisDO as $item){
                $res['PlayStatisDO'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return playStatisDOs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PlayStatisDO'])){
            if(!empty($map['PlayStatisDO'])){
                $model->playStatisDO = [];
                $n = 0;
                foreach($map['PlayStatisDO'] as $item) {
                    $model->playStatisDO[$n++] = null !== $item ? playStatisDO::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PlayStatisDO
     * @var array
     */
    public $playStatisDO;

}
