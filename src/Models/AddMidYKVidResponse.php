<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\AddMidYKVidResponse\midYKVidDO;

class AddMidYKVidResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'midYKVidDO' => 'MidYKVidDO',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('midYKVidDO', $this->midYKVidDO, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MidYKVidDO'] = null !== $this->midYKVidDO ? $this->midYKVidDO->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return AddMidYKVidResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MidYKVidDO'])){
            $model->midYKVidDO = midYKVidDO::fromMap($map['MidYKVidDO']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.midYKVidDO
     * @var AddMidYKVidResponse.midYKVidDO
     */
    public $midYKVidDO;

}
