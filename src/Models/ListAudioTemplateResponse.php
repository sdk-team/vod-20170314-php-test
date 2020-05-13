<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAudioTemplateResponse\audios;

class ListAudioTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'audios' => 'Audios',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('audios', $this->audios, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Audios'] = null !== $this->audios ? $this->audios->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAudioTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Audios'])){
            $model->audios = audios::fromMap($map['Audios']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.audios
     * @var ListAudioTemplateResponse.audios
     */
    public $audios;

}
