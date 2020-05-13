<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetDomainListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetDomainListResponse\domainDTOList\domainDTO;

class domainDTOList extends Model {
    protected $_name = [
        'domainDTO' => 'DomainDTO',
    ];
    public function validate() {
        Model::validateRequired('domainDTO', $this->domainDTO, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainDTO'] = [];
        if(null !== $this->domainDTO && is_array($this->domainDTO)){
            $n = 0;
            foreach($this->domainDTO as $item){
                $res['DomainDTO'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return domainDTOList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainDTO'])){
            if(!empty($map['DomainDTO'])){
                $model->domainDTO = [];
                $n = 0;
                foreach($map['DomainDTO'] as $item) {
                    $model->domainDTO[$n++] = null !== $item ? domainDTO::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DomainDTO
     * @var array
     */
    public $domainDTO;

}
