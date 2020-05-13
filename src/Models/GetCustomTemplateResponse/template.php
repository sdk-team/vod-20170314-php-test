<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\template\video;
use AlibabaCloud\SDK\vod\V20170314\Models\template\audio;
use AlibabaCloud\SDK\vod\V20170314\Models\template\container;
use AlibabaCloud\SDK\vod\V20170314\Models\template\transConfig;
use AlibabaCloud\SDK\vod\V20170314\Models\template\muxConfig;
use AlibabaCloud\SDK\vod\V20170314\Models\template\muxConfig\segment;

class template extends Model {
    protected $_name = [
        'definition' => 'Definition',
        'condition' => 'Condition',
        'templateId' => 'TemplateId',
        'status' => 'Status',
        'userWaterMark' => 'UserWaterMark',
        'narrowBand' => 'NarrowBand',
        'encrypt' => 'Encrypt',
        'video' => 'Video',
        'audio' => 'Audio',
        'container' => 'Container',
        'transConfig' => 'TransConfig',
        'muxConfig' => 'MuxConfig',
    ];
    public function validate() {
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('condition', $this->condition, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('userWaterMark', $this->userWaterMark, true);
        Model::validateRequired('narrowBand', $this->narrowBand, true);
        Model::validateRequired('encrypt', $this->encrypt, true);
        Model::validateRequired('video', $this->video, true);
        Model::validateRequired('audio', $this->audio, true);
        Model::validateRequired('container', $this->container, true);
        Model::validateRequired('transConfig', $this->transConfig, true);
        Model::validateRequired('muxConfig', $this->muxConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['Definition'] = $this->definition;
        $res['Condition'] = $this->condition;
        $res['TemplateId'] = $this->templateId;
        $res['Status'] = $this->status;
        $res['UserWaterMark'] = $this->userWaterMark;
        $res['NarrowBand'] = $this->narrowBand;
        $res['Encrypt'] = $this->encrypt;
        $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
        $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toMap() : null;
        $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return template
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Definition'])){
            $model->definition = $map['Definition'];
        }
        if(isset($map['Condition'])){
            $model->condition = $map['Condition'];
        }
        if(isset($map['TemplateId'])){
            $model->templateId = $map['TemplateId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['UserWaterMark'])){
            $model->userWaterMark = $map['UserWaterMark'];
        }
        if(isset($map['NarrowBand'])){
            $model->narrowBand = $map['NarrowBand'];
        }
        if(isset($map['Encrypt'])){
            $model->encrypt = $map['Encrypt'];
        }
        if(isset($map['Video'])){
            $model->video = video::fromMap($map['Video']);
        }
        if(isset($map['Audio'])){
            $model->audio = audio::fromMap($map['Audio']);
        }
        if(isset($map['Container'])){
            $model->container = container::fromMap($map['Container']);
        }
        if(isset($map['TransConfig'])){
            $model->transConfig = transConfig::fromMap($map['TransConfig']);
        }
        if(isset($map['MuxConfig'])){
            $model->muxConfig = muxConfig::fromMap($map['MuxConfig']);
        }
        return $model;
    }
    /**
     * @description definition
     * @var string
     */
    public $definition;

    /**
     * @description transcodeCondition
     * @var string
     */
    public $condition;

    /**
     * @description templateId
     * @var string
     */
    public $templateId;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description waterMark
     * @var string
     */
    public $userWaterMark;

    /**
     * @description narrowBand
     * @var string
     */
    public $narrowBand;

    /**
     * @description encrypt
     * @var string
     */
    public $encrypt;

    /**
     * @description video
     * @var template.video
     */
    public $video;

    /**
     * @description audio
     * @var template.audio
     */
    public $audio;

    /**
     * @description container
     * @var template.container
     */
    public $container;

    /**
     * @description transConfig
     * @var template.transConfig
     */
    public $transConfig;

    /**
     * @description muxConfig
     * @var template.muxConfig
     */
    public $muxConfig;

}
