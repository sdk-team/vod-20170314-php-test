<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAudioTemplateResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAudioTemplateResponse\audios\audio;

class audios extends Model {
    protected $_name = [
        'audio' => 'Audio',
    ];
    public function validate() {
        Model::validateRequired('audio', $this->audio, true);
    }
    public function toMap() {
        $res = [];
        $res['Audio'] = [];
        if(null !== $this->audio && is_array($this->audio)){
            $n = 0;
            foreach($this->audio as $item){
                $res['Audio'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return audios
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Audio'])){
            if(!empty($map['Audio'])){
                $model->audio = [];
                $n = 0;
                foreach($map['Audio'] as $item) {
                    $model->audio[$n++] = null !== $item ? audio::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Audio
     * @var array
     */
    public $audio;

}
