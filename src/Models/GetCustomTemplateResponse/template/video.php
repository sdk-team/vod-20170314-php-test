<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template;

use AlibabaCloud\Tea\Model;

class video extends Model {
    protected $_name = [
        'codec' => 'Codec',
        'profile' => 'Profile',
        'bitrate' => 'Bitrate',
        'crf' => 'Crf',
        'width' => 'Width',
        'height' => 'Height',
        'fps' => 'Fps',
        'gop' => 'Gop',
        'preset' => 'Preset',
        'scanMode' => 'ScanMode',
        'pixFmt' => 'PixFmt',
        'remove' => 'Remove',
        'crop' => 'Crop',
        'pad' => 'Pad',
    ];
    public function validate() {
        Model::validateRequired('codec', $this->codec, true);
        Model::validateRequired('profile', $this->profile, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('crf', $this->crf, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('fps', $this->fps, true);
        Model::validateRequired('gop', $this->gop, true);
        Model::validateRequired('preset', $this->preset, true);
        Model::validateRequired('scanMode', $this->scanMode, true);
        Model::validateRequired('pixFmt', $this->pixFmt, true);
        Model::validateRequired('remove', $this->remove, true);
        Model::validateRequired('crop', $this->crop, true);
        Model::validateRequired('pad', $this->pad, true);
    }
    public function toMap() {
        $res = [];
        $res['Codec'] = $this->codec;
        $res['Profile'] = $this->profile;
        $res['Bitrate'] = $this->bitrate;
        $res['Crf'] = $this->crf;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['Fps'] = $this->fps;
        $res['Gop'] = $this->gop;
        $res['Preset'] = $this->preset;
        $res['ScanMode'] = $this->scanMode;
        $res['PixFmt'] = $this->pixFmt;
        $res['Remove'] = $this->remove;
        $res['Crop'] = $this->crop;
        $res['Pad'] = $this->pad;
        return $res;
    }
    /**
     * @param array $map
     * @return video
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
        if(isset($map['Crf'])){
            $model->crf = $map['Crf'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Fps'])){
            $model->fps = $map['Fps'];
        }
        if(isset($map['Gop'])){
            $model->gop = $map['Gop'];
        }
        if(isset($map['Preset'])){
            $model->preset = $map['Preset'];
        }
        if(isset($map['ScanMode'])){
            $model->scanMode = $map['ScanMode'];
        }
        if(isset($map['PixFmt'])){
            $model->pixFmt = $map['PixFmt'];
        }
        if(isset($map['Remove'])){
            $model->remove = $map['Remove'];
        }
        if(isset($map['Crop'])){
            $model->crop = $map['Crop'];
        }
        if(isset($map['Pad'])){
            $model->pad = $map['Pad'];
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
     * @description crf
     * @var string
     */
    public $crf;

    /**
     * @description width
     * @var string
     */
    public $width;

    /**
     * @description height
     * @var string
     */
    public $height;

    /**
     * @description fps
     * @var string
     */
    public $fps;

    /**
     * @description gop
     * @var string
     */
    public $gop;

    /**
     * @description preset
     * @var string
     */
    public $preset;

    /**
     * @description scanMode
     * @var string
     */
    public $scanMode;

    /**
     * @description pixFmt
     * @var string
     */
    public $pixFmt;

    /**
     * @description remove
     * @var string
     */
    public $remove;

    /**
     * @description crop
     * @var string
     */
    public $crop;

    /**
     * @description pad
     * @var string
     */
    public $pad;

}
