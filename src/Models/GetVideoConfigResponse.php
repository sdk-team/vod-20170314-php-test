<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class GetVideoConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'downloadSwitch' => 'DownloadSwitch',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('downloadSwitch', $this->downloadSwitch, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DownloadSwitch'] = $this->downloadSwitch;
        return $res;
    }
    /**
     * @param array $map
     * @return GetVideoConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DownloadSwitch'])){
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.downloadSwitchDTO.downloadSwitch
     * @var string
     */
    public $downloadSwitch;

}
