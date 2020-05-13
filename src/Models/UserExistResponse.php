<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class UserExistResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'userState' => 'userState',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('userState', $this->userState, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['userState'] = $this->userState;
        return $res;
    }
    /**
     * @param array $map
     * @return UserExistResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['userState'])){
            $model->userState = $map['userState'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.userState
     * @var integer
     */
    public $userState;

}
