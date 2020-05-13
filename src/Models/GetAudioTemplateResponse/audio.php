<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetAudioTemplateResponse;

use AlibabaCloud\Tea\Model;

class audio extends Model {
    protected $_name = [
        'templateId' => 'TemplateId',
        'codec' => 'Codec',
        'bitrate' => 'Bitrate',
        'channeles' => 'Channeles',
        'remove' => 'Remove',
        'name' => 'Name',
        'format' => 'Format',
        'status' => 'Status',
        'type' => 'Type',
        'isDefault' => 'IsDefault',
    ];
    public function validate() {
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('codec', $this->codec, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('channeles', $this->channeles, true);
        Model::validateRequired('remove', $this->remove, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
    }
    public function toMap() {
        $res = [];
        $res['TemplateId'] = $this->templateId;
        $res['Codec'] = $this->codec;
        $res['Bitrate'] = $this->bitrate;
        $res['Channeles'] = $this->channeles;
        $res['Remove'] = $this->remove;
        $res['Name'] = $this->name;
        $res['Format'] = $this->format;
        $res['Status'] = $this->status;
        $res['Type'] = $this->type;
        $res['IsDefault'] = $this->isDefault;
        return $res;
    }
    /**
     * @param array $map
     * @return audio
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TemplateId'])){
            $model->templateId = $map['TemplateId'];
        }
        if(isset($map['Codec'])){
            $model->codec = $map['Codec'];
        }
        if(isset($map['Bitrate'])){
            $model->bitrate = $map['Bitrate'];
        }
        if(isset($map['Channeles'])){
            $model->channeles = $map['Channeles'];
        }
        if(isset($map['Remove'])){
            $model->remove = $map['Remove'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Format'])){
            $model->format = $map['Format'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['IsDefault'])){
            $model->isDefault = $map['IsDefault'];
        }
        return $model;
    }
    /**
     * @description templateId
     * @var string
     */
    public $templateId;

    /**
     * @description codec
     * @var string
     */
    public $codec;

    /**
     * @description bitrate
     * @var string
     */
    public $bitrate;

    /**
     * @description mapChannel
     * @var string
     */
    public $channeles;

    /**
     * @description mapRemove
     * @var string
     */
    public $remove;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description format
     * @var string
     */
    public $format;

    /**
     * @description mapStatus
     * @var string
     */
    public $status;

    /**
     * @description mapType
     * @var string
     */
    public $type;

    /**
     * @description mapPreset
     * @var string
     */
    public $isDefault;

}
