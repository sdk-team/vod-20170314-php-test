<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoDNAResultResponse\AIVideoDNAResult;

class GetVideoDNAResultResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIVideoDNAResult' => 'AIVideoDNAResult',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIVideoDNAResult', $this->AIVideoDNAResult, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIVideoDNAResult'] = null !== $this->AIVideoDNAResult ? $this->AIVideoDNAResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetVideoDNAResultResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIVideoDNAResult'])){
            $model->AIVideoDNAResult = AIVideoDNAResult::fromMap($map['AIVideoDNAResult']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.resultDTO
     * @var GetVideoDNAResultResponse.AIVideoDNAResult
     */
    public $AIVideoDNAResult;

}
