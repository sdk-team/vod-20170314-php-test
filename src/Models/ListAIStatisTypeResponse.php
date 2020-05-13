<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class ListAIStatisTypeResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'types' => 'Types',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('types', $this->types, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Types'] = $this->types;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAIStatisTypeResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Types'])){
            $model->types = $map['Types'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.types
     * @var string
     */
    public $types;

}
