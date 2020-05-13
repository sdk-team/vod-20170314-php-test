<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAudioTemplateResponse\audio;

class UpdateAudioTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'audio' => 'Audio',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('audio', $this->audio, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateAudioTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Audio'])){
            $model->audio = audio::fromMap($map['Audio']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.audio
     * @var UpdateAudioTemplateResponse.audio
     */
    public $audio;

}
