<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\UpdateWatermarkResponse;

use AlibabaCloud\Tea\Model;

class watermark extends Model {
    protected $_name = [
        'createTime' => 'CreateTime',
        'horizontalOffset' => 'HorizontalOffset',
        'isDefault' => 'IsDefault',
        'position' => 'Position',
        'watermarkId' => 'WatermarkId',
        'verticalOffset' => 'VerticalOffset',
        'width' => 'Width',
        'height' => 'Height',
        'url' => 'Url',
        'videoHeight' => 'VideoHeight',
        'videoWidth' => 'VideoWidth',
        'screenMode' => 'ScreenMode',
        'name' => 'Name',
    ];
    public function validate() {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('horizontalOffset', $this->horizontalOffset, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('position', $this->position, true);
        Model::validateRequired('watermarkId', $this->watermarkId, true);
        Model::validateRequired('verticalOffset', $this->verticalOffset, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('videoHeight', $this->videoHeight, true);
        Model::validateRequired('videoWidth', $this->videoWidth, true);
        Model::validateRequired('screenMode', $this->screenMode, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        $res['CreateTime'] = $this->createTime;
        $res['HorizontalOffset'] = $this->horizontalOffset;
        $res['IsDefault'] = $this->isDefault;
        $res['Position'] = $this->position;
        $res['WatermarkId'] = $this->watermarkId;
        $res['VerticalOffset'] = $this->verticalOffset;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['Url'] = $this->url;
        $res['VideoHeight'] = $this->videoHeight;
        $res['VideoWidth'] = $this->videoWidth;
        $res['ScreenMode'] = $this->screenMode;
        $res['Name'] = $this->name;
        return $res;
    }
    /**
     * @param array $map
     * @return watermark
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['HorizontalOffset'])){
            $model->horizontalOffset = $map['HorizontalOffset'];
        }
        if(isset($map['IsDefault'])){
            $model->isDefault = $map['IsDefault'];
        }
        if(isset($map['Position'])){
            $model->position = $map['Position'];
        }
        if(isset($map['WatermarkId'])){
            $model->watermarkId = $map['WatermarkId'];
        }
        if(isset($map['VerticalOffset'])){
            $model->verticalOffset = $map['VerticalOffset'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
        }
        if(isset($map['VideoHeight'])){
            $model->videoHeight = $map['VideoHeight'];
        }
        if(isset($map['VideoWidth'])){
            $model->videoWidth = $map['VideoWidth'];
        }
        if(isset($map['ScreenMode'])){
            $model->screenMode = $map['ScreenMode'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        return $model;
    }
    /**
     * @description createTime
     * @var integer
     */
    public $createTime;

    /**
     * @description dx
     * @var string
     */
    public $horizontalOffset;

    /**
     * @description isDefault
     * @var string
     */
    public $isDefault;

    /**
     * @description referpos
     * @var string
     */
    public $position;

    /**
     * @description watertempId
     * @var string
     */
    public $watermarkId;

    /**
     * @description dy
     * @var string
     */
    public $verticalOffset;

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
     * @description url
     * @var string
     */
    public $url;

    /**
     * @description videoHeight
     * @var integer
     */
    public $videoHeight;

    /**
     * @description videoWidth
     * @var integer
     */
    public $videoWidth;

    /**
     * @description externalScreenMode
     * @var string
     */
    public $screenMode;

    /**
     * @description name
     * @var string
     */
    public $name;

}
