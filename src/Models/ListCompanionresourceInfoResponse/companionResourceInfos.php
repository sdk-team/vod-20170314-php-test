<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListCompanionresourceInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListCompanionresourceInfoResponse\companionResourceInfos\companionResourceInfo;

class companionResourceInfos extends Model {
    protected $_name = [
        'companionResourceInfo' => 'CompanionResourceInfo',
    ];
    public function validate() {
        Model::validateRequired('companionResourceInfo', $this->companionResourceInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['CompanionResourceInfo'] = [];
        if(null !== $this->companionResourceInfo && is_array($this->companionResourceInfo)){
            $n = 0;
            foreach($this->companionResourceInfo as $item){
                $res['CompanionResourceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return companionResourceInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CompanionResourceInfo'])){
            if(!empty($map['CompanionResourceInfo'])){
                $model->companionResourceInfo = [];
                $n = 0;
                foreach($map['CompanionResourceInfo'] as $item) {
                    $model->companionResourceInfo[$n++] = null !== $item ? companionResourceInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description CompanionResourceInfo
     * @var array
     */
    public $companionResourceInfo;

}
