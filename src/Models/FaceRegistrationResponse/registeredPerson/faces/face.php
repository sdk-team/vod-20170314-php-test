<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse\registeredPerson\faces;

use AlibabaCloud\Tea\Model;

class face extends Model {
    protected $_name = [
        'imageId' => 'ImageId',
        'quality' => 'Quality',
        'target' => 'Target',
    ];
    public function validate() {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('quality', $this->quality, true);
        Model::validateRequired('target', $this->target, true);
    }
    public function toMap() {
        $res = [];
        $res['ImageId'] = $this->imageId;
        $res['Quality'] = $this->quality;
        $res['Target'] = $this->target;
        return $res;
    }
    /**
     * @param array $map
     * @return face
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ImageId'])){
            $model->imageId = $map['ImageId'];
        }
        if(isset($map['Quality'])){
            $model->quality = $map['Quality'];
        }
        if(isset($map['Target'])){
            $model->target = $map['Target'];
        }
        return $model;
    }
    /**
     * @description imageId
     * @var string
     */
    public $imageId;

    /**
     * @description quality
     * @var string
     */
    public $quality;

    /**
     * @description target
     * @var string
     */
    public $target;

}
