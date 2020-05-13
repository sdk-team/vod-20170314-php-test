<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse\MTSStatisBySpecList\MTSStatisBySpec;

class MTSStatisBySpecList extends Model {
    protected $_name = [
        'MTSStatisBySpec' => 'MTSStatisBySpec',
    ];
    public function validate() {
        Model::validateRequired('MTSStatisBySpec', $this->MTSStatisBySpec, true);
    }
    public function toMap() {
        $res = [];
        $res['MTSStatisBySpec'] = [];
        if(null !== $this->MTSStatisBySpec && is_array($this->MTSStatisBySpec)){
            $n = 0;
            foreach($this->MTSStatisBySpec as $item){
                $res['MTSStatisBySpec'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return MTSStatisBySpecList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MTSStatisBySpec'])){
            if(!empty($map['MTSStatisBySpec'])){
                $model->MTSStatisBySpec = [];
                $n = 0;
                foreach($map['MTSStatisBySpec'] as $item) {
                    $model->MTSStatisBySpec[$n++] = null !== $item ? MTSStatisBySpec::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description MTSStatisBySpec
     * @var array
     */
    public $MTSStatisBySpec;

}
