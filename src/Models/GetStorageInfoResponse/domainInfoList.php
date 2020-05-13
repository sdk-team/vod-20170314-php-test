<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetStorageInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageInfoResponse\domainInfoList\domainInfo;

class domainInfoList extends Model {
    protected $_name = [
        'domainInfo' => 'DomainInfo',
    ];
    public function validate() {
        Model::validateRequired('domainInfo', $this->domainInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainInfo'] = [];
        if(null !== $this->domainInfo && is_array($this->domainInfo)){
            $n = 0;
            foreach($this->domainInfo as $item){
                $res['DomainInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return domainInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainInfo'])){
            if(!empty($map['DomainInfo'])){
                $model->domainInfo = [];
                $n = 0;
                foreach($map['DomainInfo'] as $item) {
                    $model->domainInfo[$n++] = null !== $item ? domainInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DomainInfo
     * @var array
     */
    public $domainInfo;

}
