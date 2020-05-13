<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse\playStatisByPlatformDOs;

class GetPlayStatisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'playStatisByPlatformDOs' => 'PlayStatisByPlatformDOs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('playStatisByPlatformDOs', $this->playStatisByPlatformDOs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PlayStatisByPlatformDOs'] = null !== $this->playStatisByPlatformDOs ? $this->playStatisByPlatformDOs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPlayStatisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PlayStatisByPlatformDOs'])){
            $model->playStatisByPlatformDOs = playStatisByPlatformDOs::fromMap($map['PlayStatisByPlatformDOs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.playStatisByPlatformDOs
     * @var GetPlayStatisResponse.playStatisByPlatformDOs
     */
    public $playStatisByPlatformDOs;

}
