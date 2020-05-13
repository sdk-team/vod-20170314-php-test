<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\AddMidYKVidResponse;

use AlibabaCloud\Tea\Model;

class midYKVidDO extends Model {
    protected $_name = [
        'mediaId' => 'MediaId',
        'YKCloudVid' => 'YKCloudVid',
        'YKVideoId' => 'YKVideoId',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('YKCloudVid', $this->YKCloudVid, true);
        Model::validateRequired('YKVideoId', $this->YKVideoId, true);
    }
    public function toMap() {
        $res = [];
        $res['MediaId'] = $this->mediaId;
        $res['YKCloudVid'] = $this->YKCloudVid;
        $res['YKVideoId'] = $this->YKVideoId;
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
        if(isset($map['YKCloudVid'])){
            $model->YKCloudVid = $map['YKCloudVid'];
        }
        if(isset($map['YKVideoId'])){
            $model->YKVideoId = $map['YKVideoId'];
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
    public $YKCloudVid;

    /**
     * @description ykVideoId
     * @var string
     */
    public $YKVideoId;

}
