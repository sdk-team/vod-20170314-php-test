<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomTemplateRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'groupId' => 'GroupId',
        'video' => 'Video',
        'audio' => 'Audio',
        'transConfig' => 'TransConfig',
        'muxConfig' => 'MuxConfig',
        'container' => 'Container',
        'definition' => 'Definition',
        'useWaterMark' => 'UseWaterMark',
        'encrypt' => 'Encrypt',
        'condition' => 'Condition',
        'templateId' => 'TemplateId',
        'narrowBand' => 'NarrowBand',
    ];
    public function validate() {
        Model::validateRequired('video', $this->video, true);
        Model::validateRequired('audio', $this->audio, true);
        Model::validateRequired('container', $this->container, true);
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('templateId', $this->templateId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['GroupId'] = $this->groupId;
        $res['Video'] = $this->video;
        $res['Audio'] = $this->audio;
        $res['TransConfig'] = $this->transConfig;
        $res['MuxConfig'] = $this->muxConfig;
        $res['Container'] = $this->container;
        $res['Definition'] = $this->definition;
        $res['UseWaterMark'] = $this->useWaterMark;
        $res['Encrypt'] = $this->encrypt;
        $res['Condition'] = $this->condition;
        $res['TemplateId'] = $this->templateId;
        $res['NarrowBand'] = $this->narrowBand;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateCustomTemplateRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['Video'])){
            $model->video = $map['Video'];
        }
        if(isset($map['Audio'])){
            $model->audio = $map['Audio'];
        }
        if(isset($map['TransConfig'])){
            $model->transConfig = $map['TransConfig'];
        }
        if(isset($map['MuxConfig'])){
            $model->muxConfig = $map['MuxConfig'];
        }
        if(isset($map['Container'])){
            $model->container = $map['Container'];
        }
        if(isset($map['Definition'])){
            $model->definition = $map['Definition'];
        }
        if(isset($map['UseWaterMark'])){
            $model->useWaterMark = $map['UseWaterMark'];
        }
        if(isset($map['Encrypt'])){
            $model->encrypt = $map['Encrypt'];
        }
        if(isset($map['Condition'])){
            $model->condition = $map['Condition'];
        }
        if(isset($map['TemplateId'])){
            $model->templateId = $map['TemplateId'];
        }
        if(isset($map['NarrowBand'])){
            $model->narrowBand = $map['NarrowBand'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description groupId
     * @var string
     */
    public $groupId;

    /**
     * @description video
     * @var string
     */
    public $video;

    /**
     * @description audio
     * @var string
     */
    public $audio;

    /**
     * @description transConfig
     * @var string
     */
    public $transConfig;

    /**
     * @description muxConfig
     * @var string
     */
    public $muxConfig;

    /**
     * @description container
     * @var string
     */
    public $container;

    /**
     * @description definition
     * @var string
     */
    public $definition;

    /**
     * @description useWaterMark
     * @var string
     */
    public $useWaterMark;

    /**
     * @description encrypt
     * @var string
     */
    public $encrypt;

    /**
     * @description templateCondition
     * @var string
     */
    public $condition;

    /**
     * @description templateId
     * @var string
     */
    public $templateId;

    /**
     * @description narrowBand
     * @var string
     */
    public $narrowBand;

}
