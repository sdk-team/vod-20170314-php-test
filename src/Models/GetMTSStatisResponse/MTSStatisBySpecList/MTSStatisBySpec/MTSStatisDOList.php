<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse\MTSStatisBySpecList\MTSStatisBySpec;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse\MTSStatisBySpecList\MTSStatisBySpec\MTSStatisDOList\MTSStatisDO;

class MTSStatisDOList extends Model {
    protected $_name = [
        'MTSStatisDO' => 'MTSStatisDO',
    ];
    public function validate() {
        Model::validateRequired('MTSStatisDO', $this->MTSStatisDO, true);
    }
    public function toMap() {
        $res = [];
        $res['MTSStatisDO'] = [];
        if(null !== $this->MTSStatisDO && is_array($this->MTSStatisDO)){
            $n = 0;
            foreach($this->MTSStatisDO as $item){
                $res['MTSStatisDO'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return MTSStatisDOList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MTSStatisDO'])){
            if(!empty($map['MTSStatisDO'])){
                $model->MTSStatisDO = [];
                $n = 0;
                foreach($map['MTSStatisDO'] as $item) {
                    $model->MTSStatisDO[$n++] = null !== $item ? MTSStatisDO::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description MTSStatisDO
     * @var array
     */
    public $MTSStatisDO;

}
