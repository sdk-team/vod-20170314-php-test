<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse\MTSStatisBySpecList;

class GetMTSStatisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'MTSStatisBySpecList' => 'MTSStatisBySpecList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('MTSStatisBySpecList', $this->MTSStatisBySpecList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MTSStatisBySpecList'] = null !== $this->MTSStatisBySpecList ? $this->MTSStatisBySpecList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMTSStatisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MTSStatisBySpecList'])){
            $model->MTSStatisBySpecList = MTSStatisBySpecList::fromMap($map['MTSStatisBySpecList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mtsStatisBySpecDOs
     * @var GetMTSStatisResponse.MTSStatisBySpecList
     */
    public $MTSStatisBySpecList;

}
