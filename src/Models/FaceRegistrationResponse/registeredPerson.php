<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\registeredPerson\faces;

class registeredPerson extends Model {
    protected $_name = [
        'personId' => 'PersonId',
        'personName' => 'PersonName',
        'faces' => 'Faces',
    ];
    public function validate() {
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('personName', $this->personName, true);
        Model::validateRequired('faces', $this->faces, true);
    }
    public function toMap() {
        $res = [];
        $res['PersonId'] = $this->personId;
        $res['PersonName'] = $this->personName;
        $res['Faces'] = null !== $this->faces ? $this->faces->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return registeredPerson
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PersonId'])){
            $model->personId = $map['PersonId'];
        }
        if(isset($map['PersonName'])){
            $model->personName = $map['PersonName'];
        }
        if(isset($map['Faces'])){
            $model->faces = faces::fromMap($map['Faces']);
        }
        return $model;
    }
    /**
     * @description personId
     * @var string
     */
    public $personId;

    /**
     * @description personName
     * @var string
     */
    public $personName;

    /**
     * @description faceDTOs
     * @var registeredPerson.faces
     */
    public $faces;

}
