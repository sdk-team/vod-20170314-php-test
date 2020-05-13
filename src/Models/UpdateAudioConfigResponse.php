<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAudioConfigResponse\configs;

class UpdateAudioConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'configs' => 'Configs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('configs', $this->configs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Configs'] = null !== $this->configs ? $this->configs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateAudioConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Configs'])){
            $model->configs = configs::fromMap($map['Configs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.configs
     * @var UpdateAudioConfigResponse.configs
     */
    public $configs;

}
