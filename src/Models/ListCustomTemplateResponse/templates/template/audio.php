<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListCustomTemplateResponse\templates\template;

use AlibabaCloud\Tea\Model;

class audio extends Model {
    protected $_name = [
        'codec' => 'Codec',
        'profile' => 'Profile',
        'bitrate' => 'Bitrate',
        'samplerate' => 'Samplerate',
        'channels' => 'Channels',
        'remove' => 'Remove',
    ];
    public function validate() {
        Model::validateRequired('codec', $this->codec, true);
        Model::validateRequired('profile', $this->profile, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('samplerate', $this->samplerate, true);
        Model::validateRequired('channels', $this->channels, true);
        Model::validateRequired('remove', $this->remove, true);
    }
    public function toMap() {
        $res = [];
        $res['Codec'] = $this->codec;
        $res['Profile'] = $this->profile;
        $res['Bitrate'] = $this->bitrate;
        $res['Samplerate'] = $this->samplerate;
        $res['Channels'] = $this->channels;
        $res['Remove'] = $this->remove;
        return $res;
    }
    /**
     * @param array $map
     * @return audio
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Codec'])){
            $model->codec = $map['Codec'];
        }
        if(isset($map['Profile'])){
            $model->profile = $map['Profile'];
        }
        if(isset($map['Bitrate'])){
            $model->bitrate = $map['Bitrate'];
        }
        if(isset($map['Samplerate'])){
            $model->samplerate = $map['Samplerate'];
        }
        if(isset($map['Channels'])){
            $model->channels = $map['Channels'];
        }
        if(isset($map['Remove'])){
            $model->remove = $map['Remove'];
        }
        return $model;
    }
    /**
     * @description codec
     * @var string
     */
    public $codec;

    /**
     * @description profile
     * @var string
     */
    public $profile;

    /**
     * @description bitrate
     * @var string
     */
    public $bitrate;

    /**
     * @description samplerate
     * @var string
     */
    public $samplerate;

    /**
     * @description channels
     * @var string
     */
    public $channels;

    /**
     * @description remove
     * @var string
     */
    public $remove;

}
