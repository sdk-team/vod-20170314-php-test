<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserResourcePackageResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserResourcePackageResponse\resourcePackageInfos\resourcePackageInfo;

class resourcePackageInfos extends Model {
    protected $_name = [
        'resourcePackageInfo' => 'ResourcePackageInfo',
    ];
    public function validate() {
        Model::validateRequired('resourcePackageInfo', $this->resourcePackageInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourcePackageInfo'] = [];
        if(null !== $this->resourcePackageInfo && is_array($this->resourcePackageInfo)){
            $n = 0;
            foreach($this->resourcePackageInfo as $item){
                $res['ResourcePackageInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resourcePackageInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourcePackageInfo'])){
            if(!empty($map['ResourcePackageInfo'])){
                $model->resourcePackageInfo = [];
                $n = 0;
                foreach($map['ResourcePackageInfo'] as $item) {
                    $model->resourcePackageInfo[$n++] = null !== $item ? resourcePackageInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ResourcePackageInfo
     * @var array
     */
    public $resourcePackageInfo;

}
