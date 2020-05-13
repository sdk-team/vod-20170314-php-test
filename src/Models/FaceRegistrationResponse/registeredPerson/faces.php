<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse\registeredPerson;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse\registeredPerson\faces\face;

class faces extends Model {
    protected $_name = [
        'face' => 'Face',
    ];
    public function validate() {
        Model::validateRequired('face', $this->face, true);
    }
    public function toMap() {
        $res = [];
        $res['Face'] = [];
        if(null !== $this->face && is_array($this->face)){
            $n = 0;
            foreach($this->face as $item){
                $res['Face'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return faces
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Face'])){
            if(!empty($map['Face'])){
                $model->face = [];
                $n = 0;
                foreach($map['Face'] as $item) {
                    $model->face[$n++] = null !== $item ? face::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Face
     * @var array
     */
    public $face;

}
