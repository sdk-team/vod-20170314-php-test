<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMidYKVidResponse;

use AlibabaCloud\Tea\Model;

class midYKVidDO extends Model {
    protected $_name = [
        'mediaId' => 'MediaId',
        'ykVid' => 'YkVid',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('ykVid', $this->ykVid, true);
    }
    public function toMap() {
        $res = [];
        $res['MediaId'] = $this->mediaId;
        $res['YkVid'] = $this->ykVid;
        return $res;
    }
    /**
     * @param array $map
     * @return midYKVidDO
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['YkVid'])){
            $model->ykVid = $map['YkVid'];
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description ykVid
     * @var string
     */
    public $ykVid;

}
