<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\SearchMediaInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\SearchMediaInfoResponse\videoList\mediaInfo;

class videoList extends Model {
    protected $_name = [
        'mediaInfo' => 'MediaInfo',
    ];
    public function validate() {
        Model::validateRequired('mediaInfo', $this->mediaInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['MediaInfo'] = [];
        if(null !== $this->mediaInfo && is_array($this->mediaInfo)){
            $n = 0;
            foreach($this->mediaInfo as $item){
                $res['MediaInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return videoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MediaInfo'])){
            if(!empty($map['MediaInfo'])){
                $model->mediaInfo = [];
                $n = 0;
                foreach($map['MediaInfo'] as $item) {
                    $model->mediaInfo[$n++] = null !== $item ? mediaInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description MediaInfo
     * @var array
     */
    public $mediaInfo;

}
