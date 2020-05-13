<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\AddMediaTagResponse\mediaInfoDTO;

class AddMediaTagResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaInfoDTO' => 'MediaInfoDTO',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaInfoDTO', $this->mediaInfoDTO, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaInfoDTO'] = null !== $this->mediaInfoDTO ? $this->mediaInfoDTO->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return AddMediaTagResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaInfoDTO'])){
            $model->mediaInfoDTO = mediaInfoDTO::fromMap($map['MediaInfoDTO']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaInfoDTO
     * @var AddMediaTagResponse.mediaInfoDTO
     */
    public $mediaInfoDTO;

}
