<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse\registeredPerson;
use AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse\registeredPerson\faces;
use AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse\nonExistImageIds;

class FaceRegistrationResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'registeredPerson' => 'RegisteredPerson',
        'nonExistImageIds' => 'NonExistImageIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('registeredPerson', $this->registeredPerson, true);
        Model::validateRequired('nonExistImageIds', $this->nonExistImageIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RegisteredPerson'] = null !== $this->registeredPerson ? $this->registeredPerson->toMap() : null;
        $res['NonExistImageIds'] = null !== $this->nonExistImageIds ? $this->nonExistImageIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return FaceRegistrationResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RegisteredPerson'])){
            $model->registeredPerson = registeredPerson::fromMap($map['RegisteredPerson']);
        }
        if(isset($map['NonExistImageIds'])){
            $model->nonExistImageIds = nonExistImageIds::fromMap($map['NonExistImageIds']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.personDTO
     * @var FaceRegistrationResponse.registeredPerson
     */
    public $registeredPerson;

    /**
     * @description data.nonExistImageIds
     * @var FaceRegistrationResponse.nonExistImageIds
     */
    public $nonExistImageIds;

}
